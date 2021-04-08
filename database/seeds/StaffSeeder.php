<?php

use App\Staff;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $staffs = [
            [
                'name'=>'Dr. Idoni',
                'group'=>'doctor',
                'specification'=>null,
                'contact'=>null,
                'biography'=>null,
                'department'=>null,
                'role'=>null,
                'avatar'=>'person-4.jpg',
            ],
            [
                'name'=>'Dr. Kibirige',
                'group'=>'doctor',
                'specification'=>null,
                'contact'=>null,
                'biography'=>null,
                'department'=>null,
                'role'=>null,
                'avatar'=>'person-4.jpg',
            ],
            [
                'name'=>'Dr. Lutabi',
                'group'=>'doctor',
                'specification'=>null,
                'contact'=>null,
                'biography'=>null,
                'department'=>null,
                'role'=>null,
                'avatar'=>'person-4.jpg',
            ],
            [
                'name'=>'Dr. Doreen',
                'group'=>'doctor',
                'specification'=>null,
                'contact'=>null,
                'biography'=>null,
                'department'=>null,
                'role'=>null,
                'avatar'=>'person-4.jpg',
            ],
        ];

        $staff = new Staff();

            foreach ($staffs as $item) {
                $staff->create($item);
            }
    }
}
