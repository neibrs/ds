<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><a href="<?php echo $this->_var['action_link']['href']; ?>" class="s-back"><?php echo $this->_var['lang']['back']; ?></a><?php echo $this->_var['lang']['supply_and_demand']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
        	<div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>                	
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['info']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content_common']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
                <div class="common-content">
                    <div class="mian-info">
                        <form action="wholesale_purchase.php" method="post" name="theForm" enctype="multipart/form-data" id="purchase_form" >
                            <div class="switch_info b2b_switch_info" id="conent_area">
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['purchase_single_title']; ?>：</div>
                                    <div class="label_value"><?php echo htmlspecialchars($this->_var['purchase_info']['subject']); ?></div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['purchase_product_type']; ?>：</div>
                                    <div class="label_value"><?php echo $this->_var['lang']['purchase_type'][$this->_var['purchase_info']['type']]; ?></div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['purchase_goods']; ?>：</div>
                                    <div class="label_value">
										<table class="b2b-table">
											<colgroup>
												<col width="100">
												<col width="250">
												<col width="160">
												<col width="100">
												<col width="100">
												<col>
											</colgroup>
											<thead>
											<tr>
												<th><?php echo $this->_var['lang']['purchase_id']; ?></th>
												<th><?php echo $this->_var['lang']['purchase_goods_name']; ?></th>
												<th><?php echo $this->_var['lang']['purchase_goods_cat']; ?></th>
												<th><?php echo $this->_var['lang']['purchase_number']; ?></th>
												<th><?php echo $this->_var['lang']['purchase_price']; ?></th>
												<th><?php echo $this->_var['lang']['purchase_handle']; ?></th>
											</tr>
											</thead>
											<tbody>
												<?php $_from = $this->_var['purchase_info']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods']['iteration']++;
?>
												<tr>
													<td><?php echo $this->_foreach['goods']['iteration']; ?></td>
													<td><div class="tDiv t-name tl"><?php echo $this->_var['goods']['goods_name']; ?></div></td>
													<td><div class="tDiv"><?php echo $this->_var['goods']['cat_name']; ?></div></td>
													<td><div class="tDiv"><?php echo $this->_var['goods']['goods_number']; ?><?php echo $this->_var['lang']['jian']; ?></div></td>
													<td><div class="tDiv"><?php echo $this->_var['goods']['goods_price']; ?><?php echo $this->_var['lang']['yuan']; ?></div></td>
													<td>
														<div class="tDiv">
															<?php if ($this->_var['goods']['remarks']): ?><div class="t-desc"><span><?php echo $this->_var['goods']['remarks']; ?></span></div><?php endif; ?>
															<div class="t-images">
																<div class="t-images-info">
																	<ul>
																		<?php $_from = $this->_var['goods']['goods_img']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'img');if (count($_from)):
    foreach ($_from AS $this->_var['img']):
?>
																		<li><a href="javascript:void(0);" class="img"><img src="<?php echo $this->_var['img']; ?>"></a><a href="<?php echo $this->_var['img']; ?>" class="nyroModal"><i class="icon icon-search"></i></a></li>
																		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
																	</ul>
																</div>
																<a href="javascript:void(0);" class="prev"><i class="iconfont icon-left"></i></a>
																<a href="javascript:void(0);" class="next"><i class="iconfont icon-right"></i></a>
															</div>
														</div>
													</td>
												</tr>
												<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
											</tbody>
										</table>
									</div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['contact_name']; ?>：</div>
                                    <div class="label_value"><?php echo $this->_var['purchase_info']['contact_name']; ?> <?php echo $this->_var['lang']['contact_gender'][$this->_var['purchase_info']['contact_gender']]; ?></div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['contact_phone']; ?>：</div>
                                    <div class="label_value"><?php echo $this->_var['purchase_info']['contact_phone']; ?></div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['contact_email']; ?>：</div>
                                    <div class="label_value"><?php echo $this->_var['purchase_info']['contact_email']; ?></div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['need_invoice_label']; ?>：</div>
                                    <div class="label_value"><?php echo $this->_var['lang']['need_invoice'][$this->_var['purchase_info']['need_invoice']]; ?><?php if ($this->_var['purchase_info']['invoice_tax_rate']): ?> 税率<?php echo $this->_var['purchase_info']['invoice_tax_rate']; ?><?php endif; ?></div>
                                </div>	
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['consignee_region']; ?>：</div>
                                    <div class="label_value"><?php echo $this->_var['purchase_info']['consignee_region']; ?> <?php echo $this->_var['purchase_info']['consignee_address']; ?></div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['description']; ?>：</div>
                                    <div class="label_value"><?php echo $this->_var['purchase_info']['description']; ?></div>
                                </div>								
                                <div class="item">
                                    <div class="label">&nbsp;</div>
                                    <div class="label_value info_btn">
                                        <input type="hidden" name="act" value="<?php echo $this->_var['form_act']; ?>" />
                                        <input type="hidden" name="purchase_id" value="<?php echo $this->_var['purchase_info']['purchase_id']; ?>" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
		</div>
    </div>
 	<?php echo $this->fetch('library/pagefooter.lbi'); ?>
    <?php echo $this->smarty_insert_scripts(array('files'=>'../js/jquery.SuperSlide.2.1.1.js')); ?>
    <script type="text/javascript">	
	$(function(){
		$('.nyroModal').nyroModal();
		$(".t-images").slide({"mainCell":".t-images-info ul",effect:"left",trigger:"click",pnLoop:false,autoPage:true,vis:2,scroll:1});
	});		
    </script>     
</body>
</html>
