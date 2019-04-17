<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><a href="<?php echo $this->_var['action_link']['href']; ?>" class="s-back"></a><?php echo $this->_var['lang']['11_system']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
        	<div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                	<li><?php echo $this->_var['lang']['operation_prompt_content']['info']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content_common']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
                <div class="common-content">
                    <div class="mian-info">
                        <form action="reg_fields.php" method="post" name="theForm" id="reg_form">
                    	<div class="switch_info">
                            <div class="stepfirst">
                                <div class="items">
                                    <div class="item">
                                        <div class="label"><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['lang']['reg_field_name']; ?>：</div>
                                        <div class="value">
                                            <input type="text" class="text" name="reg_field_name"  value="<?php echo $this->_var['reg_field']['reg_field_name']; ?>" id="reg_field_name" autocomplete="off" /><div class="form_prompt"></div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="label"><?php echo $this->_var['lang']['field_order']; ?>：</div>
                                        <div class="value">
                                            <input type="text" class="text" name="reg_field_order"  value="<?php echo $this->_var['reg_field']['reg_field_order']; ?>" id="reg_field_order" autocomplete="off" />
                                            <div class="form_prompt"></div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="label"><?php echo $this->_var['lang']['field_display']; ?>：</div>
                                        <div class="label_value">
                                            <div class="checkbox_items">
                                                <div class="checkbox_item">
                                                    <input type="radio" class="ui-radio" name="reg_field_display" id="sex_1" value="1" <?php if ($this->_var['reg_field']['reg_field_display'] == 1): ?>checked='checked'<?php endif; ?> />
                                                    <label for="sex_1" class="ui-radio-label"><?php echo $this->_var['lang']['yes']; ?></label>
                                                </div>
                                                <div class="checkbox_item">
                                                    <input type="radio" class="ui-radio" name="reg_field_display" id="sex_2" value="0" <?php if ($this->_var['reg_field']['reg_field_display'] == 0): ?>checked='checked'<?php endif; ?> />
                                                    <label for="sex_2" class="ui-radio-label"><?php echo $this->_var['lang']['no']; ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="label"><?php echo $this->_var['lang']['field_need']; ?>：</div>
                                        <div class="label_value">
                                            <div class="checkbox_items">
                                                <div class="checkbox_item">
                                                    <input type="radio" class="ui-radio" name="reg_field_need" id="sex_3" value="1" <?php if ($this->_var['reg_field']['reg_field_need'] == 1): ?>checked='checked'<?php endif; ?> />
                                                    <label for="sex_3" class="ui-radio-label"><?php echo $this->_var['lang']['yes']; ?></label>
                                                </div>
                                                <div class="checkbox_item">
                                                    <input type="radio" class="ui-radio" name="reg_field_need" id="sex_4" value="0" <?php if ($this->_var['reg_field']['reg_field_need'] == 0): ?>checked='checked'<?php endif; ?> />
                                                    <label for="sex_4" class="ui-radio-label"><?php echo $this->_var['lang']['no']; ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                    	<div class="label">&nbsp;</div>
                                        <div class="label_value info_btn">
                                        	<a href="javascript:;" class="button" id="submitBtn"><?php echo $this->_var['lang']['button_submit']; ?></a>
                                            <input type="hidden" name="act" value="<?php echo $this->_var['form_action']; ?>" />
                                            <input type="hidden" name="id" value="<?php echo $this->_var['reg_field']['reg_field_id']; ?>" />
                                            <input type="hidden" name="old_field_name" value="<?php echo $this->_var['reg_field']['reg_field_name']; ?>" />
                                        </div>
                                    </div>
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
    <script language="javascript">
	//表单验证
	$(function(){
		$("#submitBtn").click(function(){
			if($("#reg_form").valid()){
				$("#reg_form").submit();
			}
		});

		$('#reg_form').validate({
			errorPlacement:function(error, element){
				var error_div = element.parents('div.value').find('div.form_prompt');
				error_div.append(error);
			},
			rules:{
				reg_field_name:{
					required:true
				}
			},
			messages:{
				reg_field_name:{
					required:'<i class="icon icon-exclamation-sign"></i>'+field_name_empty
				}
			}
		});
	});
    </script>
</body>
</html>
