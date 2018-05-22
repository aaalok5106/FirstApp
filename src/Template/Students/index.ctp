<div class="row">

<?php echo $this->Flash->render('message'); ?>

<center>
	<h2><u>View All Students</u></h2>
	<u>
		<?php echo $this->Html->link('Add Student', [ 'action'=>'add']); ?>
	</u>
</center>

<br><br>

<table>
	<thead>
		<tr>
			<th>Roll Number</th>
			<th>Name</th>
			<th>College</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php if(!empty($students)): ?>
			<?php foreach($students as $student): ?>
			<tr>
				<td><?php echo $student->rollNo; ?></td>
				<td><?php echo $student->name; ?></td>
				<td><?php echo $student->college; ?></td>
				<td>
					
					<u>
						<?php echo $this->Html->link('View', ['action'=>'view', $student->id]); ?>
					</u>
						<?php echo $this->Html->link('Edit', ['action'=>'edit', $student->id]); ?>

					<u>
						<?php echo $this->Form->postLink('Delete', ['action'=>'delete', $student->id], ['confirm'=>'Are You Sure to DELETE this Student?']); ?>
					</u>
					
				</td>
			</tr>
			<?php endforeach; ?>
		<?php else: ?>
			<td>No Student Record Found!</td>
		<?php endif; ?>
	</tbody>
</table>

</div>