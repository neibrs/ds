<?php if ($this->_var['full_page']): ?>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><?php echo $this->_var['lang']['promotion']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
            <?php echo $this->fetch('library/common_tabs_info.lbi'); ?>
        	<div class="explanation" id="explanation">
            	<div class="ex_tit">
					<i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span>
                    <?php if ($this->_var['open'] == 1): ?>
                    <div class="view-case">
                    	<div class="view-case-tit"><i></i><?php echo $this->_var['lang']['view_tutorials']; ?></div>
                        <div class="view-case-info">
                        	<a href="http://help.ecmoban.com/article-6553.html" target="_blank"><?php echo $this->_var['lang']['tutorials_bonus_list_one']; ?></a>
                        </div>
                    </div>			
                    <?php endif; ?>				
				</div>
                <ul>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['list']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['list']['1']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['list']['2']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
            	<div class="common-head">
                	<div class="fl">
                        <a href="favourable.php?act=add"><div class="fbutton"><div class="add" title="<?php echo $this->_var['lang']['add_favourable']; ?>"><span><i class="icon icon-plus"></i><?php echo $this->_var['lang']['add_favourable']; ?></span></div></div></a>
                    </div>
                    <div class="refresh">
                    	<div class="refresh_tit" title="<?php echo $this->_var['lang']['refresh_data']; ?>"><i class="icon icon-refresh"></i></div>
                    	<div class="refresh_span"><?php echo $this->_var['lang']['refresh_common']; ?><?php echo $this->_var['record_count']; ?><?php echo $this->_var['lang']['record']; ?></div>
                    </div>					
                    <div class="search">
                    	<form action="javascript:;" name="searchForm" onSubmit="searchGoodsname(this);">
                        <?php if ($this->_var['common_tabs']['info']): ?>
                        <div class="select m0">
                            <div class="imitate_select select_w170">
                                <div class="cite"><?php echo $this->_var['lang']['adopt_status']; ?></div>
                                <ul>
                                    <li><a href="javascript:;" data-value="0" class="ftx-01"><?php echo $this->_var['lang']['adopt_status']; ?></a></li>
                                    <li><a href="javascript:;" data-value="1" class="ftx-01"><?php echo $this->_var['lang']['not_audited']; ?></a></li>
                                    <li><a href="javascript:;" data-value="2" class="ftx-01"><?php echo $this->_var['lang']['audited_not_adopt']; ?></a></li>
                                    <li><a href="javascript:;" data-value="3" class="ftx-01"><?php echo $this->_var['lang']['audited_yes_adopt']; ?></a></li>
                                </ul>
                                <input name="review_status" type="hidden" value="0" id="">
                            </div>
                        </div>
                        <?php endif; ?>
                    	<div class="input">
                        	<input type="text" name="keyword" class="text nofocus" placeholder="<?php echo $this->_var['lang']['act_name']; ?>" autocomplete="off" />
                            <input type="submit" class="btn" name="secrch_btn" ectype="secrch_btn" value="" />
                        </div>
                        </form>
                    </div>
                </div>
                <div class="common-content">
					<form method="post" action="" name="listForm">
                	<div class="list-div" id="listDiv" >
					<?php endif; ?>
                    	<table cellpadding="1" cellspacing="1" >
                        	<thead>
                            	<tr>
                                	<th width="3%" class="sign"><div class="tDiv"><input type="checkbox" name="all_list" class="checkbox" id="all_list" /><label for="all_list" class="checkbox_stars"></label></div></th>
                                    <th width="5%"><div class="tDiv"><?php echo $this->_var['lang']['record_id']; ?></div></th>
                                    <th width="20%"><div class="tDiv"><?php echo $this->_var['lang']['act_name']; ?></div></th>
                                    <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['goods_steps_name']; ?></div></th>
                                    <th width="12%"><div class="tDiv"><?php echo $this->_var['lang']['start_time']; ?></div></th>
                                    <th width="12%"><div class="tDiv"><?php echo $this->_var['lang']['end_time']; ?></div></th>
                                    <th width="9%"><div class="tDiv"><?php echo $this->_var['lang']['min_amount']; ?></div></th>
                                    <th width="9%"><div class="tDiv"><?php echo $this->_var['lang']['max_amount']; ?></div></th>
                                    <th width="9%"><div class="tDiv"><?php echo $this->_var['lang']['sort_order']; ?></div></th>
                                    <th width="8%"><div class="tDiv"><?php echo $this->_var['lang']['adopt_status']; ?></div></th>
                                    <th width="11%" class="handle"><?php echo $this->_var['lang']['handler']; ?></th>
                                </tr>
                            </thead>
                            <tbody>
							<?php $_from = $this->_var['favourable_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'favourable');if (count($_from)):
    foreach ($_from AS $this->_var['favourable']):
?>
                            	<tr>
                                	<td class="sign">
                                        <div class="tDiv">
                                            <input type="checkbox" name="checkboxes[]" value="<?php echo $this->_var['favourable']['act_id']; ?>" class="checkbox" id="checkbox_<?php echo $this->_var['favourable']['act_id']; ?>" />
                                            <label for="checkbox_<?php echo $this->_var['favourable']['act_id']; ?>" class="checkbox_stars"></label>
                                        </div>
                                    </td>
                                    <td><div class="tDiv"><?php echo $this->_var['favourable']['act_id']; ?></div></td>
								    <td><div class="tDiv overflow_view"><span title="<?php echo htmlspecialchars($this->_var['favourable']['act_name']); ?><?php if ($this->_var['favourable']['userFav_type'] && $this->_var['priv_ru'] == 0): ?>(<?php echo $this->_var['lang']['general_audience']; ?>)<?php endif; ?>" data-toggle="tooltip"><?php echo htmlspecialchars($this->_var['favourable']['act_name']); ?><?php if ($this->_var['favourable']['userFav_type'] && $this->_var['priv_ru'] == 0): ?>(<?php echo $this->_var['lang']['general_audience']; ?>)<?php endif; ?></span></div></td>
                                    <?php if ($this->_var['priv_ru'] == 1): ?>
									<?php if ($this->_var['favourable']['userFav_type']): ?>
										<td><div class="tDiv"><font class="red"><?php echo $this->_var['lang']['general_audience']; ?></font></div></td>  
									<?php else: ?>
										<td><div class="tDiv"><?php if ($this->_var['favourable']['user_name']): ?><font class="red"><?php echo $this->_var['favourable']['user_name']; ?><?php if ($this->_var['favourable']['rs_name']): ?>（<?php echo $this->_var['favourable']['rs_name']; ?>）<?php endif; ?></font><?php else: ?><font class="blue"><?php echo $this->_var['lang']['self']; ?><?php if ($this->_var['favourable']['rs_name']): ?>（<?php echo $this->_var['favourable']['rs_name']; ?>）<?php endif; ?></font><?php endif; ?></div></td>   
									<?php endif; ?>
								    <?php endif; ?>
                                    <td><div class="tDiv"><?php echo $this->_var['favourable']['start_time']; ?></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['favourable']['end_time']; ?></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['favourable']['min_amount']; ?></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['favourable']['max_amount']; ?></div></td>
                                    <td><div class="tDiv"><input name="sort_order" class="text w40" value="<?php echo $this->_var['favourable']['sort_order']; ?>" onkeyup="listTable.editInput(this, 'edit_sort_order',<?php echo $this->_var['favourable']['act_id']; ?> )" type="text"></div></td> 
                                    <td>
                                    	<div class="tDiv">
                                            <?php if ($this->_var['favourable']['review_status'] == 1): ?>
                                            <font class="org2"><?php echo $this->_var['lang']['not_audited']; ?></font>
                                            <?php elseif ($this->_var['favourable']['review_status'] == 2): ?>
                                            <font class="red"><?php echo $this->_var['lang']['audited_not_adopt']; ?></font><br/>
                                            <i class="tip yellow" title="<?php echo $this->_var['favourable']['review_content']; ?>" data-toggle="tooltip"><?php echo $this->_var['lang']['prompt']; ?></i>
                                            <?php elseif ($this->_var['favourable']['review_status'] == 3): ?>
                                            <font class="blue"><?php echo $this->_var['lang']['audited_yes_adopt']; ?></font>
                                            <?php endif; ?>									
                                        </div>
                                    </td> 
                                    <td class="handle">
										<div class="tDiv a2">
											<a href="favourable.php?act=edit&amp;id=<?php echo $this->_var['favourable']['act_id']; ?>&ru_id=<?php echo $this->_var['favourable']['user_id']; ?>" title="<?php echo $this->_var['lang']['edit']; ?>" class="btn_edit"><i class="icon icon-edit"></i><?php echo $this->_var['lang']['edit']; ?></a>
											<?php if ($this->_var['favourable']['userFav_type'] == 0 || $this->_var['priv_ru']): ?>
											<a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['favourable']['act_id']; ?>,'<?php echo $this->_var['lang']['drop_confirm']; ?>')" title="<?php echo $this->_var['lang']['remove']; ?>" class="btn_trash"><i class="icon icon-trash"></i><?php echo $this->_var['lang']['drop']; ?></a>	
											<?php endif; ?> 											
										</div>
									</td>
                                </tr>
							<?php endforeach; else: ?>
								<tr><td class="no-records" align="center" colspan="12"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
							<?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </tbody>
                            <tfoot>
                            	<tr>
									<td colspan="12">
                                        <div class="tDiv">
                                            <?php if ($this->_var['filter']['seller_list'] == 1): ?>
											<div class="tfoot_btninfo">
												<input type="hidden" value="batch" name="act">
												<div class="item">
													<div id="drop_select" class="imitate_select select_w120">
													  <div class="cite"><?php echo $this->_var['lang']['select_please']; ?></div>
													  <ul>
														 <li><a href="javascript:;" data-value="" class="ftx-01"><?php echo $this->_var['lang']['select_please']; ?></a></li>
														 <li><a href="javascript:;" data-value="batch_remove" class="ftx-01"><?php echo $this->_var['lang']['drop']; ?></a></li>
														 <li><a href="javascript:;" data-value="review_to" class="ftx-01"><?php echo $this->_var['lang']['check']; ?></a></li>
													  </ul>
													  <input name="type" type="hidden" value=""  id="drop_val">
													</div>
												</div>
												<div class="item" style="display: none;" id="review_status">
													<div id="review_status_select" class="imitate_select select_w120">
													  <div class="cite"><?php echo $this->_var['lang']['select_please']; ?></div>
													  <ul>
														 <li><a href="javascript:;" data-value="2" class="ftx-01"><?php echo $this->_var['lang']['audited_not_adopt']; ?></a></li>
														 <li><a href="javascript:;" data-value="3" class="ftx-01"><?php echo $this->_var['lang']['audited_adopt']; ?></a></li>
													  </ul>
													  <input name="review_status" type="hidden" value="0" id="review_status_val">
													</div>
												</div>
												<input name="review_content" type="text" value="" class="text text_2 mr10 lh26" style="display:none" />
												<input type="submit" value="<?php echo $this->_var['lang']['button_submit_alt']; ?>" name="remove" ectype="btnSubmit" class="btn btn_disabled" disabled="">
											</div>
											<?php else: ?>
											<div class="tfoot_btninfo">
												<div class="shenhe">
													<input type="submit" name="drop" id="btnSubmit" value="<?php echo $this->_var['lang']['drop']; ?>" class="btn btn_disabled" disabled="true" ectype="btnSubmit" />
													<input type="hidden" name="act" value="batch" />
													<input name="type" type="hidden" value="batch_remove"  id="drop_val">
												</div>										
											</div>
											<?php endif; ?>
                                            <div class="list-page">
                                                <?php echo $this->fetch('library/page.lbi'); ?>
                                            </div>
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
	
	<!--高级搜索 start-->
	<div class="gj_search">
		<div class="search-gao-list" id="searchBarOpen"><i class="icon icon-zoom-in"></i><?php echo $this->_var['lang']['advanced_search']; ?></div>
		<div class="search-gao-bar">
			<div class="handle-btn" id="searchBarClose"><i class="icon icon-zoom-out"></i><?php echo $this->_var['lang']['pack_up']; ?></div>
			<div class="title"><h3><?php echo $this->_var['lang']['advanced_search']; ?></h3></div>
			<form action="javascript:searchActivity()" name="searchHighForm">
				<div class="searchContent">
					<div class="layout-box">
						<dl>
							<dd>
								<div class="checkbox_items">
									<div class="checkbox_item">
										<input type="checkbox" class="ui-checkbox" name="is_going" id="is_going_1" value="1" />
										<label for="is_going_1" class="ui-label"><?php echo $this->_var['lang']['act_is_going']; ?></label>
									</div>
								</div>							
							</dd>
						</dl>
                        <?php if (! $this->_var['common_tabs']['info']): ?>
						<dl>
							<dt><?php echo $this->_var['lang']['use_type']; ?>：</dt>
							<dd>
								<div id="" class="imitate_select select_w145">
									<div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
									<ul>
										<li><a href="javascript:;" data-value="0" class="ftx-01"><?php echo $this->_var['lang']['please_select']; ?></a></li>
										<li><a href="javascript:;" data-value="4" class="ftx-01"><?php echo $this->_var['lang']['self']; ?></a></li>
										<li><a href="javascript:;" data-value="3" class="ftx-01"><?php echo $this->_var['lang']['full_court']; ?></a></li>
									</ul>
									<input name="use_type" type="hidden" value="0" id="">
								</div>
							</dd>
						</dl>
                        <?php endif; ?>
                        <!--卖场 start-->
                        <?php if ($this->_var['rs_enabled'] && ! $this->_var['rs_id']): ?>
                        <dl>
                            <dt><?php echo $this->_var['lang']['rs_name']; ?></dt>
                            <dd>
                                <div id="" class="imitate_select select_w145">
                                    <div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
                                    <ul>
                                        <li><a href="javascript:;" data-value="0" class="ftx-01"><?php echo $this->_var['lang']['please_select']; ?></a></li>
                                        <?php $_from = $this->_var['region_store_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'data');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['data']):
?>
                                        <li><a href="javascript:;" data-value="<?php echo $this->_var['data']['rs_id']; ?>" class="ftx-01"><?php echo $this->_var['data']['rs_name']; ?></a></li>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </ul>
                                    <input name="rs_id" type="hidden" value="<?php echo empty($_GET['rs_id']) ? '0' : $_GET['rs_id']; ?>" autocomplete="off">
                                </div>
                            </dd>
                        </dl>
                        <?php endif; ?>
                        <!--卖场 end-->
                        <?php if ($this->_var['common_tabs']['info']): ?>
                        <dl>
                        	<dt><?php echo $this->_var['lang']['steps_shop_name']; ?></dt>
                            <dd>
                                <div id="shop_name_select" class="select_w145 imitate_select">
                                    <div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
                                    <ul>
                                       <li><a href="javascript:;" data-value="0"><?php echo $this->_var['lang']['select_please']; ?></a></li>
                                       <li><a href="javascript:;" data-value="1"><?php echo $this->_var['lang']['s_shop_name']; ?></a></li>
                                       <li><a href="javascript:;" data-value="2"><?php echo $this->_var['lang']['s_qw_shop_name']; ?></a></li>
                                       <li><a href="javascript:;" data-value="3"><?php echo $this->_var['lang']['s_brand_type']; ?></a></li>
                                    </ul>
                                    <input name="store_search" type="hidden" value="0" id="shop_name_val">
                                </div>
                            </dd>
                        </dl>
                        <?php endif; ?>
                        <dl style="display:none" id="merchant_box">
                            <dd>
                                <div class="select_w145 imitate_select">
                                    <div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
                                    <ul>
                                       <li><a href="javascript:;" data-value="0"><?php echo $this->_var['lang']['please_select']; ?></a></li>
                                       <?php $_from = $this->_var['store_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'store');if (count($_from)):
    foreach ($_from AS $this->_var['store']):
?>
                                       <li><a href="javascript:;" data-value="<?php echo $this->_var['store']['ru_id']; ?>"><?php echo $this->_var['store']['store_name']; ?></a></li>
                                       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </ul>
                                    <input name="merchant_id" type="hidden" value="0" >
                                </div>
                            </dd>
                        </dl>
                        <dl id="store_keyword" style="display:none" >
                            <dd><input type="text" value="" name="store_keyword" class="s-input-txt" autocomplete="off" /></dd>
                        </dl>
                        <dl style="display:none" id="store_type">
                            <dd>
                                <div class="select_w145 imitate_select">
                                    <div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
                                    <ul>
                                       <li><a href="javascript:;" data-value="0"><?php echo $this->_var['lang']['steps_shop_type']; ?></a></li>
                                       <li><a href="javascript:;" data-value="<?php echo $this->_var['lang']['flagship_store']; ?>"><?php echo $this->_var['lang']['flagship_store']; ?></a></li>
                                       <li><a href="javascript:;" data-value="<?php echo $this->_var['lang']['exclusive_shop']; ?>"><?php echo $this->_var['lang']['exclusive_shop']; ?></a></li>
                                       <li><a href="javascript:;" data-value="<?php echo $this->_var['lang']['franchised_store']; ?>"><?php echo $this->_var['lang']['franchised_store']; ?></a></li>
                                       <li><a href="javascript:;" data-value="<?php echo $this->_var['lang']['shop_store']; ?>"><?php echo $this->_var['lang']['shop_store']; ?></a></li>
                                    </ul>
                                    <input name="store_type" type="hidden" value="0" >
                                </div>
                            </dd>
                        </dl>
						<dl>
							<dd>
								<input type="text" name="keyword" class="text nofocus" placeholder="<?php echo $this->_var['lang']['act_name']; ?>" autocomplete="off" />
							</dd>
						</dl>						
						<dl class="bot_btn">
                            <dd>
							   <input type="submit" class="btn red_btn" name="tj_search" value="<?php echo $this->_var['lang']['button_inquire']; ?>" /><input type="reset" class="btn btn_reset" name="reset" value="<?php echo $this->_var['lang']['button_reset_alt']; ?>" />
							</dd>
						</dl>
					</div>
				</div>
			</form>
		</div>
	</div>	
	<?php echo $this->fetch('library/pagefooter.lbi'); ?>

	<script type="text/javascript">
		//分页传值
		listTable.recordCount = <?php echo empty($this->_var['record_count']) ? '0' : $this->_var['record_count']; ?>;
		listTable.pageCount = <?php echo empty($this->_var['page_count']) ? '1' : $this->_var['page_count']; ?>;

		<?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
		listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		
		$.gjSearch("-240px");  //高级搜索
		
		$.divselect("#shop_name_select","#shop_name_val",function(obj){
			var val = obj.attr("data-value");
			get_store_search(val);
		});
		
		function get_store_search(val){
			if(val == 1){
				$("#merchant_box").css("display",'');
				$("#store_keyword").css("display",'none');
				$("#store_type").css("display",'none')
			}else if(val == 2){
				$("#merchant_box").css("display",'none');
				$("#store_keyword").css("display",'');
				$("#store_type").css("display",'none')
			}else if(val == 3){
				$("#merchant_box").css("display",'none');
				$("#store_keyword").css("display",'');
				$("#store_type").css("display",'')
			}else{
				$("#merchant_box").css("display",'none');
				$("#store_keyword").css("display",'none');
				$("#store_type").css("display",'none')
			}
		}
		
		/* 搜索活动*/
		function searchActivity(){
			<?php if ($this->_var['priv_ru'] == 1): ?>
			listTable.filter['store_search'] = Utils.trim(document.forms['searchHighForm'].elements['store_search'].value);
			listTable.filter['merchant_id'] = Utils.trim(document.forms['searchHighForm'].elements['merchant_id'].value);
			listTable.filter['store_keyword'] = Utils.trim(document.forms['searchHighForm'].elements['store_keyword'].value);
			listTable.filter['store_type'] = Utils.trim(document.forms['searchHighForm'].elements['store_type'].value);
				//卖场 start
				<?php if ($this->_var['rs_enabled'] && ! $this->_var['rs_id']): ?>
				listTable.filter['rs_id'] = Utils.trim(document.forms['searchHighForm'].elements['rs_id'].value);
				<?php endif; ?>
				//卖场 end
			<?php endif; ?>

			var use_type = Utils.trim(document.forms['searchHighForm'].elements['use_type'].value);
			var keyword = Utils.trim(document.forms['searchHighForm'].elements['keyword'].value);
			listTable.filter['use_type'] = use_type;
			listTable.filter['keyword'] = keyword;
			
			if(document.forms['searchHighForm'].elements['is_going'].checked){
				listTable.filter['is_going'] = 1;
			}else{
				listTable.filter['is_going'] = 0;
			}
			
			listTable.filter['page'] = 1;
			listTable.loadList("favourable_list");
		}
		
	$.divselect("#drop_select","#drop_val",function(obj){
		changeAction();
	});
	
	function changeAction()
	{
	
	 var type = $("input[name='type']").val();
	 var review_status = $("#review_status");
	  // 切换商品审核列表的显示
	
	  review_status.css("display",type == 'review_to' ? '' : 'none');
	  if(type != 'review_to')
	  {
		review_status.css("display", 'none');
	  }
	}
	</script>
</body>
</html>
<?php endif; ?>
