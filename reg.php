<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Hotel Booking</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css"> 
  <link href="https://fonts.googleapis.com/css2?family=Red+Rose&family=Varta&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'menu.php'; ?>
	
	<div style="background-image: url('images/log.jpg'); width:1550px; height:1100px;">
 <section class="my-5">
  <div class="py-5">
     <h2 class="text-center">Booking Information</h2>
  </div>

    <div class="w-50 m-auto">
      <form action ="userinfo.php" method="post">
        <div class="form-group">
          <label>Username:</label>
          <input type="text" name="user" autocomplete="off" placeholder="Enter name" class="form-control" required/>
        </div>
        <div class="form-group">
          <label>E-mail:</label>
          <input type="text" name="email" autocomplete="off" placeholder="Enter email" class="form-control"required/>
        </div>
		<div class="form-group">
          <label>Password:</label>
          <input type="Password" name="password" autocomplete="off" class="form-control" required/>
        </div>
		<div>
		<label>Country:</label>
          <select type="text" name="country" autocomplete="off" class="form-control">
            <option value="">Choose Country</option>
            <option value="Bangladesh">Bangladesh</option>
            <option value="China">China</option>
            <option value="India">India</option>
			<option value="Italy">Italy</option>
			<option value="US">US</option>
			<option value="UK">UK</option>
          </select>
		  </div>
        <div class="form-group">
          <label>Mobile:</label>
          <input type="text" name="mobile" autocomplete="off" class="form-control" required/>  
        </div>
		 <div class="form-group">
          <label>Check In:</label>
          <input type="date" name="checkIn" autocomplete="off" class="form-control" required/>  
        </div>
		 <div class="form-group">
          <label>Check Out:</label>
          <input type="date" name="checkOut" autocomplete="off" class="form-control" required/>  
        </div>
		 <div class="form-group">
          <label>Members:</label>
          <input type="number" name="member" autocomplete="off" class="form-control" required/>  
        </div>
		<div class="form-group">
          <label>Room Code:</label>
          <input type="number" name="roomC" autocomplete="off" class="form-control" required/>  
        </div>
		
       <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

</section>
</div>

<footer>
  
  <p class="p-3 bg-primary text-white text-center"> &copy Polash Chandra Das <br/>
  <img src="images/Email.png" width="50" height="50"/> E-mail:polashdas040@gmail.com
  
  </p>
  

</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
