@extends('layout.limited-layout-1')
@section('Nisha','Nisha_Interview |Home')
@push('styles')
<style>
    .ralign{
        margin-right: 20%;

    }

</style>
<style>
    * {
        font: 17px Calibri;
    }
    table {
        width: 70%;
    }
    table, th, td {
        border: solid 1px #DDD;
        border-collapse: collapse;
        padding: 2px 3px;
        text-align: center;
    }

    input[type=radio] {
        width: 25px;
        height: 25px;
        margin-left:7rem;
       
    }

  
</style>

@endpush
@section('wrapperContent')

@push('scripts')

<script type="text/javascript">

$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    setTimeout(function () {
        $("div.alert").fadeOut();
    }, 2000);

function pgl0ad(passv) {
        var the_url = window.location.href;
        var the_arr = the_url.split('/');
        the_arr.pop();
        var url1 = the_arr.join('/');
        url1 = url1 + passv;
        window.location.replace(url1);
    }
    
    $(this).scrollTop(0);
});





</script>
@endpush
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid pt-3"> 



        
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title" style="color: #e83e8c">home</h3>
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
                        <form role="form" name="formaction" id="formaction" class="form-horizontal" method="post" action="">
                            <input type="hidden" value="{{csrf_token()}}" name="_token">


                        </form>

                    </div>
                </div>    

                  
                
               
            </div>
    </section>
</div>

@endsection



