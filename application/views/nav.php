<header class="toggled">

	<nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
		<ul class="nav sidebar-nav">
			<li class="sidebar-brand">
				<a href="#">
                       우리회사정보시스템
                    </a>
			</li>
			<li>
				<a href="#">Home</a>
			</li>
			<li>
				<a href="#">근태관리</a>
			</li>
			<li>
				<a href="#">급여확인</a>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">의사소통 <span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li class="dropdown-header">Dropdown heading</li>
					<li><a href="#">공지사항</a></li>
					<li><a href="#">의견있어요</a></li>
					<li><a href="#">활동사진</a></li>
				</ul>
			</li>
			<li>
				<a href="#">회의실예약</a>
			</li>
			<li>
				<a href="#">인사관리(관리자권한)</a>
			</li>
			<li>
				<a href="#">Contact</a>
			</li>
			<li>
				<a href="https://twitter.com/maridlcrmn">Follow me (SNS)</a>
			</li>
		</ul>
	</nav>
	<div id="page-content-wrapper">
		<button type="button" class="hamburger is-open" data-toggle="offcanvas">
			<span class="hamb-top"></span>
			<span class="hamb-middle"></span>
			<span class="hamb-bottom"></span>
		</button>
	</div>



	<div class="container nav">
		<div class="navbar navbar-default" role="navigation">
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                    class="glyphicon glyphicon-search"></span>Search <b class="caret"></b></a>
						<ul class="dropdown-menu" style="min-width: 300px;">
							<li>
								<div class="row">
									<div class="col-md-12">
										<form class="navbar-form navbar-left" role="search">
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Search" />
												<span class="input-group-btn">
                                            <button class="btn btn-primary" type="button">
                                                Go!</button>
                                        </span>
											</div>
										</form>
									</div>
								</div>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                    class="glyphicon glyphicon-comment"></span>Chats <span class="label label-primary">42</span>
                </a>
						<ul class="dropdown-menu">
							<li><a href="#"><span class="label label-warning">7:00 AM</span>Hi :)</a></li>
							<li><a href="#"><span class="label label-warning">8:00 AM</span>How are you?</a></li>
							<li><a href="#"><span class="label label-warning">9:00 AM</span>What are you doing?</a></li>
							<li class="divider"></li>
							<li><a href="#" class="text-center">View All</a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                    class="glyphicon glyphicon-envelope"></span>Inbox <span class="label label-info">32</span>
                </a>
						<ul class="dropdown-menu">
							<li><a href="#"><span class="label label-warning">4:00 AM</span>Favourites Snippet</a></li>
							<li><a href="#"><span class="label label-warning">4:30 AM</span>Email marketing</a></li>
							<li><a href="#"><span class="label label-warning">5:00 AM</span>Subscriber focused email
                            design</a></li>
							<li class="divider"></li>
							<li><a href="#" class="text-center">View All</a></li>
						</ul>
					</li>
					<?php
    if ( @$this -> session -> userdata('logged_in') == TRUE) {
?>

<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                    class="glyphicon glyphicon-user"></span><?php echo $this -> session -> userdata('username');?><b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#"><span class="glyphicon glyphicon-user"></span>Profile</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-cog"></span>Settings</a></li>
							<li class="divider"></li>
							<li><a href="/bbs/auth/logout"><span class="glyphicon glyphicon-off"></span>Logout</a></li>
						</ul>
					</li>
					
<?php
    } else {
?>
<a href="/Portfolio_server/framework/index.php/company/login" class="btn btn-primary"> 로그인 </a>
<?php
    }
?>
					
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
	</div>


</header>
