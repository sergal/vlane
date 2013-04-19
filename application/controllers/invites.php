<?php
class Invites extends Base_Controller {
    public function compare_tokens($id, $token){
        $this->load('Invites_model');
        $this->load('User_model');
        $token_r = $this->Invites_model->get_token_by_id($id);
        if(!$token_r){
            $data['token_status'] = FALSE;
        }
        if($token == $token_r){
            $res = $this->_rand_login_and_password();
            $login = $res['login'];
            $password = $res['pass'];
            $this->User_model->register_user($login, $password);
            $this->Invites_model->token_used($token);
        } else {
            throw new Exception('Something went wrong');
        }
    }
    private function _rand_login_and_password(){
        $login = '';
        $pass = '';
        for($i = 0;$i <= 6; $i++){
            $rand = rand(0,1);
            switch($rand){
                case 0:
                    $login .= rand(1, 9);
                    $pass .= rand(1, 9);
                break;
                case 1:
                    $login .= chr(rand(0, 127));
                    $pass .= chr(rand(0, 127));
                break;
            }
        }
        $return['login'] = $login;
        $return['pass'] = $pass;
        return $return;
    }
}