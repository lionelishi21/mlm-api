<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

    	DB::table('users')->truncate();
        User::create( [
        'id'=>1,
        'first_name'=>'Majestic',
        'last_name'=>'Cares',
        'company'=>'Majestic Cares INTL LLC',
        'username'=>NULL,
        'phone_number'=>NULL,
        'role_id'=>'1',
        'email'=>'admin@majesticares.com',
        'email_verified_at'=>NULL,
        'password'=>'$2y$10$Cw9THriiTQjVPhOKO8UyjenLbBEvLRS/RNJg6w3Cmup3U1c08T.7O',
        'remember_token'=>NULL,
        'created_at'=>NULL,
        'updated_at'=>'2020-07-07 20:13:55'
        ] );
            
        User::create( [
        'id'=>2,
        'first_name'=>'Robert M',
        'last_name'=>'Donald',
        'company'=>NULL,
        'username'=>'bobd627',
        'phone_number'=>'(917) 279-2669',
        'role_id'=>'2',
        'email'=>'bobd627@gmail.com',
        'email_verified_at'=>NULL,
        'password'=>'$2y$10$arAItOng1cbMQBwqroCrQOoFUFawx9sE/kXZuciY5fid5rY6ZYjQq',
        'remember_token'=>NULL,
        'created_at'=>'2020-07-06 20:30:52',
        'updated_at'=>'2020-07-10 10:02:26'
        ] );
            
        User::create( [
        'id'=>3,
        'first_name'=>'James F',
        'last_name'=>'Miller',
        'company'=>NULL,
        'username'=>'jimmiller',
        'phone_number'=>'(951) 657-5887',
        'role_id'=>'2',
        'email'=>'jimmiller34@yahoo.com',
        'email_verified_at'=>NULL,
        'password'=>'$2y$10$GxN224pLwZiz9gg8NDDVtes7USqHwv1IiMWWXdGmIyFLNsdmCpaFS',
        'remember_token'=>NULL,
        'created_at'=>'2020-07-06 20:44:22',
        'updated_at'=>'2020-07-07 20:47:15'
        ] );
            
    User::create( [
    'id'=>4,
    'first_name'=>'Larron',
    'last_name'=>'Campbell',
    'company'=>NULL,
    'username'=>'care4u',
    'phone_number'=>'(951) 240-2432',
    'role_id'=>'2',
    'email'=>'larron@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$1b5wKFw.0nhumqOPN8UNHOkimTJ9Bjd2yt9PXQvZXEsxD0NhMG0bS',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-06 20:53:18',
    'updated_at'=>'2020-07-09 20:53:09'
    ] );
                
    User::create( [
    'id'=>5,
    'first_name'=>'Rosalinda',
    'last_name'=>'Burton',
    'company'=>NULL,
    'username'=>'shine4us',
    'phone_number'=>'(801) 471-5659',
    'role_id'=>'2',
    'email'=>'thymetrees@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$Qgz08NI8fk48Lwd17Sse5.kUc/Y0ZhyYNr2WQgKZX5cUrlDuKSua.',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-06 20:59:11',
    'updated_at'=>'2020-07-07 20:45:57'
    ] );
                
    User::create( [
    'id'=>6,
    'first_name'=>'Lionel',
    'last_name'=>'Francis',
    'company'=>NULL,
    'username'=>'lionelishi',
    'phone_number'=>'(876) 513-6710',
    'role_id'=>'2',
    'email'=>'lionelishmael@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$Hw0CcOQA3lk34HLNgRFy7.eUC5jfaELy4EiCTXAk2bgbhXTW7MJ4m',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-06 21:54:24',
    'updated_at'=>'2020-07-06 21:54:24'
    ] );
                
    User::create( [
    'id'=>7,
    'first_name'=>'RHONDA',
    'last_name'=>'NEAL',
    'company'=>NULL,
    'username'=>'RJONES1654',
    'phone_number'=>'(203) 797-1403',
    'role_id'=>'2',
    'email'=>'rneal1654@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$viZv9kL9XDol4KKX.TYJtOK.RVzUpCwbhpl6wBHnDTsCEfqEqUleG',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-07 02:52:25',
    'updated_at'=>'2020-07-07 02:52:25'
    ] );
                
    User::create( [
    'id'=>8,
    'first_name'=>'Mary',
    'last_name'=>'Gathege',
    'company'=>NULL,
    'username'=>'myincomeonline',
    'phone_number'=>'0721 329441',
    'role_id'=>'2',
    'email'=>'njeri1738@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$HUx2vYS1mKkj3hnUkEUo6OIVDqanQF22A0Ng9w1vAnPO0hPkAqAYW',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-07 04:30:18',
    'updated_at'=>'2020-07-10 06:21:29'
    ] );
                
    User::create( [
    'id'=>9,
    'first_name'=>'Ryan',
    'last_name'=>'Kelly Rathbun',
    'company'=>NULL,
    'username'=>'ryankelly3',
    'phone_number'=>'(831) 915-5089',
    'role_id'=>'2',
    'email'=>'compasstrust@aol.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$nq6vcv1AmcznT/iaD7WvXerkww6SIL7vo520/9vtmnavAanoxVDDm',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-07 06:38:27',
    'updated_at'=>'2020-07-07 06:38:27'
    ] );
                
    User::create( [
    'id'=>10,
    'first_name'=>'Angela',
    'last_name'=>'Holmes',
    'company'=>NULL,
    'username'=>'angela',
    'phone_number'=>'1516321150',
    'role_id'=>'2',
    'email'=>'ultimateincomedaily@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$eOfvVqlQiEV7KK85i8Mg7eSVBy0RWcXsEl1ctodCEclfu8qa5A/y2',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-07 17:44:31',
    'updated_at'=>'2020-07-07 17:57:17'
    ] );
                
    User::create( [
    'id'=>11,
    'first_name'=>'Paul',
    'last_name'=>'Howard',
    'company'=>NULL,
    'username'=>'ocs',
    'phone_number'=>'(801) 792-7839',
    'role_id'=>'2',
    'email'=>'123ocs@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$qF8yc8iiBgUoMY7qNC9.3OfFcSnnkBEX.Q7KwhFRe82t0JqT.nMxq',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-07 18:43:15',
    'updated_at'=>'2020-07-07 22:57:40'
    ] );
                
    User::create( [
    'id'=>12,
    'first_name'=>'Sue',
    'last_name'=>'Johnson',
    'company'=>NULL,
    'username'=>'Coachsue',
    'phone_number'=>'(808) 895-0884',
    'role_id'=>'2',
    'email'=>'coachsue360@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$4hh52W5mhg4mbVlc3AV0yO8iFktw7PMuhzR6Nvh7D37FWltTaTisG',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-07 21:57:39',
    'updated_at'=>'2020-07-07 22:33:14'
    ] );
                
    User::create( [
    'id'=>13,
    'first_name'=>'Errol',
    'last_name'=>'Broderick',
    'company'=>NULL,
    'username'=>'SonofGod',
    'phone_number'=>'(647) 212-0337',
    'role_id'=>'2',
    'email'=>'egbroderick@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$2kMAXLDkneIxFip4mKjHUu4vGvozZrFeQ12B.ehCgAJGU2TIB8Dfu',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-07 22:26:03',
    'updated_at'=>'2020-07-07 22:26:03'
    ] );
                
    User::create( [
    'id'=>14,
    'first_name'=>'John',
    'last_name'=>'Ahmed',
    'company'=>NULL,
    'username'=>'network',
    'phone_number'=>'(281) 846-5050',
    'role_id'=>'2',
    'email'=>'john@dreamstyler.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$7way2X.192SY4BqbAKYTdur3JVaRZRzJnRKBqPVCLdmYam0dTLfNW',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-07 22:46:53',
    'updated_at'=>'2020-07-09 18:25:25'
    ] );
                
    User::create( [
    'id'=>15,
    'first_name'=>'Keith',
    'last_name'=>'Brooks',
    'company'=>NULL,
    'username'=>'keimar',
    'phone_number'=>'(540) 891-8914',
    'role_id'=>'2',
    'email'=>'kebrooksfbva@yahoo.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$jMRTlsvO930esdzMVqPgHOUroVx0U4VHa/Tl5vzY5on//UqsVgidy',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-08 00:21:23',
    'updated_at'=>'2020-07-08 00:21:23'
    ] );
                
    User::create( [
    'id'=>16,
    'first_name'=>'Lawrence',
    'last_name'=>'Law',
    'company'=>NULL,
    'username'=>'AngelPlanet',
    'phone_number'=>'(801) 404-2833',
    'role_id'=>'2',
    'email'=>'iamangelplanet@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$miZIrNusZah2ZC0G2AfWtu6hEp65jl.xxzUcw/NiSSIBjHgp5kG06',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-08 01:24:14',
    'updated_at'=>'2020-07-08 01:27:49'
    ] );
                
    User::create( [
    'id'=>17,
    'first_name'=>'Belinda',
    'last_name'=>'Mcgregor',
    'company'=>NULL,
    'username'=>'shine4me',
    'phone_number'=>'(702) 308-6969',
    'role_id'=>'2',
    'email'=>'belindamcgregor124@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$ZF5Ia.b6nKMYb0lnJYa12OFtM8rLk1TEBlXOE76r39ymMYLhUMEBC',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-08 13:39:11',
    'updated_at'=>'2020-07-08 13:39:11'
    ] );
                
    User::create( [
    'id'=>18,
    'first_name'=>'Myron',
    'last_name'=>'Bennett',
    'company'=>NULL,
    'username'=>'success',
    'phone_number'=>'(385) 329-4378',
    'role_id'=>'2',
    'email'=>'10623865@my.uvu.edu',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$rhPPwTwUL4Sxq/F4t0OG2O2QB9YPmj0fmBqWbthJOwZcp5k5erANa',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-08 14:07:29',
    'updated_at'=>'2020-07-08 14:07:29'
    ] );
                
    User::create( [
    'id'=>19,
    'first_name'=>'Heather',
    'last_name'=>'Taylor',
    'company'=>NULL,
    'username'=>'heirdu',
    'phone_number'=>'(385) 477-8638',
    'role_id'=>'2',
    'email'=>'heirdu@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$NQmnUaswNat8giNMH3DqBuMQzm/WezdEem2r.RSDZyT6Q2SeViW..',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-08 14:39:41',
    'updated_at'=>'2020-07-08 14:39:41'
    ] );
                
    User::create( [
    'id'=>20,
    'first_name'=>'Jan',
    'last_name'=>'Pyne',
    'company'=>NULL,
    'username'=>'newjan0912',
    'phone_number'=>'(801) 669-1368',
    'role_id'=>'2',
    'email'=>'jan.pyne@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$7wNhsYw2Jgf7m2ttqp5Zf.XrF4xLaMxgTTAj9yZyQ30aG8Be1/KcO',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-08 14:43:14',
    'updated_at'=>'2020-07-09 19:02:36'
    ] );
                
    User::create( [
    'id'=>21,
    'first_name'=>'Millford',
    'last_name'=>'Greene',
    'company'=>NULL,
    'username'=>'millfordg',
    'phone_number'=>'(801) 369-9929',
    'role_id'=>'2',
    'email'=>'millfordg@ymail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$DOA/1.Rbrg.zikWSZkUq2uXRC2HmDuVqamMeMQsM9Sa3DCKi9/ULq',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-08 16:24:13',
    'updated_at'=>'2020-07-08 16:24:13'
    ] );
                
    User::create( [
    'id'=>22,
    'first_name'=>'Megan',
    'last_name'=>'Campbell',
    'company'=>NULL,
    'username'=>'mmcampbell2020',
    'phone_number'=>'(360) 995-9050',
    'role_id'=>'2',
    'email'=>'megan.campbell01@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$Qs8D0ZGw7lf7qIIe5Y7OOOv4/9ct9qur9olu9iGOppkrzIpUqmiH.',
    'remember_token'=>'DYFWosgzEFTQgLVSL6t5g9PqrbNe4lGoMeoQMV34ALL0teXBLMeqKQiIGcwL',
    'created_at'=>'2020-07-08 17:53:28',
    'updated_at'=>'2020-07-11 22:52:21'
    ] );
                
    User::create( [
    'id'=>23,
    'first_name'=>'Harold',
    'last_name'=>'Wilson',
    'company'=>NULL,
    'username'=>'Mostnoble',
    'phone_number'=>'(330) 937-6201',
    'role_id'=>'2',
    'email'=>'mostnoble7777@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$SrvSRyBZmcTLd8car.Qk3.xw/nOKl4/sOCrmZgHYyLmPM/y79H5si',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-08 18:24:03',
    'updated_at'=>'2020-07-08 18:24:03'
    ] );
                
    User::create( [
    'id'=>24,
    'first_name'=>'Louis',
    'last_name'=>'Welch',
    'company'=>NULL,
    'username'=>'ctrcowboy',
    'phone_number'=>'(801) 671-2050',
    'role_id'=>'2',
    'email'=>'ctrcowboy@me.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$sgFbCzM60A5sWscg3djRLu87iUwBIRQ00rpM0cvxH35ZALjKFfdNO',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-08 18:32:20',
    'updated_at'=>'2020-07-08 18:32:20'
    ] );
                
    User::create( [
    'id'=>25,
    'first_name'=>'Shirley',
    'last_name'=>'Mahana',
    'company'=>NULL,
    'username'=>'dreams4us',
    'phone_number'=>'(801) 836-8495',
    'role_id'=>'2',
    'email'=>'enochj59@comcast.net',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$DVN7dnAz4.EEX1itwt5NROx.fHNxFrrtA.iShuVirrEDTsVbUTuyi',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-08 21:34:18',
    'updated_at'=>'2020-07-08 21:34:18'
    ] );
                
    User::create( [
    'id'=>26,
    'first_name'=>'Marshall',
    'last_name'=>'Lefford',
    'company'=>NULL,
    'username'=>'marshman1956',
    'phone_number'=>'(720) 732-6473',
    'role_id'=>'2',
    'email'=>'marshman@cheerful.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$z0a8Eg1CQ5hIaliZim4eEevz2Krwf5iRbakUX5Sfw6dIu/XiMaGRi',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 02:07:08',
    'updated_at'=>'2020-07-09 13:58:27'
    ] );
                
    User::create( [
    'id'=>27,
    'first_name'=>'Carla',
    'last_name'=>'Craner',
    'company'=>NULL,
    'username'=>'Andrea1985',
    'phone_number'=>'(801) 592-9670',
    'role_id'=>'2',
    'email'=>'carlacraner@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$H.mALyO6PfzHGRaKl6iBtOkSM./mxdtzEgH0MDui7C1Ak08xmAuSu',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 02:36:29',
    'updated_at'=>'2020-07-09 17:43:43'
    ] );
                
    User::create( [
    'id'=>28,
    'first_name'=>'BottomLine',
    'last_name'=>'Management LLC',
    'company'=>NULL,
    'username'=>'blmllc',
    'phone_number'=>'(307) 828-1184',
    'role_id'=>'2',
    'email'=>'blmllcsv@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$9Fr03oBN3byfFmt2XRs03e/6YJ9sWPhDPYcJyd5DRHPBeVCR59c.a',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 14:39:55',
    'updated_at'=>'2020-07-09 14:42:41'
    ] );
                
    User::create( [
    'id'=>29,
    'first_name'=>'Allison',
    'last_name'=>'Brown',
    'company'=>NULL,
    'username'=>'Babylon20',
    'phone_number'=>'(775) 482-4086',
    'role_id'=>'2',
    'email'=>'alliraeb@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$1cC4lFO4twIRsAFvCR4NQ.TAZBTYR.QzryeW8hTa33BemG9Nk8ckS',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 15:32:41',
    'updated_at'=>'2020-07-09 15:34:16'
    ] );
                
    User::create( [
    'id'=>30,
    'first_name'=>'CAROL',
    'last_name'=>'CAMARENA',
    'company'=>NULL,
    'username'=>'kattreile',
    'phone_number'=>'1 (801) 604-0319',
    'role_id'=>'2',
    'email'=>'kattreile3@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$9fEwSyxv/GE0l98O1e5xZ.I7wtnsTECG7YmP12LpkQelkaxbuA2Re',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 16:00:49',
    'updated_at'=>'2020-07-09 16:00:49'
    ] );
                
    User::create( [
    'id'=>31,
    'first_name'=>'Diane',
    'last_name'=>'Mejia',
    'company'=>NULL,
    'username'=>'Dmejia',
    'phone_number'=>'80182222758',
    'role_id'=>'2',
    'email'=>'dianebmejia2@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$tewEyuRpSuQqfZ8esAZEau52hynY/yNx0y7tOs3F/CiQ3.K3uoWV2',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 16:12:19',
    'updated_at'=>'2020-07-09 16:12:19'
    ] );
                
    User::create( [
    'id'=>32,
    'first_name'=>'Lawrence M',
    'last_name'=>'Law',
    'company'=>NULL,
    'username'=>'VantageCA',
    'phone_number'=>'(801) 769-9443',
    'role_id'=>'2',
    'email'=>'lawrence@vantageca.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$qmLVV7bxDOPtQauOVdUhmug9YPPnp32zwWMT5NgFi3z.zA.Wy97Z2',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 16:24:09',
    'updated_at'=>'2020-07-09 16:36:46'
    ] );
                
    User::create( [
    'id'=>33,
    'first_name'=>'Sherry',
    'last_name'=>'Belyn',
    'company'=>NULL,
    'username'=>'sherrbell',
    'phone_number'=>'(385) 314-5148',
    'role_id'=>'2',
    'email'=>'sherrybelyn@yahoo.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$X9p63Nmt9Jdmy4djmIwwGew8mMBcCJ4n3L1Nycj1oZSlnA8SayfqC',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 16:25:13',
    'updated_at'=>'2020-07-09 16:25:13'
    ] );
                
    User::create( [
    'id'=>34,
    'first_name'=>'Lloyd',
    'last_name'=>'Freeman',
    'company'=>NULL,
    'username'=>'northstar20',
    'phone_number'=>'(919) 880-8003',
    'role_id'=>'2',
    'email'=>'nstarcorp@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$odVYPzaP.BHy/Mz1hHaWOeWStqQXVoPjCZAdhv.u1/86VC5Qnpszm',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 16:25:29',
    'updated_at'=>'2020-07-09 16:27:08'
    ] );
                
    User::create( [
    'id'=>35,
    'first_name'=>'Janet',
    'last_name'=>'Vette',
    'company'=>NULL,
    'username'=>'Janet',
    'phone_number'=>'(928) 202-1910',
    'role_id'=>'2',
    'email'=>'22janv@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$6hoXLsocWOGxXvUiD7.v3Ovh1KivT0URYEOKsHFkBfJa0n5/Ka5b2',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 16:34:00',
    'updated_at'=>'2020-07-09 17:00:46'
    ] );
                
    User::create( [
    'id'=>36,
    'first_name'=>'Randall',
    'last_name'=>'Law',
    'company'=>NULL,
    'username'=>'Area2045A!',
    'phone_number'=>'(915) 253-7776',
    'role_id'=>'2',
    'email'=>'randalllaw2000@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$2U3K9yHjcTQ5i.N8lFfEmegY9gTAzaEKCRNGR6kPQGradWeXgWLVO',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 16:39:50',
    'updated_at'=>'2020-07-09 16:39:50'
    ] );
                
    User::create( [
    'id'=>37,
    'first_name'=>'William',
    'last_name'=>'Gallant',
    'company'=>NULL,
    'username'=>'Liam',
    'phone_number'=>'(818) 810-8766',
    'role_id'=>'2',
    'email'=>'liamrussell104@yahoo.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$x7bgz/t0clafjm3wLRxP7uvLtdTPskvYVwzF.IHmjyMFKNHJZn.Ki',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 16:43:24',
    'updated_at'=>'2020-07-09 18:38:44'
    ] );
                
    User::create( [
    'id'=>38,
    'first_name'=>'William',
    'last_name'=>'Dowdall',
    'company'=>NULL,
    'username'=>'betterbuyersclub',
    'phone_number'=>'(760) 219-9106',
    'role_id'=>'2',
    'email'=>'billdowdall1934@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$zLMHXuIe4jdC99.XdqdUYuyW4w7nStKvkZ7vGB6jPC2JpoqYev.zi',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 16:53:33',
    'updated_at'=>'2020-07-09 16:53:33'
    ] );
                
    User::create( [
    'id'=>39,
    'first_name'=>'Kiana',
    'last_name'=>'Ginn',
    'company'=>NULL,
    'username'=>'Kayrose',
    'phone_number'=>'(951) 858-1045',
    'role_id'=>'2',
    'email'=>'kiana.rose31@icloud.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$qi0RmY2GapX.cnX1iX.q.e2rla4OIfZMGWWLgabefK.qLAYZXodNu',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 16:56:17',
    'updated_at'=>'2020-07-09 16:56:17'
    ] );
                
    User::create( [
    'id'=>40,
    'first_name'=>'Linda',
    'last_name'=>'Jones',
    'company'=>NULL,
    'username'=>'lkjones',
    'phone_number'=>'(928) 246-7835',
    'role_id'=>'2',
    'email'=>'linda@lindakjones.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$PqKRdGg2Jfam7p5meoyZ.eNSG.QUo0IIYFDDwBhICA73PKqAjQJZe',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 16:59:28',
    'updated_at'=>'2020-07-09 17:05:39'
    ] );
                
    User::create( [
    'id'=>41,
    'first_name'=>'Jasmine',
    'last_name'=>'Roper',
    'company'=>NULL,
    'username'=>'Jazze1c',
    'phone_number'=>'(330) 554-0857',
    'role_id'=>'2',
    'email'=>'jazze1c25@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$RsDnGkUjfmVJ1hPQbCbSOuN8zcS8Hhz7N/Fe7b02rTPxxlW5kLIje',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 17:01:52',
    'updated_at'=>'2020-07-09 17:01:52'
    ] );
                
    User::create( [
    'id'=>42,
    'first_name'=>'Brittany',
    'last_name'=>'Gunnell',
    'company'=>NULL,
    'username'=>'Teamarley',
    'phone_number'=>'(951) 616-4477',
    'role_id'=>'2',
    'email'=>'mimiginn@yahoo.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$jrtEx30B.s.dIdWcCsoFj.Ub/wlgqDUzeET7FiuLcJKqiZMIEr16.',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 17:07:39',
    'updated_at'=>'2020-07-09 17:07:39'
    ] );
                
    User::create( [
    'id'=>43,
    'first_name'=>'Porscha',
    'last_name'=>'Brown',
    'company'=>NULL,
    'username'=>'Oniyasmom',
    'phone_number'=>'(330) 634-3802',
    'role_id'=>'2',
    'email'=>'Oniyamae1003@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$e6HbfbtFKFoppbkPI.af8.iAY5b9PQOtaiiVRx2G3t62ywi2w5/pu',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 17:16:58',
    'updated_at'=>'2020-07-09 17:16:58'
    ] );
                
    User::create( [
    'id'=>44,
    'first_name'=>'Becky',
    'last_name'=>'Howard',
    'company'=>NULL,
    'username'=>'beckycares',
    'phone_number'=>'(801) 548-8323',
    'role_id'=>'2',
    'email'=>'rhoward295@googlemail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$aujR35jqLvuGi0IHaTSOW.1KBgn4d4042KuXtIpH6pu0gBH0VbU0O',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 17:22:48',
    'updated_at'=>'2020-07-09 17:22:48'
    ] );
                
    User::create( [
    'id'=>45,
    'first_name'=>'Ramon',
    'last_name'=>'Rangel',
    'company'=>NULL,
    'username'=>'rrazor',
    'phone_number'=>'(801) 691-9684',
    'role_id'=>'2',
    'email'=>'rrazor86@yahoo.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$ce0W7NnunPK7RiSG4aKIyeo29m0DNv9TF2/VDY/L9Tvhw5sqq7pv2',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 17:23:52',
    'updated_at'=>'2020-07-10 04:01:25'
    ] );
                
    User::create( [
    'id'=>46,
    'first_name'=>'Gary',
    'last_name'=>'Smith',
    'company'=>NULL,
    'username'=>'crowbar',
    'phone_number'=>'(234) 525-9709',
    'role_id'=>'2',
    'email'=>'GlSmith51576@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$d1h3fbnmTOElbGKliAoV5OxAy5xpCdolIsaz.29GTfLfiSZ9Au29S',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 17:27:07',
    'updated_at'=>'2020-07-09 17:27:07'
    ] );
                
    User::create( [
    'id'=>47,
    'first_name'=>'Ashley',
    'last_name'=>'Broadbent',
    'company'=>NULL,
    'username'=>'Aahhaa',
    'phone_number'=>'(801) 641-8786',
    'role_id'=>'2',
    'email'=>'aahhaa.ashley@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$NOqagDYVEqmItfza8.Y/1OVPp9VeQ3T/G6qk.UJLfs0hkPNQCo/SO',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 17:28:26',
    'updated_at'=>'2020-07-09 17:28:26'
    ] );
                
    User::create( [
    'id'=>48,
    'first_name'=>'Shannon',
    'last_name'=>'Wilson',
    'company'=>NULL,
    'username'=>'shnnipoo',
    'phone_number'=>'(330) 861-6677',
    'role_id'=>'2',
    'email'=>'Smwilsonlpn@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$8llnjanQKvhWuTjSCOB04u.8ndJ7Gt1jAk57RC05hWDb5322/W/9O',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 17:33:47',
    'updated_at'=>'2020-07-09 17:33:47'
    ] );
                
    User::create( [
    'id'=>49,
    'first_name'=>'hallie',
    'last_name'=>'craner',
    'company'=>NULL,
    'username'=>'louie05',
    'phone_number'=>'(385) 230-2240',
    'role_id'=>'2',
    'email'=>'1halliecraner@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$JnXaJP/YmPJB.zYeMbVeJOQUS5C0.iBZwhJ06Z7CAJmG26trp8c/2',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 17:36:17',
    'updated_at'=>'2020-07-09 17:36:17'
    ] );
                
    User::create( [
    'id'=>50,
    'first_name'=>'Ann',
    'last_name'=>'Daniel',
    'company'=>NULL,
    'username'=>'Anndaniel',
    'phone_number'=>'(434) 792-6780',
    'role_id'=>'2',
    'email'=>'ic3xyzlkj14@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$1ib3fJyqflzVBTR.1jiIsuFf4QEvxO6irq8VtSiM1OF/ZcLpVa0Ry',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 17:37:07',
    'updated_at'=>'2020-07-09 17:45:51'
    ] );
                
    User::create( [
    'id'=>51,
    'first_name'=>'David',
    'last_name'=>'Erickson',
    'company'=>NULL,
    'username'=>'drickson',
    'phone_number'=>'(480) 744-5565',
    'role_id'=>'2',
    'email'=>'david@dwmarketing.us',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$eNBrEUsDjrvZFMtmm2MHneqaZd1v0D9BR2GAwjSHEJkmR4nNnt/J2',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 17:54:48',
    'updated_at'=>'2020-07-09 18:31:59'
    ] );
                
    User::create( [
    'id'=>52,
    'first_name'=>'Luke',
    'last_name'=>'Smith',
    'company'=>NULL,
    'username'=>'luke',
    'phone_number'=>'07792 023363',
    'role_id'=>'2',
    'email'=>'rgmarketing6@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$gw3oliAm23nJ5D2IdnV/Y.uG.5TUmWdKToxs8qbYVa4rkSpWt8dbO',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 18:08:47',
    'updated_at'=>'2020-07-09 18:10:50'
    ] );
                
    User::create( [
    'id'=>53,
    'first_name'=>'Freddie',
    'last_name'=>'Heise',
    'company'=>NULL,
    'username'=>'fheise',
    'phone_number'=>'(870) 273-6888',
    'role_id'=>'2',
    'email'=>'fhheise@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$fQBbzetvsNMs2aNPXSm6VO.B3L4x3reCY9QW8m4T0Mw/wN8pf1ctu',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 18:12:17',
    'updated_at'=>'2020-07-09 18:19:42'
    ] );
                
    User::create( [
    'id'=>54,
    'first_name'=>'Sterling',
    'last_name'=>'Stringer',
    'company'=>NULL,
    'username'=>'beblessed',
    'phone_number'=>'(562) 822-0979',
    'role_id'=>'2',
    'email'=>'sterling.stringer@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$f6ZkSJFTHJrFccRAW.WBTudeBJkVkfqEnP9VgUzhvfDfuWYMWijEW',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 18:18:23',
    'updated_at'=>'2020-07-09 18:18:23'
    ] );
                
    User::create( [
    'id'=>55,
    'first_name'=>'Louise',
    'last_name'=>'Baker',
    'company'=>NULL,
    'username'=>'louisebaler',
    'phone_number'=>'(434) 793-6207',
    'role_id'=>'2',
    'email'=>'louise99plus@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$XrsRKc9f9wK6ftB9kJjhmOa.yzNn4sEduvb0JQ4vmIbukIyb6IMjS',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 18:31:59',
    'updated_at'=>'2020-07-09 18:35:43'
    ] );
                
    User::create( [
    'id'=>56,
    'first_name'=>'Lee',
    'last_name'=>'Aiken',
    'company'=>NULL,
    'username'=>'hardrock',
    'phone_number'=>'(404) 438-7154',
    'role_id'=>'2',
    'email'=>'winningwithlee@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$apfApTeYWBAhsK.gcX3Qp.I8Uo5MUeB1gbhHhjtiAb1wxiOTgaewe',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 18:33:53',
    'updated_at'=>'2020-07-09 18:47:21'
    ] );
                
    User::create( [
    'id'=>57,
    'first_name'=>'Christopher',
    'last_name'=>'Morris',
    'company'=>NULL,
    'username'=>'cmorris',
    'phone_number'=>'(256) 595-9115',
    'role_id'=>'2',
    'email'=>'cmorris412@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$4Y28.gge3G4Lio0nk1yuCuOi5ACR/m4MzfunMy9.KG33KqnNeKaMS',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 18:35:13',
    'updated_at'=>'2020-07-09 18:39:21'
    ] );
                
    User::create( [
    'id'=>58,
    'first_name'=>'walter',
    'last_name'=>'white',
    'company'=>NULL,
    'username'=>'walter',
    'phone_number'=>'(903) 736-3687',
    'role_id'=>'2',
    'email'=>'walter@transitfuelboost.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$FsGKTaiXVU/F8dzj43t3GueV3iqooATDojAFLEuwKFD8RfdkgYVtu',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 18:45:41',
    'updated_at'=>'2020-07-09 18:50:28'
    ] );
                
    User::create( [
    'id'=>59,
    'first_name'=>'Derrick',
    'last_name'=>'Wade',
    'company'=>NULL,
    'username'=>'dcw2',
    'phone_number'=>'(478) 738-1569',
    'role_id'=>'2',
    'email'=>'charlie706@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$xpA2iwpaNu3PRGn0CHtleu.kIRqN3u2PC6uVbZ8j9J5YNaOIPbM0a',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 18:46:13',
    'updated_at'=>'2020-07-09 18:48:02'
    ] );
                
    User::create( [
    'id'=>60,
    'first_name'=>'Vladislav',
    'last_name'=>'Licko',
    'company'=>NULL,
    'username'=>'lickov',
    'phone_number'=>'(347) 563-2543',
    'role_id'=>'2',
    'email'=>'vlprofits12@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$Gai0PDh2UZHHmjkDYm.Bau37yn8X7fEC2YLF2DBBu1axCoXkhcViC',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 18:52:27',
    'updated_at'=>'2020-07-09 19:31:29'
    ] );
                
    User::create( [
    'id'=>61,
    'first_name'=>'Bevonne',
    'last_name'=>'Crookston',
    'company'=>NULL,
    'username'=>'bevonne',
    'phone_number'=>'(801) 792-0525',
    'role_id'=>'2',
    'email'=>'bevonne25@yahoo.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$bfTaux6QbrxjiToVWYNF3ukPxt4NDpJBQ5j2rZ.dZcPlzmR6Q4/3m',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 18:53:11',
    'updated_at'=>'2020-07-09 18:53:11'
    ] );
                
    User::create( [
    'id'=>62,
    'first_name'=>'Brewer',
    'last_name'=>'Gray Jr',
    'company'=>NULL,
    'username'=>'Eagle1428',
    'phone_number'=>'(443) 995-7231',
    'role_id'=>'2',
    'email'=>'brewergray@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$1K3c2G2iaM7lPB3XoSOLlO4mYQN7woqIxdp4JuDL3quTDnONnZ/ty',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 19:01:41',
    'updated_at'=>'2020-07-10 17:03:34'
    ] );
                
    User::create( [
    'id'=>63,
    'first_name'=>'Kalee',
    'last_name'=>'Ginn',
    'company'=>NULL,
    'username'=>'krebecca',
    'phone_number'=>'(385) 296-8668',
    'role_id'=>'2',
    'email'=>'1982.kblack@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$Wzc/0biqNn8vQsHOf4uUn.raX6SnMr.zCCwEWDyggLRnDwTLZ2dDO',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 19:03:42',
    'updated_at'=>'2020-07-09 19:03:42'
    ] );
                
    User::create( [
    'id'=>64,
    'first_name'=>'Carolyn',
    'last_name'=>'Singer',
    'company'=>NULL,
    'username'=>'PioneerCS',
    'phone_number'=>'(614) 478-1069',
    'role_id'=>'2',
    'email'=>'carolynsinger28@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$OlgSZnHt3/fWzV/KvJsiueGajIpO81e314vNUXn4MpUThQ4/qDe5i',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 19:10:29',
    'updated_at'=>'2020-07-09 19:18:37'
    ] );
                
    User::create( [
    'id'=>65,
    'first_name'=>'Rose',
    'last_name'=>'Stringer',
    'company'=>NULL,
    'username'=>'rsblessed',
    'phone_number'=>'(562) 500-1359',
    'role_id'=>'2',
    'email'=>'bwealthy@live.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$DbhD5FknUWZlFxn/ieVJ5uG1NYU2jjfmRrM1XQa3OQ8xOu3YJEWFe',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 19:12:07',
    'updated_at'=>'2020-07-09 19:12:07'
    ] );
                
    User::create( [
    'id'=>66,
    'first_name'=>'Gary',
    'last_name'=>'Berriochoa',
    'company'=>NULL,
    'username'=>'garyB',
    'phone_number'=>'(817) 825-1354',
    'role_id'=>'2',
    'email'=>'garybins@yahoo.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$LN.TDngVWCuUEkQq3I4H2.hvZ45lrhmqiVWAkvCwWXOS9s9wgINLu',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 19:19:07',
    'updated_at'=>'2020-07-09 19:19:07'
    ] );
                
    User::create( [
    'id'=>67,
    'first_name'=>'Kathleen',
    'last_name'=>'Ayers',
    'company'=>NULL,
    'username'=>'Prosperity7',
    'phone_number'=>'(817) 818-8494',
    'role_id'=>'2',
    'email'=>'kayers643@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$ZNo3BiIWD2l9tqvFRLcWLOEHqvgVzaMgtll.PLpecoKPj0D4mxPPq',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 19:22:15',
    'updated_at'=>'2020-07-09 19:42:21'
    ] );
                
    User::create( [
    'id'=>68,
    'first_name'=>'Mona',
    'last_name'=>'White',
    'company'=>NULL,
    'username'=>'Mona',
    'phone_number'=>'(903) 736-4120',
    'role_id'=>'2',
    'email'=>'white.walter1@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$cs0gPK2p.HU68/6wcvVsRe/2hZQMUuIqGN.elpwAvOna9rnEPwlUi',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 19:37:24',
    'updated_at'=>'2020-07-09 19:40:24'
    ] );
                
    User::create( [
    'id'=>69,
    'first_name'=>'JoAnn',
    'last_name'=>'Owens',
    'company'=>NULL,
    'username'=>'jowens',
    'phone_number'=>'(586) 872-6079',
    'role_id'=>'2',
    'email'=>'jo16105@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$99PnZl89yfKcYFugczl2leMbe0jXaXrDNMMy/MFn1zIcerCtc1zUq',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 19:57:44',
    'updated_at'=>'2020-07-09 20:05:54'
    ] );
                
    User::create( [
    'id'=>70,
    'first_name'=>'Michasel',
    'last_name'=>'Chase',
    'company'=>NULL,
    'username'=>'pa.mike05',
    'phone_number'=>'(801) 234-9894',
    'role_id'=>'2',
    'email'=>'mrcchase05@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$7fQgMOtksO08lyt8LajRFuhaI.7jKono7EpAzjxzt72j5Yl2bAQ2O',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 20:09:14',
    'updated_at'=>'2020-07-09 20:17:54'
    ] );
                
    User::create( [
    'id'=>71,
    'first_name'=>'jack',
    'last_name'=>'phillips',
    'company'=>NULL,
    'username'=>'jackphillips',
    'phone_number'=>'1 (541) 258-3024',
    'role_id'=>'2',
    'email'=>'jackphillips66@yahoo.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$L1h6i4ckQ0piIWNDoIVb4uC/9wY1HOdXbpGoXYiaaHbJ7fMlumbke',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 20:48:21',
    'updated_at'=>'2020-07-09 20:48:21'
    ] );
                
    User::create( [
    'id'=>72,
    'first_name'=>'Grace',
    'last_name'=>'Waugh',
    'company'=>NULL,
    'username'=>'Gracie',
    'phone_number'=>'(623) 377-5818',
    'role_id'=>'2',
    'email'=>'grace_waugh03@yahoo.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$pRVCzz19S0NWBDajiwD2FesctVvBeL9PvAsbt/NGFvyaJqwhBlA8i',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 21:21:00',
    'updated_at'=>'2020-07-09 21:47:22'
    ] );
                
    User::create( [
    'id'=>73,
    'first_name'=>'Lori',
    'last_name'=>'Bryan',
    'company'=>NULL,
    'username'=>'Lori',
    'phone_number'=>'(505) 832-1110',
    'role_id'=>'2',
    'email'=>'loribryan6@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$T9Coqgk3/.EzQtkX9W6vWe06PlLBdAMv6tihYkeNZ9CBTrlG6DLNu',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 21:49:45',
    'updated_at'=>'2020-07-09 21:54:45'
    ] );
                
    User::create( [
    'id'=>74,
    'first_name'=>'Dean',
    'last_name'=>'Sos',
    'company'=>NULL,
    'username'=>'skybux',
    'phone_number'=>'(703) 724-4100',
    'role_id'=>'2',
    'email'=>'smartbux@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$s5QPB5gBMKm3xEdsHk7GKO.1g7U3FOLGb4aJgQVF9s8upOg0XOlVO',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 21:58:20',
    'updated_at'=>'2020-07-09 21:58:20'
    ] );
                
    User::create( [
    'id'=>75,
    'first_name'=>'Linda',
    'last_name'=>'Morison',
    'company'=>NULL,
    'username'=>'lindak',
    'phone_number'=>'(801) 592-1483',
    'role_id'=>'2',
    'email'=>'lindakmo51@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$ibg1Jpeb8sToGp36n9HT3uqRgCm7DBQtyOlkGmiRyTmYKs7PNQacG',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 22:13:19',
    'updated_at'=>'2020-07-09 22:13:19'
    ] );
                
    User::create( [
    'id'=>76,
    'first_name'=>'MitchM',
    'last_name'=>'Withrow',
    'company'=>NULL,
    'username'=>'superman',
    'phone_number'=>'(606) 344-2055',
    'role_id'=>'2',
    'email'=>'superman1362@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$C0IR9j/INWCLEWqjrzPO6ea1UeyywB6hAQodb85YI61zC6lSgjoK.',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 22:13:24',
    'updated_at'=>'2020-07-10 01:57:04'
    ] );
                
    User::create( [
    'id'=>77,
    'first_name'=>'Charles',
    'last_name'=>'Elliott',
    'company'=>NULL,
    'username'=>'charlesrelliott',
    'phone_number'=>'(210) 781-0552',
    'role_id'=>'2',
    'email'=>'charlesrelliott@yahoo.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$vpT7MDXw8.efzFx.6UqG0Od8Nf2lINA0KoNtiZNPs2a5FgYjApJv2',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 22:36:57',
    'updated_at'=>'2020-07-09 23:32:35'
    ] );
                
    User::create( [
    'id'=>78,
    'first_name'=>'Sonji',
    'last_name'=>'Aiken',
    'company'=>NULL,
    'username'=>'honeydiva',
    'phone_number'=>'(404) 817-1168',
    'role_id'=>'2',
    'email'=>'honeydiva63@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$bDNzP.zcAOa9TQfGLZ6eiOgskXBAcZBIxxJu9DIPYLSHgqV9aQxxa',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 22:36:59',
    'updated_at'=>'2020-07-09 22:39:22'
    ] );
                
    User::create( [
    'id'=>79,
    'first_name'=>'Jerry',
    'last_name'=>'Camp',
    'company'=>NULL,
    'username'=>'Smokey39',
    'phone_number'=>'(903) 780-1604',
    'role_id'=>'2',
    'email'=>'jcamp1249@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$0kkk3tFWLnFff9wLf2zVoOiAL0FJeKnoXhc4mUO4n9p9IgGXIEtMu',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 23:44:33',
    'updated_at'=>'2020-07-10 00:03:59'
    ] );
                
    User::create( [
    'id'=>80,
    'first_name'=>'Dee',
    'last_name'=>'Malone',
    'company'=>NULL,
    'username'=>'Dee',
    'phone_number'=>'(530) 513-0220',
    'role_id'=>'2',
    'email'=>'deemparadise@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$dkckIJoWn4fxwk6qqHi1putAa4So.zoG86sXCwJfXOnR5Z1RCHi.i',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-09 23:47:26',
    'updated_at'=>'2020-07-09 23:50:12'
    ] );
                
    User::create( [
    'id'=>81,
    'first_name'=>'Loretta',
    'last_name'=>'Paige',
    'company'=>NULL,
    'username'=>'pailo',
    'phone_number'=>'(510) 575-4905',
    'role_id'=>'2',
    'email'=>'mybizmo48@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$/U.mI6p2BDOPkzTVVceteeW7pUG8sjzTqofRg8GdeATO7AteFtMD2',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-10 00:13:04',
    'updated_at'=>'2020-07-10 00:21:33'
    ] );
                
    User::create( [
    'id'=>82,
    'first_name'=>'Gregory',
    'last_name'=>'Sampson',
    'company'=>NULL,
    'username'=>'steelman5663',
    'phone_number'=>'(443) 477-0566',
    'role_id'=>'2',
    'email'=>'bigsteelerinmd49@comcast.net',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$JD6WKWN1E8oFI6hjG3LJSuoaIqsKGKSjpde8gRQB9AFSzQDmxz/6y',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-10 00:28:45',
    'updated_at'=>'2020-07-10 19:44:23'
    ] );
                
    User::create( [
    'id'=>83,
    'first_name'=>'Ken',
    'last_name'=>'Coates',
    'company'=>NULL,
    'username'=>'Coateslife',
    'phone_number'=>'(914) 803-3813',
    'role_id'=>'2',
    'email'=>'coateslife@yahoo.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$o7ggV3fCUjXOjOBcSt6Kyu.Gf8d3eE2M/6yPRJ9Sig5VAgXj1r6Du',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-10 00:35:41',
    'updated_at'=>'2020-07-10 14:49:16'
    ] );
                
    User::create( [
    'id'=>84,
    'first_name'=>'Gerald',
    'last_name'=>'Waugh',
    'company'=>NULL,
    'username'=>'jerwau',
    'phone_number'=>'(623) 377-5817',
    'role_id'=>'2',
    'email'=>'jerwau@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$e6UEZ2PrfKE7PdL3h9UbG.gXPl9ofyyXiTVHvQVtibyjFvPCuSpGy',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-10 01:00:04',
    'updated_at'=>'2020-07-10 01:15:24'
    ] );
                
    User::create( [
    'id'=>85,
    'first_name'=>'Phyllis',
    'last_name'=>'Austin',
    'company'=>NULL,
    'username'=>'pjaustin34',
    'phone_number'=>'(405) 625-3828',
    'role_id'=>'2',
    'email'=>'pja1941@yahoo.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$kgmmI6pYPd.bG3/3M07QfOq5Rs8Ok9bi2StustRxoR6UdvQqHFxaG',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-10 01:14:36',
    'updated_at'=>'2020-07-10 01:20:18'
    ] );
                
    User::create( [
    'id'=>86,
    'first_name'=>'Great',
    'last_name'=>'Marketing',
    'company'=>NULL,
    'username'=>'gmt',
    'phone_number'=>'(801) 836-0298',
    'role_id'=>'2',
    'email'=>'gmt.bits@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$lMl6lNT7VyT58VhElD2ht.SYfuJpNgjwbLCB0hdl4dJ/pugeNciCu',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-10 01:17:57',
    'updated_at'=>'2020-07-10 01:17:57'
    ] );
                
    User::create( [
    'id'=>87,
    'first_name'=>'Hobert',
    'last_name'=>'Lewis',
    'company'=>NULL,
    'username'=>'guitarman',
    'phone_number'=>'(606) 689-9967',
    'role_id'=>'2',
    'email'=>'hobertlewis6@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$w02JmPg2VOq/ACi9lWoQtuuy8HCxPpDN7oPyGCyuOrRoeAokbn5tW',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-10 01:39:27',
    'updated_at'=>'2020-07-10 01:39:27'
    ] );
                
    User::create( [
    'id'=>88,
    'first_name'=>'Christina',
    'last_name'=>'Bennett',
    'company'=>NULL,
    'username'=>'Christina',
    'phone_number'=>'(385) 204-1532',
    'role_id'=>'2',
    'email'=>'frankchristina@hotmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$rkPqSwk74HXOSL/tkOZrz.cgZtLRgvKx0qK1PfpK/oxjBSG8mQ822',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-10 01:51:07',
    'updated_at'=>'2020-07-10 01:51:07'
    ] );
                
    User::create( [
    'id'=>89,
    'first_name'=>'Paul',
    'last_name'=>'Childs',
    'company'=>NULL,
    'username'=>'atlinfo',
    'phone_number'=>'(404) 604-6124',
    'role_id'=>'2',
    'email'=>'pchilds2@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$yntGoz61WjYRJ8b8qQVvX.gY0pkdQfmpSIqmpFQr2hzatHFXXv9jO',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-10 02:03:14',
    'updated_at'=>'2020-07-10 15:48:17'
    ] );
                
    User::create( [
    'id'=>90,
    'first_name'=>'Sharon',
    'last_name'=>'Hargett',
    'company'=>NULL,
    'username'=>'divinewealth',
    'phone_number'=>'(919) 632-8477',
    'role_id'=>'2',
    'email'=>'wealthcreator6@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$3WAlONTAm0x.qzJIjQ/GrOv9UY4Nb0imyo6y2eIcAASyx1jH1BG3S',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-10 02:08:23',
    'updated_at'=>'2020-07-10 12:44:30'
    ] );
                
    User::create( [
    'id'=>91,
    'first_name'=>'James',
    'last_name'=>'Morison',
    'company'=>NULL,
    'username'=>'jamese',
    'phone_number'=>'(801) 592-1483',
    'role_id'=>'2',
    'email'=>'morewealthlessdebt@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$OE7z3RuzVS9Jq3K1gMU9YeEJBLC5sSwD2wrhdqr0U7aIWkInRj5sW',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-10 02:10:20',
    'updated_at'=>'2020-07-10 02:10:20'
    ] );
                
    User::create( [
    'id'=>92,
    'first_name'=>'Kathryn',
    'last_name'=>'Morison',
    'company'=>NULL,
    'username'=>'kats',
    'phone_number'=>'(801) 592-1483',
    'role_id'=>'2',
    'email'=>'happyarethey@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$TPjx8nXiEvrZ71rZhSqvfe1wCB2LtWnS8YtbcPsAiOSiIZ1npISpq',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-10 02:14:15',
    'updated_at'=>'2020-07-10 02:14:15'
    ] );
                
    User::create( [
    'id'=>93,
    'first_name'=>'Christine',
    'last_name'=>'Johnson',
    'company'=>NULL,
    'username'=>'Chrissj',
    'phone_number'=>'(336) 483-5828',
    'role_id'=>'2',
    'email'=>'christinei2008@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$668uy36opx/SCrdKEAeImOb0mLGh7/FLjMCA2X47OmB.VJlDAf8WW',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-10 02:25:00',
    'updated_at'=>'2020-07-10 16:18:11'
    ] );
                
    User::create( [
    'id'=>94,
    'first_name'=>'Tina',
    'last_name'=>'Bonds',
    'company'=>NULL,
    'username'=>'Tinabonds',
    'phone_number'=>'(404) 932-3703',
    'role_id'=>'2',
    'email'=>'tinambonds@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$LGEDTqffgnNqcWtVBykutef9PIt9QNgYi7CtEcEocD8BgGOFyEWt6',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-10 02:56:53',
    'updated_at'=>'2020-07-10 15:09:40'
    ] );
                
    User::create( [
    'id'=>95,
    'first_name'=>'Nathaniel',
    'last_name'=>'Scifleet',
    'company'=>NULL,
    'username'=>'firebyfifty',
    'phone_number'=>'0477 363 179',
    'role_id'=>'2',
    'email'=>'firebyfifty@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$kxpIIdQYiKS3VFWLk3P1ieEimuy5VuXscnNQDkgIPIO51U5yUSq..',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-10 03:05:25',
    'updated_at'=>'2020-07-10 03:05:25'
    ] );
                
    User::create( [
    'id'=>96,
    'first_name'=>'Valerie',
    'last_name'=>'Grant',
    'company'=>NULL,
    'username'=>'valg',
    'phone_number'=>'(801) 592-1483',
    'role_id'=>'2',
    'email'=>'dosocialize@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$5BMCfDy4YRRa/IJymf9.YuTo3mjbTwZ84GkUrxjBnDoUvS1jhn5w6',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-10 03:32:06',
    'updated_at'=>'2020-07-10 03:32:06'
    ] );
                
    User::create( [
    'id'=>97,
    'first_name'=>'John',
    'last_name'=>'Locke',
    'company'=>NULL,
    'username'=>'hikecamp',
    'phone_number'=>'(385) 329-7291',
    'role_id'=>'2',
    'email'=>'fianikaviana@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$LIhUbfQ7KXF7OD67O.Scpukyp0.j4IHH5caOlSuaDp81PNZEpeMDy',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-10 04:40:00',
    'updated_at'=>'2020-07-10 04:40:00'
    ] );
                
    User::create( [
    'id'=>98,
    'first_name'=>'Dane',
    'last_name'=>'Mitchell',
    'company'=>NULL,
    'username'=>'incomeforlife',
    'phone_number'=>'(805) 612-4352',
    'role_id'=>'2',
    'email'=>'earnsources@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$dS1lwPgnOTkCMO1VcEmrmO5e/HizLLKTx3sgYdZuDhQOkxW6jrbgS',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-10 08:15:16',
    'updated_at'=>'2020-07-10 08:23:48'
    ] );
                
    User::create( [
    'id'=>99,
    'first_name'=>'Robert',
    'last_name'=>'Maurer',
    'company'=>NULL,
    'username'=>'bear51',
    'phone_number'=>'(269) 274-0899',
    'role_id'=>'2',
    'email'=>'bobgale51@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$3D042l6lJIqjRKnEHn0Lu.inomPiyyEbzCcUO/j02B98PUFT7G0Da',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-10 09:57:01',
    'updated_at'=>'2020-07-10 09:57:01'
    ] );
                
    User::create( [
    'id'=>100,
    'first_name'=>'Indya',
    'last_name'=>'Childs',
    'company'=>NULL,
    'username'=>'indya',
    'phone_number'=>'(470) 343-0971',
    'role_id'=>'2',
    'email'=>'atlantainfosys@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$y32uiym5ubX8Mb9KCIHjnOTESs1djMCxhryXFK9Ct.VeJcxAgA.sq',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-10 12:18:47',
    'updated_at'=>'2020-07-10 12:18:47'
    ] );
                
    User::create( [
    'id'=>101,
    'first_name'=>'Carolyn',
    'last_name'=>'Greene',
    'company'=>NULL,
    'username'=>'cfgreene',
    'phone_number'=>'(801) 687-8888',
    'role_id'=>'2',
    'email'=>'carolyngreene_classicdemos@yahoo.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$Lw/HTVFWDO3ALcSB8Y3S2Odzuk3yKBQRhriQOuVy1tXeIaeTDZoeS',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-10 12:56:01',
    'updated_at'=>'2020-07-10 12:56:01'
    ] );
                
    User::create( [
    'id'=>102,
    'first_name'=>'Mary',
    'last_name'=>'Brooks',
    'company'=>NULL,
    'username'=>'mabbie',
    'phone_number'=>'(540) 891-8514',
    'role_id'=>'2',
    'email'=>'kb12051935@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$I3koXdVv7dJqZoLSUYnJHeCUaYVFgbz16nOpIe7Fiev/zCJE5sePG',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-10 12:58:43',
    'updated_at'=>'2020-07-10 12:58:43'
    ] );
                
    User::create( [
    'id'=>103,
    'first_name'=>'Calvin',
    'last_name'=>'Edwards',
    'company'=>NULL,
    'username'=>'jnt',
    'phone_number'=>'(352) 246-1444',
    'role_id'=>'2',
    'email'=>'djj394@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$bPOd53pqdo6RC3uW4KSVLe3ODPHYQIUFiOSDMXPziSDZkCBlwBl6u',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-10 13:04:22',
    'updated_at'=>'2020-07-10 13:14:04'
    ] );
                
    User::create( [
    'id'=>104,
    'first_name'=>'Marion',
    'last_name'=>'Law',
    'company'=>NULL,
    'username'=>'MarionLaw',
    'phone_number'=>'(801) 404-2833',
    'role_id'=>'2',
    'email'=>'marionlaw7@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$A1doZuJfBfLkl.FAeWRjS.TjjAJkM1JRduZxS2GNVBXjhzLiBdWEi',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-10 14:09:30',
    'updated_at'=>'2020-07-10 14:11:42'
    ] );
                
    User::create( [
    'id'=>105,
    'first_name'=>'Frank',
    'last_name'=>'Roe',
    'company'=>NULL,
    'username'=>'cashin',
    'phone_number'=>'(423) 956-8722',
    'role_id'=>'2',
    'email'=>'frankroesplace@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$iVqW0h4QidKfegpkIFOrBOhl9uFrr6FnymUWl90cpoRFn3Qn6XCTa',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-10 14:49:27',
    'updated_at'=>'2020-07-10 14:49:27'
    ] );
                
    User::create( [
    'id'=>106,
    'first_name'=>'Thomas',
    'last_name'=>'McLaurin',
    'company'=>NULL,
    'username'=>'Coachmac22',
    'phone_number'=>'(678) 576-0883',
    'role_id'=>'2',
    'email'=>'tmclaurin57@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$MJRK9PgzEnprs7G1Yr.Nwe4WWFpV5OzH7nwEICAnncx.hdBLfTFpu',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-10 15:36:53',
    'updated_at'=>'2020-07-10 15:36:53'
    ] );
                
    User::create( [
    'id'=>107,
    'first_name'=>'Samuel',
    'last_name'=>'Johnson IV',
    'company'=>NULL,
    'username'=>'samj4th',
    'phone_number'=>'(336) 588-7740',
    'role_id'=>'2',
    'email'=>'xtremecash247@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$H7AjSKZutKQ17TZEeoraoOZO7LJWCmR6ih3dGHzsKWxrp8Y23O3m6',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-10 15:56:27',
    'updated_at'=>'2020-07-10 15:56:27'
    ] );
                
    User::create( [
    'id'=>108,
    'first_name'=>'James',
    'last_name'=>'Diggs',
    'company'=>NULL,
    'username'=>'jdiggs',
    'phone_number'=>'(626) 755-4262',
    'role_id'=>'2',
    'email'=>'liveoldies@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$Y9t8FtXrZSGvOgGczUmM6.AFRmmyl50neOkjW5UShboAYVcMKtP6y',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-10 16:23:25',
    'updated_at'=>'2020-07-10 16:42:48'
    ] );
                
    User::create( [
    'id'=>109,
    'first_name'=>'Alyce',
    'last_name'=>'Jaro',
    'company'=>NULL,
    'username'=>'alyce53',
    'phone_number'=>'(920) 544-9229',
    'role_id'=>'2',
    'email'=>'alycejr35@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$v06tMZteMK4ZtIB1S8JQHekig8zBdA.JDd/sFy4ikA/hPJVBnA7ry',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-10 16:29:22',
    'updated_at'=>'2020-07-10 16:29:22'
    ] );
                
    User::create( [
    'id'=>110,
    'first_name'=>'Fredrick',
    'last_name'=>'McGlockton',
    'company'=>NULL,
    'username'=>'forcedpay',
    'phone_number'=>'(850) 544-5532',
    'role_id'=>'2',
    'email'=>'femcglo@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$4UIIhKRj8oZCbCki0J1nwuqkzSgE/MFLGRdj5SaT55IKUY00VhqKa',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-10 17:28:25',
    'updated_at'=>'2020-07-10 19:18:51'
    ] );
                
    User::create( [
    'id'=>111,
    'first_name'=>'Frank',
    'last_name'=>'Provenzano',
    'company'=>NULL,
    'username'=>'frankpro1',
    'phone_number'=>'(540) 345-2756',
    'role_id'=>'2',
    'email'=>'frankpro1@rocketmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$KkCdYBvS30/qHVOdtC7VueFQjtm4fmVLZK09AEOIehLTHBSlhCiI6',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-10 17:36:26',
    'updated_at'=>'2020-07-10 17:36:26'
    ] );
                
    User::create( [
    'id'=>112,
    'first_name'=>'Jr',
    'last_name'=>'Kinard',
    'company'=>NULL,
    'username'=>'ckinard2',
    'phone_number'=>'(301) 735-0330',
    'role_id'=>'2',
    'email'=>'jazzyfatnaste@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$RewVpGqIWLed6.sv39dfc.0Oxb8j4.cETk10kCl3uLj1P6sPbgLfm',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-10 17:42:57',
    'updated_at'=>'2020-07-10 19:04:06'
    ] );
                
    User::create( [
    'id'=>113,
    'first_name'=>'Felicia',
    'last_name'=>'McGlockton',
    'company'=>NULL,
    'username'=>'gailmcg',
    'phone_number'=>'(850) 544-5532',
    'role_id'=>'2',
    'email'=>'feliciamcg@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$L/7I3Og4SfgzGm.FZrorxOGo6WSFn/ZbR8fDjSI.OZR1uY1UxGX7e',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-10 17:55:31',
    'updated_at'=>'2020-07-10 18:05:49'
    ] );
                
    User::create( [
    'id'=>114,
    'first_name'=>'Drucella',
    'last_name'=>'Russell',
    'company'=>NULL,
    'username'=>'Druss7',
    'phone_number'=>'(817) 818-8494',
    'role_id'=>'2',
    'email'=>'drurussell45@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$eDPXwN2mZgxkx6IU3dr33utD.JAWFnsX6pHPUqh8o9Ytlj1eSfoBm',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-10 18:55:26',
    'updated_at'=>'2020-07-10 20:13:27'
    ] );
                
    User::create( [
    'id'=>115,
    'first_name'=>'Ellen',
    'last_name'=>'Jackey',
    'company'=>NULL,
    'username'=>'floridagirl',
    'phone_number'=>'(941) 586-8900',
    'role_id'=>'2',
    'email'=>'havinfuninfla@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$vkG8zJv9X1mUhY2m4CPL3OWxdG5HDRzAsCjlKAf83cotbPcc2k5yK',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-10 19:11:11',
    'updated_at'=>'2020-07-10 19:43:38'
    ] );
                
    User::create( [
    'id'=>116,
    'first_name'=>'Henry',
    'last_name'=>'Diggins',
    'company'=>NULL,
    'username'=>'hdiggins',
    'phone_number'=>'(817) 721-7837',
    'role_id'=>'2',
    'email'=>'hdiggins@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$tckdTjmsLFfrDLJPxikVvue9iovWjz12ZhKtriS/iLWyjVCoTb.o6',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-10 19:11:49',
    'updated_at'=>'2020-07-10 19:11:49'
    ] );
                
    User::create( [
    'id'=>117,
    'first_name'=>'Elicia',
    'last_name'=>'McCollum',
    'company'=>NULL,
    'username'=>'eliciamccollum',
    'phone_number'=>'(301) 892-0784',
    'role_id'=>'2',
    'email'=>'eliciamccollum@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$IHk2hM3JuG80jsVSU4Yyh.qXP.4LefE8C2o7sThMQE7AaGRipM3mW',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-10 19:21:07',
    'updated_at'=>'2020-07-10 19:21:07'
    ] );
                
    User::create( [
    'id'=>118,
    'first_name'=>'Oakie',
    'last_name'=>'Shepherd',
    'company'=>NULL,
    'username'=>'oakster',
    'phone_number'=>'(317) 714-1157',
    'role_id'=>'2',
    'email'=>'theoakster777@hotmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$/WKPn9PIhlzjgrcIK.lpT.NoMvi0YOouXWsbHIQWVubTl9L/yyFQO',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-10 19:44:54',
    'updated_at'=>'2020-07-10 20:00:18'
    ] );
                
    User::create( [
    'id'=>119,
    'first_name'=>'Deborah',
    'last_name'=>'Rohloff',
    'company'=>NULL,
    'username'=>'debrohloff',
    'phone_number'=>'(920) 563-8897',
    'role_id'=>'2',
    'email'=>'debster53538@yahoo.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$HmoeL5aJQv7CXj05uK.rZ.F7YDm17W.1ISR8d0/s8ko79I3eYzT22',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-10 20:03:36',
    'updated_at'=>'2020-07-10 20:03:36'
    ] );
                
    User::create( [
    'id'=>120,
    'first_name'=>'Donald',
    'last_name'=>'Austin',
    'company'=>NULL,
    'username'=>'anewday',
    'phone_number'=>'(314) 486-9588',
    'role_id'=>'2',
    'email'=>'anewday5712@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$bKkKCeMQKsypWK2FS6UbuuMPvgClbQoztWywC1DLrU5Sug0oSsmBy',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-10 20:18:44',
    'updated_at'=>'2020-07-10 20:18:44'
    ] );
                
    User::create( [
    'id'=>121,
    'first_name'=>'Timothy',
    'last_name'=>'Wickert',
    'company'=>NULL,
    'username'=>'thewick',
    'phone_number'=>'(801) 369-7970',
    'role_id'=>'2',
    'email'=>'tmwickert@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$OAx3fR4XiCcbq4V51zJRBO4BXcVi1Bin/bChmPui0prlcVcx66eT2',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-10 21:32:35',
    'updated_at'=>'2020-07-10 21:32:35'
    ] );
                
    User::create( [
    'id'=>122,
    'first_name'=>'Gregory',
    'last_name'=>'Bodkins',
    'company'=>NULL,
    'username'=>'sinbad',
    'phone_number'=>'(757) 343-3501',
    'role_id'=>'2',
    'email'=>'sinbadmarketing@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$xWcahg1NnMM0WKVh7U4SN.RFwhLWCox8Obu2EkmZVZFBZSN6Elx9q',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-10 22:28:09',
    'updated_at'=>'2020-07-10 22:40:09'
    ] );
                
    User::create( [
    'id'=>123,
    'first_name'=>'Lisa',
    'last_name'=>'Klein',
    'company'=>NULL,
    'username'=>'lisa119',
    'phone_number'=>'(618) 581-5472',
    'role_id'=>'2',
    'email'=>'mycoffeeshop68@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$F//OppDpEzsPrU45hvO7RuQHghHxc5dkA/GnC5Rg3lh0ObBwlDR1O',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-10 23:53:07',
    'updated_at'=>'2020-07-10 23:53:07'
    ] );
                
    User::create( [
    'id'=>124,
    'first_name'=>'Ajharis',
    'last_name'=>'Serafin',
    'company'=>NULL,
    'username'=>'Ajharis25',
    'phone_number'=>'(801) 494-9270',
    'role_id'=>'2',
    'email'=>'ajharis_25@hotmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$jPbg58XAZzomnN7dEJVjluiKchktfLe1bBLwWrR6QLS.m27x1BwMG',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-11 00:08:53',
    'updated_at'=>'2020-07-11 00:08:53'
    ] );
                
    User::create( [
    'id'=>125,
    'first_name'=>'Don',
    'last_name'=>'Coleman',
    'company'=>NULL,
    'username'=>'wheats',
    'phone_number'=>'(417) 693-3586',
    'role_id'=>'2',
    'email'=>'mancole@sbcglobal.net',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$cWrR.vTQiN/H4paZrgq69e2zqJu6xxqCe5.xWj2vzzP5IHai8scBO',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-11 00:16:55',
    'updated_at'=>'2020-07-11 00:16:55'
    ] );
                
    User::create( [
    'id'=>126,
    'first_name'=>'Kellie',
    'last_name'=>'Felgate',
    'company'=>NULL,
    'username'=>'KellieFelgate',
    'phone_number'=>'403727725',
    'role_id'=>'2',
    'email'=>'kelliefelgate888@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$ZVSYOIdSA95Uj0ocARPQa.DwdQg/RG4fi9OeTNkjnZxuCOzQ0kVgq',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-11 00:20:35',
    'updated_at'=>'2020-07-11 00:20:35'
    ] );
                
    User::create( [
    'id'=>127,
    'first_name'=>'Gregorio',
    'last_name'=>'Rangel',
    'company'=>NULL,
    'username'=>'Greg23',
    'phone_number'=>'(530) 701-9992',
    'role_id'=>'2',
    'email'=>'gregrangel23@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$kicxPSyxSNrGYEc0grlnd.kVS5xxOYK02Mywr/iJcPI80wewJve4y',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-11 00:21:34',
    'updated_at'=>'2020-07-11 00:21:34'
    ] );
                
    User::create( [
    'id'=>128,
    'first_name'=>'Alekxis',
    'last_name'=>'Serafin',
    'company'=>NULL,
    'username'=>'Alekxis',
    'phone_number'=>'(385) 208-8830',
    'role_id'=>'2',
    'email'=>'Alekxismajher15@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$cfahyvR6/EQ588FEYIhteuJkK23.6HuSMgPqa2ciKKd3qZI5PznkS',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-11 00:31:51',
    'updated_at'=>'2020-07-11 00:31:51'
    ] );
                
    User::create( [
    'id'=>129,
    'first_name'=>'Renee',
    'last_name'=>'Quackenbush',
    'company'=>NULL,
    'username'=>'Renee',
    'phone_number'=>'(314) 450-0138',
    'role_id'=>'2',
    'email'=>'grant1551@aol.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$jTK.bRz0xgbfqMVBiOXdWOkWV6uORiMrGjp0N1k8Iu6pK31yswhwC',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-11 00:57:34',
    'updated_at'=>'2020-07-11 00:57:34'
    ] );
                
    User::create( [
    'id'=>130,
    'first_name'=>'Robert',
    'last_name'=>'Lawrence',
    'company'=>NULL,
    'username'=>'rlawrence44@gmail.com',
    'phone_number'=>'71435759432',
    'role_id'=>'2',
    'email'=>'rlawrence44@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$m0GZHQgAmuLbAeiDXHpKeed251qX.cBe8NvBpwqA65cPf4Q93nJ.a',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-11 01:21:02',
    'updated_at'=>'2020-07-11 01:21:02'
    ] );
                
    User::create( [
    'id'=>131,
    'first_name'=>'Charlotte',
    'last_name'=>'Schneider',
    'company'=>NULL,
    'username'=>'forester',
    'phone_number'=>'(314) 363-2040',
    'role_id'=>'2',
    'email'=>'missouriforester@gmx.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$M1IvMRMkQFRDyO4P/EerQOcV4ukn3DZgG2V5AQB6bvs0M5NlX0ILG',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-11 01:44:04',
    'updated_at'=>'2020-07-11 01:44:04'
    ] );
                
    User::create( [
    'id'=>132,
    'first_name'=>'Lynelle',
    'last_name'=>'Holtby',
    'company'=>NULL,
    'username'=>'lynelle',
    'phone_number'=>'455226412',
    'role_id'=>'2',
    'email'=>'sweet_girl_at_heart@hotmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$W8WlxvmTJVNdTAUgTZmJEO2BkFIOby4HZFAvxnUePRuexXVWQSzUa',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-11 11:58:31',
    'updated_at'=>'2020-07-11 11:58:31'
    ] );
                
    User::create( [
    'id'=>133,
    'first_name'=>'Mychal',
    'last_name'=>'Stanford',
    'company'=>NULL,
    'username'=>'Warriors21',
    'phone_number'=>'(410) 253-5525',
    'role_id'=>'2',
    'email'=>'mstanford21@yahoo.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$UF5ZxJq5.fM4pPnVt4qCsO9KPkZiHdwJTKUuWfbK8dibeEl6LehRO',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-11 14:19:17',
    'updated_at'=>'2020-07-11 14:19:17'
    ] );
                
    User::create( [
    'id'=>134,
    'first_name'=>'David',
    'last_name'=>'Miller',
    'company'=>NULL,
    'username'=>'probuild',
    'phone_number'=>'(601) 857-4295',
    'role_id'=>'2',
    'email'=>'daveshotnews@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$3Wzi1jU3Qf3g6SuASlkwn.j4xTPudLh4wIqMQql/NV0sznMaaTXeS',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-11 15:03:52',
    'updated_at'=>'2020-07-11 15:03:52'
    ] );
                
    User::create( [
    'id'=>135,
    'first_name'=>'Jerri',
    'last_name'=>'Hill',
    'company'=>NULL,
    'username'=>'Jerrigwen',
    'phone_number'=>'(813) 610-1392',
    'role_id'=>'2',
    'email'=>'jerrigwen7@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$AHWxCgiU8QPtn4qoTQ66D.sUlxDTt0rOelL2pjAVfpZofch3wBubC',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-11 15:32:12',
    'updated_at'=>'2020-07-11 15:32:12'
    ] );
                
    User::create( [
    'id'=>136,
    'first_name'=>'Douglas',
    'last_name'=>'Alfieri',
    'company'=>NULL,
    'username'=>'DAlfieri',
    'phone_number'=>'(516) 359-0156',
    'role_id'=>'2',
    'email'=>'dougalfieri@optonline.net',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$cm8UOLFzUyrGXyyEji.HIuwZWkzdWI/svo2elQ91HuxttBKrS3jxm',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-11 16:05:08',
    'updated_at'=>'2020-07-11 16:05:08'
    ] );
                
    User::create( [
    'id'=>137,
    'first_name'=>'Elizabeth',
    'last_name'=>'Jane',
    'company'=>NULL,
    'username'=>'extremecash',
    'phone_number'=>'(720) 338-8050',
    'role_id'=>'2',
    'email'=>'janeejb@mail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$oH.JNd/PYVrW7LqCd/Q24u4D8reO3VjqRVUYSk1vrzmSM3RJ9NU2e',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-11 16:35:47',
    'updated_at'=>'2020-07-11 16:35:47'
    ] );
                
    User::create( [
    'id'=>138,
    'first_name'=>'Jim',
    'last_name'=>'Bonner',
    'company'=>NULL,
    'username'=>'jimb',
    'phone_number'=>'(909) 945-3414',
    'role_id'=>'2',
    'email'=>'bonnerjw@hotmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$MMEEPnT3dQouM02jKBjhBuns/4mVSoI5Q3QRPrBUjbzwYEewjmck2',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-11 17:28:08',
    'updated_at'=>'2020-07-11 17:28:08'
    ] );
                
    User::create( [
    'id'=>139,
    'first_name'=>'Enoch',
    'last_name'=>'Mahana',
    'company'=>NULL,
    'username'=>'enoch',
    'phone_number'=>'(801) 471-4079',
    'role_id'=>'2',
    'email'=>'mahana.enoch@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$HVNDKERGGGnFB8Vtg.boc.QgW5DPnvmKlXcRvIz3AuNEq/YZhPMWS',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-11 17:31:20',
    'updated_at'=>'2020-07-11 17:31:20'
    ] );
                
    User::create( [
    'id'=>140,
    'first_name'=>'Ned',
    'last_name'=>'Mahana',
    'company'=>NULL,
    'username'=>'neddurl',
    'phone_number'=>'(801) 787-4407',
    'role_id'=>'2',
    'email'=>'enochj59@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$.ht8yp8unnRSjbsQpMUFhO/T4ugUc1QKLpJ7XAMZ0L4fDDJTWjcka',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-11 17:36:32',
    'updated_at'=>'2020-07-11 17:36:32'
    ] );
                
    User::create( [
    'id'=>141,
    'first_name'=>'Teresa',
    'last_name'=>'Ray',
    'company'=>NULL,
    'username'=>'teresaray',
    'phone_number'=>'(661) 229-9763',
    'role_id'=>'2',
    'email'=>'teresaray927@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$vs9cKJrHYymbsjtwfiB4pupUQqa0a87jdGDBRMnpUvOMzAzkJ5r5S',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-11 17:47:12',
    'updated_at'=>'2020-07-11 17:47:12'
    ] );
                
    User::create( [
    'id'=>142,
    'first_name'=>'Frank',
    'last_name'=>'Roe',
    'company'=>NULL,
    'username'=>'boxman71',
    'phone_number'=>'(423) 956-8722',
    'role_id'=>'2',
    'email'=>'frankroesplace@yahoo.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$HIcsKrwf7Tu5fJv/7lituOyYJC2LCEbs0WXiGYXxT1Fe7dapMP/am',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-11 19:14:14',
    'updated_at'=>'2020-07-11 19:14:14'
    ] );
                
    User::create( [
    'id'=>143,
    'first_name'=>'IW',
    'last_name'=>'Westmoreland',
    'company'=>NULL,
    'username'=>'versifier',
    'phone_number'=>'(708) 785-6741',
    'role_id'=>'2',
    'email'=>'eyedubahyou@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$h4rAhw8K5mGWsVH18Hu9RePuDXS1TuZqXVHQbP/qnJLF3FZ6FPO3W',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-11 20:51:02',
    'updated_at'=>'2020-07-11 20:51:02'
    ] );
                
    User::create( [
    'id'=>144,
    'first_name'=>'Laymon',
    'last_name'=>'Lowe',
    'company'=>NULL,
    'username'=>'loweboy',
    'phone_number'=>'(606) 524-3112',
    'role_id'=>'2',
    'email'=>'laymonlowe@yahoo.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$sLnwO5iWHLSTKdpwvXGieO9U/L7oGDyI1YHJ4tceOlq.tbrZmBx52',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-11 20:58:05',
    'updated_at'=>'2020-07-11 20:58:05'
    ] );
                
    User::create( [
    'id'=>145,
    'first_name'=>'Bob',
    'last_name'=>'Whitson',
    'company'=>NULL,
    'username'=>'Olebob',
    'phone_number'=>'(205) 800-0036',
    'role_id'=>'2',
    'email'=>'bullitt70@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$ogVXd4dHcYNeQrvjIW3kBueC2zKDKQKMbJwb.VgZ3kEQKBZLFT.9W',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-11 21:40:58',
    'updated_at'=>'2020-07-11 21:40:58'
    ] );
                
    User::create( [
    'id'=>146,
    'first_name'=>'Rick',
    'last_name'=>'Lamberto',
    'company'=>NULL,
    'username'=>'RLamberto315?',
    'phone_number'=>'(951) 313-2522',
    'role_id'=>'2',
    'email'=>'ricklamberto123@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$gKK93EPZTaoZT5Loi.THx.FDcAMVvGXUiwTYgF1mFX4pkZbQzlqV6',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-11 22:33:24',
    'updated_at'=>'2020-07-11 22:33:24'
    ] );
                
    User::create( [
    'id'=>147,
    'first_name'=>'Inisha',
    'last_name'=>'Sams',
    'company'=>NULL,
    'username'=>'InishaS2017',
    'phone_number'=>'(864) 356-2895',
    'role_id'=>'2',
    'email'=>'inisha420@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$n4MjihFJmle6jo/zvztT2uGE9/9qsa/fBqTcMA73D2zYrTtctDt1W',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-11 23:24:38',
    'updated_at'=>'2020-07-11 23:24:38'
    ] );
                
    User::create( [
    'id'=>148,
    'first_name'=>'Vanessa',
    'last_name'=>'Brown',
    'company'=>NULL,
    'username'=>'NessaB8848',
    'phone_number'=>'(917) 587-4055',
    'role_id'=>'2',
    'email'=>'vanessa60b@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$TObc7A455Oyf3W0cJ9MdweUaEgLl/nvMBRbq.za6An3qWA/X9JV7O',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-12 00:14:58',
    'updated_at'=>'2020-07-12 00:14:58'
    ] );
                
    User::create( [
    'id'=>149,
    'first_name'=>'Kenny',
    'last_name'=>'Clark',
    'company'=>NULL,
    'username'=>'kclark',
    'phone_number'=>'(863) 221-4796',
    'role_id'=>'2',
    'email'=>'kskier9751@aol.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$zNe7gHJeZh2ixOYqWdi/j.QK6/dnkN0aiUlUR7PT7HvB73bzk3RzO',
    'remember_token'=>'TIfiEh0bIpgAeqxEzB9Zo2CjYcLcW4klu3Qpiu0Sapfz55VnLZHqygaPOnm5',
    'created_at'=>'2020-07-12 01:26:35',
    'updated_at'=>'2020-07-12 13:17:20'
    ] );
                
    User::create( [
    'id'=>150,
    'first_name'=>'Beverly',
    'last_name'=>'Hill',
    'company'=>NULL,
    'username'=>'Bevvy',
    'phone_number'=>'(813) 960-3167',
    'role_id'=>'2',
    'email'=>'bhillsalem1@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$fYT8kMPiR0LGe6dQPWgGFeRUylfFbYpOYLBPu18NoOqOAxmGiuV9K',
    'remember_token'=>'yDcODvzHcddS6tE2SkNlkCJSfIsJ125ZYnOWnUlBpQD7N8OvZbmXilBVymE1',
    'created_at'=>'2020-07-12 02:13:41',
    'updated_at'=>'2020-07-12 02:17:35'
    ] );
                
    User::create( [
    'id'=>151,
    'first_name'=>'Anna',
    'last_name'=>'Harris',
    'company'=>NULL,
    'username'=>'AnnaH10066',
    'phone_number'=>'(828) 235-2070',
    'role_id'=>'2',
    'email'=>'annahania66@yahoo.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$Pg6N8LXc/o6fc1ETVWUCke2yuyOas4uqsU/asxb.TWbKxJf4vT8/e',
    'remember_token'=>'2J6WLLShMEQbX5g7hM1ULf6525wwfsmtAqYLvSH2Mb6Z5v4YQspoJAG8ZUUk',
    'created_at'=>'2020-07-12 02:16:01',
    'updated_at'=>'2020-07-12 22:19:50'
    ] );
                
    User::create( [
    'id'=>152,
    'first_name'=>'Bonner',
    'last_name'=>'Ministries',
    'company'=>NULL,
    'username'=>'BonMin',
    'phone_number'=>'(909) 582-0979',
    'role_id'=>'2',
    'email'=>'bonnerministries@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$ywJCijSUFNOx.DvHdLrIAOiSejrEOJnGwYYrgYiK0gM2wzVxQSlxm',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-12 06:28:28',
    'updated_at'=>'2020-07-12 06:28:28'
    ] );
                
    User::create( [
    'id'=>153,
    'first_name'=>'Edith',
    'last_name'=>'Bonner',
    'company'=>NULL,
    'username'=>'prettygirl',
    'phone_number'=>'(909) 945-3414',
    'role_id'=>'2',
    'email'=>'edithbonner@protonmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$4aHDI9.A/nOOPibjgwsWw.U/EIr7iGPaaq2H8DTIvkKHENcTj4QUG',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-12 06:47:00',
    'updated_at'=>'2020-07-12 06:47:00'
    ] );
                
    User::create( [
    'id'=>154,
    'first_name'=>'David L',
    'last_name'=>'Richards',
    'company'=>NULL,
    'username'=>'rdavid488',
    'phone_number'=>'(216) 924-0343',
    'role_id'=>'2',
    'email'=>'rdavid488@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$UdlhYwj9ztZA6.fCmGPoOOR0DdOzPp99YpwWwbI/NTvokld/ABCnC',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-12 06:52:40',
    'updated_at'=>'2020-07-12 06:52:40'
    ] );
                
    User::create( [
    'id'=>155,
    'first_name'=>'Janice',
    'last_name'=>'Harvey',
    'company'=>NULL,
    'username'=>'janiceharvey',
    'phone_number'=>'(478) 335-2411',
    'role_id'=>'2',
    'email'=>'janiceharvey5@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$AWvR4NjGlY0LtEM0mnA.q.1FRM3sO95r6MfIxSRGUhbM2Fbr40Vji',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-12 13:04:57',
    'updated_at'=>'2020-07-12 13:04:57'
    ] );
                
    User::create( [
    'id'=>156,
    'first_name'=>'William A',
    'last_name'=>'Coleman Jr',
    'company'=>NULL,
    'username'=>'Yozhik',
    'phone_number'=>'(804) 384-8752',
    'role_id'=>'2',
    'email'=>'mrbill79@yahoo.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$3gWk3LOH9Nla/EkASTu.yOkhV7Q8Q2jHjiIuoZFFnUQE2ENFEDJIK',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-12 14:05:30',
    'updated_at'=>'2020-07-12 14:05:30'
    ] );
                
    User::create( [
    'id'=>158,
    'first_name'=>'Joan',
    'last_name'=>'Frehlich',
    'company'=>NULL,
    'username'=>'JFrehlich',
    'phone_number'=>'(780) 807-4533',
    'role_id'=>'2',
    'email'=>'jfrehlich@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$Fwbd0.dO9VcRrO00Fz4DQuHPVx7d9KJWjoBGlBiq8.AGlVrz3gVmq',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-12 14:56:11',
    'updated_at'=>'2020-07-12 14:56:11'
    ] );
                
    User::create( [
    'id'=>159,
    'first_name'=>'Leroy',
    'last_name'=>'Wise',
    'company'=>NULL,
    'username'=>'wisechoice',
    'phone_number'=>'(336) 365-0254',
    'role_id'=>'2',
    'email'=>'wisechoice2bfree@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$OKwyuUFxztri6MzNbGo1AeXl24k1mlQjEWNlqjXvXq44/WWbjaXRK',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-12 15:38:08',
    'updated_at'=>'2020-07-12 15:38:08'
    ] );
                
    User::create( [
    'id'=>161,
    'first_name'=>'Comer E.',
    'last_name'=>'Pulley',
    'company'=>NULL,
    'username'=>'onlysuccess',
    'phone_number'=>'(615) 828-1636',
    'role_id'=>'2',
    'email'=>'prosperthepeople@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$xzccrVvgAY2dKEoUt3hZs.I5P3AJrXf/az7gUAGNZ6a32VE/2PIFq',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-12 16:02:06',
    'updated_at'=>'2020-07-12 16:02:06'
    ] );
                
    User::create( [
    'id'=>162,
    'first_name'=>'LEO',
    'last_name'=>'MITCHELL',
    'company'=>NULL,
    'username'=>'tulsa911',
    'phone_number'=>'(918) 521-6336',
    'role_id'=>'2',
    'email'=>'leo6220@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$0DQyjDQw3vobkEndG13l2.X89JieOPtEeF.MyPKxNR1PvVyuFMh.u',
    'remember_token'=>'GwKAjeQEn19C56hpvnUN42auu31GCNV7n95F1UiTKxbDEYjGQrp4ke2citZq',
    'created_at'=>'2020-07-12 17:12:52',
    'updated_at'=>'2020-07-12 17:25:16'
    ] );
                
    User::create( [
    'id'=>164,
    'first_name'=>'Dora',
    'last_name'=>'Augustain',
    'company'=>NULL,
    'username'=>'sweetpea',
    'phone_number'=>'(915) 422-5984',
    'role_id'=>'2',
    'email'=>'doraug19@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$o10hWsYDKmh8saimQOQXpOStOsd.0x5Lo.WGYA0kNKjqayWX.iLL.',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-12 17:41:49',
    'updated_at'=>'2020-07-12 17:41:49'
    ] );
                
    User::create( [
    'id'=>167,
    'first_name'=>'Katherine',
    'last_name'=>'Wolf',
    'company'=>NULL,
    'username'=>'kwolf315',
    'phone_number'=>'(207) 441-5390',
    'role_id'=>'2',
    'email'=>'kwolf315@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$Hv3zKTjkw7NKHqQFTBwXxuulmGj2FGv09NP31H9WW/BWnY1.OhAcu',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-12 18:40:37',
    'updated_at'=>'2020-07-12 18:40:37'
    ] );
                
    User::create( [
    'id'=>168,
    'first_name'=>'Keith',
    'last_name'=>'Colquitt',
    'company'=>NULL,
    'username'=>'KCMONEYCLUB',
    'phone_number'=>'1 (678) 677-7470',
    'role_id'=>'2',
    'email'=>'kgcolquitt39@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$WM7FnNqeqOQdcYfanntU4Ob5p3Hgo1aNOGYqZO2523wR2OvkirjGe',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-12 18:47:37',
    'updated_at'=>'2020-07-12 18:47:37'
    ] );
                
    User::create( [
    'id'=>169,
    'first_name'=>'Teresa',
    'last_name'=>'Bonner',
    'company'=>NULL,
    'username'=>'prettygirlteresa',
    'phone_number'=>'(909) 582-0979',
    'role_id'=>'2',
    'email'=>'prettygirlteresa@protonmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$JaOZx6/yPpiNgySjy8yuUeMCSN.9UvrHasTm1a2kvXonhQYiwyv.q',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-12 19:35:50',
    'updated_at'=>'2020-07-12 19:35:50'
    ] );
                
    User::create( [
    'id'=>170,
    'first_name'=>'Shaun',
    'last_name'=>'Main',
    'company'=>NULL,
    'username'=>'smain',
    'phone_number'=>'(937) 572-9120',
    'role_id'=>'2',
    'email'=>'smain40@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$o8FYlki0fsGz32Xy0X9Pi.UDnlvVhxoHq6/eeJHt7Q5m10sPH6rh.',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-12 19:39:01',
    'updated_at'=>'2020-07-12 19:39:01'
    ] );
                
    User::create( [
    'id'=>172,
    'first_name'=>'Yahudah Ben',
    'last_name'=>'Yisrael',
    'company'=>NULL,
    'username'=>'nakarya',
    'phone_number'=>'(205) 212-0517',
    'role_id'=>'2',
    'email'=>'captainkirkenterprisesllc@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$UQt66JwdqDH5n0iki6w3jOFGbuPUP8AYfjOXy77ISU8/B1Xn9v7WC',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-12 19:50:47',
    'updated_at'=>'2020-07-12 19:50:47'
    ] );
                
    User::create( [
    'id'=>173,
    'first_name'=>'Karen',
    'last_name'=>'Marcum',
    'company'=>NULL,
    'username'=>'Karen',
    'phone_number'=>'(606) 331-0589',
    'role_id'=>'2',
    'email'=>'karenrmarcum7@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$dVdKksL0CEkKPyXk2UlyVuQ99wSkCpYcNdxccLHeYaTcFMSnw5Kqu',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-12 20:04:10',
    'updated_at'=>'2020-07-12 20:04:10'
    ] );
                
    User::create( [
    'id'=>174,
    'first_name'=>'Jozel Geneil',
    'last_name'=>'Howell',
    'company'=>NULL,
    'username'=>'Jozel',
    'phone_number'=>'798191758',
    'role_id'=>'2',
    'email'=>'gould.howell@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$NVDQCOplsYsfFXFmNppuA.kgUFGewirVWDq7iqml1hVD3x9g8H2B6',
    'remember_token'=>'FMQxMSoK0ltxqckIJH6LeeZHgxcjtNAl7ebW7ivKdLHYlL09rZwUOWUYMDr9',
    'created_at'=>'2020-07-12 20:09:42',
    'updated_at'=>'2020-07-13 10:29:39'
    ] );
                
    User::create( [
    'id'=>178,
    'first_name'=>'Robert',
    'last_name'=>'Ray',
    'company'=>NULL,
    'username'=>'rdray',
    'phone_number'=>'(731) 333-9346',
    'role_id'=>'2',
    'email'=>'robert251949@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$p/0cYDNyqnzCYd6UEbutZeZrl56C82AesWQhbhiFYwvyckZItpVq.',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-12 22:46:14',
    'updated_at'=>'2020-07-12 22:46:14'
    ] );
                
    User::create( [
    'id'=>181,
    'first_name'=>'Peter',
    'last_name'=>'Ade',
    'company'=>NULL,
    'username'=>'bible',
    'phone_number'=>'(702) 782-7224',
    'role_id'=>'2',
    'email'=>'folere@yahoo.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$LVS7hddh1zQV6/m9dX351e8NdduS5VU1cmWjrPocVmdkx1LvzGReC',
    'remember_token'=>'1uFteG8CoUOQLgMcB8od6mDAPbpLe3t41M5BEJlaHqEhu4aCZaOKik8E3HSM',
    'created_at'=>'2020-07-12 23:02:22',
    'updated_at'=>'2020-07-12 23:08:50'
    ] );
                
    User::create( [
    'id'=>183,
    'first_name'=>'Judy',
    'last_name'=>'Carpenter',
    'company'=>NULL,
    'username'=>'myezbiz',
    'phone_number'=>'(540) 980-2972',
    'role_id'=>'2',
    'email'=>'myezbizforyou@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$n08BD39/P5fUE2SZR1l1yOPo6v4YlY49MnY7nBu3EZob6xFg107KS',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-12 23:20:58',
    'updated_at'=>'2020-07-12 23:20:58'
    ] );
                
    User::create( [
    'id'=>185,
    'first_name'=>'FUTURE VISION',
    'last_name'=>'ENTERPRISES',
    'company'=>NULL,
    'username'=>'MoneyVision',
    'phone_number'=>'(703) 409-2418',
    'role_id'=>'2',
    'email'=>'wegotitnow2016@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$v.VzH8J728SqtPTb5fMNau.hg5CwFLRFwU6pyNiWcfCs3mH/9H1wS',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-12 23:36:25',
    'updated_at'=>'2020-07-12 23:36:25'
    ] );
                
    User::create( [
    'id'=>186,
    'first_name'=>'Jennifer A.',
    'last_name'=>'John',
    'company'=>NULL,
    'username'=>'SeedsOfGold',
    'phone_number'=>'(216) 313-2230',
    'role_id'=>'2',
    'email'=>'islandgirliam@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$Y4GgXg9NBU6hhdRC4S8W5OPmbhViQQ4ngoKqtRDQlQVCoUC8tjTQK',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-12 23:37:53',
    'updated_at'=>'2020-07-12 23:37:53'
    ] );
                
    User::create( [
    'id'=>187,
    'first_name'=>'Andrea',
    'last_name'=>'Tanner',
    'company'=>NULL,
    'username'=>'Naturenae',
    'phone_number'=>'(530) 774-7697',
    'role_id'=>'2',
    'email'=>'naturenae@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$dBhE2ttqPOY2Dr7MNCSHReZgSogiTXuryx/J2b/qoeEwRKgTTMUYm',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-12 23:38:56',
    'updated_at'=>'2020-07-12 23:38:56'
    ] );
                
    User::create( [
    'id'=>190,
    'first_name'=>'Darryl',
    'last_name'=>'Carpenter',
    'company'=>NULL,
    'username'=>'laquinta',
    'phone_number'=>'(540) 980-2972',
    'role_id'=>'2',
    'email'=>'laquintapasos@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$83sg4xW/zWhpeo2U1og61.R3UOaDtdHH4niazoYpzZg4izFe32RwK',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-13 00:00:20',
    'updated_at'=>'2020-07-13 00:00:20'
    ] );
                
    User::create( [
    'id'=>191,
    'first_name'=>'Dale',
    'last_name'=>'Garloch',
    'company'=>NULL,
    'username'=>'Driverman',
    'phone_number'=>'(812) 878-9972',
    'role_id'=>'2',
    'email'=>'garlochd@aol.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$5sDH3cyWKZtG9C.rFlYXR.KZMB5tsoSVpXKQyjTeNrwEOSi0/VxP6',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-13 00:33:35',
    'updated_at'=>'2020-07-13 00:33:35'
    ] );
                
    User::create( [
    'id'=>194,
    'first_name'=>'Kathy',
    'last_name'=>'Hadley',
    'company'=>NULL,
    'username'=>'kathyann',
    'phone_number'=>'(317) 409-1113',
    'role_id'=>'2',
    'email'=>'kathyannhadley@hotmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$Oe6tx2aCc9rh5867e546BuNKDJjjjcjIr9c3WOeTuvcNxNnbcmrqi',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-13 00:58:21',
    'updated_at'=>'2020-07-13 00:58:21'
    ] );
                
    User::create( [
    'id'=>195,
    'first_name'=>'Austin',
    'last_name'=>'Childs',
    'company'=>NULL,
    'username'=>'Austin1',
    'phone_number'=>'(470) 234-2154',
    'role_id'=>'2',
    'email'=>'pcainfosys@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$WehG0l/LsGsmkntwxytCnuV26fFytihTSCEDmacg7jorsDZVhOezO',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-13 01:27:51',
    'updated_at'=>'2020-07-13 01:27:51'
    ] );
                
    User::create( [
    'id'=>196,
    'first_name'=>'Judy',
    'last_name'=>'Fleming',
    'company'=>NULL,
    'username'=>'jestkash',
    'phone_number'=>'(340) 626-2768',
    'role_id'=>'2',
    'email'=>'beams069@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$nrRfx4f0gWra3VnQNVKQvu9mnNqU4vvMvJ8hr4quVuJUjmQHafMV6',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-13 02:09:20',
    'updated_at'=>'2020-07-13 02:09:20'
    ] );
                
    User::create( [
    'id'=>197,
    'first_name'=>'Pearl',
    'last_name'=>'Opeloyeru',
    'company'=>NULL,
    'username'=>'LulaPearl',
    'phone_number'=>'(404) 366-7186',
    'role_id'=>'2',
    'email'=>'tinambonds@yahoo.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$p3WNmnREw2I6ttEMd3PTTuyS/5tGognrkl8Bo3QSwI4juY0TYjVfS',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-13 02:54:17',
    'updated_at'=>'2020-07-13 02:54:17'
    ] );
                
    User::create( [
    'id'=>198,
    'first_name'=>'Ernest',
    'last_name'=>'Fleming',
    'company'=>NULL,
    'username'=>'ejwizard',
    'phone_number'=>'(252) 939-6099',
    'role_id'=>'2',
    'email'=>'ejwizard@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$uyTIt0XxWnczCOm2f5Lsh.NpIl/bt6ae9ukBpoacqaNIZi8K14NM.',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-13 03:30:37',
    'updated_at'=>'2020-07-13 03:30:37'
    ] );
                
    User::create( [
    'id'=>199,
    'first_name'=>'Saviour',
    'last_name'=>'Ellul',
    'company'=>NULL,
    'username'=>'salad1948',
    'phone_number'=>'7928 0269',
    'role_id'=>'2',
    'email'=>'salad1948@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$Lyw70Xe.AmLu7lQCILrJaeGzkSbEHbITzC6.Gd6p7GwVJrdgoAGQa',
    'remember_token'=>'O5vj5dDoirTEdAny6DcU0rVCCzgUiRsiUldtyDJSYMZzTkzzEZscR73eqC0A',
    'created_at'=>'2020-07-13 05:13:52',
    'updated_at'=>'2020-07-13 05:22:31'
    ] );
                
    User::create( [
    'id'=>200,
    'first_name'=>'Selamat Ithnin',
    'last_name'=>'Abdullah',
    'company'=>NULL,
    'username'=>'rheymie',
    'phone_number'=>'8616 3082',
    'role_id'=>'2',
    'email'=>'aymie5166@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$FC7BugPD9PhExOOZRSajueDsQUcd9AG7KJBzz0NKntCRY6zho65.2',
    'remember_token'=>'BnKlvHuKbzp1Ujk0rOac9wHIiBW1QD0JRzYzB3T2jWBSgrEBMGjEChA5LzrY',
    'created_at'=>'2020-07-13 12:28:33',
    'updated_at'=>'2020-07-13 13:34:38'
    ] );
                
    User::create( [
    'id'=>201,
    'first_name'=>'Andrea',
    'last_name'=>'Williams',
    'company'=>NULL,
    'username'=>'andrea.watts28',
    'phone_number'=>'1 (919) 824-9406',
    'role_id'=>'2',
    'email'=>'andrea.watts28@yahoo.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$h6tAd7zZfLOjb8EA6ghoUOFpmpX/QpRO1l.ltiU1I7sixFoWu355q',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-13 14:45:01',
    'updated_at'=>'2020-07-13 14:45:01'
    ] );
                
    User::create( [
    'id'=>202,
    'first_name'=>'Sandy',
    'last_name'=>'Bonofiglio',
    'company'=>NULL,
    'username'=>'sanbono',
    'phone_number'=>'(336) 302-8911',
    'role_id'=>'2',
    'email'=>'sandfig2014@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$x9s1EZkpmjJZG5DvcNODyubl9eJnJ7pxRKpgD5i4XRTR5ubtGjekm',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-13 16:58:55',
    'updated_at'=>'2020-07-13 16:58:55'
    ] );
                
    User::create( [
    'id'=>203,
    'first_name'=>'Kilee',
    'last_name'=>'Greene',
    'company'=>NULL,
    'username'=>'kagreene',
    'phone_number'=>'(928) 302-6362',
    'role_id'=>'2',
    'email'=>'kileeannegreene@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$6SLJPyKc8pnx4Srxf9Q.oOlrxf3J9D4JExLs0UmZlwFCFkgIyJvDC',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-13 18:50:48',
    'updated_at'=>'2020-07-13 18:50:48'
    ] );
                
    User::create( [
    'id'=>204,
    'first_name'=>'KEVIN',
    'last_name'=>'COLLINS',
    'company'=>NULL,
    'username'=>'kevinj',
    'phone_number'=>'1 (229) 400-7937',
    'role_id'=>'2',
    'email'=>'kjcollins1957@yahoo.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$/126cBkno2vTiNiEhz1A1u15i4dJws8jfpveWVV3mPl7ht1rH..Ra',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-13 18:58:40',
    'updated_at'=>'2020-07-13 18:58:40'
    ] );
                
    User::create( [
    'id'=>205,
    'first_name'=>'KIM',
    'last_name'=>'ABRAM',
    'company'=>NULL,
    'username'=>'postcardmom',
    'phone_number'=>'(323) 309-8924',
    'role_id'=>'2',
    'email'=>'kdabram@outlook.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$KP21jE7tL11RusnjshYx3.4s/Si91HEBIN5iQk8pIzfmGBzqwiTu.',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-13 19:06:04',
    'updated_at'=>'2020-07-13 19:06:04'
    ] );
                
    User::create( [
    'id'=>206,
    'first_name'=>'Fred',
    'last_name'=>'Heise',
    'company'=>NULL,
    'username'=>'homeboy',
    'phone_number'=>'(870) 761-2160',
    'role_id'=>'2',
    'email'=>'mywebster2000@aol.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$KhtUVkhp2v76ssLEDIckLuha.NUB7FOPx0vvDaPgwECzZngP9BdPy',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-13 19:06:05',
    'updated_at'=>'2020-07-13 19:06:05'
    ] );
                
    User::create( [
    'id'=>207,
    'first_name'=>'Glenn',
    'last_name'=>'Burgess',
    'company'=>NULL,
    'username'=>'moneygroup',
    'phone_number'=>'(727) 252-6235',
    'role_id'=>'2',
    'email'=>'bargainstore1975@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$UT.rwv0JStzO/OlJM8E32OyCJuWDV55ijTVUzNQoHK4sdEq2OWohW',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-13 19:25:11',
    'updated_at'=>'2020-07-13 19:25:11'
    ] );
                
    User::create( [
    'id'=>209,
    'first_name'=>'Diego',
    'last_name'=>'Cortazar',
    'company'=>NULL,
    'username'=>'1Dondiego',
    'phone_number'=>'(516) 828-2218',
    'role_id'=>'2',
    'email'=>'cortazardf@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$9OtuJgVveQU3QENWryQrx.4IQAiSAVz2fhQZUc1DkvrP2Kq76G0eG',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-13 20:59:55',
    'updated_at'=>'2020-07-13 20:59:55'
    ] );
                
    User::create( [
    'id'=>212,
    'first_name'=>'Donna',
    'last_name'=>'Mckelvin',
    'company'=>NULL,
    'username'=>'Purplelady7',
    'phone_number'=>'(404) 921-4671',
    'role_id'=>'2',
    'email'=>'dmack1000@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$SYmTxeF5iKYy4gCuWtd/N.hJ7kEYShu4IYOJxOxkKj5zvYdQGMceq',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-13 21:22:16',
    'updated_at'=>'2020-07-13 21:22:16'
    ] );
                
    User::create( [
    'id'=>213,
    'first_name'=>'Roger',
    'last_name'=>'Miller',
    'company'=>NULL,
    'username'=>'dreambig',
    'phone_number'=>'1 (574) 306-7558',
    'role_id'=>'2',
    'email'=>'rogermiller46580@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$i/kzuO/thU9UuLgLx.EecOwDYuqZA5BNDv3xDR4vCJK8hv6GPp5F2',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-13 21:40:16',
    'updated_at'=>'2020-07-13 21:40:16'
    ] );
                
    User::create( [
    'id'=>215,
    'first_name'=>'Verna',
    'last_name'=>'Jordan',
    'company'=>NULL,
    'username'=>'heavenly',
    'phone_number'=>'(713) 594-4874',
    'role_id'=>'2',
    'email'=>'retired.verna@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$RBxWdoqPRd1ZVSwc86VQ3Oa3qtgxpgMUYiCucwXdJ.RDPEoZQOmY2',
    'remember_token'=>'8LlICYS0FSS9PUBRRzgugdrd408yDTclOue0JRqUYWefbhqT0fdNb0rU6FMp',
    'created_at'=>'2020-07-13 21:43:16',
    'updated_at'=>'2020-07-13 22:13:05'
    ] );
                
    User::create( [
    'id'=>217,
    'first_name'=>'Darrel',
    'last_name'=>'Corcoran',
    'company'=>NULL,
    'username'=>'darrelc22',
    'phone_number'=>'(713) 823-2331',
    'role_id'=>'2',
    'email'=>'darrelc22@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$FnLAr6p9s4IANvw7ppnlmuvfomUUFPFbHzQGJFvyGeuxWHfzqJJbW',
    'remember_token'=>'eSumtuZPZtdqJ93nAiMZ4V5qx65AjkyOpxc4HvIVePOqBerBYcMVSkigmorA',
    'created_at'=>'2020-07-13 22:06:21',
    'updated_at'=>'2020-07-13 22:10:46'
    ] );
                
    User::create( [
    'id'=>218,
    'first_name'=>'Michael',
    'last_name'=>'Harber',
    'company'=>NULL,
    'username'=>'mrharber',
    'phone_number'=>'(775) 397-2295',
    'role_id'=>'2',
    'email'=>'goldminerharber@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$smuBb6JbvAgeBfvQQ/PIIOgHwOIK3o0Q3stazrLFbkpqZkZBBZT0m',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-13 22:20:39',
    'updated_at'=>'2020-07-13 22:20:39'
    ] );
                
    User::create( [
    'id'=>219,
    'first_name'=>'Paul',
    'last_name'=>'Dean',
    'company'=>NULL,
    'username'=>'healforgood',
    'phone_number'=>'(417) 543-279',
    'role_id'=>'2',
    'email'=>'healforgood@yahoo.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$SldnWml5gLYeuj.m.Y8Us.dKDPu1HCyhNuHgVlFGEBjz67PvUnKoy',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-13 23:11:35',
    'updated_at'=>'2020-07-13 23:11:35'
    ] );
                
    User::create( [
    'id'=>220,
    'first_name'=>'Bonner',
    'last_name'=>'Ministries',
    'company'=>NULL,
    'username'=>'bonmin',
    'phone_number'=>'(909) 945-3414',
    'role_id'=>'2',
    'email'=>'bonnerministries@protonmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$bTSxGKazG.4FkmkNGI35Auak7eBrEyj0M.xGFcLywhiFuMoHnC0xm',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-13 23:23:23',
    'updated_at'=>'2020-07-13 23:23:23'
    ] );
                
    User::create( [
    'id'=>221,
    'first_name'=>'Winsome',
    'last_name'=>'Broderick',
    'company'=>NULL,
    'username'=>'Ferguson7',
    'phone_number'=>'6477102120337',
    'role_id'=>'2',
    'email'=>'wafbroderick@yahoo.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$v/HMoYOggNKEw9EY2Di9JejLLVnXa8ohiYY/AiWrcFL2DxP4aG3HG',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-14 00:05:49',
    'updated_at'=>'2020-07-14 00:05:49'
    ] );
                
    User::create( [
    'id'=>222,
    'first_name'=>'Roxann',
    'last_name'=>'Brown',
    'company'=>NULL,
    'username'=>'Roxanne',
    'phone_number'=>'(876) 325-2017',
    'role_id'=>'2',
    'email'=>'roxannebrown1@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$tyo7Z.1kmLr1XS2vaM/2DORDX9By3T57l/.anUNDYu7RkQzc7cAY6',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-14 00:29:26',
    'updated_at'=>'2020-07-14 00:29:26'
    ] );
                
    User::create( [
    'id'=>226,
    'first_name'=>'Jamshid',
    'last_name'=>'Dehghanian',
    'company'=>NULL,
    'username'=>'almoss',
    'phone_number'=>'(240) 839-1994',
    'role_id'=>'2',
    'email'=>'almoss777@yahoo.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$kThTpW4rN7LQUgXUM1aQi.0T02U/dEL.Iz2kwfA/aRqp1jTa0Xkia',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-14 01:58:24',
    'updated_at'=>'2020-07-14 01:58:24'
    ] );
                
    User::create( [
    'id'=>228,
    'first_name'=>'Barrett',
    'last_name'=>'Martinez',
    'company'=>NULL,
    'username'=>'brotherbear',
    'phone_number'=>'(385) 319-5452',
    'role_id'=>'2',
    'email'=>'brotherbear8383@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$aenba4TkbfDyXPVa0dys0OvKbsa/rGGpQt9MQqyi4ORHn8cchOZOu',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-14 02:30:57',
    'updated_at'=>'2020-07-14 02:30:57'
    ] );
                
    User::create( [
    'id'=>229,
    'first_name'=>'Sandra',
    'last_name'=>'Miller',
    'company'=>NULL,
    'username'=>'sandym',
    'phone_number'=>'(256) 399-1477',
    'role_id'=>'2',
    'email'=>'ten2day@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$WJNtv44No/YJwnggBYfunuaqXTwj2Tx6YonOOqxWF/t9RfxIVN9xC',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-14 02:31:29',
    'updated_at'=>'2020-07-14 02:31:29'
    ] );
                
    User::create( [
    'id'=>231,
    'first_name'=>'James',
    'last_name'=>'Ousley',
    'company'=>NULL,
    'username'=>'barry76',
    'phone_number'=>'71380616777',
    'role_id'=>'2',
    'email'=>'barryousley@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$4q1XB0KVxUIBqZ47UedQjuS2O10k4S0Nq6B/Oia9ot13NLmsgBE1y',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-14 11:17:42',
    'updated_at'=>'2020-07-14 11:17:42'
    ] );
                
    User::create( [
    'id'=>232,
    'first_name'=>'Simon',
    'last_name'=>'Bridgewater',
    'company'=>NULL,
    'username'=>'bridgewater',
    'phone_number'=>'(917) 756-4510',
    'role_id'=>'2',
    'email'=>'bridgewstersimon@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$ZnHg2atZnYJShNG5YnNK..749tHt/zLw/UDXWLUX5kbv9BcVdsez.',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-14 18:24:26',
    'updated_at'=>'2020-07-14 18:24:26'
    ] );
                
    User::create( [
    'id'=>233,
    'first_name'=>'Benjamin',
    'last_name'=>'Frye jr.',
    'company'=>NULL,
    'username'=>'cinque',
    'phone_number'=>'859 309 2769',
    'role_id'=>'2',
    'email'=>'fryeb658@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$WLcHmZBiGhX7OJtXq9aES.zHiIDBh1IA2dZ0w9VMuU8ItvT3ciRGm',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-14 18:55:00',
    'updated_at'=>'2020-07-14 18:55:00'
    ] );
                
    User::create( [
    'id'=>234,
    'first_name'=>'Larry',
    'last_name'=>'Goudriaan',
    'company'=>NULL,
    'username'=>'LarryG',
    'phone_number'=>'(801) 694-5149',
    'role_id'=>'2',
    'email'=>'larry.goudriaan@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$UPCojMWeoF7IPZcAdtSf8uS75RZ2JocQKZq2Ed4tIlbedhMhzllj6',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-14 20:15:25',
    'updated_at'=>'2020-07-14 20:15:25'
    ] );
                
    User::create( [
    'id'=>235,
    'first_name'=>'Talaiasi',
    'last_name'=>'Aholelei',
    'company'=>NULL,
    'username'=>'Darius0243',
    'phone_number'=>'(909) 733-1022',
    'role_id'=>'2',
    'email'=>'Talaiasia@yahoo.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$XoSVXxQqpUsBOWZ8l2AIvuudMHzPT3z/QZtZJJZwg043JhAyFFijO',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-15 00:20:34',
    'updated_at'=>'2020-07-15 00:20:34'
    ] );
                
    User::create( [
    'id'=>236,
    'first_name'=>'Lynn',
    'last_name'=>'Hall',
    'company'=>NULL,
    'username'=>'lfhall',
    'phone_number'=>'(801) 444-3555',
    'role_id'=>'2',
    'email'=>'lfhfinancial@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$LsCyy9L2fv/ywE6Wzc98aOyz8Ys8oECpimwzchfO46loAn5yN8gVW',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-15 02:16:14',
    'updated_at'=>'2020-07-15 02:16:14'
    ] );
                
    User::create( [
    'id'=>238,
    'first_name'=>'Jerilyn',
    'last_name'=>'Law',
    'company'=>NULL,
    'username'=>'Jerilyn',
    'phone_number'=>'(801) 404-2833',
    'role_id'=>'2',
    'email'=>'esteembuilder@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$G0W9maVBx6auR2DHxXuy.OmL1TuQuTQGcmlilhblgw9oVnovII/JW',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-15 13:18:55',
    'updated_at'=>'2020-07-15 13:18:55'
    ] );
                
    User::create( [
    'id'=>239,
    'first_name'=>'Al',
    'last_name'=>'Keesey',
    'company'=>NULL,
    'username'=>'gokinc',
    'phone_number'=>'(608) 201-5634',
    'role_id'=>'2',
    'email'=>'alsintouch@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$G2KQLxX/fPal.5N9SVIpP.5YnlYJBmxD0Dzk1kRSRppqpzlc0vr16',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-15 15:34:41',
    'updated_at'=>'2020-07-15 15:34:41'
    ] );
                
    User::create( [
    'id'=>240,
    'first_name'=>'Jerald',
    'last_name'=>'Christianson',
    'company'=>NULL,
    'username'=>'jerryc4675',
    'phone_number'=>'(520) 278-1743',
    'role_id'=>'2',
    'email'=>'jerryc4swg@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$zWTMW4OJRa0NhJAilus1wOSxgMnvmYuVcll/stVRnVmStmI/kWO3K',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-15 17:35:16',
    'updated_at'=>'2020-07-15 17:35:16'
    ] );
                
    User::create( [
    'id'=>241,
    'first_name'=>'Gerald',
    'last_name'=>'Hull',
    'company'=>NULL,
    'username'=>'gghull',
    'phone_number'=>'(937) 717-9261',
    'role_id'=>'2',
    'email'=>'hullteamusa@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$.tr1uutZFH1i8S13e1T74Oo8SAhdbtIqkeV14bLk9PDHhHJ65xRGC',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-15 18:59:33',
    'updated_at'=>'2020-07-15 18:59:33'
    ] );
                
    User::create( [
    'id'=>242,
    'first_name'=>'Margie',
    'last_name'=>'Billow',
    'company'=>NULL,
    'username'=>'margieb',
    'phone_number'=>'(601) 483-9353',
    'role_id'=>'2',
    'email'=>'marg983@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$7jFPc8yPr45yFVp2Qg1OmOLmBHOm6muM1gVN0AMKw0aH/CXA5cWym',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-15 20:34:08',
    'updated_at'=>'2020-07-15 20:34:08'
    ] );
                
    User::create( [
    'id'=>244,
    'first_name'=>'Jeffery',
    'last_name'=>'Peterson',
    'company'=>NULL,
    'username'=>'jeffpete',
    'phone_number'=>'(765) 299-2085',
    'role_id'=>'2',
    'email'=>'jefferyptrsn07@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$gtjuQbDAvYIYuZP1vZtVsOC9tqrHRGCnjobUG4pCzaymhFo2VGZ9y',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-15 20:53:24',
    'updated_at'=>'2020-07-15 20:53:24'
    ] );
                
    User::create( [
    'id'=>245,
    'first_name'=>'Melvin',
    'last_name'=>'Johnson',
    'company'=>NULL,
    'username'=>'Tastic4',
    'phone_number'=>'(816) 809-3955',
    'role_id'=>'2',
    'email'=>'Kcmeljo@yahoo.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$cJN1oUHdouH2mfvJpqeHYOs5tZdi2y4zI/./3cV.QJUIsBIz25Hhy',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-15 20:57:22',
    'updated_at'=>'2020-07-15 20:57:22'
    ] );
                
    User::create( [
    'id'=>248,
    'first_name'=>'Allison',
    'last_name'=>'Flood',
    'company'=>NULL,
    'username'=>'allie',
    'phone_number'=>'(281) 779-0703',
    'role_id'=>'2',
    'email'=>'allieflood1978@yahoo.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$iS.PgtnQg6lIGTghxzXE8OiIo4x1AFLWPDrkWBHNDVv5KjXzWdrOK',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-15 22:36:30',
    'updated_at'=>'2020-07-15 22:36:30'
    ] );
                
    User::create( [
    'id'=>249,
    'first_name'=>'Makensie',
    'last_name'=>'Fisher',
    'company'=>NULL,
    'username'=>'queen',
    'phone_number'=>'(937) 244-4934',
    'role_id'=>'2',
    'email'=>'pinkwarriorbelles@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$qGO0Z40UVCdEMfTsPWfHNO2TXIsUiuvoKqCOTzo1jHb1nsUWwzbvW',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-15 22:39:39',
    'updated_at'=>'2020-07-15 22:39:39'
    ] );
                
    User::create( [
    'id'=>250,
    'first_name'=>'Dwen',
    'last_name'=>'Alexander',
    'company'=>NULL,
    'username'=>'dalexander',
    'phone_number'=>'(716) 834-9748',
    'role_id'=>'2',
    'email'=>'dwenalexander@protonmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$m7i0y.pV91B8i2i7A86nTuPqne3b8S5fAEODEgXVaGplUKly4Rh2S',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-15 23:26:55',
    'updated_at'=>'2020-07-15 23:26:55'
    ] );
                
    User::create( [
    'id'=>251,
    'first_name'=>'Juanita',
    'last_name'=>'Sheppard',
    'company'=>NULL,
    'username'=>'Godsgift',
    'phone_number'=>'(709) 640-5359',
    'role_id'=>'2',
    'email'=>'juanita.sheppard@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$u.Yqg4R3t65ba8EKma.gPeb1Ag3SgvLL6rKcKNDed3CzAhdJE8tGq',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-15 23:39:46',
    'updated_at'=>'2020-07-15 23:39:46'
    ] );
                
    User::create( [
    'id'=>252,
    'first_name'=>'Wayne',
    'last_name'=>'Young',
    'company'=>NULL,
    'username'=>'wyoung01',
    'phone_number'=>'(801) 916-4262',
    'role_id'=>'2',
    'email'=>'wyoung01@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$ApUxBeo8Xa9d4SY0KaLYVOV9Y2Jro5kROLqErvfpXj1EQ03bucsey',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-15 23:59:29',
    'updated_at'=>'2020-07-15 23:59:29'
    ] );
                
    User::create( [
    'id'=>254,
    'first_name'=>'Justo',
    'last_name'=>'Moreno',
    'company'=>NULL,
    'username'=>'justmoreno',
    'phone_number'=>'(626) 543-3375',
    'role_id'=>'2',
    'email'=>'lonestargeneral@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$TIEZpifLjlrbI6FEtNWKIu3SYXyixI0yRpAri8IOL.N8pLSfAV60W',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-16 00:44:00',
    'updated_at'=>'2020-07-16 00:44:00'
    ] );
                
    User::create( [
    'id'=>255,
    'first_name'=>'Victorio',
    'last_name'=>'Cisneros-Diaz',
    'company'=>NULL,
    'username'=>'elchino',
    'phone_number'=>'(248) 403-5003',
    'role_id'=>'2',
    'email'=>'CHINOVIC42@GMAIL.COM',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$RHGcqjCGXtRG.edv1e2MaOkXUHUY4Uid2tu0e2.zUrgoq/gaK44qe',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-16 01:08:02',
    'updated_at'=>'2020-07-16 01:08:02'
    ] );
                
    User::create( [
    'id'=>256,
    'first_name'=>'Gladys',
    'last_name'=>'Nwabuzor',
    'company'=>NULL,
    'username'=>'gladlife',
    'phone_number'=>'4199733320',
    'role_id'=>'2',
    'email'=>'gladlifebiz@yahoo.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$.IR2tXYgrLassSwwhDKquuDcwI/ECKAzBO7mtUg30JZamsu542gHq',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-16 02:06:24',
    'updated_at'=>'2020-07-16 02:06:24'
    ] );
                
    User::create( [
    'id'=>257,
    'first_name'=>'Eugene',
    'last_name'=>'Moseley',
    'company'=>NULL,
    'username'=>'etmoseley',
    'phone_number'=>'(804) 316-6817',
    'role_id'=>'2',
    'email'=>'eugenemoseley@yahoo.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$vV53yH0I7fsDh1yE4b3llOXEWgcWutAS/H73aL6IyLhDBP4WRKxdG',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-16 02:26:05',
    'updated_at'=>'2020-07-16 02:26:05'
    ] );
                
    User::create( [
    'id'=>258,
    'first_name'=>'Lee Ann',
    'last_name'=>'Mitchell',
    'company'=>NULL,
    'username'=>'Iowa911',
    'phone_number'=>'(918) 350-1277',
    'role_id'=>'2',
    'email'=>'leeann_1961@yahoo.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$tee9huZgg8t5MZW3ddOV2ehqvQ0HuZimQ8I7Aow6pqJ59s626K2ha',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-16 02:32:46',
    'updated_at'=>'2020-07-16 02:32:46'
    ] );
                
    User::create( [
    'id'=>259,
    'first_name'=>'Alexander',
    'last_name'=>'Bonds',
    'company'=>NULL,
    'username'=>'Alexbonds',
    'phone_number'=>'(404) 645-4498',
    'role_id'=>'2',
    'email'=>'troybonds@att.net',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$rkx5HKLIqt4.ocDBLQNUO.OuswZ0vTHAMPhey7MS5wdEeto9cmlhC',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-16 02:35:16',
    'updated_at'=>'2020-07-16 02:35:16'
    ] );
                
    User::create( [
    'id'=>260,
    'first_name'=>'Brooke',
    'last_name'=>'HILDRETH',
    'company'=>NULL,
    'username'=>'IAOK911',
    'phone_number'=>'(918) 202-9058',
    'role_id'=>'2',
    'email'=>'brookehildreth1010@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$g5RjSQqd/W22CBWCZWs4Qe2auMAbyx.yLqkmExKIaONy3d2phkCS.',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-16 02:46:25',
    'updated_at'=>'2020-07-16 02:46:25'
    ] );
                
    User::create( [
    'id'=>261,
    'first_name'=>'Emily',
    'last_name'=>'Olomiye',
    'company'=>NULL,
    'username'=>'IAMO911',
    'phone_number'=>'(660) 864-4061',
    'role_id'=>'2',
    'email'=>'emilyolomiye@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$l8FvnY4EPPI.obY6wkXgoO/wiw71eRh10bmBUwrzdBi2Y9k4hACqC',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-16 02:54:39',
    'updated_at'=>'2020-07-16 02:54:39'
    ] );
                
    User::create( [
    'id'=>262,
    'first_name'=>'Jerome',
    'last_name'=>'Pittman',
    'company'=>NULL,
    'username'=>'Transitions',
    'phone_number'=>'(240) 606-6384',
    'role_id'=>'2',
    'email'=>'drjpittman@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$2aDAyKtDMr0GnqW0FmMKtucI.pOz3LiivxglmJgrwU2xi1zbQ4F7S',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-16 03:37:55',
    'updated_at'=>'2020-07-16 03:37:55'
    ] );
                
    User::create( [
    'id'=>263,
    'first_name'=>'Carlett D.',
    'last_name'=>'Fleming',
    'company'=>NULL,
    'username'=>'workwithcarlett',
    'phone_number'=>'(708) 214-4905',
    'role_id'=>'2',
    'email'=>'workwithcarlett@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$0NHZdXeahL482R07MJ3sX.dVjAqRSjLAuo54lOuy1GeuwKY2AdHuG',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-16 03:53:34',
    'updated_at'=>'2020-07-16 03:53:34'
    ] );
                
    User::create( [
    'id'=>264,
    'first_name'=>'Jeremy',
    'last_name'=>'Waugh',
    'company'=>NULL,
    'username'=>'jeremyw',
    'phone_number'=>'(623) 698-8674',
    'role_id'=>'2',
    'email'=>'jwaugh33@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$XlgT7hESvcrooJH2vat41eY0ZtSiJRodS.ZY.5/dPtvV61dHmCP2K',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-16 04:14:42',
    'updated_at'=>'2020-07-16 04:14:42'
    ] );
                
    User::create( [
    'id'=>265,
    'first_name'=>'Sonya',
    'last_name'=>'Harris',
    'company'=>NULL,
    'username'=>'sharris',
    'phone_number'=>'(678) 768-9375',
    'role_id'=>'2',
    'email'=>'smharris222@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$7bK17RMGP5iKysoZzByEYeOBNo6WiG2Gfl3VQ.u7wz4neSctYzoA.',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-16 12:42:11',
    'updated_at'=>'2020-07-16 12:42:11'
    ] );
                
    User::create( [
    'id'=>267,
    'first_name'=>'Gary',
    'last_name'=>'Geverts',
    'company'=>NULL,
    'username'=>'Geverts',
    'phone_number'=>'(516) 924-0773',
    'role_id'=>'2',
    'email'=>'ggeverts@yahoo.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$/VpjUfrv68vXxNIHXaNQvedc6K4vrFO1VsX2lP/IyjKrk.ecfnrkK',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-16 12:47:37',
    'updated_at'=>'2020-07-16 12:47:37'
    ] );
                
    User::create( [
    'id'=>268,
    'first_name'=>'Larry',
    'last_name'=>'Peckham',
    'company'=>NULL,
    'username'=>'larrysbiz',
    'phone_number'=>'(417) 499-3173',
    'role_id'=>'2',
    'email'=>'larrypeckham@yahoo.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$tyAHTcOBzoWRcssFG/IYqOyaUYEajMyUM2XHsNAxUccYdCV9QQqRC',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-16 13:53:26',
    'updated_at'=>'2020-07-16 13:53:26'
    ] );
                
    User::create( [
    'id'=>270,
    'first_name'=>'Josefa',
    'last_name'=>'Van Nevel',
    'company'=>NULL,
    'username'=>'hope4all',
    'phone_number'=>'(561) 313-7295',
    'role_id'=>'2',
    'email'=>'josefavannevel@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$2Y16LjcNhR2xQ1TquIcateVaVw7mdoEwDH.jeYrfbGrPSmS.tuVRq',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-16 14:03:17',
    'updated_at'=>'2020-07-16 14:03:17'
    ] );
                
    User::create( [
    'id'=>271,
    'first_name'=>'ROBIN',
    'last_name'=>'PETERS',
    'company'=>NULL,
    'username'=>'robinpeters61',
    'phone_number'=>'(770) 676-4630',
    'role_id'=>'2',
    'email'=>'happyatlast1961@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$YRd6AhU4NpZvdwgvhD0dOO.M4aV6UwGQ8JV1DBp5vJ99ydZGsu6Ke',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-16 14:20:34',
    'updated_at'=>'2020-07-16 14:20:34'
    ] );
                
    User::create( [
    'id'=>272,
    'first_name'=>'Linda',
    'last_name'=>'Frane',
    'company'=>NULL,
    'username'=>'forlinda',
    'phone_number'=>'(559) 346-1746',
    'role_id'=>'2',
    'email'=>'lindafrane1946@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$mititR573TCY6UjeztouGe0FWOyrU1nVfTVdLY.FbgxLA2t6NbB5m',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-16 15:13:16',
    'updated_at'=>'2020-07-16 15:13:16'
    ] );
                
    User::create( [
    'id'=>273,
    'first_name'=>'Men',
    'last_name'=>'Nguyen',
    'company'=>NULL,
    'username'=>'prospermen',
    'phone_number'=>'(757) 317-1083',
    'role_id'=>'2',
    'email'=>'prospermen@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$xOe/Uc.NKHzqrwcpD3ek2.BfPtSS9hbL/hCQvJiBtgKrovOGHL3J2',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-16 15:14:47',
    'updated_at'=>'2020-07-16 15:14:47'
    ] );
                
    User::create( [
    'id'=>274,
    'first_name'=>'Danny',
    'last_name'=>'Connell',
    'company'=>NULL,
    'username'=>'dannyconnell',
    'phone_number'=>'1 (404) 395-8739',
    'role_id'=>'2',
    'email'=>'mrdannyconnell@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$vhGtRWfQJwBIgprXuhEB3ODzaKR1cSKKJyRCHD1WOavcAtBdxCEhW',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-16 15:24:26',
    'updated_at'=>'2020-07-16 15:24:26'
    ] );
                
    User::create( [
    'id'=>275,
    'first_name'=>'Anita',
    'last_name'=>'Solomon',
    'company'=>NULL,
    'username'=>'asolomon',
    'phone_number'=>'(912) 532-1326',
    'role_id'=>'2',
    'email'=>'anitabas2002@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$TDCAXcgn9h1BmsWwcZNd..kjq9qKBIQpy4c8Iqr3LRmTml2un3qgW',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-16 16:32:42',
    'updated_at'=>'2020-07-16 16:32:42'
    ] );
                
    User::create( [
    'id'=>276,
    'first_name'=>'Janice',
    'last_name'=>'Greenhill',
    'company'=>NULL,
    'username'=>'Janice',
    'phone_number'=>'(705) 261-2488',
    'role_id'=>'2',
    'email'=>'j.greenhill@hotmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$ylIpLloEoqzJLlENal4bDuGkA7Of.QytmU6l7WdMSQ1Rgqkk9zpW2',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-16 17:08:51',
    'updated_at'=>'2020-07-16 17:08:51'
    ] );
                
    User::create( [
    'id'=>277,
    'first_name'=>'MICHAEL',
    'last_name'=>'LOPEZ',
    'company'=>NULL,
    'username'=>'MLO717',
    'phone_number'=>'(516) 717-7407',
    'role_id'=>'2',
    'email'=>'MICHAEL@AURUMSP.COM',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$wqAaWLABh.knZx5MqqgQa.b9Dd88./YoNiAYkiaPFHXAZOiHZ9vfC',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-16 17:29:41',
    'updated_at'=>'2020-07-16 17:29:41'
    ] );
                
    User::create( [
    'id'=>278,
    'first_name'=>'Bill',
    'last_name'=>'DeLong',
    'company'=>NULL,
    'username'=>'bill4266',
    'phone_number'=>'(402) 745-6331',
    'role_id'=>'2',
    'email'=>'billdelong70@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$8AoaiB6AF7KHMLTdc8DEP.3WfrMI9wTYCP2eFrpPrwKJlwmXGKYh6',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-16 17:50:48',
    'updated_at'=>'2020-07-16 17:50:48'
    ] );
                
    User::create( [
    'id'=>279,
    'first_name'=>'Margaret',
    'last_name'=>'Mead',
    'company'=>NULL,
    'username'=>'Margaret',
    'phone_number'=>'(647) 896-3488',
    'role_id'=>'2',
    'email'=>'mmmead2010@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$spkmPhk31PZPHpW3v.A2Ue5G4FFO.9YHJj4YLk/WHG9owSba4OyQC',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-16 18:12:19',
    'updated_at'=>'2020-07-16 18:12:19'
    ] );
                
    User::create( [
    'id'=>280,
    'first_name'=>'Gene',
    'last_name'=>'Silvey',
    'company'=>NULL,
    'username'=>'gasitup',
    'phone_number'=>'(623) 336-0908',
    'role_id'=>'2',
    'email'=>'allensilvey@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$P1H3uVApkg20XrvQnoXyO.3LSj8l8ty3Tir.KjidH6oCYyaMO.Age',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-16 18:27:00',
    'updated_at'=>'2020-07-16 18:27:00'
    ] );
                
    User::create( [
    'id'=>281,
    'first_name'=>'Linda',
    'last_name'=>'Dubois',
    'company'=>NULL,
    'username'=>'moneystreams',
    'phone_number'=>'(818) 392-9734',
    'role_id'=>'2',
    'email'=>'girlsinc1@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$KI7km8Q8E6hM3Ijci8Z/iervU7/9hWqj2ZHuoE8.DO6JEliwbB7mW',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-16 18:33:10',
    'updated_at'=>'2020-07-16 18:33:10'
    ] );
                
    User::create( [
    'id'=>283,
    'first_name'=>'Richard',
    'last_name'=>'Frank',
    'company'=>NULL,
    'username'=>'frankindustries',
    'phone_number'=>'(440) 265-4780',
    'role_id'=>'2',
    'email'=>'franksqualityproducts@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$T0pYLEunQDOkyZAFScDqseOr2yt8NJbuZoTSJeu.HP9iiZ4QoRgfS',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-16 19:09:29',
    'updated_at'=>'2020-07-16 19:09:29'
    ] );
                
    User::create( [
    'id'=>284,
    'first_name'=>'Freddie R',
    'last_name'=>'White',
    'company'=>NULL,
    'username'=>'freddyw118',
    'phone_number'=>'(916) 288-5929',
    'role_id'=>'2',
    'email'=>'freddyw118@aol.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$tOQ10Nr.UT7ywgLWVSY7AO2O.Bz2gVFRX3wvjqSH7ml/uYNQrEmHq',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-16 19:46:40',
    'updated_at'=>'2020-07-16 19:46:40'
    ] );
                
    User::create( [
    'id'=>285,
    'first_name'=>'Keisha',
    'last_name'=>'White',
    'company'=>NULL,
    'username'=>'GoodVibes',
    'phone_number'=>'(530) 364-8646',
    'role_id'=>'2',
    'email'=>'keishaawhite@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$N5UhtPywuRML1bIu7i6eXeAa.EL/ikCAGbcNGM9XfcUtU6VFco5xK',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-16 19:52:59',
    'updated_at'=>'2020-07-16 19:52:59'
    ] );
                
    User::create( [
    'id'=>286,
    'first_name'=>'Samuel',
    'last_name'=>'White JR',
    'company'=>NULL,
    'username'=>'secondwhite',
    'phone_number'=>'(916) 922-3562',
    'role_id'=>'2',
    'email'=>'secondwhite@yahoo.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$QlafiEwj0C/7XA7KTTiI8uePPCUN9RA3Fjb2jf0.Yk/C8wnuQhFCu',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-16 20:02:51',
    'updated_at'=>'2020-07-16 20:02:51'
    ] );
                
    User::create( [
    'id'=>287,
    'first_name'=>'walkita',
    'last_name'=>'white',
    'company'=>NULL,
    'username'=>'prettygreen55',
    'phone_number'=>'(916) 410-1892',
    'role_id'=>'2',
    'email'=>'prettygreen55@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$00GrY.1QpO85yVc20hB66.dSFvHlBZTPo8/4mEhFlLQY2dkjyB7gS',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-16 20:06:07',
    'updated_at'=>'2020-07-16 20:06:07'
    ] );
                
    User::create( [
    'id'=>288,
    'first_name'=>'Raymond L',
    'last_name'=>'Murphy',
    'company'=>NULL,
    'username'=>'freedom225',
    'phone_number'=>'(706) 536-9456',
    'role_id'=>'2',
    'email'=>'225freedom@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$HuG6d1C2x6AyqS7Cn6OKDOlxO54b0VoYgRS4dbYfU5.08nFRzS3qC',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-16 20:40:14',
    'updated_at'=>'2020-07-16 20:40:14'
    ] );
                
    User::create( [
    'id'=>289,
    'first_name'=>'Eric',
    'last_name'=>'Watson',
    'company'=>NULL,
    'username'=>'Delwood2909',
    'phone_number'=>'3257250667',
    'role_id'=>'2',
    'email'=>'watsoneric957@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$zFuRzPlQt/zxGB7ryhnkj.CDRfCGKQm2E4bt9BGDX06M3F06.Y0my',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-16 20:50:47',
    'updated_at'=>'2020-07-16 20:50:47'
    ] );
                
    User::create( [
    'id'=>290,
    'first_name'=>'Courtney',
    'last_name'=>'Hill',
    'company'=>NULL,
    'username'=>'cnoelh@aol.com',
    'phone_number'=>'(813) 610-4100',
    'role_id'=>'2',
    'email'=>'cnoelh@aol.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$dgY5zdl.cP8AA8dYIxx18.sMNUCGtKslKJbYOevmcWI2Y3x0C0tu2',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-16 21:02:03',
    'updated_at'=>'2020-07-16 21:02:03'
    ] );
                
    User::create( [
    'id'=>291,
    'first_name'=>'Shelby',
    'last_name'=>'Hill',
    'company'=>NULL,
    'username'=>'Chantel04',
    'phone_number'=>'(813) 610-4110',
    'role_id'=>'2',
    'email'=>'shelby.hill5@hotmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$x55oEG1Xt57NJzYpVfWpm.MzcG.oQEGYhrMWvvHAwdlFIo/kwMfky',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-16 21:26:59',
    'updated_at'=>'2020-07-16 21:26:59'
    ] );
                
    User::create( [
    'id'=>292,
    'first_name'=>'Wilfred',
    'last_name'=>'DeLong Jr',
    'company'=>NULL,
    'username'=>'bill68871',
    'phone_number'=>'(402) 366-1488',
    'role_id'=>'2',
    'email'=>'bill688714@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$VmKZ0B8NHgVZCMzzGlZ.C.43gX3EVcMGX9U6gpgUR3rO4ujJskNK.',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-16 21:30:13',
    'updated_at'=>'2020-07-16 21:30:13'
    ] );
                
    User::create( [
    'id'=>293,
    'first_name'=>'Phyllis',
    'last_name'=>'Mckeiver',
    'company'=>NULL,
    'username'=>'pcfmck1224',
    'phone_number'=>'(202) 441-7267',
    'role_id'=>'2',
    'email'=>'pcfmcc@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$bPyvNRovzL.pu/UIhsZi9OTdEvjoukMUrB2DApZMNmdOF4nooVLy2',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-16 21:47:20',
    'updated_at'=>'2020-07-16 21:47:20'
    ] );
                
    User::create( [
    'id'=>294,
    'first_name'=>'Maxine',
    'last_name'=>'Budd',
    'company'=>NULL,
    'username'=>'Maxine Budd',
    'phone_number'=>'4169177361',
    'role_id'=>'2',
    'email'=>'maxinebudd64@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$aoOIMWgmvsRgRXHvy7bHh.QRXoJfuiib0NgWQM1bKcqgXS.3XtEfa',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-16 23:48:40',
    'updated_at'=>'2020-07-16 23:48:40'
    ] );
                
    User::create( [
    'id'=>295,
    'first_name'=>'Jhulsz',
    'last_name'=>'Emily',
    'company'=>NULL,
    'username'=>'wealthrock',
    'phone_number'=>'(403) 512-4423',
    'role_id'=>'2',
    'email'=>'wealthrockinc@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$wyonk4KlFFymGNIUrFKMPOH8MvyGs6BmtEBQf83clB8Sfv4ngQSFm',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-16 23:50:37',
    'updated_at'=>'2020-07-16 23:50:37'
    ] );
                
    User::create( [
    'id'=>296,
    'first_name'=>'Michael',
    'last_name'=>'Teague',
    'company'=>NULL,
    'username'=>'realmoney99',
    'phone_number'=>'(267) 281-9400',
    'role_id'=>'2',
    'email'=>'michaelteague2004@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$nrTJ.6GCRMgVCICRRcA9C.dqD8zYzWO8ZW/on7svlhOQNbqfwNiBK',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-17 00:55:00',
    'updated_at'=>'2020-07-17 00:55:00'
    ] );
                
    User::create( [
    'id'=>297,
    'first_name'=>'charles j',
    'last_name'=>'williams',
    'company'=>NULL,
    'username'=>'williams1954',
    'phone_number'=>'(336) 340-4913',
    'role_id'=>'2',
    'email'=>'williamscharlesj6@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$bUR2qlF8QP3STfSRhGX56.JG/hVNSuZ01oihrIZ8b5R3ay2mvV24C',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-17 02:33:07',
    'updated_at'=>'2020-07-17 02:33:07'
    ] );
                
    User::create( [
    'id'=>298,
    'first_name'=>'Rodney',
    'last_name'=>'Jinks',
    'company'=>NULL,
    'username'=>'rjinks',
    'phone_number'=>'(469) 334-1366',
    'role_id'=>'2',
    'email'=>'rodneyjinks@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$UKFkKiO1urYtNmW2xkDNOOhCoV5jwF2G8nfNSozdsifoxgcyTuQU6',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-17 02:45:15',
    'updated_at'=>'2020-07-17 02:45:15'
    ] );
                
    User::create( [
    'id'=>299,
    'first_name'=>'Ting',
    'last_name'=>'Tin Meng',
    'company'=>NULL,
    'username'=>'autocash57',
    'phone_number'=>'127566086',
    'role_id'=>'2',
    'email'=>'autocash57@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$IIxwpFI5842vRJ/rhl5thusA03Yx7hSv/wS4rr.wM4i8dB6nt8ll6',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-17 02:54:06',
    'updated_at'=>'2020-07-17 02:54:06'
    ] );
                
    User::create( [
    'id'=>300,
    'first_name'=>'Ken',
    'last_name'=>'McElroy',
    'company'=>NULL,
    'username'=>'kenmcelroy',
    'phone_number'=>'(925) 457-6758',
    'role_id'=>'2',
    'email'=>'kenmcelroy5@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$5MxV8l36wiUTk0ybzabj9emsCrP1FVkbDeBIbmxEm8nssxhp72Ncy',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-17 04:51:43',
    'updated_at'=>'2020-07-17 04:51:43'
    ] );
                
    User::create( [
    'id'=>301,
    'first_name'=>'Homer',
    'last_name'=>'Murphy',
    'company'=>NULL,
    'username'=>'backhome',
    'phone_number'=>'(252) 287-2145',
    'role_id'=>'2',
    'email'=>'h.or.m16140@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$qdGfGTCG1a7lxILijXIU3eIAd8xprxvQMgd395Yo9ao1qz0kChZcO',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-17 04:59:44',
    'updated_at'=>'2020-07-17 04:59:44'
    ] );
                
    User::create( [
    'id'=>302,
    'first_name'=>'Rashenique',
    'last_name'=>'Barclay',
    'company'=>NULL,
    'username'=>'freedom962',
    'phone_number'=>'(706) 905-0584',
    'role_id'=>'2',
    'email'=>'raecaptial@yahoo.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$DdFvUYUZg1mvSSZjh4GfleWomT/xfwahL4rGKYZ1jT.5bjQkxx7pm',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-17 05:20:50',
    'updated_at'=>'2020-07-17 05:20:50'
    ] );
                
    User::create( [
    'id'=>303,
    'first_name'=>'Muddis',
    'last_name'=>'Weaver',
    'company'=>NULL,
    'username'=>'freedom443',
    'phone_number'=>'(334) 291-0495',
    'role_id'=>'2',
    'email'=>'muddisweaver@hotmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$8B2/Sj5dbw9oFCksgSVZnu8aX9u/qY5hp66iEqLLLxKT6bpMqQnyi',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-17 05:28:17',
    'updated_at'=>'2020-07-17 05:28:17'
    ] );
                
    User::create( [
    'id'=>304,
    'first_name'=>'justin',
    'last_name'=>'l',
    'company'=>NULL,
    'username'=>'snk48',
    'phone_number'=>'(800) 520-8800',
    'role_id'=>'2',
    'email'=>'nimol34@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$b5Tynmk6cTxTZIM6WswjHu73yZq.PV/Y9zKMgrwuLzXBpdsRDFucm',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-17 11:09:03',
    'updated_at'=>'2020-07-17 11:09:03'
    ] );
                
    User::create( [
    'id'=>305,
    'first_name'=>'James',
    'last_name'=>'Whittaker',
    'company'=>NULL,
    'username'=>'jimwhittaker',
    'phone_number'=>'(856) 207-8557',
    'role_id'=>'2',
    'email'=>'jimwhittaker@greatmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$xv/oWRnRnx4TyuIT5OQXxeztkPvVWFJK2/6nnrEJzFFLFuYIHIVzy',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-17 13:42:15',
    'updated_at'=>'2020-07-17 13:42:15'
    ] );
                
    User::create( [
    'id'=>306,
    'first_name'=>'Eric',
    'last_name'=>'Follon',
    'company'=>NULL,
    'username'=>'Incomehelp',
    'phone_number'=>'17192006719',
    'role_id'=>'2',
    'email'=>'helpforincome@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$LSS.JJCeAK6t/4gDYfjZl.vPqIhl0T/FwNC6dcwtfCNqwsoShTaXq',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-17 14:17:47',
    'updated_at'=>'2020-07-17 14:17:47'
    ] );
                
    User::create( [
    'id'=>307,
    'first_name'=>'Richard',
    'last_name'=>'Ohlmann',
    'company'=>NULL,
    'username'=>'Utahgold1',
    'phone_number'=>'8018597140',
    'role_id'=>'2',
    'email'=>'richard.ohlmann@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$.Qub5Gi58BD3HwdHLCeVtOiQVcUHrjTP9s6FEyHATNuQwz53pqicW',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-17 14:42:42',
    'updated_at'=>'2020-07-17 14:42:42'
    ] );
                
    User::create( [
    'id'=>308,
    'first_name'=>'Jane',
    'last_name'=>'Heise',
    'company'=>NULL,
    'username'=>'homegirl',
    'phone_number'=>'(870) 273-6888',
    'role_id'=>'2',
    'email'=>'janeheise@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$rY47DT0da7slPA5lRg.xx.KjO9UzoqwSvMsxKWzLxKc88pUSr4M7G',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-17 14:51:15',
    'updated_at'=>'2020-07-17 14:51:15'
    ] );
                
    User::create( [
    'id'=>309,
    'first_name'=>'Henry',
    'last_name'=>'Davis',
    'company'=>NULL,
    'username'=>'moomoo',
    'phone_number'=>'(805) 890-1612',
    'role_id'=>'2',
    'email'=>'henrydavis1205@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$QKhh9OrPNyqvOuTtCdLsE.U2AEjM5ASOVoAwfA3M0GcxtF3tkrzq2',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-17 15:50:44',
    'updated_at'=>'2020-07-17 15:50:44'
    ] );
                
    User::create( [
    'id'=>310,
    'first_name'=>'Stephon',
    'last_name'=>'Summers',
    'company'=>NULL,
    'username'=>'dmvwealtheam',
    'phone_number'=>'(202) 813-5048',
    'role_id'=>'2',
    'email'=>'dmvwealthteam@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$LaR6FunrjXS73zNtzmff5OwG1UPIiFLFuthkfJg2FDDVW6UHCKWsW',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-17 16:39:30',
    'updated_at'=>'2020-07-17 16:39:30'
    ] );
                
    User::create( [
    'id'=>311,
    'first_name'=>'Biah',
    'last_name'=>'Buchongo',
    'company'=>NULL,
    'username'=>'world2wealth',
    'phone_number'=>'(510) 880-9107',
    'role_id'=>'2',
    'email'=>'door2wealth13@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$Ibex50cBbVCyt3CtNUpmZOA2fIGIUkGNnMYY8wpD.WE045H5LbeKC',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-17 16:50:57',
    'updated_at'=>'2020-07-17 16:50:57'
    ] );
                
    User::create( [
    'id'=>312,
    'first_name'=>'Craig',
    'last_name'=>'Taylor',
    'company'=>NULL,
    'username'=>'craig',
    'phone_number'=>'(801) 427-6379',
    'role_id'=>'2',
    'email'=>'heirdu22@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$nTmrsp.O9U7T6KAQBpRMA.jv1nTl0BLU6H6mYbmif5NeA5jIijhfu',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-17 18:40:29',
    'updated_at'=>'2020-07-17 18:40:29'
    ] );
                
    User::create( [
    'id'=>313,
    'first_name'=>'Lunkhothang',
    'last_name'=>'Touthang',
    'company'=>NULL,
    'username'=>'thangboi',
    'phone_number'=>'070856 02166',
    'role_id'=>'2',
    'email'=>'tlunkhothang@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$WcwJHDAE4.l9WisiwD5sneRlabhMyMbKfpb5ll.ldfq1gIlcPJnyO',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-17 18:43:29',
    'updated_at'=>'2020-07-17 18:43:29'
    ] );
                
    User::create( [
    'id'=>314,
    'first_name'=>'Marcus',
    'last_name'=>'Moseley',
    'company'=>NULL,
    'username'=>'vawarrior',
    'phone_number'=>'(804) 254-3209',
    'role_id'=>'2',
    'email'=>'mtm_4085@yahoo.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$55Taf8QGIi9rDyEoqfPoq.lxH3M8GCE.FLYymruLyaj9RMcV4smf2',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-17 19:24:50',
    'updated_at'=>'2020-07-17 19:24:50'
    ] );
                
    User::create( [
    'id'=>315,
    'first_name'=>'Janet',
    'last_name'=>'Reed',
    'company'=>NULL,
    'username'=>'jlr8082',
    'phone_number'=>'(813) 927-3713',
    'role_id'=>'2',
    'email'=>'janetreed29@yahoo.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$ltfsb7P0hd3BK2KeQ8ADsO.wxA8uswI1K6PRughRSLft9eTzyYRrO',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-17 20:27:51',
    'updated_at'=>'2020-07-17 20:27:51'
    ] );
                
    User::create( [
    'id'=>316,
    'first_name'=>'Iris',
    'last_name'=>'Palmer-Johnson',
    'company'=>NULL,
    'username'=>'IrisPJohnson',
    'phone_number'=>'(323) 365-1418',
    'role_id'=>'2',
    'email'=>'ReferralWealthQueen@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$7eT2ADD.hAJ0m.jKrZrdg.eRLRF4HqeLurEAKR8LRq1/qlRVnM49u',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-17 21:35:57',
    'updated_at'=>'2020-07-17 21:35:57'
    ] );
                
    User::create( [
    'id'=>317,
    'first_name'=>'Debra',
    'last_name'=>'Kemp',
    'company'=>NULL,
    'username'=>'DebraKemp',
    'phone_number'=>'1 (234) 567-890',
    'role_id'=>'2',
    'email'=>'kempdks@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$4sKGb68jUakVYDGMVk.i6.3nnzl4OAzvNEQa7MVz/AGx1uOszDZ0i',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-17 21:52:16',
    'updated_at'=>'2020-07-17 21:52:16'
    ] );
                
    User::create( [
    'id'=>318,
    'first_name'=>'Caleb',
    'last_name'=>'White',
    'company'=>NULL,
    'username'=>'caleb',
    'phone_number'=>'(903) 316-3083',
    'role_id'=>'2',
    'email'=>'caleb@soundharborfinancial.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$ZKh9dj4RUrYiZA7EUam7certEYfi2Jm6pVAS0iMlmyeOnDLAlEFt.',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-17 22:09:26',
    'updated_at'=>'2020-07-17 22:09:26'
    ] );
                
    User::create( [
    'id'=>319,
    'first_name'=>'GENE JAMES',
    'last_name'=>'JIRAK',
    'company'=>NULL,
    'username'=>'newlifegene',
    'phone_number'=>'(563) 313-0022',
    'role_id'=>'2',
    'email'=>'gjj69@hotmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$PqpjG5KnDX0VerNovck3bO2zub9PJmCEoTj62qmGr34Qmy3snr/ha',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-17 22:11:47',
    'updated_at'=>'2020-07-17 22:11:47'
    ] );
                
    User::create( [
    'id'=>320,
    'first_name'=>'Matthew',
    'last_name'=>'Garzillo',
    'company'=>NULL,
    'username'=>'Betterlife',
    'phone_number'=>'(484) 515-2960',
    'role_id'=>'2',
    'email'=>'mrgarzillo@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$hKZjyRiAk9XleJhGpIu8Ee4/emV3/FRDldUkyLXv3VqS/zUjB41IC',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-17 23:32:59',
    'updated_at'=>'2020-07-17 23:32:59'
    ] );
                
    User::create( [
    'id'=>321,
    'first_name'=>'Wanda',
    'last_name'=>'Woods',
    'company'=>NULL,
    'username'=>'Wanda',
    'phone_number'=>'(205) 872-2995',
    'role_id'=>'2',
    'email'=>'wwoods598@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$8HpK9PIgbqmTGthXuDHHhul6djMPue7QojJa4FkwQBVBe.VKaGHOe',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-18 06:27:17',
    'updated_at'=>'2020-07-18 06:27:17'
    ] );
                
    User::create( [
    'id'=>322,
    'first_name'=>'Virgie',
    'last_name'=>'Adejumo',
    'company'=>NULL,
    'username'=>'vaquality',
    'phone_number'=>'(312) 502-3082',
    'role_id'=>'2',
    'email'=>'vadejumo344@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$8FVv3x/QiucjW4v7pU5DlOlCBWlbTsWPT03KbEkzlcTk50PGOPSUO',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-18 09:08:07',
    'updated_at'=>'2020-07-18 09:08:07'
    ] );
                
    User::create( [
    'id'=>323,
    'first_name'=>'Monique',
    'last_name'=>'McMurtry',
    'company'=>NULL,
    'username'=>'monique0124',
    'phone_number'=>'(248) 991-7064',
    'role_id'=>'2',
    'email'=>'mcmurtry1908@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$pCUhZXkVeq30qIeJLDvogOX.R2W50mosz5XMtZQhrAgKxGtwl5CnG',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-18 11:41:40',
    'updated_at'=>'2020-07-18 11:41:40'
    ] );
                
    User::create( [
    'id'=>324,
    'first_name'=>'Rosemary',
    'last_name'=>'Bridges',
    'company'=>NULL,
    'username'=>'Lady01Leigh',
    'phone_number'=>'(437) 333-3484',
    'role_id'=>'2',
    'email'=>'rose.bridges@hotmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$tFf/Uu6T6TIrFbmsgiDaHOIgQ2MRy7S1Gwmf8LSgkhd/BoV3KvrvW',
    'remember_token'=>'HbNvrWjKD8Cslzb6O4kT9rCsVdUO5art8OkZL76xVPRR8Ix0S0aKwdf6W8mw',
    'created_at'=>'2020-07-18 12:19:01',
    'updated_at'=>'2020-07-18 12:22:34'
    ] );
                
    User::create( [
    'id'=>325,
    'first_name'=>'Kenneth',
    'last_name'=>'Welch',
    'company'=>NULL,
    'username'=>'kenwel',
    'phone_number'=>'(404) 272-4854',
    'role_id'=>'2',
    'email'=>'kenwel47@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$xtyLyH5fB4iAPzffFjm3aOYp4Zctm39cpLlxCBBVZO77B1eqFRdKy',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-18 17:19:24',
    'updated_at'=>'2020-07-18 17:19:24'
    ] );
                
    User::create( [
    'id'=>326,
    'first_name'=>'David',
    'last_name'=>'Blanchard',
    'company'=>NULL,
    'username'=>'timetoearn',
    'phone_number'=>'(860) 382-5799',
    'role_id'=>'2',
    'email'=>'daveblam@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$qTzPCBQF8oI7pNB/uwUoHueHCW8X7C2T9fxh91ymzZDLAwovK8AGm',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-18 17:42:59',
    'updated_at'=>'2020-07-18 17:42:59'
    ] );
                
    User::create( [
    'id'=>327,
    'first_name'=>'Luis',
    'last_name'=>'Sosa',
    'company'=>NULL,
    'username'=>'freedomplan 1',
    'phone_number'=>'(787) 568-8827',
    'role_id'=>'2',
    'email'=>'luissosa15@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$A/cduGSAAb0Zhyw3TGqF5O3XbT5K2kgpI7O4vGtnlVpmEAVGxKuOu',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-18 18:44:52',
    'updated_at'=>'2020-07-18 18:44:52'
    ] );
                
    User::create( [
    'id'=>328,
    'first_name'=>'Brian',
    'last_name'=>'Troddyn',
    'company'=>NULL,
    'username'=>'Allendale',
    'phone_number'=>'087 622 3409',
    'role_id'=>'2',
    'email'=>'tweirl22@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$3Cmea8pBA5pVWY8pEh.Gkeq0YZ1JDw94RqCbusJmd4yjVghNCtfHS',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-18 19:01:07',
    'updated_at'=>'2020-07-18 19:01:07'
    ] );
                
    User::create( [
    'id'=>329,
    'first_name'=>'Malgorzata',
    'last_name'=>'Bukojemska',
    'company'=>NULL,
    'username'=>'feelgreat',
    'phone_number'=>'537 720 035',
    'role_id'=>'2',
    'email'=>'margarita13b@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$kfXzntyIHM3qhRZMRoOvL.2fMvpJ0lZcHLywuIt/fM0lI/K8gU/yS',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-18 19:21:02',
    'updated_at'=>'2020-07-18 19:21:02'
    ] );
                
    User::create( [
    'id'=>330,
    'first_name'=>'hayward',
    'last_name'=>'harris',
    'company'=>NULL,
    'username'=>'HAYWARD',
    'phone_number'=>'(916) 420-3115',
    'role_id'=>'2',
    'email'=>'HDHARRIS84@GMAIL.COM',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$K9DzzZLmxwm5NhadmgUDP.4jBa38JR6O85tjvKqkFwxaj3g5LV66e',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-18 20:19:29',
    'updated_at'=>'2020-07-18 20:19:29'
    ] );
                
    User::create( [
    'id'=>331,
    'first_name'=>'Keith',
    'last_name'=>'Wetzel',
    'company'=>NULL,
    'username'=>'p2pilot',
    'phone_number'=>'(850) 960-1661',
    'role_id'=>'2',
    'email'=>'p2pilot@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$uvMS5J89JXwGow5deYc.zuVi1qUn9guwsafRCZao0OsxYigGnAdKe',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-18 22:39:36',
    'updated_at'=>'2020-07-18 22:39:36'
    ] );
                
    User::create( [
    'id'=>332,
    'first_name'=>'Pauline',
    'last_name'=>'Mc Leod-Williams',
    'company'=>NULL,
    'username'=>'Pauline',
    'phone_number'=>'(876) 344-1794',
    'role_id'=>'2',
    'email'=>'paulinemcleodwilliams@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$c87Ec9u9vqp30qd5N.BXxOdVmIghKsZbArVin3gZKXH6cZovH2kD6',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-18 23:25:31',
    'updated_at'=>'2020-07-18 23:25:31'
    ] );
                
    User::create( [
    'id'=>333,
    'first_name'=>'Ragan',
    'last_name'=>'Martinez',
    'company'=>NULL,
    'username'=>'speedymart25',
    'phone_number'=>'(813) 857-8103',
    'role_id'=>'2',
    'email'=>'ragancmartinez@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$CWuhfa9IYbDwTCNjHY4MmOSdYSEKv/YfHvunjS5WvRQ1FZTIH2/Em',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-19 01:43:16',
    'updated_at'=>'2020-07-19 01:43:16'
    ] );
                
    User::create( [
    'id'=>334,
    'first_name'=>'David',
    'last_name'=>'Felgate',
    'company'=>NULL,
    'username'=>'Dave',
    'phone_number'=>'499261685',
    'role_id'=>'2',
    'email'=>'davebrookshield7777@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$5U4Puu9zS5kYHVU7FFOqFeMmWtA7xkoFRW/EDIyqX6ikJpPzAgp72',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-19 03:34:08',
    'updated_at'=>'2020-07-19 03:34:08'
    ] );
                
    User::create( [
    'id'=>335,
    'first_name'=>'Carolyn',
    'last_name'=>'Holtby',
    'company'=>NULL,
    'username'=>'Carolyn',
    'phone_number'=>'455226412',
    'role_id'=>'2',
    'email'=>'bubvision1@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$EJ8FjbcoH.NjwZSGrewBr.ahVRthAm07/FGw8iD8YAwStPItpmJmi',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-19 03:41:39',
    'updated_at'=>'2020-07-19 03:41:39'
    ] );
                
    User::create( [
    'id'=>336,
    'first_name'=>'Darn',
    'last_name'=>'Edwards',
    'company'=>NULL,
    'username'=>'Dpe67',
    'phone_number'=>'(302) 494-7203',
    'role_id'=>'2',
    'email'=>'Dpedwards12@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$kT/hd9UhR13ZcD8ayCQF0uIPwG9MaradRoda6kIMB.pAr3PCoeQiK',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-19 12:44:43',
    'updated_at'=>'2020-07-19 12:44:43'
    ] );
                
    User::create( [
    'id'=>337,
    'first_name'=>'Geraldine',
    'last_name'=>'Orr',
    'company'=>NULL,
    'username'=>'geraldine_orr01@yahoo.com',
    'phone_number'=>'(904) 608-4250',
    'role_id'=>'2',
    'email'=>'geraldine_orr01@yahoo.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$4N2/k0lQbZ7NAmQ8JLOZPe/W0eaUo6okhkIOLsqLyzg9Bku1XkjVm',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-19 17:40:18',
    'updated_at'=>'2020-07-19 17:40:18'
    ] );
                
    User::create( [
    'id'=>338,
    'first_name'=>'richard',
    'last_name'=>'wihte',
    'company'=>NULL,
    'username'=>'richardwhite',
    'phone_number'=>'(916) 534-3352',
    'role_id'=>'2',
    'email'=>'wendyelmore1220@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$dsLEIdmvt3ylHEvTUAukr.IxQzhvMf0zbOgwDMT9uQTK.A81NJv2C',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-19 17:49:03',
    'updated_at'=>'2020-07-19 17:49:03'
    ] );
                
    User::create( [
    'id'=>339,
    'first_name'=>'Brian',
    'last_name'=>'Byrd',
    'company'=>NULL,
    'username'=>'Btbyrd',
    'phone_number'=>'(610) 331-0609',
    'role_id'=>'2',
    'email'=>'butlerreynolds@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$VwdFydCCH3UfAZhpi4BLf.XVTBWG923wA2pmHgsPrVuQsfOCEl0qe',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-19 18:58:45',
    'updated_at'=>'2020-07-19 18:58:45'
    ] );
                
    User::create( [
    'id'=>340,
    'first_name'=>'Ronald',
    'last_name'=>'Hinds',
    'company'=>NULL,
    'username'=>'superbless',
    'phone_number'=>'(914) 356-5209',
    'role_id'=>'2',
    'email'=>'winner.rhinds@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$udcE7/DljSu.6GFyVI3VAuhEpbWMz4hwOfpB3fpozCPNmZJWl/n/K',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-19 18:59:39',
    'updated_at'=>'2020-07-19 18:59:39'
    ] );
                
    User::create( [
    'id'=>341,
    'first_name'=>'Akilah',
    'last_name'=>'Peace',
    'company'=>NULL,
    'username'=>'KeePeace',
    'phone_number'=>'(813) 770-1620',
    'role_id'=>'2',
    'email'=>'akilahpeace@yahoo.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$YDLdIbxQzSvEvtAqhMkk/eM6G5Mxe6JgFsotqKfwVPIrI9CtqVoaC',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-19 19:13:11',
    'updated_at'=>'2020-07-19 19:13:11'
    ] );
                
    User::create( [
    'id'=>342,
    'first_name'=>'Erika',
    'last_name'=>'Wieland',
    'company'=>NULL,
    'username'=>'Barnmom',
    'phone_number'=>'(416) 846-8943',
    'role_id'=>'2',
    'email'=>'eka_50@hotmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$IkjVB89lPLoS25FDAfGSwubX1ZjecQGX0QakDHmY5qa6d2bo608rO',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-19 19:17:56',
    'updated_at'=>'2020-07-19 19:17:56'
    ] );
                
    User::create( [
    'id'=>343,
    'first_name'=>'Jill',
    'last_name'=>'Cortazar',
    'company'=>NULL,
    'username'=>'Jillcortazar@gmail.com',
    'phone_number'=>'(917) 566-9048',
    'role_id'=>'2',
    'email'=>'jillcortazar@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$4tdFI/xn7acWqnk8brO82us7dTmV.TZbxDCZ/chwu2TXElVcY/80K',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-19 19:23:49',
    'updated_at'=>'2020-07-19 19:23:49'
    ] );
                
    User::create( [
    'id'=>344,
    'first_name'=>'Lorraine',
    'last_name'=>'Lewis',
    'company'=>NULL,
    'username'=>'lorraine',
    'phone_number'=>'(919) 641-1497',
    'role_id'=>'2',
    'email'=>'singman49@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$A6DtyddoxFVIpczO8aksgONB2VYiWN7yOv9vAdUeIKY6RS5zZBx.2',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-20 00:26:17',
    'updated_at'=>'2020-07-20 00:26:17'
    ] );
                
    User::create( [
    'id'=>345,
    'first_name'=>'Jules',
    'last_name'=>'Sarran',
    'company'=>NULL,
    'username'=>'Jules',
    'phone_number'=>'(903) 649-4653',
    'role_id'=>'2',
    'email'=>'landman2012@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$Pd20lEeT7jYlKX9MMnXgQeknq263hJ1I2qSdBH/ZRzsD.ZFsLwZ22',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-20 00:52:44',
    'updated_at'=>'2020-07-20 00:52:44'
    ] );
                
    User::create( [
    'id'=>346,
    'first_name'=>'Thomas',
    'last_name'=>'Balls',
    'company'=>NULL,
    'username'=>'Thomas56',
    'phone_number'=>'(208) 240-5229',
    'role_id'=>'2',
    'email'=>'sadielab2018@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$E4E6Gcgx0JbrsNCMjX7pQuQ/VvG45Gv5nW7o7cn2tp3KudcJxtQHG',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-20 01:20:50',
    'updated_at'=>'2020-07-20 01:20:50'
    ] );
                
    User::create( [
    'id'=>347,
    'first_name'=>'Bailey',
    'last_name'=>'Welch',
    'company'=>NULL,
    'username'=>'billybob',
    'phone_number'=>'(801) 671-0884',
    'role_id'=>'2',
    'email'=>'louisgwelch@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$115jVivzWLMM4S42BVX46ucTZJbz.FS7blhbPSYF1XAMC5XxxkgBq',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-20 18:49:50',
    'updated_at'=>'2020-07-20 18:49:50'
    ] );
                
    User::create( [
    'id'=>348,
    'first_name'=>'Tammy',
    'last_name'=>'Marcroft',
    'company'=>NULL,
    'username'=>'tammy',
    'phone_number'=>'(801) 361-4600',
    'role_id'=>'2',
    'email'=>'tmarcroft@alpinedistrict.org',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$FVTkAy.Txx3/EbC9FNaelefrhPODy0o4UWYLbnjxmaUGPmp2zUQ/q',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-20 19:07:21',
    'updated_at'=>'2020-07-20 19:07:21'
    ] );
                
    User::create( [
    'id'=>349,
    'first_name'=>'Tony',
    'last_name'=>'Grant',
    'company'=>NULL,
    'username'=>'TonyGrantIM',
    'phone_number'=>'8008085567',
    'role_id'=>'2',
    'email'=>'tonygrantim@gmail.com',
    'email_verified_at'=>NULL,
    'password'=>'$2y$10$E5rAr/ERwOwHjDgaTYWHZ.K3qaRyMn3IIQIvRDneDqunKLGY.TBZ6',
    'remember_token'=>NULL,
    'created_at'=>'2020-07-20 22:41:32',
    'updated_at'=>'2020-07-20 22:41:32'
    ] );
            
    }
}
