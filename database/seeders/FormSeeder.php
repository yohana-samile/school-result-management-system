<?php
    namespace Database\Seeders;
    use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;
    use DB;

    class FormSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         */
        public function run(): void {
            DB::table('forms')->insert([
                ['name' => 'form one'],
                ['name' => 'form two'],
                ['name' => 'form three'],
                ['name' => 'form four']
            ]);
        }
    }

