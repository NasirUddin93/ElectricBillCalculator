<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblRajdipBillRecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_rajdip_bill_record', function (Blueprint $table) {
            $table->increments('rajdip_bill_id');
            $table->integer('rajdip_last_kwh');
            $table->integer('rajdip_current_kwh');
            $table->integer('rajdip_consumed_unit');
            $table->integer('total_consumed_unit');
            $table->double('rajdip_kwh_ratio');
            $table->double('rajdip_comsumed_taka');
            $table->integer('rajdip_recharge_taka');
            $table->integer('recarge_total_taka');
            $table->double('rajdip_prev_DRorCr');
            $table->double('rajdip_total_advance');
            $table->double('rajdip_ramaining_balance');
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
        Schema::dropIfExists('tbl_rajdip_bill_record');
    }
}
