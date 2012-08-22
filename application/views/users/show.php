<div class="row">
    <div class="span12">
        <h1><strong><center>Моя страница</center></strong></h1>
    </div>
</div>
<div class="row">
     <div class="span4">
         <?php

         echo '<img src="/web/img/'.$user["photo"].'" alt="фото">';
         ?>
     </div>
     <div class="span8">
         <h2>
         <?php
         echo $user["name"];
         ?>
         </h2>
         <?php
         echo $user["city"];
         echo"<br>";
         echo $user["birthday"];
         echo"<br>";
         echo $user["school"];
         echo "<br>"."<br>";
                 echo "<h3></h3>";
         echo "<strong>"."Список отрядов :"."</strong>"."<br>"."<br>";
         ?>
         <ul>
                             <?php
         foreach($groups as $group){
                                               echo "<li>"."<a href=/users/group/".$group["id"].">".$group["name"]."</a>"." ";
             echo "(".$group["type"]."-".$group["year"].")</li>";
         }
                  ?><br><form action="../../friends/add/" method="post">
             <input type="submit" value="Добавить в друзья" class="btn-large">
         <input type="hidden" value="<?php echo $user["id"] ?>"></form>
                          <ul>
     </div>
</div>
