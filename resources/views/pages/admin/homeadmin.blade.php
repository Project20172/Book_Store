@extends('pages.admin.frame')
@section('content')
<section class="wrapper">
	<!--state overview start-->
	<div class="row state-overview">
		<div class="col-lg-3 col-sm-6">
			<section class="panel">
				<div class="symbol terques">
					<i class="fa fa-user"></i>
				</div>
				<div class="value">
					<h1 class="count">
						{{ $countCustomer }}
					</h1>
					<p>Khách Hàng</p>
				</div>
			</section>
		</div>
		<div class="col-lg-3 col-sm-6">
			<section class="panel">
				<div class="symbol red">
					<i class="fa fa-book"></i>
				</div>
				<div class="value">
					<h1 class=" count2">
						{{ $countBook }}
					</h1>
					<p>Sách</p>
				</div>
			</section>
		</div>
		<div class="col-lg-3 col-sm-6">
			<section class="panel">
				<div class="symbol blue">
					<i class="fa fa-indent"></i>
				</div>
				<div class="value">
					<h1 class=" count4">
						{{ $countCategory }}
					</h1>
					<p>Thể Loại</p>
				</div>
			</section>
		</div>
		<div class="col-lg-3 col-sm-6">
			<section class="panel">
				<div class="symbol yellow">
					<i class="fa fa-shopping-cart"></i>
				</div>
				<div class="value">
					<h1 class=" count3">
						@foreach ($countOrder as $element)
						{{ $element->count }}
						@endforeach
					</h1>
					<p>Đơn Hàng</p>
				</div>
			</section>
		</div>
	</div>
	<!--state overview end-->
	<div class="row">
		<div class="col-lg-8">
			<!--custom chart start-->
			<div class="border-head">
				<h3>Doanh Thu Tuần {{ $numberw }}</h3>
			</div>
			<div class="custom-bar-chart">
				<ul class="y-axis">
					<li><span>100</span></li>
					<li><span>80</span></li>
					<li><span>60</span></li>
					<li><span>40</span></li>
					<li><span>20</span></li>
					<li><span>0</span></li>
				</ul>
				@foreach ($t as $key=>$value)
				<div class="bar">
					<div class="title">{{ $key }}</div>
					<div class="value tooltips" data-original-title="{{ $value }}%" data-toggle="tooltip" data-placement="top">{{ $value }}%</div>
				</div>
				@endforeach
			</div>
			<!--custom chart end-->
		</div>
		<div class="col-lg-4">
			<!--new earning start-->
			<div class="panel terques-chart">
				<div class="panel-body chart-texture">
					<div class="chart">
						<div class="heading">
							@foreach ($dayTotal as $element)
							<span>{{ $element->Name }}</span>
							<strong>{{ $element->total_money }} VND | {{ $t[$element->Name] }}%</strong>
							@endforeach
						</div>
						<div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,564,455]"></div>
					</div>
				</div>
				<div class="chart-tittle">
					<span class="title">Thu Nhập</span>
					<span class="value">
						<a href="#" class="active">Cửa Hàng</a>
						|
						<a href="#">Online</a>
					</span>
				</div>
			</div>
			<!--new earning end-->

			<!--total earning start-->
			<div class="panel green-chart">
				<div class="panel-body">
					<div class="chart">
						<div class="heading">
							<span>Tháng 6</span>
							<strong>23 Ngày | 65%</strong>
						</div>
						<div id="barchart"></div>
					</div>
				</div>
				<div class="chart-tittle">
					<span class="title">Tổng Doanh Thu</span>
					<span class="value">76,540,678 VND</span>
				</div>
			</div>
			<!--total earning end-->
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<!--timeline start-->
			<section class="panel">
				<div class="panel-body">
					<div class="text-center mbot30">
						<h3 class="timeline-title">Timeline</h3>
						<p class="t-info">This is a project timeline</p>
					</div>

					<div class="timeline">
						<article class="timeline-item">
							<div class="timeline-desk">
								<div class="panel">
									<div class="panel-body">
										<span class="arrow"></span>
										<span class="timeline-icon red"></span>
										<span class="timeline-date">08:25 am</span>
										<h1 class="red">12 July | Sunday</h1>
										<p>Nguyễn Hoàng Giang mua một cuốn sách</p>
									</div>
								</div>
							</div>
						</article>
						<article class="timeline-item alt">
							<div class="timeline-desk">
								<div class="panel">
									<div class="panel-body">
										<span class="arrow-alt"></span>
										<span class="timeline-icon green"></span>
										<span class="timeline-date">10:00 am</span>
										<h1 class="green">10 July | Wednesday</h1>
										<p><a href="#">Ngô Vân Anh</a>đặt một đơn hàng <span><a href="#" class="green"></a></span></p>
									</div>
								</div>
							</div>
						</article>
						<article class="timeline-item">
							<div class="timeline-desk">
								<div class="panel">
									<div class="panel-body">
										<span class="arrow"></span>
										<span class="timeline-icon blue"></span>
										<span class="timeline-date">11:35 am</span>
										<h1 class="blue">05 July | Monday</h1>
										<p><a href="#">Nguyễn Hoàng Giang</a> thêm <span><a href="#" class="blue">10 quển sách</a></span></p>
										<div class="album">
											<a href="#">
												<img alt="" src="{{ asset('images/sm-img-1.jpg') }}">
											</a>
											<a href="#">
												<img alt="" src="{{ asset('images/sm-img-2.jpg') }}">
											</a>
											<a href="#">
												<img alt="" src="{{ asset('images/sm-img-3.jpg') }}">
											</a>
											<a href="#">
												<img alt="" src="{{ asset('images/sm-img-1.jpg') }}">
											</a>
											<a href="#">
												<img alt="" src="{{ asset('images/sm-img-2.jpg') }}">
											</a>
										</div>
									</div>
								</div>
							</div>
						</article>
						<article class="timeline-item alt">
							<div class="timeline-desk">
								<div class="panel">
									<div class="panel-body">
										<span class="arrow-alt"></span>
										<span class="timeline-icon purple"></span>
										<span class="timeline-date">3:20 pm</span>
										<h1 class="purple">29 June | Saturday</h1>
										<p>Nguyễn Hoàng Giang thêm 20 quyển sách</p>
										<div class="notification">
											<i class=" fa fa-exclamation-sign"></i> New task added for <a href="#">Denial Collins</a>
										</div>
									</div>
								</div>
							</div>
						</article>
						<article class="timeline-item">
							<div class="timeline-desk">
								<div class="panel">
									<div class="panel-body">
										<span class="arrow"></span>
										<span class="timeline-icon light-green"></span>
										<span class="timeline-date">07:49 pm</span>
										<h1 class="light-green">10 June | Friday</h1>
										<p><a href="#">Jonatha Smith</a> added new milestone <span><a href="#" class="light-green">prank</a></span> Lorem ipsum dolor sit amet consiquest dio</p>
									</div>
								</div>
							</div>
						</article>
					</div>

					<div class="clearfix">&nbsp;</div>
				</div>
			</section>
			<!--timeline end-->
		</div>
	</div>
</section>
@endsection