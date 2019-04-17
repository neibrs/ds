<?php if ($this->_var['goods_type_list']): ?>
<div class="step">
	<div class="step_title">
		<i class="ui-step"></i>
		<h3 class="fl">商品属性</h3>
	</div>
	<div class="step_content relative">
		<div class="step_item">
			<div class="step_item_left"><h5>属性类型：</h5></div>
			<div class="step_item_right">
				<div class="item_right_li">
					<div class="value_select">
						<div id="attr_select" class="imitate_select select_w320" ectype="attrTypeSelect">
							<div class="cite"><?php if ($this->_var['goods_type_name']): ?><?php echo $this->_var['goods_type_name']; ?><?php else: ?><?php echo $this->_var['lang']['please_select']; ?><?php endif; ?></div>
							<ul style="display: none;">
								<li><a href="javascript:getAttrList(<?php echo empty($this->_var['wholesale']['goods_id']) ? '0' : $this->_var['wholesale']['goods_id']; ?>);" data-value="0" class="ftx-01">请选择商品类型</a></li>
								<?php $_from = $this->_var['goods_type_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'goods_type');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['goods_type']):
?>
								<li><a href="javascript:getAttrList(<?php echo empty($this->_var['wholesale']['goods_id']) ? '0' : $this->_var['wholesale']['goods_id']; ?>);" data-value="<?php echo $this->_var['goods_type']['cat_id']; ?>" class="ftx-01"><?php echo $this->_var['goods_type']['cat_name']; ?></a></li>
								<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
							</ul>
							<input name="goods_type" type="hidden" value="<?php echo empty($this->_var['wholesale']['goods_type']) ? '0' : $this->_var['wholesale']['goods_type']; ?>" id="select_attr_val">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="step_item step_item_bg pb0" id="tbody-wholesale-goodsAttr"></div>
		<!--属性模式-->
		<div class="step_item step_item_bg" id="attribute_model" <?php if ($this->_var['wholesale']['model_price'] == 0): ?>style="display:none;"<?php endif; ?>>
			<div class="step_item_left"><h5>商品仓库：</h5></div>
			<div class="step_item_right">
				<div class="item_right_li" id="attribute_warehouse">
					<div class="value">
						<div class="checkbox_tiems">
							<?php $_from = $this->_var['warehouse_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'warehouse');$this->_foreach['warehouse'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['warehouse']['total'] > 0):
    foreach ($_from AS $this->_var['warehouse']):
        $this->_foreach['warehouse']['iteration']++;
?>
							<div class="checkbox_item mr20" data-wareid="<?php echo $this->_var['warehouse']['region_id']; ?>">
								<input type="radio" name="warehouse" class="ui-radio" id="warehouse_<?php echo $this->_var['warehouse']['region_id']; ?>" <?php if (($this->_foreach['warehouse']['iteration'] <= 1)): ?>checked<?php endif; ?> value="<?php echo $this->_var['warehouse']['region_id']; ?>" data-type="warehouse_id"/>
								<label for="warehouse_<?php echo $this->_var['warehouse']['region_id']; ?>" class="ui-radio-label blod"><?php echo $this->_var['warehouse']['region_name']; ?></label>
							</div>
							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						</div>
					</div>
				</div>
				<div class="item_right_li" id="attribute_region" <?php if ($this->_var['wholesale']['model_price'] != 2): ?>style="display:none;"<?php endif; ?>>
					<div class="label">地区：</div>
					<?php $_from = $this->_var['warehouse_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'warehouse');$this->_foreach['warehouse'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['warehouse']['total'] > 0):
    foreach ($_from AS $this->_var['warehouse']):
        $this->_foreach['warehouse']['iteration']++;
?>
					<div class="value" <?php if (! ($this->_foreach['warehouse']['iteration'] <= 1)): ?>style="display:none;"<?php endif; ?> data-wareid="<?php echo $this->_var['warehouse']['region_id']; ?>">
						<div class="checkbox_tiems">
							<?php $_from = $this->_var['warehouse']['area_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'area');$this->_foreach['area'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['area']['total'] > 0):
    foreach ($_from AS $this->_var['area']):
        $this->_foreach['area']['iteration']++;
?>
							<div class="checkbox_item">
								<input type="radio" name="region" class="ui-radio" id="region_<?php echo $this->_var['area']['region_id']; ?>" <?php if (($this->_foreach['area']['iteration'] <= 1) && ($this->_foreach['warehouse']['iteration'] <= 1)): ?>checked<?php endif; ?> value="<?php echo $this->_var['area']['region_id']; ?>" data-type="region_id"/>
								<label for="region_<?php echo $this->_var['area']['region_id']; ?>" class="ui-radio-label"><?php echo $this->_var['area']['region_name']; ?></label>
							</div>
							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						</div>
					</div>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				</div>
			</div>
		</div>
		<!--属性模式-->
		<div class="step_item_table" id="attribute_table"></div>
	</div>
</div>
<?php endif; ?>

<div class="step" id="goods_attr_gallery"></div>