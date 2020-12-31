<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelPackagesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('travel_packages', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->String('title');
      $table->String('slug');
      $table->String('location');
      $table->longText('about');
      $table->String('featured_event');
      $table->String('language');
      $table->String('foods');
      $table->date('depature_date');
      $table->String('duration');
      $table->String('type');
      $table->integer('price');
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
    Schema::dropIfExists('travel_packages');
  }
}
