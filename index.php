
<?php
	// Run this in your webserver
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Madeindonesia-BackEnd Basic Test</title>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&family=Playfair+Display:wght@400;500;800&display=swap"/>
	</head>
	
	<style>

	</style>

	<body>
	<!-- navbar -->
	<!-- Given array -->
	<?php
		$menu = array(
		array(
			'tabName' => 'Home',
			'content' => 'This is content for Home-tab. Please display me in the correct tab menu.'
		),

		array(
			'tabName' => 'About',
			'content' => 'This is content for ABOUT. Please display me in the correct tab menu.'
		),

		array(
			'tabName' => 'Contact',
			'content' => 'This is content for CONTACT. Please display me in the correct tab menu.'
		),
	);
	?>

	<!-- Change this loop using the given array above using php code -->
	<div class="container">
		<h1>Challenge 1</h1>
		<b><blockquote>!! Instructions:</blockquote></b>
		<ul>
			<li>Change the HTML using given array</li>
			<li>Use your logic and basic looping in php you can use for, foreach, while, or whatever you want to use </li>
			<li>Please DO NOT change the html, but the logic looping only</li>
			<li>The point is make the html dynamic base on the given array</li>
		</ul>

		<h3>Given array: </h3>

		<?php
			echo "<pre>";
			print_r($menu);
			echo "</pre>";
		?>

		<h2>Expected output: </h2>
		

		<nav class="mb-3">
			<div class="nav nav-tabs" id="nav-tab" role="tablist">
				<?php 
					$panjangmenu = count($menu)-1;
					for($i=0;$i<=$panjangmenu;$i++){
						$isimenu = $menu[$i]; ?>
						<a class="nav-item nav-link" id="nav-<?=$isimenu["tabName"]?>-tab" data-toggle="tab" href="#nav-<?=$isimenu["tabName"]?>" role="tab" aria-controls="nav-<?=$isimenu["tabName"]?>" aria-selected="false"><?= $isimenu["tabName"]; ?></a>
					<?php }
				?>
			</div>
		</nav>

		<div class="tab-content mb-5" id="nav-tabContent">
			<?php for($i=0;$i<=$panjangmenu;$i++){ 
					if($i==0){ ?>
						<div class="tab-pane fade show active" id="nav-<?=$menu[$i]["tabName"]?>" role="tabpanel" aria-labelledby="nav-<?=$menu[$i]["tabName"]?>-tab"><?= $menu[$i]["content"]; ?></div>
					<?php }else { ?>
						<div class="tab-pane fade" id="nav-<?=$menu[$i]["tabName"]?>" role="tabpanel" aria-labelledby="nav-<?=$menu[$i]["tabName"]?>-tab"><?= $menu[$i]["content"]; ?></div>
					<?php }
			} ?>	
		</div>
		</div><!-- .container -->
		
		

		<div class="container">
			<h1>Challenge 2</h1>
			<b><blockquote>!! Instructions:</blockquote></b>
			<ul>
				<li>Change the HTML using given array</li>
				<li>Use your logic and basic looping in php you can use for, foreach, while, or whatever you want to use </li>
				<li>Please DO NOT change the html, but the logic looping only</li>
				<li>The point is make the html dynamic base on the given array</li>
			</ul>

			<h3>Given array: </h3>

			<?php 
				$genre = ["Horor", "drama", "action", "comedy", "romance", "family", "fantasy", "Thriller", "mystery"];
				echo "<pre>";
				print_r($genre);
				echo "</pre>";
				
			?>

			<h2>Expected output: </h2>

			<section id="bathroom-special-single">
			<?php for($i=0;$i<=3;$i++) {?>
				<div class="row gallery mb-5">
         <?php 
          if($i==0){
            $x =0;
            $panjang = 1;
          } else if($i==1){
            $x=2;
            $panjang = 4;
          } else if($i==2){
            $panjang = 6;
            $x=5;
          } else{
            $x=7;
            $panjang = 8;
          }
         ?> 
        <?php for($j=$x;$j<=$panjang;$j++){ ?>
          <?php 
            if($i==0){
              if($j<1){
                $nilai = 8;
              } else{
                $nilai = 4;
              }
            } else if($i==1){
              $nilai = 4;
            } else if($i==2){
              if($j<6){
                $nilai = 8;
              } else{
                $nilai = 4;
              }
            }      
          ?>
          <div class="col-md-<?=$nilai;?> col-wrapper">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title"><?= ucwords($genre[$x]); ?></h5>
								<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							</div>
						</div>
					</div>
        <?php $x++;} ?>
        </div>	
      <?php } ?>
			</section>
		</div>
                  




	</body>
</html>