<!DOCTYPE html>
<html>
<head>
  <title>Edit user</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .container {
      max-width: 500px;
    }
    .error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <form method="post" action="<?= site_url('/update') ?>">
      <input type="hidden" name="id" id="id" value="<?php echo $data['id']; ?>">
      <div class="form-group">
        <label>First Name</label>
        <input type="text" name="firstname" class="form-control" value="<?php echo $data['firstname']; ?>">
      </div>
      <div class="form-group">
        <label>Last Name</label>
        <input type="text" name="lastname" class="form-control" value="<?php echo $data['lastname']; ?>">
      </div>
      <div class="form-group">
        <label>Address</label>
        <input type="text" name="address" class="form-control" value="<?php echo $data['address']; ?>">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="<?php echo $data['email']; ?>">
      </div>
      <div class="form-group">
        <label>User Type</label>
        <input type="text" name="user_type" class="form-control" value="<?php echo $data['user_type']; ?>">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-danger btn-block">Save Data</button>
      </div>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
 
</body>
</html>