	<?php if($this->session->flashdata('message')){ ?>
	<div class  ="alert <?php echo $this->session->flashdata('class') ?>">
		<p>
		<?php echo $this->session->flashdata('message');?>
		</p>
	</div>
	<?php }?>
	<div>
	<?php 
	$attr=array(
		'class'=>'btn btn-primary',
		'id'=>'new_role_id'
		);
	
		 echo anchor('role/add_role_form','New Role',$attr);?>
	</div>

	<table class=" table table-striped">
		<thead>
			<tr>
				<th>No </th>	
				<th> Name</th>	
				<th> Action</th>	
			</tr>
		</thead>
		<tbody>
		<?php 
		$counter=1;
		foreach ($roles as $rl) {
			?>
			<tr>
				<td><?php echo $counter; ?></td>
				<td><?php echo $rl->name; ?></td>
				<td>
				<?php 
				$attr =array(
					'class'=>'role_delete',
					'style'=>'display:inline'
				);
				?>
				<?php echo form_open('role/deleteRole',$attr); ?>
				<input type="hidden" name="id" value="<?php echo $rl->id; ?>" >
				<button  type="submit" class=" btn btn-danger" onclick="return confirmation();" href="#">Delete</button>
				<?php form_close(); ?>

				<?php
				$linkAttr = array(
				'class'=>'btn btn-success',	
				);
				echo anchor('role/editRole/'.$rl->id,'Edit', $linkAttr);?>
			
				</td>
			</tr>
			<?php
			$counter++;	
		}
		?>
		</tbody>
	</table>
	<script>
	function confirmation(){
		var con =confirm('Are you sure ?');
		return con;
	}	</script>
