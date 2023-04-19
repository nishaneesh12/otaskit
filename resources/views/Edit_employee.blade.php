@extends('layout.limited-layout-1')
@section('Nisha','Nisha_Interview | Edit Product')
@push('styles')
<style>
  
</style>

@endpush
@section('wrapperContent')

@push('scripts')
<script src="{{ asset('dist/js/myScript.js')}}"></script>

<script type="text/javascript">
$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

$('#mobile').keypress(function (e) {
            var arr = [];
            var kk = e.which;

            for (i = 48; i < 58; i++)
                arr.push(i);

            if (!(arr.indexOf(kk) >= 0))
                e.preventDefault();
        });
        
        $('#email').on('keypress', function (e) {
                            var re = /[0-9a-z@\._]/.test(e.key);
                            if (!re) {
                                return false;
                            }
                        });

});
function check()
    {

        var mobile = document.getElementById('mobile');


        var message = document.getElementById('mobile_err');


        message.innerHTML = "";
        if (mobile.value.length < 10) {


            message.innerHTML = "10 digits only."
        }
    }
</script>
@endpush


<div class="content-wrapper">

    <section class="content">
        <div class="container-fluid pt-3"> 

            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title" style="color: #e83e8c">EDIT PRODUCT DETAILS</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif
                @if(session()->has('errmessage'))
                <div class="alert alert-danger">
                    {{ session()->get('errmessage') }}
                </div>
                @endif 
                <?php
//                
//                    print_r($value);
                   if (!empty($value[0])) {
                    $name = $value[0]['name'];
                    $email = $value[0]['email'];
                    $id = $value[0]['id'];
                    $mobile=$value[0]['mobile'];
               }
                ?>
                <div class="card-body">
                    <div class="col-md-12"> 
                        <form role="form" name="formaction" id="formaction" class="form-horizontal forma" method="post" action="{{url('employee_update')}}">
                            <input type="hidden" value="{{csrf_token()}}" name="_token">
                            <input type="hidden" value="{{$id}}" name='id'>
                            <div class="form-group row">
                                <label for="fa_name" class="col-sm-4 col-form-label">Employee Name&nbsp;&nbsp;<span class="text-red">* &nbsp;</span></label>
                                <div class="input-group row col-sm-6">
                                    <input type="text" name="first_name" class="form-control" id="first_name"  value="{{$name}}">
                                    <span id="first_name_err" class="align-self-center error" style="color: red;">{{$errors->First('first_name')}}</span>

                                </div>



                            </div>
                            <div class="form-group row">
                                <label for="fa_email" class="col-sm-4 col-form-label">Employee email&nbsp;&nbsp;<span class="text-red">* &nbsp;</span></label>
                                <div class="input-group row col-sm-6">
                                    <input type="text" name="email" class="form-control" id="email"  value="{{$email}}">
                                    <span id="email_err" class="align-self-center" style="color: red;">{{$errors->First('email')}}</span>

                                </div>


                            </div>  
                            <div class="form-group row">
                                <label for="fa_mobile" class="col-sm-4 col-form-label">Mobile Number&nbsp;&nbsp;<span class="text-red">* &nbsp;</span></label>
                                <div class="input-group row col-sm-6">
                                    <input type="text" name="mobile" class="form-control mobile"  id="mobile" onkeyup="check();" autocomplete="off"  maxlength="10" value="{{$mobile}}" placeholder="Numerals only." title="" data-placement="" data-toggle="">
                                    <span id="mobile_err" class="float-right" style="color: red;">{{$errors->First('mobile')}}</span>

                                </div>


                            </div>  
                            <div class="form-group row">
                                <label for="fa_depart" class="col-sm-4 col-form-label">Department&nbsp;&nbsp;<span class="text-red">* &nbsp;</span></label>
                                <div class="input-group row col-sm-6">
                                    <select class="custom-select select2 depart" id="depart" name="depart" autocomplete="off">
                                        <option disabled selected value="0">Select</option>
                                            @if(!empty($d_value))
                                        @foreach($d_value as $de)

                                        <option value="{{$de['id']}}" @if($de['id']== $value[0]['department_id']) selected='selected' @endif >{{$de['department']}}</option>

                                        @endforeach
                                        @endif    
                                    </select>
                                    <span id="depart_err" class="align-self-center depart_err" style="color: red;">{{$errors->First('depart')}}</span>

                                </div>


                            </div>
                            <div class="form-group row">
                                <label for="fa_status" class="col-sm-4 col-form-label">Status&nbsp;&nbsp;<span class="text-red">* &nbsp;</span></label>
                                <div class="input-group row col-sm-6">
                                    <select class="custom-select select2 status" id="status" name="status" autocomplete="off">
                                        <option disabled selected value="0">Select</option>
                                                @if(!empty($s_value))
                                        @foreach($s_value as $st)

                                        <option value="{{$st['id']}}" @if($st['id']== $value[0]['status_id']) selected='selected' @endif >{{$st['statuss']}}</option>

                                        @endforeach
                                        @endif   
                                                
                                    </select>
                                    <span id="status_err" class="align-self-center status_err" style="color: red;">{{$errors->First('status')}}</span>

                                </div>


                            </div>





                            <div class=" ralign" id="ralign">
                                <div class="form-group float-right row">

                                    <div class="btn-group">
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn bg-primary fa fa-save" style="display: block;"  id="buttondis">Update</button>
                                        </div>
                                    </div> 
                                    <input class="hidden readonly-hide" type="hidden" name="btn2" id="btn2" value="save" />
                                </div>


                            </div>

                        </form>

                    </div>
                </div>    



            </div>
        </div>
    </section>

</div>

@endsection





