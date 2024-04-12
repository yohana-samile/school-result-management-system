<?php
    namespace Database\Seeders;
    use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;
    use DB;

    class SemesterSeeder extends Seeder {
        /**
         * Run the database seeds.
         */
        public function run(): void {
            DB::table('semesters')->insert([
                [
                    'name' => 'short term',
                    'from' => '2024-01-01',
                    'to' => '2024-04-05'
                ],
                [
                    'name' => 'mid term',
                    'from' => '2024-04-06',
                    'to' => '2024-06-06'
                ],
                [
                    'name' => 'long term',
                    'from' => '2024-74-06',
                    'to' => '2024-12-06'
                ],
            ]);
        }
    }

