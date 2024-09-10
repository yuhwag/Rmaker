<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SqlSeeder extends Seeder
{
	/**
	* Run the database seeds.
     	*/
    	public function run(): void
    	{
      	$path = base_path() . '/database/seeders/data.sql';
		$sql = file_get_contents($path);
		DB::unprepared($sql);
    	}
}
