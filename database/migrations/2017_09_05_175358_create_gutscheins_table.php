<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGutscheinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gutscheins', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->integer('campaign_id')->nullable();

            $table->timestamps();
            $table->text('ccv')->nullable();
            $table->decimal('amount')->nullable();
            $table->string('email')->nullable();

            $table->string('nachname')->nullable();
            $table->string('adresse')->nullable();
            $table->string('postleitzahl')->nullable();
            $table->string('stadt')->nullable();
            $table->string('land')->nullable();
            $table->string('gutschein_id')->nullable();

            $table->decimal('upsale')->nullable();
            $table->decimal('versandart')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gutscheins');
    }
}
