<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Se connecter - Harmony Housing</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="images/flavicon.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
</head>

<body class="pt-5">

    <div class="container py-3">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="pb-4 text-center">
                    <a href="/"><img class="img-fluid" style="height: 100px;" src="/images/flavicon.png"
                            alt="Logo Harmony Housing"></a>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center title-accueil mt-3" style="font-weight: bold;">Espace
                            d'administration</h4>
                        <form>
                            <div class="form-group mt-5">
                                <div class="input-group pb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-envelope"></i>
                                        </span>
                                    </div>
                                    <input style="background-color: #F8F8FF;" placeholder="Votre adresse email"
                                        type="email" class="form-control" id="email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-lock"></i>
                                        </span>
                                    </div>
                                    <input style="background-color: #F8F8FF;" placeholder="Mot de passe" type="password"
                                        class="form-control" id="password" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text toggle-password">
                                            <i class="fas fa-eye"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group pt-1">
                                <a href="#" style="float: right; text-decoration: none;"><span
                                        style="color: #36417D;">Mot de passe
                                        oublié ?</span></a>
                            </div>
                            <div class="text-center pt-5 pb-3">
                                <button type="submit" class="btn btn-con">Se connecter</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="py-3">
                    <a href="/" style="text-decoration: none;"><span style="color: #36417D;"><i
                                class="fa-solid fa-arrow-left"></i> Allez sur le
                            site Harmony Housing</span></a>
                </div>

            </div>
        </div>
    </div>

    <script>
        const togglePassword = document.querySelector('.toggle-password');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function() {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.querySelector('i').classList.toggle('fa-eye-slash');
        });
    </script>

</body>

</html>
