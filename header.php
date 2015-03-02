<?php
/*
* Template Name:ExcitingBlue v1.1
 * Description:蓝色为主调的CSS模版 
 * Author:叶雨梧桐
 * Author Url:http://blog.gt520.com
 * Sidebar Amount:1
 * update:20131215
 * ForEmlog:5.1.2
*/
if(!defined('EMLOG_ROOT')) {exit('error!');}
require_once View::getView('module');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $site_title; ?></title>
<meta name="keywords" content="<?php echo $site_key; ?>" />
<meta name="description" content="<?php echo $site_description; ?>" />
<meta name="generator" content="emlog" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php echo BLOG_URL; ?>xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php echo BLOG_URL; ?>wlwmanifest.xml" />
<link rel="alternate" type="application/rss+xml" title="RSS"  href="<?php echo BLOG_URL; ?>rss.php" />
<link href="<?php echo TEMPLATE_URL; ?>main.css" rel="stylesheet" type="text/css" />
<link href="<?php echo BLOG_URL; ?>admin/editor/plugins/code/prettify.css" rel="stylesheet" type="text/css" />
<script src="<?php echo BLOG_URL; ?>admin/editor/plugins/code/prettify.js" type="text/javascript"></script>
<script src="<?php echo BLOG_URL; ?>include/lib/js/common_tpl.js" type="text/javascript"></script>
 <script src="<?php echo BLOG_URL; ?>include/lib/js/jquery/jquery-1.7.1.js" type="text/javascript"></script> 
 <script src="<?php echo BLOG_URL; ?>content\templates\ExcitingBlue\myjs.js" type="text/javascript"></script>
<?php doAction('index_head'); ?>
</head>
<body >
<div id="top">
	<div id="nav"><?php blog_navi();?></div>
		  
</div>
<!--动画-->
<div id="topbg">
  <cloud class="cloud">
    <span class="cld a"></span>
    <span class="cld b"></span>
    <span class="cld c"></span>
    <span class="cld d"></span>
    <!-- cloud shadow -->
    <span class="cld a shd"></span>
    <span class="cld b shd"></span>
    <span class="cld c shd"></span>
    <span class="cld d shd"></span>
  </cloud>
  
  <cloud class="cloud cloud_a">
    <span class="cld a"></span>
    <span class="cld b"></span>
    <span class="cld c"></span>
    <span class="cld d"></span>
    <!-- cloud shadow -->
    <span class="cld a shd"></span>
    <span class="cld b shd"></span>
    <span class="cld c shd"></span>
    <span class="cld d shd"></span>
  </cloud>
  
  <cloud class="cloud cloud_b">
    <span class="cld a"></span>
    <span class="cld b"></span>
    <span class="cld c"></span>
    <span class="cld d"></span>
    <!-- cloud shadow -->
    <span class="cld a shd"></span>
    <span class="cld b shd"></span>
    <span class="cld c shd"></span>
    <span class="cld d shd"></span>
  </cloud>
  
  <cloud class="cloud cloud_c">
    <span class="cld a"></span>
    <span class="cld b"></span>
    <span class="cld c"></span>
    <span class="cld d"></span>
    <!-- cloud shadow -->
    <span class="cld a shd"></span>
    <span class="cld b shd"></span>
    <span class="cld c shd"></span>
    <span class="cld d shd"></span>
  </cloud>
  
  <cloud class="cloud cloud_d">
    <span class="cld a"></span>
    <span class="cld b"></span>
    <span class="cld c"></span>
    <span class="cld d"></span>
    <!-- cloud shadow -->
    <span class="cld a shd"></span>
    <span class="cld b shd"></span>
    <span class="cld c shd"></span>
    <span class="cld d shd"></span>
  </cloud>
  
  
  <airplane id="airplane">
    <span class="plane head"></span>
    <span class="plane body">
      <span class="plane window"></span>
      <span class="plane window a"></span>
      <span class="plane window b"></span>
      <span class="plane window c"></span>
    </span>
    <span class="plane lwing"></span>
    <span class="plane rwing"></span>
    <span class="plane tale"></span>
  </airplane>
 <!--动画-->
	<div id="header">
		<h1><a href="<?php echo BLOG_URL; ?>"><?php echo $blogname; ?></a></h1>
		<h3><?php echo $bloginfo; ?></h3>
	</div>
	<div id="blogertx">
			<a href="#" title="<?php echo $name; ?>"><img src="http://www.gravatar.com/avatar/<?php global $CACHE;
	$user_cache = $CACHE->readCache('user'); echo md5($user_cache[$author]['mail']);  ?>" width="128px" height="128px" alt="blogger" /></a>
	</div>
	<div id="netmessage">
		<?php 
			function count_show(){  
				$CACHE = Cache::getInstance();
				$sta_cache = $CACHE->readCache('sta');
				echo "文章&nbsp;:".$sta_cache['lognum']."&nbsp篇&nbsp&nbsp&nbsp";
				echo "说说&nbsp;:".$sta_cache['twnum']."&nbsp;条&nbsp&nbsp&nbsp";
				echo "评论&nbsp;:".$sta_cache['comnum_all']."&nbsp;条&nbsp&nbsp&nbsp";
				echo "博客安全运行:".floor((time()-strtotime("2013-08-06"))/86400)."天";
			
			}
		count_show(); 
		?>
	</div>
</div>
 <div id="wrap">
