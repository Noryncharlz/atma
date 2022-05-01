<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to ATMA</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!-- STYLES -->

	<style {csp-style-nonce}>
		@import url('https://fonts.googleapis.com/css?family=Roboto+Slab:400,700|Roboto:300,400,400i,500,700');

/* font-family: 'Roboto', sans-serif;
font-family: 'Roboto Slab', serif; */

/* 
℘ąŋƙąʝ ɖɧıɱąŋ
*/

body {
    background: #fff;
    color: #414141;
    font-family: 'Roboto', sans-serif;
    font-size: 16px;
    overflow-x: hidden;
    -webkit-text-stroke: rgba(255, 255, 255, 0.01) 0.1px;
    -webkit-font-smoothing: antialiased !important;
}

background-image {
  
}

a {
    text-decoration: none;
    -ms-transition: all 0.3s ease-in;
    -webkit-transition: all 0.3s ease-in;
    transition: all 0.3s ease-in;
}

a:hover,
a:focus,
a:active {
    outline: medium none;
    text-decoration: none;
}

*:focus {
    outline: none;
}

img {
    max-width: 100%, height: auto;
}

strong,
b {
    font-weight: 700;
}

i,
em {
    font-style: italic;
}

.clear {
    border: 0;
    clear: both;
    height: 0;
}

h1,
h2,
h3,
h4,
h5,
h6,
p {
    font-weight: normal;
    margin: 0;
}

input,
textarea {
    -webkit-appearance: none;
    border-radius: 0;
}

html,
body {
    height: 100%;
}

/**** NAV ****/
nav.navbar-default {
    background-color: rgba(0, 0, 0, 0.28);
    border-color: rgba(0, 0, 0, 0.05);
    -ms-transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

nav.navbar-default.affix {
    background-color:#222;
    -ms-transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

nav.navbar-default .navbar-brand {
    color: #fff;
    font-size: 24px;
    text-transform: uppercase;
    font-family: 'Roboto', sans-serif;
}

nav.navbar-default .navbar-brand:focus, nav.navbar-default .navbar-brand:hover {
    color: #fff !important;
    background-color: transparent;
}

nav.navbar-default .navbar-nav>li>a{
  color:#fff;
  font-family: 'Roboto', sans-serif;
  font-size: 16px;
  text-transform: uppercase;
}

nav.navbar-default .navbar-nav>li>a:focus,
nav.navbar-default .navbar-nav>li>a:hover {
    color: #F05F40;
    background-color: transparent;
}

nav.navbar-default .navbar-nav li a.active,
nav.navbar-default .navbar-nav li a.active:focus,
nav.navbar-default .navbar-nav li a.active:hover {
    color: #F05F40;
    background-color: transparent;
}


/**** NAV END ****/
/**** HEADER ****/
header {
    min-height: 100%;
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
}

header:after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.3);
    z-index: 0;
}

header,
header .header-content {
    position: relative;
    width: 100%;
    text-align: center;
}

header .header-content {
    position: absolute;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    padding: 0 50px;
    z-index: 10;
}

header .header-content .header-content-inner {
    width: 100%;
    max-width: 1000px;
    margin: 0 auto;
    text-shadow: 2px 3px 6px rgba(0, 0, 0, 0.41);
}

h1, h2, h3, h4 {
    font-family: 'Roboto Slab', serif;
}

.header-content-inner h1 {
    font-size: 48px;
    margin-bottom: 30px;
    text-transform: uppercase;
    color: #fff;
    letter-spacing: 0.05em;
}

.header-content-inner h1:after {
    content: "";
    display: block;
    width: 80px;
    height: 3px;
    margin: 20px auto 0;
    background: #F05F40;
}

.header-content-inner p {
    font-size: 22px;
    line-height: 1.8;
    color: #e4e4e4;
}

.bg-color{
    background:#0eb7f4;
}

section{
    padding: 80px 0;
    position: relative;
    text-align: center;
}

.about-section h3{
    font-size: 36px;
    margin-bottom: 20px;
    text-transform: uppercase;
    color: #fff;
    letter-spacing: 0.05em;
}

.about-section h3:after {
    content: "";
    display: block;
    width: 80px;
    height: 3px;
    margin: 20px auto 0;
    background:#c34d34;
}

.about-section p{
    font-size: 18px;
    line-height: 1.8;
    color: #fff;
    margin-bottom: 15px;
}

.btn-default-new{
    background: #c34d34;
    border-radius: 30px;
    border: solid 3px #c34d34;
    color: #ffffff;
    font-size: 18px;
    text-transform: capitalize;
    font-family: 'Roboto', sans-serif;
    padding: 0 25px;
    line-height: 3.1;
    margin-top: 30px;
    letter-spacing: 0.05em;
    -ms-transition: all 0.6s ease-in-out;
    -webkit-transition: all 0.6s ease-in-out;
    transition: all 0.6s ease-in-out;
}

.btn-default-new:hover, .btn-default-new:focus{
    background: #fff;
    color: #c34d34;
    border-color: #c34d34;
}
/**** ABOUT END ****/
/**** SERVICE ****/

.service-section h3{
    font-size: 36px;
    margin-bottom: 30px;
    text-transform: uppercase;
    color: #222;
    letter-spacing: 0.05em;
}

.service-section h3:after {
    content: "";
    display: block;
    width: 80px;
    height: 3px;
    margin: 20px auto 0;
    background:#F05F40;
}

.service-items .icon{
    color: #F05F40;
    font-size: 36px;
    display: block;
    width: 100px;
    height: 100px;
    text-align: center;
    border-radius: 100%;
    border: solid 2px #F05F40;
    margin: 0 auto 30px;
    line-height: 98px;
}

.service-items h4{
    font-size: 22px;
    margin-bottom: 20px;
    text-transform: capitalize;
    color: #F05F40;
    
}

.service-items h4 a{
    color: #222;
}

.service-items h4 a:hover{
    color: #F05F40;
}

.service-items p{
    font-size: 16px;
    line-height: 1.6;
    color: #414141;
    margin-bottom: 15px;
}

/**** SERVICE END ****/
/**** PORTFOLIO ****/


	</style>
</head>
<body data-spy="scroll" data-target="#myScrollspy">
    <nav class="navbar navbar-default navbar-fixed-top" data-spy="affix" data-offset-top="205">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="#">ATMA</a> </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo base_url('register'); ?>">Register Here</a></li>
                    <li><a href="<?php echo base_url('welcome_message'); ?>">Login</a></li>
                    <li><a href="#portfolio">View Charts</a></li>
          
                </ul>
            </div>
        </div>
    </nav>
    
        <div class="header-content">
            
        </div>
    </header>
    <section class="about-section bg-color" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                    <h3>ATMA</h3>
                    <p>Welcome to ATMA for All Software and Electronics Solutions.</p>
                    </div>
            </div>
        </div>
    </section>
  
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<!-- SCRIPTS -->

<script>
	 $(document).ready(function () {
            $(document).on("scroll", onScroll);
            //smoothscroll
            $('.navbar-nav li a[href^="#"]').on('click', function (e) {
                e.preventDefault();
                $(document).off("scroll");
                $('.navbar-nav li a').each(function () {
                    $(this).removeClass('active');
                })
                $(this).addClass('active');
                var target = this.hash
                    , menu = target;
                target = $(target);
                $('html, body').stop().animate({
                    'scrollTop': target.offset().top + 2
                }, 1000, 'swing', function () {
                    window.location.hash = target;
                    $(document).on("scroll", onScroll);
                });
            });
        });

        function onScroll(event) {
            var scrollPos = $(document).scrollTop();
            $('.navbar-nav li a').each(function () {
                var currLink = $(this);
                var refElement = $(currLink.attr("href"));
                if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                    $('.navbar-nav li a').removeClass("active");
                    currLink.addClass("active");
                }
                else {
                    currLink.removeClass("active");
                }
            });
        }
</script>

<!-- -->

</body>
</html>
