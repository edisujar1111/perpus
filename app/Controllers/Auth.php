<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function cek_login()
    {
        return redirect()->to('admin');
    }
}
