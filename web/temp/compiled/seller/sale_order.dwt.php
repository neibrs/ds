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
                <div class="search-info">
                    <form name="TimeInterval"  action="javascript:getList()" style="margin:0px">
                        <div class="search-form">    
                            <strong class="fl lh mr10"><?php echo $this->_var['lang']['start_end_date']; ?>：</strong>
                            <div class="text_time" id="text_time1">
                                <input name="start_date" type="text" id="start_date" size="15" value='<?php echo $this->_var['start_date']; ?>' readonly class="text"/>
                            </div>
                            <span class="bolang">&nbsp;&nbsp;~&nbsp;&nbsp;</span>
                            <div class="text_time" id="text_time2">
                                <input name="end_date" type="text" id="end_date" size="15" value='<?php echo $this->_var['end_date']; ?>' readonly class="text" />
                            </div>
                            <input type="submit" name="submit" value="<?php echo $this->_var['lang']['query']; ?>" class="sc-btn sc-blueBg-btn btn30 ml10" />
                        </div>
                    </form>
                </div>
                <div class="clear"></div>
                <form method="POST" action="" name="listForm">
                    <div class="list-div" id="listDiv">
                        <?php endif; ?>
                        <table width="100%" class="ecsc-default-table ecsc-table-seller mt20">
                            <tr>
                                <th width="10%"><?php echo $this->_var['lang']['order_by']; ?></th>
                                <th width="30%"><?php echo $this->_var['lang']['goods_name']; ?></th>
                                <th width="15%"><?php echo $this->_var['lang']['goods_sn']; ?></th>
                                <th width="15%"><a href="javascript:listTable.sort('goods_num', 'DESC'); "><?php echo $this->_var['lang']['sell_amount']; ?></a><?php echo $this->_var['sort_goods_num']; ?></th>
                                <th width="15%"><a href="javascript:listTable.sort('turnover', 'DESC'); "><?php echo $this->_var['lang']['sell_sum']; ?></a><?php echo $this->_var['sort_turnover']; ?></th>
                                <th width="10%"><?php echo $this->_var['lang']['percent_count']; ?></th>
                            </tr>
                            <?php $_from = $this->_var['goods_order_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');$this->_foreach['val'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['val']['total'] > 0):
    foreach ($_from AS $this->_var['list']):
        $this->_foreach['val']['iteration']++;
?>
                            <tr>
                                <td><?php echo $this->_foreach['val']['iteration']; ?></td>
                                <td><a href="../goods.php?id=<?php echo $this->_var['list']['goods_id']; ?>" target="_blank"><?php echo $this->_var['list']['goods_name']; ?></a></td>
                                <td><?php echo $this->_var['list']['goods_sn']; ?></td>
                                <td><?php echo $this->_var['list']['goods_num']; ?></td>
                                <td><?php echo $this->_var['list']['turnover']; ?></td>
                                <td><?php echo $this->_var['list']['wvera_price']; ?></td>
                            </tr>
                            <?php endforeach; else: ?>
                            <tr><td class="no-records" colspan="10"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
                            <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            <tfoot>
                                <tr>
                                    <td colspan="10"><?php echo $this->fetch('page.dwt'); ?></td>
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
		listTable.filter['start_date'] = frm.elements['start_date'].value;
		listTable.filter['end_date'] = frm.elements['end_date'].value;
		listTable.filter['page'] = 1;
		listTable.loadList();
		getDownUrl();
	}
	
	function getDownUrl()
	{
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
				aTags[i].href = "sale_order.php?act=download&start_date=" + listTable.filter['start_date'] + "&end_date=" + listTable.filter['end_date'];
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