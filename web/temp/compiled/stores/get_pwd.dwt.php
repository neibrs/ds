<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $this->_var['lang']['cp_home']; ?><?php if ($this->_var['ur_here']): ?> - <?php echo $this->_var['ur_here']; ?><?php endif; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/login.css" rel="stylesheet" type="text/css" />
<link href="css/purebox.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.SuperSlide.2.1.1.js"></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body>

<div class="get-pwd">
	<?php if ($this->_var['form_act'] == "forget_pwd"): ?>
    	<form action="get_password.php" method="post" name="submitAdmin">
        	<div class="login-form">
            	<div class="title"><?php echo $this->_var['lang']['forget_password']; ?></div>
            	<div class="formInfo">
                    <div class="formText">
                        <i class="icon icon-user"></i>
                        <input type="text" name="user_name" autocomplete="off" class="input-text" value="" placeholder="<?php echo $this->_var['lang']['user_name']; ?>">
                    </div>
                    <div class="formText">
                        <i class="icon icon-email"></i>
                        <input type="text" name="email" autocomplete="off" class="input-text" value="" placeholder="<?php echo $this->_var['lang']['email']; ?>">
                    </div>
                    <div class="formText submitDiv mb10">
                    	<input type="hidden" name="action" value="get_pwd" />
                        <input type="hidden" name="act" value="forget_pwd" />
                        <input type="submit" value="<?php echo $this->_var['lang']['click_button']; ?>" class="sub sub_left" />
                        <input type="reset" value="<?php echo $this->_var['lang']['reset_button']; ?>" class="sub sub_reset" />
                    </div>
                    <div class="formText">
                        <a href="privilege.php?act=logout" class="not_pwd" target="_blank"><?php echo $this->_var['lang']['return_login']; ?></a>
                    </div>
                </div>
            </div>
        </form>
    <?php endif; ?>
    <?php if ($this->_var['form_act'] == "reset_pwd"): ?>
    	<form action="get_password.php" method="post" name="submitPwd">
        	<div class="login-form">
            	<div class="title"><?php echo $this->_var['lang']['forget_password']; ?></div>
            	<div class="formInfo">
                    <div class="formText">
                        <i class="icon icon-pwd"></i>
                        <input type="password" style="display:none"/>
                        <input type="password" name="password" autocomplete="off" class="input-text" value="" placeholder="<?php echo $this->_var['lang']['enter_admin_pwd']; ?>">
                    </div>
                    <div class="formText">
                        <i class="icon icon-pwd"></i>
                        <input type="password" style="display:none"/>
                        <input type="password" name="confirm_pwd" autocomplete="off" class="input-text" value="" placeholder="<?php echo $this->_var['lang']['confirm_admin_pwd']; ?>">
                    </div>
                    <div class="formText submitDiv mb10">
                        <input type="hidden" name="action" value="reset_pwd" />
                        <input type="hidden" name="act" value="forget_pwd" />
                        <input type="hidden" name="adminid" value="<?php echo $this->_var['adminid']; ?>" />
                        <input type="hidden" name="code" value="<?php echo $this->_var['code']; ?>" />
                        <input type="submit" value="<?php echo $this->_var['lang']['click_button']; ?>" class="sub sub_left" />
                        <input type="reset" value="<?php echo $this->_var['lang']['reset_button']; ?>" class="sub sub_reset" />
                    </div>
                    <div class="formText">
                        <a href="get_password.php?act=forget_pwd" class="not_pwd" target="_blank"><?php echo $this->_var['lang']['return_login']; ?></a>
                    </div>
                </div>
            </div>
        </form>
    <?php endif; ?>
</div>
<div id="bannerBox">
	<ul class="slideBanner">
    	<li><img src="images/banner_login.jpg" /></li>
    </ul>
</div>


<script type="text/javascript">
	$("#bannerBox").slide({mainCell:".slideBanner",effect:"fold",interTime:3500,delayTime:500,autoPlay:true,autoPage:true,endFun:function(i,c,s){
		$(window).resize(function(){
			var width = $(window).width();
			var height = $(window).height();
			s.find(".slideBanner,.slideBanner li").css({"width":width,"height":height});
		});
	}});
	
	$(function(){
		$(".formText .input-text").focus(function(){
			$(this).parent().addClass("focus");
		});
		
		$(".formText .input-text").blur(function(){
			$(this).parent().removeClass("focus");
		});
	});


	/**
	* 检查表单输入的数据
	*/
	/*function validate()
	{
	  validator = new Validator("submitAdmin");
	  validator.required("user_name", user_name_empty);
	  validator.required("email", email_empty, 1);
	  validator.isEmail("email", email_error);
	
	  return validator.passed();
	}
	
	function validate2()
	{
	  validator = new Validator("submitPwd");
	  validator.required("password",            admin_pwd_empty);
	  validator.required("confirm_pwd",         confirm_pwd_empty);
	  if (document.forms['submitPwd'].elements['confirm_pwd'].value.length > 0)
	  {
		validator.eqaul("password","confirm_pwd", both_pwd_error);
	  }
	
	  return validator.passed();
	}*/
</script>

</body>
</html>