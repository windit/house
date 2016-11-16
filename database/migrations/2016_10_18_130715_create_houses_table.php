<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('author_id');
            $table->integer('category_id');
            $table->integer('kind_id');
            $table->string('title');
            $table->string('slug');
            $table->text('info');
            $table->tinyInteger('status');
            $table->float('area')->nullable();
            $table->integer('district_id');
            $table->integer('ward_id')->nullable();
            $table->integer('street_id')->nullable();
            $table->integer('project_id')->nullable();
            $table->string('address')->nullable();
            $table->float('frontispiece')->nullable();
            $table->integer('NumberOfFloors')->nullable();
            $table->integer('NumberOfBedrooms')->nullable();
            $table->integer('NumberOfToilets')->nullable();
            $table->text('furniture')->nullable();
            $table->integer('trend_id')->nullable();
            $table->float('entrance')->nullable();
            $table->string('ContactName');
            $table->text('ContactAddress')->nullable();
            $table->string('landline', 15)->nullable();
            $table->string('cellphone', 15);
            $table->string('email', 50)->nullable();
            $table->timestamp('expiration_time');
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
        Schema::dropIfExists('houses');
    }
}
