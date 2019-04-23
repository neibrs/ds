<div class="deliveryInfo sku_goods_info">
	<table width="100%" class="table">
		<thead>
			<tr>
				<th><?php echo $this->_var['lang']['express']; ?></th>
				<th><?php echo $this->_var['lang']['post_form_flow_id']; ?></th>
				<th><?php echo $this->_var['lang']['order_id']; ?></th>
				<th><?php echo $this->_var['lang']['receipt_infor']; ?></th>
				<th><?php echo $this->_var['lang']['post_form_id']; ?></th>			
			</tr>
		</thead>
		<tbody>
			<?php $_from = $this->_var['delivery_orders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'ship');$this->_foreach['ship'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['ship']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['ship']):
        $this->_foreach['ship']['iteration']++;
?>
			<?php $_from = $this->_var['ship']['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'order');$this->_foreach['order'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['order']['total'] > 0):
    foreach ($_from AS $this->_var['order']):
        $this->_foreach['order']['iteration']++;
?>
			<tr>
				<?php if (($this->_foreach['order']['iteration'] <= 1)): ?>
				<td rowspan="<?php echo $this->_var['ship']['count']; ?>"><?php echo $this->_var['key']; ?></td>
				<?php endif; ?>
				<td><?php echo $this->_var['order']['delivery_sn']; ?></td>
				<td><?php echo $this->_var['order']['order_sn']; ?></td>
				<td><strong class="org"><a href="mailto:<?php echo $this->_var['order']['email']; ?>"> <?php echo htmlspecialchars($this->_var['order']['consignee']); ?></a></strong><?php if ($this->_var['order']['mobile']): ?> [TEL: <?php echo htmlspecialchars($this->_var['order']['mobile']); ?>]<?php endif; ?><br>[<?php echo $this->_var['order']['region']; ?>] <?php echo htmlspecialchars($this->_var['order']['address']); ?></td>
				<td><input type="text" name="invoice_no[<?php echo $this->_var['order']['delivery_id']; ?>]" value="" class="text fn"></td>
			</tr>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</tbody>
		<tfoot>
			<tr>
				<td><?php echo $this->_var['lang']['memo_info']; ?></td>
				<td colspan="4"><textarea class="textarea" name="action_note"></textarea></td>
			</tr>
		</tfoot>
	</table>
</div>