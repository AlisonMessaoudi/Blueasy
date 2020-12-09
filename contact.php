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
    <link rel="stylesheet" href="contact.css"/>

   <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

</head>
<body>

<section id="contact"> 

    <div class="container column titre">
        <h2>Contact</h2>
        <div class="trait"></div>
    </div>

    <form class="container form">
        
        <div class="row">

            <div class="column name_email">
                <div class="mb-2">
                    <label for="full_name" class="form-label">Full name</label>
                    <input type="text" class="form-control" id="full_name" aria-describedby="full_name">
                </div>
                
                <div class="mb-2">
                    <label for="email" class="form-label">Email</label>
                    <input type="password" class="form-control" id="email">
                </div>

                <br/>
            </div>

            <div class="column texte">
                <div>
                    <p>Applicake chocolate cake water toffee pie soufflé wafer. Tart marshmallow wafer macaroon cheesecake jelly. Gingerbread cookie soufflé sweet roll jelly-o.</p>
                </div>
                <div>
                    <p>Linda Newman 
                    <br/>
                    W325 State Road 123
                    <br/>
                    Mondovi, WAI(Wisconsin) 98746-54321
                    <br/>
                    (715)946-1234
                </div>
            </div>
        </div>

        <div>
            <label for="message" class="form-label">Message</label>
            <input type='textarea' rows="4" cols="50" class="form-control" id="message"/>
        </div>

        <button type="submit" class="btn btn-primary bouton_formulaire">Message</button>
        
    </form>

</section>
    

</body>
</html>