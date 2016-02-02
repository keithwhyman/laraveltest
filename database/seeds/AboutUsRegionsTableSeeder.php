<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class AboutUsRegionsTableSeeder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('aboutusregions')->delete();

		$aboutusregions = [
		[
            'id' => 1,
            'name_de' => 'EASTERN SHORE',
            'name_eng' => 'EASTERN SHORE',
            'subtext' => 'the',
			'created_at' => Carbon::now(),
        ],
		[
            'id' => 2,
            'name_de' => 'ANNAPOLIS VALLEY',
            'name_eng' => 'ANNAPOLIS VALLEY',
            'subtext' => 'the',
			'created_at' => Carbon::now(),
        ],
		[
            'id' => 3,
            'name_de' => 'SOUTH SHORE',
            'name_eng' => 'SOUTH SHORE',
            'subtext' => 'the',
			'created_at' => Carbon::now(),
        ],
			[
            'id' => 4,
            'name_de' => 'HALIFAX - DARTMOUTH',
            'name_eng' => 'HALIFAX - DARTMOUTH',
            'subtext' => '',
			'created_at' => Carbon::now(),
        ],
			[
            'id' => 5,
            'name_de' => 'YARMOUTH & DIGBY COUNTY',
            'name_eng' => 'YARMOUTH & DIGBY COUNTY',
            'subtext' => 'the',
			'created_at' => Carbon::now(),
        ],
			[
            'id' => 6,
            'name_de' => 'HAMBURG',
            'name_eng' => 'HAMBURG',
            'subtext' => '',
			'created_at' => Carbon::now(),
        ],
			[
            'id' => 7,
            'name_de' => 'BADEN WÜRTTEMBERG',
            'name_eng' => 'BADEN WÜRTTEMBERG',
            'subtext' => '',
			'created_at' => Carbon::now(),
        ],
			[
            'id' => 8,
            'name_de' => 'FLORIDA',
            'name_eng' => 'FLORIDA',
            'subtext' => '',
			'created_at' => Carbon::now(),
        ],
			[
            'id' => 9,
            'name_de' => 'SWITZERLAND',
            'name_eng' => 'SWITZERLAND',
            'subtext' => '',
			'created_at' => Carbon::now(),
        ],



	];
	  DB::table('aboutusregions')->insert($aboutusregions);

    }
}

/*

SERVING THE EASTERN SHORE
Martina Robinson	Lizenzierter Immobilienmakler	Robinson & Harmsen Lifestyle Real Estate Inc.	Kontaktinformationen / Biografie
Frank Harmsen	Managing Director / Gesellschafter	Robinson & Harmsen Lifestyle Real Estate Inc.	Kontaktinformationen / Biografie
Esther Rowlings	Lizenzierter Immobilienmakler	Robinson & Harmsen Lifestyle Real Estate Inc	Kontaktinformationen / Biografie
SERVING THE ANNAPOLIS VALLEY
Isabelle Scherz	Certified Translater	CC Group Publishing Inc.	Kontaktinformationen / Biografie
SERVING THE SOUTH SHORE
Anke Holm	Lizenzierter Immobilienmakler	Robinson & Harmsen Lifestyle Real Estate Inc.	Kontaktinformationen / Biografie
Jaqueline A. Clinkard	Customer Care Consultant	CC Group Publishing Inc.	Kontaktinformationen / Biografie
SERVING HALIFAX - DARTMOUTH
Susanne Schwalbach	Lizenzierter Immobilienmakler	Robinson & Harmsen Lifestyle Real Estate	Kontaktinformationen / Biografie
SERVING THE YARMOUTH & DIGBY COUNTY
Eva Stara Krebser	Lizenzierter Immobilienmakler / Architekt	Robinson & Harmsen Lifestyle Real Estate Inc.	Kontaktinformationen / Biografie
Nova Rochford	Lizenzierter Immobilienmakler	Robinson & Harmsen Lifestyle Real Estate Inc.	Kontaktinformationen / Biografie
HAMBURG
Martina Robinson	Makler	Robinson & Harmsen die Makler GbR	Kontaktinformationen / Biografie
Frank Harmsen	Makler	Robinson & Harmsen die Makler GbR	Kontaktinformationen / Biografie
Balko Schmidt	Makler	Robinson & Harmsen die Makler GbR	Kontaktinformationen / Biografie
Dörte Laschinsky	Diplom Übersetzerin	Robinson & Harmsen die Makler GbR	Kontaktinformationen / Biografie
Nicola Schaper	Makler	Nicola Schaper Immobilien	Kontaktinformationen / Biografie
SERVING BADEN WÜRTTEMBERG
Inge Rihm	Makler	Rihm+Parter Immo Real Estate Consulting	Kontaktinformationen / Biografie
SERVING FLORIDA
Stefan Bolsen	Makler	5th Avenue Team at Coldwell Banker	Kontaktinformationen / Biografie
SERVING SWITZERLAND
Marco & Barbara Zgraggen-Zeller	Makler	Swissdomizil GmbH	Kontaktinformationen / Biografie
*/