<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
<div class="warpper">
    <div class="title"><a href="<?php echo $this->_var['action_link']['href']; ?>" class="s-back"><?php echo $this->_var['lang']['back']; ?></a><?php echo $this->_var['lang']['17_mass_sms']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
        <div class="explanation" id="explanation">
            <div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
            <ul>
            	<li><?php echo $this->_var['lang']['operation_prompt_content_common']; ?></li>
                <li><?php echo $this->_var['lang']['operation_prompt_content']['info']['0']; ?></li>
                <li><?php echo $this->_var['lang']['operation_prompt_content']['info']['1']; ?></li>
            </ul>
        </div>
        <div class="flexilist">
            <div class="mian-info">
                <form action="mass_sms.php" method="post" name="theForm" enctype="multipart/form-data"  id="agency_form">
                    <div class="switch_info user_basic" style="display:block;">
                    	<?php if ($this->_var['sms_type'] > 0): ?>
                        <div class="item">
                            <div class="label"><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['lang']['sign_name']; ?>：</div>
                            <div class="label_value">
                                <input type="text" name='set_sign' value='<?php echo $this->_var['note']['set_sign']; ?>' class="text" autocomplete="off" />
                                <div class="form_prompt"></div>
                                <div class="notic m20"></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="label"><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['lang']['sms_cdoe']; ?>：</div>
                            <div class="label_value">
                                <input type="text" name='temp_id' value='<?php echo htmlspecialchars($this->_var['note']['temp_id']); ?>' class="text" autocomplete="off" />
                                <div class="form_prompt"></div>
                                <div class="notic m20"></div>
                            </div>
                        </div>
                        <?php endif; ?>
                        <div class="item">
                            <div class="label"><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['lang']['temp_content']; ?>：</div>
                            <div class="label_value">
                                <textarea id='temp_content' name='temp_content' placeholder="<?php echo $this->_var['lang']['mass_sms_temp_step']['0']; ?>${name}<?php echo $this->_var['lang']['mass_sms_temp_step']['1']; ?>${user_name}，${shop_name}<?php echo $this->_var['lang']['mass_sms_temp_step']['2']; ?>${content}<?php echo $this->_var['lang']['mass_sms_temp_step']['3']; ?>" value=''  cols="60" rows="4" class="textarea" ><?php echo htmlspecialchars($this->_var['note']['temp_content']); ?></textarea>
                                <div class="form_prompt"></div>
                                <div class="notic m20"></div>
                            </div>
                        </div>
                        <div class="item hide">
                            <div class="label"><?php echo $this->_var['lang']['custom_content']; ?>：</div>
                            <div class="label_value">
                                <input type="text" name='content' value='<?php echo htmlspecialchars($this->_var['note']['content']); ?>' class="text" autocomplete="off" />
                                <div class="form_prompt"></div>
                                <div class="notic m20"></div>
                            </div>
                        </div>                        
                        <div class="item">
                            <div class="label"><?php echo $this->_var['lang']['available_variable']; ?>：</div>
                            <div class="label_value">
                                <div class="form_prompt"></div>
                                <div class="notic m20">username(<?php echo $this->_var['lang']['username']; ?>), shopname(<?php echo $this->_var['lang']['shop_name']; ?>), content(<?php echo $this->_var['lang']['custom_content']; ?>)</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="label"><?php echo $this->_var['lang']['send_out_user']; ?>：</div>
                            <div class="label_value">
                                <div class="checkbox_items">
                                    <div class="checkbox_item">
                                        <input type="radio" class="ui-radio" name="type" id="type_0" value="0" checked="true" />
                                        <label for="type_0" class="ui-radio-label"><?php echo $this->_var['lang']['custom_add']; ?></label>
                                    </div>
                                    <div class="checkbox_item">
                                        <input type="radio" class="ui-radio" name="type" id="type_1" value="1" />
                                        <label for="type_1" class="ui-radio-label"><?php echo $this->_var['lang']['is_user_rank']; ?></label>
                                    </div>
                                    <div class="checkbox_item">
                                        <input type="radio" class="ui-radio" name="type" id="type_2" value="2" />
                                        <label for="type_2" class="ui-radio-label"><?php echo $this->_var['lang']['user_all']; ?></label>
                                    </div>                                    
                                </div>
                            </div>
                        </div> 
                        <div class="item" ectype="type" data-type="0">
                            <div class="label"><?php echo $this->_var['lang']['search_user']; ?>：</div>
                            <div class="label_value" style="margin-bottom: 20px;">
                                <div class="goods_search_div" style="padding-bottom: 0; margin-bottom: 0;">
                                    <input type="text" name="keyword" class="text w120" value="" placeholder="<?php echo $this->_var['lang']['keywords']; ?>" autocomplete="off" />
									<input type="button" class="btn btn30" name="search" value="<?php echo $this->_var['lang']['button_search']; ?>" ectype="search" onclick="searchUser();" class="button" />
                                </div>
                                <div class="move_div">
                                    <div class="move_left" style="width: 30%;">
                                        <h4><?php echo $this->_var['lang']['search_user_list']; ?></h4>
                                        <div class="move_info">
                                            <div class="move_list" id="user_search">
                                                <ul>
                                                </ul>	
                                            </div>
                                        </div>
                                        <div class="move_handle">
                                            <a href="javascript:void(0);" id="sellectAll" class="btn btn25 moveAll" ectype="moveAll"><span><?php echo $this->_var['lang']['check_all']; ?></span></a>
                                            <a href="javascript:void(0);" onclick="addUser()" class="btn btn25 red_btn" ectype="sub"><?php echo $this->_var['lang']['button_submit_alt']; ?></a>
                                        </div>
                                    </div>
                                    <div class="move_middle">
                                        <div class="move_point" onclick="addUser()"></div>
                                    </div>
                                    <div class="move_right" style="width: 30%;">
                                        <h4><?php echo $this->_var['lang']['send_out_user_list']; ?></h4>
                                        <div class="move_info">
                                            <div class="move_list" id="user">
                                                <ul>
                                                </ul>											
                                            </div>
                                        </div>
                                        <div class="move_handle">
                                            <a href="javascript:void(0);" id="selectAllUser" class="btn btn25 moveAll" ectype="moveAll"><?php echo $this->_var['lang']['check_all']; ?></a><a href="javascript:void(0);" onclick="delUser()" class="btn btn25 btn_red"><?php echo $this->_var['lang']['remove']; ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="item hide" ectype="type" data-type="1">
                            <div class="label"><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['lang']['user_rank']; ?>：</div>
                            <div class="value">
                                <div id="rank_id" class="imitate_select select_w320">
                                    <div class="cite"><?php echo $this->_var['lang']['select_user_rank']; ?></div>
                                    <ul style="display: none;">
										<?php $_from = $this->_var['ranklist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['list']):
?>
                                        <li><a href="javascript:;" data-value="<?php echo $this->_var['key']; ?>" class="ftx-01"><?php echo $this->_var['list']; ?></a></li>
										<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </ul>
                                    <input name="rank_id" type="hidden" value="0" id="rank_id_val">
                                </div>
                            </div>
                        </div>                     

                        <div class="item">
                            <div class="label">&nbsp;</div>
                            <div class="label_value info_btn mt0">
                                <input type="hidden" name="id" value="<?php echo empty($this->_var['note']['id']) ? '0' : $this->_var['note']['id']; ?>" />
                                <input type="hidden" name="act" value="<?php echo $this->_var['form_act']; ?>" />
                                <input type="submit" name="save" id="submitBtn" class="button" value="<?php echo $this->_var['lang']['save_record']; ?>" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php echo $this->fetch('library/pagefooter.lbi'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.purebox.js')); ?>
<script type="text/javascript">
//切换
$(document).on('click', "input[name='type']", function(){
	var type = $(this).val();
	$("[ectype='type'][data-type='"+type+"']").show();
	$("[ectype='type'][data-type!='"+type+"']").hide();
})

//检测是否填入自定义内容
function check_content(){
	var temp_content = $("textarea[name='temp_content']").val();
	if(/\$\{content}/g.test(temp_content)){
		$("input[name='content']").parents(".item:first").show();
	}else{
		$("input[name='content']").parents(".item:first").hide();
	}	
}

check_content();
$(document).on('blur', "textarea[name='temp_content']", function(){
	check_content();
})

/**
* 按用户名搜索用户
*/
function searchUser()
{
	var eles = document.forms['theForm'].elements;
	
	/* 填充列表 */
	var keywords = Utils.trim(eles['keyword'].value);
  
	$("#user_search").find("ul").html("<i class='icon-spinner icon-spin'></i>");
	
	setTimeout(function(){Ajax.call('mass_sms.php?is_ajax=1&act=search_users', 'keywords=' + keywords, searchUserResponse, "GET", "JSON");},300);
}

function searchUserResponse(result)
{
	$(".move_list").perfectScrollbar("destroy");
	$(".move_list").perfectScrollbar();
	$("#user_search").find("li,i").remove();
	if (result.error == 0)
	{
		for (i = 0; i < result.content.length; i++)
		{
			$("#user_search").find("ul").append("<li><i class='sc_icon sc_icon_ok'></i><a href='javascript:void(0);' data-value="+result.content[i].user_id+">"+result.content[i].user_name+"</a><input type='hidden' name='user_search[]' value='"+result.content[i].user_id+"'></li>");
		}
	}
}

$("#sellectAll").click(function(){
	$("#user_search").find("ul li").each(function(){
		$(this).addClass('current');
	})
})


$("#selectAllUser").click(function(){
	$("#user").find("ul li").each(function(){
		$(this).addClass('current');
	})
})

function addUser()
{
  $("#user_search").find("ul li").each(function(){
	  var value = $(this).find("a").data("value");
	  var length = $("#user").find("li a[data-value="+value+"]").length;
	  if($(this).attr("class") == 'current' && length == 0){
		  var user = $(this).text();
		  var user_id = $(this).find("input").val();
		  $("#user").find("ul").append("<li><i class='sc_icon sc_icon_no'></i><a href='javascript:void(0);' data-value='"+value+"'>"+user+"</a><input type='hidden' name='user[]' value='"+user_id+"'></li>")		  
	  }
  });	
}

function delUser()
{
  $("#user").children("ul").find("li").each(function(){
	  if($(this).attr("class") == 'current'){
		  $(this).remove();
		}
	})
}
</script>
</body>
</html>
