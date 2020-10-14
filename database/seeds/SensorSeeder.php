<?php

use Illuminate\Database\Seeder;
use App\Sensor;

class SensorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sensor = new Sensor;
    	$sensor->date = date("Y-m-d H:i:s");
    	$sensor->jarak = 5;
    	$sensor->ph = 6;
    	$sensor->warna = "merah";
     	$sensor->selenoidA = "on";
    	$sensor->selenoidB = "off";
    	$sensor->save();

        $sensor = new Sensor;
    	$sensor->date = date("Y-m-d H:i:s");
    	$sensor->jarak = 6;
    	$sensor->ph = 7;
    	$sensor->warna = "biru";
     	$sensor->selenoidA = "on";
    	$sensor->selenoidB = "off";
    	$sensor->save();

        $sensor = new Sensor;
    	$sensor->date = date("Y-m-d H:i:s");
    	$sensor->jarak = 2;
    	$sensor->ph = 2;
    	$sensor->warna = "jernih";
     	$sensor->selenoidA = "off";
    	$sensor->selenoidB = "off";
        $sensor->save();
        
        $sensor = new Sensor;
    	$sensor->date = date("Y-m-d H:i:s");
    	$sensor->jarak = 3;
    	$sensor->ph = 7;
    	$sensor->warna = "jernih";
     	$sensor->selenoidA = "off";
    	$sensor->selenoidB = "on";
    	$sensor->save();

        $sensor = new Sensor;
    	$sensor->date = date("Y-m-d H:i:s");
    	$sensor->jarak = 5;
    	$sensor->ph = 6;
    	$sensor->warna = "merah";
     	$sensor->selenoidA = "on";
    	$sensor->selenoidB = "off";
    	$sensor->save();

        $sensor = new Sensor;
    	$sensor->date = date("Y-m-d H:i:s");
    	$sensor->jarak = 6;
    	$sensor->ph = 7;
    	$sensor->warna = "biru";
     	$sensor->selenoidA = "on";
    	$sensor->selenoidB = "off";
    	$sensor->save();

        $sensor = new Sensor;
    	$sensor->date = date("Y-m-d H:i:s");
    	$sensor->jarak = 2;
    	$sensor->ph = 2;
    	$sensor->warna = "jernih";
     	$sensor->selenoidA = "off";
    	$sensor->selenoidB = "off";
        $sensor->save();
        
        $sensor = new Sensor;
    	$sensor->date = date("Y-m-d H:i:s");
    	$sensor->jarak = 3;
    	$sensor->ph = 7;
    	$sensor->warna = "jernih";
     	$sensor->selenoidA = "off";
    	$sensor->selenoidB = "on";
    	$sensor->save();		

        $sensor = new Sensor;
    	$sensor->date = date("Y-m-d H:i:s");
    	$sensor->jarak = 5;
    	$sensor->ph = 6;
    	$sensor->warna = "merah";
     	$sensor->selenoidA = "on";
    	$sensor->selenoidB = "off";
    	$sensor->save();

        $sensor = new Sensor;
    	$sensor->date = date("Y-m-d H:i:s");
    	$sensor->jarak = 6;
    	$sensor->ph = 7;
    	$sensor->warna = "biru";
     	$sensor->selenoidA = "on";
    	$sensor->selenoidB = "off";
    	$sensor->save();

        $sensor = new Sensor;
    	$sensor->date = date("Y-m-d H:i:s");
    	$sensor->jarak = 2;
    	$sensor->ph = 2;
    	$sensor->warna = "jernih";
     	$sensor->selenoidA = "off";
    	$sensor->selenoidB = "off";
        $sensor->save();
        
        $sensor = new Sensor;
    	$sensor->date = date("Y-m-d H:i:s");
    	$sensor->jarak = 3;
    	$sensor->ph = 7;
    	$sensor->warna = "jernih";
     	$sensor->selenoidA = "off";
    	$sensor->selenoidB = "on";
		$sensor->save();
				
        $sensor = new Sensor;
    	$sensor->date = date("Y-m-d H:i:s");
    	$sensor->jarak = 5;
    	$sensor->ph = 6;
    	$sensor->warna = "merah";
     	$sensor->selenoidA = "on";
    	$sensor->selenoidB = "off";
    	$sensor->save();

        $sensor = new Sensor;
    	$sensor->date = date("Y-m-d H:i:s");
    	$sensor->jarak = 6;
    	$sensor->ph = 7;
    	$sensor->warna = "biru";
     	$sensor->selenoidA = "on";
    	$sensor->selenoidB = "off";
    	$sensor->save();

        $sensor = new Sensor;
    	$sensor->date = date("Y-m-d H:i:s");
    	$sensor->jarak = 2;
    	$sensor->ph = 2;
    	$sensor->warna = "jernih";
     	$sensor->selenoidA = "off";
    	$sensor->selenoidB = "off";
        $sensor->save();
        
        $sensor = new Sensor;
    	$sensor->date = date("Y-m-d H:i:s");
    	$sensor->jarak = 3;
    	$sensor->ph = 7;
    	$sensor->warna = "jernih";
     	$sensor->selenoidA = "off";
    	$sensor->selenoidB = "on";
    	$sensor->save();
	}
}
