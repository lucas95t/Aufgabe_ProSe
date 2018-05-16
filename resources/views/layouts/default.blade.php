<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-default">
      <div class="container-fluid" style="margin-top:1em" >

        <div>
          <!--Navigationsbar-->
          <ul class="nav navbar-nav" >
            <li style="border: 1px solid; border-radius: 10px 10px 0px 0px; border-bottom: 0px" ><a href="<?php use Illuminate\Support\Facades\URL;

echo URL::to('/start')?>">Start</a></li>
            <li style="border: 1px solid; border-radius: 10px 10px 0px 0px; border-bottom: 0px"><a href="<?php echo URL::to('/termine')?>">Termine</a></li>
            <li style="border: 1px solid; border-radius: 10px 10px 0px 0px; border-bottom: 0px"><a href="#">Veranstaltungen</a></li>
            <li style="border: 1px solid; border-radius: 10px 10px 0px 0px; border-bottom: 0px"><a href="#">Einstellungen</a></li>
          </ul>

          <!--Anmeldefelder-->
          <form style="float: right">
            <input type="text" placeholder="Emailadresse" id="Emailadresse" name="Emailadresse">
            <input type="text" placeholder="Passwort" id="Passwort" name="Passwort">
            <button type="submit">Login</button>
          </form>
        </div>
    </div>
    </nav>
    
    @yield('content')

</body>
</html>
