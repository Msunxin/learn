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
                                                    <a href="http://learn.cn">主页</a>
                                            </li>
                                            <li>
                                                    <a href="#">关于</a>
                                            </li>
                                            <li <?php if(stripos($_SERVER['REQUEST_URI'],'chat') !== false){ echo "class='active'"; } ?>>
                                                    <a href="http://learn.cn/chat">联系我们</a>
                                            </li>
                                            <li>
                                                    <a href="http://learn.cn/?de=true"  target="_blank">debug</a>
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
       <div id="screen-talk">
           <textarea class="chat-area" name="talking" readonly></textarea>
       </div>
        <div class="chat-area-sub">
            <textarea name='talk' class="areas"></textarea>
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
        $('.chat-sub').on('click',function(){
          var value = $('textarea[name=talk]').val(); 
          var name = $('textarea[name=talking]').val();
          if(name != ''){
              $('textarea[name=talking]').text(name+'\n'+value);
          }else{
               $('textarea[name=talking]').text(value);
          }         
        })
    }
    
    /*window.onunload = function(){
        $.post('./chat/ajax_close',function(){
            
        },'json');
    };*/
</script>
</body>
</html>