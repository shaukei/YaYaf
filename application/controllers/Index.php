<?php
/**
 * Created by PhpStorm.
 * User: bleso
 * Date: 14/11/3
 * Time: 下午1:03
 */

class SiteController extends Yaf_Controller_Abstract{
    public $actions = array(
        'register'  =>  'controllers/Site/register.php',
    );

    public function init() {

    }
} 