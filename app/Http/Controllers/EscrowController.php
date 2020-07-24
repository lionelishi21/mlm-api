<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Escrows;

class EscrowController extends Controller
{


	protected $escrows;

	public function __construct() {

        $escrows = new Escrows;
		$this->escrows = $escrows;
	}
    

    public function escrow() {
        $this->escrows->checkAffiliatesEscrow();
    }


    public function getEscrows(Request $request) {
       
        $userId = $request->user()->id;
        return $this->escrows->getEscrowByUserId($userId);
 
    }
}
