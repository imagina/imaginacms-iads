<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIadFieldsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('iad__fields', function (Blueprint $table) {
      $table->engine = 'InnoDB';
      $table->increments('id');
      $table->integer('ad_id')->unsigned();
      $table->foreign('ad_id')->references('id')->on('iad__ads')->onDelete('restrict');
      $table->string('name')->nullable();
      $table->text('value')->nullable();
      $table->string('type')->nullable();
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
    Schema::dropIfExists('iad__fields');
  }
}
