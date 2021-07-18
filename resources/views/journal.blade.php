<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>journals</title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Simple line icons-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
        <nav id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"><a class="js-scroll-trigger" href="home">HOME</a></li>
              
                
                <li class="sidebar-nav-item"><a class="js-scroll-trigger" href="help">CONTACT</a></li>
                <li class="sidebar-nav-item"><a class="js-scroll-trigger" href="logout">LOGOUT</a></li>
                
            </ul>
        </nav>
        <!-- Header-->
        <header class="masthead d-flex">
            <div class="container text-center my-auto">
             <h2 class="mb-1" style="background-color:#FBFAF5;">SCIENCE </h2>
             
            </div>
            <div class="overlay"></div>
        </header>
       
       
        <!-- Callout-->
        <!-- Portfolio-->
        <form action="addtocart" method="post">
        @csrf 
        
        <section class="content-section" id="portfolio">
            <div class="container">

                <div class="row no-gutters">
                @foreach($journal as $prods)
                <table>
                    <tr>
                    <input type="hidden" name="librarybookId" value= "{{$prods->librarybookId}}">
<input type="hidden" name="librarybookName" value= "{{$prods->librarybookName}}">
<input type="hidden" name="librarybookPrice" value= "{{$prods->librarybookPrice}}">
                    <div class="col-lg-4">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">{{$prods->librarybookName}}</div>
                                    <p class="mb-0">{{$prods->librarybookPrice}}</p>
                                    <p class="mb-0">{{$prods->librarybookDescription}}</p>
                                </div>
                            </div>
                            <img  class="img-fluid"  style=width:400px;heigh:400px;  src="{{ URL ::asset('assets/project_img/'.$prods->pimage) }}" alt="..." />
                            <button type="submit" class="btn btn-primary">BUY</button>
                        </a>
                        
                     </div> 
                    </tr>
                </table>
                    @endforeach    
                </div>
            </div>
        </section>
       
</form>
        <!-- Call to Action-->
        <section class="content-section bg-primary text-white">
            <div class="container text-center">
                <h2 class="mb-4"><a href=""></a></h2>
                <a class="btn btn-xl btn-light mr-4" href="help">CONTACT</a>
                
            </div>
        </section>
        
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top"><i class="fas fa-angle-up"></i></a>
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
        <!-- Custom scripts for this template-->
        <script src="js/scripts.js"></script>
    </body>
</html>
