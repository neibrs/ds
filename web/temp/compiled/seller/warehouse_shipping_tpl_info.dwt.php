<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><?php echo $this->fetch('library/seller_html_head.lbi'); ?></head>

<body>
<?php echo $this->fetch('library/seller_header.lbi'); ?>
<div class="ecsc-layout">
    <div class="site wrapper">
		<?php echo $this->fetch('library/seller_menu_left.lbi'); ?>
		<div class="ecsc-layout-right">
            <div class="main-content" id="mainContent">
				<?php echo $this->fetch('library/url_here.lbi'); ?>
				<?php echo $this->fetch('library/seller_menu_tab.lbi'); ?>
                <div class="ecsc-form-goods">
                <form method="post" action="warehouse.php" name="theForm" enctype="multipart/form-data">
                <div class="wrapper-list">
                	<dl>
                    	<dt><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['lang']['label_template_name']; ?></dt>
                        <dd><input type="text" name="tpl_name" maxlength="60" size="20" value="<?php if ($this->_var['shipping_area']['tpl_name']): ?><?php echo $this->_var['shipping_area']['tpl_name']; ?><?php endif; ?>" class="text"></dd>
                    </dl>
                    <dl>
                    	<dt><?php echo $this->_var['lang']['label_start_send_area']; ?></dt>
                        <dd>
                        	<div class="checkbox_items">
                            <?php $_from = $this->_var['warehouse_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'warehouse');if (count($_from)):
    foreach ($_from AS $this->_var['warehouse']):
?>
                            <div class="checkbox_item">
                                <input name="warehouse_id[<?php echo $this->_var['warehouse']['region_id']; ?>]" value="<?php echo $this->_var['warehouse']['region_id']; ?>" id="checkbox_<?php echo $this->_var['warehouse']['region_id']; ?>" class="ui-checkbox" type="checkbox" <?php if ($this->_var['warehouse']['check_status'] == 1): ?>checked="checked"<?php endif; ?>>
                                <label for="checkbox_<?php echo $this->_var['warehouse']['region_id']; ?>" class="ui-label"><?php echo $this->_var['warehouse']['region_name']; ?></label>
                            </div>    
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </div>
                        </dd>
                    </dl>
                    <dl>
                    	<dt><?php echo $this->_var['lang']['label_express_deliver']; ?></dt>
                        <dd>
                            <div id="shipping_id" class="imitate_select select_w320">
                              <div class="cite"><?php echo $this->_var['lang']['select_please']; ?></div>
                              <ul>
                                 <?php $_from = $this->_var['shipping_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'shipping');if (count($_from)):
    foreach ($_from AS $this->_var['shipping']):
?>
                                 <?php if ($this->_var['shipping']['shipping_id'] == $this->_var['shipping_id']): ?>
                                 <li><a href="javascript:;" data-value="<?php echo $this->_var['shipping']['shipping_id']; ?>" class="ftx-01"><?php echo $this->_var['shipping']['shipping_name']; ?></a></li>
                                 <?php endif; ?>
                                 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                              </ul>
                              <input name="shipping_id" type="hidden" value="<?php echo $this->_var['shipping_id']; ?>" id="shipping_id_val">
                            </div>
                        </dd>
                    </dl>
                    <?php if ($this->_var['shipping_area']['shipping_code'] == 'ems' || $this->_var['shipping_area']['shipping_code'] == 'yto' || $this->_var['shipping_area']['shipping_code'] == 'zto' || $this->_var['shipping_area']['shipping_code'] == 'sto_express' || $this->_var['shipping_area']['shipping_code'] == 'post_mail' || $this->_var['shipping_area']['shipping_code'] == 'sf_express' || $this->_var['shipping_area']['shipping_code'] == 'post_express'): ?>
                    <dl>
                    	<dt><?php echo $this->_var['lang']['fee_compute_mode']; ?>：</dt>
                        <dd>
                        	<div class="checkbox_items">
                            	<div class="checkbox_item">
                            		<input type="radio" class="ui-radio" <?php if ($this->_var['fee_compute_mode'] != 'by_number'): ?>checked="true"<?php endif; ?> onclick="compute_mode('<?php echo $this->_var['shipping_area']['shipping_code']; ?>','weight')" name="fee_compute_mode" id="by_weight" value="by_weight" /><label class="ui-radio-label" for="by_weight"><?php echo $this->_var['lang']['fee_by_weight']; ?></label>
                                </div>
                                <div class="checkbox_item">
                                    <input type="radio" class="ui-radio" <?php if ($this->_var['fee_compute_mode'] == 'by_number'): ?>checked="true"<?php endif; ?>  onclick="compute_mode('<?php echo $this->_var['shipping_area']['shipping_code']; ?>','number')" name="fee_compute_mode" id="by_number" value="by_number" /><label class="ui-radio-label" for="by_number"><?php echo $this->_var['lang']['fee_by_number']; ?></label>
                                </div>    
                            </div>
                        </dd>
                    </dl>
                    <?php endif; ?>
                    <!--<?php if ($this->_var['shipping_area']['shipping_code'] != 'cac'): ?>-->
                    <?php $_from = $this->_var['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'field');if (count($_from)):
    foreach ($_from AS $this->_var['field']):
?>
                    <!--<?php if ($this->_var['fee_compute_mode'] == 'by_number'): ?>-->
                        <!--<?php if ($this->_var['field']['name'] == 'item_fee' || $this->_var['field']['name'] == 'free_money' || $this->_var['field']['name'] == 'pay_fee'): ?>-->
                        <dl id="<?php echo $this->_var['field']['name']; ?>">
                            <dt><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['field']['label']; ?>：</dt>
                            <dd><input type="text" name="<?php echo $this->_var['field']['name']; ?>"  maxlength="60" size="20" value="<?php echo $this->_var['field']['value']; ?>" class="text text_2" /></dd>
                        </dl>
                        <!--<?php else: ?>-->
                        <dl id="<?php echo $this->_var['field']['name']; ?>" style="display:none">
                            <dt><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['field']['label']; ?>：</dt>
                            <dd><input type="text" name="<?php echo $this->_var['field']['name']; ?>"  maxlength="60" size="20" value="<?php echo $this->_var['field']['value']; ?>" class="text text_2" /></dd>
                        </dl>
                        <!--<?php endif; ?>-->
                    <!--<?php else: ?>-->
                    	<!--<?php if ($this->_var['field']['name'] != 'item_fee'): ?>-->
                        <dl id="<?php echo $this->_var['field']['name']; ?>">
                            <dt><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['field']['label']; ?>：</dt>
                            <dd><input type="text" name="<?php echo $this->_var['field']['name']; ?>"  maxlength="60" size="20" value="<?php echo $this->_var['field']['value']; ?>" class="text text_2" /></dd>
                        </dl>
                        <!--<?php else: ?>-->
                        <dl id="<?php echo $this->_var['field']['name']; ?>" style="display:none">
                            <dt><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['field']['label']; ?>：</dt>
                            <dd><input type="text" name="<?php echo $this->_var['field']['name']; ?>"  maxlength="60" size="20" value="<?php echo $this->_var['field']['value']; ?>" class="text text_2" /></dd>
                        </dl>
                        <!--<?php endif; ?>-->
                    <!--<?php endif; ?>-->
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    <!--<?php endif; ?>-->
                    <dl>
                    	<dt><?php echo $this->_var['lang']['label_terminus_ad_quem']; ?></dt>
                        <dd>
                        	<!--<?php if ($this->_var['shipping_area']['shipping_code'] != 'cac'): ?>-->
                            <div class="checkbox_items" id="regionCell">
                            <?php $_from = $this->_var['regions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('id', 'region');if (count($_from)):
    foreach ($_from AS $this->_var['id'] => $this->_var['region']):
?>
                            <label><input type="checkbox" name="regions[]" class="checkbox" value="<?php echo $this->_var['id']; ?>" checked="true" /><?php echo $this->_var['region']; ?></label>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </div>
                            <!--<?php endif; ?>-->
                        </dd>
                    </dl>
                    <dl>
                    	<dt>&nbsp;</dt>
                        <dd>
                                <div id="selCountries" class="ui-dropdown smartdropdown alien mr15">
                                    <input type="hidden" value="1" name="country" id="selcountry">
                                        <div class="txt"><?php echo $this->_var['lang']['country']; ?></div>
                                        <i class="down u-dropdown-icon"></i>
                                        <div class="options clearfix" style="max-height:300px;">
                                            <?php $_from = $this->_var['countries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                                            <span class="liv" data-text="<?php echo $this->_var['list']['region_name']; ?>" data-type="1"  data-value="<?php echo $this->_var['list']['region_id']; ?>"><?php echo $this->_var['list']['region_name']; ?></span>
                                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                        </div>
                                </div>
                            <div id="dlProvinces" class="ui-dropdown smartdropdown alien">
                                <input type="hidden" value="<?php echo $this->_var['province']['region_id']; ?>" name="province" id="selProvinces">
                                    <div class="txt"><?php echo $this->_var['lang']['province_alt']; ?></div>
                                    <i class="down u-dropdown-icon"></i>
                                    <div class="options clearfix" style="max-height:300px;">
                                        <?php $_from = $this->_var['province_all']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                                        <span class="liv" data-text="<?php echo $this->_var['list']['region_name']; ?>" data-type="2"  data-value="<?php echo $this->_var['list']['region_id']; ?>"><?php echo $this->_var['list']['region_name']; ?></span>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </div>
                            </div>
                            <div id="dlCity" class="ui-dropdown smartdropdown alien">
                                <input type="hidden" value="<?php echo $this->_var['city']['region_id']; ?>" name="city" id="selCities">
                                    <div class="txt"><?php echo $this->_var['lang']['city']; ?></div>
                                    <i class="down u-dropdown-icon"></i>
                                    <div class="options clearfix" style="max-height:300px;">
                                        <?php $_from = $this->_var['city_all']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                                        <span class="liv" data-text="<?php echo $this->_var['list']['region_name']; ?>" data-type="3"  data-value="<?php echo $this->_var['list']['region_id']; ?>"><?php echo $this->_var['list']['region_name']; ?></span>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </div>
                            </div>
                           <div id="dlRegion" class="ui-dropdown smartdropdown alien">
                            <input type="hidden" value="<?php echo $this->_var['district']['region_id']; ?>" name="district" id="selDistricts">
                                <div class="txt"><?php echo $this->_var['lang']['area_alt']; ?></div>
                                <i class="down u-dropdown-icon"></i>
                                <div class="options clearfix" style="max-height:300px;">
                                    <?php $_from = $this->_var['district_all']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                                    <span class="liv" data-text="<?php echo $this->_var['list']['region_name']; ?>" data-type="4"  data-value="<?php echo $this->_var['list']['region_id']; ?>"><?php echo $this->_var['list']['region_name']; ?></span>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </div>
                        </div>
                        <div id="dlStreet" class="ui-dropdown smartdropdown alien">
                            <input type="hidden" value="<?php echo $this->_var['street']['region_id']; ?>" name="street" id="selStreet">
                                <div class="txt"><?php echo $this->_var['lang']['street']; ?></div>
                                <i class="down u-dropdown-icon"></i>
                                <div class="options clearfix" style="max-height:300px;">
                                    <?php $_from = $this->_var['street_all']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    < <span class="liv" data-text="<?php echo $this->_var['list']['region_name']; ?>" data-type="5"  data-value="<?php echo $this->_var['list']['region_id']; ?>"><?php echo $this->_var['list']['region_name']; ?></span>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </div>
                        </div>
                            <?php if ($this->_var['shipping_area']['shipping_code'] != 'cac'): ?><span class="ml10"><input type="button" value="添加" class="sc-btn btn35 sc-blue-btn" onclick="addRegion()" /></span><?php endif; ?>
                        </dd>
                    </dl>
                    <dl class="button_info">
                    	<dt>&nbsp;</dt>
                        <dd>
                            <input type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="sc-btn sc-blueBg-btn btn35" />
                            <input type="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" class="sc-btn btn35 sc-blue-btn" />
                            <input type="hidden" name="act" value="<?php echo $this->_var['form_action']; ?>" />
                            <input name="id" value="<?php echo $this->_var['shipping_area']['id']; ?>" type="hidden" id="region_id"/>
                            <input name="rId" value="<?php echo $this->_var['regionId']; ?>" type="hidden"  id="regionId"/>
                        </dd>
                    </dl>
                </div> 
                </form>
                </div>
        	</div>
    	</div>
	</div>
</div>
<?php echo $this->fetch('library/seller_footer.lbi'); ?>

<script type="text/javascript" src="js/region.js"></script>
<script type="text/javascript">
//地区联动
$.levelLink();
		
function addImg(obj)
  {
      var src  = obj.parentNode.parentNode;
      var idx  = rowindex(src);
      var tbl  = document.getElementById('info-table');
      var row  = tbl.insertRow(idx + 1);
      var cell = row.insertCell(-1);
      cell.innerHTML = src.cells[0].innerHTML.replace(/(.*)(addImg)(.*)(\[)(\+)/i, "$1removeImg$3$4-");
  }
function removeImg(obj)
  {
      var row = rowindex(obj.parentNode.parentNode);
      var tbl = document.getElementById('info-table');

      tbl.deleteRow(row);
  } 
 /**
 * 配送费用计算方式
 */
function compute_mode(shipping_code,mode)
{
    var base_fee  = document.getElementById("base_fee");
    var step_fee  = document.getElementById("step_fee");
    var item_fee  = document.getElementById("item_fee");
    if(shipping_code == 'post_mail' || shipping_code == 'post_express')
    {
     var step_fee1  = document.getElementById("step_fee1");
    }

    if(mode == 'number')
    {
      item_fee.style.display = '';
      base_fee.style.display = 'none';
      step_fee.style.display = 'none';
      if(shipping_code == 'post_mail' || shipping_code == 'post_express')
      {
       step_fee1.style.display = 'none';
      }
    }
    else
    {
      item_fee.style.display = 'none';
      base_fee.style.display = '';
      step_fee.style.display = '';
      if(shipping_code == 'post_mail' || shipping_code == 'post_express')
      {
       step_fee1.style.display = '';
      }
    }
}

/**
 * 添加一个区域
 */
function addRegion()
{
    var selCountry  = document.forms['theForm'].elements['country'];
    var selProvince = document.forms['theForm'].elements['province'];
    var selCity     = document.forms['theForm'].elements['city'];
    var selDistrict = document.forms['theForm'].elements['district'];
    var selStreet 	= document.forms['theForm'].elements['street'];
    var regionCell  = document.getElementById("regionCell");
    var regionId = 0;
    var regionName = '';
   
    if(selStreet.value > 0){
        regionId = selStreet.value;
        regionName = $("#selStreet").parents('.smartdropdown').find(".txt").html();
    }else{
        if (selDistrict.value > 0)
        {
            regionId = selDistrict.value;
            regionName = $("#selDistricts").parents('.smartdropdown').find(".txt").html();
        }
        else
        {
            if (selCity.value > 0)
            {
                regionId = selCity.value;
                regionName = $("#selCities").parents('.smartdropdown').find(".txt").html();
            }
            else
            {
                if (selProvince.value > 0)
                {
                    regionId = selProvince.value;
                    regionName = $("#selProvinces").parents('.smartdropdown').find(".txt").html();
                }
                else
                {
                    if (selCountry.value >= 0)
                    {
                        regionId = selCountry.value;
                        regionName = $("#selcountry").parents('.smartdropdown').find(".txt").html();
                    }
                    else
                    {
                        regionId = 0;
                        regionName = '';
                    }
                }
            }
        }
    }

    // 检查该地区是否已经存在
    exists = false;
    for (i = <?php if ($this->_var['warehouse_count']): ?><?php echo $this->_var['warehouse_count']; ?><?php else: ?>0<?php endif; ?>; i < document.forms['theForm'].elements.length; i++)
    {
      if (document.forms['theForm'].elements[i].type=="checkbox")
      {
        if (document.forms['theForm'].elements[i].value == regionId)
        {
          exists = true;
          //alert(region_exists);
		  alert(jl_this_area_existed);
        }
      }
    }
    // 创建checkbox
    if (!exists)
    {
      regionCell.innerHTML += "<label><input type='checkbox' name='regions[]' value='" + regionId + "' checked='true' class='checkbox' /> " + regionName+ "</lable>";
    }
}
</script>

</body>
</html>
