<?php

 header('Content-type: text/html; charset=utf-8');

 
 $str = $_POST['a'];

 $str = strtoupper($str);

 
 $ara = array($str);

 
 $str = json_encode($ara);

 if(empty($str)){
    echo "Введите имейл";
 }
 else  echo "Ваш имейл внесен в базу". $str;
