@extends('admin.admin_layout')
@section('content')
          <div class="card">
            <div class="card-body">
    <?php
    	   	$rajdip_max_id=DB::table('tbl_rajdip_bill_record')->max('rajdip_bill_id');  
    		$rajdip_last_bill_info=DB::table('tbl_rajdip_bill_record')
            ->where('rajdip_bill_id',$rajdip_max_id)    
                              ->first();

    	   	$rongon_max_id=DB::table('tbl_rongon_bill_record')->max('rongon_bill_id');  
    		$rongon_last_bill_info=DB::table('tbl_rongon_bill_record')
            ->where('rongon_bill_id',$rongon_max_id)    
                              ->first();

    	   	$ground_max_id=DB::table('tbl_ground_bill_record')->max('ground_bill_id');  
    		$ground_last_bill_info=DB::table('tbl_ground_bill_record')
            ->where('ground_bill_id',$ground_max_id)    
                              ->first();




     ?>            	
              <h2 class="card-title">Taka Calculation</h2>
              <h3>Date:{{$rajdip_last_bill_info->created_at}}</h3>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:90%; margin-right: 30px">
                    <thead>

                      <tr>
                          <th>Name</th>
                          <th>PKwh</th>
                          <th>CKwh</th>
                          <th>CnUnits</th>
                          <th>Kwh %</th>
                          <th>Taka %</th>
                          <th>Recharge</th>
                          <th>PrevTaka</th>
                          <th>T_Advance</th>
                          <th>Ramaining</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                          <td>Rajdip</td>
							<td>{{$rajdip_last_bill_info->rajdip_last_kwh}}</td>
							<td>{{$rajdip_last_bill_info->rajdip_current_kwh}}</td>
							<td>{{$rajdip_last_bill_info->rajdip_consumed_unit}}</td>
							<td>{{sprintf('%0.2f',$rajdip_last_bill_info->rajdip_kwh_ratio)}}%</td>
							<td>{{sprintf('%0.2f',$rajdip_last_bill_info->rajdip_comsumed_taka)}}</td>
							<td>{{$rajdip_last_bill_info->rajdip_recharge_taka}}</td>
							<td>{{sprintf('%0.2f',$rajdip_last_bill_info->rajdip_prev_DRorCr)}}</td>
							<td>{{sprintf('%0.2f',$rajdip_last_bill_info->rajdip_total_advance)}}</td>
							<td>{{sprintf('%0.2f',$rajdip_last_bill_info->rajdip_ramaining_balance)}}</td>
                      </tr>
                      <tr>
                          <td>Rongon</td>
							<td>{{$rongon_last_bill_info->rongon_last_kwh}}</td>
							<td>{{$rongon_last_bill_info->rongon_current_kwh}}</td>
							<td>{{$rongon_last_bill_info->rongon_consumed_unit}}</td>
							<td>{{sprintf('%0.2f',$rongon_last_bill_info->rongon_kwh_ratio)}}%</td>
							<td>{{sprintf('%0.2f',$rongon_last_bill_info->rongon_comsumed_taka)}}</td>
							<td>{{$rongon_last_bill_info->rongon_recharge_taka}}</td>
							<td>{{sprintf('%0.2f',$rongon_last_bill_info->rongon_prev_DRorCr)}}</td>
							<td>{{sprintf('%0.2f',$rongon_last_bill_info->rongon_total_advance)}}</td>
							<td>{{sprintf('%0.2f',$rongon_last_bill_info->rongon_ramaining_balance)}}</td>
                      </tr>
                      <tr>
                          <td>Ground</td>
							<td>{{$ground_last_bill_info->ground_last_kwh}}</td>
							<td>{{$ground_last_bill_info->ground_current_kwh}}</td>
							<td>{{$ground_last_bill_info->ground_consumed_unit}}</td>
							<td>{{sprintf('%0.2f',$ground_last_bill_info->ground_kwh_ratio)}}%</td>
							<td>{{sprintf('%0.2f',$ground_last_bill_info->ground_comsumed_taka)}}</td>
							<td>{{$ground_last_bill_info->ground_recharge_taka}}</td>
							<td>{{sprintf('%0.2f',$ground_last_bill_info->ground_prev_DRorCr)}}</td>
							<td>{{sprintf('%0.2f',$ground_last_bill_info->ground_total_advance)}}</td>
							<td>{{sprintf('%0.2f',$ground_last_bill_info->ground_ramaining_balance)}}</td>
                      </tr>
                      <tr>
                          <td>Total</td>
							<td></td>
							<td></td>
							<td>{{$ground_last_bill_info->total_consumed_unit}}</td>
							<td>100%</td>
							<td>{{sprintf('%0.2f',$ground_last_bill_info->recarge_total_taka)}}</td>
							<td>{{$ground_last_bill_info->recarge_total_taka}}</td>
							<td></td>
							<td></td>
							<td></td>
                      </tr>


                     </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
 




@endsection