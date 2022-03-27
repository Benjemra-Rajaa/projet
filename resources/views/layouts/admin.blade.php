<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Clean Blog </title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->

        <!-- Google fonts-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.html"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                {{-- <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about.html">About</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="post.html">Sample Post</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="contact.html">Contact</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="login">Login</a></li>

                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="register">Register</a></li>
                    </ul>
                </div> --}}
                <nav class="nav">
                    <ul class="navigation">
                      <li><a href="/">Home</a></li>
                      <li><a href="javascript:void(0);">Login <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul>
                          <li><a href="login">login</a></li>
                          <li><a href="{{route('admin.login')}}">Login As Admin</a></li>
                         
                        </ul>
                      </li>
                      <li><a href="javascript:void(0);">Register <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul>
                          <li><a href="register">Register</a></li>
                          <li><a href="{{route('admin.register')}}">Register As Admin modified</a></li>
                         
                        </ul>
                      </li>
                      <li><a href="#">Rules</a></li>
                      <li><a href="#">Contacts</a></li>
                    </ul>
                  </nav>
            </div>
        </nav>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Gestion des rendez-vous</h1>
                            <span class="subheading"></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">Vos rendez-vous santé à ne pas oublier</h2>
                            <h3 class="post-subtitle"></h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">Dr.Benjelloun</a>
                            on September 24, 2022
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="post.html"><h2 class="post-title">Ce n’est pas parce que l’on se sent en bonne santé que tout va forcément bien. Il est vivement conseillé de prendre un rendez-vous chez votre médecin traitant afin de veiller à ce que vous soyez effectivement en bonne santé.</h2></a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">Dr.Bennani</a>
                            on September 18, 2022
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">De nombreuses études ont montré que grâce à la prise de rendez-vous en ligne pour les médecins, les standards téléphoniques médicaux enregistrent 30 % d'appels en moins</h2>
                            <h3 class="post-subtitle">Les patients se déportent sur les plateformes en ligne et sont autonomes pour prendre rendez-vous avec vous</h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">Dr.benmahfoud</a>
                            on August 24, 2022
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">Garder une attitude positive a un réel impact sur la santé et le bien-être</h2>
                            <h3 class="post-subtitle"></h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">Dr.Ose</a>
                            on July 8, 2022
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="small text-center text-muted fst-italic">&copy; Your Website 2022</div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script> --}}
        <style>
           .nav ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

.nav {
  background: #555;
  text-align: center;
}

.nav ul {
  display: inline-block;
  vertical-align: top;
  font-size: 14px;
}

.nav ul li {
  position: relative;
  float: left;
}

.nav ul li + li {
  margin-left: 1px;
}

.nav ul li a {
  background: #555;
  display: inline-block;
  color: #fff;
  text-decoration: none;
  padding: 11px 20px;
  -webkit-transition: all 0.1s ease-in;
  -o-transition: all 0.1s ease-in;
  transition: all 0.1s ease-in;
}

.nav ul li a:hover {
  background: #646464;
}

.nav ul li > ul {
  display: none;
  position: absolute;
  width: 150px;
  top: 100%;
  left: -1px;
  z-index: 1;
  text-align: left;
}

.nav ul li > ul li {
  float: none;
  margin: 0;
}

.nav ul li > ul li a {
  display: block;
  border-top: 1px solid #555;
}

.nav ul li > ul li a:hover {
  border-top: 1px solid #646464;
  background: #555;
}

.nav ul li:hover a, .nav ul li.active a {
  background: #646464;
}

.nav ul li.active {
  pointer-events: none;
}

        </style>
        <script>
           $(".navigation li").hover(function() {
  var isHovered = $(this).is(":hover");
  if (isHovered) {
    $(this).children("ul").stop().slideDown(300);
  } else {
    $(this).children("ul").stop().slideUp(300);
  }
});
            </script>
            
        <!-- Core theme JS-->
        <script src="js/scripts.js">
        </script>       
    </body>
</html>
