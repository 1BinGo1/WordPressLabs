<?php
    require_once get_template_directory() . '/lab3/vendor/autoload.php';
    use WideImage\WideImage;
    global $image, $font, $color;

    function filters(){
        global $image;
        if (!empty($_POST['flip'])){
            $image = $image->flip();
        }
        if (!empty($_POST['noise'])){
            $image = $image->addNoise(300, 'mono');
        }
        if (!empty($_POST['filter'])){
            $image = $image->applyFilter(IMG_FILTER_MEAN_REMOVAL);
        }
        if (!empty($_POST['unsharp'])){
            $image = $image->unsharp(300,3,2);
        }
        if (!empty($_POST['mirror'])){
            $image = $image->mirror();
        }
        if (!empty($_POST['rotate'])){
            $image = $image->rotate(45);
        }
        if (!empty($_POST['corner'])){
            $color = $image->allocateColor(255, 0, 0);
            $image = $image->roundCorners(30,$color, 2);
        }
        if (!empty($_POST['grayscale'])){
            $image = $image->asGrayscale();
        }
    }

    function editParams(){
        global $image, $font, $color;
        if (!empty($_POST['color'])){
            $dec = hexdec((string)$_POST['color']);
            $rgb = array(
                'red'   => 0xFF & ($dec >> 0x10),
                'green' => 0xFF & ($dec >> 0x8),
                'blue'  => 0xFF & $dec
            );
            $color = $image->allocateColor($rgb['red'], $rgb['green'], $rgb['blue']);
        }
        else{
            $color = $image->allocateColor(0, 0, 0);
        }
        if (!empty($_POST['font'])){
            $font = get_template_directory() . "/lab3/fonts/" . $_POST['font'] . ".ttf";
        }
        else{
            $font = get_template_directory() . "/lab3/fonts/Samson.ttf";
        }
    }
	
	function reduceImage(){
        global $image;
        if ($image->getWidth() > 2480)
            $width = 1500;
        else{
            $width = $image->getWidth();
        }
        if ($image->getHeight() > 3500)
            $height = 1500;
        else{
            $height = $image->getHeight();
        }
        $image = $image->resize($width, $height);
    }

    $img = get_template_directory() . "/lab3/images/" . $_FILES['image-main']['name'];
    move_uploaded_file($_FILES['image-main']['tmp_name'], $img);

    if (!empty($_POST['watermark-text'])){
        $font = '';
        $color = '';
        $image = WideImage::load($img);
		reduceImage();
        $canvas = $image->getCanvas();
        editParams();
        $canvas->useFont($font , 20, $color);
        $watermark_text = wordwrap(trim(htmlspecialchars($_POST['watermark-text'])), (int)($image->getWidth() / 10), "\n", true) ?? '';
        $text = wordwrap(trim(htmlspecialchars($_POST['message-main'])), (int)($image->getWidth() / 10), "\n", true) ?? '';
        $canvas->writeText('left', 'bottom', $watermark_text);
        $canvas->writeText('left', 'top', $text);
        filters();
        $image->saveToFile($img);
    }

    if (!empty($_FILES['watermark-image']['name'])){
        $watermark_image = get_template_directory() .  "/lab3/images/" . $_FILES['watermark-image']['name'];
        move_uploaded_file($_FILES['watermark-image']['tmp_name'], $watermark_image);
        $image = WideImage::load($img);
		reduceImage();
        $watermark = WideImage::load($watermark_image)->resize(100,100);
        $new = $image->merge($watermark, 'right', 'bottom', 100);
        $new->saveToFile($img);
        $image = WideImage::load($img);
        $canvas = $image->getCanvas();
        $font = '';
        $color = '';
        editParams();
        $canvas->useFont($font , 20, $color);
        $text = wordwrap(trim(htmlspecialchars($_POST['message-main'])), (int)($image->getWidth() / 10), "\n", true) ?? '';
        $canvas->writeText('left', 'top', $text);
        filters();
        $image->saveToFile($img);
    }

    require_once get_template_directory() .  '/lab3/php/cp.php';
    createPdf($_FILES['image-main']['name']);

    $files = [];
    $files[0] = [];
    $files[0][0] = mb_substr($_FILES['image-main']['name'], 0, strpos($_FILES['image-main']['name'], "."));
    $files[0][1] = $_FILES['image-main']['name'];

    if (!empty($_FILES['watermark-image']['name'])){
        $files[1] = [];
        $files[1][0] = mb_substr($_FILES['watermark-image']['name'], 0, strpos($_FILES['watermark-image']['name'], "."));
        $files[1][1] = $_FILES['watermark-image']['name'];
    }

?>

<?php echo json_encode($files); ?>
