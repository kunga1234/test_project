<?php
namespace App\Http\Controllers\registration;
use App\Models\registration\RoleModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function register()
    {
        $welcome_text="hello";

        $response_data=RoleModel::where('status','Active')->get();
        return view('register')->with(compact('welcome_text','response_data'));
    }  
    public function create_role(Request $request){
        $role_data=[
            'name'    => $request->role_name,
            'status'  => $request->status,
            'created_at' => date('Y-m-d h:i:s'),
            'created_by' => 1,
        ];
                
        RoleModel::create($role_data);
        return redirect()->away('get_role_list/ALL/NA/ALL');
    }
    public function get_role_list($param_type,$id,$status){
        if($param_type=="ALL"){
            $response_data=RoleModel::get();
        }
        if($param_type=="BYID"){
            $response_data=RoleModel::where('id', $id)->get();
        }
        if($param_type=="status"){
            $response_data=RoleModel::where('status', $status)->get();
        }

        //select * from t_role_master;
        return view('registration/list_roles')->with(compact('response_data')); 
     }
    public function edit_role($id){
        $data=RoleModel::where('id',$id)->first();
        return view('edit_roles')->with(compact('data'));

    }
   public function delete_role($id){

    RoleModel::where('id',$id)->delete();
    return redirect()->away('/get_role_list/ALL/NA/ALL');
    
   }
   public function update_role(Request $request)
   {
    $role_update = [
            'name'    => $request->role_name,
            'status'  => $request->status,
            'created_at' => date('Y-m-d h:i:s'),
            'created_by' => 1,
    ];
    RoleModel::where('id',$request->recordid)->update($role_update);
    return redirect()->away('/get_role_list/ALL/NALL/ALL');
   }
   public function register_new_user(Request $request)
   {
    $user_data = [
        'full_name'  => $request->full_name,
        'contact_no'  => $request->contact_no,
        'email' => $request->email,
        'password' => $request->password,
        'role_id' => $request->role_id,
        'created_by' => 1,
        'created_at' => date('Y-m-d h:i:s'),
            
    ];
    UserModel::create($user_data);
    return redirect()->away('/get_role_list/ALL/NALL/ALL');
   }
   
   
}
