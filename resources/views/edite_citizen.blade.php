@extends('layout.citizen_main')

@section('contant')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                        <div class="card-header">Manage Admin</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Update Admin</h3>
                            </div>
                            <hr>
                            <form action="/citizen/{{$citizen->id}}/update" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">fullname</label>
                                    <input id="cc-pament" value="{{$citizen->fullname}}" name="fullname" type="text" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">citizen_city</label>
                                    <input id="cc-pament" value="{{$citizen->citizen_city}}" name="citizen_city" type="text" class="form-control">
                                </div>
                                 <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">citizen_addres</label>
                                    <input id="cc-pament" value="{{$citizen->citizen_address}}" name="citizen_address" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Number</label>
                                    <input id="cc-pament" value="{{$citizen->Number}}" name="Number" type="text" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">citizen_Nid</label>
                                    <input id="cc-pament" value="{{$citizen->citizen_Nid}}" name="citizen_Nid" type="text" class="form-control">
                                </div>

                               

                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">citizen_gender</label>
                                    <select value="{{$citizen->citizen_gender}}" name="citizen_gender" class="form-control">
                                        <option value="">select citizen_gender</option>
                                        <option value="1" @if($citizen->citizen_gender == 1) male @endif>Male</option>
                                        <option value="0"  @if($citizen->ciitizen_gender == 0) female @endif>Female</option>
                                    </select>

                                </div
                            <div>
                                <button id="payment-button" type="submit " class="btn btn-lg btn-info btn-block" value="{{$citizen->submit}}" name="submit">
                                    <span id="payment-button-amount">Update</span>
                                </button>
                            </div>
                        </form>
                </div>
            </div>
@endsection

