<?php

namespace EVOPayments\Payment\Helper\sdk\lib\Response\Error;

use EVOPayments\Payment\Helper\sdk\lib\Response;

class ResponseErrorErrors extends Response {

    public function __construct($errors = array()) {
        if (is_array($errors)) {
            foreach ($errors as $error) {
                $this->_data[$error] = $error;
            }
        } else {
            $this->_data[$errors] = $errors;
        }
    }

}
