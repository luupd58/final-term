<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
<title>Tra cứu danh sách thi - Napmonthi Lopmonhoc</title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div class="headmain">
			<div class="uet_logo">  
				<img src="{{ asset('admin/image/uet_logo.png') }}" alt="Đại học Công Nghệ">
			</div>
			<div class="center_logo">
				<a href="#" target=""><img alt="Đại học Công Nghệ" src="{{ asset('admin/image/dhcn.png') }}"></a>
				<h1 align="center" class="htitle">Tra cứu danh sách thi</h1>
			</div>
		</div>
	</div><!-- header -->

	<div id="mainmenu">
		<ul id="yw4">
			<li><a href="/congdaotao/module/dsthi_new/index.php?r=lopmonhoc/#"></a></li>
			<li class="active"><a href="{{ route('client.test.index') }}">Xem danh sách môn thi</a></li>
		</ul>	

	</div><!-- mainmenu -->
		<!-- breadcrumbs -->
	<div id="content">
	
		<div class="span-5 last">
			<div id="sidebar">
			</div><!-- sidebar -->
		</div>
		<div class="span-19">
			<div id="content">
				<h1 align="center">Danh sách thi Học kỳ I năm học 2016-2017</h1>
				<form style="width:400px;" id="dsthi-form" action="{{ route('client.test.search') }}" method="get"><label for="">Nhập mã sinh viên</label>     <input id="keysearch" width="100" maxlength="100" type="text" name="keysearch" />     <input title="Xem thông tin các môn thi" id="xemmonthi" name="yt0" type="button" value="Xem môn thi" />
				</form>
				<div  id="loading"></div>
				<div id="dsthi-grid" class="grid-view">
					<?php
						$i = 1;
						$check = 0;
						// dd($result);
					?>
					@if(isset($result))
						@foreach($result as $value)
						<?php
							if($value != null){
								$check ++;
								continue;
							} else {
								break;
							}
						?>
						@endforeach
						@if($check != 0)
						<div class="summary">Kết quả từ 1 tới {{$check}} trên {{$check}}.  </div>
						@endif
					@endif
					<table class="items">
						<thead>
							<tr>
								<th id="dsthi-grid_c0">STT</th>
								<th id="dsthi-grid_c1">Mã sinh viên</th>
								<th id="dsthi-grid_c2">Họ và tên</th>
								<th id="dsthi-grid_c3">Ngày sinh</th>
								<th id="dsthi-grid_c4">Lớp khóa học</th>
								<th id="dsthi-grid_c5">SBD</th>
								<th id="dsthi-grid_c6">Mã LMH</th>
								<th id="dsthi-grid_c7">Tên môn học</th>
								<th id="dsthi-grid_c8">Ngày thi</th>
								<th id="dsthi-grid_c9">Giờ thi</th>
								<th id="dsthi-grid_c10">Ca thi</th>
								<th id="dsthi-grid_c11">Phòng thi</th>
								<th id="dsthi-grid_c12">Địa điểm</th>
								<th id="dsthi-grid_c13">Hình thức thi</th></tr>
						</thead>
						<tbody>
							@if($check != 0)
							@foreach($result as $value)
							<tr class="odd">
								<td style="width: 20px">{{ $i }}</td>
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
							@endforeach
							@else
							<tr><td colspan="14" class="empty"><span class="empty">No results found.</span></td></tr>
							@endif
						</tbody>
					</table>
					<div class="keys" style="display:none" title="/congdaotao/module/dsthi_new/index.php?r=lopmonhoc/napmonthi"><span></span><span></span><span></span><span></span></div>
				</div>
			</div><!-- content -->
		</div>
	</div>
	<!--<div class="clear"></div>-->

	<div id="footer">
		
	</div><!-- footer -->
	<a href="#" class="scrollup" style="display: inline;">Scroll</a>
</div><!-- page -->
</body>
</html>
