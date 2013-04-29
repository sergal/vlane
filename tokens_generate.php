<?php
mysql_connect('localhost', 'root', '');
mysql_error();
if($_GET['act'] == 'check'):
    $query = "SELECT DISTINCT token FROM vlane.tokens";
    $result = mysql_query($query);
    while($row = mysql_fetch_array($result)){
         $res[] = $row;
    }
print_r($res);
die();
endif;
for($i = 1; $i < 225; $i++){
    //Уникальность будет...точно...
    $arr_rand[$i] = rand(0, 9).md5(sha1(md5(rand(1, 100).sha1(rand(0,10).time()+rand(rand(3,100), rand(101, 1000)).rand(1, 100)).rand(1, 10))).rand(1, time())).rand(0,9);
}
foreach($arr_rand as $i=>$value){
    mysql_query("INSERT INTO vlane.tokens VALUES('$i' ,'$value')") or die(mysql_error());
}