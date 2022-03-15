<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();
        $adminRecords = [
           [
               'id'=>1,
               'name'=>'CEO B2B',
               'phone'=>'017131999',
               'email'=>'admin@b2b.com',
               'image'=>'',
               'status'=>'1',
               'password'=>Hash::make('admin@'),
               'status'=>1
           ],
           
        ];

        foreach($adminRecords as $key => $records){
            \App\Models\Admin::create($records);
        }
    }
}
