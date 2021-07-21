<?php

namespace EVOPayments\Payment\Helper\sdk\lib\Request;

use EVOPayments\Payment\Helper\sdk\lib\Request\Action\RequestActionPurchase;
use EVOPayments\Payment\Helper\sdk\lib\Request\Token\RequestTokenVerify;

class RequestVerify extends RequestAuth {

    public function __construct($values = array()) {
        parent::__construct();
        $this->_token_request = new RequestTokenVerify($values);
        $this->_action_request = new RequestActionPurchase($values);
    }

}
