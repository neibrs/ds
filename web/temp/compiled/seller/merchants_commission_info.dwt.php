<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $this->fetch('library/seller_html_head.lbi'); ?>
</head>

<body>
<?php echo $this->fetch('library/seller_header.lbi'); ?>
<div class="ecsc-layout">
    <div class="site wrapper">
        <?php echo $this->fetch('library/seller_menu_left.lbi'); ?>
        <div class="ecsc-layout-right">
            <div class="main-content" id="mainContent">
				<?php echo $this->fetch('library/url_here.lbi'); ?>
				<?php echo $this->fetch('library/seller_menu_tab.lbi'); ?>
                
                <div class="explanation clear" id="explanation">
                    <div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4></div>
                    <ul>
                        <li>1、<?php echo $this->_var['lang']['settlement_cycle_notic']; ?></li>
                        <li>2、<?php echo $this->_var['lang']['start_account_bill_time_notic']; ?></li>
                    </ul>
                </div>
                
                <div class="ecsc-form-goods">
                    <div class="wrapper-list">
                        <dl>
                            <dt><?php echo $this->_var['lang']['commission_model']; ?>：</dt>
                            <dd class="txtline">
                                <?php if ($this->_var['server']['commission_model'] == 0): ?>
                                    <?php echo $this->_var['lang']['seller_model']; ?>
                                <?php else: ?>
                                    <?php echo $this->_var['lang']['category_model']; ?>
                                <?php endif; ?>
                            </dd>
                        </dl>
                        
                        <?php if ($this->_var['server']['commission_model'] == 0): ?>
                        <dl>
                            <dt><?php echo $this->_var['lang']['label_suppliers_percent']; ?></dt>
                            <dd  class="txtline"><?php echo $this->_var['server']['percent_value']; ?>%</dd>
                        </dl>
                        <?php endif; ?>
                        
                        <dl>
                            <dt><?php echo $this->_var['lang']['settlement_cycle']; ?>：</dt>
                            <dd  class="txtline"><?php echo $this->_var['settlement_cycle']; ?></dd>
                        </dl>
                        
                        <?php if ($this->_var['server']['cycle'] == 7): ?>
                            <dl>
                                <dt><?php echo $this->_var['lang']['label_press_day_number']; ?>：</dt>
                                <dd  class="txtline"><?php echo empty($this->_var['server']['day_number']) ? '0' : $this->_var['server']['day_number']; ?> <?php echo $this->_var['lang']['tian']; ?></dd>
                            </dl>
                            <?php if ($this->_var['server']['bill_time']): ?>
                            <dl>
                                <dt><?php echo $this->_var['lang']['label_start_product_bill_time']; ?></dt>
                                <dd  class="txtline"><?php echo $this->_var['server']['bill_time']; ?></dd>
                            </dl>
                            <?php endif; ?>
                        <?php endif; ?>
                        
                        <?php if ($this->_var['server']['suppliers_desc']): ?>
                        <dl>
                            <dt><?php echo $this->_var['lang']['label_suppliers_server_desc']; ?>：</dt>
                            <dd  class="txtline"><?php echo $this->_var['server']['suppliers_desc']; ?></dd>
                        </dl>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $this->fetch('library/seller_footer.lbi'); ?>
</body>
</html>
