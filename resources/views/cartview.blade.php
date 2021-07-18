<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Stylish Portfolio - Start Bootstrap Template</title>
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
             
<form style="background-color:#FBFAF5;" action="/addtoorder" method="post"> @foreach($cats as $item)
        <table class="table ">
        <tr>
         
         <th scope="row">librarybook Name</th>
         <th scope="row">librarybook Price</th>
         </tr>
        
   

    <tr >
     <!-- <td>{{$item->usname}}</td> -->
     <td>{{$item->librarybookName}}</td>
     <td>{{$item->librarybookPrice}}</td>
     <td><a class="btn btn-warning" href="cartdelete/{{$item->id}}">REMOVE</a></td>
    </tr>
</table>

@endforeach
<button type="submit" class="btn btn-primary">BUY</button>



</form>
             
            </div>
            <div class="overlay"></div>
        </header>
       
       
        <!-- Callout-->
        <!-- Portfolio-->
       

        
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
