<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('作者头像'), _t('在这里填入一个图片URL地址,作为作者的头像显示'));
    $form->addInput($logoUrl);
	
	$imgUrl = new Typecho_Widget_Helper_Form_Element_Text('imgUrl', NULL, NULL, _t('首页大图'), _t('在这里填入一个图片URL地址,作为在首页显示的大图'));
    $form->addInput($imgUrl);

}
?>