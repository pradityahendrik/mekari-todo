<?php

namespace App\Contracts;

interface Todo{
   public function list();
   public function add($data);
   public function deleteTodo($data);
}
