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
        Schema::create('lop', function (Blueprint $table) {
            $table->id();
            $table->string("ten_lop");
            $table->integer("so_cho")->default(50);
            $table->string("trang_thai")->default(0);
            $table->date("ngay_bat_dau");
            $table->date("ngay_ket_thuc");
            $table->integer("thoi_gian_hoc");
            $table->integer("id_khoa_hoc");
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
        Schema::dropIfExists('lop');
    }
};
