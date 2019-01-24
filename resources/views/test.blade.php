<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Used-Auction</title>

        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

        <link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet"></link>
        <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
        <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>

        <script src="vue-instant/dist/vue-instant.browser.js"></script>

        <script type='text/javascript' src='jquery/jquery.autocomplete.js'></script>
        <script type="text/javascript" src="jquery/lib/jquery.js"></script>
        <script type='text/javascript' src='jquery/lib/jquery.bgiframe.min.js'></script>
        <script type='text/javascript' src='jquery/lib/jquery.ajaxQueue.js'></script>

        <link rel="stylesheet" type="text/css" href="jquery/jquery.autocomplete.css" />


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <script src="jquery-1.6.4.min.js"></script>
        <script src="jquery.infield.label.js"></script>
        <!-- Styles -->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/vue@2.5.21/dist/vue.js"></script>
        <!-- standard library -->
        <style>
         body{
              background-color:#c5f0ca;
         }

        </style>
    </head>
    <body>
        <!-- <div class="container"> -->
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="/">HOME</a>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Disabled</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        <!-- </div> -->
        <div>
            <form autocomplete="off" action="/register" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">ID</label>
                    <input type="text" id="id" name="id" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="user@example.com" required>
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="name" id="name" name="name" class="form-control" placeholder="name" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                <div class="form-group" data-toggle="buttons">
                    <select class="form-control" id="sex" name="sex">
                        <option value="man">man</option>
                        <option value="woman">woman</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-outline-secondary btn-sm">Submit</button>
            </form>
        </div>
        {{ Auth::check() }}

        <form role="form" action="/login" method="post">
            @csrf
            <table class="table center-block" id="login_form">
                <tr>
                    <td colspan="3"> <input class="form-control form-control" type="text" name="id" placeholder="ID" required auto> </td>
                </tr>
                <tr>
                    <td colspan="3"> <input class="form-control form-control" type="password" name="password" placeholder="PASSWORD" required auto> </td>
                </tr>
                <tr>
                    <td colspan="3"> <button type="submit" class="form-control form-control btn btn-outline-info" name="button">LOGIN</button> </td>
                </tr>
                <tr>
                    <td><router-link to="" class="user_link">ID찾기</router-link></td>
                    <td><router-link to=""class="user_link">비밀번호찾기</router-link></td>
                    <td><router-link to=""class="user_link">회원가입</router-link></td>
                </tr>
            </table>
        </form>
    </body>
</html>
