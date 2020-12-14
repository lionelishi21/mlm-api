<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TransferWises;

class TransferwiseController extends Controller
{
    
    public function __construct() {
    	$this->model =  new TransferWises;
    }

    public function index( Request $request ) {

    	$userId = $request->user()->id;
    	return $this->model->index($userId);
    }

    public function store(Request $request) {

    	$attributes = $request->all();
    	$userId  = $request->user()->id;

    	return $this->model->save($attributes);
    }

    public function update() {}

    public function delete() {}

    public function transfer(Request $request) {

    	
    }



}
