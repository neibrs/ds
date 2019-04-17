<?php if ($this->_var['full_page']): ?>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title">供求 - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
            <?php echo $this->fetch('library/common_tabs_info.lbi'); ?>
        	<div class="explanation m10" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                	<li>展示了平台所有的批发商品分类。</li>
                    <li>可在列表直接增加下一级分类。</li>
                    <li>鼠标移动“设置”位置，可新增下一级分类、查看下一级分类等操作</li>
                </ul>
            </div>
        	<div class="tabs_info">
            	<ul>
                    <li><a href="wholesale.php?act=list<?php echo $this->_var['seller_list']; ?>">批发商品列表</a></li>
                    <li class="curr"><a href="wholesale_cat.php?act=list<?php echo $this->_var['seller_list']; ?>"><?php echo $this->_var['lang']['wholesale_cat_list']; ?></a></li>
                </ul>
            </div>	            
            <div class="flexilist">
            	<div class="common-head">
                	<div class="fl">
						<a href="<?php echo $this->_var['action_link']['href']; ?>"><div class="fbutton"><div class="add" title="<?php echo $this->_var['action_link']['text']; ?>"><span><i class="icon icon-plus"></i><?php echo $this->_var['action_link']['text']; ?></span></div></div></a>
					</div>
					<?php if ($this->_var['parent_id'] > 0): ?>
                    	<a href="javascript:history.go(-1)"><div class="fbutton"><div class="add" title="返回上一级"><span><i class="icon icon-reply"></i>返回上一级</span></div></div></a>
					<?php endif; ?>
                </div>
                <div class="common-content">
                	<div class="list-div"  id="listDiv" >
						<?php endif; ?>
                    	<table cellpadding="1" cellspacing="1">
                        	<thead>
                            	<tr>
									<th width="10%"></th>
                                	<th width="30%"><div class="tDiv"><?php echo $this->_var['lang']['cat_name']; ?></div></th>
                                    <th width="20%"><div class="tDiv"><?php echo $this->_var['lang']['sort_order']; ?></div></th>
									<th width="20%"><div class="tDiv"><?php echo $this->_var['lang']['is_show']; ?></div></th>
                                    <th width="20%" class="handle"><?php echo $this->_var['lang']['handler']; ?></th>
                                </tr>
                            </thead>
                            <tbody>
							    <?php $_from = $this->_var['cat_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
								<tr  class="<?php echo $this->_var['cat']['parent_id']; ?><?php if ($this->_var['cat']['level'] > 0): ?>_<?php echo $this->_var['cat']['level']; ?><?php endif; ?>" style="<?php if ($this->_var['cat']['level'] != 0): ?>display:none;<?php endif; ?>" id="<?php echo $this->_var['cat']['level']; ?>_<?php echo $this->_var['cat']['cause_id']; ?>">
								<td>
									<div class="tDiv first_setup">
										<div class="setup_span">
											<em><i class="icon icon-cog"></i><?php echo $this->_var['lang']['setup']; ?><i class="arrow"></i></em>
											<ul>
												<li><a href="wholesale_cat.php?act=add&parent_id=<?php echo $this->_var['cat']['cat_id']; ?>"><?php echo $this->_var['lang']['add_next_level']; ?></a></li>
												<li><a href="wholesale_cat.php?act=list&parent_id=<?php echo $this->_var['cat']['cat_id']; ?>&level=<?php echo $this->_var['level']; ?>"><?php echo $this->_var['lang']['view_next_level']; ?></a></li>
											</ul>
										</div>
									</div>
								</td>
								<td><div class="tDiv"><?php echo $this->_var['cat']['cat_name']; ?></div></td>
								<td><div class="tDiv"><?php echo $this->_var['cat']['sort_order']; ?></div></td>		
								<td>
									<div class="tDiv">
										<div class="switch mauto <?php if ($this->_var['cat']['is_show']): ?>active<?php endif; ?>" onclick="listTable.switchBt(this, 'toggle_show', <?php echo $this->_var['cat']['cat_id']; ?>)" title="<?php echo $this->_var['lang']['yes']; ?>">
											<div class="circle"></div>
										</div>
										<input type="hidden" value="0" name="">
									</div>
								</td> 							
							    <td align="center" class="handle">
                                    <div class="tDiv a2">
                                        <a href="wholesale_cat.php?act=edit&amp;cat_id=<?php echo $this->_var['cat']['cat_id']; ?>" title="<?php echo $this->_var['lang']['edit']; ?>" class="btn_edit"><i class="icon icon-edit"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                        <a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['cat']['cat_id']; ?>, '<?php echo $this->_var['lang']['drop_confirm']; ?>')" title="<?php echo $this->_var['lang']['remove']; ?>" class="btn_trash"><i class="icon icon-trash"></i><?php echo $this->_var['lang']['drop']; ?></a>	
                                    </div>
								</td>
								</tr>
								<?php endforeach; else: ?>
								<tr><td class="no-records"  align="center" colspan="11"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
								<?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </tbody>
                        </table>
						<?php if ($this->_var['full_page']): ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php echo $this->fetch('library/pagefooter.lbi'); ?>
	<script type="text/javascript">
        //分页传值
        listTable.recordCount = <?php echo empty($this->_var['record_count']) ? '0' : $this->_var['record_count']; ?>;
        listTable.pageCount = <?php echo empty($this->_var['page_count']) ? '1' : $this->_var['page_count']; ?>;
        listTable.query = 'cause_query';
    
        <?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
        listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		
		
    </script>
</body>
</html>
<?php endif; ?>