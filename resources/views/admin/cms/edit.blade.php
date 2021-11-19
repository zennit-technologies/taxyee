@extends('admin.layout.base')

@section('title', 'Update Cms ')

@section('content')

<div class="content-area py-1">
    <div class="container-fluid">
    	<div class="box box-block bg-white">
    	   <!--  <a href="{{ route('admin.cms-manager.index') }}" class="btn btn-default pull-right"><i class="fa fa-angle-left"></i> Back</a> -->

			<h5 style="margin-bottom: 2em;"><i class="ti-layout-media-left-alt"></i>&nbsp;Update Cms</h5><hr>

            <form class="form-horizontal" action="{{route('admin.cms-manager.update', $cms->id )}}" method="POST" enctype="multipart/form-data" role="form">
            	{{csrf_field()}}
            	<input type="hidden" name="_method" value="PATCH">
				
				<div class="form-group row">
					<label for="name" class="col-xs-2 col-form-label">Full Name</label>
					<div class="col-xs-10">
						<input class="form-control" type="text" value="{{ $cms->name }}" name="name" required id="name" placeholder="Full Name">
					</div>
				</div>

				<div class="form-group row">
					<label for="email" class="col-xs-2 col-form-label">Email</label>
					<div class="col-xs-10">
						<input class="form-control" type="text" value="{{ $cms->email }}" readonly="true" name="email" required id="email" placeholder="Full Name">
					</div>
				</div>

				<div class="form-group row">
					<label for="mobile" class="col-xs-2 col-form-label">Mobile</label>
					<div class="col-xs-10">
						<input class="form-control" type="number" value="{{ $cms->mobile }}" name="mobile" required id="mobile" placeholder="Mobile">
					</div>
				</div>

				<div class="form-group row">
					<label for="zipcode" class="col-xs-2 col-form-label"></label>
					<div class="col-xs-10">
						<button type="submit" class="btn btn-success shadow-box">Update Cms</button>
						<a href="{{route('admin.cms-manager.index')}}" class="btn btn-default">Cancel</a>
					</div>
				</div>
			</form>
		</div>
    </div>
</div>

@endsection
