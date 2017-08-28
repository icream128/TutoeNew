<div class="page-container">
	<div class="page-content">
        <div class="row" id="result">
            @foreach (Theme::get('learnerschedule') as $obj)  
                        <div class="col-sm-12 col-lg-12 col-md-12 course-list">
                                <div class="col-md-6">
                                    <div class="col-md-8 col-md-offset-2">
                                     <br><br>
                                        <img src="{{$obj->img_profile}}" alt="img_proflie" style="width:400px;height:400px;">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <br><br>
                                       <h4> ชื่อ-นามสกุล : {{$obj->firstname}} {{$obj->lastname}}</h4>
                                        <h4>ชื่อเล่น : {{$obj->nickname}}</h4> 
                                       <h4> เพศ : {{$obj->gender}}</h4>
                                       <h4> อายุ : {{$obj->age}} ปี</h4>
                                        <h4>โรงเรียน : {{$obj->school}}</h4>
                                       <h4> วิชา : {{$obj->subject}}</h4>
                                       <h4> ชัั้น : {{$obj->level}}</h4>
                                        <h4>วัน : {{$obj->dayfull}}</h4>
                                        <h4>ช่วงเวลา : {{$obj->name}}</h4>
                                        <h4>เบอร์โทรศัพท์ : {{$obj->tel}}</h4> 
                                </div>
                        </div> 
            @endforeach
		</div>
	</div>
</div>

