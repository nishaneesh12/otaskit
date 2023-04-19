@extends('layout.limited-layout-1')
@section('Nisha','Nisha_Interview |Assign Employee')
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
                    <h3 class="card-title" style="color: #e83e8c">ASSIGN EMPLOYEE TO TASK</h3>
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

                
                <div class="card-body">
                    <div class="col-md-12"> 
                        <form role="form" name="formaction" id="formaction" class="form-horizontal forma" method="post" action="{{url('assign_update')}}">
                            <input type="hidden" value="{{csrf_token()}}" name="_token">

                             
                            <div class="form-group row">
                                <label for="fa_first_name" class="col-sm-4 col-form-label">Employee&nbsp;&nbsp;<span class="text-red">* &nbsp;</span></label>
                                <div class="input-group row col-sm-6">
                                    <select class="custom-select select2 first_name" id="first_name" name="first_name" autocomplete="off">
                                        <option disabled selected value="0">Select</option>
                                                @if(!empty($value1))
                                                    @foreach($value1 as $va)

                                                    <option value="{{$va['id']}}">{{$va['name']}}</option>

                                                    @endforeach
                                                    @endif
                                    </select>
                                    <span id="first_name_err" class="align-self-center first_name_err" style="color: red;">{{$errors->First('first_name')}}</span>

                                </div>


                            </div>
                            <div class="form-group row">
                                <label for="fa_task" class="col-sm-4 col-form-label">Task&nbsp;&nbsp;<span class="text-red">* &nbsp;</span></label>
                                <div class="input-group row col-sm-6">
                                    <select class="custom-select select2 task" id="task" name="task" autocomplete="off">
                                        <option disabled selected value="0">Select</option>
                                                @if(!empty($value))
                                                    @foreach($value as $val)

                                                    <option value="{{$val['id']}}">{{$val['title']}}</option>

                                                    @endforeach
                                                    @endif
                                                
                                    </select>
                                    <span id="task_err" class="align-self-center task_err" style="color: red;">{{$errors->First('task')}}</span>

                                </div>


                            </div>





                            <div class=" ralign" id="ralign">
                                <div class="form-group float-right row">

                                    <div class="btn-group">
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn bg-primary fa fa-save" style="display: block;"  id="buttondis">Assign</button>
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




