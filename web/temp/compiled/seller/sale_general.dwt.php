<?php if ($this->_var['full_page']): ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><?php echo $this->fetch('library/seller_html_head.lbi'); ?></head>

<body style="padding: 0px;">
<?php echo $this->fetch('library/seller_header.lbi'); ?>
<div class="ecsc-layout">
    <div class="site wrapper">
        <?php echo $this->fetch('library/seller_menu_left.lbi'); ?>
        <div class="ecsc-layout-right">
            <div class="main-content" id="mainContent">
            	<?php echo $this->fetch('library/url_here.lbi'); ?>
				<?php echo $this->fetch('library/seller_menu_tab.lbi'); ?>
                <div class="clear"></div>
                <div class="order_stats">
                    <div class="order_stats_search clearfix">
                        <form action="javascript:searchGeneral()" name="searchForm">
                            <div class="screeItme">
                                <strong class="fl lh mr10"><?php echo $this->_var['lang']['lable_select_date']; ?></strong>
                                <div class="text_time select_time" id="text_time1">
                                    <input name="date_start_time" type="text" id="start_time" value="<?php echo $this->_var['start_time']; ?>" class="text" />
                                </div>
                                <span class="bolang">&nbsp;&nbsp;~&nbsp;&nbsp;</span>
                                <div class="text_time" id="text_time2">
                                    <input name="date_end_time" type="text" id="end_time" value="<?php echo $this->_var['end_time']; ?>" class="text" />
                                </div>
                            </div>
                            <div class="screeItme mt10">
                                <strong class="fl lh mr10"><?php echo $this->_var['lang']['lable_time_type']; ?></strong>
                                <div  class="imitate_select select_w145">
                                    <div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
                                    <ul>
                                        <li><a href="javascript:;" data-value="0" class="ftx-01"><?php echo $this->_var['lang']['accord_deliver_time']; ?></a></li>
                                        <li><a href="javascript:;" data-value="1" class="ftx-01"><?php echo $this->_var['lang']['accord_order_time']; ?></a></li>
                                    </ul>
                                    <input name="time_type" type="hidden" value="1" autocomplete="off" />
                                </div>
                            </div>
                            <div class="screeItme mt10">
                                <div class="bf100 fl order_status">
                                    <strong class="fl lh mr10"><?php echo $this->_var['lang']['lable_order_state']; ?></strong>
                                    <?php $_from = $this->_var['os_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'os');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['os']):
?>
                                    <div class="checkbox_item fl lh mr10">
                                        <input name="order_status[]" type="checkbox" value="<?php echo $this->_var['key']; ?>" class="ui-checkbox" id="order_<?php echo $this->_var['key']; ?>"  autocomplete="off" />
                                        <label class="ui-label" for="order_<?php echo $this->_var['key']; ?>"><?php echo $this->_var['os']; ?></label>
                                    </div>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </div>
                                <div class="bf100 fl mt5 shipping_status">
                                    <strong class="fl lh mr10"><?php echo $this->_var['lang']['lable_deliver_state']; ?></strong>
                                    <?php $_from = $this->_var['ss_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'ss');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['ss']):
?>
                                    <div class="checkbox_item fl lh mr10">
                                    <input name="shipping_status[]" type="checkbox" value="<?php echo $this->_var['key']; ?>" class="ui-checkbox" id="shipping_<?php echo $this->_var['key']; ?>"  autocomplete="off" />
                                    <label class="ui-label" for="shipping_<?php echo $this->_var['key']; ?>"><?php echo $this->_var['ss']; ?></label>
                                    </div>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </div>
                                <div class="bf100 fl mt5">
                                    <strong class="fl lh mr10"><?php echo $this->_var['lang']['label_cate_name']; ?></strong>
                                    <input name="cat_name" value="" type="text" class="text text_2 mr10"  autocomplete="off" />
                                    <input type="submit" name="query_by_date" value="<?php echo $this->_var['lang']['query']; ?>" class="sc-btn sc-blueBg-btn btn30" />
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="list-div" id="listDiv">
                        <?php endif; ?>
                        <table width="100%" class="ecsc-default-table ecsc-table-seller mt20">
                            <tr>
                                <th width="40%"><?php echo $this->_var['lang']['goods_name']; ?></th>
                                <th width="10%"><?php echo $this->_var['lang']['pro_code']; ?></th>
                                <th width="10%"><?php echo $this->_var['lang']['category']; ?></th>
                                <th width="10%"><a href="javascript:listTable.sort('goods_number');"><?php echo $this->_var['lang']['amount']; ?></a></th>
                                <th width="10%"><?php echo $this->_var['lang']['unit_price']; ?></th>
                                <th width="10%"><?php echo $this->_var['lang']['total_amount']; ?></th>
                                <?php if ($this->_var['filter']['time_type'] == 1): ?>
                                <th width="10%"><?php echo $this->_var['lang']['order_time']; ?></th>
                                <?php else: ?>
                                <th width="10%"><?php echo $this->_var['lang']['deliver_time']; ?></th>
                                <?php endif; ?>
                            </tr>
                            <?php $_from = $this->_var['data_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                            <tr align="center">
                                <td class="tl" style="padding-left:10px; padding-right:10px;"><?php echo $this->_var['list']['goods_name']; ?></td>
                                <td align="center"><?php echo $this->_var['list']['goods_sn']; ?></td>
                                <td align="center"><?php echo $this->_var['list']['cat_name']; ?></td>
                                <td align="center"><?php echo $this->_var['list']['goods_number']; ?></td>
                                <td align="center"><?php echo $this->_var['list']['goods_price']; ?></td>
                                <td align="center"><?php echo $this->_var['list']['total_fee']; ?></td>
                                <?php if ($this->_var['filter']['time_type'] == 1): ?>
                                	<td align="center"><?php echo $this->_var['list']['add_time']; ?></td>
                                <?php else: ?>
                                	<td align="center"><?php echo $this->_var['list']['shipping_time']; ?></td>
                                <?php endif; ?>
                            </tr>
                            <?php endforeach; else: ?>
                            <tr><td class="no-records" colspan="7"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
                            <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            <tfoot>
                                <tr>
                                    <td colspan="7"><?php echo $this->fetch('page.dwt'); ?></td>
                                </tr>
                            </tfoot>
                        </table>
                        <?php if ($this->_var['full_page']): ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $this->fetch('library/seller_footer.lbi'); ?>
<script type="text/javascript">
	
	listTable.recordCount = <?php echo $this->_var['record_count']; ?>;
	listTable.pageCount = <?php echo $this->_var['page_count']; ?>;
	
	<?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
	listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
							
	
	onload = function()
	{
		document.forms['searchForm'].elements['date_start_time'].value = '<?php echo $this->_var['start_time']; ?>';
		document.forms['searchForm'].elements['date_end_time'].value = '<?php echo $this->_var['end_time']; ?>';

		// 开始检查订单
		startCheckOrder();
	}
	
	$(function(){
		$(".screeItme .imitate_select ul li a.ftx-01").click(function(){
			var val = $(this).data('value');
			if(val == 1){
				$(".order_status").show();
				$(".shipping_status").show();
			}else{
				$(".order_status").hide();
				$(".shipping_status").hide();
			}
		});
	});

	function searchGeneral(){

		var where_cat = '';
		var where_order = '';
		var where_shipping = '';
		var order_arr = new Array();
		var order_status = document.forms['searchForm'].elements['order_status[]'];

		var shipping_arr = new Array();
		var shipping_status = document.forms['searchForm'].elements['shipping_status[]'];

		for(var i=0; i<order_status.length;i++){
			if(order_status[i].checked == true){
				order_arr.push(order_status[i].value);
			}
		}

		listTable.filter['order_status'] = order_arr;

		for(var i=0; i<shipping_status.length;i++){
			if(shipping_status[i].checked == true){
				shipping_arr.push(shipping_status[i].value);
			}
		}

		listTable.filter['shipping_status'] = shipping_arr;
		listTable.filter['time_type'] = document.forms['searchForm'].elements['time_type'].value;
		listTable.filter['date_start_time'] = document.forms['searchForm'].elements['date_start_time'].value;
		listTable.filter['date_end_time'] = document.forms['searchForm'].elements['date_end_time'].value;
		listTable.filter['cat_name'] = document.forms['searchForm'].elements['cat_name'].value;

		if(listTable.filter['order_status'] == ''){
			listTable.filter['order_status'] = -1;
		}
		
		where_order = '&order_status=' + listTable.filter['order_status'];

		if(listTable.filter['shipping_status'] == ''){
			listTable.filter['shipping_status'] = -1;
		}
		
		where_shipping = '&shipping_status=' + listTable.filter['shipping_status'];

		if(listTable.filter['cat_name'] != ''){
			where_cat = '&cat_name=' + listTable.filter['cat_name'];
		}

		var a_action = $(".icon-download-alt").parent('a');
		var href = 'sale_general.php?act=download&date_start_time=' + listTable.filter['date_start_time'] + '&date_end_time=' + listTable.filter['date_end_time'] + '&time_type=' + listTable.filter['time_type'] + where_order + where_shipping + where_cat;
		a_action.attr('href', href);
		
		listTable.filter['page'] = 1;
		listTable.loadList();
	}

	//日期选择插件调用start sunle
	var opts1 = {
		'targetId':'start_time',//时间写入对象的id
		'triggerId':['start_time'],//触发事件的对象id
		'alignId':'text_time1',//日历对齐对象
		'format':'-'//时间格式 默认'YYYY-MM-DD HH:MM:SS'
	},opts2 = {
		'targetId':'end_time',
		'triggerId':['end_time'],
		'alignId':'text_time2',
		'format':'-'
	}

	xvDate(opts1);
	xvDate(opts2);
	//日期选择插件调用end sunle
	
</script>
</body>
</html>
<?php endif; ?>