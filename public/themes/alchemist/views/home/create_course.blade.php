<div class="page-container">
	<div class="page-head">
		<div class="container">
			<div class="page-title"
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

			<form method="post" action="/createcourse">
				<div class="row">			
                    <select name="subject">
					<?php
						foreach(Theme::get('subject') as $sj){
            				echo '<option value='.$sj->subjects_id.'>'.$sj->subject.'</option>' ;
						}			
					?>
                    </select>
                    <select name="level">
					<?php
						foreach(Theme::get('level') as $sj){
            				echo '<option value='.$sj->levels_id.'>'.$sj->level.'</option>' ;
						}			
					?>
                    </select>
                    <select name="day">
					<?php
						foreach(Theme::get('day') as $sj){
            				echo '<option value='.$sj->day_id.'>'.$sj->dayfull.'</option>' ;
						}			
					?>
                    </select>
                    <select name="duration">
					<?php
						foreach(Theme::get('duration') as $sj){
            				echo '<option value='.$sj->duration_id.'>'.$sj->name.'</option>' ;
						}			
					?>
                    </select>
					<select>
					<?php
						foreach(Theme::get('province') as $sj){
            				echo '<option>'.$sj->PROVINCE_NAME.'</option>' ;
						}			
					?>
                    </select>
					<select>
					<?php
						foreach(Theme::get('amphur') as $sj){
            				echo '<option>'.$sj->AMPHUR_NAME.'</option>' ;
						}			
					?>
                    </select>
					<select>
					<?php
						foreach(Theme::get('district') as $sj){
            				echo '<option>'.$sj->DISTRICT_NAME.'</option>' ;
						}			
					?>
                    </select>
                </div>
                
                <div class="row">
                    <button class="btn btn-primary" type="submit">Create</button>
                </div>
			</form>
		</div>
	</div>
</div>
