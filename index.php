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

$filteredHotels = [];

foreach ($hotels as $index => $hotel) {

	$addToArray = true;

	if(
		isset( $_GET['parking']) == true && ($_GET['parking']) != '' ) {

			if ( $_GET['parking'] =='y' && $hotel['parking'] == false ) {

				$addToArray = false;
			}
			elseif ( $_GET['parking'] =='n' && $hotel['parking'] == true ) {

				$addToArray = false;
			}
	}

	if(
		isset( $_GET['vote']) == true && ($_GET['vote']) != '' && is_numeric($_GET['vote'])) {
			if ($hotel['vote'] < $_GET['vote']) {
				$addToArray = false;
			}
		}

	if ( $addToArray == true) {
		$filteredHotels[] = $hotel;
	}
}
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
</head>

<body>
	<div class="container">
		<div>
			<form action="" method="GET">
				<div class="mb-3">
					<div class="row">
						<div class="col">
							<label for="parking" class="form-label">
								Parcheggio
							</label>
							<select class="form-select" name="parking" id="parking">
								<option value="">Indifferente</option>
								<option value="y">Si</option>
								<option value="n">No</option>
							</select>
						</div>
						<div class="col">
							<label for="vote" class="form-label">
								Voto
							</label>
							<input class="form-control" type="number" name="vote" id="vote" placeholder="Insersci un voto">
						</div>
					</div>
					
				</div>
				<div>
					<button type="submit" class="btn btn-primary ">
						Filtra
					</button>
				</div>
			</form>
		</div>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">Nome</th>
					<th scope="col">Descrizione</th>
					<th scope="col">Parcheggio</th>
					<th scope="col">Voto</th>
					<th scope="col">Distanza dal centro</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($filteredHotels as $hotel) {
				?>
					<tr>
						<th scope="row"><?php echo $hotel['name']; ?></th>
						<td><?php echo $hotel['description']; ?></td>
						<td><?php echo ($hotel['parking'] == true ? 'Si' : 'No'); ?></td>
						<td><?php echo $hotel['vote']; ?></td>
						<td><?php echo $hotel['distance_to_center']; ?></td>
					</tr>

				<?php
				}
				?>
			</tbody>
		</table>
	</div>
	</div>
</body>

</html>