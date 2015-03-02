<?php 
/**
 * 微语部分
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
<div id="t_content">
<div id="tw">
    <ul>
    <?php 
    foreach($tws as $val):
    $author = $user_cache[$val['author']]['name'];
    $avatar = empty($user_cache[$val['author']]['avatar']) ? 
                BLOG_URL . 'admin/views/images/avatar.jpg' : 
                BLOG_URL . $user_cache[$val['author']]['avatar'];
    $tid = (int)$val['id'];
    $img = empty($val['img']) ? "" : '<a title="查看图片" href="'.BLOG_URL.str_replace('thum-', '', $val['img']).'" target="_blank"><img style="border: 1px solid #EFEFEF;" src="'.BLOG_URL.$val['img'].'"/></a>';
    ?> 
    <li class="li">
   <div class="sj"></div>
    <div class="post1"><span><?php echo $author; ?></span><br /><?php echo $val['t'].'<br/>'.$img;?></div>
    <div class="clear"></div>
    <div class="bttome">
        <p class="post"></p>
        <p class="time"><?php echo $val['date'];?> </p>
    </div>
	<div class="clear"></div>
   	<ul id="r_<?php echo $tid;?>" class="r"></ul>
    <?php if ($istreply == 'y'):?>
    <div class="huifu" id="rp_<?php echo $tid;?>">
	<textarea id="rtext_<?php echo $tid; ?>"></textarea>
    <div class="tbutton">
        <div class="tinfo" style="display:<?php if(ROLE == 'admin' || ROLE == 'writer'){echo 'none';}?>">
        昵称：<input type="text" id="rname_<?php echo $tid; ?>" value="" />
        <span style="display:<?php if($reply_code == 'n'){echo 'none';}?>">验证码：<input type="text" id="rcode_<?php echo $tid; ?>" value="" /><?php echo $rcode; ?></span>        
        </div>
        <input class="button_p" type="button" onclick="reply('<?php echo DYNAMIC_BLOGURL; ?>index.php?action=reply',<?php echo $tid;?>);" value="回复" /> 
        <div class="msg"><span id="rmsg_<?php echo $tid; ?>" style="color:#FF0000"></span></div>
    </div>
    </div>
    <?php endif;?>
    </li>
    <?php endforeach;?>
	<li id="pagenavi"><?php echo $pageurl;?><span></span></li>
    </ul>
</div><!--end #tw-->
</div><!--end #contentleft-->
<?php
 
 include View::getView('footer');
?>