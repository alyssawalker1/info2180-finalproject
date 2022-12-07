<?php session_start();
	//require_once("");
	//require_once("");

    function validating($phone){
    if(preg_match('/^[0-9]{10}+$/', $phone)) {
    echo " Valid Phone Number";
    } else {
    echo " Invalid Phone Number";
    }
    }

	if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['telephone']) && isset($_POST['company']) && isset($_POST['type']) && isset($_POST['assigned_to']) ){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$telephone = $_POST['telephone'];
		$email = $_POST['email'];
        $company =$_POST['company'];
        $type = $_POST['type'];
		$assigned_to = $_POST['assigned_to'];


    $conn = new mysqli($firstname, $lastname, $email, $telephone, $company, $type, $assigned_to);
    
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    if ($conn->query($shema.sql) === TRUE) {
      echo "New contact added successfully";
    } else {
      echo "Error adding contact " . $conn->error;
    }
	}
        
        
?>


<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="newcontactstyle.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
      <header>
    <img class="dolphin" src="dolphin.png" ALIGN="center" width="28" height="20" />
    <div class="header1">Dolphin CRM</div>
</header>  
      <div class="wrapper">
      <div class="options">
					<div><a href="home.html"><i class="fa fa-home" aria-hidden="true"></i>Home</a></div>
                    
					<div><a href="newcontact.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i>New Contact</a></div>
                    <div><a href="users.html"><i class="fa fa-users" aria-hidden="true"></i>Users</a></div>
					<hr>
					<div><a href="loginpage.html"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></div>
				</div>
      
    <div class="formdiv">
    <div class="title"><h1>New Contact</h1>
    <div class="content">
      <form method="post">
        <div class="user-details">
          
              <div class="titlebox">
              <label for="title">Title</label><br>
								<select id="title" name="title">
									<option value="Mr.">Mr</option>
									<option value="Mrs.">Mrs</option>
									<option value="Ms.">Ms</option>
								</select>
              </div>
            <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" name="firstname" id="firstname" required/>
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" name="lastname" id="lastname" required/>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="something@example.com" required>
          </div>
          <div class="input-box">
            <span class="details">Telephone</span>
            <input type="text" name="telephone" id="telephone" required/>
          </div>
          <div class="input-box">
            <span class="details">Company</span>
            <input type="text" name="company" id="company" required/>
          </div>
            <div class="input-box">	
								<label for="title">Type</label><br>
								<select id="title" name="title">
									<option value="Mr.">Sales Lead</option>
									<option value="Mrs.">Support</option>
								</select>
							</div>
            
          <div class="input-box">
								<label for="assigned-to">Assigned To</label><br>
								<select id="assigned-to" name="assigned-to">
									<option value="Rayon Hart">Rayon Hart</option>
									<option value="Alyssa Walker">Alyssa Walker</option>
									<option value="Shantae Saddler">Shantae Saddler</option>
									<option value="Tahj Clarke">Tahj Clarke</option>
									<option value="Chavoun Miller">Chavoun Miller</option>
								</select>
							</div><br>
            <div class="button">
          <input type="submit" value="Save">
        </div>
        </div>
    </div>
    
    
      </form>
    </div> 
  </div>
      </div>
</body>
</html>
