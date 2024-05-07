<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCutistatusTable extends Migration
{
    public function up()
    {
        try {
         Schema::create('cuti_status', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement();
			      $table->string('judul', 128);
			      $table->string('keterangan', 1024);
			      $table->timestamps();
        });

        } catch (PDOException $ex) {
            $this->down();
            throw $ex;
        }
    }

    public function down()
    {
        Schema::dropIfExists('cuti_status');
    }
}
