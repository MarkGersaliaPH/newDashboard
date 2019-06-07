@extends('layouts.app')

@section('content')
<div class="container-fluid">
	<br>
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-sm-3">
				<div class="card card-info"> 
					<div class="card-body">
						{{-- {!! $chart->container() !!} --}}

					</div>
				</div>
			</div>
			<div class="col-sm-6"> 
				<div class="card">
					<div class="card-header">
					Sales Report
					<div class="card-header-actions"> 
						<select   id="year">
							<option>{{$now->year}}</option>
							<option>2019</option>
							<option>2018</option>
							<option>2017</option>
							<option>2016</option>
						</select>
						<select id="month">
							<option default hidden value="{{$now->month}}">{{$now->format('F')}}</option>
							<option value="1">January</option>
							<option value="2">February</option>
							<option value="3">March</option>
							<option value="6">June</option>
						</select> 
						<button  id="filter">Filter</button> 
					</div>
				</div> 
						
						<div class="embed-responsive embed-responsive-21by9" >
						  <iframe  id="sales" class="embed-responsive-item"></iframe>
						</div>	
					</div> 
			</div>
		</div>
	</div>
</div>
{{-- 
{!! $chart->script() !!}
{!! $sales->script() !!}
 --}}
@section('scripts') 
<script type="text/javascript">
	$('#sales').attr('src',"{{url('widgets/sales')}}")


	$('#filter').on('click',function(){
		year = $('#year').val();
		month = $('#month').val();
		url = "{{url('widgets/sales/')}}/" + month + '/' + year ;
		console.log(url);
		$('#sales').attr('src',url);		
	})
</script>
@endsection
@endsection
