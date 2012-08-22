<?php
foreach ($messages as $elem) : ?>
  <div class="row">
      <p>
      <div class="span4">
          <?php echo $elem["name"] ?>
          <br>
          <?php echo $elem["created"] ?>
          <br>

      </div>

      <div class="span8">
          <?php echo $elem["text"] ?>
      </div>
      </p>
   </div>
<?php endforeach ?>