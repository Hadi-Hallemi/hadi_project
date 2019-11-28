<table class="table table-striped">
	<h1 style="margin-bottom: 10px ;text-align: center;border-bottom: 1px solid #ddd">Teacher List</h1>
	<thead>
		<tr>
			<th>No!</th>
			<th>Name</th>
			<th>FatherName</th>
			<th>Last Name</th>
			<th>Gender</th>
			<th>Phone</th>
			<th>Photo</th>
			<th>Education</th>
			<th>Is Now</th>
			<th>Salary</th>
			<th>Operation</th>
		</tr>
	</thead>
	<tbody>
		<?php $counter =1; ?>
		<?php foreach($teachers as $te){ ?>
		<tr>
			<td><?php echo $counter; ?></td>
			<td><?php echo $te->teacher_name; ?></td>
			<td><?php echo $te->teacher_fathername; ?></td>
			<td><?php echo $te->teacher_lastname; ?></td>
			<td><?php echo $te->teacher_gender; ?></td>
			<td><?php echo $te->teacher_phone; ?></td>
			<td><?php echo $te->teacher_photo; ?></td>
			<td><?php echo $te->education; ?></td>
			<td><?php echo $te->is_now; ?></td>
			<td><?php echo $te->teacher_salary; ?></td>
			<td>
				<button class="btn btn-danger" onclick="confirmDelete(<?php echo $te->teacher_id; ?>)" > <span class="glyphicon glyphicon-remove"></span> Delete</button>
				<?php 
				$attr = array(
				'class'=>'btn btn-success'
				//'id'=>'edit_teacher'
				);
				?>
				<?php echo anchor('teacher/edit_teacher/'.$te->teacher_id, 'Edit',$attr); ?>
			</td>
		</tr>
	
	<?php $counter ++; ?>
	<?php } ?>
	</tbody>
</table>
<script type="text/javascript">
	var base_url = "<?php echo base_url('/');?>"
	function confirmDelete(id){

			var res =confirm('Are you sure ?');
			if(res==true){
				window.location.assign(base_url+'index.php/'+'teacher/teacher_delete/'+id);
			}else{

			}
	}

</script>

