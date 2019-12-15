<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
//QUESTION_TYPE
        $que_type1 = App\Question_type::create([
            'name' => 'Quiz',
        ]);
        $que_type2 = App\Question_type::create([
            'name' => 'Exam',
        ]);
       

//FACULTY
        $faculty1 = App\Faculty::create([
            'name' => 'Engineering',
        ]);
        $faculty2 = App\Faculty::create([
            'name' => 'Law',
        ]);
        $faculty3 = App\Faculty::create([
            'name' => 'Science',
        ]);
        $faculty4 = App\Faculty::create([
            'name' => 'Agriculture',
        ]);


        //Department
        $dept1 = App\Department::create([
            'name' => 'Computer Science',
            'faculty_id' => $faculty3->id
        ]);
        $dept2 = App\Department::create([
            'name' => 'Robotics',
            'faculty_id' => $faculty3->id
        ]);
        $dept3 = App\Department::create([
            'name' => 'Chemical Engineering',
            'faculty_id' => $faculty1->id
        ]);
        $dept4 = App\Department::create([
            'name' => 'Agricultural Science',
            'faculty_id' => $faculty4->id
        ]);

        $dept5 = App\Department::create([
            'name' => 'History',
            'faculty_id' => $faculty2->id
        ]);


        //Status
        $status1 = App\Status::create([
            'name' => 'Active',
        ]);
        $status2 = App\Status::create([
            'name' => 'Not Ative',
        ]);


        //Levels
        $level1 = App\Level::create([
            'name' => 'Year 1',
        ]);
        $level2 = App\Level::create([
            'name' => 'Year 2',
        ]);
        $level3 = App\Level::create([
            'name' => 'Year 3',
        ]);
        $level4 = App\Level::create([
            'name' => 'Year 4',
        ]);

        //Semester
        $semester1 = \App\Semester::create([
            'name' => 'First Semester',
        ]);
        $semester2 = \App\Semester::create([
            'name' => 'Second Semester',
        ]);



        //Tutor
        $dean = \App\Tutor::create([
            'name' => 'Mr Krest Dean',
            'email' => 'dean@gmail.com',
            'password' => Hash::make('1234567'),
            'staff_id' => 'DE'.mt_rand(1000,9999),
            'status_id' => 1,
            'department_id' => null,
        ]);

        $tutor1 = \App\Tutor::create([
            'name' => 'Sesan Dapo',
            'email' => 'sesan@gmail.com',
            'password' => Hash::make('1234567'),
            'staff_id' => 'A'.mt_rand(1000,9999),
            'department_id' => $dept1->id,
            'status_id' => $status2->id,
        ]);
        $tutor2 = \App\Tutor::create([
            'name' => 'Dr Grace Nnam',
            'email' => 'grace@gmail.com',
            'password' => Hash::make('1234567'),
            'staff_id' => 'A'.mt_rand(1000,9999),
            'department_id' => $dept1->id,
        ]);
        $tutor3 = \App\Tutor::create([
            'name' => 'Tunde Mofe',
            'email' => 'mofe@gmail.com',
            'password' => Hash::make('1234567'),
            'staff_id' => 'A'.mt_rand(1000,9999),
            'department_id' => $dept1->id,
        ]);
        $tutor4 = \App\Tutor::create([
            'name' => 'Mudi Joe F',
            'email' => 'mudi@gmail.com',
            'password' => Hash::make('1234567'),
            'staff_id' => 'A'.mt_rand(1000,9999),
            'department_id' => $dept1->id,
        ]);

        $tutor5 = \App\Tutor::create([
            'name' => 'Kofi Raphael',
            'email' => 'kofi@gmail.com',
            'password' => Hash::make('1234567'),
            'staff_id' => 'A'.mt_rand(1000,9999),
            'department_id' => $dept1->id,
        ]);
        $tutor6 = \App\Tutor::create([
            'name' => 'Maria Ayala J',
            'email' => 'maria@gmail.com',
            'password' => Hash::make('1234567'),
            'staff_id' => 'A'.mt_rand(1000,9999),
            'department_id' => $dept2->id,
        ]);
        $tutor7 = \App\Tutor::create([
            'name' => 'Sajery Lampard',
            'email' => 'sajery@gmail.com',
            'password' => Hash::make('1234567'),
            'staff_id' => 'E'.mt_rand(1000,9999),
            'department_id' => $dept2->id,
        ]);
        $tutor8 = \App\Tutor::create([
            'name' => 'Mudiyi OJo',
            'email' => 'oyo@gmail.com',
            'password' => Hash::make('1234567'),
            'staff_id' => 'E'.mt_rand(1000,9999),
            'department_id' => $dept2->id,
        ]);

        $tutor9 = \App\Tutor::create([
            'name' => 'Neye Ansu',
            'email' => 'ansu@gmail.com',
            'password' => Hash::make('1234567'),
            'staff_id' => 'E'.mt_rand(1000,9999),
            'department_id' => $dept3->id,
        ]);
        $tutor10 = \App\Tutor::create([
            'name' => 'Mirik Ayalao',
            'email' => 'mirik@gmail.com',
            'password' => Hash::make('1234567'),
            'staff_id' => 'E'.mt_rand(1000,9999),
            'department_id' => $dept3->id,
        ]);
        $tutor11 = \App\Tutor::create([
            'name' => 'Jame Bond',
            'email' => 'james@gmail.com',
            'password' => Hash::make('1234567'),
            'staff_id' => 'E'.mt_rand(1000,9999),
            'department_id' => $dept3->id,
        ]);
        $tutor12 = \App\Tutor::create([
            'name' => 'Batman Fred',
            'email' => 'fred@gmail.com',
            'password' => Hash::make('1234567'),
            'staff_id' => 'E'.mt_rand(1000,9999),
            'department_id' => $dept3->id,
        ]);

        $tutor13 = \App\Tutor::create([
            'name' => 'Ugo Sony',
            'email' => 'sony@gmail.com',
            'password' => Hash::make('1234567'),
            'staff_id' => 'E'.mt_rand(1000,9999),
            'department_id' => $dept3->id,
        ]);
        $tutor14 = \App\Tutor::create([
            'name' => 'Denis White',
            'email' => 'denis@gmail.com',
            'password' => Hash::make('1234567'),
            'staff_id' => 'E'.mt_rand(1000,9999),
            'department_id' => $dept4->id,
        ]);
        $tutor15 = \App\Tutor::create([
            'name' => 'Jamal Yusuf',
            'email' => 'jamal@gmail.com',
            'password' => Hash::make('1234567'),
            'staff_id' => 'E'.mt_rand(1000,9999),
            'department_id' => $dept4->id,
        ]);
        $tutor16 = \App\Tutor::create([
            'name' => 'Joy O',
            'email' => 'joy@gmail.com',
            'password' => Hash::make('1234567'),
            'staff_id' => 'E'.mt_rand(1000,9999),
            'department_id' => $dept4->id,
        ]);



//COURSES



            // $table->string('periods')->default(0);
            // $table->string('duration_per_period')->nullable();
            // $table->string('total_duration')->nullable();
            // $table->string('is_practical')->default(0);




        $course1 = App\Course::create([
            'course_code' => 'CHEM 101',
            'name' => 'Introduction to Chemistry',
            'department_id' => $dept1->id,
            'detail' => 'lorem....elcoe to the besa you abc vea, more deatails, evet',
            'level_id' => $level1->id,
            'semester_id' => $semester1->id,
            'periods' => '8',
            'duration_per_period' => '3',
            'total_duration' => 24,
            'start_date' => 'Dec 28, 2019',
            'end_date' => 'Mar 14, 2019',
            'total_seats' => 22,
            'status_id' => $status1->id,
            'tutor_id' => $tutor1->id
        ]);
        $course2 = App\Course::create([
            'course_code' => 'PHY 101',
            'name' => 'Introduction to Physics',
            'department_id' => $dept1->id,
            'detail' => 'lorem....elcoe to the besa you abc vea, more deatails, evet',
            'level_id' => $level1->id,
            'semester_id' => $semester1->id,
            'periods' => 8,
            'duration_per_period' => 3,
            'total_duration' => 24,
            'start_date' => 'Dec 28, 2019',
            'end_date' => 'Mar 14, 2019',
            'total_seats' => 20,
            'status_id' => $status1->id,
            'tutor_id' => $tutor1->id
        ]);
        $course3 = App\Course::create([
            'course_code' => 'CSC 121',
            'name' => 'Organic Chemistry II',
            'department_id' => $dept1->id,
            'detail' => 'lorem....elcoe to the besa you abc vea, more deatails, evet',
            'level_id' => $level1->id,
            'semester_id' => $semester1->id,
            'periods' => 8,
            'duration_per_period' => 3,
            'total_duration' => 24,
            'start_date' => 'Dec 28, 2019',
            'end_date' => 'Mar 14, 2019',
            'total_seats' => 25,
            'status_id' => $status1->id,
            'tutor_id' => $tutor1->id
        ]);
        $course4 = App\Course::create([
            'course_code' => 'CST 101',
            'name' => 'Robotic Science',
            'department_id' => $dept1->id,
            'detail' => 'lorem....elcoe to the besa you abc vea, more deatails, evet',
            'level_id' => $level1->id,
            'semester_id' => $semester1->id,
            'periods' => 8,
            'duration_per_period' => 3,
            'total_duration' => 24,
            'start_date' => 'Dec 28, 2019',
            'end_date' => 'Mar 14, 2019',
            'total_seats' => 32,
            'status_id' => $status1->id,
            'tutor_id' => $tutor1->id
        ]);
        $course5 = App\Course::create([
            'course_code' => 'CSC 205',
            'name' => 'Robotic Science II',
            'department_id' => $dept1->id,
            'detail' => 'lorem....elcoe to the besa you abc vea, more deatails, evet',
            'level_id' => $level2->id,
            'semester_id' => $semester2->id,
            'periods' => 8,
            'duration_per_period' => 3,
            'total_duration' => 24,
            'start_date' => 'Dec 28, 2019',
            'end_date' => 'Mar 14, 2019',
            'total_seats' => 29,
            'status_id' => $status1->id,
            'tutor_id' => $tutor2->id
        ]);
        $course6 = App\Course::create([
            'course_code' => 'CSC 203',
            'name' => 'Web Design',
            'department_id' => $dept1->id,
            'detail' => 'lorem....elcoe to the besa you abc vea, more deatails, evet',
            'level_id' => $level2->id,
            'semester_id' => $semester2->id,
            'periods' => 8,
            'duration_per_period' => 3,
            'total_duration' => 24,
            'start_date' => 'Dec 28, 2019',
            'end_date' => 'Mar 14, 2019',
            'total_seats' => 27,
            'status_id' => $status1->id,
            'tutor_id' => $tutor1->id
        ]);
        $course7 = App\Course::create([
            'course_code' => 'TMT 201',
            'name' => 'Farm Management',
            'department_id' => $dept1->id,
            'detail' => 'lorem....elcoe to the besa you abc vea, more deatails, evet',
            'level_id' => $level2->id,
            'semester_id' => $semester2->id,
            'periods' => 8,
            'duration_per_period' => 3,
            'total_duration' => 24,
            'start_date' => 'Dec 28, 2019',
            'end_date' => 'Mar 14, 2019',
            'total_seats' => 42,
            'status_id' => $status1->id,
            'tutor_id' => $tutor2->id
        ]);
        $course8 = App\Course::create([
            'course_code' => 'AGR 101',
            'name' => 'Intro to Farm Management',
            'department_id' => $dept4->id,
            'detail' => 'lorem....elcoe to the besa you abc vea, more deatails, evet',
            'level_id' => $level2->id,
            'semester_id' => $semester1->id,
            'periods' => 8,
            'duration_per_period' => 3,
            'total_duration' => 24,
            'start_date' => 'Dec 28, 2019',
            'end_date' => 'Mar 14, 2019',
            'total_seats' => 15,
            'status_id' => $status1->id,
            'tutor_id' => $tutor5->id
        ]);


//QUESTIONS
        // $question1 = App\Question::create([
        //     'course_id' => $course3->id,
        //     'detail' => 'Which of the following language is used to build server side programming',
        //     'option_A' => 'HTML',
        //     'option_B' => 'CSS',
        //     'option_C' => 'PHP',
        //     'option_D' => 'Jquery',
        //     'option_correct' => 'PHP',
        //     'que_date' => '2019-12-03',
        //     'que_time' => '01:20:30',
        //     'expected_score' => 20,
        //     'tutor_id' => $tutor3->id
        // ]);
        // $question2 = App\Question::create([
        //     'course_id' => $course3->id,
        //     'detail' => 'Which of the following language is used to build server side programming',
        //     'option_A' => 'HTML',
        //     'option_B' => 'CSS',
        //     'option_C' => 'PHP',
        //     'option_D' => 'Jquery',
        //     'option_correct' => 'PHP',
        //     'que_date' => '2019-12-03',
        //     'que_time' => '01:20:30',
        //     'expected_score' => 20,
        //     'tutor_id' => $tutor3->id
        // ]);
        // $question3 = App\Question::create([
        //     'course_id' => $course1->id,
        //     'detail' => 'Which of the following language is used to build server side programming',
        //     'option_A' => 'HTML',
        //     'option_B' => 'CSS',
        //     'option_C' => 'PHP',
        //     'option_D' => 'Jquery',
        //     'option_correct' => 'PHP',
        //     'que_date' => '2019-12-03',
        //     'que_time' => '01:20:30',
        //     'expected_score' => 20,
        //     'tutor_id' => $tutor1->id
        // ]);
        // $question4 = App\Question::create([
        //     'course_id' => $course3->id,
        //     'detail' => 'Which of the following language is used to build server side programming',
        //     'option_A' => 'HTML',
        //     'option_B' => 'CSS',
        //     'option_C' => 'PHP',
        //     'option_D' => 'Jquery',
        //     'option_correct' => 'PHP',
        //     'que_date' => '2019-12-03',
        //     'que_time' => '01:20:30',
        //     'expected_score' => 20,
        //     'tutor_id' => $tutor3->id
        // ]);
        // $question5 = App\Question::create([
        //     'course_id' => $course3->id,
        //     'detail' => 'Which of the following language is used to build server side programming',
        //     'option_A' => 'HTML',
        //     'option_B' => 'CSS',
        //     'option_C' => 'PHP',
        //     'option_D' => 'Jquery',
        //     'option_correct' => 'PHP',
        //     'que_date' => '2019-12-03',
        //     'que_time' => '01:20:30',
        //     'expected_score' => 20,
        //     'tutor_id' => $tutor3->id
        // ]);






    //GENDER
        $gender1 = App\Gender::create([
            'status' => 'Male',
        ]);
        $gender2 = App\Gender::create([
            'status' => 'Female',
        ]);



      
    
        //students USERS
        $user1 = \App\User::create([
            'name' => 'Mara Cruz',
            'gender_id' => $gender2->id,
            'reg_number' => '2019'.mt_rand(1000000,9999999),
            'phone_number'=> '08026510075',
            'role' => 'student',
            'level_id' => 1,
            'department_id'=> $dept1->id,
            'tutor_id'=> $tutor2->id,
            'email' => 'maracruz@gmail.com',
            'password' => Hash::make(1234567),
            'confirm_password' => Hash::make(1234567),
        ]);
        $user2 = \App\User::create([
            'name' => 'Gizzy Zain',
            'gender_id' => $gender1->id,
            'reg_number' => '2019'.mt_rand(1000000,9999999),
            'phone_number'=> '08088510045',
            'role' => 'student',
            'level_id' => 1,
            'department_id'=> $dept1->id,
            'tutor_id'=> $tutor2->id,
            'email' => 'gabby@gmail.com',
            'password' => Hash::make(1234567),
            'confirm_password' => Hash::make(1234567),
        ]);
        $user3 = \App\User::create([
            'name' => 'Kirenny Guru',
            'gender_id' => $gender1->id,
            'reg_number' => '2019'.mt_rand(1000000,9999999),
            'phone_number'=> '08099570045',
            'role' => 'student',
            'level_id' => 1,
            'department_id'=> $dept1->id,
            'tutor_id'=> $tutor2->id,
            'email' => 'kenny@gmail.com',
            'password' => Hash::make(1234567),
            'confirm_password' => Hash::make(1234567),
        ]);

        $user4 = \App\User::create([
            'name' => 'Mamo Cruz',
            'gender_id' => $gender2->id,
            'reg_number' => '2019'.mt_rand(1000000,9999999),
            'phone_number'=> '08026510075',
            'role' => 'student',
            'level_id' => 4,
            'department_id'=> $dept1->id,
            'tutor_id'=> $tutor3->id,
            'email' => 'mamocruz@gmail.com',
            'password' => Hash::make(1234567),
            'confirm_password' => Hash::make(1234567),
        ]);
        $user5 = \App\User::create([
            'name' => 'kabby Zino',
            'gender_id' => $gender1->id,
            'reg_number' => '2019'.mt_rand(1000000,9999999),
            'phone_number'=> '08088510045',
            'role' => 'student',
            'level_id' => 4,
            'department_id'=> $dept1->id,
            'tutor_id'=> $tutor2->id,
            'email' => 'kabby@gmail.com',
            'password' => Hash::make(1234567),
            'confirm_password' => Hash::make(1234567),
        ]);
        $user6 = \App\User::create([
            'name' => 'Kenny Gun',
            'gender_id' => $gender1->id,
            'reg_number' => '2019'.mt_rand(1000000,9999999),
            'phone_number'=> '08099570045',
            'role' => 'student',
            'level_id' => 4,
            'department_id'=> $dept1->id,
            'tutor_id'=> $tutor2->id,
            'email' => 'enny@gmail.com',
            'password' => Hash::make(1234567),
            'confirm_password' => Hash::make(1234567),
        ]);
        $user7 = \App\User::create([
            'name' => 'Gab Zain',
            'gender_id' => $gender1->id,
            'reg_number' => '2019'.mt_rand(1000000,9999999),
            'phone_number'=> '08088510045',
            'role' => 'student',
            'level_id' => 4,
            'department_id'=> $dept1->id,
            'tutor_id'=> $tutor1->id,
            'email' => 'zain@gmail.com',
            'password' => Hash::make(1234567),
            'confirm_password' => Hash::make(1234567),
        ]);
        $user8 = \App\User::create([
            'name' => 'Aaron Guru',
            'gender_id' => $gender1->id,
            'reg_number' => '2019'.mt_rand(1000000,9999999),
            'phone_number'=> '08099570045',
            'role' => 'student',
            'level_id' => 4,
            'department_id'=> $dept1->id,
            'tutor_id'=> $tutor1->id,
            'email' => 'kanny@gmail.com',
            'password' => Hash::make(1234567),
            'confirm_password' => Hash::make(1234567),
        ]);
        $user9 = \App\User::create([
            'name' => 'Kenny Steph',
            'gender_id' => $gender1->id,
            'reg_number' => '2018'.mt_rand(1000000,9999999),
            'phone_number'=> '08099570045',
            'role' => 'student',
            'level_id' => 2,
            'department_id'=> $dept2->id,
            'tutor_id'=> $tutor2->id,
            'email' => 'keny@gmail.com',
            'password' => Hash::make(1234567),
            'confirm_password' => Hash::make(1234567),
        ]);

        $user10 = \App\User::create([
            'name' => 'Max Milli',
            'gender_id' => $gender2->id,
            'reg_number' => '2018'.mt_rand(1000000,9999999),
            'phone_number'=> '08099570045',
            'role' => 'student',
            'level_id' => 2,
            'department_id'=> $dept2->id,
            'tutor_id'=> $tutor2->id,
            'email' => 'ken@gmail.com',
            'password' => Hash::make(1234567),
            'confirm_password' => Hash::make(1234567),
        ]);




        



        $states = [
            "Abia",
            "Adamawa",
            "Anambra",
            "Akwa Ibom",
            "Bauchi",
            "Bayelsa",
            "Benue",
            "Borno",
            "Cross River",
            "Delta",
            "Ebonyi",
            "Enugu",
            "Edo",
            "Ekiti",
            "FCT - Abuja",
            "Gombe",
            "Imo",
            "Jigawa",
            "Kaduna",
            "Kano",
            "Katsina",
            "Kebbi",
            "Kogi",
            "Kwara",
            "Lagos",
            "Nasarawa",
            "Niger",
            "Ogun",
            "Ondo",
            "Osun",
            "Oyo",
            "Plateau",
            "Rivers",
            "Sokoto",
            "Taraba",
            "Yobe",
            "Zamfara"
        ];

        foreach ($states as $state){
            \App\State::create([
                'state' => $state,
            ]);
        }


    }
}
