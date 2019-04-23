<div class="print-handle">
    <div class="print-btn"><a href="javascript:void(0);" ectype="btnPreview"><i class="iconfont icon-browse"></i><?php echo $this->_var['lang']['preview']; ?></a></div>
    <div class="print-btn"><a href="javascript:void(0);" ectype="btnPrint"><i class="iconfont icon-dayin"></i><?php echo $this->_var['lang']['print']; ?></a></div>
	<div class="print-spec">
		<label><?php echo $this->_var['lang']['label_print_specification']; ?></label>
		<div class="imitate_select select_w120" id="print_specification">
			<div class="cite"><?php echo $this->_var['print_specification']; ?></div>
			<ul>
				<?php $_from = $this->_var['print_size_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item_0_53359100_1555894977');if (count($_from)):
    foreach ($_from AS $this->_var['item_0_53359100_1555894977']):
?>
				<li><a href="javascript:;" data-value="<?php echo $this->_var['item_0_53359100_1555894977']['specification']; ?>"><?php echo $this->_var['item_0_53359100_1555894977']['specification']; ?></a></li>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</ul>
			<input name="print_specification" type="hidden" value="<?php echo $this->_var['print_specification']; ?>" autocomplete="off" id="print_specification_val">
		</div>
		<p><?php echo $this->_var['lang']['print_flow_tip']; ?></p>
		<p>
			<span class="red"><?php echo $this->_var['lang']['click_button_set']; ?></span>
			<a href="tp_api.php?act=order_print_setting" target="_blank" class="sc-btn sc-blueBg-btn btn25"><?php echo $this->_var['lang']['go_set']; ?></a>
		</p>
	</div>
	<div class="tip">
		<div class="title">
			<h1><?php echo $this->_var['print_size_info']['type']; ?></h1>
			<em>Size: <?php echo $this->_var['print_size_info']['size']; ?></em>
		</div>
		<div class="desc"></div>
	</div>
</div>