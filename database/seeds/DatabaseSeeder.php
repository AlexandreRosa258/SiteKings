<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker::create();
        DB::insert('INSERT INTO users (name,email,password,admin,student) VALUES(?,?,?,?,?)',array('alexandre rosa','alexandreifpr@hotmail.com',bcrypt('testando'),1,1));
        DB::insert('INSERT INTO users (name,email,password,admin,student) VALUES(?,?,?,?,?)',array('luiz francisco','luizfrancisco@hotmail.com',bcrypt('testando'),1,0));

        DB::insert('INSERT INTO tests (question,option1,option2,option3,option4,correct_answer,status,proof) VALUES(?,?,?,?,?,?,?,?)',array('Qual é o nome do professor de Inglês ?', 'Luiz','Alexandre1','Pedro','José','Luiz',1,1));
        DB::insert('INSERT INTO tests (question,option1,option2,option3,option4,correct_answer,status,proof) VALUES(?,?,?,?,?,?,?,?)',array('Qual é o nome do professor de Inglês ?', 'Luiz','Alexandre2','Pedro','José','Jose',1,1));
        DB::insert('INSERT INTO tests (question,option1,option2,option3,option4,correct_answer,status,proof) VALUES(?,?,?,?,?,?,?,?)',array('Qual é o nome do professor de Inglês ?', 'Luiz','Alexandre3','Pedro','José','Luiz',1,1));
        DB::insert('INSERT INTO tests (question,option1,option2,option3,option4,correct_answer,status,proof) VALUES(?,?,?,?,?,?,?,?)',array('Qual é o nome do professor de Inglês ?', 'Luiz','Alexandre4','Pedro','José','Jose',1,1));
        DB::insert('INSERT INTO tests (question,option1,option2,option3,option4,correct_answer,status,proof) VALUES(?,?,?,?,?,?,?,?)',array('Qual é o nome do professor de Inglês ?', 'Luiz','Alexandre5','Pedro','José','Luiz',1,1));
        DB::insert('INSERT INTO tests (question,option1,option2,option3,option4,correct_answer,status,proof) VALUES(?,?,?,?,?,?,?,?)',array('Qual é o nome do professor de Inglês ?', 'Luiz','Alexandre6','Pedro','José','Jose',1,1));
        DB::insert('INSERT INTO tests (question,option1,option2,option3,option4,correct_answer,status,proof) VALUES(?,?,?,?,?,?,?,?)',array('Qual é o nome do professor de Inglês ?', 'Luiz','Alexandre7','Pedro','José','Luiz',1,1));
        DB::insert('INSERT INTO tests (question,option1,option2,option3,option4,correct_answer,status,proof) VALUES(?,?,?,?,?,?,?,?)',array('Qual é o nome do professor de Inglês ?', 'Luiz','Alexandre8','Pedro','José','Jose',1,1));
        DB::insert('INSERT INTO tests (question,option1,option2,option3,option4,correct_answer,status,proof) VALUES(?,?,?,?,?,?,?,?)',array('Qual é o nome do professor de Inglês ?', 'Luiz','Alexandre9','Pedro','José','Luiz',1,1));
        DB::insert('INSERT INTO tests (question,option1,option2,option3,option4,correct_answer,status,proof) VALUES(?,?,?,?,?,?,?,?)',array('Qual é o nome do professor de Inglês ?', 'Luiz','Alexandre10','Pedro','José','Jose',1,1));
        DB::insert('INSERT INTO tests (question,option1,option2,option3,option4,correct_answer,status,proof) VALUES(?,?,?,?,?,?,?,?)',array('Qual é o nome do professor de Inglês ?', 'Luiz','Alexandre11','Pedro','José','Luiz',1,0));
        DB::insert('INSERT INTO tests (question,option1,option2,option3,option4,correct_answer,status,proof) VALUES(?,?,?,?,?,?,?,?)',array('Qual é o nome do professor de Inglês ?', 'Luiz','Alexandre12','Pedro','José','Jose',1,0));

        DB::insert('INSERT INTO proofs (level_id) VALUES(?)',array(1));
        // DB::insert('INSERT INTO proofs (level_id) VALUES(?)',array(2));
        // DB::insert('INSERT INTO proofs (level_id) VALUES(?)',array(3));
        // DB::insert('INSERT INTO proofs (level_id) VALUES(?)',array(4));
        // DB::insert('INSERT INTO proofs (level_id) VALUES(?)',array(5));
        // DB::insert('INSERT INTO proofs (level_id) VALUES(?)',array(6));
        // DB::insert('INSERT INTO proofs (level_id) VALUES(?)',array(7));
        // DB::insert('INSERT INTO proofs (level_id) VALUES(?)',array(8));
        // DB::insert('INSERT INTO proofs (level_id) VALUES(?)',array(9));
        // DB::insert('INSERT INTO proofs (level_id) VALUES(?)',array(10));





        DB::insert('INSERT INTO questions (user_id,questions,answer,answered) VALUES(?,?,?,?)',array(1,'só usa s em he,she e it ?','Sim, quando se esta no presente',0));
        DB::insert('INSERT INTO questions (user_id,questions,answer,answered) VALUES(?,?,?,?)',array(1,'quais os pronomes do verbo to be ?','I,You,He,She,It,We,You,They',0));
        DB::insert('INSERT INTO questions (user_id,questions,answer,answered) VALUES(?,?,?,?)',array(1,'Qual é o seu nome?',' ',1));

        // DB::insert('INSERT INTO photos (name,image) VALUES(?,?)',array('foto1','fundo1.jpg'));
        // DB::insert('INSERT INTO photos (name,image) VALUES(?,?)',array('foto2','fundo2.jpg'));
        // DB::insert('INSERT INTO photos (name,image) VALUES(?,?)',array('foto3','fundo3.jpg'));
        // DB::insert('INSERT INTO photos (name,image) VALUES(?,?)',array('foto4','fundo4.jpg'));
        // DB::insert('INSERT INTO photos (name,image) VALUES(?,?)',array('foto5','fundo5.jpg'));
        // DB::insert('INSERT INTO photos (name,image) VALUES(?,?)',array('foto7','fundo7.jpg'));

      
        foreach (range(1,20) as $index) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $faker->state,
                'admin' => (int) $faker->boolean(false),
                'student' =>(int) $faker->boolean(true)
            ]);
        }



    }
}
