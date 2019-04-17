<?php if ($this->_var['full_page']): ?>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>
<body class="iframe_body">
    <div class="warpper">
        <div class="title"><a href="exchange_detail.php?act=detail" class="s-back"><?php echo $this->_var['lang']['back']; ?></a><?php echo $this->_var['lang']['report_form']; ?> - <?php echo $this->_var['lang']['store_integral_goods']; ?></div>
        <div class="content">
            <div class="explanation" id="explanation">
                <div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['info']['0']; ?></li>
                </ul>
            </div>
            <div class="flexilist mt30">
            	<div class="query_result">
                    <div class="common-head">
                        <div class="refresh ml0">
                            <div class="refresh_tit" onclick="getList(this)" title="<?php echo $this->_var['lang']['refresh_data']; ?>"><i class="icon icon-refresh"></i></div>
                            <div class="refresh_span"><?php echo $this->_var['lang']['refresh_common']; ?><?php echo $this->_var['record_count']; ?><?php echo $this->_var['lang']['record']; ?></div>
                        </div>
                    </div>
                    <div class="common-content">
                        <div class="list-div" id="listDiv">
                            <?php endif; ?>
                            <table cellpadding="0" cellspacing="0" border="0">
                                <thead>
                                    <tr>
                                        <th width="5%" class="sky_id"><div class="tDiv"><?php echo $this->_var['lang']['record_id']; ?></div></th>
                                        <th width="30%"><div class="tDiv"><?php echo $this->_var['lang']['goods_name']; ?></div></th>
                                        <th width="21%"><div class="tDiv"><?php echo $this->_var['lang']['goods_img']; ?></div></th>
                                        <th width="22%"><div class="tDiv"><?php echo $this->_var['lang']['gift_consumption_score']; ?></div></th>
                                        <th width="20%"><div class="tDiv"><?php echo $this->_var['lang']['gift_grade_integral']; ?></div></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $_from = $this->_var['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_56757100_1555397348');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_56757100_1555397348']):
?>
                                    <input type="hidden" name="user_id" class="user_id" value="<?php echo $this->_var['goods_0_56757100_1555397348']['user_id']; ?>">
                                    <tr> 
                                        <td class="sky_id"><div class="tDiv"><?php echo $this->_var['goods_0_56757100_1555397348']['goods_id']; ?></div></td>
                                        <td><div class="tDiv"><?php echo $this->_var['goods_0_56757100_1555397348']['goods_name']; ?></div></td>
                                        <td><div class="tDiv"><img src="<?php echo $this->_var['goods_0_56757100_1555397348']['goods_thumb']; ?>" width="68" height="68" /></div></td>
                                        <td><div class="tDiv"><?php echo $this->_var['goods_0_56757100_1555397348']['give_integral']; ?></div></td>
                                        <td><div class="tDiv"><?php echo $this->_var['goods_0_56757100_1555397348']['rank_integral']; ?></div></td>
                                    </tr>
                                    <?php endforeach; else: ?>
                                    <tr><td class="no-records" colspan="20"><?php echo $this->_var['lang']['no_records']; ?></td></tr>								
                                    <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="12">
                                            <div class="tDiv">
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
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <?php echo $this->fetch('library/pagefooter.lbi'); ?>
    <script type="text/javascript">
        //分页传值
        var user_id = $('.user_id').val();
        listTable.recordCount = <?php echo empty($this->_var['record_count']) ? '0' : $this->_var['record_count']; ?>;
        listTable.pageCount = <?php echo empty($this->_var['page_count']) ? '1' : $this->_var['page_count']; ?>;
        listTable.url = "exchange_detail.php?is_ajax=1&user_id="+user_id;
        listTable.query = "goods_detail_query";
    
        <?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
        listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        
        function getList()
        {
            var act = 'goods_detail_query';
            var user_id = $('.user_id').val();
            $.ajax({
                url:"exchange_detail.php?is_ajax=1",
                dataType:"json",
                type:'post',
                data:{
                    "act" : act,
                    "user_id" : user_id,
                },
                success:function(data){
                    $('.list-div').eq(0).html(data.content);
                }
            })
        }
    </script>
</body>
</html>
<?php endif; ?>