<?php

use Illuminate\Database\Seeder;
use App\Purchase;

class PurchaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
				    
			Purchase::create( [
			'id'=>1,
			'created_at'=>'2020-07-06 20:30:52',
			'updated_at'=>'2020-07-06 20:30:52',
			'user_id'=>1,
			'purchase_by'=>2,
			'sales_id'=>1,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>2,
			'created_at'=>'2020-07-06 20:44:22',
			'updated_at'=>'2020-07-06 20:44:22',
			'user_id'=>1,
			'purchase_by'=>3,
			'sales_id'=>1,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>3,
			'created_at'=>'2020-07-06 20:53:18',
			'updated_at'=>'2020-07-06 20:53:18',
			'user_id'=>1,
			'purchase_by'=>4,
			'sales_id'=>1,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>4,
			'created_at'=>'2020-07-06 20:59:11',
			'updated_at'=>'2020-07-06 20:59:11',
			'user_id'=>4,
			'purchase_by'=>5,
			'sales_id'=>2,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>5,
			'created_at'=>'2020-07-06 21:54:24',
			'updated_at'=>'2020-07-06 21:54:24',
			'user_id'=>2,
			'purchase_by'=>6,
			'sales_id'=>2,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>6,
			'created_at'=>'2020-07-07 02:52:25',
			'updated_at'=>'2020-07-07 02:52:25',
			'user_id'=>2,
			'purchase_by'=>7,
			'sales_id'=>2,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>7,
			'created_at'=>'2020-07-07 04:30:18',
			'updated_at'=>'2020-07-07 04:30:18',
			'user_id'=>2,
			'purchase_by'=>8,
			'sales_id'=>3,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>8,
			'created_at'=>'2020-07-07 06:38:27',
			'updated_at'=>'2020-07-07 06:38:27',
			'user_id'=>4,
			'purchase_by'=>9,
			'sales_id'=>3,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>9,
			'created_at'=>'2020-07-07 17:44:31',
			'updated_at'=>'2020-07-07 17:44:31',
			'user_id'=>3,
			'purchase_by'=>10,
			'sales_id'=>3,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>10,
			'created_at'=>'2020-07-07 18:43:15',
			'updated_at'=>'2020-07-07 18:43:15',
			'user_id'=>5,
			'purchase_by'=>11,
			'sales_id'=>4,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>11,
			'created_at'=>'2020-07-07 21:57:39',
			'updated_at'=>'2020-07-07 21:57:39',
			'user_id'=>5,
			'purchase_by'=>12,
			'sales_id'=>4,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>12,
			'created_at'=>'2020-07-07 22:26:03',
			'updated_at'=>'2020-07-07 22:26:03',
			'user_id'=>3,
			'purchase_by'=>13,
			'sales_id'=>4,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>13,
			'created_at'=>'2020-07-07 22:46:53',
			'updated_at'=>'2020-07-07 22:46:53',
			'user_id'=>11,
			'purchase_by'=>14,
			'sales_id'=>5,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>14,
			'created_at'=>'2020-07-08 00:21:23',
			'updated_at'=>'2020-07-08 00:21:23',
			'user_id'=>3,
			'purchase_by'=>15,
			'sales_id'=>5,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>15,
			'created_at'=>'2020-07-08 01:24:14',
			'updated_at'=>'2020-07-08 01:24:14',
			'user_id'=>5,
			'purchase_by'=>16,
			'sales_id'=>5,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>16,
			'created_at'=>'2020-07-08 13:39:11',
			'updated_at'=>'2020-07-08 13:39:11',
			'user_id'=>12,
			'purchase_by'=>17,
			'sales_id'=>6,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>17,
			'created_at'=>'2020-07-08 14:07:29',
			'updated_at'=>'2020-07-08 14:07:29',
			'user_id'=>17,
			'purchase_by'=>18,
			'sales_id'=>6,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>18,
			'created_at'=>'2020-07-08 14:39:41',
			'updated_at'=>'2020-07-08 14:39:41',
			'user_id'=>18,
			'purchase_by'=>19,
			'sales_id'=>6,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>19,
			'created_at'=>'2020-07-08 14:43:14',
			'updated_at'=>'2020-07-08 14:43:14',
			'user_id'=>17,
			'purchase_by'=>20,
			'sales_id'=>7,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>20,
			'created_at'=>'2020-07-08 16:24:13',
			'updated_at'=>'2020-07-08 16:24:13',
			'user_id'=>20,
			'purchase_by'=>21,
			'sales_id'=>7,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>21,
			'created_at'=>'2020-07-08 17:53:28',
			'updated_at'=>'2020-07-08 17:53:28',
			'user_id'=>4,
			'purchase_by'=>22,
			'sales_id'=>7,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>22,
			'created_at'=>'2020-07-08 18:24:03',
			'updated_at'=>'2020-07-08 18:24:03',
			'user_id'=>19,
			'purchase_by'=>23,
			'sales_id'=>8,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>23,
			'created_at'=>'2020-07-08 18:32:20',
			'updated_at'=>'2020-07-08 18:32:20',
			'user_id'=>19,
			'purchase_by'=>24,
			'sales_id'=>8,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>24,
			'created_at'=>'2020-07-08 21:34:18',
			'updated_at'=>'2020-07-08 21:34:18',
			'user_id'=>20,
			'purchase_by'=>25,
			'sales_id'=>8,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>25,
			'created_at'=>'2020-07-09 02:07:08',
			'updated_at'=>'2020-07-09 02:07:08',
			'user_id'=>6,
			'purchase_by'=>26,
			'sales_id'=>9,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>26,
			'created_at'=>'2020-07-09 02:36:29',
			'updated_at'=>'2020-07-09 02:36:29',
			'user_id'=>20,
			'purchase_by'=>27,
			'sales_id'=>9,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>27,
			'created_at'=>'2020-07-09 14:39:55',
			'updated_at'=>'2020-07-09 14:39:55',
			'user_id'=>19,
			'purchase_by'=>28,
			'sales_id'=>9,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>28,
			'created_at'=>'2020-07-09 15:32:41',
			'updated_at'=>'2020-07-09 15:32:41',
			'user_id'=>17,
			'purchase_by'=>29,
			'sales_id'=>10,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>29,
			'created_at'=>'2020-07-09 16:00:49',
			'updated_at'=>'2020-07-09 16:00:49',
			'user_id'=>29,
			'purchase_by'=>30,
			'sales_id'=>10,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>30,
			'created_at'=>'2020-07-09 16:12:19',
			'updated_at'=>'2020-07-09 16:12:19',
			'user_id'=>27,
			'purchase_by'=>31,
			'sales_id'=>10,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>31,
			'created_at'=>'2020-07-09 16:24:09',
			'updated_at'=>'2020-07-09 16:24:09',
			'user_id'=>16,
			'purchase_by'=>32,
			'sales_id'=>11,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>32,
			'created_at'=>'2020-07-09 16:25:13',
			'updated_at'=>'2020-07-09 16:25:13',
			'user_id'=>30,
			'purchase_by'=>33,
			'sales_id'=>11,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>33,
			'created_at'=>'2020-07-09 16:25:29',
			'updated_at'=>'2020-07-09 16:25:29',
			'user_id'=>29,
			'purchase_by'=>34,
			'sales_id'=>11,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>34,
			'created_at'=>'2020-07-09 16:34:00',
			'updated_at'=>'2020-07-09 16:34:00',
			'user_id'=>16,
			'purchase_by'=>35,
			'sales_id'=>12,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>35,
			'created_at'=>'2020-07-09 16:39:50',
			'updated_at'=>'2020-07-09 16:39:50',
			'user_id'=>16,
			'purchase_by'=>36,
			'sales_id'=>12,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>36,
			'created_at'=>'2020-07-09 16:43:24',
			'updated_at'=>'2020-07-09 16:43:24',
			'user_id'=>12,
			'purchase_by'=>37,
			'sales_id'=>12,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>37,
			'created_at'=>'2020-07-09 16:53:33',
			'updated_at'=>'2020-07-09 16:53:33',
			'user_id'=>6,
			'purchase_by'=>38,
			'sales_id'=>13,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>38,
			'created_at'=>'2020-07-09 16:56:17',
			'updated_at'=>'2020-07-09 16:56:17',
			'user_id'=>33,
			'purchase_by'=>39,
			'sales_id'=>13,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>39,
			'created_at'=>'2020-07-09 16:59:28',
			'updated_at'=>'2020-07-09 16:59:28',
			'user_id'=>12,
			'purchase_by'=>40,
			'sales_id'=>13,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>40,
			'created_at'=>'2020-07-09 17:01:52',
			'updated_at'=>'2020-07-09 17:01:52',
			'user_id'=>23,
			'purchase_by'=>41,
			'sales_id'=>14,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>41,
			'created_at'=>'2020-07-09 17:07:39',
			'updated_at'=>'2020-07-09 17:07:39',
			'user_id'=>33,
			'purchase_by'=>42,
			'sales_id'=>14,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>42,
			'created_at'=>'2020-07-09 17:16:58',
			'updated_at'=>'2020-07-09 17:16:58',
			'user_id'=>41,
			'purchase_by'=>43,
			'sales_id'=>14,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>43,
			'created_at'=>'2020-07-09 17:22:48',
			'updated_at'=>'2020-07-09 17:22:48',
			'user_id'=>11,
			'purchase_by'=>44,
			'sales_id'=>15,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>44,
			'created_at'=>'2020-07-09 17:23:52',
			'updated_at'=>'2020-07-09 17:23:52',
			'user_id'=>27,
			'purchase_by'=>45,
			'sales_id'=>15,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>45,
			'created_at'=>'2020-07-09 17:27:07',
			'updated_at'=>'2020-07-09 17:27:07',
			'user_id'=>41,
			'purchase_by'=>46,
			'sales_id'=>15,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>46,
			'created_at'=>'2020-07-09 17:28:26',
			'updated_at'=>'2020-07-09 17:28:26',
			'user_id'=>11,
			'purchase_by'=>47,
			'sales_id'=>16,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>47,
			'created_at'=>'2020-07-09 17:33:47',
			'updated_at'=>'2020-07-09 17:33:47',
			'user_id'=>41,
			'purchase_by'=>48,
			'sales_id'=>16,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>48,
			'created_at'=>'2020-07-09 17:36:17',
			'updated_at'=>'2020-07-09 17:36:17',
			'user_id'=>27,
			'purchase_by'=>49,
			'sales_id'=>16,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>49,
			'created_at'=>'2020-07-09 17:37:07',
			'updated_at'=>'2020-07-09 17:37:07',
			'user_id'=>40,
			'purchase_by'=>50,
			'sales_id'=>17,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>50,
			'created_at'=>'2020-07-09 17:54:49',
			'updated_at'=>'2020-07-09 17:54:49',
			'user_id'=>14,
			'purchase_by'=>51,
			'sales_id'=>17,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>51,
			'created_at'=>'2020-07-09 18:08:47',
			'updated_at'=>'2020-07-09 18:08:47',
			'user_id'=>10,
			'purchase_by'=>52,
			'sales_id'=>17,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>52,
			'created_at'=>'2020-07-09 18:12:17',
			'updated_at'=>'2020-07-09 18:12:17',
			'user_id'=>3,
			'purchase_by'=>53,
			'sales_id'=>18,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>53,
			'created_at'=>'2020-07-09 18:18:23',
			'updated_at'=>'2020-07-09 18:18:23',
			'user_id'=>3,
			'purchase_by'=>54,
			'sales_id'=>18,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>54,
			'created_at'=>'2020-07-09 18:31:59',
			'updated_at'=>'2020-07-09 18:31:59',
			'user_id'=>40,
			'purchase_by'=>55,
			'sales_id'=>18,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>55,
			'created_at'=>'2020-07-09 18:33:53',
			'updated_at'=>'2020-07-09 18:33:53',
			'user_id'=>10,
			'purchase_by'=>56,
			'sales_id'=>19,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>56,
			'created_at'=>'2020-07-09 18:35:13',
			'updated_at'=>'2020-07-09 18:35:13',
			'user_id'=>54,
			'purchase_by'=>57,
			'sales_id'=>19,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>57,
			'created_at'=>'2020-07-09 18:45:41',
			'updated_at'=>'2020-07-09 18:45:41',
			'user_id'=>3,
			'purchase_by'=>58,
			'sales_id'=>19,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>58,
			'created_at'=>'2020-07-09 18:46:13',
			'updated_at'=>'2020-07-09 18:46:13',
			'user_id'=>3,
			'purchase_by'=>59,
			'sales_id'=>20,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>59,
			'created_at'=>'2020-07-09 18:52:27',
			'updated_at'=>'2020-07-09 18:52:27',
			'user_id'=>52,
			'purchase_by'=>60,
			'sales_id'=>20,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>60,
			'created_at'=>'2020-07-09 18:53:11',
			'updated_at'=>'2020-07-09 18:53:11',
			'user_id'=>6,
			'purchase_by'=>61,
			'sales_id'=>20,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>61,
			'created_at'=>'2020-07-09 19:01:41',
			'updated_at'=>'2020-07-09 19:01:41',
			'user_id'=>54,
			'purchase_by'=>62,
			'sales_id'=>21,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>62,
			'created_at'=>'2020-07-09 19:03:43',
			'updated_at'=>'2020-07-09 19:03:43',
			'user_id'=>33,
			'purchase_by'=>63,
			'sales_id'=>21,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>63,
			'created_at'=>'2020-07-09 19:10:29',
			'updated_at'=>'2020-07-09 19:10:29',
			'user_id'=>35,
			'purchase_by'=>64,
			'sales_id'=>21,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>64,
			'created_at'=>'2020-07-09 19:12:07',
			'updated_at'=>'2020-07-09 19:12:07',
			'user_id'=>54,
			'purchase_by'=>65,
			'sales_id'=>22,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>65,
			'created_at'=>'2020-07-09 19:19:07',
			'updated_at'=>'2020-07-09 19:19:07',
			'user_id'=>28,
			'purchase_by'=>66,
			'sales_id'=>22,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>66,
			'created_at'=>'2020-07-09 19:22:15',
			'updated_at'=>'2020-07-09 19:22:15',
			'user_id'=>62,
			'purchase_by'=>67,
			'sales_id'=>22,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>67,
			'created_at'=>'2020-07-09 19:37:24',
			'updated_at'=>'2020-07-09 19:37:24',
			'user_id'=>58,
			'purchase_by'=>68,
			'sales_id'=>23,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>68,
			'created_at'=>'2020-07-09 19:57:44',
			'updated_at'=>'2020-07-09 19:57:44',
			'user_id'=>62,
			'purchase_by'=>69,
			'sales_id'=>23,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>69,
			'created_at'=>'2020-07-09 20:09:15',
			'updated_at'=>'2020-07-09 20:09:15',
			'user_id'=>32,
			'purchase_by'=>70,
			'sales_id'=>23,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>70,
			'created_at'=>'2020-07-09 20:48:21',
			'updated_at'=>'2020-07-09 20:48:21',
			'user_id'=>3,
			'purchase_by'=>71,
			'sales_id'=>24,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>71,
			'created_at'=>'2020-07-09 21:21:00',
			'updated_at'=>'2020-07-09 21:21:00',
			'user_id'=>37,
			'purchase_by'=>72,
			'sales_id'=>24,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>72,
			'created_at'=>'2020-07-09 21:49:45',
			'updated_at'=>'2020-07-09 21:49:45',
			'user_id'=>35,
			'purchase_by'=>73,
			'sales_id'=>24,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>73,
			'created_at'=>'2020-07-09 21:58:20',
			'updated_at'=>'2020-07-09 21:58:20',
			'user_id'=>15,
			'purchase_by'=>74,
			'sales_id'=>25,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>74,
			'created_at'=>'2020-07-09 22:13:19',
			'updated_at'=>'2020-07-09 22:13:19',
			'user_id'=>30,
			'purchase_by'=>75,
			'sales_id'=>25,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>75,
			'created_at'=>'2020-07-09 22:13:24',
			'updated_at'=>'2020-07-09 22:13:24',
			'user_id'=>15,
			'purchase_by'=>76,
			'sales_id'=>25,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>76,
			'created_at'=>'2020-07-09 22:36:57',
			'updated_at'=>'2020-07-09 22:36:57',
			'user_id'=>37,
			'purchase_by'=>77,
			'sales_id'=>26,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>77,
			'created_at'=>'2020-07-09 22:36:59',
			'updated_at'=>'2020-07-09 22:36:59',
			'user_id'=>56,
			'purchase_by'=>78,
			'sales_id'=>26,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>78,
			'created_at'=>'2020-07-09 23:44:33',
			'updated_at'=>'2020-07-09 23:44:33',
			'user_id'=>58,
			'purchase_by'=>79,
			'sales_id'=>26,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>79,
			'created_at'=>'2020-07-09 23:47:26',
			'updated_at'=>'2020-07-09 23:47:26',
			'user_id'=>35,
			'purchase_by'=>80,
			'sales_id'=>27,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>80,
			'created_at'=>'2020-07-10 00:13:04',
			'updated_at'=>'2020-07-10 00:13:04',
			'user_id'=>77,
			'purchase_by'=>81,
			'sales_id'=>27,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>81,
			'created_at'=>'2020-07-10 00:28:45',
			'updated_at'=>'2020-07-10 00:28:45',
			'user_id'=>54,
			'purchase_by'=>82,
			'sales_id'=>27,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>82,
			'created_at'=>'2020-07-10 00:35:41',
			'updated_at'=>'2020-07-10 00:35:41',
			'user_id'=>67,
			'purchase_by'=>83,
			'sales_id'=>28,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>83,
			'created_at'=>'2020-07-10 01:00:04',
			'updated_at'=>'2020-07-10 01:00:04',
			'user_id'=>72,
			'purchase_by'=>84,
			'sales_id'=>28,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>84,
			'created_at'=>'2020-07-10 01:14:36',
			'updated_at'=>'2020-07-10 01:14:36',
			'user_id'=>76,
			'purchase_by'=>85,
			'sales_id'=>28,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>85,
			'created_at'=>'2020-07-10 01:17:57',
			'updated_at'=>'2020-07-10 01:17:57',
			'user_id'=>23,
			'purchase_by'=>86,
			'sales_id'=>29,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>86,
			'created_at'=>'2020-07-10 01:39:27',
			'updated_at'=>'2020-07-10 01:39:27',
			'user_id'=>76,
			'purchase_by'=>87,
			'sales_id'=>29,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>87,
			'created_at'=>'2020-07-10 01:51:08',
			'updated_at'=>'2020-07-10 01:51:08',
			'user_id'=>18,
			'purchase_by'=>88,
			'sales_id'=>29,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>88,
			'created_at'=>'2020-07-10 02:03:14',
			'updated_at'=>'2020-07-10 02:03:14',
			'user_id'=>10,
			'purchase_by'=>89,
			'sales_id'=>30,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>89,
			'created_at'=>'2020-07-10 02:08:24',
			'updated_at'=>'2020-07-10 02:08:24',
			'user_id'=>10,
			'purchase_by'=>90,
			'sales_id'=>30,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>90,
			'created_at'=>'2020-07-10 02:10:20',
			'updated_at'=>'2020-07-10 02:10:20',
			'user_id'=>75,
			'purchase_by'=>91,
			'sales_id'=>30,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>91,
			'created_at'=>'2020-07-10 02:14:15',
			'updated_at'=>'2020-07-10 02:14:15',
			'user_id'=>75,
			'purchase_by'=>92,
			'sales_id'=>31,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>92,
			'created_at'=>'2020-07-10 02:25:00',
			'updated_at'=>'2020-07-10 02:25:00',
			'user_id'=>89,
			'purchase_by'=>93,
			'sales_id'=>31,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>93,
			'created_at'=>'2020-07-10 02:56:54',
			'updated_at'=>'2020-07-10 02:56:54',
			'user_id'=>89,
			'purchase_by'=>94,
			'sales_id'=>31,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>94,
			'created_at'=>'2020-07-10 03:05:25',
			'updated_at'=>'2020-07-10 03:05:25',
			'user_id'=>52,
			'purchase_by'=>95,
			'sales_id'=>32,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>95,
			'created_at'=>'2020-07-10 03:32:06',
			'updated_at'=>'2020-07-10 03:32:06',
			'user_id'=>75,
			'purchase_by'=>96,
			'sales_id'=>32,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>96,
			'created_at'=>'2020-07-10 04:40:00',
			'updated_at'=>'2020-07-10 04:40:00',
			'user_id'=>21,
			'purchase_by'=>97,
			'sales_id'=>32,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>97,
			'created_at'=>'2020-07-10 08:15:16',
			'updated_at'=>'2020-07-10 08:15:16',
			'user_id'=>52,
			'purchase_by'=>98,
			'sales_id'=>33,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>98,
			'created_at'=>'2020-07-10 09:57:01',
			'updated_at'=>'2020-07-10 09:57:01',
			'user_id'=>10,
			'purchase_by'=>99,
			'sales_id'=>33,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>99,
			'created_at'=>'2020-07-10 12:18:47',
			'updated_at'=>'2020-07-10 12:18:47',
			'user_id'=>89,
			'purchase_by'=>100,
			'sales_id'=>33,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>100,
			'created_at'=>'2020-07-10 12:56:01',
			'updated_at'=>'2020-07-10 12:56:01',
			'user_id'=>21,
			'purchase_by'=>101,
			'sales_id'=>34,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>101,
			'created_at'=>'2020-07-10 12:58:43',
			'updated_at'=>'2020-07-10 12:58:43',
			'user_id'=>15,
			'purchase_by'=>102,
			'sales_id'=>34,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>102,
			'created_at'=>'2020-07-10 13:04:22',
			'updated_at'=>'2020-07-10 13:04:22',
			'user_id'=>67,
			'purchase_by'=>103,
			'sales_id'=>34,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>103,
			'created_at'=>'2020-07-10 14:09:31',
			'updated_at'=>'2020-07-10 14:09:31',
			'user_id'=>32,
			'purchase_by'=>104,
			'sales_id'=>35,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>104,
			'created_at'=>'2020-07-10 14:49:27',
			'updated_at'=>'2020-07-10 14:49:27',
			'user_id'=>74,
			'purchase_by'=>105,
			'sales_id'=>35,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>105,
			'created_at'=>'2020-07-10 15:36:53',
			'updated_at'=>'2020-07-10 15:36:53',
			'user_id'=>93,
			'purchase_by'=>106,
			'sales_id'=>35,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>106,
			'created_at'=>'2020-07-10 15:56:27',
			'updated_at'=>'2020-07-10 15:56:27',
			'user_id'=>93,
			'purchase_by'=>107,
			'sales_id'=>36,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>107,
			'created_at'=>'2020-07-10 16:23:25',
			'updated_at'=>'2020-07-10 16:23:25',
			'user_id'=>62,
			'purchase_by'=>108,
			'sales_id'=>36,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>108,
			'created_at'=>'2020-07-10 16:29:22',
			'updated_at'=>'2020-07-10 16:29:22',
			'user_id'=>102,
			'purchase_by'=>109,
			'sales_id'=>36,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>109,
			'created_at'=>'2020-07-10 17:28:25',
			'updated_at'=>'2020-07-10 17:28:25',
			'user_id'=>103,
			'purchase_by'=>110,
			'sales_id'=>37,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>110,
			'created_at'=>'2020-07-10 17:36:26',
			'updated_at'=>'2020-07-10 17:36:26',
			'user_id'=>68,
			'purchase_by'=>111,
			'sales_id'=>37,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>111,
			'created_at'=>'2020-07-10 17:42:57',
			'updated_at'=>'2020-07-10 17:42:57',
			'user_id'=>74,
			'purchase_by'=>112,
			'sales_id'=>37,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>112,
			'created_at'=>'2020-07-10 17:55:32',
			'updated_at'=>'2020-07-10 17:55:32',
			'user_id'=>110,
			'purchase_by'=>113,
			'sales_id'=>38,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>113,
			'created_at'=>'2020-07-10 18:55:26',
			'updated_at'=>'2020-07-10 18:55:26',
			'user_id'=>110,
			'purchase_by'=>114,
			'sales_id'=>38,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>114,
			'created_at'=>'2020-07-10 19:11:11',
			'updated_at'=>'2020-07-10 19:11:11',
			'user_id'=>90,
			'purchase_by'=>115,
			'sales_id'=>38,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>115,
			'created_at'=>'2020-07-10 19:11:49',
			'updated_at'=>'2020-07-10 19:11:49',
			'user_id'=>110,
			'purchase_by'=>116,
			'sales_id'=>39,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>116,
			'created_at'=>'2020-07-10 19:21:07',
			'updated_at'=>'2020-07-10 19:21:07',
			'user_id'=>67,
			'purchase_by'=>117,
			'sales_id'=>39,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>117,
			'created_at'=>'2020-07-10 19:44:54',
			'updated_at'=>'2020-07-10 19:44:54',
			'user_id'=>76,
			'purchase_by'=>118,
			'sales_id'=>39,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>118,
			'created_at'=>'2020-07-10 20:03:36',
			'updated_at'=>'2020-07-10 20:03:36',
			'user_id'=>3,
			'purchase_by'=>119,
			'sales_id'=>40,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>119,
			'created_at'=>'2020-07-10 20:18:44',
			'updated_at'=>'2020-07-10 20:18:44',
			'user_id'=>74,
			'purchase_by'=>120,
			'sales_id'=>40,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>120,
			'created_at'=>'2020-07-10 21:32:35',
			'updated_at'=>'2020-07-10 21:32:35',
			'user_id'=>24,
			'purchase_by'=>121,
			'sales_id'=>40,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>121,
			'created_at'=>'2020-07-10 22:28:09',
			'updated_at'=>'2020-07-10 22:28:09',
			'user_id'=>74,
			'purchase_by'=>122,
			'sales_id'=>41,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>122,
			'created_at'=>'2020-07-10 23:53:07',
			'updated_at'=>'2020-07-10 23:53:07',
			'user_id'=>74,
			'purchase_by'=>123,
			'sales_id'=>41,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>123,
			'created_at'=>'2020-07-11 00:08:53',
			'updated_at'=>'2020-07-11 00:08:53',
			'user_id'=>45,
			'purchase_by'=>124,
			'sales_id'=>41,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>124,
			'created_at'=>'2020-07-11 00:16:55',
			'updated_at'=>'2020-07-11 00:16:55',
			'user_id'=>102,
			'purchase_by'=>125,
			'sales_id'=>42,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>125,
			'created_at'=>'2020-07-11 00:20:35',
			'updated_at'=>'2020-07-11 00:20:35',
			'user_id'=>23,
			'purchase_by'=>126,
			'sales_id'=>42,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>126,
			'created_at'=>'2020-07-11 00:21:34',
			'updated_at'=>'2020-07-11 00:21:34',
			'user_id'=>45,
			'purchase_by'=>127,
			'sales_id'=>42,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>127,
			'created_at'=>'2020-07-11 00:31:52',
			'updated_at'=>'2020-07-11 00:31:52',
			'user_id'=>45,
			'purchase_by'=>128,
			'sales_id'=>43,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>128,
			'created_at'=>'2020-07-11 00:57:34',
			'updated_at'=>'2020-07-11 00:57:34',
			'user_id'=>64,
			'purchase_by'=>129,
			'sales_id'=>43,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>129,
			'created_at'=>'2020-07-11 01:21:03',
			'updated_at'=>'2020-07-11 01:21:03',
			'user_id'=>125,
			'purchase_by'=>130,
			'sales_id'=>43,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>130,
			'created_at'=>'2020-07-11 01:44:04',
			'updated_at'=>'2020-07-11 01:44:04',
			'user_id'=>129,
			'purchase_by'=>131,
			'sales_id'=>44,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>131,
			'created_at'=>'2020-07-11 11:58:32',
			'updated_at'=>'2020-07-11 11:58:32',
			'user_id'=>126,
			'purchase_by'=>132,
			'sales_id'=>44,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>132,
			'created_at'=>'2020-07-11 14:19:17',
			'updated_at'=>'2020-07-11 14:19:17',
			'user_id'=>108,
			'purchase_by'=>133,
			'sales_id'=>44,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>133,
			'created_at'=>'2020-07-11 15:03:52',
			'updated_at'=>'2020-07-11 15:03:52',
			'user_id'=>74,
			'purchase_by'=>134,
			'sales_id'=>45,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>134,
			'created_at'=>'2020-07-11 15:32:12',
			'updated_at'=>'2020-07-11 15:32:12',
			'user_id'=>8,
			'purchase_by'=>135,
			'sales_id'=>45,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>135,
			'created_at'=>'2020-07-11 16:05:08',
			'updated_at'=>'2020-07-11 16:05:08',
			'user_id'=>8,
			'purchase_by'=>136,
			'sales_id'=>45,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>136,
			'created_at'=>'2020-07-11 16:35:47',
			'updated_at'=>'2020-07-11 16:35:47',
			'user_id'=>74,
			'purchase_by'=>137,
			'sales_id'=>46,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>137,
			'created_at'=>'2020-07-11 17:28:08',
			'updated_at'=>'2020-07-11 17:28:08',
			'user_id'=>74,
			'purchase_by'=>138,
			'sales_id'=>46,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>138,
			'created_at'=>'2020-07-11 17:31:20',
			'updated_at'=>'2020-07-11 17:31:20',
			'user_id'=>25,
			'purchase_by'=>139,
			'sales_id'=>46,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>139,
			'created_at'=>'2020-07-11 17:36:32',
			'updated_at'=>'2020-07-11 17:36:32',
			'user_id'=>25,
			'purchase_by'=>140,
			'sales_id'=>47,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>140,
			'created_at'=>'2020-07-11 17:47:12',
			'updated_at'=>'2020-07-11 17:47:12',
			'user_id'=>25,
			'purchase_by'=>141,
			'sales_id'=>47,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>141,
			'created_at'=>'2020-07-11 19:14:14',
			'updated_at'=>'2020-07-11 19:14:14',
			'user_id'=>69,
			'purchase_by'=>142,
			'sales_id'=>47,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>142,
			'created_at'=>'2020-07-11 20:51:02',
			'updated_at'=>'2020-07-11 20:51:02',
			'user_id'=>10,
			'purchase_by'=>143,
			'sales_id'=>48,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>143,
			'created_at'=>'2020-07-11 20:58:05',
			'updated_at'=>'2020-07-11 20:58:05',
			'user_id'=>87,
			'purchase_by'=>144,
			'sales_id'=>48,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>144,
			'created_at'=>'2020-07-11 21:40:58',
			'updated_at'=>'2020-07-11 21:40:58',
			'user_id'=>74,
			'purchase_by'=>145,
			'sales_id'=>48,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>145,
			'created_at'=>'2020-07-11 22:33:24',
			'updated_at'=>'2020-07-11 22:33:24',
			'user_id'=>38,
			'purchase_by'=>146,
			'sales_id'=>49,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>146,
			'created_at'=>'2020-07-11 23:24:38',
			'updated_at'=>'2020-07-11 23:24:38',
			'user_id'=>38,
			'purchase_by'=>147,
			'sales_id'=>49,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>147,
			'created_at'=>'2020-07-12 00:14:58',
			'updated_at'=>'2020-07-12 00:14:58',
			'user_id'=>147,
			'purchase_by'=>148,
			'sales_id'=>49,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>148,
			'created_at'=>'2020-07-12 01:26:35',
			'updated_at'=>'2020-07-12 01:26:35',
			'user_id'=>102,
			'purchase_by'=>149,
			'sales_id'=>50,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>149,
			'created_at'=>'2020-07-12 02:13:41',
			'updated_at'=>'2020-07-12 02:13:41',
			'user_id'=>135,
			'purchase_by'=>150,
			'sales_id'=>50,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>150,
			'created_at'=>'2020-07-12 02:16:02',
			'updated_at'=>'2020-07-12 02:16:02',
			'user_id'=>147,
			'purchase_by'=>151,
			'sales_id'=>50,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>151,
			'created_at'=>'2020-07-12 06:52:40',
			'updated_at'=>'2020-07-12 06:52:40',
			'user_id'=>10,
			'purchase_by'=>154,
			'sales_id'=>51,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>152,
			'created_at'=>'2020-07-12 13:04:57',
			'updated_at'=>'2020-07-12 13:04:57',
			'user_id'=>94,
			'purchase_by'=>155,
			'sales_id'=>51,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>153,
			'created_at'=>'2020-07-12 14:05:30',
			'updated_at'=>'2020-07-12 14:05:30',
			'user_id'=>74,
			'purchase_by'=>156,
			'sales_id'=>51,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>154,
			'created_at'=>'2020-07-12 14:56:11',
			'updated_at'=>'2020-07-12 14:56:11',
			'user_id'=>74,
			'purchase_by'=>158,
			'sales_id'=>52,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>155,
			'created_at'=>'2020-07-12 15:38:08',
			'updated_at'=>'2020-07-12 15:38:08',
			'user_id'=>74,
			'purchase_by'=>159,
			'sales_id'=>52,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>156,
			'created_at'=>'2020-07-12 16:02:07',
			'updated_at'=>'2020-07-12 16:02:07',
			'user_id'=>74,
			'purchase_by'=>161,
			'sales_id'=>52,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>157,
			'created_at'=>'2020-07-12 17:12:52',
			'updated_at'=>'2020-07-12 17:12:52',
			'user_id'=>74,
			'purchase_by'=>162,
			'sales_id'=>53,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>158,
			'created_at'=>'2020-07-12 17:41:50',
			'updated_at'=>'2020-07-12 17:41:50',
			'user_id'=>109,
			'purchase_by'=>164,
			'sales_id'=>53,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>159,
			'created_at'=>'2020-07-12 18:40:37',
			'updated_at'=>'2020-07-12 18:40:37',
			'user_id'=>30,
			'purchase_by'=>167,
			'sales_id'=>53,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>160,
			'created_at'=>'2020-07-12 18:47:38',
			'updated_at'=>'2020-07-12 18:47:38',
			'user_id'=>74,
			'purchase_by'=>168,
			'sales_id'=>54,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>161,
			'created_at'=>'2020-07-12 19:39:01',
			'updated_at'=>'2020-07-12 19:39:01',
			'user_id'=>18,
			'purchase_by'=>170,
			'sales_id'=>54,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>162,
			'created_at'=>'2020-07-12 19:50:47',
			'updated_at'=>'2020-07-12 19:50:47',
			'user_id'=>159,
			'purchase_by'=>172,
			'sales_id'=>54,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>163,
			'created_at'=>'2020-07-12 20:04:10',
			'updated_at'=>'2020-07-12 20:04:10',
			'user_id'=>118,
			'purchase_by'=>173,
			'sales_id'=>55,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>164,
			'created_at'=>'2020-07-12 20:09:43',
			'updated_at'=>'2020-07-12 20:09:43',
			'user_id'=>123,
			'purchase_by'=>174,
			'sales_id'=>55,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>165,
			'created_at'=>'2020-07-12 22:46:14',
			'updated_at'=>'2020-07-12 22:46:14',
			'user_id'=>134,
			'purchase_by'=>178,
			'sales_id'=>55,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>166,
			'created_at'=>'2020-07-12 23:02:22',
			'updated_at'=>'2020-07-12 23:02:22',
			'user_id'=>134,
			'purchase_by'=>181,
			'sales_id'=>56,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>167,
			'created_at'=>'2020-07-12 23:20:59',
			'updated_at'=>'2020-07-12 23:20:59',
			'user_id'=>159,
			'purchase_by'=>183,
			'sales_id'=>56,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>168,
			'created_at'=>'2020-07-12 23:36:26',
			'updated_at'=>'2020-07-12 23:36:26',
			'user_id'=>69,
			'purchase_by'=>185,
			'sales_id'=>56,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>169,
			'created_at'=>'2020-07-12 23:37:53',
			'updated_at'=>'2020-07-12 23:37:53',
			'user_id'=>74,
			'purchase_by'=>186,
			'sales_id'=>57,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>170,
			'created_at'=>'2020-07-12 23:38:57',
			'updated_at'=>'2020-07-12 23:38:57',
			'user_id'=>80,
			'purchase_by'=>187,
			'sales_id'=>57,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>171,
			'created_at'=>'2020-07-13 00:00:20',
			'updated_at'=>'2020-07-13 00:00:20',
			'user_id'=>183,
			'purchase_by'=>190,
			'sales_id'=>57,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>172,
			'created_at'=>'2020-07-13 00:33:35',
			'updated_at'=>'2020-07-13 00:33:35',
			'user_id'=>125,
			'purchase_by'=>191,
			'sales_id'=>58,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>173,
			'created_at'=>'2020-07-13 00:58:21',
			'updated_at'=>'2020-07-13 00:58:21',
			'user_id'=>118,
			'purchase_by'=>194,
			'sales_id'=>58,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>174,
			'created_at'=>'2020-07-13 01:27:51',
			'updated_at'=>'2020-07-13 01:27:51',
			'user_id'=>93,
			'purchase_by'=>195,
			'sales_id'=>58,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>175,
			'created_at'=>'2020-07-13 02:09:20',
			'updated_at'=>'2020-07-13 02:09:20',
			'user_id'=>183,
			'purchase_by'=>196,
			'sales_id'=>59,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>176,
			'created_at'=>'2020-07-13 02:54:18',
			'updated_at'=>'2020-07-13 02:54:18',
			'user_id'=>94,
			'purchase_by'=>197,
			'sales_id'=>59,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>177,
			'created_at'=>'2020-07-13 03:30:37',
			'updated_at'=>'2020-07-13 03:30:37',
			'user_id'=>74,
			'purchase_by'=>198,
			'sales_id'=>59,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>178,
			'created_at'=>'2020-07-13 05:13:52',
			'updated_at'=>'2020-07-13 05:13:52',
			'user_id'=>74,
			'purchase_by'=>199,
			'sales_id'=>60,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>179,
			'created_at'=>'2020-07-13 12:28:34',
			'updated_at'=>'2020-07-13 12:28:34',
			'user_id'=>10,
			'purchase_by'=>200,
			'sales_id'=>60,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>180,
			'created_at'=>'2020-07-13 14:45:02',
			'updated_at'=>'2020-07-13 14:45:02',
			'user_id'=>7,
			'purchase_by'=>201,
			'sales_id'=>60,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>181,
			'created_at'=>'2020-07-13 16:58:55',
			'updated_at'=>'2020-07-13 16:58:55',
			'user_id'=>190,
			'purchase_by'=>202,
			'sales_id'=>61,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>182,
			'created_at'=>'2020-07-13 18:50:49',
			'updated_at'=>'2020-07-13 18:50:49',
			'user_id'=>21,
			'purchase_by'=>203,
			'sales_id'=>61,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>183,
			'created_at'=>'2020-07-13 18:58:40',
			'updated_at'=>'2020-07-13 18:58:40',
			'user_id'=>122,
			'purchase_by'=>204,
			'sales_id'=>61,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>184,
			'created_at'=>'2020-07-13 19:06:04',
			'updated_at'=>'2020-07-13 19:06:04',
			'user_id'=>74,
			'purchase_by'=>205,
			'sales_id'=>62,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>185,
			'created_at'=>'2020-07-13 19:06:05',
			'updated_at'=>'2020-07-13 19:06:05',
			'user_id'=>53,
			'purchase_by'=>206,
			'sales_id'=>62,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>186,
			'created_at'=>'2020-07-13 19:25:11',
			'updated_at'=>'2020-07-13 19:25:11',
			'user_id'=>10,
			'purchase_by'=>207,
			'sales_id'=>62,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>187,
			'created_at'=>'2020-07-13 20:59:55',
			'updated_at'=>'2020-07-13 20:59:55',
			'user_id'=>136,
			'purchase_by'=>209,
			'sales_id'=>63,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>188,
			'created_at'=>'2020-07-13 21:22:16',
			'updated_at'=>'2020-07-13 21:22:16',
			'user_id'=>159,
			'purchase_by'=>212,
			'sales_id'=>63,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>189,
			'created_at'=>'2020-07-13 21:40:17',
			'updated_at'=>'2020-07-13 21:40:17',
			'user_id'=>53,
			'purchase_by'=>213,
			'sales_id'=>63,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>190,
			'created_at'=>'2020-07-13 21:43:17',
			'updated_at'=>'2020-07-13 21:43:17',
			'user_id'=>190,
			'purchase_by'=>215,
			'sales_id'=>64,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>191,
			'created_at'=>'2020-07-13 22:06:22',
			'updated_at'=>'2020-07-13 22:06:22',
			'user_id'=>134,
			'purchase_by'=>217,
			'sales_id'=>64,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>192,
			'created_at'=>'2020-07-13 22:20:40',
			'updated_at'=>'2020-07-13 22:20:40',
			'user_id'=>74,
			'purchase_by'=>218,
			'sales_id'=>64,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>193,
			'created_at'=>'2020-07-13 23:11:36',
			'updated_at'=>'2020-07-13 23:11:36',
			'user_id'=>24,
			'purchase_by'=>219,
			'sales_id'=>65,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>194,
			'created_at'=>'2020-07-14 00:05:50',
			'updated_at'=>'2020-07-14 00:05:50',
			'user_id'=>13,
			'purchase_by'=>221,
			'sales_id'=>65,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>195,
			'created_at'=>'2020-07-14 00:29:27',
			'updated_at'=>'2020-07-14 00:29:27',
			'user_id'=>13,
			'purchase_by'=>222,
			'sales_id'=>65,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>196,
			'created_at'=>'2020-07-14 01:58:25',
			'updated_at'=>'2020-07-14 01:58:25',
			'user_id'=>199,
			'purchase_by'=>226,
			'sales_id'=>66,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>197,
			'created_at'=>'2020-07-14 02:30:57',
			'updated_at'=>'2020-07-14 02:30:57',
			'user_id'=>14,
			'purchase_by'=>228,
			'sales_id'=>66,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>198,
			'created_at'=>'2020-07-14 02:31:30',
			'updated_at'=>'2020-07-14 02:31:30',
			'user_id'=>186,
			'purchase_by'=>229,
			'sales_id'=>66,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>199,
			'created_at'=>'2020-07-14 11:17:42',
			'updated_at'=>'2020-07-14 11:17:42',
			'user_id'=>199,
			'purchase_by'=>231,
			'sales_id'=>67,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>200,
			'created_at'=>'2020-07-14 18:24:26',
			'updated_at'=>'2020-07-14 18:24:26',
			'user_id'=>81,
			'purchase_by'=>232,
			'sales_id'=>67,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>201,
			'created_at'=>'2020-07-14 18:55:00',
			'updated_at'=>'2020-07-14 18:55:00',
			'user_id'=>74,
			'purchase_by'=>233,
			'sales_id'=>67,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>202,
			'created_at'=>'2020-07-14 20:15:25',
			'updated_at'=>'2020-07-14 20:15:25',
			'user_id'=>32,
			'purchase_by'=>234,
			'sales_id'=>68,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>203,
			'created_at'=>'2020-07-15 00:20:34',
			'updated_at'=>'2020-07-15 00:20:34',
			'user_id'=>151,
			'purchase_by'=>235,
			'sales_id'=>68,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>204,
			'created_at'=>'2020-07-15 02:16:14',
			'updated_at'=>'2020-07-15 02:16:14',
			'user_id'=>36,
			'purchase_by'=>236,
			'sales_id'=>68,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>205,
			'created_at'=>'2020-07-15 13:18:55',
			'updated_at'=>'2020-07-15 13:18:55',
			'user_id'=>104,
			'purchase_by'=>238,
			'sales_id'=>69,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>206,
			'created_at'=>'2020-07-15 15:34:41',
			'updated_at'=>'2020-07-15 15:34:41',
			'user_id'=>149,
			'purchase_by'=>239,
			'sales_id'=>69,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>207,
			'created_at'=>'2020-07-15 17:35:17',
			'updated_at'=>'2020-07-15 17:35:17',
			'user_id'=>74,
			'purchase_by'=>240,
			'sales_id'=>69,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>208,
			'created_at'=>'2020-07-15 18:59:33',
			'updated_at'=>'2020-07-15 18:59:33',
			'user_id'=>233,
			'purchase_by'=>241,
			'sales_id'=>70,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>209,
			'created_at'=>'2020-07-15 20:34:08',
			'updated_at'=>'2020-07-15 20:34:08',
			'user_id'=>233,
			'purchase_by'=>242,
			'sales_id'=>70,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>210,
			'created_at'=>'2020-07-15 20:53:24',
			'updated_at'=>'2020-07-15 20:53:24',
			'user_id'=>10,
			'purchase_by'=>244,
			'sales_id'=>70,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>211,
			'created_at'=>'2020-07-15 20:57:22',
			'updated_at'=>'2020-07-15 20:57:22',
			'user_id'=>74,
			'purchase_by'=>245,
			'sales_id'=>71,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>212,
			'created_at'=>'2020-07-15 22:00:35',
			'updated_at'=>'2020-07-15 22:00:35',
			'user_id'=>138,
			'purchase_by'=>169,
			'sales_id'=>71,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>213,
			'created_at'=>'2020-07-15 22:03:22',
			'updated_at'=>'2020-07-15 22:03:22',
			'user_id'=>138,
			'purchase_by'=>152,
			'sales_id'=>71,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>214,
			'created_at'=>'2020-07-15 22:13:48',
			'updated_at'=>'2020-07-15 22:13:48',
			'user_id'=>138,
			'purchase_by'=>220,
			'sales_id'=>72,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>215,
			'created_at'=>'2020-07-15 22:14:08',
			'updated_at'=>'2020-07-15 22:14:08',
			'user_id'=>138,
			'purchase_by'=>220,
			'sales_id'=>72,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>216,
			'created_at'=>'2020-07-15 22:36:30',
			'updated_at'=>'2020-07-15 22:36:30',
			'user_id'=>14,
			'purchase_by'=>248,
			'sales_id'=>72,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>217,
			'created_at'=>'2020-07-15 22:39:39',
			'updated_at'=>'2020-07-15 22:39:39',
			'user_id'=>241,
			'purchase_by'=>249,
			'sales_id'=>73,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>218,
			'created_at'=>'2020-07-15 23:00:57',
			'updated_at'=>'2020-07-15 23:00:57',
			'user_id'=>169,
			'purchase_by'=>153,
			'sales_id'=>73,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>219,
			'created_at'=>'2020-07-15 23:26:55',
			'updated_at'=>'2020-07-15 23:26:55',
			'user_id'=>152,
			'purchase_by'=>250,
			'sales_id'=>73,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>220,
			'created_at'=>'2020-07-15 23:39:46',
			'updated_at'=>'2020-07-15 23:39:46',
			'user_id'=>183,
			'purchase_by'=>251,
			'sales_id'=>74,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>221,
			'created_at'=>'2020-07-15 23:59:29',
			'updated_at'=>'2020-07-15 23:59:29',
			'user_id'=>32,
			'purchase_by'=>252,
			'sales_id'=>74,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>222,
			'created_at'=>'2020-07-16 00:44:00',
			'updated_at'=>'2020-07-16 00:44:00',
			'user_id'=>152,
			'purchase_by'=>254,
			'sales_id'=>74,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>223,
			'created_at'=>'2020-07-16 01:08:02',
			'updated_at'=>'2020-07-16 01:08:02',
			'user_id'=>233,
			'purchase_by'=>255,
			'sales_id'=>75,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>224,
			'created_at'=>'2020-07-16 02:06:24',
			'updated_at'=>'2020-07-16 02:06:24',
			'user_id'=>199,
			'purchase_by'=>256,
			'sales_id'=>75,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>225,
			'created_at'=>'2020-07-16 02:26:05',
			'updated_at'=>'2020-07-16 02:26:05',
			'user_id'=>172,
			'purchase_by'=>257,
			'sales_id'=>75,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>226,
			'created_at'=>'2020-07-16 02:32:47',
			'updated_at'=>'2020-07-16 02:32:47',
			'user_id'=>162,
			'purchase_by'=>258,
			'sales_id'=>76,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>227,
			'created_at'=>'2020-07-16 02:35:16',
			'updated_at'=>'2020-07-16 02:35:16',
			'user_id'=>94,
			'purchase_by'=>259,
			'sales_id'=>76,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>228,
			'created_at'=>'2020-07-16 02:46:25',
			'updated_at'=>'2020-07-16 02:46:25',
			'user_id'=>162,
			'purchase_by'=>260,
			'sales_id'=>76,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>229,
			'created_at'=>'2020-07-16 02:54:39',
			'updated_at'=>'2020-07-16 02:54:39',
			'user_id'=>162,
			'purchase_by'=>261,
			'sales_id'=>77,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>230,
			'created_at'=>'2020-07-16 03:37:55',
			'updated_at'=>'2020-07-16 03:37:55',
			'user_id'=>162,
			'purchase_by'=>262,
			'sales_id'=>77,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>231,
			'created_at'=>'2020-07-16 03:53:34',
			'updated_at'=>'2020-07-16 03:53:34',
			'user_id'=>172,
			'purchase_by'=>263,
			'sales_id'=>77,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>232,
			'created_at'=>'2020-07-16 04:14:42',
			'updated_at'=>'2020-07-16 04:14:42',
			'user_id'=>72,
			'purchase_by'=>264,
			'sales_id'=>78,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>233,
			'created_at'=>'2020-07-16 12:42:11',
			'updated_at'=>'2020-07-16 12:42:11',
			'user_id'=>107,
			'purchase_by'=>265,
			'sales_id'=>78,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>234,
			'created_at'=>'2020-07-16 12:47:37',
			'updated_at'=>'2020-07-16 12:47:37',
			'user_id'=>209,
			'purchase_by'=>267,
			'sales_id'=>78,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>235,
			'created_at'=>'2020-07-16 14:03:17',
			'updated_at'=>'2020-07-16 14:03:17',
			'user_id'=>251,
			'purchase_by'=>270,
			'sales_id'=>79,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>236,
			'created_at'=>'2020-07-16 14:20:34',
			'updated_at'=>'2020-07-16 14:20:34',
			'user_id'=>233,
			'purchase_by'=>271,
			'sales_id'=>79,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>237,
			'created_at'=>'2020-07-16 15:13:16',
			'updated_at'=>'2020-07-16 15:13:16',
			'user_id'=>202,
			'purchase_by'=>272,
			'sales_id'=>79,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>238,
			'created_at'=>'2020-07-16 15:14:47',
			'updated_at'=>'2020-07-16 15:14:47',
			'user_id'=>162,
			'purchase_by'=>273,
			'sales_id'=>80,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>239,
			'created_at'=>'2020-07-16 15:24:26',
			'updated_at'=>'2020-07-16 15:24:26',
			'user_id'=>251,
			'purchase_by'=>274,
			'sales_id'=>80,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>240,
			'created_at'=>'2020-07-16 16:32:42',
			'updated_at'=>'2020-07-16 16:32:42',
			'user_id'=>172,
			'purchase_by'=>275,
			'sales_id'=>80,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>241,
			'created_at'=>'2020-07-16 17:08:51',
			'updated_at'=>'2020-07-16 17:08:51',
			'user_id'=>151,
			'purchase_by'=>276,
			'sales_id'=>81,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>242,
			'created_at'=>'2020-07-16 17:29:41',
			'updated_at'=>'2020-07-16 17:29:41',
			'user_id'=>136,
			'purchase_by'=>277,
			'sales_id'=>81,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>243,
			'created_at'=>'2020-07-16 17:50:48',
			'updated_at'=>'2020-07-16 17:50:48',
			'user_id'=>162,
			'purchase_by'=>278,
			'sales_id'=>81,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>244,
			'created_at'=>'2020-07-16 18:12:19',
			'updated_at'=>'2020-07-16 18:12:19',
			'user_id'=>276,
			'purchase_by'=>279,
			'sales_id'=>82,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>245,
			'created_at'=>'2020-07-16 18:27:00',
			'updated_at'=>'2020-07-16 18:27:00',
			'user_id'=>251,
			'purchase_by'=>280,
			'sales_id'=>82,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>246,
			'created_at'=>'2020-07-16 19:09:29',
			'updated_at'=>'2020-07-16 19:09:29',
			'user_id'=>251,
			'purchase_by'=>283,
			'sales_id'=>82,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>247,
			'created_at'=>'2020-07-16 19:46:40',
			'updated_at'=>'2020-07-16 19:46:40',
			'user_id'=>147,
			'purchase_by'=>284,
			'sales_id'=>83,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>248,
			'created_at'=>'2020-07-16 19:52:59',
			'updated_at'=>'2020-07-16 19:52:59',
			'user_id'=>284,
			'purchase_by'=>285,
			'sales_id'=>83,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>249,
			'created_at'=>'2020-07-16 20:02:51',
			'updated_at'=>'2020-07-16 20:02:51',
			'user_id'=>284,
			'purchase_by'=>286,
			'sales_id'=>83,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>250,
			'created_at'=>'2020-07-16 20:06:07',
			'updated_at'=>'2020-07-16 20:06:07',
			'user_id'=>284,
			'purchase_by'=>287,
			'sales_id'=>84,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>251,
			'created_at'=>'2020-07-16 20:40:14',
			'updated_at'=>'2020-07-16 20:40:14',
			'user_id'=>257,
			'purchase_by'=>288,
			'sales_id'=>84,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>252,
			'created_at'=>'2020-07-16 20:50:47',
			'updated_at'=>'2020-07-16 20:50:47',
			'user_id'=>162,
			'purchase_by'=>289,
			'sales_id'=>84,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>253,
			'created_at'=>'2020-07-16 21:02:03',
			'updated_at'=>'2020-07-16 21:02:03',
			'user_id'=>135,
			'purchase_by'=>290,
			'sales_id'=>85,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>254,
			'created_at'=>'2020-07-16 21:26:59',
			'updated_at'=>'2020-07-16 21:26:59',
			'user_id'=>135,
			'purchase_by'=>291,
			'sales_id'=>85,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>255,
			'created_at'=>'2020-07-16 21:30:13',
			'updated_at'=>'2020-07-16 21:30:13',
			'user_id'=>278,
			'purchase_by'=>292,
			'sales_id'=>85,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>256,
			'created_at'=>'2020-07-16 21:47:20',
			'updated_at'=>'2020-07-16 21:47:20',
			'user_id'=>270,
			'purchase_by'=>293,
			'sales_id'=>86,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>257,
			'created_at'=>'2020-07-16 22:32:20',
			'updated_at'=>'2020-07-16 22:32:20',
			'user_id'=>149,
			'purchase_by'=>268,
			'sales_id'=>86,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>258,
			'created_at'=>'2020-07-16 23:48:40',
			'updated_at'=>'2020-07-16 23:48:40',
			'user_id'=>276,
			'purchase_by'=>294,
			'sales_id'=>86,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>259,
			'created_at'=>'2020-07-16 23:50:37',
			'updated_at'=>'2020-07-16 23:50:37',
			'user_id'=>275,
			'purchase_by'=>295,
			'sales_id'=>87,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>260,
			'created_at'=>'2020-07-17 00:55:00',
			'updated_at'=>'2020-07-17 00:55:00',
			'user_id'=>278,
			'purchase_by'=>296,
			'sales_id'=>87,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>261,
			'created_at'=>'2020-07-17 02:33:07',
			'updated_at'=>'2020-07-17 02:33:07',
			'user_id'=>10,
			'purchase_by'=>297,
			'sales_id'=>87,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>262,
			'created_at'=>'2020-07-17 02:45:15',
			'updated_at'=>'2020-07-17 02:45:15',
			'user_id'=>10,
			'purchase_by'=>298,
			'sales_id'=>88,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>263,
			'created_at'=>'2020-07-17 02:54:06',
			'updated_at'=>'2020-07-17 02:54:06',
			'user_id'=>10,
			'purchase_by'=>299,
			'sales_id'=>88,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>264,
			'created_at'=>'2020-07-17 04:51:43',
			'updated_at'=>'2020-07-17 04:51:43',
			'user_id'=>10,
			'purchase_by'=>300,
			'sales_id'=>88,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>265,
			'created_at'=>'2020-07-17 04:59:44',
			'updated_at'=>'2020-07-17 04:59:44',
			'user_id'=>288,
			'purchase_by'=>301,
			'sales_id'=>89,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>266,
			'created_at'=>'2020-07-17 05:20:50',
			'updated_at'=>'2020-07-17 05:20:50',
			'user_id'=>288,
			'purchase_by'=>302,
			'sales_id'=>89,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>267,
			'created_at'=>'2020-07-17 05:28:17',
			'updated_at'=>'2020-07-17 05:28:17',
			'user_id'=>288,
			'purchase_by'=>303,
			'sales_id'=>89,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>268,
			'created_at'=>'2020-07-17 11:09:03',
			'updated_at'=>'2020-07-17 11:09:03',
			'user_id'=>10,
			'purchase_by'=>304,
			'sales_id'=>90,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>269,
			'created_at'=>'2020-07-17 13:42:15',
			'updated_at'=>'2020-07-17 13:42:15',
			'user_id'=>10,
			'purchase_by'=>305,
			'sales_id'=>90,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>270,
			'created_at'=>'2020-07-17 14:17:47',
			'updated_at'=>'2020-07-17 14:17:47',
			'user_id'=>162,
			'purchase_by'=>306,
			'sales_id'=>90,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>271,
			'created_at'=>'2020-07-17 14:42:42',
			'updated_at'=>'2020-07-17 14:42:42',
			'user_id'=>3,
			'purchase_by'=>307,
			'sales_id'=>91,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>272,
			'created_at'=>'2020-07-17 14:51:15',
			'updated_at'=>'2020-07-17 14:51:15',
			'user_id'=>53,
			'purchase_by'=>308,
			'sales_id'=>91,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>273,
			'created_at'=>'2020-07-17 15:50:44',
			'updated_at'=>'2020-07-17 15:50:44',
			'user_id'=>235,
			'purchase_by'=>309,
			'sales_id'=>91,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>274,
			'created_at'=>'2020-07-17 16:39:30',
			'updated_at'=>'2020-07-17 16:39:30',
			'user_id'=>257,
			'purchase_by'=>310,
			'sales_id'=>92,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>275,
			'created_at'=>'2020-07-17 16:50:57',
			'updated_at'=>'2020-07-17 16:50:57',
			'user_id'=>295,
			'purchase_by'=>311,
			'sales_id'=>92,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>276,
			'created_at'=>'2020-07-17 18:40:29',
			'updated_at'=>'2020-07-17 18:40:29',
			'user_id'=>29,
			'purchase_by'=>312,
			'sales_id'=>92,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>277,
			'created_at'=>'2020-07-17 18:43:29',
			'updated_at'=>'2020-07-17 18:43:29',
			'user_id'=>292,
			'purchase_by'=>313,
			'sales_id'=>93,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>278,
			'created_at'=>'2020-07-17 19:24:50',
			'updated_at'=>'2020-07-17 19:24:50',
			'user_id'=>257,
			'purchase_by'=>314,
			'sales_id'=>93,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>279,
			'created_at'=>'2020-07-17 20:27:51',
			'updated_at'=>'2020-07-17 20:27:51',
			'user_id'=>291,
			'purchase_by'=>315,
			'sales_id'=>93,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>280,
			'created_at'=>'2020-07-17 21:35:57',
			'updated_at'=>'2020-07-17 21:35:57',
			'user_id'=>314,
			'purchase_by'=>316,
			'sales_id'=>94,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>281,
			'created_at'=>'2020-07-17 21:52:16',
			'updated_at'=>'2020-07-17 21:52:16',
			'user_id'=>291,
			'purchase_by'=>317,
			'sales_id'=>94,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>282,
			'created_at'=>'2020-07-17 22:09:26',
			'updated_at'=>'2020-07-17 22:09:26',
			'user_id'=>68,
			'purchase_by'=>318,
			'sales_id'=>94,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>283,
			'created_at'=>'2020-07-17 22:11:47',
			'updated_at'=>'2020-07-17 22:11:47',
			'user_id'=>263,
			'purchase_by'=>319,
			'sales_id'=>95,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>284,
			'created_at'=>'2020-07-17 23:32:59',
			'updated_at'=>'2020-07-17 23:32:59',
			'user_id'=>263,
			'purchase_by'=>320,
			'sales_id'=>95,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>285,
			'created_at'=>'2020-07-18 06:27:18',
			'updated_at'=>'2020-07-18 06:27:18',
			'user_id'=>263,
			'purchase_by'=>321,
			'sales_id'=>95,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>286,
			'created_at'=>'2020-07-18 09:08:07',
			'updated_at'=>'2020-07-18 09:08:07',
			'user_id'=>311,
			'purchase_by'=>322,
			'sales_id'=>96,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>287,
			'created_at'=>'2020-07-18 11:41:40',
			'updated_at'=>'2020-07-18 11:41:40',
			'user_id'=>8,
			'purchase_by'=>323,
			'sales_id'=>96,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>288,
			'created_at'=>'2020-07-18 12:19:01',
			'updated_at'=>'2020-07-18 12:19:01',
			'user_id'=>279,
			'purchase_by'=>324,
			'sales_id'=>96,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>289,
			'created_at'=>'2020-07-18 17:19:24',
			'updated_at'=>'2020-07-18 17:19:24',
			'user_id'=>199,
			'purchase_by'=>325,
			'sales_id'=>97,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>290,
			'created_at'=>'2020-07-18 17:42:59',
			'updated_at'=>'2020-07-18 17:42:59',
			'user_id'=>10,
			'purchase_by'=>326,
			'sales_id'=>97,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>291,
			'created_at'=>'2020-07-18 18:44:52',
			'updated_at'=>'2020-07-18 18:44:52',
			'user_id'=>69,
			'purchase_by'=>327,
			'sales_id'=>97,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>292,
			'created_at'=>'2020-07-18 19:01:07',
			'updated_at'=>'2020-07-18 19:01:07',
			'user_id'=>10,
			'purchase_by'=>328,
			'sales_id'=>98,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>293,
			'created_at'=>'2020-07-18 19:21:02',
			'updated_at'=>'2020-07-18 19:21:02',
			'user_id'=>99,
			'purchase_by'=>329,
			'sales_id'=>98,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>294,
			'created_at'=>'2020-07-18 20:19:29',
			'updated_at'=>'2020-07-18 20:19:29',
			'user_id'=>287,
			'purchase_by'=>330,
			'sales_id'=>98,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>295,
			'created_at'=>'2020-07-18 22:39:36',
			'updated_at'=>'2020-07-18 22:39:36',
			'user_id'=>268,
			'purchase_by'=>331,
			'sales_id'=>99,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>296,
			'created_at'=>'2020-07-18 23:25:31',
			'updated_at'=>'2020-07-18 23:25:31',
			'user_id'=>222,
			'purchase_by'=>332,
			'sales_id'=>99,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>297,
			'created_at'=>'2020-07-19 01:43:16',
			'updated_at'=>'2020-07-19 01:43:16',
			'user_id'=>118,
			'purchase_by'=>333,
			'sales_id'=>99,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>298,
			'created_at'=>'2020-07-19 03:34:08',
			'updated_at'=>'2020-07-19 03:34:08',
			'user_id'=>126,
			'purchase_by'=>334,
			'sales_id'=>100,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>299,
			'created_at'=>'2020-07-19 03:41:39',
			'updated_at'=>'2020-07-19 03:41:39',
			'user_id'=>126,
			'purchase_by'=>335,
			'sales_id'=>100,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>300,
			'created_at'=>'2020-07-19 12:44:43',
			'updated_at'=>'2020-07-19 12:44:43',
			'user_id'=>10,
			'purchase_by'=>336,
			'sales_id'=>100,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>301,
			'created_at'=>'2020-07-19 17:40:18',
			'updated_at'=>'2020-07-19 17:40:18',
			'user_id'=>290,
			'purchase_by'=>337,
			'sales_id'=>101,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>302,
			'created_at'=>'2020-07-19 17:49:03',
			'updated_at'=>'2020-07-19 17:49:03',
			'user_id'=>286,
			'purchase_by'=>338,
			'sales_id'=>101,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>303,
			'created_at'=>'2020-07-19 18:58:45',
			'updated_at'=>'2020-07-19 18:58:45',
			'user_id'=>10,
			'purchase_by'=>339,
			'sales_id'=>101,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>304,
			'created_at'=>'2020-07-19 18:59:39',
			'updated_at'=>'2020-07-19 18:59:39',
			'user_id'=>137,
			'purchase_by'=>340,
			'sales_id'=>102,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>305,
			'created_at'=>'2020-07-19 19:13:11',
			'updated_at'=>'2020-07-19 19:13:11',
			'user_id'=>290,
			'purchase_by'=>341,
			'sales_id'=>102,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>306,
			'created_at'=>'2020-07-19 19:17:56',
			'updated_at'=>'2020-07-19 19:17:56',
			'user_id'=>279,
			'purchase_by'=>342,
			'sales_id'=>102,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>307,
			'created_at'=>'2020-07-19 19:23:49',
			'updated_at'=>'2020-07-19 19:23:49',
			'user_id'=>209,
			'purchase_by'=>343,
			'sales_id'=>103,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>308,
			'created_at'=>'2020-07-20 00:26:17',
			'updated_at'=>'2020-07-20 00:26:17',
			'user_id'=>109,
			'purchase_by'=>344,
			'sales_id'=>103,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>309,
			'created_at'=>'2020-07-20 00:52:44',
			'updated_at'=>'2020-07-20 00:52:44',
			'user_id'=>58,
			'purchase_by'=>345,
			'sales_id'=>103,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>310,
			'created_at'=>'2020-07-20 01:20:50',
			'updated_at'=>'2020-07-20 01:20:50',
			'user_id'=>88,
			'purchase_by'=>346,
			'sales_id'=>104,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>311,
			'created_at'=>'2020-07-20 12:23:48',
			'updated_at'=>'2020-07-20 12:23:48',
			'user_id'=>1,
			'purchase_by'=>73,
			'sales_id'=>104,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>312,
			'created_at'=>'2020-07-20 18:49:50',
			'updated_at'=>'2020-07-20 18:49:50',
			'user_id'=>24,
			'purchase_by'=>347,
			'sales_id'=>104,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>313,
			'created_at'=>'2020-07-20 19:07:21',
			'updated_at'=>'2020-07-20 19:07:21',
			'user_id'=>28,
			'purchase_by'=>348,
			'sales_id'=>105,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>314,
			'created_at'=>'2020-07-20 22:41:32',
			'updated_at'=>'2020-07-20 22:41:32',
			'user_id'=>226,
			'purchase_by'=>349,
			'sales_id'=>105,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>315,
			'created_at'=>'2020-07-20 22:45:57',
			'updated_at'=>'2020-07-20 22:45:57',
			'user_id'=>12,
			'purchase_by'=>152,
			'sales_id'=>105,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>316,
			'created_at'=>'2020-07-20 22:47:21',
			'updated_at'=>'2020-07-20 22:47:21',
			'user_id'=>15,
			'purchase_by'=>169,
			'sales_id'=>106,
			'ebook'=>1
			] );
						
			Purchase::create( [
			'id'=>317,
			'created_at'=>'2020-07-20 22:48:09',
			'updated_at'=>'2020-07-20 22:48:09',
			'user_id'=>1,
			'purchase_by'=>281,
			'sales_id'=>106,
			'ebook'=>1
			] );
			
     }
}
