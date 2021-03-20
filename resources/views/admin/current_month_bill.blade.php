@extends('admin.admin_layout')
@section('content')
        <div class="content-wrapper" style="margin-left: 50px">
          <h1 class="page-title"></h1>
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Total Electricity Comsumed</h2>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>Name</th>
                          <th>Current Kwh</th>
                          <th>Prevoius Kwh</th>
                          <th>Total Consumed Unit</th>
                      </tr>
                    </thead>
                    <tbody>

          <?php 
            $rajdip_max_id=DB::table('tbl_rajdip_bill_record')->max('rajdip_bill_id'); 
            $rongon_max_id=DB::table('tbl_rongon_bill_record')->max('rongon_bill_id'); 
            $ground_max_id=DB::table('tbl_ground_bill_record')->max('ground_bill_id'); 
            // $max_id=5;
            $rajdip_all_info = DB::table('tbl_rajdip_bill_record')
            ->where('rajdip_bill_id',$rajdip_max_id)    
                              ->first();
            $rajdip_last_kwh=$rajdip_all_info->rajdip_current_kwh;
            Session::put('rajdip_last_kwh',$rajdip_last_kwh);
            $rajdip_prev_DRorCr=$rajdip_all_info->rajdip_ramaining_balance;
            Session::put('rajdip_prev_DRorCr',$rajdip_prev_DRorCr);

            $rongon_all_info = DB::table('tbl_rongon_bill_record')
            ->where('rongon_bill_id',$rongon_max_id)  
            ->first();
            $rongon_last_kwh=$rongon_all_info->rongon_current_kwh;
            Session::put('rongon_last_kwh',$rongon_last_kwh);
            $rongon_prev_DRorCr=$rongon_all_info->rongon_ramaining_balance;
            Session::put('rongon_prev_DRorCr',$rongon_prev_DRorCr);


            $ground_all_info = DB::table('tbl_ground_bill_record')
            ->where('ground_bill_id',$ground_max_id) 
            ->first();
            $ground_last_kwh=$ground_all_info->ground_current_kwh;
            Session::put('ground_last_kwh',$ground_last_kwh);
            $ground_prev_DRorCr=$ground_all_info->ground_ramaining_balance;
            Session::put('ground_prev_DRorCr',$ground_prev_DRorCr);

						$rajdip_current_kwh =Session::get('rajdip_current_kwh');
						$rongon_current_kwh =Session::get('rongon_current_kwh');
						$ground_current_kwh =Session::get('ground_current_kwh');


						$rajdip_consumed_unit=$rajdip_current_kwh-$rajdip_last_kwh;
            Session::put('rajdip_consumed_unit',$rajdip_consumed_unit);
						$rongon_consumed_unit=$rongon_current_kwh-$rongon_last_kwh;
            Session::put('rongon_consumed_unit',$rongon_consumed_unit);
            $ground_consumed_unit=$ground_current_kwh-$ground_last_kwh;
            Session::put('ground_consumed_unit',$ground_consumed_unit);



						$total_consumed_unit=$rajdip_consumed_unit+$rongon_consumed_unit+$ground_consumed_unit;
            Session::put('total_consumed_unit',$total_consumed_unit);

            $rajdip_recharge_taka =Session::get('rajdip_recharge_taka');
            $rongon_recharge_taka =Session::get('rongon_recharge_taka');
            $ground_recharge_taka =Session::get('ground_recharge_taka');

            $recarge_total_taka=$rajdip_recharge_taka+$rongon_recharge_taka+$ground_recharge_taka;
            Session::put('recarge_total_taka',$recarge_total_taka);

            $rajdip_kwh_ratio=$rajdip_consumed_unit/$total_consumed_unit*100;
            Session::put('rajdip_kwh_ratio',$rajdip_kwh_ratio);
            $rongon_kwh_ratio=$rongon_consumed_unit/$total_consumed_unit*100;
            Session::put('rongon_kwh_ratio',$rongon_kwh_ratio);
            $ground_kwh_ratio=$ground_consumed_unit/$total_consumed_unit*100;
            Session::put('ground_kwh_ratio',$ground_kwh_ratio);

            $rajdip_comsumed_taka=$recarge_total_taka*$rajdip_kwh_ratio/100;
            Session::put('rajdip_comsumed_taka',$rajdip_comsumed_taka);
            $rongon_comsumed_taka=$recarge_total_taka*$rongon_kwh_ratio/100;
            Session::put('rongon_comsumed_taka',$rongon_comsumed_taka);
            $ground_comsumed_taka=$recarge_total_taka*$ground_kwh_ratio/100;
            Session::put('ground_comsumed_taka',$ground_comsumed_taka);


            $rajdip_total_advance=$rajdip_recharge_taka+$rajdip_prev_DRorCr;
            Session::put('rajdip_total_advance',$rajdip_total_advance);
            $rongon_total_advance=$rongon_recharge_taka+$rongon_prev_DRorCr;
            Session::put('rongon_total_advance',$rongon_total_advance);
            $ground_total_advance=$ground_recharge_taka+$ground_prev_DRorCr;
            Session::put('ground_total_advance',$ground_total_advance);

            $rajdip_ramaining_balance=$rajdip_total_advance-$rajdip_comsumed_taka;
            Session::put('rajdip_ramaining_balance',$rajdip_ramaining_balance);
            $rongon_ramaining_balance=$rongon_total_advance-$rongon_comsumed_taka;
            Session::put('rongon_ramaining_balance',$rongon_ramaining_balance);
            $ground_ramaining_balance=$ground_total_advance-$ground_comsumed_taka;
            Session::put('ground_ramaining_balance',$ground_ramaining_balance);
					 ?>
                      <tr>
                          <td>Rajdip</td>
                          <td>{{$rajdip_current_kwh }}</td>
                          <td>{{$rajdip_last_kwh }}</td>
                          <td>{{$rajdip_consumed_unit }}</td>
                      </tr>
                      <tr>
                          <td>Rongon</td>
                          <td>{{$rongon_current_kwh }}</td>
                          <td>{{$rongon_last_kwh }}</td>
                          <td>{{$rongon_consumed_unit }}</td>
                      </tr>
                      <tr>
                          <td>Ground</td>
                          <td>{{$ground_current_kwh }}</td>
                          <td>{{$ground_last_kwh }}</td>
                          <td>{{$ground_consumed_unit }}</td>
                      </tr>
                      <tr>
                          <td colspan="3">Total</td>
                          <td>{{$total_consumed_unit }}</td>
                      </tr>                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Taka Calculation</h2>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>Name</th>
                          <th>Unit</th>
                          <th>Kwh Ratio</th>
                          <th>Taka Ratio</th>
                          <th>PreviousTaka</th>
                          <th>Recharge</th>
                          <th>Total Advance</th>
                          <th>Ramaining Balance</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                          <td>Rajdip</td>
                          <td>{{$rajdip_consumed_unit }}</td>
                          <td>{{sprintf('%0.2f',$rajdip_kwh_ratio)}}%</td>
                          <td>{{sprintf('%0.2f',$rajdip_comsumed_taka)}}</td>
                          <td>{{sprintf('%0.2f',$rajdip_prev_DRorCr)}}</td>
                          <td>{{$rajdip_recharge_taka }}</td>
                          <td>{{sprintf('%0.2f',$rajdip_total_advance)}}</td>
                          <td>{{sprintf('%0.2f',$rajdip_ramaining_balance)}}</td>

                      </tr>
                      <tr>
                          <td>Rongon</td>
                          <td>{{$rongon_consumed_unit }}</td>
                          <td>{{sprintf('%0.2f',$rongon_kwh_ratio)}}%</td>
                          <td>{{sprintf('%0.2f',$rongon_comsumed_taka)}}</td>
                          <td>{{sprintf('%0.2f',$rongon_prev_DRorCr)}}</td>
                          <td>{{$rongon_recharge_taka }}</td>
                          <td>{{sprintf('%0.2f',$rongon_total_advance)}}</td>
                          <td>{{sprintf('%0.2f',$rongon_ramaining_balance)}}</td>

                      </tr>
                      <tr>
                          <td>Ground</td>
                          <td>{{$ground_consumed_unit }}</td>
                          <td>{{sprintf('%0.2f',$ground_kwh_ratio)}}%</td>
                          <td>{{sprintf('%0.2f',$ground_comsumed_taka)}}</td>
                          <td>{{sprintf('%0.2f',$ground_prev_DRorCr)}}</td>
                          <td>{{$ground_recharge_taka }}</td>
                          <td>{{sprintf('%0.2f',$ground_total_advance)}}</td>
                          <td>{{sprintf('%0.2f',$ground_ramaining_balance)}}</td>
                      </tr>
                      <tr>
                          <td>Total</td>
                          <td>{{$total_consumed_unit }}</td>
                          <td>100%</td>
                          <td>{{$recarge_total_taka }}</td>
                          <td></td>
                          <td>{{$recarge_total_taka }}</td>
                          <td></td>
                          <td></td>
                      </tr>
                      
                    </tbody>
                  </table>
                  <a href="{{URL::to('/save-new-bill')}}"><button class="btn btn-success">Save New Bill</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->


@endsection