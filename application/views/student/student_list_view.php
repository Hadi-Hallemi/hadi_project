<table class="table table-striped">
<h1 style="margin-bottom: 10px ;text-align: center;border-bottom: 1px solid #ddd">Student List</h1>
	<thead>
		<tr>
			<th><?php echo $this->lang->line('No'); ?></th>
			<th><?php echo $this->lang->line('student_name'); ?> </th>
			<th> <?php echo $this->lang->line('student_fathername'); ?></th>
			<th><?php echo $this->lang->line('student_lastname'); ?></th>
			<th><?php echo $this->lang->line('gender'); ?></th>
			<th><?php echo $this->lang->line('student_age'); ?></th>
			<th><?php echo $this->lang->line('student_phone'); ?></th>
			<th><?php echo $this->lang->line('student_address'); ?></th>
			<th><?php echo $this->lang->line('student_education'); ?></th>
			<th><?php echo $this->lang->line('photo'); ?></th>
			<th><?php echo $this->lang->line('is_now'); ?></th>
			<th><?php echo $this->lang->line('operation'); ?></th>
			
		</tr>
	</thead>
	<tbody>
	<?php $counter=1; ?>
	<?php foreach ($students as $st) {?>
		<tr>
			<td><?php echo $counter ; ?></td>
			<td><?php echo $st->student_name ; ?></td>
			<td><?php echo $st->student_fathername ; ?></td>
		 	<td><?php echo $st->student_lastname; ?></td>
		 	<td><?php echo $st->gender; ?></td>
		 	<td><?php echo $st->student_age ; ?></td>
		 	<td><?php echo $st->student_phone; ?></td>
		 	<td><?php echo $st->student_address ; ?></td>
		 	<td><?php echo $st->student_education ; ?></td>
		 	<td><?php echo $st->photo; ?></td>
		 	<td><?php echo $st->is_now; ?></td>
			
			<td>
				 <button class="btn btn-danger" onclick="confirmDelete(<?php echo $st->student_id; ?>)" > <span class="glyphicon glyphicon-remove"></span>Delete</button>
				<?php 
				$attr=array(
					'class'=>"btn btn-success  ",
					'id'=>'edit_student',
					//'target'=>'_blank'
					);
				?>
				<?php echo anchor('student/edit_student/'.$st->student_id,'<i class="fa fa-edit"></i>Edit', $attr);?>
			</td>
		</tr>
		<?php $counter ++; ?>
		<?php } ?>
</table>
<?php echo $this->pagination->create_links(); ?>

<script type="text/javascript">
	var base_url="<?php echo base_url('/');?>"
	function confirmDelete(id){

		var res=confirm('Are yu sure??');
		if(res==true){
			window.location.assign( base_url+'index.php/'+'student/student_delete/'+id);


		}else{

		}
	}
</script>