<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $password = Hash::make('test123');
        User::create(array('first_name'=>'Deb','last_name'=>'Bhattrai','phone_number'=>'123456789','gender'=>'male','email'=>'phpdeveloper.deb@gmail.com', 'date_of_birth'=>'1980-08-20','biography'=>'this is test biography of Deb','profile_picture'=>'image.jpg','password'=>$password));
        User::create(array('first_name'=>'John','last_name'=>'Denver','phone_number'=>'8798372948','gender'=>'male','email'=>'john@gmail.com','date_of_birth'=>'1979-10-21','biography'=>'This is biography for testing purpose of Mr. John.','profile_picture'=>'image.jpg','password'=>$password));
        User::create(array('first_name'=>'John','last_name'=>'Smith','phone_number'=>'25455667','gender'=>'male','email'=>'smith@gmail.com','date_of_birth'=>'1980-12-20','biography'=>'This is biography for testing purpose.','profile_picture'=>'image.jpg','password'=>$password));
        User::create(array('first_name'=>'Cathrine','last_name'=>'Dion','phone_number'=>'654654','gender'=>'female','email'=>'cathrine@gmail.com','date_of_birth'=>'1980-12-25','biography'=>'Hello, this is biography for testing purpose.','profile_picture'=>'image.jpg','password'=>$password));
        User::create(array('first_name'=>'Bob','last_name'=>'Marley','phone_number'=>'9837465864','gender'=>'male','email'=>'bob@gmail.com','date_of_birth'=>'1950-09-07','biography'=>'Hello6, this is biography for testing purpose6.','profile_picture'=>'image.jpg','password'=>$password));

        User::create(array('first_name'=>'Amelie','last_name'=>'Lens','phone_number'=>'6565777788','gender'=>'female','email'=>'amelie@gmail.com','date_of_birth'=>'1987-09-25','biography'=>'Hello2, this is biography for testing purpose2.','profile_picture'=>'image.jpg','password'=>$password));
        User::create(array('first_name'=>'Shumaila','last_name'=>'Nazz','phone_number'=>'431234768','gender'=>'female','email'=>'shumaila@gmail.com','date_of_birth'=>'1984-11-15','biography'=>'Hello3, this is biography for testing purpose3.','profile_picture'=>'image.jpg','password'=>$password));
        User::create(array('first_name'=>'Dinakar','last_name'=>'Naidu','phone_number'=>'898654654564','gender'=>'male','email'=>'dinakar@gmail.com','date_of_birth'=>'1982-12-02','biography'=>'Hello4, this is biography for testing purpose4.','profile_picture'=>'image.jpg','password'=>$password));
        User::create(array('first_name'=>'Sumit','last_name'=>'Bhatt','phone_number'=>'897878756','gender'=>'male','email'=>'sumit@gmail.com','date_of_birth'=>'1986-02-12','biography'=>'Hello5, this is biography for testing purpose5.','profile_picture'=>'image.jpg','password'=>$password));
        User::create(array('first_name'=>'Sakira','last_name'=>'Isabel','phone_number'=>'9834728477','gender'=>'female','email'=>'sakira@gmail.com','date_of_birth'=>'1975-09-07','biography'=>'Hello6, this is biography for testing purpose6.','profile_picture'=>'image.jpg','password'=>$password));


    }
}
