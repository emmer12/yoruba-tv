<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYlfUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ylf_users', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('madian_name');
            $table->string('other_name');
            $table->enum('sex', ['male', 'female']);
            $table->enum('marital_status', ['single', 'married', 'divorced', 'widowed']);
            $table->string('religion');
            $table->date('date_of_birth');
            $table->string('home_town');
            $table->string('lga');
            $table->text('home_address');
            $table->string('tel_no', 20);
            $table->string('education_qualification');
            $table->text('why_join');
            $table->text('next_of_kin_details');
            $table->text('photo');
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
        Schema::dropIfExists('ylf_users');
    }
}
