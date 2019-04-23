
<?php if ($this->_var['img_list']): ?>
<?php $_from = $this->_var['img_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
<li><a href="<?php echo $this->_var['list']['comment_img']; ?>" target="_blank"><img width="78" height="78" alt="" src="<?php echo $this->_var['list']['comment_img']; ?>"></a><i class="iconfont icon-cha" ectype="<?php if ($this->_var['report'] == 1): ?>reimg-remove<?php elseif ($this->_var['report'] == 2): ?>compimg-remove<?php else: ?>cimg-remove<?php endif; ?>" data-imgid="<?php echo $this->_var['list']['id']; ?>"></i></li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php endif; ?>