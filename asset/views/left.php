<ul class="nav nav-pills nav-stacked">
	<?php foreach( $this->nav as $nav ): ?>
		<li class="<?php echo ( $this->get_active() == $nav['url'] ) ? 'active': '';?>"><a href="<?php echo URL.$nav['url']; ?>"><?php echo $nav['name']; ?></a></li>
	<?php endforeach; ?>
</ul>