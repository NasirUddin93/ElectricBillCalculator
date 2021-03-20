@extends('admin.admin_layout')
@section('content')
          <div class="card">
            <div class="card-body">
           	
              <h2 class="card-title">Taka Calculation</h2>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:90%; margin-right: 30px">
                    <thead>

                      <tr>
                          <th>Name</th>
                          <th>Date</th>
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
                    	@foreach($ground_all_bill_info as $V_ground_all_bill_info)
                      <tr>
                          <td>Rongon</td>
                          <td>{{$V_ground_all_bill_info->created_at}}</td>
                          <td>{{$V_ground_all_bill_info->ground_current_kwh}}</td>
                          <td>{{$V_ground_all_bill_info->ground_consumed_unit}}</td>
                          <td>{{sprintf('%0.2f',$V_ground_all_bill_info->ground_kwh_ratio)}}%</td>
                          <td>{{sprintf('%0.2f',$V_ground_all_bill_info->ground_comsumed_taka)}}</td>
                          <td>{{$V_ground_all_bill_info->ground_recharge_taka}}</td>
                          <td>{{sprintf('%0.2f',$V_ground_all_bill_info->ground_prev_DRorCr)}}</td>
                          <td>{{sprintf('%0.2f',$V_ground_all_bill_info->ground_total_advance)}}</td>
                          <td>{{sprintf('%0.2f',$V_ground_all_bill_info->ground_ramaining_balance)}}</td>

                      </tr>
					@endforeach


                     </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>



@endsection