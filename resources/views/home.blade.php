<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>welcome</title>

    <!-- <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/dist/js/bootstrap." rel="stylesheet"> -->

</head>
<body>
    <div class="container">
        <h3 class="text-primary">Bienvenue, Mr {{ $username }} vous êtes super cool!!! Prêt pour l'aventure qui se prepare ?</h3>
        <p>Merci de vous connecter à notre application. Voici quelques informations utiles :</p>
            <ul>
                <li>Explorez nos fonctionnalités passionnantes.</li>
                <li>Connectez-vous avec d'autres utilisateurs partageant les mêmes intérêts.</li>
                <li>Personnalisez votre profil pour rendre votre expérience unique.</li>
            </ul>
            
            <div class="card mt-4">
                <div class="card-body">
                    <h2 class="text-primary">Vos activités récentes</h2>
                    <ul>
                        <li>Vous avez publié un nouveau message dans le forum.</li>
                        <li>Vous avez reçu 5 nouveaux amis.</li>
                        <li>Vous avez complété une étape importante dans votre parcours d'apprentissage.</li>
                    </ul>
                </div>
            </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
</body>
</html>
