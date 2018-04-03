<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 49)->create();
        $new = new App\User();
        $new->fullname="jolver Andre gil Quevedo";
        $new->email="devneonix@gmail.com";
        $new->password="Manchita";
        $new->remember_token=str_random(10);
        $new->save();
    }
}
