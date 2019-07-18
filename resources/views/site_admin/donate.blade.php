@extends('layouts.site_admin.site_admin_design')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endsection

@section('title')
    Admin | Donate
@endsection

@section('nav_bar_text')
@endsection
@section('content')

    {{session('contact')}}
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">View Donate List</h4>
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="dataTable">
                                    <thead class=" text-primary">
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Name 
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Country 
                                    </th>
                                    <th>
                                        Amount
                                    </th>
                                    <th>
                                        Comment
                                    </th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <script>
        $('document').ready(function(){
            var t = $('#dataTable').DataTable({
                "ordering": false,
                //"paging": false,
                "bInfo" : false,
                "bLengthChange": false
            });

            $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });

         load();

            function load(){
                $.ajax({
                  type: "get",
                  url: "{{url('/admin/view_donate')}}",

                  cache: false,
                  success: function(data){
                  var data_return=JSON.parse(data);
                    console.log(data);
                    t.clear();
                    for(var i = 0;i<data_return.length;i++){
                      // var link=window.location.href+"/detail/"+data_return[i]['id'];
                    t.row.add([
                        i+1,
                        data_return[i]['name'],
                        data_return[i]['email'],
                        data_return[i]['country'],
                        data_return[i]['amount'],
                        data_return[i]['comment'],
                        // '<a href="'+link+'" class="btn btn-primary btn-sm">Detail</a>',
                        '<button class="btn btn-danger btn-sm rounded-0" onclick="delete_donate('+data_return[i]['id']+')">Delete</button>'
                        ]).draw( false );
                    }
                  }
                }).fail(function(error){
                    console.log(error);
                })
            }

            delete_donate=function(id){
                if(confirm('Are u want to delete!')){
                    $.ajax({
                    type: "POST",
                    data: { "_method" : "delete"},
                    url : "{{url('delete/donate')}}/"+id,
                    cache: false,
                    success:function(data){
                        load();
                        toastr.success('Delete successful');
                        }
                    })
                }
            }    
        })

    </script>

@endsection
