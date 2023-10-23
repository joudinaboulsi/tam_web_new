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
        $this->call(UsersTableSeeder::class);
        $this->call(AboutTableSeeder::class);
        $this->call(HomeTitleTableSeeder::class);
        $this->call(MissionTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(SeoPageTableSeeder::class);
        $this->call(ServiceTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(SlidersTableSeeder::class);
        $this->call(VisionTableSeeder::class);
        $this->call(ClientsTableSeeder::class);
        $this->call(ContactTableSeeder::class);
    }
}
