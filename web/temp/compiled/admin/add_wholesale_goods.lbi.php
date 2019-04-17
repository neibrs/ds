<div class="modal-body">
	<div class="body_info floor_info">
        <div class="search">
            <div class="select_box mr10">
                <div class="categorySelect fl">
                    <div class="selection">
                        <input type="text" name="category_name" id="category_name" class="text w250 mr0 valid" value="<?php if ($this->_var['parent_category']): ?><?php echo $this->_var['parent_category']; ?><?php else: ?>顶级分类<?php endif; ?>" autocomplete="off" readonly data-filter="cat_name" />
                        <input type="hidden" name="cat_id" id="category_id" value="<?php echo empty($this->_var['cat_id']) ? '0' : $this->_var['cat_id']; ?>" data-filter="cat_id" />
                    </div>
                    <div class="select-container" style="display:none;">
                        <?php echo $this->fetch('library/filter_category.lbi'); ?>
                    </div>
                </div>
            </div>
            <div class="select_box mr10">
                <div class="categorySelect fl">
                    <div class="selection">
                        <input type="text" name="brand_name" id="brand_name" class="text w120 mr0 valid" value="<?php echo $this->_var['lang']['select_barnd']; ?>" autocomplete="off" readonly data-filter="brand_name" />
                        <input type="hidden" name="brand_id" id="brand_id" value="<?php echo empty($this->_var['brand_id']) ? '0' : $this->_var['brand_id']; ?>" data-filter="brand_id" />
                    </div>
                    <div class="brand-select-container" style="display:none;">
                        <?php echo $this->fetch('library/filter_brand.lbi'); ?>
                    </div>
                </div>  
            </div>			

            <div class="search_con mr10"><input width="20" name="keyword_brand" type="text" id="keyword_brand" class="text text_6 mr0"></div>
            <a href="javascript:void(0);" class="sc-btn fl" ectype="changedgoods">确定</a>
            <div class="checkobx-item">
                <input type="checkbox" name="is_selected" id="is_selected" class="ui-checkbox" onclick="checkd_selected(this)"/>
                <label class="ui-label" for="is_selected">已选择商品</label>
            </div>
        </div>
        <div class="table_list" ectype='goods_list'>
            <div class="gallery_album" data-act="changedgoods" data-goods='1' data-inid="goods_list" data-url='get_ajax_content.php' data-where="cat_id=<?php echo $this->_var['filter']['cat_id']; ?>&sort_order=<?php echo $this->_var['filter']['sort_order']; ?>&keyword=<?php echo $this->_var['filter']['keyword']; ?>&type=1">
                <ul class="ga-goods-ul" id="goods_list">
                    <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['gl'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['gl']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['gl']['iteration']++;
?>
                    <li class="on">
                        <div class="img"><img src="../<?php echo $this->_var['goods']['goods_thumb']; ?>"></div>
                        <div class="name"><?php echo $this->_var['goods']['goods_name']; ?></div>
                        <div class="price"><?php echo $this->_var['goods']['shop_price']; ?></div>
                        <div class="choose"><a href="javascript:void(0);" class="on" onclick="selected_goods(this,'<?php echo $this->_var['goods']['goods_id']; ?>','<?php echo $this->_var['goods']['goods_name']; ?>')"><i class="icon icon-ok"></i>已选择</a></div>
                    </li>
                    <?php endforeach; else: ?>
                    <li class="notic">请先搜索商品</li>
                    <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
            </div>
        </div>
    </div>
    <input type="hidden" name="goods_ids" value="<?php echo $this->_var['arr']['goods_ids']; ?>"/>
	<input type="hidden" name="goods_name" value=''>
</div>
<script type="text/javascript" src="js/dsc_admin2.0.js"></script>
<script language="JavaScript">
    ajaxchangedgoods(1);
    function checkd_selected(obj){
		var obj = $(obj);
		var is_selected =$("input[name='is_selected']").is(':checked');
		var length = obj.parents(".floor_info").find(".table_list li.on").length;
		var goods_ids = $("input[name='goods_ids']").val();
		var type = 1;
        if(is_selected == true){
            $(".icon-ok").parents('li').show();
			$(".icon-plus").parents('li').hide();
			
			if(length < 6){
				$("*[ectype='goods_list']").perfectScrollbar("destroy");
			}
            type = 0;
        }else{
            $(".icon-ok,.icon-plus").parents('li').show();
			$("*[ectype='goods_list']").perfectScrollbar();
        }
        ajaxchangedgoods(type);
    }
    
    function ajaxchangedgoods(type){
        var cat_id = $("input[name='cat_id'][data-filter='cat_id']").val();
		var brand_id = $("input[name='brand_id']").val();
        var keyword = $("input[name='keyword_brand']").val();
        var goods_ids = $("input[name='goods_ids']").val();
		
		$("[ectype='goods_list']").html("<i class='icon-spin'><img src='images/visual/load.gif' width='30' height='30'></i>");
		
		function ajax(){
			Ajax.call('wholesale.php?is_ajax=1&act=changedgoods', "cat_id="+cat_id+"&keyword="+keyword+"&goods_ids="+goods_ids+"&type="+type + "&resetRrl=1"+"&brand_id="+brand_id, function(data){
				$("[ectype='goods_list']").html(data.content);
				
				$("*[ectype='goods_list']").perfectScrollbar("destroy");
				$("*[ectype='goods_list']").perfectScrollbar();
			} , 'POST', 'JSON');
		}
		
		setTimeout(function(){ajax()},300);
    }

	//选中商品
	function selected_goods(obj,goods_id,goods_name){
		var obj = $(obj);
		var arr = '';
		var goods_ids = $("input[name='goods_ids']").val();
		var goods_names = $("input[name='goods_name']").val();
	   
		if(obj.hasClass("on")){
			obj.removeClass("on");
			obj.html('<i class="icon icon-plus"></i>选择');
			arr = goods_ids;
			val = goods_names;
			
		}else{
			$(obj).parents("li").siblings().find('a.on').removeClass("on");
			$(obj).parents("li").siblings().find('a').html('<i class="icon icon-plus"></i>选择');
			$(obj).addClass('on');
			$(obj).html('<i class="icon icon-ok"></i>已选择');
			arr = goods_id;
			val = goods_name;
		}
		$("input[name='goods_ids']").val(arr);
		$("input[name='goods_name']").val(val);
	}
	
	$("input[name='is_title']").on("click",function(){
		var val = $(this).val();
		if(val == 1){
			$(this).parents(".control_list").find(".tit_head").show();
		}else{
			$(this).parents(".control_list").find(".tit_head").hide();
		}
	});
	
	//搜索商品
	$(document).on("click","*[ectype='changedgoods']",function(){
		ajaxchangedgoods(1);
	});
	
	$(".select-container").hover(function(){
		$(".select-list").perfectScrollbar("destroy");
		$(".select-list").perfectScrollbar();
	});	
</script>