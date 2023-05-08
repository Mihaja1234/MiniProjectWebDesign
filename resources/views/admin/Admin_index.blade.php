<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name="description" content="HASINJAKA 1543, l'IA pour Hasinjaka">
        <title>ETU001543</title>
        <link rel="stylesheet" href="assets/Login/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/Login/fonts/fontawesome-all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" href="assets/Login/css/Ludens-Users---2-Register.css">
        <link rel="stylesheet" href="assets/Login/css/styles.css">
        <style>
            body {
                background-color: #f8f9fa;
            }

            .card {
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
                margin: 50px auto;
                max-width: 400px;
                padding: 30px;
            }

            h2.text-center {
                color: #dc3545;
                font-size: 30px;
                font-weight: bold;
                margin-bottom: 30px;
            }

            .form-group input.form-control {
                border: 1px solid #dc3545;
                border-radius: 5px;
                padding: 10px;
            }

            .form-group button.btn-primary {
                background-color: #dc3545;
                border: none;
                font-weight: bold;
            }

            .alert.alert-success {
                background-color: #fff;
                text-align: center;
                border-style: none;
                margin-bottom: 16.5px;
            }

            .alert.alert-success span {
                color: #dc3545;
            }
        </style>
    </head>
    <body>

        <div class="card">
            <form action="{{url('/log_admin')}}" method="post">
                {{ csrf_field() }}
                <h2 class="text-center">Bienvenue Admin</h2>
                <div class="form-group">
                    <input class="form-control" type="text" name="mail" value="admin" required placeholder="Email">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" id="password" name="mdp" value="admin" placeholder="Mot de passe">
                </div>

                <div id="passwordsError" style="display: none;margin-bottom: 16.5px;">
                    <span id="errorMessage" class="text-danger" style="font-size:13px;"></span>
                </div>
                <br><br>
                <div class="form-group">
                    <button class="btn btn-primary d-block w-100" id="submitButton" type="submit">SE CONNECTER</button>
                </div>
                @IF (isset($erreur))
                <div class="alert alert-success flash animated" role="alert" style="background: rgb(255,255,255);text-align: center;border-style:none;">
                    <span style="color: #dc3545;"><i class="fas fa-exclamation"></i><strong>&nbsp;</strong>{{$erreur}}</span>
                </div>
                @ENDIF
            </form>
            <a href="{{ url('/front') }}">Front Office</a>        
        </div>

        <script src="assets/Login/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/Login/js/bs-init.js"></script>

    </body>
</html>

