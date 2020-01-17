<?php

namespace App\Services;

use App\Contracts\Todo;
use App\Models\TodoModel;

class TodoService extends TodoModel implements Todo{
    public function list(){
        return $this->all();
    } 
}