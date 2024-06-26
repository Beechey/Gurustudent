<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
   {
      Schema::create('permissions', function(Blueprint $table) {
         $table->increments('id');
         $table->string('name'); // edit-post
         $table->string('label'); // Edit any post
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
      Schema::drop('permissions');
   }

}
