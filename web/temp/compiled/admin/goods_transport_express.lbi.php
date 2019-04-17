<?php if ($this->_var['transport_express']): ?>
<table class="t-tab mb10">
	<tr>
		<td width="60%"><?php echo $this->_var['lang']['express_name']; ?></td>
		<td width="20%"><?php echo $this->_var['lang']['extra_freight_yuan']; ?></td>
		<td width="20%" align="center"><?php echo $this->_var['lang']['handler']; ?></td>
	</tr>
	<?php $_from = $this->_var['transport_express']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'express');if (count($_from)):
    foreach ($_from AS $this->_var['express']):
?>
	<tr>
		<td width="60%"><?php if ($this->_var['express']['express_list']): ?><?php echo $this->_var['express']['express_list']; ?><?php else: ?><?php echo $this->_var['lang']['unspecified_express']; ?><?php endif; ?></td>
		<td width="20%">
			<input type="hidden" name="id" value="<?php echo $this->_var['express']['id']; ?>" />
			<input type="text" name="shipping_fee[<?php echo $this->_var['express']['id']; ?>]" class="text w80" autocomplete="off" value="<?php echo $this->_var['express']['shipping_fee']; ?>" />
		</td>
		<td width="20%" align="center">
			<input type="button" value="<?php echo $this->_var['lang']['edit']; ?>" class="button mr10" data-role="edit_express" ectype="edit_express">
			<input type="button" value="<?php echo $this->_var['lang']['drop']; ?>" class="button" data-role="drop_express" ectype="drop_express">
		</td>
	</tr>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</table>
<?php endif; ?>