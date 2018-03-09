<?php include('elements/header.php');?>
<div class="container">
	<div class="page-header">
   <h1> the Login View </h1>
   <?php echo $numbers ?>
    <form action="<?php echo BASE_URL?>login/do_login" method="post">
        <label>Username</label>
        <input type="text" class="span6" name="username" value="<?php echo $username?>">
        <label>Password</label>
        <input type="password" class="span6" name="password" value="<?php echo $password?>">
        <br/>
        <button id="submit" type="submit" class="btn btn-primary" >Submit</button>
    </form>
  </div>
</div>
<?php include('elements/footer.php');?>

