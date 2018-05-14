@extends('pages.admin.frame')
@section('content')
<section class="wrapper">
	<!-- page start-->
	<div class="row">
		<div class="col-lg-12">
			<section class="panel">
				<header class="panel-heading">
					Thể Loại
				</header>
				<div class="panel-body">
					<div class="clearfix">
						<div class="btn-group pull-right">
							<button class="btn dropdown-toggle" data-toggle="dropdown">Công cụ <i class="fa fa-angle-down"></i>
							</button>
							<ul class="dropdown-menu pull-right">
								<li><a href="#">In</a></li>
								<li><a href="#">Lưu ra pdf</a></li>
								<li><a href="#">Lưu ra Excel</a></li>
							</ul>
						</div>
					</div>
				</div>
				<table class="table table-striped table-advance table-hover">
					<thead>
						<tr>
							<th style="width: 15%"><i class="fa fa-bullhorn"></i> ID</th>
							<th class="hidden-phone"><i class="fa fa-question-circle"></i>Thể Loại</th>
							<th style="width: 25%">Số Lượng (Sách)</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($list as $item)
						<tr>
							<td>{{ $item->category_id }}</td>
							<td class="hidden-phone">{{ $item->category_name }}</td>
							<td>
								{{ $item->quantity }}
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				<div class="text-center">
					{{ $list->links() }}
				</div>
			</section>
		</div>
	</div>
	<!-- page end-->
</section>
@endsection