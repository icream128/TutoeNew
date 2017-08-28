<div class="page-container">
	<div class="page-head">
	

	<div class="page-content">
		<div class="container">
    <form action="{{ url('/registersavetutor')}}" method='post' enctype="multipart/form-data">    
    <div class="row">
        <h2>บัญชีผ้ใช้</h2>
        <div class="col-md-6">
        <label>ชื่อผู้ใช้</label>
          <input placeholder="ชื่อผู้ใช้" name="username" class="form-control"/>
        </div>
        <div class="col-md-6">
        <label>อีเมล</label>
        <input placeholder="อีเมล" name="email"  class="form-control"/>
        </div>
        <div class="col-md-6">
        <label>รหัสผ่าน</label>
        <input placeholder="รหัสผ่าน" name="password"  class="form-control" type="password"/>
        </div>
        <div class="col-md-6">
        <label>ยืนยันรหัสผ่าน </label>
        <input placeholder="ยืนยันรหัสผ่าน" name="password"  class="form-control" type="password"/>
        </div>
    </div>
    <div class="row">
       <h2>ข้อมูลส่วนตัว</h2>
       <div class="col-md-6">
       <label>ชื่อ</label>
       <input type="text" placeholder="ชื่อจริง" name="firstname"  class="form-control"/>
        </div>
        
        <div class="col-md-6">
            <label>นามสกุล</label>
          <input type="text" placeholder="นามสกุล" name="lastname"  class="form-control"/>
        </div>
        <div class="col-md-6">
            <label>ชื่อเล่น</label>
            <input type="text" placeholder="ชื่อเล่น" name="nickname"  class="form-control" /> 
        </div> 
        <div class="col-md-6">
            <label>เลขบัตรประชาชาน</label>
            <input type="text" placeholder="เลขบัตรประชาชาน" name="id_card"  class="form-control"/>
        </div>
        <div class="col-md-6">
            <label>วันเดือนปีเกิด</label>
            <input type="date" name="birthday"  class="form-control"/>  
        </div>
        <div class="col-md-6">
            <label>อายุ</label>
            <input type="text" placeholder="อายุ" name="age"  class="form-control" />   
        </div>
        <div class="row">
        <div class="col-md-6">
            <label>เพศ</label>
            <br>
            <div class="col-md-3">
            <input type="radio" value="ผู้ชาย" name="gender"  class="form-control">ชาย
            </div>
            <div class="col-md-3">
            <input type="radio" value="ผู้หญิง" name="gender"  class="form-control">หญิง
            </div>
          </div>
       
        
       
        <div class="col-md-6">
        <div class="col-md-3">
        <label>รูปบัตรประชาชน</label>
        <input type="file" name="img_card">
        </div>
        <div class="col-md-3">
      
        </div>
        <div class="col-md-3">
        <label>รูปโปรไฟล์</label>
        <input type="file" name="img_profile">
        </div>
        </div>
        </div>
       
        <div class="col-md-6">
        <label>เบอร์โทรศัพท์</label>
         <input type="text" placeholder="เบอร์โทรศัพท์" name="tel"  class="form-control"/>
        </div>
        <div class="col-md-6">
        <label>ที่อยู่ปัจจุบัน</label>
        <input type="text" placeholder="ที่อยู่ปัจจุบัน" name="address" class="form-control"/>
        </div>
        <div class="col-md-6">
        <label>บุคคลอ้างอิงที่ติดต่อได้</label>
        <input type="text" placeholder="บุคคลอ้างอิงที่ติดต่อได้" name="tutor_ref" class="form-control"/>
        </div>
        <div class="col-md-6">
        <label>ความสัมพันธ์</label>
          <input type="text" placeholder="ความสัมพันธ์" name="ref_relation" class="form-control"/>
        </div>
        <div class="col-md-6">
        <label>เบอร์โทรศัพท์</label>
        <input type="text" placeholder="เบอร์โทรศัพท์" name="ref_tel" class="form-control"/>
        </div>
        
        <div class="col-md-6">
        <label>สถานศึกษาปัจจุบัน</label>
       <input type="text" placeholder="สถานศึกษาปัจจุบัน" name="tutor_school" class="form-control"/>
        </div>
        
        <div class="col-md-6">
        <label>ระดับชั้นที่ศึกษา</label>
        <input type="text" placeholder="ระดับชั้นที่ศึกษา" name="tutor_level" class="form-control"/>
        </div>
        
        <div class="col-md-6">
        <label>เกรดเฉลี่ยสะสม</label>
         <input type="text" placeholder="เกรดเฉลี่ยสะสม" name="tutor_grade" class="form-control"/>      
        </div>
        </div>
        <br><br>
        <br><br>
        <div class="row">
        <h2>วิชาที่สอนได้</h2>
        @foreach (Theme::get('subject') as $obj)
          <div class="col-md-4"> 
        <table>
          <td><input type="checkbox" value="{{$obj->subjects_id}}" name="subject[]">{{$obj->subject}}</td>
        </table>
        </div>
        @endforeach
        <div class="col-md-3"> 
        <label>ประสบการณ์สอนพิเศษ</label>
        <textarea placeholder="ประสบการณ์สอนพิเศษ" name="tutor_exp" class="form-control"></textarea>
        </div>
        </div>
        <div class="row">
        <h2>สถานที่เดินทางมาสอนได้</h2>
        <div class="row">
					<div class="col-md-3">
          <label>แขวง</label>
					<input type="text" id="district" class="form-control">
					</div>
					<div class="col-md-3">
          <label>เขต</label>
						<input type="text" id="amphoe" class="form-control">
					</div>
					<div class="col-md-3">
          <label>จังหวัด</label>
						<input type="text" id="province" class="form-control">
					</div>
					<div class="col-md-3">
          <label>รหัสไปรษณีย์</label>
						<input type="text" id="zipcode" class="form-control">
					</div>
				</div>
        </div>
        <div class="row">
     
        <div class="col-md-4">
        <label>อัตราค่าสอน</label>
     <input type="text" placeholder="บาทต่อชั่วโมง" name="price" class="form-control"/> 
         </div>
         </div>
        <br>
        <button class="tag-item btn btn-sm btn-default" type="submit"><h4>สมัครสมาชิก</h4></button>
        </div>    
        </form>
		</div>
	</div>
</div>

