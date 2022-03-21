<?php
use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'admin Role',
            'email' => 'admin@role.test',
            'password' => bcrypt('1234567')
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'tamu Role',
            'email' => 'tamu@role.test',
            'password' => bcrypt('123456')
        ]);

        $user->assignRole('tamu');

        $resepsionis = User::create([
            'name' => 'resepsionis Role',
            'email' => 'res@role.test',
            'password' => bcrypt('12345')
        ]);

        $resepsionis->assignRole('resepsionis');

        
    }   
}
