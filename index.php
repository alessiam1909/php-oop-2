<?php
include __DIR__ . '/db.php'
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>PHP OOP-2</title>
</head>
<body>
<div class="container-fluid">
        <h1 class="text-center mt-4 titolo">Zoolean Shop</h1>
        <div class="row d-flex justify-between riga">
            <div class="card-con">
                <?php foreach ($products as $prodotto) { ?>
                    <div class="card m-2">
                        <img class="card-img-top" src="<?php echo $prodotto->image; ?>" alt="immagine prodotto">
                        <div class="card-body">
                            <h3><?php echo $prodotto->title; ?></h3>
                            <p class="card-text">
                                <span>
                                    <?php echo setIcon($prodotto->race); ?>
                                    <?php echo $prodotto->race; ?>
                                </span>
                            </p>
                            <p class="card-text ">Prezzo:
                                <span>
                                    <?php echo $prodotto->price; ?>&euro;
                                </span>
                            </p>
                            <p class="card-text">Peso:
                                <span>
                                    <?php echo $prodotto->weight; ?>
                                </span>
                            </p>
                            <p class="card-text">Ingredienti:
                                <span>
                                    <?php echo $prodotto->ingredients; ?>
                                </span>
                            </p>
                        </div>
                    </div>
                <?php } ?>
                <?php foreach ($accessori as $prodotto) { ?>

                    <div class="card m-2">
                        <img class="card-img-top" src="<?php echo $prodotto->image; ?>" alt="immagine prodotto">
                        <div class="card-body">
                            <h3><?php echo $prodotto->title; ?></h3>
                            <p class="card-text">
                                <?php echo setIcon($prodotto->race); ?>
                                <span>
                                    <?php echo $prodotto->race; ?>
                                </span>
                            </p>
                            <p class="card-text ">Prezzo:
                                <span>
                                    <?php echo $prodotto->price; ?>&euro;
                                </span>
                            </p>
                            <p class="card-text">Dimensioni:
                                <span>
                                    <?php echo $prodotto->dimension; ?>
                                </span>
                            </p>
                            <p class="card-text">Materiale:
                                <span>
                                    <?php echo $prodotto->material; ?>
                                </span>
                            </p>
                        </div>
                    </div>
                <?php } ?>
                <?php foreach ($giochi as $prodotto) { ?>
                    <div class="card m-2">
                        <img class="card-img-top" src="<?php echo $prodotto->image; ?>" alt="Immagine prodotto">
                        <div class="card-body">
                            <h3><?php echo $prodotto->title; ?></h3>
                            <p class="card-text">
                                <?php echo setIcon($prodotto->race); ?>
                                <span>
                                    <?php echo $prodotto->race; ?>
                                </span>
                            </p>
                            <p class="card-text ">Prezzo:
                                <span>
                                    <?php echo $prodotto->price; ?>&euro;
                                </span>
                            </p>
                            <p class="card-text">Caratteristiche:
                                <span>
                                    <?php echo $prodotto->description; ?>
                                </span>
                            </p>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
</body>
</html>