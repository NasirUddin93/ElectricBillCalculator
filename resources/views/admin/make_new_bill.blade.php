@extends('admin.admin_layout')
@section('content')
<style>
.bill_input{
	margin-left: 150px;
	width: 400px;
}	

</style>

<div class="bill_input">
  <form class="forms-sample" action="{{URL::to('/bill-calculator')}}" method="post" enctype="multipart/form-data">
  	{{csrf_field()}}
	<h1>Enter Recharge Amount</h1>
	<hr>
    <table>
      <tr>
        <td>
            <label for="exampleInputPassword1">Rajdip</label>
            <input type="text" class="" name="rajdip_recharge_taka" placeholder="rajdip_taka" required=""> 
        </td>                                
            
      </tr>
      <tr>
        <td>
            <label for="exampleInputPassword1">Rongon</label>
            <input type="text" class="" name="rongon_recharge_taka" placeholder="rongon_taka" required="">
          
        </td>
      </tr>
      <tr>
        <td>
            <label for="exampleInputPassword1">Ground</label>
            <input type="text" class="" name="ground_recharge_taka" placeholder="ground_taka" required="">
          
        </td>

      </tr>
    </table>  
      <hr>
	<h1>Enter Meter Current (Kwh)</h1>
	<hr>
    <table>
      <tr>
        <td>
            <label for="exampleInputPassword1">Rajdip</label>
            <input type="text" class="" name="rajdip_current_kwh" placeholder="rajdip_kwh" required=""> 
        </td>                                
            
      </tr>
      <tr>
        <td>
            <label for="exampleInputPassword1">Rongon</label>
            <input type="text" class="" name="rongon_current_kwh" placeholder="rongon_kwh" required="">
          
        </td>
      </tr>
      <tr>
        <td>
            <label for="exampleInputPassword1">Ground</label>
            <input type="text" class="" name="ground_current_kwh" placeholder="ground_kwh" required="">
          
        </td>

      </tr>
    </table>  
      <hr>     
		<hr> 

      <button type="submit" class="btn btn-success">Bill Generate</button>
  </form>
</div>



@endsection