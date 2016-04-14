<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>注册</title>
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
<div>
       <form class="regpage" action="./register" method="POST">
           <div  class="label-val"><span class="lable-lable">用户名：</span> <input type="text" placeholder="请输入用户名" name="user" onblur="check(this.name,this.value)"></div>
           <div  class="label-val"><span class="lable-lable">真实姓名：</span> <input type="text" placeholder="请输入真实姓名" name="name" onblur="check(this.name,this.value)"></div>
           <div  class="label-val"><span class="lable-lable">密码：</span> <input type="password" placeholder="请输入密码" name="password" onblur="check(this.name,this.value)"></div>
           <div  class="label-val"><span class="lable-lable">确认密码：</span> <input type="password" placeholder="请确认密码" name="repeat" onblur="check(this.name,this.value)"></div>
           <div class="buttion-out"> <button class="button-sub">提交</button></div>
       </form>
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
        $('.button-sub').on('click',function(){
           var user = $("input[name=user]").val();
           var name = $("input[name=name]").val();
           var password = $("input[name=password]").val();
           var repeat = $("input[name=repeat]").val();
           if(user == '' || name =="" || password == '' || repeat!=password){
               return false;
           }
           var res = before('user',user);
           if(!res){
               return false;
           }
        });
    });
    function check(type,value){
        switch(type){
            case 'user' : error="用户名不能为空";break;
            case 'name' : error="真实姓名不能为空";break;
            case 'password' : error="密码不能为空";break;
            case 'repeat' : error="两次密码不一致";break;
        }
        var have = $("input[name="+type+"]").next('span').length
        if(type == 'repeat'){
            var pass = $("input[name=password]").val();
            if(value != pass){
                have==0 ? $("input[name="+type+"]").after("<span style=\"display:inline;color:red;margin-left: 10px;\">*"+error+"</span>") : $("input[name="+type+"]").next('span').css('display','inline');
                $(".button-sub").attr('disabled',true);return;
            }else{
                $("input[name="+type+"]").next('span').css('display','none');
                $(".button-sub").attr('disabled',false);
            }
        }else{
            if(value == ''){         
                have==0 ? $("input[name="+type+"]").after("<span style=\"display:inline;color:red;margin-left: 10px;\">*"+error+"</span>") : $("input[name="+type+"]").next('span').css('display','inline');
                $(".button-sub").attr('disabled',true);return;
            }else{
                $("input[name="+type+"]").next('span').css('display','none');
                $(".button-sub").attr('disabled',false);
            }  
        }
        if(type == 'user' && value != ''){
            before(type,value);
        }
        
    }
    function before(type,value){
            var have = $("input[name="+type+"]").next('span').length
            $.post('./checkuser',{user:value},function(data){
                if(data.code == 200){
                    have==0 ? $("input[name="+type+"]").after("<span style=\"display:inline;color:green;margin-left: 10px;\">*"+data.msg+"</span>") : $("input[name="+type+"]").next('span').css('block','inline');  
                    ress = true;    //可以注册
                }else{
                    have==0 ? $("input[name="+type+"]").after("<span style=\"display:inline;color:red;margin-left: 10px;\">*"+data.msg+"</span>"): $("input[name="+type+"]").next('span').css('block','inline'); 
                    $(".button-sub").attr('disabled',true);
                    ress = false; //已经此用户
                }
            },'json');
            return ress;
        }
</script>
</body>
</html>