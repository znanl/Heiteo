<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
	//设置头像
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('作者头像'), _t('在这里填入一个图片URL地址,作为作者的头像显示'));
    $form->addInput($logoUrl);
	//设置大图
	$imgUrl = new Typecho_Widget_Helper_Form_Element_Text('imgUrl', NULL, NULL, _t('首页大图'), _t('在这里填入一个图片URL地址,作为在首页显示的大图'));
    $form->addInput($imgUrl);
	//设置侧边栏样式
	//$sidebarstyle = new Typecho_Widget_Helper_Form_Element_Radio('sidebarstyle', array('展开' => 'post-template tag-getting-started  pace-done drawer-open drawer-transition','折叠' => 'post-template tag-getting-started'), NULL, _t('侧边栏样式'), _t('设置侧边栏的默认样式'));
    //$form->addInput($sidebarstyle);

}
?>