@extends('layout.citizen_main')

@section('contant')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                        <div class="card-header">Manage citizen</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Create citizen</h3>
                            </div>
                            <hr>
                            <form action="/citizen/Create" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">fullname</label>
                                    <input id="cc-pament" name="fullname" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">citizen_Nid</label>
                                    <input id="cc-pament" name="citizen_Nid" type="text" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">citizen_city</label>
                                    <input id="cc-pament" name="citizen_city" type="text" class="form-control">
                                </div>
                                 <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">citizen_address</label>
                                    <input id="cc-pament" name="citizen_address" type="text" class="form-control">
                                </div>
                                 <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Number</label>
                                    <input id="cc-pament" name="Number" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">citizen_gender</label>
                                    <select name="citizen_gender" class="form-control">
                                        <option value="">select gender</option>
                                        <option value="0">Male</option>
                                        <option value="1">Female</option>
                                    </select>

                                </div>
                                {{--  <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">citizen_city</label>
                                    <input id="cc-pament" name="citizen_city" type="text" class="form-control">
                                </div>  --}}

                                
                                

                               


                                {{--  <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Admin Image</label>
                                    <input id="cc-pament" name="admin_image" type="file" class="form-control">
                                </div>  --}}

                            </div>
                            <div>
                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" name="submit">
                                    <span id="payment-button-amount">Create</span>
                                </button>
                            </div>
                        </form>
                </div>
            </div>
            <div class="row m-t-30">
                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3">
                            <thead>
                                <tr>
                                    <th>ID </th>
                                    <th>fullname</th>
                                     <th>citizen_Nid</th>
                                    <th>citizen_city</th>
                                    <th>citizen_address</th>
                                    <th>Number</th>
                                    <th>citizen_gender</th>
                                     <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                              <tr>

                             @foreach($citizens as $citizen)
                            <td>{{$citizen->id}}</td>
                            <td>{{$citizen->fullname}}</td>
                           <td>{{$citizen->citizen_Nid}}</td>
                            <td>{{$citizen->citizen_city}}</td>
                            <td>{{$citizen->citizen_address}}</td>
                             <td>{{$citizen->Number}}</td>
                             <td>
                                @if($citizen->citizen_gender == 1) male
                                 @else 
                                female
                                @endif
                                
                            </td>

                           {{--  <td>
                            <img src="/storage/app/public/{{$hangout->admin_image}}" width="60px"/>
                            </td>  --}}
                          <td><a href="/citizen/{{$citizen->id}}/edit"  class='btn btn-primary'>Edit</a></td>
                       <td><a href="/citizen/{{$citizen->id}}/delete" class='btn btn-danger'>Delete</a></td>
                           </tr>
                           @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE-->
@endsection
