<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuestStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guest_student', function (Blueprint $table) {
            $table->increments('id');
            $table->text('prefix');
            $table->text('name');
            $table->text('surname');
            $table->enum('gender',['M', 'F', 'U']);
            $table->tinyInteger('age')->nullable();
            $table->text('major');
            $table->text('branch');
            $table->text('degree');
            $table->text('province')->nullable();
            $table->text('phone')->nullable();
            $table->text('email');
            $table->text('facebook')->nullable();
            $table->text('twittter')->nullable();
            $table->tinyInteger('news')->default(0);
            $table->timestamp('confirm')->nullable();
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
        Schema::drop('guest_student');
    }
}
