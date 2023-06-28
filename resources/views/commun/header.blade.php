<nav id="myNavbar" class="navbar navbar-expand-lg navbar-light bg-white scrolled fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="images/logo.png" height="40" alt="Logo Harmony Housing">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Trouver un logement</a>
                </li>
                <li class="nav-item dropdown" id="navbarDropdownParent">
                    <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" aria-haspopup="true"
                        aria-expanded="false">
                        Je suis propriétaire <i id="dropdownIcon" class="fa-solid fa-chevron-down"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Déposer une annonce</a>
                        <a class="dropdown-item" href="#">Comment ça marche</a>
                        <a class="dropdown-item" href="{{route('login-proprietaire')}}">Me connecter</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contactez-nous</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="btn btn-account">Mon compte</a>
                </li>
            </ul>
        </div>
</nav>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $("#navbarDropdownParent").hover(
            function() {
                $("#dropdownIcon").removeClass("fa-chevron-down");
                $("#dropdownIcon").addClass("fa-chevron-up");
            },
            function() {
                $("#dropdownIcon").removeClass("fa-chevron-up");
                $("#dropdownIcon").addClass("fa-chevron-down");
            }
        );
    });
</script>
