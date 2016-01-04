<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>login</title>
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
        <div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<div class="row-fluid">
				<div class="span6">
                                    <form class="form-inline" style="text-align: center" method='post'> 
						<fieldset>
							  <label>账号：</label><input type="text" name='uid' /><br/>
                                                          <label>密码：</label><input type="password" name="psw" /><br/>
                                                          <button type="submit" class="btn">提交</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
    </div>
    </body>
</html>