<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('password',64);
            $table->string('last_name',16);
            $table->string('first_name',16);
            $table->string('zip');
            $table->string('prefecture',16);
            $table->string('municipality',16);
            $table->string('address',32);
            $table->string('apartments',32);
            $table->string('email',128)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone_number',16);
            // $table->string('user_classification_id'); FK
            $table->string('company_name',128);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
