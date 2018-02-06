<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('min_amount')->nullable();
            $table->string('max_amount')->nullable();
            $table->decimal('recommended_amount')->nullable();
            $table->string('amount_prefilled')->nullable();
            $table->integer('views')->nullable();
            $table->tinyInteger('status')->nullable(); //0:pending,1:approve,2:blocked

            $table->tinyInteger('auszahlungsdatum_investment')->nullable();
            $table->tinyInteger('auszahlungssumme_investment')->nullable();

            $table->decimal('amount_sparplan')->nullable();
            $table->longText('class')->nullable();
            $table->string('laufzeit_sparplan')->nullable();
            $table->string('zielsumme_sparplan')->nullable();
            $table->string('auszahlungssumme_sparplan')->nullable();
            $table->string('zinsen_amount_sparplan')->nullable();
            $table->string('zinssatz_sparplan')->nullable();

            $table->tinyInteger('is_funded')->nullable(); //0:pending,1:approve,2:blocked
            $table->tinyInteger('is_staff_picks')->nullable(); //1:staff Picks

            $table->text('ccv')->nullable();
            $table->boolean('dhl')->default(false);
            $table->boolean('paket')->default(false);

            $table->string('nachname')->nullable();
            $table->string('adresse')->nullable();
            $table->string('postleitzahl')->nullable();
            $table->string('stadt')->nullable();
            $table->string('land')->nullable();
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
        Schema::dropIfExists('campaigns');
    }
}
