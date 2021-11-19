@extends('cms.layout.base')



@section('title', 'Add Testimonial ')



@section('content')



<div class="content-area py-1">

    <div class="container-fluid">

    	<div class="box box-block bg-white">

            <!-- <a href="{{ route('cms.testimonial.index') }}" class="btn btn-default pull-right"><i class="fa fa-angle-left"></i> Back</a> -->



			<h5 style="margin-bottom: 2em;"><i class="ti-themify-favicon"></i>&nbsp;Add Testimonial</h5><hr>



            <form class="form-horizontal" action="{{route('cms.testimonial.store')}}" method="POST" enctype="multipart/form-data" role="form">

            	{{csrf_field()}}

				<div class="col-md-10">
                    <ul class="nav nav-tabs m-b-0-5" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-expanded="false">En</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-expanded="true">Ar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#profile_1" role="tab" aria-expanded="true">Fr</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#profile_2" role="tab" aria-expanded="true">Ru</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#profile_3" role="tab" aria-expanded="true">Sp</a>
                        </li>
                        
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="home" role="tabpanel" aria-expanded="false">

                        <div class="form-group row">
							<label for="en_name" class="col-xs-12 col-form-label">Name</label>
							<div class="col-xs-10">
								<input class="form-control" type="text" value="{{ old('en_name') }}" name="en_name" required id="en_name" placeholder="Name">
							</div>
						</div>

						<!-- <div class="form-group row">
							<label for="name" class="col-xs-12 col-form-label">Name <small>French</small></label>
							<div class="col-xs-10">
								<input class="form-control" type="text" value="{{ old('name1') }}" name="name1" id="name1" placeholder="Name">
							</div>
						</div> -->						

						<div class="form-group row">
							<label for="en_type" class="col-xs-12 col-form-label">Type</label>
							<div class="col-xs-10">
								<input class="form-control" type="text" value="{{ old('en_type') }}" name="en_type" required id="en_type" placeholder="Enter business type">
							</div>
						</div>

						<!-- <div class="form-group row">
							<label for="type" class="col-xs-12 col-form-label">Type <small>French</small></label>
							<div class="col-xs-10">
								<input class="form-control" type="text" value="{{ old('type1') }}" name="type1" id="type" placeholder="Enter business type">
							</div>
						</div> -->

		                <div class="form-group row">
							<label for="image" class="col-xs-12 col-form-label">Picture</label>
							<div class="col-xs-10">
								<input type="file" accept="image/*" name="image" class="dropify form-control-file" id="image" aria-describedby="fileHelp">
							</div>
						</div>

						<div class="form-group row">
							<label for="en_description" class="col-xs-12 col-form-label">Testimonial</label>
							<div class="col-xs-10">
		                        <textarea class="form-control"  cols="2" rows="10" name="en_description" required id="en_description"  placeholder="Description" >{{ old('en_description') }}</textarea>
							</div>
						</div>

						<!-- <div class="form-group row">
							<label for="description1" class="col-xs-12 col-form-label">Testimonial <small>French</small></label>
							<div class="col-xs-10">
		                        <textarea class="form-control"  cols="2" rows="10" name="description1"  id="description1"  placeholder="Description" >{{ old('description1') }}</textarea>
							</div>
						</div> -->                            
                        </div>

                        <div class="tab-pane" id="profile" role="tabpanel" aria-expanded="true">
                        <div class="form-group row">
							<label for="ar_name" class="col-xs-12 col-form-label">Name</label>
							<div class="col-xs-10">
								<input class="form-control arabic-content" type="text" value="{{ old('ar_name') }}" name="ar_name" required id="ar_name" placeholder="Name">
							</div>
						</div>						

						<div class="form-group row">
							<label for="ar_type" class="col-xs-12 col-form-label">Type</label>
							<div class="col-xs-10">
								<input class="form-control arabic-content" type="text" value="{{ old('ar_type') }}" name="ar_type" required id="ar_type" placeholder="Enter business type">
							</div>
						</div>

						<div class="form-group row">
							<label for="ar_description" class="col-xs-12 col-form-label">Testimonial</label>
							<div class="col-xs-10">
		                        <textarea class="form-control arabic-content"  cols="2" rows="10" name="ar_description" required id="ar_description"  placeholder="Description" >{{ old('ar_description') }}</textarea>
							</div>
						</div>
                        </div>
                       
                       <div class="tab-pane" id="profile_1" role="tabpanel" aria-expanded="true">
                             <div class="form-group row">
							<label for="fr_name" class="col-xs-12 col-form-label">Name</label>
							<div class="col-xs-10">
								<input class="form-control" type="text" value="{{ old('fr_name') }}" name="fr_name" required id="fr_name" placeholder="Name">
							</div>
						</div>						

						<div class="form-group row">
							<label for="fr_type" class="col-xs-12 col-form-label">Type</label>
							<div class="col-xs-10">
								<input class="form-control" type="text" value="{{ old('fr_type') }}" name="fr_type" required id="fr_type" placeholder="Enter business type">
							</div>
						</div>

						<div class="form-group row">
							<label for="fr_description" class="col-xs-12 col-form-label">Testimonial</label>
							<div class="col-xs-10">
		                        <textarea class="form-control"  cols="2" rows="10" name="fr_description" required id="fr_description"  placeholder="Description" >{{ old('fr_description') }}</textarea>
							</div>
						</div>
                        </div>
                        <div class="tab-pane" id="profile_2" role="tabpanel" aria-expanded="true">
                             <div class="form-group row">
							<label for="ru_name" class="col-xs-12 col-form-label">Name</label>
							<div class="col-xs-10">
								<input class="form-control" type="text" value="{{ old('ru_name') }}" name="ru_name" required id="ru_name" placeholder="Name">
							</div>
						</div>						

						<div class="form-group row">
							<label for="ru_type" class="col-xs-12 col-form-label">Type</label>
							<div class="col-xs-10">
								<input class="form-control" type="text" value="{{ old('ru_type') }}" name="ru_type" required id="ru_type" placeholder="Enter business type">
							</div>
						</div>

						<div class="form-group row">
							<label for="ru_description" class="col-xs-12 col-form-label">Testimonial</label>
							<div class="col-xs-10">
		                        <textarea class="form-control"  cols="2" rows="10" name="ru_description" required id="ru_description"  placeholder="Description" >{{ old('ru_description') }}</textarea>
							</div>
						</div>
                        </div>
                        <div class="tab-pane" id="profile_3" role="tabpanel" aria-expanded="true">
                             <div class="form-group row">
							<label for="sp_name" class="col-xs-12 col-form-label">Name</label>
							<div class="col-xs-10">
								<input class="form-control" type="text" value="{{ old('sp_name') }}" name="sp_name" required id="sp_name" placeholder="Name">
							</div>
						</div>						

						<div class="form-group row">
							<label for="sp_type" class="col-xs-12 col-form-label">Type</label>
							<div class="col-xs-10">
								<input class="form-control" type="text" value="{{ old('sp_type') }}" name="sp_type" required id="sp_type" placeholder="Enter business type">
							</div>
						</div>

						<div class="form-group row">
							<label for="sp_description" class="col-xs-12 col-form-label">Testimonial</label>
							<div class="col-xs-10">
		                        <textarea class="form-control"  cols="2" rows="10" name="sp_description" required id="sp_description"  placeholder="Description" >{{ old('sp_description') }}</textarea>
							</div>
						</div>
                        </div>
                                               
                    </div>
                </div>

				<div class="form-group row">

					<label for="zipcode" class="col-xs-2 col-form-label"></label>

					<div class="col-xs-10">

						<button type="submit" class="btn btn-success shadow-box">Add Testimonial</button>

						<a href="{{route('cms.testimonial.index')}}" class="btn btn-default">Cancel</a>

					</div>

				</div>

			</form>

		</div>

    </div>

</div>



@endsection

