<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>
<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><a href="<?php echo $this->_var['action_link']['href']; ?>" class="s-back"><?php echo $this->_var['lang']['back']; ?></a><?php echo $this->_var['lang']['jurisdiction']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
        	<div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['info']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['info']['1']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content_common']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
                
                <div class="common-content">
                    <div class="mian-info">
                        <form name="theForm" method="post" enctype="multipart/form-data" id="user_form" >
                            <div class="switch_info">
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['user_name']; ?>：</div>
                                    <div class="label_value">
                                        <input type="text" id="user_name" name="user_name" class="text" value="<?php echo htmlspecialchars($this->_var['user']['user_name']); ?>" autocomplete="off" />
                                        <div class="form_prompt"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['email']; ?>：</div>
                                    <div class="label_value">
                                        <input type="text" name="email" class="text"  id="email" value="<?php echo htmlspecialchars($this->_var['user']['email']); ?>" autocomplete="off" />
                                        <div class="form_prompt"></div>
                                    </div>
                                </div>
                                <?php if ($this->_var['action'] == "add"): ?>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['password']; ?>：</div>
                                    <div class="label_value">
                                        <input type="password" style="display:none"/>
                                        <input type="password" name="password" class="text"  id="password"/>
                                        <div class="form_prompt"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['pwd_confirm']; ?>：</div>
                                    <div class="label_value">
                                        <input type="password" style="display:none"/>
                                        <input type="password" name="pwd_confirm" class="text" id="pwd_confirm"/>
                                        <div class="form_prompt"></div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                
                                <?php if ($this->_var['action'] != "add"): ?>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['new_password']; ?>：</div>
                                    <div class="label_value">
                                        <input type="password" style="display:none"/>
                                        <input type="password" name="new_password" class="text"id="new_password"/>
                                        <div class="form_prompt"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['pwd_confirm']; ?>：</div>
                                    <div class="label_value">
                                        <input type="password" style="display:none"/>
                                        <input type="password" name="pwd_confirm" class="text" id="pwd_confirm"/>
                                        <div class="form_prompt"></div>
                                    </div>
                                </div>
                                <?php if ($this->_var['user']['agency_name']): ?>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['agency']; ?>：</div>
                                    <div class="label_value">
                                        <?php echo $this->_var['user']['agency_name']; ?>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php endif; ?>
								<?php if ($this->_var['select_role'] && $this->_var['role_manage']): ?>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['select_role']; ?>：</div>
                                    <div class="label_value">
                                        <div  class="imitate_select select_w320">
                                          <div class="cite"><?php echo $this->_var['lang']['select_please']; ?></div>
                                          <ul>
                                             <li><a href="javascript:;" data-value="0" class="ftx-01"><?php echo $this->_var['lang']['select_please']; ?></a></li>
                                             <?php $_from = $this->_var['select_role']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                                             <li><a href="javascript:;" data-value="<?php echo $this->_var['list']['role_id']; ?>" class="ftx-01"><?php echo $this->_var['list']['role_name']; ?></a></li>
                                             <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                          </ul>
                                          <input name="select_role" type="hidden" value="<?php echo empty($this->_var['user']['role_id']) ? '0' : $this->_var['user']['role_id']; ?>" >
                                        </div>
                                    </div>
                                </div>
								<?php endif; ?>								
                                <div class="item">
                                    <div class="label">&nbsp;</div>
                                    <div class="label_value info_btn">
                                        <a href="javascript:;" class="button" id="submitBtn"><?php echo $this->_var['lang']['button_submit']; ?></a>
                                        <input type="hidden" name="act" value="<?php echo $this->_var['form_act']; ?>" />
                                        <input type="hidden" name="token" value="<?php echo $this->_var['token']; ?>" />
                                        <input type="hidden" name="id" value="<?php echo $this->_var['user']['user_id']; ?>" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
		</div>
    </div>
	<?php echo $this->fetch('library/pagefooter.lbi'); ?>
    <script type="text/javascript">
	var action = "<?php echo $this->_var['action']; ?>";
	$(function(){
		$("#submitBtn").click(function(){
			if($("#user_form").valid()){
				$("#user_form").submit();
			}
		});
		
		//添加表单验证js
		if(action == 'add'){
			$('#user_form').validate({
				errorPlacement:function(error, element){
					var error_div = element.parents('div.label_value').find('div.form_prompt');
					element.parents('div.label_value').find(".notic").hide();
					error_div.append(error);
				},
				rules : {
					user_name : {
						required : true
					},
					email : {
						required : true,
						email : true
					},
					password : {
						required : true,
						minlength:6
					},
					pwd_confirm : {
						required : true,
						equalTo:"#password"
					}
				},
				messages : {
					user_name : {
						required : '<i class="icon icon-exclamation-sign"></i>'+user_name_empty
					},
					email : {
						required : '<i class="icon icon-exclamation-sign"></i>'+email_empty,
						email : '<i class="icon icon-exclamation-sign"></i>'+email_error
					},
					password : {
						required : '<i class="icon icon-exclamation-sign"></i>'+password_empty,
						minlength : '<i class="icon icon-exclamation-sign"></i>'+password_invaild
					},
					pwd_confirm : {
						required : '<i class="icon icon-exclamation-sign"></i>'+pwd_confirm_empty,
						equalTo:'<i class="icon icon-exclamation-sign"></i>'+password_error
					}
				}
			});
		}
		
		//修改验证表单js
		if(action == 'edit'){
			$('#user_form').validate({
				errorPlacement:function(error, element){
					var error_div = element.parents('div.label_value').find('div.form_prompt');
					element.parents('div.label_value').find(".notic").hide();
					error_div.append(error);
				},
				rules : {
					user_name : {
						required : true
					},
					email : {
						required : true,
						email : true
					},
					new_password : {
						required : true,
						minlength:6
					},
					pwd_confirm : {
						required : true,
						equalTo:"#new_password"
					}
				},
				messages : {
					user_name : {
						required : '<i class="icon icon-exclamation-sign"></i>'+user_name_empty
					},
					email : {
						required : '<i class="icon icon-exclamation-sign"></i>'+email_empty,
						email : '<i class="icon icon-exclamation-sign"></i>'+email_error
					},
					new_password : {
						required : '<i class="icon icon-exclamation-sign"></i>'+new_password_empty,
						minlength : '<i class="icon icon-exclamation-sign"></i>'+new_password_error
					},
					pwd_confirm : {
						required : '<i class="icon icon-exclamation-sign"></i>'+pwd_confirm_empty,
						equalTo:'<i class="icon icon-exclamation-sign"></i>'+password_error
					}
				}
			});
		}
	});
    </script>     
</body>
</html>
