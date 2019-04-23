<?php if ($this->_var['full_page']): ?>
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
                <div class="clear"></div>
                <div class="order_stats">
                    <div class="order_stats_search">
                        <form name="TimeInterval" action="javascript:getList()" style="margin:0px">
                            <div class="screeItme">
                                <strong class="fl lh mr10"><?php echo $this->_var['lang']['start_end_date']; ?>：</strong>
                                <div class="text_time" id="text_time1">
                                    <input name="start_date" type="text" id="start_date" size="15" value='<?php echo $this->_var['start_date']; ?>' readonly class="text" />
                                </div>
                                <span class="bolang">&nbsp;&nbsp;~&nbsp;&nbsp;</span>
                                <div class="text_time" id="text_time2">
                                    <input name="end_date" type="text" id="end_date" size="15" value='<?php echo $this->_var['end_date']; ?>' readonly class="text" />
                                </div>
							</div>
                            <div class="screeItme mt10">
                                <strong class="fl lh mr10"><?php echo $this->_var['lang']['label_time_type']; ?></strong>
                                <div  class="imitate_select select_w145">
                                    <div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
                                    <ul>
                                        <li><a href="javascript:;" data-value="0" class="ftx-01"><?php echo $this->_var['lang']['accord_deliver_time']; ?></a></li>
                                        <li><a href="javascript:;" data-value="1" class="ftx-01"><?php echo $this->_var['lang']['accord_order_time']; ?></a></li>
                                    </ul>
                                    <input name="time_type" type="hidden" />
                                </div>
                            </div>
                            <div class="screeItme mt10">
                                <strong class="fl lh mr10"><?php echo $this->_var['lang']['label_order_source']; ?></strong>
                                <div  class="imitate_select select_w145">
                                    <div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
                                    <ul>
                                        <li><a href="javascript:;" data-value="pc" class="ftx-01">PC</a></li>
                                        <li><a href="javascript:;" data-value="touch" class="ftx-01">WAP</a></li>
                                        <li><a href="javascript:;" data-value="mobile" class="ftx-01">APP</a></li>
                                        <li><a href="javascript:;" data-value="ecjia-cashdesk" class="ftx-01"><?php echo $this->_var['lang']['cashdesk']; ?></a></li>
                                    </ul>
                                    <input name="order_referer" type="hidden" value="" id="order_referer_val">
                                </div>
                            </div>                            
                            <div class="screeItme mt10">
                                <div class="bf100 fl">
                                    <strong class="fl lh mr10"><?php echo $this->_var['lang']['label_order_status']; ?></strong>
                                    <?php $_from = $this->_var['os_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'os');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['os']):
?>
                                    <div class="checkbox_item fl lh mr10">
                                    <input name="order_status[]" type="checkbox" value="<?php echo $this->_var['key']; ?>" id="status_<?php echo $this->_var['key']; ?>" class="ui-checkbox" />
                                    <label class="ui-label" for="status_<?php echo $this->_var['key']; ?>"><?php echo $this->_var['os']; ?></label>
                                    </div>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </div>
                                <div class="bf100 fl">
                                    <strong class="fl lh mr10"><?php echo $this->_var['lang']['label_deliver_status']; ?></strong>
                                    <?php $_from = $this->_var['ss_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'ss');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['ss']):
?>
                                    <div class="checkbox_item fl lh mr10">
                                    <input name="shipping_status[]" type="checkbox" class="ui-checkbox" id="shipping_<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['key']; ?>" />
                                    <label class="ui-label" for="shipping_<?php echo $this->_var['key']; ?>"><?php echo $this->_var['ss']; ?></label>
                                    </div>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </div>
                                <div class="bf100 fl mt5">
                                    <strong class="fl lh mr10"><?php echo $this->_var['lang']['label_goods_sn']; ?></strong>
                                    <input name="goods_sn" value="" type="text" class="text text_2 mr10"/>
                                    <input type="submit" name="submit" value="<?php echo $this->_var['lang']['query']; ?>" class="sc-btn sc-blueBg-btn btn30" />
                                </div>
                            </div>
                        </form>
                    </div>
                    <form method="POST" action="" name="listForm">
                        <div class="list-div" id="listDiv">
                            <?php endif; ?>
                            <table width="100%" class="ecsc-default-table ecsc-table-seller mt20">
                                <tr>
                                    <th width="10%"><?php echo $this->_var['lang']['goods_steps_name']; ?></th>
                                    <th width="10%"><?php echo $this->_var['lang']['pro_code']; ?></th>
                                    <th width="30%"><?php echo $this->_var['lang']['goods_name']; ?></th>
                                    <th width="10%"><?php echo $this->_var['lang']['order_sn']; ?></th>
                                    <th width="10%"><a href="javascript:listTable.sort('goods_number'); "><?php echo $this->_var['lang']['amount']; ?></a></th>
                                    <th width="10%"><?php echo $this->_var['lang']['sell_price']; ?></th>
                                    <th width="10%"><?php echo $this->_var['lang']['total_amount']; ?></th>
                                    <th width="10%"><?php echo $this->_var['lang']['sell_date']; ?></th>
                                </tr>
                                <?php $_from = $this->_var['goods_sales_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                                <tr align="center">
                                    <td align="center" class="red"><?php echo $this->_var['list']['shop_name']; ?></td>
                                    <td align="center"><?php echo $this->_var['list']['goods_sn']; ?></td>
                                    <td align="left"><a href="../goods.php?id=<?php echo $this->_var['list']['goods_id']; ?>" target="_blank"><?php echo $this->_var['list']['goods_name']; ?></a></td>
                                    <td align="center"><a href="order.php?act=info&order_id=<?php echo $this->_var['list']['order_id']; ?>"><?php echo $this->_var['list']['order_sn']; ?></a></td>
                                    <td align="center"><?php echo $this->_var['list']['goods_num']; ?></td>
                                    <td align="center"><?php echo $this->_var['list']['sales_price']; ?></td>
                                    <td align="center"><?php echo $this->_var['list']['total_fee']; ?></td>
                                    <td align="center"><?php echo $this->_var['list']['sales_time']; ?></td>
                                </tr>
                                <?php endforeach; else: ?>
                                <tr><td class="no-records" colspan="10"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
                                <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                <tfoot>
                                    <tr>
                                        <td colspan="20">
                                        <?php echo $this->fetch('page.dwt'); ?>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                            <script type="text/javascript">
                            	listTable.recordCount = <?php echo $this->_var['record_count']; ?>;
								listTable.pageCount = <?php echo $this->_var['page_count']; ?>;
								<?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
								listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
								<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </script>
                            <?php if ($this->_var['full_page']): ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $this->fetch('library/seller_footer.lbi'); ?>
<script type="text/javascript">
	
			onload = function()
	{
		// 开始检查订单
		startCheckOrder();
		getDownUrl();
	}
	
	function getList()
	{
		var frm =  document.forms['TimeInterval'];
	
		var where_order = '';
		var where_shipping = '';
		var order_arr = new Array();
		var order_status = frm.elements['order_status[]'];
	
		var shipping_arr = new Array();
		var shipping_status = frm.elements['shipping_status[]'];
	
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
	
		listTable.filter['start_date'] = frm.elements['start_date'].value;
		listTable.filter['end_date'] = frm.elements['end_date'].value;
		listTable.filter['goods_sn'] = frm.elements['goods_sn'].value;
		listTable.filter['time_type'] = frm.elements['time_type'].value;
        listTable.filter['order_referer'] = frm.elements['order_referer'].value;
		listTable.filter['page'] = 1;
		listTable.loadList();
		getDownUrl(frm.elements['goods_sn'].value, order_arr, shipping_arr);
	}
	
	function getDownUrl(goods_sn, order_arr, shipping_arr)
	{
		var where_sn = '';
		var where_order = '';
		var where_shipping = '';
		var aTags = document.getElementsByTagName('A');
		for (var i = 0; i < aTags.length; i++)
		{
			if (aTags[i].href.indexOf('download') >= 0)
			{
				if (listTable.filter['start_date'] == "")
				{
					var frm =  document.forms['TimeInterval'];
					listTable.filter['start_date'] = frm.elements['start_date'].value;
					listTable.filter['end_date'] = frm.elements['end_date'].value;
				}
	
	
	
				if(!(typeof(goods_sn) == 'undefined')){
					if(goods_sn != ''){
						where_sn = "&goods_sn=" + goods_sn;
					}
				}
	
				if(order_arr){
					where_order = '&order_status=' + listTable.filter['order_status'];
				}
	
				if(shipping_arr){
					where_shipping = '&shipping_status=' + listTable.filter['shipping_status'];
				}
				
				/* 时间类型 by wu */
				var where_time = '&time_type=' + listTable.filter['time_type'];	

                /* 订单来源 */
                var where_referer = '&order_referer=' + listTable.filter['order_referer'];
	
				aTags[i].href = "sale_list.php?act=download&start_date=" + listTable.filter['start_date'] + "&end_date=" + listTable.filter['end_date'] + where_sn + where_order + where_shipping + where_time + where_referer;
			}
		}
	}
	
	//日期选择插件调用start sunle
	var opts1 = {
		'targetId':'start_date',//时间写入对象的id
		'triggerId':['start_date'],//触发事件的对象id
		'alignId':'text_time1',//日历对齐对象
		'format':'-'//时间格式 默认'YYYY-MM-DD HH:MM:SS'
	},opts2 = {
		'targetId':'end_date',
		'triggerId':['end_date'],
		'alignId':'text_time2',
		'format':'-'
	}
	
	xvDate(opts1);
	xvDate(opts2);
	//日期选择插件调用end sunle
	
	//-->
</script>
</body>
</html>
<?php endif; ?>