<?php

use Illuminate\Database\Seeder;

class SupportedCountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('supported_countries')->delete();
    	
    	$countries = array(
    		array('id' => 13,'code' => 'AU','name' => "Australia",'phonecode' => 61),
    		array('id' => 14,'code' => 'AT','name' => "Austria",'phonecode' => 43),
    		array('id' => 21,'code' => 'BE','name' => "Belgium",'phonecode' => 32),
    		array('id' => 33,'code' => 'BG','name' => "Bulgaria",'phonecode' => 359),
    		array('id' => 38,'code' => 'CA','name' => "Canada",'phonecode' => 1),
    		array('id' => 56,'code' => 'CY','name' => "Cyprus",'phonecode' => 357),
    		array('id' => 57,'code' => 'CZ','name' => "Czech Republic",'phonecode' => 420),
    		array('id' => 58,'code' => 'DK','name' => "Denmark",'phonecode' => 45),
    		array('id' => 68,'code' => 'EE','name' => "Estonia",'phonecode' => 372),
    		array('id' => 74,'code' => 'FI','name' => "Finland",'phonecode' => 358),
    		array('id' => 75,'code' => 'FR','name' => "France",'phonecode' => 33),
    		array('id' => 82,'code' => 'DE','name' => "Germany",'phonecode' => 49),
    		array('id' => 85,'code' => 'GR','name' => "Greece",'phonecode' => 30),
    		array('id' => 98,'code' => 'HK','name' => "Hong Kong",'phonecode' => 852),
    		array('id' => 105,'code' => 'IE','name' => "Ireland",'phonecode' => 353),
    		array('id' => 107,'code' => 'IT','name' => "Italy",'phonecode' => 39),
    		array('id' => 109,'code' => 'JP','name' => "Japan",'phonecode' => 81),
    		array('id' => 120,'code' => 'LV','name' => "Latvia",'phonecode' => 371),
    		array('id' => 126,'code' => 'LT','name' => "Lithuania",'phonecode' => 370),
    		array('id' => 127,'code' => 'LU','name' => "Luxembourg",'phonecode' => 352),
    		array('id' => 135,'code' => 'MT','name' => "Malta",'phonecode' => 356),
    		array('id' => 142,'code' => 'MX','name' => "Mexico",'phonecode' => 52),
    		array('id' => 155,'code' => 'NL','name' => "Netherlands",'phonecode' => 31),
    		array('id' => 157,'code' => 'NZ','name' => "New Zealand",'phonecode' => 64),
    		array('id' => 164,'code' => 'NO','name' => "Norway",'phonecode' => 47),
    		array('id' => 175,'code' => 'PL','name' => "Poland",'phonecode' => 48),
    		array('id' => 176,'code' => 'PT','name' => "Portugal",'phonecode' => 351),
    		array('id' => 180,'code' => 'RO','name' => "Romania",'phonecode' => 40),
    		array('id' => 196,'code' => 'SG','name' => "Singapore",'phonecode' => 65),
    		array('id' => 197,'code' => 'SK','name' => "Slovakia",'phonecode' => 421),
    		array('id' => 198,'code' => 'SI','name' => "Slovenia",'phonecode' => 386),
    		array('id' => 205,'code' => 'ES','name' => "Spain",'phonecode' => 34),
    		array('id' => 211,'code' => 'SE','name' => "Sweden",'phonecode' => 46),
    		array('id' => 212,'code' => 'CH','name' => "Switzerland",'phonecode' => 41),
    		array('id' => 230,'code' => 'GB','name' => "United Kingdom",'phonecode' => 44),
            array('id' => 231,'code' => 'US','name' => "United States",'phonecode' => 1),
    	);

    	DB::table('supported_countries')->insert($countries);
    }
}


