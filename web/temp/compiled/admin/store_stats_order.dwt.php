<?php if ($this->_var['full_page']): ?>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><?php echo $this->_var['lang']['19_self_support']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
        	<?php if ($this->_var['filter']['type'] == 1): ?>		
        		<?php echo $this->fetch('library/store_tab.lbi'); ?>
            <?php endif; ?>
        	<div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                	<li><?php echo $this->_var['lang']['operation_prompt_content']['stats']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['stats']['1']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['stats']['2']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
            	<div class="common-head">
                    <div class="refresh">
                    	<div class="refresh_tit" title="<?php echo $this->_var['lang']['refresh_data']; ?>"><i class="icon icon-refresh"></i></div>
                    	<div class="refresh_span"><?php echo $this->_var['lang']['refresh_common']; ?><?php echo $this->_var['record_count']; ?><?php echo $this->_var['lang']['record']; ?></div>
                    </div>
				</div>
                <div class="common-content">
					<form action="javascript:searchGeneral()" name="searchForm">
					<div class="mian-info">
						<div class="switch_info">
							<div class="item">
								<div class="label"><?php echo $this->_var['lang']['select_date']; ?>：</div>
								<div class="label_value">
									<div class="text_time select_time" id="text_time1">
										<input name="date_start_time" type="text" id="start_time" value="<?php echo $this->_var['start_time']; ?>" class="text text_2" />
									</div>
									<span class="bolang">&nbsp;&nbsp;~&nbsp;&nbsp;</span>
									<div class="text_time" id="text_time2">
										<input name="date_end_time" type="text" id="end_time" value="<?php echo $this->_var['end_time']; ?>" class="text text_2" />
									</div>
								</div>
							</div>
							<div class="item">
								<div class="label"><?php echo $this->_var['lang']['order_type']; ?>：</div>
								<div class="label_value">
									<div id="" class="imitate_select select_w120">
										<div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
										<ul>
											<li><a href="javascript:;" data-value="0" class="ftx-01"><?php echo $this->_var['lang']['order_all']; ?></a></li>
											<li><a href="javascript:;" data-value="1" class="ftx-01"><?php echo $this->_var['lang']['robbing_order']; ?></a></li>
										</ul>
										<input name="order_type" type="hidden" value="0" id="">
									</div>
								</div>
							</div>
							<div class="item">
								<div class="label"><?php echo $this->_var['lang']['order_state']; ?>：</div>
								<div class="label_value">
									<div class="checkbox_items">
										<?php $_from = $this->_var['os_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'os');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['os']):
?>
										<div class="checkbox_item">
											<input type="checkbox" class="ui-checkbox" name="order_status[]" id="order_status_<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['key']; ?>" />
											<label for="order_status_<?php echo $this->_var['key']; ?>" class="ui-label"><?php echo $this->_var['os']; ?></label>
										</div>
										<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>										
									</div>
								</div>
							</div>
							<div class="item">
								<div class="label"><?php echo $this->_var['lang']['deliver_state']; ?>：</div>
								<div class="label_value">
									<div class="checkbox_items">
										<?php $_from = $this->_var['ss_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'ss');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['ss']):
?>
										<div class="checkbox_item">
											<input type="checkbox" class="ui-checkbox" name="shipping_status[]" id="shipping_status_<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['key']; ?>" />
											<label for="shipping_status_<?php echo $this->_var['key']; ?>" class="ui-label"><?php echo $this->_var['ss']; ?></label>
										</div>
										<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>										
									</div>
								</div>
							</div>
                            <div class="item">
								<div class="label"><?php echo $this->_var['lang']['stores']; ?>：</div>
								<div class="label_value">
									<input name="store_name" value="" type="text" class="text text_5" />
								</div>
							</div>	
                            				
							<div class="item">
								<div class="label">&nbsp;</div>
								<div class="label_value info_btn">
									<input type="submit" name="query_by_date" value="<?php echo $this->_var['lang']['query']; ?>" class="button" />
								</div>
							</div>							
						</div>
					</div>	
					</form>
					<form method="POST" action="sale_notice.php?act=batch_drop" name="listForm" onsubmit="return confirm_bath()">
                	<div class="list-div" id="listDiv">
						<?php endif; ?>
                    	<table cellpadding="0" cellspacing="0" border="0">
                        	<thead>
                            	<tr>
                                	<th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['goods_steps_name']; ?></div></th>
                                    <th width="34%"><div class="tDiv"><?php echo $this->_var['lang']['goods_name']; ?></div></th>
                                    <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['sku']; ?></div></th>
                                    <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['stores']; ?></div></th>
                                    <th width="8%"><div class="tDiv"><?php echo $this->_var['lang']['number']; ?></div></th>
                                    <th width="8%"><div class="tDiv"><?php echo $this->_var['lang']['price']; ?></div></th>
                                    <th width="8%"><div class="tDiv"><?php echo $this->_var['lang']['total']; ?></div></th>
                                    <th width="12%"><div class="tDiv"><?php echo $this->_var['lang']['sellout_date']; ?></div></th>
                                </tr>
                            </thead>
                            <tbody>
								<?php $_from = $this->_var['data_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                            	<tr>
                                    <td><div class="tDiv"><?php echo $this->_var['list']['shop_name']; ?></div></td>
									<td><div class="tDiv"><?php echo $this->_var['list']['goods_name']; ?></div></td>
									<td><div class="tDiv"><?php echo $this->_var['list']['goods_sn']; ?></div></td>
									<td><div class="tDiv"><?php echo $this->_var['list']['stores_name']; ?></div></td>
									<td><div class="tDiv"><?php echo $this->_var['list']['goods_number']; ?></div></td>
									<td><div class="tDiv"><?php echo $this->_var['list']['goods_price']; ?></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['list']['total_fee']; ?></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['list']['add_time']; ?></div></td>
                                </tr>
								<?php endforeach; else: ?>
								<tr><td class="no-records"  colspan="20"><?php echo $this->_var['lang']['no_records']; ?></td></tr>								
								<?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </tbody>
                            <tfoot>
                            	<tr>
                                    <td colspan="13">
                                    	<div class="list-page">
                                           <?php echo $this->fetch('library/page.lbi'); ?>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
						<?php if ($this->_var['full_page']): ?>
                    </div>
					</form>
                </div>
            </div>
		</div>
	</div>
 	<?php echo $this->fetch('library/pagefooter.lbi'); ?>
	<script type="text/javascript">
	listTable.recordCount = <?php echo empty($this->_var['record_count']) ? '0' : $this->_var['record_count']; ?>;
	listTable.pageCount = <?php echo empty($this->_var['page_count']) ? '1' : $this->_var['page_count']; ?>;
	listTable.query = "order_stats_query";
	<?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
	listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

	<!--
	
	onload = function()
	{
		document.forms['searchForm'].elements['date_start_time'].value = '<?php echo $this->_var['start_time']; ?>';
		document.forms['searchForm'].elements['date_end_time'].value = '<?php echo $this->_var['end_time']; ?>';
	}
	
	$(function(){
		$("#steps_shop_name").hide();
		$("#store_0").hide();
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
		
		<!-- listTable.filter['store_search'] = Utils.trim(document.forms['searchForm'].elements['store_search'].value); -->
		<!-- listTable.filter['merchant_id'] = Utils.trim(document.forms['searchForm'].elements['merchant_id'].value); -->
		<!-- listTable.filter['store_keyword'] = Utils.trim(document.forms['searchForm'].elements['store_keyword'].value); -->
		<!-- listTable.filter['store_type'] = Utils.trim(document.forms['searchForm'].elements['store_type'].value); -->
		
		listTable.filter['order_type'] = document.forms['searchForm'].elements['order_type'].value;
		listTable.filter['date_start_time'] = document.forms['searchForm'].elements['date_start_time'].value;
		listTable.filter['date_end_time'] = document.forms['searchForm'].elements['date_end_time'].value;
		listTable.filter['store_name'] = document.forms['searchForm'].elements['store_name'].value;
		if(listTable.filter['order_status'] != ''){
			where_order = '&order_status=' + listTable.filter['order_status'];
		}

		if(listTable.filter['shipping_status'] != ''){
					
			where_shipping = '&shipping_status=' + listTable.filter['shipping_status'];
		}

		if(listTable.filter['cat_name'] != ''){
			where_cat = '&store_name=' + listTable.filter['store_name'];
		}
		//var a_action = document.getElementById('actionSpan');
		//a_action.href = 'sale_general.php?act=download&date_start_time=' + listTable.filter['date_start_time'] + '&shop_name=' + listTable.filter['shop_name'] + '&date_end_time=' + listTable.filter['date_end_time'] + '&order_type=' + listTable.filter['order_type'] + where_order + where_shipping + where_cat;

		listTable.filter['page'] = 1;
		listTable.loadList();
	}
	
	//时间选择
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
	
	
	-->
	</script>
</body>
</html>
<?php endif; ?>
