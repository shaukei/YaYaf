<?php
/*
  +----------------------------------------------------------------------+
  | GregwarController                                                              |
  +----------------------------------------------------------------------+
  | Copyright (c) 2012-2014 Bleso Chung                                  |
  +----------------------------------------------------------------------+
  | This source file is subject to version 3.01 of the PHP license,      |
  | that is bundled with this package in the file LICENSE, and is        |
  | available through the world-wide-web at the following url:           |
  | http://www.php.net/license/3_01.txt                                  |
  | If you did not receive a copy of the PHP license and are unable to   |
  | obtain it through the world-wide-web, please send a note to          |
  | license@php.net so we can mail you a copy immediately.               |
  +----------------------------------------------------------------------+
  | Author:  Syber       <1881191@gmail.com>                             |
  +----------------------------------------------------------------------+
*/

class GregwarController extends Yaf_Controller_Abstract{
    public function init() {

    }

    public function captchaAction() {
        $builder = new Gregwar\Captcha\CaptchaBuilder;
        $builder->build(80, 30);
        $this->getView()->assign(
            'captcha_data',
            $builder->inline()
        );
    }
} 