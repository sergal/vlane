<?php
/*
 * Контроллер информации о пользователе
 */
class Users extends Base_Controller
{
    public function index()
    {
        $this->load->helper('url');
        if (isset($_COOKIE['ci_session'])) {
            redirect('users/show', 'location');
        } else {
            redirect('users/login', 'location');
        }
    }

    //Метод отображения имени пользователя
    public function show($id = null)
    {
        $this->load->library('session');
        if ($id == null) {
            $id = $this->session->userdata('user_id');
        }
        $this->set_header();
        $this->load->model("User_model");
        $this->load->model("Group_model");
        $this->load->model("Friends_model");
        $data["user"] = $this->User_model->get_user($id);
        $data["groups"] = $this->Group_model->get_by_user($id);
        $data["user_id"] = $this->session->userdata('user_id');
        $data["check_friend"] = $this->Friends_model->check_friend($id, $data["user_id"]);
        $this->load->view("users/show", $data);
        $this->load->view("footer");
    }

//Метод отображения школы
    public
    function school($name_school)
    {
        $this->set_header();
        $this->load->model("User_model");
        $data["school"] = $this->User_model->get_by_school($name_school);
        $this->load->view("users/show", $data);
        $this->load->view("footer");
    }

//Метод отображения города
    public
    function city($city)
    {
        $this->set_header();
        $this->load->model("User_model");
        $data["city"] = $this->User_model->get_by_city($city);
        $this->load->view("users/show", $data);
        $this->load->view("footer");
    }

//Метод отображения отряда
    public
    function group($group)
    {
        $this->set_header();
        $this->load->model("User_model");
        $this->load->model("Group_model");
        $data["users"] = $this->User_model->get_by_group($group);
        $data["group"] = $this->Group_model->get_group($group);
        $this->load->view("users/group", $data);
        $this->load->view("footer");
    }

//Метод логина
    public
    function login()
    {
        $this->set_header();
        $this->load->model("User_model");
        $this->load->helper('url');
        $login = $this->input->post('login');
        $pass = $this->input->post('password');
        $result = $this->User_model->get_by_login($login);
        if ($pass != null && $result['password'] == $pass) {
            $this->load->library('session');
            $user_data = array(
                'username' => $result['name'],
                'user_id' => $result['id']
            );
            $this->session->set_userdata($user_data);
            $test = $this->session->userdata('username');
            \
                redirect('/users/show/' . $result['id'], 'location');
        } else {
            $this->load->view('users/login');
        }
        $this->load->view("footer");
    }

    public
    function logout()
    {
        $this->load->helper('url');
        $this->load->helper('cookie');
        $this->load->library('session');
        if ($this->input->cookie('ci_session') != null) {
            $this->session->sess_destroy();
            redirect('users/login', 'location');
        }
    }

    public function add_friend()
    {
        $this->load->model("Friends_model");
        $this->load->helper('url');
        $id = $this->input->post("fid");
        $this->load->library('session');
        $uid = $this->session->userdata('user_id');
        if ($this->Friends_model->check_friend($id, $uid)) {
            $this->Friends_model->add_friend($id, $uid);
        }
        redirect("users/get_friends");
    }

    public function del_friend()
    {
        $this->load->model("Friends_model");
        $this->load->helper('url');
        $id = $this->input->post("fid");
        $this->load->library('session');
        $uid = $this->session->userdata('user_id');
        $this->Friends_model->delete_friend($id, $uid);
        redirect("users/get_friends");
    }

    public function get_friends()
    {
        $this->load->model("Friends_model");
        $this->load->model("User_model");
        $this->load->model("Search_model");
        $this->load->library('session');
        $data["user_id"] = $this->session->userdata('user_id');
        $friends = $this->Friends_model->get_friends($this->session->userdata('user_id'));
        $i = 0;
        if (!empty($friends)) {
            foreach ($friends as $fid) {
                $data["friends"][$i] = $this->User_model->get_user($fid["friend_id"]);
                $data["group"][$i] = $this->Search_model->search_group($data["friends"][$i]["id"]);
                $i++;
            }
        }
        $this->set_header(3);
        $this->load->view("users/friends", $data);
        $this->load->view("footer");
    }
}