<?php   
namespace Modules\Admin\Http\Controllers;

use Auth;
use DB;
use Modules\Admin\Entities\Admin;
use Modules\Admin\Entities\Permission;
use Modules\Admin\Entities\Role;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;

class AdminController extends Controller
{
    use ValidatesRequests;

    public function index()
    {
        return view('admin::admin.dashboard');
    }

    public function getLogin()
    {
        return view('admin::admin.login');
    }

    public function postLogin(Request $request)
    {
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];        
        $remember_me = true;
 
        if(Auth::guard('admins')->attempt($credentials, $remember_me))
        {
            return redirect('/admin/dashboard');
        }
        return redirect()->back();
 
    }
 
    public function getLogout(){
        Auth::guard('admins')->logout();
        session()->flush();
        return redirect()->guest('/authenticate/login');
    }

    public function listAdmin()
    {
        $admins = Admin::all();
        return view('admin::admin.list_admin',compact('admins'));
    }

    public function createAdmin()
    {
        $roles = Role::all();
        return view('admin::admin.create_admin',compact('roles'));
    }

    public function saveAdmin(Request $req)
    {
        $this->validate($req, [
            'name' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:6',
        ]);
        $admin = Admin::create([
            'name' => $req['name'],
            'email' => $req['email'],
            'password' => bcrypt($req['password']),
        ]);
        if($req->roles)
        {
            foreach ($req->roles as $role_id => $value)
            {
                $admin->attachRole($role_id);
            } 
        }

        return redirect()->back()->with('success','Tạo mới tài khoản thành công!');
    }

    public function editAdmin($id)
    {
        $admin = Admin::find($id);
        $roles = Role::all();
        return view('admin::admin.edit_admin',compact('admin','roles'));
    }

    public function updateAdmin(Request $req,$id)
    {
        DB::table('role_admin')->where('admin_id',$id)->delete();
        $admin = Admin::find($id);
        $admin->name = $req->name;
        $admin->email = $req->email;
        if($req->password)
        {
            $admin->password = bcrypt($req['password']);
        }
        $admin->save();
        if($req->roles)
        {
            foreach ($req->roles as $role_id => $value)
            {
                $admin->attachRole($role_id);
            } 
        }
        return redirect()->route('get.admin.list')->with('success','Cập nhật tài khoản '.$admin->email.' thành công');
    }

    public function deleteAdmin($id)
    {
        DB::table('admins')->where('id',$id)->delete();
        return redirect()->back()->with('success','Xóa tài khoản thành công');
    }
}