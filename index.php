<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<svg width="500" height="500"> 
		<?php
			$handle = fopen('./data.txt', 'r');
			$y=0;
			$taille=50;
			while ($line = fgets($handle)) {
				for ($i=0; $i <strlen($line) ; $i++) 
				{ 
					$x=$i*$taille;
					if ('*' === $line[$i]) {
						echo '<rect x="'.$x.'" y="'.$y.'" width="'.$taille.'" height="'.$taille.'"/>';
					}elseif ('#' === $line[$i]) {
						echo '<rect x="'.$x.'" y="'.$y.'" width="'.$taille.'" height="'.$taille.'" style="fill:rgb(200,200,200)"/>';
					}
				}
				$y+=$taille;
			}
			fclose($handle);
		?>
		</svg>
	</body>
</html>
