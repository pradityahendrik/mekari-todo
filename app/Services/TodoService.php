<?php

namespace App\Services;

use App\Contracts\Todo;
use App\Models\TodoModel;

class TodoService extends TodoModel implements Todo{
    public function list(){
        return $this->orderBy('id', 'DESC')->first();
    }

    public function add($request){
        return $this->insert([
            'name' => $request->name
        ]);
    }

    public function deleteTodo($request){
        return $this->whereIn('id', $request->ids)->delete();
    }
}