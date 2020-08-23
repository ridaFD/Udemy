<?php

namespace App\Http\Controllers;

use App\Todo;

use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index(){
        // fetch all todos from database
        // display them in the todos.index page

        return view('todos.index')->with('todos', Todo::all());
    }

    public function show($todoId) 
    {
        return view('todos.show')->with('todo', Todo::find($todoId));
    }
}
