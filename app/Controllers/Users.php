<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Users extends BaseController
{
    protected UsersModel $userModel;
    protected Sessions $session;
    public function __construct()
    {
        $this->userModel = new UsersModel();
        $this->session = new Sessions();
    }
    public function registrasi()
    {
        $data = [
            'title' => 'Form Registrasi'
        ];
        return view('/users/registrasi.php', $data);
    }
    public function postRegistrasi()
    {
        $dataForm = [
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'name' => $this->request->getVar('name'),
            'image' => $this->request->getFile('image')->getRandomName(),
        ];

        $rules = [
            'email' => 'required|is_unique[users.email]',
            'password' => 'required|min_length[8]|max_length[12]',
            'name' => 'required',
            'image' => 'max_size[image,3075]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png]'
        ];
        if(!$this->validate($rules)){
            $validation = \Config\Services::validation();
            $data = [
                'title' => 'Form Registrasi',
                'validation' => $validation,
                'input_data' => $this->request->getPost()
            ];
            return view('/users/registrasi.php', $data);
        }
        $fileImage = $this->request->getFile('image');
        if($fileImage->getError() == 4){
            $dataForm['image'] = 'defaultUser.jpg';
        }else{
            $fileImage->move('img',$dataForm['image']);
        }

        $this->userModel->save($dataForm);

        session()->setFlashdata('pesan','Data Berhasil Ditambahkan.');
        return redirect()->to(base_url('/users/login'));
    }

    public function login()
    {
        $data = [
            'title' => 'Users|login'
        ];
        return view('/users/login.php', $data);
    }
    public function postLogin()
    {
        $dataForm = [
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
        ];

        $user = $this->userModel->where(['email' => $dataForm['email']])->first();
        // dd($user);

        if($user != null && password_verify($dataForm['password'], $user['password'])){
            $data = [
                'title' => 'Users|login',
            ];

            $this->session->createUser(intval($user['id']));
            return redirect()->to(base_url("/"));
        }else{
            $data = [
                'title' => 'Users|login'
            ];
            session()->setFlashdata('error','User or password is wrong.');
            return view('/users/login',$data);
            
        }
    }
    public function akun()
    {
        $data = [
            'title' => 'Users|akun',
            'user' => $this->session->currentUser(),
            'akun' => true
        ];
        return view('/users/akun.php', $data);
    }
    public function postAkun()
    {
        $user = $this->session->currentUser();
        $dataForm = [
            'id' => $user['id'],
            'email' => $this->request->getVar('email'),
            'password' => $user['password'],
            'name' => $this->request->getVar('name'),
            'image' => $this->request->getFile('image')->getRandomName(),
        ];

        if($user['email'] == $dataForm['email']){
            $rule_email = 'required';
        }else{
            $rule_email = 'required|is_unique[users.email]';
        }

        $rules = [
            'name' => 'required',
            'email' => $rule_email,
            'image' => 'max_size[image,3075]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png]'
        ];
        if(!$this->validate($rules)){
            $validation = \Config\Services::validation();
            $data = [
                'title' => 'Form Update',
                'validation' => $validation,
                'akun' => true,
                'user' => $user
            ];
            return view('/users/akun.php', $data);
        }

        $fileImage = $this->request->getFile('image');
        if($fileImage->getError() == 4){
            $dataForm['image'] = $this->request->getVar('old_image');
        }else{
            $fileImage->move('img',$dataForm['image']);
            if(file_exists('img/'. $this->request->getVar('old_image'))){
                unlink('img/'.$this->request->getVar('old_image'));
            }
        }

        // $db->table('users')->update($dataForm);
        $this->userModel->save($dataForm);

        session()->setFlashdata('pesan','Data Berhasil Diupdate.');
        return redirect()->to(base_url('/'));
    }
    public function password()
    {
        $user = $this->session->currentUser();
        $data = [
            'title' => 'Ganti Password',
            'user' => $user,
            'akun' => true
        ];
        return view('/users/password.php', $data);
    }
    public function postPassword()
    {
        $user = $this->session->currentUser();
        $dataForm = [
            'old_password' => $this->request->getPost('old_password'),
            'new_password' => $this->request->getPost('new_password'),
            'konfirmasi_password' => $this->request->getPost('konfirmasi_password'),
        ];
        $rules = [
            'old_password' => 'required',
            'new_password' => 'required|min_length[8]|max_length[12]',
            'konfirmasi_password' => 'required',
        ];
        
        if(!$this->validate($rules)){
            $validation = \Config\Services::validation();
            $data = [
                'title' => 'Form Update',
                'validation' => $validation,
                'akun' => true,
                'user' => $user
            ];
            return view('/users/password.php', $data);
        }
        if(password_verify($dataForm['old_password'], $user['password']) && $dataForm['new_password'] == $dataForm['konfirmasi_password']){
            $user['password'] = password_hash($this->request->getVar('new_password'), PASSWORD_BCRYPT);
            $this->userModel->save($user);
            session()->setFlashdata('pesan','Berhasil Merubah Password');
            return redirect()->to(base_url("/users/akun"));
        }else{
            session()->setFlashdata('pesan', 'Password Is Wrong');
            return redirect()->to(base_url("/users/password"));
        }
    }
    public function logout()
    {
        $this->session->destroy();
        return redirect()->to(base_url("/"));
    }
}
