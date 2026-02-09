<?php

namespace MUONLINECORE\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use MUONLINECORE\App\Widen\Traits\InstancesTrait;
use MUONLINECORE\App\Models\VideosModel;
use MUONLINECORE\Funcs;
use WPSPCORE\Base\BaseSeeder;

class VideosSeeder extends BaseSeeder {

	use InstancesTrait, WithoutModelEvents;

	public function run() {
//		$faker = Faker::create();
		$faker = Funcs::faker();

//		for ($i = 0; $i < 100; $i++) {
//			VideosModel::create([
//				'key'   => $faker->userName,
//				'value' => $faker->name
//			]);
//		}
	}

}