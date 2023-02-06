<?php
include __DIR__ . './Models/prodotti.php';
include __DIR__ . './Models/ciboAnimali.php';
include __DIR__ . './Models/accessoriAnimali.php';
include __DIR__ . './Models/giochiAnimali.php';


$product1 = new ciboAnimali("Royal Canin Mini Adult", "43,99",  "https://cdn.dogsitter.it/it/images/shop/rc-dog-mini-adult-big.jpg", "Cane", "545g");
$product2 = new ciboAnimali("Almo Nature Holistic Maintenance Mediuom Large Tonno e Riso", "44,99",  "https://shop-cdn-m.mediazs.com/bilder/almo/nature/holistic/medium/adult/con/agnello/fresco/3/800/26699_pla_almo_nature_holistic_adult_lamm_reis_medium_741_12kg_dog_3.jpg", "Cane", "600g");
$product3 = new ciboAnimali("Almo Nature Cat Daily Lattina", "34,99",  "https://www.amoreanimaleshop.it/wp-content/uploads/2021/02/Almo-Nature-Cat-Daily-Coniglio-400.jpg", "Gatto", "400g");
$product4 = new ciboAnimali("Mangime Per Pesci Guppy in Fiocchi", "2,95",  "https://www.pets-house.it/6903-large_default/tetra-guppy-fiocchi-100-ml.jpg", "Pesce", "30g");

$products = [$product1, $product2, $product3, $product4];

//Accessori
$product5 = new accessoriAnimali("Voliera Wilma in Legno", "184,99",  "https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg?v=1760290610", "Uccello", "M: L 83 x P 67 x H 153 cm",  "Legno",);
$product6 = new accessoriAnimali("Cartucce Filtranti per Filtro EasyCrystal", "2,29", "https://www.koi-franciacorta.it/pimages/TETRA-EASYCRYSTAL-FILTERPACK-CON-CARBONE-CONFEZIONE-DA-3-PEZZI-E-extra-big-5544-824.jpg", "Pesce",  "Materiale Espanso", "ND");
$accessori= [$product5, $product6];

//Giochi
$productChild7 = new giochiAnimali("Kong Classic", "13,49",  "https://www.naturepetshop.it/wp-content/uploads/T1_1_1000x1000.jpg", "Cane", "Galleggia e Rimbalza");
$productChild8 = new giochiAnimali("Topini di peluche Trixie",  "4,99",  "https://shop-cdn-m.mediazs.com/bilder/topini/di/peluche/trixie/8/800/42535_trixie_plueschmaus_weiss_hs_02_8.jpg", "Gatto", "Morbido con codina in corda");
$giochi = [$product7, $product8];