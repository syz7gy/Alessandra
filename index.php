<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Para Mi Amor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <header>
        <h1>El Cancionero de Alessandra</h1>
    </header>
    <main>
        <p>Estas son las canciones que me hacen pensar en ti:</p>

        <!--
        <div class="list-group">
            <a href="https://youtu.be/gmJQvCS1T3c?si=KN0Vr6ugQqLDQrOc" class="list-group-item list-group-item-action">Echo - Incubus</a>
            <a href="https://youtu.be/_WcWHZc8s2I?si=N_0rUbmiigWOE10P" class="list-group-item list-group-item-action">No Ordinary Love - Sade</a>
            <a href="https://youtu.be/C0BLKudnyNo?si=QnnxR5MHB8WWoy8Z" class="list-group-item list-group-item-action">Paradise - Sade</a>
            <a href="https://youtu.be/NYz8xs163YU?si=GMFXkJw2ryHRgIgo" class="list-group-item list-group-item-action">Is It A Crime - Sade</a>
            <a href="https://youtu.be/Kwdweif1YI0?si=nnF125GQx3ZJDszm" class="list-group-item list-group-item-action">Kiss From A Rose - Seal</a>
            <a href="https://youtu.be/mLa0-sQg1YM?si=20ibfRsqISyoj06n" class="list-group-item list-group-item-action">Minerva - Deftones</a>
            <a href="https://youtu.be/Odcn6qk94bs?si=jR7kmP66iCIK6-bA" class="list-group-item list-group-item-action">I Can't Tell You Why - Eagles</a>
            <a href="https://youtu.be/Xj8uuBi48Hw?si=rxQLFZ-EEJdPrnz3" class="list-group-item list-group-item-action">Is This Love - Whitesnake</a>
            <a href="https://youtu.be/__EVr7CF3Hw?si=Jflo1Eow0A1F19kJ" class="list-group-item list-group-item-action">Disintegration - The Cure</a>
            <a href="https://youtu.be/90A5Iys9u3w?si=v-278QVeVlFWG56v" class="list-group-item list-group-item-action">Lovesong - The Cure</a>
            <a href="https://youtu.be/mqJonDvo7bs?si=QH_KNHkCFgpET60g" class="list-group-item list-group-item-action">Pictures Of You - The Cure</a>
            <a href="https://youtu.be/FM7ALFsOH4g?si=j_AcHpELogbBG9_n" class="list-group-item list-group-item-action">All I Need - Radiohead</a>
            <a href="https://youtu.be/EWIgEtkE3GA?si=6CHm9dM5AQ2nUGO3" class="list-group-item list-group-item-action">Georgy Porgy - Toto</a>
            <a href="https://youtu.be/qmOLtTGvsbM?si=t-JUiTFEoqh5k6gn" class="list-group-item list-group-item-action">Rosanna - Toto</a>
        </div>
        -->
        
    <div class="container text-center">
        <div class="row d-flex justify-content-center">
            <?php
                $canciones = [
                    ["titulo" => "Echo - Incubus", "enlace" => "https://youtu.be/gmJQvCS1T3c?si=KN0Vr6ugQqLDQrOc", "portada" => "https://i.scdn.co/image/ab67616d0000b273289320ef78f164a472698926"],
                    ["titulo" => "No Ordinary Love - Sade", "enlace" => "https://youtu.be/_WcWHZc8s2I?si=N_0rUbmiigWOE10P", "portada" => "https://cdn-images.dzcdn.net/images/cover/975b8e921822b6e01de1663ef02cee08/0x1900-000000-80-0-0.jpg"],
                    ["titulo" => "Paradise - Sade", "enlace" => "https://youtu.be/C0BLKudnyNo?si=QnnxR5MHB8WWoy8Z", "portada" => "https://i.scdn.co/image/ab67616d0000b2738d6c05fb48d5834d425128bf"],
                    ["titulo" => "Is It A Crime - Sade", "enlace" => "https://youtu.be/NYz8xs163YU?si=GMFXkJw2ryHRgIgo", "portada" => "https://http2.mlstatic.com/D_NQ_NP_789978-MLU69239600227_052023-O.webp"],
                    ["titulo" => "Kiss From A Rose - Seal", "enlace" => "https://youtu.be/Kwdweif1YI0?si=nnF125GQx3ZJDszm", "portada" => "https://i.scdn.co/image/ab67616d0000b27333d4866ed921300e8ef50808"],
                    ["titulo" => "Minerva - Deftones", "enlace" => "https://youtu.be/mLa0-sQg1YM?si=20ibfRsqISyoj06n", "portada" => "https://i.scdn.co/image/ab67616d0000b273c09a38cf054085b18eeb88ae"],
                    ["titulo" => "I Can't Tell You Why - Eagles", "enlace" => "https://youtu.be/Odcn6qk94bs?si=jR7kmP66iCIK6-bA", "portada" => "https://shop-millercollective.com/cdn/shop/files/the-eagles-the-long-run-359920.jpg?v=1722353972"],
                    ["titulo" => "Is This Love - Whitesnake", "enlace" => "https://youtu.be/Xj8uuBi48Hw?si=rxQLFZ-EEJdPrnz3", "portada" => "https://i.scdn.co/image/ab67616d0000b273eeac17b787eeec6f10774956"],
                    ["titulo" => "Disintegration - The Cure", "enlace" => "https://youtu.be/__EVr7CF3Hw?si=Jflo1Eow0A1F19kJ", "portada" => "https://i.scdn.co/image/ab67616d0000b273641c33269d4aad8c9e77eae5"],
                    ["titulo" => "Lovesong - The Cure", "enlace" => "https://youtu.be/90A5Iys9u3w?si=v-278QVeVlFWG56v", "portada" => "https://i.scdn.co/image/ab67616d0000b273641c33269d4aad8c9e77eae5"],
                    ["titulo" => "Pictures Of You - The Cure", "enlace" => "https://youtu.be/mqJonDvo7bs?si=QH_KNHkCFgpET60g", "portada" => "https://i.scdn.co/image/ab67616d0000b273641c33269d4aad8c9e77eae5"],
                    ["titulo" => "All I Need - Radiohead", "enlace" => "https://youtu.be/FM7ALFsOH4g?si=j_AcHpELogbBG9_n", "portada" => "https://i.scdn.co/image/ab67616d0000b273de3c04b5fc750b68899b20a9"],
                    ["titulo" => "Georgy Porgy - Toto", "enlace" => "https://youtu.be/EWIgEtkE3GA?si=6CHm9dM5AQ2nUGO3", "portada" => "https://cdn-images.dzcdn.net/images/cover/18a61113ea28b3261a97c6ca167f00ba/0x1900-000000-80-0-0.jpg"],
                    ["titulo" => "Rosanna - Toto", "enlace" => "https://youtu.be/qmOLtTGvsbM?si=t-JUiTFEoqh5k6gn", "portada" => "https://i.scdn.co/image/ab67616d0000b2734a052b99c042dc15f933145b"],
                    ["titulo" => "Africa - Toto", "enlace" => "https://youtu.be/FTQbiNvZqaY?si=2VCCBEtlsCyCuamC", "portada" => "https://i.scdn.co/image/ab67616d0000b2734a052b99c042dc15f933145b"]
                ];

                foreach ($canciones as $cancion) {
                    $titulo = explode(" - ", $cancion['titulo']);
                    $artista = $titulo[1];
                    $titulo = $titulo[0];

                    echo '<div class="col-12 col-sm-6 col-md-3 mb-4">
                            <div class="card" style="width: 18rem;">
                                <img src="' . $cancion['portada'] . '" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">' . $titulo . '</h5>
                                    <p class="card-text">' . $artista . '</p>
                                    <a href="' . $cancion['enlace'] . '" class="btn btn-primary" target="_blank">Ver</a>
                                </div>
                            </div>
                        </div>';
                }
            ?>
        </div>
    </div>

    </main>
    <footer>
        <p>Tantas cosas bellas que me recuerdan a ti.</p>
    </footer>
</body>
</html>
