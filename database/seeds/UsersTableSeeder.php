<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$faker = Faker\Factory::create('id_ID');
    	$this->aplikan($faker);  	
    	$this->aplikanTrack();      
    	$this->followup($faker);  
        $this->tagihan();
        $this->pembayaran();
    }    

    public function aplikan($faker)
    {
    	$today = \Carbon\Carbon::now();

    	$array_sekolah = ['SMA Mangga Besar','SMA Muhammadiyah 13','SMA Muhammadiyah 15','SMA Muhammadiyah 2','SMA Mutiara Bangsa 3','SMA Notre Dame','SMA Nasional Nusantara','SMA Panindi','SMA PGRI 11','SMA PGRI 21','SMA PGRI 8','SMA Providentia','SMA Putra Negara','SMA Putra Nusa','SMA Pelita 2','SMA Abdi Siswa','SMA Pelita Kudus','SMA Petra','SMA Rasa Sayang'];

		$begin = new DateTime('2018-05-20');
		$end = new DateTime('2018-07-04');

		$interval = DateInterval::createFromDateString('1 day');
		$period = new DatePeriod($begin, $interval, $end);

		foreach ($period as $dt) {
			$numberOfAplikanPerDay = rand(2,7);
			for ($i=0; $i < $numberOfAplikanPerDay; $i++) { 
				DB::table('aplikan')->insert([
	            	'tanggal_daftar' => $dt->format('Y-m-d'),
	            	'nama' => $faker->name,
	            	'jenis_kelamin' => $this->array_random(['L','P']),
	            	'tempat_lahir' => $faker->city,
	            	'tanggal_lahir' => \Carbon\Carbon::now()->subYears(15)->addWeeks(rand(1,52))->format('Y-m-d'),
	            	'agama' => $this->array_random(['Islam','Kristen']),
	            	'email' => $faker->safeEmail,
	            	'telepon' => $faker->phoneNumber,
	            	'alamat' => $faker->address,
	            	'village_id' => 3171 + rand(10001,100008),
	            	'asal_sekolah' => $this->array_random($array_sekolah),
	            	'jurusan_sekolah' => $this->array_random(['IPA','IPS']),
	            	'konsentrasi_id' => $this->array_random(\App\Konsentrasi::pluck('id')->all()),
	            	'kelas_id' => $this->array_random([1,2]),
	            	'sumber_informasi' => $this->array_random(['facebook','website','brosur','teman','presentasi','iklan']),
	            	'user_id' => $this->array_random(\App\User::pluck('id')->all()),
	            	'aplikan_status_id' => rand(1,4),
	            	'pilihan_kampus_id' => 1,
	        	]);
			}
	    	
		}

		//Menyesuaikan aplikan status dan tanggal-tanggalnya
		foreach(\App\Aplikan::all() as $aplikan){
    		if($aplikan->aplikan_status_id >= 2){
    			$aplikan->tanggal_take = $aplikan->tanggal_daftar->addDays(rand(1,2));
    			$aplikan->tanggal_aplikan = $aplikan->tanggal_daftar;
    			if($aplikan->aplikan_status_id == 3){
    				$aplikan->tanggal_terdaftar = $aplikan->tanggal_daftar->addDays(rand(7,12));
    			}

    			if($aplikan->aplikan_status_id == 4){
    				$aplikan->tanggal_teregistrasi = $aplikan->tanggal_daftar->addDays(rand(12,25));
    			}
    			$aplikan->save();
    		}

    		if($aplikan->aplikan_status_id == 1){
    			$aplikan->aplikan_status_id = 2;
    			$aplikan->tanggal_take = null;
    			$aplikan->tanggal_aplikan = $aplikan->tanggal_daftar;
    			$aplikan->user_id == null;  
    			$aplikan->save();  			
    		}
    	}

    }

    public function aplikanTrack()
    {
    	foreach(\App\Aplikan::all() as $aplikan){
    		if($aplikan->tanggal_take){
    			\App\AplikanTrack::create([
	                'aplikan_id' => $aplikan->id,
	                'nama_proses' => 'taken',
	                'user_id' => $aplikan->user_id
	            ]);
    		}
    	}
    }

    public function followup($faker)
    {
    	foreach(\App\Aplikan::all() as $aplikan){
    		if($aplikan->tanggal_take){
    			$numberOfFollowUp = rand(2,12);
    			for ($i=0; $i < $numberOfFollowUp; $i++) {     				
	    			App\Followup::create([
	    					'aplikan_id' => $aplikan->id,
	    					'keterangan' => $faker->paragraph,
	    					'user_id' => $aplikan->user_id,
	    					'type' => 'followup',
	    					'created_at' => $aplikan->tanggal_take->addDays(rand(1,2))
	    				]);

	    			App\Followup::create([
	    					'aplikan_id' => $aplikan->id,
	    					'keterangan' => $faker->paragraph,
	    					'user_id' => $this->array_random(\App\User::pluck('id')->all()),
	    					'type' => 'layani',
	    					'created_at' => $aplikan->tanggal_take->addDays(rand(1,2))
	    				]);
    			}
    		}
    	}
    }

    public function tagihan()
    {
        foreach(\App\Aplikan::all() as $aplikan){
            if($aplikan->aplikan_status_id == 3){
                \App\Tagihan::create([
                        'object_id' => $aplikan->id,
                        'object_name' => 'aplikan',
                        'nama_biaya' => 'Pendaftaran',
                        'nominal' => 300000,
                        'status' => 'dibayar',
                        'created_at' => $aplikan->created_at->addDays(rand(8,12))
                    ]); 

                    $aplikan->trackUser()->attach($aplikan->user_id,['nama_proses' => 'proses pendaftaran']);               
            }

            if($aplikan->aplikan_status_id == 4){
                \App\Tagihan::create([
                        'object_id' => $aplikan->id,
                        'object_name' => 'aplikan',
                        'nama_biaya' => 'Pendaftaran',
                        'nominal' => 300000,
                        'status' => 'dibayar',
                        'created_at' => $aplikan->created_at->addDays(rand(8,12))
                    ]);
             $aplikan->trackUser()->attach($aplikan->user_id,['nama_proses' => 'proses pendaftaran']);

                \App\Tagihan::create([
                        'object_id' => $aplikan->id,
                        'object_name' => 'aplikan',
                        'nama_biaya' => 'Registrasi',
                        'nominal' => 4500000,
                        'status' => 'dibayar',
                        'created_at' => $aplikan->created_at->addDays(rand(12,15))
                    ]);
             $aplikan->trackUser()->attach($aplikan->user_id,['nama_proses' => 'proses registrasi']);

            }
        }
    }

    public function pembayaran()
    {
        foreach(\App\Tagihan::all() as $tagihan){
            \App\Pembayaran::create([
                    'user_id' => \App\User::whereRoleId(4)->first()->id,
                    'no_bukti_bayar' => str_random(9),
                    'tgl_bayar' => $tagihan->created_at->format('Y-m-d'),
                    'nominal' => $tagihan->nominal,
                    'pembayaran_via_id' => 1,
                ]);
        }
    }

    function array_random($array, $number = null)
    {
        $requested = is_null($number) ? 1 : $number;
        $count = count($array);
        if ($requested > $count) {
            throw new InvalidArgumentException(
                "You requested {$requested} items, but there are only {$count} items available."
            );
        }
        if (is_null($number)) {
            return $array[array_rand($array)];
        }
        if ((int) $number === 0) {
            return [];
        }
        $keys = array_rand($array, $number);
        $results = [];
        foreach ((array) $keys as $key) {
            $results[] = $array[$key];
        }
        return $results;
    }
}
