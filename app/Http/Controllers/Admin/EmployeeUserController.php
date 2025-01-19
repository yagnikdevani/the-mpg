<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ManagerUser;
use Illuminate\Http\Request;

class EmployeeUserController extends Controller
{
    public function index(Request $request) {
        $managerUser = ManagerUser::paginate(1);
        return view('admin.employee.index',compact('managerUser'));
    }
}
