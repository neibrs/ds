<?php if ($this->_var['full_page']): ?>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>
<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><a href="<?php echo $this->_var['action_link']['href']; ?>" class="s-back"><?php echo $this->_var['lang']['back']; ?></a><?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
        	<div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                	<li><?php echo $this->_var['lang']['operation_prompt_content']['view_logs']['0']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
                <div class="common-content">
				<form method="POST" action="goods.php?act=log_batch_drop" name="listForm">
                	<div class="list-div" id="listDiv">
						<?php endif; ?>
                    	<table cellpadding="0" cellspacing="0" border="0">
                        	<thead>
                            	<tr>
                                    <th width="4%"><div class="tDiv"><?php echo $this->_var['lang']['record_id']; ?></div></th>
                                    <th width="9%"><div class="tDiv"><?php echo $this->_var['lang']['shop_price']; ?></div></th>
                                    <th width="9%"><div class="tDiv"><?php echo $this->_var['lang']['fixed_freight']; ?></div></th>
                                    <th width="9%"><div class="tDiv"><?php echo $this->_var['lang']['promotion_price']; ?></div></th>
                                    <th width="9%"><div class="tDiv"><?php echo $this->_var['lang']['user_price']; ?></div></th>
                                    <th width="9%"><div class="tDiv"><?php echo $this->_var['lang']['step_price']; ?></div></th>
                                    <th width="9%"><div class="tDiv"><?php echo $this->_var['lang']['consumption_integral']; ?></div></th>
									<th width="9%"><div class="tDiv"><?php echo $this->_var['lang']['rank_integral']; ?></div></th>
									<th width="9%"><div class="tDiv"><?php echo $this->_var['lang']['goods_weight']; ?></div></th>
									<th width="9%"><div class="tDiv"><?php echo $this->_var['lang']['is_on_sale']; ?></div></th>
                                    <th width="12%"><div class="tDiv"><?php echo $this->_var['lang']['handler_info']; ?></div></th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php $_from = $this->_var['log_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'list');$this->_foreach['nolist'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nolist']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['list']):
        $this->_foreach['nolist']['iteration']++;
?>
                                <tr>
                                    <td>
                                    	<div class="tDiv">
                                        	<?php echo $this->_var['list']['log_id']; ?>
                                            <input type="checkbox" name="checkboxes[]" value="<?php echo $this->_var['list']['log_id']; ?>" class="checkbox hide" id="checkbox_<?php echo $this->_var['list']['log_id']; ?>" />
                                            <label for="checkbox_<?php echo $this->_var['list']['log_id']; ?>" class="checkbox_stars hide"></label>
                                    	</div>
                                    </td>
									<td><div class="tDiv"><?php if ($this->_var['list']['old_record']): ?><?php echo $this->_var['lang']['primary']; ?>：<?php else: ?><?php echo $this->_var['lang']['present']; ?>：<?php endif; ?><?php echo $this->_var['list']['shop_price']; ?></div></td>
                                    <td><div class="tDiv"><?php if ($this->_var['list']['old_record']): ?><?php echo $this->_var['lang']['primary']; ?>：<?php else: ?><?php echo $this->_var['lang']['present']; ?>：<?php endif; ?><?php echo $this->_var['list']['shipping_fee']; ?></font></div></td>
                                    <td><div class="tDiv"><?php if ($this->_var['list']['old_record']): ?><?php echo $this->_var['lang']['primary']; ?>：<?php else: ?><?php echo $this->_var['lang']['present']; ?>：<?php endif; ?><?php echo $this->_var['list']['promote_price']; ?></div></td>
                                    <td><div class="tDiv"><?php if ($this->_var['list']['old_record']): ?><?php echo $this->_var['lang']['primary']; ?>：<?php else: ?><?php echo $this->_var['lang']['present']; ?>：<?php endif; ?><a href="javascript:;" ectype="view_detail" data-logid="<?php echo $this->_var['list']['log_id']; ?>" data-step="member"><?php echo $this->_var['lang']['view_info']; ?></a></div></td>
									<td><div class="tDiv"><?php if ($this->_var['list']['old_record']): ?><?php echo $this->_var['lang']['primary']; ?>：<?php else: ?><?php echo $this->_var['lang']['present']; ?>：<?php endif; ?><a href="javascript:;" ectype="view_detail" data-logid="<?php echo $this->_var['list']['log_id']; ?>" data-step="volume"><?php echo $this->_var['lang']['view_info']; ?></a></div></td>
                                    <td><div class="tDiv"><?php if ($this->_var['list']['old_record']): ?><?php echo $this->_var['lang']['primary']; ?>：<?php else: ?><?php echo $this->_var['lang']['present']; ?>：<?php endif; ?><?php echo $this->_var['list']['give_integral']; ?></font></div></td>
                                    <td><div class="tDiv"><?php if ($this->_var['list']['old_record']): ?><?php echo $this->_var['lang']['primary']; ?>：<?php else: ?><?php echo $this->_var['lang']['present']; ?>：<?php endif; ?><?php echo $this->_var['list']['rank_integral']; ?></div></td>
                                    <td><div class="tDiv"><?php if ($this->_var['list']['old_record']): ?><?php echo $this->_var['lang']['primary']; ?>：<?php else: ?><?php echo $this->_var['lang']['present']; ?>：<?php endif; ?><?php echo $this->_var['list']['goods_weight']; ?></div></td>
									<td><div class="tDiv"><?php if ($this->_var['list']['old_record']): ?><?php echo $this->_var['lang']['primary']; ?>：<?php else: ?><?php echo $this->_var['lang']['present']; ?>：<?php endif; ?><?php if ($this->_var['list']['is_on_sale']): ?><?php echo $this->_var['lang']['on_sale_in']; ?><?php else: ?><?php echo $this->_var['lang']['not_on_sale_in']; ?><?php endif; ?></div></td>
                                    <td>
                                    	<div class="tDiv">
                                        	<p><?php echo $this->_var['list']['admin_name']; ?></p>
                                            <p><?php echo $this->_var['list']['handle_time']; ?></p>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; else: ?>
								<tr><td class="no-records" colspan="12"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
								<?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </tbody>
                            <tfoot>
                            	<tr>
                                    <td colspan="12">
                                        <div class="tDiv">
                                            <div class="list-page">
                                                <?php echo $this->fetch('library/page.lbi'); ?>
                                            </div>
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
	listTable.query = 'view_query';

	<?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
	listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	listTable.filter.goodsId = <?php echo $this->_var['goods_id']; ?>;
	
	$(document).on("click","a[ectype='view_detail']",function(){
		var log_id = $(this).data('logid');
		var step = $(this).data('step');
		
		$.jqueryAjax('goods.php', 'act=view_detail' + '&log_id=' + log_id + '&step=' + step, function(data){
			var content = data.content;
			pb({
				id:"categroy_dialog",
				title:"<?php echo $this->_var['lang']['view_info']; ?>",
				width:560,
				content:content,
				ok_title:"<?php echo $this->_var['lang']['button_submit_alt']; ?>",
				cl_title:"<?php echo $this->_var['lang']['cancel']; ?>",
				drag:true,
				foot:false
			});
		});
	});
    </script>
</body>
</html>
<?php endif; ?>
