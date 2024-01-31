<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('birth_date')->nullable();
            $table->string('nationality')->nullable();
            $table->timestamps();
        });

        DB::table('authors')->insert([
            [
                'name' => 'Leo Tolstoy',
                'birth_date' => '1828-09-09',
                'nationality' => 'Russian',
            ],
            [
                'name' => 'Virginia Woolf',
                'birth_date' => '1882-01-25',
                'nationality' => 'English',
            ],
            [
                'name' => 'George Orwell',
                'birth_date' => '1903-06-25',
                'nationality' => 'English',
            ],
            [
                'name' => 'Gabriel García Márquez',
                'birth_date' => '1927-03-06',
                'nationality' => 'Colombian',
            ],
            [
                'name' => 'Chinua Achebe',
                'birth_date' => '1930-11-16',
                'nationality' => 'Nigerian',
            ],
        ]);
    }

        public function down(): void
    {
        Schema::dropIfExists('authors');
    }
};
