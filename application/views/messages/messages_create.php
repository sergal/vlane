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
        echo form_textarea(array('name' => 'text', 'class' => 'input-xlarge', 'Placeholder' => 'Ваше сообщение здесь'));
        echo "<br>";
        echo form_submit(array('value' => 'Отправить', 'class' => 'btn btn-primary'));
        echo form_close();

        ?>
<div>



