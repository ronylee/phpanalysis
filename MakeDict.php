<?php

ini_set('memory_limit', '1280M');

//引入自动加载文件
include './vendor/autoload.php';

header('Content-Type: text/html; charset=utf-8');

//创建对象
$pa = new \ronylee\phpanalysis\PhpAnalysis;
$pa->MakeDict( 'src/dict/not-build/base_dic_full.txt',  'src/dict/base_dic_full.dic');

echo "OK";
