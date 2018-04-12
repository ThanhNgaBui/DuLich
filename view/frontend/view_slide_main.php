
	<div id="side_main" style="overflow: hidden; margin: 0 0 20px 0; position: relative;">
		<?php
			foreach ($arr as $row)
			{
		?>
		<img src="<?php echo $row["anh"];?>" class="slises">
		<?php } ?>
		<button class="btn" id="btnleft" onclick="plusIndex(-1)">&#10094;</button>
		<button class="btn" id="btnright" onclick="plusIndex(1)">&#10095;</button>
	</div>


