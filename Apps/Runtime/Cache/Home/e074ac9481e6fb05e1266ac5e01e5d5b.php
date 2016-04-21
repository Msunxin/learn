<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <style>
            .ob-content {width: 70%;height:auto;margin-left:auto;margin-right:auto;}
            .ob-center {margin-left:auto;margin-right:auto;}
            .ob-hobby {background-color:pink;width:100px;height:100px;margin-top: 20px;}
            .ob-ad {color:red;width:200px;height:200px;margin-top: 20px; border-style:dotted}
            
        </style>
        <title>observer</title>
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
        <div class='ob-content'>
            <div class='ob-center'>
                <select name='select' onchange="trigger(this.value)">
                    <option value='male'>男</option>
                    <option value='female'>女</option>
                </select>
            </div>
            <div>
                <div id="hobby" class='ob-hobby' ><span>这是爱好</span></div>
                <div id="ad" class='ob-ad'><span>这是广告</span></div>
                <div></div>
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
                var observer = {};//观察者
                function trigger(value){        //外部统一访问
                    for(var key in observer){
                        observer[key].update(value);
                    }
                }
                
                //注册观察者
                function attch(key,value){
                    observer[key] =value;
                }
                
                //删除观察者
                function dettch(key){
                    delete observer[key];
                }
                
               //观察者要实现的修改
                var hobby = document.getElementById('hobby');
                hobby.update = function(value){
                    if(value == 'male'){
                        $('#hobby').css('background-color','red');
                    }else if(value =='female'){
                        $('#hobby').css('background-color','pink');
                    }
                }
                var ad = document.getElementById('ad');
                ad.update = function(value){
                    if(value == 'male'){
                        $('#ad').css('color','red');
                    }else if(value =='female'){
                        $('#ad').css('color','pink');
                    }
                }
                
                //测试注册观察者
                attch('hobby',hobby);
                attch('ad',ad);
        </script>
    </body>
</html>