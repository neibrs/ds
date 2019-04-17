<?php if ($this->_var['dialog_type'] == 'delete'): ?>
<div class="remove">
    <div class="dialog_head">
        <div class="icon_title"></div>
    </div>
    <div class="dialog_content">
        <h3><?php echo $this->_var['lang']['confirm_remove']; ?></h3>
        <p><?php echo $this->_var['lang']['confirm_remove_store']; ?></p>
        <i class="bg_yuan1"></i>
        <i class="bg_yuan2"></i>
    </div>
</div>
<?php elseif ($this->_var['dialog_type'] == 'success' || $this->_var['dialog_type'] == 'ajaxfail'): ?>
<div class="<?php if ($this->_var['dialog_type'] == 'success'): ?>success<?php else: ?>fail<?php endif; ?>">
    <div class="dialog_head">
        <div class="icon_title"></div>
    </div>
    <div class="dialog_content">
        <h3><?php echo $this->_var['message']; ?></h3>
        <p><?php echo $this->_var['lang']['dialog_type_notic']; ?></p>
        <i class="bg_yuan1"></i>
        <i class="bg_yuan2"></i>
    </div>
    <div class="dialog_foot">
        <a href="goods.php?act=list&page=<?php echo $this->_var['page']; ?>"><?php echo $this->_var['lang']['store_goods']; ?></a>
        <a href="order.php?act=list"><?php echo $this->_var['lang']['order_list']; ?></a>
    </div>
</div>
<?php elseif ($this->_var['dialog_type'] == 'failure'): ?>
<div class="fail">
    <div class="dialog_head">
        <div class="icon_title"></div>
    </div>
    <div class="dialog_content">
        <h3><?php echo $this->_var['message']; ?></h3>
        <p><?php echo $this->_var['lang']['dialog_type_notic']; ?></p>
        <i class="bg_yuan1"></i>
        <i class="bg_yuan2"></i>
    </div>
</div>
<?php endif; ?>