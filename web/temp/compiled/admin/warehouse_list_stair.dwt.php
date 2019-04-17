<?php if ($this->_var['full_page']): ?>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><?php echo $this->_var['lang']['11_system']; ?> - 仓库管理</div>
        <div class="content">
        	<?php echo $this->fetch('library/shipping_menu_tab.lbi'); ?>		
        	<div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['list_stair']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['list_stair']['1']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['list_stair']['2']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
            	<div class="common-head tc">
                    <div class="addWinput">
                        <input type="text" name="region_name" class="text mr0" autocomplete="off" />
                        <input type="hidden" name="region_type" value="<?php echo $this->_var['region_type']; ?>" />
                        <input type="hidden" name="parent_id" value="<?php echo $this->_var['parent_id']; ?>" />
                        <a href="javascript:void(0);" class="addWbtn"><?php echo $this->_var['lang']['new_add_warehouse']; ?></a>
                    </div>
                </div>
                <div class="common-content">
                    <div class="mian-info" id="listDiv">
                        <?php endif; ?>
                        <div class="WM_items">
                        <?php $_from = $this->_var['region_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');$this->_foreach['area_name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['area_name']['total'] > 0):
    foreach ($_from AS $this->_var['list']):
        $this->_foreach['area_name']['iteration']++;
?>
                    	<div class="WM_item">
                        	<div class="item_info">
                            	<div class="item_info_left">
                                	<div class="lie mb5">
                                    	<h4 onclick="listTable.edit(this, 'edit_area_name', '<?php echo $this->_var['list']['region_id']; ?>'); return false;"><?php echo htmlspecialchars($this->_var['list']['region_name']); ?></h4>
                                    </div>
                                    <div class="lie mb5">
                                    	<div class="fl"><?php echo $this->_var['lang']['code']; ?>：</div>
                                        <div class="editSpanInput" ectype="editSpanInput">
											<span onclick="listTable.edit(this, 'edit_region_code', '<?php echo $this->_var['list']['region_id']; ?>'); return false;"><?php echo empty($this->_var['list']['region_code']) ? 'N/A' : $this->_var['list']['region_code']; ?></span>
											<i class="icon icon-edit"></i>
										</div>
                                	</div>
                                    <div class="lie">
                                    	<a href="warehouse.php?act=list&pid=<?php echo $this->_var['list']['region_id']; ?>&regionId=<?php echo $this->_var['list']['regionId']; ?>" class="btn_edit"><i class="icon icon-edit"></i><?php echo $this->_var['lang']['manage_area']; ?></a>
                                    </div>
                                </div>
                                <div class="item_info_right">
                                	<a href="javascript:listTable.remove(<?php echo $this->_var['list']['region_id']; ?>, '<?php echo $this->_var['lang']['area_drop_confirm']; ?>', 'drop_area')" title="<?php echo $this->_var['lang']['drop']; ?>" class="delete"></a>
                                    <span class="num"><?php echo $this->_var['lang']['class_one']; ?></span>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; else: ?>
                            <?php echo $this->_var['lang']['no_records']; ?>
                        <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </div>
                        <?php if ($this->_var['full_page']): ?>
                    </div>
                </div>
            </div>
		</div>
	</div>  
 	<?php echo $this->fetch('library/pagefooter.lbi'); ?>
    <script type="text/javascript">
        $(".addWbtn").click(function(){
            var region_name = $("input[name='region_name']").val();
            var region_type = $("input[name='region_type']").val();
            var parent_id   = $("input[name='parent_id']").val();
            if($("input[name='regionId']")){
            	var regionId   =$("input[name='regionId']").val(); 
            }else{
            	var regionId = 0;
            }
            if (region_name.length == 0)
            {
                pbDialog(warehouse_name_empty,"",0);
            }
            else
            {
                $.jqueryAjax("warehouse.php", "is_ajax=1&act=add_area&parent_id="+parent_id+ '&region_name=' + region_name + '&region_type=' + region_type + '&regionId=' + regionId, listTable.listCallback, 'POST', 'JSON');
            }
            return false;
        });
    </script>
</body>
</html>
<?php endif; ?>
