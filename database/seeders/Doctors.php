<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Doctors extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

          DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            Doctor::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $doctors = [
            [
                'name' => 'Ahmed Mohamed',
                'email' => 'ahmed@example.com',
                'phone' => '01012345678',
                'address' => 'Cairo, Egypt',
                'image' => 'https://ui-avatars.com/api/?name=Ahmed+Mohamed&background=random',
                'major_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Sara Elsayed',
                'email' => 'sara@example.com',
                'phone' => '01122334455',
                'address' => 'Alexandria, Egypt',
                'image' => 'https://ui-avatars.com/api/?name=Sara+Elsayed&background=random',
                'major_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Mahmoud Ali',
                'email' => 'mahmoud@example.com',
                'phone' => '01233445566',
                'address' => 'Giza, Egypt',
                'image' => 'https://ui-avatars.com/api/?name=Mahmoud+Ali&background=random',
                'major_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Laila Hassan',
                'email' => 'laila@example.com',
                'phone' => '01544556677',
                'address' => 'Mansoura, Egypt',
                'image' => 'https://ui-avatars.com/api/?name=Laila+Hassan&background=random',
                'major_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Omar Khalid',
                'email' => 'omar@example.com',
                'phone' => '01099887766',
                'address' => 'Tanta, Egypt',
                'image' => 'https://ui-avatars.com/api/?name=Omar+Khalid&background=random',
                'major_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Mona Zaki',
                'email' => 'mona@example.com',
                'phone' => '01122112233',
                'address' => 'Suez, Egypt',
                'image' => 'https://ui-avatars.com/api/?name=Mona+Zaki&background=random',
                'major_id' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Hassan Youssef',
                'email' => 'hassan@example.com',
                'phone' => '01200998877',
                'address' => 'Ismailia, Egypt',
                'image' => 'https://ui-avatars.com/api/?name=Hassan+Youssef&background=random',
                'major_id' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Noura Ibrahim',
                'email' => 'noura@example.com',
                'phone' => '01011223344',
                'address' => 'Cairo, Egypt',
                'image' => 'https://ui-avatars.com/api/?name=Noura+Ibrahim&background=random',
                'major_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Mostafa Amin',
                'email' => 'mostafa@example.com',
                'phone' => '01144556622',
                'address' => 'Alexandria, Egypt',
                'image' => 'https://ui-avatars.com/api/?name=Mostafa+Amin&background=random',
                'major_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Fatma Saeed',
                'email' => 'fatma@example.com',
                'phone' => '01277889900',
                'address' => 'Giza, Egypt',
                'image' => 'https://ui-avatars.com/api/?name=Fatma+Saeed&background=random',
                'major_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Yassin Hamed',
                'email' => 'yassin@example.com',
                'phone' => '01566778899',
                'address' => 'Luxor, Egypt',
                'image' => 'https://ui-avatars.com/api/?name=Yassin+Hamed&background=random',
                'major_id' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Dina Amr',
                'email' => 'dina@example.com',
                'phone' => '01066554433',
                'address' => 'Aswan, Egypt',
                'image' => 'https://ui-avatars.com/api/?name=Dina+Amr&background=random',
                'major_id' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Khaled Nour',
                'email' => 'khaled@example.com',
                'phone' => '01133221100',
                'address' => 'Port Said, Egypt',
                'image' => 'https://ui-avatars.com/api/?name=Khaled+Nour&background=random',
                'major_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Reem Adel',
                'email' => 'reem@example.com',
                'phone' => '01255443322',
                'address' => 'Cairo, Egypt',
                'image' => 'https://ui-avatars.com/api/?name=Reem+Adel&background=random',
                'major_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Hany Ramzy',
                'email' => 'hany@example.com',
                'phone' => '01588776655',
                'address' => 'Qena, Egypt',
                'image' => 'https://ui-avatars.com/api/?name=Hany+Ramzy&background=random',
                'major_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Sohair Ramzi',
                'email' => 'sohair@example.com',
                'phone' => '01044332211',
                'address' => 'Sohag, Egypt',
                'image' => 'https://ui-avatars.com/api/?name=Sohair+Ramzi&background=random',
                'major_id' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Tarek Lotfy',
                'email' => 'tarek@example.com',
                'phone' => '01199880077',
                'address' => 'Cairo, Egypt',
                'image' => 'https://ui-avatars.com/api/?name=Tarek+Lotfy&background=random',
                'major_id' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Amira Fawzy',
                'email' => 'amira@example.com',
                'phone' => '01211223344',
                'address' => 'Alexandria, Egypt',
                'image' => 'https://ui-avatars.com/api/?name=Amira+Fawzy&background=random',
                'major_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Ziad Ali',
                'email' => 'ziad@example.com',
                'phone' => '01000112233',
                'address' => 'Fayoum, Egypt',
                'image' => 'https://ui-avatars.com/api/?name=Ziad+Ali&background=random',
                'major_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Hoda Sultan',
                'email' => 'hoda@example.com',
                'phone' => '01177665544',
                'address' => 'Banha, Egypt',
                'image' => 'https://ui-avatars.com/api/?name=Hoda+Sultan&background=random',
                'major_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        Doctor::insert($doctors);
        $this->command->info('Doctors seeded successfully.');
    }
}
