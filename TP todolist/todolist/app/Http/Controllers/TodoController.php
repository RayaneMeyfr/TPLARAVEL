<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    private $todos = [];

    public function __construct(){
        $this->todos = session('todos',[
            ['id' => 1, 'title' => 'Apprendre Laravel', 'description' => 'Étudier la documentation', 'completed' => false],
            ['id' => 2, 'title' => 'Faire du sport', 'description' => 'Courir 5km', 'completed' => true],
        ]);
    }

    public function index(){
        return view("todos.index",["todos" => $this->todos]);
    }
}
