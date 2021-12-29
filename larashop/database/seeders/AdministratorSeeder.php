<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new \App\Models\User;
        $administrator->username = "administrator";
        $administrator->name = "Site Administrator";
        $administrator->email = "administrator@larashop.test";
        $administrator->roles = json_encode(["ADMIN"]);
        $administrator->password = \Hash::make("larashop");
        $administrator -> avatar = "";
        $administrator->address = "Tangerang Selatan";
        $administrator->phone = "081352216671";
        $administrator -> save();

        $this->command->info("user Admin berhasil diinsert");
    }
}
