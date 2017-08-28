
<div class="page-container">
	<div class="page-content">
	<center><h2>บัญชีผู้ใช้</h2></center>
        <div class="row" id="result">
            @foreach (Theme::get('tutor') as $obj)  
                        <div class="col-sm-12 col-lg-12 col-md-12 course-list">
                                <div class="col-md-6">
                                    <div class="col-md-8 col-md-offset-2">
                                     <br><br>
                                        <img src="{{$obj->img_profile}}" alt="img_proflie" style="width:400px;height:400px;">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <br><br>
										<h2>{{$obj->username}} </h2><a href="{{url('/editprofiletutor')}}">แก้ไข</a>
                                       <h4> ชื่อ-นามสกุล : {{$obj->firstname}} {{$obj->lastname}}</h4>
                                        <h4>ชื่อเล่น : {{$obj->nickname}}</h4>
										<h4>รหัสบัตรประชาชน : {{$obj->id_card}}</h4>   
										<h4> วันเดือนปีเกิด : {{$obj->birthday}}</h4>
                                       <h4> เพศ : {{$obj->gender}}</h4>
                                       <h4> อายุ : {{$obj->age}} ปี</h4>
									   <h4> อายุ : {{$obj->address}} </h4>
									   <h4>อีเมล : {{$obj->email}}</h4>
                                        <h4>สถานศึกษาปัจจุบัน : {{$obj->tutor_school}}</h4>
										<h4>ระดับชั้น : {{$obj->tutor_level}}</h4>
										<h4>เกรดเฉลี่ย : {{$obj->tutor_grade}}</h4>
										<h4>ประสบการณ์สอน : {{$obj->tutor_exp}}</h4>
                                        <h4>เบอร์โทรศัพท์ : {{$obj->tel}}</h4> 
                                </div>
                        </div> 
            @endforeach
		</div>
	</div>
</div>

