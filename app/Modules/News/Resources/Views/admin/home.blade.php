@extends("layout.backend.master")

@section("content")
<!-- header-->
<section class="content-header">
    <h1>
        Admin
        <small>Content list</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Manage News</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="box">            
            <div class="box-body">
                <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">                    
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="dataTable" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending">ID</th>
                                        <th rowspan="1" colspan="1">Title</th><th rowspan="1" colspan="1">Description</th><th rowspan="1" colspan="1">Detail</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(!empty($data))
                                    @foreach($data as $key=>$value)                                    
                                    <tr role="row" class="odd">
                                        <td>{{$value->id}}</td>
                                        <td>{{$value->title}}</td><td>{{$value->description}}</td><td>{{$value->detail}}</td>                                      
                                        <td width="10%">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info">Action</button>
                                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    <span class="caret"></span>
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">                                                    
                                                    <li><a href="{{url('admin/news/edit',['id'=>$value->id])}}">Edit</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="javascript: DeleteItem('{{$value->id}}');">Delete</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr> 
                                    @endforeach
                                    @endif
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">ID</th>
                                        <th rowspan="1" colspan="1">Title</th><th rowspan="1" colspan="1">Description</th><th rowspan="1" colspan="1">Detail</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <!-- The div for table info-->
                            <!--<div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>-->                                
                        </div>
                        <div class="col-sm-7">
                            <!-- The div for pagination-->
                            <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"></div>
                        </div>
                    </div>
                </div>
            </div><!-- /.box-body -->
        </div>
    </div><!-- /.row -->    
</section>
@stop
