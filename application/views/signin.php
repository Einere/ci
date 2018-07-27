<!DOCTYPE html>  
<html>  
<head>  
    <title>Sign Up Page</title>  
</head>  
<body>  
    <h1>Sign In</h1>  
  
    <?php  
  
    echo form_open('Main/signin_validation');  
  
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
    echo form_input('membirth');  
    echo "</p>";

    

    echo "<p>Address : ";  
    echo form_input('memaddr');  
    echo "</p>";
    
    echo "<p>Email : ";
    echo form_input('eemail');
    echo "</p>";
    ?>
    <div id="divAddEmail"></div>
    <button id="btnAddEmail" type="button" >add email</button> 
    <?php
    echo "<p>Phone number : ";  
    echo form_input('phphonenum');  
    echo "</p>";
    
    ?>
    <div id="divAddPhone"></div>
    <button id="btnAddPhone" type="button" >add phone</button> 
    <?php
    echo "<script> your javascript code </script>";

    echo "<p>Nick name : ";  
    echo form_input('memnickname');  
    echo "</p>";

    echo "<p>";  
    echo form_submit('signin_submit', 'Sign In');  
    echo "</p>";  
  
    echo form_close();  
    echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/js-url/2.5.3/url.js\"></script>
    <script type=\"text/javascript\">
        let btnEmail = document.getElementById('btnAddEmail');
        let divEmail = document.getElementById('divAddEmail');
        let btnPhone = document.getElementById('btnAddPhone');
        let divPhone = document.getElementById('divAddPhone');

        btnEmail.addEventListener('click', function(e){
            e.preventDefault();
            let label = document.createElement('label');
            label.innerText = 'email1 : ';
            divEmail.appendChild(label);

            let input = document.createElement('input');
            input.type = 'text';
            input.name = 'eemail1';
            divEmail.appendChild(input);
        });

        btnPhone.addEventListener('click', function(e){
            e.preventDefault();
            let label = document.createElement('label');
            label.innerText = 'phone1 : ';
            divPhone.appendChild(label);

            let input = document.createElement('input');
            input.type = 'text';
            input.name = 'eemail1';
            divPhone.appendChild(input);
        });
    </script>";
    ?>  
    <a href='<?php echo base_url()."index.php/Main/login"; ?>'>cancel</a>
    
</body>  
</html>  