<?php 
/**
 * 页面底部信息
 * Template Name:ExcitingBlue v1.1
 * Description:蓝色为主调的CSS模版
 * Author:叶雨梧桐
 * Author Url:http://blog.gt520.com
 * Sidebar Amount:1
 * update:20131215
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
</div><!--end #content-->

<div style="clear:both;"></div>
<!--返回顶部-->
<div style="display: none" id="goTopBtn"></div> 
<script type=text/javascript>goTopEx();</script>
<div id="footerbar">
	Copyright &copy;  2013 <a href="<?php echo BLOG_URL; ?>"><?php echo $blogname; ?></a>. Powered by <a href="http://www.emlog.net/" rel="external">emlog</a>.
 Theme by <a href="http://blog.gt520.com/" rel="external">叶雨梧桐</a>. 
	<a href="http://www.miibeian.gov.cn" target="_blank"><?php echo $icp; ?></a> <?php echo $footer_info; ?>
	<?php doAction('index_footer'); ?>
</div><!--end #footerbar-->

</div><!--end #wrap-->
<script>prettyPrint();</script>
</body>
</html>