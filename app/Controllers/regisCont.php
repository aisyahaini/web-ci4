<?php

		namespace App\Controllers;
		use App\Models\userModel;

		class regisCont extends BaseController
		{
            protected $user;
            protected $data;
			protected $password;
            
			function __construct()
			{
				helper('form');
				$this->validation = \Config\Services::validation();
				$this->user = new userModel();
			}

			public function register()
			{
				$user['register'] = $this->user->findAll();
				return view('v_register');
			}

			public function user_add()
			{
				$data = $this->request->getPost();
				$validate = $this->validation->run($data, 'user');
				$errors = $this->validation->getErrors();

				if(!$errors){
					$password = (string) $this->request->getPost('password');
					$user = [ 
						'username' => $this->request->getPost('username'),
						'password' => md5($password),
                        'role' => 'guest',
                    ];
                    
                    $this->user->insert($user); 
					return redirect('register')->with('success','Akun Berhasil Didaftarkan');
				}else{
					return redirect('register')->with('failed',implode("<br>",$errors));
				}   
            } 
        }
?>