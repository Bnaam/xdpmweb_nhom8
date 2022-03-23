<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

use App\Models\UserModel;

use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    private $users;

    public function __construct()
    {
        $this->users = new UserModel();
    }

    public function login()
    {       
        
        
        return view('admin.login');
    }

    public function loginCheck(Request $request)
    {       
        $users = $this->users->getAllUsers();
        
        $usercheck = $this->users->getUserByEmail($request->txt_email);
        foreach($users as $key => $data)
            if($data->email == $request->txt_email && $data->password == md5($request->txt_password)
            && $usercheck[0]->role == "Admin")
            {
                session()->put('admin_id', $data->makh);
                session()->put('admin_name', $data->tenkh);

                $admin_name = session()->get('admin_name');
                $se = array('name' => $admin_name);
                return view('admin.index');
            }else{
                Session::put('message','Mật khẩu hoặc tài khoản bị sai');
                Session::put('color','red');
                return view('admin.login');
            }
            
       
    }


    public function index()
    {       
        $usersList = $this->users->getAllUsers();
        
        return view('admin.users.user', compact('usersList'));
    }

    public function addUserForm()
    {       
      
        
        return view('admin.users.useradd');
    }

    public function addUser(Request $request)
    {
        $request->validate(
            [
                'txt_ten' => 'required',
                'email' => 'required|email|unique:user',
                'txt_sdt' => 'required|digits:10',
        ],
            [
                'txt_ten.required' => '*Họ tên bắt buộc nhập',
                'email.required' => '*Email bắt buộc nhập',
                'email.email' => '*Email không đúng định dạng',
                'email.unique' => '*Email đã tồn tại',
                'txt_sdt.required' => '*SĐT bắt buộc nhập',
                'txt_sdt.digits' => '*SĐT không hợp lệ',
        ]);

        $data = [
            $request->txt_ten,
            $request->email,
            md5($request->txt_password),
            $request->txt_sdt,
            $request->txt_diachi,
            $request->cbx_role,
            $request->rad_gt,
        ];

        $this->users->addUser($data);
       
        return redirect()->route('users.index');
    }

    public function editUserForm($id)
    {       
        

        if(!empty($id))
        {
            $detail =  $this->users->getDetail($id);
            $detail = $detail[0];
        }else{
            return redirect()->route('users.index');
        }
  
        return view('admin.users.useredit', compact('detail'));
    }

    public function editUser(Request $request, $id=0)
    {
        $request->validate(
            [
                'txt_ten' => 'required',
                'email' => 'required|email',
                'txt_sdt' => 'required|digits:10',
        ],
            [
                'txt_ten.required' => '*Họ tên bắt buộc nhập',
                'email.required' => '*Email bắt buộc nhập',
                'email.email' => '*Email không đúng định dạng',
               
                'txt_sdt.required' => '*SĐT bắt buộc nhập',
                'txt_sdt.digits' => '*SĐT không hợp lệ',
        ]);

        $dataUpdate = [
            $request->txt_ten,
            $request->email,
            $request->txt_password,
            $request->txt_sdt,
            $request->txt_diachi,
            $request->cbx_role,
            $request->cbx_trangthai,
            $request->rad_gt,
        ];

        $this->users->updateUser($dataUpdate, $id);

        return redirect()->route('users.index');
    }

    public function deleteUser($id)
    {
        if(!empty($id))
        {
            $this->users->deleteUser($id);
            return redirect()->route('users.index');
        }else{
            return redirect()->route('users.index');
        }

    }

    public function search(Request $request)
    {       
    
        $usersList = $this->users->searchUser($request->txtkey);
        
        return view('admin.users.user', compact('usersList'));
    }


    public function postLogin(Request $request)
    {
       $users = DB::table('user')
                ->get();
               
                foreach($users as $key => $data)
                    if($data->email == $request->email && $data->password == md5($request->password))
                    {
                        session()->put('userid', $data->makh);
                        session()->put('email', $data->email);
        
                        $email = session()->get('email');
                      
                        return redirect('index');
                    } 
        
        
           return view('userpage.login2');
        
    }
}
