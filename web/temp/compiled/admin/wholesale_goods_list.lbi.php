<div class="gallery_album" data-act="<?php if ($this->_var['action']): ?><?php echo $this->_var['action']; ?><?php else: ?>changedgoods<?php endif; ?>" data-goods='1' data-inid="goods_list" data-url='<?php if ($this->_var['action']): ?><?php echo $this->_var['url']; ?><?php else: ?>get_ajax_content.php<?php endif; ?>' data-where="cat_id=<?php echo $this->_var['filter']['cat_id']; ?>&sort_order=<?php echo $this->_var['filter']['sort_order']; ?>&keyword=<?php echo $this->_var['filter']['keyword']; ?>&type=1&PromotionType=<?php echo $this->_var['PromotionType']; ?>">
	<ul class="ga-goods-ul" id="goods_list">
		<?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['gl'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['gl']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['gl']['iteration']++;
?>
		<li class="<?php if ($this->_var['goods']['is_selected'] == 1): ?>on<?php endif; ?>">
			<div class="img"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>"></div>
			<div class="name"><?php echo $this->_var['goods']['goods_name']; ?></div>
			<div class="price">
				<?php if ($this->_var['PromotionType'] == 'exchange'): ?>
					<?php echo $this->_var['goods']['exchange_integral']; ?>
				<?php else: ?>
					<?php if ($this->_var['goods']['promote_price'] != ''): ?>
						<?php echo $this->_var['goods']['promote_price']; ?>
					<?php else: ?>
						<?php echo $this->_var['goods']['shop_price']; ?>
					<?php endif; ?>
				<?php endif; ?>
			</div>
			<div class="choose">
				<a href="javascript:void(0);" <?php if ($this->_var['goods']['is_selected'] == 1): ?>class="on"<?php endif; ?> onclick="selected_goods(this,'<?php echo $this->_var['goods']['goods_id']; ?>','<?php echo $this->_var['goods']['goods_name']; ?>')"><i class="icon <?php if ($this->_var['goods']['is_selected'] == 1): ?>icon-ok<?php else: ?>icon-plus<?php endif; ?>"></i><?php if ($this->_var['goods']['is_selected'] == 1): ?>已选择<?php else: ?>选择<?php endif; ?></a>
				<?php if ($this->_var['PromotionType']): ?>
				<div class="checkbox_item"> 
					<input name="recommend" type="radio" class="ui-radio" value="<?php echo $this->_var['goods']['goods_id']; ?>" id="recommend<?php echo $this->_var['goods']['goods_id']; ?>"<?php if ($this->_var['goods']['goods_id'] == $this->_var['recommend']): ?> checked="checked"<?php endif; ?>>
					<label for="recommend<?php echo $this->_var['goods']['goods_id']; ?>" class="ui-radio-label-shou"><i class="iconfont icon-thumb"></i>主推</label>
				</div>
				<?php endif; ?>
			</div>
		</li>
		<?php endforeach; else: ?>
		<li class="notic">该分类下没有商品</li>
		<?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</ul>
	<div class="clear"></div>
	<?php if ($this->_var['filter']['page_count'] > 1): ?>
	<div class="pagination mt10" >
		<ul>
			<li><?php if ($this->_var['filter']['page'] != 1): ?><a class="demo" href="javascript:;" onclick="sec_gallery_album_list(this,'1')"><span>首页</span></a><?php else: ?><span>首页</span><?php endif; ?></li>
			<li><?php if ($this->_var['filter']['page'] != 1): ?><a class="demo" href="javascript:;" onclick="sec_gallery_album_list(this,'<?php echo $this->_var['filter']['page']; ?>','prev')" ><span>上一页</span></a><?php else: ?><span>上一页</span><?php endif; ?></li>
			<?php $_from = $this->_var['filter']['page_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'arr');if (count($_from)):
    foreach ($_from AS $this->_var['arr']):
?>
			<li><?php if ($this->_var['filter']['page'] == $this->_var['arr']): ?><span class="currentpage"><?php echo $this->_var['arr']; ?></span><?php else: ?><a class="demo" href="javascript:;" onclick="sec_gallery_album_list(this,'<?php echo $this->_var['arr']; ?>')" ><span><?php echo $this->_var['arr']; ?></span></a><?php endif; ?></li>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			<li><?php if ($this->_var['filter']['page'] != $this->_var['filter']['page_count']): ?><a class="demo" href="javascript:;" onclick="sec_gallery_album_list(this,'<?php echo $this->_var['filter']['page']; ?>','next')" ><span>下一页</span></a><?php else: ?><span>下一页</span><?php endif; ?></li>
			<li><?php if ($this->_var['filter']['page'] != $this->_var['filter']['page_count']): ?><a class="demo" href="javascript:;" onclick="sec_gallery_album_list(this,'<?php echo $this->_var['filter']['page_count']; ?>')"><span>末页</span></a><?php else: ?><span>末页</span><?php endif; ?></li>
		</ul>
	</div>
	<?php endif; ?>
</div>
<script type="text/javascript">
function sec_gallery_album_list(obj,page,type) {
        var _this = $(obj).parents('.gallery_album');
        var where = '';
        var inid = _this.data("inid");
        var act = _this.data("act");
        var actionUrl = _this.data("url");
        var datawhere = _this.data("where");
        var url = 'wholesale.php';
        var is_goods = _this.data("goods");
        page = parseInt(page);
        if(page){
            //下一页
            if(type == 'next'){
                page = page+1;
            }
            //上一页
            else if(type == 'prev'){
                page = page-1;
            }
            where = "&page="+page;
        }
        if(datawhere){
            where += "&" + datawhere;
        }
        if(is_goods == 1){
            var goods_ids = $(obj).parents(".modal-body").find("input[name='goods_ids']").val();
            where += "&goods_ids=" + goods_ids;
        }
        $.jqueryAjax(url, 'act='+act + where, function(data){
			$("[ectype='"+inid+"']").html(data.content);
			$("[ectype='"+inid+"']").perfectScrollbar("destroy");
			$("[ectype='"+inid+"']").perfectScrollbar();
        });
};
</script>

