<?php namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function create()
    {
        $model = new UserModel();
        $data = [
            'username' => $this->request->getPost('username'),
            'email'    => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
        ];
        $model->save($data);
        return redirect()->to('/login');
    }

    public function login()
    {
        return view('login');
    }

    public function check()
    {
        $model = new UserModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $model->where('email', $email)->first();
        if ($user && password_verify($password, $user['password'])) {
            session()->set('logged_in', true);
            session()->set('user_id', $user['id']);
            return redirect()->to('/home');
        } else {
            return redirect()->to('/login')->with('error', 'Login tidak valid, tolong periksa kembali email dan password dengan benar.');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
