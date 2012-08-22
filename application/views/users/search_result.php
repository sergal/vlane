<table class="table table-bordered table-striped">
<thead><tr><td>Имя</td><td>Город</td><td>Школа</td><td>Класс</td></tr></thead><tbody>
<?php
foreach ($result as $num)
{
echo "<tr><td>";
echo $num["name"];
echo "</td><td>";
echo $num["city"];
echo "</td><td>";
echo $num["school"];
echo "</td><td>";
echo $num["class"];
echo "</td></tr>";
}
?></tbody></table>