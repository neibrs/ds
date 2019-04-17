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
                <form method="post" action="" name="listForm" onsubmit="return confirm(batch_drop_confirm);">
                <div class="list-div" id="listDiv">
					<?php endif; ?>
					<table class="ecsc-default-table goods-default-table mt20">	
                    <thead>
                    	<tr>
                            <th width="7%"><?php echo $this->_var['lang']['record_id']; ?></th>
                            <th class="tl"><div class="pl10"><?php echo $this->_var['lang']['money']; ?></div></th>
                            <?php if ($this->_var['is_dir']): ?><th><?php echo $this->_var['lang']['distribute_amount']; ?></th><?php endif; ?>
                            <?php if ($this->_var['filter']['commission_model'] != 1): ?><th class="tl"><?php echo $this->_var['lang']['ratio']; ?></th><?php endif; ?>
                            <th><?php echo $this->_var['lang']['receive_commissions']; ?></th>
                            <th><?php echo $this->_var['lang']['period_checkout']; ?></th>
                            <th><?php echo $this->_var['lang']['uncollected_goods_order']; ?></th>
                            <th class="tl"><?php echo $this->_var['lang']['application_status']; ?></th>
                            <th width="15%" class="tc"><?php echo $this->_var['lang']['handler']; ?></th>
                    	</tr>
                    </thead>
                    <tbody>
                    <?php $_from = $this->_var['bill_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bill');$this->_foreach['nobill'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nobill']['total'] > 0):
    foreach ($_from AS $this->_var['bill']):
        $this->_foreach['nobill']['iteration']++;
?>
                    <tr>
                        <td class="bdr" rowspan="2">
                        	<div class="number"><?php echo $this->_var['bill']['id']; ?></div>
                        </td>
                        <td class="tl">
                            <div class="tc_items pl10">
                                <div class="item"><?php echo $this->_var['lang']['label_order_money']; ?><?php echo $this->_var['bill']['format_order_amount']; ?><em class="org2"><?php echo $this->_var['lang']['include_freight']; ?></em></div>
                                <div class="item"><?php echo $this->_var['lang']['label_freight_money']; ?><?php echo $this->_var['bill']['format_shipping_amount']; ?></div>
                                <div class="item"><?php echo $this->_var['lang']['label_return_money']; ?><?php echo $this->_var['bill']['format_return_amount']; ?></div>
                                <div class="item"><?php echo $this->_var['lang']['label_frozen_money']; ?><?php echo $this->_var['bill']['format_frozen_money']; ?></div>
                            </div>
                        </td>
                        <?php if ($this->_var['is_dir']): ?>
                        <td><?php echo $this->_var['bill']['format_drp_money']; ?></td>
                        <?php endif; ?>
                        <?php if ($this->_var['filter']['commission_model'] != 1): ?>
                        <td class="tl">
                            <div class="tc_items">
                                <div class="item"><?php echo $this->_var['lang']['label_collect_ratio']; ?><?php echo $this->_var['bill']['gain_proportion']; ?>%</div>
                                <div class="item"><?php echo $this->_var['lang']['label_settle_ratio']; ?><?php echo $this->_var['bill']['should_proportion']; ?>%</div>
                            </div>
                        </td>
                        <?php endif; ?>
                        <td>
                            <?php if ($this->_var['bill']['chargeoff_status'] != 0 && $this->_var['bill']['model'] == 0 && $this->_var['filter']['commission_model'] == 1): ?>
                                <em class="red"><?php echo $this->_var['lang']['label_commision_ratio']; ?><?php echo $this->_var['bill']['gain_proportion']; ?>%</em>
                                <br/>
                            <?php endif; ?>
                        	<?php echo $this->_var['bill']['format_gain_commission']; ?><br/><em class="org2"><?php echo $this->_var['lang']['not_include_freight']; ?></em>
                        </td>
                        <td>
                            <?php if ($this->_var['bill']['chargeoff_status'] != 0 && $this->_var['bill']['model'] == 0 && $this->_var['filter']['commission_model'] == 1): ?>
                            <p><em class="red"><?php echo $this->_var['lang']['label_commision_ratio']; ?><?php echo $this->_var['bill']['should_proportion']; ?>%</em></p>
                            <?php endif; ?>
                            
                            <?php if ($this->_var['bill']['settle_accounts'] > 0): ?>
                            <p class="red"> + <?php echo $this->_var['bill']['should_amount']; ?><?php echo $this->_var['lang']['total_money_k']; ?></p>
                            <p class="red"> - <?php echo $this->_var['bill']['settle_accounts']; ?><?php echo $this->_var['lang']['settled_k']; ?></p>
                            <?php endif; ?>
                            
                            <p class="red"><?php if ($this->_var['bill']['settle_accounts'] > 0): ?>=<?php endif; ?><?php echo $this->_var['bill']['format_should_amount']; ?><?php if ($this->_var['bill']['settle_accounts'] > 0): ?><?php echo $this->_var['lang']['settled_real_k']; ?><?php endif; ?></p>
                            <p><em class="org2"><?php echo $this->_var['lang']['include_freight']; ?></em></p>
                        </td>
						<td><a href="merchants_commission.php?act=bill_notake_order&bill_id=<?php echo $this->_var['bill']['id']; ?>&seller_id=<?php echo $this->_var['bill']['seller_id']; ?>&commission_model=<?php echo $this->_var['filter']['commission_model']; ?>" title="<?php echo $this->_var['lang']['view']; ?>"><?php echo $this->_var['bill']['notake_order_count']; ?></a></td>
                      	<td class="tl">
                            <div class="tc_items">
                                <div class="item"><?php echo $this->_var['lang']['label_out_account_state']; ?><?php if ($this->_var['bill']['chargeoff_status'] == 1): ?><?php echo $this->_var['lang']['out_accounted']; ?><?php elseif ($this->_var['bill']['chargeoff_status'] == 2): ?><?php echo $this->_var['lang']['bill_end']; ?><br/><em class="red"><?php echo $this->_var['bill']['format_settleaccounts_time']; ?></em><?php elseif ($this->_var['bill']['chargeoff_status'] == 3): ?><?php echo $this->_var['lang']['close_bill']; ?><?php else: ?><?php echo $this->_var['lang']['no_out_account']; ?><?php endif; ?></div>
                                <div class="item"><?php echo $this->_var['lang']['label_apply_state']; ?><?php if ($this->_var['bill']['bill_apply'] == 1): ?><?php echo $this->_var['lang']['applied']; ?><?php else: ?><?php echo $this->_var['lang']['no_apply']; ?><?php endif; ?></div>
                            </div>
                      	</td>
                      	<td class="ecsc-table-handle">
                            <span><a href="merchants_commission.php?act=bill_detail&bill_id=<?php echo $this->_var['bill']['id']; ?>&seller_id=<?php echo $this->_var['filter']['id']; ?>&proportion=<?php echo $this->_var['bill']['proportion']; ?>&commission_model=<?php if ($this->_var['bill']['chargeoff_status'] != 0 && $this->_var['bill']['model'] != - 1): ?><?php echo $this->_var['bill']['model']; ?><?php else: ?><?php echo $this->_var['filter']['commission_model']; ?><?php endif; ?>" class="btn-orange"><i class="sc_icon_see"></i><p><?php echo $this->_var['lang']['commission_bill_detail']; ?></p></a></span>
                            <?php if ($this->_var['bill']['is_bill_freeze'] == 1 && $this->_var['bill']['chargeoff_status'] != 3 || $this->_var['bill']['chargeoff_status'] == 2): ?>
                            <span><a href="merchants_commission.php?act=apply_for&bill_id=<?php echo $this->_var['bill']['id']; ?>&seller_id=<?php echo $this->_var['filter']['id']; ?>" class="btn-green"><i class="icon-edit"></i><p><?php echo $this->_var['lang']['apply_settle']; ?></p></a></span>
                            <?php endif; ?>
                      	</td>
                    </tr>
                    <tr class="row_header">
                        <td colspan="10">
                        	<div class="fl pl10 mr10">
                                <em class="fl"><?php echo $this->_var['lang']['label_bill_id']; ?></em>
                                <em class="fl"><?php echo $this->_var['bill']['bill_sn']; ?></em>
                                <?php if ($this->_var['bill']['chargeoff_status'] != 0 && $this->_var['bill']['model'] != - 1): ?>
                                <em class="red fl">(<?php if ($this->_var['bill']['model'] == 1): ?><?php echo $this->_var['lang']['category_model']; ?><?php else: ?><?php echo $this->_var['lang']['seller_model']; ?><?php endif; ?>)</em>
                                <?php endif; ?>
                            </div>
                            <div class="fl">
                            	<?php if ($this->_var['bill']['bill_freeze_day'] && $this->_var['bill']['chargeoff_status'] != 2): ?><span class="fl red mr10"><?php echo $this->_var['lang']['label_frozen_time']; ?><?php echo $this->_var['bill']['bill_freeze_day']; ?> <?php echo $this->_var['lang']['tian']; ?></span><?php endif; ?>
                                <span class="fl mr10"><?php echo $this->_var['lang']['label_out_account_time']; ?><?php if ($this->_var['bill']['format_chargeoff_time']): ?><?php echo $this->_var['bill']['format_chargeoff_time']; ?><?php else: ?><em class="red"><?php echo $this->_var['lang']['no_out_account']; ?></em><?php endif; ?></span>
                                <span><?php echo $this->_var['lang']['label_start_time']; ?><?php echo $this->_var['bill']['format_start_time']; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_var['lang']['label_end_time']; ?><?php echo $this->_var['bill']['format_end_time']; ?></span>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; else: ?>
                    <tr><td class="no-records" colspan="20"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
                    <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </tbody>
                  	</table>
                 	<?php echo $this->fetch('page.dwt'); ?>
                	<?php if ($this->_var['full_page']): ?>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php echo $this->fetch('library/seller_footer.lbi'); ?>
<script type="text/javascript">
	listTable.recordCount = <?php echo $this->_var['record_count']; ?>;
	listTable.pageCount = <?php echo $this->_var['page_count']; ?>;
	listTable.query = "commission_bill_query";
	
	<?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
	listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	
	
	onload = function()
	{
	  startCheckOrder();
	}
	
</script>
</body>
</html>
<?php endif; ?>