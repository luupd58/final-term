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
                	@if($student->id == null || $student->id == '')
                        Thêm mới
                    @else
                        Sửa thông tin
                    @endif
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="col-md-8 col-md-offset-2">
                        <form class="form-horizontal" 
                            action="{{ route('admin.student.store') }}" method="post" 
                            enctype="multipart/form-data" id="form-class">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="hidden" name="_token" 
                                        value="{{ csrf_token() }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="hidden" name="id" value="{{$student->id}}" 
                                    />
                                </div>
                            </div>
                            
                            <div class="form-group sv_id 
                                {{ $errors->has('sv_id') ? ' has-error' : '' }}">
                                <label class="control-label col-sm-2" 
                                    for="sv_id">Mã SV:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" 
                                        name="sv_id" id="sv_id" 
                                        placeholder="Nhập mã sinh viên" maxlength="191" 
                                        value="{{$student->sv_id}}">
                                </div>
                                <div class="col-sm-10 col-sm-offset-2 error-div">
                                    @if ($errors->has('sv_id'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('sv_id') }}
                                                </strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group fullname 
                                {{ $errors->has('fullname') ? ' has-error' : '' }}">
                                <label class="control-label col-sm-2" for="fullname">
                                    Họ tên:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="fullname" 
                                        id="fullname" placeholder="Nhập họ tên" 
                                        value="{{$student->fullname}}">
                                </div>
                                <div class="col-sm-10 col-sm-offset-2 error-div">
                                    @if ($errors->has('fullname'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('fullname') }}
                                            </strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group birthday">
                                <label class="control-label col-sm-2" for="birthday">
                                    Ngày sinh:</label>
                                <div class="col-sm-10">
                                    <?php
                                        if($student->birthday != null){
                                            $birthday = date("m/d/Y", strtotime($student->birthday));
                                        } else {
                                            $birthday = '';
                                        }
                                        
                                    ?>
                                    <div class='input-group date' id='birthday'>
                                        
                                        <input type='text' class="form-control" 
                                            name="birthday"
                                            value="{{$birthday}}"/>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar">
                                                </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group info_class 
                                {{ $errors->has('info_class') ? ' has-error' : '' }}">
                                <label class="control-label col-sm-2" for="info_class">
                                    Lớp:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="info_class" 
                                        id="info_class" placeholder="Nhập lớp khóa học" 
                                        value="{{$student->info_class}}">
                                </div>
                                <div class="col-sm-10 col-sm-offset-2 error-div">
                                    @if ($errors->has('info_class'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('info_class') }}
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