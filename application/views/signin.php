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
    
    $eemail2 = array(
        'name'        => 'eemail2',
        'placeholder' => '추가입력(선택)'
      );
    echo form_input($eemail2);
    
    echo "</p>";


    echo "<p>Phone number : ";  
    echo form_input('phphonenum');
    $phphonenum2 = array(
        'name'        => 'phphonenum2',
        'placeholder' => '추가입력(선택)'
      );
    echo form_input($phphonenum2);  
    echo "'-'없이 입력해주세요(ex.01011112222)";
    echo "</p>";
    

    echo "<p>Nick name : ";  
    echo form_input('memnickname');  
    echo "</p>";

    echo "<p>";  
    echo form_submit('signin_submit', 'Sign In');  
    echo "</p>";  
  
    echo form_close();  
    ?>  
    <a href='<?php echo base_url()."index.php/Main/login"; ?>'>cancel</a>
</body>  
</html>  