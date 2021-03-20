<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblRongonBillRecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_rongon_bill_record', function (Blueprint $table) {
            $table->increments('rongon_bill_id');
            $table->integer('rongon_last_kwh');
            $table->integer('rongon_current_kwh');
            $table->integer('rongon_consumed_unit');
            $table->integer('total_consumed_unit');
            $table->double('rongon_kwh_ratio');
            $table->double('rongon_comsumed_taka');
            $table->integer('rongon_recharge_taka');
            $table->integer('recarge_total_taka');
            $table->double('rongon_prev_DRorCr');
            $table->double('rongon_total_advance');
            $table->double('rongon_ramaining_balance');
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
        Schema::dropIfExists('tbl_rongon_bill_record');
    }
}
