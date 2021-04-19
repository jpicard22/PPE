<?php include 'templates/header.php'; ?>

<main style="width:auto">

    <div class="dotted">

        <div id="carouselExemple" class="carousel slide" data-ride="carousel" data-interval="3000">

            <ol class="carousel-indicators">
                <li data-target="#carouselExemple" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExemple" data-slide-to="1"></li>
                <li data-target="#carouselExemple" data-slide-to="2"></li>
            </ol>


            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="images/reading-2605540_1920.jpg" alt="Carrousel slide 1" class="d-block">
                </div>

                <div class="carousel-item">
                    <img src="images/book-112747_1920.jpg" alt="Carrousel slide 2" class="d-block">
                </div>

                <div class="carousel-item">
                    <img src="images/storytelling-4203628_1920.jpg" alt="Carrousel slide 2" class="d-block">
                </div>

            </div>

            <a href="#carouselExemple" class="carousel-control-prev" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="ture"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a href="#carouselExemple" class="carousel-control-next" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>


        <script>
            $('.carousel').carousel({

                pause: "null"

            })
        </script>

    </div>



    <div class="blue">

        <div class="row">
            <div class="col-sm-4">
                <p class="article">Pouzy-Mésangy, petite commune de 2500 habitants met en place grâce à l’initiative de Madame Guili (mairesse) cette plate-forme qui vous permet de louer des livres entres habitants. Ils doivent être ensuite déposé à la mairie pour être disponible via chacun des utilisateurs. Il suffit juste de s’inscrire en cliquant sur le bouton à droite. </p>
            </div>
            <div class="col-sm">
                <img class="eglise" style="float:center" src="images/Eglise2.PNG" alt="eglise">
            </div>
            <div class="col-sm-2 horaires">
                <p> <strong>Les horaires d’ouvertures :</strong></p>

                <p>Lundi : 8h30 – 12h / 14h – 16h30</p>
                <p>Mardi : 8h30 – 12h / 14h – 16h30</p>
                <p>Mercredi : 8h30 – 12h / 14h – 16h30</p>
                <p>Jeudi : fermé / 14h – 16h30</p>
                <p>Vendredi : 8h30 – 12h / 14h – 16h30</p>
                <p>Samedi : 8h30 – 12h</p>

            </div>
        </div>
    </div>
    </div>


    <?php include 'templates/footer.php'; ?>