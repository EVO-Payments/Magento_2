<?php

namespace EVOPayments\Payment\Helper\sdk\lib\Response\Error;

use EVOPayments\Payment\Helper\sdk\lib\Response;

class ResponseErrorErrors extends Response {

<<<<<<< HEAD
    public function __construct($errors = array())
        {
            if (is_array($errors)) {
                foreach ($errors as $error) {
                    if (is_array($error)) {
                        $this->_data['errors'] = array_key_exists('messageCode', $error) ? $error['messageCode'] : print_r($error, true);
                    }else{
                        $this->_data['errors'] = $error;
                    }
                }
            } else {
                $this->_data['errors'] = $errors;
            }
        }
=======
    public function __construct($errors = array()) {
        if (is_array($errors)) {
            foreach ($errors as $error) {
                $this->_data[$error] = $error;
            }
        } else {
            $this->_data[$errors] = $errors;
        }
    }
>>>>>>> 919b5ac25473601d997ef22fbd73e3465da0bfb5

}
