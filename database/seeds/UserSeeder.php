<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
use App\SpecialisClass;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 

    	// Membuat Specialis Class
	    $leaderClass = new SpecialisClass();
	    $leaderClass->nama_class = "Leader Ship";
	    $leaderClass->isi_class = "-";
	    $leaderClass->save();

    	// Membuat Specialis Class
	    $leaderClass = new SpecialisClass();
	    $leaderClass->nama_class = "Programmer Class";
	    $leaderClass->isi_class = "-";
	    $leaderClass->save();

    	// Membuat Specialis Class
	    $leaderClass = new SpecialisClass();
	    $leaderClass->nama_class = "Journalis Class";
	    $leaderClass->isi_class = "-";
	    $leaderClass->save();

    	// Membuat Specialis Class
	    $leaderClass = new SpecialisClass();
	    $leaderClass->nama_class = "Tahfidzul Class";
	    $leaderClass->isi_class = "-";
	    $leaderClass->save();

    	// Membuat Specialis Class
	    $leaderClass = new SpecialisClass();
	    $leaderClass->nama_class = "Chef Class";
	    $leaderClass->isi_class = "-";
	    $leaderClass->save();

    	// Membuat Specialis Class
	    $leaderClass = new SpecialisClass();
	    $leaderClass->nama_class = "Athlate Class";
	    $leaderClass->isi_class = "-";
	    $leaderClass->save();


    	// Membuat role admin
	    $adminRole = new Role();
	    $adminRole->name = "admin";
	    $adminRole->display_name = "Admin";
	    $adminRole->save();
	    
	    // Membuat role siswa
	    $siswaRole = new Role();
	    $siswaRole->name = "siswa";
	    $siswaRole->display_name = "Siswa";
	    $siswaRole->save();

	    // Membuat role guru
	    $guruRole = new Role();
	    $guruRole->name = "guru";
	    $guruRole->display_name = "Guru";
	    $guruRole->save();

    	//Membuat Sample User Admin
        $admin = new User();
		$admin->name = "Sample Admin";
		$admin->email = 'admin@gmail.com';
		$admin->password = bcrypt('rahasia');
		$admin->save();
		$admin->attachRole($adminRole);

    	//Membuat Sample User Siswa
        $siswa = new User();
		$siswa->name = "Sample Siswa";
		$siswa->email = 'siswa@gmail.com';
		$siswa->password = bcrypt('rahasia');
		$siswa->save();
		$siswa->attachRole($siswaRole);

    	//Membuat Sample User Guru
        $guru = new User();
		$guru->name = "Sample Guru";
		$guru->email = 'guru@gmail.com';
		$guru->password = bcrypt('rahasia');
		$guru->save();
		$guru->attachRole($guruRole);

    }
}
