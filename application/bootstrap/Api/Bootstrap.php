<?php
/**
 * Created by PhpStorm.
 * User: bleso
 * Date: 14/11/3
 * Time: 下午2:11
 */

class ApiBootstrap {

    public function __construct(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
        if ($request->getMethod() != 'POST') {
            $request->setModuleName('Document');
        } else {
            Yaf_Dispatcher::getInstance()->disableView();
        }
    }
}