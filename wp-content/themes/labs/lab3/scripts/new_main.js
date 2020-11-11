let btn_main = document.getElementById('save-main');
let res = document.querySelector('.result');

btn_main.addEventListener('click', function (e){
    e.preventDefault();
    let data = new FormData(document.getElementById('form-create-pdf'));
    data.set('action', 'create_files');
    fetch("/wp-admin/admin-ajax.php", {
        method: "post",
        body: data,
    }).then(
        response => {
            return response.json();
        }
    ).then(
        text => {
            let link = document.createElement('a');
            link.setAttribute('href', "/wp-content/themes/labs/lab3/pdf/" + text[0][0] + ".pdf");
            link.setAttribute('id', 'downloadbtn');
            link.setAttribute('download', "");
            res.innerHTML = '';
            res.append(link);
            link.click();
            removeTmpFiles(text);
        }
    );
});

let wt = document.querySelector('button[name="open-wt-text"]');
let wi =  document.querySelector('button[name="open-wt-image"]');

wt.addEventListener('click', function (){
    document.querySelector('.wt-text').classList.toggle('watermark-hide');
	document.getElementById('watermark-text').value = '';
    document.getElementById('watermark-image').value = '';
    document.querySelector('.wt-image').classList.toggle('watermark-hide', true);
});

wi.addEventListener('click', function (){
    document.querySelector('.wt-image').classList.toggle('watermark-hide');
	document.getElementById('watermark-text').value = '';
    document.getElementById('watermark-image').value = '';
    document.querySelector('.wt-text').classList.toggle('watermark-hide', true);
});

function removeTmpFiles(files){
    let data = new FormData();
    data.set('files', files);
    data.set('action', 'remove_files');
    fetch('/wp-admin/admin-ajax.php', {
        method: "post",
        body: data,
    });
}
