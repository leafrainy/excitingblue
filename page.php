<?php 
/**
 * 自建页面模板
 * Template Name:ExcitingBlue v1.1
 * Description:蓝色为主调的CSS模版
 * Author:叶雨梧桐
 * Author Url:http://blog.gt520.com
 * Sidebar Amount:1
 * update:20131215
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="content">
<div id="contentleft2">
	<h2><?php echo $log_title; ?></h2>
	<?php echo $log_content; ?>
	<?php blog_comments($comments); ?>
	<?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?>
	<div style="clear:both;"></div>
</div><!--end #contentleft-->
<?php
 include View::getView('side');
 include View::getView('footer');
?>