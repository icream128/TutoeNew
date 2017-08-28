<div class="page-header">
	<div class="page-header-top">
		<div class="container">
			<div class="page-logo">
				<a href="{{url('/')}}"><img src="<?php echo url(""); ?>/themes/alchemist/assets/img/piclogo.png" alt="logo" class="logo-default" style="width:70px;height:40px;"></a>
				<br>
			</div>
			<a href="javascript:;" class="menu-toggler"></a>
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
							
					<li>
						<a href="{{url('/login')}}">
							<span class="username username-hide-mobile">เข้าสู่ระบบ</span>
						</a>
					</li>
					<li><a href="{{url('/registertutor')}}">
							<span class="username username-hide-mobile">สมัคร</span>
						</a>
					</li>
					<li>
						<a href="{{url('/profiletutor')}}">
							<span class="username username-hide-mobile">บัญชีผู้ใช้</span></a>
					</li>
					
					
					<li>
					<a href="{{url('/')}}">
						</i><span class="username username-hide-mobile">ออกจากระบบ</span></a>		
					</li>	
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
			</div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
	</div>
	<!-- END HEADER TOP -->
	<!-- BEGIN HEADER MENU -->
	<div class="page-header-menu">
		<div class="container">
			<!-- BEGIN MEGA MENU -->
			<!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
			<!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
			<div class="hor-menu ">
				<ul class="nav navbar-nav">
					<li>
						<a href="{{url('/mycoursetutor')}}">คอร์สของฉัน</a>
					</li>
					<li>
						<a href="{{url('/historytutor')}}">ประวัติการเรียนการสอน</a>
					</li>
					
				</ul>
			</div>
			<!-- END MEGA MENU -->
		</div>
	</div>
	<!-- END HEADER MENU -->
</div>
