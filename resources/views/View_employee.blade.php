@extends('layout.limited-layout-1')
@section('Nisha','Nisha_Interview | Edit Employee')
@push('styles')
<style>
  
</style>

@endpush
@section('wrapperContent')

@push('scripts')
<script src="{{ asset('dist/js/myScript.js')}}"></script>

<script type="text/javascript">


$(document).ready(function () {
        $('#example1').DataTable({

            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            "responsive": true
        });
          setTimeout(function () {
        $("div.alert").fadeOut();
    }, 2000);
    }
    );
    function employee_edit(id) {
        var mapForm = document.createElement("form");
        mapForm.method = "post";
        mapForm.action = "{{ URL::asset('employee_edit')}}";

        var mapInput = document.createElement("input");
        mapInput.type = "hidden";
        mapInput.name = "_token";
        mapInput.value = '<?php echo csrf_token() ?>';
        mapForm.appendChild(mapInput);

        var mapInput1 = document.createElement("input");
        mapInput1.type = "text";
        mapInput1.name = "id";
        mapInput1.value = id;
        mapForm.appendChild(mapInput1);

        document.body.appendChild(mapForm);
        mapForm.submit();

    }

    function employee_delete(id) {
        var c = confirm('Are you sure?');
        if (c) {
            var mapForm = document.createElement("form");
            mapForm.method = "post";
            mapForm.action = "{{ URL::asset('employee_delete')}}";

            var mapInput = document.createElement("input");
            mapInput.type = "hidden";
            mapInput.name = "_token";
            mapInput.value = '<?php echo csrf_token() ?>';
            mapForm.appendChild(mapInput);

            var mapInput1 = document.createElement("input");
            mapInput1.type = "text";
            mapInput1.name = "id";
            mapInput1.value = id;
            mapForm.appendChild(mapInput1);

            document.body.appendChild(mapForm);
            mapForm.submit();
        }

    }
</script>
@endpush


<div class="content-wrapper">

    <section class="content">
        <div class="container-fluid pt-3"> 

            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title" style="color: #e83e8c">Edit EMPLOYEE DETAILS</h3>
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
                    <div class="card-body">
                    <div class="col-12 table-responsive mb-4">
                        <table class="table table-bordered table-hover" id="example1">
                            <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Edit</th>
                                    <th>Delete</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                ?>
                                @if(!empty($value))
                                @foreach($value as $val)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$val['name']}}</td>
                                    <td>{{$val['email']}}</td>
                                    <td>{{$val['mobile']}}</td>
                                   
                                    
                                        <td><div class="col-md-12 col-sm-4"><a class="btn bg-info" onclick="return employee_edit(<?php echo $val['id']; ?>)"  ><i class="fa fa-edit"></i> <strong>Edit</strong></a></div></td>
                                        <td><div class="col-md-12 col-sm-4"><a class="btn bg-danger" onclick="return employee_delete(<?php echo $val['id']; ?>)"><i class="fa fa-trash"></i> <strong>Delete</strong></a></div></td>
                                    
                                </tr>
                                <?php
                                $i++;
                                ?> 
                                @endforeach  
                                @endif
                            </tbody>                   
                        </table>
                    </div>
                </div>
                </div>    



            </div>
        </div>
    </section>

</div>


@endsection





