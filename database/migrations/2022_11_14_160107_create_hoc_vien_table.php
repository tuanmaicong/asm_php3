<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoc_vien', function (Blueprint $table) {
            $table->id();
            $table->string("ten_hoc_vien");
            $table->string("dia_chi");
            $table->string("email");
            $table->integer("so_dien_thoai");
            $table->integer("so_cmt");
            $table->integer("trang_thai")->default(0);
            $table->integer("phan_quyen")->default(0);
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
        Schema::dropIfExists('hoc_vien');
    }
};
