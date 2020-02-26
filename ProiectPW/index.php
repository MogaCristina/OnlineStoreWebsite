<?php
session_start();
 $connect = mysqli_connect("localhost", "root", "", "product");  
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="index.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="index.php"</script>';  
                }  
           }  
      }  
 }  

include "config.php";
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<link href="./css/bootstrap4.css" rel="stylesheet">
<link href="./css/custom.css" rel="stylesheet">
<link href="./css/style.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
<link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css">
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
        <a class="nav-link" href="#home"><?php echo $lang['Acasa'] ?><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $lang['Colectia noastra'] ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#Goth">Gothic</a>
          <a class="dropdown-item" href="#Futuristic">Futuristic</a>
          <a class="dropdown-item" href="#Elegant">Elegant</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#about"><?php echo $lang['Despre'] ?></a>
      </li>
         <li class="nav-item">
        <a class="nav-link disabled" href="#team"><?php echo $lang['Echipa noastra'] ?></a>
      </li>
        <li class="nav-item">
        <a class="nav-link disabled" href="#contact"><?php echo $lang['Contact'] ?></a>
      </li>
        <li class="nav-item">
        <a class="nav-link disabled" href="#account"><?php echo $lang['Contul tau'] ?></a>
      </li>
        <li class="nav-item">
        <a class="nav-link disabled" href="#limba"><?php echo $lang['Limba'] ?></a>
      </li>
        <li class="nav-item">
        <i class="fas fa-2x fa-align-justify fa-shopping-cart" href="#" role="button" data-toggle="modal" data-target="#exampleModal" ></i>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content modal-lg">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cos de cumparaturi</h5>
              </div>
              <div class="modal-body">
                <div class="table-responsive dropdown-item table-sm">
                <table class="table table-bordered table-dark table-xs">
                <tr>  
                               <th width="40%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                </tr>  
                <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                              ?>  
                              <tr>  
                                   <td><?php echo $values["item_name"]; ?></td>  
                                   <td><?php echo $values["item_quantity"]; ?></td>  
                                   <td>$<?php echo $values["item_price"]; ?></td>  
                                   <td>$<?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                                   <td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>">
                                   <span class="text-danger">Remove</span></a></td>  
                              </tr>  
                              <?php  
                                        $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right">$ <?php echo number_format($total, 2); ?></td>  
                               <td></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                </table>
            </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#endcos" data-backdrop="false">Save changes</button>
                  
                  <!-- Modal -->
                <div id="endcos" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"></button>
                      </div>
                      <div class="modal-body">
                        <p>Thank you for your purchase!</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>

                  </div>
                </div>
        <!--END -->
                  
              </div>
            </div>
          </div>
        </div>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <h7 class="title2 dropdown-item">Cos de cumparaturi</h7>
                
        </div>
      </li>
        <li class="nav-item">
        <?php
        if(isset($_SESSION['username'])){
            echo '<li class="nav-item">';
            echo '<a class="nav-link" href="#account">';
            echo $_SESSION['username'];
            echo '</a></li>';
            echo '<a class="nav-link disabled" href="logout.php"><span>Logout</span></a></li>';
        }
        else{
            echo '<li class="nav-item">';
            echo '<a class="nav-link disabled" href="#account"></a>
                 </li>';
        }?>
            <!--cookies-->
         <!-- ?phpif(isset($_COOKIE["user"])) {echo $_SESSION['username']; }
            ?>-->
            
            <!--end cookies-->
        
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
        <a class="btn btn-info btn-lg" href="#Goth">Explore your style!</a>
       </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/bkg2.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h1>Redefining interior design</h1>
         <p>With our unique styles</p>
         <a class="btn btn-info btn-lg" href="#Elegant">Explore your style!</a>
       </div>
    </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="img/bkg3.jpg" alt="thirds slide">
      <div class="carousel-caption d-none d-md-block">
        <h1>Create the house of your dreams!</h1>
         <p>Our designs are made for people with vision.</p>
        <a class="btn btn-info btn-lg" href="#Futuristic">Explore your style!</a>
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

<?php include 'adminmode.php';?>

<div class="container-fluid bg-light-gray7"> 
<section class="page-section" data-anijs="if: scroll, on: window, do: fadeIn   animated, before: $scrollReveal repeat" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
             <a name="about"></a>
          <h2 class="section-heading text-uppercase"><?php echo $lang['Despre noi'] ?></h2>
          <h3 class="section-subheading text-muted"><?php echo $lang['visRealitate'] ?></h3>
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
                  <h4 class="subheading"><?php echo $lang['O IDEE, UN PIX, O HARTIE'] ?></h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted"><?php echo $lang['Description_Despre'] ?></p>
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
                  <h4 class="subheading"><?php echo $lang['VISUL DEVINE REALITATE'] ?></h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted"><?php echo $lang['secondPara'] ?></p>
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
                  <p class="text-muted"><?php echo $lang['thirdPara'] ?></p>
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
    

<!-- <div class="container-fluid bg-light-gray4">-->     
  
<?php               
$countG = 0;
$countE = 0;
$countF = 0;
$countA = 0;
$countO = 0;
$query = "SELECT * FROM products ORDER BY id ASC";  
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
echo '<div class="container-fluid bg-light-gray5">'; 
echo '<div class="row text-center">';
while($row = mysqli_fetch_array($result)){
    if($row["cat"] == "Goth"){
        if($countG == 0)include 'printHeader.php';
        $countG++;
        include 'printItem.php';
    }
}echo '</div></div>';
              
$query = "SELECT * FROM products ORDER BY id ASC";  
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)  
echo '<div class="container-fluid bg-light-gray2">';    
echo '<div class="row text-center">'; 
while($row = mysqli_fetch_array($result)){
    if($row["cat"] == "Elegant"){
        if($countE == 0)include 'printHeader.php';
        $countE++;
        include 'printItem.php';
    }
}echo '</div></div>';
              
$query = "SELECT * FROM products ORDER BY id ASC";  
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
echo '<div class="container-fluid bg-light-grayy">'; 
echo '<div class="row text-center">'; 
while($row = mysqli_fetch_array($result)){
    if($row["cat"] == "Futuristic"){
        if($countF == 0)include 'printHeader.php';$countF++;
        include 'printItem.php';
    }
}echo '</div></div>';
              
              
$query = "SELECT * FROM products ORDER BY id ASC";  
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
echo '<div class="container-fluid bg-light-gray6">'; 
echo '<div class="row text-center">'; 
while($row = mysqli_fetch_array($result)){
    if($row["cat"] == "Accessories"){
        if($countA == 0)include 'printHeader.php';$countA++;
        include 'printItem.php';
    }
}echo '</div></div>';
              
$query = "SELECT * FROM products ORDER BY id ASC";  
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
echo '<div class="container-fluid bg-light-gray8">';
echo '<div class="row text-center">';           
while($row = mysqli_fetch_array($result)){
    if(($row["cat"] != "Accessories") && ($row["cat"] != "Goth") && ($row["cat"] != "Elegant") && ($row["cat"] != "Futuristic")){
        if($countO == 0){
            echo '<div class="container pt-5 pb-5">

            <div class="row">
              <h3 style="color: wheat ">New Arrivals</h3>
                <a name="'.$row["cat"].'"></a>
                <a name="style4"></a>
            </div>
                <div class="row">
                <div class="underline"></div>
            </div>
        </div>';}
        $countO++;
        include 'printItem.php';
    }
}echo '</div></div>';
              
    ?>



<div class="container-fluid bg-light-gray4">
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
						<h5><?php echo $lang['Adresa depozit'] ?></h5>
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
						<h5><?php echo $lang['Contacte telefonice'] ?></h5>
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
						<h5><?php echo $lang['Orar asistenta telefonica'] ?></h5>
						<p><?php echo $lang['Luni-Vineri: 08->18 Sambata: 08->16'] ?></p>
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
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="user" class="form-control" required>
                </div>
         <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
                </div>
            <button type="submit" clas="btn btn=primary"> Login</button>
        </form>
    </div>
        <div class="col-md-3 login-right">
        <h3>Register now!</h3>
        <form action="registration.php" method="post">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="user" class="form-control" required>
                </div>
         <div class="form-group">
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
      </div><?php echo $lang['Orar asistenta telefonica'] ?>
          <div class="card-body">
            <h4 class="card-title">Director General</h4>
            <p class="card-text">Prapupicu Andrei</p>
          </div>
          <div class="card-footer">
               <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><?php echo $lang['Living my dream'] ?></button>

        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"></button>
              </div>
              <div class="modal-body">
                <img src=https://54d422bfce946a1b00b9-db204bc33373148745d05982db84d1c6.ssl.cf1.rackcdn.com/1558345940362https2F2Fblueprintapiproductions3amazonawscom2Fuploads2Fcard2Fimage2F8843952F15d43d18bfe54799b87f39cf37e7b71f.jpeg width ="250" height="250" class="rounded-circle img-responsive" alt="woman avatar">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>
        <!--END -->      
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
               <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1"><?php echo $lang['I love my job'] ?></button>

        <!-- Modal -->
        <div id="myModal1" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"></button>
              </div>
              <div class="modal-body">
                <img src=https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-2KuMBg7vkbkmMhtdjNas1b_7MtRT5n2SV0X6eux56957qBhm&s width ="250" height="250" class="rounded-circle img-responsive" alt="woman avatar">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>
        <!--END -->      
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
               <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2"><?php echo $lang['My team is the best'] ?></button>

        <!-- Modal -->
        <div id="myModal2" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"></button>
              </div>
              <div class="modal-body">
                <img src=https://www.potential.com/wp-content/uploads/2018/01/teamwork-.jpg width ="250" height="250" class="rounded-circle img-responsive" alt="woman avatar">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>
        <!--END -->      
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
               <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3"><?php echo $lang['Here to design your dream'] ?></button>

        <!-- Modal -->
        <div id="myModal3" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"></button>
              </div>
              <div class="modal-body">
                <img src=https://absoluteinternship.com/wp-content/uploads/graphic-design-hdr.jpg width ="250" height="250" class="rounded-circle img-responsive" alt="woman avatar">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>
        <!--END -->      
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
               <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal4"><?php echo $lang['Development is my hobby'] ?></button>

        <!-- Modal -->
        <div id="myModal4" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"></button>
              </div>
              <div class="modal-body">
                <img src=https://www.bamboohr.com/blog/wp-content/uploads/Employee_Development_Plans_4_Winning_Steps_to_Engage_Employees700x525.png width ="250" height="250" class="rounded-circle img-responsive" alt="woman avatar">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>
        <!--END -->      
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
               <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal5"><?php echo $lang['I love coffee!'] ?></button>

        <!-- Modal -->
        <div id="myModal5" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"></button>
              </div>
              <div class="modal-body">
                <img src=https://www.viennawurstelstand.com/wp-content/uploads/2017/03/viennawurstelstand_cafestostudyat_header.jpg width ="250" height="250" class="rounded-circle img-responsive" alt="woman avatar">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>
        <!--END -->      
        </div>
        </div>
      </div>

    </div>
</div>

<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=strada%20paris%20timisoara&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/nordvpn-coupon-code/"></a></div><style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style></div>
        
<footer>-
	<div class="container-fluid pt-5 pb-5 bg-dark text-light">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
				<div class="row">
					<h5><?php echo $lang['Alatura-te noua!'] ?></h5>
				</div>
				<div class="row mb-4">
				<div class="underline bg-light" style="width: 50px;"></div>
				</div>
					
						<p><i class="fa fa-chevron-right" aria-hidden="true"></i> Sign in! Creaza un cont!</p>
						<p><i class="fa fa-chevron-right" aria-hidden="true"></i> Log in! Am deja un cont!</p>
				</div>
				
				
		<div class="col-md-3">
				<div class="row">
					<h5><?php echo $lang['Livrare'] ?></h5>
				</div>
				<div class="row mb-4">
				<div class="underline bg-light" style="width: 50px;"></div>
				</div>
					
						<p><i class="fa fa-chevron-right" aria-hidden="true"></i> <?php echo $lang['shippar1'] ?></p>
						<p><i class="fa fa-chevron-right" aria-hidden="true"></i> <?php echo $lang['shippar2'] ?></p>
                        <p><i class="fa fa-chevron-right" aria-hidden="true"></i><?php echo $lang['shippar3'] ?></p>
				</div>
                <div class="col-md-3">
				<div class="row">
					<h5><?php echo $lang['Inconveniente'] ?></h5>
				</div>
				<div class="row mb-4">
				<div class="underline bg-light" style="width: 50px;"></div>
				</div>
					
						<p><i class="fa fa-chevron-right" aria-hidden="true"></i> <?php echo $lang['incpar1'] ?></p>
				</div>
				<div class="col-md-3">
				<div class="row">
					<h5><?php echo $lang['Garantie'] ?></h5>
				</div>
				<div class="row mb-4">
				<div class="underline bg-light" style="width: 50px;"></div>
				</div>
					
						<p><i class="fa fa-chevron-right" aria-hidden="true"></i>  <?php echo $lang['garapar1'] ?></p>
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
                <div class="col-md-3">
					<div class="row">
					<h5><?php echo $lang['Alege-ti limba!'] ?></h5>
                     <a name="limba"></a>
				</div>
				<div class="row mb-4">
				<div class="underline bg-light" style="width: 50px;"></div>
				</div>
				<a class="fas fa-globe" href="?lang=en"><?php echo $lang['Engleza'] ?></a><br>
               <a class="fas fa-globe" href="?lang=ro"><?php echo $lang['Romana'] ?></a>
				</div>
			</div>
		</div>
	</div>
</footer>

    
    
<script src="https://anijs.github.io/lib/anijs/anijs.js"></script>
<script src="https://anijs.github.io/lib/anijs/helpers/scrollreveal/anijs-helper-scrollreveal.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
<script src="https://anijs.github.io/lib/anijs/helpers/dom/anijs-helper-dom.js"></script>
    
</body>
</html>