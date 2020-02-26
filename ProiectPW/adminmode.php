<?php 
        if(isset($_SESSION['username'])){
            if($_SESSION['username'] == "admin"){
            $connection = mysqli_connect('localhost', 'root', ''); 
                mysqli_select_db($connection,'userregistration');
                $query = "SELECT * FROM usertable ORDER BY id ASC"; 
                $result = mysqli_query($connection,$query);
echo '<div class="container-fluid bg-light-gray3">';
                echo '<div class="table-responsive col-sm table-sm">
                <table class="table table-bordered table-dark table-sm">
                <tr>  
                               <th width="50%">Nume</th>  
                               <th width="25%">Parola</th>
                               <th width="25%">Action</th>

                </tr>';

                
                while($row = mysqli_fetch_array($result)){   
                   
                            echo '<tr>  
                                    <td>'. $row["name"] .'</td>  
                                    <td>'. $row["password"].'</td>
                                    
                                    <td>
                                    
                                     <form action="deleteAcc.php" method="post" autocomplete="off">
                                     <input type="text" name="userdel" value="'.$row["name"].'" hidden class="form-control" required>
                                     <button type="submit" class="btn btn-link text-danger" data-toggle="modal" data-target="#deleteuser">Remove</button>
                                     </form>
                                     
                                     <button type="submit" class="btn btn-link text-warning" data-toggle="modal" data-target="#'.$row["id"].'">Edit</button>
                                     <!-- Modal -->
                                     
                                     <div id="'.$row["id"].'" class="modal fade" role="dialog" data-backdrop="false">
                                     <div class="modal-dialog">
                                    <!-- Modal content-->
                                     <div class="modal-content">
                                     <div class="modal-header">
                                     <form action="updateAcc.php" method="post" autocomplete="off">
                                     <div class="form-group">
                                     <input type="hidden" name="usrid" class="form-control value="'.$row["id"].'">
                                     
                                     <input type="text" name="olduser" value="'.$row["name"].'" hidden class="form-control" required>
                                     
                                     <input type="text" name="oldppassword" value="'.$row["password"].'" hidden  class="form-control" required>
                                     
                                     <label>New Username</label>
                                     <input type="text" name="userupdate" value="'.$row["name"].'" class="form-control" required>
                                     
                                     <label>Password</label>
                                     <input type="text" name="userupdate2" value="'.$row["password"].'" class="form-control" required>
                                     </div>
                                     <div class="form-group">
                                     </div>
                                     <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#edititem">Edit User</button>
                                     </form>
                                     </div>
                                     
                                     <div class="modal-footer">
                                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            
                                     </div>
                                     </div>
                                     </div>
                                    <!--END -->     
                               
                                        

                                     
                                   </td>
                                    </tr>';
                }
                
                echo'</table>
                </div>';

                echo'<div class="container-fluid row ">';
                //ADD USER
                echo '<li class="nav-item col-xs-3">
                 <a class="nav-link style="background-color=rgba(255,255,255,0.7)"" href="#item-name">
                 <form action="registration.php" method="post" autocomplete="off">
                 <div class="form-group">
                 <label>Username</label>
                 <input type="text" name="user" class="form-control" required>
                 <label>Password</label>
                 <input type="password" name="password" class="form-control" required>
                 </div>
                 <div class="form-group">
                 </div>
                 <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#additem">Add user</button>
                 
                <!-- Modal -->
                 <div id="additem" class="modal fade" role="dialog" data-backdrop="false">
                 <div class="modal-dialog">
                //<!-- Modal content-->
                 <div class="modal-content">
                 <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal"></button>
                 </div>
                 <div class="modal-body">
                 <h2>Added successfully!!</h2>
                 <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                 </div>
                 </div>
                 </div>
                 </div>
                <!--END -->  
                
                 </form>
                 
                 <br>
                 </a></li></div>';
                
                // PRINT ITEMS TABLE
                
                mysqli_select_db($connection,'product');
                $query = "SELECT * FROM products"; 

                $result = mysqli_query($connection,$query);
                
                echo '<div class="table-responsive col-sm table-sm">
                <table class="table table-bordered table-dark table-xs">
                <tr>  
                               <th width="30%">Id</th>  
                               <th width="30%">Nume</th>
                               <th width="20%">Pret</th>
                               <th width="20%">Action</th>
                </tr>';

                while($row = mysqli_fetch_array($result)){   
                            echo '<tr>  
                                    <td>'. $row["id"] .'</td>  
                                    <td>'. $row["name"].'</td>
                                    <td>'. $row["price"].'</td>
                                    <td>
                                    
                                     <form action="itemdel.php" method="post" autocomplete="off">
                                     <div class="form-group">
                                     <input type="text" name="item-namedel" value="'.$row["name"].'" hidden class="form-control" required>
                                     </div>
                                     <div class="form-group">
                                     </div>
                                     <button type="submit" class="btn btn-link text-danger" data-toggle="modal" data-target="#deleteitem">Remove</button></form>
                                     
                                     
                                     
                                     <button type="submit" class="btn btn-link text-warning" data-toggle="modal" data-target="#'.$row["id"].'">Edit</button>
                                     <!-- Modal -->
                                     
                                     <div id="'.$row["id"].'" class="modal fade" role="dialog" data-backdrop="false">
                                     <div class="modal-dialog">
                                    <!-- Modal content-->
                                     <div class="modal-content">
                                     <div class="modal-header">
                                     <form action="updateitem.php" method="post" autocomplete="off">
                                     <div class="form-group">
                                     <input type="hidden" name="itemid" class="form-control value="' . $row["id"] . '">
                                     <label>Old item</label>
                                     <input type="text" name="olditem" value="'.$row["name"].'" hidden class="form-control" required>
                                     <label>Old price</label>
                                     <input type="number" name="oldprice" value="'.$row["price"].'" hidden class="form-control" required> 
                                     
                                     <label>Old img</label>
                                     <input type="text" name="oldimg" value="'.$row["img"].'" hidden class="form-control" required>
                                     
                                     <label>Old cat</label>
                                     <input type="text" name="oldcat" value="'.$row["cat"].'" hidden class="form-control" required>
                                     
                                     <label>New item</label>
                                     <input type="text" name="itemname" value="'.$row["name"].'" class="form-control" required>
                                     
                                     <label>new price</label>
                                     <input type="number" name="itemprice" value="'.$row["price"].'" class="form-control" required>
                                     
                                     <label>new img</label>
                                     <input type="text" name="itemimg" value="'.$row["img"].'" class="form-control" required>
                                     
                                     <label>new cat</label>
                                     <input type="text" name="itemcat" value="'.$row["cat"].'" class="form-control" required>
                                     
                                     </div>
                                     <div class="form-group">
                                     </div>
                                     <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#edititem">Edit User</button>
                                     </form>
                                     </div>
                                     
                                     <div class="modal-footer">
                                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            
                                     </div>
                                     </div>
                                     </div>
                                    <!--END -->     
                               
                                        

                                     
                                   </td>
                                    
                                </tr>';
                }
                echo'</table></div>';
                
                
                
                
                echo'<div class="container-fluid row">';
                //ADD item
                echo '<li class="nav-item col-s-3">
                 <a class="nav-link style="background-color=rgba(255,255,255,0.7)"" href="#item-name">
                 <form action="addproduct.php" method="post" autocomplete="off">
                 <div class="form-group">
                 <label>Item name</label>
                 <input type="text" name="item-name" class="form-control" required>
                 <label>Item price</label>
                 <input type="number" name="item-price" class="form-control" required>
                 <label>Item image</label>
                 <input type="text" name="item-img" class="form-control" required>
                 <label>Item category</label>
                 <input type="text" name="item-cat" class="form-control" required>
                 </div>
                 <div class="form-group">
                 </div>
                 <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#additem">Add item</button>
                <!-- Modal -->
                 <div id="additem" class="modal fade" role="dialog" data-backdrop="false">
                 <div class="modal-dialog">
                //<!-- Modal content-->
                 <div class="modal-content">
                 <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal"></button>
                 </div>
                 <div class="modal-body">
                 <h2>Added successfully!!</h2>
                 <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                 </div>
                 </div>
                 </div>
                 </div>
                <!--END -->     
                 </form><br>
                 </a></li>
                 </div>';
            }
        }
        echo '</div></div>';
?>