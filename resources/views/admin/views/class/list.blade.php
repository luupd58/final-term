@extends('admin.layouts.index')

@section('content')

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Môn học</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="col-md-12 flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))
                <p class="alert alert-{{ $msg }}">
                    {{ Session::get('alert-' . $msg) }} <a href="#" 
                    class="close" data-dismiss="alert" 
                    aria-label="close">&times;</a></p>
            @endif
        @endforeach
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                	Danh sách
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Mã LH</th>
                                <th>Tên LH</th>
                                <th>Ngày thi</th>
                                <th>Ca thi</th>
                                <th>Địa điểm thi</th>
                                <th>Giảng đường</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                // dd($class);
                            ?>
                            @foreach($class as $value)
                            	<tr class="odd gradeX">
                                    <td>{{ $value->id }}</td>
	                                <td>{{ $value->mlh_id }}</td>
	                                <td>{{ $value->name_class }}</td>
	                                <td class="center">{{ $value->date_test }}</td>
	                                <td class="center">{{ $value->time_test }}</td>
                                    <td>{{ $value->place_test }}</td>
                                    <td>{{ $value->real_place }}</td>
	                                <td><a href="{{ route('admin.class.update', 
                            ['id'=> $value->id]) }}" title="">Sửa</a></td>
	                                <td><a href="{{ route('admin.class.delete', 
                            ['id'=> $value->id]) }}"  
                            onclick="return confirm('Delete?')" title="">Xóa</a></td>
	                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection