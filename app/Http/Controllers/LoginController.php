<?php
namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:member')->except('getLogout');
    }

    /**
     * Show the login form.
     * 
     * @return \Illuminate\Http\Response
     */
    public function getLogin()
    {
        return view('guest.login');
    }

    /**
     * Login the admin.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postLogin(Request $request)
    {
        //Validation...
        $this->validator($request);

        //
        //Login ... If Authentication passed redirect to dashboard
        if(Auth::guard('member')->attempt($request->only('email','password'),$request->filled('remember'))){
            if(Auth::guard('member')->user()->level >= 3) {
                return redirect()
                ->intended(route('admin.statistical.list.get'))
                ->with('status','You are Logged in as Admin!');
            }
            return redirect()
                ->intended(route('member.dashboard.view.get'))
                ->with('status','You are Logged in as Member!');
            
        }

        //Authentication failed...
        return $this->loginFailed();
    }

    /**
     * Logout the admin.
     * 
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getLogout()
    {
        Auth::guard('member')->logout();
        return redirect()
            ->route('guest.login.get')
            ->with('status','Member has been logged out!');
    }

    /**
     * Validate the form data.
     * 
     * @param \Illuminate\Http\Request $request
     * @return void
     */
    private function validator(Request $request)
    {
      //validation rules.
        $rules = [
            'email'    => 'required|email|exists:members|min:5|max:191',
            'password' => 'required|string|min:4|max:255',
        ];
        //custom validation error messages.
        $messages = [
            'email.exists' => 'Tài khoản này không tồn tại',
        ];
        //validate the request.
        $request->validate($rules,$messages);
    }

    /**
     * Redirect back after a failed login.
     * 
     * @return \Illuminate\Http\RedirectResponse
     */
    private function loginFailed()
    {
        return redirect()
            ->back()
            ->withInput()
            ->with('error','Đăng nhập thất bại!');
    }
}