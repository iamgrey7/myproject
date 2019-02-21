<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Validator;
use Response;
use App\Employee;
use View;

class EmployeeController extends Controller
{
    protected $rules = 
    [
        'name' => 'required',
        'address' => 'required'
    ];

    public function index(Request $request) //(Request $request)
    {
        // $employees = Employee::all();
        // return view('employees.index', ['employees' => $employees]);  
        
    
        if($request->ajax()) { 
            $employees = Employee::where(
                'name', 'like', '%'.$request->keywords.'%') 
                ->orWhere('address', 'like', '%'.$request->keywords.'%');                      
            $employees = $employees->paginate(10);

            $request->keywords == '' ? $keywords = '' : $keywords = $request->keywords; 
            
            $view = (String)view('employees.list') 
                ->with('employees', $employees)
                ->render(); 
            
            return response()->json([
                'view' => $view,                 
                'keywords' => $keywords, 
                'test' => $employees,
                'status' => 'success']); 
        } else { 
            $employees = Employee::paginate(10); 
            return view('employees.index') ->with('employees', $employees); 
        }
        
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $validator = Validator::make(Input::all(), $this->rules);
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $employee = new Employee();
            $employee->name = $request->name;
            $employee->address = $request->address;
            $employee->save();
            return response()->json($employee);
        }
    }


    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.show', ['employee' => $employee]);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $validator = Validator::make(Input::all(), $this->rules);
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $employee = Employee::findOrFail($id);
            $employee->name = $request->name;
            $employee->address = $request->address;
            $employee->save();
            return response()->json($employee);
        }
    }


    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return response()->json();
    }

    public function changeStatus() 
    {
        $id = Input::get('id');

        $employee = Employee::findOrFail($id);
        $employee->is_permanent = !$employee->is_permanent;
        $employee->save();

        return response()->json();
    }
}
