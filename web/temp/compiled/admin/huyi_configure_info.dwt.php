<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
<div class="warpper">
    <div class="title"><a href="<?php echo $this->_var['action_link']['href']; ?>" class="s-back"><?php echo $this->_var['lang']['back']; ?></a><?php echo $this->_var['lang']['sms_management']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
        <div class="explanation" id="explanation">
            <div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
            <ul>
                <li><?php echo $this->_var['lang']['operation_prompt_content_common']; ?></li>
                <li><?php echo $this->_var['lang']['operation_prompt_content']['info']['0']; ?></li>
                <li><?php echo $this->_var['lang']['operation_prompt_content']['info']['1']; ?></li>
            </ul>
        </div>
        <div class="flexilist">
            <div class="mian-info">
                <form action="huyi_configure.php" method="post" name="theForm" enctype="multipart/form-data"  id="agency_form">
                    <div class="switch_info user_basic" style="display:block;">
                        <div class="item">
                            <div class="label"><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['lang']['temp_content']; ?>：</div>
                            <div class="label_value">
                                <textarea id='temp_content' name='temp_content' placeholder="<?php echo $this->_var['lang']['variable_format']; ?>：${name}; <?php echo $this->_var['lang']['temp_placeholder']['0']; ?>${code}，<?php echo $this->_var['lang']['temp_placeholder']['1']; ?>${product}<?php echo $this->_var['lang']['temp_placeholder']['2']; ?>" value=''  cols="60" rows="4" class="textarea" ><?php echo htmlspecialchars($this->_var['note']['temp_content']); ?></textarea>
                                <div class="form_prompt"></div>
                            </div>
                        </div>
                        <div class="item str_variable">
                            <div class="label"><?php echo $this->_var['lang']['available_variables']; ?>：</div>
                            <div class="label_value">
                                <div class="notic m20 aliyu_var">
                                    <p>1、<?php echo $this->_var['lang']['huyi']; ?>：<em id="company"></em></p>
                                    <p>2、<?php echo $this->_var['lang']['variable_explain']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="label"><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['lang']['send_time']; ?>：</div>
                            <div class="label_value">
                                <div id="send_time_box" class="imitate_select select_w320">
                                  <div class="cite"><?php if ($this->_var['cat_name']): ?><?php echo $this->_var['cat_name']; ?><?php else: ?><?php echo $this->_var['lang']['cat_top']; ?><?php endif; ?></div>
                                  <ul class="upward">
                                      <li><a href="javascript:;" data-value=""  class="ftx-01"><?php echo $this->_var['lang']['select_please']; ?></a></li>
                                      <?php $_from = $this->_var['send_time']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['list']):
?>
                                      <li><a href="javascript:;" data-value="<?php echo $this->_var['list']; ?>"  class="ftx-01"><?php echo $this->_var['key']; ?></a></li>
                                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                  </ul>
                                  <input name="send_time" type="hidden" value="<?php echo $this->_var['note']['send_time']; ?>" id="send_time">
                                </div>
                                <div class="form_prompt"></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="label">&nbsp;</div>
                            <div class="label_value info_btn mt0">
                                <input type="hidden" name="id" value="<?php echo empty($this->_var['note']['id']) ? '0' : $this->_var['note']['id']; ?>" />
                                <input type="hidden" name="act" value="<?php echo $this->_var['form_act']; ?>" />
                                <input type="submit" name="submit" id="submitBtn" class="button" value="<?php echo $this->_var['lang']['button_submit']; ?>" />
                                <input class="button button_reset" type="button" value="<?php echo $this->_var['lang']['detection_sms_template']; ?>" onclick="get_sms_template();" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php echo $this->fetch('library/pagefooter.lbi'); ?>
<script type="text/javascript">
$(function(){
	<?php if ($this->_var['note']['id']): ?>
	loadTemplate(<?php echo $this->_var['note']['id']; ?>);
	<?php endif; ?>
	
	$(".str_variable").hide();
	
	$("input[name='signature']").change(function(){
		var isval = $(this).val();
		if(isval == 1){
			$("#signature").show();
		}else{
			$("#signature").hide();
		}
	});
	
	//表单验证
	$("#submitBtn").click(function(){
		if($("#agency_form").valid()){
			$("#agency_form").submit();
		}
	});

	$('#agency_form').validate({
		errorPlacement:function(error, element){
			var error_div = element.parents('div.label_value').find('div.form_prompt');
			element.parents('div.label_value').find(".notic").hide();
			error_div.append(error);
		},
		rules:{
			temp_content:{
				required:true
			},
			send_time:{
				required:true
			}
		},
		messages:{
			temp_content:{
				required:'<i class="icon icon-exclamation-sign"></i>'+temp_content_notic
			},
			send_time:{
				required:'<i class="icon icon-exclamation-sign"></i>'+send_time_notic
			}
		}
	});
});

$.divselect("#send_time_box","#send_time",function(obj){
	loadTemplate();
});
	
function loadTemplate(id)
{
	var orgContent = '';
	var curContent = $('#temp_content').val();
	
	if (orgContent != curContent && orgContent != '')
	{
		if (!confirm(save_confirm)){
			return;
		}
	}
	
	var tpl = $('#send_time').val();
	
	if(id){
		var id = '&id=' + id;
	}else{
		var id = "";
	}

	$.jqueryAjax('huyi_configure.php', 'act=loat_template&tpl=' + tpl + id, loadTemplateResponse, "GET", "JSON");
}

/**
 * 将模板的内容载入到文本框中
 */
function loadTemplateResponse(result, textResult)
{
	var company;
	
	if (result.error == 0){
		$("#temp_content").val(result.content);
	}
	
	if(result.tpl == 'sms_order_placed' || result.tpl == 'sms_order_payed'){
		company = "shop_name(<?php echo $this->_var['lang']['steps_shop_name']; ?>), order_sn(<?php echo $this->_var['lang']['order_id']; ?>), consignee(<?php echo $this->_var['lang']['consignee']; ?>), order_region(<?php echo $this->_var['lang']['consignee_region']; ?>), address(<?php echo $this->_var['lang']['consignee_address']; ?>), order_mobile(<?php echo $this->_var['lang']['contact_way']; ?>)";
	}else if(result.tpl == 'sms_order_shipped'){
		company = "shop_name(<?php echo $this->_var['lang']['steps_shop_name']; ?>), user_name(<?php echo $this->_var['lang']['member_name']; ?>), consignee(<?php echo $this->_var['lang']['consignee']; ?>), order_sn(<?php echo $this->_var['lang']['order_id']; ?>),invoice_no(<?php echo $this->_var['lang']['invoice_no']; ?>)";
	}else if(result.tpl == 'sms_signin'){
		company = "code(<?php echo $this->_var['lang']['verification_code']; ?>), product(<?php echo $this->_var['lang']['member_name']; ?>)";
	}else if(result.tpl == 'sms_find_signin' || result.tpl == 'sms_code'){
		company = "code(<?php echo $this->_var['lang']['verification_code']; ?>)";
	}else if(result.tpl == 'sms_price_notic'){
        company = "user_name(<?php echo $this->_var['lang']['username']; ?>), goodsname(<?php echo $this->_var['lang']['goodsname']; ?>), goodsprice(<?php echo $this->_var['lang']['goodsprice']; ?>)";
	}else if(result.tpl == 'sms_seller_signin'){
		company = "seller_name( <?php echo $this->_var['lang']['goods_steps_name']; ?>), login_name(<?php echo $this->_var['lang']['login_account']; ?>),password(<?php echo $this->_var['lang']['login_password']; ?>)";
	}else if(result.tpl == 'store_order_code'){
		company = "user_name( <?php echo $this->_var['lang']['goods_steps_name']; ?>), order_sn(<?php echo $this->_var['lang']['order_id']; ?>),code(<?php echo $this->_var['lang']['code']; ?>),store_address(<?php echo $this->_var['lang']['store_address']; ?>)";
	}else if(result.tpl == 'user_account_code'){
		company = "user_name(<?php echo $this->_var['lang']['username']; ?>),add_time(<?php echo $this->_var['lang']['add_time']; ?>),fmt_amount(<?php echo $this->_var['lang']['fmt_amount']; ?>),process_type(<?php echo $this->_var['lang']['process_type']; ?>),op_time(<?php echo $this->_var['lang']['op_time']; ?>),examine(<?php echo $this->_var['lang']['examine']; ?>),user_money(<?php echo $this->_var['lang']['user_money']; ?>)";
	} else if(result.tpl == 'sms_seller_grade_time'){
        company = "username(<?php echo $this->_var['lang']['username']; ?>),gradeendtime(<?php echo $this->_var['lang']['grade_end_time']; ?>)";
    }
	
	if(result.tpl){
		$(".str_variable").show();
	}else{
		$(".str_variable").hide();
	}
	
	$("#company").html(company);
}

function get_sms_template(){
	var temp_content = $(":input[name='temp_content']").val();
	var send_time = $(":input[name='send_time']").val();
	var sms_type = 0;
	
	$.jqueryAjax('huyi_configure.php', 'act=sms_template' + "&temp_content=" + temp_content + "&send_time=" + send_time + "&sms_type=" + sms_type, smsTemplateResponse, "GET", "JSON");
}

function smsTemplateResponse(result){
	if(result.error == 1){
		alert(set_sms_phone);
	}else if(result.error == 2){
		alert(sms_temp_set_notic);
	}else{
		alert(send_success);
	}
}
</script>
</body>
</html>
