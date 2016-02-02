<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	DB::table('regions')->delete();

$regions = [
	[
            'id' => 1,
            'name_de' => 'Yarmouth & Acadian Shores',
            'name_eng' => 'Yarmouth & Acadian Shores',
            'showid' => 'YA',
			'created_at' => Carbon::now(),
        ],
		[
            'id' => 2,
            'name_de' => 'South Shore',
            'name_eng' => 'South Shore',
            'showid' => 'SS',
			'created_at' => Carbon::now(),
        ],	
		[
            'id' => 3,
            'name_de' => 'Bay of Fundy & Annapolis Valley',
            'name_eng' => 'Bay of Fundy & Annapolis Valley',
            'showid' => 'AV',
			'created_at' => Carbon::now(),
        ],	
		[
            'id' => 4,
            'name_de' => 'Halifax Metro',
            'name_eng' => 'Halifax Metro',
            'showid' => 'HM',
			'created_at' => Carbon::now(),
        ],	
		[
            'id' => 5,
            'name_de' => 'Eastern Shore',
            'name_eng' => 'Eastern Shore',
            'showid' => 'ES',
			'created_at' => Carbon::now(),
        ],	
		[
            'id' => 6,
            'name_de' => 'Northumberland Shore',
            'name_eng' => 'Northumberland Shore',
            'showid' => 'NS',
			'created_at' => Carbon::now(),
        ],
		[
            'id' => 7,
            'name_de' => 'Cape Breton Island',
            'name_eng' => 'Cape Breton Island',
            'showid' => 'CB',
			'created_at' => Carbon::now(),
        ],
		[
            'id' => 11,
            'name_de' => 'Investments',
            'name_eng' => 'Investments',
            'showid' => 'IO',
			'created_at' => Carbon::now(),
        ],
		[
            'id' => 12,
            'name_de' => 'Hamburg und Umland',
            'name_eng' => 'Hamburg und Umland',
            'showid' => 'HH',
			'created_at' => Carbon::now(),
        ]


	];


	    DB::table('regions')->insert($regions);
    }
}

/*

INSERT INTO `newdesign_regions` (`id`, `name`, `name_eng`, `showid`) VALUES
(12, 'Hamburg und Umland', 'Hamburg and Surrounding Area', 'HH'),
(2, 'South Shore', 'South Shore', 'SS'),
(1, 'Yarmouth & Acadian Shores', 'Yarmouth & Acadian Shores', 'YA'),
(4, 'Halifax Metro', 'Halifax Metro', 'HM'),
(5, 'Eastern Shore', 'Eastern Shore', 'ES'),
(7, 'Cape Breton Island', 'Cape Breton Island', 'CB'),
(6, 'Northumberland Shore', 'Northumberland Shore', 'NS'),
(11, 'Investments', 'Investment Opportunities ', 'IO'),
(3, 'Bay of Fundy & Annapolis Valley', 'Bay of Fundy & Annapolis Valley', 'AV');
*/