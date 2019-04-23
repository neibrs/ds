<?php if ($this->_var['print_specification'] == 'A4纸张'): ?>
<div class="print-panel mb0" style="padding:5mm 5mm 3mm 5mm; width:<?php echo empty($this->_var['print_spec_info']['width']) ? $this->_var['print_size_info']['width'] : $this->_var['print_spec_info']['width']; ?>mm;">
	<div class="top">
		<div class="logo"><img src="<?php echo $this->_var['order_print_logo']; ?>"></div>
		<div class="title"><h3><?php if ($this->_var['order_type'] == 'order'): ?><?php echo $this->_var['lang']['goods_shopping_list']; ?><?php else: ?><?php echo $this->_var['lang']['wholesale_shopping_list']; ?><?php endif; ?></h3></div>
		<img src="<?php echo $this->_var['web_url']; ?>images/print/seal-state-express.png" class="seal" style="width:120px; height:120px; right:30px; top:12px;">
	</div>
	<div class="buyer-info">
		<div class="row">
			<div class="lie w300"><?php echo $this->_var['lang']['label_order_id']; ?><?php echo $this->_var['order_info']['order_sn']; ?></div>
			<div class="lie w300"><?php echo $this->_var['lang']['label_order_time']; ?><?php echo $this->_var['order_info']['formated_add_time']; ?></div>
		</div>
		<div class="row">
			<div class="lie w300"><?php echo $this->_var['lang']['label_consignee']; ?><?php echo $this->_var['order_info']['consignee']; ?></div>
			<div class="lie w300"><?php echo $this->_var['lang']['label_telephone']; ?><?php echo $this->_var['order_info']['mobile']; ?></div>
		</div>
		<div class="row">
			<?php if ($this->_var['order_type'] == 'order'): ?><div class="lie w300"><?php echo $this->_var['lang']['label_delivery_time']; ?><?php echo $this->_var['order_info']['best_time']; ?></div><?php endif; ?>
			<div class="lie w300"><?php echo $this->_var['lang']['label_payment_method']; ?><?php if ($this->_var['order_type'] == 'order'): ?><?php echo $this->_var['order_info']['pay_name']; ?><?php else: ?><?php echo $this->_var['lang']['offline_transaction']; ?><?php endif; ?></div>
		</div>
		<div class="row">
			<div class="lie_colspan"><?php echo $this->_var['lang']['label_receiving_address']; ?><?php echo $this->_var['order_info']['complete_address']; ?></div>
		</div>
	</div>
	<div class="buyer-goods-info">
		<table class="table">
			<thead>
				<tr>
					<th width="10%"><?php echo $this->_var['lang']['goods_id']; ?></th>
					<th width="30%"><?php echo $this->_var['lang']['goods_name']; ?></th>
					<th width="20%"><?php echo $this->_var['lang']['goods_specifications']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['amount']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['unit_price']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['subtotal']; ?></th>
				</tr>
			</thead>
			<tbody>
				<?php $_from = $this->_var['order_info']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
				<tr>
					<td><?php echo $this->_var['goods']['goods_id']; ?></td>
					<td class="p-name"><?php echo $this->_var['goods']['goods_name']; ?><?php if ($this->_var['goods']['bar_code']): ?><div class="blue"><?php echo $this->_var['lang']['label_goods_bar_code']; ?><?php echo $this->_var['goods']['bar_code']; ?></div><?php endif; ?></td>
					<td><?php echo $this->_var['goods']['goods_attr']; ?></td>
					<td><?php echo $this->_var['goods']['goods_number']; ?></td>
					<td><?php echo $this->_var['goods']['format_goods_price']; ?></td>
					<td><?php echo $this->_var['goods']['format_goods_amount']; ?></td>
				</tr>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="7" class="tr"><?php echo $this->_var['lang']['label_total_number']; ?><?php echo $this->_var['order_info']['number_amount']; ?><?php echo $this->_var['lang']['jian']; ?>&nbsp;&nbsp;&nbsp;<?php echo $this->_var['lang']['label_goods_total_amount']; ?><?php echo $this->_var['order_info']['formated_goods_amount']; ?></td>
				</tr>
			</tfoot>
		</table>
	</div>
	<div class="address-info">
		<?php if ($this->_var['order_type'] == 'order'): ?>
		<p>
			<span><?php echo $this->_var['lang']['label_goods_total_amount']; ?><?php echo $this->_var['order_info']['formated_goods_amount']; ?></span>
			<?php if ($this->_var['order_info']['shipping_fee'] > 0): ?>
			<em>+</em>
			<span><?php echo $this->_var['lang']['label_freight']; ?><?php echo $this->_var['order_info']['formated_shipping_fee']; ?></span>	
			<?php endif; ?>
			<?php if ($this->_var['order_info']['insure_fee'] > 0): ?>
			<em>+</em>
			<span><?php echo $this->_var['lang']['label_premium']; ?><?php echo $this->_var['order_info']['formated_insure_fee']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['tax'] > 0): ?>
			<em>+</em>
			<span><?php echo $this->_var['lang']['label_invoice_tax_amount']; ?><?php echo $this->_var['order_info']['formated_tax']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['pay_fee'] > 0): ?>
			<em>+</em>
			<span><?php echo $this->_var['lang']['label_pay_charges']; ?><?php echo $this->_var['order_info']['formated_pay_fee']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['discount'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_discount']; ?><?php echo $this->_var['order_info']['formated_discount']; ?></span>
			<?php endif; ?>			
			<em>=</em>
			<span><?php echo $this->_var['lang']['label_order_total_amount']; ?><?php echo $this->_var['order_info']['formated_total_fee']; ?></span>
		</p>
		<?php else: ?>
		<p>
			<span><?php echo $this->_var['lang']['label_goods_total_amount']; ?><?php echo $this->_var['order_info']['formated_goods_amount']; ?></span>
		</p>
		<?php endif; ?>
		
		<?php if ($this->_var['order_type'] == 'order'): ?>
		<p>
			<span><?php echo $this->_var['lang']['label_order_total_amount']; ?><?php echo $this->_var['order_info']['formated_total_fee']; ?></span>
			<?php if ($this->_var['order_info']['surplus'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_balance']; ?><?php echo $this->_var['order_info']['formated_surplus']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['money_paid'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_paid_amount']; ?><?php echo $this->_var['order_info']['formated_money_paid']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['value_card'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_stored_value_card']; ?><?php echo $this->_var['order_info']['formated_value_card']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['integral_money'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_integral']; ?><?php echo $this->_var['order_info']['formated_integral_money']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['bonus'] > 0): ?>					
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_store_red_bag']; ?><?php echo $this->_var['order_info']['formated_bonus']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['coupons'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_coupon']; ?><?php echo $this->_var['order_info']['formated_coupons']; ?></span>
			<?php endif; ?>
			<em>=</em>
			<span class="red"><?php echo $this->_var['lang']['label_to_be_paid_amount']; ?><?php echo $this->_var['order_info']['formated_order_amount']; ?></span>
		</p>
		<?php else: ?>
		<p>
			<span class="red"><?php echo $this->_var['lang']['label_to_be_paid_amount']; ?><?php echo $this->_var['order_info']['formated_order_amount']; ?></span>
		</p>
		<?php endif; ?>
        <div class="image tr mt10"><img src="<?php echo $this->_var['shop_url']; ?>plugins/barcodegen/html/image.php?filetype=PNG&dpi=72&scale=1&rotation=0&font_family=Arial.ttf&font_size=14&text=<?php echo $this->_var['order_sn']; ?>&thickness=40&checksum=&code=BCGcode39" /></div>
		<textarea class="print_textarea mt20" placeholder="<?php echo $this->_var['lang']['please_input_remark']; ?>" rows="3"></textarea>
		<p class="print-remark" title="<?php echo $this->_var['lang']['click_redit']; ?>"></p>
	</div>
</div>
<?php elseif ($this->_var['print_specification'] == '100MM'): ?>
<div class="print-panel mb30" style="width:<?php echo empty($this->_var['print_spec_info']['width']) ? $this->_var['print_size_info']['width'] : $this->_var['print_spec_info']['width']; ?>mm; padding:1mm;">
	<div class="top">
		<div class="logo"><img src="<?php echo $this->_var['order_print_logo']; ?>"></div>
		<div class="title" style="width:auto; text-align:right; position: relative; z-index:99;"><h3><?php if ($this->_var['order_type'] == 'order'): ?><?php echo $this->_var['lang']['goods_shopping_list']; ?><?php else: ?><?php echo $this->_var['lang']['wholesale_shopping_list']; ?><?php endif; ?></h3></div>
		<img src="<?php echo $this->_var['web_url']; ?>images/print/seal-state-express.png" class="seal">
	</div>
	<div class="buyer-info">
		<div class="row">
			<div class="lie w180">NO.<?php echo $this->_var['order_info']['order_sn']; ?></div>
			<div class="lie w180"><?php echo $this->_var['lang']['label_order_time']; ?><?php echo $this->_var['order_info']['formated_add_time']; ?></div>
		</div>
		<div class="row">
			<div class="lie w180"><?php echo $this->_var['lang']['label_consignee']; ?><?php echo $this->_var['order_info']['consignee']; ?></div>
			<div class="lie w180"><?php echo $this->_var['lang']['label_telephone']; ?><?php echo $this->_var['order_info']['mobile']; ?></div>
		</div>
		<div class="row">
			<div class="lie w180"><?php echo $this->_var['lang']['label_delivery_time']; ?><?php echo $this->_var['order_info']['best_time']; ?></div>
			<div class="lie w180"><?php echo $this->_var['lang']['label_payment_method']; ?><?php echo $this->_var['order_info']['pay_name']; ?></div>
		</div>
		<div class="row">
			<div class="lie_colspan"><?php echo $this->_var['lang']['label_receiving_address']; ?><?php echo $this->_var['order_info']['complete_address']; ?></div>
		</div>
	</div>
	<div class="buyer-goods-info">
		<table class="table">
			<thead>
				<tr>
					<th width="30%"><?php echo $this->_var['lang']['goods_name']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['amount']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['unit_price']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['subtotal']; ?></th>
				</tr>
			</thead>
			<tbody>
				<?php $_from = $this->_var['order_info']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
				<tr>
					<td class="p-name"><?php echo $this->_var['goods']['goods_name']; ?><?php if ($this->_var['goods']['bar_code']): ?><div class="blue"><?php echo $this->_var['lang']['label_goods_bar_code']; ?><?php echo $this->_var['goods']['bar_code']; ?></div><?php endif; ?></td>
					<td><?php echo $this->_var['goods']['goods_number']; ?></td>
					<td><?php echo $this->_var['goods']['format_goods_price']; ?></td>
					<td><?php echo $this->_var['goods']['format_goods_amount']; ?></td>
				</tr>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="7" class="tr"><div class="fr"><?php echo $this->_var['lang']['label_total_number']; ?><?php echo $this->_var['order_info']['number_amount']; ?><?php echo $this->_var['lang']['jian']; ?>&nbsp;&nbsp;&nbsp;<?php echo $this->_var['lang']['label_goods_total_amount']; ?><?php echo $this->_var['order_info']['formated_goods_amount']; ?></div></td>
				</tr>
			</tfoot>
		</table>
	</div>
	<div class="address-info">
		<?php if ($this->_var['order_info']['shipping_fee'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_freight']; ?><?php echo $this->_var['order_info']['formated_shipping_fee']; ?></p>
		<?php endif; ?>
		<?php if ($this->_var['order_info']['insure_fee'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_premium']; ?><?php echo $this->_var['order_info']['formated_insure_fee']; ?></p>
		<?php endif; ?>
		<?php if ($this->_var['order_info']['tax'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_invoice_tax_amount']; ?><?php echo $this->_var['order_info']['formated_tax']; ?></p>
		<?php endif; ?>
		<?php if ($this->_var['order_info']['pay_fee'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_pay_charges']; ?><?php echo $this->_var['order_info']['formated_pay_fee']; ?></p>
		<?php endif; ?>
		<?php if ($this->_var['order_info']['discount'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_discount']; ?><?php echo $this->_var['order_info']['formated_discount']; ?></p>
		<?php endif; ?>
		<?php if ($this->_var['order_info']['integral_money'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_integral']; ?><?php echo $this->_var['order_info']['formated_integral_money']; ?></p>
		<?php endif; ?>
		<?php if ($this->_var['order_info']['bonus'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_store_red_bag']; ?><?php echo $this->_var['order_info']['formated_bonus']; ?></p>
		<?php endif; ?>
		<?php if ($this->_var['order_info']['coupons'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_coupon']; ?><?php echo $this->_var['order_info']['formated_coupons']; ?></p>
		<?php endif; ?>
		<p class="tl"><?php echo $this->_var['lang']['label_order_total_amount']; ?><?php echo $this->_var['order_info']['formated_total_fee']; ?></p>
		<p class="tl"><?php echo $this->_var['lang']['label_order_total_amount']; ?><?php echo $this->_var['order_info']['formated_total_fee']; ?><?php if ($this->_var['order_info']['surplus'] > 0): ?>&nbsp;&nbsp;<?php echo $this->_var['lang']['label_balance']; ?><?php echo $this->_var['order_info']['formated_surplus']; ?><?php endif; ?><?php if ($this->_var['order_info']['money_paid'] > 0): ?>&nbsp;&nbsp;<?php echo $this->_var['lang']['label_paid_amount']; ?><?php echo $this->_var['order_info']['formated_money_paid']; ?><?php endif; ?><?php if ($this->_var['order_info']['value_card'] > 0): ?>&nbsp;&nbsp;<?php echo $this->_var['lang']['label_stored_value_card']; ?><?php echo $this->_var['order_info']['formated_value_card']; ?><?php endif; ?>&nbsp;&nbsp;<?php echo $this->_var['lang']['label_to_be_paid_amount']; ?><?php echo $this->_var['order_info']['formated_order_amount']; ?></p>
		<div class="image tl mt10"><img src="<?php echo $this->_var['shop_url']; ?>plugins/barcodegen/html/image.php?filetype=PNG&dpi=72&scale=1&rotation=0&font_family=Arial.ttf&font_size=14&text=<?php echo $this->_var['order_sn']; ?>&thickness=40&checksum=&code=BCGcode39" /></div>
        <textarea class="print_textarea mb10" placeholder="<?php echo $this->_var['lang']['please_input_remark']; ?>" rows="3"></textarea>
		<p class="print-remark" title="<?php echo $this->_var['lang']['click_redit']; ?>"></p>
	</div>
</div>
<?php elseif ($this->_var['print_specification'] == '80MM'): ?>
<div class="print-panel mb30" style="width:<?php echo empty($this->_var['print_spec_info']['width']) ? $this->_var['print_size_info']['width'] : $this->_var['print_spec_info']['width']; ?>mm; padding:1mm;">
	<div class="top">
		<div class="logo" style="margin:0 auto; float:none;"><img src="<?php echo $this->_var['order_print_logo']; ?>"></div>
		<div class="title"><h3><?php if ($this->_var['order_type'] == 'order'): ?><?php echo $this->_var['lang']['goods_shopping_list']; ?><?php else: ?><?php echo $this->_var['lang']['wholesale_shopping_list']; ?><?php endif; ?></h3></div>
		<img src="<?php echo $this->_var['web_url']; ?>images/print/seal-state-express.png" class="seal">
	</div>
	<div class="buyer-info">
		<div class="row">
			<div class="lie"><?php echo $this->_var['lang']['label_order_id']; ?><?php echo $this->_var['order_info']['order_sn']; ?></div>
			<div class="lie"><?php echo $this->_var['lang']['label_order_time']; ?><?php echo $this->_var['order_info']['formated_add_time']; ?></div>
		</div>
		<div class="row">
			<div class="lie"><?php echo $this->_var['lang']['label_consignee']; ?><?php echo $this->_var['order_info']['consignee']; ?></div>
			<div class="lie"><?php echo $this->_var['lang']['label_telephone']; ?><?php echo $this->_var['order_info']['mobile']; ?></div>
		</div>
		<div class="row">
			<div class="lie"><?php echo $this->_var['lang']['label_delivery_time']; ?><?php echo $this->_var['order_info']['best_time']; ?></div>
			<div class="lie"><?php echo $this->_var['lang']['label_payment_method']; ?><?php echo $this->_var['order_info']['pay_name']; ?></div>
		</div>
		<div class="row">
			<div class="lie_colspan"><?php echo $this->_var['lang']['label_receiving_address']; ?><?php echo $this->_var['order_info']['complete_address']; ?></div>
		</div>
	</div>
	<div class="buyer-goods-info">
		<table class="table">
			<thead>
				<tr>
					<th width="30%"><?php echo $this->_var['lang']['goods_name']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['amount']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['unit_price']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['subtotal']; ?></th>
				</tr>
			</thead>
			<tbody>
				<?php $_from = $this->_var['order_info']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
				<tr>
					<td class="p-name"><?php echo $this->_var['goods']['goods_name']; ?><?php if ($this->_var['goods']['bar_code']): ?><div class="blue"><?php echo $this->_var['lang']['label_goods_bar_code']; ?><?php echo $this->_var['goods']['bar_code']; ?></div><?php endif; ?></td>
					<td><?php echo $this->_var['goods']['goods_number']; ?></td>
					<td><?php echo $this->_var['goods']['format_goods_price']; ?></td>
					<td><?php echo $this->_var['goods']['format_goods_amount']; ?></td>
				</tr>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</tbody>
		</table>
	</div>
	<div class="address-info">
		<p class="tl">
			<em class="fl"><?php echo $this->_var['lang']['label_goods_total_amount']; ?><?php echo $this->_var['order_info']['formated_goods_amount']; ?></em>
			<em class="fr"><?php echo $this->_var['lang']['label_total_number']; ?><?php echo $this->_var['order_info']['number_amount']; ?><?php echo $this->_var['lang']['jian']; ?></em>
		</p>
		<?php if ($this->_var['order_info']['shipping_fee'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_freight']; ?><?php echo $this->_var['order_info']['formated_shipping_fee']; ?></p>
		<?php endif; ?>
		<?php if ($this->_var['order_info']['insure_fee'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_premium']; ?><?php echo $this->_var['order_info']['formated_insure_fee']; ?></p>
		<?php endif; ?>
		<?php if ($this->_var['order_info']['tax'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_invoice_tax_amount']; ?><?php echo $this->_var['order_info']['formated_tax']; ?></p>
		<?php endif; ?>
		<?php if ($this->_var['order_info']['pay_fee'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_pay_charges']; ?><?php echo $this->_var['order_info']['formated_pay_fee']; ?></p>
		<?php endif; ?>
		<?php if ($this->_var['order_info']['discount'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_discount']; ?><?php echo $this->_var['order_info']['formated_discount']; ?></p>
		<?php endif; ?>
		<?php if ($this->_var['order_info']['integral_money'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_integral']; ?><?php echo $this->_var['order_info']['formated_integral_money']; ?></p>
		<?php endif; ?>
		<?php if ($this->_var['order_info']['bonus'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_store_red_bag']; ?><?php echo $this->_var['order_info']['formated_bonus']; ?></p>
		<?php endif; ?>
		<?php if ($this->_var['order_info']['coupons'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_coupon']; ?><?php echo $this->_var['order_info']['formated_coupons']; ?></p>
		<?php endif; ?>
		<p class="tl"><?php echo $this->_var['lang']['label_order_total_amount']; ?><?php echo $this->_var['order_info']['formated_total_fee']; ?></p>
		<p class="tl"><?php echo $this->_var['lang']['label_order_total_amount']; ?><?php echo $this->_var['order_info']['formated_total_fee']; ?><?php if ($this->_var['order_info']['surplus'] > 0): ?>  <?php echo $this->_var['lang']['label_balance']; ?><?php echo $this->_var['order_info']['formated_surplus']; ?><?php endif; ?><?php if ($this->_var['order_info']['money_paid'] > 0): ?>  <?php echo $this->_var['lang']['label_paid_amount']; ?><?php echo $this->_var['order_info']['formated_money_paid']; ?><?php endif; ?><?php if ($this->_var['order_info']['value_card'] > 0): ?>  <?php echo $this->_var['lang']['label_stored_value_card']; ?><?php echo $this->_var['order_info']['formated_value_card']; ?><?php endif; ?>  <?php echo $this->_var['lang']['label_to_be_paid_amount']; ?><?php echo $this->_var['order_info']['formated_order_amount']; ?></p>
        <div class="image tl mt10"><img src="<?php echo $this->_var['shop_url']; ?>plugins/barcodegen/html/image.php?filetype=PNG&dpi=72&scale=1&rotation=0&font_family=Arial.ttf&font_size=14&text=<?php echo $this->_var['order_sn']; ?>&thickness=40&checksum=&code=BCGcode39" /></div>
		<textarea class="print_textarea mb10" placeholder="<?php echo $this->_var['lang']['please_input_remark']; ?>" rows="3"></textarea>
		<p class="print-remark" title="<?php echo $this->_var['lang']['click_redit']; ?>"></p>
	</div>
</div>
<?php elseif ($this->_var['print_specification'] == '70MM'): ?>
<div class="print-panel mb30" style="width:<?php echo empty($this->_var['print_spec_info']['width']) ? $this->_var['print_size_info']['width'] : $this->_var['print_spec_info']['width']; ?>mm; padding:1mm;">
	<div class="top">
		<div class="logo" style="margin:0 auto; float:none;"><img src="<?php echo $this->_var['order_print_logo']; ?>"></div>
		<div class="title"><h3><?php if ($this->_var['order_type'] == 'order'): ?><?php echo $this->_var['lang']['goods_shopping_list']; ?><?php else: ?><?php echo $this->_var['lang']['wholesale_shopping_list']; ?><?php endif; ?></h3></div>
		<img src="<?php echo $this->_var['web_url']; ?>images/print/seal-state-express.png" class="seal" style="top:50px;">
	</div>
	<div class="buyer-info">
		<div class="row">
			<div class="lie"><?php echo $this->_var['lang']['label_order_id']; ?><?php echo $this->_var['order_info']['order_sn']; ?></div>
			<div class="lie"><?php echo $this->_var['lang']['label_order_time']; ?><?php echo $this->_var['order_info']['formated_add_time']; ?></div>
		</div>
		<div class="row">
			<div class="lie"><?php echo $this->_var['lang']['label_consignee']; ?><?php echo $this->_var['order_info']['consignee']; ?></div>
			<div class="lie"><?php echo $this->_var['lang']['label_telephone']; ?><?php echo $this->_var['order_info']['mobile']; ?></div>
		</div>
		<div class="row">
			<div class="lie"><?php echo $this->_var['lang']['label_delivery_time']; ?><?php echo $this->_var['order_info']['best_time']; ?></div>
			<div class="lie"><?php echo $this->_var['lang']['label_payment_method']; ?><?php echo $this->_var['order_info']['pay_name']; ?></div>
		</div>
		<div class="row">
			<div class="lie_colspan"><?php echo $this->_var['lang']['label_receiving_address']; ?><?php echo $this->_var['order_info']['complete_address']; ?></div>
		</div>
	</div>
	<div class="buyer-goods-info">
		<table class="table">
			<thead>
				<tr>
					<th width="30%"><?php echo $this->_var['lang']['goods_name']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['amount']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['unit_price']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['subtotal']; ?></th>
				</tr>
			</thead>
			<tbody>
				<?php $_from = $this->_var['order_info']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
				<tr>
					<td class="p-name"><?php echo $this->_var['goods']['goods_name']; ?><?php if ($this->_var['goods']['bar_code']): ?><div class="blue"><?php echo $this->_var['lang']['label_goods_bar_code']; ?><?php echo $this->_var['goods']['bar_code']; ?></div><?php endif; ?></td>
					<td><?php echo $this->_var['goods']['goods_number']; ?></td>
					<td><?php echo $this->_var['goods']['format_goods_price']; ?></td>
					<td><?php echo $this->_var['goods']['format_goods_amount']; ?></td>
				</tr>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</tbody>
		</table>
	</div>
	<div class="address-info">
		<p class="tl">
			<em class="fl"><?php echo $this->_var['lang']['label_goods_total_amount']; ?><?php echo $this->_var['order_info']['formated_goods_amount']; ?></em>
			<em class="fr"><?php echo $this->_var['lang']['label_total_number']; ?><?php echo $this->_var['order_info']['number_amount']; ?><?php echo $this->_var['lang']['jian']; ?></em>
		</p>
		<?php if ($this->_var['order_info']['shipping_fee'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_freight']; ?><?php echo $this->_var['order_info']['formated_shipping_fee']; ?></p>
		<?php endif; ?>
		<?php if ($this->_var['order_info']['insure_fee'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_premium']; ?><?php echo $this->_var['order_info']['formated_insure_fee']; ?></p>
		<?php endif; ?>
		<?php if ($this->_var['order_info']['tax'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_invoice_tax_amount']; ?><?php echo $this->_var['order_info']['formated_tax']; ?></p>
		<?php endif; ?>
		<?php if ($this->_var['order_info']['pay_fee'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_pay_charges']; ?><?php echo $this->_var['order_info']['formated_pay_fee']; ?></p>
		<?php endif; ?>
		<?php if ($this->_var['order_info']['discount'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_discount']; ?><?php echo $this->_var['order_info']['formated_discount']; ?></p>
		<?php endif; ?>
		<?php if ($this->_var['order_info']['integral_money'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_integral']; ?><?php echo $this->_var['order_info']['formated_integral_money']; ?></p>
		<?php endif; ?>
		<?php if ($this->_var['order_info']['bonus'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_store_red_bag']; ?><?php echo $this->_var['order_info']['formated_bonus']; ?></p>
		<?php endif; ?>
		<?php if ($this->_var['order_info']['coupons'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_coupon']; ?><?php echo $this->_var['order_info']['formated_coupons']; ?></p>
		<?php endif; ?>
		<p class="tl"><?php echo $this->_var['lang']['label_order_total_amount']; ?><?php echo $this->_var['order_info']['formated_total_fee']; ?></p>
		<p class="tl"><?php echo $this->_var['lang']['label_order_total_amount']; ?><?php echo $this->_var['order_info']['formated_total_fee']; ?><?php if ($this->_var['order_info']['surplus'] > 0): ?>  <?php echo $this->_var['lang']['label_balance']; ?><?php echo $this->_var['order_info']['formated_surplus']; ?><?php endif; ?><?php if ($this->_var['order_info']['money_paid'] > 0): ?>  <?php echo $this->_var['lang']['label_paid_amount']; ?><?php echo $this->_var['order_info']['formated_money_paid']; ?><?php endif; ?><?php if ($this->_var['order_info']['value_card'] > 0): ?>  <?php echo $this->_var['lang']['label_stored_value_card']; ?><?php echo $this->_var['order_info']['formated_value_card']; ?><?php endif; ?>  <?php echo $this->_var['lang']['label_to_be_paid_amount']; ?><?php echo $this->_var['order_info']['formated_order_amount']; ?></p>
		<div class="image tl mt10"><img src="<?php echo $this->_var['shop_url']; ?>plugins/barcodegen/html/image.php?filetype=PNG&dpi=72&scale=1&rotation=0&font_family=Arial.ttf&font_size=14&text=<?php echo $this->_var['order_sn']; ?>&thickness=40&checksum=&code=BCGcode39" /></div>
        <textarea class="print_textarea mb10" placeholder="<?php echo $this->_var['lang']['please_input_remark']; ?>" rows="3"></textarea>
		<p class="print-remark" title="<?php echo $this->_var['lang']['click_redit']; ?>"></p>
	</div>
</div>
<?php elseif ($this->_var['print_specification'] == '60MM'): ?>
<div class="print-panel mb30" style="width:<?php echo empty($this->_var['print_spec_info']['width']) ? $this->_var['print_size_info']['width'] : $this->_var['print_spec_info']['width']; ?>mm; padding:1mm;">
	<div class="top">
		<div class="logo" style="margin:0 auto; float:none;"><img src="<?php echo $this->_var['order_print_logo']; ?>"></div>
		<div class="title"><h3><?php if ($this->_var['order_type'] == 'order'): ?><?php echo $this->_var['lang']['goods_shopping_list']; ?><?php else: ?><?php echo $this->_var['lang']['wholesale_shopping_list']; ?><?php endif; ?></h3></div>
		<img src="<?php echo $this->_var['web_url']; ?>images/print/seal-state-express.png" class="seal" style="top:50px;">
	</div>
	<div class="buyer-info">
		<div class="row">
			<div class="lie"><?php echo $this->_var['lang']['label_order_id']; ?><?php echo $this->_var['order_info']['order_sn']; ?></div>
			<div class="lie"><?php echo $this->_var['lang']['label_order_time']; ?><?php echo $this->_var['order_info']['formated_add_time']; ?></div>
		</div>
		<div class="row">
			<div class="lie"><?php echo $this->_var['lang']['label_consignee']; ?><?php echo $this->_var['order_info']['consignee']; ?></div>
			<div class="lie"><?php echo $this->_var['lang']['label_telephone']; ?><?php echo $this->_var['order_info']['mobile']; ?></div>
		</div>
		<div class="row">
			<div class="lie"><?php echo $this->_var['lang']['label_delivery_time']; ?><?php echo $this->_var['order_info']['best_time']; ?></div>
			<div class="lie"><?php echo $this->_var['lang']['label_payment_method']; ?><?php echo $this->_var['order_info']['pay_name']; ?></div>
		</div>
		<div class="row">
			<div class="lie_colspan"><?php echo $this->_var['lang']['label_receiving_address']; ?><?php echo $this->_var['order_info']['complete_address']; ?></div>
		</div>
	</div>
	<div class="buyer-goods-info">
		<table class="table">
			<thead>
				<tr>
					<th width="30%"><?php echo $this->_var['lang']['goods_name']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['amount']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['subtotal']; ?></th>
				</tr>
			</thead>
			<tbody>
				<?php $_from = $this->_var['order_info']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
				<tr>
					<td class="p-name"><?php echo $this->_var['goods']['goods_name']; ?><?php if ($this->_var['goods']['bar_code']): ?><div class="blue"><?php echo $this->_var['lang']['label_goods_bar_code']; ?><?php echo $this->_var['goods']['bar_code']; ?></div><?php endif; ?></td>
					<td><?php echo $this->_var['goods']['goods_number']; ?></td>
					<td><?php echo $this->_var['goods']['format_goods_amount']; ?></td>
				</tr>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</tbody>
		</table>
	</div>
	<div class="address-info">
		<p class="tl">
			<em class="fl"><?php echo $this->_var['lang']['label_goods_total_amount']; ?><?php echo $this->_var['order_info']['formated_goods_amount']; ?></em>
			<em class="fr"><?php echo $this->_var['lang']['label_total_number']; ?><?php echo $this->_var['order_info']['number_amount']; ?><?php echo $this->_var['lang']['jian']; ?></em>
		</p>
        
		<?php if ($this->_var['order_info']['shipping_fee'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_freight']; ?><?php echo $this->_var['order_info']['formated_shipping_fee']; ?></p>
		<?php endif; ?>
		<?php if ($this->_var['order_info']['insure_fee'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_premium']; ?><?php echo $this->_var['order_info']['formated_insure_fee']; ?></p>
		<?php endif; ?>
		<?php if ($this->_var['order_info']['tax'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_invoice_tax_amount']; ?><?php echo $this->_var['order_info']['formated_tax']; ?></p>
		<?php endif; ?>
		<?php if ($this->_var['order_info']['pay_fee'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_pay_charges']; ?><?php echo $this->_var['order_info']['formated_pay_fee']; ?></p>
		<?php endif; ?>
		<?php if ($this->_var['order_info']['surplus'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_balance']; ?><?php echo $this->_var['order_info']['formated_surplus']; ?></p>
		<?php endif; ?>
		<?php if ($this->_var['order_info']['money_paid'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_paid_amount']; ?><?php echo $this->_var['order_info']['formated_money_paid']; ?></p>
		<?php endif; ?>
		<?php if ($this->_var['order_info']['value_card'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_stored_value_card']; ?><?php echo $this->_var['order_info']['formated_value_card']; ?></p>
		<?php endif; ?>
		<?php if ($this->_var['order_info']['discount'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_discount']; ?><?php echo $this->_var['order_info']['formated_discount']; ?></p>
		<?php endif; ?>
		<?php if ($this->_var['order_info']['integral_money'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_integral']; ?><?php echo $this->_var['order_info']['formated_integral_money']; ?></p>
		<?php endif; ?>
		<?php if ($this->_var['order_info']['bonus'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_store_red_bag']; ?><?php echo $this->_var['order_info']['formated_bonus']; ?></p>
		<?php endif; ?>
		<?php if ($this->_var['order_info']['coupons'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_coupon']; ?><?php echo $this->_var['order_info']['formated_coupons']; ?></p>
		<?php endif; ?>
		<p class="tl"><?php echo $this->_var['lang']['label_order_total_amount']; ?><?php echo $this->_var['order_info']['formated_total_fee']; ?></p>
		<div class="image tl mt10"><img src="<?php echo $this->_var['shop_url']; ?>plugins/barcodegen/html/image.php?filetype=PNG&dpi=72&scale=1&rotation=0&font_family=Arial.ttf&font_size=14&text=<?php echo $this->_var['order_sn']; ?>&thickness=40&checksum=&code=BCGcode39" /></div>
        <textarea class="print_textarea mb10" placeholder="<?php echo $this->_var['lang']['please_input_remark']; ?>" rows="3"></textarea>
		<p class="print-remark" title="<?php echo $this->_var['lang']['click_redit']; ?>"></p>
	</div>
</div>
<?php elseif ($this->_var['print_specification'] == '50MM'): ?>
<div class="print-panel mb30" style="width:<?php echo empty($this->_var['print_spec_info']['width']) ? $this->_var['print_size_info']['width'] : $this->_var['print_spec_info']['width']; ?>mm; padding:1mm;">
	<div class="top">
		<div class="logo"><img src="<?php echo $this->_var['order_print_logo']; ?>"></div>
		<div class="title" style="text-align:left;"><h3><?php if ($this->_var['order_type'] == 'order'): ?><?php echo $this->_var['lang']['goods_shopping_list']; ?><?php else: ?><?php echo $this->_var['lang']['wholesale_shopping_list']; ?><?php endif; ?></h3></div>
		<img src="<?php echo $this->_var['web_url']; ?>images/print/seal-state-express.png" class="seal" style="top:50px;">
	</div>
	<div class="buyer-info">
		<div class="row">
			<div class="lie"><?php echo $this->_var['lang']['label_order_id']; ?><?php echo $this->_var['order_info']['order_sn']; ?></div>
			<div class="lie"><?php echo $this->_var['lang']['label_order_time']; ?><?php echo $this->_var['order_info']['formated_add_time']; ?></div>
		</div>
		<div class="row">
			<div class="lie"><?php echo $this->_var['lang']['label_consignee']; ?><?php echo $this->_var['order_info']['consignee']; ?></div>
			<div class="lie"><?php echo $this->_var['lang']['label_telephone']; ?><?php echo $this->_var['order_info']['mobile']; ?></div>
		</div>
		<div class="row">
			<div class="lie"><?php echo $this->_var['lang']['label_delivery_time']; ?><?php echo $this->_var['order_info']['best_time']; ?></div>
			<div class="lie"><?php echo $this->_var['lang']['label_payment_method']; ?><?php echo $this->_var['order_info']['pay_name']; ?></div>
		</div>
		<div class="row">
			<div class="lie_colspan"><?php echo $this->_var['lang']['label_receiving_address']; ?><?php echo $this->_var['order_info']['complete_address']; ?></div>
		</div>
	</div>
	<div class="buyer-goods-info">
		<table class="table">
			<thead>
				<tr>
					<th width="30%"><?php echo $this->_var['lang']['goods_name']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['amount']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['subtotal']; ?></th>
				</tr>
			</thead>
			<tbody>
				<?php $_from = $this->_var['order_info']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
				<tr>
					<td class="p-name"><?php echo $this->_var['goods']['goods_name']; ?><?php if ($this->_var['goods']['bar_code']): ?><div class="blue"><?php echo $this->_var['lang']['label_goods_bar_code']; ?><?php echo $this->_var['goods']['bar_code']; ?></div><?php endif; ?></td>
					<td><?php echo $this->_var['goods']['goods_number']; ?></td>
					<td><?php echo $this->_var['goods']['format_goods_amount']; ?></td>
				</tr>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</tbody>
		</table>
	</div>
	<div class="address-info">
		<p class="tl"><?php echo $this->_var['lang']['label_goods_total_amount']; ?><?php echo $this->_var['order_info']['formated_goods_amount']; ?></p>
        <p class="tl"><?php echo $this->_var['lang']['label_total_number']; ?><?php echo $this->_var['order_info']['number_amount']; ?><?php echo $this->_var['lang']['jian']; ?></p>
        
		<?php if ($this->_var['order_info']['shipping_fee'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_freight']; ?><?php echo $this->_var['order_info']['formated_shipping_fee']; ?></p>
		<?php endif; ?>
		<?php if ($this->_var['order_info']['insure_fee'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_premium']; ?><?php echo $this->_var['order_info']['formated_insure_fee']; ?></p>
		<?php endif; ?>
		<?php if ($this->_var['order_info']['tax'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_invoice_tax_amount']; ?><?php echo $this->_var['order_info']['formated_tax']; ?></p>
		<?php endif; ?>
		<?php if ($this->_var['order_info']['pay_fee'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_pay_charges']; ?><?php echo $this->_var['order_info']['formated_pay_fee']; ?></p>
		<?php endif; ?>
		<?php if ($this->_var['order_info']['surplus'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_balance']; ?><?php echo $this->_var['order_info']['formated_surplus']; ?></p>
		<?php endif; ?>
		<?php if ($this->_var['order_info']['money_paid'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_paid_amount']; ?><?php echo $this->_var['order_info']['formated_money_paid']; ?></p>
		<?php endif; ?>
		<?php if ($this->_var['order_info']['value_card'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_stored_value_card']; ?><?php echo $this->_var['order_info']['formated_value_card']; ?></p>
		<?php endif; ?>
		<?php if ($this->_var['order_info']['discount'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_discount']; ?><?php echo $this->_var['order_info']['formated_discount']; ?></p>
		<?php endif; ?>
		<?php if ($this->_var['order_info']['integral_money'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_integral']; ?><?php echo $this->_var['order_info']['formated_integral_money']; ?></p>
		<?php endif; ?>
		<?php if ($this->_var['order_info']['bonus'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_store_red_bag']; ?><?php echo $this->_var['order_info']['formated_bonus']; ?></p>
		<?php endif; ?>
		<?php if ($this->_var['order_info']['coupons'] > 0): ?>
		<p class="tl"><?php echo $this->_var['lang']['label_coupon']; ?><?php echo $this->_var['order_info']['formated_coupons']; ?></p>
		<?php endif; ?>
		<p class="tl"><?php echo $this->_var['lang']['label_order_total_amount']; ?><?php echo $this->_var['order_info']['formated_total_fee']; ?></p>
		<div class="image tl mt10"><img src="<?php echo $this->_var['shop_url']; ?>plugins/barcodegen/html/image.php?filetype=PNG&dpi=72&scale=1&rotation=0&font_family=Arial.ttf&font_size=14&text=<?php echo $this->_var['order_sn']; ?>&thickness=40&checksum=&code=BCGcode39" /></div>
        <textarea class="print_textarea mb10" placeholder="<?php echo $this->_var['lang']['please_input_remark']; ?>" rows="3"></textarea>
		<p class="print-remark" title="<?php echo $this->_var['lang']['click_redit']; ?>"></p>
	</div>
</div>
<?php elseif ($this->_var['print_specification'] == '120MM*93MM'): ?>
<div class="print-panel mb0" style="width:<?php echo empty($this->_var['print_spec_info']['width']) ? $this->_var['print_size_info']['width'] : $this->_var['print_spec_info']['width']; ?>mm; padding:1mm;">
	<div class="top">
		<div class="logo"><img src="<?php echo $this->_var['order_print_logo']; ?>"></div>
		<div class="title" style="width:auto; text-align:right; position: relative; z-index:99;"><h3><?php if ($this->_var['order_type'] == 'order'): ?><?php echo $this->_var['lang']['goods_shopping_list']; ?><?php else: ?><?php echo $this->_var['lang']['wholesale_shopping_list']; ?><?php endif; ?></h3></div>
		<img src="<?php echo $this->_var['web_url']; ?>images/print/seal-state-express.png" class="seal">
	</div>
	<div class="buyer-info">
		<div class="row">
			<div class="lie w200">NO.<?php echo $this->_var['order_info']['order_sn']; ?></div>
			<div class="lie w200"><?php echo $this->_var['lang']['label_order_time']; ?><?php echo $this->_var['order_info']['formated_add_time']; ?></div>
		</div>
		<div class="row">
			<div class="lie w200"><?php echo $this->_var['lang']['label_consignee']; ?><?php echo $this->_var['order_info']['consignee']; ?></div>
			<div class="lie w200"><?php echo $this->_var['lang']['label_telephone']; ?><?php echo $this->_var['order_info']['mobile']; ?></div>
		</div>
		<div class="row">
			<div class="lie w200"><?php echo $this->_var['lang']['label_delivery_time']; ?><?php echo $this->_var['order_info']['best_time']; ?></div>
			<div class="lie w200"><?php echo $this->_var['lang']['label_payment_method']; ?><?php echo $this->_var['order_info']['pay_name']; ?></div>
		</div>
		<div class="row">
			<div class="lie_colspan"><?php echo $this->_var['lang']['label_receiving_address']; ?><?php echo $this->_var['order_info']['complete_address']; ?></div>
		</div>
	</div>
	<div class="buyer-goods-info">
		<table class="table">
			<thead>
				<tr>
					<th width="30%"><?php echo $this->_var['lang']['goods_name']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['amount']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['unit_price']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['subtotal']; ?></th>
				</tr>
			</thead>
			<tbody>
				<?php $_from = $this->_var['order_info']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
				<tr>
					<td class="p-name"><?php echo $this->_var['goods']['goods_name']; ?><?php if ($this->_var['goods']['bar_code']): ?><div class="blue"><?php echo $this->_var['lang']['label_goods_bar_code']; ?><?php echo $this->_var['goods']['bar_code']; ?></div><?php endif; ?></td>
					<td><?php echo $this->_var['goods']['goods_number']; ?></td>
					<td><?php echo $this->_var['goods']['format_goods_price']; ?></td>
					<td><?php echo $this->_var['goods']['format_goods_amount']; ?></td>
				</tr>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="7" class="tr"><?php echo $this->_var['lang']['label_total_number']; ?><?php echo $this->_var['order_info']['number_amount']; ?><?php echo $this->_var['lang']['jian']; ?>&nbsp;&nbsp;&nbsp;<?php echo $this->_var['lang']['label_goods_total_amount']; ?><?php echo $this->_var['order_info']['formated_goods_amount']; ?></td>
				</tr>
			</tfoot>
		</table>
	</div>
	<div class="address-info">
		<p>
			<span><?php echo $this->_var['lang']['label_goods_total_amount']; ?><?php echo $this->_var['order_info']['formated_goods_amount']; ?></span>
			<?php if ($this->_var['order_info']['shipping_fee'] > 0): ?>
			<em>+</em>
			<span><?php echo $this->_var['lang']['label_freight']; ?><?php echo $this->_var['order_info']['formated_shipping_fee']; ?></span>	
			<?php endif; ?>
			<?php if ($this->_var['order_info']['insure_fee'] > 0): ?>
			<em>+</em>
			<span><?php echo $this->_var['lang']['label_premium']; ?><?php echo $this->_var['order_info']['formated_insure_fee']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['tax'] > 0): ?>
			<em>+</em>
			<span><?php echo $this->_var['lang']['label_invoice_tax_amount']; ?><?php echo $this->_var['order_info']['formated_tax']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['pay_fee'] > 0): ?>
			<em>+</em>
			<span><?php echo $this->_var['lang']['label_pay_charges']; ?><?php echo $this->_var['order_info']['formated_pay_fee']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['discount'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_discount']; ?><?php echo $this->_var['order_info']['formated_discount']; ?></span>
			<?php endif; ?>			
			<em>=</em>
			<span><?php echo $this->_var['lang']['label_order_total_amount']; ?><?php echo $this->_var['order_info']['formated_total_fee']; ?></span>
		</p>
		<p>
			<span><?php echo $this->_var['lang']['label_order_total_amount']; ?><?php echo $this->_var['order_info']['formated_total_fee']; ?></span>
			<?php if ($this->_var['order_info']['surplus'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_balance']; ?><?php echo $this->_var['order_info']['formated_surplus']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['money_paid'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_paid_amount']; ?><?php echo $this->_var['order_info']['formated_money_paid']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['value_card'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_stored_value_card']; ?><?php echo $this->_var['order_info']['formated_value_card']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['integral_money'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_integral']; ?><?php echo $this->_var['order_info']['formated_integral_money']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['bonus'] > 0): ?>					
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_store_red_bag']; ?><?php echo $this->_var['order_info']['formated_bonus']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['coupons'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_coupon']; ?><?php echo $this->_var['order_info']['formated_coupons']; ?></span>
			<?php endif; ?>
			<em>=</em>
			<span class="red"><?php echo $this->_var['lang']['label_to_be_paid_amount']; ?><?php echo $this->_var['order_info']['formated_order_amount']; ?></span>
		</p>
        <div class="image tr mt10"><img src="<?php echo $this->_var['shop_url']; ?>plugins/barcodegen/html/image.php?filetype=PNG&dpi=72&scale=1&rotation=0&font_family=Arial.ttf&font_size=14&text=<?php echo $this->_var['order_sn']; ?>&thickness=40&checksum=&code=BCGcode39" /></div>
		<textarea class="print_textarea mb10" placeholder="<?php echo $this->_var['lang']['please_input_remark']; ?>" rows="3"></textarea>
		<p class="print-remark" title="<?php echo $this->_var['lang']['click_redit']; ?>"></p>
	</div>
</div>
<?php elseif ($this->_var['print_specification'] == '120MM*140MM'): ?>
<div class="print-panel mb0" style="width:<?php echo empty($this->_var['print_spec_info']['width']) ? $this->_var['print_size_info']['width'] : $this->_var['print_spec_info']['width']; ?>mm; padding:1mm;">
	<div class="top">
		<div class="logo"><img src="<?php echo $this->_var['order_print_logo']; ?>"></div>
		<div class="title" style="width:auto; text-align:right; position: relative; z-index:99;"><h3><?php if ($this->_var['order_type'] == 'order'): ?><?php echo $this->_var['lang']['goods_shopping_list']; ?><?php else: ?><?php echo $this->_var['lang']['wholesale_shopping_list']; ?><?php endif; ?></h3></div>
		<img src="<?php echo $this->_var['web_url']; ?>images/print/seal-state-express.png" class="seal">
	</div>
	<div class="buyer-info">
		<div class="row">
			<div class="lie w200">NO.<?php echo $this->_var['order_info']['order_sn']; ?></div>
			<div class="lie w200"><?php echo $this->_var['lang']['label_order_time']; ?><?php echo $this->_var['order_info']['formated_add_time']; ?></div>
		</div>
		<div class="row">
			<div class="lie w200"><?php echo $this->_var['lang']['label_consignee']; ?><?php echo $this->_var['order_info']['consignee']; ?></div>
			<div class="lie w200"><?php echo $this->_var['lang']['label_telephone']; ?><?php echo $this->_var['order_info']['mobile']; ?></div>
		</div>
		<div class="row">
			<div class="lie w200"><?php echo $this->_var['lang']['label_delivery_time']; ?><?php echo $this->_var['order_info']['best_time']; ?></div>
			<div class="lie w200"><?php echo $this->_var['lang']['label_payment_method']; ?><?php echo $this->_var['order_info']['pay_name']; ?></div>
		</div>
		<div class="row">
			<div class="lie_colspan"><?php echo $this->_var['lang']['label_receiving_address']; ?><?php echo $this->_var['order_info']['complete_address']; ?></div>
		</div>
	</div>
	<div class="buyer-goods-info">
		<table class="table">
			<thead>
				<tr>
					<th width="30%"><?php echo $this->_var['lang']['goods_name']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['amount']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['unit_price']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['subtotal']; ?></th>
				</tr>
			</thead>
			<tbody>
				<?php $_from = $this->_var['order_info']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
				<tr>
					<td class="p-name"><?php echo $this->_var['goods']['goods_name']; ?><?php if ($this->_var['goods']['bar_code']): ?><div class="blue"><?php echo $this->_var['lang']['label_goods_bar_code']; ?><?php echo $this->_var['goods']['bar_code']; ?></div><?php endif; ?></td>
					<td><?php echo $this->_var['goods']['goods_number']; ?></td>
					<td><?php echo $this->_var['goods']['format_goods_price']; ?></td>
					<td><?php echo $this->_var['goods']['format_goods_amount']; ?></td>
				</tr>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="7" class="tr"><?php echo $this->_var['lang']['label_total_number']; ?><?php echo $this->_var['order_info']['number_amount']; ?><?php echo $this->_var['lang']['jian']; ?>&nbsp;&nbsp;&nbsp;<?php echo $this->_var['lang']['label_goods_total_amount']; ?><?php echo $this->_var['order_info']['formated_goods_amount']; ?></td>
				</tr>
			</tfoot>
		</table>
	</div>
	<div class="address-info">
		<p>
			<span><?php echo $this->_var['lang']['label_goods_total_amount']; ?><?php echo $this->_var['order_info']['formated_goods_amount']; ?></span>
			<?php if ($this->_var['order_info']['shipping_fee'] > 0): ?>
			<em>+</em>
			<span><?php echo $this->_var['lang']['label_freight']; ?><?php echo $this->_var['order_info']['formated_shipping_fee']; ?></span>	
			<?php endif; ?>
			<?php if ($this->_var['order_info']['insure_fee'] > 0): ?>
			<em>+</em>
			<span><?php echo $this->_var['lang']['label_premium']; ?><?php echo $this->_var['order_info']['formated_insure_fee']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['tax'] > 0): ?>
			<em>+</em>
			<span><?php echo $this->_var['lang']['label_invoice_tax_amount']; ?><?php echo $this->_var['order_info']['formated_tax']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['pay_fee'] > 0): ?>
			<em>+</em>
			<span><?php echo $this->_var['lang']['label_pay_charges']; ?><?php echo $this->_var['order_info']['formated_pay_fee']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['discount'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_discount']; ?><?php echo $this->_var['order_info']['formated_discount']; ?></span>
			<?php endif; ?>			
			<em>=</em>
			<span><?php echo $this->_var['lang']['label_order_total_amount']; ?><?php echo $this->_var['order_info']['formated_total_fee']; ?></span>
		</p>
		<p>
			<span><?php echo $this->_var['lang']['label_order_total_amount']; ?><?php echo $this->_var['order_info']['formated_total_fee']; ?></span>
			<?php if ($this->_var['order_info']['surplus'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_balance']; ?><?php echo $this->_var['order_info']['formated_surplus']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['money_paid'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_paid_amount']; ?><?php echo $this->_var['order_info']['formated_money_paid']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['value_card'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_stored_value_card']; ?><?php echo $this->_var['order_info']['formated_value_card']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['integral_money'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_integral']; ?><?php echo $this->_var['order_info']['formated_integral_money']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['bonus'] > 0): ?>					
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_store_red_bag']; ?><?php echo $this->_var['order_info']['formated_bonus']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['coupons'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_coupon']; ?><?php echo $this->_var['order_info']['formated_coupons']; ?></span>
			<?php endif; ?>
			<em>=</em>
			<span class="red"><?php echo $this->_var['lang']['label_to_be_paid_amount']; ?><?php echo $this->_var['order_info']['formated_order_amount']; ?></span>
		</p>
        <div class="image tr mt10"><img src="<?php echo $this->_var['shop_url']; ?>plugins/barcodegen/html/image.php?filetype=PNG&dpi=72&scale=1&rotation=0&font_family=Arial.ttf&font_size=14&text=<?php echo $this->_var['order_sn']; ?>&thickness=40&checksum=&code=BCGcode39" /></div>
		<textarea class="print_textarea mb10" placeholder="<?php echo $this->_var['lang']['please_input_remark']; ?>" rows="3"></textarea>
		<p class="print-remark" title="<?php echo $this->_var['lang']['click_redit']; ?>"></p>
	</div>
</div>
<?php elseif ($this->_var['print_specification'] == '120MM*280MM'): ?>
<div class="print-panel mb0" style="width:<?php echo empty($this->_var['print_spec_info']['width']) ? $this->_var['print_size_info']['width'] : $this->_var['print_spec_info']['width']; ?>mm; padding:1mm;">
	<div class="top">
		<div class="logo"><img src="<?php echo $this->_var['order_print_logo']; ?>"></div>
		<div class="title" style="width:auto; text-align:right; position: relative; z-index:99;"><h3><?php if ($this->_var['order_type'] == 'order'): ?><?php echo $this->_var['lang']['goods_shopping_list']; ?><?php else: ?><?php echo $this->_var['lang']['wholesale_shopping_list']; ?><?php endif; ?></h3></div>
		<img src="<?php echo $this->_var['web_url']; ?>images/print/seal-state-express.png" class="seal">
	</div>
	<div class="buyer-info">
		<div class="row">
			<div class="lie w200">NO.<?php echo $this->_var['order_info']['order_sn']; ?></div>
			<div class="lie w200"><?php echo $this->_var['lang']['label_order_time']; ?><?php echo $this->_var['order_info']['formated_add_time']; ?></div>
		</div>
		<div class="row">
			<div class="lie w200"><?php echo $this->_var['lang']['label_consignee']; ?><?php echo $this->_var['order_info']['consignee']; ?></div>
			<div class="lie w200"><?php echo $this->_var['lang']['label_telephone']; ?><?php echo $this->_var['order_info']['mobile']; ?></div>
		</div>
		<div class="row">
			<div class="lie w200"><?php echo $this->_var['lang']['label_delivery_time']; ?><?php echo $this->_var['order_info']['best_time']; ?></div>
			<div class="lie w200"><?php echo $this->_var['lang']['label_payment_method']; ?><?php echo $this->_var['order_info']['pay_name']; ?></div>
		</div>
		<div class="row">
			<div class="lie_colspan"><?php echo $this->_var['lang']['label_receiving_address']; ?><?php echo $this->_var['order_info']['complete_address']; ?></div>
		</div>
	</div>
	<div class="buyer-goods-info">
		<table class="table">
			<thead>
				<tr>
					<th width="30%"><?php echo $this->_var['lang']['goods_name']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['amount']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['unit_price']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['subtotal']; ?></th>
				</tr>
			</thead>
			<tbody>
				<?php $_from = $this->_var['order_info']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
				<tr>
					<td class="p-name"><?php echo $this->_var['goods']['goods_name']; ?><?php if ($this->_var['goods']['bar_code']): ?><div class="blue"><?php echo $this->_var['lang']['label_goods_bar_code']; ?><?php echo $this->_var['goods']['bar_code']; ?></div><?php endif; ?></td>
					<td><?php echo $this->_var['goods']['goods_number']; ?></td>
					<td><?php echo $this->_var['goods']['format_goods_price']; ?></td>
					<td><?php echo $this->_var['goods']['format_goods_amount']; ?></td>
				</tr>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="7" class="tr"><?php echo $this->_var['lang']['label_total_number']; ?><?php echo $this->_var['order_info']['number_amount']; ?><?php echo $this->_var['lang']['jian']; ?>&nbsp;&nbsp;&nbsp;<?php echo $this->_var['lang']['label_goods_total_amount']; ?><?php echo $this->_var['order_info']['formated_goods_amount']; ?></td>
				</tr>
			</tfoot>
		</table>
	</div>
	<div class="address-info">
		<p>
			<span><?php echo $this->_var['lang']['label_goods_total_amount']; ?><?php echo $this->_var['order_info']['formated_goods_amount']; ?></span>
			<?php if ($this->_var['order_info']['shipping_fee'] > 0): ?>
			<em>+</em>
			<span><?php echo $this->_var['lang']['label_freight']; ?><?php echo $this->_var['order_info']['formated_shipping_fee']; ?></span>	
			<?php endif; ?>
			<?php if ($this->_var['order_info']['insure_fee'] > 0): ?>
			<em>+</em>
			<span><?php echo $this->_var['lang']['label_premium']; ?><?php echo $this->_var['order_info']['formated_insure_fee']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['tax'] > 0): ?>
			<em>+</em>
			<span><?php echo $this->_var['lang']['label_invoice_tax_amount']; ?><?php echo $this->_var['order_info']['formated_tax']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['pay_fee'] > 0): ?>
			<em>+</em>
			<span><?php echo $this->_var['lang']['label_pay_charges']; ?><?php echo $this->_var['order_info']['formated_pay_fee']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['discount'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_discount']; ?><?php echo $this->_var['order_info']['formated_discount']; ?></span>
			<?php endif; ?>			
			<em>=</em>
			<span><?php echo $this->_var['lang']['label_order_total_amount']; ?><?php echo $this->_var['order_info']['formated_total_fee']; ?></span>
		</p>
		<p>
			<span><?php echo $this->_var['lang']['label_order_total_amount']; ?><?php echo $this->_var['order_info']['formated_total_fee']; ?></span>
			<?php if ($this->_var['order_info']['surplus'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_balance']; ?><?php echo $this->_var['order_info']['formated_surplus']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['money_paid'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_paid_amount']; ?><?php echo $this->_var['order_info']['formated_money_paid']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['value_card'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_stored_value_card']; ?><?php echo $this->_var['order_info']['formated_value_card']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['integral_money'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_integral']; ?><?php echo $this->_var['order_info']['formated_integral_money']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['bonus'] > 0): ?>					
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_store_red_bag']; ?><?php echo $this->_var['order_info']['formated_bonus']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['coupons'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_coupon']; ?><?php echo $this->_var['order_info']['formated_coupons']; ?></span>
			<?php endif; ?>
			<em>=</em>
			<span class="red"><?php echo $this->_var['lang']['label_to_be_paid_amount']; ?><?php echo $this->_var['order_info']['formated_order_amount']; ?></span>
		</p>
        <div class="image tr mt10"><img src="<?php echo $this->_var['shop_url']; ?>plugins/barcodegen/html/image.php?filetype=PNG&dpi=72&scale=1&rotation=0&font_family=Arial.ttf&font_size=14&text=<?php echo $this->_var['order_sn']; ?>&thickness=40&checksum=&code=BCGcode39" /></div>
		<textarea class="print_textarea mb10" placeholder="<?php echo $this->_var['lang']['please_input_remark']; ?>" rows="3"></textarea>
		<p class="print-remark" title="<?php echo $this->_var['lang']['click_redit']; ?>"></p>
	</div>
</div>
<?php elseif ($this->_var['print_specification'] == '190MM*93MM'): ?>
<div class="print-panel mb0" style="width:<?php echo empty($this->_var['print_spec_info']['width']) ? $this->_var['print_size_info']['width'] : $this->_var['print_spec_info']['width']; ?>mm; padding:1mm;">
	<div class="top">
		<div class="logo"><img src="<?php echo $this->_var['order_print_logo']; ?>"></div>
		<div class="title"><h3><?php if ($this->_var['order_type'] == 'order'): ?><?php echo $this->_var['lang']['goods_shopping_list']; ?><?php else: ?><?php echo $this->_var['lang']['wholesale_shopping_list']; ?><?php endif; ?></h3></div>
		<img src="<?php echo $this->_var['web_url']; ?>images/print/seal-state-express.png" class="seal" style="width:120px; height:120px; right:30px; top:12px;">
	</div>
	<div class="buyer-info">
		<div class="row">
			<div class="lie w300"><?php echo $this->_var['lang']['label_order_id']; ?><?php echo $this->_var['order_info']['order_sn']; ?></div>
			<div class="lie w300"><?php echo $this->_var['lang']['label_order_time']; ?><?php echo $this->_var['order_info']['formated_add_time']; ?></div>
		</div>
		<div class="row">
			<div class="lie w300"><?php echo $this->_var['lang']['label_consignee']; ?><?php echo $this->_var['order_info']['consignee']; ?></div>
			<div class="lie w300"><?php echo $this->_var['lang']['label_telephone']; ?><?php echo $this->_var['order_info']['mobile']; ?></div>
		</div>
		<div class="row">
			<div class="lie w300"><?php echo $this->_var['lang']['label_delivery_time']; ?><?php echo $this->_var['order_info']['best_time']; ?></div>
			<div class="lie w300"><?php echo $this->_var['lang']['label_payment_method']; ?><?php echo $this->_var['order_info']['pay_name']; ?></div>
		</div>
		<div class="row">
			<div class="lie_colspan"><?php echo $this->_var['lang']['label_receiving_address']; ?><?php echo $this->_var['order_info']['complete_address']; ?></div>
		</div>
	</div>
	<div class="buyer-goods-info">
		<table class="table">
			<thead>
				<tr>
					<th width="10%"><?php echo $this->_var['lang']['goods_id']; ?></th>
					<th width="30%"><?php echo $this->_var['lang']['goods_name']; ?></th>
					<th width="20%"><?php echo $this->_var['lang']['goods_specifications']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['amount']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['unit_price']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['subtotal']; ?></th>
				</tr>
			</thead>
			<tbody>
				<?php $_from = $this->_var['order_info']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
				<tr>
					<td><?php echo $this->_var['goods']['goods_id']; ?></td>
					<td class="p-name"><?php echo $this->_var['goods']['goods_name']; ?><?php if ($this->_var['goods']['bar_code']): ?><div class="blue"><?php echo $this->_var['lang']['label_goods_bar_code']; ?><?php echo $this->_var['goods']['bar_code']; ?></div><?php endif; ?></td>
					<td><?php echo $this->_var['goods']['goods_attr']; ?></td>
					<td><?php echo $this->_var['goods']['goods_number']; ?></td>
					<td><?php echo $this->_var['goods']['format_goods_price']; ?></td>
					<td><?php echo $this->_var['goods']['format_goods_amount']; ?></td>
				</tr>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="7" class="tr"><?php echo $this->_var['lang']['label_total_number']; ?><?php echo $this->_var['order_info']['number_amount']; ?><?php echo $this->_var['lang']['jian']; ?>&nbsp;&nbsp;&nbsp;<?php echo $this->_var['lang']['label_goods_total_amount']; ?><?php echo $this->_var['order_info']['formated_goods_amount']; ?></td>
				</tr>
			</tfoot>
		</table>
	</div>
	<div class="address-info">
		<p>
			<span><?php echo $this->_var['lang']['label_goods_total_amount']; ?><?php echo $this->_var['order_info']['formated_goods_amount']; ?></span>
			<?php if ($this->_var['order_info']['shipping_fee'] > 0): ?>
			<em>+</em>
			<span><?php echo $this->_var['lang']['label_freight']; ?><?php echo $this->_var['order_info']['formated_shipping_fee']; ?></span>	
			<?php endif; ?>
			<?php if ($this->_var['order_info']['insure_fee'] > 0): ?>
			<em>+</em>
			<span><?php echo $this->_var['lang']['label_premium']; ?><?php echo $this->_var['order_info']['formated_insure_fee']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['tax'] > 0): ?>
			<em>+</em>
			<span><?php echo $this->_var['lang']['label_invoice_tax_amount']; ?><?php echo $this->_var['order_info']['formated_tax']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['pay_fee'] > 0): ?>
			<em>+</em>
			<span><?php echo $this->_var['lang']['label_pay_charges']; ?><?php echo $this->_var['order_info']['formated_pay_fee']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['discount'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_discount']; ?><?php echo $this->_var['order_info']['formated_discount']; ?></span>
			<?php endif; ?>			
			<em>=</em>
			<span><?php echo $this->_var['lang']['label_order_total_amount']; ?><?php echo $this->_var['order_info']['formated_total_fee']; ?></span>
		</p>
		<p>
			<span><?php echo $this->_var['lang']['label_order_total_amount']; ?><?php echo $this->_var['order_info']['formated_total_fee']; ?></span>
			<?php if ($this->_var['order_info']['surplus'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_balance']; ?><?php echo $this->_var['order_info']['formated_surplus']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['money_paid'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_paid_amount']; ?><?php echo $this->_var['order_info']['formated_money_paid']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['value_card'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_stored_value_card']; ?><?php echo $this->_var['order_info']['formated_value_card']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['integral_money'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_integral']; ?><?php echo $this->_var['order_info']['formated_integral_money']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['bonus'] > 0): ?>					
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_store_red_bag']; ?><?php echo $this->_var['order_info']['formated_bonus']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['coupons'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_coupon']; ?><?php echo $this->_var['order_info']['formated_coupons']; ?></span>
			<?php endif; ?>
			<em>=</em>
			<span class="red"><?php echo $this->_var['lang']['label_to_be_paid_amount']; ?><?php echo $this->_var['order_info']['formated_order_amount']; ?></span>
		</p>
        <div class="image tr mt10" style="position:absolute; left:6px; bottom:25px;"><img src="<?php echo $this->_var['shop_url']; ?>plugins/barcodegen/html/image.php?filetype=PNG&dpi=72&scale=1&rotation=0&font_family=Arial.ttf&font_size=14&text=<?php echo $this->_var['order_sn']; ?>&thickness=40&checksum=&code=BCGcode39" /></div>
		<textarea class="print_textarea mt20" placeholder="<?php echo $this->_var['lang']['please_input_remark']; ?>" rows="3"></textarea>
		<p class="print-remark" title="<?php echo $this->_var['lang']['click_redit']; ?>"></p>
	</div>
</div>
<?php elseif ($this->_var['print_specification'] == '190MM*140MM'): ?>
<div class="print-panel mb0" style="width:<?php echo empty($this->_var['print_spec_info']['width']) ? $this->_var['print_size_info']['width'] : $this->_var['print_spec_info']['width']; ?>mm; padding:2mm;">
	<div class="top">
		<div class="logo"><img src="<?php echo $this->_var['order_print_logo']; ?>"></div>
		<div class="title"><h3><?php if ($this->_var['order_type'] == 'order'): ?><?php echo $this->_var['lang']['goods_shopping_list']; ?><?php else: ?><?php echo $this->_var['lang']['wholesale_shopping_list']; ?><?php endif; ?></h3></div>
		<img src="<?php echo $this->_var['web_url']; ?>images/print/seal-state-express.png" class="seal" style="width:120px; height:120px; right:30px; top:12px;">
	</div>
	<div class="buyer-info">
		<div class="row">
			<div class="lie w300"><?php echo $this->_var['lang']['label_order_id']; ?><?php echo $this->_var['order_info']['order_sn']; ?></div>
			<div class="lie w300"><?php echo $this->_var['lang']['label_order_time']; ?><?php echo $this->_var['order_info']['formated_add_time']; ?></div>
		</div>
		<div class="row">
			<div class="lie w300"><?php echo $this->_var['lang']['label_consignee']; ?><?php echo $this->_var['order_info']['consignee']; ?></div>
			<div class="lie w300"><?php echo $this->_var['lang']['label_telephone']; ?><?php echo $this->_var['order_info']['mobile']; ?></div>
		</div>
		<div class="row">
			<div class="lie w300"><?php echo $this->_var['lang']['label_delivery_time']; ?><?php echo $this->_var['order_info']['best_time']; ?></div>
			<div class="lie w300"><?php echo $this->_var['lang']['label_payment_method']; ?><?php echo $this->_var['order_info']['pay_name']; ?></div>
		</div>
		<div class="row">
			<div class="lie_colspan"><?php echo $this->_var['lang']['label_receiving_address']; ?><?php echo $this->_var['order_info']['complete_address']; ?></div>
		</div>
	</div>
	<div class="buyer-goods-info">
		<table class="table">
			<thead>
				<tr>
					<th width="10%"><?php echo $this->_var['lang']['goods_id']; ?></th>
					<th width="30%"><?php echo $this->_var['lang']['goods_name']; ?></th>
					<th width="20%"><?php echo $this->_var['lang']['goods_specifications']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['amount']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['unit_price']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['subtotal']; ?></th>
				</tr>
			</thead>
			<tbody>
				<?php $_from = $this->_var['order_info']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
				<tr>
					<td><?php echo $this->_var['goods']['goods_id']; ?></td>
					<td class="p-name"><?php echo $this->_var['goods']['goods_name']; ?><?php if ($this->_var['goods']['bar_code']): ?><div class="blue"><?php echo $this->_var['lang']['label_goods_bar_code']; ?><?php echo $this->_var['goods']['bar_code']; ?></div><?php endif; ?></td>
					<td><?php echo $this->_var['goods']['goods_attr']; ?></td>
					<td><?php echo $this->_var['goods']['goods_number']; ?></td>
					<td><?php echo $this->_var['goods']['format_goods_price']; ?></td>
					<td><?php echo $this->_var['goods']['format_goods_amount']; ?></td>
				</tr>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="7" class="tr"><?php echo $this->_var['lang']['label_total_number']; ?><?php echo $this->_var['order_info']['number_amount']; ?><?php echo $this->_var['lang']['jian']; ?>&nbsp;&nbsp;&nbsp;<?php echo $this->_var['lang']['label_goods_total_amount']; ?><?php echo $this->_var['order_info']['formated_goods_amount']; ?></td>
				</tr>
			</tfoot>
		</table>
	</div>
	<div class="address-info">
		<p>
			<span><?php echo $this->_var['lang']['label_goods_total_amount']; ?><?php echo $this->_var['order_info']['formated_goods_amount']; ?></span>
			<?php if ($this->_var['order_info']['shipping_fee'] > 0): ?>
			<em>+</em>
			<span><?php echo $this->_var['lang']['label_freight']; ?><?php echo $this->_var['order_info']['formated_shipping_fee']; ?></span>	
			<?php endif; ?>
			<?php if ($this->_var['order_info']['insure_fee'] > 0): ?>
			<em>+</em>
			<span><?php echo $this->_var['lang']['label_premium']; ?><?php echo $this->_var['order_info']['formated_insure_fee']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['tax'] > 0): ?>
			<em>+</em>
			<span><?php echo $this->_var['lang']['label_invoice_tax_amount']; ?><?php echo $this->_var['order_info']['formated_tax']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['pay_fee'] > 0): ?>
			<em>+</em>
			<span><?php echo $this->_var['lang']['label_pay_charges']; ?><?php echo $this->_var['order_info']['formated_pay_fee']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['discount'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_discount']; ?><?php echo $this->_var['order_info']['formated_discount']; ?></span>
			<?php endif; ?>			
			<em>=</em>
			<span><?php echo $this->_var['lang']['label_order_total_amount']; ?><?php echo $this->_var['order_info']['formated_total_fee']; ?></span>
		</p>
		<p>
			<span><?php echo $this->_var['lang']['label_order_total_amount']; ?><?php echo $this->_var['order_info']['formated_total_fee']; ?></span>
			<?php if ($this->_var['order_info']['surplus'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_balance']; ?><?php echo $this->_var['order_info']['formated_surplus']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['money_paid'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_paid_amount']; ?><?php echo $this->_var['order_info']['formated_money_paid']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['value_card'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_stored_value_card']; ?><?php echo $this->_var['order_info']['formated_value_card']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['integral_money'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_integral']; ?><?php echo $this->_var['order_info']['formated_integral_money']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['bonus'] > 0): ?>					
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_store_red_bag']; ?><?php echo $this->_var['order_info']['formated_bonus']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['coupons'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_coupon']; ?><?php echo $this->_var['order_info']['formated_coupons']; ?></span>
			<?php endif; ?>
			<em>=</em>
			<span class="red"><?php echo $this->_var['lang']['label_to_be_paid_amount']; ?><?php echo $this->_var['order_info']['formated_order_amount']; ?></span>
		</p>
        <div class="image tr mt10"><img src="<?php echo $this->_var['shop_url']; ?>plugins/barcodegen/html/image.php?filetype=PNG&dpi=72&scale=1&rotation=0&font_family=Arial.ttf&font_size=14&text=<?php echo $this->_var['order_sn']; ?>&thickness=40&checksum=&code=BCGcode39" /></div>
		<textarea class="print_textarea mt20" placeholder="<?php echo $this->_var['lang']['please_input_remark']; ?>" rows="3"></textarea>
		<p class="print-remark" title="<?php echo $this->_var['lang']['click_redit']; ?>"></p>
	</div>
</div>
<?php elseif ($this->_var['print_specification'] == '190MM*280MM'): ?>
<div class="print-panel" style="width:<?php echo empty($this->_var['print_spec_info']['width']) ? $this->_var['print_size_info']['width'] : $this->_var['print_spec_info']['width']; ?>mm; padding:2mm;">
	<div class="top">
		<div class="logo"><img src="<?php echo $this->_var['order_print_logo']; ?>"></div>
		<div class="title"><h3><?php if ($this->_var['order_type'] == 'order'): ?><?php echo $this->_var['lang']['goods_shopping_list']; ?><?php else: ?><?php echo $this->_var['lang']['wholesale_shopping_list']; ?><?php endif; ?></h3></div>
		<img src="<?php echo $this->_var['web_url']; ?>images/print/seal-state-express.png" class="seal">
	</div>
	<div class="buyer-info">
		<div class="row">
			<div class="lie w300"><?php echo $this->_var['lang']['label_order_id']; ?><?php echo $this->_var['order_info']['order_sn']; ?></div>
			<div class="lie w300"><?php echo $this->_var['lang']['label_order_time']; ?><?php echo $this->_var['order_info']['formated_add_time']; ?></div>
		</div>
		<div class="row">
			<div class="lie w300"><?php echo $this->_var['lang']['label_consignee']; ?><?php echo $this->_var['order_info']['consignee']; ?></div>
			<div class="lie w300"><?php echo $this->_var['lang']['label_telephone']; ?><?php echo $this->_var['order_info']['mobile']; ?></div>
		</div>
		<div class="row">
			<div class="lie w300"><?php echo $this->_var['lang']['label_delivery_time']; ?><?php echo $this->_var['order_info']['best_time']; ?></div>
			<div class="lie w300"><?php echo $this->_var['lang']['label_payment_method']; ?><?php echo $this->_var['order_info']['pay_name']; ?></div>
		</div>
		<div class="row">
			<div class="lie_colspan"><?php echo $this->_var['lang']['label_receiving_address']; ?><?php echo $this->_var['order_info']['complete_address']; ?></div>
		</div>
	</div>
	<div class="buyer-goods-info">
		<table class="table">
			<thead>
				<tr>
					<th width="10%"><?php echo $this->_var['lang']['goods_id']; ?></th>
					<th width="30%"><?php echo $this->_var['lang']['goods_name']; ?></th>
					<th width="20%"><?php echo $this->_var['lang']['goods_specifications']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['amount']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['unit_price']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['subtotal']; ?></th>
				</tr>
			</thead>
			<tbody>
				<?php $_from = $this->_var['order_info']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
				<tr>
					<td><?php echo $this->_var['goods']['goods_id']; ?></td>
					<td class="p-name"><?php echo $this->_var['goods']['goods_name']; ?><?php if ($this->_var['goods']['bar_code']): ?><div class="blue"><?php echo $this->_var['lang']['label_goods_bar_code']; ?><?php echo $this->_var['goods']['bar_code']; ?></div><?php endif; ?></td>
					<td><?php echo $this->_var['goods']['goods_attr']; ?></td>
					<td><?php echo $this->_var['goods']['goods_number']; ?></td>
					<td><?php echo $this->_var['goods']['format_goods_price']; ?></td>
					<td><?php echo $this->_var['goods']['format_goods_amount']; ?></td>
				</tr>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="7" class="tr"><?php echo $this->_var['lang']['label_total_number']; ?><?php echo $this->_var['order_info']['number_amount']; ?><?php echo $this->_var['lang']['jian']; ?>&nbsp;&nbsp;&nbsp;<?php echo $this->_var['lang']['label_goods_total_amount']; ?><?php echo $this->_var['order_info']['formated_goods_amount']; ?></td>
				</tr>
			</tfoot>
		</table>
	</div>
	<div class="address-info">
		<p>
			<span><?php echo $this->_var['lang']['label_goods_total_amount']; ?><?php echo $this->_var['order_info']['formated_goods_amount']; ?></span>
			<?php if ($this->_var['order_info']['shipping_fee'] > 0): ?>
			<em>+</em>
			<span><?php echo $this->_var['lang']['label_freight']; ?><?php echo $this->_var['order_info']['formated_shipping_fee']; ?></span>	
			<?php endif; ?>
			<?php if ($this->_var['order_info']['insure_fee'] > 0): ?>
			<em>+</em>
			<span><?php echo $this->_var['lang']['label_premium']; ?><?php echo $this->_var['order_info']['formated_insure_fee']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['tax'] > 0): ?>
			<em>+</em>
			<span><?php echo $this->_var['lang']['label_invoice_tax_amount']; ?><?php echo $this->_var['order_info']['formated_tax']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['pay_fee'] > 0): ?>
			<em>+</em>
			<span><?php echo $this->_var['lang']['label_pay_charges']; ?><?php echo $this->_var['order_info']['formated_pay_fee']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['discount'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_discount']; ?><?php echo $this->_var['order_info']['formated_discount']; ?></span>
			<?php endif; ?>			
			<em>=</em>
			<span><?php echo $this->_var['lang']['label_order_total_amount']; ?><?php echo $this->_var['order_info']['formated_total_fee']; ?></span>
		</p>
		<p>
			<span><?php echo $this->_var['lang']['label_order_total_amount']; ?><?php echo $this->_var['order_info']['formated_total_fee']; ?></span>
			<?php if ($this->_var['order_info']['surplus'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_balance']; ?><?php echo $this->_var['order_info']['formated_surplus']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['money_paid'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_paid_amount']; ?><?php echo $this->_var['order_info']['formated_money_paid']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['value_card'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_stored_value_card']; ?><?php echo $this->_var['order_info']['formated_value_card']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['integral_money'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_integral']; ?><?php echo $this->_var['order_info']['formated_integral_money']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['bonus'] > 0): ?>					
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_store_red_bag']; ?><?php echo $this->_var['order_info']['formated_bonus']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['coupons'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_coupon']; ?><?php echo $this->_var['order_info']['formated_coupons']; ?></span>
			<?php endif; ?>
			<em>=</em>
			<span class="red"><?php echo $this->_var['lang']['label_to_be_paid_amount']; ?><?php echo $this->_var['order_info']['formated_order_amount']; ?></span>
		</p>
        <div class="image tr mt10"><img src="<?php echo $this->_var['shop_url']; ?>plugins/barcodegen/html/image.php?filetype=PNG&dpi=72&scale=1&rotation=0&font_family=Arial.ttf&font_size=14&text=<?php echo $this->_var['order_sn']; ?>&thickness=40&checksum=&code=BCGcode39" /></div>
		<textarea class="print_textarea mt20" placeholder="<?php echo $this->_var['lang']['please_input_remark']; ?>" rows="3"></textarea>
		<p class="print-remark" title="<?php echo $this->_var['lang']['click_redit']; ?>"></p>
	</div>
</div>
<?php elseif ($this->_var['print_specification'] == '241MM*93MM'): ?>
<div class="print-panel mb0" style="padding:5mm 5mm 3mm 5mm; width:<?php echo empty($this->_var['print_spec_info']['width']) ? $this->_var['print_size_info']['width'] : $this->_var['print_spec_info']['width']; ?>mm;">
	<div class="top">
		<div class="logo"><img src="<?php echo $this->_var['order_print_logo']; ?>"></div>
		<div class="title"><h3><?php if ($this->_var['order_type'] == 'order'): ?><?php echo $this->_var['lang']['goods_shopping_list']; ?><?php else: ?><?php echo $this->_var['lang']['wholesale_shopping_list']; ?><?php endif; ?></h3></div>
		<img src="<?php echo $this->_var['web_url']; ?>images/print/seal-state-express.png" class="seal" style="width:120px; height:120px; right:30px; top:12px;">
	</div>
	<div class="buyer-info">
		<div class="row">
			<div class="lie w400"><?php echo $this->_var['lang']['label_order_id']; ?><?php echo $this->_var['order_info']['order_sn']; ?></div>
			<div class="lie w300"><?php echo $this->_var['lang']['label_order_time']; ?><?php echo $this->_var['order_info']['formated_add_time']; ?></div>
		</div>
		<div class="row">
			<div class="lie w400"><?php echo $this->_var['lang']['label_consignee']; ?><?php echo $this->_var['order_info']['consignee']; ?></div>
			<div class="lie w300"><?php echo $this->_var['lang']['label_telephone']; ?><?php echo $this->_var['order_info']['mobile']; ?></div>
		</div>
		<div class="row">
			<div class="lie w400"><?php echo $this->_var['lang']['label_delivery_time']; ?><?php echo $this->_var['order_info']['best_time']; ?></div>
			<div class="lie w300"><?php echo $this->_var['lang']['label_payment_method']; ?><?php echo $this->_var['order_info']['pay_name']; ?></div>
		</div>
		<div class="row">
			<div class="lie_colspan"><?php echo $this->_var['lang']['label_receiving_address']; ?><?php echo $this->_var['order_info']['complete_address']; ?></div>
		</div>
	</div>
	<div class="buyer-goods-info">
		<table class="table">
			<thead>
				<tr>
					<th width="10%"><?php echo $this->_var['lang']['goods_id']; ?></th>
					<th width="30%"><?php echo $this->_var['lang']['goods_name']; ?></th>
					<th width="20%"><?php echo $this->_var['lang']['goods_specifications']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['amount']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['unit_price']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['subtotal']; ?></th>
				</tr>
			</thead>
			<tbody>
				<?php $_from = $this->_var['order_info']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
				<tr>
					<td><?php echo $this->_var['goods']['goods_id']; ?></td>
					<td class="p-name"><?php echo $this->_var['goods']['goods_name']; ?><?php if ($this->_var['goods']['bar_code']): ?><div class="blue"><?php echo $this->_var['lang']['label_goods_bar_code']; ?><?php echo $this->_var['goods']['bar_code']; ?></div><?php endif; ?></td>
					<td><?php echo $this->_var['goods']['goods_attr']; ?></td>
					<td><?php echo $this->_var['goods']['goods_number']; ?></td>
					<td><?php echo $this->_var['goods']['format_goods_price']; ?></td>
					<td><?php echo $this->_var['goods']['format_goods_amount']; ?></td>
				</tr>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="7" class="tr"><?php echo $this->_var['lang']['label_total_number']; ?><?php echo $this->_var['order_info']['number_amount']; ?><?php echo $this->_var['lang']['jian']; ?>&nbsp;&nbsp;&nbsp;<?php echo $this->_var['lang']['label_goods_total_amount']; ?><?php echo $this->_var['order_info']['formated_goods_amount']; ?></td>
				</tr>
			</tfoot>
		</table>
	</div>
	<div class="address-info">
		<p>
			<span><?php echo $this->_var['lang']['label_goods_total_amount']; ?><?php echo $this->_var['order_info']['formated_goods_amount']; ?></span>
			<?php if ($this->_var['order_info']['shipping_fee'] > 0): ?>
			<em>+</em>
			<span><?php echo $this->_var['lang']['label_freight']; ?><?php echo $this->_var['order_info']['formated_shipping_fee']; ?></span>	
			<?php endif; ?>
			<?php if ($this->_var['order_info']['insure_fee'] > 0): ?>
			<em>+</em>
			<span><?php echo $this->_var['lang']['label_premium']; ?><?php echo $this->_var['order_info']['formated_insure_fee']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['tax'] > 0): ?>
			<em>+</em>
			<span><?php echo $this->_var['lang']['label_invoice_tax_amount']; ?><?php echo $this->_var['order_info']['formated_tax']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['pay_fee'] > 0): ?>
			<em>+</em>
			<span><?php echo $this->_var['lang']['label_pay_charges']; ?><?php echo $this->_var['order_info']['formated_pay_fee']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['discount'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_discount']; ?><?php echo $this->_var['order_info']['formated_discount']; ?></span>
			<?php endif; ?>			
			<em>=</em>
			<span><?php echo $this->_var['lang']['label_order_total_amount']; ?><?php echo $this->_var['order_info']['formated_total_fee']; ?></span>
		</p>
		<p>
			<span><?php echo $this->_var['lang']['label_order_total_amount']; ?><?php echo $this->_var['order_info']['formated_total_fee']; ?></span>
			<?php if ($this->_var['order_info']['surplus'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_balance']; ?><?php echo $this->_var['order_info']['formated_surplus']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['money_paid'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_paid_amount']; ?><?php echo $this->_var['order_info']['formated_money_paid']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['value_card'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_stored_value_card']; ?><?php echo $this->_var['order_info']['formated_value_card']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['integral_money'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_integral']; ?><?php echo $this->_var['order_info']['formated_integral_money']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['bonus'] > 0): ?>					
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_store_red_bag']; ?><?php echo $this->_var['order_info']['formated_bonus']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['coupons'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_coupon']; ?><?php echo $this->_var['order_info']['formated_coupons']; ?></span>
			<?php endif; ?>
			<em>=</em>
			<span class="red"><?php echo $this->_var['lang']['label_to_be_paid_amount']; ?><?php echo $this->_var['order_info']['formated_order_amount']; ?></span>
		</p>
        <div class="image tr mt10" style="position:absolute; left:20px; bottom:10px;"><img src="<?php echo $this->_var['shop_url']; ?>plugins/barcodegen/html/image.php?filetype=PNG&dpi=72&scale=1&rotation=0&font_family=Arial.ttf&font_size=14&text=<?php echo $this->_var['order_sn']; ?>&thickness=40&checksum=&code=BCGcode39" /></div>
		<textarea class="print_textarea mt20" placeholder="<?php echo $this->_var['lang']['please_input_remark']; ?>" rows="3"></textarea>
		<p class="print-remark" title="<?php echo $this->_var['lang']['click_redit']; ?>"></p>
	</div>
</div>
<?php elseif ($this->_var['print_specification'] == '241MM*140MM'): ?>
<div class="print-panel mb0" style="padding:5mm 5mm 3mm 5mm; width:<?php echo empty($this->_var['print_spec_info']['width']) ? $this->_var['print_size_info']['width'] : $this->_var['print_spec_info']['width']; ?>mm;">
	<div class="top">
		<div class="logo"><img src="<?php echo $this->_var['order_print_logo']; ?>"></div>
		<div class="title"><h3><?php if ($this->_var['order_type'] == 'order'): ?><?php echo $this->_var['lang']['goods_shopping_list']; ?><?php else: ?><?php echo $this->_var['lang']['wholesale_shopping_list']; ?><?php endif; ?></h3></div>
		<img src="<?php echo $this->_var['web_url']; ?>images/print/seal-state-express.png" class="seal">
	</div>
	<div class="buyer-info">
		<div class="row">
			<div class="lie w400"><?php echo $this->_var['lang']['label_order_id']; ?><?php echo $this->_var['order_info']['order_sn']; ?></div>
			<div class="lie w300"><?php echo $this->_var['lang']['label_order_time']; ?><?php echo $this->_var['order_info']['formated_add_time']; ?></div>
		</div>
		<div class="row">
			<div class="lie w400"><?php echo $this->_var['lang']['label_consignee']; ?><?php echo $this->_var['order_info']['consignee']; ?></div>
			<div class="lie w300"><?php echo $this->_var['lang']['label_telephone']; ?><?php echo $this->_var['order_info']['mobile']; ?></div>
		</div>
		<div class="row">
			<div class="lie w400"><?php echo $this->_var['lang']['label_delivery_time']; ?><?php echo $this->_var['order_info']['best_time']; ?></div>
			<div class="lie w300"><?php echo $this->_var['lang']['label_payment_method']; ?><?php echo $this->_var['order_info']['pay_name']; ?></div>
		</div>
		<div class="row">
			<div class="lie_colspan"><?php echo $this->_var['lang']['label_receiving_address']; ?><?php echo $this->_var['order_info']['complete_address']; ?></div>
		</div>
	</div>
	<div class="buyer-goods-info">
		<table class="table">
			<thead>
				<tr>
					<th width="10%"><?php echo $this->_var['lang']['goods_id']; ?></th>
					<th width="30%"><?php echo $this->_var['lang']['goods_name']; ?></th>
					<th width="20%"><?php echo $this->_var['lang']['goods_specifications']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['amount']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['unit_price']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['subtotal']; ?></th>
				</tr>
			</thead>
			<tbody>
				<?php $_from = $this->_var['order_info']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
				<tr>
					<td><?php echo $this->_var['goods']['goods_id']; ?></td>
					<td class="p-name"><?php echo $this->_var['goods']['goods_name']; ?><?php if ($this->_var['goods']['bar_code']): ?><div class="blue"><?php echo $this->_var['lang']['label_goods_bar_code']; ?><?php echo $this->_var['goods']['bar_code']; ?></div><?php endif; ?></td>
					<td><?php echo $this->_var['goods']['goods_attr']; ?></td>
					<td><?php echo $this->_var['goods']['goods_number']; ?></td>
					<td><?php echo $this->_var['goods']['format_goods_price']; ?></td>
					<td><?php echo $this->_var['goods']['format_goods_amount']; ?></td>
				</tr>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="7" class="tr"><?php echo $this->_var['lang']['label_total_number']; ?><?php echo $this->_var['order_info']['number_amount']; ?><?php echo $this->_var['lang']['jian']; ?>&nbsp;&nbsp;&nbsp;<?php echo $this->_var['lang']['label_goods_total_amount']; ?><?php echo $this->_var['order_info']['formated_goods_amount']; ?></td>
				</tr>
			</tfoot>
		</table>
	</div>
	<div class="address-info">
		<p>
			<span><?php echo $this->_var['lang']['label_goods_total_amount']; ?><?php echo $this->_var['order_info']['formated_goods_amount']; ?></span>
			<?php if ($this->_var['order_info']['shipping_fee'] > 0): ?>
			<em>+</em>
			<span><?php echo $this->_var['lang']['label_freight']; ?><?php echo $this->_var['order_info']['formated_shipping_fee']; ?></span>	
			<?php endif; ?>
			<?php if ($this->_var['order_info']['insure_fee'] > 0): ?>
			<em>+</em>
			<span><?php echo $this->_var['lang']['label_premium']; ?><?php echo $this->_var['order_info']['formated_insure_fee']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['tax'] > 0): ?>
			<em>+</em>
			<span><?php echo $this->_var['lang']['label_invoice_tax_amount']; ?><?php echo $this->_var['order_info']['formated_tax']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['pay_fee'] > 0): ?>
			<em>+</em>
			<span><?php echo $this->_var['lang']['label_pay_charges']; ?><?php echo $this->_var['order_info']['formated_pay_fee']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['discount'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_discount']; ?><?php echo $this->_var['order_info']['formated_discount']; ?></span>
			<?php endif; ?>			
			<em>=</em>
			<span><?php echo $this->_var['lang']['label_order_total_amount']; ?><?php echo $this->_var['order_info']['formated_total_fee']; ?></span>
		</p>
		<p>
			<span><?php echo $this->_var['lang']['label_order_total_amount']; ?><?php echo $this->_var['order_info']['formated_total_fee']; ?></span>
			<?php if ($this->_var['order_info']['surplus'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_balance']; ?><?php echo $this->_var['order_info']['formated_surplus']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['money_paid'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_paid_amount']; ?><?php echo $this->_var['order_info']['formated_money_paid']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['value_card'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_stored_value_card']; ?><?php echo $this->_var['order_info']['formated_value_card']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['integral_money'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_integral']; ?><?php echo $this->_var['order_info']['formated_integral_money']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['bonus'] > 0): ?>					
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_store_red_bag']; ?><?php echo $this->_var['order_info']['formated_bonus']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['coupons'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_coupon']; ?><?php echo $this->_var['order_info']['formated_coupons']; ?></span>
			<?php endif; ?>
			<em>=</em>
			<span class="red"><?php echo $this->_var['lang']['label_to_be_paid_amount']; ?><?php echo $this->_var['order_info']['formated_order_amount']; ?></span>
		</p>
        <div class="image tr mt10"><img src="<?php echo $this->_var['shop_url']; ?>plugins/barcodegen/html/image.php?filetype=PNG&dpi=72&scale=1&rotation=0&font_family=Arial.ttf&font_size=14&text=<?php echo $this->_var['order_sn']; ?>&thickness=40&checksum=&code=BCGcode39" /></div>
		<textarea class="print_textarea mt20" placeholder="<?php echo $this->_var['lang']['please_input_remark']; ?>" rows="3"></textarea>
		<p class="print-remark" title="<?php echo $this->_var['lang']['click_redit']; ?>"></p>
	</div>
</div>
<?php elseif ($this->_var['print_specification'] == '241MM*280MM'): ?>
<div class="print-panel mb0" style="padding:5mm 5mm 3mm 5mm; width:<?php echo empty($this->_var['print_spec_info']['width']) ? $this->_var['print_size_info']['width'] : $this->_var['print_spec_info']['width']; ?>mm;">
	<div class="top">
		<div class="logo"><img src="<?php echo $this->_var['order_print_logo']; ?>"></div>
		<div class="title"><h3><?php if ($this->_var['order_type'] == 'order'): ?><?php echo $this->_var['lang']['goods_shopping_list']; ?><?php else: ?><?php echo $this->_var['lang']['wholesale_shopping_list']; ?><?php endif; ?></h3></div>
		<img src="<?php echo $this->_var['web_url']; ?>images/print/seal-state-express.png" class="seal">
	</div>
	<div class="buyer-info">
		<div class="row">
			<div class="lie w400"><?php echo $this->_var['lang']['label_order_id']; ?><?php echo $this->_var['order_info']['order_sn']; ?></div>
			<div class="lie w300"><?php echo $this->_var['lang']['label_order_time']; ?><?php echo $this->_var['order_info']['formated_add_time']; ?></div>
		</div>
		<div class="row">
			<div class="lie w400"><?php echo $this->_var['lang']['label_consignee']; ?><?php echo $this->_var['order_info']['consignee']; ?></div>
			<div class="lie w300"><?php echo $this->_var['lang']['label_telephone']; ?><?php echo $this->_var['order_info']['mobile']; ?></div>
		</div>
		<div class="row">
			<div class="lie w400"><?php echo $this->_var['lang']['label_delivery_time']; ?><?php echo $this->_var['order_info']['best_time']; ?></div>
			<div class="lie w300"><?php echo $this->_var['lang']['label_payment_method']; ?><?php echo $this->_var['order_info']['pay_name']; ?></div>
		</div>
		<div class="row">
			<div class="lie_colspan"><?php echo $this->_var['lang']['label_receiving_address']; ?><?php echo $this->_var['order_info']['complete_address']; ?></div>
		</div>
	</div>
	<div class="buyer-goods-info">
		<table class="table">
			<thead>
				<tr>
					<th width="10%"><?php echo $this->_var['lang']['goods_id']; ?></th>
					<th width="30%"><?php echo $this->_var['lang']['goods_name']; ?></th>
					<th width="20%"><?php echo $this->_var['lang']['goods_specifications']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['amount']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['unit_price']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['subtotal']; ?></th>
				</tr>
			</thead>
			<tbody>
				<?php $_from = $this->_var['order_info']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
				<tr>
					<td><?php echo $this->_var['goods']['goods_id']; ?></td>
					<td class="p-name"><?php echo $this->_var['goods']['goods_name']; ?><?php if ($this->_var['goods']['bar_code']): ?><div class="blue"><?php echo $this->_var['lang']['label_goods_bar_code']; ?><?php echo $this->_var['goods']['bar_code']; ?></div><?php endif; ?></td>
					<td><?php echo $this->_var['goods']['goods_attr']; ?></td>
					<td><?php echo $this->_var['goods']['goods_number']; ?></td>
					<td><?php echo $this->_var['goods']['format_goods_price']; ?></td>
					<td><?php echo $this->_var['goods']['format_goods_amount']; ?></td>
				</tr>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="7" class="tr"><?php echo $this->_var['lang']['label_total_number']; ?><?php echo $this->_var['order_info']['number_amount']; ?><?php echo $this->_var['lang']['jian']; ?>&nbsp;&nbsp;&nbsp;<?php echo $this->_var['lang']['label_goods_total_amount']; ?><?php echo $this->_var['order_info']['formated_goods_amount']; ?></td>
				</tr>
			</tfoot>
		</table>
	</div>
	<div class="address-info">
		<p>
			<span><?php echo $this->_var['lang']['label_goods_total_amount']; ?><?php echo $this->_var['order_info']['formated_goods_amount']; ?></span>
			<?php if ($this->_var['order_info']['shipping_fee'] > 0): ?>
			<em>+</em>
			<span><?php echo $this->_var['lang']['label_freight']; ?><?php echo $this->_var['order_info']['formated_shipping_fee']; ?></span>	
			<?php endif; ?>
			<?php if ($this->_var['order_info']['insure_fee'] > 0): ?>
			<em>+</em>
			<span><?php echo $this->_var['lang']['label_premium']; ?><?php echo $this->_var['order_info']['formated_insure_fee']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['tax'] > 0): ?>
			<em>+</em>
			<span><?php echo $this->_var['lang']['label_invoice_tax_amount']; ?><?php echo $this->_var['order_info']['formated_tax']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['pay_fee'] > 0): ?>
			<em>+</em>
			<span><?php echo $this->_var['lang']['label_pay_charges']; ?><?php echo $this->_var['order_info']['formated_pay_fee']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['discount'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_discount']; ?><?php echo $this->_var['order_info']['formated_discount']; ?></span>
			<?php endif; ?>			
			<em>=</em>
			<span><?php echo $this->_var['lang']['label_order_total_amount']; ?><?php echo $this->_var['order_info']['formated_total_fee']; ?></span>
		</p>
		<p>
			<span><?php echo $this->_var['lang']['label_order_total_amount']; ?><?php echo $this->_var['order_info']['formated_total_fee']; ?></span>
			<?php if ($this->_var['order_info']['surplus'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_balance']; ?><?php echo $this->_var['order_info']['formated_surplus']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['money_paid'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_paid_amount']; ?><?php echo $this->_var['order_info']['formated_money_paid']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['value_card'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_stored_value_card']; ?><?php echo $this->_var['order_info']['formated_value_card']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['integral_money'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_integral']; ?><?php echo $this->_var['order_info']['formated_integral_money']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['bonus'] > 0): ?>					
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_store_red_bag']; ?><?php echo $this->_var['order_info']['formated_bonus']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['coupons'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_coupon']; ?><?php echo $this->_var['order_info']['formated_coupons']; ?></span>
			<?php endif; ?>
			<em>=</em>
			<span class="red"><?php echo $this->_var['lang']['label_to_be_paid_amount']; ?><?php echo $this->_var['order_info']['formated_order_amount']; ?></span>
		</p>
        <div class="image tr mt10"><img src="<?php echo $this->_var['shop_url']; ?>plugins/barcodegen/html/image.php?filetype=PNG&dpi=72&scale=1&rotation=0&font_family=Arial.ttf&font_size=14&text=<?php echo $this->_var['order_sn']; ?>&thickness=40&checksum=&code=BCGcode39" /></div>
		<textarea class="print_textarea mt20" placeholder="<?php echo $this->_var['lang']['please_input_remark']; ?>" rows="3"></textarea>
		<p class="print-remark" title="<?php echo $this->_var['lang']['click_redit']; ?>"></p>
	</div>
</div>
<?php elseif ($this->_var['print_specification'] == '210MM*145MM'): ?>
<div class="print-panel mb0" style="padding:5mm 5mm 3mm 5mm; width:<?php echo empty($this->_var['print_spec_info']['width']) ? $this->_var['print_size_info']['width'] : $this->_var['print_spec_info']['width']; ?>mm;">
	<div class="top">
		<div class="logo"><img src="<?php echo $this->_var['order_print_logo']; ?>"></div>
		<div class="title"><h3><?php if ($this->_var['order_type'] == 'order'): ?><?php echo $this->_var['lang']['goods_shopping_list']; ?><?php else: ?><?php echo $this->_var['lang']['wholesale_shopping_list']; ?><?php endif; ?></h3></div>
		<img src="<?php echo $this->_var['web_url']; ?>images/print/seal-state-express.png" class="seal">
	</div>
	<div class="buyer-info">
		<div class="row">
			<div class="lie w400"><?php echo $this->_var['lang']['label_order_id']; ?><?php echo $this->_var['order_info']['order_sn']; ?></div>
			<div class="lie w300"><?php echo $this->_var['lang']['label_order_time']; ?><?php echo $this->_var['order_info']['formated_add_time']; ?></div>
		</div>
		<div class="row">
			<div class="lie w400"><?php echo $this->_var['lang']['label_consignee']; ?><?php echo $this->_var['order_info']['consignee']; ?></div>
			<div class="lie w300"><?php echo $this->_var['lang']['label_telephone']; ?><?php echo $this->_var['order_info']['mobile']; ?></div>
		</div>
		<div class="row">
			<div class="lie w400"><?php echo $this->_var['lang']['label_delivery_time']; ?><?php echo $this->_var['order_info']['best_time']; ?></div>
			<div class="lie w300"><?php echo $this->_var['lang']['label_payment_method']; ?><?php echo $this->_var['order_info']['pay_name']; ?></div>
		</div>
		<div class="row">
			<div class="lie_colspan"><?php echo $this->_var['lang']['label_receiving_address']; ?><?php echo $this->_var['order_info']['complete_address']; ?></div>
		</div>
	</div>
	<div class="buyer-goods-info">
		<table class="table">
			<thead>
				<tr>
					<th width="10%"><?php echo $this->_var['lang']['goods_id']; ?></th>
					<th width="30%"><?php echo $this->_var['lang']['goods_name']; ?></th>
					<th width="20%"><?php echo $this->_var['lang']['goods_specifications']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['amount']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['unit_price']; ?></th>
					<th width="10%"><?php echo $this->_var['lang']['subtotal']; ?></th>
				</tr>
			</thead>
			<tbody>
				<?php $_from = $this->_var['order_info']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
				<tr>
					<td><?php echo $this->_var['goods']['goods_id']; ?></td>
					<td class="p-name"><?php echo $this->_var['goods']['goods_name']; ?><?php if ($this->_var['goods']['bar_code']): ?><div class="blue"><?php echo $this->_var['lang']['label_goods_bar_code']; ?><?php echo $this->_var['goods']['bar_code']; ?></div><?php endif; ?></td>
					<td><?php echo $this->_var['goods']['goods_attr']; ?></td>
					<td><?php echo $this->_var['goods']['goods_number']; ?></td>
					<td><?php echo $this->_var['goods']['format_goods_price']; ?></td>
					<td><?php echo $this->_var['goods']['format_goods_amount']; ?></td>
				</tr>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="7" class="tr"><?php echo $this->_var['lang']['label_total_number']; ?><?php echo $this->_var['order_info']['number_amount']; ?><?php echo $this->_var['lang']['jian']; ?>&nbsp;&nbsp;&nbsp;<?php echo $this->_var['lang']['label_goods_total_amount']; ?><?php echo $this->_var['order_info']['formated_goods_amount']; ?></td>
				</tr>
			</tfoot>
		</table>
	</div>
	<div class="address-info">
		<p>
			<span><?php echo $this->_var['lang']['label_goods_total_amount']; ?><?php echo $this->_var['order_info']['formated_goods_amount']; ?></span>
			<?php if ($this->_var['order_info']['shipping_fee'] > 0): ?>
			<em>+</em>
			<span><?php echo $this->_var['lang']['label_freight']; ?><?php echo $this->_var['order_info']['formated_shipping_fee']; ?></span>	
			<?php endif; ?>
			<?php if ($this->_var['order_info']['insure_fee'] > 0): ?>
			<em>+</em>
			<span><?php echo $this->_var['lang']['label_premium']; ?><?php echo $this->_var['order_info']['formated_insure_fee']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['tax'] > 0): ?>
			<em>+</em>
			<span><?php echo $this->_var['lang']['label_invoice_tax_amount']; ?><?php echo $this->_var['order_info']['formated_tax']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['pay_fee'] > 0): ?>
			<em>+</em>
			<span><?php echo $this->_var['lang']['label_pay_charges']; ?><?php echo $this->_var['order_info']['formated_pay_fee']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['discount'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_discount']; ?><?php echo $this->_var['order_info']['formated_discount']; ?></span>
			<?php endif; ?>			
			<em>=</em>
			<span><?php echo $this->_var['lang']['label_order_total_amount']; ?><?php echo $this->_var['order_info']['formated_total_fee']; ?></span>
		</p>
		<p>
			<span><?php echo $this->_var['lang']['label_order_total_amount']; ?><?php echo $this->_var['order_info']['formated_total_fee']; ?></span>
			<?php if ($this->_var['order_info']['surplus'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_balance']; ?><?php echo $this->_var['order_info']['formated_surplus']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['money_paid'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_paid_amount']; ?><?php echo $this->_var['order_info']['formated_money_paid']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['value_card'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_stored_value_card']; ?><?php echo $this->_var['order_info']['formated_value_card']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['integral_money'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_integral']; ?><?php echo $this->_var['order_info']['formated_integral_money']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['bonus'] > 0): ?>					
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_store_red_bag']; ?><?php echo $this->_var['order_info']['formated_bonus']; ?></span>
			<?php endif; ?>
			<?php if ($this->_var['order_info']['coupons'] > 0): ?>
			<em>-</em>
			<span><?php echo $this->_var['lang']['label_coupon']; ?><?php echo $this->_var['order_info']['formated_coupons']; ?></span>
			<?php endif; ?>
			<em>=</em>
			<span class="red"><?php echo $this->_var['lang']['label_to_be_paid_amount']; ?><?php echo $this->_var['order_info']['formated_order_amount']; ?></span>
		</p>
        <div class="image tr mt10"><img src="<?php echo $this->_var['shop_url']; ?>plugins/barcodegen/html/image.php?filetype=PNG&dpi=72&scale=1&rotation=0&font_family=Arial.ttf&font_size=14&text=<?php echo $this->_var['order_sn']; ?>&thickness=40&checksum=&code=BCGcode39" /></div>
		<textarea class="print_textarea mt20" placeholder="<?php echo $this->_var['lang']['please_input_remark']; ?>" rows="3"></textarea>
		<p class="print-remark" title="<?php echo $this->_var['lang']['click_redit']; ?>"></p>
	</div>
</div>
<?php endif; ?>