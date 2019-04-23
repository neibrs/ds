<input type="hidden" name="printer" value="<?php echo $this->_var['print_spec_info']['printer']; ?>">
<input type="hidden" name="width" value="<?php echo $this->_var['print_size_info']['width']; ?>">
<input type="hidden" name="height" value="<?php echo $this->_var['print_size_info']['height']; ?>">
<?php if ($this->_var['print_specification'] == 'A4纸张'): ?>
<!-- a4纸张 -->
<div class="print-warp a4">
	<div id="printContent">
	<div class="print-content">
    	<link rel="stylesheet" type="text/css" href="<?php echo $this->_var['web_url']; ?>css/print.css">
		<?php $_from = $this->_var['part_html']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'html');$this->_foreach['html'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['html']['total'] > 0):
    foreach ($_from AS $this->_var['html']):
        $this->_foreach['html']['iteration']++;
?>
		<?php echo $this->_var['html']; ?>
        <?php if (! ($this->_foreach['html']['iteration'] == $this->_foreach['html']['total'])): ?>
        <p style="page-break-before:always"></p>
        <?php endif; ?>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
    </div>
	<?php echo $this->fetch('library/order_print_handle.lbi'); ?>
</div>
<?php elseif ($this->_var['print_specification'] == '100MM'): ?>
<!-- mm100 -->
<div class="print-warp mm100">
	<div id="printContent">
	<div class="print-content">
		<link rel="stylesheet" type="text/css" href="<?php echo $this->_var['web_url']; ?>css/print.css">
		<?php $_from = $this->_var['part_html']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'html');$this->_foreach['html'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['html']['total'] > 0):
    foreach ($_from AS $this->_var['html']):
        $this->_foreach['html']['iteration']++;
?>
		<?php echo $this->_var['html']; ?>
        <?php if (! ($this->_foreach['html']['iteration'] == $this->_foreach['html']['total'])): ?>
        <p style="page-break-before:always"></p>
        <?php endif; ?>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
    </div>
	<?php echo $this->fetch('library/order_print_handle.lbi'); ?>
</div>
<?php elseif ($this->_var['print_specification'] == '80MM'): ?>
<!-- mm80 -->
<div class="print-warp mm80">
	<div id="printContent">
	<div class="print-content">
    	<link rel="stylesheet" type="text/css" href="<?php echo $this->_var['web_url']; ?>css/print.css">
		<?php $_from = $this->_var['part_html']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'html');$this->_foreach['html'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['html']['total'] > 0):
    foreach ($_from AS $this->_var['html']):
        $this->_foreach['html']['iteration']++;
?>
		<?php echo $this->_var['html']; ?>
        <?php if (! ($this->_foreach['html']['iteration'] == $this->_foreach['html']['total'])): ?>
        <p style="page-break-before:always"></p>
        <?php endif; ?>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
    </div>
	<?php echo $this->fetch('library/order_print_handle.lbi'); ?>
</div>
<?php elseif ($this->_var['print_specification'] == '70MM'): ?>
<!-- mm70 -->
<div class="print-warp mm70">
	<div id="printContent">
	<div class="print-content">
    	<link rel="stylesheet" type="text/css" href="<?php echo $this->_var['web_url']; ?>css/print.css">
		<?php $_from = $this->_var['part_html']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'html');$this->_foreach['html'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['html']['total'] > 0):
    foreach ($_from AS $this->_var['html']):
        $this->_foreach['html']['iteration']++;
?>
		<?php echo $this->_var['html']; ?>
        <?php if (! ($this->_foreach['html']['iteration'] == $this->_foreach['html']['total'])): ?>
        <p style="page-break-before:always"></p>
        <?php endif; ?>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
    </div>
	<?php echo $this->fetch('library/order_print_handle.lbi'); ?>
</div>
<?php elseif ($this->_var['print_specification'] == '60MM'): ?>
<!-- mm60 -->
<div class="print-warp mm60">
	<div id="printContent">
	<div class="print-content">
    	<link rel="stylesheet" type="text/css" href="<?php echo $this->_var['web_url']; ?>css/print.css">
		<?php $_from = $this->_var['part_html']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'html');$this->_foreach['html'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['html']['total'] > 0):
    foreach ($_from AS $this->_var['html']):
        $this->_foreach['html']['iteration']++;
?>
		<?php echo $this->_var['html']; ?>
        <?php if (! ($this->_foreach['html']['iteration'] == $this->_foreach['html']['total'])): ?>
        <p style="page-break-before:always"></p>
        <?php endif; ?>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
    </div>
	<?php echo $this->fetch('library/order_print_handle.lbi'); ?>
</div>
<?php elseif ($this->_var['print_specification'] == '50MM'): ?>
<!-- mm50 -->
<div class="print-warp mm50">
	<div id="printContent">
	<div class="print-content">
    	<link rel="stylesheet" type="text/css" href="<?php echo $this->_var['web_url']; ?>css/print.css">
		<?php $_from = $this->_var['part_html']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'html');$this->_foreach['html'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['html']['total'] > 0):
    foreach ($_from AS $this->_var['html']):
        $this->_foreach['html']['iteration']++;
?>
		<?php echo $this->_var['html']; ?>
        <?php if (! ($this->_foreach['html']['iteration'] == $this->_foreach['html']['total'])): ?>
        <p style="page-break-before:always"></p>
        <?php endif; ?>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
    </div>
	<?php echo $this->fetch('library/order_print_handle.lbi'); ?>
</div>
<?php elseif ($this->_var['print_specification'] == '120MM*93MM'): ?>
<!-- 120mm*93mm -->
<div class="print-warp mm120mm93">
	<div id="printContent">
	<div class="print-content">
    	<link rel="stylesheet" type="text/css" href="<?php echo $this->_var['web_url']; ?>css/print.css">
		<?php $_from = $this->_var['part_html']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'html');$this->_foreach['html'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['html']['total'] > 0):
    foreach ($_from AS $this->_var['html']):
        $this->_foreach['html']['iteration']++;
?>
		<?php echo $this->_var['html']; ?>
        <?php if (! ($this->_foreach['html']['iteration'] == $this->_foreach['html']['total'])): ?>
        <p style="page-break-before:always"></p>
        <?php endif; ?>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
    </div>
	<?php echo $this->fetch('library/order_print_handle.lbi'); ?>
</div>
<?php elseif ($this->_var['print_specification'] == '120MM*140MM'): ?>
<!-- 120mm*140mm -->
<div class="print-warp mm120mm140">
	<div id="printContent">
	<div class="print-content">
    	<link rel="stylesheet" type="text/css" href="<?php echo $this->_var['web_url']; ?>css/print.css">
		<?php $_from = $this->_var['part_html']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'html');$this->_foreach['html'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['html']['total'] > 0):
    foreach ($_from AS $this->_var['html']):
        $this->_foreach['html']['iteration']++;
?>
		<?php echo $this->_var['html']; ?>
        <?php if (! ($this->_foreach['html']['iteration'] == $this->_foreach['html']['total'])): ?>
        <p style="page-break-before:always"></p>
        <?php endif; ?>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
    </div>
	<?php echo $this->fetch('library/order_print_handle.lbi'); ?>
</div>
<?php elseif ($this->_var['print_specification'] == '120MM*280MM'): ?>
<!-- 120mm*280mm -->
<div class="print-warp mm120mm280">
	<div id="printContent">
	<div class="print-content">
    	<link rel="stylesheet" type="text/css" href="<?php echo $this->_var['web_url']; ?>css/print.css">
		<?php $_from = $this->_var['part_html']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'html');$this->_foreach['html'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['html']['total'] > 0):
    foreach ($_from AS $this->_var['html']):
        $this->_foreach['html']['iteration']++;
?>
		<?php echo $this->_var['html']; ?>
        <?php if (! ($this->_foreach['html']['iteration'] == $this->_foreach['html']['total'])): ?>
        <p style="page-break-before:always"></p>
        <?php endif; ?>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
    </div>
	<?php echo $this->fetch('library/order_print_handle.lbi'); ?>
</div>
<?php elseif ($this->_var['print_specification'] == '190MM*93MM'): ?>
<!-- 190mm*93mm -->
<div class="print-warp mm190mm93">
	<div id="printContent">
	<div class="print-content">
    	<link rel="stylesheet" type="text/css" href="<?php echo $this->_var['web_url']; ?>css/print.css">
		<?php $_from = $this->_var['part_html']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'html');$this->_foreach['html'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['html']['total'] > 0):
    foreach ($_from AS $this->_var['html']):
        $this->_foreach['html']['iteration']++;
?>
		<?php echo $this->_var['html']; ?>
        <?php if (! ($this->_foreach['html']['iteration'] == $this->_foreach['html']['total'])): ?>
        <p style="page-break-before:always"></p>
        <?php endif; ?>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
    </div>
	<?php echo $this->fetch('library/order_print_handle.lbi'); ?>
</div>
<?php elseif ($this->_var['print_specification'] == '190MM*140MM'): ?>
<!-- 190mm*140mm -->
<div class="print-warp mm190mm140">
	<div id="printContent">
	<div class="print-content">
    	<link rel="stylesheet" type="text/css" href="<?php echo $this->_var['web_url']; ?>css/print.css">
		<?php $_from = $this->_var['part_html']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'html');$this->_foreach['html'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['html']['total'] > 0):
    foreach ($_from AS $this->_var['html']):
        $this->_foreach['html']['iteration']++;
?>
		<?php echo $this->_var['html']; ?>
        <?php if (! ($this->_foreach['html']['iteration'] == $this->_foreach['html']['total'])): ?>
        <p style="page-break-before:always"></p>
        <?php endif; ?>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
    </div>
	<?php echo $this->fetch('library/order_print_handle.lbi'); ?>
</div>
<?php elseif ($this->_var['print_specification'] == '190MM*280MM'): ?>
<!-- 190mm*280mm -->
<div class="print-warp mm190mm280">
	<div id="printContent">
	<div class="print-content">
    	<link rel="stylesheet" type="text/css" href="<?php echo $this->_var['web_url']; ?>css/print.css">
		<?php $_from = $this->_var['part_html']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'html');$this->_foreach['html'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['html']['total'] > 0):
    foreach ($_from AS $this->_var['html']):
        $this->_foreach['html']['iteration']++;
?>
		<?php echo $this->_var['html']; ?>
        <?php if (! ($this->_foreach['html']['iteration'] == $this->_foreach['html']['total'])): ?>
        <p style="page-break-before:always"></p>
        <?php endif; ?>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
    </div>
	<?php echo $this->fetch('library/order_print_handle.lbi'); ?>
</div>
<?php elseif ($this->_var['print_specification'] == '241MM*93MM'): ?>
<!-- 241mm*93mm -->
<div class="print-warp mm241mm93">
	<div id="printContent">
	<div class="print-content">
    	<link rel="stylesheet" type="text/css" href="<?php echo $this->_var['web_url']; ?>css/print.css">
		<?php $_from = $this->_var['part_html']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'html');$this->_foreach['html'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['html']['total'] > 0):
    foreach ($_from AS $this->_var['html']):
        $this->_foreach['html']['iteration']++;
?>
		<?php echo $this->_var['html']; ?>
        <?php if (! ($this->_foreach['html']['iteration'] == $this->_foreach['html']['total'])): ?>
        <p style="page-break-before:always"></p>
        <?php endif; ?>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
    </div>
	<?php echo $this->fetch('library/order_print_handle.lbi'); ?>
</div>
<?php elseif ($this->_var['print_specification'] == '241MM*140MM'): ?>
<!-- 241mm*140mm -->
<div class="print-warp mm241mm140">
	<div id="printContent">
	<div class="print-content">
    	<link rel="stylesheet" type="text/css" href="<?php echo $this->_var['web_url']; ?>css/print.css">
		<?php $_from = $this->_var['part_html']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'html');$this->_foreach['html'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['html']['total'] > 0):
    foreach ($_from AS $this->_var['html']):
        $this->_foreach['html']['iteration']++;
?>
		<?php echo $this->_var['html']; ?>
        <?php if (! ($this->_foreach['html']['iteration'] == $this->_foreach['html']['total'])): ?>
        <p style="page-break-before:always"></p>
        <?php endif; ?>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
    </div>
	<?php echo $this->fetch('library/order_print_handle.lbi'); ?>
</div>
<?php elseif ($this->_var['print_specification'] == '241MM*280MM'): ?>
<!-- 241mm*280mm -->
<div class="print-warp mm241mm280">
	<div id="printContent">
	<div class="print-content">
    	<link rel="stylesheet" type="text/css" href="<?php echo $this->_var['web_url']; ?>css/print.css">
		<?php $_from = $this->_var['part_html']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'html');$this->_foreach['html'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['html']['total'] > 0):
    foreach ($_from AS $this->_var['html']):
        $this->_foreach['html']['iteration']++;
?>
		<?php echo $this->_var['html']; ?>
        <?php if (! ($this->_foreach['html']['iteration'] == $this->_foreach['html']['total'])): ?>
        <p style="page-break-before:always"></p>
        <?php endif; ?>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
    </div>
	<?php echo $this->fetch('library/order_print_handle.lbi'); ?>
</div>
<?php elseif ($this->_var['print_specification'] == '210MM*145MM'): ?>
<!-- 210mm*145mm -->
<div class="print-warp mm210mm145">
	<div id="printContent">
	<div class="print-content">
    	<link rel="stylesheet" type="text/css" href="<?php echo $this->_var['web_url']; ?>css/print.css">
		<?php $_from = $this->_var['part_html']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'html');$this->_foreach['html'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['html']['total'] > 0):
    foreach ($_from AS $this->_var['html']):
        $this->_foreach['html']['iteration']++;
?>
		<?php echo $this->_var['html']; ?>
        <?php if (! ($this->_foreach['html']['iteration'] == $this->_foreach['html']['total'])): ?>
        <p style="page-break-before:always"></p>
        <?php endif; ?>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
    </div>
	<?php echo $this->fetch('library/order_print_handle.lbi'); ?>
</div>
<?php endif; ?>