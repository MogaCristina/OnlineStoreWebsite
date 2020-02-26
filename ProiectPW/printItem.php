<?php 
echo '<div class="col-lg-3 col-md-6 mb-4 scale-up-center">
        <div class="card h-100 shadow-drop-2-center">
          <img class="card-img-top" src="'. $row["img"].'" alt="">
          <div class="card-body">
            <h4 class="card-title">'. $row["name"].'</h4>
            <p class="card-text"><?php echo $lang[\'darkThroneDes\'] ?></p>
          </div>
          <div class="card-footer">
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
        </div>
      </div>';
    ?>