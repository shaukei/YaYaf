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
} 