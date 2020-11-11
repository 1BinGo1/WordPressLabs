<?php
/* Smarty version 3.1.36, created on 2020-10-28 09:23:38
  from 'E:\Programs\OpenServer\OSPanel\domains\WordPress\wp-content\themes\labs\lab3\php\main.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f99389ae3fc23_58281184',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0189251201d873f078a6bbcb6dce441ee1fc74d7' => 
    array (
      0 => 'E:\\Programs\\OpenServer\\OSPanel\\domains\\WordPress\\wp-content\\themes\\labs\\lab3\\php\\main.php',
      1 => 1603877014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f99389ae3fc23_58281184 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2228334985f99389adcaa28_50421832';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_smarty_tpl->tpl_vars['items']->value['title'];?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['items']->value['exit_block'];?>
">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['items']->value['css_main'];?>
">
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['items']->value['icon'];?>
" type="image/x-icon">
</head>
<body>

<div class="exit-block">
    <a href="http://wordpress/">Вернуться назад</a>
</div>

<div class="main">
    <div class="container">

        <form action="" method="post" id="form-create-pdf">
            <br>
            <div class="mb-3">
                <label for="image-main"><?php echo $_smarty_tpl->tpl_vars['items']->value['image_main'];?>
</label><br>
                <input type="file" name="image-main" class="form-control-file" id="image-main" accept=".png, .jpg, .jpeg" required>
            </div>

            <div class="mb-3">
                <button type="button" name="open-wt-text" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['items']->value['open_wt_text'];?>
</button>
                <button type="button" name="open-wt-image" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['items']->value['open_wt_image'];?>
</button>
            </div>

            <div class="mb-3 wt-text watermark-hide">
                <label for="watermark-text"><?php echo $_smarty_tpl->tpl_vars['items']->value['watermark_text'];?>
</label>
                <input type="text" name="watermark-text" class="form-control" id="watermark-text">
            </div>

            <div class="mb-3 wt-image watermark-hide">
                <label for="watermark-image"><?php echo $_smarty_tpl->tpl_vars['items']->value['watermark_image'];?>
</label><br>
                <input type="file" name="watermark-image" class="form-control-file" id="watermark-image" accept=".png, .jpg, .jpeg">
            </div>

            <div class="mb-3">
                <label for="message-main"><?php echo $_smarty_tpl->tpl_vars['items']->value['message_main'];?>
</label>
                <textarea name="message-main" class="form-control" id="message-main" required></textarea>
            </div>

            <div class="filters">
                <h1 class="title-filter"><?php echo $_smarty_tpl->tpl_vars['items']->value['title_filter'];?>
</h1>

                <div class="mb-3 col-md-3">
                    <label for="font"><?php echo $_smarty_tpl->tpl_vars['items']->value['font'];?>
</label><br>
                    <select name="font" id="font" class="form-select">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fonts']->value, 'font');
$_smarty_tpl->tpl_vars['font']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['font']->value) {
$_smarty_tpl->tpl_vars['font']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['font']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['font']->value;?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <div class="form-check form-switch">
                    <input name="flip" class="form-check-input" type="checkbox" id="flip">
                    <label class="form-check-label" for="flip"><?php echo $_smarty_tpl->tpl_vars['items']->value['flip'];?>
</label>
                </div>

                <div class="form-check form-switch">
                    <input name="noise" class="form-check-input" type="checkbox" id="noise">
                    <label class="form-check-label" for="noise"><?php echo $_smarty_tpl->tpl_vars['items']->value['noise'];?>
</label>
                </div>

                <div class="form-check form-switch">
                    <input name="filter" class="form-check-input" type="checkbox" id="filter">
                    <label class="form-check-label" for="filter"><?php echo $_smarty_tpl->tpl_vars['items']->value['filter'];?>
</label>
                </div>

                <div class="form-check form-switch">
                    <input name="unsharp" class="form-check-input" type="checkbox" id="unsharp">
                    <label class="form-check-label" for="unsharp"><?php echo $_smarty_tpl->tpl_vars['items']->value['unsharp'];?>
</label>
                </div>

                <div class="form-check form-switch">
                    <input name="mirror" class="form-check-input" type="checkbox" id="mirror">
                    <label class="form-check-label" for="mirror"><?php echo $_smarty_tpl->tpl_vars['items']->value['mirror'];?>
</label>
                </div>

                <div class="form-check form-switch">
                    <input name="rotate" class="form-check-input" type="checkbox" id="rotate">
                    <label class="form-check-label" for="rotate"><?php echo $_smarty_tpl->tpl_vars['items']->value['rotate'];?>
</label>
                </div>

                <div class="form-check form-switch">
                    <input name="corner" class="form-check-input" type="checkbox" id="corner">
                    <label class="form-check-label" for="corner"><?php echo $_smarty_tpl->tpl_vars['items']->value['corner'];?>
</label>
                </div>

                <div class="form-check form-switch">
                    <input name="grayscale" class="form-check-input" type="checkbox" id="grayscale">
                    <label class="form-check-label" for="grayscale"><?php echo $_smarty_tpl->tpl_vars['items']->value['grayscale'];?>
</label>
                </div>

                <br>
                <div class="colorPicker">
                    <label for="color"><?php echo $_smarty_tpl->tpl_vars['items']->value['color'];?>
</label><br>
                    <input type="color" name="color" id="color" class="form-control form-control-color" />
                </div>

            </div>

            <br>
            <button type="submit" name="save-main" class="btn btn-success" id="save-main"><?php echo $_smarty_tpl->tpl_vars['items']->value['save_main'];?>
</button>
        </form>

        <br>
        <div class="result"></div>

    </div>
</div>

<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['items']->value['js_main'];?>
"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
