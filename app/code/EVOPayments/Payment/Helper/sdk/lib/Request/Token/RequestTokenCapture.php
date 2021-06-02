<?php

namespace EVOPayments\Payment\Helper\sdk\lib\Request\Token;


use EVOPayments\Payment\Helper\sdk\lib\Payments;

class RequestTokenCapture extends RequestTokenRefund {

    public function __construct() {
        parent::__construct();
        $this->_data["action"] = Payments::ACTION_CAPTURE;
    }

}
