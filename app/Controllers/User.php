<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class User extends BaseController
{
    private $userModel;

	public function __construct()
	{
		$this->userModel = new UserModel();
	}

	public function index()
	{
		return view('home');
	}

	public function login()
	{
		return view('login');
	}

	public function lista()
	{
		echo view('include_files/header');
        echo view('include_files/nav');
		return view('users/users', [
			'users' => $this->userModel->paginate(10),
			'pager' => $this->userModel->pager
		]);
	}

	public function delete($user_id)
	{
		if ($this->userModel->delete($user_id)) {
			return redirect()->to('lista');
			// echo view('messages', [
			// 	'message' => 'Usuário Excluído com Sucesso'
			// ]);
		} else {
			echo "Erro.";
		}
	}

	public function create() {
        $inputs = $this->validate([
            'name' => 'required|min_length[5]',
            'email' => 'required|valid_email',
            'password' => 'required|min_length[5]|alpha_numeric',
            'confirm_password' => 'required|matches[password]',
            'phone' => 'required|numeric|regex_match[/^[0-9]{10}$/]',
            'address' => 'required|min_length[10]'
        ]);

        if (!$inputs) {
            return view('cad_user', [
                'validation' => $this->validator
            ]);
        }
    }

	public function store()
	{
		if ($this->userModel->save($this->request->getPost())) {
			return view("messages", [
				'message' => 'Usuário salvo com sucesso'
			]);
		} else {
			echo "Ocorreu um erro.";
		}
	}

	public function edit($id)
	{
		return view('form', [
			'user' => $this->userModel->find($id)
		]);
	}

	public function send_cert()
    {
        echo 'x';
    }
}
