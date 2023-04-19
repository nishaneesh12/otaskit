<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;
use App\Models\task;
use App\Models\statu;
use App\Models\department;
use Illuminate\Support\Facades\DB;

class Nishcontroller extends Controller {

    public function home() {

        return view('home');
    }

    public function Add_employee_detls() {

        $select_status = statu::select('*')->get();
        $select_dep = department::select('*')->get();
        return view('Add_employee', ['value' => $select_status,'value1'=>$select_dep]);
        
    }

    public function save_employee(Request $request) {
try{
        $name = $request->first_name;
        $email = $request->email;
        $mobile = $request->mobile;
        $depart = $request->depart;
        $status = $request->status;
        

        $data = employee::insertGetId(
                        array('name' => $name, 'email' => $email, 'mobile' => $mobile,
                            'department_id' => $depart, 'status_id' => $status));
        if (!empty($data)) {
            return redirect('Add_employee_detls')->with('message', 'Data Saved Successfully');
//                                        
        } else {
            return redirect('Add_employee_detls')->with('errmessage', 'Data Already Exist');
        }
        } catch (Exception $ex) {
            Log::error($ex);
            return $ex->getMessage();
        }
    }

    public function view_employee_detls() {
try {

        $select = employee::select('*')->get();
        return view('View_employee', ['value' => $select]);
   } catch (Exception $ex) {
            Log::error($ex);
            return $ex->getMessage();
        }
        }

    public function employee_edit(Request $request) {
try {
        $id = $request->id;
//        die();
        $select_status = statu::select('*')->get();
        $select_dep = department::select('*')->get();
        $select = employee::select('*')->where('id', '=', $id)->get();
        return view('Edit_employee', ['value' => $select,'s_value' => $select_status,'d_value' => $select_dep]);
     } catch (Exception $ex) {
            Log::error($ex);
            return $ex->getMessage();
        }             
    }

    public function employee_update(Request $request) {
        try {
            $id = $request->id;
            $name = $request->first_name;
        $email = $request->email;
        $mobile = $request->mobile;
        $depart = $request->depart;
        $status = $request->status;
            $data = employee::where('id', '=', $id)->update(['name' => $name, 'email' => $email, 'mobile' => $mobile,
                'department_id' => $depart, 'status_id' => $status]);

//                            print_r($data);die();
            if (!empty($data)) {
                return redirect('view_employee_detls')->with('message', 'Data Updated Successfully');
//                                        
            } else {
                return redirect('view_employee_detls')->with('errmessage', 'Data Already Exist');
            }
        } catch (Exception $ex) {
            Log::error($ex);
            return $ex->getMessage();
        }
    }

    public function employee_delete(Request $request) {
        try {
            $id = $request->id;
            $data = employee::where('id', '=', $id)->delete();
            if ($data == 1) {
                return redirect('view_employee_detls')->with('message', 'Data deleted Successfully');
//                                        
            } else {
                return redirect('view_employee_detls')->with('errmessage', 'No data Exist');
            }
        } catch (Exception $ex) {
            Log::error($ex);
            return $ex->getMessage();
        }
    }
    
     public function add_task() {

        return view('Add_task');
    }
     public function save_task(Request $request) {
try{
        $title = $request->first_name;
        $dis = $request->discre;
       

        $data = task::insertGetId(
                        array('title' => $title, 'description' => $dis,'employee_id'=>'0'));
        if (!empty($data)) {
            return redirect('add_task')->with('message', 'Data Saved Successfully');
//                                        
        } else {
            return redirect('add_task')->with('errmessage', 'Data Already Exist');
        }
        } catch (Exception $ex) {
            Log::error($ex);
            return $ex->getMessage();
        }
    }
    public function view_task() {
try {

        $select = task::select('*')->get();
        return view('view_task', ['value' => $select]);
   } catch (Exception $ex) {
            Log::error($ex);
            return $ex->getMessage();
        }
        }
        
         public function task_edit(Request $request) {
try {
        $id = $request->id;
        
        
        $select = task::select('*')->where('id', '=', $id)->get();
        return view('Edit_task', ['value' => $select]);
     } catch (Exception $ex) {
            Log::error($ex);
            return $ex->getMessage();
        }             
    }

    public function update_task(Request $request) {
        try {
            $id = $request->id;
            $title = $request->first_name;
        $dis = $request->discre;
            $data = task::where('id', '=', $id)->update(['title' => $title, 'description' => $dis]);

//                            print_r($data);die();
            if (!empty($data)) {
                return redirect('view_task')->with('message', 'Data Updated Successfully');
//                                        
            } else {
                return redirect('view_task')->with('errmessage', 'Data Already Exist');
            }
        } catch (Exception $ex) {
            Log::error($ex);
            return $ex->getMessage();
        }
    }

        
       public function assign_task() {
           $e_select = employee::select('*')->get();
           $t_select = task::select('*')->where('task_status','=','Unassigned')->get();
        return view('assign_emp_to_task', ['value1' => $e_select,'value'=>$t_select]);
    }  
        

    
    
    
    public function assign_update(Request $request) {
        try {
            
            $employee_id = $request->first_name;
            $task_id = $request->task;
            $data = task::where('id', '=', $task_id)->update(['employee_id' => $employee_id,'task_status'=>'Assigned']);
//           if (!empty($data)) {
//            
//            $data1 = employee::where('id', '=', $employee_id)->update(['task_id' => $task_id]);
//           }

            if (!empty($data)) {
                return redirect('assign_task')->with('message', 'Data Updated Successfully');
//                                        
            } else {
                return redirect('assign_task')->with('errmessage', 'Data Already Exist');
            }
        } catch (Exception $ex) {
            Log::error($ex);
            return $ex->getMessage();
        }
    }

}
