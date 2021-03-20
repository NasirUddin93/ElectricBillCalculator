<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblGroundBillRecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_ground_bill_record', function (Blueprint $table) {
            $table->increments('ground_bill_id');
            $table->integer('ground_last_kwh');
            $table->integer('ground_current_kwh');
            $table->integer('ground_consumed_unit');
            $table->integer('total_consumed_unit');
            $table->double('ground_kwh_ratio');
            $table->double('ground_comsumed_taka');
            $table->integer('ground_recharge_taka');
            $table->integer('recarge_total_taka');
            $table->double('ground_prev_DRorCr');
            $table->double('ground_total_advance');
            $table->double('ground_ramaining_balance');
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
        Schema::dropIfExists('tbl_ground_bill_record');
    }
}
