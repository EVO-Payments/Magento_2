<?php

namespace EVOPayments\Payment\Helper\sdk\lib\Request\Action;

use EVOPayments\Payment\Helper\sdk\lib\Payments;

class RequestActionVerify extends RequestActionAuth {

    public function __construct() {
        parent::__construct();
        $this->_data["action"] = Payments::ACTION_VERIFY;
    }

}
