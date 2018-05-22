<div class="row">
<center>
	<h2><u> Student Description </u></h2>
</center>

	Student ID : <?php echo $student->id; ?>
	<br>
	Name : <?php echo $student->name; ?>
	<br>
	Roll Number : <?php echo $student->rollNo; ?>
	<br>
	College : <?php echo $student->college; ?>
	<br>
	Email : <?php echo $student->email; ?>
	<br>
	Home Town : <?php echo $student->homeTown; ?>
	
	
	<pre><u><?php echo $this->Html->link('Back', ['action'=>'index']); ?></u>  <u><?php echo $this->Html->link('Edit', ['action'=>'edit', $student->id]); ?></u></pre>

</div>