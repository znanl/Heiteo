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
	//设置多说ID
	$duoshuoId = new Typecho_Widget_Helper_Form_Element_Text('duoshuoId', NULL, NULL, _t('你在多说的域名'), _t('只需要输入二级名称即可（比如：nyf.duoshuo.com,那么就输入nyf）'));
    $form->addInput($duoshuoId);
	
	//多说评论
	$duoshuo = new Typecho_Widget_Helper_Form_Element_Checkbox('duoshuo', 
    array('PostShowDuoshuo' => _t('文章页是否启用多说评论'),
    'PageShowDuoshuo' => _t('独立页面是否启用多说评论')),
    array('PostShowDuoshuo', 'PageShowDuoshuo'), _t('多说评论（注意，如果不开启多说评论，则页面不会有默认评论系统）'));
    
    $form->addInput($duoshuo->multiMode());

}
?>