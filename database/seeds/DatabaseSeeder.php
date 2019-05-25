<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::reguard();
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(BooksTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(RatingsTableSeeder::class);
        $this->call(PhotosTableSeeder::class);
        $this->call(FilesTableSeeder::class);
        $this->call(FavoritesTableSeeder::class);
        $this->call(CommentsTableSeeder::class);

        Model::reguard();
        // $this->call(UsersTableSeeder::class);
    }
}
