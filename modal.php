
<?php
/* Main page with two forms: sign up and log in */
require 'db.php';
ob_start();
session_start();
?>

<?php
if (isset($_POST['login'])) { //user logging in

    require 'login.php';

}

 ?>
  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

  <div class="cont_centrar">
  <div class="cont_login">
    <form action="index.php" method="post">
    <div class="cont_tabs_login">
      <ul class='ul_tabs'>
        <li class="active"><a href="#" onclick="sign_in()">LOGIN</a>
        <span class="linea_bajo_nom"></span>
        </li>
      </ul>
      </div>
  <div class="cont_text_inputs">

    <input  type="email" name="email" class="input_form_sign d_block active_inp" placeholder="EMAIL" />

    <input type="password" class="input_form_sign d_block active_inp" placeholder="PASSWORD" name="password" />
      </div>
<div class="cont_btn">
     <button class="btn_sign" name="login">SIGN IN</button>

      </div>
      <div class="clear">

      </div>

      <div class="signup">

        <a href="register" class="sign_up ">Don't have an account? Signup here</a>
          </div>

          <div class="clear">

          </div>

      <div class="signup">

            <a href="forgot_password" class="link_forgot_pass d_block" >Forgot Password ?</a>
          </div>



    </form>
    </div>

  </div>


</div>
  </div>
</div>
