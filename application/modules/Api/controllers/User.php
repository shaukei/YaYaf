<?php
/**
 * Created by PhpStorm.
 * User: bleso
 * Date: 14/11/3
 * Time: 下午1:00
 */

class UserController extends Yaf_Controller_Abstract{
    public $actions = array(
        'info'  =>  'modules/Api/controllers/User/info.php',
    );

    public function init() {

    }
} 