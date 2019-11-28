<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search Result</title>
</head>
<body>
<table>
<thead>
		<tr>
			
			<th><?php echo $this->lang->line('name'); ?> </th>
			<th><?php echo $this->lang->line('lastname'); ?></th>
			<th><?php echo $this->lang->line('email'); ?></th>
			<th><?php echo $this->lang->line('phone'); ?></th>
			<th><?php echo $this->lang->line('user_name'); ?></th>
			
		</tr>
	</thead>
	<tbody>
	
	<?php foreach ($users as $us) {?>
		<tr>
			
			<td><?php echo $us->name ; ?></td>
		 	<td><?php echo $us->lastname; ?></td>
		 	<td><?php echo $us->email; ?></td>
		 	<td><?php echo $us->phone; ?></td>
		 	<td><?php echo $us->user_name; ?></td>
		
			<!-- <?php 
			//$ci = get_instance();
			//$ci->load->model('role_model');
			//$userrolw=$this->session->userdata('user_role');
			//
			//<?php if($ci->role_model->roleHasPermission(11,4)){ ?> -->
				
				

		</tr>
		
		<?php } ?>
	</tbody>
</table>
</body>
</html>