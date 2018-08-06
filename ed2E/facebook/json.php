<?php
$json=
'{
"item1":
{"item11":{"n":"chenling","m":"llll"},"sex":"男","age":"25"},
"item2":
{"item21":"ling","sex":"女","age":"24"}
}';
$J=json_decode($json);
echo "通过下面的信息就可以获取里面的信息了</br>";
print_r($J);
print_r("</br>");
echo "测试访问对象内元素</br>";
print_r($J->item1->item11->n."</br>");
print_r($J->item1->sex."</br>");
//注意不是标准的json
print_r($J->item2->age."</br>");
?> 
