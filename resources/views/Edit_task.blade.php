@extends('layout.limited-layout-1')
@section('Nisha','Nisha_Interview | Edit Task')
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


</script>
@endpush


<div class="content-wrapper">

    <section class="content">
        <div class="container-fluid pt-3"> 

            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title" style="color: #e83e8c">ADD TASKS</h3>
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
                    $title = $value[0]['title'];
                    $description = $value[0]['description'];
                    $id = $value[0]['id'];
                    
               }
                ?>
                <div class="card-body">
                    <div class="col-md-12"> 
                        <form role="form" name="formaction" id="formaction" class="form-horizontal forma" method="post" action="{{url('update_task')}}">
                            <input type="hidden" value="{{csrf_token()}}" name="_token">
                            <input type="hidden" value="{{$id}}" name='id'>

                            <div class="form-group row">
                                <label for="fa_name" class="col-sm-4 col-form-label">Title&nbsp;&nbsp;<span class="text-red">* &nbsp;</span></label>
                                <div class="input-group row col-sm-6">
                                    <input type="text" name="first_name" class="form-control" id="first_name"  value="{{$title}}">
                                    <span id="first_name_err" class="align-self-center error" style="color: red;">{{$errors->First('first_name')}}</span>

                                </div>



                            </div>
                            <div class="form-group row">
                                <label for="fa_email" class="col-sm-4 col-form-label">Description&nbsp;&nbsp;<span class="text-red">* &nbsp;</span></label>
                                <div class="input-group row col-sm-6">
                                    <textarea name="discre" id="discre" class="form-control discre" placeholder="Enter ..." rows="4" cols="20" onpaste="return false" oncopy="return false" maxlength="100" minlength="20" title="" data-placement="" data-toggle="">{{$description}}</textarea>
<span id="discre_err" class="align-self-center" style="color: red;">{{$errors->First('discre')}}</span>
                                </div>


                            </div>  
                             
                            





                            <div class=" ralign" id="ralign">
                                <div class="form-group float-right row">

                                    <div class="btn-group">
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn bg-primary fa fa-save" style="display: block;"  id="buttondis">Save</button>
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





