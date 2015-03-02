<?php 
/**
 * 首页文章列表部分
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
<?php doAction('index_loglist_top'); ?>
<?php 
if (!empty($logs)):
foreach($logs as $value): 
?>
	<h2><?php topflg($value['top']); ?><a href="<?php echo $value['log_url']; ?>"><?php echo $value['log_title']; ?></a></h2>
	<p class="date">作者：<?php blog_author($value['author']); ?> 时间：<?php echo gmdate('Y-n-j G:i l', $value['date']); ?> 
	<?php blog_sort($value['logid']); ?> 
	<?php editflg($value['logid'],$value['author']); ?>
	</p>
	<?php echo subString(strip_tags($value['content']),0,250); ?>
	<p class="count">
	<a href="<?php echo $value['log_url']; ?>#comments">评论(<?php echo $value['comnum']; ?>)</a>
	<a href="<?php echo $value['log_url']; ?>">浏览(<?php echo $value['views']; ?>)</a>
	</p>
	<hr>
	<div style="clear:both;"></div>

<?php 
endforeach;
else:
?>
	<h2>未找到</h2>
	<p>抱歉，没有符合您查询条件的结果。</p>
<?php endif;?>

<div id="pagenavi">
	<?php echo $page_url;?>
</div>
</div>
</div>
<?php
 include View::getView('side');
 include View::getView('footer');
?>