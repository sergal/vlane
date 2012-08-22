<?php
foreach ($messages as $elem) {
  echo  '<div class="row" >';
    echo '<div class="span8">', '$elem["text"]','</div>';
    echo '<div class="span2">', '$elem["sender_id"]','</div>';
    echo '<div class="span2">', '$elem["created"]','</div>';
}