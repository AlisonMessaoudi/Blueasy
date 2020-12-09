<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLUESAY</title>

 
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- BOOTSTRAP JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

   <!-- STYLE CSS -->
   <link rel="stylesheet" href="portfolio.css"/>

   <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>


</head>
<body>

<section id="portfolio" class="container">

    <div id="header_portfolio" class="container row">

        <div class="column">
            <h2>Portfolio</h2>
            <div class="trait"></div>
        </div>


        <nav class="justify-content-end">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href=".photos">All</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="panoramas" href=".panoramas">Panoramas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="portraits" href=".portraits">Portraits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="macros" href=".macros">Macros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="journal" href=".journal">Journal</a>
                </li>
            </ul>
        </nav>

    </div>

    <div class="container mySlides">

        <div class="row">
    
            <div class="col">
                <img class="photos portraits" src="images/portfolio/1.png" alt="Image de pont"/>
            </div>
            <div class="col">
                <img class="photos panoramas" src="images/portfolio/2.png" alt="Image de pont brumeux"/>
            </div>
            <div class="col">
                <img class="photos journal" src="images/portfolio/3.png" alt="Image de lac brumeux"/>
            </div>
            <div class="col">
                <img class="photos macros" src="images/portfolio/4.png" alt="Image de lac brumeux"/>
            </div>
    
        </div>

        <div class="row">
    
            <div class="col">
                <img class="photos panoramas" src="IMAGES/PORTFOLIO/5.png" alt="Image de chalet en montagne"/>
            </div>
            <div class="col">
                <img class="photos portraits" src="IMAGES/PORTFOLIO/6.png" alt="Image de vague avec un surfer"/>
            </div>
            <div class="col">
                <img class="photos journal" src="IMAGES/PORTFOLIO/7.png" alt="Image de Montagne"/>
            </div>
            <div class="col">
                <img class="photos macros" src="IMAGES/PORTFOLIO/8.png" alt="Image de Montagne"/>
            </div>
    
        </div>
    
    </div>

</div>



</section>
    

<script src="portfolio.js"></script>
</body>
</html>