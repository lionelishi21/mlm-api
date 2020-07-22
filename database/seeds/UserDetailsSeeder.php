<?php

use Illuminate\Database\Seeder;
use App\UserDetail;


class UserDetailsSeeder extends Seeder
{
    /**
     * ************************************************
     * Run the database seeds.
     * ************************************************
     * 
     * @return void
     *
     * ************************************************
     */
    public function run() {

		UserDetail::create( [
			'id'=>1,
			'user_id'=>1,
			'address1'=>'Majestice Care Community',
			'address2'=>NULL,
			'city'=>NULL,
			'country'=>NULL,
			'state'=>NULL,
			'postal_code'=>NULL,
			'created_at'=>NULL,
			'updated_at'=>NULL
		] );
					
		UserDetail::create( [
			'id'=>2,
			'user_id'=>2,
			'address1'=>'2084 Roscommon Dr.',
			'address2'=>NULL,
			'city'=>'Clover',
			'country'=>'US',
			'state'=>'SC',
			'postal_code'=>'29710',
			'created_at'=>'2020-07-06 20:30:52',
			'updated_at'=>'2020-07-06 20:30:52'
		] );
					
		UserDetail::create( [
		'id'=>3,
		'user_id'=>3,
		'address1'=>'25852 State Hwy 74',
		'address2'=>NULL,
		'city'=>'Perris',
		'country'=>'US',
		'state'=>'CA',
		'postal_code'=>'92570-8772',
		'created_at'=>'2020-07-06 20:44:22',
		'updated_at'=>'2020-07-06 20:44:22'
		] );
					
		UserDetail::create( [
		'id'=>4,
		'user_id'=>4,
		'address1'=>'1629 Elmbridge ln.',
		'address2'=>NULL,
		'city'=>'Hemet',
		'country'=>'US',
		'state'=>'CA',
		'postal_code'=>'92545',
		'created_at'=>'2020-07-06 20:53:18',
		'updated_at'=>'2020-07-06 20:53:18'
		] );
					
		UserDetail::create( [
		'id'=>5,
		'user_id'=>5,
		'address1'=>'PO BOx 345',
		'address2'=>NULL,
		'city'=>'Pleasant Grove',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84062',
		'created_at'=>'2020-07-06 20:59:11',
		'updated_at'=>'2020-07-06 20:59:11'
		] );
					
		UserDetail::create( [
		'id'=>6,
		'user_id'=>6,
		'address1'=>'13 Lator Ave.',
		'address2'=>NULL,
		'city'=>'Walta',
		'country'=>'JM',
		'state'=>'01',
		'postal_code'=>NULL,
		'created_at'=>'2020-07-06 21:54:24',
		'updated_at'=>'2020-07-06 21:54:24'
		] );
					
		UserDetail::create( [
		'id'=>7,
		'user_id'=>7,
		'address1'=>'10 Liberty St.',
		'address2'=>'22A',
		'city'=>'DANBURY',
		'country'=>'US',
		'state'=>'CT',
		'postal_code'=>'06810',
		'created_at'=>'2020-07-07 02:52:25',
		'updated_at'=>'2020-07-07 02:52:25'
		] );
					
		UserDetail::create( [
		'id'=>8,
		'user_id'=>8,
		'address1'=>'1032',
		'address2'=>NULL,
		'city'=>'Nairobi',
		'country'=>'KE',
		'state'=>'30',
		'postal_code'=>'00300',
		'created_at'=>'2020-07-07 04:30:18',
		'updated_at'=>'2020-07-07 04:30:18'
		] );
					
		UserDetail::create( [
		'id'=>9,
		'user_id'=>9,
		'address1'=>'23 cielo vista dr',
		'address2'=>NULL,
		'city'=>'monterey',
		'country'=>'US',
		'state'=>'CA',
		'postal_code'=>'93940',
		'created_at'=>'2020-07-07 06:38:27',
		'updated_at'=>'2020-07-07 06:38:27'
		] );
					
		UserDetail::create( [
		'id'=>10,
		'user_id'=>10,
		'address1'=>'21 Avondale Road',
		'address2'=>'Hoylake',
		'city'=>'Wirral',
		'country'=>'GB',
		'state'=>'CHS',
		'postal_code'=>'CH47 3AR',
		'created_at'=>'2020-07-07 17:44:31',
		'updated_at'=>'2020-07-07 17:44:31'
		] );
					
		UserDetail::create( [
		'id'=>11,
		'user_id'=>11,
		'address1'=>'262 W 1225 N',
		'address2'=>NULL,
		'city'=>'Layton',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84041',
		'created_at'=>'2020-07-07 18:43:15',
		'updated_at'=>'2020-07-07 18:43:15'
		] );
					
		UserDetail::create( [
		'id'=>12,
		'user_id'=>12,
		'address1'=>'19563 Rapidview Lane',
		'address2'=>NULL,
		'city'=>'Lenore',
		'country'=>'US',
		'state'=>'ID',
		'postal_code'=>'83541',
		'created_at'=>'2020-07-07 21:57:39',
		'updated_at'=>'2020-07-07 21:57:39'
		] );
					
		UserDetail::create( [
		'id'=>13,
		'user_id'=>13,
		'address1'=>'40 Kentucky Drive',
		'address2'=>'487 Pinegrove Rd',
		'city'=>'Oakville',
		'country'=>'CA',
		'state'=>'ON',
		'postal_code'=>'L6K 2K2',
		'created_at'=>'2020-07-07 22:26:03',
		'updated_at'=>'2020-07-07 22:26:03'
		] );
					
		UserDetail::create( [
		'id'=>14,
		'user_id'=>14,
		'address1'=>'8906 Barron Wood Cir',
		'address2'=>NULL,
		'city'=>'Houston',
		'country'=>'US',
		'state'=>'TX',
		'postal_code'=>'77083',
		'created_at'=>'2020-07-07 22:46:53',
		'updated_at'=>'2020-07-07 22:46:53'
		] );
					
		UserDetail::create( [
		'id'=>15,
		'user_id'=>15,
		'address1'=>'2700 cowan bld apt 319',
		'address2'=>NULL,
		'city'=>'fredericksburg',
		'country'=>'US',
		'state'=>'VA',
		'postal_code'=>'22401',
		'created_at'=>'2020-07-08 00:21:23',
		'updated_at'=>'2020-07-08 00:21:23'
		] );
					
		UserDetail::create( [
		'id'=>16,
		'user_id'=>16,
		'address1'=>'7183 S Brittany Town Dr',
		'address2'=>NULL,
		'city'=>'West Jordan',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84084-4603',
		'created_at'=>'2020-07-08 01:24:14',
		'updated_at'=>'2020-07-08 01:24:14'
		] );
					
		UserDetail::create( [
		'id'=>17,
		'user_id'=>17,
		'address1'=>'620 Callahan Point Dr.',
		'address2'=>NULL,
		'city'=>'Las Vegas',
		'country'=>'US',
		'state'=>'NV',
		'postal_code'=>'89145',
		'created_at'=>'2020-07-08 13:39:11',
		'updated_at'=>'2020-07-08 13:39:11'
		] );
					
		UserDetail::create( [
		'id'=>18,
		'user_id'=>18,
		'address1'=>'401 N 900 E #1',
		'address2'=>NULL,
		'city'=>'Provo',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84606',
		'created_at'=>'2020-07-08 14:07:29',
		'updated_at'=>'2020-07-08 14:07:29'
		] );
					
		UserDetail::create( [
		'id'=>19,
		'user_id'=>19,
		'address1'=>'1064 E 300 S',
		'address2'=>NULL,
		'city'=>'Orem',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84097',
		'created_at'=>'2020-07-08 14:39:41',
		'updated_at'=>'2020-07-08 14:39:41'
		] );
					
		UserDetail::create( [
		'id'=>20,
		'user_id'=>20,
		'address1'=>'410 N 800 W',
		'address2'=>NULL,
		'city'=>'Lindon',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84042',
		'created_at'=>'2020-07-08 14:43:14',
		'updated_at'=>'2020-07-08 14:43:14'
		] );
					
		UserDetail::create( [
		'id'=>21,
		'user_id'=>21,
		'address1'=>'3915 N Davencourt loop',
		'address2'=>NULL,
		'city'=>'Lehi',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84043',
		'created_at'=>'2020-07-08 16:24:13',
		'updated_at'=>'2020-07-08 16:24:13'
		] );
					
		UserDetail::create( [
		'id'=>22,
		'user_id'=>22,
		'address1'=>'570 N De Soto St. #B',
		'address2'=>NULL,
		'city'=>'Salt Lake City',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84103',
		'created_at'=>'2020-07-08 17:53:28',
		'updated_at'=>'2020-07-08 17:53:28'
		] );
					
		UserDetail::create( [
		'id'=>23,
		'user_id'=>23,
		'address1'=>'4175 americana dr.apt b-11',
		'address2'=>NULL,
		'city'=>'Stow',
		'country'=>'US',
		'state'=>'OH',
		'postal_code'=>'44224',
		'created_at'=>'2020-07-08 18:24:03',
		'updated_at'=>'2020-07-08 18:24:03'
		] );
					
		UserDetail::create( [
		'id'=>24,
		'user_id'=>24,
		'address1'=>'81 E Main #2',
		'address2'=>NULL,
		'city'=>'Lovell',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'82431',
		'created_at'=>'2020-07-08 18:32:20',
		'updated_at'=>'2020-07-08 18:32:20'
		] );
					
		UserDetail::create( [
		'id'=>25,
		'user_id'=>25,
		'address1'=>'145 East 1850 North',
		'address2'=>NULL,
		'city'=>'Orem',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84057',
		'created_at'=>'2020-07-08 21:34:18',
		'updated_at'=>'2020-07-08 21:34:18'
		] );
					
		UserDetail::create( [
		'id'=>26,
		'user_id'=>26,
		'address1'=>'6755 Marshmerry Lane',
		'address2'=>NULL,
		'city'=>'Evergreen',
		'country'=>'US',
		'state'=>'CO',
		'postal_code'=>'80439',
		'created_at'=>'2020-07-09 02:07:08',
		'updated_at'=>'2020-07-09 02:07:08'
		] );
					
		UserDetail::create( [
		'id'=>27,
		'user_id'=>27,
		'address1'=>'2406north 840west',
		'address2'=>NULL,
		'city'=>'Lehi',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84043',
		'created_at'=>'2020-07-09 02:36:29',
		'updated_at'=>'2020-07-09 02:36:29'
		] );
					
		UserDetail::create( [
		'id'=>28,
		'user_id'=>28,
		'address1'=>'PO 1029',
		'address2'=>NULL,
		'city'=>'Afton',
		'country'=>'US',
		'state'=>'WY',
		'postal_code'=>'83110',
		'created_at'=>'2020-07-09 14:39:55',
		'updated_at'=>'2020-07-09 14:39:55'
		] );
					
		UserDetail::create( [
		'id'=>29,
		'user_id'=>29,
		'address1'=>'1064 E. 300 S.',
		'address2'=>NULL,
		'city'=>'Orem',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84097',
		'created_at'=>'2020-07-09 15:32:41',
		'updated_at'=>'2020-07-09 15:32:41'
		] );
					
		UserDetail::create( [
		'id'=>30,
		'user_id'=>30,
		'address1'=>'4385 S. laurel green dr',
		'address2'=>NULL,
		'city'=>'st. george',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84790',
		'created_at'=>'2020-07-09 16:00:49',
		'updated_at'=>'2020-07-09 16:00:49'
		] );
					
		UserDetail::create( [
		'id'=>31,
		'user_id'=>31,
		'address1'=>'179 W 930 S',
		'address2'=>NULL,
		'city'=>'American Fork',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84003',
		'created_at'=>'2020-07-09 16:12:19',
		'updated_at'=>'2020-07-09 16:12:19'
		] );
					
		UserDetail::create( [
		'id'=>32,
		'user_id'=>32,
		'address1'=>'7183 S Brittany Town Dr. West Jordan, UT',
		'address2'=>NULL,
		'city'=>'West Jordan',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84048-4603',
		'created_at'=>'2020-07-09 16:24:09',
		'updated_at'=>'2020-07-09 16:24:09'
		] );
					
		UserDetail::create( [
		'id'=>33,
		'user_id'=>33,
		'address1'=>'95 E 1260 S',
		'address2'=>NULL,
		'city'=>'Payson',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84651',
		'created_at'=>'2020-07-09 16:25:13',
		'updated_at'=>'2020-07-09 16:25:13'
		] );
					
		UserDetail::create( [
		'id'=>34,
		'user_id'=>34,
		'address1'=>'5108 Sandlelwood Dr.',
		'address2'=>NULL,
		'city'=>'Raleigh',
		'country'=>'US',
		'state'=>'NC',
		'postal_code'=>'27609',
		'created_at'=>'2020-07-09 16:25:29',
		'updated_at'=>'2020-07-09 16:25:29'
		] );
					
		UserDetail::create( [
		'id'=>35,
		'user_id'=>35,
		'address1'=>'30401 Mirador Court',
		'address2'=>NULL,
		'city'=>'Laguna Niguel',
		'country'=>'US',
		'state'=>'CA',
		'postal_code'=>'92677',
		'created_at'=>'2020-07-09 16:34:00',
		'updated_at'=>'2020-07-09 16:34:00'
		] );
					
		UserDetail::create( [
		'id'=>36,
		'user_id'=>36,
		'address1'=>'14296 S 3600 W',
		'address2'=>NULL,
		'city'=>'Bluffdale',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84065',
		'created_at'=>'2020-07-09 16:39:50',
		'updated_at'=>'2020-07-09 16:39:50'
		] );
					
		UserDetail::create( [
		'id'=>37,
		'user_id'=>37,
		'address1'=>'10208 W Caron Dr',
		'address2'=>NULL,
		'city'=>'Sun City',
		'country'=>'US',
		'state'=>'AZ',
		'postal_code'=>'85351',
		'created_at'=>'2020-07-09 16:43:24',
		'updated_at'=>'2020-07-09 16:43:24'
		] );
					
		UserDetail::create( [
		'id'=>38,
		'user_id'=>38,
		'address1'=>'73990 Nevada Cirlcle West',
		'address2'=>NULL,
		'city'=>'Palm Desert',
		'country'=>'US',
		'state'=>'CA',
		'postal_code'=>'92260',
		'created_at'=>'2020-07-09 16:53:33',
		'updated_at'=>'2020-07-09 16:53:33'
		] );
					
		UserDetail::create( [
		'id'=>39,
		'user_id'=>39,
		'address1'=>'4035 W 3275 S Apt C',
		'address2'=>NULL,
		'city'=>'West Valley',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84120',
		'created_at'=>'2020-07-09 16:56:17',
		'updated_at'=>'2020-07-09 16:56:17'
		] );
					
		UserDetail::create( [
		'id'=>40,
		'user_id'=>40,
		'address1'=>'541 Bridge Street',
		'address2'=>'Apt 508',
		'city'=>'Danville',
		'country'=>'US',
		'state'=>'VA',
		'postal_code'=>'24541',
		'created_at'=>'2020-07-09 16:59:28',
		'updated_at'=>'2020-07-09 16:59:28'
		] );
					
		UserDetail::create( [
		'id'=>41,
		'user_id'=>41,
		'address1'=>'1466 russell dr apt c',
		'address2'=>NULL,
		'city'=>'Streetsboro Ohio',
		'country'=>'US',
		'state'=>'OH',
		'postal_code'=>'44241',
		'created_at'=>'2020-07-09 17:01:52',
		'updated_at'=>'2020-07-09 17:01:52'
		] );
					
		UserDetail::create( [
		'id'=>42,
		'user_id'=>42,
		'address1'=>'11023 Victoria Ave',
		'address2'=>NULL,
		'city'=>'Riverside',
		'country'=>'US',
		'state'=>'CA',
		'postal_code'=>'92503',
		'created_at'=>'2020-07-09 17:07:39',
		'updated_at'=>'2020-07-09 17:07:39'
		] );
					
		UserDetail::create( [
		'id'=>43,
		'user_id'=>43,
		'address1'=>'112 Iowa place',
		'address2'=>NULL,
		'city'=>'Barberton',
		'country'=>'US',
		'state'=>'OH',
		'postal_code'=>'44203',
		'created_at'=>'2020-07-09 17:16:58',
		'updated_at'=>'2020-07-09 17:16:58'
		] );
					
		UserDetail::create( [
		'id'=>44,
		'user_id'=>44,
		'address1'=>'262 w 1225 n',
		'address2'=>NULL,
		'city'=>'Layton',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84041',
		'created_at'=>'2020-07-09 17:22:48',
		'updated_at'=>'2020-07-09 17:22:48'
		] );
					
		UserDetail::create( [
		'id'=>45,
		'user_id'=>45,
		'address1'=>'312 W 500N',
		'address2'=>NULL,
		'city'=>'Orem',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84057',
		'created_at'=>'2020-07-09 17:23:52',
		'updated_at'=>'2020-07-09 17:23:52'
		] );
					
		UserDetail::create( [
		'id'=>46,
		'user_id'=>46,
		'address1'=>'2447 Newton st',
		'address2'=>'2447 Newton st',
		'city'=>'akron',
		'country'=>'US',
		'state'=>'OH',
		'postal_code'=>'44305',
		'created_at'=>'2020-07-09 17:27:07',
		'updated_at'=>'2020-07-09 17:27:07'
		] );
					
		UserDetail::create( [
		'id'=>47,
		'user_id'=>47,
		'address1'=>'900 Main St, 109',
		'address2'=>NULL,
		'city'=>'Tremonton',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84337',
		'created_at'=>'2020-07-09 17:28:26',
		'updated_at'=>'2020-07-09 17:28:26'
		] );
					
		UserDetail::create( [
		'id'=>48,
		'user_id'=>48,
		'address1'=>'38 south thomas rd apt B',
		'address2'=>'38 south thomas rd apt B',
		'city'=>'tallmadge',
		'country'=>'US',
		'state'=>'OH',
		'postal_code'=>'44278',
		'created_at'=>'2020-07-09 17:33:47',
		'updated_at'=>'2020-07-09 17:33:47'
		] );
					
		UserDetail::create( [
		'id'=>49,
		'user_id'=>49,
		'address1'=>'2406 north 840 west',
		'address2'=>NULL,
		'city'=>'lehi',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84043',
		'created_at'=>'2020-07-09 17:36:17',
		'updated_at'=>'2020-07-09 17:36:17'
		] );
					
		UserDetail::create( [
		'id'=>50,
		'user_id'=>50,
		'address1'=>'192 Arnett Blvd',
		'address2'=>NULL,
		'city'=>'Danville',
		'country'=>'US',
		'state'=>'VA',
		'postal_code'=>'24540',
		'created_at'=>'2020-07-09 17:37:07',
		'updated_at'=>'2020-07-09 17:37:07'
		] );
					
		UserDetail::create( [
		'id'=>51,
		'user_id'=>51,
		'address1'=>'8832 E. Pueblo Ave, Lot 34',
		'address2'=>NULL,
		'city'=>'Mesa',
		'country'=>'US',
		'state'=>'AZ',
		'postal_code'=>'85208',
		'created_at'=>'2020-07-09 17:54:48',
		'updated_at'=>'2020-07-09 17:54:48'
		] );
					
		UserDetail::create( [
		'id'=>52,
		'user_id'=>52,
		'address1'=>'21 Avondale Road',
		'address2'=>'Hoylake',
		'city'=>'Hoylake',
		'country'=>'GB',
		'state'=>'CHS',
		'postal_code'=>'CH47 3AR',
		'created_at'=>'2020-07-09 18:08:47',
		'updated_at'=>'2020-07-09 18:08:47'
		] );
					
		UserDetail::create( [
		'id'=>53,
		'user_id'=>53,
		'address1'=>'503 Fox Run Dr',
		'address2'=>NULL,
		'city'=>'Jonesboro',
		'country'=>'US',
		'state'=>'AR',
		'postal_code'=>'72404',
		'created_at'=>'2020-07-09 18:12:17',
		'updated_at'=>'2020-07-09 18:12:17'
		] );
					
		UserDetail::create( [
		'id'=>54,
		'user_id'=>54,
		'address1'=>'19313 Hillford Ave',
		'address2'=>'19313 Hillford Ave',
		'city'=>'Carson',
		'country'=>'US',
		'state'=>'CA',
		'postal_code'=>'90746',
		'created_at'=>'2020-07-09 18:18:23',
		'updated_at'=>'2020-07-09 18:18:23'
		] );
					
		UserDetail::create( [
		'id'=>55,
		'user_id'=>55,
		'address1'=>'112 Winthrop Court',
		'address2'=>NULL,
		'city'=>'Danville',
		'country'=>'US',
		'state'=>'VA',
		'postal_code'=>'24540',
		'created_at'=>'2020-07-09 18:31:59',
		'updated_at'=>'2020-07-09 18:31:59'
		] );
					
		UserDetail::create( [
		'id'=>56,
		'user_id'=>56,
		'address1'=>'6212 Dekeon Dr.',
		'address2'=>NULL,
		'city'=>'College Park',
		'country'=>'US',
		'state'=>'GA',
		'postal_code'=>'30349',
		'created_at'=>'2020-07-09 18:33:53',
		'updated_at'=>'2020-07-09 18:33:53'
		] );
					
		UserDetail::create( [
		'id'=>57,
		'user_id'=>57,
		'address1'=>'15811 AL HIGHWAY 157',
		'address2'=>NULL,
		'city'=>'Vinemont',
		'country'=>'US',
		'state'=>'AL',
		'postal_code'=>'35179',
		'created_at'=>'2020-07-09 18:35:13',
		'updated_at'=>'2020-07-09 18:35:13'
		] );
					
		UserDetail::create( [
		'id'=>58,
		'user_id'=>58,
		'address1'=>'14006 CR 3111',
		'address2'=>NULL,
		'city'=>'Gladewater',
		'country'=>'US',
		'state'=>'TX',
		'postal_code'=>'75647',
		'created_at'=>'2020-07-09 18:45:41',
		'updated_at'=>'2020-07-09 18:45:41'
		] );
					
		UserDetail::create( [
		'id'=>59,
		'user_id'=>59,
		'address1'=>'312 Strawbridge Ln',
		'address2'=>'312 Strawbridge Ln',
		'city'=>'Bonaire',
		'country'=>'US',
		'state'=>'GA',
		'postal_code'=>'31005',
		'created_at'=>'2020-07-09 18:46:13',
		'updated_at'=>'2020-07-09 18:46:13'
		] );
					
		UserDetail::create( [
		'id'=>60,
		'user_id'=>60,
		'address1'=>'34 N 6TH ST',
		'address2'=>'8N',
		'city'=>'Brooklyn',
		'country'=>'US',
		'state'=>'NY',
		'postal_code'=>'11249',
		'created_at'=>'2020-07-09 18:52:27',
		'updated_at'=>'2020-07-09 18:52:27'
		] );
					
		UserDetail::create( [
		'id'=>61,
		'user_id'=>61,
		'address1'=>'3024 SE Gridley Rd',
		'address2'=>NULL,
		'city'=>'Cameron',
		'country'=>'US',
		'state'=>'MO',
		'postal_code'=>'66429',
		'created_at'=>'2020-07-09 18:53:11',
		'updated_at'=>'2020-07-09 18:53:11'
		] );
					
		UserDetail::create( [
		'id'=>62,
		'user_id'=>62,
		'address1'=>'807 Bayly Road',
		'address2'=>NULL,
		'city'=>'Cambridge',
		'country'=>'US',
		'state'=>'MD',
		'postal_code'=>'21613',
		'created_at'=>'2020-07-09 19:01:41',
		'updated_at'=>'2020-07-09 19:01:41'
		] );
					
		UserDetail::create( [
		'id'=>63,
		'user_id'=>63,
		'address1'=>'3727 S 8035 W',
		'address2'=>NULL,
		'city'=>'Magna',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84044',
		'created_at'=>'2020-07-09 19:03:42',
		'updated_at'=>'2020-07-09 19:03:42'
		] );
					
		UserDetail::create( [
		'id'=>64,
		'user_id'=>64,
		'address1'=>'467 Deerwood Ave East',
		'address2'=>NULL,
		'city'=>'Gahanna',
		'country'=>'US',
		'state'=>'OH',
		'postal_code'=>'43230',
		'created_at'=>'2020-07-09 19:10:29',
		'updated_at'=>'2020-07-09 19:10:29'
		] );
					
		UserDetail::create( [
		'id'=>65,
		'user_id'=>65,
		'address1'=>'19313 Hillford Ave',
		'address2'=>NULL,
		'city'=>'Carson',
		'country'=>'US',
		'state'=>'CA',
		'postal_code'=>'90746',
		'created_at'=>'2020-07-09 19:12:07',
		'updated_at'=>'2020-07-09 19:12:07'
		] );
					
		UserDetail::create( [
		'id'=>66,
		'user_id'=>66,
		'address1'=>'10 N Caddo St',
		'address2'=>NULL,
		'city'=>'Cleburne',
		'country'=>'US',
		'state'=>'TX',
		'postal_code'=>'76031',
		'created_at'=>'2020-07-09 19:19:07',
		'updated_at'=>'2020-07-09 19:19:07'
		] );
					
		UserDetail::create( [
		'id'=>67,
		'user_id'=>67,
		'address1'=>'2520 Coldstream Drive',
		'address2'=>NULL,
		'city'=>'Fort Worth',
		'country'=>'US',
		'state'=>'TX',
		'postal_code'=>'76123',
		'created_at'=>'2020-07-09 19:22:15',
		'updated_at'=>'2020-07-09 19:22:15'
		] );
					
		UserDetail::create( [
		'id'=>68,
		'user_id'=>68,
		'address1'=>'14006 CR 3111',
		'address2'=>NULL,
		'city'=>'Gladewater',
		'country'=>'US',
		'state'=>'TX',
		'postal_code'=>'75647',
		'created_at'=>'2020-07-09 19:37:24',
		'updated_at'=>'2020-07-09 19:37:24'
		] );
					
		UserDetail::create( [
		'id'=>69,
		'user_id'=>69,
		'address1'=>'P.O. Box 34461',
		'address2'=>NULL,
		'city'=>'Detroit',
		'country'=>'US',
		'state'=>'MI',
		'postal_code'=>'48212',
		'created_at'=>'2020-07-09 19:57:44',
		'updated_at'=>'2020-07-09 19:57:44'
		] );
					
		UserDetail::create( [
		'id'=>70,
		'user_id'=>70,
		'address1'=>'2145 W 410 S',
		'address2'=>NULL,
		'city'=>'Provo',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84601',
		'created_at'=>'2020-07-09 20:09:14',
		'updated_at'=>'2020-07-09 20:09:14'
		] );
					
		UserDetail::create( [
		'id'=>71,
		'user_id'=>71,
		'address1'=>'39373lacomdrive',
		'address2'=>NULL,
		'city'=>'lebanon',
		'country'=>'US',
		'state'=>'OR',
		'postal_code'=>'97355',
		'created_at'=>'2020-07-09 20:48:21',
		'updated_at'=>'2020-07-09 20:48:21'
		] );
					
		UserDetail::create( [
		'id'=>72,
		'user_id'=>72,
		'address1'=>'10208 W Caron Dr',
		'address2'=>NULL,
		'city'=>'Sun. City',
		'country'=>'US',
		'state'=>'AZ',
		'postal_code'=>'85351',
		'created_at'=>'2020-07-09 21:21:00',
		'updated_at'=>'2020-07-09 21:21:00'
		] );
					
		UserDetail::create( [
		'id'=>73,
		'user_id'=>73,
		'address1'=>'41 King Road',
		'address2'=>NULL,
		'city'=>'Stanley',
		'country'=>'US',
		'state'=>'NM',
		'postal_code'=>'87056',
		'created_at'=>'2020-07-09 21:49:45',
		'updated_at'=>'2020-07-09 21:49:45'
		] );
					
		UserDetail::create( [
		'id'=>74,
		'user_id'=>74,
		'address1'=>'20944 Cox Mills ct',
		'address2'=>NULL,
		'city'=>'Ashburn',
		'country'=>'US',
		'state'=>'VA',
		'postal_code'=>'20147',
		'created_at'=>'2020-07-09 21:58:20',
		'updated_at'=>'2020-07-09 21:58:20'
		] );
					
		UserDetail::create( [
		'id'=>75,
		'user_id'=>75,
		'address1'=>'661 S 2220 W #101',
		'address2'=>NULL,
		'city'=>'Pleasant Grove',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84062',
		'created_at'=>'2020-07-09 22:13:19',
		'updated_at'=>'2020-07-09 22:13:19'
		] );
					
		UserDetail::create( [
		'id'=>76,
		'user_id'=>76,
		'address1'=>'po Box 1561',
		'address2'=>NULL,
		'city'=>'Corbin',
		'country'=>'US',
		'state'=>'KY',
		'postal_code'=>'40702',
		'created_at'=>'2020-07-09 22:13:24',
		'updated_at'=>'2020-07-09 22:13:24'
		] );
					
		UserDetail::create( [
		'id'=>77,
		'user_id'=>77,
		'address1'=>'10730 Potranco Road',
		'address2'=>'Unit 122-544',
		'city'=>'San Antonio',
		'country'=>'US',
		'state'=>'TX',
		'postal_code'=>'78251',
		'created_at'=>'2020-07-09 22:36:57',
		'updated_at'=>'2020-07-09 22:36:57'
		] );
					
		UserDetail::create( [
		'id'=>78,
		'user_id'=>78,
		'address1'=>'6212 Dekeon Dr.',
		'address2'=>NULL,
		'city'=>'College Park',
		'country'=>'US',
		'state'=>'GA',
		'postal_code'=>'30349',
		'created_at'=>'2020-07-09 22:36:59',
		'updated_at'=>'2020-07-09 22:36:59'
		] );
					
		UserDetail::create( [
		'id'=>79,
		'user_id'=>79,
		'address1'=>'2236 FM 724',
		'address2'=>NULL,
		'city'=>'Tyler',
		'country'=>'US',
		'state'=>'TX',
		'postal_code'=>'74704',
		'created_at'=>'2020-07-09 23:44:33',
		'updated_at'=>'2020-07-09 23:44:33'
		] );
					
		UserDetail::create( [
		'id'=>80,
		'user_id'=>80,
		'address1'=>'1126 Montgomery St.',
		'address2'=>NULL,
		'city'=>'Oroville',
		'country'=>'US',
		'state'=>'CA',
		'postal_code'=>'95965',
		'created_at'=>'2020-07-09 23:47:26',
		'updated_at'=>'2020-07-09 23:47:26'
		] );
					
		UserDetail::create( [
		'id'=>81,
		'user_id'=>81,
		'address1'=>'249 W. Jackson St.',
		'address2'=>'#216',
		'city'=>'Hayward',
		'country'=>'US',
		'state'=>'CA',
		'postal_code'=>'94544',
		'created_at'=>'2020-07-10 00:13:04',
		'updated_at'=>'2020-07-10 00:13:04'
		] );
					
		UserDetail::create( [
		'id'=>82,
		'user_id'=>82,
		'address1'=>'218 Meteor Ave',
		'address2'=>'Apt 103',
		'city'=>'Cambridge',
		'country'=>'US',
		'state'=>'MD',
		'postal_code'=>'21613',
		'created_at'=>'2020-07-10 00:28:45',
		'updated_at'=>'2020-07-10 00:28:45'
		] );
					
		UserDetail::create( [
		'id'=>83,
		'user_id'=>83,
		'address1'=>'73 highland ave',
		'address2'=>'Apt.phc',
		'city'=>'Yonkers',
		'country'=>'US',
		'state'=>'NY',
		'postal_code'=>'10705',
		'created_at'=>'2020-07-10 00:35:41',
		'updated_at'=>'2020-07-10 00:35:41'
		] );
					
		UserDetail::create( [
		'id'=>84,
		'user_id'=>84,
		'address1'=>'10208 W Caron Drive',
		'address2'=>NULL,
		'city'=>'Sun City',
		'country'=>'US',
		'state'=>'AZ',
		'postal_code'=>'85351',
		'created_at'=>'2020-07-10 01:00:04',
		'updated_at'=>'2020-07-10 01:00:04'
		] );
					
		UserDetail::create( [
		'id'=>85,
		'user_id'=>85,
		'address1'=>'P O Box 1001',
		'address2'=>NULL,
		'city'=>'Guthrei',
		'country'=>'US',
		'state'=>'OK',
		'postal_code'=>'73044',
		'created_at'=>'2020-07-10 01:14:36',
		'updated_at'=>'2020-07-10 01:14:36'
		] );
					
		UserDetail::create( [
		'id'=>86,
		'user_id'=>86,
		'address1'=>'170 S West Ridge road #335',
		'address2'=>NULL,
		'city'=>'Rocky Ridge',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84645-0335',
		'created_at'=>'2020-07-10 01:17:57',
		'updated_at'=>'2020-07-10 01:17:57'
		] );
					
		UserDetail::create( [
		'id'=>87,
		'user_id'=>87,
		'address1'=>'27 Piper Drive',
		'address2'=>NULL,
		'city'=>'Corbin',
		'country'=>'US',
		'state'=>'KY',
		'postal_code'=>'40701',
		'created_at'=>'2020-07-10 01:39:27',
		'updated_at'=>'2020-07-10 01:39:27'
		] );
					
		UserDetail::create( [
		'id'=>88,
		'user_id'=>88,
		'address1'=>'401 N 900 E',
		'address2'=>'Apt 1',
		'city'=>'Provo',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84606',
		'created_at'=>'2020-07-10 01:51:07',
		'updated_at'=>'2020-07-10 01:51:07'
		] );
					
		UserDetail::create( [
		'id'=>89,
		'user_id'=>89,
		'address1'=>'1107 Wynnes Ridge Circle',
		'address2'=>NULL,
		'city'=>'Marietta',
		'country'=>'US',
		'state'=>'GA',
		'postal_code'=>'30067',
		'created_at'=>'2020-07-10 02:03:14',
		'updated_at'=>'2020-07-10 02:03:14'
		] );
					
		UserDetail::create( [
		'id'=>90,
		'user_id'=>90,
		'address1'=>'5224 Carriage Pine Drive',
		'address2'=>NULL,
		'city'=>'Raleigh',
		'country'=>'US',
		'state'=>'NC',
		'postal_code'=>'27616',
		'created_at'=>'2020-07-10 02:08:23',
		'updated_at'=>'2020-07-10 02:08:23'
		] );
					
		UserDetail::create( [
		'id'=>91,
		'user_id'=>91,
		'address1'=>'661 S 2220 W #101',
		'address2'=>NULL,
		'city'=>'Pleasant Grove',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84062',
		'created_at'=>'2020-07-10 02:10:20',
		'updated_at'=>'2020-07-10 02:10:20'
		] );
					
		UserDetail::create( [
		'id'=>92,
		'user_id'=>92,
		'address1'=>'661 S 2220 W #101',
		'address2'=>NULL,
		'city'=>'Pleasant Grove',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84062',
		'created_at'=>'2020-07-10 02:14:15',
		'updated_at'=>'2020-07-10 02:14:15'
		] );
					
		UserDetail::create( [
		'id'=>93,
		'user_id'=>93,
		'address1'=>'2280 N. Fayetteville Street',
		'address2'=>'308',
		'city'=>'Asheboro',
		'country'=>'US',
		'state'=>'NC',
		'postal_code'=>'27203',
		'created_at'=>'2020-07-10 02:25:00',
		'updated_at'=>'2020-07-10 02:25:00'
		] );
					
		UserDetail::create( [
		'id'=>94,
		'user_id'=>94,
		'address1'=>'20 country Place ct.',
		'address2'=>NULL,
		'city'=>'Stockbridge',
		'country'=>'US',
		'state'=>'GA',
		'postal_code'=>'30281',
		'created_at'=>'2020-07-10 02:56:53',
		'updated_at'=>'2020-07-10 02:56:53'
		] );
					
		UserDetail::create( [
		'id'=>95,
		'user_id'=>95,
		'address1'=>'27 Bruce Street',
		'address2'=>'St Georges Basin',
		'city'=>'St Georges Basin',
		'country'=>'AU',
		'state'=>'NSW',
		'postal_code'=>'2540',
		'created_at'=>'2020-07-10 03:05:25',
		'updated_at'=>'2020-07-10 03:05:25'
		] );
					
		UserDetail::create( [
		'id'=>96,
		'user_id'=>96,
		'address1'=>'2521 Cottonwood Dr.',
		'address2'=>NULL,
		'city'=>'Lehi',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84043',
		'created_at'=>'2020-07-10 03:32:06',
		'updated_at'=>'2020-07-10 03:32:06'
		] );
					
		UserDetail::create( [
		'id'=>97,
		'user_id'=>97,
		'address1'=>'675 N 800 E',
		'address2'=>NULL,
		'city'=>'orem',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84097',
		'created_at'=>'2020-07-10 04:40:00',
		'updated_at'=>'2020-07-10 04:40:00'
		] );
					
		UserDetail::create( [
		'id'=>98,
		'user_id'=>98,
		'address1'=>'1166 Forest Ave.',
		'address2'=>NULL,
		'city'=>'Ojai',
		'country'=>'US',
		'state'=>'CA',
		'postal_code'=>'93023',
		'created_at'=>'2020-07-10 08:15:16',
		'updated_at'=>'2020-07-10 08:15:16'
		] );
					
		UserDetail::create( [
		'id'=>99,
		'user_id'=>99,
		'address1'=>'132 Martin Street',
		'address2'=>NULL,
		'city'=>'Battle Creek',
		'country'=>'US',
		'state'=>'MI',
		'postal_code'=>'49014',
		'created_at'=>'2020-07-10 09:57:01',
		'updated_at'=>'2020-07-10 09:57:01'
		] );
					
		UserDetail::create( [
		'id'=>100,
		'user_id'=>100,
		'address1'=>'324 Hambrick Park',
		'address2'=>NULL,
		'city'=>'Fayetteville',
		'country'=>'US',
		'state'=>'GA',
		'postal_code'=>'30215',
		'created_at'=>'2020-07-10 12:18:47',
		'updated_at'=>'2020-07-10 12:18:47'
		] );
					
		UserDetail::create( [
		'id'=>101,
		'user_id'=>101,
		'address1'=>'3915 N Davencourt Loop',
		'address2'=>NULL,
		'city'=>'Lehi',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84043',
		'created_at'=>'2020-07-10 12:56:01',
		'updated_at'=>'2020-07-10 12:56:01'
		] );
					
		UserDetail::create( [
		'id'=>102,
		'user_id'=>102,
		'address1'=>'2700  Cowan  Blvd     Apt    319',
		'address2'=>NULL,
		'city'=>'Fredericksburg',
		'country'=>'US',
		'state'=>'VA',
		'postal_code'=>'22401',
		'created_at'=>'2020-07-10 12:58:43',
		'updated_at'=>'2020-07-10 12:58:43'
		] );
					
		UserDetail::create( [
		'id'=>103,
		'user_id'=>103,
		'address1'=>'PO Box 149',
		'address2'=>NULL,
		'city'=>'Williston',
		'country'=>'US',
		'state'=>'FL',
		'postal_code'=>'32696',
		'created_at'=>'2020-07-10 13:04:22',
		'updated_at'=>'2020-07-10 13:04:22'
		] );
					
		UserDetail::create( [
		'id'=>104,
		'user_id'=>104,
		'address1'=>'210 N. Mall Dr.',
		'address2'=>'Unit 77',
		'city'=>'St. George',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84790',
		'created_at'=>'2020-07-10 14:09:30',
		'updated_at'=>'2020-07-10 14:09:30'
		] );
					
		UserDetail::create( [
		'id'=>105,
		'user_id'=>105,
		'address1'=>'167 Green Valley Rd',
		'address2'=>NULL,
		'city'=>'Bristol',
		'country'=>'US',
		'state'=>'VA',
		'postal_code'=>'24202',
		'created_at'=>'2020-07-10 14:49:27',
		'updated_at'=>'2020-07-10 14:49:27'
		] );
					
		UserDetail::create( [
		'id'=>106,
		'user_id'=>106,
		'address1'=>'3491 Heatherwood Ct',
		'address2'=>NULL,
		'city'=>'Douglasville',
		'country'=>'US',
		'state'=>'GA',
		'postal_code'=>'30135',
		'created_at'=>'2020-07-10 15:36:53',
		'updated_at'=>'2020-07-10 15:36:53'
		] );
					
		UserDetail::create( [
		'id'=>107,
		'user_id'=>107,
		'address1'=>'222 Sunset Ave',
		'address2'=>'suite 110',
		'city'=>'Asheboro',
		'country'=>'US',
		'state'=>'NC',
		'postal_code'=>'27203',
		'created_at'=>'2020-07-10 15:56:27',
		'updated_at'=>'2020-07-10 15:56:27'
		] );
					
		UserDetail::create( [
		'id'=>108,
		'user_id'=>108,
		'address1'=>'914 Kirkwood Avenue',
		'address2'=>NULL,
		'city'=>'Pasadena',
		'country'=>'US',
		'state'=>'CA',
		'postal_code'=>'91103',
		'created_at'=>'2020-07-10 16:23:25',
		'updated_at'=>'2020-07-10 16:23:25'
		] );
					
		UserDetail::create( [
		'id'=>109,
		'user_id'=>109,
		'address1'=>'4110 Woodland Road,   Apt 2',
		'address2'=>NULL,
		'city'=>'Green Bay',
		'country'=>'US',
		'state'=>'WI',
		'postal_code'=>'54313',
		'created_at'=>'2020-07-10 16:29:22',
		'updated_at'=>'2020-07-10 16:29:22'
		] );
					
		UserDetail::create( [
		'id'=>110,
		'user_id'=>110,
		'address1'=>'902 Dent St',
		'address2'=>NULL,
		'city'=>'Tallahassee',
		'country'=>'US',
		'state'=>'FL',
		'postal_code'=>'32304-2337',
		'created_at'=>'2020-07-10 17:28:25',
		'updated_at'=>'2020-07-10 17:28:25'
		] );
					
		UserDetail::create( [
		'id'=>111,
		'user_id'=>111,
		'address1'=>'1202 Patterson Avenue',
		'address2'=>NULL,
		'city'=>'Roanoke',
		'country'=>'US',
		'state'=>'VA',
		'postal_code'=>'24016',
		'created_at'=>'2020-07-10 17:36:26',
		'updated_at'=>'2020-07-10 17:36:26'
		] );
					
		UserDetail::create( [
		'id'=>112,
		'user_id'=>112,
		'address1'=>'2020 Brooks Dr #T5',
		'address2'=>NULL,
		'city'=>'District Heights',
		'country'=>'US',
		'state'=>'MD',
		'postal_code'=>'20747',
		'created_at'=>'2020-07-10 17:42:57',
		'updated_at'=>'2020-07-10 17:42:57'
		] );
					
		UserDetail::create( [
		'id'=>113,
		'user_id'=>113,
		'address1'=>'15324 Gorham',
		'address2'=>NULL,
		'city'=>'Houston',
		'country'=>'US',
		'state'=>'TX',
		'postal_code'=>'77084',
		'created_at'=>'2020-07-10 17:55:31',
		'updated_at'=>'2020-07-10 17:55:31'
		] );
					
		UserDetail::create( [
		'id'=>114,
		'user_id'=>114,
		'address1'=>'415 Dogwood Tr.',
		'address2'=>NULL,
		'city'=>'Desoto',
		'country'=>'US',
		'state'=>'TX',
		'postal_code'=>'75115',
		'created_at'=>'2020-07-10 18:55:26',
		'updated_at'=>'2020-07-10 18:55:26'
		] );
					
		UserDetail::create( [
		'id'=>115,
		'user_id'=>115,
		'address1'=>'804 Turf',
		'address2'=>NULL,
		'city'=>'Venice',
		'country'=>'US',
		'state'=>'FL',
		'postal_code'=>'34285',
		'created_at'=>'2020-07-10 19:11:11',
		'updated_at'=>'2020-07-10 19:11:11'
		] );
					
		UserDetail::create( [
		'id'=>116,
		'user_id'=>116,
		'address1'=>'7307 Fossil Garden Rd.',
		'address2'=>NULL,
		'city'=>'Arlington',
		'country'=>'US',
		'state'=>'TX',
		'postal_code'=>'76002',
		'created_at'=>'2020-07-10 19:11:49',
		'updated_at'=>'2020-07-10 19:11:49'
		] );
					
		UserDetail::create( [
		'id'=>117,
		'user_id'=>117,
		'address1'=>'8017 Allendale Dr',
		'address2'=>NULL,
		'city'=>'Hyattsville',
		'country'=>'US',
		'state'=>'MD',
		'postal_code'=>'20785',
		'created_at'=>'2020-07-10 19:21:07',
		'updated_at'=>'2020-07-10 19:21:07'
		] );
					
		UserDetail::create( [
		'id'=>118,
		'user_id'=>118,
		'address1'=>'Box 215',
		'address2'=>NULL,
		'city'=>'Camby',
		'country'=>'US',
		'state'=>'IN',
		'postal_code'=>'46113',
		'created_at'=>'2020-07-10 19:44:54',
		'updated_at'=>'2020-07-10 19:44:54'
		] );
					
		UserDetail::create( [
		'id'=>119,
		'user_id'=>119,
		'address1'=>'1234 Riverside Drive',
		'address2'=>NULL,
		'city'=>'Fort Atkinson',
		'country'=>'US',
		'state'=>'WI',
		'postal_code'=>'53538',
		'created_at'=>'2020-07-10 20:03:36',
		'updated_at'=>'2020-07-10 20:03:36'
		] );
					
		UserDetail::create( [
		'id'=>120,
		'user_id'=>120,
		'address1'=>'3618 Candlewyck Green Court',
		'address2'=>NULL,
		'city'=>'Florissant',
		'country'=>'US',
		'state'=>'MO',
		'postal_code'=>'63034',
		'created_at'=>'2020-07-10 20:18:44',
		'updated_at'=>'2020-07-10 20:18:44'
		] );
					
		UserDetail::create( [
		'id'=>121,
		'user_id'=>121,
		'address1'=>'106 Westchester Dr.',
		'address2'=>NULL,
		'city'=>'Winnipeg',
		'country'=>'CA',
		'state'=>'MB',
		'postal_code'=>'R3P 2G2',
		'created_at'=>'2020-07-10 21:32:35',
		'updated_at'=>'2020-07-10 21:32:35'
		] );
					
		UserDetail::create( [
		'id'=>122,
		'user_id'=>122,
		'address1'=>'P. O Box 15160',
		'address2'=>NULL,
		'city'=>'Chesapeake',
		'country'=>'US',
		'state'=>'VA',
		'postal_code'=>'23322',
		'created_at'=>'2020-07-10 22:28:09',
		'updated_at'=>'2020-07-10 22:28:09'
		] );
					
		UserDetail::create( [
		'id'=>123,
		'user_id'=>123,
		'address1'=>'117A N Church St',
		'address2'=>NULL,
		'city'=>'Belleville',
		'country'=>'US',
		'state'=>'IL',
		'postal_code'=>'62220',
		'created_at'=>'2020-07-10 23:53:07',
		'updated_at'=>'2020-07-10 23:53:07'
		] );
					
		UserDetail::create( [
		'id'=>124,
		'user_id'=>124,
		'address1'=>'312 west 500north',
		'address2'=>NULL,
		'city'=>'Orem',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84057',
		'created_at'=>'2020-07-11 00:08:53',
		'updated_at'=>'2020-07-11 00:08:53'
		] );
					
		UserDetail::create( [
		'id'=>125,
		'user_id'=>125,
		'address1'=>'3786 E Kingsbury St',
		'address2'=>NULL,
		'city'=>'Springfield',
		'country'=>'US',
		'state'=>'MO',
		'postal_code'=>'65809',
		'created_at'=>'2020-07-11 00:16:55',
		'updated_at'=>'2020-07-11 00:16:55'
		] );
					
		UserDetail::create( [
		'id'=>126,
		'user_id'=>126,
		'address1'=>'unit 4 49 Cedar Street',
		'address2'=>NULL,
		'city'=>'Evans Head',
		'country'=>'AU',
		'state'=>'NSW',
		'postal_code'=>'2473',
		'created_at'=>'2020-07-11 00:20:35',
		'updated_at'=>'2020-07-11 00:20:35'
		] );
					
		UserDetail::create( [
		'id'=>127,
		'user_id'=>127,
		'address1'=>'184central st',
		'address2'=>NULL,
		'city'=>'Maxwell',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'95955',
		'created_at'=>'2020-07-11 00:21:34',
		'updated_at'=>'2020-07-11 00:21:34'
		] );
					
		UserDetail::create( [
		'id'=>128,
		'user_id'=>128,
		'address1'=>'113north sun village dr',
		'address2'=>NULL,
		'city'=>'Orem',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84057',
		'created_at'=>'2020-07-11 00:31:51',
		'updated_at'=>'2020-07-11 00:31:51'
		] );
					
		UserDetail::create( [
		'id'=>129,
		'user_id'=>129,
		'address1'=>'420 Linum Ln',
		'address2'=>NULL,
		'city'=>'Saint Louis',
		'country'=>'US',
		'state'=>'MO',
		'postal_code'=>'63119',
		'created_at'=>'2020-07-11 00:57:34',
		'updated_at'=>'2020-07-11 00:57:34'
		] );
					
		UserDetail::create( [
		'id'=>130,
		'user_id'=>130,
		'address1'=>'9658 Westminster Ave #11',
		'address2'=>NULL,
		'city'=>'Garden Grove',
		'country'=>'US',
		'state'=>'CA',
		'postal_code'=>'92844',
		'created_at'=>'2020-07-11 01:21:02',
		'updated_at'=>'2020-07-11 01:21:02'
		] );
					
		UserDetail::create( [
		'id'=>131,
		'user_id'=>131,
		'address1'=>'7514 Murdoch Ave.',
		'address2'=>NULL,
		'city'=>'St. Louis',
		'country'=>'US',
		'state'=>'MO',
		'postal_code'=>'63119',
		'created_at'=>'2020-07-11 01:44:04',
		'updated_at'=>'2020-07-11 01:44:04'
		] );
					
		UserDetail::create( [
		'id'=>132,
		'user_id'=>132,
		'address1'=>'6 crosshill Street',
		'address2'=>'Leichhardt',
		'city'=>'Leichhardt',
		'country'=>'AU',
		'state'=>'QLD',
		'postal_code'=>'4305',
		'created_at'=>'2020-07-11 11:58:31',
		'updated_at'=>'2020-07-11 11:58:31'
		] );
					
		UserDetail::create( [
		'id'=>133,
		'user_id'=>133,
		'address1'=>'1020 N.Washington St. Apt 1402',
		'address2'=>NULL,
		'city'=>'Easton',
		'country'=>'US',
		'state'=>'MD',
		'postal_code'=>'21601',
		'created_at'=>'2020-07-11 14:19:17',
		'updated_at'=>'2020-07-11 14:19:17'
		] );
					
		UserDetail::create( [
		'id'=>134,
		'user_id'=>134,
		'address1'=>'137 Fox Run Dr.',
		'address2'=>NULL,
		'city'=>'Raymond',
		'country'=>'US',
		'state'=>'MS',
		'postal_code'=>'39154',
		'created_at'=>'2020-07-11 15:03:52',
		'updated_at'=>'2020-07-11 15:03:52'
		] );
					
		UserDetail::create( [
		'id'=>135,
		'user_id'=>135,
		'address1'=>'12022 Ledbury Commons Dr.',
		'address2'=>NULL,
		'city'=>'Gibsonton',
		'country'=>'US',
		'state'=>'FL',
		'postal_code'=>'33534',
		'created_at'=>'2020-07-11 15:32:12',
		'updated_at'=>'2020-07-11 15:32:12'
		] );
					
		UserDetail::create( [
		'id'=>136,
		'user_id'=>136,
		'address1'=>'6 Ryder Pl',
		'address2'=>NULL,
		'city'=>'East Rockaway',
		'country'=>'US',
		'state'=>'NY',
		'postal_code'=>'11518',
		'created_at'=>'2020-07-11 16:05:08',
		'updated_at'=>'2020-07-11 16:05:08'
		] );
					
		UserDetail::create( [
		'id'=>137,
		'user_id'=>137,
		'address1'=>'6900 W. Ellsworth Ave.',
		'address2'=>NULL,
		'city'=>'Lakewood',
		'country'=>'US',
		'state'=>'CO',
		'postal_code'=>'80226',
		'created_at'=>'2020-07-11 16:35:47',
		'updated_at'=>'2020-07-11 16:35:47'
		] );
					
		UserDetail::create( [
		'id'=>138,
		'user_id'=>138,
		'address1'=>'8237 Malvern Ave',
		'address2'=>NULL,
		'city'=>'Rancho Cucamonga',
		'country'=>'US',
		'state'=>'CA',
		'postal_code'=>'91730',
		'created_at'=>'2020-07-11 17:28:08',
		'updated_at'=>'2020-07-11 17:28:08'
		] );
					
		UserDetail::create( [
		'id'=>139,
		'user_id'=>139,
		'address1'=>'587 S Orem Blvd #C3',
		'address2'=>NULL,
		'city'=>'Orem',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84058',
		'created_at'=>'2020-07-11 17:31:20',
		'updated_at'=>'2020-07-11 17:31:20'
		] );
					
		UserDetail::create( [
		'id'=>140,
		'user_id'=>140,
		'address1'=>'145 E 1850 N',
		'address2'=>NULL,
		'city'=>'Orem',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84057',
		'created_at'=>'2020-07-11 17:36:32',
		'updated_at'=>'2020-07-11 17:36:32'
		] );
					
		UserDetail::create( [
		'id'=>141,
		'user_id'=>141,
		'address1'=>'145 E 1850 N',
		'address2'=>NULL,
		'city'=>'Orem',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84057',
		'created_at'=>'2020-07-11 17:47:12',
		'updated_at'=>'2020-07-11 17:47:12'
		] );
					
		UserDetail::create( [
		'id'=>142,
		'user_id'=>142,
		'address1'=>'167 Green Valley Rd',
		'address2'=>NULL,
		'city'=>'Bristol',
		'country'=>'US',
		'state'=>'VA',
		'postal_code'=>'24202',
		'created_at'=>'2020-07-11 19:14:14',
		'updated_at'=>'2020-07-11 19:14:14'
		] );
					
		UserDetail::create( [
		'id'=>143,
		'user_id'=>143,
		'address1'=>'908 Home ave',
		'address2'=>'Apt 1',
		'city'=>'Oak Park',
		'country'=>'US',
		'state'=>'IL',
		'postal_code'=>'60304',
		'created_at'=>'2020-07-11 20:51:02',
		'updated_at'=>'2020-07-11 20:51:02'
		] );
					
		UserDetail::create( [
		'id'=>144,
		'user_id'=>144,
		'address1'=>'8830 S Us Hwy 25',
		'address2'=>NULL,
		'city'=>'Corbin',
		'country'=>'US',
		'state'=>'KY',
		'postal_code'=>'40701',
		'created_at'=>'2020-07-11 20:58:05',
		'updated_at'=>'2020-07-11 20:58:05'
		] );
					
		UserDetail::create( [
		'id'=>145,
		'user_id'=>145,
		'address1'=>'1728 17th St N',
		'address2'=>NULL,
		'city'=>'Bessemer',
		'country'=>'US',
		'state'=>'AL',
		'postal_code'=>'35020',
		'created_at'=>'2020-07-11 21:40:58',
		'updated_at'=>'2020-07-11 21:40:58'
		] );
					
		UserDetail::create( [
		'id'=>146,
		'user_id'=>146,
		'address1'=>'35080 Chandler Ave 45',
		'address2'=>NULL,
		'city'=>'Calimesa',
		'country'=>'US',
		'state'=>'CA',
		'postal_code'=>'92320',
		'created_at'=>'2020-07-11 22:33:24',
		'updated_at'=>'2020-07-11 22:33:24'
		] );
					
		UserDetail::create( [
		'id'=>147,
		'user_id'=>147,
		'address1'=>'2017 Sonoma Valley Drive',
		'address2'=>'2017 Sonoma Valley Drive',
		'city'=>'Charlotte',
		'country'=>'US',
		'state'=>'NC',
		'postal_code'=>'28214',
		'created_at'=>'2020-07-11 23:24:38',
		'updated_at'=>'2020-07-11 23:24:38'
		] );
					
		UserDetail::create( [
		'id'=>148,
		'user_id'=>148,
		'address1'=>'8848 Nolley CT Apt 223',
		'address2'=>NULL,
		'city'=>'Charlotte',
		'country'=>'US',
		'state'=>'NC',
		'postal_code'=>'28270',
		'created_at'=>'2020-07-12 00:14:58',
		'updated_at'=>'2020-07-12 00:14:58'
		] );
					
		UserDetail::create( [
		'id'=>149,
		'user_id'=>149,
		'address1'=>'1491 Avenue I S.W.',
		'address2'=>NULL,
		'city'=>'Winter Haven',
		'country'=>'US',
		'state'=>'FL',
		'postal_code'=>'33880',
		'created_at'=>'2020-07-12 01:26:35',
		'updated_at'=>'2020-07-12 01:26:35'
		] );
					
		UserDetail::create( [
		'id'=>150,
		'user_id'=>150,
		'address1'=>'4516 Netherwood Dr',
		'address2'=>NULL,
		'city'=>'Tampa',
		'country'=>'US',
		'state'=>'FL',
		'postal_code'=>'33624',
		'created_at'=>'2020-07-12 02:13:41',
		'updated_at'=>'2020-07-12 02:13:41'
		] );
					
		UserDetail::create( [
		'id'=>151,
		'user_id'=>151,
		'address1'=>'100 Shannondoah Drive',
		'address2'=>NULL,
		'city'=>'Canton',
		'country'=>'US',
		'state'=>'NC',
		'postal_code'=>'28716',
		'created_at'=>'2020-07-12 02:16:01',
		'updated_at'=>'2020-07-12 02:16:01'
		] );
					
		UserDetail::create( [
		'id'=>152,
		'user_id'=>152,
		'address1'=>'P.O.Box 4445',
		'address2'=>NULL,
		'city'=>'Ontario',
		'country'=>'US',
		'state'=>'CA',
		'postal_code'=>'91761',
		'created_at'=>'2020-07-12 06:28:28',
		'updated_at'=>'2020-07-12 06:28:28'
		] );
					
		UserDetail::create( [
		'id'=>153,
		'user_id'=>153,
		'address1'=>'8237 Malvern',
		'address2'=>NULL,
		'city'=>'Rancho Cucamong',
		'country'=>'US',
		'state'=>'CA',
		'postal_code'=>'91730',
		'created_at'=>'2020-07-12 06:47:00',
		'updated_at'=>'2020-07-12 06:47:00'
		] );
					
		UserDetail::create( [
		'id'=>154,
		'user_id'=>154,
		'address1'=>'3443 Monticello Blvd.',
		'address2'=>NULL,
		'city'=>'Cleveland hts.',
		'country'=>'US',
		'state'=>'OH',
		'postal_code'=>'44121',
		'created_at'=>'2020-07-12 06:52:40',
		'updated_at'=>'2020-07-12 06:52:40'
		] );
					
		UserDetail::create( [
		'id'=>155,
		'user_id'=>155,
		'address1'=>'546 Claire Court',
		'address2'=>NULL,
		'city'=>'Macon',
		'country'=>'US',
		'state'=>'GA',
		'postal_code'=>'31217',
		'created_at'=>'2020-07-12 13:04:57',
		'updated_at'=>'2020-07-12 13:04:57'
		] );
					
		UserDetail::create( [
		'id'=>156,
		'user_id'=>156,
		'address1'=>'PO Box 941',
		'address2'=>NULL,
		'city'=>'Gloucester Point',
		'country'=>'US',
		'state'=>'VA',
		'postal_code'=>'23062',
		'created_at'=>'2020-07-12 14:05:30',
		'updated_at'=>'2020-07-12 14:05:30'
		] );
					
		UserDetail::create( [
		'id'=>157,
		'user_id'=>158,
		'address1'=>'#214, 3211 James Mowatt Trail SW',
		'address2'=>NULL,
		'city'=>'Edmonton',
		'country'=>'CA',
		'state'=>'AB',
		'postal_code'=>'T6W3L6',
		'created_at'=>'2020-07-12 14:56:11',
		'updated_at'=>'2020-07-12 14:56:11'
		] );
					
		UserDetail::create( [
		'id'=>158,
		'user_id'=>159,
		'address1'=>'1413 East 3rd Street',
		'address2'=>NULL,
		'city'=>'Winston-Salem',
		'country'=>'US',
		'state'=>'NC',
		'postal_code'=>'27101',
		'created_at'=>'2020-07-12 15:38:08',
		'updated_at'=>'2020-07-12 15:38:08'
		] );
					
		UserDetail::create( [
		'id'=>159,
		'user_id'=>161,
		'address1'=>'6147 Marrowbone Lake Road',
		'address2'=>NULL,
		'city'=>'Joelton',
		'country'=>'US',
		'state'=>'TN',
		'postal_code'=>'37080',
		'created_at'=>'2020-07-12 16:02:06',
		'updated_at'=>'2020-07-12 16:02:06'
		] );
					
		UserDetail::create( [
		'id'=>160,
		'user_id'=>162,
		'address1'=>'11406 N 132ND EAST AVE',
		'address2'=>NULL,
		'city'=>'OWASSO',
		'country'=>'US',
		'state'=>'OK',
		'postal_code'=>'74055',
		'created_at'=>'2020-07-12 17:12:52',
		'updated_at'=>'2020-07-12 17:12:52'
		] );
					
		UserDetail::create( [
		'id'=>161,
		'user_id'=>164,
		'address1'=>'515  Limestone  Flat',
		'address2'=>NULL,
		'city'=>'San Antonio',
		'country'=>'US',
		'state'=>'TX',
		'postal_code'=>'78251',
		'created_at'=>'2020-07-12 17:41:49',
		'updated_at'=>'2020-07-12 17:41:49'
		] );
					
		UserDetail::create( [
		'id'=>162,
		'user_id'=>167,
		'address1'=>'9517 N Shiloh Way',
		'address2'=>NULL,
		'city'=>'Eagle Mountain',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84005',
		'created_at'=>'2020-07-12 18:40:37',
		'updated_at'=>'2020-07-12 18:40:37'
		] );
					
		UserDetail::create( [
		'id'=>163,
		'user_id'=>168,
		'address1'=>'409 Old Milner Rd',
		'address2'=>NULL,
		'city'=>'Barnesville',
		'country'=>'US',
		'state'=>'GA',
		'postal_code'=>'30204',
		'created_at'=>'2020-07-12 18:47:37',
		'updated_at'=>'2020-07-12 18:47:37'
		] );
					
		UserDetail::create( [
		'id'=>164,
		'user_id'=>169,
		'address1'=>'8237 Malvern Ave',
		'address2'=>NULL,
		'city'=>'Rancho Cucamonga',
		'country'=>'US',
		'state'=>'CA',
		'postal_code'=>'91730',
		'created_at'=>'2020-07-12 19:35:50',
		'updated_at'=>'2020-07-12 19:35:50'
		] );
					
		UserDetail::create( [
		'id'=>165,
		'user_id'=>170,
		'address1'=>'1520 Caton Center dr. #M',
		'address2'=>NULL,
		'city'=>'Baltimore',
		'country'=>'US',
		'state'=>'MD',
		'postal_code'=>'21227',
		'created_at'=>'2020-07-12 19:39:01',
		'updated_at'=>'2020-07-12 19:39:01'
		] );
					
		UserDetail::create( [
		'id'=>166,
		'user_id'=>172,
		'address1'=>'1109 Candy Mountain Rd',
		'address2'=>NULL,
		'city'=>'Birmingham',
		'country'=>'US',
		'state'=>'AL',
		'postal_code'=>'35217',
		'created_at'=>'2020-07-12 19:50:47',
		'updated_at'=>'2020-07-12 19:50:47'
		] );
					
		UserDetail::create( [
		'id'=>167,
		'user_id'=>173,
		'address1'=>'211 Williams Creek Rd',
		'address2'=>NULL,
		'city'=>'Rush',
		'country'=>'US',
		'state'=>'KY',
		'postal_code'=>'41168',
		'created_at'=>'2020-07-12 20:04:10',
		'updated_at'=>'2020-07-12 20:04:10'
		] );
					
		UserDetail::create( [
		'id'=>168,
		'user_id'=>174,
		'address1'=>'6 Clewer Crescent',
		'address2'=>'South Hills Ext.1',
		'city'=>'Johannesburg',
		'country'=>'ZA',
		'state'=>'GT',
		'postal_code'=>'2197',
		'created_at'=>'2020-07-12 20:09:42',
		'updated_at'=>'2020-07-12 20:09:42'
		] );
					
		UserDetail::create( [
		'id'=>169,
		'user_id'=>178,
		'address1'=>'P.O. Box 1115',
		'address2'=>NULL,
		'city'=>'Paris',
		'country'=>'US',
		'state'=>'TN',
		'postal_code'=>'38242',
		'created_at'=>'2020-07-12 22:46:14',
		'updated_at'=>'2020-07-12 22:46:14'
		] );
					
		UserDetail::create( [
		'id'=>170,
		'user_id'=>181,
		'address1'=>'7267 Childers Ave',
		'address2'=>NULL,
		'city'=>'Las Vegas',
		'country'=>'US',
		'state'=>'NV',
		'postal_code'=>'89178',
		'created_at'=>'2020-07-12 23:02:22',
		'updated_at'=>'2020-07-12 23:02:22'
		] );
					
		UserDetail::create( [
		'id'=>171,
		'user_id'=>183,
		'address1'=>'2479 Honaker Road',
		'address2'=>NULL,
		'city'=>'Draper',
		'country'=>'US',
		'state'=>'VA',
		'postal_code'=>'24324',
		'created_at'=>'2020-07-12 23:20:58',
		'updated_at'=>'2020-07-12 23:20:58'
		] );
					
		UserDetail::create( [
		'id'=>172,
		'user_id'=>185,
		'address1'=>'P. O. Box 1427',
		'address2'=>NULL,
		'city'=>'Ashburn',
		'country'=>'US',
		'state'=>'VA',
		'postal_code'=>'20146',
		'created_at'=>'2020-07-12 23:36:25',
		'updated_at'=>'2020-07-12 23:36:25'
		] );
					
		UserDetail::create( [
		'id'=>173,
		'user_id'=>186,
		'address1'=>'887 Ansel Rd.',
		'address2'=>'Apt. 3',
		'city'=>'Cleveland',
		'country'=>'US',
		'state'=>'OH',
		'postal_code'=>'44103',
		'created_at'=>'2020-07-12 23:37:53',
		'updated_at'=>'2020-07-12 23:37:53'
		] );
					
		UserDetail::create( [
		'id'=>174,
		'user_id'=>187,
		'address1'=>'1391 Clark Rd.',
		'address2'=>NULL,
		'city'=>'Oroville',
		'country'=>'US',
		'state'=>'CA',
		'postal_code'=>'95965',
		'created_at'=>'2020-07-12 23:38:56',
		'updated_at'=>'2020-07-12 23:38:56'
		] );
					
		UserDetail::create( [
		'id'=>175,
		'user_id'=>190,
		'address1'=>'2479 Honaker Road',
		'address2'=>NULL,
		'city'=>'Draper',
		'country'=>'US',
		'state'=>'VA',
		'postal_code'=>'24324',
		'created_at'=>'2020-07-13 00:00:20',
		'updated_at'=>'2020-07-13 00:00:20'
		] );
					
		UserDetail::create( [
		'id'=>176,
		'user_id'=>191,
		'address1'=>'8410 E. Moyer Drive',
		'address2'=>NULL,
		'city'=>'Terre Haute',
		'country'=>'US',
		'state'=>'IN',
		'postal_code'=>'47803',
		'created_at'=>'2020-07-13 00:33:35',
		'updated_at'=>'2020-07-13 00:33:35'
		] );
					
		UserDetail::create( [
		'id'=>177,
		'user_id'=>194,
		'address1'=>'503 Blue Grass Ct',
		'address2'=>NULL,
		'city'=>'Mooresville',
		'country'=>'US',
		'state'=>'IN',
		'postal_code'=>'46158',
		'created_at'=>'2020-07-13 00:58:21',
		'updated_at'=>'2020-07-13 00:58:21'
		] );
					
		UserDetail::create( [
		'id'=>178,
		'user_id'=>195,
		'address1'=>'324 Hambrick  Park',
		'address2'=>NULL,
		'city'=>'Fayetteville',
		'country'=>'US',
		'state'=>'GA',
		'postal_code'=>'30215',
		'created_at'=>'2020-07-13 01:27:51',
		'updated_at'=>'2020-07-13 01:27:51'
		] );
					
		UserDetail::create( [
		'id'=>179,
		'user_id'=>196,
		'address1'=>'PO Box 4844',
		'address2'=>NULL,
		'city'=>'Kingshill',
		'country'=>'VI',
		'state'=>'SCR',
		'postal_code'=>'00851',
		'created_at'=>'2020-07-13 02:09:20',
		'updated_at'=>'2020-07-13 02:09:20'
		] );
					
		UserDetail::create( [
		'id'=>180,
		'user_id'=>197,
		'address1'=>'85 Mt. Zion Rd. SW #15',
		'address2'=>NULL,
		'city'=>'Atlanta',
		'country'=>'US',
		'state'=>'GA',
		'postal_code'=>'30354',
		'created_at'=>'2020-07-13 02:54:17',
		'updated_at'=>'2020-07-13 02:54:17'
		] );
					
		UserDetail::create( [
		'id'=>181,
		'user_id'=>198,
		'address1'=>'2654 Kevin Dr',
		'address2'=>NULL,
		'city'=>'Kinston',
		'country'=>'US',
		'state'=>'NC',
		'postal_code'=>'28501',
		'created_at'=>'2020-07-13 03:30:37',
		'updated_at'=>'2020-07-13 03:30:37'
		] );
					
		UserDetail::create( [
		'id'=>182,
		'user_id'=>199,
		'address1'=>'10 Rachel Crt Flat 2,',
		'address2'=>'Triq Patri Wistin Born',
		'city'=>'Marsaskala',
		'country'=>'MT',
		'state'=>'27',
		'postal_code'=>'MSK 3520',
		'created_at'=>'2020-07-13 05:13:52',
		'updated_at'=>'2020-07-13 05:13:52'
		] );
					
		UserDetail::create( [
		'id'=>183,
		'user_id'=>200,
		'address1'=>'65 Marine Drive #05-166',
		'address2'=>NULL,
		'city'=>'Singapore',
		'country'=>'SG',
		'state'=>'04',
		'postal_code'=>'440065',
		'created_at'=>'2020-07-13 12:28:33',
		'updated_at'=>'2020-07-13 12:28:33'
		] );
					
		UserDetail::create( [
		'id'=>184,
		'user_id'=>201,
		'address1'=>'1223 Camden Avenue',
		'address2'=>'Apt 2',
		'city'=>'Durham',
		'country'=>'US',
		'state'=>'NC',
		'postal_code'=>'27701',
		'created_at'=>'2020-07-13 14:45:01',
		'updated_at'=>'2020-07-13 14:45:01'
		] );
					
		UserDetail::create( [
		'id'=>185,
		'user_id'=>202,
		'address1'=>'115 S Ingraham Avenue',
		'address2'=>NULL,
		'city'=>'Tavares',
		'country'=>'US',
		'state'=>'FL',
		'postal_code'=>'32778',
		'created_at'=>'2020-07-13 16:58:55',
		'updated_at'=>'2020-07-13 16:58:55'
		] );
					
		UserDetail::create( [
		'id'=>186,
		'user_id'=>203,
		'address1'=>'1328 Piper Dr',
		'address2'=>NULL,
		'city'=>'Lake Havasu City',
		'country'=>'US',
		'state'=>'AZ',
		'postal_code'=>'86404',
		'created_at'=>'2020-07-13 18:50:48',
		'updated_at'=>'2020-07-13 18:50:48'
		] );
					
		UserDetail::create( [
		'id'=>187,
		'user_id'=>204,
		'address1'=>'1400 WOODLAND DRIVE',
		'address2'=>NULL,
		'city'=>'Bainbridge',
		'country'=>'US',
		'state'=>'GA',
		'postal_code'=>'39819',
		'created_at'=>'2020-07-13 18:58:40',
		'updated_at'=>'2020-07-13 18:58:40'
		] );
					
		UserDetail::create( [
		'id'=>188,
		'user_id'=>205,
		'address1'=>'1920 W. 65th Street',
		'address2'=>NULL,
		'city'=>'LOS ANGELES',
		'country'=>'US',
		'state'=>'CA',
		'postal_code'=>'90047',
		'created_at'=>'2020-07-13 19:06:04',
		'updated_at'=>'2020-07-13 19:06:04'
		] );
					
		UserDetail::create( [
		'id'=>189,
		'user_id'=>206,
		'address1'=>'3700 So Caraway',
		'address2'=>'J08',
		'city'=>'Jonesboro',
		'country'=>'US',
		'state'=>'AR',
		'postal_code'=>'72404',
		'created_at'=>'2020-07-13 19:06:05',
		'updated_at'=>'2020-07-13 19:06:05'
		] );
					
		UserDetail::create( [
		'id'=>190,
		'user_id'=>207,
		'address1'=>'990 34th street SE',
		'address2'=>NULL,
		'city'=>'paris',
		'country'=>'US',
		'state'=>'TX',
		'postal_code'=>'75460',
		'created_at'=>'2020-07-13 19:25:11',
		'updated_at'=>'2020-07-13 19:25:11'
		] );
					
		UserDetail::create( [
		'id'=>191,
		'user_id'=>209,
		'address1'=>'38 Vincent Pl',
		'address2'=>'38 Vincent place',
		'city'=>'Lynbrook',
		'country'=>'US',
		'state'=>'NY',
		'postal_code'=>'11563',
		'created_at'=>'2020-07-13 20:59:55',
		'updated_at'=>'2020-07-13 20:59:55'
		] );
					
		UserDetail::create( [
		'id'=>192,
		'user_id'=>212,
		'address1'=>'1901 Hampton Walk ct',
		'address2'=>NULL,
		'city'=>'Hoschton',
		'country'=>'US',
		'state'=>'GA',
		'postal_code'=>'30548',
		'created_at'=>'2020-07-13 21:22:16',
		'updated_at'=>'2020-07-13 21:22:16'
		] );
					
		UserDetail::create( [
		'id'=>193,
		'user_id'=>213,
		'address1'=>'P.O. Box 671',
		'address2'=>NULL,
		'city'=>'Milford',
		'country'=>'US',
		'state'=>'IN',
		'postal_code'=>'46542',
		'created_at'=>'2020-07-13 21:40:16',
		'updated_at'=>'2020-07-13 21:40:16'
		] );
					
		UserDetail::create( [
		'id'=>194,
		'user_id'=>215,
		'address1'=>'12702 Bay Cedar Drive',
		'address2'=>NULL,
		'city'=>'Houston',
		'country'=>'US',
		'state'=>'TX',
		'postal_code'=>'77048',
		'created_at'=>'2020-07-13 21:43:16',
		'updated_at'=>'2020-07-13 21:43:16'
		] );
					
		UserDetail::create( [
		'id'=>195,
		'user_id'=>217,
		'address1'=>'25815 Misty Mountain Ln',
		'address2'=>NULL,
		'city'=>'Katy',
		'country'=>'US',
		'state'=>'TX',
		'postal_code'=>'77494',
		'created_at'=>'2020-07-13 22:06:21',
		'updated_at'=>'2020-07-13 22:06:21'
		] );
					
		UserDetail::create( [
		'id'=>196,
		'user_id'=>218,
		'address1'=>'3983 S McCarron Blvd',
		'address2'=>'#591',
		'city'=>'Reno',
		'country'=>'US',
		'state'=>'NV',
		'postal_code'=>'89502',
		'created_at'=>'2020-07-13 22:20:39',
		'updated_at'=>'2020-07-13 22:20:39'
		] );
					
		UserDetail::create( [
		'id'=>197,
		'user_id'=>219,
		'address1'=>'po box2045',
		'address2'=>NULL,
		'city'=>'Ava',
		'country'=>'US',
		'state'=>'MO',
		'postal_code'=>'65608',
		'created_at'=>'2020-07-13 23:11:35',
		'updated_at'=>'2020-07-13 23:11:35'
		] );
					
		UserDetail::create( [
		'id'=>198,
		'user_id'=>220,
		'address1'=>'P.O. Box 4445',
		'address2'=>'1555 Holt Blvd',
		'city'=>'Ontario',
		'country'=>'US',
		'state'=>'CA',
		'postal_code'=>'91761',
		'created_at'=>'2020-07-13 23:23:23',
		'updated_at'=>'2020-07-13 23:23:23'
		] );
					
		UserDetail::create( [
		'id'=>199,
		'user_id'=>221,
		'address1'=>'487 Pinegrove Rd',
		'address2'=>NULL,
		'city'=>'Oakville',
		'country'=>'CA',
		'state'=>'ON',
		'postal_code'=>'L6K 2C2',
		'created_at'=>'2020-07-14 00:05:49',
		'updated_at'=>'2020-07-14 00:05:49'
		] );
					
		UserDetail::create( [
		'id'=>200,
		'user_id'=>222,
		'address1'=>'5 Clinton Close, Presidential Estates',
		'address2'=>NULL,
		'city'=>'Old Harbour',
		'country'=>'JM',
		'state'=>'14',
		'postal_code'=>'N/A',
		'created_at'=>'2020-07-14 00:29:26',
		'updated_at'=>'2020-07-14 00:29:26'
		] );
					
		UserDetail::create( [
		'id'=>201,
		'user_id'=>226,
		'address1'=>'10514  Aspen Wood Ct',
		'address2'=>NULL,
		'city'=>'Manassas',
		'country'=>'US',
		'state'=>'VA',
		'postal_code'=>'20110',
		'created_at'=>'2020-07-14 01:58:24',
		'updated_at'=>'2020-07-14 01:58:24'
		] );
					
		UserDetail::create( [
		'id'=>202,
		'user_id'=>228,
		'address1'=>'4278 South 2350 West',
		'address2'=>NULL,
		'city'=>'Roy',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84067',
		'created_at'=>'2020-07-14 02:30:57',
		'updated_at'=>'2020-07-14 02:30:57'
		] );
					
		UserDetail::create( [
		'id'=>203,
		'user_id'=>229,
		'address1'=>'400 Keeling Rd',
		'address2'=>NULL,
		'city'=>'Gadsden',
		'country'=>'US',
		'state'=>'AL',
		'postal_code'=>'35903',
		'created_at'=>'2020-07-14 02:31:29',
		'updated_at'=>'2020-07-14 02:31:29'
		] );
					
		UserDetail::create( [
		'id'=>204,
		'user_id'=>231,
		'address1'=>'36014 FM 149 Rd',
		'address2'=>NULL,
		'city'=>'Pinehurst',
		'country'=>'US',
		'state'=>'TX',
		'postal_code'=>'77362',
		'created_at'=>'2020-07-14 11:17:42',
		'updated_at'=>'2020-07-14 11:17:42'
		] );
					
		UserDetail::create( [
		'id'=>205,
		'user_id'=>232,
		'address1'=>'1074 Summit Ave #2F',
		'address2'=>NULL,
		'city'=>'Bronx',
		'country'=>'US',
		'state'=>'NY',
		'postal_code'=>'10452-4616',
		'created_at'=>'2020-07-14 18:24:26',
		'updated_at'=>'2020-07-14 18:24:26'
		] );
					
		UserDetail::create( [
		'id'=>206,
		'user_id'=>233,
		'address1'=>'175 N. Locust hill rd. #2608',
		'address2'=>NULL,
		'city'=>'Lexington',
		'country'=>'US',
		'state'=>'KY',
		'postal_code'=>'40509',
		'created_at'=>'2020-07-14 18:55:00',
		'updated_at'=>'2020-07-14 18:55:00'
		] );
					
		UserDetail::create( [
		'id'=>207,
		'user_id'=>234,
		'address1'=>'5543 S. White Springs Dr',
		'address2'=>NULL,
		'city'=>'Murray',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84123',
		'created_at'=>'2020-07-14 20:15:25',
		'updated_at'=>'2020-07-14 20:15:25'
		] );
					
		UserDetail::create( [
		'id'=>208,
		'user_id'=>235,
		'address1'=>'P.O.Box 30418',
		'address2'=>NULL,
		'city'=>'San Bernardino',
		'country'=>'US',
		'state'=>'CA',
		'postal_code'=>'92413',
		'created_at'=>'2020-07-15 00:20:34',
		'updated_at'=>'2020-07-15 00:20:34'
		] );
					
		UserDetail::create( [
		'id'=>209,
		'user_id'=>236,
		'address1'=>'2033 S 1230 W',
		'address2'=>NULL,
		'city'=>'Syacuse',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84075',
		'created_at'=>'2020-07-15 02:16:14',
		'updated_at'=>'2020-07-15 02:16:14'
		] );
					
		UserDetail::create( [
		'id'=>210,
		'user_id'=>238,
		'address1'=>'7183 S Brittany Town Dr.',
		'address2'=>NULL,
		'city'=>'West Joraan',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84084',
		'created_at'=>'2020-07-15 13:18:55',
		'updated_at'=>'2020-07-15 13:18:55'
		] );
					
		UserDetail::create( [
		'id'=>211,
		'user_id'=>239,
		'address1'=>'38 S Martin Rd',
		'address2'=>NULL,
		'city'=>'Janesville',
		'country'=>'US',
		'state'=>'WI',
		'postal_code'=>'53545',
		'created_at'=>'2020-07-15 15:34:41',
		'updated_at'=>'2020-07-15 15:34:41'
		] );
					
		UserDetail::create( [
		'id'=>212,
		'user_id'=>240,
		'address1'=>'4675 S Harrison Rd',
		'address2'=>'Unit 43',
		'city'=>'Tucson',
		'country'=>'US',
		'state'=>'AZ',
		'postal_code'=>'AZ',
		'created_at'=>'2020-07-15 17:35:17',
		'updated_at'=>'2020-07-15 17:35:17'
		] );
					
		UserDetail::create( [
		'id'=>213,
		'user_id'=>241,
		'address1'=>'1275 S. Plum St.  # 316',
		'address2'=>NULL,
		'city'=>'Springfield',
		'country'=>'US',
		'state'=>'OH',
		'postal_code'=>'45506',
		'created_at'=>'2020-07-15 18:59:33',
		'updated_at'=>'2020-07-15 18:59:33'
		] );
					
		UserDetail::create( [
		'id'=>214,
		'user_id'=>242,
		'address1'=>'9083A  Whippoorwill Rd.',
		'address2'=>NULL,
		'city'=>'Meridian',
		'country'=>'US',
		'state'=>'MS',
		'postal_code'=>'39307',
		'created_at'=>'2020-07-15 20:34:08',
		'updated_at'=>'2020-07-15 20:34:08'
		] );
					
		UserDetail::create( [
		'id'=>215,
		'user_id'=>244,
		'address1'=>'112w 475n',
		'address2'=>NULL,
		'city'=>'Attica',
		'country'=>'US',
		'state'=>'IN',
		'postal_code'=>'47918',
		'created_at'=>'2020-07-15 20:53:24',
		'updated_at'=>'2020-07-15 20:53:24'
		] );
					
		UserDetail::create( [
		'id'=>216,
		'user_id'=>245,
		'address1'=>'6015 E Red Bridge Rd',
		'address2'=>NULL,
		'city'=>'Kansas City',
		'country'=>'US',
		'state'=>'MO',
		'postal_code'=>'64134',
		'created_at'=>'2020-07-15 20:57:22',
		'updated_at'=>'2020-07-15 20:57:22'
		] );
					
		UserDetail::create( [
		'id'=>217,
		'user_id'=>248,
		'address1'=>'624 Quail Ridge Rd',
		'address2'=>NULL,
		'city'=>'Fruit Heights',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84037',
		'created_at'=>'2020-07-15 22:36:30',
		'updated_at'=>'2020-07-15 22:36:30'
		] );
					
		UserDetail::create( [
		'id'=>218,
		'user_id'=>249,
		'address1'=>'6418 Greenridge Avenue',
		'address2'=>NULL,
		'city'=>'New Carlisle',
		'country'=>'US',
		'state'=>'OH',
		'postal_code'=>'45344',
		'created_at'=>'2020-07-15 22:39:39',
		'updated_at'=>'2020-07-15 22:39:39'
		] );
					
		UserDetail::create( [
		'id'=>219,
		'user_id'=>250,
		'address1'=>'105 Maple Ridge',
		'address2'=>NULL,
		'city'=>'Buffalo',
		'country'=>'US',
		'state'=>'NY',
		'postal_code'=>'14215',
		'created_at'=>'2020-07-15 23:26:55',
		'updated_at'=>'2020-07-15 23:26:55'
		] );
					
		UserDetail::create( [
		'id'=>220,
		'user_id'=>251,
		'address1'=>'134 MacDonald Brown Drive',
		'address2'=>NULL,
		'city'=>'Corner Brook NL.',
		'country'=>'CA',
		'state'=>'NL',
		'postal_code'=>'A2H 7N8',
		'created_at'=>'2020-07-15 23:39:46',
		'updated_at'=>'2020-07-15 23:39:46'
		] );
					
		UserDetail::create( [
		'id'=>221,
		'user_id'=>252,
		'address1'=>'488 N 600 E',
		'address2'=>NULL,
		'city'=>'Orem',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84097',
		'created_at'=>'2020-07-15 23:59:29',
		'updated_at'=>'2020-07-15 23:59:29'
		] );
					
		UserDetail::create( [
		'id'=>222,
		'user_id'=>254,
		'address1'=>'15810 Gale Unit 117',
		'address2'=>NULL,
		'city'=>'Hacienda Heights',
		'country'=>'US',
		'state'=>'CA',
		'postal_code'=>'91745',
		'created_at'=>'2020-07-16 00:44:00',
		'updated_at'=>'2020-07-16 00:44:00'
		] );
					
		UserDetail::create( [
		'id'=>223,
		'user_id'=>255,
		'address1'=>'20320 Plainview Av',
		'address2'=>NULL,
		'city'=>'Detroit',
		'country'=>'US',
		'state'=>'MI',
		'postal_code'=>'48219',
		'created_at'=>'2020-07-16 01:08:02',
		'updated_at'=>'2020-07-16 01:08:02'
		] );
					
		UserDetail::create( [
		'id'=>224,
		'user_id'=>256,
		'address1'=>'2023 W. Crest Dr.',
		'address2'=>NULL,
		'city'=>'Toledo',
		'country'=>'US',
		'state'=>'OH',
		'postal_code'=>'43614',
		'created_at'=>'2020-07-16 02:06:24',
		'updated_at'=>'2020-07-16 02:06:24'
		] );
					
		UserDetail::create( [
		'id'=>225,
		'user_id'=>257,
		'address1'=>'3014 Stony Lake Drive Apt 1A',
		'address2'=>NULL,
		'city'=>'Richmond',
		'country'=>'US',
		'state'=>'VA',
		'postal_code'=>'23235',
		'created_at'=>'2020-07-16 02:26:05',
		'updated_at'=>'2020-07-16 02:26:05'
		] );
					
		UserDetail::create( [
		'id'=>226,
		'user_id'=>258,
		'address1'=>'11406 North 132nd E. Ave',
		'address2'=>NULL,
		'city'=>'Owasso',
		'country'=>'US',
		'state'=>'OK',
		'postal_code'=>'74055',
		'created_at'=>'2020-07-16 02:32:46',
		'updated_at'=>'2020-07-16 02:32:46'
		] );
					
		UserDetail::create( [
		'id'=>227,
		'user_id'=>259,
		'address1'=>'20 Country Place Ct.',
		'address2'=>NULL,
		'city'=>'Stockbridge',
		'country'=>'US',
		'state'=>'GA',
		'postal_code'=>'30281',
		'created_at'=>'2020-07-16 02:35:16',
		'updated_at'=>'2020-07-16 02:35:16'
		] );
					
		UserDetail::create( [
		'id'=>228,
		'user_id'=>260,
		'address1'=>'201 B N. Atlanta St',
		'address2'=>NULL,
		'city'=>'OWASSO',
		'country'=>'US',
		'state'=>'OK',
		'postal_code'=>'74055',
		'created_at'=>'2020-07-16 02:46:25',
		'updated_at'=>'2020-07-16 02:46:25'
		] );
					
		UserDetail::create( [
		'id'=>229,
		'user_id'=>261,
		'address1'=>'215 Birdie Dr',
		'address2'=>NULL,
		'city'=>'Pleasant Hill',
		'country'=>'US',
		'state'=>'MO',
		'postal_code'=>'64080',
		'created_at'=>'2020-07-16 02:54:39',
		'updated_at'=>'2020-07-16 02:54:39'
		] );
					
		UserDetail::create( [
		'id'=>230,
		'user_id'=>262,
		'address1'=>'8907 Marquis Lane',
		'address2'=>NULL,
		'city'=>'Clinton',
		'country'=>'US',
		'state'=>'MD',
		'postal_code'=>'20735',
		'created_at'=>'2020-07-16 03:37:55',
		'updated_at'=>'2020-07-16 03:37:55'
		] );
					
		UserDetail::create( [
		'id'=>231,
		'user_id'=>263,
		'address1'=>'1314 42nd Street',
		'address2'=>NULL,
		'city'=>'Orlando',
		'country'=>'US',
		'state'=>'FL',
		'postal_code'=>'32839',
		'created_at'=>'2020-07-16 03:53:34',
		'updated_at'=>'2020-07-16 03:53:34'
		] );
					
		UserDetail::create( [
		'id'=>232,
		'user_id'=>264,
		'address1'=>'10208 W Caron dr',
		'address2'=>NULL,
		'city'=>'Sun City',
		'country'=>'US',
		'state'=>'AZ',
		'postal_code'=>'85351',
		'created_at'=>'2020-07-16 04:14:42',
		'updated_at'=>'2020-07-16 04:14:42'
		] );
					
		UserDetail::create( [
		'id'=>233,
		'user_id'=>265,
		'address1'=>'9584 Sleepy Hollow Lane',
		'address2'=>NULL,
		'city'=>'Jonesboro',
		'country'=>'US',
		'state'=>'GA',
		'postal_code'=>'30238',
		'created_at'=>'2020-07-16 12:42:11',
		'updated_at'=>'2020-07-16 12:42:11'
		] );
					
		UserDetail::create( [
		'id'=>234,
		'user_id'=>267,
		'address1'=>'44 Franklin Street',
		'address2'=>NULL,
		'city'=>'East Rockaway',
		'country'=>'US',
		'state'=>'NY',
		'postal_code'=>'11518',
		'created_at'=>'2020-07-16 12:47:37',
		'updated_at'=>'2020-07-16 12:47:37'
		] );
					
		UserDetail::create( [
		'id'=>235,
		'user_id'=>268,
		'address1'=>'1940 Creek Rd.',
		'address2'=>NULL,
		'city'=>'Sarcoxie',
		'country'=>'US',
		'state'=>'MO',
		'postal_code'=>'64862',
		'created_at'=>'2020-07-16 13:53:26',
		'updated_at'=>'2020-07-16 13:53:26'
		] );
					
		UserDetail::create( [
		'id'=>236,
		'user_id'=>270,
		'address1'=>'2265B Birdnest Rd',
		'address2'=>NULL,
		'city'=>'Lake Charles',
		'country'=>'US',
		'state'=>'LA',
		'postal_code'=>'70611',
		'created_at'=>'2020-07-16 14:03:17',
		'updated_at'=>'2020-07-16 14:03:17'
		] );
					
		UserDetail::create( [
		'id'=>237,
		'user_id'=>271,
		'address1'=>'120 HUNTERS RIDGE DR',
		'address2'=>NULL,
		'city'=>'Monticello',
		'country'=>'US',
		'state'=>'GA',
		'postal_code'=>'31064',
		'created_at'=>'2020-07-16 14:20:34',
		'updated_at'=>'2020-07-16 14:20:34'
		] );
					
		UserDetail::create( [
		'id'=>238,
		'user_id'=>272,
		'address1'=>'3177 Austin Avenue',
		'address2'=>NULL,
		'city'=>'Clovis',
		'country'=>'US',
		'state'=>'CA',
		'postal_code'=>'93619',
		'created_at'=>'2020-07-16 15:13:16',
		'updated_at'=>'2020-07-16 15:13:16'
		] );
					
		UserDetail::create( [
		'id'=>239,
		'user_id'=>273,
		'address1'=>'606 Denbigh Blvd',
		'address2'=>'102C',
		'city'=>'Newport News',
		'country'=>'US',
		'state'=>'VA',
		'postal_code'=>'23608',
		'created_at'=>'2020-07-16 15:14:47',
		'updated_at'=>'2020-07-16 15:14:47'
		] );
					
		UserDetail::create( [
		'id'=>240,
		'user_id'=>274,
		'address1'=>'233 Summer Terrace Lane NE',
		'address2'=>NULL,
		'city'=>'Atlanta',
		'country'=>'US',
		'state'=>'GA',
		'postal_code'=>'30342',
		'created_at'=>'2020-07-16 15:24:26',
		'updated_at'=>'2020-07-16 15:24:26'
		] );
					
		UserDetail::create( [
		'id'=>241,
		'user_id'=>275,
		'address1'=>'401 Buckeye Dr. Bldg 3 apt 204',
		'address2'=>NULL,
		'city'=>'Richmond Hill',
		'country'=>'US',
		'state'=>'GA',
		'postal_code'=>'31324',
		'created_at'=>'2020-07-16 16:32:42',
		'updated_at'=>'2020-07-16 16:32:42'
		] );
					
		UserDetail::create( [
		'id'=>242,
		'user_id'=>276,
		'address1'=>'270 Davis Dr.',
		'address2'=>'Suite 1005',
		'city'=>'Newmarket',
		'country'=>'CA',
		'state'=>'ON',
		'postal_code'=>'L3Y 8K2',
		'created_at'=>'2020-07-16 17:08:51',
		'updated_at'=>'2020-07-16 17:08:51'
		] );
					
		UserDetail::create( [
		'id'=>243,
		'user_id'=>277,
		'address1'=>'58 W PARK AVE',
		'address2'=>NULL,
		'city'=>'LONG BEACH',
		'country'=>'US',
		'state'=>'NY',
		'postal_code'=>'11561',
		'created_at'=>'2020-07-16 17:29:41',
		'updated_at'=>'2020-07-16 17:29:41'
		] );
					
		UserDetail::create( [
		'id'=>244,
		'user_id'=>278,
		'address1'=>'650 E 12th ST Apt C101',
		'address2'=>NULL,
		'city'=>'York',
		'country'=>'US',
		'state'=>'NE',
		'postal_code'=>'68467',
		'created_at'=>'2020-07-16 17:50:48',
		'updated_at'=>'2020-07-16 17:50:48'
		] );
					
		UserDetail::create( [
		'id'=>245,
		'user_id'=>279,
		'address1'=>'270 Davis Dr.',
		'address2'=>'Suite 1005',
		'city'=>'Newmarket',
		'country'=>'CA',
		'state'=>'ON',
		'postal_code'=>'L3Y 8K2',
		'created_at'=>'2020-07-16 18:12:19',
		'updated_at'=>'2020-07-16 18:12:19'
		] );
					
		UserDetail::create( [
		'id'=>246,
		'user_id'=>280,
		'address1'=>'9669 Marilla Dr',
		'address2'=>'Apt I',
		'city'=>'Lakeside',
		'country'=>'US',
		'state'=>'CA',
		'postal_code'=>'92040',
		'created_at'=>'2020-07-16 18:27:00',
		'updated_at'=>'2020-07-16 18:27:00'
		] );
					
		UserDetail::create( [
		'id'=>247,
		'user_id'=>281,
		'address1'=>'P.O. Box 76442',
		'address2'=>NULL,
		'city'=>'Los Angeles',
		'country'=>'US',
		'state'=>'CA',
		'postal_code'=>'90076',
		'created_at'=>'2020-07-16 18:33:10',
		'updated_at'=>'2020-07-16 18:33:10'
		] );
					
		UserDetail::create( [
		'id'=>248,
		'user_id'=>283,
		'address1'=>'PO box 692',
		'address2'=>NULL,
		'city'=>'Conneaut',
		'country'=>'US',
		'state'=>'OH',
		'postal_code'=>'44030',
		'created_at'=>'2020-07-16 19:09:29',
		'updated_at'=>'2020-07-16 19:09:29'
		] );
					
		UserDetail::create( [
		'id'=>249,
		'user_id'=>284,
		'address1'=>'1451 Main Ave',
		'address2'=>NULL,
		'city'=>'Sacramento',
		'country'=>'US',
		'state'=>'CA',
		'postal_code'=>'95838',
		'created_at'=>'2020-07-16 19:46:40',
		'updated_at'=>'2020-07-16 19:46:40'
		] );
					
		UserDetail::create( [
		'id'=>250,
		'user_id'=>285,
		'address1'=>'2501 Hurley Way',
		'address2'=>'Apt 6',
		'city'=>'sacrmento',
		'country'=>'US',
		'state'=>'CA',
		'postal_code'=>'95825',
		'created_at'=>'2020-07-16 19:52:59',
		'updated_at'=>'2020-07-16 19:52:59'
		] );
					
		UserDetail::create( [
		'id'=>251,
		'user_id'=>286,
		'address1'=>'1451 Main Ave',
		'address2'=>NULL,
		'city'=>'Sacramento',
		'country'=>'US',
		'state'=>'CA',
		'postal_code'=>'95838',
		'created_at'=>'2020-07-16 20:02:51',
		'updated_at'=>'2020-07-16 20:02:51'
		] );
					
		UserDetail::create( [
		'id'=>252,
		'user_id'=>287,
		'address1'=>'3600 Data Dr',
		'address2'=>'Apt 555',
		'city'=>'Rancho Cordova',
		'country'=>'US',
		'state'=>'CA',
		'postal_code'=>'95670',
		'created_at'=>'2020-07-16 20:06:07',
		'updated_at'=>'2020-07-16 20:06:07'
		] );
					
		UserDetail::create( [
		'id'=>253,
		'user_id'=>288,
		'address1'=>'33 Lee Road 962',
		'address2'=>NULL,
		'city'=>'Smiths Station',
		'country'=>'US',
		'state'=>'AL',
		'postal_code'=>'36877',
		'created_at'=>'2020-07-16 20:40:14',
		'updated_at'=>'2020-07-16 20:40:14'
		] );
					
		UserDetail::create( [
		'id'=>254,
		'user_id'=>289,
		'address1'=>'2341 Wyndham Court',
		'address2'=>NULL,
		'city'=>'Abilene',
		'country'=>'US',
		'state'=>'TX',
		'postal_code'=>'79606',
		'created_at'=>'2020-07-16 20:50:47',
		'updated_at'=>'2020-07-16 20:50:47'
		] );
					
		UserDetail::create( [
		'id'=>255,
		'user_id'=>290,
		'address1'=>'12022 Ledbury Commons Dr',
		'address2'=>NULL,
		'city'=>'Gibsonton',
		'country'=>'US',
		'state'=>'FL',
		'postal_code'=>'33534-3031',
		'created_at'=>'2020-07-16 21:02:03',
		'updated_at'=>'2020-07-16 21:02:03'
		] );
					
		UserDetail::create( [
		'id'=>256,
		'user_id'=>291,
		'address1'=>'12022 Ledbury Commons Dr.',
		'address2'=>NULL,
		'city'=>'Gibsonton',
		'country'=>'US',
		'state'=>'FL',
		'postal_code'=>'33534',
		'created_at'=>'2020-07-16 21:26:59',
		'updated_at'=>'2020-07-16 21:26:59'
		] );
					
		UserDetail::create( [
		'id'=>257,
		'user_id'=>292,
		'address1'=>'650 E 12th St Apt C101',
		'address2'=>NULL,
		'city'=>'York',
		'country'=>'US',
		'state'=>'NE',
		'postal_code'=>'68467',
		'created_at'=>'2020-07-16 21:30:13',
		'updated_at'=>'2020-07-16 21:30:13'
		] );
					
		UserDetail::create( [
		'id'=>258,
		'user_id'=>293,
		'address1'=>'812 Missouri Ave NW',
		'address2'=>'Washington',
		'city'=>'Washington',
		'country'=>'US',
		'state'=>'DC',
		'postal_code'=>'20011',
		'created_at'=>'2020-07-16 21:47:20',
		'updated_at'=>'2020-07-16 21:47:20'
		] );
					
		UserDetail::create( [
		'id'=>259,
		'user_id'=>294,
		'address1'=>'7471 Yonge Street',
		'address2'=>'117',
		'city'=>'Thornhill',
		'country'=>'CA',
		'state'=>'ON',
		'postal_code'=>'L3T2B9',
		'created_at'=>'2020-07-16 23:48:40',
		'updated_at'=>'2020-07-16 23:48:40'
		] );
					
		UserDetail::create( [
		'id'=>260,
		'user_id'=>295,
		'address1'=>'3816-45th Street SW',
		'address2'=>NULL,
		'city'=>'Calgary',
		'country'=>'CA',
		'state'=>'AB',
		'postal_code'=>'T3E3V6',
		'created_at'=>'2020-07-16 23:50:37',
		'updated_at'=>'2020-07-16 23:50:37'
		] );
					
		UserDetail::create( [
		'id'=>261,
		'user_id'=>296,
		'address1'=>'5400 Norfolk Street',
		'address2'=>'1st floor',
		'city'=>'Philadelphia',
		'country'=>'US',
		'state'=>'PA',
		'postal_code'=>'19143',
		'created_at'=>'2020-07-17 00:55:00',
		'updated_at'=>'2020-07-17 00:55:00'
		] );
					
		UserDetail::create( [
		'id'=>262,
		'user_id'=>297,
		'address1'=>'1507 randloph avn',
		'address2'=>NULL,
		'city'=>'greensboro',
		'country'=>'US',
		'state'=>'NC',
		'postal_code'=>'27406',
		'created_at'=>'2020-07-17 02:33:07',
		'updated_at'=>'2020-07-17 02:33:07'
		] );
					
		UserDetail::create( [
		'id'=>263,
		'user_id'=>298,
		'address1'=>'4111 Cole Ave',
		'address2'=>NULL,
		'city'=>'Dallas',
		'country'=>'US',
		'state'=>'TX',
		'postal_code'=>NULL,
		'created_at'=>'2020-07-17 02:45:15',
		'updated_at'=>'2020-07-17 02:45:15'
		] );
					
		UserDetail::create( [
		'id'=>264,
		'user_id'=>299,
		'address1'=>'14 Jalan Kota Laksamana 2/12,Taman Kota Laksamana Seksyen 2',
		'address2'=>NULL,
		'city'=>'Bandar Melaka',
		'country'=>'MY',
		'state'=>'04',
		'postal_code'=>'75200',
		'created_at'=>'2020-07-17 02:54:06',
		'updated_at'=>'2020-07-17 02:54:06'
		] );
					
		UserDetail::create( [
		'id'=>265,
		'user_id'=>300,
		'address1'=>'1647 Willow pass road #440',
		'address2'=>NULL,
		'city'=>'Concord',
		'country'=>'US',
		'state'=>'CA',
		'postal_code'=>'94520',
		'created_at'=>'2020-07-17 04:51:43',
		'updated_at'=>'2020-07-17 04:51:43'
		] );
					
		UserDetail::create( [
		'id'=>266,
		'user_id'=>301,
		'address1'=>'1907 W Main Street',
		'address2'=>NULL,
		'city'=>'Murfreesboro',
		'country'=>'US',
		'state'=>'NC',
		'postal_code'=>'27855',
		'created_at'=>'2020-07-17 04:59:44',
		'updated_at'=>'2020-07-17 04:59:44'
		] );
					
		UserDetail::create( [
		'id'=>267,
		'user_id'=>302,
		'address1'=>'33 Lee Rd 962',
		'address2'=>NULL,
		'city'=>'Smiths Station',
		'country'=>'US',
		'state'=>'AL',
		'postal_code'=>'36877',
		'created_at'=>'2020-07-17 05:20:50',
		'updated_at'=>'2020-07-17 05:20:50'
		] );
					
		UserDetail::create( [
		'id'=>268,
		'user_id'=>303,
		'address1'=>'33 Lee Road 962',
		'address2'=>NULL,
		'city'=>'Smiths Station',
		'country'=>'US',
		'state'=>'AL',
		'postal_code'=>'36877',
		'created_at'=>'2020-07-17 05:28:17',
		'updated_at'=>'2020-07-17 05:28:17'
		] );
					
		UserDetail::create( [
		'id'=>269,
		'user_id'=>304,
		'address1'=>'po. Box. 90040',
		'address2'=>NULL,
		'city'=>'Los Angeles',
		'country'=>'US',
		'state'=>'CA',
		'postal_code'=>'90040',
		'created_at'=>'2020-07-17 11:09:03',
		'updated_at'=>'2020-07-17 11:09:03'
		] );
					
		UserDetail::create( [
		'id'=>270,
		'user_id'=>305,
		'address1'=>'90 Crescent Lane',
		'address2'=>NULL,
		'city'=>'Wirtz',
		'country'=>'US',
		'state'=>'VA',
		'postal_code'=>'24184',
		'created_at'=>'2020-07-17 13:42:15',
		'updated_at'=>'2020-07-17 13:42:15'
		] );
					
		UserDetail::create( [
		'id'=>271,
		'user_id'=>306,
		'address1'=>'1580 Carraway Ct',
		'address2'=>NULL,
		'city'=>'Colorado Springs',
		'country'=>'US',
		'state'=>'CO',
		'postal_code'=>'80907',
		'created_at'=>'2020-07-17 14:17:47',
		'updated_at'=>'2020-07-17 14:17:47'
		] );
					
		UserDetail::create( [
		'id'=>272,
		'user_id'=>307,
		'address1'=>'310 Heather Rd.',
		'address2'=>NULL,
		'city'=>'Orem',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84057',
		'created_at'=>'2020-07-17 14:42:42',
		'updated_at'=>'2020-07-17 14:42:42'
		] );
					
		UserDetail::create( [
		'id'=>273,
		'user_id'=>308,
		'address1'=>'503 Fox Run Dr',
		'address2'=>NULL,
		'city'=>'Jonesboro',
		'country'=>'US',
		'state'=>'AR',
		'postal_code'=>'72404',
		'created_at'=>'2020-07-17 14:51:15',
		'updated_at'=>'2020-07-17 14:51:15'
		] );
					
		UserDetail::create( [
		'id'=>274,
		'user_id'=>309,
		'address1'=>'1834 Kennedy Place',
		'address2'=>NULL,
		'city'=>'Oxnard',
		'country'=>'US',
		'state'=>'CA',
		'postal_code'=>'93033',
		'created_at'=>'2020-07-17 15:50:44',
		'updated_at'=>'2020-07-17 15:50:44'
		] );
					
		UserDetail::create( [
		'id'=>275,
		'user_id'=>310,
		'address1'=>'430 Ridge Rd. Apt.10',
		'address2'=>NULL,
		'city'=>'Greenbelt',
		'country'=>'US',
		'state'=>'MD',
		'postal_code'=>'20770',
		'created_at'=>'2020-07-17 16:39:30',
		'updated_at'=>'2020-07-17 16:39:30'
		] );
					
		UserDetail::create( [
		'id'=>276,
		'user_id'=>311,
		'address1'=>'2415 San Pablo Dam Rd. Ste.',
		'address2'=>'#106-197',
		'city'=>'San Pablo',
		'country'=>'US',
		'state'=>'CA',
		'postal_code'=>'94806',
		'created_at'=>'2020-07-17 16:50:57',
		'updated_at'=>'2020-07-17 16:50:57'
		] );
					
		UserDetail::create( [
		'id'=>277,
		'user_id'=>312,
		'address1'=>'1064 E 300 S',
		'address2'=>NULL,
		'city'=>'Orem',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84097',
		'created_at'=>'2020-07-17 18:40:29',
		'updated_at'=>'2020-07-17 18:40:29'
		] );
					
		UserDetail::create( [
		'id'=>278,
		'user_id'=>313,
		'address1'=>'A.Phainom village, Sadar Hills Saikul Sub-Division, Kangpokpi District, Manipur',
		'address2'=>NULL,
		'city'=>'Imphal',
		'country'=>'IN',
		'state'=>'MN',
		'postal_code'=>'795114',
		'created_at'=>'2020-07-17 18:43:29',
		'updated_at'=>'2020-07-17 18:43:29'
		] );
					
		UserDetail::create( [
		'id'=>279,
		'user_id'=>314,
		'address1'=>'3014 Stony Lake Drive Apt 1A',
		'address2'=>NULL,
		'city'=>'Richmond',
		'country'=>'US',
		'state'=>'VA',
		'postal_code'=>'23235',
		'created_at'=>'2020-07-17 19:24:50',
		'updated_at'=>'2020-07-17 19:24:50'
		] );
					
		UserDetail::create( [
		'id'=>280,
		'user_id'=>315,
		'address1'=>'1903 Old Sawmill Road',
		'address2'=>NULL,
		'city'=>'Brandon',
		'country'=>'US',
		'state'=>'FL',
		'postal_code'=>'33510',
		'created_at'=>'2020-07-17 20:27:51',
		'updated_at'=>'2020-07-17 20:27:51'
		] );
					
		UserDetail::create( [
		'id'=>281,
		'user_id'=>316,
		'address1'=>'9728 Marilla Drive',
		'address2'=>'Unit 409',
		'city'=>'Lakeside',
		'country'=>'US',
		'state'=>'CA',
		'postal_code'=>'92040',
		'created_at'=>'2020-07-17 21:35:57',
		'updated_at'=>'2020-07-17 21:35:57'
		] );
					
		UserDetail::create( [
		'id'=>282,
		'user_id'=>317,
		'address1'=>'9615 Elizabeth Townes Lane',
		'address2'=>NULL,
		'city'=>'Charlotte',
		'country'=>'US',
		'state'=>'NC',
		'postal_code'=>'28277',
		'created_at'=>'2020-07-17 21:52:16',
		'updated_at'=>'2020-07-17 21:52:16'
		] );
					
		UserDetail::create( [
		'id'=>283,
		'user_id'=>318,
		'address1'=>'14088 CR 1134',
		'address2'=>NULL,
		'city'=>'Tyler',
		'country'=>'US',
		'state'=>'TX',
		'postal_code'=>'75709',
		'created_at'=>'2020-07-17 22:09:26',
		'updated_at'=>'2020-07-17 22:09:26'
		] );
					
		UserDetail::create( [
		'id'=>284,
		'user_id'=>319,
		'address1'=>'P.O. Box 153 109 West Main Street',
		'address2'=>NULL,
		'city'=>'SAINT LUCAS',
		'country'=>'US',
		'state'=>'IA',
		'postal_code'=>'52166',
		'created_at'=>'2020-07-17 22:11:47',
		'updated_at'=>'2020-07-17 22:11:47'
		] );
					
		UserDetail::create( [
		'id'=>285,
		'user_id'=>320,
		'address1'=>'109 Forks Ave',
		'address2'=>NULL,
		'city'=>'EASTON',
		'country'=>'US',
		'state'=>'PA',
		'postal_code'=>'18040',
		'created_at'=>'2020-07-17 23:32:59',
		'updated_at'=>'2020-07-17 23:32:59'
		] );
					
		UserDetail::create( [
		'id'=>286,
		'user_id'=>321,
		'address1'=>'10 Westchester Ct Apt 2',
		'address2'=>NULL,
		'city'=>'Birmingham',
		'country'=>'US',
		'state'=>'AL',
		'postal_code'=>'35215',
		'created_at'=>'2020-07-18 06:27:17',
		'updated_at'=>'2020-07-18 06:27:17'
		] );
					
		UserDetail::create( [
		'id'=>287,
		'user_id'=>322,
		'address1'=>'198 arora blvd #2606',
		'address2'=>NULL,
		'city'=>'Orange park',
		'country'=>'US',
		'state'=>'FL',
		'postal_code'=>'32073',
		'created_at'=>'2020-07-18 09:08:07',
		'updated_at'=>'2020-07-18 09:08:07'
		] );
					
		UserDetail::create( [
		'id'=>288,
		'user_id'=>323,
		'address1'=>'27291 Winterset Cir.',
		'address2'=>NULL,
		'city'=>'Farmington Hills',
		'country'=>'US',
		'state'=>'MI',
		'postal_code'=>'48334',
		'created_at'=>'2020-07-18 11:41:40',
		'updated_at'=>'2020-07-18 11:41:40'
		] );
					
		UserDetail::create( [
		'id'=>289,
		'user_id'=>324,
		'address1'=>'4963 Holborn Road',
		'address2'=>NULL,
		'city'=>'Mount Albert',
		'country'=>'CA',
		'state'=>'ON',
		'postal_code'=>'L0G 1M0',
		'created_at'=>'2020-07-18 12:19:01',
		'updated_at'=>'2020-07-18 12:19:01'
		] );
					
		UserDetail::create( [
		'id'=>290,
		'user_id'=>325,
		'address1'=>'5935 Tortosa Place',
		'address2'=>NULL,
		'city'=>'Atlanta',
		'country'=>'US',
		'state'=>'GA',
		'postal_code'=>'30349-1446',
		'created_at'=>'2020-07-18 17:19:24',
		'updated_at'=>'2020-07-18 17:19:24'
		] );
					
		UserDetail::create( [
		'id'=>291,
		'user_id'=>326,
		'address1'=>'554 English Neighborhood Road',
		'address2'=>NULL,
		'city'=>'Woodstock',
		'country'=>'US',
		'state'=>'CT',
		'postal_code'=>'06281',
		'created_at'=>'2020-07-18 17:42:59',
		'updated_at'=>'2020-07-18 17:42:59'
		] );
					
		UserDetail::create( [
		'id'=>292,
		'user_id'=>327,
		'address1'=>'P.O.Box 365',
		'address2'=>NULL,
		'city'=>'Juncos',
		'country'=>'US',
		'state'=>'PR',
		'postal_code'=>'00777',
		'created_at'=>'2020-07-18 18:44:52',
		'updated_at'=>'2020-07-18 18:44:52'
		] );
					
		UserDetail::create( [
		'id'=>293,
		'user_id'=>328,
		'address1'=>'Sliveroe Knocknahur Co, SligoIrelandF91YN77',
		'address2'=>NULL,
		'city'=>'Sligo',
		'country'=>'IE',
		'state'=>'SO',
		'postal_code'=>'F91YN77',
		'created_at'=>'2020-07-18 19:01:07',
		'updated_at'=>'2020-07-18 19:01:07'
		] );
					
		UserDetail::create( [
		'id'=>294,
		'user_id'=>329,
		'address1'=>'Filtrowa 83/61',
		'address2'=>NULL,
		'city'=>'Warszawa',
		'country'=>'PL',
		'state'=>'MZ',
		'postal_code'=>'02-032',
		'created_at'=>'2020-07-18 19:21:02',
		'updated_at'=>'2020-07-18 19:21:02'
		] );
					
		UserDetail::create( [
		'id'=>295,
		'user_id'=>330,
		'address1'=>'3600 DATA DR. #555',
		'address2'=>NULL,
		'city'=>'RANCHO CORDOVA',
		'country'=>'US',
		'state'=>'CA',
		'postal_code'=>'95670',
		'created_at'=>'2020-07-18 20:19:29',
		'updated_at'=>'2020-07-18 20:19:29'
		] );
					
		UserDetail::create( [
		'id'=>296,
		'user_id'=>331,
		'address1'=>'861 Old Hwy 4 W',
		'address2'=>NULL,
		'city'=>'Holly Springs',
		'country'=>'US',
		'state'=>'MS',
		'postal_code'=>'38635',
		'created_at'=>'2020-07-18 22:39:36',
		'updated_at'=>'2020-07-18 22:39:36'
		] );
					
		UserDetail::create( [
		'id'=>297,
		'user_id'=>332,
		'address1'=>'75 St Johns Road',
		'address2'=>'Spanish Town',
		'city'=>'Spanish Town',
		'country'=>'JM',
		'state'=>'14',
		'postal_code'=>'N/A',
		'created_at'=>'2020-07-18 23:25:31',
		'updated_at'=>'2020-07-18 23:25:31'
		] );
					
		UserDetail::create( [
		'id'=>298,
		'user_id'=>333,
		'address1'=>'3903 Turnbury St',
		'address2'=>NULL,
		'city'=>'Valrico',
		'country'=>'US',
		'state'=>'FL',
		'postal_code'=>'33596',
		'created_at'=>'2020-07-19 01:43:16',
		'updated_at'=>'2020-07-19 01:43:16'
		] );
					
		UserDetail::create( [
		'id'=>299,
		'user_id'=>334,
		'address1'=>'unit 4 49 Cedar Street',
		'address2'=>NULL,
		'city'=>'Evans Head',
		'country'=>'AU',
		'state'=>'NSW',
		'postal_code'=>'2473',
		'created_at'=>'2020-07-19 03:34:08',
		'updated_at'=>'2020-07-19 03:34:08'
		] );
					
		UserDetail::create( [
		'id'=>300,
		'user_id'=>335,
		'address1'=>'6 crosshill Street',
		'address2'=>NULL,
		'city'=>'Leichhardt',
		'country'=>'AU',
		'state'=>'QLD',
		'postal_code'=>'4305',
		'created_at'=>'2020-07-19 03:41:39',
		'updated_at'=>'2020-07-19 03:41:39'
		] );
					
		UserDetail::create( [
		'id'=>301,
		'user_id'=>336,
		'address1'=>'P.O Box 26421',
		'address2'=>NULL,
		'city'=>'Wilmington',
		'country'=>'US',
		'state'=>'DE',
		'postal_code'=>'19899',
		'created_at'=>'2020-07-19 12:44:43',
		'updated_at'=>'2020-07-19 12:44:43'
		] );
					
		UserDetail::create( [
		'id'=>302,
		'user_id'=>337,
		'address1'=>'9816 coasts st',
		'address2'=>NULL,
		'city'=>'Riverviee',
		'country'=>'US',
		'state'=>'FL',
		'postal_code'=>'33569',
		'created_at'=>'2020-07-19 17:40:18',
		'updated_at'=>'2020-07-19 17:40:18'
		] );
					
		UserDetail::create( [
		'id'=>303,
		'user_id'=>338,
		'address1'=>'3600 cypress street',
		'address2'=>NULL,
		'city'=>'sacramento',
		'country'=>'US',
		'state'=>'CA',
		'postal_code'=>'95838',
		'created_at'=>'2020-07-19 17:49:03',
		'updated_at'=>'2020-07-19 17:49:03'
		] );
					
		UserDetail::create( [
		'id'=>304,
		'user_id'=>339,
		'address1'=>'2210 Bryn Mawr Ave',
		'address2'=>NULL,
		'city'=>'Philadelphia',
		'country'=>'US',
		'state'=>'PA',
		'postal_code'=>'19131',
		'created_at'=>'2020-07-19 18:58:45',
		'updated_at'=>'2020-07-19 18:58:45'
		] );
					
		UserDetail::create( [
		'id'=>305,
		'user_id'=>340,
		'address1'=>'189 Beechwood Ave',
		'address2'=>NULL,
		'city'=>'Mount Vernon',
		'country'=>'US',
		'state'=>'NY',
		'postal_code'=>'10553',
		'created_at'=>'2020-07-19 18:59:39',
		'updated_at'=>'2020-07-19 18:59:39'
		] );
					
		UserDetail::create( [
		'id'=>306,
		'user_id'=>341,
		'address1'=>'14119 Covert Green Place',
		'address2'=>NULL,
		'city'=>'Riverview',
		'country'=>'US',
		'state'=>'FL',
		'postal_code'=>'33579',
		'created_at'=>'2020-07-19 19:13:11',
		'updated_at'=>'2020-07-19 19:13:11'
		] );
					
		UserDetail::create( [
		'id'=>307,
		'user_id'=>342,
		'address1'=>'290 Roywood Crescent',
		'address2'=>NULL,
		'city'=>'Newmarket',
		'country'=>'CA',
		'state'=>'ON',
		'postal_code'=>'L3Y 1A5',
		'created_at'=>'2020-07-19 19:17:56',
		'updated_at'=>'2020-07-19 19:17:56'
		] );
					
		UserDetail::create( [
		'id'=>308,
		'user_id'=>343,
		'address1'=>'38vincent place',
		'address2'=>NULL,
		'city'=>'Lynbrook',
		'country'=>'US',
		'state'=>'NY',
		'postal_code'=>'11563',
		'created_at'=>'2020-07-19 19:23:49',
		'updated_at'=>'2020-07-19 19:23:49'
		] );
					
		UserDetail::create( [
		'id'=>309,
		'user_id'=>344,
		'address1'=>'107 Morningside Drive',
		'address2'=>NULL,
		'city'=>'Carrboro',
		'country'=>'US',
		'state'=>'NC',
		'postal_code'=>'27510',
		'created_at'=>'2020-07-20 00:26:17',
		'updated_at'=>'2020-07-20 00:26:17'
		] );
					
		UserDetail::create( [
		'id'=>310,
		'user_id'=>345,
		'address1'=>'2711 Northridge Drive',
		'address2'=>NULL,
		'city'=>'Longview',
		'country'=>'US',
		'state'=>'TX',
		'postal_code'=>'75605',
		'created_at'=>'2020-07-20 00:52:44',
		'updated_at'=>'2020-07-20 00:52:44'
		] );
					
		UserDetail::create( [
		'id'=>311,
		'user_id'=>346,
		'address1'=>'56 West Boise Ave Apt #3',
		'address2'=>NULL,
		'city'=>'Aberdeen',
		'country'=>'US',
		'state'=>'ID',
		'postal_code'=>'83210',
		'created_at'=>'2020-07-20 01:20:50',
		'updated_at'=>'2020-07-20 01:20:50'
		] );
					
		UserDetail::create( [
		'id'=>312,
		'user_id'=>347,
		'address1'=>'1366 Garfield St #209',
		'address2'=>NULL,
		'city'=>'Denver',
		'country'=>'US',
		'state'=>'CO',
		'postal_code'=>'80206',
		'created_at'=>'2020-07-20 18:49:50',
		'updated_at'=>'2020-07-20 18:49:50'
		] );
					
		UserDetail::create( [
		'id'=>313,
		'user_id'=>348,
		'address1'=>'221 N 550 E',
		'address2'=>NULL,
		'city'=>'Orem',
		'country'=>'US',
		'state'=>'UT',
		'postal_code'=>'84097',
		'created_at'=>'2020-07-20 19:07:21',
		'updated_at'=>'2020-07-20 19:07:21'
		] );
					
		UserDetail::create( [
		'id'=>314,
		'user_id'=>349,
		'address1'=>'286 Woodfield Avenue',
		'address2'=>NULL,
		'city'=>'Lincoln',
		'country'=>'GB',
		'state'=>'LIN',
		'postal_code'=>'LN6 0LT',
		'created_at'=>'2020-07-20 22:41:32',
		'updated_at'=>'2020-07-20 22:41:32'
		] );
			
    }
}
