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
					<form class="form-inline">
						<fieldset>
							 <legend>表单项</legend> <label>表签名</label><input type="text" /> <span class="help-block">这里填写帮助信息.</span> <label class="checkbox"><input type="checkbox" /> 勾选同意</label> <button type="submit" class="btn">提交</button>
						</fieldset>
					</form>
				</div>
				<div class="span6">
					<dl>
						<dt>
							Rolex
						</dt>
						<dd>
							劳力士创始人为汉斯.威尔斯多夫，1908年他在瑞士将劳力士注册为商标。
						</dd>
						<dt>
							Vacheron Constantin
						</dt>
						<dd>
							始创于1775年的江诗丹顿已有250年历史，
						</dd>
						<dd>
							是世界上历史最悠久、延续时间最长的名表之一。
						</dd>
						<dt>
							IWC
						</dt>
						<dd>
							创立于1868年的万国表有“机械表专家”之称。
						</dd>
						<dt>
							Cartier
						</dt>
						<dd>
							卡地亚拥有150多年历史，是法国珠宝金银首饰的制造名家。
						</dd>
					</dl>
				</div>
			</div>
			<h3 class="text-center">
				login
			</h3>
		</div>
	</div>
</div>
    </body>
</html>