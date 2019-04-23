<div class="comment-goods">
    <div class="user-items">
        <div class="item item-pf">
            <div class="label"><em>*</em><?php echo $this->_var['lang']['score']; ?>：</div>
            <div class="value" ectype="rates">
                <div class="commstar" <?php if (! $this->_var['item']['comment']['comment_id'] > 0): ?>ectype="p_rate"<?php endif; ?>>
                    <a href="javascript:;" data-value="1" class="star1<?php if ($this->_var['item']['comment']['comment_rank'] == 1): ?> selected<?php endif; ?>">1</a>
                    <a href="javascript:;" data-value="2" class="star2<?php if ($this->_var['item']['comment']['comment_rank'] == 2): ?> selected<?php endif; ?>">2</a>
                    <a href="javascript:;" data-value="3" class="star3<?php if ($this->_var['item']['comment']['comment_rank'] == 3): ?> selected<?php endif; ?>">3</a>
                    <a href="javascript:;" data-value="4" class="star4<?php if ($this->_var['item']['comment']['comment_rank'] == 4): ?> selected<?php endif; ?>">4</a>
                    <a href="javascript:;" data-value="5" class="star5<?php if ($this->_var['item']['comment']['comment_rank'] == 5): ?> selected<?php endif; ?>">5</a>
                </div>
                <input type="hidden" name="comment_rank" value="<?php echo $this->_var['item']['comment']['comment_rank']; ?>"/>
                <div class="error" style="display:none;"><?php echo $this->_var['lang']['Pleas_mark']; ?></div>
            </div>
        </div>
        <?php if ($this->_var['item']['impression_list'] && ! $this->_var['item']['comment']['goods_tag'] && $this->_var['sign'] < 2): ?>
        <div class="item">
            <div class="label"><em>*</em><?php echo $this->_var['lang']['Buyer_impression']; ?></div>
            <div class="value">
                <?php $_from = $this->_var['item']['impression_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'impression');$this->_foreach['impression'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['impression']['total'] > 0):
    foreach ($_from AS $this->_var['impression']):
        $this->_foreach['impression']['iteration']++;
?>
                <div class="item-item<?php if (($this->_foreach['impression']['iteration'] <= 1)): ?> selected<?php endif; ?>" data-val="<?php echo $this->_var['impression']; ?>" data-recid="<?php echo $this->_var['item']['rec_id']; ?>" ectype="itemTab">
                    <span><?php echo $this->_var['impression']; ?></span>
                    <b></b>
                </div>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </div>
        </div>
        <?php endif; ?>
        
        <?php if ($this->_var['item']['comment']['content'] == ''): ?>
            <div class="item">
                <div class="label"><em>*</em><?php echo $this->_var['lang']['Experience']; ?>：</div>
                <div class="value">
                    <textarea name="content" class="textarea" id="textarea" cols="30" rows="10" size="10" placeholder="<?php echo $this->_var['lang']['Experience_one']; ?>" onKeyUp="figure()" maxlength="500"></textarea> 
                    <div class="clear"></div>
                    <div class="error"><?php echo $this->_var['lang']['common_form_textarea']; ?><span id="sp">500</span><?php echo $this->_var['lang']['zi_zc']; ?></div>
                </div>
            </div>
        <?php else: ?>
            <?php if ($this->_var['item']['comment']['goods_tag']): ?>
            <div class="item">
                <div class="label"><em>*</em><?php echo $this->_var['lang']['Buyer_impression']; ?></div>
                <div class="value">
                    <?php $_from = $this->_var['item']['comment']['goods_tag']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'tag');if (count($_from)):
    foreach ($_from AS $this->_var['tag']):
?>
                    <div class="item-item curr"><span><?php echo $this->_var['tag']; ?></span></div>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </div>
            </div>
            <?php endif; ?>
            <div class="item">
                <div class="label"><em>*</em><?php echo $this->_var['lang']['Experience']; ?>：</div>
                <div class="value"><span class="txt"><?php echo $this->_var['item']['comment']['content']; ?></span></div>
            </div>
        <?php endif; ?>
        <div class="item">
            <div class="label"><?php echo $this->_var['lang']['single_comment']; ?>：</div>
            <div class="value">
                <div class="upload-img-box">
                    <div class="img-lists">
                        <ul class="img-list-ul" ectype="imglist">
                            <?php $_from = $this->_var['item']['comment']['img_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'img');if (count($_from)):
    foreach ($_from AS $this->_var['img']):
?>
                            <li><img width="78" height="78" alt="" src="<?php echo $this->_var['img']['img_thumb']; ?>"><div class="del hide"><em value="<?php echo $this->_var['lang']['drop']; ?>">X</em></div></li>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </ul>
                        <?php if (! $this->_var['item']['comment']['img_list']): ?>
                        <div class="upload-btn">
                            <div id="file_upload<?php echo $this->_foreach['foo']['iteration']; ?>" class="uploadify">
                                <a href="javascript:void(0);" id="uploadbutton" class="uploadbutton"><i class="iconfont icon-digital"></i></a>
                            </div>
                        </div>
                        <?php endif; ?>
                        
                        <?php if (! $this->_var['item']['comment']['img_list']): ?>
                        <div class="img-utips"><?php echo $this->_var['lang']['total']; ?><em ectype="num">0</em><?php echo $this->_var['lang']['img_number_notic']; ?><span id="img_number" ectype="ima_number">10</span><?php echo $this->_var['lang']['zhang']; ?></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php if (! $this->_var['item']['comment']['img_list']): ?>
        <?php if ($this->_var['enabled_captcha']): ?>
        <div class="item">
            <div class="label"><em>*</em><?php echo $this->_var['lang']['comment_captcha']; ?>：</div>
            <div class="value">
                <div class="sm-input">
                    <input type="text" name="captcha" />
                    <img src="captcha_verify.php?captcha=is_user_comment&identify=<?php echo $this->_var['item']['rec_id']; ?>&height=28&font_size=14&<?php echo $this->_var['rand']; ?>" width="81" height="33" alt="captcha" onClick="this.src='captcha_verify.php?captcha=is_user_comment&identify=<?php echo $this->_var['item']['rec_id']; ?>&height=30&font_size=14&'+Math.random()" class="captcha_img">
                </div>
                <div class="mt10 hide captcha-err" style=" width:600px; float:left;">
                    <span class="comt-error"></span>
                </div>
            </div>
        </div>
        <?php endif; ?>
        
        <input type="hidden" name="impression" id="impression" value="<?php echo $this->_var['item']['impression_list']['0']; ?>" />
        <?php if ($this->_var['item']['impression_list'] && ! $this->_var['item']['comment']['goods_tag'] && $this->_var['sign'] < 2): ?>
        <input type="hidden" name="is_impression" id="is_impression" value="1" />
        <?php else: ?>
        <input type="hidden" name="is_impression" id="is_impression" value="0" />
        <?php endif; ?>
        <input type="hidden" name="order_id" value="<?php echo $this->_var['item']['order_id']; ?>" />
        <input type="hidden" name="goods_id" value="<?php echo $this->_var['item']['goods_id']; ?>" />
        <input type="hidden" name="rec_id" value="<?php echo $this->_var['item']['rec_id']; ?>" />
        <input type="hidden" name="sign" value="<?php echo $this->_var['sign']; ?>" />
        <input type="hidden" name="comment_id" value="<?php if ($this->_var['item']['comment']['comment_id'] == ''): ?>0<?php else: ?><?php echo $this->_var['item']['comment']['comment_id']; ?><?php endif; ?>">
        <?php endif; ?>
    </div>
</div>
<script type="text/javascript">
	var uploader_gallery = new plupload.Uploader({//创建实例的构造方法
		runtimes: 'html5,flash,silverlight,html4', //上传插件初始化选用那种方式的优先级顺序
		browse_button: 'uploadbutton', // 上传按钮
		url: "comment.php?act=ajax_return_images&order_id=<?php echo $this->_var['item']['order_id']; ?>&rec_id=<?php echo $this->_var['item']['rec_id']; ?>&goods_id=<?php echo $this->_var['item']['goods_id']; ?>&userId=<?php echo $this->_var['user_id']; ?>&sessid=<?php echo $this->_var['sessid']; ?>", //远程上传地址
		filters: {
			max_file_size: '2mb', //最大上传文件大小（格式100b, 10kb, 10mb, 1gb）
			mime_types: [//允许文件上传类型
				{title: "files", extensions: "bmp,gif,jpg,png,jpeg"}
			]
		},
		multi_selection: true, //true:ctrl多文件上传, false 单文件上传
		init: {
		   FilesAdded: function(up, files) { //文件上传前
			   var len = $("*[ectype='imglist'] li").length;
				plupload.each(files, function(file){
					//遍历文件
					len ++;
				});
				if(len > 10){
					pbDialog(json_languages.comment_img_number,"",0);
				}else{
					//开始上传 单张循环上传
					var img_number = 10 - Number(len);
					$("*[ectype='num']").html(len);
					$("*[ectype='ima_number']").html(img_number);
					submitBtn();
				}
			},
			FileUploaded: function(up, file, info) { //文件上传成功的时候触发
				var data = eval("(" + info.response + ")");
				if(data.error > 0){
					pbDialog(data.msg,"",0);
					return;
				}else{
					$("*[ectype='imglist']").html(data.content);
				}
			},
			UploadComplete:function(up,file){
				//所有文件上传成功时触发	
			},
			Error: function(up, err){
				//上传出错的时候触发
				pbDialog(err.message,"",0);
			}
		}
	});
	
	uploader_gallery.init();
	
	function submitBtn(){
		//设置传参
		uploader_gallery.setOption("multipart_params");
		//开始控件
		uploader_gallery.start();
	};
	
	//心得评价输入字数计算
	function figure(){
		 var textarea=document.getElementById("textarea");
		 var maxlength=500;
		 var length=textarea.value.length;
         var count=maxlength-length;
		 var sp=document.getElementById("sp");
		 sp.innerHTML=count;
		 if(count<=10){
			sp.style.color="red";
		 }else{
			sp.removeAttribute("style");
		 }
	}
</script>