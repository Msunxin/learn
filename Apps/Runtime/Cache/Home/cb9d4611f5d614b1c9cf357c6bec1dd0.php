<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>联系</title>
<link rel="stylesheet" href="<?php echo ($skinpath); ?>skin/css/bootstrap.css">
<link rel="stylesheet" href="<?php echo ($skinpath); ?>skin/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="<?php echo ($skinpath); ?>skin/css/style.css">
<script src="<?php echo ($skinpath); ?>skin/js/jquery.min.js"></script>
<script src="<?php echo ($skinpath); ?>skin/js/layer/layer.js"></script>
<script src="<?php echo ($skinpath); ?>skin/js/bootstrap.min.js"></script>
</head>
<body>
    <div class='header-default'>
        <div class="header header-bg">
                                    <ul class="nav nav-pills pull-right">
                                            <li <?php if($_SERVER['REQUEST_URI'] == '/'){ echo "class='active'"; } ?> >
                                                    <a href="http://<?php echo ($url); ?>">主页</a>
                                            </li>
                                            <li>
                                                    <a href="#">关于</a>
                                            </li>
                                            <li <?php if(stripos($_SERVER['REQUEST_URI'],'chat') !== false){ echo "class='active'"; } ?>>
                                                    <a href="http://<?php echo ($url); ?>/chat">联系我们</a>
                                            </li>
                                            <li <?php if(stripos($_SERVER['REQUEST_URI'],'observer') !== false){ echo "class='active'"; } ?>>
                                                    <a href="http://<?php echo ($url); ?>/observer">观察者</a>
                                            </li>
                                            <li>
                                                <a href="http://<?php echo ($url); ?>?de=true"  target="_blank">debug</a>
                                            </li>
                                    </ul>
                                    <h3 class="text-muted" style='text-indent: 5%'>
                                            只是测试
                                    </h3>
                                    <?php  if($user[0]['name']){ echo "<div class=\"login\"><em class='login-text'>当前用户：</em><span class='login-name'>{$user[0]['name']}</span><a href='./index/exitLogin' class='login-exit'>退出</a></div>"; }else{ echo "<div class='login'><a href='../index/register'>注册</a></div>"; } ?>
        </div>
    </div>
<div class="chat-cont">
    <div class="chat-cont tourist">
        <h3>222：</h3>
        <ul>
            <li>12</li>
            <li>2</li>
            <li>3</li>
        </ul>
    </div>
    <div class="chat-text-area">
       <div>
           <ul id="screen-talk" style="height: 700px;background-color:#ccffff;">
                <li style="float:none;clear:both;padding-left: 10px;">12</li>
            </ul>
       </div>
        <div class="chat-area-sub">
            <textarea name='talk' class="areas" wrap="hard"></textarea>
            <button class="chat-sub">发言</button>
        </div>
    </div>
</div>
<div class="row-fluid" style="position: fixed;bottom:10px;right: 5px;">
		<div class="span12">
			<blockquote class="pull-right">
				<p>
					这是随便玩玩的
				</p>
			</blockquote>
		</div>
</div>
<script>
    window.onload=function(){
        var user = "<?php echo ($user["0"]["user"]); ?>";
        $('.chat-sub').on('click',function(){
            var value = $('textarea[name=talk]').val(); 
            if(value.length==0 || value.length>=50){
                layer.alert('长度不能超过50');
                return;
            }
            if(user == ''){
                layer.alert('登录后再来',function(){
                   window.location.href="http://<?php echo ($url); ?>";
                    return;
                });
                return;
            }
            $('.chat-sub').attr('disabled',true);
            $('.chat-sub').css('background-color','#cccccc');
            setTimeout("$('.chat-sub').attr('disabled',false)",2000);
            setTimeout("$('.chat-sub').css('background-color','green')",2000);  
            $('#screen-talk li').last('').after("<li style='float:right;clear:both;padding-right:10px;margin-top:3px;word-wrap:break-word;'>"+user+'(2):'+value+"</li>");    
        })
    }
    
    /*window.onunload = function(){
        $.post('./chat/ajax_close',function(){
            
        },'json');
    };*/
</script>
</body>
</html>