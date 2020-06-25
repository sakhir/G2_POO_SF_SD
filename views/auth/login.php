<!-- <h1 class="text-center mt-5">Se connecter modif</h1>
<form class="form-signin col-6 offset-3" method="POST">
    <label for="login" class="sr-only">Login</label>
    <input type="text" id="login" class="form-control" placeholder="Login"
        required autofocus name="login">
    <label for="password" class="sr-only">Password</label>
    <input type="password" id="password" class="form-control"
        placeholder="Password" name="password" required>
    </div>
    <button class="btn btn-lg btn-primary btn-block mt-3" type="submit"
        name="connecter">Sign
        in</button>
</form> -->
    <?php 
     $link_connection="public/css/connexion.css";
     $link_conn="public/css/util.css";
    ?>


     <div id="cont">
            <div class="container">
                 <div class="row bg ">
                   <div class="col-md-12  "> <span id="res" class="m-l-10 m-t-10"> Reservation de chambre </span>
                   
                   </div>
                 </div>
                    <div class="row">
                      <div class="col-md-3 ">
                                <hr style="width: 200%;height: 2px;background-color: green;border-radius: 50%;margin-top: 20%;margin-left:80%; ">
                                
                      </div>
                    <div class="col-md-6 "> 
                         
                            <div class="wrap-input100  m-b-16" >

                               <img id="ava" src="public/img/av.png"> 
                                
                           </div>
                    </div>  
                    <div class="col-md-3 "> 
         
                            

                            <hr style="width: 90%;height: 2px;background-color: green;border-radius: 50%;margin-top: 20%;position:absolute;margin-left: -65%;">
                        
                    </div>
                    <div class="row conn">
                        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form p-l-55 p-r-55 p-t-50" method="post" id="connform" action="">
        
                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                        <input class="input100" type="text" name="login" placeholder="Login" id="log" required>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Please enter password">
                        <input class="input100" type="password" name="password" placeholder="Password" id="pwd" required>
                        <span class="focus-input100"></span>

                    </div>
                    <div id="response"></div>
                         

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit" name="connecter" id="login">
                            Se connecter
                        </button>
                    
                    </div>

                    
                </form>
                
            </div>
        </div>
                    </div>
 
                    </div>
             
                 
              
            </div>
    </div>



<script
  src="https://code.jquery.com/jquery-3.5.1.min.js" 
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="js/script.js"> </script>

