<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><a href="<?php echo $this->_var['action_link']['href']; ?>" class="s-back"><?php echo $this->_var['lang']['back']; ?></a>手机-<?php echo $this->_var['ur_here']; ?></div>
            <div class="content">
            <div class="explanation" id="explanation">
                <div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['info']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['info']['1']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content_common']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
                <div class="mian-info">
                    <form action="touch_navigator.php" method="post" name="form" enctype="multipart/form-data" id="agency_form">
                        <div class="switch_info">
                            <div class="item">
                                <div class="label"><?php echo $this->_var['lang']['system_main']; ?>：</div>
                                <div class="label_value">
                                    <div id="" class="imitate_select select_w320">
                                        <div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
                                        <ul>
                                            <li><a href="javascript:add_main('-');" class="add_category" data-value="-1" class="ftx-01">-</a></li>
                                            <li><a href="javascript:;" class="add_category" data-value="-2" class="ftx-01"><?php echo $this->_var['lang']['03_category_manage']; ?></a></li>
                                            <?php $_from = $this->_var['sysmain']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['val']):
?>
                                            <li><a href="javascript:add_main('<?php echo $this->_var['key']; ?>');" class="add_category" data-value="<?php echo $this->_var['key']; ?>" class="ftx-01"><?php if ($this->_var['val']['2']): ?><?php echo $this->_var['val']['2']; ?><?php else: ?><?php echo $this->_var['val']['0']; ?><?php endif; ?></a></li>
                                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                        </ul>
                                        <input name="menulist" id="menulist" type="hidden" value="<?php echo $this->_var['rt']['ifshow']; ?>" id="">
                                    </div>										
                                </div>
                            </div>
                            <div class="item category_list hide">
                                <div class="label">&nbsp;&nbsp;</div>
                                <div class="goods_search_div" style="padding:0px; margin:0px; width:30%">
                                    <div class="search_select">
                                        <div class="categorySelect">
                                            <div class="selection">
                                                <input type="text" name="category_name" id="category_name" class="text w250 valid" value="<?php echo $this->_var['lang']['select_cat']; ?>" autocomplete="off" readonly data-filter="cat_name" />
                                                <input type="hidden" name="category_id" id="category_id" value="0" data-filter="cat_id" />
                                            </div>
                                            <div class="select-container" style="display:none;">
                                                <?php echo $this->fetch('library/filter_category.lbi'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="label"><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['lang']['item_name']; ?></div>
                                <div class="label_value">
                                    <input type="text" name='item_name' value='<?php echo $this->_var['rt']['item_name']; ?>' id="item_name" class="text" autocomplete="off"  onKeyPress="javascript:key();"/>
                                    <div class="form_prompt"></div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="label"><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['lang']['item_url']; ?></div>
                                <div class="label_value">
                                    <input type="text" name='item_url' value='<?php echo $this->_var['rt']['item_url']; ?>' id="item_url" class="text" autocomplete="off"  onKeyPress="javascript:key();" id="vote_name"/>
                                    <div class="notic" id="notice_url"><?php echo $this->_var['lang']['notice_url']; ?></div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="label"><?php echo $this->_var['lang']['item_vieworder']; ?></div>
                                <div class="label_value">
                                    <input type="text" name='item_vieworder' value='<?php echo $this->_var['rt']['item_vieworder']; ?>' class="text" autocomplete="off" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="label"><?php echo $this->_var['lang']['item_ifshow']; ?>：</div>
                                <div class="label_value">
                                    <div class="switch switch_2 <?php if ($this->_var['rt']['item_ifshow_1']): ?>active<?php endif; ?>" title="<?php if ($this->_var['rt']['item_ifshow_1']): ?>是<?php else: ?>否<?php endif; ?>">
                                        <div class="circle"></div>
                                    </div>
                                    <input type="hidden" name="item_ifshow" value="<?php echo $this->_var['rt']['ifshow']; ?>">
                                </div>
                            </div>
                            <div class="item">
                                <div class="label"><?php echo $this->_var['lang']['item_opennew']; ?>：</div>
                                <div class="label_value">
                                    <div class="switch switch_2 <?php if ($this->_var['rt']['item_opennew_1']): ?>active<?php endif; ?>" title="<?php if ($this->_var['rt']['item_opennew_1']): ?>是<?php else: ?>否<?php endif; ?>">
                                        <div class="circle"></div>
                                    </div>
                                    <input type="hidden" name="item_opennew" value="<?php echo $this->_var['rt']['opennew']; ?>">
                                </div>
                            </div>
                            <div class="item hide">
                                <div class="label"><?php echo $this->_var['lang']['item_type']; ?>：</div>
                                <div class="label_value">
                                    <div class="imitate_select select_w320">
                                      <div class="cite"><?php echo $this->_var['lang']['top']; ?></div>
                                      <ul>
                                         <li><a href="javascript:;" data-value="top" class="ftx-01"><?php echo $this->_var['lang']['top']; ?></a></li>
                                         <li><a href="javascript:;" data-value="middle" class="ftx-01"><?php echo $this->_var['lang']['middle']; ?></a></li>
                                         <li><a href="javascript:;" data-value="bottom" class="ftx-01"><?php echo $this->_var['lang']['bottom']; ?></a></li>
                                      </ul>
                                      <input name="item_type" type="hidden" value="top" value="<?php echo $this->_var['rt']['item_type']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="label"><?php echo $this->_var['lang']['nav_img']; ?>：</div>
                                <div class="label_value">
                                    <div class="type-file-box">
                                        <input type="button" name="button" id="button" class="type-file-button" value="" />
                                        <input type="file" class="type-file-file" name="pic" size="30" hidefocus="true" value="" />
                                        <?php if ($this->_var['rt']['pic']): ?>
                                        <span class="show">
                                                <a href="../<?php echo $this->_var['rt']['pic']; ?>" target="_blank" class="nyroModal"><i class="icon icon-picture" data-tooltipimg="../<?php echo $this->_var['rt']['pic']; ?>" ectype="tooltip" title="tooltip"></i></a>
                                        </span>
                                        <?php endif; ?>
                                        <input type="text" name="textfile" class="type-file-text" id="textfield" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="label">&nbsp;</div>
                                <div class="label_value info_btn mt0">
                                    <a href="javascript:;" class="button" name="Submit" id="submitBtn"><?php echo $this->_var['lang']['button_submit']; ?></a>
                                    <input type="hidden" name="id" value="<?php echo $this->_var['rt']['id']; ?>" />
                                    <input type="hidden" name="step" value="2" />
                                    <input type="hidden" name="act" value="<?php echo $this->_var['rt']['act']; ?>" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 	<?php echo $this->fetch('library/pagefooter.lbi'); ?>
	
    <script type="text/javascript">
            
    $.divselect("#user_grade","#menulist",function(obj){
        var val = obj.attr("data-value");
    });
    
    //表单验证
    $(function(){
        $("#submitBtn").click(function(){
            if($("#agency_form").valid()){
                $("#agency_form").submit();
            }
        });
    
        $('#agency_form').validate({
            errorPlacement:function(error, element){
                var error_div = element.parents('div.label_value').find('div.form_prompt');
                element.parents('div.label_value').find(".notic").hide();
                error_div.append(error);
            },
            rules:{
                item_name :{
                    required:true
                },
                item_url :{
                    required:true
                }
            },
            messages:{
                item_name :{
                    required:'<i class="icon icon-exclamation-sign"></i>'+namecannotnull
                },
                item_url :{
                    required:'<i class="icon icon-exclamation-sign"></i>'+url_null
                }
            }
        });
        
        $(".add_category").click(function(){
            var val = $(this).data('value');
            
            if(val == -2){
                
                $("#item_name").val('');
                $("#item_url").val('');
                
                $(".category_list").addClass('show');
                $(".category_list").removeClass('hide');
            }else{
                $(".category_list").addClass('hide');
                $(".category_list").removeClass('show');
            }
        });
    });
            
    var last;
    function add_main(key)
    {
        var sysm = new Object;
        <?php $_from = $this->_var['sysmain']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['val']):
?>
            sysm[<?php echo $this->_var['key']; ?>] = new Array();
            sysm[<?php echo $this->_var['key']; ?>][0] = '<?php echo $this->_var['val']['0']; ?>';
            sysm[<?php echo $this->_var['key']; ?>][1] = '<?php echo $this->_var['val']['1']; ?>';
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        if (key != '-')
        {
            if(sysm[key][0] != '-')
            {
                document.getElementById('item_name').value = sysm[key][0];
                document.getElementById('item_url').value = sysm[key][1];
                last = document.getElementById('menulist').selectedIndex;
            }
            else
            {
                if(last < document.getElementById('menulist').selectedIndex)
                {
                    document.getElementById('menulist').selectedIndex ++;
                }
                else
                {
                    document.getElementById('menulist').selectedIndex --;
                }
                last = document.getElementById('menulist').selectedIndex;
                document.getElementById('item_name').value = sysm[last-1][0];
                document.getElementById('item_url').value = sysm[last-1][1];
            }
        }
        else
        {
            last = document.getElementById('menulist').selectedIndex = 1;
            document.getElementById('item_name').value = sysm[last-1][0];
            document.getElementById('item_url').value = sysm[last-1][1];
        }
    }
    function key()
    {
        last = document.getElementById('menulist').selectedIndex = 0;
    }
    </script>
</body>
</html>
