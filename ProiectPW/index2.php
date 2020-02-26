<?php session_start()?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="./css/bootstrap4.css" rel="stylesheet">
<link href="./css/custom.css" rel="stylesheet">
<link href="./css/style.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Heaven Home</title>
</head>

<body>



<div class="container-fluid bg-black">
  <nav class="container sticky-top navbar navbar-expand-lg navbar-dark bg-black">
  <a class="navbar-brand" href="#"><img src="img/logof1.png"></a>
      <h3 style="color: wheat">Heaven Home</h3>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto mx-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#home">Acasa <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Colectia noastra
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#gothic">Gothic</a>
          <a class="dropdown-item" href="#futuristic">Futuristic</a>
          <a class="dropdown-item" href="#elegant">Elegant</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#about">Despre</a>
      </li>
         <li class="nav-item">
        <a class="nav-link disabled" href="#team">Echipa noastra</a>
      </li>
        <li class="nav-item">
        <a class="nav-link disabled" href="#contact">Contact</a>
      </li>
        <li class="nav-item">
        <a class="nav-link disabled" href="#account">Contul tau</a>
      </li>
        <!--  AICI AR VENI numele utilizatorului si optiunea de logout
              chestia asta da fail cand dai logout si cred ca e pt ca nu ai in baza de data la utilizator camp de "e logat sau nu" si nu ti-am umblat pe acolo dar dupa mine ar fi nice sa iti apara ca esti/si cine e logat sus in bara langa contul meu 


              treaba cu cookieurile trebe discutata. sa vedem ce punem sa retina siteul in cookies

              ca prin cookies nu e asa sigur ca prin sessions cum am facut eu/noi

              la cookies ma gandeam sa facem un cos de cumparaturi rpd sau ceva ca acolo e cel mai sigur ca nu dai fail ca ai pus cookies-->
        <li class="nav-item"> 
        <?php
        if($_SESSION['logged']==true)
        {
            echo $_SESSION['username'];
            echo '<a class="nav-link disabled" href="logout.php"><span>Logout</span></a></li>';
        }
        else if($_SESSION['logged']==false){echo '<a class="nav-link disabled" href="logout.php"><span>Login</span></a></li>';}
        ?>
    </ul>
  </div>
</nav>
</div>
    
   
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
     <a name="home"></a>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/bkg.jpg" alt="img1">
       <div class="carousel-caption d-none d-md-block">
        <h1>Unique furniture made for you.</h1>
         <p>Create your own "heaven home"!</p>
         <button class="btn btn-info btn-lg">Explore your style!</button>
       </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/bkg2.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h1>Redefining interior design</h1>
         <p>With our unique styles</p>
         <button class="btn btn-info btn-lg">Explore your style!</button>
       </div>
    </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="img/bkg3.jpg" alt="thirds slide">
      <div class="carousel-caption d-none d-md-block">
        <h1>Create the house of your dreams!</h1>
         <p>Our designs are made for people with vision.</p>
         <button class="btn btn-info btn-lg">Explore your style!</button>
       </div>
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<div class="container-fluid bg-light-gray7"> 
<section class="page-section" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
             <a name="about"></a>
          <h2 class="section-heading text-uppercase">Despre noi!</h2>
            <p>Oamenii ne intreaba ce semnificatie are numele firmei noastre "Heavem Home", ei bine aici aveti explicatia:
Pentru fiecare dintre noi "raiul" are o cu totul alta infatisare si insemnatate, iar noi ne-am dorit sa cream ceve inedit, ceva care sa te reprezinte pe tine cu adevarat, mica ta "bucatica de rai"!
</p>
          <h3 class="section-subheading text-muted">Un vis devenit realitate</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>SUMMER OF '98</h4>
                  <h4 class="subheading">O IDEE, UN PIX, O HARTIE</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Totul a inceput intr-o vara pe vremea cand aveam doar 18 ani, mereu am fost pasionat de arta. Pictura, design de haine, filme, carti ..design interior etc.
                    Mi-am dorit dintotdeauna ca intr-o zi sa pot arata lumii ceea ce sunt capabil sa creez folosind doar o foaie si un pix, ca idei aveam din plin. Asa ca am facut-o! Cu ajutorul a doi prieteni ne-am pornit o "afacere" mica in garajul casei, ofeream sugetii de design interior vecinilor, cunoscutilor si daca era nevoie puneam si umarul la treaba sa contruim cate un scaun, cate o masa.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>July 2001</h4>
                  <h4 class="subheading">VISUL DEVINE REALITATE</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">In iulie 2001 am reusit sa ne gasim cativa sponsori Si atfel am pornit pe lungul drum al "succesului", ne-am dori noi sa spunem. Am creat modele de mobila deosebite, pentru toate gusturile. Nu ai cum sa nu gasesti ceva ce-ti "face cu ochiul" in colectia noastra, ne dorim sa te multumim pe tine, sa te ajutam sa te exprimi printr-o modalitate ce nu necesita cuvinte si anume prin DESIGN!</p>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>2001-FOREVER</h4>
                  <h4 class="subheading">WE CREATE TO MAKE YOUR DREAMS COME TRUE</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Creatiile noastre sunt dedicate oamenilor care-si doresc sa isi traiasca "monotonul cotidian" intr-un mediu plin de viata, noi nu dam viata doar viselor ci si casei tale. Impreuna ne traim visul, noi putem fi mainile si vocea imaginatiei tale!</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <h4>WE LOVE TO
                  <br>MAKE YOU
                  <br>HAPPY!</h4>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
    </div>
    

<div class="container-fluid bg-light-gray4">     
<div class="container-fluid bg-light-gray">


<div class="container pt-5 pb-5">
   
	<div class="row">
	  <h3 style="color: wheat ">Goth Style</h3>
        <a name="gothic"></a>
	</div>
		<div class="row">
		<div class="underline"></div>
	</div>
</div>

 <!--Cardblocks-->
<div class="row text-center">

      <div class="col-lg-3 col-md-6 mb-4 scale-up-center">
        <div class="card h-100 shadow-drop-2-center">
          <img class="card-img-top" src="img/goth/gchair2.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Dark Throne</h4>
            <p class="card-text">Un detaliu in sufrageria ta care sigur iti va face prietenii invidiosi. Sculptat cu mare atentie in lemn de nuc si tapitat cu cea mai fina catifea, cu siguranta te va face sa te simti regeste! </p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Comanda acum!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4 scale-up-center">
        <div class="card h-100">
          <img class="card-img-top" src="img/goth/gotcouch.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Fairiest Couch</h4>
            <p class="card-text">Canapeaua noastra te va purta pe aripile unui taram magic intr-adevar! Realizata din lemn de brad si invaluita in satin este pregatita sa te invaluie cu magia ei!</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Comanda acum!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4 scale-up-center">
        <div class="card h-100">
          <img class="card-img-top" src="img/goth/gottable4.jpeg" alt="">
          <div class="card-body">
            <h4 class="card-title">Victorian Table</h4>
            <p class="card-text">Un twist elegant, unic si misterios realizat din lemn de cedru cu cea mai mare atentie si iubire pentru detalii! Un "mic" detaliu in camera ta care sa te transpuna in Epoca Victoriana, magnific, am putea spune.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Comanda acum!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4 scale-up-center">
        <div class="card h-100">
          <img class="card-img-top" src="img/goth/gottable2.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Forest Table</h4>
            <p class="card-text">O piesa deosebita de poveste, dorita curburilor si unghiurilor care se imbina perfect unele cu altele este imposibil sa nu ti-o doresti!</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Comanda acum!</a>
          </div>
        </div>
      </div>

    </div></div>
        <!--Cardblocks END-->

<div class="container-fluid bg-light-gray2">
<div class="container mt-5 mb-5">
   
	<div class="row">
	  <h3>Elegant Style</h3>
        <a name="elegant"></a>
	</div>
		<div class="row">
		<div class="underline"></div>
	</div>
</div>
    
    
 <!--Cardblocks-->
<div class="row text-center">

      <div class="col-lg-3 col-md-6 mb-4 scale-up-center">
        <div class="card h-100">
          <img class="card-img-top" src="img/elegant/mtable8.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">La Cinta Table</h4>
            <p class="card-text">Un design unic realizat in totalitate manual de artistii nostri. Un touch care-ti va schimba cu totul perspectiva asupra camerei tale</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Comanda acum!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4 scale-up-center">
        <div class="card h-100">
          <img class="card-img-top" src="img/elegant/gotcouch4.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Cupid's Couch</h4>
            <p class="card-text">Cel mai romantic loc din sufrageria ta cu siguranta va fi canapeaua noastra. Cadrul sculptat in lemn de pin si acoperit cu cel mai elegant auriu ii dau intr-adevar un aer aparte.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Comanda acum!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4 scale-up-center">
        <div class="card h-100">
          <img class="card-img-top" src="img/elegant/mchair4.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Athena's Throne</h4>
            <p class="card-text">Fotoliul nostru te va face sa te simti intr-adevar ca o zeita, te va invalui in cea mai fina catifea cusuta cu fire de aur alb de 7 carate. </p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Comanda acum!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4 scale-up-center">
        <div class="card h-100">
          <img class="card-img-top" src="img/elegant/mchair3.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Athena's Throne</h4>
            <p class="card-text">Fotoliul nostru te va face sa te simti intr-adevar ca o zeita, te va invalui in cea mai fina catifea cusuta cu fire de aur alb de 7 carate. </p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Comanda acum!</a>
          </div>
        </div>
      </div>

    </div></div>
        <!--Cardblocks END-->
    

    
    <div class="container-fluid bg-light-gray3">
    <div class="container mt-5 mb-5">
   
	<div class="row">
        <a name="futuristic"></a>
	  <h3 style="color: black">Futuristic Style</h3>
	</div>
		<div class="row">
		<div class="underline"></div>
	</div>
</div>
        
        <!--Cardblocks-->
<div class="row text-center">

      <div class="col-lg-3 col-md-6 mb-4 scale-up-center">
        <div class="card h-100">
          <img class="card-img-top" src="img/futuritic/mchair.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Diamond Chair</h4>
            <p class="card-text">Daca esti un vizionar si iti doresti sa exprimi asta prin design-ul camerei tale, acest scaun este cu siguranta piesa de inceput!</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Comanda acum!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4 scale-up-center">
        <div class="card h-100">
          <img class="card-img-top" src="img/futuritic/mcouch.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Matrix Couch</h4>
            <p class="card-text">Care este locul tau preferat in casa? Al nostru cu siguranta este canapeaua Matrix! Dorita spumei cu memorie ai parte de cea mai confortabila seara de filme alaturi de familie...si daca tot veni vorba si suntem inn tema...nu ar merge un Star Wars?</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Comanda acum!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4 scale-up-center">
        <div class="card h-100">
          <img class="card-img-top" src="img/futuritic/mdesk.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Scientific Table</h4>
            <p class="card-text">Daca pana acum te-ai simtit neinspirat te asigura ca nu vei mai avea aceasta problema cu biroul nostru futuristic! Cu siguranta ideile tale vor fi dintr-un alt "univers"!</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Comanda acum!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4 scale-up-center">
        <div class="card h-100">
          <img class="card-img-top" src="img/futuritic/mtable.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Out of This World Table</h4>
            <p class="card-text">Nu va putem  spune cum am realizat aceasta masa, pentru ca ar trebui sa va ucidem! Ha ha, glumim, dar intr-adevar este un mic secret de al nostru! Acest design unic si "out of this world" este ultima noastra creatie si suntem mandri ca v-o putem oferii in sfarsit.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Comanda acum!</a>
          </div>
        </div>
      </div>

        </div></div>
        <!--Cardblocks END-->

    <div class="container-fluid bg-light-gray4">   
<div class="container-fluid pt-5 pb-5">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="row">
					<h4>Elegant</h4>
				</div>
				<div class="row">
					<div class="underline-green"></div>
				</div>
				<div class="media mt-5">
					<img src="img/elegant/73515738_1451787814978183_3357337637059821568_n.jpg" class="img-fluid mr-3" alt="media1">
					<div class="media-body mt-2">
						<h5>Diamond Mirror</h5>
						<h6>$150.00</h6>
						<button class="btn btn-success"><i class="fa fa-envelope" aria-hidden="true"></i> Comanda acum!</button>
					</div>
				</div>
				
				<div class="media mt-5">
					<img src="img/elegant/74463019_772233109905468_8553384789678227456_n.jpg" class="img-fluid mr-3" alt="media1">
					<div class="media-body mt-2">
						<h5>Simple but Elegant Lamp</h5>
						<h6>$200.00</h6>
						<button class="btn btn-success"><i class="fa fa-envelope" aria-hidden="true"></i> Comanda acum!</button>
					</div>
				</div>
				
				
				<div class="media mt-5">
					<img src="img/elegant/73524533_945623005813633_4232553449729818624_n.jpg" class="img-fluid mr-3" alt="media1">
					<div class="media-body mt-2">
						<h5>Mosaic Mirror</h5>
						<h6>$350.00 <span style="text-decoration: line-through">$500.00</span></h6>
						<button class="btn btn-success"><i class="fa fa-envelope" aria-hidden="true"></i> Comanda acum!</button>
					</div>
				</div>
			</div>
			
			
			
			
			<div class="col-md-4">
				<div class="row">
					<h4>Gothic</h4>
				</div>
				<div class="row">
					<div class="underline-blue"></div>
				</div>
				<div class="media mt-5">
					<img src="img/goth/72905864_455894165133412_6658260298866098176_n.jpg" class="img-fluid mr-3" alt="media1">
					<div class="media-body mt-2">
						<h5>Magnific Lampad</h5>
						<h6>$280.00</h6>
						<button class="btn btn-primary"><i class="fa fa-envelope" aria-hidden="true"></i> Comanda acum!</button>
					</div>
				</div>
				
				<div class="media mt-5">
					<img src="img/goth/73038066_812909095805995_5059129633945944064_n.jpg" class="img-fluid mr-3" alt="media1">
					<div class="media-body mt-2">
						<h5>Queen's Reflexion</h5>
						<h6>$360.00</h6>
						<button class="btn btn-primary"><i class="fa fa-envelope" aria-hidden="true"></i> Comanda acum!</button>
					</div>
				</div>
			</div>
			
			
			
			<div class="col-md-4">
				<div class="row">
					<h4>Futuristic</h4>
				</div>
				<div class="row">
					<div class="underline-black"></div>
				</div>
				<div class="media mt-5">
					<img src="img/futuritic/72890543_931444460575414_1965994311644348416_n.jpg" class="img-fluid mr-3" alt="media1">
					<div class="media-body mt-2">
						<h5>From Space Chandelier</h5>
						<h6>$600.00</h6>
						<button class="btn btn-dark"><i class="fa fa-envelope" aria-hidden="true"></i> Comanda acum!</button>
					</div>
				</div>
				
				<div class="media mt-5">
					<img src="img/futuritic/72986510_463500604265046_473745849210372096_n.jpg" class="img-fluid mr-3" alt="media1">
					<div class="media-body mt-2">
						<h5>With a Twist Vase</h5>
						<h6>$100.00</h6>
						<button class="btn btn-dark"><i class="fa fa-envelope" aria-hidden="true"></i> Comanda acum!</button>
					</div>
				</div>
				
				<div class="media mt-5">
					<img src="img/futuritic/75210303_530007114232820_8274277860366090240_n.jpg" class="img-fluid mr-3" alt="media1">
					<div class="media-body mt-2">
						<h5>Martian Lamp</h5>
						<h6>$450.00</h6>
						<button class="btn btn-dark"><i class="fa fa-envelope" aria-hidden="true"></i> Comanda acum!</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
        </div></div>

<div class="outline"></div>
<div class="container mt-5">
	<div class="row">
         <a name="contact"></a>
		<h4>Contact</h4>
	</div>
	<div class="underline-black"></div>
</div>

<div class="container pb-5 blog">
 <div class="row">
 	<div class="col-md-6">
 		<div class="media mt-5">
					<img src="img/env1.png" class="img-fluid mr-3" alt="media1">
					<div class="media-body mt-2">
						<h5>Email</h5>
						<p>heavenhome@gmail.com</p>
					</div>
				</div>
 	</div>
 	
 	
 	<div class="col-md-6">
 		<div class="media mt-5">
					<img src="img/pin1.jpg" class="img-fluid mr-3" alt="media1">
					<div class="media-body mt-2">
						<h5>Adresa depozit</h5>
						<p>SC Heaven Home SRL<br>
                            Timisoara Bv. Cetății Nr 19A, 300889, Timis</p>
					</div>
				</div>
 	</div>
 </div>
 
 
  <div class="row">
 	<div class="col-md-6">
 		<div class="media mt-5">
					<img src="img/p1.png" class="img-fluid mr-3" alt="media1">
					<div class="media-body mt-2">
						<h5>Contacte telefonice</h5>
						<p>Tel Orange: 0754 864 387<br>
                            Tel Telekom: 0786 231 546<br>
                            Tel Vodafone: 0726 512 199<br>
                            Tel RDS/DigiMobil: 0356 440 888</p>
					</div>
				</div>
 	</div>
 	
 	
 	<div class="col-md-6">
 		<div class="media mt-5">
					<img src="img/s1.png" class="img-fluid mr-3" alt="media1">
					<div class="media-body mt-2">
						<h5>Orar asistenta telefonica</h5>
						<p>Luni-Vineri: 08->18
                        Sambata: 08->16</p>
					</div>
				</div>
 	</div>
 </div>
	
</div>



<div class="outline"></div>
<div class="container-fluid bg-light-gray4 pt-5 pb-5">
<div class="container mt-0">
	<div class="row">
         <a name="account"></a>
		<h4>Contul tau!</h4>
	</div>
	<div class="row">
		<div class="underline-black"></div>
	</div>
</div>

    
<div class="container mt-5">
    <div class="login-box">
    <div class="row justify-content-around">
    <div class="col-md-3 login-left">
        <h3>Login!</h3>
        <form action="validation.php" method="post">
        <div clss="form-group">
            <label>Username</label>
            <input type="text" name="user" class="form-control" required>
                </div>
         <div clss="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
                </div>
            <button type="submit" clas="btn btn=primary"> Login</button>
        </form>
    </div>
        <div class="col-md-3 login-right">
        <h3>Register now!</h3>
        <form action="registration.php" method="post">
        <div clss="form-group">
            <label>Username</label>
            <input type="text" name="user" class="form-control" required>
                </div>
         <div clss="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
                </div>
            <button type="submit" clas="btn btn=primary">Register</button>
        </form>
        </div>
        </div>
    </div>
  
</div>

</div>

 <div class="outline"></div>   
	<div class="container">
		<div class="row">
			<h4 style="color: black">Our Team!</h4>
            <a name="team"></a>
		</div>
		<div class="row">
			<div class="underline-black"></div>
		</div>
	</div>
	<div class="row text-center mt-5">

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card testimonial-card mt-2 mb-3">
        <!-- Avatar -->
        <div class="avatar mx-auto white">
          <img src="img/p.png" width ="180" height="250" class="rounded-circle img-responsive" alt="woman avatar">
        </div>
      </div>
          <div class="card-body">
            <h4 class="card-title">Director General</h4>
            <p class="card-text">Prapupicu Andrei</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Living my dream!</a>
          </div>
        </div>
      </div>
        
        
        <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card testimonial-card mt-2 mb-3">
        <!-- Avatar -->
        <div class="avatar mx-auto white">
          <img src="https://carlisletheacarlisletheatre.org/images/employee-clipart-woman.jpg" width ="250" height="250" class="rounded-circle img-responsive" alt="woman avatar">
        </div>
      </div>
          <div class="card-body">
            <h4 class="card-title">Managing Director</h4>
            <p class="card-text">Valinejad Sara</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">I love my job!</a>
          </div>
        </div>
      </div>

        
        
        <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card testimonial-card mt-2 mb-3">
        <!-- Avatar -->
        <div class="avatar mx-auto white">
          <img src="https://bpaquality.files.wordpress.com/2014/03/shutterstock_155754371.jpg" width ="250" height="250" class="rounded-circle img-responsive" alt="woman avatar">
        </div>
      </div>
          <div class="card-body">
            <h4 class="card-title">Accounts Manager</h4>
            <p class="card-text">Popescu Alina</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">My team is the best!</a>
          </div>
        </div>
      </div>

        
        
        
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card testimonial-card mt-2 mb-3">
        <div class="avatar mx-auto white">
          <img src="https://netboardme.s3.amazonaws.com/published/6636/files/547d3e4a1670dd407f7ba8edc7ad1938_n-business-woman.png" width ="250" height="250" class="rounded-circle img-responsive" alt="woman avatar">
        </div>
      </div>
          <div class="card-body">
            <h4 class="card-title">Web Designer</h4>
            <p class="card-text">Micea Eliza</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Here to design your dream!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card testimonial-card mt-2 mb-3">
        <!-- Avatar -->
        <div class="avatar mx-auto white">
          <img src="http://www.mascotdesigngallery.com/wp/wp-content/uploads/2014/12/vectorcharacters1.jpg" width ="250" height="250" class="rounded-circle img-responsive" alt="woman avatar">
        </div>
      </div>
          <div class="card-body">
            <h4 class="card-title">Web Dev</h4>
            <p class="card-text">Spatariu Razvan</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Development is my hobby!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card testimonial-card mt-2 mb-3">
        <!-- Avatar -->
        <div class="avatar mx-auto white">
          <img src="https://webstockreview.net/images/businesswoman-clipart-female-attorney-1.png?fbclid=IwAR3M-cF31bQlZsbRABIZqIG46GgVJtDcafMG33Hv_icMU_3py1QQztjtk2Y" width ="250" height="250" class="rounded-circle img-responsive" alt="woman avatar">
        </div>
      </div>
          <div class="card-body">
            <h4 class="card-title">HR Manager</h4>
            <p class="card-text">Croitoriu Andreea</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Loves coffee and helping people!</a>
          </div>
        </div>
      </div>

    </div>
</div>

<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=strada%20paris%20timisoara&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/nordvpn-coupon-code/"></a></div><style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style></div>
        
<footer>
	<div class="container-fluid pt-5 pb-5 bg-dark text-light">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
				<div class="row">
					<h5>Alatura-te noua!</h5>
				</div>
				<div class="row mb-4">
				<div class="underline bg-light" style="width: 50px;"></div>
				</div>
					
						<p><i class="fa fa-chevron-right" aria-hidden="true"></i> Sign in! Creaza un cont!</p>
						<p><i class="fa fa-chevron-right" aria-hidden="true"></i> Log in! Am deja un cont!</p>
				</div>
				
				
		<div class="col-md-3">
				<div class="row">
					<h5>Livrare</h5>
				</div>
				<div class="row mb-4">
				<div class="underline bg-light" style="width: 50px;"></div>
				</div>
					
						<p><i class="fa fa-chevron-right" aria-hidden="true"></i> Articolele noastre sunt facute la comanda cum multa atentie si iubire, astfel ca dorim sa le livram doar prin curierul nostru,iar transportul NU se plateste. :)</p>
						<p><i class="fa fa-chevron-right" aria-hidden="true"></i> După ce ați finalizat comanda noi vă contactăm cât de rapid posibil (în timpul programului de lucru).</p>
                        <p><i class="fa fa-chevron-right" aria-hidden="true"></i>După ce confirmați comanda, vom trimite coletul iar acesta va ajunge la dumnevoastra in 2-3 zile lucratoarePlata: Plata se face doar cu cardul la finalizarea comenzii.</p>
				</div>
                <div class="col-md-3">
				<div class="row">
					<h5>Inconveniente</h5>
				</div>
				<div class="row mb-4">
				<div class="underline bg-light" style="width: 50px;"></div>
				</div>
					
						<p><i class="fa fa-chevron-right" aria-hidden="true"></i> In cazul in care articolul/articolele cumparat/e prezinta defecte, va rugam, sa ne contactati pentru a va inlocui produsul sau a va restituii banii.</p>
				</div>
				<div class="col-md-3">
				<div class="row">
					<h5>Garantie</h5>
				</div>
				<div class="row mb-4">
				<div class="underline bg-light" style="width: 50px;"></div>
				</div>
					
						<p><i class="fa fa-chevron-right" aria-hidden="true"></i>  Fiecare produs are o perioada de garantie de 2 ani, pentru a beneficia de aceasta garantie va rugam sa pastrati formularul de garantie si bonul fiscal.</p>
				</div>
			
				
				<div class="col-md-3">
					<div class="row">
					<h5>Tags</h5>
				</div>
				<div class="row mb-4">
				<div class="underline bg-light" style="width: 50px;"></div>
				</div>
				<button class="btn btn-outline-light">Unique</button> <button class="btn btn-outline-light">Style</button> <button class="btn btn-outline-light">Goth</button> <button class="btn btn-outline-light">Futuristic</button> <button class="btn btn-outline-light">Home</button><button class="btn btn-outline-light">Decor</button>
                    <button class="btn btn-outline-light">Furniture</button><button class="btn btn-outline-light">Elegant</button>
				</div>
			</div>
		</div>
	</div>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>
</html>