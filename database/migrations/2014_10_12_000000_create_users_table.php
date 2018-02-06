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
        Schema::defaultStringLength(191);
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vorname')->nullable();
            $table->string('nachname')->nullable();
            $table->string('geburtstag')->nullable();
            $table->string('geburtsort')->nullable();
            $table->string('adresse')->nullable();
            $table->string('photo')->nullable();
            $table->string('postleitzahl')->nullable();
            $table->string('stadt')->nullable();
            $table->string('land')->nullable();
            $table->string('telefonnummer')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('ausweis')->nullable();
            $table->string('behorde')->nullable();
            $table->string('name')->nullable();
            $table->text('erfahrung')->nullable();

            $table->text('ccv')->nullable();
            $table->boolean('dhl')->default(false);
            $table->boolean('paket')->default(false);

            $table->tinyInteger('verified')->nullable();
            $table->string('email_token')->nullable();

            $table->enum('user_type', ['user', 'admin']);
            //active_status 0:pending, 1:active, 2:block;
            $table->tinyInteger('active_status')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
