<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Profile extends Controller
{
    public function index()
    {
        $session = session();
        $data['user'] = $session->get('user');

        return view('profile', $data);
    }
}
