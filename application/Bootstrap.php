<?php
/**
 * Created by PhpStorm.
 * User: bleso
 * Date: 14/11/3
 * Time: 上午11:43
 */

class Bootstrap extends Yaf_Bootstrap_Abstract{
    public function _initPlugin(Yaf_Dispatcher $dispatcher) {
        $dispatcher->registerPlugin(new SystemPlugin());
    }

    public function _initLoadFunc() {
        foreach(glob(APPLICATION_PATH . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR . 'Functions' . DIRECTORY_SEPARATOR . '*.php') as $phpfile)
            Yaf_Loader::import($phpfile);
    }
} 