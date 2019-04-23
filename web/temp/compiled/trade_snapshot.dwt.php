<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<?php echo $this->fetch('library/js_languages_new.lbi'); ?>
</head>

<body>
	<?php echo $this->fetch('library/page_header_common.lbi'); ?>
    <div class="container trade_snapshot">
    	<div class="w w1200">
        	<div class="product-info">
				<div class="preview">
					<?php echo $this->fetch('library/goods_gallery.lbi'); ?>
				</div>
                <div class="product-wrap<?php if ($this->_var['goods']['user_id']): ?> product-wrap-min<?php endif; ?>">
                	<div class="name"><?php echo $this->_var['goods']['goods_style_name']; ?></div>
					<?php if ($this->_var['goods']['goods_brief']): ?>
                    <div class="newp"><?php echo $this->_var['goods']['goods_brief']; ?></div>
					<?php endif; ?>
                    <div class="summary">
                        <div class="summary-basic-info">
                            <div class="summary-item">
                            	<div class="si-tit"><?php echo $this->_var['lang']['goods_name']; ?></div>
                                <div class="si-warp">
								<?php echo $this->_var['goods']['goods_name']; ?>
                                </div>
                            </div>		
                            <div class="summary-item">
                            	<div class="si-tit"><?php echo $this->_var['lang']['Commodity_number']; ?></div>
                                <div class="si-warp">
								<?php echo $this->_var['goods']['goods_sn']; ?>
                                </div>
                            </div>
							<?php if ($this->_var['goods']['goods_attr']): ?>
                            <div class="summary-item">
                            	<div class="si-tit"><?php echo $this->_var['lang']['attr']; ?></div>
                                <div class="si-warp">
								<?php echo $this->_var['goods']['goods_attr']; ?>
                                </div>
                            </div>	
							<?php endif; ?>							
                            <div class="summary-item">
                            	<div class="si-tit"><?php echo $this->_var['lang']['price']; ?></div>
                                <div class="si-warp">
								<?php echo $this->_var['goods']['shop_price']; ?>
                                </div>
                            </div>
                            <div class="summary-item">
                            	<div class="si-tit"><?php echo $this->_var['lang']['number_to']; ?></div>
                                <div class="si-warp">
								<?php echo $this->_var['goods']['goods_number']; ?>
                                </div>
                            </div>	
                            <div class="summary-item">
                            	<div class="si-tit"><?php echo $this->_var['lang']['freight_p']; ?></div>
                                <div class="si-warp">
								<?php echo $this->_var['goods']['shipping_fee']; ?>
                                </div>
                            </div>									
                            <div class="summary-item is-service">
                            	<div class="si-tit"><?php echo $this->_var['lang']['service']; ?></div>
                                <div class="si-warp">
									<?php echo $this->_var['lang']['you']; ?> <a href="<?php echo $this->_var['goods']['shop_url']; ?>" class="link-red" target="_blank"><?php echo $this->_var['goods']['rz_shopName']; ?></a> <?php echo $this->_var['lang']['After_sale_service']; ?>
								</div>
                            </div>	
                            <div class="summary-item">
                            	<div class="si-tit"><?php echo $this->_var['lang']['snapshot_time']; ?></div>
                                <div class="si-warp">
									<?php echo $this->_var['goods']['snapshot_time']; ?>
								</div>
                            </div>								
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
				<?php if ($this->_var['goods']['ru_id']): ?>
				<div class="seller-pop">
					<div class="seller-info">
						<a href="<?php echo $this->_var['goods']['shop_url']; ?>" title="<?php echo $this->_var['goods']['rz_shopName']; ?>" target="_blank" class="name"><?php echo $this->_var['goods']['rz_shopName']; ?></a>
						<?php if ($this->_var['shop_information']['is_IM'] == 1 || $this->_var['shop_information']['is_dsc']): ?>
							<a id="IM" href="javascript:;" onclick="openWin(this)" goods_id="<?php echo $this->_var['goods']['goods_id']; ?>"><i class="icon i-kefu"></i></a>
						<?php else: ?>
							<?php if ($this->_var['basic_info']['kf_type'] == 1): ?>
							<a href="http://www.taobao.com/webww/ww.php?ver=3&touid=<?php echo $this->_var['basic_info']['kf_ww']; ?>&siteid=cntaobao&status=1&charset=utf-8" target="_blank"><i class="icon i-kefu"></i></a>
							<?php else: ?>
							<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $this->_var['basic_info']['kf_qq']; ?>&site=qq&menu=yes" target="_blank"><i class="icon i-kefu"></i></a>
							<?php endif; ?>
						<?php endif; ?>
					</div>
					<div class="seller-pop-box">
						<div class="s-score">
							<span class="score-icon"><span class="score-icon-bg" style="width:<?php echo $this->_var['merch_cmt']['cmt']['all_zconments']['allReview']; ?>%;"></span></span>
							<span><?php echo $this->_var['merch_cmt']['cmt']['all_zconments']['score']; ?></span>
							<i class="iconfont icon-down"></i>
						</div>
						<div class="g-s-parts">
							<div class="parts-item parts-goods">
								<span class="col1"><?php echo $this->_var['lang']['evaluation_single']; ?></span>
								<span class="col2 <?php if ($this->_var['merch_cmt']['cmt']['commentRank']['zconments']['is_status'] == 1): ?>ftx-02<?php elseif ($this->_var['merch_cmt']['cmt']['commentRank']['zconments']['is_status'] == 2): ?>average<?php else: ?>ftx-01<?php endif; ?>"><?php echo $this->_var['merch_cmt']['cmt']['commentRank']['zconments']['score']; ?><i class="iconfont icon-arrow-<?php if ($this->_var['merch_cmt']['cmt']['commentRank']['zconments']['is_status'] == 1): ?>up<?php elseif ($this->_var['merch_cmt']['cmt']['commentRank']['zconments']['is_status'] == 2): ?>average<?php else: ?>down<?php endif; ?>"></i></span>
							</div>
							<div class="parts-item parts-goods">
								<span class="col1"><?php echo $this->_var['lang']['service_attitude']; ?></span>
								<span class="col2 <?php if ($this->_var['merch_cmt']['cmt']['commentServer']['zconments']['is_status'] == 1): ?>ftx-02<?php elseif ($this->_var['merch_cmt']['cmt']['commentServer']['zconments']['is_status'] == 2): ?>average<?php else: ?>ftx-01<?php endif; ?>"><?php echo $this->_var['merch_cmt']['cmt']['commentServer']['zconments']['score']; ?><i class="iconfont icon-arrow-<?php if ($this->_var['merch_cmt']['cmt']['commentServer']['zconments']['is_status'] == 1): ?>up<?php elseif ($this->_var['merch_cmt']['cmt']['commentServer']['zconments']['is_status'] == 2): ?>average<?php else: ?>down<?php endif; ?>"></i></span>
							</div>
							<div class="parts-item parts-goods">
								<span class="col1"><?php echo $this->_var['lang']['delivery_speed']; ?></span>
								<span class="col2 <?php if ($this->_var['merch_cmt']['cmt']['commentDelivery']['zconments']['is_status'] == 1): ?>ftx-02<?php elseif ($this->_var['merch_cmt']['cmt']['commentDelivery']['zconments']['is_status'] == 2): ?>average<?php else: ?>ftx-01<?php endif; ?>"><?php echo $this->_var['merch_cmt']['cmt']['commentDelivery']['zconments']['score']; ?><i class="iconfont icon-arrow-<?php if ($this->_var['merch_cmt']['cmt']['commentDelivery']['zconments']['is_status'] == 1): ?>up<?php elseif ($this->_var['merch_cmt']['cmt']['commentDelivery']['zconments']['is_status'] == 2): ?>average<?php else: ?>down<?php endif; ?>"></i></span>
							</div>
						</div>
					</div>
					<div class="seller-tel"><i class="iconfont icon-tel"></i><?php echo $this->_var['shop_information']['kf_tel']; ?></div>
				</div>
				<?php endif; ?>
                <div class="clear"></div>
            </div>
			<?php echo $this->fetch('library/goods_fittings.lbi'); ?>	
            <div class="goods-main-layout">
                <div class="g-m-detail">
                	<div class="gm-tabbox" ectype="gm-tabs">
                    	<ul class="gm-tab">
                            <li><?php echo $this->_var['lang']['specification']; ?></li>
							<li><?php echo $this->_var['lang']['description']; ?></li>
                        </ul>
                        <div class="gm-tab-qp-bort" ectype="qp-bort"></div>
                    </div>
                    <div class="gm-floors" ectype="gm-floors">
                    	<div class="gm-f-item gm-f-parameter" ectype="gm-item">
                            <dl class="goods-para">
                                <dd class="column"><span><?php echo $this->_var['lang']['goods_name']; ?>：<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?></span></dd>
                                <dd class="column"><span><?php echo $this->_var['lang']['Commodity_number']; ?>：<?php echo $this->_var['goods']['goods_sn']; ?></span></dd>
                                <dd class="column"><span><?php echo $this->_var['lang']['seller_store']; ?>：<a href="<?php echo $this->_var['goods']['store_url']; ?>" title="<?php echo $this->_var['goods']['rz_shopName']; ?>" target="_blank"><?php echo $this->_var['goods']['rz_shopName']; ?></a></span></dd>
                                <?php if ($this->_var['cfg']['show_goodsweight']): ?>
                                <dd class="column"><span><?php echo $this->_var['lang']['weight']; ?>：<?php echo $this->_var['goods']['goods_weight']; ?></span></dd>
                                <?php endif; ?>
                                <?php if ($this->_var['cfg']['show_addtime']): ?>
                                <dd class="column"><span><?php echo $this->_var['lang']['add_time']; ?><?php echo $this->_var['goods']['add_time']; ?></span></dd>
                                <?php endif; ?>
                            </dl>
                        
							<?php if ($this->_var['properties']): ?>
                        	<dl class="goods-para">
								<?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?>
								<?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
                                <dd class="column"><span title="<?php echo $this->_var['property']['value']; ?>"><?php echo htmlspecialchars($this->_var['property']['name']); ?>：<?php echo $this->_var['property']['value']; ?></span></dd>
								<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
								<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </dl>
							<?php endif; ?>
							<?php if ($this->_var['extend_info']): ?>
							<dl class="goods-para">
								<?php $_from = $this->_var['extend_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'info');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['info']):
?>	
								<dd class="column"><span title="<?php echo htmlspecialchars($this->_var['info']); ?>"><?php echo $this->_var['key']; ?>：<?php echo htmlspecialchars($this->_var['info']); ?></span></dd>
								<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
							</dl>
							<?php endif; ?>
                        </div>
                        <div class="gm-f-item gm-f-details" ectype="gm-item">
                        	<div class="gm-title">
                            	<h3><?php echo $this->_var['lang']['description']; ?></h3>
                            </div>
                            <?php echo $this->_var['goods']['goods_desc']; ?>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery.purebox.js"></script>
    <script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/dsc-common.js"></script>
    <?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
