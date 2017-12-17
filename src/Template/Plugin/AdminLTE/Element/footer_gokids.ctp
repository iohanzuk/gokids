<?php
/**
 * Created by PhpStorm.
 * User: Iohan
 * Date: 17/12/2017
 * Time: 09:09
 */
$root = strstr(ROOT, 'public_html');
$root = strstr($root, '/');


if ($root == "") {
    $site_path = dirname($_SERVER["SCRIPT_NAME"]);
    if ($site_path == '/')
        $site_path = '';
    $pos = strripos($site_path, "webroot");
    $ur = substr($site_path, 0, $pos);
    if (substr($ur, -1) == "/") {
        $root = substr($ur, 0, -1);
    } else {
        $root = $ur;
    }
}

echo "<script>var site_path =\"" . $root . "\";</script>";

?>

<?= $this->Html->script('datetimepicker/moment-with-locales', ['block' => 'scriptBottom']) ?>
<?= $this->Html->script('datetimepicker/bootstrap-datetimepicker.min', ['block' => 'scriptBottom']) ?>
<?= $this->Html->script('moment.min', ['block' => 'scriptBottom']) ?>
<?= $this->Html->script('input_file/fileinput') ?>
<?= $this->Html->script('input_file/fileinput_locale_pt-BR') ?>
<?= $this->Html->script('functions', ['block' => 'scriptBottom']) ?>
<?= $this->Html->script('lightboxview/js/lightview/lightview', ['block' => 'scriptBottom']) ?>
<?= $this->Html->script('bootstrap-select/bootstrap-select.min', ['block' => 'scriptBottom']) ?>
<?= $this->Html->script('bootstrap-select/i18n/defaults-pt_BR.min', ['block' => 'scriptBottom']) ?>
<?= $this->Html->script('jquery_mask/jquery.mask.min', ['block' => 'scriptBottom']) ?>
<?= $this->Html->script('bootstrap-dialog/bootstrap-dialog.min', ['block' => 'scriptBottom']) ?>
