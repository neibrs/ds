<div class="tishi">
	<div class="tishi_info">
        <p class="first"><?php echo $this->_var['lang']['intelligent_notice']['0']; ?></p>
        <p><?php echo $this->_var['lang']['intelligent_notice']['1']; ?></p>
        <i class="icon"></i>
    </div>
</div>
<div class="sku_goods_info manual_info">
	<div class="warehouse_item">
        <span class="item">
            <span class="tit"><?php echo $this->_var['lang']['intelligent_goods_name']; ?><em class="blue"><?php echo $this->_var['goods']['goods_name']; ?></em></span>					
        </span>
	</div>
    <div id="goodslistDiv">   
        <table class="table">
            <thead>
                <th width="14%"><?php echo $this->_var['lang']['intelligent_goods_number']; ?></th>
                <th width="14%"><?php echo $this->_var['lang']['intelligent_return_number']; ?></th>
                <th width="15%"><?php echo $this->_var['lang']['intelligent_user_number']; ?></th>
                <th width="14%"><?php echo $this->_var['lang']['intelligent_goods_comment_number']; ?></th>
                <th width="16%"><?php echo $this->_var['lang']['intelligent_merchants_comment_number']; ?></th>
                <th width="14%"><?php echo $this->_var['lang']['intelligent_user_attention_number']; ?></th>
				<th width="13%"><?php echo $this->_var['lang']['intelligent_manual_intervention']; ?></th>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo empty($this->_var['manual_intervention']['goods_number']) ? '0' : $this->_var['manual_intervention']['goods_number']; ?></td>
                    <td><?php echo empty($this->_var['manual_intervention']['return_number']) ? '0' : $this->_var['manual_intervention']['return_number']; ?></td>
                    <td><?php echo empty($this->_var['manual_intervention']['user_number']) ? '0' : $this->_var['manual_intervention']['user_number']; ?></td>
                    <td><?php echo empty($this->_var['manual_intervention']['goods_comment_number']) ? '0' : $this->_var['manual_intervention']['goods_comment_number']; ?></td>
					<td><?php echo empty($this->_var['manual_intervention']['merchants_comment_number']) ? '0' : $this->_var['manual_intervention']['merchants_comment_number']; ?></td>
                    <td><?php echo empty($this->_var['manual_intervention']['user_attention_number']) ? '0' : $this->_var['manual_intervention']['user_attention_number']; ?></td>
                    <td>
                    	<div class="editSpanInput fn" ectype="editSpanInput">
                        	<span onclick="listTable.edit(this, 'edit_sort_order', <?php echo $this->_var['goods']['goods_id']; ?>);"><?php echo $this->_var['goods']['sort_order']; ?></span>
                            <i class="icon icon-edit"></i>
                        </div>
                    </td>
                </tr> 
            </tbody>
        </table>
	</div>    
</div>