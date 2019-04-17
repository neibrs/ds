<div class="goods_attr_input">
<form id="insertAttrInput" enctype="multipart/form-data" method="post" action="dialog.php?act=insert_attr_input">
<div class="input_type_items">
    <div class="input_type_item">
        <i class="xds_up"></i>
        <input type="text" name="attr_value_list[]" class="text" value="" autocomplete="off" />
        <input type="hidden" name="goods_attr_id[]" class="text" value="0" autocomplete="off" />
    </div>
    
    <?php if ($this->_var['goods_attr']): ?>
    <?php $_from = $this->_var['goods_attr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('k', 'v');if (count($_from)):
    foreach ($_from AS $this->_var['k'] => $this->_var['v']):
?>
        <div class="input_type_item">
        	<i class="xds_down"></i>
            <input type="text" name="attr_value_list[]" class="text" value="<?php echo $this->_var['v']['attr_value']; ?>" autocomplete="off" />
            <input type="hidden" name="goods_attr_id[]" class="text" value="<?php echo $this->_var['v']['goods_attr_id']; ?>" autocomplete="off" />
        </div>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php endif; ?>
</div>

<input type="hidden" name="attr_id" class="text" value="<?php echo $this->_var['attr_id']; ?>" autocomplete="off" />
<input type="hidden" name="goods_id" class="text" value="<?php echo $this->_var['goods_id']; ?>" autocomplete="off" />
</form>
</div>

<script type="text/javascript">
$(function(){
	$(".goods_attr_input").perfectScrollbar();
});
</script>