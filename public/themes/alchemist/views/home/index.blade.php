<div class="page-container">
	<div class="page-head">
		<div class="container">
			<div class="page-title">
				<a class="btn btn-primary" target="creatCourse" href="{{ url('/createcourse') }}">Create Course</a>
			</div>
        </div>
        <div class="container">
            <div class="page-title">
				<a class="btn btn-primary" target="addLocation" href="{{ url('/createlocation') }}">Add Location&Subject</a>
			</div>
		</div>
	</div>
	<div class="page-content">
		<div class="container">
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="#">Home</a><i class="fa fa-circle"></i>
				</li>
			</ul>
			<div class="row">
				<div class="col-md-12">
					<h1>Course</h1>
				</div>
			</div>
			<div class="row">
                @foreach (Theme::get('objData') as $obj)                
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4>{{$obj->subject}} {{$obj->level}}</h4>
                                <p>{{$obj->dayfull}} {{$obj->name}}</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                    <p>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                    </p>
                            </div>
                        </div>
                    </div> 
                @endforeach
            </div>
		</div>
	</div>
</div>
