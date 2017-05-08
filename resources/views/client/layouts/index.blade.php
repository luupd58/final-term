<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lịch thi</title>
    <link rel="stylesheet" type="text/css"  
        href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" type="text/css"  
        href="{{ asset('admin/css/client.css') }}"/>
    <link rel="stylesheet" type="text/css" 
        href="{{ asset('lib/css/font-awesome.min.css') }}"/>
    <link href="{{ asset('admin/metisMenu/metisMenu.min.css') }}" 
        rel="stylesheet">
    <link href="{{ asset('admin/datatables-plugins/dataTables.bootstrap.css') }}" 
        rel="stylesheet">
    <link href="{{ asset('admin/datatables-responsive/dataTables.responsive.css') 
        }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css"  
        href="{{ asset('admin/css/sb-admin-2.css') }}"/>
</head>
<body>

	<div class="container" id="page">
		<div id="header">
			<div class="headmain">
				<div class="uet_logo col-md-2 col-md-offset-1">
					<img src="{{ asset('admin/image/uet_logo.png') }}" style="margin-top: 15px" alt="">
				</div>
				<div class="center_logo col-md-6">
					<img src="{{ asset('admin/image/dhcn.png') }}" width="540px" alt="">
					@yield("textContent")
				</div>
				<div class="col-md-3">
					
				</div>
				<div class="clearfix">
					
				</div>
			</div>
		</div>
		<div id="main-menu">
			<div class="row">
				<div class="row">
					<div class="row">
						<div class="row">
							<div class="row">
								<ul>
									<li class="active col-md-2"><a href="{{ route('client.test.index') }}" title="">@yield("mainmenu")</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="content">
			<div class="row">
				<div class="row">
					<div class="row">
						<div class="row">
							<div class="row">
								@yield("content")
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="{{ asset('lib/bootstrap/js/jquery.min.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('admin/datatables/js/jquery.dataTables.min.js')
        }}"></script>
    <script src="{{ asset('admin/datatables-plugins/dataTables.bootstrap.min.js') 
        }}"></script>
    <script src="{{ asset('admin/datatables-responsive/dataTables.responsive.js') 
        }}"></script>
    <script src="{{ asset('admin/js/sb-admin-2.js') }}"></script>
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
</body>
</html>