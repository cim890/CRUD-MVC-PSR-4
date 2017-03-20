<section id="content" class="container">
		
	<!---Input -->
	<h3 class="judul">Form Input Artikel</h3>
	<article id="artikel">
		<div id="form-contact">
		<form method="post">
			<div class="form-row">
				<label for="judul">Judul</label>
				<input type="text" name="judul">	
			</div>
			<div class="form-row">
					<label for="isi">Isi Artikel</label>
					<textarea name="isi"></textarea>
			</div>
				<button type="submit" name="send">Kirim</button>
		</form>
						
		</div>
		</article>
	<?php if(isset($content)){
				echo $content;
				} ?>
</section>

