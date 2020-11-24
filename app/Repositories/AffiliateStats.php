<?php 
namespace App\Repositories;


use App\Repositories\Helper;
use App\Repositories\Affiliates;

class AffiliateStats extends Helper {


	public function __construct() {

		$this->affiliates = new Affiliates;
	}


	public function salesStatus($groupSales) {

		$status = '';
		$percentage = '';

		if ($groupSales <= 12 ) {
			$status = 'Bronze';
			$percentage = $this->percentageOf($groupSales, 12);
		}

		if ( $groupSales > 12 && $groupSales <= 108 ) {
			$status = 'Silver';
			$percentage = $this->percentageOf($groupSales, 108);
		}

		if ( $groupSales > 108 && $groupSales <= 324) {
			$status = 'Gold';
			$percentage = $this->percentageOf($groupSales, 324);
		}

		if ( $groupSales > 324 && $groupSales <= 927) {
			$status = 'Ruby';
			$percentage = $this->percentageOf($groupSales, 927);
		}

		if ( $groupSales > 927 && $groupSales <= 11124) {
			$status = 'Diamond';
			$percentage = $this->percentageOf($groupSales, 927);
		}


		$response = array(
			'groupSales' => $groupSales,
			'current_status' => $status,
			'percentage' => $percentage,
		);

		return $response;
	}


	public function boosterSalesStats($groupSales) {

		$status = '';
		$percentage = '';

		if ($groupSales <= 12 ) {
			$status = 'Tier 1';
			$percentage = $this->percentageOf($groupSales, 12);
		}

		if ( $groupSales > 12 && $groupSales <= 108 ) {
			$status = 'Tier 2';
			$percentage = $this->percentageOf($groupSales, 108);
		}

		if ( $groupSales > 108 && $groupSales <= 324) {
			$status = 'Tier 3';
			$percentage = $this->percentageOf($groupSales, 324);
		}

		if ( $groupSales > 324 && $groupSales <= 927) {
			$status = 'Tier 4';
			$percentage = $this->percentageOf($groupSales, 927);
		}

		// if ( $groupSales > 927 && $groupSales <= 11124) {
		// 	$status = 'Diamond';
		// 	$percentage = $this->percentageOf($groupSales, 927);
		// }


		$response = array(
			'groupSales' => $groupSales,
			'tiers' => $status,
			'percentage' => $percentage,
		);

		return $response;
	}	
}

 ?>


