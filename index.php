
	<?php 


		$menu1 = 'head.php'; 
		$menu2 = 'home.php';
		$menu3 = 'saude.php';
		$menu4 = 'educacao.php';
		$menu5 = 'seguranca.php';
        $menu6 = 'sobre_nos.php';
		$menu7 = 'footer.php'; #footer

		//$menu7 = 'head.php';


		if(@$_GET['pag'] == ""){
    		$pag = $menu2;
		} else{
   				 $pag = @$_GET['pag'];
				}
 		
 	?>

<!doctype html>
<html lang="en">
 <head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
   
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
  <link rel="stylesheet" type="text/css" href="fontawesome/js/all.js">
   <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

     
     <link href="javaScript.js" rel="stylesheet">
  <link href="img/logo.png" rel="icon">
   <script defer src="javaScript.js"> </script>

   <title>Facilita Só</title>

   
 </head>

<style type="text/css">
   

</style>
  

 <body>

     
  


 	<!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light shadow sticky-top p-0 zoomIn" style="background-color: rgba(10, 5, 10, 0.5) ;">

        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <img src="img/logo-branca.png" class=" align-items-center " style="width: 80px; margin-left: 100px; "> </i>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" class="-light" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon text-light"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0" style="margin-left: 20%; font-family: arial; ">
                <a href="index.php?pag=<?php echo $menu2 ?>" class="nav-item nav-link text-light" style="margin-right: 10px;"><h6>Home</h6></a>
                 <div class="nav-item ">
                    <div class="nav-item dropdown  fade-down ">
                    <a href="#" class="nav-link dropdown-toggle text-light fade-down" data-bs-toggle="dropdown">Serviços Públicos</a>
                    <div class="dropdown-menu fade-down m-0 text-light">
                        <a href="index.php?pag=<?php echo $menu3 ?>" class="dropdown-item">Saúde</a>
                        <a href="index.php?pag=<?php echo $menu4 ?>" class="dropdown-item">Educação</a>
                        <a href="index.php?pag=<?php echo $menu5 ?>" class="dropdown-item">Segurança</a>
                                           
                    </div>                               
                               
                </div>
                </div>
                 
                <div class="nav-item ">
                    <a href="index.php?pag=<?php echo $menu6 ?>" class="nav-link text-light" tyle="margin-right: 10px;" ><h6>Sobre Nós</h6></a>
                   
                </div>
               <div class="nav-item ">
                    <a href="#download" class="nav-link text-light" style="margin-right: 10px;" ><h6>Download App <i class="fa fa-download"></i></h6></a>
                   
                </div>
               

                    <!--search-->
                    <div class="nav-item ">
                         <form class="form-inline ">
                             <input class="form-control  bg-light " type="search" placeholder="No que está pensando?" aria-label="Pesquisar">
                             <button class="btn btn-secondary" type="submit">Pesquisar</button>
                         </form>
                 </div>
            </div>
            
    </nav>
    <!-- Navbar End -->


            <?php 
		  		require_once($pag.'');
		 	?>
         </br>


         <!--footer-->
         

        

         <footer style="padding: 20px 0" class="bg-dark">
             <div class="container wow fadeInRight">
                 <div class="row ">
                     <div class="col-lg-3 col-sm-6">
                         <div class="singl-box">
                             <img src="img/logo-branca.png" alt="logo" style="width: 80px; margin-left: 50px; ">
                             <p style=" color: #fff;
                    line-height: 1.9;" class="text-justify">Buscamos simplificar os desafios do dia a dia, desafios ligados à Saúde, Educação e Segurança. </br>
                        Venha Tornar sua Vida Mais facil e eficiente</p>
                             <h3 style="font-size: 16px;
                    font-weigh: 700;
                    color: #fff;">Nós aceitamos</h3>
                             <div class="card-area">
                                 <i class="fa-brands fa-cc-visa-v" style="color: #fff;
                    font-size: 20px;
                    margin-right: 10px;"></i>
                                 <i class="fa fa-credit-card" style="color: #fff;
                    font-size: 20px;
                    margin-right: 10px;"></i>
                                 <i class="fab fa-cc-mastercard" style="color: #fff;
                    font-size: 20px;
                    margin-right: 10px;"></i>
                                 <i class="fab fa-cc-paypal" style="color: #fff;
                    font-size: 20px;
                    margin-right: 10px;"></i>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-3 col-sm-6">
                         <div class="singl-box">
                             <h2 class="text-light">Escolas</h2>
                             <ul style=" list-style: none;
                   padding: 0;">
                                 <li>
                                     <a href="#" style=" text-decoration: none;
                    color: #fff;
                    line-height: 2.5;
                    font-weight: 100;">Liceu</a>
                                 </li>
                                 <li>
                                     <a href="#" style=" text-decoration: none;
                    color: #fff;
                    line-height: 2.5;
                    font-weight: 100;">Instituto Médio de Benguela</a>
                                 </li>
                                 <li>
                                     <a href="#" style=" text-decoration: none;
                    color: #fff;
                    line-height: 2.5;
                    font-weight: 100;">Escola Major Sayd Mingas</a>
                                 </li>
                                 <li>
                                     <a href="#" style=" text-decoration: none;
                    color: #fff;
                    line-height: 2.5;
                    font-weight: 100;">Complexo Escolar Santo Estevão</a>
                                 </li>
                                 <li>
                                     <a href="index.php?pag=<?php echo $menu4 ?>" class="text-light" style=" text-decoration: none;
                    
                    line-height: 2.5;
                    font-weight: 100;">Saiba Mais... <i class="fab fa-angles-right"></i></a>
                                 </li>
                             </ul>
                         </div>
                     </div>
                     <div class="col-lg-3 col-sm-6">
                         <div class="singl-box">
                             <h2 class="text-light">Centros de Saúde</h2>
                             <ul  style=" list-style: none;
                   padding: 0;">
                                 <li>
                                     <a href="#" style=" text-decoration: none;
                    color: #fff;
                    line-height: 2.5;
                    font-weight: 100;">Hospial Geral de Benguela</a>
                                 </li>
                                 <li>
                                     <a href="#" style=" text-decoration: none;
                    color: #fff;
                    line-height: 2.5;
                    font-weight: 100;">Clínica Adelaide</a>
                                 </li>
                                 <li>
                                     <a href="#" style=" text-decoration: none;
                    color: #fff;
                    line-height: 2.5;
                    font-weight: 100;">Clínica São Felipe</a>
                                 </li>
                                 <li>
                                     <a href="#" style=" text-decoration: none;
                    color: #fff;
                    line-height: 2.5;
                    font-weight: 100;">Hospital Municipal de Benguela</a>
                                 </li>
                                 <li>
                                     <a href="index.php?pag=<?php echo $menu3 ?>" class="text-light" style=" text-decoration: none;
                    
                    line-height: 2.5;
                    font-weight: 100;">Saiba Mais... <i class="fa fa-angles-right"></i></a>
                                 </li>
                             </ul>
                         </div>
                     </div>
                     <div class="col-lg-3 col-sm-6">
                         <div class="singl-box">
                             <h2 style="color: #fff;
                    font-size: 20px;
                    font-weight: 700;">Galeria</h2>
                                
                    <div class="row g-2 pt-2 wow zoomIn">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/paisagem/FRphotograpy.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/paisagem/FRphotograpy-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/paisagem/FRphotograpy-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/paisagem/FRphotograpy-4.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/paisagem/FRphotograpy-10.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/paisagem/FRphotograpy-5.jpg" alt="">
                        </div>
                    </div>
                </div> </br>
                                <p class="text-light">Para mais actualizações<i class="fab-regular fa-cowbell-circle-plus"></i></p>
                                <div class="input-group mb-3">
                                    <form action="regista_email.php" method="post">
                                            <input type="email" name="email" id="email" placeholder="Coloque seu email ..." class="form-control" area-label="recipient username" area-describedby="basic-addon2">
                                            <button class="btn btn-info text-light" id="enviar"  type="submit"><i class="fa-solid fa-envelop">enviar</i></button>
                                     </form>
                                </div>
                                <h2 class="text-light">Siga-nos:</h2>
                                <p class="socials">
                                    <i class="fab fa-facebook-f text-light" style="  font-size: 18px;
                    margin-right: 15px;"></i>
                                    <i class="fab fa-whatsapp text-light" style="  font-size: 18px;
                    margin-right: 15px;"></i>
                                     <i class="fab fa-dribbble text-light" style="  font-size: 18px;
                    margin-right: 15px;"></i>
                                      <i class="fab fa-pinterest text-light" style="  font-size: 18px;
                    margin-right: 15px;"></i>

                                </p>
                                         <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top" style="border-radius: 100px; margin-top: 20px; margin-left: 20px;"><i class="fa fa-arrow-up"></i></a>
                         </div>
                     </div>
                 </div>
             </div>
     
             <div class="copyright text-light" style="padding: 0; justify-content: center; display: flex; font-size: 1rem; font-weight: 5rem;">
                 &copy; Facilita Só, Direitos Reservados
             </div>
         </footer>



   <!-- Optional JavaScript -->
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 </body>
</html>