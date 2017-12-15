<?php

use Illuminate\Database\Seeder;
use App\User;
use Stripe\Token;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        //Make Admin
      // $main_user = User::create([
      //       'name' => "John Example",
      //       'org' => 'Fresh Org',
      //       'email' => 'admin@gmail.com',
      //       'phone' => "9855023261",
      //       'address' =>"123 Sample Lane",
      //       'city' => 'Covington',
      //       'state' =>'LA',
      //       'zip' => "70435",
      //       'password' => bcrypt('hello'),
      //   ]);
      //
      //   \Stripe\Stripe::setApiKey($_ENV['STRIPE_SECRET']);
      //   $token = \Stripe\Token::create(array(
      //     "card" => array(
      //       "number" => "4242424242424242",
      //       "exp_month" => 12,
      //       "exp_year" => 2018,
      //       "cvc" => "314"
      //     )
      //   ));
      //
      //  $main_user->newSubscription('main','PLAN')->create($token['id'],['email'=>$main_user->email]);
      //
      //
      // $i=0;
      // while( $i != 10 ){
      //   DB::table('users')->insert([
      //         'name' => str_random(10),
      //         'org' => 'Sample Org',
      //         'email' => str_random(10).'@gmail.com',
      //         'phone' => rand(100000000,999999999),
      //         'address' =>"555 Sample Lane",
      //         'city' => 'Anywhere',
      //         'state' =>'NY',
      //         'zip' => "10000",
      //         'password' => bcrypt('secret'),
      //     ]);
      //     $i++;
      // }
    }
}
