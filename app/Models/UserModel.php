<?php namespace App\Models;

		use CodeIgniter\Model;

		class UserModel extends Model
		{
		    protected $table = 'user'; 
		    protected $primaryKey = 'id';
			protected $username = 'username';
			protected $pasword = 'password';
		    protected $allowedFields = [
		        'username','password','role'
		    ];  
		}