<table class="t-tab mt10">
    <tr>
        <th width="15%"><?php echo $this->_var['lang']['03_shipping_list']; ?></th>
        <th width="20%"><?php echo $this->_var['lang']['region_name']; ?></th>
        <th width="40%"><?php echo $this->_var['lang']['jurisd_area']; ?></th>
        <th width="15%" class="handle"><?php echo $this->_var['lang']['handler']; ?></th>
    </tr>
    
    <?php $_from = $this->_var['shipping_tpl']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'shipping_0_25315400_1555396237');if (count($_from)):
    foreach ($_from AS $this->_var['shipping_0_25315400_1555396237']):
?>
    	<?php $_from = $this->_var['shipping_0_25315400_1555396237']['area_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'list');$this->_foreach['nolist'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nolist']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['list']):
        $this->_foreach['nolist']['iteration']++;
?>
        <?php if ($this->_var['key'] == 0): ?>
        <tr data-shipping_id="<?php echo $this->_var['shipping_0_25315400_1555396237']['shipping_id']; ?>">
            <td rowspan="<?php echo $this->_var['shipping_0_25315400_1555396237']['area_count']; ?>">
                <p>
                    <strong><?php echo $this->_var['lang']['label_express_name']; ?></strong>
                    <span calss="shipping_name"><?php echo $this->_var['shipping_0_25315400_1555396237']['shipping_name']; ?></span>
                </p>
                <p><input type="button" value="<?php echo $this->_var['lang']['add_area']; ?>" class="button" data-role="add_shipping_area" ectype="add_shipping_area"></p>
            </td>
            <td align="center"><?php echo $this->_var['list']['tpl_name']; ?></td>
            <td><div class="tpl_region"><?php echo $this->_var['list']['region_list']; ?></div></td>
            <td align="center">
                <input type="button" value="<?php echo $this->_var['lang']['edit']; ?>" class="button" ectype="edit_shipping" data-id="<?php echo $this->_var['list']['id']; ?>" data-role="edit_shipping">
                <input type="button" value="<?php echo $this->_var['lang']['drop']; ?>" class="button" ectype="drop_shipping" data-id="<?php echo $this->_var['list']['id']; ?>" data-role="drop_shipping">
            </td>
        </tr>
        <?php else: ?>
        <tr data-shipping_id="<?php echo $this->_var['shipping_0_25315400_1555396237']['shipping_id']; ?>">
        	<td align="center"><?php echo $this->_var['list']['tpl_name']; ?></td>
            <td><div class="tpl_region"><?php echo $this->_var['list']['region_list']; ?></div></td>
            <td align="center">
                <input type="button" value="<?php echo $this->_var['lang']['edit']; ?>" class="button" ectype="edit_shipping" data-id="<?php echo $this->_var['list']['id']; ?>" data-role="edit_shipping">
                <input type="button" value="<?php echo $this->_var['lang']['drop']; ?>" class="button" ectype="drop_shipping" data-id="<?php echo $this->_var['list']['id']; ?>" data-role="drop_shipping">
            </td>
        </tr>
        <?php endif; ?>
    	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</table>