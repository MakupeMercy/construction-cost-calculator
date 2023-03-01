<?php error_reporting (E_ALL ^ E_NOTICE); ?> 
<?php session_start();

?>


<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="assets/home.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="flex-box-container-start-calc">
    <div class="start-calculation">
        <button onclick="startCalc()" id="startcalc-btn" >Back</button>
        <h1 id="startcalc-main-text">Total Cost: <span id="cost">$ <?php echo $_SESSION['mytotalcost'] + $_SESSION['Cost']   ;?></span></h1> <br>
        <p id="startcalc-sub-text">Use the forms to set the fields as per your home preference</p>
    </div>
    



    <div class="container-start-calc">
            <div class="clm-1">
                <div class="main-column-1">
                    
                <div class="column-dimension-set">
                    
                    
                    <div><label  ><p style="color:blue; font-weight:30px">Enter Colum Settings(m):</p></label><br></div>
                  
                    <form action="calc2.php" method="POST">
                            <div class="form-group" style="width: 100%;  padding-top:20px;">
                                <label for="">Length:</label>
                                <input type="text" name="col_length" value="" style="height: 30px; width:120px;" id="">
                            </div>
                            <div class="form-group" style="width: 100%;  padding-top:20px;">
                                <label for="">Width :</label>
                                <input type="text" name="col_width" value="" style="height: 30px; width:120px;" id="">
                            </div>
                            <div class="form-group" style="width: 100%; padding-top:20px;">
                                <label for="">Height:</label>
                                <input type="text" name="col_height" value="" style="height: 30px; width:120px;" id="">
                            </div>
    
                              
                      <div class="button-submit">
                        <button type="submit" name="column-set" class="btn-colum-set" id="btn-column-set" >Set</button>
                      </div>
                    </form>
                    </div>
            <div class="dimension-set">
                    
                    
                <div><label  ><p style="color:blue; font-weight:30px">Enter Wall Settings(m):</p></label><br></div>
                <form action="calc2.php" method="POST">
                        <div class="form-group" style="width: 100%;  padding-top:20px;">
                            <label for="">Length:</label>
                            <input type="text" name="length" value="" style="height: 30px; width:120px;" id="">
                        </div>
                        <div class="form-group" style="width: 100%;  padding-top:20px;">
                            <label for="">Width :</label>
                            <input type="text" name="width" value="" style="height: 30px; width:120px;" id="">
                        </div>
                        <div class="form-group" style="width: 100%; padding-top:20px;">
                            <label for="">Height:</label>
                            <input type="text" name="height" value="" style="height: 30px; width:120px;" id="">
                        </div>

                          
                  <div class="button-submit">
                    <button type="submit" name="dimension-set" class="btn-dimension-set" id="btn-dimension-set" >Set</button>
                  </div>
                </form>
                </div>

              


                


                    <div class="pop-up-box">
                        <!-- <img id="pop-up-image" src="assets/images/images (3).jpeg" alt="" width="400px" height="300px"> -->

                        <!-- START OF SETUP CALC FORM -->
                        <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert_success alert-dismissible fade show" role="alert">
                            <?php echo $_SESSION['status']; ?>
                            
                            </div>
                        <?php
                         unset($_SESSION['status']);
                    }else if (isset($_SESSION['error'])) {
                        ?>
                        <div class="alert alert_warning alert-dismissible fade show" role="alert">
                            <?php echo $_SESSION['error']; ?>
                            
                            </div>
                        <?php
                         unset($_SESSION['error']);
                    }
                ?>

                
                        <form action="calc.php" method="POST">
                    <div class="form-group">
                        <label  ><p style="color:blue; font-weight:30px"> Project Settings:</p></label><br>
                        
                        <select name="type" class="btn-1">

                            <option value=""><-Select project type-></option>  
                            <option value="New">New</option>
                            <option value="Renovation">Renovation</option>
                        </select>
                        
                    </div>

                    <div class="form-group">
                        <label ><p>Chose quality of finishes:</p></label><br>
                        <select name="quality" id="" class="button-3">
                        <option value=""><-quality of finishes-></option>
                            <option value="Basic">Basic</option>
                            <option value="Standard">Standard</option>
                            <option value="High">High</option>
                        </select>
                        
                    </div>

                    <div class="form-group">
                        <label ><p>Select site condition:</p></label><br>
                        <select name="conditions" id="" class="button-2">
                        <option value=""><-Site conditions-></option>
                            <option value="Good">Good</option>
                            <option value="Fair">Fair</option>
                            <option value="Difficult">Difficult</option>
                        </select>
                        
                    </div>
                   
                    
                  <div class="button-submit">
                    <button type="submit" name="save_select" class="btn-submit" id="btn-submit" >Set</button>
                  </div>
                </form>

                

                <!-- END OF SETUP CALC FORM -->
            </div>
    </div>

    <div class="main-column-3">
<div class="container-area">
                        <h2 id="area-txt">Construction cost estimator</h2>

                        <hr width="100%" height="1px">
                       
                        
                        <form action="calc.php" method="POST">
                            <div class="form-group" style="width: 100%;font-weight:200px">
                                <label for="">Display Wall Volume:</label> 
                                
                            </div>
                            

                            <div>
                                <input name="wall_Volume" value=" <?php echo $_SESSION['volume'];?>" type="text" style= "height:30px; width:320px; margin-right:-20px; margin-top:-35px" >
                                <input type="text" value="cu.m" style="height:30px; width:60px;background-color:grey">
                            </div>

                           
                                <hr width="100%" height="1px">
                            

                            <div class="form-group" style="width: 100%;">
                                <label for="">Approx Base Cost(as per project settings):</label>
                               
                            </div>

                            <div> 
                                <input name="percost"type="text" value="<?php 
                                    echo $_SESSION['mycost'];
                                    
                                    ?>" disabled style="height:30px; width:320px; margin-right:-20px" >
                                <input type="text" value="dollars" style="height:30px; width:60px;background-color:grey">
                        
                            </div>


                            <div>
                                <input type="submit" name="calculate" value="Calculate"class="calculate" >
                            </div>
                        </form>



                    </div>

                <div class="steel-dimension">

                    <form action="calc2.php" method="POST">
                    
                    <?php 
                    
                     
                    
                     
                     ?>
                        
                    
                            <div class="form-group" style="width: 100%;font-weight:200px">
                                <label for=""style="padding-left:30%; color:blue;">Steel Settings:</label> 
                                
                            </div>
                            

                            <div>
                            <label for="">Height of 1 steel rod:</label>
                                <input name="steel_height" value=" " type="text" style= "height:30px; width:200px; margin-right:-20px; margin-top:-35px" >
                                <input type="text" value="M" style="height:30px; width:60px;background-color:grey">
                            </div>

                            <div>
                            <label for="">Radius of 1 steel rod:</label>
                                <input name="steel_radius" value=" " type="text" style= "height:30px; width:200px; margin-right:-20px; margin-top:-35px" >
                                <input type="text" value="M" style="height:30px; width:60px;background-color:grey">
                            </div>

                            <div>
                            <label for="">No of steel in column:</label>
                                <input name="No_of_steel_per_column" value=" " type="text" style= "height:30px; width:200px; margin-right:-20px; margin-top:-35px" >
                                <input type="text" value="rods" style="height:30px; width:60px;background-color:grey">
                            </div>

                            <div>
                            <label for="">Total No of Columns:</label>
                                <input name="total_Columns" value=" " type="text" style= "height:30px; width:200px; margin-right:-20px; margin-top:-35px" >
                                <input type="text" value="cols" style="height:30px; width:60px;background-color:grey">
                            </div>

                           
                                

                            <div>
                                <input  style="margin-left:40%;"type="submit" name="steel_calc" value="Set"class="calculate" >
                            </div>
                        </form>


                 </div>
            </div>
           

            
                
                
                    <div class="main-column-2">
               
              
                    <div class="quantity-calculation">
                    <h2 id="area-txt">Construction cost|Approximate amount of cost given construction is <span></span> </h2> 

                        <hr width="100%" heigh="1px">
                        <div class="my-main">
                        
                            <div class="column-2-head">
                                <h3>Approximate cost of every construction material </h3>
                            </div>
                        <form action="">
                            
                            <div class="form-group" style="width: 100%;">
                                <label for="">Cement:</label>
                                <input type="text" value="$ <?php echo ($_SESSION['bag_cement']+ $_SESSION['cement']) * 7.5?> " disabled style="height: 30px;" id="area-1">
                            </div>
                            
                            <div class="form-group" style="width: 100%;">
                                <label for="">Steel:</label>
                                <input type="text" value="$<?php echo $_SESSION['steelCost'] * 8?>" disabled style="height: 30px;" id="area-2">
                            </div>

                            <div class="form-group" style="width: 100%;">
                                <label for="">Bricks:</label>
                                <input type="text" value="$<?php echo $_SESSION['Bricks'] * 0.6?>" disabled style="height: 30px;" id="area-3">
                            </div>

                            <div class="form-group" style="width: 100%;">
                                <label for="">Sand:</label>
                                <input type="text" value="$<?echo ($_SESSION['sand'] + $_SESSION['sandMass']) * 18?>" disabled style="height: 30px;" id="area-4">
                            </div>

                            <div class="form-group" style="width: 100%;">
                                <label for="">Aggregate:</label>
                                <input type="text" value="$<?php echo $_SESSION['Aggregate'] * 13?>" disabled style="height: 30px;" id="area-5">
                            </div>

                        
                            <div class="form-group" style="width: 100%;">
                                <label for="">Total cost:</label>
                                <input type="text" value="$<?php 
                                echo (($_SESSION['bag_cement']+ $_SESSION['cement']) * 7.5) +  ($_SESSION['steelCost'] * 8) 
                                + ( $_SESSION['Bricks'] * 0.6) + (($_SESSION['sand'] + $_SESSION['sandMass']) * 18) +
                                ($_SESSION['Aggregate'] * 13);
                                ?>" disabled style="height: 30px;" id="area-7">
                            </div>
                            

                           
                            </form>
                        </div>
                    </div>

                    <?php 
                   
                    $_SESSION['Cost'] = (($_SESSION['bag_cement']+ $_SESSION['cement']) * 7.5) +  ($_SESSION['steelCost'] * 8) 
    + ( $_SESSION['Bricks'] * 0.6) + (($_SESSION['sand'] + $_SESSION['sandMass']) * 18) +
    ($_SESSION['Aggregate'] * 13);?>

                   
                </div>
               
                <div class="quantity-amount">
                  <h2 id="area-txt">Quantity of material required for a given construction area</h2> 

                  <hr width="100%" heigh="1px">
                  
                  <div class="quantity-amount-display">
                      <div class="quantity-amount-head">
                          <h3>Amount of material per given construction area</h3>
                      </div>

                    

                      <form action="">
                            
                            <div class="form-group" style="width: 100%;">
                                <label for="">Cement:</label>
                                <input name="cement" type="text" value="<?php 
                                echo $_SESSION['bag_cement'] + $_SESSION['cement']?> bags" disabled style="height: 30px;" id="area-1">
                            </div>
                            
                            <div class="form-group" style="width: 100%;">
                                <label for="">Steel:</label>
                                <input type="text" value="<?php
                                  echo $_SESSION['steel_total'];?> rods" disabled style="height: 30px;" id="area-2">
                            </div>

                            <div class="form-group" style="width: 100%;">
                                <label for="">Bricks:</label>
                                <input type="text" value="<?php 
                                echo $_SESSION['Bricks']?> Pieces" disabled style="height: 30px;" id="area-3">
                            </div>

                            <div class="form-group" style="width: 100%;">
                                <label for="">Sand:</label>
                                <input type="text" value="<?php 
                                echo $_SESSION['sand'] + $_SESSION['sandMass'] ?> Ton" disabled style="height: 30px;" id="area-4">
                            </div>

                            <div class="form-group" style="width: 100%;">
                                <label for="">Aggregate:</label>
                                <input type="text" value="<?php 
                                echo $_SESSION['Aggregate'] ?> Ton" disabled style="height: 30px;" id="area-5">
                            </div>

                            
                          </form>
                            
                                

                  </div>
                  
                     
                </div>
                
               

            </div>
            

            <div class="clm-2">
                <div class="quantity-calculator">
                    <div class="main-bar">
                        <h2>Quantity Estimator</h2>
                    </div>
                    <div class="sub- bar">
                    <ul class="my-quantity-list">
                        <li ><a href="">Cement Calculator</a></li>

                        <hr width="100%" heigh="1px">

                        <li ><a href="">Brick Calculator </a></li>

                        <hr width="100%" heigh="1px">

                        <li ><a href="">Steel Calculator</a></li>

                        <hr width="100%" heigh="1px">

                        <li ><a href="">Paint Calculator </a></li>

                        <hr width="100%" heigh="1px">

                        <li ><a href="">Aggregate Calculator </a></li>

                        <hr width="100%" heigh="1px">

                        <li ><a href="">Fine Aggregate Calculator </a></li>

                        <hr width="100%" heigh="1px">
                        
                        <li ><a href=""> Tiles Calculator </a></li>

                        <hr width="100%" heigh="1px">

                        <li ><a href=""> Binding wire Calculator </a></li>
                    </ul>
                    </div>
                </div>

            </div>

    </div>

</div>


</body>

<script>
    function hideAlert(){
        const alerts= document.querySelectorAll('.alert-dismissible');
        alerts.forEach(function(alert) {
            alert.style.display = "none"
        });
    }
    setTimeout(hideAlert,3000);
</script>

<script src="assets/Home.js"></script>
</html>