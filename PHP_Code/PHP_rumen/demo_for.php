<style type="text/css">
	div{
		font-size: 30px;
		text-align: center;
	}
</style>
<body>
	<div>
		<?php
			for($i=0;$i<4;$i++){
				echo '<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.mt_rand(0,9).'</span>';
			}
		?>
	</div>
</body>