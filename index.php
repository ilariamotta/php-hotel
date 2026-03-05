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
print_r($_GET);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestige Hotels</title>
<!-- stylesheet -->
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark">
<div class="min-vh-100">
    <!-- HEADER -->
    <header>
        <div class="container pt-5">
            <h1 class="text-white">Prestige Hotels</h1>
            <h2 class="text-secondary">Your Luxury Experience</h2>
        </div>
    </header>
    <!-- MAIN -->
    <div class="container py-5">
        <div class="row g-4">
            <!-- FILTERS -->
            <div class="col-2 order-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Filters</h5>
                        <form method="GET">
                            <!-- rating radio -->
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="min_rate" id="radio1" value="1" checked>
                                <label class="form-check-label" for="radio1">
                                    1
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="min_rate" id="radio2" value="2">
                                <label class="form-check-label" for="radio2">
                                    2
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="min_rate" id="radio3" value="3">
                                <label class="form-check-label" for="radio3">
                                    3
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="min_rate" id="radio4" value="4">
                                <label class="form-check-label" for="radio4">
                                    4
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="min_rate" id="radio5" value="5">
                                <label class="form-check-label" for="radio5">
                                    5
                                </label>
                            </div>
                            <!-- parking checkbox -->
                            <div class="form-check mt-3">
                                <input class="form-check-input" type="checkbox" name="parking" value="1" id="checkDefault">
                                <label class="form-check-label" for="checkDefault">
                                    Parcheggio disponibile
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 mt-3">
                                Applica filtri
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- HOTELS -->            
            <?php foreach ($hotels as $hotel) { ?>
                <div class="col-md-3 col-lg-2 col-sm-6 order-1">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $hotel["name"]; ?>
                            </h5>
                            <p class="card-text">
                                <?php echo $hotel["description"]; ?>
                            </p>
                            <p>
                                <strong>Vote:</strong>
                                <?php echo $hotel["vote"]; ?>/5
                            </p>
                            <p>
                                <strong>Distance:</strong>
                                <?php echo $hotel["distance_to_center"]; ?> km
                            </p>
                            <p>
                                <strong>Parking:</strong>
                                <?php 
                                echo $hotel["parking"] ? "Yes" : "No" ; ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
</body>
</html>