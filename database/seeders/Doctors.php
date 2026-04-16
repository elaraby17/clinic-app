<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Doctors extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // 1. تعطيل القيود بطريقة متوافقة مع كل الأنواع
        Schema::disableForeignKeyConstraints();

        // 2. تفريغ الجدول
        Doctor::truncate();

        // 3. إعادة تفعيل القيود
        Schema::enableForeignKeyConstraints();
        $doctors = [
            [
                'name' => 'Ahmed Mohamed',
                'email' => 'ahmed@example.com',
                'phone' => '01012345678',
                'bio' => 'طبيب قلب ذو خبرة في علاج أمراض القلب والشرايين.',
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
                'bio' => 'طبيبة أطفال متخصصة في رعاية الأطفال حديثي الولادة والرضع.',
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
                'bio' => 'طبيب نفسي متخصص في علاج اضطرابات القلق والاكتئاب.',
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
                'bio' => 'طبيبة جلدية متخصصة في علاج مشاكل البشرة وحب الشباب.',
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
                'bio' => 'طبيب عظام ذو خبرة في علاج الكسور والتهابات المفاصل.',
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
                'bio' => 'طبيبة نساء وتوليد متخصصة في رعاية الحمل والولادة.',
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
                'bio' => 'طبيب أنف وأذن وحنجرة متخصص في علاج مشاكل التنفس والسمع.',
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
                'bio' => 'طبيبة عيون متخصصة في علاج مشاكل الرؤية وجراحة العيون.',
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
                'bio' => 'طبيب أسنان متخصص في علاج مشاكل الأسنان واللثة.',
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
                'bio' => 'طبيبة تخدير متخصصة في توفير الرعاية الآمنة أثناء العمليات الجراحية.',
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
                'bio' => 'طبيب جراحة متخصص في العمليات الجراحية المختلفة.',
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
                'bio' => 'طبيبة تغذية متخصصة في تقديم النصائح الغذائية وخطط الحمية الصحية.',
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
                'bio' => 'طبيب نفسي متخصص في علاج اضطرابات النوم والأرق.',
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
                'bio' => 'طبيبة أمراض الدم متخصصة في علاج اضطرابات الدم والسرطان.',
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
                'bio' => 'طبيب مسالك بولية متخصص في علاج مشاكل الجهاز البولي والكلى.',
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
                'bio' => 'طبيبة نساء وتوليد متخصصة في رعاية الحمل والولادة.',
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
                'bio' => 'طبيب قلب متخصص في علاج امراض القلب والشرايين.',
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
                'bio' => 'طبيبة أطفال متخصصة في رعاية الأطفال حديثي الولادة والرضع.',
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
                'bio' => 'طبيب نفسي متخصص في علاج اضطرابات القلق والاكتئاب.',
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
                'bio' => 'طبيبة جلدية متخصصة في علاج مشاكل البشرة وحب الشباب.',
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
