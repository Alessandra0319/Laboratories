<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: #ecacb6;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 25px;
  background-color: white;
  width: 30%;
  height: 50%;
  border-radius: 10px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 10px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: 2px solid #e17a89;
  border-radius: 5px;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: white;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #e17a89;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 60%;
  opacity: 0.9;
  border-radius: 5px;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<center>
  <h1>Castillas, Alessandra G.  BSIT 4-1</h1>
</center>
<center>
<form action="/action_page.php">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>Name:</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name" required>

    <label for="birthday"><b>Birthday:</b></label><br><br>
    <input type="date" id="birthday" name="birthday"> <br><br>

    <label for="sex"><b>Sex</b></label> <br>
    
    <input type="radio" name="sex" value="female" required> Female
    <input type="radio" name="sex" value="male" required> Male
    <input type="radio" name="sex" value="others" required> Others

<br><br>
    <label for="address"><b>Address:</b></label>
    <input type="text" placeholder="Enter Address" name="address" id="address" required>
<h2>Contact Info</h2>

    <label for="phone number"><b>Contact Number: </b></label>
    <input type="text" placeholder="Enter conract number" name="contact number" id="contact number" pattern="[0-9] {4}- [0-9] {3} [0-9] {4}" required>

    <label for="secondary number"><b>Secondary Phone: </b></label>
    <input type="text" placeholder="Enter conract number" name="contact number" id="contact number" required>

    <label for="email"><b>Email:</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="secondary email"><b>Secondary Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for=""><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    

    
    <hr>
   

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  
  </div>
</form>


</body>
</html>
