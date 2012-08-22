<?php
foreach ($messages as $elem) {
  echo  '<div class="row" >';
    echo '<div class="span8">', '$messages["text"]','</div>';
    echo '<div class="span2">', '$messages["sender_id"]','</div>';
    echo '<div class="span2">', '$messages["created"]','</div>';
}