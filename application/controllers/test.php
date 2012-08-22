<?php

class test extends CI_Controller
{
    public function count_unread_messages($user_id)
    {
        $this->load->model("Message_model");
        $count = $this->Message_model->count_unread_messages($user_id);
        echo $count;
    }

    public function search_name($like)
    {
        $this->load->model("Search_model");
        $name = $this->Search_model->search_name($like);
        echo $name;
    }

    public function get_messages($user_id, $received)
    {
        $this->load->model("Message_model");
        var_dump($this->Message_model->get_messages($user_id, $received));
    }

    public function delete_message($id)
    {
        $this->load->model("Message_model");
        $this->Message_model->delete_message($id);
    }

    public function get_groups($season_id)
    {
        $this->load->model('Group_model');
        $groups = $this->Group_model->get_groups($season_id);
        foreach ($groups as $elem) {
            echo $elem['id'], "<br>";
            echo $elem['name'], "<br>";
        }

    }

    public function send_message($text, $sender, $receiver)
    {
        $this->load->model("Message_model");
        $this->Message_model->send_message($text, $sender, $receiver);
    }

    public function add_friend($friend_id, $user_id)
    {
        $this->load->model('Friends_model');
        $this->Friends_model->add_friend($friend_id, $user_id);
    }

    public function delete_friend($friend_id, $user_id)
    {
        $this->load->model('Friends_model');
        $this->Friends_model->delete_friend($friend_id, $user_id);
    }

    public function get_friends($user_id)
    {
        $this->load->model("Friends_model");
        var_dump($this->Friends_model->get_friends($user_id));
    }
}

?>