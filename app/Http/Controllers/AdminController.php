<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    // public function login(){
    // 	return view('admin.login');
    // }
    public function home()
    {
    	return view('admin.index');
    }
    public function blank()
    {
    	return view('admin.blank');
    }
    public function buttons()
    {
    	return view('admin.buttons');
    }
    public function chart()
    {
    	return view('admin.chart-chartjs');
    }
    public function form()
    {
    	return view('admin.form-component');
    }
    public function formvalid()
    {
    	return view('admin.form-validation');
    }
    public function general()
    {
    	return view('admin.general');
    }
    public function grid()
    {
    	return view('admin.grids');
    }
    public function table()
    {
    	return view('admin.tables');
    }
    public function profile()
    {
    	return view('admin.profile');
    }
    public function widgets()
    {
    	return view('admin.widgets');
    }
}
