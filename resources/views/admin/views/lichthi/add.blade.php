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
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                	@if($test->id == null || $test->id == '')
                        Thêm mới
                    @else
                        Sửa thông tin
                    @endif
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="col-md-8 col-md-offset-2">
                        <form class="form-horizontal" 
                            action="{{ route('admin.test.store') }}" method="post" 
                            enctype="multipart/form-data" id="form-class">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="hidden" name="_token" 
                                        value="{{ csrf_token() }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="hidden" name="id" value="{{$test->id}}" 
                                    />
                                </div>
                            </div>

                            <div class="form-group mlh_id">
                                <label class="control-label col-sm-2" for="mlh_id">
                                    Mã LH:</label>
                                <div class="col-sm-10">
                                    @if($test->id != null || $test->id != '')
                                    <select class="form-control" id="mlh_id" name="mlh_id" disabled="disabled">
                                    @else
                                    <select class="form-control" id="mlh_id" name="mlh_id">
                                    @endif
                                        @foreach($class as $ty)
                                        @if($ty->mlh_id == $test->mlh_id)
                                            <option value="{{$ty->mlh_id}}" selected>
                                                {{$ty->mlh_id}}</option>
                                        @else
                                            <option value="{{$ty->mlh_id}}">
                                                {{$ty->mlh_id}}</option>
                                        @endif                             
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group sv_id">
                                <label class="control-label col-sm-2" for="sv_id">
                                    Mã SV:</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="sv_id" name="sv_id">
                                        @foreach($student as $ty)
                                        @if($ty->sv_id == $test->sv_id)
                                            <option value="{{$ty->sv_id}}" selected>
                                                {{$ty->sv_id}}</option>
                                        @else
                                            <option value="{{$ty->sv_id}}">
                                                {{$ty->sv_id}}</option>
                                        @endif                             
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group sbd 
                                {{ $errors->has('sbd') ? ' has-error' : '' }}">
                                <label class="control-label col-sm-2" 
                                    for="sbd">SBD:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" 
                                        name="sbd" id="sbd" 
                                        placeholder="Nhập số báo danh" maxlength="191" 
                                        value="{{$test->sbd}}">
                                </div>
                                <div class="col-sm-10 col-sm-offset-2 error-div">
                                    @if ($errors->has('sbd'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('sbd') }}
                                                </strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group type 
                                {{ $errors->has('type') ? ' has-error' : '' }}">
                                <label class="control-label col-sm-2" for="type">
                                    Hình thức:</label>
                                <div class="col-sm-10">
                                    @if($test->id == null || $test->id == '')
                                        <input type="text" class="form-control" name="type" 
                                            id="type" value="Viết">
                                    @else
                                        <input type="text" class="form-control" name="type" 
                                            id="type" value="{{$test->type}}">
                                    @endif
                                </div>
                                <div class="col-sm-10 col-sm-offset-2 error-div">
                                    @if ($errors->has('type'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('type') }}
                                            </strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">        
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-info">
                                        Submit</button>
                                    <a href="" 
                                        class="btn btn-default" title="">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection