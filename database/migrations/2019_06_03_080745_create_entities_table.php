<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('entityname');
            $table->text('HQaddress');
            $table->unsignedSmallInteger('regionaloff');
            $table->unsignedSmallInteger('districtoff');
            $table->unsignedTinyInteger('createdby');
            $table->string('phonenumber');
            $table->timestamps();
            $table->softDeletes();
            $table->Engine = 'Innodb';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entities');
    }
}
