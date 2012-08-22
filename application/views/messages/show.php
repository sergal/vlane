<?php
foreach ($messages as $elem) : ?>
  <div class="row">';
      <div class="span4">
          <?php echo $elem["name"] ?>
          <br>
          <?php echo $elem["created"] ?>
          <br>
          <?php echo form_submit('mysubmit', 'Ответить') ?>
      </div>
      ;
      <div class="span8">
          <?php echo $elem["text"] ?>
      </div>
      ;
<?php endforeach ?>