<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCutiTable extends Migration
{
    public function up()
    {
        try {
             Schema::create('cuti', function (Blueprint $table) {
               $table->bigInteger('id')->unsigned()->autoIncrement();
               $table->date('tanggal_mulai');
               $table->date('tanggal_berakhir');
               $table->text('keterangan');
               $table->foreign('cuti_status_id')
                ->references('id')
                ->on('cuti_status')
                ->onDelete('restrict')
                ->onUpdate('cascade');
               $table->timestamps();
        });

        } catch (PDOException $ex) {
            $this->down();
            throw $ex;
        }
    }

    public function down()
    {
        Schema::dropIfExists('cuti');
    }
}
