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
    public function run()
    {
        $user = new User();
        $user->LoginName = 'BETHBS';
        $user->password = bcrypt('123456');
        $user->Descripcion = 'BETH BLAS S.';
        $user->save();

        $user2 = new User();
        $user2->LoginName= 'SYSTEM';
		$user2->password = bcrypt('123456');
        $user2->Descripcion = 'SYSTEM';
        $user2->save();

        $user3 = new User();
        $user3->LoginName= 'MISHELLERR';
		$user3->password = bcrypt('123456');
        $user3->Descripcion = 'MISHELLE RUIZ R.';
        $user3->save();

        $user4 = new User();
        $user4->LoginName= 'ENDIRAGT';
		$user4->password = bcrypt('123456');
        $user4->Descripcion = 'ENDIRA GOMEZ T.';
        $user4->save();

        $user5 = new User();
        $user5->LoginName= 'GERALDINEEG';
		$user5->password = bcrypt('123456');
        $user5->Descripcion = 'GERALDINE ESPINOZA G.';
        $user5->save();
    }
}
