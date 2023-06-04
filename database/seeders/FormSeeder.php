<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('form')->insert([
            'fullname' => 'Asep Sobari',
            'email' => 'asep@gmail.com',
            'company_name' => 'asep comppany',
            'company_type' => 'Ritel',
            'problems' => 'Perushaan kami belum memiliki pencatatan input barang dan monitoring barang',
            'expectation' =>  'Kami membutuhkan sistem untuk pencatatan dan monitoring barang',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('form')->insert([
            'fullname' => 'Puwan Maharani',
            'email' => 'puwan@gmail.com',
            'company_name' => 'PDI Perjuangan',
            'company_type' => 'Politic',
            'problems' => 'Partai kami sarang Koruptor',
            'expectation' =>  'Dibubarkan saja!',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
