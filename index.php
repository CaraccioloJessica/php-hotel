<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP-Hotel</title>

  <!-- array di dati da stampare in pagina -->
  <?php
    $hotels = [
  	  [
  	  	'name' => 'Hotel Belvedere',
  	  	'description' => 'Hotel Belvedere Descrizione',
  	  	'parking' => true,
  	  	'vote' => 4,
  	  	'distance_to_center' => 10.4
  	  ],
  	  [
  	  	'name' => 'Hotel Futuro',
  	  	'description' => 'Hotel Futuro Descrizione',
  	  	'parking' => true,
  	  	'vote' => 2,
  	  	'distance_to_center' => 2
  	  ],
  	  [
  	  	'name' => 'Hotel Rivamare',
  	  	'description' => 'Hotel Rivamare Descrizione',
  	  	'parking' => false,
  	  	'vote' => 1,
  	  	'distance_to_center' => 1
  	  ],
  	  [
  	  	'name' => 'Hotel Bellavista',
  	  	'description' => 'Hotel Bellavista Descrizione',
  	  	'parking' => false,
  	  	'vote' => 5,
  	  	'distance_to_center' => 5.5
  	  ],
  	  [
  	  	'name' => 'Hotel Milano',
  	  	'description' => 'Hotel Milano Descrizione',
  	  	'parking' => true,
  	  	'vote' => 2,
  	  	'distance_to_center' => 50
  	  ],
    ];
  ?>
</head>

<body>
<!-- Inizio di codice da vedere in pagina -->
  <header>
    <h1> Hotel list</h1>
  </header>
  
  <main>
    <!-- tabella per singoli elementi  -->
    <table>
      <thead>
        <tr>
          <th> Name </th>
          <th> Description </th>
          <th> Parking </th>
          <th> Vote </th>
          <th> Distance to center </th>
        </tr>
      </thead>

      <tbody>
        <!-- ciclo per singoli elementi array -->
        <?php
          foreach($hotels as $hotel) {
            $name = $hotel['name'];
            $description = $hotel['description'];
            $parking = $hotel['parking'] ? '&check;' : '&cross;';
            $vote = $hotel['vote'];
            $distance = $hotel['distance_to_center'];

            // tabella con elementi
            echo "<tr>
                  <td> $name </td>
                  <td> $description </td>
                  <td> $parking </td>
                  <td> $vote </td>
                  <td> $distance </td>
                  </tr>";
          }
        ?>
      </tbody>  
    </table>
  </main>  
</body>
</html>