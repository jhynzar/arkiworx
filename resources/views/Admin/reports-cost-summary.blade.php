@extends('layouts.master-admin')
@section('css')

@endsection

@section ('body')

<div class="container">
   <div class="col-sm-6 col-xs-12 waves-effect waves-light">
            <div class="grid-material">
                <h6 class="text text-default"> <u>Work Estimates - No Actuals</u> </h6>
                
                <table class="table table-striped">
  <thead style="background-color: #000000">
    <tr class="text text-primary">
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
            </div>
    
    
    
    
    
    </div>
    
    
    
    
    
    <div class="col-sm-6 col-xs-12 waves-effect waves-light">
            <div class="grid-material">
                <h6 class="text text-default"> <u>No Estimates - Work Actuals</u> </h6>
                <table class="table table-bordered">
  <thead style="background-color: #000000">
    <tr class="text text-primary">
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
            </div>
    
    
    </div>
    
    
    <div class="col-sm-12 col-xs-12 waves-effect waves-light">
            <div class="grid-material">
                <h6 class="text text-default"> <u>Work Estimates - Work Actuals</u> </h6>
                
               <table class="table table-bordered">
  <thead style="background-color: #000000">
    <tr class="text text-primary">
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
            </div>
    
    
    </div>
    
    
    <div class="col-sm-6 col-xs-12 waves-effect waves-light">
            <div class="grid-material">
                <h6 class="text text-default"> <u>Total Costs</u> </h6>
                
            <table class="table table-bordered">
  <thead style="background-color: #000000">
    <tr class="text text-primary">
      <th scope="col">Estimated Total Cost</th>
      <th scope="col">Actual Total Cost</th>
      <th scope="col">Profitable Cost</th>
      <th scope="col">Discrepancies</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">100000</th>
      <td>150000</td>
      <td>0</td>
      <td>50000</td>
    </tr>
   
  </tbody>
</table>
            </div>
    </div>
    <br> <br>
    
   
    
    
    
    
    
    
</div>
@endsection

@section('script')
@endsection