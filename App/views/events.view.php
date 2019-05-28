<?php require('App/views/partials/head.view.php'); ?>
	<header>
		<h2>Events </h2>
	</header>


	<section>
		<p>
			We offer good services </p>

			<ul>
				<?php foreach ($events as $key => $event):?>
					<li> <?=  $event->id; ?> -
					 <?=  $event->show(); ?> </li>
				<?php endforeach; ?>
			</ul> 			 

	<content>
		<form method="POST" action="add-event" >
			<input type="text" name="description">
			<input type="submit" value="Send">
			
		</form>
	</content>
	</section>
<?php require('App/views/partials/footer.view.php'); ?>