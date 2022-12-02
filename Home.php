<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function barang()
    {
        return view('barang.php');
    }
    public function anu()
    {
        return view('home.php');
    }
    public function device()
    {
        return view('device.php');
    }
}
?>
