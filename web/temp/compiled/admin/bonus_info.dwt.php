<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><a href="bonus.php?act=list" class="s-back"><?php echo $this->_var['lang']['back']; ?></a><?php echo $this->_var['lang']['promotion']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
        	<div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['info']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['info']['1']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
                <div class="common-content">
                    <div class="mian-info">
                        <form action="bonus.php" method="post" name="theForm" enctype="multipart/form-data" id="bonus_form">
                            <div class="switch_info">
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['type_name']; ?>：</div>
                                    <div class="label_value">
										<?php if ($this->_var['bonus_arr']['usebonus_type'] == 0 || $this->_var['priv_ru']): ?>
										<input type='text' name='type_name' maxlength="30" value="<?php echo $this->_var['bonus_arr']['type_name']; ?>" size='20' class="text" />    
										<?php else: ?>
										<div class="red_text"><?php echo $this->_var['bonus_arr']['type_name']; ?></div>
										<?php endif; ?>
                                        <div class="form_prompt"></div>
									</div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['type_money']; ?>：</div>
                                    <div class="label_value">
										<?php if ($this->_var['bonus_arr']['usebonus_type'] == 0 || $this->_var['priv_ru']): ?>
										<input type="text" name="type_money" value="<?php echo $this->_var['bonus_arr']['type_money']; ?>" size="20" class="text" autocomplete="off" />
										<?php else: ?>
										<div class="red_text"><?php echo $this->_var['bonus_arr']['type_money']; ?></div>
										<?php endif; ?>
                                        <div class="form_prompt"></div>
                                        <div class="notic"><?php echo $this->_var['lang']['type_money_notic']; ?></div>
									</div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['min_goods_amount']; ?>：</div>
                                    <div class="label_value">
										<?php if ($this->_var['bonus_arr']['usebonus_type'] == 0 || $this->_var['priv_ru']): ?>
										<input name="min_goods_amount" type="text" id="min_goods_amount" value="<?php echo $this->_var['bonus_arr']['min_goods_amount']; ?>" size="20" class="text" autocomplete="off" />
										<?php else: ?>
										<div class="red_text"><?php echo $this->_var['bonus_arr']['min_goods_amount']; ?></div>
										<?php endif; ?>
                                        <div class="form_prompt"></div>
                                        <div class="notic"><?php echo $this->_var['lang']['notice_min_goods_amount']; ?></div>
									</div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['send_method']; ?>：</div>
                                    <div class="label_value">
                                        <div id="bonus_send_type" class="imitate_select select_w320">
                                          <div class="cite"><?php echo $this->_var['lang']['send_by']['0']; ?></div>
                                          <ul>
                                             <li><a href="javascript:;" data-value="0" class="ftx-01"><?php echo $this->_var['lang']['send_by']['0']; ?></a></li>
                                             <li><a href="javascript:;" data-value="1" class="ftx-01"><?php echo $this->_var['lang']['send_by']['1']; ?></a></li>
                                             <li><a href="javascript:;" data-value="2" class="ftx-01"><?php echo $this->_var['lang']['send_by']['2']; ?></a></li>
                                             <li><a href="javascript:;" data-value="3" class="ftx-01"><?php echo $this->_var['lang']['send_by']['3']; ?></a></li>
                                             <li><a href="javascript:;" data-value="4" class="ftx-01"><?php echo $this->_var['lang']['send_by']['4']; ?></a></li>
                                          </ul>
                                          <input name="send_type" type="hidden" value="<?php echo empty($this->_var['bonus_arr']['send_type']) ? '0' : $this->_var['bonus_arr']['send_type']; ?>" id="bonus_send_type_val">
                                        </div>
                                    </div>
                                </div>
                                <div class="item order_lower" <?php if ($this->_var['bonus_arr']['send_type'] != 2): ?>style="display:none;"<?php endif; ?>>
                                    <div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['min_amount']; ?>：</div>
                                    <div class="label_value">
										<?php if ($this->_var['bonus_arr']['usebonus_type'] == 0 || $this->_var['priv_ru']): ?>
										<input name="min_amount" type="text" id="min_amount" value="<?php echo $this->_var['bonus_arr']['min_amount']; ?>" size="20" class="text" autocomplete="off" />
										<?php else: ?>
										<div class="red_text"><?php echo $this->_var['bonus_arr']['min_amount']; ?></div>
										<?php endif; ?>
                                        <div class="form_prompt"></div>
										<div class="notic"><?php echo $this->_var['lang']['order_min_money_notic']; ?></div>
                                    </div>
                                </div>
                                <div class="item order_lower111 hide" <?php if ($this->_var['bonus_arr']['send_type'] != 2): ?>style="display:none;"<?php endif; ?>>
                                    <div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['max_amount']; ?>：</div>
                                    <div class="label_value">
										<?php if ($this->_var['bonus_arr']['usebonus_type'] == 0 || $this->_var['priv_ru']): ?>
										<input name="max_amount" type="text" id="max_amount" value="<?php echo $this->_var['bonus_arr']['max_amount']; ?>" size="20" class="text" autocomplete="off" />
										<?php else: ?>
										<div class="red_text"><?php echo $this->_var['bonus_arr']['min_amount']; ?></div>
										<?php endif; ?>
                                        <div class="form_prompt"></div>
										<div class="notic"><?php echo $this->_var['lang']['order_max_money_notic']; ?></div>
                                    </div>
                                </div>
								<?php if ($this->_var['priv_ru']): ?>
                                <div class="item">
								<div class="label"><?php echo $this->_var['lang']['use_type']; ?>：</div>
									<div id="usebonus_type" class="imitate_select select_w320">
									  <div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
									  <ul>
										 <li><a href="javascript:;" data-value="0" class="ftx-01"><?php echo $this->_var['lang']['autonomous_use']; ?></a></li>
										 <li><a href="javascript:;" data-value="1" class="ftx-01"><?php echo $this->_var['lang']['general_audience']; ?></a></li>
									  </ul>
                                      <input name="usebonus_type" type="hidden" value="<?php echo empty($this->_var['bonus_arr']['usebonus_type']) ? '0' : $this->_var['bonus_arr']['usebonus_type']; ?>" id="usebonus_type_val">
									</div>
                                </div>
								<?php else: ?>
								<?php if ($this->_var['bonus_arr']['usebonus_type']): ?>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['use_type']; ?>：</div>
									<div class="red_text"><?php echo $this->_var['lang']['general_audience']; ?></div>
								  <?php endif; ?>
							    <?php endif; ?>
								<div class="item" id="qizhi" <?php if ($this->_var['bonus_arr']['send_type'] == 0): ?>style="display:none;"<?php endif; ?>>
									<div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['start_enddate']; ?>：</div>
									<div class="label_value text_time">
                                    	<input type="text" name="send_start_date" value="<?php echo $this->_var['bonus_arr']['send_start_date']; ?>" id="send_start_date" class="text mr0" autocomplete="off" readonly />
									  	<span class="bolang">&nbsp;&nbsp;~&nbsp;&nbsp;</span>
                                        <input type="text" name="send_end_date" value="<?php echo $this->_var['bonus_arr']['send_end_date']; ?>" id="send_end_date" class="text" autocomplete="off" readonly />
										<div class="form_prompt"></div>
                                    </div>
								</div>
								<div class="item">
									<div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['use_start_enddate']; ?>：</div>
									<div class="label_value text_time">
                                    	<input type="text" name="use_start_date" value="<?php echo $this->_var['bonus_arr']['use_start_date']; ?>" id="use_start_date" class="text mr0" autocomplete="off" readonly />
									  	<span class="bolang">&nbsp;&nbsp;~&nbsp;&nbsp;</span>
                                        <input type="text" name="use_end_date" value="<?php echo $this->_var['bonus_arr']['use_end_date']; ?>" id="use_end_date" class="text" autocomplete="off" readonly />
                                        <div class="form_prompt"></div>
									</div>
								</div>
                                <?php if ($this->_var['form_act'] == 'update' && $this->_var['bonus_arr']['user_id'] != 0): ?>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['adopt_status']; ?>：</div>
                                    <div class="label_value">
                                        <div class="checkbox_items" ectype="general_audit_status">
                                            <div class="checkbox_item"> 
                                                <input name="review_status" type="radio" class="ui-radio" value="1" id="review_status_1" <?php if ($this->_var['bonus_arr']['review_status'] == 1): ?>checked="checked"<?php endif; ?> />
                                                <label for="review_status_1" class="ui-radio-label"><?php echo $this->_var['lang']['not_audited']; ?></label>
                                            </div>
                                            <div class="checkbox_item"> 
                                                <input name="review_status" type="radio" class="ui-radio" value="2" id="review_status_2" <?php if ($this->_var['bonus_arr']['review_status'] == 2): ?>checked="checked"<?php endif; ?> />
                                                <label for="review_status_2" class="ui-radio-label"><?php echo $this->_var['lang']['audited_not_adopt']; ?></label>
                                            </div>
                                            <div class="checkbox_item"> 
                                                <input name="review_status" type="radio" class="ui-radio" value="3" id="review_status_3" <?php if ($this->_var['bonus_arr']['review_status'] == 3): ?>checked="checked"<?php endif; ?> />
                                                <label for="review_status_3" class="ui-radio-label"><?php echo $this->_var['lang']['audited_yes_adopt']; ?></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>			
                                <div class="item <?php if ($this->_var['bonus_arr']['review_status'] != 2): ?>hide<?php endif; ?>" id="review_content">
                                    <div class="label"><?php echo $this->_var['lang']['adopt_reply']; ?>：</div>
                                    <div class="value">
                                        <textarea name="review_content" class="textarea h100"><?php echo $this->_var['bonus_arr']['review_content']; ?></textarea>
                                    </div>
                                </div>
                                <?php endif; ?>
								<?php if ($this->_var['bonus_arr']['usebonus_type'] == 0 || $this->_var['priv_ru']): ?>
                                <div class="item">
                                    <div class="label">&nbsp;</div>
                                    <div class="label_value info_btn">
										<input type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" id="submitBtn" />
										<input type="hidden" name="act" value="<?php echo $this->_var['form_act']; ?>" />
										<input type="hidden" name="type_id" value="<?php echo $this->_var['bonus_arr']['type_id']; ?>" />
                                    </div>
                                </div>
								<?php endif; ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
		</div>
	</div>
    <?php echo $this->fetch('library/pagefooter.lbi'); ?>
	<script type="text/javascript">
    $(function(){
        //红包类型切换
        $("input[name='send_type']").click(function(){
            var value = $(this).val();
            showunit(value);
        });
        
        $.divselect("#bonus_send_type","#bonus_send_type_val",function(obj){
            var val = obj.data("value");
            showunit(val);
        });
        
        <?php if (! $this->_var['bonus_arr']['send_type']): ?>
        $(":input[name='send_type']").prop("checked", false);
        $(":input[name='send_type']").eq(0).prop("checked", true);
        <?php endif; ?>
        
        //表单验证
        $("#submitBtn").click(function(){
            if($("#bonus_form").valid()){
                $("#bonus_form").submit();
            }
        });
    
        $('#bonus_form').validate({
            errorPlacement:function(error, element){
                var error_div = element.parents('div.label_value').find('div.form_prompt');
                element.parents('div.label_value').find(".notic").hide();
                error_div.append(error);
            },
            rules:{
                type_name :{
                    required : true
                },
                type_money:{
                    required : true,
                    number:true
                },
                min_goods_amount :{
                    required : true,
                    number:true
                },
				send_end_date:{
					compareDate:"#send_start_date"	
				},
                use_start_date : {
                    required : true,
                },
                use_end_date : {
                    required : true,
                    compareDate:"#use_start_date"
                }
            },
            messages:{
                type_name:{
                     required : '<i class="icon icon-exclamation-sign"></i>'+type_name_empty
                },
                type_money:{
                    required : '<i class="icon icon-exclamation-sign"></i>'+type_money_empty,
                    number:'<i class="icon icon-exclamation-sign"></i>'+type_money_isnumber
                },
                min_goods_amount:{
                    required : '<i class="icon icon-exclamation-sign"></i>'+min_order_total,
                    number:'<i class="icon icon-exclamation-sign"></i>'+type_money_isnumber
                },
				send_end_date:{
					compareDate : '<i class="icon icon-exclamation-sign"></i>'+data_invalid_gt
				},
                use_start_date :{
                    required : '<i class="icon icon-exclamation-sign"></i>'+start_data_notnull
                },
                use_end_date :{
                    required : '<i class="icon icon-exclamation-sign"></i>'+end_data_notnull,
                    compareDate:'<i class="icon icon-exclamation-sign"></i>'+data_invalid_gt
                }
            },
			onfocusout:function(element,event){
				//实时去除结束时间是否大于开始时间验证
				var name = $(element).attr("name");
				
				if(name == "send_end_date"){
					var endDate = $(element).val();
					var startDate = $(element).siblings("input[name='send_start_date']").val();
					
					var date1 = new Date(Date.parse(startDate.replace(/-/g, "/")));
					var date2 = new Date(Date.parse(endDate.replace(/-/g, "/")));
					
					if(date1 > date2){
						$(element).removeClass("error");
						$(element).siblings(".form_prompt").html("");
					}
				}else if(name == "use_end_date"){
					var endDate = $(element).val();
					var startDate = $(element).siblings("input[name='use_start_date']").val();
					
					var date1 = new Date(Date.parse(startDate.replace(/-/g, "/")));
					var date2 = new Date(Date.parse(endDate.replace(/-/g, "/")));
					
					if(date1 > date2){
						$(element).removeClass("error");
						$(element).siblings(".form_prompt").html("");
					}
				}
			}
        });
    });
    
    function showunit(get_value)
    {
        if(get_value != 1 && get_value != 2){
            $('#qizhi').hide();
        }else{
            $('#qizhi').show();
        }
        
        if(get_value == 2){
            $(".order_lower").show();
        }else{
            $(".order_lower").hide();
        }
        
        return;
    }
    
    //时间选择
    var opts1 = {
        'targetId':'send_start_date',//时间写入对象的id
        'triggerId':['send_start_date'],//触发事件的对象id
        'alignId':'send_start_date',//日历对齐对象
        'format':'-',//时间格式 默认'YYYY-MM-DD HH:MM:SS'
        //'min':'<?php echo $this->_var['bonus_arr']['send_start_date']; ?>' //最小时间
    },opts2 = {
        'targetId':'send_end_date',
        'triggerId':['send_end_date'],
        'alignId':'send_end_date',
        'format':'-',
        //'min':'<?php echo $this->_var['bonus_arr']['send_end_date']; ?>'
    }
    
    var opts3 = {
        'targetId':'use_start_date',
        'triggerId':['use_start_date'],
        'alignId':'use_start_date',
        'format':'-',
        //'min':'<?php echo $this->_var['bonus_arr']['use_start_date']; ?>'
    },opts4 = {
        'targetId':'use_end_date',
        'triggerId':['use_end_date'],
        'alignId':'use_end_date',
        'format':'-',
        //'min':'<?php echo $this->_var['bonus_arr']['use_end_date']; ?>'
    }
    xvDate(opts1);
    xvDate(opts2);
    xvDate(opts3);
    xvDate(opts4);
    </script>   
</body>
</html>
