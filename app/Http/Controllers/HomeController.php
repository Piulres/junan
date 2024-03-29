<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $incomes = \App\Income::latest()->limit(5)->get(); 
        $expenses = \App\Expense::latest()->limit(5)->get(); 
        $tasks = \App\Task::latest()->limit(5)->get(); 
        $tasktags = \App\TaskTag::latest()->limit(5)->get(); 

        return view('home', compact( 'incomes', 'expenses', 'tasks', 'tasktags' ));
    }
}
