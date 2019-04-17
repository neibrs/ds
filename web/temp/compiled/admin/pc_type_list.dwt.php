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
					<li class="curr"><a href="pay_card.php?act=list"><?php echo $this->_var['lang']['pc_type_list']; ?></a></li>
                    <li><a href="pay_card.php?act=pc_list"><?php echo $this->_var['lang']['pay_card_list']; ?></a></li>
				</ul>
            </div>	
        	<div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                	<li><?php echo $this->_var['lang']['operation_prompt_content']['pc_type_list']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['pc_type_list']['1']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['pc_type_list']['2']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
            	<div class="common-head">
                	<div class="fl">
						<a href="<?php echo $this->_var['action_link']['href']; ?>"><div class="fbutton"><div class="add" title="<?php echo $this->_var['action_link']['text']; ?>"><span><i class="icon icon-plus"></i><?php echo $this->_var['action_link']['text']; ?></span></div></div></a>
					</div>
                    <div class="refresh">
                    	<div class="refresh_tit" title="<?php echo $this->_var['lang']['refresh_data']; ?>"><i class="icon icon-refresh"></i></div>
                    	<div class="refresh_span"><?php echo $this->_var['lang']['refresh_common']; ?><?php echo $this->_var['record_count']; ?><?php echo $this->_var['lang']['record']; ?></div>
                    </div>
                </div>
                <div class="common-content">
                    <form method="post" action="" name="listForm">
                        <div class="list-div" id="listDiv" >
                        <?php endif; ?>
                            <table cellpadding="1" cellspacing="1">
                                <thead>
                                    <tr>
                                        <th	width="10%"><div class="tDiv"><?php echo $this->_var['lang']['record_id']; ?></div></th>
                                        <th	width="30%"><div class="tDiv"><?php echo $this->_var['lang']['type_name']; ?></div></th>
                                        <th	width="15%"><div class="tDiv"><?php echo $this->_var['lang']['type_money']; ?></div></th>
                                        <th	width="10%"><div class="tDiv"><?php echo $this->_var['lang']['send_count']; ?></div></th>
                                        <th	width="10%"><div class="tDiv"><?php echo $this->_var['lang']['use_count']; ?></div></th>
                                        <th width="20%" class="handle"><?php echo $this->_var['lang']['handler']; ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $_from = $this->_var['type_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'type');if (count($_from)):
    foreach ($_from AS $this->_var['type']):
?>
                                    <tr>
                                        <td><div class="tDiv"><?php echo $this->_var['type']['type_id']; ?></div></td>
                                        <td><div class="tDiv"><?php echo htmlspecialchars($this->_var['type']['type_name']); ?></div></td>
                                        <td><div class="tDiv"><?php echo $this->_var['type']['type_money']; ?></div></td>
                                        <td><div class="tDiv"><?php echo $this->_var['type']['send_count']; ?></div></td>
                                        <td><div class="tDiv"><?php echo $this->_var['type']['use_count']; ?></div></td>
                                        <td class="handle">
                                            <div class="tDiv a3">
                                                <a href="pay_card.php?act=send&amp;id=<?php echo $this->_var['type']['type_id']; ?>" title="<?php echo $this->_var['lang']['view_detail']; ?>" class="btn_region"><i class="icon icon-screenshot"></i><?php echo $this->_var['lang']['send']; ?></a>
                                                <a href="pay_card.php?act=pc_list&amp;tid=<?php echo $this->_var['type']['type_id']; ?>" title="<?php echo $this->_var['lang']['view_detail']; ?>" class="btn_see"><i class="sc_icon sc_icon_see"></i><?php echo $this->_var['lang']['view']; ?></a>
                                                <a href="pay_card.php?act=edit&amp;type_id=<?php echo $this->_var['type']['type_id']; ?>"  title="<?php echo $this->_var['lang']['edit']; ?>" class="btn_edit"><i class="icon icon-edit"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                                <a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['type']['type_id']; ?>, '<?php echo $this->_var['lang']['drop_confirm']; ?>')" title="<?php echo $this->_var['lang']['remove']; ?>" class="btn_trash"><i class="icon icon-trash"></i><?php echo $this->_var['lang']['drop']; ?></a>
                                            </div>								
                                        </td>
                                    </tr>
                                    <?php endforeach; else: ?>
                                    <tr><td class="no-records" colspan="10"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
                                    <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="12">
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
	//分页传值
	listTable.recordCount = <?php echo empty($this->_var['record_count']) ? '0' : $this->_var['record_count']; ?>;
	listTable.pageCount = <?php echo empty($this->_var['page_count']) ? '1' : $this->_var['page_count']; ?>;

	<?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
	listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </script>
</body>
</html>
<?php endif; ?>