<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('category_id');
            $table->string('title');
            $table->longText('description');
            $table->string('image')->nullable(); // Allow null in case there's no image initially
            $table->string('lowprice')->nullable(); // Use decimal for prices for accuracy
            $table->string('highprice')->nullable();
            $table->string('ukuran')->nullable();
            $table->text('penjelasan')->nullable(); // Allow longer explanations and null
            $table->string('tags')->nullable(); // Tags might be optional
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
