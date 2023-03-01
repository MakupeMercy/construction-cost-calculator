<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href ="assets/home.css">
<body>


    <?php include_once "header.php"?>


            
                
                
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
                                <input type="text" value="$ <?php echo ($_SESSION['vol_cement']+ $_SESSION['cement']) * 9.9?> " disabled style="height: 30px;" id="area-1">
                            </div>
                            
                            <div class="form-group" style="width: 100%;">
                                <label for="">Steel:</label>
                                <input type="text" value="0" disabled style="height: 30px;" id="area-2">
                            </div>

                            <div class="form-group" style="width: 100%;">
                                <label for="">Bricks:</label>
                                <input type="text" value="0" disabled style="height: 30px;" id="area-3">
                            </div>

                            <div class="form-group" style="width: 100%;">
                                <label for="">Sand:</label>
                                <input type="text" value="0" disabled style="height: 30px;" id="area-4">
                            </div>

                            <div class="form-group" style="width: 100%;">
                                <label for="">Aggregate:</label>
                                <input type="text" value="0" disabled style="height: 30px;" id="area-5">
                            </div>

                        
                            <div class="form-group" style="width: 100%;">
                                <label for="">Total cost:</label>
                                <input type="text" value="0" disabled style="height: 30px;" id="area-7">
                            </div>
                            

                           
                            </form>
                        </div>
                    </div>

                   
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
                                echo $_SESSION['vol_cement']/50+ $_SESSION['cement']?> bags" disabled style="height: 30px;" id="area-1">
                            </div>
                            
                            <div class="form-group" style="width: 100%;">
                                <label for="">Steel:</label>
                                <input type="text" value="<?php
                                  echo $_SESSION['steel_total'];?> cu.m" disabled style="height: 30px;" id="area-2">
                            </div>

                            <div class="form-group" style="width: 100%;">
                                <label for="">Bricks:</label>
                                <input type="text" value="<?php 
                                echo $_SESSION['Bricks']?> Pieces" disabled style="height: 30px;" id="area-3">
                            </div>

                            <div class="form-group" style="width: 100%;">
                                <label for="">Sand:</label>
                                <input type="text" value="<?php 
                                echo $_SESSION['sand'] + $_SESSION['sand_vol'] ?> Cu.M" disabled style="height: 30px;" id="area-4">
                            </div>

                            <div class="form-group" style="width: 100%;">
                                <label for="">Aggregate:</label>
                                <input type="text" value="<?php 
                                echo $_SESSION['Aggregate'] ?> Cu.M" disabled style="height: 30px;" id="area-5">
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

                        <li ><a href="">Mortar Calculator </a></li>

                        <hr width="100%" heigh="1px">

                        <li ><a href="">Aggregate Calculator </a></li>

                        <hr width="100%" heigh="1px">
                        
                        <li ><a href=""> Flooring Calculator </a></li>
                    </ul>
                    </div>
                </div>

            </div>

    </div>

</div>


                 </div>
            </div>     
      </div>
           
</body>
</html>