<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_users', function (Blueprint $table) {

            $table->increments('id');
            $table->string('password',64);
            $table->string('last_name',16);
            $table->string('first_name',16);
            $table->integer('zipcode');
            $table->string('prefecture',16);
            $table->string('municipality',16);
            $table->string('address',32);
            $table->string('apartments',32);
            $table->string('email',128)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone_number',16);
            $table->integer('user_classification_id')->unsigned();
            $table->string('company_name',128);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes(); 

            $table->foreign('user_classification_id')->references('id')->on('m_users_classifications')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_users');
    }
}
