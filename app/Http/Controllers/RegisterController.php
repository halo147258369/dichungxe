<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Member;

class RegisterController extends Controller
{
	protected $model;
	public function __construct(Member $model)
	{
		$this->middleware('guest');
		$this->model = $model;
	}

	public function getRegister()
	{
		return view('guest.register');
	}

	public function postRegister(Request $req)
	{
		$validatedData = $req->validate([
			'name' => ['required', 'string', 'max:255'],
			'email' => ['required', 'string', 'email', 'max:255', 'unique:members'],
			'phone' => ['required', 'string', 'max:255', 'unique:members'],
			'password' => ['required', 'string', 'min:8'],
		]);

		$data = $req->only($this->model->fillable);
		$this->model->create($data);
		return redirect()->route('guest.login.get')->with('status', 'Đăng ký thành công!');
	}
}
