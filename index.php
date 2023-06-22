<?php 
    require __DIR__ . '/models/Prodotti.php';
    require __DIR__ . '/models/Giochi.php';
    require __DIR__ . '/models/Cuccie.php';


$ListaGiochi = [
    new Giochi('Gioco per cani TIAKI palla con sporgenze massaggianti', 3.49 ,'Classica palla gioco per cani, un must per i pelosetti di tutte le taglie, realizzata in materiale robusto, resistente alle intemperie, galleggiante, le sue protuberanze massaggiano le gengive', 'https://shop-cdn-m.mediazs.com/bilder/gioco/per/cani/tiaki/palla/con/sporgenze/massaggianti/9/800/307597_pla_stacheliger_ball_fg_4839_9.jpg','9  ',' ca. Ø 8,3 cm', '65 g'),
    new Giochi('KONG Classic', 6.46 ,'Gioco KONG Classic: l originale! Salta e rimbalza di qua e di là, soddisfa il bisogno di masticare e di giocare del cane, ideale da inseguire, masticare e riportare, riempibile con snack, in caucciù','https://shop-cdn-m.mediazs.com/bilder/kong/classic/2/800/46452_pla_kong_classic_hs_01_2.jpg','4  ','ca. L 4,5 x P 4,5 x H 7 cm','9 kg'),
    new Giochi('Trixie corda gioco per cani', 3 ,'Corda gioco con nodi di Trixie per cani, in diverse misure, perfetta per il tira e molla, contribuisce a pulire gli spazi interdentali in modo giocoso, in cotone robusto ma leggero. ', 'https://shop-cdn-m.mediazs.com/bilder/trixie/corda/gioco/per/cani/8/800/7992_pla_trixie_spieltau_grau_hs8_8.jpg','6  ','L 5,4', '10 g'),
];

$ListaCuccie = [
    new Cuccie('Cuccia per cani Spike Classic', 92,'Cuccia per cani Spike Classic, in legno di cipresso di Cunningham oleato, con tetto in cartone bitumato a spioventi. Piedini regolabili in altezza, ideale in caso di pioggia.','https://shop-cdn-m.mediazs.com/bilder/cuccia/per/cani/spike/classic/9/400/60837_spike_classic_outside_fg_9141_9.jpg','5  ', '54 x 77 x 67 cm', 'legno di cipresso di Cunningham (laccato), tetto: cartone bitumato'),
    new Cuccie('Letto per cani Milan', 50,'Elegante letto per cani Milan, con bordo alto e spesso, morbido cuscino double-face e accesso ribassato, protegge il tuo pet dal pavimento freddo. Colore: blu con fantasia a zig-zag.','https://shop-cdn-m.mediazs.com/bilder/letto/per/cani/milan/1/800/203813_pla_hundebett_milan_fg_7979_1.jpg','7  ', 'L 85 x P 70 x H 24 cm', 'rivestimento: 100% poliestere, imbottitura: 100% fibra di poliestere, fondo: PVC'),
];

$ListaCuccie[0]->SetPeso(10,);
$ListaCuccie[1]->SetPeso(20,);

?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <header>
        <div class="d-flex justify-content-center">
            <h1>Shop per Cani</h1>
        </div>
    </header>
    <main>
        <div>
            <h3 class="pb-2 pt-4 d-flex justify-content-center bg-light ">Giochi:</h3>

            <div class="d-flex justify-content-evenly">
                <?php foreach($ListaGiochi as $list) {?>
                    <div class="d-flex">
                        <div class="card lunghezzaCard" >
                            <img src="<?= $list->imgProdotto ?>">
                            <div class="card-body">
                               <h5 class="card-title">Gioco Cane</h5>
                               <p class="card-text"><strong>Nome:</strong> <?= $list->nome ?></p>
                               <p class="card-text"><strong>Prezzo :</strong> <?= $list->prezzo ?>€</p>
                               <p class="card-text"><strong>Descrizione :</strong> <?= $list->descrizioneOggetto ?></p>
                               <p class="card-text"><strong>Dimensione/Peso :</strong> <?= $list->dimensioneGioco, $list->pesoGioco ?></p>
                               <p class="card-text"><strong>Recensione :</strong> 
                               <?php
                               try{
                                echo $list->getRecensione();
                               } catch (RangeException $e) {
                                echo  $list->recensione  .  $e->getMessage();
                               } catch (Exception $e) {
                                echo  $list->recensione  .  $e->getMessage();
                               }
                               ?> </p>
                               <a class="btn btn-dark">Acquista Prodotto</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="mt-4">
            <h3 class="pb-3 pt-4 d-flex justify-content-center bg-light ">Cuccie:</h3>

                <div class="d-flex justify-content-evenly">
                    <?php foreach($ListaCuccie as $list) {?>
                        <div class="d-flex">
                            <div class="card lunghezzaCard">
                                <img src="<?= $list->imgProdotto ?>">
                                <div class="card-body">
                                    <h5 class="card-title">Cuccia Cane</h5>
                                    <p class="card-text"><strong>Nome :</strong> <?= $list->nome ?></p>
                                    <p class="card-text"><strong>Prezzo :</strong> <?= $list->prezzo ?>€</p>
                                    <p class="card-text"><strong>Descrizione :</strong> <?= $list->descrizioneOggetto ?></p>
                                    <p class="card-text"><strong>Dimensione :</strong> <?= $list->dimensioneCuccia ?></p>
                                    <p class="card-text"><strong>Materiale :</strong> <?= $list->materialeCuccia ?></p>
                                    <p class="card-text"><strong>Peso :</strong> <?= $list->GetPeso() ?></p>
                                    <p class="card-text"><strong>Recensione :</strong> 
                               <?php
                               try{
                                echo $list->getRecensione();
                               } catch (RangeException $e) {
                                echo  $list->recensione  .  $e->getMessage();
                               } catch (Exception $e) {
                                echo  $list->recensione  .  $e->getMessage();
                               }
                               ?> </p>
                                    <a class="btn btn-dark">Acquista Prodotto</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
    </main>
</body>
</html>