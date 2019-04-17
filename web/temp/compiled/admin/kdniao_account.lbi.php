<form name="account_setting">
<div class="step_content">
    <div class="item">
        <div class="step_label"><?php echo $this->_var['lang']['label_express']; ?></div>
        <div class="step_value">
            <?php echo $this->_var['shipping_info']['shipping_name']; ?>
            <?php if ($this->_var['shipping_spec']['kdniao_account'] == 1): ?>
            <a class="btn btn25 blue_btn" href="javascript:;" ectype="account_apply" data-id="<?php echo $this->_var['shipping_info']['shipping_id']; ?>" data-code="<?php echo $this->_var['shipping_info']['shipping_code']; ?>"><?php echo $this->_var['lang']['online_apply']; ?></a>
            <?php elseif ($this->_var['shipping_spec']['kdniao_account'] == 2): ?>
            <span class="blue"><?php echo $this->_var['lang']['offline_apply_brackets']; ?></span>
            <?php else: ?>
            <span class="blue"><?php echo $this->_var['lang']['account_free_print_brackets']; ?></span>
            <?php endif; ?>
        </div>
    </div>
    <div class="item">
        <div class="step_label"><?php echo $this->_var['lang']['label_account']; ?></div>
        <div class="step_value">
            <input type="text" name="customer_name" class="text" autocomplete="off" value="<?php echo $this->_var['shipping_info']['customer_name']; ?>">
        </div>
    </div>
    <div class="item">
        <div class="step_label"><?php echo $this->_var['lang']['label_password']; ?></div>
        <div class="step_value">
            <input type="text" name="customer_pwd" class="text" autocomplete="off" value="<?php echo $this->_var['shipping_info']['customer_pwd']; ?>">
        </div>
    </div>
    <div class="item">
        <div class="step_label"><?php echo $this->_var['lang']['label_monthly_knot_code']; ?></div>
        <div class="step_value">
            <input type="text" name="month_code" class="text" autocomplete="off" value="<?php echo $this->_var['shipping_info']['month_code']; ?>" placeholder="<?php echo $this->_var['lang']['selection']; ?>">
        </div>
    </div>
    <div class="item">
        <div class="step_label"><?php echo $this->_var['lang']['label_dot_mark']; ?></div>
        <div class="step_value">
            <input type="text" name="send_site" class="text" autocomplete="off" value="<?php echo $this->_var['shipping_info']['send_site']; ?>" placeholder="<?php echo $this->_var['lang']['selection']; ?>">
        </div>
    </div>
    <div class="item">
        <div class="step_label"><?php echo $this->_var['lang']['label_payment']; ?></div>
        <div class="step_value">
            <div class="checkbox_items">
                <div class="checkbox_item mr20">
                    <input type="radio" class="ui-radio" name="pay_type" id="pay_type_1" value="1" <?php if ($this->_var['shipping_info']['pay_type'] == 1 || ! $this->_var['shipping_info']['pay_type']): ?> checked="true" <?php endif; ?>  />
                    <label for="pay_type_1" class="ui-radio-label"><?php echo $this->_var['lang']['pay_now']; ?></label>
                </div>
                <div class="checkbox_item mr20">
                    <input type="radio" class="ui-radio" name="pay_type" id="pay_type_2" value="2" <?php if ($this->_var['shipping_info']['pay_type'] == 2): ?> checked="true" <?php endif; ?>  />
                    <label for="pay_type_2" class="ui-radio-label"><?php echo $this->_var['lang']['pay_dao']; ?></label>
                </div>
                <div class="checkbox_item mr20">
                    <input type="radio" class="ui-radio" name="pay_type" id="pay_type_3" value="3" <?php if ($this->_var['shipping_info']['pay_type'] == 3): ?> checked="true" <?php endif; ?>  />
                    <label for="pay_type_3" class="ui-radio-label"><?php echo $this->_var['lang']['pay_month']; ?></label>
                </div>
                <div class="checkbox_item mr20">
                    <input type="radio" class="ui-radio" name="pay_type" id="pay_type_4" value="4" <?php if ($this->_var['shipping_info']['pay_type'] == 4): ?> checked="true" <?php endif; ?>  />
                    <label for="pay_type_4" class="ui-radio-label"><?php echo $this->_var['lang']['third_payment']; ?></label>
                </div>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="step_label"><?php echo $this->_var['lang']['label_template_size']; ?></div>
        <div class="step_value">
            <input type="text" name="template_size" class="text" autocomplete="off" value="<?php echo $this->_var['shipping_info']['template_size']; ?>" placeholder="<?php echo $this->_var['lang']['selection']; ?>">
        </div>
    </div>
	<input type="hidden" name="shipping_id" value="<?php echo $this->_var['shipping_info']['shipping_id']; ?>">
    <input type="hidden" name="shipper_code" value="<?php echo $this->_var['shipping_spec']['kdniao_code']; ?>">
    <input type="hidden" name="act" value="account_save">
</div>
</form>