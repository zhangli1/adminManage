<script type="text/javascript">
$(document).ready(function(){
	/* setup navigation, content boxes, etc... */
	Administry.setup();
	
	/* progress bar animations - setting initial values */
	Administry.progress("#progress1", 1, 6);
	
	// validate form on keyup and submit
	var validator = $("#sampleform").validate({
		rules: {
			firstname: "required",
			lastname: "required",
			username: {
				required: true,
				minlength: 2
			},
			password: {
				required: true,
				minlength: 5
			},
			password_confirm: {
				required: true,
				minlength: 5,
				equalTo: "#password"
			},
			real_name: {
				required: true,
				minlength: 3,
				equalTo: "#real_name"
			},
			email: {
				required: true,
				email: true
			},
			dateformat: "required",
			terms: "required"
		},
		messages: {
			firstname: "Enter your firstname",
			lastname: "Enter your lastname",
			username: {
				required: "Enter a username",
				minlength: jQuery.format("Enter at least {0} characters")
			},
			password: {
				required: "Provide a password",
				rangelength: jQuery.format("Enter at least {0} characters")
			},
			password_confirm: {
				required: "Repeat your password",
				minlength: jQuery.format("Enter at least {0} characters"),
				equalTo: "Enter the same password as above"
			},
			real_name: {
				required: "Enter  a real_name",
				minlength: jQuery.format("Enter at least {0} characters"),
			},
			email: {
				required: "Please enter a valid email address",
				minlength: "Please enter a valid email address"
			},
			dateformat: "Choose your preferred dateformat",
			terms: " "
		},
		// the errorPlacement has to take the layout into account
		errorPlacement: function(error, element) {
			error.insertAfter(element.parent().find('label:first'));
		},
		// specifying a submitHandler prevents the default submit, good for the demo
		submitHandler: function() {
			var username = $('#username').val();
			var password = $('#password').val();
			var password_confirm = $('#password_confirm').val();
			var real_name = $('#real_name').val();
			$.post("<?php echo Yii::app()->createUrl('/admin/addUser');?>", {"username":username,"password":password,"password_confirm":password_confirm,"real_name":real_name},function(data) {
				$('.box-info').html(data);
			});
	},
		// set new class to error-labels to indicate valid fields
		success: function(label) {
			// set &nbsp; as text for IE
			label.html("&nbsp;").addClass("ok");
		}
	});
	
	// propose username by combining first- and lastname
	$("#username").focus(function() {
		var firstname = $("#firstname").val();
		var lastname = $("#lastname").val();
		if(firstname && lastname && !this.value) {
			this.value = firstname + "." + lastname;
		}
	});

});
</script>
	
	
	<!-- Page content -->
	<div id="page">
		<!-- Wrapper -->
		<div class="wrapper">
				<!-- Left column/section -->
				<section class="column width6 first">					

					<h3>Form validation example</h3>
					<div class="box box-info">All fields are required</div>
					
					<form id="sampleform" method="post" action="">
						<?php
							if($this->getAction()->getId() === 'addUser'):
						?>
						<fieldset>
							<legend>JQuery Form Validation</legend>

							<p>
								<label class="required" for="username">Username:</label><br/>
								<input type="text" id="username" class="half" value="" name="username"/>
								<small>e.g. ui.templates</small>
							</p>
							
							<p>
								<label class="required" for="password">Password:</label><br/>
								<input type="password" id="password" class="half" value="" name="password"/>
							</p>

							<p>
								<label class="required" for="password_confirm">Confirm password:</label><br/>
								<input type="password" id="password_confirm" class="half" value="" name="password_confirm"/>
							</p>

							<p>
								<label class="required" for="real_name">real_name:</label><br/>
								<input type="text" id="real_name" class="half" value="" name="real_name"/>
							</p>
							<p>
								<input type="checkbox" id="terms" class="" value="1" name="terms"/>
								<label class="choice" for="terms">I have read and accept the Terms of Use.</label>
							</p>
							
							<p class="box"><input type="submit" class="btn btn-green big" value="Validate"/> or <input type="reset" class="btn" value="Reset"/></p>

						</fieldset>
					<?php else: ?>
						<fieldset>
							<legend>JQuery Form Validation</legend>

							<p>
								<label class="required" for="username">Username:</label><br/>
								<input type="text" id="username" class="half" value="" name="username"/>
								<small>e.g. ui.templates</small>
							</p>
							
							<p>
								<label class="required" for="password">Password:</label><br/>
								<input type="password" id="password" class="half" value="" name="password"/>
							</p>

							<p>
								<label class="required" for="real_name">real_name:</label><br/>
								<input type="text" id="real_name" class="half" value="" name="real_name"/>
							</p>
							<p>
								<input type="checkbox" id="terms" class="" value="1" name="terms"/>
								<label class="choice" for="terms">I have read and accept the Terms of Use.</label>
							</p>
							
							<p class="box"><input type="submit" class="btn btn-green big" value="Validate"/> or <input type="reset" class="btn" value="Reset"/></p>

						</fieldset>
					<?php endif; ?>

					</form>
				</section>
				<!-- End of Left column/section -->
				
				<!-- Right column/section -->
				<aside class="column width2">
					<div id="rightmenu">
						<header>
							<h3>You might also want to check out...</h3>
						</header>
						<dl class="first">
						<dt><img width="16" height="16" alt="Basic styles" SRC="<?php echo Yii::app()->baseUrl;?>/images/style.png"></dt>
							<dd><a HREF="styles.html">Basic styles</a></dd>
							<dd class="last">Basic elements and styles</dd>							
							
							<dt><img width="16" height="16" alt="Form validation" SRC="<?php echo Yii::app()->baseUrl;?>/images/book.png"></dt>
							<dd><a HREF="../../docs.jquery.com/Plugins/Validation">Form validation</a></dd>
							<dd class="last">jQuery form validation documentation</dd>							
						</dl>
					</div>
					<div class="content-box">
						<header>
							<h3>Quick info</h3>
						</header>
						<section>
							<q>A form is an area that can contain form elements.
							Form elements are elements that allow the user to enter information (like text fields, textarea fields, drop-down menus, radio buttons, checkboxes, etc.) in a form.
							A form is defined with the &lt;form&gt; tag.
							<cite>w3schools.com</cite></q>							
						</section>
					</div>
				</aside>
				<!-- End of Right column/section -->
				
		</div>
		<!-- End of Wrapper -->
	</div>
	<!-- End of Page content -->
	

