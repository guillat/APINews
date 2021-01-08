<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\categories;


class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->timestamp('published_at')->nullable();
            $table->string('title');
            $table->text('body');   
            //$table->unsignedBigInteger('author_id');        
            //$table->foreignId('author_id')->constrained();
            $table->foreignId('category_id')->constrained(); 
            $table->string('picture');
            $table->string('slug'); 
           

            //Relations
            $table->foreignId('author_id')
                  ->constrained('authors')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            
          //  $table->foreignId('category_id')
              //      ->constrained('categories')
              //      ->onUpdate('cascade')
               //     ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
