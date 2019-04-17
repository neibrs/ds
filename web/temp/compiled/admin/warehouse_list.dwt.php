<?php if ($this->_var['full_page']): ?>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><?php echo $this->_var['lang']['11_system']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
        	<?php echo $this->fetch('library/shipping_menu_tab.lbi'); ?>		
            <div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                	<li><?php echo $this->_var['lang']['operation_prompt_content']['list']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['list']['1']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
            	<div class="common-head">
                    <div class="newRegion">
                    	<div class="fr">
                        <form method="post" action="area_manage.php" name="theForm">
                            <div id="regionId_select" class="imitate_select select_w120" style="margin-top:1px;">
                              <div class="cite"><?php echo $this->_var['lang']['select_please']; ?></div>
                              <ul>
                                 <li><a href="javascript:;" data-value="0" class="ftx-01"><?php echo $this->_var['lang']['select_please']; ?></a></li>
                                 <?php $_from = $this->_var['ecs_region']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'region');$this->_foreach['noregion'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['noregion']['total'] > 0):
    foreach ($_from AS $this->_var['region']):
        $this->_foreach['noregion']['iteration']++;
?>
                                 <li><a href="javascript:;" data-value="<?php echo $this->_var['region']['region_id']; ?>" class="ftx-01"><?php echo $this->_var['region']['region_name']; ?></a></li>
                                 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                              </ul>
                              <input name="regionId" type="hidden" value="0" id="regionId_val">
                            </div>
                            <input type="hidden" name="region_type" value="<?php echo $this->_var['region_type']; ?>" />
                            <input type="hidden" name="parent_id" value="<?php echo $this->_var['parent_id']; ?>" />
                            <a href="javascript:void(0);" class="btn btn30 red_btn mr0" ectype="addRegion"><i class="icon icon-plus"></i><?php echo $this->_var['lang']['add_region']; ?></a>
                        </form>
                        </div>
                        <?php if ($this->_var['action_link']['href']): ?>
                        <div class="fl mt2">
                            <a href="<?php echo $this->_var['action_link']['href']; ?>"><div class="fbutton"><div class="add_region" title="<?php echo $this->_var['action_link']['text']; ?>"><span><i class="icon icon-reply"></i><?php echo $this->_var['action_link']['text']; ?></span></div></div></a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="common-content">
                	<div class="list-div" id="listDiv">
                        <?php endif; ?>
                    	<table cellpadding="0" cellspacing="0" border="0">
                        	<thead>
                            	<tr>
                                    <th width="3%"><div class="tDiv">&nbsp;</div></th>
                                    <th width="20%"><div class="tDiv"><?php echo $this->_var['lang']['region_name']; ?></div></th>
                                    <th width="20%"><div class="tDiv"><?php echo $this->_var['lang']['belonged_to_region']; ?></div></th>
                                    <?php if ($this->_var['region_type'] == 1): ?>
                                    <th width="16%"><div class="tDiv"><?php echo $this->_var['lang']['region_code']; ?></div></th>
                                    <?php endif; ?>
                                    <th width="20%"><div class="tDiv"><?php echo $this->_var['lang']['belonged_to_warehouse']; ?></div></th>
                                    <th width="20%" class="handle"><?php echo $this->_var['lang']['handler']; ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $_from = $this->_var['region_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');$this->_foreach['area_name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['area_name']['total'] > 0):
    foreach ($_from AS $this->_var['list']):
        $this->_foreach['area_name']['iteration']++;
?>
                            	<tr>
                                    <td><div class="tDiv">&nbsp;</div></td>
                                    <td><div class="tDiv">
                                            <?php if ($this->_var['priv_ru'] == 1 && $this->_var['region_type'] == 0): ?>    
                                            <input type="text" class='region_name' data-id='<?php echo $this->_var['list']['region_id']; ?>' value="<?php echo htmlspecialchars($this->_var['list']['region_name']); ?>"/>
                                            <?php else: ?>
                                            <?php echo htmlspecialchars($this->_var['list']['region_name']); ?>
                                            <?php endif; ?>
                                        </div>
                                    </td>
                                    <td><div class="tDiv"><?php echo $this->_var['region_here']; ?></div></td>
                                    <?php if ($this->_var['region_type'] == 1): ?>
                                    <td>
                                    <div class="tDiv">
                                    	<div class="editSpanInput" ectype="editSpanInput">
                                            <span onclick="listTable.edit(this, 'edit_region_code', '<?php echo $this->_var['list']['region_id']; ?>'); return false;"><?php echo empty($this->_var['list']['region_code']) ? 'N/A' : $this->_var['list']['region_code']; ?></span>
                                            <i class="icon icon-edit"></i>
										</div>
                                    </div>
                                    </td>
                                    <?php endif; ?>
                                    <td><div class="tDiv"><?php echo $this->_var['area_here']; ?></div></td>
                                    <td class="handle">
                                        <div class="tDiv a3">
                                        	<a href="warehouse.php?act=list&pid=<?php echo $this->_var['list']['region_id']; ?>&regionId=<?php echo $this->_var['list']['regionId']; ?>" title="<?php echo $this->_var['lang']['manage_area']; ?>" class="btn_see"><i class="sc_icon sc_icon_see"></i><?php echo $this->_var['lang']['manage_area']; ?></a>
                                            <a href="javascript:listTable.remove('<?php echo $this->_var['list']['region_id']; ?>|<?php echo $this->_var['area_here']; ?>', '<?php echo $this->_var['lang']['area_drop_confirm']; ?>', 'drop_area')" title="<?php echo $this->_var['lang']['drop']; ?>" class="btn_trash"><i class="icon icon-trash"></i><?php echo $this->_var['lang']['drop']; ?></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; else: ?>
                                    <tr><td class="no-records" colspan="12"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
                                <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </tbody>
                        </table>
                            <?php if ($this->_var['full_page']): ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <?php echo $this->fetch('library/pagefooter.lbi'); ?>
    <script type="text/javascript">
    	$.divselect("#regionId_select","#regionId_val");
		
        $(".region_name").blur(function(){
            var val = $(this).val();
            var id = $(this).attr("data-id");
            $.jqueryAjax("warehouse.php", "is_ajax=1&act=edit_area_name&id="+id+ '&val=' + val, function(data){
                if(data.$message){
                    alert(data.$message);
                }else{
                    $(this).val(data.content);
                }
            }, 'POST', 'JSON');
        });
		
        //添加扩展分类
		$("*[ectype='addRegion']").click(function(){
            var region_name = $("input[name='region_name']").val();
            var region_type = $("input[name='region_type']").val();
            var parent_id   = $("input[name='parent_id']").val();
            
			if($("input[name='regionId']")){
            	var regionId   =$("input[name='regionId']").val(); 
            }else{
            	var regionId = 0;
            }
			
            if (regionId == 0){
                pbDialog(select_region_name_empty,"",0);
            }else{
                $.jqueryAjax("warehouse.php", "is_ajax=1&act=add_area&parent_id="+parent_id+ '&region_name=' + region_name + '&region_type=' + region_type + '&regionId=' + regionId + '&area_here=<?php echo empty($this->_var['area_here']) ? '0' : $this->_var['area_here']; ?>', listTable.listCallback, 'POST', 'JSON');
            }
			
            return false;
        });
    </script>
</body>
</html>
<?php endif; ?>
