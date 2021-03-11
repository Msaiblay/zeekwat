<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('coverphoto');
            $table->text('description');
            $table->text('requirement');
            $table->text('accessstatus');
            $table->text('price');
            $table->boolean('allowdiscount');
            $table->boolean('publicstatus');


//            $table->foreignId('teacher_id')->references('id')->on('teachers')->onDelete('cascade');
            $table->foreignId('language_id')->references('id')->on('languages')->onDelete('cascade');
//            $table->foreignId('category_id')->references('id')->on('tcourses')->onDelete('cascade');
            $table->foreignId('subcategory_id')->references('id')->on('subcategories')->onDelete('cascade');


            $table->softDeletes();
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
        Schema::dropIfExists('courses');
    }
}
