
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'head.php' ?>
	<script type="text/javascript" src="js/template2.js"></script>
</head>

<body class="site com_content view-featured no-layout no-task itemid-101 page-home">
<div id="main-wrap" class="collapsed">

	<?php include 'header.php' ?>
	<div class="body">
		<div class="banner-inner" >
			<div class="container banner-inner__text text-left text-uppercase">
				<h1 class="banner-inner__title">about shindiawa</h1>
			</div>
		</div>

		<div class="container-fluid breadcrumb-wrap hidden-xs clearfix">
			<div class="container">
				<ul class="breadcrumb">
					<li>
						<a href="">Home</a>
					</li>
					<li>
						<a href="">About Shindaiwa</a>
					</li>
					<li>
						<a href="">Contact Us</a>
					</li>
					<li>
						Newsletter Signup
					</li>
				</ul>
			</div>
		</div>

		<div id="content-container">
			<main id="content">

				<div class=" about-us clearfix">
					<div class="container">
						<div class="row">
							<div class="col-md-3 hidden-sm hidden-xs">
								<div class="about-aside">
									<h3 class="about-aside__tit">about shindaiwa</h3>
									<ul class="about-aside__list">
										<li><a href="">About Us</a></li>
										<li><a href="">News & Events</a></li>
										<li><a href="">Testimonials</a></li>
										<li><a href="">Press Releases</a></li>
										<li class="active">
											<a href="">Contact Us</a>
											<ul class="about-aside__sublist">
												<li class="active"><a href="">Newsletter Signup</a></li>
											</ul>
										</li>
										<li><a href="">Video Library</a></li>
										<li><a href="">Distributor Network</a></li>
									</ul>
								</div>
							</div>
							<div class="contact col-md-9">
								<h2 class="contact__title">
									Newsletter Signup
								</h2>
								<div class="contact__prev-text">
									<p class="contact__text"><b>Sign up to receive the occasional Shindaiwa Newsletter for important news, events and special offers. We will never sell your information to anyone and you can always unsubscribe later.
									<a href="">Privacy Policy</a></b>0</p>
								</div>
								<div class="contact__form-block">
									<from>
										<div class="contact__headline clearfix">
											<h3 class="tit">Shindaiwa Newsletter</h3>
											<div class="required-info"><span class="ico_required">*</span> indicates required</div>
										</div>
										<div class="row">
											<div class="form-group col-sm-6 col-md-4">
												<label for="emailAddress">Email Address<span class="ico_required">*</span></label>
												<input type="email" class="field" name="emailAddress"  value="" placeholder="">
											</div>
											<div class="form-group col-sm-6 col-md-4">
												<label for="firstName">First Name<span class="ico_required">*</span></label>
												<input type="text" class="field" name="firstName" required value="" placeholder="">
											</div>
											<div class="form-group col-sm-6 col-md-4">
												<label for="LastName">Last Name<span class="ico_required">*</span></label>
												<input type="text" class="field" name="LastName" required value="" placeholder="">
											</div>
											<div class="form-group col-sm-6 col-md-4">
												<label for="sityRow">City<span class="ico_required">*</span></label>
												<input type="text" class="field" name="sityRow" required value="" placeholder="">
											</div>
											<div class="form-group col-sm-6 col-md-4">
												<label for="stateRow">State<span class="ico_required">*</span></label>
												<select class="styler" name="sityRow" required placeholder="Select">
													<option value="0">State 1</option>
													<option value="1">State 2</option>
													<option value="2">State 3</option>
													<option value="3">State 4</option>
												</select>
											</div>
											<div class="form-group col-sm-6 col-md-4">
												<label for="companyRow">Company</label>
												<input type="text" class="field" name="companyRow"  value="" placeholder="">
											</div>
										</div>
										<div class="radio-group">
											<h4 class="radio-group__tit">Please select your primary use of Shindiawa Equipment:</h4>
											<div class="row">
												<div class="item-radio col-sm-6">
													<label class="radio_item">
														<input type="radio" class="radio_inp" name="equipment">
														<span class="radio_ico"></span>
														<span class="txt">Consumer</span>
													</label>
												</div>
												<div class="item-radio col-sm-6">
													<label class="radio_item">
														<input type="radio" class="radio_inp" name="equipment">
														<span class="radio_ico"></span>
														<span class="txt">Landscaper</span>
													</label>
												</div>
												<div class="item-radio col-sm-6">
													<label class="radio_item">
														<input type="radio" class="radio_inp" name="equipment">
														<span class="radio_ico"></span>
														<span class="txt">Golf Course</span>
													</label>
												</div>
												<div class="item-radio col-sm-6">
													<label class="radio_item">
														<input type="radio" class="radio_inp" name="equipment">
														<span class="radio_ico"></span>
														<span class="txt">Parks and Recreation</span>
													</label>
												</div>
												<div class="item-radio col-sm-6">
													<label class="radio_item">
														<input type="radio" class="radio_inp" name="equipment">
														<span class="radio_ico"></span>
														<span class="txt">Arborist</span>
													</label>
												</div>
											</div>
										</div>
										<div class="btn-row text-center">
											<input type="submit" class="btn btn-red" value="sign me up!">
										</div>
									</from>
								</div>
							</div>
						</div>
					</div>
				</div>

			</main>
		</div>

	</div>
	<?php include 'footer.php' ?>
</div>
</body>
</html>
