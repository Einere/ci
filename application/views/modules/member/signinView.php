<!DOCTYPE html>
<html>

<head>
	<title>Sign Up Page</title>
	<style>
		body {
			font-family: Arial, Helvetica, sans-serif;
		}

		/* The Modal (background) */

		.modal {
			display: none;
			/* Hidden by default */
			position: fixed;
			/* Stay in place */
			z-index: 1;
			/* Sit on top */
			padding-top: 100px;
			/* Location of the box */
			left: 0;
			top: 0;
			width: 100%;
			/* Full width */
			height: 100%;
			/* Full height */
			overflow: auto;
			/* Enable scroll if needed */
			background-color: rgb(0, 0, 0);
			/* Fallback color */
			background-color: rgba(0, 0, 0, 0.4);
			/* Black w/ opacity */
		}

		/* Modal Content */

		.modal-content {
			position: relative;
			background-color: #fefefe;
			margin: auto;
			padding: 0;
			border: 1px solid #888;
			width: 80%;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-webkit-animation-name: animatetop;
			-webkit-animation-duration: 0.4s;
			animation-name: animatetop;
			animation-duration: 0.4s
		}

		/* Add Animation */

		@-webkit-keyframes animatetop {
			from {
				top: -300px;
				opacity: 0
			}
			to {
				top: 0;
				opacity: 1
			}
		}

		@keyframes animatetop {
			from {
				top: -300px;
				opacity: 0
			}
			to {
				top: 0;
				opacity: 1
			}
		}

		/* The Close Button */

		.close {
			color: white;
			float: right;
			font-size: 28px;
			font-weight: bold;
		}

		.close:hover,
		.close:focus {
			color: #000;
			text-decoration: none;
			cursor: pointer;
		}

		.modal-header {
			padding: 2px 16px;
			background-color: #5cb85c;
			color: white;
		}

		.modal-body {
			padding: 2px 16px;
		}

		.modal-footer {
			padding: 2px 16px;
			background-color: #5cb85c;
			color: white;
		}

	</style>
</head>

<body>
	<!-- The Modal -->
	<div id="myModal" class="modal">

		<!-- Modal content -->
		<div class="modal-content">
			<div class="modal-header">
				<span class="close">&times;</span>
				<h2>Sigin in</h2>
			</div>
			<div class="modal-body">
				<p>Are you sure to sign in?</p>
			</div>
			<div class="modal-footer">
                <button id="trigger">yes</button>
			</div>
		</div>

	</div>

	<h1>Sign In</h1>

	<?php  
  
    echo form_open('modules/member/MemberController/signin_validation');  
  
    echo validation_errors();  
  
    echo "<p>ID : ";  
    echo form_input('memid');  
    echo "</p>";
  
    echo "<p>Password : ";  
    echo form_password('mempw');  
    echo "</p>";  
  
    echo "<p>Confirm Password : ";  
    echo form_password('memcpw');  
    echo "</p>";  
      
    echo "<p>First name : ";  
    echo form_input('memfirstname');  
    echo "</p>";
    
    echo "<p>Last name : ";  
    echo form_input('memlastname');  
    echo "</p>";

    echo "<p>Birth day : ";
    $membirth = array(
        'name'        => 'membirth',
        'maxlength'   => '8'
      );  
    echo form_input($membirth);
    echo "</p>";

    

    echo "<p>Address : ";  
    echo form_input('memaddr');  
    echo "</p>";
    
    echo "<p>Email : ";
    echo form_input('eemail');
    
    $eemail2 = array(
        'name'        => 'eemail2',
        'placeholder' => '추가입력(선택)'
      );
    echo form_input($eemail2);
    
    echo "</p>";


    echo "<p>Phone number : ";
    $phphonenum = array(
        'name'        => 'phphonenum',
        'maxlength'   => '11'
      );  
    echo form_input($phphonenum);

    $phphonenum2 = array(
        'name'        => 'phphonenum2',
        'placeholder' => '추가입력(선택)',
        'maxlength'   => '11'
      );
    echo form_input($phphonenum2);  
    echo "'-'없이 입력해주세요(ex.01011112222)";
    echo "</p>";
    

    echo "<p>Nick name : ";  
    echo form_input('memnickname');  
    echo "</p>";

    echo "<p>Agree : ";
    echo form_checkbox('memagree', 'Agree', false);
    echo "</p>";

    echo "<p>";  
    echo form_submit('signin_submit', 'Sign In');  
    echo "</p>";  
  
    echo form_close();  
    ?>
    <!-- Trigger/Open The Modal -->
    <p>
        <button id="myBtn">Sign in</button>
    </p>
    <!-- Back to List -->
    <a href='<?php echo base_url()."index.php/modules/member/MemberController/login"; ?>'>cancel</a>
    
	<script>
		// Get the modal
		var modal = document.getElementById('myModal');

		// Get the button that opens the modal
		var btn = document.getElementById("myBtn");

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

        //Get submit button
        let submit = document.getElementsByName('signin_submit')[0];
        submit.setAttribute('hidden', "true");
        //Get modal header
        let header = document.getElementsByClassName('modal-header')[0];

        //Get modal footer
        let footer = document.getElementsByClassName('modal-footer')[0];
        
        //Get trigger button
        let trigger = document.getElementById('trigger');

		// When the user clicks the button, open the modal 
		btn.onclick = function () {
			modal.style.display = "block";
		}

		// When the user clicks on <span> (x), close the modal
		span.onclick = function () {
			modal.style.display = "none";
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function (event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
        
        //add event listener to trigger button
        trigger.addEventListener('click', function(e){
            submit.click();
        });
	</script>
</body>

</html>
