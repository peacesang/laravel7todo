<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;
use App\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos= Todo::all();
        return view('todos/list')->withTasks($todos);
    }

    public function create()
    {
        return view('todos/add_form');
    }

    public function store(TodoRequest $request)
    {
        $todo=new Todo;
        $todo->title=$request->title;
        $todo->description=$request->description;
        $todo->status=$request->status;
        $todo->save();
        
        return redirect('/todos')->with('message','record added');
    }

    public function destroy($id)
    {
        $todo=Todo::find($id);
        $todo->delete();


        return redirect('/todos')->with('message','record delete');

    }

    public function edit($id)
    {
        $todo=Todo::find($id);
        return view('todos.edit_form', compact('todo')) ;


    }

    public function update($id,TodoRequest $request)
    {
        // return $id;

        $todo=new Todo;
        $todo=Todo::find($id);
        $todo->title=$request->title;
        $todo->description=$request->description;
        $todo->status=$request->status;
        $todo->save();
        
        return redirect('/todos')->with('message','Record updated');


    }
    //
}
