<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to ATMA</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

	<!-- STYLES -->

	<style {csp-style-nonce}>
		@import url('https://fonts.googleapis.com/css2?family=Inter:wght@200;700&family=Poppins&display=swap');

section{
	display: flex;
    flex-direction: column;
    align-content: center;
    justify-content: center;
    align-items: center;
}
h1
{
  text-align:center;
  padding: 0;
  margin:0;
  text-align: center;
}

label
{
  background-color: rgb;
  padding: 2px;
  
}

body
{
  margin: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color: #0eb7f4;
  font-family: 'Inter';
}


#window
{
  background-color: white;
  padding: 6rem 5rem 6rem 5rem;
  border-radius: 6px;
  width: 400px;
  min-width: 20px;
  box-shadow: 5px 5px 15px black;
}

#LoginBtn
{
  width: 100%;
  padding: .5rem;
  background-color: #0eb7f4;
  color: white;
  font-size: 1rem;
  cursor:pointer;
  font-weight: 600;
  border: solid black 2px;
  font-family: 'Inter';
  border-radius: 1.5px;
  transition: .4s;
  
 }

#LoginBtn:hover
{
  color: black;
  background-color: white;
  border: solid black 2px;
  background-color: rgba(156, 156, 156, 0.24);
}

input
{
 width: 100%;
    border: none;
    border: black solid 1px;
    font-size: 1.1rem;
    /* padding: 0; */
    height: 60px;
    font-size: 22px !important;
    border-radius: 8PX;
    padding-left: 4px;
    background: white;
}


input:focus
{
  background-color: rgba(156, 156, 156, 0.12);
  border-bottom: black solid 1px;
}

*:focus
{
  outline: none;
  border: none;
}

.data
{
  padding: 0;
  width: 100%;
}

a {
  text-align: center;
  font-family: monospace;
  font-size: 1rem;
}
.success{
	color: white;
    background: green;
    padding: 10px;
    margin: 10px;
    font-size: 20px;
}
}

	</style>

</head>
<body>

<!-- CONTENT -->

<section>
<?php if(session()->getFlashdata('success_response')):?>
                    <div class="success"><?= session()->getFlashdata('success_response') ?></div>
<?php endif;?>
<?php if(session()->getFlashdata('msg')):?>
                    <div class="success"><?= session()->getFlashdata('msg') ?></div>
<?php endif;?>

 <div id="window">
  <h1>ATMA  Login </h1>
   <br>
   <br>
   <br>
   <form action="<?php echo base_url('sign_in'); ?>" method="post"  accept-charset="utf-8" enctype="multipart/form-data">
   	
  
  <div class="data"> 
  
  	<label for="username">
    <br>
    	<input id="email" type="text" name="email" placeholder="email">
  	</label>
   <br>
   <br>
   <br>

   <label for="user-pin">
    <br>
    	<input type="password" id="user-pin" name="password" placeholder="Password">
     <br>
     <br>
     <br>

     <button id="LoginBtn" type="submit"> Login </button>
     
     <br>
     <br>
     <br>
 </form>
     <div style="text-align: center;">
      <a href="<?php echo base_url('register'); ?>"> Not registered?  Register here</a>
     </div>

    </label>
   </div>
   
   
  </div>

</section>

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
