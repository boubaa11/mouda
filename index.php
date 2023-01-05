<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/my.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fonta/css/font-awesome.min.css">   
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="lanavbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="#"> <strong>ONG CERCA</strong> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                <ul class="navbar-nav ">
                    <li class="nav-item active pl-4">
                        <a class="nav-link" href="#">Acceuille <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item pl-4">
                        <a class="nav-link" href="#">Nous connaître</a>
                    </li>
                    <li class="nav-item pl-4">
                        <a class="nav-link" href="#">Domaines d'intervations</a>
                    </li>
                    <li class="nav-item pl-4">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item dropdown  pl-4">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Partenaires
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="lacarousel">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 carousel_img_taille" src="img/image1.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>ONG CERCA</h5>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, qui.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 carousel_img_taille" src="img/image2.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>ONG CERCA</h5>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, qui.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 carousel_img_taille" src="img/image3.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>ONG CERCA</h5>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, qui.</p>
                    </div>
                </div>
            </div>
            <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a> -->
        </div>
    </div>
    <div class="container-fluid">

        <div id="petit_titre" align="center">
            <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique, vero cumque, veniam nesciunt dignissimos voluptatum illo velit error beatae sit blanditiis mollitia possimus molestiae perferendis facere dolorem. Sint, nesciunt ab! </p>
        </div>

        <div id="petit_divider">
                    <hr>
        </div>

        <div class="container">
            <div class="row mb-0 pb-0" id="presentation">
                <div class="col-md-7" style="height: 300px;">
                    <section>
                        <div class="reveal fade-left">
                            <h2><strong>ONG CERCA</strong></h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam neque, minus eius velit obcaecati dicta quidem facere sint omnis odit quae, nemo hic odio provident reiciendis! Quis iure maxime in, reprehenderit totam quae modi laboriosam atque assumenda itaque voluptatum maiores pariatur adipisci dolores laudantium sit quidem amet nesciunt tempore ipsam? Explicabo, ex! Porro ipsam in cumque odio illum error? Sed numquam magni molestiae eos architecto nostrum pariatur similique consequuntur error.</p>
                        </div>
                    </section>
                </div>
    
    
                <div class="col-md-4">
                    <section>
                        <div class="reveal fade-right">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="480" height="300" viewBox="0 0 571.9401 689.03807" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M310.01916,435.42226a27.98147,27.98147,0,0,0,42.37447,6.73419L438.65036,491.628,435.4356,440.0556l-81.418-39.07245a28.13311,28.13311,0,0,0-43.99844,34.43911Z" transform="translate(-305.93035 -105.86477)" fill="#ffb8b8"/><path d="M559.74073,633.60374c-25.58649,35.81171-24.67114,95.72552-17.53253,161.29907l120.97431,0,5.25976-12.27277,7.013,12.27277H789.41664s-8.76624-166.5589-24.54554-171.81867S559.74073,633.60374,559.74073,633.60374Z" transform="translate(-305.93035 -105.86477)" fill="#2f2e41"/><circle cx="357.25219" cy="92.2184" r="61.36378" fill="#ffb8b8"/><path d="M707.534,275.36772l12,23,83,37L780.71663,546.50355,771.534,568.36772l4.96133,18.98719L764.534,601.36772c12.00666,10.86383,13.53168,22.23645,7,34l-38.22143,8.75551s-212.52143,18.89787-194.6109-14.026c19.5697-35.97382,24.5531-142.21509-18.64893-198.988-36.67743-48.19873-8.51874-110.74154-8.51874-110.74154l87-26,32-19Z" transform="translate(-305.93035 -105.86477)" fill="#3f3d56"/><path d="M690.42555,108.19489a3.3845,3.3845,0,0,1,3.25677-1.93272c-28.09344-1.68047-57.68463,1.5939-81.18768,17.0753-5.694,3.75065-11.06234,8.2243-17.25845,10.94508a1.85911,1.85911,0,0,0-.37964,3.163l.68052.53368a1.86606,1.86606,0,0,1-.60741,3.25335l0,0a1.86606,1.86606,0,0,0-.4688,3.35219l5.21528,3.37072a1.85778,1.85778,0,0,1,.0171,3.12575,9.27094,9.27094,0,0,1-1.38684.70319,1.86177,1.86177,0,0,0-.59,3.12753,18.53712,18.53712,0,0,1,5.04588,7.37659c1.73828,4.51977,2.05054,9.44217,2.34418,14.27575,1.79657-6.9743,9.408-11.07971,16.59783-11.49687s14.20191,1.95513,21.1991,3.66045a117.27165,117.27165,0,0,0,46.548,1.79065c-5.25647,10.54876-.82245,23.13119,3.63952,34.03981l14.44311-6.19059c19.83576-11.1969,6.01886,36.16774-1.39679,42.67007,15.14148,5.24939,54.77246-53.01373,42.02326-75.11433-6.632-11.49641-1.92432-26.324-14.96289-37.2275-6.39032-6.72715-19.14893-3.73718-25.66358-9.32824-2.56408-2.20055,1.34412-8.08781-2.17956-9.37084C704.184,109.57076,690.61909,107.76539,690.42555,108.19489Z" transform="translate(-305.93035 -105.86477)" fill="#2f2e41"/><path d="M586.484,300.30766c-11.26,49.99-40.14,166.71-69.44,191.12011a17.09185,17.09185,0,0,1-6.52,3.84986c-102.99,25.09009-135.99-38.90991-135.99-38.90991s27.6-13.45,28.3-39.74l55.66,17.27,48.52-109.19007,7.14-6.66.04-.03992Z" transform="translate(-305.93035 -105.86477)" fill="#3f3d56"/><path d="M806.07542,761.94066a27.9815,27.9815,0,0,0-2.93831-42.80551L832.009,623.98224l-49.53858,14.69627L762.648,726.78424a28.13311,28.13311,0,0,0,43.42743,35.15642Z" transform="translate(-305.93035 -105.86477)" fill="#ffb8b8"/><path d="M779.6504,330.0445l22.8836,5.32322s94.58417,184.02791,71.79194,219.09292-50.7146,151.15612-50.7146,151.15612-41.298-8.21-57.07734-29.249l28.89558-137.68626-29.8053-115.7146Z" transform="translate(-305.93035 -105.86477)" fill="#3f3d56"/><path d="M345.50989,603.32045l.82172-296.38866a22.65241,22.65241,0,0,1,22.68944-22.564l223.83925.62059a22.65238,22.65238,0,0,1,22.56385,22.68944l-.82172,296.38866a22.65238,22.65238,0,0,1-22.68932,22.564l-223.83924-.62058A22.6524,22.6524,0,0,1,345.50989,603.32045Z" transform="translate(-305.93035 -105.86477)" fill="#e6e6e6"/><path d="M362.92794,513.84626l.52828-190.54552a21.21423,21.21423,0,0,1,21.24934-21.13184l192.371.53334a21.21515,21.21515,0,0,1,21.13292,21.24935l-.73122,263.74558A21.21517,21.21517,0,0,1,576.22782,608.829L457.058,608.49863A94.49829,94.49829,0,0,1,362.92794,513.84626Z" transform="translate(-305.93035 -105.86477)" fill="#fff"/><path d="M555.034,385.86772h-150a9,9,0,0,1,0-18h150a9,9,0,0,1,0,18Z" transform="translate(-305.93035 -105.86477)" fill="#6c63ff"/><path d="M438.034,344.36772h-33a9,9,0,0,1,0-18h33a9,9,0,0,1,0,18Z" transform="translate(-305.93035 -105.86477)" fill="#6c63ff"/><path d="M555.034,427.36772h-150a9,9,0,0,1,0-18h150a9,9,0,0,1,0,18Z" transform="translate(-305.93035 -105.86477)" fill="#6c63ff"/><path d="M555.034,468.86772h-150a9,9,0,0,1,0-18h150a9,9,0,0,1,0,18Z" transform="translate(-305.93035 -105.86477)" fill="#6c63ff"/><circle cx="236.96655" cy="436.54264" r="35.81102" fill="#6c63ff"/><path d="M538.01154,561.04537a3.98231,3.98231,0,0,1-3.18646-1.59372l-9.7698-13.02661a3.98339,3.98339,0,1,1,6.37358-4.77985l6.39173,8.52166,16.41634-24.62419a3.98356,3.98356,0,1,1,6.629,4.41936L541.32638,559.2714a3.9851,3.9851,0,0,1-3.204,1.77267C538.08546,561.04472,538.0485,561.04537,538.01154,561.04537Z" transform="translate(-305.93035 -105.86477)" fill="#fff"/><circle cx="160.60365" cy="92.50295" r="17" fill="#f2f2f2"/><circle cx="98.60365" cy="581.50295" r="17" fill="#f2f2f2"/><circle cx="489.60365" cy="158.50295" r="17" fill="#f2f2f2"/></svg>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <!-- <div class="row" id="travaux_recent">

            </div> -->
            <div class="divider"><span></span><span >Notre equipe</span><span></span></div>

            <div class="row" id="equipe">

                <div class="col-md-3" align="center">
                    <span>
                        <img src="img/homme.png" class="ong_equipe" alt="">
                    </span>
                    <div class="pt-2">POSTE</div>
                    <div>Boubacar TOUNKARA</div>
                </div>
    
                <div class="col-md-3" align="center">
                    <span>
                        <img src="img/homme.png" class="ong_equipe" alt="">
                    </span>
                    <div class="pt-2">POSTE</div>
                    <div>Boubacar TOUNKARA</div>
                </div>
    
                <div class="col-md-3" align="center">
                    <span>
                        <img src="img/homme.png" class="ong_equipe" alt="">
                    </span>
                    <div class="pt-2">POSTE</div>
                    <div>Boubacar TOUNKARA</div>
                </div>
    
                <div class="col-md-3" align="center">
                    <span>
                        <img src="img/homme.png" class="ong_equipe" alt="">
                    </span>
                    <div class="pt-2">POSTE</div>
                    <div>Boubacar TOUNKARA</div>
                </div>
    


            </div>

            <div class="footer" id="footeer">

            </div>
        </div>


    </div>



    <div class="divider"><span></span><span >Nos partenaires</span><span></span></div>



    <div class="partenaires">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="owl-carousel owl-theme clients-carousel">
						<div class="item box"><img alt="client logo" class="client-img" src="img/cisco.png"></div>
						<div class="item box"><img alt="client logo" class="client-img" src="img/huawei.png"></div>
						<div class="item box"><img alt="client logo" class="client-img" src="img/giz.png"></div>
						<div class="item box"><img alt="client logo" class="client-img" src="img/apple.png"></div>
						<div class="item box"><img alt="client logo" class="client-img" src="img/unicef.png"></div>
						<div class="item box"><img alt="client logo" class="client-img" src="img/omvs.svg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>










    <div class="mt-5">
        <footer class="footer-distributed">
    
                <div class="footer-left">
    
                    <h3>ONG<span>CERCA</span></h3>
    
                    <p class="footer-links">
                        <a href="#" class="link-1">Acceuille</a>
                        
                        <a href="#">Nous Connaitre</a>
                    
                        <a href="#">Domaine</a>
                                        
                        <a href="#">Faq</a>
                        
                        <a href="#">Contact</a>
                    </p>
    
                    <p class="footer-company-name">Eleven Tech © 2023</p>
                </div>
    
                <div class="footer-center">
    
                    <div>
                        <i class="fa fa-map-marker"></i>
                        <p><span>RUE 508</span> Kalaban Coura</p>
                    </div>
    
                    <div>
                        <i class="fa fa-phone"></i>
                        <p>+223 79831541</p>
                    </div>
    
                    <div>
                        <i class="fa fa-envelope"></i>
                        <p><a href="mailto:support@company.com">support@company.com</a></p>
                    </div>
    
                </div>
    
                <div class="footer-right">
    
                    <p class="footer-company-about">
                        <span>A propos</span>
                        Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
                    </p>
    
                    <div class="footer-icons">
    
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-github"></i></a>
    
                    </div>
    
                </div>
    
        </footer>
    </div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
	</script> 
    <script>
        $('.clients-carousel').owlCarousel({
            autoplay: true,
            loop: true,
            margin: 15,
            dots: false,
            slideTransition: 'linear',
            autoplayTimeout: 4500,
            autoplayHoverPause: true,
            autoplaySpeed: 4500,
            responsive: {
                0: {
                items: 2
                },
                500: {
                items: 3
                },
                600: {
                items: 4
                },
                800: {
                items: 4
                },
                1200: {
                items: 4
                }

            }
        });

        $('.carousel').carousel({
            interval: 2000
        });
        function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", reveal);
    </script>
</body>
</html>