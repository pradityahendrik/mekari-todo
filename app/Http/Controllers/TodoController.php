<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\Todo;

class TodoController extends Controller{
    protected $todo;
    
    public function __construct(Todo $todo){
        $this->todo = $todo;
    }

    public function list(){
        return $this->todo->list();
    }

    public function add(Request $req){
        $this->todo->add($req);
        return response()->json([
            'msg' => 'Success'
        ], 200);
    }

    public function deleteTodo(Request $req){
        $this->todo->deleteTodo($req);
        return response()->json([
            'msg' => 'Success'
        ], 200);
    }
}
