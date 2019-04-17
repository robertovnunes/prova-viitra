<!doctype HTML>
    <html lang="pt-BR">
        <head>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <link rel="stylesheet" href="css/style.css">
        </head>
        <body>
            <div class="container-fluid">
                <img src="img/logo2.png" id="logo" class="col-md-2 align-items-start">
                <div class="col-md-5 align-items-center col-10">
                        <form id="postar" method="post" action="/post_t.php">
                            <div class="form-group">
                                <textarea name="texto" id="texto" class="form-control-lg" row=10 ></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" id="enviar" form="postar" class="btn btn-success">Enviar</button>
                            </div>
                        </form>
                </div>
                <div id="feed">
                    
                </div>
            </div>
        </body>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    </html>