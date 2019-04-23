<div class="tbar-panel-main" ectype="tbpl-main">
	<div class="tbar-panel-content" data-height="48" ectype="tbpl-content">
        <div class="order-list">
            <ul class="s-li-con">
                <?php $_from = $this->_var['order_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'orders');if (count($_from)):
    foreach ($_from AS $this->_var['orders']):
?>
                <li>
                    <span class="s-time"><?php echo $this->_var['orders']['order_time']; ?></span>
                    <div class="s-item">
                        <div class="s-img">
                        	<div class="bd">
                                <ul>
                                    <?php $_from = $this->_var['orders']['order_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods']['iteration']++;
?>
                                    <?php $this->assign('order_goods_num',$this->_foreach['goods']['iteration']); ?>
                                    <li><a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" width="50" height="50" /></a></li>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </ul>
                            </div>
                            <?php if ($this->_var['order_goods_num'] > 4): ?>
                            <a href="javascript:void(0);" class="prev"><b class="iconfont icon-left"></b></a>
                            <a href="javascript:void(0);" class="next"><b class="iconfont icon-right"></b></a>
                            <?php endif; ?>
                        </div>
                        <span class="s-pay-info">
                            <span class="s-price"><?php echo $this->_var['orders']['total_fee']; ?></span>
                            <span class="s-client"><?php echo $this->_var['orders']['consignee']; ?></span>
                            <span class="s-pay"><?php echo $this->_var['orders']['pay_name']; ?></span>
                        </span>
                        <span class="s-status-info">
                            <a href="user.php?act=order_detail&order_id=<?php echo $this->_var['orders']['order_id']; ?>" target="_blank" class="s-look-detail"><?php echo $this->_var['lang']['view']; ?></a>
                            <a href="user.php?act=track_packages" target="_blank" class="s-track"><?php echo $this->_var['lang']['Track']; ?>&gt;</a>
                        </span>
                    </div>
                </li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
            <a href="user.php?act=order_list" target="_blank" class="s-btn"><?php echo $this->_var['lang']['View_all_orders']; ?></a>
        </div>
    </div>
</div>
<script>
$(".s-img").slide({titCell:"",mainCell:".bd ul",effect:"left",autoPlay:false,autoPage:true,trigger:"click",vis:4,scroll:1});
</script>   