
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
				<h1 class="banner-inner__title">about shindaiwa</h1>
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
						<a href="">Testimonials</a>
					</li>
					<li>
						Testimonial Form
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
										<li class="active"><a href="">Testimonials</a></li>
										<li><a href="">Press Releases</a></li>
										<li>
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
								<h2 class="contact__title about">
									Testimonial Form
								</h2>
								<div class="contact__prev-text">
									<p class="contact__text"><b>Shindaiwa is proud of the durability built into every one of our products and we would be grateful to hear about the Shindaiwa product you own.</b> If you would like to submit a testimonial, please fill in the form below and be sure to include the type of equipment you are using.  We will only use your testimonial in a positive manner and will never sell your name, email or contact information. If we use your testimonial, you will only be identified by your first name, location and company. Your email address will remain confidential.</p>
								</div>
								<div class="contact__form-block">
									<form>
										<div class="contact__headline clearfix">
											<h3 class="tit pull-left">testimonial</h3>
											<div class="required-info pull-right"><span class="ico_required">*</span> indicates required</div>
										</div>
										<div class="row">
											<div class="form-group col-sm-6 col-md-4">
												<label for="firstName">First Name<span class="ico_required">*</span></label>
												<input type="text" class="field" name="firstName" required value="" placeholder="">
											</div>
											<div class="form-group col-sm-6 col-md-4">
												<label for="LastName">Last Name<span class="ico_required">*</span></label>
												<input type="text" class="field" name="LastName" required value="" placeholder="">
											</div>
											<div class="form-group col-sm-6 col-md-4">
												<label for="emailAddress">Email<span class="ico_required">*</span></label>
												<input type="email" class="field" name="emailAddress"  value="" placeholder="">
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
										<div class="radio-group radio-group-inline">
											<h4 class="radio-group__tit">Type of User:</h4>
											<div class="row ">
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
											</div>
										</div>
										<div class="form-group form-group-textarea">
											<label for="testimonial">Testimonial<span class="ico_required">*</span></label>
											<textarea class="field" name="testimonial" required placeholder=""></textarea>
										</div>
										<div class="form-group form-group-file clearfix">
											<div class="form-group__tit">Upload a Photo</div>
											<div class="row">
												<div class="col-sm-6">
													<label class="file_upload" for="file_upload">
														<span class="btn_file">Browse..</span>
														<input type="file" class="inp_upl_file">
													</label>
												</div>
												<div class="col-sm-6">
													<mark class="files_upload_cnt">No file selected.</mark>
												</div>
											</div>
										</div>
										<div class="checkbox-group ">
											<div class="item-checkbox ">
												<label class="checkbox_item bold_txt">
													<input type="checkbox" class="checkbox_inp" >
													<span class="checkbox_ico"></span>
													<span class="txt">By clicking, you agree to the Testimonial Release Form</span>
												</label>
												<p class="agree_txt">I grant ECHO Incorporated, its assigns and successors, the absolute authority and permission to copyright and/or publish my testimonial along with my photographic likeness in perpetuity for its use in all written and/or electronic properties. This includes but is not limited to ECHO web sites, product catalogs, print or electronic advertisements, product specification sheets, point-of-purchase materials, and press releases.</p>
											</div>
										</div>
										<div class="btn-row text-center">
											<input type="submit" class="btn btn-red" value="submit testimonial">
										</div>
									</form>
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
