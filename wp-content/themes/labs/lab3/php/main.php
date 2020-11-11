<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{$items.title}</title>
    <link rel="stylesheet" href="{$items.exit_block}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <link rel="stylesheet" href="{$items.css_main}">
    <link rel="shortcut icon" href="{$items.icon}" type="image/x-icon">
</head>
<body>

<div class="exit-block">
    <a href="http://labs-wordpress/">Вернуться назад</a>
</div>

<div class="main">
    <div class="container">

        <form action="" method="post" id="form-create-pdf">
            <br>
            <div class="mb-3">
                <label for="image-main">{$items.image_main}</label><br>
                <input type="file" name="image-main" class="form-control-file" id="image-main" accept=".png, .jpg, .jpeg" required>
            </div>

            <div class="mb-3">
                <button type="button" name="open-wt-text" class="btn btn-primary">{$items.open_wt_text}</button>
                <button type="button" name="open-wt-image" class="btn btn-primary">{$items.open_wt_image}</button>
            </div>

            <div class="mb-3 wt-text watermark-hide">
                <label for="watermark-text">{$items.watermark_text}</label>
                <input type="text" name="watermark-text" class="form-control" id="watermark-text">
            </div>

            <div class="mb-3 wt-image watermark-hide">
                <label for="watermark-image">{$items.watermark_image}</label><br>
                <input type="file" name="watermark-image" class="form-control-file" id="watermark-image" accept=".png, .jpg, .jpeg">
            </div>

            <div class="mb-3">
                <label for="message-main">{$items.message_main}</label>
                <textarea name="message-main" class="form-control" id="message-main" required></textarea>
            </div>

            <div class="filters">
                <h1 class="title-filter">{$items.title_filter}</h1>

                <div class="mb-3 col-md-3">
                    <label for="font">{$items.font}</label><br>
                    <select name="font" id="font" class="form-select">
                        {foreach from=$fonts item=font}
                            <option value="{$font}">{$font}</option>
                        {/foreach}
                    </select>
                </div>

                <div class="form-check form-switch">
                    <input name="flip" class="form-check-input" type="checkbox" id="flip">
                    <label class="form-check-label" for="flip">{$items.flip}</label>
                </div>

                <div class="form-check form-switch">
                    <input name="noise" class="form-check-input" type="checkbox" id="noise">
                    <label class="form-check-label" for="noise">{$items.noise}</label>
                </div>

                <div class="form-check form-switch">
                    <input name="filter" class="form-check-input" type="checkbox" id="filter">
                    <label class="form-check-label" for="filter">{$items.filter}</label>
                </div>

                <div class="form-check form-switch">
                    <input name="unsharp" class="form-check-input" type="checkbox" id="unsharp">
                    <label class="form-check-label" for="unsharp">{$items.unsharp}</label>
                </div>

                <div class="form-check form-switch">
                    <input name="mirror" class="form-check-input" type="checkbox" id="mirror">
                    <label class="form-check-label" for="mirror">{$items.mirror}</label>
                </div>

                <div class="form-check form-switch">
                    <input name="rotate" class="form-check-input" type="checkbox" id="rotate">
                    <label class="form-check-label" for="rotate">{$items.rotate}</label>
                </div>

                <div class="form-check form-switch">
                    <input name="corner" class="form-check-input" type="checkbox" id="corner">
                    <label class="form-check-label" for="corner">{$items.corner}</label>
                </div>

                <div class="form-check form-switch">
                    <input name="grayscale" class="form-check-input" type="checkbox" id="grayscale">
                    <label class="form-check-label" for="grayscale">{$items.grayscale}</label>
                </div>

                <br>
                <div class="colorPicker">
                    <label for="color">{$items.color}</label><br>
                    <input type="color" name="color" id="color" class="form-control form-control-color" />
                </div>

            </div>

            <br>
            <button type="submit" name="save-main" class="btn btn-success" id="save-main">{$items.save_main}</button>
        </form>

        <br>
        <div class="result"></div>

    </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
<script src="{$items.js_main}"></script>
</body>
</html>