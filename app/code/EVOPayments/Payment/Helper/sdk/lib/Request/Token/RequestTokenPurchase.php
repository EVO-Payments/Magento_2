<?php

namespace EVOPayments\Payment\Helper\sdk\lib\Request\Token;


use EVOPayments\Payment\Helper\sdk\lib\Payments;

class RequestTokenPurchase extends RequestTokenAuth {

    public function __construct() {
        parent::__construct();
        $this->_data["action"] = Payments::ACTION_PURCHASE;
    }

}
