<table class="table table-striped">
<h1 style="margin-bottom: 10px ;text-align: center;border-bottom: 1px solid #ddd">User List</h1>
<div class="row col-md-6"> 
<form action="<?php echo base_url('User/skeyword'); ?>" method="post">

<input type="text" name="title">
<input type="submit" value="Search" name="submit">
</form>
</div>

	<thead>
		<tr>
			<th> <?php echo $this->lang->line('Nu'); ?></th>
			<th><?php echo $this->lang->line('name'); ?> </th>
			<th><?php echo $this->lang->line('lastname'); ?></th>
			<th><?php echo $this->lang->line('email'); ?></th>
			<th><?php echo $this->lang->line('phone'); ?></th>
			<th><?php echo $this->lang->line('user_name'); ?></th>
			<th><?php echo $this->lang->line('operation'); ?></th>
		</tr>
	</thead>
	<tbody>
	<?php $counter=1; ?>
	<?php foreach ($users as $us) {?>
		<tr>
			<td><?php echo $counter ; ?></td>
			<td><?php echo $us->name ; ?></td>
		 	<td><?php echo $us->lastname; ?></td>
		 	<td><?php echo $us->email; ?></td>
		 	<td><?php echo $us->phone; ?></td>
		 	<td><?php echo $us->user_name; ?></td>
			<td>
			<!-- <?php 
			//$ci = get_instance();
			//$ci->load->model('role_model');
			//$userrolw=$this->session->userdata('user_role');
			//
			//<?php if($ci->role_model->roleHasPermission(11,4)){ ?> -->
				<button class="btn btn-danger" onclick="confirmDelete(<?php echo $us->id;  ?>)"><span class="glyphicon glyphicon-remove"></span>Delete</button>
			
				<?php
				// if($ci->role_model->roleHasPermission(11,3)){

				 
				$attr=array(
					'class'=>"btn btn-success ",
					'id'=>'edit_user',
					//'target'=>'_blank'
					);
				 echo anchor('user/edit_user/'.$us->id,'<i class="fa fa-edit"></i>Edit', $attr);?>
			</td>

		</tr>
		<?php $counter ++; ?>
		<?php } ?>
	</tbody>
</table>
	<?php echo $this->pagination->create_links(); ?>

<script type="text/javascript">
	var base_url="<?php echo base_url('/');?>"
	function confirmDelete(id){

		var res=confirm('آیا مطمئن هستید؟');
		if(res==true){
			window.location.assign( base_url+'index.php/'+'user/user_delete/'+id);


		}else{

		}
	}
</script>