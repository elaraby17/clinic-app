<?php

namespace Database\Seeders;

use App\Models\Major;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Majors extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Major::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $majors = [
            ['name' => 'Bone', 'slug' => 'bone', 'image' => 'https://aoa.org.au/images/default-source/Travelling-Exhibition/bones/skeleton-graphic-transparent-w-text-and-shadow.png?sfvrsn=fab9cb04_2'],
            ['name' => 'Cardiology', 'slug' => 'cardiology', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Heart_diagram_blood_flow_en.svg/250px-Heart_diagram_blood_flow_en.svg.png'],
            ['name' => 'Dermatology', 'slug' => 'dermatology', 'image' => 'https://hudsondermatology.com/wp-content/uploads/2022/07/MEDICAL-DERMATOLOGY.jpg'],
            ['name' => 'Dentistry', 'slug' => 'dentistry', 'image' => 'https://warsawdentalcenter.pl/wp-content/uploads/2024/11/przeglad.webp'],
            ['name' => 'Neurology', 'slug' => 'neurology', 'image' => 'https://custom-images.strikinglycdn.com/res/hrscywv4p/image/upload/c_limit,fl_lossy,h_9000,w_1200,f_auto,q_auto/1127854/e85d2bee-7418-4961-a7e0-94027f6ade44_na2rub.jpg'],
            ['name' => 'Pediatrics', 'slug' => 'pediatrics', 'image' => 'https://eastpointhospital.in/wp-content/uploads/2025/05/Pediatrician.webp'],
            ['name' => 'Ophthalmology', 'slug' => 'ophthalmology', 'image' => 'https://medical.rossu.edu/sites/g/files/krcnkv261/files/styles/atge_3_2_crop_md/public/2022-04/Opthalmology.jpg?h=f9d06ff2&itok=i-7cDC00'],
            ['name' => 'Psychiatry', 'slug' => 'psychiatry', 'image' => 'https://parcarecenter.com/wp-content/uploads/2026/02/Psychiatry-clinic.jpeg'],
        ];
        Major::insert($majors);
        $this->command->info('Majors seeded successfully.');
    }
}
