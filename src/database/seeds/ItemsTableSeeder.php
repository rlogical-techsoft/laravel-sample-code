<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
            	'name' => 'BPL 80 cm (32 inches) HD Ready LED TV T32BH3A (Black)',
            	'type_id' => '1',
            	'price' => '9490',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'Sony Cordless Rechargeable Lightweight Headphones-Black',
            	'type_id' => '1',
            	'price' => '4650',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'Sennheiser RS 165 Tv Digital Wireless Headphone (Black)',
            	'type_id' => '1',
            	'price' => '16177',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'boAt AAVANTE Bar Wireless Bluetooth Soundbar Speaker (Black)',
            	'type_id' => '1',
            	'price' => '7999',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'Ant Audio Treble X -SB560 Wireless Bluetooth Soundbar (Black)',
            	'type_id' => '1',
            	'price' => '6499',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'Portronics Sound Slick II POR-936 Wireless Bluetooth (Black)',
            	'type_id' => '1',
            	'price' => '2999',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'EGATE i9 LED HD Projector (Black)',
            	'type_id' => '1',
            	'price' => '5990',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'Unic UC28 Mini Pico Full hd Input LED Projector 1080',
            	'type_id' => '1',
            	'price' => '2547',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'Myra® TouYinGer X7 Led Projector 1800 Lumens',
            	'type_id' => '1',
            	'price' => '8799',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'Anker Smart Portable Pico Wifi Wireless Projector',
            	'type_id' => '1',
            	'price' => '6499',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'Fantastic Beasts and Where to Find Them',
            	'type_id' => '2',
            	'price' => '490',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'Fantastic Beasts: The Crimes of Grindelwald',
            	'type_id' => '2',
            	'price' => '390',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'The Hogwarts Library Collection',
            	'type_id' => '2',
            	'price' => '1204',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'The Tales of Beedle the Bard',
            	'type_id' => '2',
            	'price' => '370',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'Harry Potter and the Deathly Hallows',
            	'type_id' => '2',
            	'price' => '729',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'Harry Potter and the Order of the Phoenix',
            	'type_id' => '2',
            	'price' => '1414',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'Harry Potter and the Goblet of Fire',
            	'type_id' => '2',
            	'price' => '1131',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'Wings of Fire: An Autobiography of Abdul Kalam',
            	'type_id' => '2',
            	'price' => '370',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'Mind Without Fear',
            	'type_id' => '2',
            	'price' => '388',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'Captain Cool: The M.S. Dhoni Story',
            	'type_id' => '2',
            	'price' => '230',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'Allen Solly Men Plain Slim Fit Casual Shirt',
            	'type_id' => '3',
            	'price' => '724',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'Parx Men Plain Slim Fit Casual Shirt',
            	'type_id' => '3',
            	'price' => '674',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'Allen Solly Men Plain Slim Fit Casual Shirt',
            	'type_id' => '3',
            	'price' => '500',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'EYEBOGLER Men Cotton T-Shirt ',
            	'type_id' => '3',
            	'price' => '506',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'Rangoli Jaipur Jute Modi Jacket',
            	'type_id' => '3',
            	'price' => '899',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'Dhingra Men Waistcoat',
            	'type_id' => '3',
            	'price' => '1140',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'Cenizas Casual Tuxedo Waistcoat for Men',
            	'type_id' => '3',
            	'price' => '949',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'Menjestic Men Slim Fit Blazer With Grey Lapel',
            	'type_id' => '3',
            	'price' => '1950',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'Elegante UV Protected Blue Mirrored Premium Rectangular',
            	'type_id' => '3',
            	'price' => '1701',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'Silver Kartz Wayfarer Unisex Sunglass',
            	'type_id' => '3',
            	'price' => '1230',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'XOLO ERA 4X',
            	'type_id' => '4',
            	'price' => '7199',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'Redmi 6 Pro',
            	'type_id' => '4',
            	'price' => '11499',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'Micromax Canvas 5',
            	'type_id' => '4',
            	'price' => '6999',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'Lava Z61',
            	'type_id' => '4',
            	'price' => '6500',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'OnePlus 6T',
            	'type_id' => '4',
            	'price' => '3799',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'Oppo R17',
            	'type_id' => '4',
            	'price' => '36999',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'Samsung Galaxy M20',
            	'type_id' => '4',
            	'price' => '1339',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'Xiaomi Mi A2',
            	'type_id' => '4',
            	'price' => '17499',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'Honor 8X',
            	'type_id' => '4',
            	'price' => '17499',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'Vivo Y95',
            	'type_id' => '4',
            	'price' => '18990',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'MRFF Genius',
            	'type_id' => '5',
            	'price' => '2350',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'ASICS Men Gel-Rocket 8 Badminton Shoes',
            	'type_id' => '5',
            	'price' => '5499',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'Nivia Men Synthetic Leather Badminton Shoes',
            	'type_id' => '5',
            	'price' => '6999',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'Nivia Men Super Court Badminton Shoes',
            	'type_id' => '5',
            	'price' => '6500',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'Nivia Storm Football',
            	'type_id' => '5',
            	'price' => '560',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'Nike Premier League Strike Ball White',
            	'type_id' => '5',
            	'price' => '1795',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'NIVIA Spider F.B G/Keeper Gloves Large Black',
            	'type_id' => '5',
            	'price' => '815',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'Nivia Super Grip 881 Football Goal Keeping Gloves',
            	'type_id' => '5',
            	'price' => '2350',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'Nivia Classic with Sleeve Shinguard',
            	'type_id' => '5',
            	'price' => '236',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
            	'name' => 'Nivia Performance Football Shin Guard',
            	'type_id' => '5',
            	'price' => '170',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        ]);
    }
}
