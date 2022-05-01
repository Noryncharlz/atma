<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Welcome to ATMA</title>
      <meta name="description" content="The small framework with powerful features">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script type="text/javascript" src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
   <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
   <script src="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js"></script>
      <!-- STYLES -->
      <style {csp-style-nonce}>
         @import url("https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700&subset=latin-ext");
         html, body {
         height: 100%;
         width: 100%;
         }
         .wrapper{
  background-color: #a9e5e5;
   padding-right: 1em;
   padding-left: 1em;
}

header{
   height: 64px;
   color:#fff;
   text-align: center;
   background: linear-gradient(to right, #ff9966, #ff5e62);
}

header h2{
   font-size: 1.8em;
   margin-top: 0;
   padding-top: .8em;
}

.wrapper{
   width: 90%;
   margin: 0 auto;
   padding-bottom: 0;
}

.info{
   text-align: center;
}

.info h3, fieldset legend{
/*    color: #444444; */
}

.info h3{
   margin-top: 0;
   padding-top: 1.5em;
  font-size: 2.5em;
}

.info p{
   font-size: .85em;
   border-bottom: 4px solid rgba(45,57,69);
   padding-bottom: 3em;
   margin-bottom: 0;
}

form{
   border-top: 2px solid rgba(45,57,69);
   margin-top: 2px;
   padding-top: 1em;
}

fieldset{
   border: none;
   padding: 0;
   margin-top: 1em;
   margin-bottom: 1em;
   padding-top:1em; 
   padding-bottom:1em;
}

fieldset legend{
   font-size: 1.65em;
   font-weight: bold;
   padding-bottom: .75em;
}

.contact-info label{
   display: block;
   padding-bottom: .65em;
  font-size: 1.25em;
}

.newsletter label{
  font-size: 1.25em;
}

.contact-info input , select , textarea{
   box-shadow: 0 0 1px ;
   width: 100%;
   height: 4em;
   background-color: #fff;
   outline: none;
   border:none;
   border-radius: 5px;
   border-color: #fff;
   text-indent: 10px;
   transition: border-color .4s ease-in-out;
}

textarea{
   height: 85px;
   padding-top:10px;
}

.contact-info input:focus , select:focus , textarea:focus{
   border: 2px solid #46698B;
   border-radius: 0;
}

#name:focus,
#email:focus{
   border: 2px solid #FF7463;
}

[type="submit"]{
   width: 100%;
/*    background-color: #4EBBB5; */
/*   background-color: #f8f8e7; */
  background-color: #eeeec6;
   height: 60px;
   border: none;
   border-radius: 5px;
   color: #444444;
  font-size: 1.25em;
}

[type="submit"]:hover{
  opacity: .8;
}

.newsletter [type="checkbox"]{
   transform: scale(1.4);
}

::placeholder{
   text-align: right;
   padding-right: 1em;
}

.footer p{
   padding-top: 1em;
   padding-bottom: 1em;
   text-align: center;
   margin: 0;
}

@media(min-width: 760px){

   .wrapper{
      max-width: 685px;
   }
   
   .info h3{
      font-size: 2.5em;
      letter-spacing: 1px;
   }

   .info p{
      font-size: 1.1em;
   }

   .contact-info label{
      display: inline-block;
      width: 20%;
   }

   .contact-info input , select{
      width: 78%;
   }

   .newsletter .checkboxes p{
      padding-top: 2px;
      padding-bottom: 2px;
   }
}

#myDIV{
   display: none;
}
@media(min-width:1024px){

   .wrapper{
      width: 90%;
      max-width: 950px;
   }

   .contact-info label{
      display: inline-block;
      width: 26%;
   }

   .contact-info input , select{
      width: 72%;
   }

   .contact-info p , .newsletter p{
      margin-top: .5em;
      margin-bottom: .5em;
   }

   form{
      display: flex;
      justify-content: space-between;
   }

   .container{
      display: flex; 
      flex-direction: column; 
      min-width: 340px;
      height: 500px;
      justify-content: space-around;
   }

   fieldset{
      margin-right: 0;
      margin-left: 0;
   }

   .contact-info{
      width: 55%;
   }

   .newsletter{
      width: 41%;
   }

   form{
      padding-top: 1em;
   }
}
         .success{
         color: white;
         background: green;
         padding: 10px;
         margin: 10px;
         font-size: 20px;
         }
         body {
         margin: 0;
         padding: 0;
         font-family: "Open Sans";
         font-size: 14px;
         font-weight: 400;
         overflow: hidden;
         background-color: #f3f3f3;
         color: #102c58;
         }
         * {
         -webkit-box-sizing: border-box;
         -moz-box-sizing: border-box;
         box-sizing: border-box;
         }
         ::-webkit-input-placeholder {
         color: #c3c3c3;
         }
         p {
         color: #ababab;
         }
         h1 {
         font-size: 24px;
         }
         h2 {
         font-size: 20px;
         }
         h3 {
         font-size: 18px;
         }
         .u-list {
         margin: 0;
         padding: 0;
         list-style: none;
         }
         .u-input {
         outline: 0;
         border: 1px solid #d0d0d0;
         padding: 5px 10px;
         height: 35px;
         font-size: 12px;
         -webkit-border-radius: 10px;
         border-radius: 10px;
         background-clip: padding-box;
         }
         .c-badge {
         font-size: 10px;
         font-weight: 700;
         min-width: 20px;
         padding: 5px;
         border-radius: 4px;
         display: block;
         line-height: 0.7;
         color: #fff;
         text-align: center;
         white-space: nowrap;
         background-color: #102c58;
         border: 1px solid #0c2142;
         }
         .c-badge--red {
         background-color: #f91605;
         border: 1px solid #e01404;
         }
         .c-badge--blue {
         background-color: #5f9cfd;
         border: 1px solid #468cfd;
         }
         .c-badge--header-icon {
         position: absolute;
         bottom: -9px;
         }
         .tooltip {
         width: 120px;
         }
         .tooltip-inner {
         padding: 8px 10px;
         color: #fff;
         text-align: center;
         background-color: #051835;
         font-size: 12px;
         border-radius: 3px;
         }
         .tooltip-arrow {
         border-right-color: #051835 !important;
         }
         .hamburger-toggle {
         position: relative;
         padding: 0;
         background: transparent;
         border: 1px solid transparent;
         cursor: pointer;
         order: 1;
         }
         .hamburger-toggle [class*=bar-] {
         display: block;
         background: #102c58;
         -webkit-transform: rotate(0deg);
         transform: rotate(0deg);
         -webkit-transition: 0.2s ease all;
         transition: 0.2s ease all;
         border-radius: 2px;
         height: 2px;
         width: 24px;
         margin-bottom: 4px;
         }
         .hamburger-toggle [class*=bar-]:nth-child(2) {
         width: 18px;
         }
         .hamburger-toggle [class*=bar-]:last-child {
         margin-bottom: 0;
         width: 12px;
         }
         .hamburger-toggle.is-opened {
         left: 3px;
         }
         .hamburger-toggle.is-opened [class*=bar-] {
         background: #102c58;
         }
         .hamburger-toggle.is-opened .bar-top {
         -webkit-transform: rotate(45deg);
         transform: rotate(45deg);
         -webkit-transform-origin: 15% 15%;
         transform-origin: 15% 15%;
         }
         .hamburger-toggle.is-opened .bar-mid {
         opacity: 0;
         }
         .hamburger-toggle.is-opened .bar-bot {
         -webkit-transform: rotate(45deg);
         transform: rotate(-45deg);
         -webkit-transform-origin: 15% 95%;
         transform-origin: 15% 95%;
         width: 24px;
         }
         .hamburger-toggle:focus {
         outline-width: 0;
         }
         .header-icons-group {
         display: flex;
         order: 3;
         margin-left: auto;
         height: 100%;
         border-left: 1px solid #cccccc;
         }
         .header-icons-group .c-header-icon:last-child {
         border-right: 0;
         }
         .c-header-icon {
         position: relative;
         display: flex;
         flex-shrink: 0;
         float: left;
         width: 70px;
         height: 100%;
         align-items: center;
         justify-content: center;
         line-height: 1;
         cursor: pointer;
         border-right: 1px solid #cccccc;
         }
         .c-header-icon svg {
         font-size: 18px;
         line-height: 40px;
         }
         .c-header-icon--in-circle {
         border: 1px solid #d0d0d0;
         border-radius: 100%;
         }
         .c-header-icon:hover svg {
         color: #f5642d;
         }
         .c-header-icon:hover [class*=bar-] {
         background: #f5642d;
         }
         .l-header {
         padding-left: 70px;
         position: fixed;
         top: 0;
         right: 0;
         z-index: 10;
         width: 100%;
         background: #ffffff;
         -webkit-transition: padding 0.5s ease-in-out;
         -moz-transition: padding 0.5s ease-in-out;
         -ms-transition: padding 0.5s ease-in-out;
         -o-transition: padding 0.5s ease-in-out;
         transition: padding 0.5s ease-in-out;
         }
         .l-header__inner {
         height: 100%;
         width: 100%;
         display: flex;
         height: 70px;
         align-items: center;
         justify-content: stretch;
         border-bottom: 1px solid;
         border-color: #cccccc;
         }
         .sidebar-is-expanded .l-header {
         padding-left: 220px;
         }
         .c-search {
         display: flex;
         flex-grow: 1;
         height: 100%;
         }
         .c-search__input {
         border-top-right-radius: 0px;
         border-bottom-right-radius: 0px;
         border-right: 0;
         width: 100%;
         height: 100%;
         border: 0;
         font-size: 14px;
         padding: 0 20px;
         -webkit-transition: all 0.3s ease-in-out;
         -moz-transition: all 0.3s ease-in-out;
         -ms-transition: all 0.3s ease-in-out;
         -o-transition: all 0.3s ease-in-out;
         transition: all 0.3s ease-in-out;
         }
         .c-dropdown {
         opacity: 0;
         text-align: left;
         position: absolute;
         flex-direction: column;
         display: none;
         width: 300px;
         top: 30px;
         right: -40px;
         background-color: #fff;
         overflow: hidden;
         min-height: 300px;
         border: 1px solid #d0d0d0;
         -webkit-border-radius: 10px;
         border-radius: 10px;
         background-clip: padding-box;
         -webkit-box-shadow: 0px 5px 14px -1px #cecece;
         -moz-box-shadow: 0px 5px 14px -1px #cecece;
         box-shadow: 0px 5px 14px -1px #cecece;
         -webkit-transition: all 0.3s ease-in-out;
         -moz-transition: all 0.3s ease-in-out;
         -ms-transition: all 0.3s ease-in-out;
         -o-transition: all 0.3s ease-in-out;
         transition: all 0.3s ease-in-out;
         }
         .l-sidebar {
         width: 70px;
         position: absolute;
         z-index: 10;
         left: 0;
         top: 0;
         bottom: 0;
         background: #102c58;
         -webkit-transition: width 0.5s ease-in-out;
         -moz-transition: width 0.5s ease-in-out;
         -ms-transition: width 0.5s ease-in-out;
         -o-transition: width 0.5s ease-in-out;
         transition: width 0.5s ease-in-out;
         }
         .l-sidebar .logo {
         width: 100%;
         height: 70px;
         display: flex;
         align-items: center;
         justify-content: center;
         background-color: #051835;
         }
         .l-sidebar .logo .logo__txt {
         font-size: 26px;
         line-height: 1;
         color: #fff;
         text-align: center;
         font-weight: 700;
         }
         .l-sidebar__content {
         height: 100%;
         position: relative;
         }
         .sidebar-is-expanded .l-sidebar {
         width: 220px;
         }
         .c-menu > ul {
         display: flex;
         flex-direction: column;
         }
         .c-menu > ul .c-menu__item {
         color: #184a98;
         max-width: 100%;
         overflow: hidden;
         }
         .c-menu > ul .c-menu__item__inner {
         display: flex;
         flex-direction: row;
         align-items: center;
         min-height: 60px;
         position: relative;
         cursor: pointer;
         -webkit-transition: background-color 0.5s ease-in-out;
         -moz-transition: background-color 0.5s ease-in-out;
         -ms-transition: background-color 0.5s ease-in-out;
         -o-transition: background-color 0.5s ease-in-out;
         transition: background-color 0.5s ease-in-out;
         }
         .c-menu > ul .c-menu__item__inner:before {
         position: absolute;
         content: " ";
         height: 0;
         width: 2px;
         left: 0;
         top: 50%;
         margin-top: -18px;
         background-color: #5f9cfd;
         opacity: 0;
         -webkit-transition: all 0.5s ease-in-out;
         -moz-transition: all 0.5s ease-in-out;
         -ms-transition: all 0.5s ease-in-out;
         -o-transition: all 0.5s ease-in-out;
         transition: all 0.5s ease-in-out;
         }
         .c-menu > ul .c-menu__item.is-active {
         color: #fff;
         }
         .c-menu > ul .c-menu__item.is-active .c-menu__item__inner {
         border-left-color: #fff;
         background-color: #1e3e6f;
         }
         .c-menu > ul .c-menu__item.is-active .c-menu__item__inner svg {
         color: #fff;
         }
         .c-menu > ul .c-menu__item.is-active .c-menu__item__inner .c-menu-item__title span {
         color: #fff;
         }
         .c-menu > ul .c-menu__item.is-active .c-menu__item__inner:before {
         height: 36px;
         opacity: 1;
         }
         .c-menu > ul .c-menu__item:not(.is-active):hover {
         color: #fff;
         }
         .c-menu > ul .c-menu__item:not(.is-active):hover .c-menu__item__inner {
         background-color: #f5642d;
         border-left-color: #f5642d;
         }
         .c-menu > ul .c-menu__item svg {
         flex: 0 0 70px;
         font-size: 16px;
         font-weight: normal;
         text-align: center;
         -webkit-transition: all 0.5s ease-in-out;
         -moz-transition: all 0.5s ease-in-out;
         -ms-transition: all 0.5s ease-in-out;
         -o-transition: all 0.5s ease-in-out;
         transition: all 0.5s ease-in-out;
         }
         .c-menu > ul .c-menu__item .c-menu-item__expand {
         position: relative;
         left: 100px;
         padding-right: 20px;
         color: #fff;
         margin-left: auto;
         -webkit-transition: left 1s ease-in-out;
         -moz-transition: left 1s ease-in-out;
         -ms-transition: left 1s ease-in-out;
         -o-transition: left 1s ease-in-out;
         transition: left 1s ease-in-out;
         }
         .sidebar-is-expanded .c-menu > ul .c-menu__item .c-menu-item__expand {
         left: 0px;
         }
         .c-menu > ul .c-menu__item .c-menu-item__title {
         flex-basis: 100%;
         padding-right: 10px;
         position: relative;
         color: #fff;
         left: 220px;
         opacity: 0;
         -webkit-transition: all 0.7s ease-in-out;
         -moz-transition: all 0.7s ease-in-out;
         -ms-transition: all 0.7s ease-in-out;
         -o-transition: all 0.7s ease-in-out;
         transition: all 0.7s ease-in-out;
         }
         .c-menu > ul .c-menu__item .c-menu-item__title span {
         font-weight: 400;
         font-size: 14px;
         white-space: nowrap;
         overflow: hidden;
         text-overflow: ellipsis;
         -webkit-transition: left 0.5s ease-in-out;
         -moz-transition: left 0.5s ease-in-out;
         -ms-transition: left 0.5s ease-in-out;
         -o-transition: left 0.5s ease-in-out;
         transition: left 0.5s ease-in-out;
         }
         .sidebar-is-expanded .c-menu > ul .c-menu__item .c-menu-item__title {
         left: 0px;
         opacity: 1;
         }
         .c-menu > ul .c-menu__item .c-menu__submenu {
         background-color: #051835;
         padding: 15px;
         font-size: 12px;
         display: none;
         }
         .c-menu > ul .c-menu__item .c-menu__submenu li {
         padding-bottom: 15px;
         margin-bottom: 15px;
         border-bottom: 1px solid;
         border-color: #072048;
         color: #5f9cfd;
         }
         .c-menu > ul .c-menu__item .c-menu__submenu li:last-child {
         margin: 0;
         padding: 0;
         border: 0;
         }
         main.l-main {
         width: 100%;
         height: 100%;
         padding: 70px 0 0 70px;
         -webkit-transition: padding 0.5s ease-in-out;
         -moz-transition: padding 0.5s ease-in-out;
         -ms-transition: padding 0.5s ease-in-out;
         -o-transition: padding 0.5s ease-in-out;
         transition: padding 0.5s ease-in-out;
         }
         main.l-main .content-wrapper {
         padding: 25px;
         height: 100%;
         overflow: auto;
         }
         main.l-main .content-wrapper .page-content {
         border-top: 1px solid #d0d0d0;
         padding-top: 25px;
         color: #ababab;
         }
         main.l-main .content-wrapper--with-bg .page-content {
         background: #fff;
         border-radius: 3px;
         border: 1px solid #d0d0d0;
         padding: 25px;
         }
         main.l-main .page-title {
         font-weight: 400;
         margin-top: 0;
         margin-bottom: 25px;
         }
         .sidebar-is-expanded main.l-main {
         padding-left: 220px;
         }
         body { font-size: 140%; }
      </style>
   </head>
   <body>
      <!-- HEADER: MENU + HEROE SECTION -->
      <!-- CONTENT -->
      <section>
         <body class="sidebar-is-reduced">
            <header class="l-header">
               <div class="l-header__inner clearfix">
                  <div class="c-header-icon js-hamburger">
                     <div class="hamburger-toggle"><span class="bar-top"></span><span class="bar-mid"></span><span class="bar-bot"></span></div>
                  </div>
                  <div class="c-header-icon has-dropdown">
                     <span class="c-badge c-badge--red c-badge--header-icon animated swing">13</span><i class="fa fa-bell"></i>
                     <div class="c-dropdown c-dropdown--notifications">
                        <div class="c-dropdown__header"></div>
                        <div class="c-dropdown__content"></div>
                     </div>
                  </div>
                  <div class="c-search">
                     <input class="c-search__input u-input" placeholder="Search..." type="text"/>
                  </div>
                  <div class="header-icons-group">
                     <div class="c-header-icon basket"><span class="c-badge c-badge--blue c-badge--header-icon animated swing">4</span><i class="fa fa-shopping-basket"></i></div>
                     <div class="c-header-icon logout"><a href="<?php echo base_url('logout'); ?>"><i class="fa fa-power-off"></i></a></div>
                  </div>
               </div>
            </header>
            <div class="l-sidebar">
               <div class="logo">
                  <div class="logo__txt">D</div>
               </div>
            </div>
   </body>
   <main class="l-main">
   <div class="content-wrapper content-wrapper--with-bg">
   <h1 class="page-title">Dashboard</h1>
   <div class="page-content">
       <div class="d-flex justify-content-end">
            <button onclick="myFunction()" class="btn btn-success">Add User</button>
      </div>

      <div id="myDIV" style="display:none;background: rgb(169, 229, 229);">
<div class="wrapper">
      <main>
         
         <form action="<?php echo base_url('add_user'); ?>" method="post"  accept-charset="utf-8" enctype="multipart/form-data">
            <fieldset class="contact-info">
               <div class="container">
                  <?php if(isset($validation)):?>
        <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
<?php endif;?>
                  <legend>User Information</legend>
                  <p>
                     <label for="name">First Name</label>   
                     <input type="text"  name="firstname" placeholder="Required" title="Please fill out this field"> 
                  </p>
                        <p>
                     <label for="name">Last Name</label>   
                     <input type="text"  name="lastname" placeholder="Required" title="Please fill out this field"> 
                  </p>
                        <p>
                     <label for="name"> Address</label>   
                     <input type="text"  name="address" placeholder="Required" title="Please fill out this field"> 
                  </p>
                  <p>
                     <label for="email">Email Address</label>   
                     <input type="email"  name="email" placeholder="Required" title="Please fill out this field"> 
                  </p>
                  <p>
                     <label for="name">Password</label>   
                     <input type="password"  name="password" placeholder="Required" title="Please fill out this field"> 
                  </p>
                  <p>
                     <label for="state">User type</label>
                     <select name="user_type">
                        <option value="">Choose user type</option>
                        <option value="administrator">Administrator</option>
                                <option value="user">User</option>
                     </select>
   
               </div>
            </fieldset>
            <div class="footer">
            <button type="submit">Sign Up</button>
            </div>
         </form>
         

      </main>
   </div>
</div>

   <?php if(session()->getFlashdata('msg')):?>
   <div class="success"><?= session()->getFlashdata('msg') ?></div>
   <?php endif;?>
   <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
         <?php if($users): ?>
   <?php foreach($users as $user): ?>

          <tr>
             <td><?php echo $user['firstname']; ?></td>
             <td><?php echo $user['lastname']; ?></td>
             <td><?php echo $user['address']; ?></td>
             <td><?php echo $user['email']; ?></td>
             <?php if($user['user_status']=="active"){  ?>
               <td class="btn-success"><?php echo $user['user_status']; ?></td>

             <?php  } elseif($user['user_status']=="inactive"){ ?>
               <td class="btn-secondary"><?php echo $user['user_status']; ?></td>

             <?php } else if($user['user_status']=="suspended") { ?>
                <td class="btn-warning"><?php echo $user['user_status']; ?></td>

            <?php } else if ($user['user_status']=="deleted") { ?>
               <td class="btn-danger"><?php echo $user['user_status']; ?></td>
               <?php 
               }  ?>

            <?php if($user['user_status']=="active"){  ?>
             <td>
              <a href="<?php echo base_url('edit_user/'.$user['id']);?>" class="btn btn-info btn-sm">Change</a>
              <a href="<?php echo base_url('block/'.$user['id']);?>" class="btn btn-warning btn-sm">Block</a>
              <a href="<?php echo base_url('delete/'.$user['id']);?>" class="btn btn-danger btn-sm">Remove</a>
              </td>

              <?php
              } else if ($user['user_status']=="inactive"){  ?>

               <td>
                
              <a href="<?php echo base_url('edit_user/'.$user['id']);?>" class="btn btn-info btn-sm">Change</a>
              <a href="<?php echo base_url('block/'.$user['id']);?>" class="btn btn-warning btn-sm">Block</a>
              <a href="<?php echo base_url('activate/'.$user['id']);?>" class="btn btn-success btn-sm">Activate</a>
              <a href="<?php echo base_url('delete/'.$user['id']);?>" class="btn btn-danger btn-sm">Remove</a>
              </td>

              <?php }else if ($user['user_status']=="suspended"){  ?>
              <td>
              
              <a href="<?php echo base_url('edit_user/'.$user['id']);?>" class="btn btn-info btn-sm">Change</a>
               <a href="<?php echo base_url('activate/'.$user['id']);?>" class="btn btn-success btn-sm">Activate</a>
              <a href="<?php echo base_url('delete/'.$user['id']);?>" class="btn btn-danger btn-sm">Remove</a>
              </td>

              <?php
              } else if ($user['user_status']=="deleted"){  ?>
            <td>
              
           </td>
           <?php }   ?>

          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
         </tbody>
      </table>
   </div>
   </div>
   </main>
   </section>
   <!-- SCRIPTS -->
   <script>
      let Dashboard = (() => {
       let global = {
         tooltipOptions: {
           placement: "right" },
      
         menuClass: ".c-menu" };
      
      
       let menuChangeActive = el => {
         let hasSubmenu = $(el).hasClass("has-submenu");
         $(global.menuClass + " .is-active").removeClass("is-active");
         $(el).addClass("is-active");
      
         // if (hasSubmenu) {
         //  $(el).find("ul").slideDown();
         // }
       };
      
       let sidebarChangeWidth = () => {
         let $menuItemsTitle = $("li .menu-item__title");
      
         $("body").toggleClass("sidebar-is-reduced sidebar-is-expanded");
         $(".hamburger-toggle").toggleClass("is-opened");
      
         if ($("body").hasClass("sidebar-is-expanded")) {
           $('[data-toggle="tooltip"]').tooltip("destroy");
         } else {
           $('[data-toggle="tooltip"]').tooltip(global.tooltipOptions);
         }
      
       };
      
       return {
         init: () => {
           $(".js-hamburger").on("click", sidebarChangeWidth);
      
           $(".js-menu li").on("click", e => {
             menuChangeActive(e.currentTarget);
           });
      
           $('[data-toggle="tooltip"]').tooltip(global.tooltipOptions);
         } };
      
      })();
      
      Dashboard.init();
      
      import datatable from 'https://cdn.skypack.dev/datatable';
      
      // add your code here!
      // see https://www.skypack.dev/view/datatable for README
      
      $(document).ready(function() {
         $('#example').DataTable();
      } )
   </script>
   <script type="text/javascript">
      $(document).ready(function() {
      $('#example').dataTable();
} );
   </script>

   <script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
   <!-- -->
   </body>
</html>