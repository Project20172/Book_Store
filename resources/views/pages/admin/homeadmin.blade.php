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
						0
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
				<h3>Doanh Thu Tháng</h3>
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
				<div class="bar">
					<div class="title">JAN</div>
					<div class="value tooltips" data-original-title="80%" data-toggle="tooltip" data-placement="top">80%</div>
				</div>
				<div class="bar ">
					<div class="title">FEB</div>
					<div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">50%</div>
				</div>
				<div class="bar ">
					<div class="title">MAR</div>
					<div class="value tooltips" data-original-title="40%" data-toggle="tooltip" data-placement="top">40%</div>
				</div>
				<div class="bar ">
					<div class="title">APR</div>
					<div class="value tooltips" data-original-title="55%" data-toggle="tooltip" data-placement="top">55%</div>
				</div>
				<div class="bar">
					<div class="title">MAY</div>
					<div class="value tooltips" data-original-title="20%" data-toggle="tooltip" data-placement="top">20%</div>
				</div>
				<div class="bar ">
					<div class="title">JUN</div>
					<div class="value tooltips" data-original-title="39%" data-toggle="tooltip" data-placement="top">39%</div>
				</div>
				<div class="bar">
					<div class="title">JUL</div>
					<div class="value tooltips" data-original-title="75%" data-toggle="tooltip" data-placement="top">75%</div>
				</div>
				<div class="bar ">
					<div class="title">AUG</div>
					<div class="value tooltips" data-original-title="45%" data-toggle="tooltip" data-placement="top">45%</div>
				</div>
				<div class="bar ">
					<div class="title">SEP</div>
					<div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">50%</div>
				</div>
				<div class="bar ">
					<div class="title">OCT</div>
					<div class="value tooltips" data-original-title="42%" data-toggle="tooltip" data-placement="top">42%</div>
				</div>
				<div class="bar ">
					<div class="title">NOV</div>
					<div class="value tooltips" data-original-title="60%" data-toggle="tooltip" data-placement="top">60%</div>
				</div>
				<div class="bar ">
					<div class="title">DEC</div>
					<div class="value tooltips" data-original-title="90%" data-toggle="tooltip" data-placement="top">90%</div>
				</div>
			</div>
			<!--custom chart end-->
		</div>
		<div class="col-lg-4">
			<!--new earning start-->
			<div class="panel terques-chart">
				<div class="panel-body chart-texture">
					<div class="chart">
						<div class="heading">
							<span>Thứ Sáu</span>
							<strong>1,000,000 VND | 15%</strong>
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