<?php

class Home extends Controller
{
    public function index($a = '', $b = '')
    {
        $user = new User;


        $this->view('home');
    }
}
