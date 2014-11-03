<?php
/**
 * Ya Yaf
 *
 * @author  Bleso
 * @date    2014-11-03 11:38
 * @version $Id$
 */

define('PROJECT_PATH', dirname(__DIR__));
define('APPLICATION_PATH', PROJECT_PATH . DIRECTORY_SEPARATOR . 'application');
define('CONFIG_PATH', PROJECT_PATH . DIRECTORY_SEPARATOR . 'config');

(new Yaf_Application(CONFIG_PATH . DIRECTORY_SEPARATOR . 'application.ini', 'YaYaf'))->bootstrap()->run();