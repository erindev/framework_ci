
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>OO회사정보놀이터</title>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<!-- Bootstrap -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" href="../../css/custom.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!--
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">-->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/lumen/bootstrap.min.css">-->
<link rel="stylesheet" href="https://daneden.github.io/animate.css/animate.min.css">



	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div class="wrapper">
<header class="toggled">

	<nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
		<ul class="nav sidebar-nav">
			<li class="sidebar-brand">
				<a href="#">
                       우리회사정보시스템
                    </a>
			</li>
			<li>
				<a href="/Portfolio_server/framework/index.php/company/dashboard">Home</a>
			</li>
			<li>
				<a href="/Portfolio_server/framework/index.php/company/calendar">근태관리</a>
			</li>
			<li>
				<a href="/Portfolio_server/framework/index.php/company/paycheck">급여확인</a>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">의사소통 <span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li class="dropdown-header">Dropdown heading</li>
					<li><a href="#">공지사항</a></li>
					<li><a href="#">의견있어요</a></li>
					<li><a href="/Portfolio_server/framework/index.php/company/photo">활동사진</a></li>
				</ul>
			</li>
			<li>
				<a href="/Portfolio_server/framework/index.php/company/reserve">회의실예약</a>
			</li>
			<?php
    if ( @$this -> session -> userdata('logged_in') == TRUE) {
//		$sql = return $this -> db -> query("select userid from kto_members where userid = 'admin3'");
//		if ( $sql == 'admin3') {
?>
			<li>
				<a href="/Portfolio_server/framework/index.php/company/member">인사관리(관리자권한)</a>
			</li>
			<?php
	} else {}  ?>			
			<li>
				<a href="/Portfolio_server/framework/index.php/company/contact">Contact</a>
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
							<li><a href="/Portfolio_server/framework/index.php/company/logout"><span class="glyphicon glyphicon-off"></span>Logout</a></li>
						</ul>
					</li>
<?php
    } else {
?>
			<li><a href="/Portfolio_server/framework/index.php/company/login_form">로그인</a></li>
			<?php
	}
					?>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
	</div>


</header>
<div class="main">
