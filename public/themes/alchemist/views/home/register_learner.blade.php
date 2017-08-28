<div class="page-container">
	<div class="page-head">
	

	<div class="page-content">
		<div class="container">
    <form action="{{ url('/registersave')}}" method='post' enctype="multipart/form-data">    
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
        <label>รูปโปรไฟล์</label>
        <input type="file" name="img_profile">
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
        <input type="text" placeholder="บุคคลอ้างอิงที่ติดต่อได้" name="learner_ref" class="form-control"/>
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
       <input type="text" placeholder="สถานศึกษาปัจจุบัน" name="school" class="form-control"/>
        </div>
        
        <div class="col-md-6">
        <label>ระดับชั้นที่ศึกษา</label>
        <input type="text" placeholder="ระดับชั้นที่ศึกษา" name="learner_level" class="form-control"/>
        </div>
        
        <div class="col-md-6">
        <label>เกรดเฉลี่ยสะสม</label>
         <input type="text" placeholder="เกรดเฉลี่ยสะสม" name="grade" class="form-control"/>      
        </div>
        </div>
      
       
        <button class="tag-item btn btn-sm btn-default" type="submit"><h4>สมัครสมาชิก</h4></button>
        </div>    
        </form>
		</div>
	</div>
</div>

