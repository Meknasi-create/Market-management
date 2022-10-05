<!DOCTYPE html>
<html lang="fr-CA">

<head>
    <script src="https://kit.fontawesome.com/bf65d11a7f.js" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="utf-8">
    <link href="/css/acc.css" rel="stylesheet">

    yield('title')
</head>

<body style="background-color: whitesmoke;">

    <div class="d-flex flex-column flex-shrink-0 p-3 light" id="menu">
        <div class="log" style="height: 30%">
        <a href="/">
            <img src="img/im.jpg" class="img-fluid logo">
        </a>
        <p class="acad" style="font-size: 100%; text-align:center; color:;">Académie régionale d'éducation et de formation TANGER-TETOUAN-Al-Hoceima direction provinciale
            de
            M'diq-Fnideq</p>
    </div>
    <div class="lis" style="height: 70%">

    <hr>
        <ul class="nav nav-pills flex-column" >
            <li>
                <a href="/liste_offre" class="nav-link link-dark @yield('offre')">
                    Offres
                </a>
            </li>
            <li>
                <a href="{{ url('/liste_avis') }}" class="nav-link link-dark @yield('avis')" aria-current="page">
                    Avis </a>
            </li>
            <li>
                <a href="/liste_decision" class="nav-link link-dark @yield('decision')">
                    Décision
                </a>
            </li>
            <li>
                <a href="/liste_cps" class="nav-link link-dark @yield('cps')">
                    CPS
                </a>
            </li>
            <li>
                <a href="/liste_reglement" class="nav-link link-dark @yield('reglement')">
                    Réglement
                </a>
            </li>
            <li>
                <a href="/liste_convocation" class="nav-link link-dark @yield('convocation')">
                    Convocations
                </a>
            </li>
            <li>
                <a href="/liste_jury" class="nav-link link-dark @yield('jury')">
                    Jurys
                </a>
            </li>
            <li>
                <a href="/process_verbal" class="nav-link link-dark @yield('pv')">
                    Proces Verbal
                </a>
            </li>
            <li>
                <a href="etat_engagement" class="nav-link link-dark @yield('etat_engagement')">
                    Etat d'engagement
                </a>
            </li>
            <li>
                <a href="/" class="nav-link link-dark @yield('etat_engagement')">
                    Déconnexion
                </a>
            </li>
        </ul>
        <hr>
    </div>
    </div>
    @yield('content')



</body>

</html>
