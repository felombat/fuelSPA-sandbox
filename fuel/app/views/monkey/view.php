<h2>Viewing <span class='muted'>#<?php echo $monkey->id; ?></span></h2>

<p>
	<strong>Name:</strong>
	<?php echo $monkey->name; ?></p>
<p>
	<strong>Age:</strong>
	<?php echo $monkey->age; ?></p>
<p>
	<strong>Id:</strong>
	<?php echo $monkey->id; ?></p>

<?php echo Html::anchor('monkey/edit/'.$monkey->id, 'Edit'); ?> |
<?php echo Html::anchor('monkey', 'Back'); ?>