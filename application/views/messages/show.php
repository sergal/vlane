<table class="table table-bordered table-striped">
    <thead><tr><td>Имя</td><td>Дата</td><td>Сообщение</td></tr></thead><tbody>
<?php
foreach ($messages as $msg)
{
    echo "<tr><td><a href='".site_url("/users/show")."/".$msg["user_id"]."'>";
    echo $msg["name"];
    echo "</a></td><td>";
    echo $msg["created"];
    echo "</td><td>";
    echo $msg["text"];
    echo "</td>";
}
?>

</tbody></table>

