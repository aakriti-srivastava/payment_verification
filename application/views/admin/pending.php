<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  	   <?php echo link_tag('css/bootstrap.min.css'); ?>
	   <?php echo link_tag('css/bootstrap-theme.min.css'); ?>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
</head>
<body>

<div align="center"class="container">
  <h1>Check payment proof of member</h1>
    <form class="form-inline" role="form" action="<?php echo base_url().'Admin/search_member';?>" method="post">
      <div class="form-group">
      <input type="text" class="form-control" name="search" id="search" placeholder="search by member id">
      </div>
      <button type="submit" class="btn btn-success" name="submit">
	  <span class="glyphicon glyphicon-search"></span> Search</button>
    </form>
	<a style="float:right" href="<?php echo base_url().'Admin/paydetail';?>"class="btn btn-link btn-lg">
	<span class="glyphicon glyphicon-link"></span> GO BACK</a>
	<!--<p> <?php echo $message; ?> </p>-->
	<form  action="" method="post">
     <table class="table">
	   <thead>
		<th>MEMBER_ID</th>
		<th>MODE</th>
		<th>AMOUNT</th>
		<th>DATE</th>
		<th>file</th>
		<th>STATUS</th>
		<th>VERIFY</th>
	   </thead>
	   <tbody>
	   <?php if($result==null) {
		   echo "<script> alert('NOT FOUND') </script>";		   
		 
	   } else{ ?>
	   <?php foreach($result as $row):?>
	   
	       <tr>
			   <td><?php echo $row->MEMBER_ID;?></td>
			    <td><?php echo $row->mode;?></td>
			   <td><?php echo $row->amount;?></td>
			   <td><?php echo $row->date1;?></td>
			   <td>
			   <a href="<?php echo base_url('file/'.$row->file)?>" target="_blank">click here to be</a></td>
				   <!--a href="<?php echo base_url('Admin/proof/'.$row->MEMBER_ID);?>"class="btn btn-info btn-sm">
				    <span class="glyphicon glyphicon-open"></span> open</a-->
				</td>
				<td>
				<?php echo $row->verify;?>
				 </td>
				 <td>
				   <a href="<?php echo base_url('Admin/amount/'.$row->MEMBER_ID);?>"class="btn btn-info btn-sm">
				    <span class="glyphicon glyphicon-check"></span> UPDATE</a>
				</td>
			</tr>
	   <?php endforeach;
	   } ?>
		</tbody>
	   </table>
	   </form>
	  <!-- <?php echo $links(); ?>-->
	   
</div>
</body>
</html>