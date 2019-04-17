<?php if ($this->_var['full_page']): ?>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><?php echo $this->_var['lang']['synchronization']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
        	<div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                	<li><?php echo $this->_var['lang']['operation_prompt_content']['info']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['info']['1']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['info']['2']; ?></li>
                    <li class="li_color"><?php echo $this->_var['lang']['operation_prompt_content']['info']['3']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
            	<div class="common-head">
                	<div class="fl">
                        <a href="goods.php?act=goods_img_list&type=1"><div class="fbutton"><div class="add" ><span><?php echo $this->_var['lang']['sync_oss_img_delete']; ?></span></div></div></a>
					</div>
                </div>
                <div class="common-content">
                    <div class="list-div"  id="listDiv"  >
                        <?php endif; ?>
                        <table cellpadding="1" cellspacing="1" id="listTable">
                            <thead>
                                <tr>
                                    <th width="45%"><div class="tDiv"><?php echo $this->_var['lang']['catalog_name']; ?></div></th>
                                    <th><div class="tDiv"><?php echo $this->_var['lang']['subdirectory_name']; ?></div></th>
                                    <th><div class="tDiv"><?php echo $this->_var['lang']['catalog_size']; ?></div></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $_from = $this->_var['file_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('okey', 'file');if (count($_from)):
    foreach ($_from AS $this->_var['okey'] => $this->_var['file']):
?>
                                <tr>
                                    <td><div class="tDiv"><?php echo $this->_var['file']['file_name']; ?></div></td>
                                    <td><div class="tDiv">goods_img<br/>source_img<br/>thumb_img</div></td>
                                    <td>
                                        <div class="tDiv">
                                            goods_img：<?php echo empty($this->_var['file']['goods_img']['all_size_name']) ? '0' : $this->_var['file']['goods_img']['all_size_name']; ?><br/>
                                            source_img：<?php echo empty($this->_var['file']['source_img']['all_size_name']) ? '0' : $this->_var['file']['source_img']['all_size_name']; ?><br/>
                                            thumb_img：<?php echo empty($this->_var['file']['thumb_img']['all_size_name']) ? '0' : $this->_var['file']['thumb_img']['all_size_name']; ?>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; else: ?>
                                <tr><td class="no-records"  colspan="12"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
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
                </div>
            </div> 
        </div>
    </div>
	<?php echo $this->fetch('library/pagefooter.lbi'); ?>
	<script type="text/javascript">
	//分页传值
	listTable.recordCount = <?php echo empty($this->_var['record_count']) ? '0' : $this->_var['record_count']; ?>;
	listTable.pageCount = <?php echo empty($this->_var['page_count']) ? '1' : $this->_var['page_count']; ?>;
	listTable.query = 'file_list_query';

	<?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
	listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </script>
</body>
</html>
<?php endif; ?>