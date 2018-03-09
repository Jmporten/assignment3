
<?php include('elements/header.php');?>
<?php 
if( is_array($post) ) {
	extract($post);?>

<div class="container">
	<div class="page-header">

<h1><?php echo $title;?></h1>
  </div>

<?php echo $content;?>

</div>
<?php }?>

<?php if( is_array($posts) ) {?>

<div class="container">
<div class="page-header">

<h1><?php echo $title;?></h1>
  </div>

	<?php foreach($posts as $p){?>
    <h3><a href="<?php echo BASE_URL?>blog/view/<?php echo $p['pID'];?>" title="<?php echo $p['title'];?>"><?php echo $p['title'];?></a></h3>
	<p><?php echo $p['content'];?></p>
    <p>Date: <?php echo $p['date'];?></p>
    <p>uID: <?php echo $p['uID'];?></p>
    <p>categoryID: <?php echo $p['categoryID'];?></p>
    <p>First Name: <?php echo $p['first_name'];?></p>
    <p>Last Name: <?php echo $p['last_name'];?></p>
    <p>Category: <?php echo $p['name'];?></p>
<?php }?>
</div>

<?php }?>


<?php include('elements/footer.php');?>