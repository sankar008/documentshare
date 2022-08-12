<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\Models\Author;
use App\Models\User;
use Config;
use Validator;

class UserController extends Controller
{
  
    public function login(){
        return view('login');
    }
    
     public function index(Request $request)
    {
        if ($request->method() == 'POST') {
           
                $request->validate([
                    'email_id' => 'required|email',
                    'password' => 'required'
                ]);

                $loginData = Author::where(['email_id' => $request->input('email_id')])->first();
                if ($loginData != '') :
                    if (Hash::check($request->input('password'), $loginData['password'])) :
                        $request->session()->put('loginStatus', true);
                        $request->session()->put('loginID', $loginData['id']);
                        $request->session()->put('email_id', $loginData['email_id']);
                        $request->session()->put('name', $loginData['name']);
                        return redirect::to('author/dashboard');
                    else :
                        return redirect::to('author/login')->with('errmsg', Config::get('constants.PASSWORD_ERROR'));
                    endif;
                else :
                    return redirect::to('author/login')->with('errmsg', Config::get('constants.EMAIL_ERROR'));
                endif;
            
        } else {
            return view('admin.author', ['title' => 'Login']);
        }
    }

    public function dashboard(Request $request)
    {    
        return view('admin.dashboard', ['title' => 'Dashboard', 'pub__count' => 0, 'unpub__count' => 0, 'can__count' => 0, 'today__post' => 0, 'comment' => 0]);
    }

    public function userList(Request $request){
        if($request -> method() == 'POST'){

        }else{

            return view('admin.userList', ['userdata' => User::get(), 'title' => 'User List']);
        }
    }


    public function useradd(Request $request){
        if($request -> method() == 'POST'){
            
            $user = new User([
                'name' => $request -> input('name'),
                'mobile_no' => $request -> input('mobile_no'),
                'uid_no' => $request -> input('uid_no'),
                'address' => $request -> input('address')
            ]);

            if($user -> save()){
                return redirect::to('/author/users');
            }else{
                return redirect::to('/author/user/add');
            }

        }else{
            return view('admin.adduser', ['title' => 'Add User']);

        }
    }

    public function userupdate(Request $request){
        if($request -> method() == 'POST'){
              
            $user = User::find($request -> input('update_id'));
            $user -> fill([
                'name' => $request -> input('name'),
                'mobile_no' => $request -> input('mobile_no'),
                'uid_no' => $request -> input('uid_no'),
                'address' => $request -> input('address')
            ]);

            if($user -> save()){
                return redirect::to('author/users');
            }else{
                return redirect::to('author/users/update?update_id='+ $request -> input('update_id'));
            }


        }else{
            return view('admin.updateuser', ['title' => 'Update User', 'data' => User::where('id', $request -> get('update_id'))->first()]);
        }
    }

    public function userdelete(Request $request){
        if($request -> get('id') != ''){
            $user = User::where('id', $request -> get('id'))-> delete();
            return redirect::to('author/users');
        }
    }
}