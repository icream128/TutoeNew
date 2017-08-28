<div class="page-container">
<div class="page-head">
<center><h2>สร้างคอรส์เรียน</h2></center>
	<div class="container">
		<div class="page-title"
		</div>
	</div>
</div>
<div class="page-content">
	<div class="container">
		
		<div class="col-md-8 col-md-offset-2">
		<form method="post" action="/createcourselearner">
			{{ csrf_field() }}
			<div class="row">
				<div class="col-md-3">	
				<label>วิชา</label>		
				<select name="subject" class="form-control">
				<?php
					foreach(Theme::get('subject') as $sj){
						echo '<option value='.$sj->subjects_id.'>'.$sj->subject.'</option>' ;
					}			
				?>
				</select>
				</div>
				<div class="col-md-3">	
				<label>ระดับชั้น</label>
				<select name="level" class="form-control">
				<?php
					foreach(Theme::get('level') as $sj){
						echo '<option value='.$sj->levels_id.'>'.$sj->level.'</option>' ;
					}			
				?>
				</select>
				</div>
				<div class="col-md-3">	
				<label>วัน</label>
				<select name="day" class="form-control">
				<?php
					foreach(Theme::get('day') as $sj){
						echo '<option value='.$sj->day_id.'>'.$sj->dayfull.'</option>' ;
					}			
				?>
				</select>
				</div>
				<div class="col-md-3">	
				<label>ช่วงเวลา</label>
				<select name="duration" class="form-control">
				<?php
					foreach(Theme::get('duration') as $sj){
						echo '<option value='.$sj->duration_id.'>'.$sj->name.'</option>' ;
					}			
				?>
				</select>
				</div>
			</div>
			<br>
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
			<div class="row">
			<div class="col-md-4 col-md-offset-3" style="margin-top: 5%;">
			<center>
				<button class="tag-item btn btn-sm btn-default" type="submit"><h4>Create</h4></button>
				</center>
			</div>
			</div>
		</form>
		</div>
	</div>
</div>
</div>
