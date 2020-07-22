<?php

use Illuminate\Database\Seeder;
use App\Affiliate;

class AffiliateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Affiliate::create( [
			'parent_id'=>NULL,
			'user_id'=>1,
			'affiliate_id'=>'1000-MJKQ-1EF00',
			'created_at'=>NULL,
			'updated_at'=>'2020-07-20 11:51:25'
		] );


        Affiliate::create( [
			'parent_id'=>1,
			'user_id'=>2,
			'affiliate_id'=>'KC5Z-68DU-W5ZH',
			'created_at'=>'2020-07-06 20:30:52',
			'updated_at'=>'2020-07-06 20:30:52'
		]);


		Affiliate::create( [
			'parent_id'=>1,
			'user_id'=>3,
			'affiliate_id'=>'GDR9-94NP-S2CK',
			'created_at'=>'2020-07-06 20:44:22',
			'updated_at'=>'2020-07-20 11:51:25'
		] );

		Affiliate::create( [
		
			'parent_id'=>1,
			'user_id'=>4,
			'affiliate_id'=>'NE7K-IA33-WLFH',
			'created_at'=>'2020-07-06 20:53:18',
			'updated_at'=>'2020-07-20 11:51:25'
	    ] );


	    Affiliate::create( [
			'parent_id'=>2,
			'user_id'=>5,
			'affiliate_id'=>'U0YF-QCX5-VBPI',
			'created_at'=>'2020-07-06 20:59:11',
			'updated_at'=>'2020-07-06 20:59:11'
		] );

		Affiliate::create( [
		
		'parent_id'=>2,
		'user_id'=>6,
		'affiliate_id'=>'F25J-FUE5-WNEE',
		'created_at'=>'2020-07-06 21:54:24',
		'updated_at'=>'2020-07-06 21:54:24'

		] );


		Affiliate::create( [
		'parent_id'=>2,
		'user_id'=>7,
		'affiliate_id'=>'LEHP-7HN8-02UX',
		'created_at'=>'2020-07-07 02:52:25',
		'updated_at'=>'2020-07-07 02:52:25'
		] );

		Affiliate::create( [
		
		'parent_id'=>3,
		'user_id'=>8,
		'affiliate_id'=>'MUK1-PZCI-EBRD',
		'created_at'=>'2020-07-07 04:30:18',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		
		'parent_id'=>3,
		'user_id'=>9,
		'affiliate_id'=>'EB31-3RVN-R01C',
		'created_at'=>'2020-07-07 06:38:27',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>3,
		'user_id'=>10,
		'affiliate_id'=>'6RWS-Q5CK-GXLH',
		'created_at'=>'2020-07-07 17:44:31',
		'updated_at'=>'2020-07-20 11:51:25'
		] );

		Affiliate::create( [
		'parent_id'=>4,
		'user_id'=>11,
		'affiliate_id'=>'EUXD-SRG6-648E',
		'created_at'=>'2020-07-07 18:43:15',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
			
		Affiliate::create( [

		'parent_id'=>4,
		'user_id'=>12,
		'affiliate_id'=>'DH7K-8AV1-MI56',
		'created_at'=>'2020-07-07 21:57:39',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [

		'parent_id'=>4,
		'user_id'=>13,
		'affiliate_id'=>'GDDS-2O5L-4WZS',
		'created_at'=>'2020-07-07 22:26:03',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [

		'parent_id'=>5,
		'user_id'=>14,
		'affiliate_id'=>'OSI2-Z3RB-J0XQ',
		'created_at'=>'2020-07-07 22:46:53',
		'updated_at'=>'2020-07-07 22:46:53'
		] );
					
		Affiliate::create( [

		'parent_id'=>5,
		'user_id'=>15,
		'affiliate_id'=>'67GA-F7FS-3FMS',
		'created_at'=>'2020-07-08 00:21:23',
		'updated_at'=>'2020-07-08 00:21:23'
		] );
					
		Affiliate::create( [

		'parent_id'=>5,
		'user_id'=>16,
		'affiliate_id'=>'CFFZ-3BD0-OD9C',
		'created_at'=>'2020-07-08 01:24:14',
		'updated_at'=>'2020-07-08 01:24:14'
		] );
					
		Affiliate::create( [

		'parent_id'=>6,
		'user_id'=>17,
		'affiliate_id'=>'Z7ZQ-KX82-LJ5L',
		'created_at'=>'2020-07-08 13:39:11',
		'updated_at'=>'2020-07-08 13:39:11'
		] );
					
		Affiliate::create( [

		'parent_id'=>6,
		'user_id'=>18,
		'affiliate_id'=>'LD70-K8LJ-3SQI',
		'created_at'=>'2020-07-08 14:07:29',
		'updated_at'=>'2020-07-08 14:07:29'
		] );
					
		Affiliate::create( [

		'parent_id'=>6,
		'user_id'=>19,
		'affiliate_id'=>'60B4-DEFB-I3DW',
		'created_at'=>'2020-07-08 14:39:41',
		'updated_at'=>'2020-07-08 14:39:41'
		] );
					
		Affiliate::create( [
		'parent_id'=>7,
		'user_id'=>20,
		'affiliate_id'=>'V8I4-N8ZB-7WC9',
		'created_at'=>'2020-07-08 14:43:14',
		'updated_at'=>'2020-07-08 14:43:14'
		] );


		Affiliate::create([
		'parent_id'=>7,
		'user_id'=>21,
		'affiliate_id'=>'KDB7-ACPD-RXSL',
		'created_at'=>'2020-07-08 16:24:13',
		'updated_at'=>'2020-07-08 16:24:13'
		] );
					
		Affiliate::create( [
		'parent_id'=>7,
		'user_id'=>22,
		'affiliate_id'=>'EE0Q-09PI-H4PI',
		'created_at'=>'2020-07-08 17:53:28',
		'updated_at'=>'2020-07-08 17:53:28'
		] );
					
		Affiliate::create( [
		'parent_id'=>8,
		'user_id'=>23,
		'affiliate_id'=>'K46J-QF9A-YMAT',
		'created_at'=>'2020-07-08 18:24:03',
		'updated_at'=>'2020-07-08 18:24:03'
		] );
					
		Affiliate::create( [
		'parent_id'=>8,
		'user_id'=>24,
		'affiliate_id'=>'O597-GF7K-82X4',
		'created_at'=>'2020-07-08 18:32:20',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>8,
		'user_id'=>25,
		'affiliate_id'=>'1CGQ-CPGB-7GMC',
		'created_at'=>'2020-07-08 21:34:18',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>9,
		'user_id'=>26,
		'affiliate_id'=>'AF45-6QEK-OB1Z',
		'created_at'=>'2020-07-09 02:07:08',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>9,
		'user_id'=>27,
		'affiliate_id'=>'7SQ5-DC2Z-LAHS',
		'created_at'=>'2020-07-09 02:36:29',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>9,
		'user_id'=>28,
		'affiliate_id'=>'1GYG-PI1G-NT47',
		'created_at'=>'2020-07-09 14:39:55',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>10,
		'user_id'=>29,
		'affiliate_id'=>'Z750-ZBEF-CTJW',
		'created_at'=>'2020-07-09 15:32:41',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>10,
		'user_id'=>30,
		'affiliate_id'=>'QY0C-R2MI-JEZI',
		'created_at'=>'2020-07-09 16:00:49',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>10,
		'user_id'=>31,
		'affiliate_id'=>'4NA2-31QD-VSV8',
		'created_at'=>'2020-07-09 16:12:19',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>11,
		'user_id'=>32,
		'affiliate_id'=>'OF0Q-ON11-3QG7',
		'created_at'=>'2020-07-09 16:24:09',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>11,
		'user_id'=>33,
		'affiliate_id'=>'213K-KTHX-Z7KR',
		'created_at'=>'2020-07-09 16:25:13',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>11,
		'user_id'=>34,
		'affiliate_id'=>'JBR5-694F-Z1NE',
		'created_at'=>'2020-07-09 16:25:29',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>12,
		'user_id'=>35,
		'affiliate_id'=>'QSP5-J1SV-Y6F3',
		'created_at'=>'2020-07-09 16:34:00',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>12,
		'user_id'=>36,
		'affiliate_id'=>'YIP2-HXB0-ODWD',
		'created_at'=>'2020-07-09 16:39:50',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>12,
		'user_id'=>37,
		'affiliate_id'=>'2GMW-GLRO-HIPY',
		'created_at'=>'2020-07-09 16:43:24',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>13,
		'user_id'=>38,
		'affiliate_id'=>'R1FL-II6C-ZX2B',
		'created_at'=>'2020-07-09 16:53:33',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>13,
		'user_id'=>39,
		'affiliate_id'=>'VKLN-C2MX-WB1C',
		'created_at'=>'2020-07-09 16:56:17',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>13,
		'user_id'=>40,
		'affiliate_id'=>'OR6T-F3Q2-DL2X',
		'created_at'=>'2020-07-09 16:59:28',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>14,
		'user_id'=>41,
		'affiliate_id'=>'1IX1-ZYOJ-8C97',
		'created_at'=>'2020-07-09 17:01:52',
		'updated_at'=>'2020-07-09 17:01:52'
		] );
					
		Affiliate::create( [
		'parent_id'=>14,
		'user_id'=>42,
		'affiliate_id'=>'CUKV-SZBG-GMH5',
		'created_at'=>'2020-07-09 17:07:39',
		'updated_at'=>'2020-07-09 17:07:39'
		] );
					
		Affiliate::create( [
		'parent_id'=>14,
		'user_id'=>43,
		'affiliate_id'=>'5AXP-XL73-XLOI',
		'created_at'=>'2020-07-09 17:16:58',
		'updated_at'=>'2020-07-09 17:16:58'
		] );
					
		Affiliate::create( [
		'parent_id'=>15,
		'user_id'=>44,
		'affiliate_id'=>'DBQZ-T53L-OGAD',
		'created_at'=>'2020-07-09 17:22:48',
		'updated_at'=>'2020-07-09 17:22:48'
		] );
					
		Affiliate::create( [
		'parent_id'=>15,
		'user_id'=>45,
		'affiliate_id'=>'6IAQ-E58Y-306W',
		'created_at'=>'2020-07-09 17:23:52',
		'updated_at'=>'2020-07-09 17:23:52'
		] );
					
		Affiliate::create( [
		'parent_id'=>15,
		'user_id'=>46,
		'affiliate_id'=>'KSW4-KR8L-3RC5',
		'created_at'=>'2020-07-09 17:27:07',
		'updated_at'=>'2020-07-09 17:27:07'
		] );
					
		Affiliate::create( [
		'parent_id'=>16,
		'user_id'=>47,
		'affiliate_id'=>'0F9R-X8VI-5H0H',
		'created_at'=>'2020-07-09 17:28:26',
		'updated_at'=>'2020-07-09 17:28:26'
		] );
					
		Affiliate::create( [
		'parent_id'=>16,
		'user_id'=>48,
		'affiliate_id'=>'VYEU-8OD9-MAK9',
		'created_at'=>'2020-07-09 17:33:47',
		'updated_at'=>'2020-07-09 17:33:47'
		] );
					
		Affiliate::create( [
		'parent_id'=>16,
		'user_id'=>49,
		'affiliate_id'=>'Y9I3-7FQO-MJED',
		'created_at'=>'2020-07-09 17:36:17',
		'updated_at'=>'2020-07-09 17:36:17'
		] );
					
		Affiliate::create( [
		'parent_id'=>17,
		'user_id'=>50,
		'affiliate_id'=>'NAIH-S4KB-VPKJ',
		'created_at'=>'2020-07-09 17:37:08',
		'updated_at'=>'2020-07-09 17:37:08'
		] );
					
		Affiliate::create( [
		'parent_id'=>17,
		'user_id'=>51,
		'affiliate_id'=>'ZMAS-L8X9-QFQ8',
		'created_at'=>'2020-07-09 17:54:49',
		'updated_at'=>'2020-07-09 17:54:49'
		] );
					
		Affiliate::create( [
		'parent_id'=>17,
		'user_id'=>52,
		'affiliate_id'=>'K322-4QW8-3REU',
		'created_at'=>'2020-07-09 18:08:47',
		'updated_at'=>'2020-07-09 18:08:47'
		] );
					
		Affiliate::create( [
		'parent_id'=>18,
		'user_id'=>53,
		'affiliate_id'=>'PWGE-2VC5-JYLR',
		'created_at'=>'2020-07-09 18:12:17',
		'updated_at'=>'2020-07-09 18:12:17'
		] );
					
		Affiliate::create( [
		'parent_id'=>18,
		'user_id'=>54,
		'affiliate_id'=>'C76H-X2AI-WWYP',
		'created_at'=>'2020-07-09 18:18:23',
		'updated_at'=>'2020-07-09 18:18:23'
		] );
					
		Affiliate::create( [
		'parent_id'=>18,
		'user_id'=>55,
		'affiliate_id'=>'Z1Z8-4IZB-CJLX',
		'created_at'=>'2020-07-09 18:31:59',
		'updated_at'=>'2020-07-09 18:31:59'
		] );
					
		Affiliate::create( [
		'parent_id'=>19,
		'user_id'=>56,
		'affiliate_id'=>'XW3C-5A2I-SVFH',
		'created_at'=>'2020-07-09 18:33:53',
		'updated_at'=>'2020-07-09 18:33:53'
		] );
					
		Affiliate::create( [
		'parent_id'=>19,
		'user_id'=>57,
		'affiliate_id'=>'4PX6-A3UA-6AK6',
		'created_at'=>'2020-07-09 18:35:13',
		'updated_at'=>'2020-07-09 18:35:13'
		] );
					
		Affiliate::create( [
		'parent_id'=>19,
		'user_id'=>58,
		'affiliate_id'=>'UO72-YGBG-O2FW',
		'created_at'=>'2020-07-09 18:45:41',
		'updated_at'=>'2020-07-09 18:45:41'
		] );
					
		Affiliate::create( [
		'parent_id'=>20,
		'user_id'=>59,
		'affiliate_id'=>'WJO3-0I0D-NJ73',
		'created_at'=>'2020-07-09 18:46:13',
		'updated_at'=>'2020-07-09 18:46:13'
		] );
					
		Affiliate::create( [
		'parent_id'=>20,
		'user_id'=>60,
		'affiliate_id'=>'70C0-YN39-HAY4',
		'created_at'=>'2020-07-09 18:52:27',
		'updated_at'=>'2020-07-09 18:52:27'
		] );
					
		Affiliate::create( [
		'parent_id'=>20,
		'user_id'=>61,
		'affiliate_id'=>'SQRR-6E1C-B6SW',
		'created_at'=>'2020-07-09 18:53:11',
		'updated_at'=>'2020-07-09 18:53:11'
		] );
					
		Affiliate::create( [
		'parent_id'=>21,
		'user_id'=>62,
		'affiliate_id'=>'LWAJ-62DZ-FZXF',
		'created_at'=>'2020-07-09 19:01:41',
		'updated_at'=>'2020-07-09 19:01:41'
		] );
					
		Affiliate::create( [
		'parent_id'=>21,
		'user_id'=>63,
		'affiliate_id'=>'AXX1-45EE-M44P',
		'created_at'=>'2020-07-09 19:03:43',
		'updated_at'=>'2020-07-09 19:03:43'
		] );
					
		Affiliate::create( [
		'parent_id'=>21,
		'user_id'=>64,
		'affiliate_id'=>'9KHI-8NL9-7KKZ',
		'created_at'=>'2020-07-09 19:10:29',
		'updated_at'=>'2020-07-09 19:10:29'
		] );
					
		Affiliate::create( [
		'parent_id'=>22,
		'user_id'=>65,
		'affiliate_id'=>'7ZR4-K68G-ZS00',
		'created_at'=>'2020-07-09 19:12:07',
		'updated_at'=>'2020-07-09 19:12:07'
		] );
					
		Affiliate::create( [
		'parent_id'=>22,
		'user_id'=>66,
		'affiliate_id'=>'K4TH-W1K7-F59M',
		'created_at'=>'2020-07-09 19:19:07',
		'updated_at'=>'2020-07-09 19:19:07'
		] );
					
		Affiliate::create( [
		'parent_id'=>22,
		'user_id'=>67,
		'affiliate_id'=>'FR1C-F7VP-G38B',
		'created_at'=>'2020-07-09 19:22:15',
		'updated_at'=>'2020-07-09 19:22:15'
		] );
					
		Affiliate::create( [
		'parent_id'=>23,
		'user_id'=>68,
		'affiliate_id'=>'4UC4-BETT-TQ2D',
		'created_at'=>'2020-07-09 19:37:24',
		'updated_at'=>'2020-07-09 19:37:24'
		] );
					
		Affiliate::create( [
		'parent_id'=>23,
		'user_id'=>69,
		'affiliate_id'=>'C8IB-1J1V-JA04',
		'created_at'=>'2020-07-09 19:57:44',
		'updated_at'=>'2020-07-09 19:57:44'
		] );
					
		Affiliate::create( [
		'parent_id'=>23,
		'user_id'=>70,
		'affiliate_id'=>'WV94-Z1YR-VMXJ',
		'created_at'=>'2020-07-09 20:09:15',
		'updated_at'=>'2020-07-09 20:09:15'
		] );
					
		Affiliate::create( [
		'parent_id'=>24,
		'user_id'=>71,
		'affiliate_id'=>'5VMH-BBMK-T7GE',
		'created_at'=>'2020-07-09 20:48:21',
		'updated_at'=>'2020-07-20 08:59:23'
		] );
					
		Affiliate::create( [
		'parent_id'=>24,
		'user_id'=>72,
		'affiliate_id'=>'PWPG-57AE-335I',
		'created_at'=>'2020-07-09 21:21:00',
		'updated_at'=>'2020-07-20 08:59:23'
		] );

		// error
		Affiliate::create( [
			'parent_id'=>24,
			'user_id'=>73,
			'affiliate_id'=>'4MJ1-9QQK-13SP',
			'created_at'=>'2020-07-20 22:45:57',
			'updated_at'=>'2020-07-20 22:45:57'
		] );

					
		Affiliate::create( [
		'parent_id'=>25,
		'user_id'=>74,
		'affiliate_id'=>'HLGE-HXHL-UPJ1',
		'created_at'=>'2020-07-09 21:58:20',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>25,
		'user_id'=>75,
		'affiliate_id'=>'WWVO-E2FV-EKVY',
		'created_at'=>'2020-07-09 22:13:19',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>25,
		'user_id'=>76,
		'affiliate_id'=>'1IYM-EJW2-0Y0I',
		'created_at'=>'2020-07-09 22:13:25',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>26,
		'user_id'=>77,
		'affiliate_id'=>'N6I2-NI1J-FY1M',
		'created_at'=>'2020-07-09 22:36:57',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>26,
		'user_id'=>78,
		'affiliate_id'=>'IQLW-OITL-L1SK',
		'created_at'=>'2020-07-09 22:36:59',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>26,
		'user_id'=>79,
		'affiliate_id'=>'86A8-YJMY-X5H0',
		'created_at'=>'2020-07-09 23:44:33',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>27,
		'user_id'=>80,
		'affiliate_id'=>'24U5-W641-1SCI',
		'created_at'=>'2020-07-09 23:47:26',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>27,
		'user_id'=>81,
		'affiliate_id'=>'N0I0-5MJO-4C4D',
		'created_at'=>'2020-07-10 00:13:04',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>27,
		'user_id'=>82,
		'affiliate_id'=>'UQVR-GBHL-S02P',
		'created_at'=>'2020-07-10 00:28:45',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>28,
		'user_id'=>83,
		'affiliate_id'=>'SYCM-2E6X-4SEG',
		'created_at'=>'2020-07-10 00:35:41',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>28,
		'user_id'=>84,
		'affiliate_id'=>'I486-9OAI-EM9O',
		'created_at'=>'2020-07-10 01:00:04',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>28,
		'user_id'=>85,
		'affiliate_id'=>'PDD2-9YQE-F6AU',
		'created_at'=>'2020-07-10 01:14:36',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>29,
		'user_id'=>86,
		'affiliate_id'=>'R81H-9BAP-48X4',
		'created_at'=>'2020-07-10 01:17:57',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>29,
		'user_id'=>87,
		'affiliate_id'=>'PIFS-XY1O-AU4G',
		'created_at'=>'2020-07-10 01:39:27',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>29,
		'user_id'=>88,
		'affiliate_id'=>'30BD-6OV0-A0Z0',
		'created_at'=>'2020-07-10 01:51:08',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>30,
		'user_id'=>89,
		'affiliate_id'=>'J201-PYOK-YILJ',
		'created_at'=>'2020-07-10 02:03:14',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>30,
		'user_id'=>90,
		'affiliate_id'=>'NLEV-BIT5-NAUK',
		'created_at'=>'2020-07-10 02:08:24',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>30,
		'user_id'=>91,
		'affiliate_id'=>'SLI7-PL8F-QIDR',
		'created_at'=>'2020-07-10 02:10:20',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>31,
		'user_id'=>92,
		'affiliate_id'=>'K4KP-DOI1-T9WI',
		'created_at'=>'2020-07-10 02:14:15',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>31,
		'user_id'=>93,
		'affiliate_id'=>'74AD-WXUP-2X5Y',
		'created_at'=>'2020-07-10 02:25:00',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>31,
		'user_id'=>94,
		'affiliate_id'=>'UY1B-QPW8-JGCK',
		'created_at'=>'2020-07-10 02:56:54',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>32,
		'user_id'=>95,
		'affiliate_id'=>'KY9K-RZGF-DJ5X',
		'created_at'=>'2020-07-10 03:05:25',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>32,
		'user_id'=>96,
		'affiliate_id'=>'PZ1O-KKPV-41MJ',
		'created_at'=>'2020-07-10 03:32:06',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>32,
		'user_id'=>97,
		'affiliate_id'=>'149Y-AEQV-7JC9',
		'created_at'=>'2020-07-10 04:40:00',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>33,
		'user_id'=>98,
		'affiliate_id'=>'J9IG-FTXW-NRFV',
		'created_at'=>'2020-07-10 08:15:16',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>33,
		'user_id'=>99,
		'affiliate_id'=>'I6UT-DEA5-KKV4',
		'created_at'=>'2020-07-10 09:57:01',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>33,
		'user_id'=>100,
		'affiliate_id'=>'K7J0-JEXZ-WMIH',
		'created_at'=>'2020-07-10 12:18:47',
		'updated_at'=>'2020-07-20 11:51:25'
		] );

		Affiliate::create( [
		'parent_id'=>34,
		'user_id'=>101,
		'affiliate_id'=>'TU0G-KMJ2-R92G',
		'created_at'=>'2020-07-10 12:56:01',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>34,
		'user_id'=>102,
		'affiliate_id'=>'9CNR-HKIY-6MLU',
		'created_at'=>'2020-07-10 12:58:43',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>34,
		'user_id'=>103,
		'affiliate_id'=>'R9KA-RXVS-1DYJ',
		'created_at'=>'2020-07-10 13:04:22',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>35,
		'user_id'=>104,
		'affiliate_id'=>'ZUUV-B0WE-U7GR',
		'created_at'=>'2020-07-10 14:09:31',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>35,
		'user_id'=>105,
		'affiliate_id'=>'O3HW-H4FB-BVKJ',
		'created_at'=>'2020-07-10 14:49:27',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>35,
		'user_id'=>106,
		'affiliate_id'=>'V7PE-HD2N-PSY6',
		'created_at'=>'2020-07-10 15:36:53',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>36,
		'user_id'=>107,
		'affiliate_id'=>'F32F-9S7T-KT0R',
		'created_at'=>'2020-07-10 15:56:27',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>36,
		'user_id'=>108,
		'affiliate_id'=>'4MDL-DD4K-54H5',
		'created_at'=>'2020-07-10 16:23:25',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>36,
		'user_id'=>109,
		'affiliate_id'=>'7QFV-E8XC-Y7JR',
		'created_at'=>'2020-07-10 16:29:22',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>37,
		'user_id'=>110,
		'affiliate_id'=>'X2MN-UM0T-LG15',
		'created_at'=>'2020-07-10 17:28:25',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>37,
		'user_id'=>111,
		'affiliate_id'=>'25NA-JA1O-TJVP',
		'created_at'=>'2020-07-10 17:36:26',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>37,
		'user_id'=>112,
		'affiliate_id'=>'MLUO-BLW3-ZN17',
		'created_at'=>'2020-07-10 17:42:57',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>38,
		'user_id'=>113,
		'affiliate_id'=>'XCCF-67SO-SXM5',
		'created_at'=>'2020-07-10 17:55:32',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>38,
		'user_id'=>114,
		'affiliate_id'=>'A06S-NVFP-RDRZ',
		'created_at'=>'2020-07-10 18:55:26',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>38,
		'user_id'=>115,
		'affiliate_id'=>'MEZ9-872R-RGVX',
		'created_at'=>'2020-07-10 19:11:11',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>39,
		'user_id'=>116,
		'affiliate_id'=>'4FLG-YWFU-01AJ',
		'created_at'=>'2020-07-10 19:11:49',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>39,
		'user_id'=>117,
		'affiliate_id'=>'MW1S-G5NV-0LHE',
		'created_at'=>'2020-07-10 19:21:07',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>39,
		'user_id'=>118,
		'affiliate_id'=>'FWOR-F7X7-56F7',
		'created_at'=>'2020-07-10 19:44:54',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>40,
		'user_id'=>119,
		'affiliate_id'=>'KH2K-QT3F-P6ED',
		'created_at'=>'2020-07-10 20:03:36',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>40,
		'user_id'=>120,
		'affiliate_id'=>'0B1L-UPK0-LN1F',
		'created_at'=>'2020-07-10 20:18:44',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>40,
		'user_id'=>121,
		'affiliate_id'=>'ECI4-E41E-LXQ5',
		'created_at'=>'2020-07-10 21:32:35',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>41,
		'user_id'=>122,
		'affiliate_id'=>'N9PU-ACRH-AXSC',
		'created_at'=>'2020-07-10 22:28:09',
		'updated_at'=>'2020-07-10 22:28:09'
		] );
					
		Affiliate::create( [
		'parent_id'=>41,
		'user_id'=>123,
		'affiliate_id'=>'29S7-RXXC-IRPU',
		'created_at'=>'2020-07-10 23:53:07',
		'updated_at'=>'2020-07-10 23:53:07'
		] );
					
		Affiliate::create( [
		'parent_id'=>41,
		'user_id'=>124,
		'affiliate_id'=>'CR6S-FJEF-CXTU',
		'created_at'=>'2020-07-11 00:08:53',
		'updated_at'=>'2020-07-11 00:08:53'
		] );
					
		Affiliate::create( [
		'parent_id'=>42,
		'user_id'=>125,
		'affiliate_id'=>'X3T0-J0QJ-JKGP',
		'created_at'=>'2020-07-11 00:16:55',
		'updated_at'=>'2020-07-11 00:16:55'
		] );
					
		Affiliate::create( [
		'parent_id'=>42,
		'user_id'=>126,
		'affiliate_id'=>'3I9D-NQN1-MO19',
		'created_at'=>'2020-07-11 00:20:35',
		'updated_at'=>'2020-07-11 00:20:35'
		] );
					
		Affiliate::create( [
		'parent_id'=>42,
		'user_id'=>127,
		'affiliate_id'=>'8F65-ZCBQ-IDWT',
		'created_at'=>'2020-07-11 00:21:34',
		'updated_at'=>'2020-07-11 00:21:34'
		] );
					
		Affiliate::create( [
		'parent_id'=>43,
		'user_id'=>128,
		'affiliate_id'=>'OOAP-YOEL-E808',
		'created_at'=>'2020-07-11 00:31:52',
		'updated_at'=>'2020-07-11 00:31:52'
		] );
					
		Affiliate::create( [
		'parent_id'=>43,
		'user_id'=>129,
		'affiliate_id'=>'H5D0-I92T-642C',
		'created_at'=>'2020-07-11 00:57:34',
		'updated_at'=>'2020-07-11 00:57:34'
		] );
					
		Affiliate::create( [
		'parent_id'=>43,
		'user_id'=>130,
		'affiliate_id'=>'RCHJ-56P5-MG1P',
		'created_at'=>'2020-07-11 01:21:03',
		'updated_at'=>'2020-07-11 01:21:03'
		] );
					
		Affiliate::create( [
		'parent_id'=>44,
		'user_id'=>131,
		'affiliate_id'=>'Z9X6-99IV-HEPV',
		'created_at'=>'2020-07-11 01:44:04',
		'updated_at'=>'2020-07-11 01:44:04'
		] );
					
		Affiliate::create( [
		'parent_id'=>44,
		'user_id'=>132,
		'affiliate_id'=>'KJ8X-5ADF-USTR',
		'created_at'=>'2020-07-11 11:58:32',
		'updated_at'=>'2020-07-11 11:58:32'
		] );
					
		Affiliate::create( [
		'parent_id'=>44,
		'user_id'=>133,
		'affiliate_id'=>'RV4A-UKUZ-A4RQ',
		'created_at'=>'2020-07-11 14:19:17',
		'updated_at'=>'2020-07-11 14:19:17'
		] );
					
		Affiliate::create( [
		'parent_id'=>45,
		'user_id'=>134,
		'affiliate_id'=>'ZFGV-OZ0X-5RG2',
		'created_at'=>'2020-07-11 15:03:52',
		'updated_at'=>'2020-07-11 15:03:52'
		] );
					
		Affiliate::create( [
		'parent_id'=>45,
		'user_id'=>135,
		'affiliate_id'=>'S9EC-IFHJ-7EC3',
		'created_at'=>'2020-07-11 15:32:12',
		'updated_at'=>'2020-07-11 15:32:12'
		] );
					
		Affiliate::create( [
		'parent_id'=>45,
		'user_id'=>136,
		'affiliate_id'=>'HUHP-LBC2-5JML',
		'created_at'=>'2020-07-11 16:05:08',
		'updated_at'=>'2020-07-11 16:05:08'
		] );
					
		Affiliate::create( [
		'parent_id'=>46,
		'user_id'=>137,
		'affiliate_id'=>'TBA1-HE26-6EVT',
		'created_at'=>'2020-07-11 16:35:47',
		'updated_at'=>'2020-07-11 16:35:47'
		] );
					
		Affiliate::create( [
		'parent_id'=>46,
		'user_id'=>138,
		'affiliate_id'=>'HIUA-R3QY-LURB',
		'created_at'=>'2020-07-11 17:28:08',
		'updated_at'=>'2020-07-11 17:28:08'
		] );
					
		Affiliate::create( [
		'parent_id'=>46,
		'user_id'=>139,
		'affiliate_id'=>'CGVQ-H7PR-WD59',
		'created_at'=>'2020-07-11 17:31:20',
		'updated_at'=>'2020-07-11 17:31:20'
		] );
					
		Affiliate::create( [
		'parent_id'=>47,
		'user_id'=>140,
		'affiliate_id'=>'Z7ZD-51GW-XAJ0',
		'created_at'=>'2020-07-11 17:36:32',
		'updated_at'=>'2020-07-11 17:36:32'
		] );
					
		Affiliate::create( [
		'parent_id'=>47,
		'user_id'=>141,
		'affiliate_id'=>'YUFQ-GMEG-HLYC',
		'created_at'=>'2020-07-11 17:47:12',
		'updated_at'=>'2020-07-11 17:47:12'
		] );
					
		Affiliate::create( [
		'parent_id'=>47,
		'user_id'=>142,
		'affiliate_id'=>'WVZ6-O1BT-BMRS',
		'created_at'=>'2020-07-11 19:14:14',
		'updated_at'=>'2020-07-11 19:14:14'
		] );
					
		Affiliate::create( [
		'parent_id'=>48,
		'user_id'=>143,
		'affiliate_id'=>'IQOT-B801-EM2H',
		'created_at'=>'2020-07-11 20:51:02',
		'updated_at'=>'2020-07-11 20:51:02'
		] );
					
		Affiliate::create( [
		'parent_id'=>48,
		'user_id'=>144,
		'affiliate_id'=>'QHZV-GY7Y-RZK2',
		'created_at'=>'2020-07-11 20:58:05',
		'updated_at'=>'2020-07-11 20:58:05'
		] );
					
		Affiliate::create( [
		'parent_id'=>48,
		'user_id'=>145,
		'affiliate_id'=>'2TVF-JGBJ-AY29',
		'created_at'=>'2020-07-11 21:40:58',
		'updated_at'=>'2020-07-11 21:40:58'
		] );
					
		Affiliate::create( [
		'parent_id'=>49,
		'user_id'=>146,
		'affiliate_id'=>'J105-WN92-QUQA',
		'created_at'=>'2020-07-11 22:33:24',
		'updated_at'=>'2020-07-11 22:33:24'
		] );
					
		Affiliate::create( [
		'parent_id'=>49,
		'user_id'=>147,
		'affiliate_id'=>'PWLK-NIW1-Z73O',
		'created_at'=>'2020-07-11 23:24:38',
		'updated_at'=>'2020-07-11 23:24:38'
		] );
					
		Affiliate::create( [
		'parent_id'=>49,
		'user_id'=>148,
		'affiliate_id'=>'IRJ5-UWYV-UBO6',
		'created_at'=>'2020-07-12 00:14:58',
		'updated_at'=>'2020-07-12 00:14:58'
		] );
					
		Affiliate::create( [
		'parent_id'=>50,
		'user_id'=>149,
		'affiliate_id'=>'RQQE-2RUU-GDUF',
		'created_at'=>'2020-07-12 01:26:35',
		'updated_at'=>'2020-07-12 01:26:35'
		] );
					
		Affiliate::create( [
		'parent_id'=>50,
		'user_id'=>150,
		'affiliate_id'=>'NKH3-VPXL-QSEY',
		'created_at'=>'2020-07-12 02:13:41',
		'updated_at'=>'2020-07-12 02:13:41'
		] );
					
		Affiliate::create( [
		'parent_id'=>50,
		'user_id'=>151,
		'affiliate_id'=>'50ML-AI5E-V6P7',
		'created_at'=>'2020-07-12 02:16:02',
		'updated_at'=>'2020-07-12 02:16:02'
		] );


					
		Affiliate::create( [
		'parent_id'=>51,
		'user_id'=>154,
		'affiliate_id'=>'MV0B-6P88-M5E2',
		'created_at'=>'2020-07-12 06:52:40',
		'updated_at'=>'2020-07-20 08:59:23'
		] );
					
		Affiliate::create( [
		'parent_id'=>51,
		'user_id'=>155,
		'affiliate_id'=>'P1MX-BNQJ-KXNH',
		'created_at'=>'2020-07-12 13:04:57',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>51,
		'user_id'=>156,
		'affiliate_id'=>'HKIF-51Q7-J30Q',
		'created_at'=>'2020-07-12 14:05:30',
		'updated_at'=>'2020-07-12 14:05:30'
		] );
					
		Affiliate::create( [
		'parent_id'=>52,
		'user_id'=>158,
		'affiliate_id'=>'879Z-FT2B-3OT8',
		'created_at'=>'2020-07-12 14:56:11',
		'updated_at'=>'2020-07-12 14:56:11'
		] );
					
		Affiliate::create( [
		'parent_id'=>52,
		'user_id'=>159,
		'affiliate_id'=>'PMVJ-ADJ6-98H0',
		'created_at'=>'2020-07-12 15:38:08',
		'updated_at'=>'2020-07-12 15:38:08'
		] );
					
		Affiliate::create( [
		'parent_id'=>52,
		'user_id'=>161,
		'affiliate_id'=>'P54G-7FQ9-PUPU',
		'created_at'=>'2020-07-12 16:02:07',
		'updated_at'=>'2020-07-12 16:02:07'
		] );
					
		Affiliate::create( [
		'parent_id'=>53,
		'user_id'=>162,
		'affiliate_id'=>'Y0DZ-510B-CR30',
		'created_at'=>'2020-07-12 17:12:52',
		'updated_at'=>'2020-07-12 17:12:52'
		] );
					
		Affiliate::create( [
		'parent_id'=>53,
		'user_id'=>164,
		'affiliate_id'=>'HTHD-V3KN-1D8F',
		'created_at'=>'2020-07-12 17:41:50',
		'updated_at'=>'2020-07-12 17:41:50'
		] );
					
		Affiliate::create( [
		'parent_id'=>53,
		'user_id'=>167,
		'affiliate_id'=>'JEMM-2K2O-8EPE',
		'created_at'=>'2020-07-12 18:40:37',
		'updated_at'=>'2020-07-12 18:40:37'
		] );
					
		Affiliate::create( [
		'parent_id'=>54,
		'user_id'=>168,
		'affiliate_id'=>'PRQZ-I7JV-TPW2',
		'created_at'=>'2020-07-12 18:47:38',
		'updated_at'=>'2020-07-12 18:47:38'
		] );
					
		Affiliate::create( [
		'parent_id'=>54,
		'user_id'=>170,
		'affiliate_id'=>'AAAC-9CZF-WNHR',
		'created_at'=>'2020-07-12 19:39:01',
		'updated_at'=>'2020-07-12 19:39:01'
		] );
					
		Affiliate::create( [
		'parent_id'=>54,
		'user_id'=>172,
		'affiliate_id'=>'E4HH-F8ZA-Z6LD',
		'created_at'=>'2020-07-12 19:50:47',
		'updated_at'=>'2020-07-12 19:50:47'
		] );
					
		Affiliate::create( [
		'parent_id'=>55,
		'user_id'=>173,
		'affiliate_id'=>'VHIE-O8FO-Q79I',
		'created_at'=>'2020-07-12 20:04:10',
		'updated_at'=>'2020-07-12 20:04:10'
		] );
					
		Affiliate::create( [
		'parent_id'=>55,
		'user_id'=>174,
		'affiliate_id'=>'EGG7-6MKV-0M2V',
		'created_at'=>'2020-07-12 20:09:43',
		'updated_at'=>'2020-07-12 20:09:43'
		] );
					
		Affiliate::create( [
		'parent_id'=>55,
		'user_id'=>178,
		'affiliate_id'=>'O3JK-JQQM-DXCY',
		'created_at'=>'2020-07-12 22:46:14',
		'updated_at'=>'2020-07-12 22:46:14'
		] );
					
		Affiliate::create( [
		'parent_id'=>56,
		'user_id'=>181,
		'affiliate_id'=>'C7M1-Q9GB-G3HD',
		'created_at'=>'2020-07-12 23:02:22',
		'updated_at'=>'2020-07-12 23:02:22'
		] );
					
		Affiliate::create( [
		'parent_id'=>56,
		'user_id'=>183,
		'affiliate_id'=>'WELB-14ZU-5N7N',
		'created_at'=>'2020-07-12 23:20:59',
		'updated_at'=>'2020-07-12 23:20:59'
		] );
					
		Affiliate::create( [
		'parent_id'=> 56,
		'user_id'=>185,
		'affiliate_id'=>'O1KU-3LCE-K7KN',
		'created_at'=>'2020-07-12 23:36:26',
		'updated_at'=>'2020-07-20 08:51:21'
		] );
					
		Affiliate::create( [
		'parent_id'=>57,
		'user_id'=>186,
		'affiliate_id'=>'DILS-TLKF-1TRV',
		'created_at'=>'2020-07-12 23:37:53',
		'updated_at'=>'2020-07-12 23:37:53'
		] );
					
		Affiliate::create( [
		'parent_id'=>57,
		'user_id'=>187,
		'affiliate_id'=>'J183-19H2-NJH3',
		'created_at'=>'2020-07-12 23:38:57',
		'updated_at'=>'2020-07-12 23:38:57'
		] );
					
		Affiliate::create( [
		'parent_id'=>57,
		'user_id'=>190,
		'affiliate_id'=>'3FE0-02H7-LZ9D',
		'created_at'=>'2020-07-13 00:00:20',
		'updated_at'=>'2020-07-13 00:00:20'
		] );
					
		Affiliate::create( [
		'parent_id'=>58,
		'user_id'=>191,
		'affiliate_id'=>'8D54-5RDP-2EDH',
		'created_at'=>'2020-07-13 00:33:35',
		'updated_at'=>'2020-07-13 00:33:35'
		] );
					
		Affiliate::create( [
		'parent_id'=>58,
		'user_id'=>194,
		'affiliate_id'=>'3LHV-66T2-XEH2',
		'created_at'=>'2020-07-13 00:58:21',
		'updated_at'=>'2020-07-13 00:58:21'
		] );
					
		Affiliate::create( [
		'parent_id'=>58,
		'user_id'=>195,
		'affiliate_id'=>'5IYX-AAN6-IUR5',
		'created_at'=>'2020-07-13 01:27:51',
		'updated_at'=>'2020-07-13 01:27:51'
		] );
					
		Affiliate::create( [
		'parent_id'=>59,
		'user_id'=>196,
		'affiliate_id'=>'JZ0F-YD2E-OYLM',
		'created_at'=>'2020-07-13 02:09:20',
		'updated_at'=>'2020-07-13 02:09:20'
		] );
					
		Affiliate::create( [
		'parent_id'=>59,
		'user_id'=>197,
		'affiliate_id'=>'445V-3MWW-IEGT',
		'created_at'=>'2020-07-13 02:54:18',
		'updated_at'=>'2020-07-13 02:54:18'
		] );
					
		Affiliate::create( [
		'parent_id'=>59,
		'user_id'=>198,
		'affiliate_id'=>'RYMJ-JHE2-UB6U',
		'created_at'=>'2020-07-13 03:30:37',
		'updated_at'=>'2020-07-13 03:30:37'
		] );
					
		Affiliate::create( [
		'parent_id'=>60,
		'user_id'=>199,
		'affiliate_id'=>'1R58-N0C5-BZ05',
		'created_at'=>'2020-07-13 05:13:52',
		'updated_at'=>'2020-07-13 05:13:52'
		] );
					
		Affiliate::create( [
		'parent_id'=>60,
		'user_id'=>200,
		'affiliate_id'=>'4FK5-KOV8-0JG6',
		'created_at'=>'2020-07-13 12:28:34',
		'updated_at'=>'2020-07-13 12:28:34'
		] );
					
		Affiliate::create( [
		'parent_id'=>60,
		'user_id'=>201,
		'affiliate_id'=>'LEAS-CV08-JBAN',
		'created_at'=>'2020-07-13 14:45:02',
		'updated_at'=>'2020-07-13 14:45:02'
		] );
					
		Affiliate::create( [
		'parent_id'=>61,
		'user_id'=>202,
		'affiliate_id'=>'NEFS-CIQG-LRLA',
		'created_at'=>'2020-07-13 16:58:55',
		'updated_at'=>'2020-07-13 16:58:55'
		] );
					
		Affiliate::create( [
		'parent_id'=>61,
		'user_id'=>203,
		'affiliate_id'=>'VDQC-JTYF-XE7I',
		'created_at'=>'2020-07-13 18:50:49',
		'updated_at'=>'2020-07-13 18:50:49'
		] );
					
		Affiliate::create( [
		'parent_id'=>61,
		'user_id'=>204,
		'affiliate_id'=>'N6WD-709Y-LJ1B',
		'created_at'=>'2020-07-13 18:58:40',
		'updated_at'=>'2020-07-13 18:58:40'
		] );
					
		Affiliate::create( [
		'parent_id'=>62,
		'user_id'=>205,
		'affiliate_id'=>'H2NG-UT0V-7L0Z',
		'created_at'=>'2020-07-13 19:06:04',
		'updated_at'=>'2020-07-13 19:06:04'
		] );
					
		Affiliate::create( [
		'parent_id'=>62,
		'user_id'=>206,
		'affiliate_id'=>'TFIP-XNQG-P3B6',
		'created_at'=>'2020-07-13 19:06:05',
		'updated_at'=>'2020-07-13 19:06:05'
		] );
					
		Affiliate::create( [
		'parent_id'=>62,
		'user_id'=>207,
		'affiliate_id'=>'VVGE-QKE2-5Y9G',
		'created_at'=>'2020-07-13 19:25:11',
		'updated_at'=>'2020-07-13 19:25:11'
		] );
					
		Affiliate::create( [
		'parent_id'=>63,
		'user_id'=>209,
		'affiliate_id'=>'GNLF-G7I9-Q5IP',
		'created_at'=>'2020-07-13 20:59:55',
		'updated_at'=>'2020-07-13 20:59:55'
		] );
					
		Affiliate::create( [
		'parent_id'=>63,
		'user_id'=>212,
		'affiliate_id'=>'AF46-P3X2-FQ9C',
		'created_at'=>'2020-07-13 21:22:16',
		'updated_at'=>'2020-07-13 21:22:16'
		] );
					
		Affiliate::create( [
		'parent_id'=>63,
		'user_id'=>213,
		'affiliate_id'=>'416Z-HMCU-HELL',
		'created_at'=>'2020-07-13 21:40:17',
		'updated_at'=>'2020-07-13 21:40:17'
		] );
					
		Affiliate::create( [
		'parent_id'=>64,
		'user_id'=>215,
		'affiliate_id'=>'TZJL-HGHJ-1JTL',
		'created_at'=>'2020-07-13 21:43:17',
		'updated_at'=>'2020-07-13 21:43:17'
		] );
					
		Affiliate::create( [
		'parent_id'=>64,
		'user_id'=>217,
		'affiliate_id'=>'GZF7-DMQ1-CHTP',
		'created_at'=>'2020-07-13 22:06:22',
		'updated_at'=>'2020-07-13 22:06:22'
		] );
					
		Affiliate::create( [
		'parent_id'=>64,
		'user_id'=>218,
		'affiliate_id'=>'NT4P-7E8U-OVTO',
		'created_at'=>'2020-07-13 22:20:40',
		'updated_at'=>'2020-07-13 22:20:40'
		] );
					
		Affiliate::create( [
		'parent_id'=>65,
		'user_id'=>219,
		'affiliate_id'=>'0NNK-Z8MH-LPXR',
		'created_at'=>'2020-07-13 23:11:36',
		'updated_at'=>'2020-07-13 23:11:36'
		] );
					
		Affiliate::create( [
		'parent_id'=>65,
		'user_id'=>221,
		'affiliate_id'=>'QNC4-DQ7N-HIZW',
		'created_at'=>'2020-07-14 00:05:50',
		'updated_at'=>'2020-07-14 00:05:50'
		] );
					
		Affiliate::create( [
		'parent_id'=>65,
		'user_id'=>222,
		'affiliate_id'=>'C3OC-1ELM-0AWN',
		'created_at'=>'2020-07-14 00:29:27',
		'updated_at'=>'2020-07-14 00:29:27'
		] );
					
		Affiliate::create( [
		'parent_id'=>66,
		'user_id'=>226,
		'affiliate_id'=>'SMRF-SU6X-WVK2',
		'created_at'=>'2020-07-14 01:58:25',
		'updated_at'=>'2020-07-14 01:58:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>66,
		'user_id'=>228,
		'affiliate_id'=>'JR3E-33HF-9FFK',
		'created_at'=>'2020-07-14 02:30:57',
		'updated_at'=>'2020-07-14 02:30:57'
		] );
					
		Affiliate::create( [
		'parent_id'=>66,
		'user_id'=>229,
		'affiliate_id'=>'54AQ-LF12-3R4N',
		'created_at'=>'2020-07-14 02:31:30',
		'updated_at'=>'2020-07-14 02:31:30'
		] );
					
		Affiliate::create( [
		'parent_id'=>67,
		'user_id'=>231,
		'affiliate_id'=>'1CBL-VU2P-N3PY',
		'created_at'=>'2020-07-14 11:17:42',
		'updated_at'=>'2020-07-14 11:17:42'
		] );

		Affiliate::create( [
		'parent_id'=>67,
		'user_id'=>232,
		'affiliate_id'=>'XVHF-IDHV-RKET',
		'created_at'=>'2020-07-14 18:24:26',
		'updated_at'=>'2020-07-14 18:24:26'
		] );
					
		Affiliate::create( [
		'parent_id'=>67,
		'user_id'=>233,
		'affiliate_id'=>'BK44-NAN4-EVIZ',
		'created_at'=>'2020-07-14 18:55:00',
		'updated_at'=>'2020-07-14 18:55:00'
		] );
					
		Affiliate::create( [
		'parent_id'=>68,
		'user_id'=>234,
		'affiliate_id'=>'IZ7U-XS09-0H4C',
		'created_at'=>'2020-07-14 20:15:25',
		'updated_at'=>'2020-07-14 20:15:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>68,
		'user_id'=>235,
		'affiliate_id'=>'SXJH-O30F-9HPF',
		'created_at'=>'2020-07-15 00:20:34',
		'updated_at'=>'2020-07-15 00:20:34'
		] );
					
		Affiliate::create( [
		'parent_id'=>68,
		'user_id'=>236,
		'affiliate_id'=>'HDI0-WAWO-9HEA',
		'created_at'=>'2020-07-15 02:16:14',
		'updated_at'=>'2020-07-15 02:16:14'
		] );
					
		Affiliate::create( [
		'parent_id'=>69,
		'user_id'=>238,
		'affiliate_id'=>'QXMI-POUD-J638',
		'created_at'=>'2020-07-15 13:18:55',
		'updated_at'=>'2020-07-15 13:18:55'
		] );
					
		Affiliate::create( [
		'parent_id'=>69,
		'user_id'=>239,
		'affiliate_id'=>'IQPW-LL6E-UT4J',
		'created_at'=>'2020-07-15 15:34:41',
		'updated_at'=>'2020-07-15 15:34:41'
		] );
					
		Affiliate::create( [
		'parent_id'=>69,
		'user_id'=>240,
		'affiliate_id'=>'V2B8-EU66-5E0V',
		'created_at'=>'2020-07-15 17:35:17',
		'updated_at'=>'2020-07-15 17:35:17'
		] );
					
		Affiliate::create( [
		'parent_id'=>70,
		'user_id'=>241,
		'affiliate_id'=>'602K-N1UN-FFHL',
		'created_at'=>'2020-07-15 18:59:33',
		'updated_at'=>'2020-07-15 18:59:33'
		] );
					
		Affiliate::create( [
		'parent_id'=>70,
		'user_id'=>242,
		'affiliate_id'=>'340C-NH89-4TLR',
		'created_at'=>'2020-07-15 20:34:08',
		'updated_at'=>'2020-07-15 20:34:08'
		] );
					
		Affiliate::create( [
		'parent_id'=>70,
		'user_id'=>244,
		'affiliate_id'=>'PW0N-I5AO-PQA5',
		'created_at'=>'2020-07-15 20:53:24',
		'updated_at'=>'2020-07-15 20:53:24'
		] );
					// Error plcement
		Affiliate::create( [
			'parent_id'=>71,
			'user_id'=>245,
			'affiliate_id'=>'0HJS-BEYY-KL8Q',
			'created_at'=>'2020-07-15 20:57:22',
			'updated_at'=>'2020-07-15 20:57:22'
		] );
		
		 Affiliate::create( [
			'parent_id'=>71,
			'user_id'=>249,
			'affiliate_id'=>'VWBP-4WNQ-A4LS',
			'created_at'=>'2020-07-15 22:39:39',
			'updated_at'=>'2020-07-20 11:51:25'
			] );
			
			// error			
		 Affiliate::create( [
			'parent_id'=>71,
			'user_id'=>153,
			'affiliate_id'=>'LPFZ-RZ2A-3AOB',
			'created_at'=>'2020-07-15 23:00:57',
			'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>72,
		'user_id'=>220,
		'affiliate_id'=>'43KE-PKSZ-V0ON',
		'created_at'=>'2020-07-15 22:13:48',
		'updated_at'=>'2020-07-20 08:59:23'
		] );
		
		//	Duplication	
		Affiliate::create( [
			'parent_id'=>72,
			'user_id'=>250,
			'affiliate_id'=>'UD4K-N0W5-54N7',
			'created_at'=>'2020-07-15 23:26:55',
			'updated_at'=>'2020-07-20 11:51:25'
		] );

					
		Affiliate::create( [
		'parent_id'=>72,
		'user_id'=>248,
		'affiliate_id'=>'5Z5C-4Q49-B96M',
		'created_at'=>'2020-07-15 22:36:30',
		'updated_at'=>'2020-07-20 08:59:23'
		] );
					
		// Missing		73
		
		Affiliate::create( [
			'parent_id'=>73,
			'user_id'=>152,
			'affiliate_id'=>'4MJ1-9QQK-13SP',
			'created_at'=>'2020-07-20 22:45:57',
			'updated_at'=>'2020-07-20 22:45:57'
		] );
						
		Affiliate::create( [
			'parent_id'=>73,
			'user_id'=>169,
			'affiliate_id'=>'EN7G-SBA3-UNBZ',
			'created_at'=>'2020-07-20 22:47:21',
			'updated_at'=>'2020-07-20 22:47:21'
		] );
						
		 Affiliate::create( [
			'parent_id'=>73,
			'user_id'=>281,
			'affiliate_id'=>'ZZZO-Z8U9-MXXA',
			'created_at'=>'2020-07-20 22:48:09',
			'updated_at'=>'2020-07-20 22:48:09'
		  ] );


		Affiliate::create( [
			'parent_id'=>74,
			'user_id'=>251,
			'affiliate_id'=>'3VQS-S78A-4U3T',
			'created_at'=>'2020-07-15 23:39:46',
			'updated_at'=>'2020-07-20 11:51:25'
		]);
					
		Affiliate::create( [
		'parent_id'=>74,
		'user_id'=>252,
		'affiliate_id'=>'7HK4-VBZ4-JRT3',
		'created_at'=>'2020-07-15 23:59:29',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>74,
		'user_id'=>254,
		'affiliate_id'=>'GWYC-RF5C-TWU4',
		'created_at'=>'2020-07-16 00:44:00',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>75,
		'user_id'=>255,
		'affiliate_id'=>'6FHA-C626-Q0AI',
		'created_at'=>'2020-07-16 01:08:03',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>75,
		'user_id'=>256,
		'affiliate_id'=>'4MK4-2I6Q-WJN3',
		'created_at'=>'2020-07-16 02:06:24',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>75,
		'user_id'=>257,
		'affiliate_id'=>'PR39-2LCT-2AZ5',
		'created_at'=>'2020-07-16 02:26:05',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>76,
		'user_id'=>258,
		'affiliate_id'=>'QCOM-Q2I6-ANTT',
		'created_at'=>'2020-07-16 02:32:47',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>76,
		'user_id'=>259,
		'affiliate_id'=>'6MDO-1SSJ-ET09',
		'created_at'=>'2020-07-16 02:35:16',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>76,
		'user_id'=>260,
		'affiliate_id'=>'J4MP-DQZP-ZB1R',
		'created_at'=>'2020-07-16 02:46:25',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>77,
		'user_id'=>261,
		'affiliate_id'=>'LE00-I2Y6-6K36',
		'created_at'=>'2020-07-16 02:54:39',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>77,
		'user_id'=>262,
		'affiliate_id'=>'79QL-ONLJ-FKXO',
		'created_at'=>'2020-07-16 03:37:55',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>77,
		'user_id'=>263,
		'affiliate_id'=>'VFJ5-YAT1-Y9XY',
		'created_at'=>'2020-07-16 03:53:34',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>78,
		'user_id'=>264,
		'affiliate_id'=>'7NDB-5THP-6Z00',
		'created_at'=>'2020-07-16 04:14:42',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>78,
		'user_id'=>265,
		'affiliate_id'=>'Y1K7-H6ZI-P85U',
		'created_at'=>'2020-07-16 12:42:11',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>78,
		'user_id'=>267,
		'affiliate_id'=>'HYSY-OSB8-FYUF',
		'created_at'=>'2020-07-16 12:47:37',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>79,
		'user_id'=>270,
		'affiliate_id'=>'8EBN-ZFAE-VEUA',
		'created_at'=>'2020-07-16 14:03:17',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>79,
		'user_id'=>271,
		'affiliate_id'=>'CVB1-4DV0-45PY',
		'created_at'=>'2020-07-16 14:20:34',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>79,
		'user_id'=>272,
		'affiliate_id'=>'BY4O-UO0O-RACD',
		'created_at'=>'2020-07-16 15:13:16',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>80,
		'user_id'=>273,
		'affiliate_id'=>'ZAVS-SCVS-MP5E',
		'created_at'=>'2020-07-16 15:14:47',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>80,
		'user_id'=>274,
		'affiliate_id'=>'NCR2-PF6G-BNPY',
		'created_at'=>'2020-07-16 15:24:26',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>80,
		'user_id'=>275,
		'affiliate_id'=>'88LE-CSQ8-74ZG',
		'created_at'=>'2020-07-16 16:32:42',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>81,
		'user_id'=>276,
		'affiliate_id'=>'QTA6-MUYE-TJ1O',
		'created_at'=>'2020-07-16 17:08:51',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>81,
		'user_id'=>277,
		'affiliate_id'=>'Y5SY-FDS9-4QLE',
		'created_at'=>'2020-07-16 17:29:41',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>81,
		'user_id'=>278,
		'affiliate_id'=>'CSEE-YR8D-K5AF',
		'created_at'=>'2020-07-16 17:50:48',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>82,
		'user_id'=>279,
		'affiliate_id'=>'5QMU-N2IA-WWJI',
		'created_at'=>'2020-07-16 18:12:19',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>82,
		'user_id'=>280,
		'affiliate_id'=>'DURU-AMPT-1SAP',
		'created_at'=>'2020-07-16 18:27:00',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>82,
		'user_id'=>283,
		'affiliate_id'=>'RK8G-YPV1-DC9V',
		'created_at'=>'2020-07-16 19:09:29',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>83,
		'user_id'=>284,
		'affiliate_id'=>'EZCP-9MNF-SSLA',
		'created_at'=>'2020-07-16 19:46:40',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>83,
		'user_id'=>285,
		'affiliate_id'=>'TQNQ-IUAR-S208',
		'created_at'=>'2020-07-16 19:52:59',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>83,
		'user_id'=>286,
		'affiliate_id'=>'ROFD-IQXR-DE4S',
		'created_at'=>'2020-07-16 20:02:51',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>84,
		'user_id'=>287,
		'affiliate_id'=>'EDOF-QIPX-8ZH1',
		'created_at'=>'2020-07-16 20:06:07',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>84,
		'user_id'=>288,
		'affiliate_id'=>'JJVL-BASI-Z3SC',
		'created_at'=>'2020-07-16 20:40:14',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>84,
		'user_id'=>289,
		'affiliate_id'=>'50O8-6LC3-9PDX',
		'created_at'=>'2020-07-16 20:50:47',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>85,
		'user_id'=>290,
		'affiliate_id'=>'SDZ1-TW5J-48P4',
		'created_at'=>'2020-07-16 21:02:03',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>85,
		'user_id'=>291,
		'affiliate_id'=>'W0VG-G84F-2DAR',
		'created_at'=>'2020-07-16 21:26:59',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>85,
		'user_id'=>292,
		'affiliate_id'=>'C3FA-2524-V6SK',
		'created_at'=>'2020-07-16 21:30:13',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>86,
		'user_id'=>293,
		'affiliate_id'=>'TL8P-TL4X-UB9K',
		'created_at'=>'2020-07-16 21:47:20',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>86,
		'user_id'=>268,
		'affiliate_id'=>'6RB4-TTSS-NEWJ',
		'created_at'=>'2020-07-16 22:32:20',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>86,
		'user_id'=>294,
		'affiliate_id'=>'IPGX-RM78-FDJA',
		'created_at'=>'2020-07-16 23:48:40',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>87,
		'user_id'=>295,
		'affiliate_id'=>'4KLW-P1WA-05CT',
		'created_at'=>'2020-07-16 23:50:37',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>87,
		'user_id'=>296,
		'affiliate_id'=>'3K2B-4N9K-JB37',
		'created_at'=>'2020-07-17 00:55:00',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>87,
		'user_id'=>297,
		'affiliate_id'=>'S3GB-8OR2-7KCJ',
		'created_at'=>'2020-07-17 02:33:07',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>88,
		'user_id'=>298,
		'affiliate_id'=>'6BEN-GV5O-QH1O',
		'created_at'=>'2020-07-17 02:45:15',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>88,
		'user_id'=>299,
		'affiliate_id'=>'RRZT-E6XF-FJSB',
		'created_at'=>'2020-07-17 02:54:06',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>88,
		'user_id'=>300,
		'affiliate_id'=>'LG0A-SALA-QTA3',
		'created_at'=>'2020-07-17 04:51:43',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>89,
		'user_id'=>301,
		'affiliate_id'=>'PG23-MXDB-PHM4',
		'created_at'=>'2020-07-17 04:59:44',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>89,
		'user_id'=>302,
		'affiliate_id'=>'AV0U-K8IX-GIOW',
		'created_at'=>'2020-07-17 05:20:50',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>89,
		'user_id'=>303,
		'affiliate_id'=>'L3EZ-4IGQ-1RGJ',
		'created_at'=>'2020-07-17 05:28:17',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>90,
		'user_id'=>304,
		'affiliate_id'=>'87VN-KTWV-S9BU',
		'created_at'=>'2020-07-17 11:09:03',
		'updated_at'=>'2020-07-20 11:51:25'
		] );
					
		Affiliate::create( [
		'parent_id'=>90,
		'user_id'=>305,
		'affiliate_id'=>'LIUL-033D-DNAO',
		'created_at'=>'2020-07-17 13:42:15',
		'updated_at'=>'2020-07-20 11:51:25'
		]);

		Affiliate::create( [
			'parent_id'=>90,
			'user_id'=>306,
			'affiliate_id'=>'IX1Y-2VSL-XDX0',
			'created_at'=>'2020-07-17 14:17:47',
			'updated_at'=>'2020-07-20 11:51:25'
			] );
						
			Affiliate::create( [
			'parent_id'=>91,
			'user_id'=>307,
			'affiliate_id'=>'R70C-NXGC-IO0K',
			'created_at'=>'2020-07-17 14:42:42',
			'updated_at'=>'2020-07-20 11:51:25'
			] );
						
			Affiliate::create( [
			'parent_id'=>91,
			'user_id'=>308,
			'affiliate_id'=>'WLVM-SWL8-V29C',
			'created_at'=>'2020-07-17 14:51:15',
			'updated_at'=>'2020-07-20 11:51:25'
			] );
						
			Affiliate::create([
				'parent_id'=>91,
				'user_id'=>309,
				'affiliate_id'=>'ZCLR-05XI-RUV5',
				'created_at'=>'2020-07-17 15:50:44',
				'updated_at'=>'2020-07-20 11:51:25'
			] );
						
			Affiliate::create( [
			'parent_id'=>92,
			'user_id'=>310,
			'affiliate_id'=>'K3X8-BVWE-IVHZ',
			'created_at'=>'2020-07-17 16:39:30',
			'updated_at'=>'2020-07-20 11:51:25'
			] );
						
			Affiliate::create( [
			'parent_id'=>92,
			'user_id'=>311,
			'affiliate_id'=>'RGUB-E7IP-USNK',
			'created_at'=>'2020-07-17 16:50:57',
			'updated_at'=>'2020-07-20 11:51:25'
			] );
						
			Affiliate::create( [
			'parent_id'=>92,
			'user_id'=>312,
			'affiliate_id'=>'JM3W-2RD5-PXAV',
			'created_at'=>'2020-07-17 18:40:29',
			'updated_at'=>'2020-07-20 11:51:25'
			] );
						
			Affiliate::create( [
			'parent_id'=>93,
			'user_id'=>313,
			'affiliate_id'=>'HGW6-7CNG-XWX2',
			'created_at'=>'2020-07-17 18:43:29',
			'updated_at'=>'2020-07-20 11:51:25'
			] );
						
			Affiliate::create( [
			'parent_id'=>93,
			'user_id'=>314,
			'affiliate_id'=>'XZ2V-110L-1ULH',
			'created_at'=>'2020-07-17 19:24:50',
			'updated_at'=>'2020-07-20 11:51:25'
			] );
						
			Affiliate::create( [
			'parent_id'=>93,
			'user_id'=>315,
			'affiliate_id'=>'O2CT-WQ0M-4HCL',
			'created_at'=>'2020-07-17 20:27:51',
			'updated_at'=>'2020-07-20 11:51:25'
			] );
						
			Affiliate::create( [
			'parent_id'=>94,
			'user_id'=>316,
			'affiliate_id'=>'32O4-Y18J-UON9',
			'created_at'=>'2020-07-17 21:35:57',
			'updated_at'=>'2020-07-20 11:51:25'
			] );
						
			Affiliate::create( [
			'parent_id'=>94,
			'user_id'=>317,
			'affiliate_id'=>'E1UW-ELFA-W0IT',
			'created_at'=>'2020-07-17 21:52:16',
			'updated_at'=>'2020-07-20 11:51:25'
			] );
						
			Affiliate::create( [
			'parent_id'=>94,
			'user_id'=>318,
			'affiliate_id'=>'BMDY-9NGA-B5AQ',
			'created_at'=>'2020-07-17 22:09:26',
			'updated_at'=>'2020-07-20 11:51:25'
			] );
						
			Affiliate::create( [
			'parent_id'=>95,
			'user_id'=>319,
			'affiliate_id'=>'SC4C-RCZL-N043',
			'created_at'=>'2020-07-17 22:11:47',
			'updated_at'=>'2020-07-20 11:51:25'
			] );
						
			Affiliate::create( [
			'parent_id'=>95,
			'user_id'=>320,
			'affiliate_id'=>'TJR1-JXHC-0BRZ',
			'created_at'=>'2020-07-17 23:32:59',
			'updated_at'=>'2020-07-20 11:51:25'
			] );
						
			Affiliate::create( [
			'parent_id'=>95,
			'user_id'=>321,
			'affiliate_id'=>'MPR9-WLDE-RYBR',
			'created_at'=>'2020-07-18 06:27:18',
			'updated_at'=>'2020-07-20 11:51:25'
			] );
						
			Affiliate::create( [
			'parent_id'=>96,
			'user_id'=>322,
			'affiliate_id'=>'KLI1-0V9F-DR3H',
			'created_at'=>'2020-07-18 09:08:07',
			'updated_at'=>'2020-07-20 11:51:25'
			] );
						
			Affiliate::create( [
			'parent_id'=>96,
			'user_id'=>323,
			'affiliate_id'=>'4ZZS-EDP1-8SVX',
			'created_at'=>'2020-07-18 11:41:40',
			'updated_at'=>'2020-07-20 11:51:25'
			] );
						
			Affiliate::create( [
			'parent_id'=>96,
			'user_id'=>324,
			'affiliate_id'=>'J7FW-F9RE-D820',
			'created_at'=>'2020-07-18 12:19:01',
			'updated_at'=>'2020-07-20 11:51:25'
			] );
						
			Affiliate::create( [
			'parent_id'=>97,
			'user_id'=>325,
			'affiliate_id'=>'X4DK-JS2I-XKZS',
			'created_at'=>'2020-07-18 17:19:24',
			'updated_at'=>'2020-07-20 11:51:25'
			] );
						
			Affiliate::create( [
			'parent_id'=>97,
			'user_id'=>326,
			'affiliate_id'=>'D53S-I111-7WUD',
			'created_at'=>'2020-07-18 17:42:59',
			'updated_at'=>'2020-07-20 11:51:25'
			] );
						
			Affiliate::create( [
			'parent_id'=>97,
			'user_id'=>327,
			'affiliate_id'=>'HNQJ-YB3I-BQ3W',
			'created_at'=>'2020-07-18 18:44:52',
			'updated_at'=>'2020-07-20 11:51:25'
			] );
						
			Affiliate::create( [
			'parent_id'=>98,
			'user_id'=>328,
			'affiliate_id'=>'X9ZM-G36B-7KCN',
			'created_at'=>'2020-07-18 19:01:07',
			'updated_at'=>'2020-07-20 11:51:25'
			] );
						
			Affiliate::create( [
			'parent_id'=>98,
			'user_id'=>329,
			'affiliate_id'=>'GH0E-UAII-S2RZ',
			'created_at'=>'2020-07-18 19:21:02',
			'updated_at'=>'2020-07-20 11:51:25'
			] );
						
			Affiliate::create( [
			'parent_id'=>98,
			'user_id'=>330,
			'affiliate_id'=>'X12W-UNE3-0UU5',
			'created_at'=>'2020-07-18 20:19:29',
			'updated_at'=>'2020-07-20 11:51:25'
			] );
						
			Affiliate::create( [
			'parent_id'=>99,
			'user_id'=>331,
			'affiliate_id'=>'RM0H-II69-FQ9C',
			'created_at'=>'2020-07-18 22:39:36',
			'updated_at'=>'2020-07-20 11:51:25'
			] );
						
			Affiliate::create( [
			'parent_id'=>99,
			'user_id'=>332,
			'affiliate_id'=>'1LOH-I5E5-FAI2',
			'created_at'=>'2020-07-18 23:25:31',
			'updated_at'=>'2020-07-20 11:51:25'
			] );
						
			Affiliate::create( [
			'parent_id'=>99,
			'user_id'=>333,
			'affiliate_id'=>'U49E-C87O-TCXD',
			'created_at'=>'2020-07-19 01:43:16',
			'updated_at'=>'2020-07-20 11:51:25'
			] );
						
			Affiliate::create( [
			'parent_id'=>100,
			'user_id'=>334,
			'affiliate_id'=>'S14K-M9ON-GXA9',
			'created_at'=>'2020-07-19 03:34:08',
			'updated_at'=>'2020-07-20 11:51:25'
			] );
						
			Affiliate::create( [
			'parent_id'=>100,
			'user_id'=>335,
			'affiliate_id'=>'94F4-E52X-KPWF',
			'created_at'=>'2020-07-19 03:41:39',
			'updated_at'=>'2020-07-20 11:51:25'
			] );
						
			Affiliate::create( [
			'parent_id'=>100,
			'user_id'=>336,
			'affiliate_id'=>'YKI6-1DDR-V1JC',
			'created_at'=>'2020-07-19 12:44:43',
			'updated_at'=>'2020-07-20 11:51:25'
			] );
						
			Affiliate::create( [
			'parent_id'=>101,
			'user_id'=>337,
			'affiliate_id'=>'QTOK-ALX7-IL79',
			'created_at'=>'2020-07-19 17:40:18',
			'updated_at'=>'2020-07-20 11:51:25'
			] );
						
			Affiliate::create( [
			'parent_id'=>101,
			'user_id'=>338,
			'affiliate_id'=>'AQBI-RYIV-LBP8',
			'created_at'=>'2020-07-19 17:49:03',
			'updated_at'=>'2020-07-20 11:51:25'
			] );
						
			Affiliate::create( [
			'parent_id'=>101,
			'user_id'=>339,
			'affiliate_id'=>'W5RN-ARQU-WDP9',
			'created_at'=>'2020-07-19 18:58:45',
			'updated_at'=>'2020-07-20 11:51:25'
			] );
						
			Affiliate::create( [
			'parent_id'=>102,
			'user_id'=>340,
			'affiliate_id'=>'30X1-3YM4-C1HH',
			'created_at'=>'2020-07-19 18:59:39',
			'updated_at'=>'2020-07-20 11:51:25'
			] );
						
			Affiliate::create( [
			'parent_id'=>102,
			'user_id'=>341,
			'affiliate_id'=>'BFSL-8FLT-O3GJ',
			'created_at'=>'2020-07-19 19:13:11',
			'updated_at'=>'2020-07-20 11:51:25'
			] );
						
			Affiliate::create( [
			'parent_id'=>102,
			'user_id'=>342,
			'affiliate_id'=>'V8QB-Q43P-38I7',
			'created_at'=>'2020-07-19 19:17:56',
			'updated_at'=>'2020-07-20 11:51:25'
			] );
						
			Affiliate::create( [
			'parent_id'=>103,
			'user_id'=>343,
			'affiliate_id'=>'3SH2-QT5E-JL3U',
			'created_at'=>'2020-07-19 19:23:49',
			'updated_at'=>'2020-07-20 11:51:25'
			] );
						
			Affiliate::create( [
			'parent_id'=>103,
			'user_id'=>344,
			'affiliate_id'=>'9U99-QEIZ-USIH',
			'created_at'=>'2020-07-20 00:26:17',
			'updated_at'=>'2020-07-20 11:51:25'
			] );
						
			Affiliate::create( [
			'parent_id'=>103,
			'user_id'=>345,
			'affiliate_id'=>'1GF1-515Z-VUB5',
			'created_at'=>'2020-07-20 00:52:44',
			'updated_at'=>'2020-07-20 11:51:25'
			] );
						
			Affiliate::create( [
			'parent_id'=>104,
			'user_id'=>346,
			'affiliate_id'=>'F3S0-4X56-ZXIR',
			'created_at'=>'2020-07-20 01:20:50',
			'updated_at'=>'2020-07-20 11:51:25'
			] );
				
				// Erro Should not be here		
			Affiliate::create( [
			'parent_id'=>104,
			'user_id'=> 152,
			'affiliate_id'=>'0V4M-WPJA-PX7L',
			'created_at'=>'2020-07-20 12:23:48',
			'updated_at'=>'2020-07-20 12:23:48'
			] );
						
			Affiliate::create( [
			'parent_id'=>104,
			'user_id'=>347,
			'affiliate_id'=>'OWLY-T3CU-I03O',
			'created_at'=>'2020-07-20 18:49:50',
			'updated_at'=>'2020-07-20 18:49:50'
			] );
						
			Affiliate::create( [
				'parent_id'=>105,
				'user_id'=>348,
				'affiliate_id'=>'1W3B-Z1FQ-0TLY',
				'created_at'=>'2020-07-20 19:07:21',
				'updated_at'=>'2020-07-20 19:07:21'
			] );
						
			Affiliate::create( [
				'parent_id'=>105,
				'user_id'=>349,
				'affiliate_id'=>'XRFJ-XAPF-XHHI',
				'created_at'=>'2020-07-20 22:41:32',
				'updated_at'=>'2020-07-20 22:41:32'
			] );
						
			Affiliate::create( [
				'parent_id'=>105,
				'user_id'=>169,
				'affiliate_id'=>'EN7G-SBA3-UNBZ',
				'created_at'=>'2020-07-20 22:47:21',
				'updated_at'=>'2020-07-20 22:47:21'
			] );
						
			Affiliate::create( [
			'parent_id'=>106,
			'user_id'=>281,
			'affiliate_id'=>'ZZZO-Z8U9-MXXA',
			'created_at'=>'2020-07-20 22:48:09',
			'updated_at'=>'2020-07-20 22:48:09'
			] );
		
    }
}
