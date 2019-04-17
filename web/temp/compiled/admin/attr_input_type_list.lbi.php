<?php if ($this->_var['goods_attr']): ?>
<?php $_from = $this->_var['goods_attr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('k', 'v');if (count($_from)):
    foreach ($_from AS $this->_var['k'] => $this->_var['v']):
?>
<div class="checkbox_item">
    <input type="checkbox" data-type="attr_id" name="attr_id_list1[]" class="ui-checkbox" <?php if ($this->_var['v']['is_selected']): ?>checked<?php endif; ?> value="<?php echo $this->_var['v']['attr_id']; ?>">
    <input type="checkbox" data-type="attr_value" name="attr_value_list1[]" class="ui-checkbox" <?php if ($this->_var['v']['is_selected']): ?>checked<?php endif; ?> value="<?php echo $this->_var['v']['attr_value']; ?>" id="goods_attr_checkbox<?php echo $this->_var['v']['goods_attr_id']; ?>"/>
    <label for="goods_attr_checkbox<?php echo $this->_var['v']['goods_attr_id']; ?>" class="ui-label"><?php echo $this->_var['v']['attr_value']; ?></label>
</div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php endif; ?>

<div class="checkbox_item">
<a href="javascript:void(0);" class="btn btn25 blue_btn" data-attrid="<?php echo $this->_var['attr_id']; ?>" ectype="attr_input"><?php echo $this->_var['lang']['custom']; ?></a>
</div>