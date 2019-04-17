<?php if ($this->_var['full_page']): ?>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>
<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><?php echo $this->_var['lang']['promotion']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
        	<div class="tabs_info">
            	<ul>
                    <li><a href="value_card.php?act=list"><?php echo $this->_var['lang']['vc_type_list']; ?></a></li>
					<li><a href="value_card.php?act=vc_list"><?php echo $this->_var['lang']['value_card_list']; ?></a></li>
					<li><a href="pay_card.php?act=list"><?php echo $this->_var['lang']['pc_type_list']; ?></a></li>
                    <li class="curr"><a href="pay_card.php?act=pc_list"><?php echo $this->_var['lang']['pay_card_list']; ?></a></li>
				</ul>
            </div>	
        	<div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                	<li><?php echo $this->_var['lang']['operation_prompt_content']['view']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['view']['1']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
				<div class="common-head">
                    <?php if ($this->_var['action_link']): ?>
                    <div class="fl">
                        <a href="<?php echo $this->_var['action_link']['href']; ?>"><div class="fbutton"><div class="add" title="<?php echo $this->_var['action_link']['text']; ?>"><span><i class="icon icon-plus"></i><?php echo $this->_var['action_link']['text']; ?></span></div></div></a>
                    </div>
                    <?php endif; ?>
			        <div class="refresh ml0">
                    	<div class="refresh_tit" title="<?php echo $this->_var['lang']['refresh_data']; ?>"><i class="icon icon-refresh"></i></div>
                    	<div class="refresh_span"><?php echo $this->_var['lang']['refresh_common']; ?><?php echo $this->_var['record_count']; ?><?php echo $this->_var['lang']['record']; ?></div>
                    </div>
				</div>
                <div class="common-content">
					<form method="POST" action="" name="listForm">
                	<div class="list-div" id="listDiv">
						<?php endif; ?>
					    <table cellpadding="3" cellspacing="1">
						<thead>
						<tr>
						  <th><div class="tDiv"><?php echo $this->_var['lang']['record_id']; ?></div></th>
						  <th><div class="tDiv"><?php echo $this->_var['lang']['bonus_sn']; ?></div></th>
						  <th><div class="tDiv"><?php echo $this->_var['lang']['bonus_psd']; ?></div></th>
						  <th><div class="tDiv"><?php echo $this->_var['lang']['bonus_type']; ?></div></th>
						  <th><div class="tDiv"><?php echo $this->_var['lang']['user_id']; ?></div></th>
						  <th><div class="tDiv"><?php echo $this->_var['lang']['used_time']; ?></div></th>
						  <th class="handle"><?php echo $this->_var['lang']['handler']; ?></th>
						</tr>
						</thead>
						<tbody>
						<?php $_from = $this->_var['bonus_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pc');if (count($_from)):
    foreach ($_from AS $this->_var['pc']):
?>
						<tr>
						  <td><div class="tDiv"><?php echo $this->_var['pc']['id']; ?></div></td>
						  <td><div class="tDiv"><?php echo $this->_var['pc']['card_number']; ?></div></td>
						  <td><div class="tDiv"><?php echo $this->_var['pc']['card_psd']; ?></div></td>
						  <td><div class="tDiv"><?php echo $this->_var['pc']['type_name']; ?></div></td>
						  <td><div class="tDiv"><?php if ($this->_var['pc']['user_name'] == ''): ?>N/A<?php else: ?><?php echo $this->_var['pc']['user_name']; ?><?php endif; ?></div></td>
						  <td><div class="tDiv"><?php if ($this->_var['pc']['used_time'] == ''): ?>N/A<?php else: ?><?php echo $this->_var['pc']['used_time']; ?><?php endif; ?></div></td>
						  <td align="center" class="handle">
							<div class="tDiv">
								<a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['pc']['id']; ?>, '<?php echo $this->_var['lang']['drop_confirm']; ?>', 'remove_pc')" title="<?php echo $this->_var['lang']['remove']; ?>" class="btn_trash"><i class="icon icon-trash"></i><?php echo $this->_var['lang']['drop']; ?></a>
							</div>
						  </td>
						</tr>
						<?php endforeach; else: ?>
						<tr><td class="no-records" colspan="11"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
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
</div>
</form>
<?php echo $this->fetch('library/pagefooter.lbi'); ?>
<script type="text/javascript" language="JavaScript">
listTable.recordCount = <?php echo $this->_var['record_count']; ?>;
listTable.pageCount = <?php echo $this->_var['page_count']; ?>;
listTable.query = "pc_query";

<?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script>
<?php endif; ?>
</body>
</html>