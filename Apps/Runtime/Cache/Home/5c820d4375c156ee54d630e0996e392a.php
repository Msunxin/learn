<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>首页</title>
<link rel="stylesheet" href="<?php echo ($skinpath); ?>skin/css/bootstrap.css">
<link rel="stylesheet" href="<?php echo ($skinpath); ?>skin/css/bootstrap-theme.min.css">
<script src="<?php echo ($skinpath); ?>skin/js/jquery.min.js"></script>
<script src="<?php echo ($skinpath); ?>skin/js/layer/layer.js"></script>
<script src="<?php echo ($skinpath); ?>skin/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="header" style="padding-bottom:1cm">
				<ul class="nav nav-pills pull-right">
					<li class="active ">
						<a href="#">主页</a>
					</li>
					<li>
						<a href="#">关于</a>
					</li>
					<li>
						<a href="#">联系我们</a>
					</li>
				</ul>
				<h3 class="text-muted" style='text-indent: 5%'>
					只是测试
				</h3>
</div>
<div id="LG" class="container-fluid">
	<div class="row-fluid">
		<div class="span12">			
			<div class="jumbotron well">
				<h1>
					超大屏幕标题
				</h1>
				<p class="lead">
					这是一个可视化布局模板, 你可以点击模板里的文字进行修改, 也可以通过点击弹出的编辑框进行富文本修改. 拖动区块能实现排序.
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
					<h4>
						子标题
					</h4>
					<p>
						W3CSCHOOL 菜鸟教程，学的不仅是技术，更是梦想！
					</p>
					<h4>
						子标题
					</h4>
					<p>
						W3CSCHOOL 菜鸟教程，学的不仅是技术，更是梦想！
					</p>
				</div>
				<div class="col-lg-6">
					<h4>
						子标题
					</h4>
					<p>
						W3CSCHOOL 菜鸟教程，学的不仅是技术，更是梦想！
					</p>
					<h4>
						子标题
					</h4>
					<p>
						W3CSCHOOL 菜鸟教程，学的不仅是技术，更是梦想！
					</p>
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
        <form class="form-inline" style="text-align: center"> 
            <fieldset style="padding-top: 50px">
                              <label>账号：</label><input type="text" name='uid' id="uid" value=""/><br/>
                              <label>密码：</label><input type="password" name="psw" id="psw" value="" /><br/>
                              <div class="btn submit">提交</div>
                    </fieldset>
            </form>
    </div>
</div>
<div class="row-fluid">
		<div class="span12">
			<blockquote class="pull-right">
				<p>
					github是一个全球化的开源社区.
				</p> <small>关键词 <cite>开源</cite></small>
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
                closeBtn: 0, //不显示关闭按钮
                shift: 2,
                shadeClose: true, //开启遮罩关闭
                content: $('.action-login').html()
            });
            $('.submit').click(function(){
                var name = $("input[name='uid']:last").val();
                var psw = $("input[name='psw']:last").val();
                $.post('./index/login',{'id':name,'psw':psw},function(data){
                    var datas = JSON.parse(data);
                    if(datas.code==200){
                        layer.alert(datas.msg,{icon:6},function(){
                            location.href="http://baidu.com";
                        });
                    }else{
                        layer.alert(datas.msg,{icon:5});
                        layer.close(pagei);
                    }
                 });
            })
        });
    })
</script>
</body>
</html>