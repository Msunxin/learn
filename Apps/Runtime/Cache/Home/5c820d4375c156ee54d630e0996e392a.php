<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>首页</title>
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
<div id="LG" class="container-fluid content-box">
	<div class="row-fluid">
		<div class="span12">			
			<div class="jumbotron well">
				<h1>
					随便看看
				</h1>
				<p class="lead">
					这是个可以登录的系统
				</p>
				<p>
					<a class="btn btn-lg btn-success" href="javascript:;" role="button">登陆</a>
				</p>
			</div>
			<div class="row marketing">
				<div class="col-lg-6">
					<h4>
						子标题
					</h4>
					<p>
						W3CSCHOOL 菜鸟教程，学的不仅是技术，更是梦想！
					</p>
				</div>
			</div>
		</div>
	</div>
	
</div>
<div class='hidden'>
    <div class="span6 action-login">
        <div class="form-inline" style="text-align: center"> 
            <fieldset style="padding-top: 50px">
                <label>账号：</label><input type="text" name='uid' id="uid" value=""/><span style='display:none;color:red;'>*账户不能为空</span><br/>
                <label>密码：</label><input type="password" name="psw" id="psw" value=""/><span style='display:none;color:red'>*密码不能为空</span><br/>
                <button class="btn submit">提交</button>
            </fieldset>
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
    $(function(){
        $('.btn-success').click(function(){
           //自定页
            pagei = layer.open({
                title:'登录',
                area: ['500px', '300px'],
                type: 1,
                skin: 'layui-layer-demo', //样式类名
                closeBtn: 1, //不显示关闭按钮
                shift: 2,
                shadeClose: true, //开启遮罩关闭
                content: $('.action-login').html()
            });
            $('.submit').click(function(){
                var name = $("input[name='uid']:last").val();
                var psw = $("input[name='psw']:last").val();
                if(name == ''){
                    $("input[name='uid']:last").next('span').css('display','block');
                }else{
                    $("input[name='uid']:last").next('span').css('display','none');
                }
                if(psw == ''){
                    $("input[name='psw']:last").next('span').css('display','block');;
                }else{
                    $("input[name='psw']:last").next('span').css('display','none');
                }
                if(name == '' || psw == ''){
                    return false;
                }
                $.post('./index/login',{'id':name,'psw':psw},function(datas){
                    if(datas.code==200){
                        layer.alert(datas.msg,{icon:6},function(){
                            window.location.reload();
                        });
                    }else{
                        layer.alert(datas.msg,{icon:5});
                        layer.close(pagei);
                    }
                 },'json');
            })
        });
    })
</script>
</body>
</html>