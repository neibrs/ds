<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><a href="<?php echo $this->_var['action_link']['href']; ?>" class="s-back"><?php echo $this->_var['lang']['back']; ?></a><?php echo $this->_var['lang']['10_priv_admin']; ?> - <?php echo $this->_var['ur_here']; ?></div>
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
                <div class="mian-info">
                    <form method="post" action="agency.php" name="theForm" enctype="multipart/form-data"  id="agency_form">
                        <div class="switch_info user_basic" style="display:block;">
                            <div class="item">
                                <div class="label"><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['lang']['label_agency_desc']; ?></div>
                                <div class="label_value">
                                    <input type="text" name='agency_name' value='<?php echo $this->_var['agency']['agency_name']; ?>' class="text" autocomplete="off" id="vote_name"/>
                                    <div class="form_prompt"></div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="label"><?php echo $this->_var['lang']['role_describe']; ?>：</div>
                                <div class="label_value">
                                    <textarea class="textarea" name="agency_desc" id="role_describe"><?php echo $this->_var['agency']['agency_desc']; ?></textarea>
                                </div>
                            </div>
                            <div class="item">
                                <div class="label"><?php echo $this->_var['lang']['label_admins']; ?></div>
                                <div class="label_value">
                                    <div class="checkbox_items">
                                        <?php $_from = $this->_var['agency']['admin_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'admin');if (count($_from)):
    foreach ($_from AS $this->_var['admin']):
?>
                                        <div class="checkbox_item">
                                            <?php if ($this->_var['admin']['type'] == "other"): ?><span class="red">*</span><?php endif; ?>
                                            <input type="checkbox" value="<?php echo $this->_var['admin']['user_id']; ?>" name="admins[]" class="ui-checkbox" id="checked_<?php echo $this->_var['admin']['user_id']; ?>" <?php if ($this->_var['admin']['type'] == "this"): ?>checked="checked"<?php endif; ?> />
                                            <label for="checked_<?php echo $this->_var['admin']['user_id']; ?>" class="ui-label"><?php echo $this->_var['admin']['user_name']; ?></label>
                                        </div>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                        <div class="notic m20"><?php echo $this->_var['lang']['notice_admins']; ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="label"><?php echo $this->_var['lang']['label_regions']; ?></div>
                                <div class="label_value">
                                	<div class="level_linkage">
                                    	<div class="fl">
                                            <div class="ui-dropdown smartdropdown alien">
                                                <input type="hidden" value="0" name="province" id="selProvinces">
                                                <div class="txt"><?php echo $this->_var['lang']['province_alt']; ?></div>
                                                <i class="down u-dropdown-icon"></i>
                                                <div class="options clearfix" style="max-height:300px;">
                                                    <?php $_from = $this->_var['Province_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                                                    <span class="liv" data-text="<?php echo $this->_var['list']['region_name']; ?>" data-type="2"  data-value="<?php echo $this->_var['list']['region_id']; ?>"><?php echo $this->_var['list']['region_name']; ?></span>
                                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                                </div>
                                            </div>
                                            <div id="dlCity" class="ui-dropdown smartdropdown alien">
                                                <input type="hidden" value="0" name="city" id="selCities">
                                                <div class="txt"><?php echo $this->_var['lang']['city']; ?></div>
                                                <i class="down u-dropdown-icon"></i>
                                                <div class="options clearfix" style="max-height:300px;">
                                                    <span class="liv hide" data-text="<?php echo $this->_var['lang']['city']; ?>" data-value="0"><?php echo $this->_var['lang']['city']; ?></span>
                                                </div>
                                            </div>
                                            <div id="dlRegion" class="ui-dropdown smartdropdown alien">
                                                <input type="hidden" value="0" name="district" id="selDistricts">
                                                <div class="txt"><?php echo $this->_var['lang']['area_alt']; ?></div>
                                                <i class="down u-dropdown-icon"></i>
                                                <div class="options clearfix" style="max-height:300px;">
                                                    <span class="liv hide" data-text="<?php echo $this->_var['lang']['area_alt']; ?>" data-value="0"><?php echo $this->_var['lang']['area_alt']; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="btn red_btn btn30 fl" ectype="addPrivilege"><i class="sc_icon sc_icon_warehouse"></i><?php echo $this->_var['lang']['add_region_btn']; ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="label">&nbsp;</div>
                                <div class="label_value">
                                    <div class="checkbox_items" id="regionCell">
                                        <?php $_from = $this->_var['agency']['region_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'region');if (count($_from)):
    foreach ($_from AS $this->_var['region']):
?>
                                        <div class="checkbox_item">
                                            <?php if ($this->_var['admin']['type'] == "other"): ?><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php endif; ?>
                                            <input type="checkbox" value="<?php echo $this->_var['region']['region_id']; ?>" name="regions[]" class="ui-checkbox" id="region_<?php echo $this->_var['region']['region_id']; ?>" checked="true"/>
                                            <label for="region_<?php echo $this->_var['region']['region_id']; ?>" class="ui-label"><?php echo $this->_var['region']['region_name']; ?></label>
                                        </div>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="label">&nbsp;</div>
                                <div class="label_value info_btn mt0">
                                    <a href="javascript:;" class="button" id="submitBtn"><?php echo $this->_var['lang']['button_submit']; ?></a>
                                    <input type="hidden" name="act" value="<?php echo $this->_var['form_action']; ?>" />
                                    <input type="hidden" name="id" value="<?php echo $this->_var['agency']['agency_id']; ?>" />
                                    <input type="hidden" name="qqq" id="qqq" value="" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 <?php echo $this->fetch('library/pagefooter.lbi'); ?>
    <script type="text/javascript" src="js/region.js"></script>
    <script type="text/javascript">
		//表单验证
		$(function(){
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
					agency_name:{
						required:true
					}
				},
				messages:{
					agency_name:{
						required:'<i class="icon icon-exclamation-sign"></i>'+no_agencyname
					}
				}
			});
		});
		
		$.levelLink();//地区三级联动

		/*添加管辖地区*/
		$("a[ectype='addPrivilege']").on("click",function(){
			var selProvince = $('#selProvinces');
			var selCity     = $('#selCities');
			var selDistrict = $('#selDistricts');
			var regionCell  = $('#regionCell');
			
			var regionId = 0;
			var regionName = '';
			if (selDistrict.val() > 0)
			{
				regionId = selDistrict.val();
				regionName = selDistrict.next(".txt").text();
			}else{
				if(selCity.val() > 0){
					regionId = selCity.val();
					regionName = selCity.next(".txt").text();
				}else{
					if(selProvince.val() > 0){
						regionId = selProvince.val();
						regionName = selProvince.next(".txt").text();
					}else{
						regionId = 1;
						regionName = "<?php echo $this->_var['lang']['nationwide']; ?>";
					}
				}
			}
			// 检查该地区是否已经存在
			exists = false;
			$('input:checkbox[type="checkbox"]').each(function()
			{
				if($(this).attr("name") == 'regions[]'){
					if($(this).val()  == regionId){
						exists = true;
						return false;
					}
				}
			});
			// 创建checkbox
			if (exists == false)
			{
			  regionCell.append('<div class="checkbox_item"><input type="checkbox" value="'+regionId+'" name="regions[]" class="ui-checkbox" id="region_'+regionId+'" checked="true" /><label for="region_'+regionId+'" class="ui-label">'+regionName+'</label></div>');
			}else{
				alert(region_exists);
			}
		});
    </script>
</body>
</html>
