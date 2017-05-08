@extends('admin.layouts.index')

@section('content')

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Lịch thi</h1>
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
                                <th>Mã SV</th>
                                <th>SBD</th>
                                <th>Mã lớp học</th>
                                <th>Hình thức thi</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($test as $value)
                            	<tr class="odd gradeX">
	                                <td>{{ $value->id }}</td>
	                                <td>{{ $value->sv_id }}</td>
	                                <td>{{ $value->sbd }}</td>
	                                <td class="center">{{ $value->mlh_id }}</td>
	                                <td class="center">{{ $value->type }}</td>
	                                <td><a href="{{ route('admin.test.update', 
                            ['id'=> $value->id]) }}" title="">Sửa</a></td>
	                                <td><a href="{{ route('admin.test.delete', 
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