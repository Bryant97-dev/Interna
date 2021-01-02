<?php

namespace Database\Seeders;

use App\Models\StudyProgram;
use Illuminate\Database\Seeder;

class StudyProgramsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $study_programs = [
            [
                'abbreviation'  => 'IBM',
                'study_program' => 'International Business Management - Regular Class',
            ],
            [
                'abbreviation'  => 'BMI',
                'study_program' => 'International Business Management - International Class',
            ],
            [
                'abbreviation'  => 'ACC',
                'study_program' => 'Akuntansi',
            ],
            [
                'abbreviation'  => 'COM',
                'study_program' => 'Ilmu Komunikasi',
            ],
            [
                'abbreviation'  => 'HTB',
                'study_program' => 'Hospitality and Tourism Business',
            ],
            [
                'abbreviation'  => 'CBz',
                'study_program' => 'Bisnis Kuliner',
            ],
            [
                'abbreviation'  => 'PSY',
                'study_program' => 'Psikologi',
            ],
            [
                'abbreviation'  => 'IMT',
                'study_program' => 'Informatika',
            ],
            [
                'abbreviation'  => 'ISB',
                'study_program' => 'Information System Business',
            ],
            [
                'abbreviation'  => 'VCD',
                'study_program' => 'Desain Komunikasi Visual',
            ],
            [
                'abbreviation'  => 'INA',
                'study_program' => 'Arsitektur Interior',
            ],
            [
                'abbreviation'  => 'FPD',
                'study_program' => 'Bisnis Desain Fashion',
            ],
            [
                'abbreviation'  => 'MED',
                'study_program' => 'Kedokteran',
            ],
            [
                'abbreviation'  => 'FTP',
                'study_program' => 'International Food Technology',
            ],
        ];

        StudyProgram::insert($study_programs);
    }
}
