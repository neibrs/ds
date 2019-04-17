<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title">统计 - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
        	<div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                	<li><?php echo $this->_var['lang']['operation_prompt_content']['list']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['list']['1']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
            	<!--商品分类列表-->
                <div class="common-head">
                    <?php if ($this->_var['action_link']): ?>
                    <div class="fl">
                    	<a href="<?php echo $this->_var['action_link']['href']; ?>"><div class="fbutton"><div class="csv" title="<?php echo $this->_var['action_link']['text']; ?>"><span><i class="icon icon-download-alt"></i><?php echo $this->_var['action_link']['text']; ?></span></div></div></a>
                    </div>
                    <?php endif; ?>
                    <div class="fr">
                    <form name="TimeInterval" action="visit_sold.php?act=list" method="post" style="margin:0px">
                        <div class="search mt0">
                            <div class="categorySelect fl mr10">
                                <div class="selection">
                                    <input type="text" name="category_name" id="category_name" class="text w260 mr0 valid" value="<?php if ($this->_var['cat_val']): ?><?php echo $this->_var['cat_val']; ?><?php else: ?><?php echo $this->_var['lang']['select_cat']; ?><?php endif; ?>" autocomplete="off" readonly data-filter="cat_name" />
                                    <input type="hidden" name="cat_id" id="cat_id" value="0" data-filter="cat_id" />
                                </div>
                                <div class="select-container" style="width:290px; display:none;">
                                    <?php echo $this->fetch('library/filter_category.lbi'); ?>
                                </div>
                            </div>
                            <div class="step_value fl mb0">
                                <div class="selection">
                                    <input type="text" name="brand_name" id="brand_name" class="text w140 valid" data-filter="brand_name" ectype="require" autocomplete="off" value="<?php if ($this->_var['brand_name']): ?><?php echo $this->_var['brand_name']; ?><?php else: ?><?php echo $this->_var['lang']['please_select']; ?><?php endif; ?>" readonly />
                                    <input type="hidden" name="brand_id" id="brand_id" value="<?php echo $this->_var['goods']['brand_id']; ?>" data-filter="brand_id" />
                                    <div class="form_prompt"></div>
                                </div>    
                                <div class="brand-select-container" style="display:none;">
                                    <div class="brand-top">
                                        <div class="letter">
                                            <ul>
                                                <li><a href="javascript:void(0);" data-letter=""><?php echo $this->_var['lang']['all_brand']; ?></a></li>
                                                <?php $_from = $this->_var['letter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'letter_0_64700000_1554893515');if (count($_from)):
    foreach ($_from AS $this->_var['letter_0_64700000_1554893515']):
?>
                                                <li><a href="javascript:void(0);" data-letter="<?php echo $this->_var['letter_0_64700000_1554893515']; ?>"><?php echo $this->_var['letter_0_64700000_1554893515']; ?></a></li>
                                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                                <li><a href="javascript:void(0);" data-letter="QT"><?php echo $this->_var['lang']['other']; ?></a></li>
                                            </ul>
                                        </div>
                                        <div class="b_search">
                                            <input name="search_brand_keyword" id="search_brand_keyword" ectype="require" type="text" class="b_text" autocomplete="off" placeholder="<?php echo $this->_var['lang']['brand_keyword']; ?>">
                                            <a href="javascript:void(0);" class="btn-mini"><i class="icon icon-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="brand-list">
                                        <?php echo $this->fetch('library/search_brand_list.lbi'); ?>
                                    </div>
                                    <div class="brand-not" style="display:none;"><?php echo $this->_var['lang']['brand_not']; ?></div>
                                </div>
                            </div>
                            <input type="hidden" name="order_type" value="<?php echo $this->_var['order_type']; ?>" />
                            <div class="input">
                                <input type="text" name="show_num" class="text nofocus" placeholder="<?php echo $this->_var['lang']['show_num']; ?>" value="" autocomplete="off" /><input type="submit"name="submit" value="" class="not_btn" />
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
                
                <div class="common-content">
                    <form method="post" action="agency.php" name="listForm" >
                	<div class="list-div" id="listDiv">
                    	<table cellpadding="0" cellspacing="0" border="0">
                            <thead>
                                <tr>
                                    <th width="10%"><div class="tDiv pl40"><?php echo $this->_var['lang']['order_by']; ?></div></th>
                                    <th width="30%"><div class="tDiv"><?php echo $this->_var['lang']['goods_name']; ?></div></th>
                                    <th width="15%"><div class="tDiv"><?php echo $this->_var['lang']['goods_steps_name']; ?></div></th>
                                    <th width="15%"><div class="tDiv"><?php echo $this->_var['lang']['fav_exponential']; ?></div></th>
                                    <th width="15%"><div class="tDiv"><?php echo $this->_var['lang']['buy_times']; ?></div></th>
                                    <th width="15%"><div class="tDiv"><?php echo $this->_var['lang']['visit_buy']; ?></div></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $_from = $this->_var['click_sold_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['list']):
?>
                            	<tr>
                                    <td><div class="tDiv pl40"><?php echo $this->_var['key']; ?></div></td>
                                    <td><div class="tDiv"><a href="../goods.php?id=<?php echo $this->_var['list']['goods_id']; ?>" target="_blank"><?php echo $this->_var['list']['goods_name']; ?></a></div></td>
                                    <td><div class="tDiv"><?php if ($this->_var['list']['ru_name']): ?><font class="red"><?php echo $this->_var['list']['ru_name']; ?></font><?php else: ?><font class="blue3"><?php echo $this->_var['lang']['self']; ?></font><?php endif; ?></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['list']['click_count']; ?></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['list']['sold_times']; ?></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['list']['scale']; ?></div></td>
                                </tr>
                                <?php endforeach; else: ?>
                                <tr><td class="no-records" colspan="12"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
                                <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </tbody>
                        </table>
                    </div>
                    </form>
                </div>
            </div>
	   </div>
	</div>
    <?php echo $this->fetch('library/pagefooter.lbi'); ?>
    <script type="text/javascript">

    $(".ps-container").perfectScrollbar();
    </script>     
</body>
</html>
