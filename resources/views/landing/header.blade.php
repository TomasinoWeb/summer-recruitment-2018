<header class="masthead d-flex">
	<div class="video-container">
		<video playsinline autoplay muted loop id="bgVideo">
    		<source src="/img/seq.webm" type="video/webm">
		</video>
	</div>
	<div class="container my-auto">
		<div class="row mobile-center">.
			<div class="col-md-7 mx-auto my-auto pb-5 col-12 mobile-px" data-aos="fade-right">
				<img src="/img/logo.png" class="img-thumbnail mb-5 bg-transparent" alt="TomasinoWeb Logo">
				<h1 class="mb-3 text-light">LEAD THE WEB</h1>
				<h3 class="mb-5 text-light h3-line-height">
					Be part of UST's leading digital media organization and help tell
					new stories and create new experiences for the Thomasian community.
				</h3>
				<a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
			</div>
			<div class="col-md-4 my-auto card py-3 mobile-px" data-aos="fade-up">
				<form method="POST" action="/join">
					{{ csrf_field() }}

					<div class="card-body">
						<h5 class="card-title text-light">
							Join us today!
						</h5>

						@include ('main.errors')

						<div class="form-group">
					    	<input type="text" class="form-control" id="name" name="name" placeholder="Full name" required>
					  	</div>
					  	<div class="form-group">
					    	<input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
					  	</div>
					  	<div class="form-group">
					    	<input type="number" class="form-control" id="studentNo" name="studentNo" placeholder="Student Number" required>
					  	</div>
					  	<div class="form-group">
					    	<input type="number" class="form-control" id="contactNo" name="contactNo" placeholder="Contact Number (ex. 9271234567)" required>
					  	</div>
					  	<div class="form-group">
					    	<select class="form-control" id="college" name="college" required>
							  	<option disabled selected value>Your college</option>
							  	<option>AMV College of Accountancy</option>
							  	<option>College of Architecture</option>
							  	<option>College of Commerce and Business Administration </option>
							  	<option>College of Education</option>
							  	<option>College of Fine Arts and Design</option>
							  	<option>College of Nursing</option>
							  	<option>College of Science</option>
							  	<option>College of Tourism and Hospitality Management</option>
							  	<option>College of Rehabiliation Sciences</option>
							  	<option>Faculty of Arts and Letters</option>
							  	<option>Faculty of Canon Law</option>
							  	<option>Faculty of Engineering</option>
							  	<option>Faculty of Pharmacy</option>
							  	<option>Faculty of Philosophy</option>
							  	<option>Institute of Information and Computing Sciences</option>
							  	<option>Institute of Physical Education and Athletics</option>
							</select>
					  	</div>
					  	<div class="form-group">
					    	<select class="form-control" id="firstChoice" name="firstChoice" required>
							  	<option disabled selected value>First choice of department</option>
							  	<option>Writing</option>
							  	<option>Photography</option>
							  	<option>Creatives</option>
							  	<option>Videography</option>
							  	<option>Web Technologies</option>
							  	<option>Special Projects</option>
							  	<option>Secretariat</option>
							  	<option>Finance</option>
							  	<option>Publicity & Communications</option>
							  	<option>Community Development</option>
							  	<option>Human Resources</option>
							  	<option>External Affairs</option>
							  	<option>Research & Development</option>
							</select>
					  	</div>
					  	<div class="form-group">
					    	<select class="form-control" id="secondChoice" name="secondChoice" required>
							  	<option disabled selected value>Second choice of department</option>
							  	<option>Writing</option>
							  	<option>Photography</option>
							  	<option>Creatives</option>
							  	<option>Videography</option>
							  	<option>Web Technologies</option>
							  	<option>Special Projects</option>
							  	<option>Secretariat</option>
							  	<option>Finance</option>
							  	<option>Publicity & Communications</option>
							  	<option>Community Development</option>
							  	<option>Human Resources</option>
							  	<option>External Affairs</option>
							  	<option>Research & Development</option>
							</select>
					  	</div>
					  	<div class="form-group mb-4">
							<input type="text" class="form-control" id="facebookLink" name="facebookLink" placeholder="Facebook Link (ex. /juandelacruz)" required>
					  	</div>
					  	<button type="submit" class="btn btn-primary px-4 py-2">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</header>
