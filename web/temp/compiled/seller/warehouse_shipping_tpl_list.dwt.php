<?php if ($this->_var['full_page']): ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><?php echo $this->fetch('library/seller_html_head.lbi'); ?></head>

<body>
<?php echo $this->fetch('library/seller_header.lbi'); ?>
<div class="ecsc-layout">
    <div class="site wrapper">
		<?php echo $this->fetch('library/seller_menu_left.lbi'); ?>
		<div class="ecsc-layout-right">
            <div class="main-content" id="mainContent">
				<?php echo $this->fetch('library/url_here.lbi'); ?>
				<?php echo $this->fetch('library/seller_menu_tab.lbi'); ?>
                <?php endif; ?>
                <!-- start shipping area list -->
                <form method="post" action="warehouse.php" name="listForm" onsubmit="return confirm('<?php echo $this->_var['lang']['warehouse_confirm']; ?>')">
                <div class="list-div" id="listDiv">
                
                <table class="ecsc-default-table mt20"  cellspacing='1' cellpadding='1' id='listTable'>
                    <thead>
                    <tr>
                        <th width="10%"><div class="first_all"><input type="checkbox" onclick="listTable.selectAll(this, 'checkboxes')" id="all" class="ui-checkbox" /><label for="all" class="ui-label"><?php echo $this->_var['lang']['record_id']; ?></label></div></th>
                        <th width="16%"><?php echo $this->_var['lang']['freight_template_name']; ?></th>
                        <th width="46%"><?php echo $this->_var['lang']['originating_warehouse']; ?></th>	
                        <th width="16%"><?php echo $this->_var['lang']['reach_region']; ?></th>
                        <th width="12%"><?php echo $this->_var['lang']['handler']; ?></th>
                    </tr>
                	</thead>
                    <tbody>
                    <?php $_from = $this->_var['areas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'area');if (count($_from)):
    foreach ($_from AS $this->_var['area']):
?>
                    <tr>
                        <td class="first_td_checkbox">
                            <div class="first_all"><input type="checkbox" name="checkboxes[]" value="<?php echo $this->_var['area']['id']; ?>" id="checkbox_<?php echo $this->_var['area']['id']; ?>" class="ui-checkbox" /><label for="checkbox_<?php echo $this->_var['area']['id']; ?>" class="ui-label"><?php echo $this->_var['area']['id']; ?></label></div>
                        </td>
                        <td class="first-cell"><?php echo htmlspecialchars($this->_var['area']['tpl_name']); ?></td>
                        <td><?php echo $this->_var['area']['warehouses']; ?></td>
                        <td><?php echo $this->_var['area']['regions']; ?></td>
                        <td class="ecsc-table-handle tr">
                            <span><a href="warehouse.php?act=ship_tpl&shipping_id=<?php echo $this->_var['shipping_id']; ?>&id=<?php echo $this->_var['area']['id']; ?>" title="<?php echo $this->_var['lang']['edit']; ?>" class="btn-green"><i class="icon icon-edit"></i><p><?php echo $this->_var['lang']['edit']; ?></p></a></span>
                            <span><a href="javascript:;" onclick="remove_info_pro(<?php echo $this->_var['area']['id']; ?>, '<?php echo $this->_var['lang']['delet_tpl_id_1']; ?><?php echo $this->_var['area']['id']; ?><?php echo $this->_var['lang']['delet_tpl_id_2']; ?>', 'remove_tpl')" title="<?php echo $this->_var['lang']['drop']; ?>" class="btn-red"><i class="icon icon-trash"></i><p><?php echo $this->_var['lang']['drop']; ?></p></a></span>
                        </td>
                    </tr>
                    <?php endforeach; else: ?>
                    <tr><td class="no-records" colspan="11"><?php echo $this->_var['lang']['no_records']; ?></td></tr>	
                    <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                	</tbody>
                    <tfoot>
                    <tr>
                        <td colspan="5" class="td_border">
                        	<div class="shenhe">
                            <input type="hidden" name="act" value="multi_remove" />
                            <input type="hidden" name="shipping_id" value="<?php echo $_GET['shipping_id']; ?>" />
                            <input type="submit" value="<?php echo $this->_var['lang']['remove']; ?>" disabled="true" id="btnSubmit" class="sc-btn btn_disabled" style="display:inline-block;" />
                            </div>
                        </td>
                    </tr>
                    </tfoot>
                </table>
                
                <?php if ($this->_var['full_page']): ?>
                </div>
                </form>
        	</div>
    	</div>
	</div>
</div>
<?php echo $this->fetch('library/seller_footer.lbi'); ?>

<script type="text/javascript">
onload = function()
{
  // 开始检查订单
  startCheckOrder();
}

function remove_info_pro(id,msg,act)
{
	if(confirm(msg)==true)
	{
		$.ajax({
			type:"GET",
			url:"warehouse.php",
			data:"act="+act+"&id="+id,
			dataType:"text",
			success:function(data)
			{
				alert(data);
				window.location.reload();				
			},
			/*error: function(){
				alert(arguments[1]);
			}*/		
		});		
	}
}
</script>
</body>
</html>
<?php endif; ?>