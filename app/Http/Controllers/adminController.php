<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller{
    
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        return "Tienes rol de administrador";
    }
}
?>