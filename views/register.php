<?php
/**
 * Created by PhpStorm.
 * User: Michael
 * Date: 3/9/2018
 * Time: 2:03 PM
 */
?>
<?php include('elements/admin_header.php');?>

<div class="container">
	<div class="page-header">
   <h1> Register View </h1>
  </div>
  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>
  <div class="row">
      <div class="span8">
        <form action="<?php echo BASE_URL?>register/<?php echo $task?>" method="post" onsubmit="editor.post()">
          <label>First Name</label>
          <input type="text" class="span6" name="first_name" value="<?php echo $first_Name?>">
     			<label>Last Name</label>
          <input type="text" class="span6" name="last_name" value="<?php echo $last_Name?>">
                <label>Email</label>
            <input type="email" class="span6" name="email" value="<?php echo $email?>">
                <label>Password</label>
            <input type="password" class="span6" name="password" value="<?php echo $password?>">
    			<br/>
          <button id="submit" type="submit" class="btn btn-primary" >Submit</button>
        </form>

      </div>
    </div>
</div>
<?php include('elements/admin_footer.php');?>
