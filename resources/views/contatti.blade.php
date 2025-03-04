<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contatti</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="contatticss.css">
</head>

<body>

    <section class="get-in-touch">
        <h1 class="title">Contattami</h1>
        <form class="contact-form row">
           <div class="form-field col-lg-6">
              <input id="name" class="input-text js-input" type="text" required>
              <label class="label" for="name">Nome</label>
           </div>
           <div class="form-field col-lg-6 ">
              <input id="email" class="input-text js-input" type="email" required>
              <label class="label" for="email">E-mail</label>
           </div>
           <div class="form-field col-lg-6 ">
              <input id="company" class="input-text js-input" type="text" required>
              <label class="label" for="company">Nome Azienda</label>
           </div>
            <div class="form-field col-lg-6 ">
              <input id="phone" class="input-text js-input" type="text" required>
              <label class="label" for="phone">Numero di telefono</label>
           </div>
           <div class="form-field col-lg-12">
              <input id="message" class="input-text js-input" type="text" required>
              <label class="label" for="message">Messaggio</label>
           </div>
           <div class="form-field col-lg-12">
            <div class="row">
                <input class="submit-btn" type="submit" value="Submit"> 
                <button class="button btnBack">
                    <a href="/">Torna alla homepage</a>
                  </button>
            </div>

           </div>
        </form>
     </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
</html>