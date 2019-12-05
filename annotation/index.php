<?php
/**
 * Created by PhpStorm.
 * User: lijiefeng
 * Date: 2019/12/4
 * Time: 下午1:59
 */


require __DIR__."/vendor/autoload.php";
$obj = new \App\Http\Controller\HomeController();
$re = new ReflectionClass($obj);
//$str = $re->getDocComment();
$method = $re->getMethods();