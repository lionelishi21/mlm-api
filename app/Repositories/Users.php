<?php
namespace  App\Repositories;
use App\Repositories\CashBonuses;
use App\Repositories\Affiliates;
use App\User;
use App\UserDetail;
use Faker\Factory as Faker;
use App\Affiliate;
use Token;
use App\DownloadToken;
use Bitly;

use App\Repositories\Purchases;

class Users {

	protected $user;
	protected $details;

	public function __construct() {
		$this->model = new User;
		// $this->details = new UserDetail;
	}

	/**
	 * Get user details
	 * @param  [type] $user_id [description]
	 * @return [type]          [description]
	 */
	public function getUserDetailsById( $user_id ) {

		$user = $this->model->with(['detail', 'affiliate', 'purchase', 'affiliateId'])->where('id', '=', $user_id)->first();
		if (isset( $user )) {
			return $user;
		}
	}

    /**
     * get User link
     * @param $user_id
     * @return array
     */
    public function getUserLink( $user_id) {

	    $user = Affiliate::where('user_id', '=', $user_id)->first();
	    if ( $user ) {
	        $link = 'https://majesticares.com/checkout?referral_id='.$user->affiliate_id;
	        $shortenLink = $url = Bitly::getUrl($link);

	       return array('link' => $shortenLink);
        }
    }

	public function demo() {

        $faker = Faker::create();

	    $user = new User;
        $user->first_name = $faker->firstName;
        $user->last_name = $faker->lastName;
        $user->email = $faker->email;
        $user->password = bcrypt('enter4now');
        $user->save();

        if ( $user->save()) {
            $details = new UserDetail;
            $details->user_id = $user->id;
            $details->address1 = $faker->address;
            // $details->address2 = $userdetails['address2'];
            $details->country = $faker->country;
            $details->state = 'region';
            $details->save();
        }

        /** @var Check for pending cash bonuses $cash */
        $cash = new CashBonuses;
        $cash->checkForCashBonuses();

        if ( $user->save()) {
            $referral_id = $this->getRandomAffiliateId();

            $purchase = new Purchases;
            $purchase->store($referral_id, $user->id);
        }
    }

    /**
     * @return mixed
     */
    public function getRandomAffiliateId() {
        $affiliates = Affiliate::inRandomOrder()->first();
        return $affiliates->affiliate_id;
    }

    public function generateTemporaryLink($userId)  {

        $download = new DownloadToken;
        $download->user_id = $userId;
        $download->token = Token::Unique('download_tokens', 'token', 10 );
        $download->save();

        if ($download) {
            return $download->token;
        }
    }

    public function adminDashboard($roleId) {

	    $response = array();
	    if ($roleId == 1) {
	        $purchase = new Purchases;

	        // firstly get all incomming ebook sales
            $response = array(
                'total_ebook_purchase' => $purchase->totalEbookPurchase(),
                'available_payouts' => $purchase->totalAvailablePayout(),
                'payouts' => $purchase->totalPayouts(),
                'active_affiliate' => $purchase->totalAffiliateCount('active'),
                'inactive_affiliate' => $purchase->totalAffiliateCount('inactive'),
                'all_affiliates' => $purchase->totalAffiliateCount()
            );
        }

	    return $response;
    }



    public function userDashboard($userId) {
        $response = array();


        $response = array(
            'all_members' => Affiliate::count(),
            'countries' => $this->getAffliateCountries(),
            'cashbouns' => $this->getUserCashbonus($userId)
        );

        return $response;
    }



    public function getAffliateCountries() {
         return UserDetail::groupBy('country')->count();
    }



    public function getUserCashbonus($userId) {

            $cashbonus = new CashBonuses;
            return $cashbonus->getUserCashBonusesByUserId($userId);
    }
    /**
     * check username availablity
     * @param $username
     * @return bool
     */
    public function checkUsernameAvailable($username) {

        $username = User::where('username', '=', $username)->first();
        if ($username) {
            return true;
        }
        return false;
    }

}


 ?>
