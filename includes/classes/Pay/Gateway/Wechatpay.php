<?php

class Pay_Gateway_Wechatpay extends Pay_Gateway_Abstract
{
    public static function getId() {
        return 'pay_gateway_wechatpay';
    }

    public static function getName() {
        return 'Wechat Pay';
    }

    public static function getOptionId() {
        return 1978;
    }
}
