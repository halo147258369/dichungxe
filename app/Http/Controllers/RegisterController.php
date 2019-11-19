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
		$this->model=$model;
	}
	
	public function getRegister() {
		return view('guest.register');
	}

	public function postRegister(Request $req)
    {
		$data = $req->only($this->model->fillable);
		$this->model->create($data);
		return redirect()->route('guest.login.get');
    }
}
