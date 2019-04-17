<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><a href="<?php echo $this->_var['action_link']['href']; ?>" class="s-back"><?php echo $this->_var['lang']['back']; ?></a><?php echo $this->_var['lang']['11_system']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
        	<div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                	<li><?php echo $this->_var['lang']['operation_prompt_content']['temp']['0']; ?></li>
					<li><?php echo $this->_var['lang']['operation_prompt_content']['temp']['1']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['temp']['2']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
                <div class="common-content">
                	<div class="step">
                    	<div class="step_content">
                        	<div class="batch_tab">
                            	<div class="checkbox_items">
                                	<div class="checkbox_item">
                                    	<input type="radio" name="model" id="model_1" class="ui-radio-16x16" value="1" <?php if ($this->_var['shipping']['print_model'] == 1): ?>checked="checked"<?php endif; ?> onclick="javascript:model_change('1');">
                                        <label for="model_1" class="ui-radio-label-16x16"><?php echo $this->_var['lang']['code_pattern']; ?></label>
                                    </div>
                                    <div class="checkbox_item">
                                    	<input type="radio" name="model" id="model_2" value="2" class="ui-radio-16x16" onclick="javascript:model_change('2');">
                                        <label for="model_2" class="ui-radio-label-16x16"><?php echo $this->_var['lang']['what_you_see_pattern']; ?></label>
                                    </div>
                                </div>
                            </div>
                            <div id="visual" <?php if ($this->_var['shipping']['print_model'] == 1): ?>style="display:none"<?php endif; ?>>
                            	<iframe id="goods_desc___Frame" src="shipping.php?act=print_index&shipping=<?php echo $this->_var['shipping_id']; ?>" width="99%" height="675" frameborder="0" scrolling="no"></iframe>
                            </div>
                            <form method="post" name="theForm" action="shipping.php?act=do_edit_print_template&shipping=<?php echo $this->_var['shipping_id']; ?>">
                                <div id="code_shipping_print" <?php if ($this->_var['shipping']['print_model'] == 2): ?>style="display:none"<?php endif; ?>>
                                    <div class="code_shipping_left">
                                    	<textarea id="shipping_print" name="shipping_print" class="textarea"><?php echo htmlspecialchars($this->_var['shipping']['shipping_print']); ?></textarea>
                                    </div>
                                    <div class="code_shipping_right">
                                    	<?php echo $this->_var['lang']['shipping_template_info']; ?>
                                    </div>
                                </div>
                                <div id="code_submit" <?php if ($this->_var['shipping']['print_model'] == 2): ?>style="display:none"<?php endif; ?>>
                                    <input type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="btn btn30 red_btn" />
                                </div>
                                <input type="hidden" name="print_model" value="1">
                                <input type="hidden" name="shipping_name" value="<?php echo $this->_var['shipping']['shipping_name']; ?>">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 	<?php echo $this->fetch('library/pagefooter.lbi'); ?>
    <script type="text/javascript">
		var display_yes = (Browser.isIE) ? 'block' : '';
	
		/**
		* 切换编辑模式
		*/
		function model_change(type)
		{
			//获取表单对象
			switch (type)
			{
				case '1': //代码模式
				$("#code_shipping_print").css("display",display_yes);
				$("#code_submit").css("display",display_yes);
				$("#visual").css("display",'none');
				break;
			
				case '2': //所见即所得模式
				$("#code_shipping_print").css("display","none");
				$("#code_submit").css("display","none")
				$("#visual").css("display",display_yes)
				break;
			}
			return true;
		}
    </script>
</body>
</html>
