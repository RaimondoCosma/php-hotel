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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- /Bootstrap -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 class="text-center">HOTELS</h1>
    <section class="container d-flex flex-wrap">
        <?php foreach($hotels as $index => $hotel) { ?>
            <table class="hotels table table-striped border-right border-left">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Hotel N° <?php echo $index + 1 ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($hotel as $key => $value) { 
                        if ( ($key === 'parking') ) {
                            $value = $value ? "Yes" : "No";  
                        }
                        if ( $key === 'distance_to_center' ) {
                            $key = 'distance to center';
                            $value .= 'km';
                        }                    
                    ?>
                    <tr>
                        <th scope="row"><?php echo $key ?></th>
                        <td><?php echo $value ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } ?>
    </section>
</body>
</html>