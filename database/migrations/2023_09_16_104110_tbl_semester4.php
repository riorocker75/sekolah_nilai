<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblSemester4 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('semester4')) {
            Schema::create('semester4', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->text('siswa_id')->nullable();
                $table->text('agama_raport')->nullable();
                $table->text('pkn_raport')->nullable();
                $table->text('indo_raport')->nullable();
                $table->text('ing_raport')->nullable();
                $table->text('mm_raport')->nullable();
                $table->text('fisika_raport')->nullable();
                $table->text('kimia_raport')->nullable();
                $table->text('biologi_raport')->nullable();
                $table->text('sejarah_raport')->nullable();
                $table->text('sbk_raport')->nullable();
                $table->text('penjas_raport')->nullable();
                $table->text('tik_raport')->nullable();
                $table->text('keting_raport')->nullable();
                $table->text('mulok1_raport')->nullable();
                $table->text('mulok2_raport')->nullable();
                $table->text('rata_raport')->nullable();
                $table->dateTime('tanggal')->nullable();

                $table->text('status')->nullable();
        
            });
        };
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('semester4');

    }
}
