<?php if ($this->_var['full_page']): ?>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body"> 
    <div class="warpper">
        <div class="title"><?php echo $this->_var['lang']['report_form']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
            <div class="explanation" id="explanation">
                <div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['1']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['2']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['3']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['4']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['5']; ?></li>
                </ul>
            </div>
            <div class="flexilist mt30">
                <div class="switch_info">
                    <div class="stat_order_search stat_order_search2">
                        <div class="section-module">
                            <div class="common-head"><h3 class="common-h3-title"><?php echo $this->_var['lang']['integrate_stats']; ?></h3></div>
                            <div class="common-content">
                                <div class="common-tabs">
                                    <ul>
                                        <li class="current"><?php echo $this->_var['lang']['order_total']; ?></li>
                                        <li><?php echo $this->_var['lang']['order_num']; ?></li>
                                        <li><?php echo $this->_var['lang']['place_order_goods']; ?></li>
                                    </ul>
                                </div>
                                <div class="common-module-main">
                                    <div class="common-module-item" id="order_fee" style="height:378px;"></div>
                                    <div class="common-module-item" id="order_num" style="height:378px;"></div>
                                    <div class="common-module-item" id="order_goods_num" style="height:378px;"></div>
                                </div>
                            </div>
                        </div>
                        <form action="" method="post" id="" name="selectForm">
                            <div class="search_item">
                                <strong class="label_txt"><?php echo $this->_var['lang']['time']; ?>：</strong>
                                <div class="text_time" id="text_time_start">
                                    <input type="text" class="text" name="start_date" value="" id="start_date" value="" autocomplete="off" readonly>
                                </div>
                                <span class="bolang">&nbsp;&nbsp;~&nbsp;&nbsp;</span>
                                <div class="text_time" id="text_time_end">
                                    <input type="text" class="text" name="end_date" value="" id="end_date" value="" autocomplete="off" readonly>
                                </div>
                            </div>
                            <div class="search_item search_item">
                                <strong class="label_txt"><?php echo $this->_var['lang']['03_category_manage']; ?>：</strong>
                                <div class="imitate_select select_w145">
                                    <div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
                                    <ul>
                                        <li><a href="javascript:;" data-value="0" class="ftx-01"><?php echo $this->_var['lang']['please_select']; ?></a></li>
                                        <?php $_from = $this->_var['main_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
                                        <li><a href="javascript:;" data-value="<?php echo $this->_var['cat']['cat_id']; ?>" class="ftx-01"><?php echo $this->_var['cat']['cat_name']; ?></a></li>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </ul>
                                    <input name="cat_id" type="hidden" value="0" id="cat_id">
                                </div>
                            </div>
                            <div class="search_item">
                                <strong class="label_txt">&nbsp</strong>
                                <a href="javascript:void(0);" class="btn btn30 blue_btn ml0" ectype="searchButton"><i class="icon icon-search"></i><?php echo $this->_var['lang']['btn_search']; ?></a>
                            </div>
                            <input type="hidden" name="act" value="get_chart_data">
                        </form>
                    </div>
                    <div class="query_result mt30">
                        <div class="section-module">
                            <div class="common-head">
                                <div class="fl">
                                    <div class="fbutton m0" id="fbutton_1"><a href="javascript:void(0);"><div class="csv" title="<?php echo $this->_var['lang']['export_list']; ?>"><span><i class="icon icon-download-alt"></i><?php echo $this->_var['lang']['export_list']; ?><</span></div></a></div>
                                </div>
                                <div class="refresh">
                                    <div class="refresh_tit" title="<?php echo $this->_var['lang']['refresh_data']; ?>"><i class="icon icon-refresh"></i></div>
                                    <div class="refresh_span"><?php echo $this->_var['lang']['refresh_common']; ?><?php echo $this->_var['record_count']; ?><?php echo $this->_var['lang']['record']; ?></div>
                                </div>
                            </div>
                            <div class="list-div" id="listDiv">
                                <?php endif; ?>
                                <table cellpadding="0" cellspacing="0" border="0">
                                    <thead>
                                    <tr>
                                        <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['03_category_manage']; ?></div></th>
                                        <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['integrate_list_name']['0']; ?></div></th>
                                        <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['integrate_list_name']['1']; ?></div></th>
                                        <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['integrate_list_name']['2']; ?></div></th>
                                        <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['integrate_list_name']['3']; ?></div></th>
                                        <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['integrate_list_name']['4']; ?></div></th>
                                        <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['integrate_list_name']['5']; ?></div></th>
                                        <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['integrate_list_name']['6']; ?></div></th>
                                        <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['integrate_list_name']['7']; ?></div></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $_from = $this->_var['order_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('okey', 'vo');if (count($_from)):
    foreach ($_from AS $this->_var['okey'] => $this->_var['vo']):
?>
                                    <tr>
                                        <td><div class="tDiv"><?php echo $this->_var['vo']['cat_name']; ?></div></td>
                                        <td><div class="tDiv"><?php echo empty($this->_var['vo']['formated_goods_amount']) ? '0' : $this->_var['vo']['formated_goods_amount']; ?></div></td>
                                        <td><div class="tDiv"><?php echo empty($this->_var['vo']['formated_valid_goods_amount']) ? '0' : $this->_var['vo']['formated_valid_goods_amount']; ?></div></td>
                                        <td><div class="tDiv"><?php echo empty($this->_var['vo']['order_num']) ? '0' : $this->_var['vo']['order_num']; ?></div></td>
                                        <td><div class="tDiv"><?php echo empty($this->_var['vo']['valid_num']) ? '0' : $this->_var['vo']['valid_num']; ?></div></td>
                                        <td><div class="tDiv"><?php echo empty($this->_var['vo']['goods_num']) ? '0' : $this->_var['vo']['goods_num']; ?></div></td>
                                        <td><div class="tDiv"><?php echo empty($this->_var['vo']['order_goods_num']) ? '0' : $this->_var['vo']['order_goods_num']; ?></div></td>
                                        <td><div class="tDiv"><?php echo empty($this->_var['vo']['no_order_goods_num']) ? '0' : $this->_var['vo']['no_order_goods_num']; ?></div></td>
                                        <td><div class="tDiv"><?php echo empty($this->_var['vo']['user_num']) ? '0' : $this->_var['vo']['user_num']; ?></div></td>
                                    </tr>
                                    <?php endforeach; else: ?>
                                    <tr>
                                        <td colspan="12" class="no_record"><div class="tDiv"><?php echo $this->_var['lang']['no_records']; ?></div></td>
                                    </tr>
                                    <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td colspan="12">
                                            <div class="list-page">
                                                <?php echo $this->fetch('library/page.lbi'); ?>
                                            </div>
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>
                                <?php if ($this->_var['full_page']): ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php echo $this->fetch('library/pagefooter.lbi'); ?>
    <script type="text/javascript" src="../js/echarts-all.js"></script>
    <script type="text/javascript" src="../js/jquery.SuperSlide.2.1.1.js"></script>
	<script type="text/javascript">
        //分页传值
        listTable.recordCount = <?php echo empty($this->_var['record_count']) ? '0' : $this->_var['record_count']; ?>;
        listTable.pageCount = <?php echo empty($this->_var['page_count']) ? '1' : $this->_var['page_count']; ?>;
        listTable.url = "industry_analysis.php?is_ajax=1";
        listTable.query = "query";
    
        <?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
        listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    
        //导出报表(销售明细)
        $('#fbutton_1').click(function(){
            location.href='industry_analysis.php?act=download';
        })

        //日期选择插件调用start sunle
        var opts1 = {
            'targetId':'start_date',//时间写入对象的id
            'triggerId':['start_date'],//触发事件的对象id
            'alignId':'start_date',//日历对齐对象
            'format':'-',//时间格式 默认'YYYY-MM-DD HH:MM:SS'
            'min':'' //最小时间
        },opts2 = {
            'targetId':'end_date',
            'triggerId':['end_date'],
            'alignId':'end_date',
            'format':'-',
            'min':''
        }
        xvDate(opts1);
        xvDate(opts2);
        //日期选择插件调用end sunle

        $(".common-content").slide({titCell:".common-tabs ul li",mainCell:".common-module-main",trigger:"click",titOnClassName:"current",startFun(i,c,s){
                var value = '';
                if(i == 0){
                    value= 'order_fee'; 
                }else if(i == 1){
                    value = 'order_num'; 
                }else{
                    value = 'order_goods_num'; 
                }

                search_chart_view('industry_analysis.php', "form[name='selectForm']", value, {type:value});
            }
        });

        //搜索
        $(document).on('click', "[ectype='searchButton']", function(){
            searchData();
        })

        function searchData()
        {       
            listTable.filter['start_date'] = Utils.trim(document.forms['selectForm'].elements['start_date'].value);
            listTable.filter['end_date'] = Utils.trim(document.forms['selectForm'].elements['end_date'].value);
            listTable.filter['cat_id'] = Utils.trim(document.forms['selectForm'].elements['cat_id'].value);
    
            listTable.filter['page'] = 1;
            listTable.loadList();
        }
    </script>
</body>
</html>
<?php endif; ?>