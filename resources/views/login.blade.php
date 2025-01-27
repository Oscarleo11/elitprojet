<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Login</title>

</head>

<body>
<form method="post" action="{{route('login.user')}}">
    @csrf
    <div class="container" style="padding-top: 10px;">
        <div class="row">
            <h1 class="text-center">Connexion</h1>
            @if(Session::has('message'))
               <div class="alert alert-info" role="alert">{{Session::get('message')}}</div>
            @endif
        </div>
        <div class="row">
            <div class="form-group">
                 <label for="" class="control-label">Email</label>
                 <input type="email" class="form-control" name="email" >
                 @error('email') <p class="text-info">'{{ $message }}'</p>@enderror
            </div>
            <div class="form-group">
                <label for="" class="control-label">Mot de passe</label>
                <input type="password" class="form-control" name="password" >
                @error('password') <p class="text-info">'{{ $message }}'</p>@enderror
            </div>
            <div class="form'group">
                <input type="submit" class="btn btn-primary form-control" name="envoyer" value="Connecter vous"  style="margin-top: 40px; margin-bottom: 30px;">
            </div>
            <a href="/register">S'inscrire</a>
        </div>
    </div>
</form>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

</body>
</html>

