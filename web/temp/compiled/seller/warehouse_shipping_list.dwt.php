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
                <!-- start payment list -->
                <div class="list-div" id="listDiv">
                <table class="ecsc-default-table ecsc-table-seller mt20"  cellspacing='1' cellpadding='1'>
                  <tr>
                    <th width="10%"><?php echo $this->_var['lang']['03_shipping_list']; ?></th>
                    <th width="70%"><?php echo $this->_var['lang']['03_shipping_list']; ?><?php echo $this->_var['lang']['description']; ?></th>
                    <th width="20%"><?php echo $this->_var['lang']['handler']; ?></th>
                  </tr>
                  <?php $_from = $this->_var['shipping_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'shipping');if (count($_from)):
    foreach ($_from AS $this->_var['shipping']):
?>
                  
                  <tr>
                    <td class="first-cell" align="center"><?php echo $this->_var['shipping']['shipping_name']; ?></td>
                    <td><?php echo $this->_var['shipping']['shipping_desc']; ?></td>
                    <td align="center"><a href="warehouse.php?act=tpl_list&shipping_id=<?php echo $this->_var['shipping']['shipping_id']; ?>"><?php echo $this->_var['lang']['set_distribution_mode']; ?></a></td>
                  </tr>
                  
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </table>
                </div>
        	</div>
    	</div>
	</div>
</div>
<?php echo $this->fetch('library/seller_footer.lbi'); ?>
<!-- end payment list -->
<script type="text/javascript">
<!--


onload = function()
{
    // 开始检查订单
    startCheckOrder();
}

//-->
</script>
</body>
</html>