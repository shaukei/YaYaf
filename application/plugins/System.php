<?php
/**
 * Created by PhpStorm.
 * User: bleso
 * Date: 14/11/3
 * Time: 上午11:45
 */

class SystemPlugin extends Yaf_Plugin_Abstract{
    public function routerStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
    }

    public function routerShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
    }

    public function dispatchLoopStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
    }

    public function preDispatch(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
        $module = $request->getModuleName();
        $ModelBootstrapPath = APPLICATION_PATH . DIRECTORY_SEPARATOR . 'bootstrap' . DIRECTORY_SEPARATOR . $module . DIRECTORY_SEPARATOR . 'Bootstrap.php';
        if (is_file($ModelBootstrapPath)) {
            Yaf_Loader::import($ModelBootstrapPath);
            $className = $module . 'Bootstrap';
            new $className($request, $response);
        }
    }

    public function postDispatch(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
    }

    public function dispatchLoopShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
    }

    public function preResponse(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
    }
} 