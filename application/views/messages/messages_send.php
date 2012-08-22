<div class="row">
    <div class="span4">
        <h1><strong>Новое сообщение</strong></h1>
        <?php
        echo "Кому :" . $user["name"];
        $this->load->helper('form');
        echo form_open('messages/send/'.$user["user_id"]);
                ?>
    </div>
    <div class="span8">
        <?php
        echo form_textarea(array('value' => 'text', 'class' => 'input-xlarge'));
        echo "<br>";
        echo form_submit('submit', 'Отправить');
        ?>
<div>



