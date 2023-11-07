<?php
namespace App\Controllers;
use App\Models\UserModel;

class ProfileController extends BaseController
{
    protected $user;

    function __construct()
    {
        helper ('form');
        $this->validation = \Config\Services::validation();
        $this->user = new userModel();
    }

    public function profile()
    {
        $data['user'] = $this->user->findAll();
        return view('v_profile');
    }

    public function edit($id)
    {
        $data = $this->request->getPost();
        $validate = $this->validation->run($data, 'user');
        $errors = $this->validation->getErrors();
        
        if(!$errors){
			$password = (string) $this->request->getPost('password');
            $dataForm = [
                'username' => $this->request->getPost('username'),
                'password' => md5($password),
                'role' => $this->request->getPost('role')
            ];
            $this->user->update($id, $dataForm); 
            return redirect('profile')->with('success','Data Berhasil Diubah');
        }else{
            return redirect('profile')->with('failed',implode("<br>",$errors));
        }
    }

	public function show_all()
    {
        $data['datauser'] = $this->user->findAll();
        return view('v_user', $data);
    }


    public function add_user()
    {
        $data = $this->request->getPost();
        $validate = $this->validation->run($data, 'user');
        $errors = $this->validation->getErrors();
        if(!$errors){
            $password = (string) $this->request->getPost('password');
            $dataForm = [
                'username' => $this->request->getPost('username'),
                'password' => md5($password),
                'role' => $this->request->getPost('role')
            ];
            if($this->user->where('username', $dataForm['username'])->first()){
                return redirect('datauser')->with('failed','Username sudah ada');
            }
            $this->user->insert($dataForm); 
            return redirect('datauser')->with('success','Data Berhasil Ditambahkan');
        }else{
            return redirect('datauser')->with('failed',implode("<br>",$errors));
        }
    }

}