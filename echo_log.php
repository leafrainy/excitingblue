<?php 
/**
 * 阅读文章页面
 * Template Name:ExcitingBlue v1.1
 * Description:蓝色为主调的CSS模版
 * Author:叶雨梧桐
 * Author Url:http://blog.gt520.com
 * Sidebar Amount:1
 * update:20131215
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="article_content">
<div id="contentleft">
	<h2><?php topflg($top); ?><?php echo $log_title; ?></h2>
	<div class="article_info">作者：<?php blog_author($author); ?> &nbsp; 发布：<?php echo gmdate('Y-n-j G:i l', $date); ?> &nbsp; <?php blog_sort($logid); ?> &nbsp; 阅读：<?php echo $views; ?>次 &nbsp; 评论：<a href="<?php echo $value['log_url']; ?>#comments"><?php echo $comnum; ?>条</a> &nbsp;<?php editflg($logid,$author); ?>
	<div id="goTocomment"><a href="<?php echo $value['log_url']; ?>#comment-place">快速评论</a></div>
	</div><div class="clear"></div>
	<hr>
	<?php echo $log_content; ?>
	<hr>
	<div class="echo_tag"><?php blog_tag($logid); ?></div>
	<?php doAction('log_related', $logData); ?>
	<div class="nextlog"><?php neighbor_log($neighborLog); ?></div>
	<?php blog_comments($comments); ?>
	<?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?>
	<div style="clear:both;"></div>
</div><!--end #contentleft-->
<?php
 include View::getView('footer');
?>