<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

	<!-- STYLES -->

	<style {csp-style-nonce}>
	@import url('https://fonts.googleapis.com/css?family=Montserrat:400,500&display=swap');

.errors li{
  color: #f8f8f8;
    padding: 10px;
    background-color: red;
    border-radius: 7px;
    font-size: 20px;
}
body {
  font-family: Montserrat,Arial, Helvetica, sans-serif;
  background-color:#f7f7f7;
}
* {box-sizing: border-box}

/* Add padding to container elements */
.container {
    padding: 20px;
      width:500px;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
      border:1px solid #ccc;
      border-radius:10px;
      background:white;
  -webkit-box-shadow: 2px 1px 21px -9px rgba(0,0,0,0.38);
  -moz-box-shadow: 2px 1px 21px -9px rgba(0,0,0,0.38);
  box-shadow: 2px 1px 21px -9px rgba(0,0,0,0.38);
  }

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f7f7f7;
  font-family: Montserrat,Arial, Helvetica, sans-serif;
}
select {
  width: 18%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f7f7f7;
  font-family: Montserrat,Arial, Helvetica, sans-serif;
}

input[type=phone] {
  width: 81%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f7f7f7;
}

input[type=text]:focus, input[type=password]:focus, input[type=phone]:focus, select:focus {
  background-color: #ddd;
  outline: none;
}



/* Set a style for all buttons */
button {
  background-color: #0eb7f4;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  font-size:16px;
  font-family: Montserrat,Arial, Helvetica, sans-serif;
  border-radius:10px;
}

button:hover {
  opacity:1;
}


/* Change styles for signup button on extra small screens */
@media screen and (max-width: 300px) {
  .signupbtn {
     width: 100%;
  }
}

.youtubeBtn{
    position: fixed;
    right: 20px;
  transform:translatex(-50%);
    top: 20px;
    cursor: pointer;
    transition: all .3s;
    vertical-align: middle;
    text-align: center;
    display: inline-block;
  background:#000;
  padding:2px 10px;
  border-radius:5px;
}
.youtubeBtn i{
   font-size:20px;
  float:left;
}
.youtubeBtn a{
    color:#ff0000;
    animation: youtubeAnim 1000ms linear infinite;
  float:right;
}
.youtubeBtn a:hover{
  color:#c9110f;
  transition:all .3s ease-in-out;
}
.youtubeBtn i:active{
  transform:scale(.9);
  transition:all .3s ease-in-out;
}
.youtubeBtn span{
    font-family: 'Lato';
    font-weight: bold;
    color: #fff;
    display: block;
    font-size: 12px;
    float: right;
    line-height: 20px;
    padding-left: 5px;
  
}

@keyframes youtubeAnim{
  0%,100%{
    color:#c9110f;
  }
  50%{
    color:#ff0000;
  }
}
	</style>
</head>
<body>

<!-- CONTENT -->

<section>

	   <form action="<?php echo base_url('sign_up'); ?>" method="post"  accept-charset="utf-8" enctype="multipart/form-data">
        <div class="container">
          <h1>Sign Up</h1>
          <p>Please fill in this form to create an account.</p>
          <?php if(isset($validation)):?>
        <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
<?php endif;?>
      
          <label for="email"><b>firstname</b></label>
            <input type="text" name="firstname"   placeholder="Enter Firstnama" required>
          <label for="email"><b>lastname</b></label>
            <input type="text" name="lastname"   placeholder="Enter Lastname" required>
          <label for="email"><b>address</b></label>
            <input type="text" name="address"   placeholder="Enter address" required>
          <label for="email"><b>Email</b></label>
            <input type="text"   placeholder="Enter Email" name="email" required>
          
          <label for="psw"><b>Password</b></label>
            <input type="password"   placeholder="Enter Password" name="password" required>
      
                
      
          <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
      
          <div class="clearfix">
      
            <button type="submit" class="btn">Sign Up</button>
          </div>
        </div>
      </form>
</section>


<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->


<!-- SCRIPTS -->

<script>
	function toggleMenu() {
		var menuItems = document.getElementsByClassName('menu-item');
		for (var i = 0; i < menuItems.length; i++) {
			var menuItem = menuItems[i];
			menuItem.classList.toggle("hidden");
		}
	}
</script>

<!-- -->

</body>
</html>