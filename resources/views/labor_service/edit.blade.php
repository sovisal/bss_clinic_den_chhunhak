@extends('layouts.app')

@section('css')
	<style class="text/css">

	</style>
@endsection

@section('content')

	<div class="card">
		<div class="card-header">
			<b>{!! Auth::user()->subModule() !!}</b>
			
			<div class="card-tools">
				@can('Labor Service Index')
				<a href="{{route('labor_service.index')}}" class="btn btn-danger btn-sm btn-flat"><i class="fa fa-table"></i> &nbsp;{{ __('label.buttons.back_to_list', [ 'name' => Auth::user()->module() ]) }}</a>
				@endcan
			</div>

			<!-- Error Message -->
			@component('components.crud_alert')
			@endcomponent

		</div>


		{!! Form::open(['url' => route('labor_service.update', [$labor_service->id, 'edit']),'method' => 'post','autocomplete'=>'off']) !!}
		{!! Form::hidden('_method', 'PUT') !!}

		<div class="card-body">

			@include('labor_service.form')

		</div>
		<!-- ./card-body -->
		
		<div class="card-footer text-muted text-center">
			@include('components.submit')
		</div>
		<!-- ./card-Footer -->
		{{ Form::close() }}

	</div>
@endsection

@section('js')
	<script type="text/javascript">

	</script>
@endsection