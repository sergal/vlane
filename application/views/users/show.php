<div class="row">
    <div align="center" class="span12">
        <p align="center"><h1><strong>Моя страница</strong></h1></p>
    </div>
</div>
<div class="row">
     <div class="span4">
         <img src="photo.jpg" alt="Здесь будет фото">
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
         echo $group["name"];
         echo "(";
         echo $group["season_id"]
         ?>
     </div>
</div>
