<?php	
namespace App\Repositories;


class VirtualGroupSales {

	

	public function index() {

	}




	public function getVirtualGroupSales($groupsales) {



		/* 9 virtual group sales = 3 * 34.95  =  314.55 - escrow = 214.55
        27 virtual group sales = 27 * 34.95 =  943.65  - escrow = 343.65
        36 group sales = 1258.2 + 214.55 = 1472.2 */



		$groupsales;

		// scale by tier
		// scale total sales
		
		$tier = 2,
		$total = $ebook_sales - $payouts;

		$virtual = $base;

		$ebook_cost = 34.95;

		$escrow = 314.55;

		while ($funds < $escrow ) {
			$virtual--;
		}


		// then here yuo get ur vitual sales count
		return $virtual;

	}
}

?>





