<div class="row">
	<?php echo $this->Form->create($student); ?>
		<fieldset>
			<legend>Add New Student</legend>
			
			<?php
				echo $this->Form->input('name', array('type'=>'text', 'Placeholder'=>'Name'));

				echo $this->Form->input('rollNo', array('type'=>'text', 'Placeholder'=>'Roll Number'));

				echo $this->Form->input('college', array('type'=>'text', 'Placeholder'=>'College'));

				echo $this->Form->input('email', array('type'=>'email', 'Placeholder'=>'Email'));

				echo $this->Form->input('homeTown', array('type'=>'text', 'Placeholder'=>'Home Town'));

				echo $this->Form->button(__('Add Student'));
			?>

			<br>
			<u>
				<?php echo $this->Html->link('Back', ['action'=>'index']); ?>
			</u>
			
		</fieldset>
	<?php echo $this->Form->end(); ?>
</div>