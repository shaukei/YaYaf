<?php
/**
 * Created by PhpStorm.
 * User: bleso
 * Date: 14/11/3
 * Time: 下午2:41
 */

class ErrorController extends Yaf_Controller_Abstract {
    public function init() {

    }

    public function errorAction($exception) {
        switch ($exception->getCode()) {
            case YAF_ERR_NOTFOUND_MODULE:
            case YAF_ERR_NOTFOUND_CONTROLLER:
            case YAF_ERR_NOTFOUND_ACTION:
            case YAF_ERR_NOTFOUND_VIEW:
                $this->getView()->assign('code', $exception->getCode());
                $this->getView()->assign('message', $exception->getMessage());
                break;
            default :
                $this->getView()->assign('code', $exception->getCode());
                $this->getView()->assign('message', $exception->getMessage());
                break;
        }
        //}
    }
} 