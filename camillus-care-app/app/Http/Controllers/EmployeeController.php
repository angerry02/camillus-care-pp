<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();

        return view('employee.index', ['employees' => $employees]);
    }
    
    public function create()
    {
        return view('employee.create');
    }

    public function store()
    {
        Employee::create([
            'first_name' => request('first_name'),
            'middle_name' => request('middle_name'),
            'last_name' => request('last_name'),
            'address' => request('address'),
            'contact_no' => request('contact_no'),
            'date_hired' => request('date_hired'),
            'birth_date' => request('birth_date'),
            'sss_no' => request('sss_no'),
            'philhealth_no' => request('philhealth_no'),
            'tin_no' => request('tin_no'),
            'role' => request('role'),
            'qualification' => request('qualification')
        ]);

        return redirect('/employee')
        ->with('success','Empoyee successfully added.');
    }

    public function edit(Employee $employee)
    {
        return view('employee.edit', ['employee' => $employee]);
    }

    public function update(Request $request, $employee_id)
    {
        Employee::where('employee_id', $employee_id)
        ->update([
            'first_name' => request('first_name'),
            'middle_name' => request('middle_name'),
            'last_name' => request('last_name'),
            'address' => request('address'),
            'contact_no' => request('contact_no'),
            'date_hired' => request('date_hired'),
            'birth_date' => request('birth_date'),
            'sss_no' => request('sss_no'),
            'philhealth_no' => request('philhealth_no'),
            'tin_no' => request('tin_no'),
            'role' => request('role'),
            'qualification' => request('qualification')
        ]);

        return redirect('/employee')
        ->with('success','Empoyee successfully updated.');
    }

    public function destroy($employee_id)
    {
        Employee::where('employee_id', $employee_id)->delete();
       
        return redirect('/employee')->with('message', 'Employee data has been successfully updated.');
    }
}