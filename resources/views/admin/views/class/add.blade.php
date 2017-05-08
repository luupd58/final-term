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
                	@if($class->id == null || $class->id == '')
                        Thêm mới
                    @else
                        Sửa thông tin
                    @endif
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="col-md-8 col-md-offset-2">
                        <form class="form-horizontal" 
                            action="{{ route('admin.class.store') }}" method="post" 
                            enctype="multipart/form-data" id="form-class">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="hidden" name="_token" 
                                        value="{{ csrf_token() }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="hidden" name="id" value="{{$class->id}}" 
                                    />
                                </div>
                            </div>
                            
                            <div class="form-group mlh_id 
                                {{ $errors->has('mlh_id') ? ' has-error' : '' }}">
                                <label class="control-label col-sm-2" 
                                    for="mlh_id">Mã LH:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" 
                                        name="mlh_id" id="mlh_id" 
                                        placeholder="Nhập mã lớp học" maxlength="191" 
                                        value="{{$class->mlh_id}}">
                                </div>
                                <div class="col-sm-10 col-sm-offset-2 error-div">
                                    @if ($errors->has('mlh_id'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('mlh_id') }}
                                                </strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group name_class 
                                {{ $errors->has('name_class') ? ' has-error' : '' }}">
                                <label class="control-label col-sm-2" for="name_class">
                                    Tên LH:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name_class" 
                                        id="name_class" placeholder="Nhập tên lớp học" 
                                        value="{{$class->name_class}}">
                                </div>
                                <div class="col-sm-10 col-sm-offset-2 error-div">
                                    @if ($errors->has('name_class'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name_class') }}
                                            </strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group date_test">
                                <label class="control-label col-sm-2" for="date_test">
                                    Ngày thi:</label>
                                <div class="col-sm-10">
                                    <?php
                                        if($class->date_test != null){
                                            $date_test = date("m/d/Y", strtotime($class->date_test));
                                        } else {
                                            $date_test = '';
                                        }
                                    ?>
                                    <div class='input-group date' id='date_test'>
                                        
                                        <input type='text' class="form-control" 
                                            name="date_test" 
                                            value="{{$date_test}}"/>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar">
                                                </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group time_test">
                                <label class="control-label col-sm-2" for="time_test">
                                    Ca thi:</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="time_test" name="time_test">
                                        @if($class->time_test == 1)
                                            <option value="1" selected>1</option>
                                            <option value="2">2</option>
                                        @elseif($class->time_test == 2)
                                            <option value="1" >1</option>
                                            <option value="2" selected>2</option>
                                        @else
                                            <option value="1" selected>1</option>
                                            <option value="2">2</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group place_test 
                                {{ $errors->has('place_test') ? ' has-error' : '' }}">
                                <label class="control-label col-sm-2" for="place_test">
                                    Phòng:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="place_test" 
                                        id="place_test" placeholder="Nhập phòng thi" 
                                        value="{{$class->place_test}}">
                                </div>
                                <div class="col-sm-10 col-sm-offset-2 error-div">
                                    @if ($errors->has('place_test'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('place_test') }}
                                            </strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group real_place 
                                {{ $errors->has('real_place') ? ' has-error' : '' }}">
                                <label class="control-label col-sm-2" for="real_place">
                                    Tên GĐ:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="real_place" 
                                        id="real_place" placeholder="Nhập giảng đường thi" 
                                        value="{{$class->real_place}}">
                                </div>
                                <div class="col-sm-10 col-sm-offset-2 error-div">
                                    @if ($errors->has('real_place'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('real_place') }}
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