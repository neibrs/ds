<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><a href="javascript:;" ectype="goback" class="s-back"></a><?php echo $this->_var['lang']['administrator']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
        	<div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                	<li><?php echo $this->_var['lang']['operation_prompt_content']['allot']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['allot']['1']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['allot']['2']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
                <div class="common-content">
                    <div class="mian-info">
                        <?php if ($this->_var['is_supplier'] == 1): ?>
                        <form method="POST" action="suppliers.php" name="theFrom" id="privilege_frm">
                        <?php elseif ($this->_var['priv_ru'] == 1): ?>
                        <form method="POST" action="privilege.php" name="theFrom" id="privilege_frm">
                        <?php else: ?>
                        <form method="POST" action="privilege_seller.php" name="theFrom" id="privilege_frm">
                        <?php endif; ?>
                    	<div class="switch_info business_info" style="background:none;">
                            <?php $_from = $this->_var['priv_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'priv');if (count($_from)):
    foreach ($_from AS $this->_var['priv']):
?>
                            <?php if ($this->_var['priv']['priv']): ?>
                            <div class="step">
                            	<div class="tit">
                                    <div class="checkbox_items">
                                    	<div class="checkbox_item">
                                            <input type="checkbox" name="chkGroup" value="checkbox" class="ui-checkbox" id="chkGroup_<?php echo $this->_var['priv']['action_id']; ?>" />
                                            <label for="chkGroup_<?php echo $this->_var['priv']['action_id']; ?>" class="ui-label blod"><?php echo $this->_var['lang'][$this->_var['priv']['action_code']]; ?></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="qx_items">
                                	<div class="qx_item">
                                        <div class="checkbox_items">
                                            <?php $_from = $this->_var['priv']['priv']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('priv_list', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['priv_list'] => $this->_var['list']):
?>
                                            <div class="checkbox_item">
                                                <input type="checkbox" value="<?php echo $this->_var['priv_list']; ?>" name="action_code[]" class="ui-checkbox" id="<?php echo $this->_var['priv_list']; ?>_<?php echo $this->_var['priv']['action_id']; ?>" date="<?php echo $this->_var['priv']['action_code']; ?>"<?php if ($this->_var['list']['cando'] == 1): ?> checked="true"<?php endif; ?> title="<?php echo $this->_var['list']['relevance']; ?>"/>
                                                <label for="<?php echo $this->_var['priv_list']; ?>_<?php echo $this->_var['priv']['action_id']; ?>" class="ui-label"><?php echo $this->_var['lang'][$this->_var['list']['action_code']]; ?></label>
                                            </div>
                                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            <div class="steplast">
                            	<div class="checkbox_items">
                                	<div class="checkbox_item">
                                    	<input type="checkbox" name="checkall" value="checkbox" class="ui-checkbox" id="checkall" />
                                        <label for="checkall" class="ui-label"><?php echo $this->_var['lang']['check_all']; ?></label>
                                    </div>
                                </div>
                                <div class="info_btn">
                                    <input type="submit" value="<?php echo $this->_var['lang']['button_save']; ?>" class="button">
                                    <input type="hidden"   name="id"    value="<?php echo $this->_var['user_id']; ?>" />
                                    <input type="hidden"   name="suppliers_id"    value="<?php echo $this->_var['suppliers_id']; ?>" />
                                    <input type="hidden" name="token" value="<?php echo $this->_var['token']; ?>" />
                                    <input type="hidden"   name="act"   value="<?php echo $this->_var['form_act']; ?>" />
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $this->fetch('library/pagefooter.lbi'); ?>
    <script language="javascript">
	$("#checkall").click(function(){
		var checkbox = $(this).parents(".switch_info").find('input:checkbox[type="checkbox"]');
		if($(this).prop("checked") == true){
			checkbox.prop("checked",true);
		}else{
			checkbox.prop("checked",false);
		}
	});
	
	$("input[name='chkGroup']").click(function(){
		var checkbox = $(this).parents(".tit").next(".qx_items").find('input:checkbox[type="checkbox"]');
		if($(this).prop("checked") == true){
			checkbox.prop("checked",true);
		}else{
			checkbox.prop("checked",false);
		}
	});
	
	$("input[name='action_code[]']").click(function(){    
		var qx_items = $(this).parents(".qx_items");
		var length = qx_items.find("input[name='action_code[]']").length;
		var length2 =  qx_items.find("input[name='action_code[]']:checked").length;
		if(length == length2){
			qx_items.prev().find("input[name='chkGroup']").prop("checked",true);
		}else{
			qx_items.prev().find("input[name='chkGroup']").prop("checked",false);
		}
	});
	
	$(".qx_items").each(function(index, element) {
		var length = $(this).find("input[name='action_code[]']").length;
		var length2 = $(this).find("input[name='action_code[]']:checked").length;
		
		if(length == length2){
			$(this).prev().find("input[name='chkGroup']").prop("checked",true);
		}else{
			$(this).prev().find("input[name='chkGroup']").prop("checked",false);
		}
	});
    </script>
</body>
</html>
