<table class="table table-bordered table-striped">
<thead><tr><td>Имя</td><td>Город</td><td>Школа</td><td>Класс</td><td>Отряд</td></tr></thead><tbody>
<?php
$i = 0;
foreach ($result as $num)
{
echo "<tr><td><a href='http://localhost/index.php/users/show/".$num["id"]."'>";
echo $num["name"];
echo "</a></td><td>";
echo $num["city"];
echo "</td><td>";
echo $num["school"];
echo "</td><td>";
echo $num["class"];
echo "</td><td>";
echo $group[$i][0]["name"]." aka ".$group[$i][0]["nickname"];
echo "</td></tr>";
$i++;
}
?></tbody></table>