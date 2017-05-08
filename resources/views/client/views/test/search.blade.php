@extends('client.layouts.index')

@section('textContent')
	<h1 class="testTextContent" ">TRA CỨU DANH SÁCH THI</h1>
@endsection

@section('mainmenu')
	Xem danh sách môn thi
@endsection

@section('content')
	<div class="top-content">
		<h2>Danh sách thi học kỳ II năm 2016-2017</h2>
		<div class="form-content">
			<form class="form-inline" action="{{ route('client.test.search') }}" method="GET">
				<div class="form-group">
					<label for="search-client">Nhập mã sinh viên:</label>
    				<input type="text" class="form-control" id="search-client"
    					name="search-client">
				</div>
				<button type="submit" class="btn btn-default">Xem môn thi</button>
			</form>
		</div>
	</div>
	<div class="clearfix">
		
	</div>
	<div class="main-content">
		<table class="table table-striped table-hover table-bordered">
			<thead>
				<tr>
					<th>STT</th>
					<th>Mã sinh viên</th>
					<th>Họ và tên</th>
					<th>Ngày sinh</th>
					<th>Lớp khóa học</th>
					<th>SBD</th>
					<th>Mã LMH</th>
					<th>Tên môn học</th>
					<th>Ngày thi</th>
					<th>Giờ thi</th>
					<th>Ca thi</th>
					<th>Phòng thi</th>
					<th>Địa điểm</th>
					<th>Hình thức thi</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$i = 1;
				?>
				@if(!isset($result) || $result == null || $result == '')
					<tr>
						No result found!
					</tr>
				@else
					@foreach($result as $value)
						<tr>
							<td>{{ $i }}</td>
							<td>{{ $value->sv_id }}</td>
							<td>{{ $value->nameStudent }}</td>
							<td>{{ $value->birthdayStudent }}</td>
							<td>{{ $value->classStudent }}</td>
							<td>{{ $value->sbd }}</td>
							<td>{{ $value->mlh_id }}</td>
							<td>{{ $value->nameClass }}</td>
							<td>{{ $value->dateTest }}</td>
							<td>
								@if($value->timeTest == 1)
									8:00
								@else
									14:00
								@endif
							</td>
							<td>{{ $value->timeTest }}</td>
							<td>{{ $value->placeTest }}</td>
							<td>{{ $value->realPlace }}</td>
							<td>{{ $value->type }}</td>
						</tr>
						<?php
							$i++;
						?>
					@endforeach
				@endif
			</tbody>
		</table>
	</div>
@endsection