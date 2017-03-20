<nav class ="menu">
	<ul>
		<li<?php if($this->uri_segment(0)=='' || ($this->uri_segment(0)=='home' && $this->uri_segment(1)=='index')){
	            	echo ' class="active"';
	            } ?>><a href="<?php echo BASE_URL ?>">Menu Artikel</a>
	    </li>
	</ul>
</nav>