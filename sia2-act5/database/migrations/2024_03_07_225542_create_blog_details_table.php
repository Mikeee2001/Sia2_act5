<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $faker = Faker\Factory::create();
        Schema::create('blog_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('blog_id');
            $table->longtext('content');
            $table->foreign('blog_id')->reference('id')->on('blogs')->onDelete('cascade');
            $table->timestamps();
        });
        for ($i=0; $i < 10; $i++){
            $blog = new Blog();
            $blog->blog_name = $faker->sentence(3). $i;
            
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_details');
    }
};
