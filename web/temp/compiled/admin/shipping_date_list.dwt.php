<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><?php echo $this->_var['lang']['11_system']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
        	<?php echo $this->fetch('library/shipping_menu_tab.lbi'); ?>		
        	<div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                	<li><?php echo $this->_var['lang']['operation_prompt_content']['data_list']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['data_list']['1']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
            	<!--商品列表-->
                <div class="common-head">
                    <div class="fl">
                    	<a href="<?php echo $this->_var['action_link']['href']; ?>"><div class="fbutton"><div class="add" title="<?php echo $this->_var['action_link']['text']; ?>"><span><i class="icon icon-plus"></i><?php echo $this->_var['action_link']['text']; ?></span></div></div></a>
                    </div>	
                </div>
                <div class="common-content">
                	<div class="list-div" id="listDiv">
                    	<table cellpadding="0" cellspacing="0" border="0">
                        	<thead>
                            	<tr>
                                	<th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['record_id']; ?></div></th>
                                    <th width="40%"><div class="tDiv"><?php echo $this->_var['lang']['time_interval']; ?></div></th>
                                    <th width="30%"><div class="tDiv"><?php echo $this->_var['lang']['optional_start_time']; ?></div></th>
                                    <th width="20%" class="handle"><?php echo $this->_var['lang']['handler']; ?></th>
                                </tr>
                            </thead>
                            <tbody>
								<?php $_from = $this->_var['shipping_date']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'shipping');if (count($_from)):
    foreach ($_from AS $this->_var['shipping']):
?>
                            	<tr>
                                    <td><div class="tDiv"><?php echo $this->_var['shipping']['shipping_date_id']; ?></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['shipping']['start_date']; ?>-<?php echo $this->_var['shipping']['end_date']; ?></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['shipping']['select_day']; ?></div></td>
                                    <td class="handle">
                                        <div class="tDiv a2">
                                            <a href="shipping.php?act=date_edit&sid=<?php echo $this->_var['shipping']['shipping_date_id']; ?>" class="btn_edit"><i class="icon icon-edit"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="shipping.php?act=date_remove&sid=<?php echo $this->_var['shipping']['shipping_date_id']; ?>" class="btn_trash"><i class="icon icon-trash"></i><?php echo $this->_var['lang']['drop']; ?></a>
                                        </div>
                                    </td>                           
                                </tr>
                                <?php endforeach; else: ?>
                                    <tr><td class="no-records" colspan="20"><?php echo $this->_var['lang']['no_records']; ?></td></tr>								
								<?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </tbody>						
                        </table>
                    </div>
                </div>
                <!--商品列表end-->
            </div>
		</div>
	</div>
	<?php echo $this->fetch('library/pagefooter.lbi'); ?>
</body>
</html>