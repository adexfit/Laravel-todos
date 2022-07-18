<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    public function index(){ 
        $todos = Todo::all();
        return view('todos.index')->with('todos', $todos );
    } 

    public function show($todoId){

        
        return view("todos.show")->with("todo", Todo::find($todoId));
       // dd($todoId);
    }

    public function create(){
        return view('todos.create');
    }

    public function store(){
       // dd(request());  

        $this->validate(request(), [
            'name' => 'required|min:6|max:50',
            'description' => 'required'
        ]);

       $data = request()->all();

       $todo = new Todo();
       $todo->name = $data["name"];
       $todo->description = $data["description"];
       $todo->completed = false;

       $todo->save();

       return redirect('/todos');
    }  

    public function edit($todoId){
        $todo = Todo::find($todoId);

        return view('todos.edit')->with('todo', $todo);
    }

    public function update($todoId){
        
        $this->validate(request(), [
            'name' => 'required|min:6|max:50',
            'description' => 'required'
        ]); 

        $data = request()->all();     //we need to first get the data

        $todo = Todo::find($todoId);  //now we want to find the specific todo
    
        // now we want to update and assign the values    
        $todo->name = $data['name'];
        $todo->description = $data['description'];

        $todo->save();

        return redirect('/todos');

    }

    public function destroy($todoId){
// clear
 
        $todo = Todo::find($todoId);

        $todo->delete();

        return redirect('/todos');


    }

}
