<?php

$hotels = [

	[
		'name' => 'Hotel Belvedere',
		'imgUrl' => 'https://pix7.agoda.net/hotelImages/124/1246280/1246280_16061017110043391702.jpg?ca=6&ce=1&s=414x232&ar=16x9',
		'description' => 'Hotel Belvedere Descrizione',
		'parking' => true,
		'vote' => 4,
		'distance_to_center' => 10.4
	],
	[
		'name' => 'Hotel Futuro',
		'imgUrl' => 'https://u.profitroom.pl/2020-lovechotel-com/thumb/1920x1080/uploads/Hotel_Kompas_Lovec-54.jpg',
		'description' => 'Hotel Futuro Descrizione',
		'parking' => true,
		'vote' => 2,
		'distance_to_center' => 2
	],
	[
		'name' => 'Hotel Rivamare',
		'imgUrl' => 'https://collezione.starhotels.com/assets/uploads/Starhotels-Collezione/Hotel-d-inghilterra/GALLERY/hir-exterior-2023.jpg',
		'description' => 'Hotel Rivamare Descrizione',
		'parking' => false,
		'vote' => 1,
		'distance_to_center' => 1
	],
	[
		'name' => 'Hotel Bellavista',
		'imgUrl' => 'https://www.kayak.it/rimg/himg/44/fe/90/leonardo-61545-147068318-531165.jpg?width=1366&height=768&crop=true',
		'description' => 'Hotel Bellavista Descrizione',
		'parking' => false,
		'vote' => 5,
		'distance_to_center' => 5.5
	],
	[
		'name' => 'Hotel Milano',
		'imgUrl' => 'https://www.bluhotels.it/sites/bluhotels/files/styles/feature_large/public/2022-05/Gianni_Buonsante_DJI_0230.jpg?itok=j2GL9nn5',
		'description' => 'Hotel Milano Descrizione',
		'parking' => true,
		'vote' => 2,
		'distance_to_center' => 50
	],

];

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>PHP-HOTEL</title>

	<!-- BOOTSTRAP -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<!-- FONT-AWESOME -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- CSS -->
	<link rel="stylesheet" href="./style.css">
	<!-- VUE JS -->
	<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
	<!-- AXIOS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.5/axios.min.js" integrity="sha512-TjBzDQIDnc6pWyeM1bhMnDxtWH0QpOXMcVooglXrali/Tj7W569/wd4E8EDjk1CwOAOPSJon1VfcEt1BI4xIrA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>
	<div class="container">
		<h1>Boolean Hotels</h1>
		<ul class="row row-cols-3">
			<?php
			foreach ($hotels as $hotel) {
			?>

				<li class="col">
					<div class="card">
						<h2>
							<?php echo $hotel['name'] ?>
						</h2>
						<div class="img-box">
							<img src="<?php echo $hotel['imgUrl'] ?>" alt="">
						</div>
						<div>
							<?php echo $hotel['description'] ?>
						</div>
						<div>
							Voto: <strong><?php echo $hotel['vote'] ?></strong>
						</div>
						<div>
							Distanza dal centro: <strong><?php echo $hotel['distance_to_center'] ?> km</strong>
						</div>
					</div>
				</li>

			<?php
			}
			?>
		</ul>
	</div>

	<!-- BOOTSTRAP JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

	<!-- MY JS -->
	<script type="text/javascript" src="./js/scripts.js"></script>
</body>

</html>