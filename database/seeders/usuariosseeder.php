<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class usuariosseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        User::truncate();//evitara duplicados cada vez que corra el seeder
        
        $user = new User();
        $user->name='admin';
        $user->email='admin@admin';
        $user->password=Hash::make('12345678');
        $user->save();
        
        $user = new User();
        $user->name='Angelica';
        $user->email='angelica@mail.com';
        $user->password= Hash::make('12345678');
        $user->save();
        
        $user = new User();
        $user->name='Maria';
        $user->email='maria@mail.com';
        $user->password=Hash::make('12345678');
        $user->save();
    }
}
