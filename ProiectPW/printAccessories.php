<?php 

echo '<div class="media mt-5">
					<img src="'. $row["img"].'" class="img-fluid mr-3" alt="media1">
					<div class="media-body mt-2">
						<h5>'. $row["name"].'</h5>
						<form method="post" action="index.php?action=add&id='. $row["id"].'">  
                          <div style="background-color:#f1f1f1;" align="center">  
                               <h3 class="text-danger">$ '. $row["price"].'</h3>  
                               <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" value="'. $row["name"].'" />  
                               <input type="hidden" name="hidden_price" value="'. $row["price"].'" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                          </div>  
            </form>   
					</div>
				</div>';

?>