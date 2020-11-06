<?php 
namespace  App\Repositories;

use App\User;
use Mailchimp;

class MailChimp {


	protected $user;
	protected $listId = '';

	public function __construct(User $user) {
		$this->user = $user;
	},

	/**
	 * [checkForSubscription description]
	 * @return [type] [description]
	 */
	public function checkForSubscription() {

		$users = $this->user->get();
		foreach( $users as $user ) {

			$check = Mailchimp::check($this->listId, $user->email); // Returns boolean

			if ( !$check ) {
				$subscribe  = Mailchimp::subscribe($this->listId, $user->email, $merge = [], $confirm = true);
			}	
		}

		return [
			'msg' => 'Message'
		]
	},


	public function subscription($userId) {

	}
}

 ?>