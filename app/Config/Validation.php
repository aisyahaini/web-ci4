<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
		// Rules
		// --------------------------------------------------------------------

		public $barang = [
			'nama' => [
				'rules' => 'required|min_length[5]',
			],
			'harga' => [
				'rules' => 'required|integer',
			],
			'jumlah'=>[
				'rules' => 'required|integer',
			],
		];

		public $barang_errors = [
			'nama' => [
				'required' =>'{field} Harus Diisi',
				'min_length' => '{field} minimal 5 karakter<br>',
			],
			'harga' => [
				'required' => '{field} Harus Diisi',
				'integer' => '{field} harus angka <br>'
			],
			'jumlah'=>[
				'required' => '{field} Harus Diisi',
				'integer' => '{field} harus angka <br>'
			],
		];

        public $user = [
            'username' => [
				'rules' => 'required|min_length[2]',
			],
            'password' => [
				'rules' => 'required|min_length[2]',
			],
        ];

        public $password = [
            'password' => [
				'rules' => 'required|min_length[2]',
			],
        ];      
        
        public $users = [
            'password' => [
                'rules' => 'required|min_length[8]',
            ],
        ];
    
        public $users_errors = [
            'password' => [
                'required' =>'{field} Harus Diisi',
                'min_length' => '{field} Minimal 8 Karakter',
            ],
        ];
    }