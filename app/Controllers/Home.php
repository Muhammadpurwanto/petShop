<?php

namespace App\Controllers;

class Home extends BaseController
{
    private Sessions $session;
    public function __construct()
    {
        $this->session = new Sessions();
    }
    public function index(): string
    {
        $user = $this->session->currentUser();
        if($user == null){
            $data = [
                'title' => 'Home|index'
            ];
            return view('/home/index.php', $data);
        }else{
            $data = [
                'title' => 'Home|dasboard',
                'user' => $user
            ];
            return view('/home/dasboard.php', $data);
        }
    }
}
