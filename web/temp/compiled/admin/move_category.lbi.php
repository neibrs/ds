<?php if ($this->_var['action_type'] == 'move_pic'): ?>
<form action="gallery_album.php" method="post" name="theForm" enctype="multipart/form-data" id="movepicalbum">
<div class="pic_album">
        <div class="items">
            <div class="item">
                <div class="label"><?php echo $this->_var['lang']['label_operat_album']; ?></div>
                <div class="imitate_select select_w320">
                    <div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
                    <ul>
                        <?php $_from = $this->_var['cat_select']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                        <li><a href="javascript:;" data-value="<?php echo $this->_var['list']['album_id']; ?>" class="ftx-01"><?php echo $this->_var['list']['name']; ?></a></li>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </ul>
                    <input name="album_id" type="hidden" value="<?php echo $this->_var['album_id']; ?>">
                </div>
            </div>
            <div class="item">
                <div class="label"><?php echo $this->_var['lang']['label_target_album']; ?></div>
                <div class="imitate_select select_w320">
                    <div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
                    <ul>
                        <?php $_from = $this->_var['cat_select']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                        <li><a href="javascript:;" data-value="<?php echo $this->_var['list']['album_id']; ?>" class="ftx-01"><?php echo $this->_var['list']['name']; ?></a></li>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </ul>
                    <input name="target_album_id" type="hidden" value="0" >
                </div>
            </div>
        </div>
        <input type="hidden" name="act" value="<?php echo $this->_var['form_act']; ?>" />		
        <input type="hidden" name="inherit" value="<?php echo $this->_var['inherit']; ?>" />		
        <div class="clear"></div>
    </div>
</form>
<?php else: ?>
<form action="category.php" method="post" name="theForm" enctype="multipart/form-data" id="moveCategory">
<div id="">
	<div class="transfer_goods_info">
		<div class="prompt">
			<h4><?php echo $this->_var['lang']['whats_transfer_goods']; ?></h4>
			<span><?php echo $this->_var['lang']['whats_transfer_goods_answer']; ?></span>
		</div>
		<div class="pb_content tl">
			<div class="item">
				<span class="fl"><?php echo $this->_var['lang']['form_this_cate']; ?></span>
                <div class="categorySelect fl mr0">
                    <div class="selection">
                        <input type="text" name="category_name" id="category_name" class="text w250 mr0 valid" value="<?php if ($this->_var['parent_category']): ?><?php echo $this->_var['parent_category']; ?><?php else: ?>顶级分类<?php endif; ?>" autocomplete="off" readonly data-filter="cat_name" />
                        <input type="hidden" name="cat_id" id="category_id" value="<?php echo empty($this->_var['parent_id']) ? '0' : $this->_var['parent_id']; ?>" data-filter="cat_id" />
                    </div>
                    <div class="select-container" style="display:none;">
                        <?php echo $this->fetch('library/filter_category.lbi'); ?>
                    </div>
                </div>
			</div>
			<div class="item mr0">
				<span class="fl"><?php echo $this->_var['lang']['transfer_to']; ?></span>
                <div class="categorySelect fl">
                    <div class="selection">
                        <input type="text" name="category_name" id="category_name" class="text w250 mr0 valid" value="<?php if ($this->_var['parent_category']): ?><?php echo $this->_var['parent_category']; ?><?php else: ?>顶级分类<?php endif; ?>" autocomplete="off" readonly data-filter="cat_name" />
                        <input type="hidden" name="target_cat_id" id="category_id" value="<?php echo empty($this->_var['parent_id']) ? '0' : $this->_var['parent_id']; ?>" data-filter="cat_id" />
                    </div>
                    <div class="select-container" style="display:none;">
                        <?php echo $this->fetch('library/filter_category.lbi'); ?>
                    </div>
                </div>				
			</div>
			<input type="hidden" name="act" value="<?php echo $this->_var['form_act']; ?>" />			
		</div>
	</div>
</div>
</form>
<?php endif; ?>