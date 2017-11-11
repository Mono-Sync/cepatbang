<?php include_once 'header.php'; ?>
<?php include_once 'modal.php'; ?>

<div class="clear">

</div>

<div class="register">
      <div class="row" >

        <div class="col-md-5 offset-md-7 cont">

            <div class="modal-content reg">

      <div class="cont_centrar">
      <div class="cont_login">
        <form action="">
        <div class="cont_tabs_login">
          <ul class='ul_tabs'>
            <li class="active"><a href="#" onclick="sign_in()">SIGN UP</a>
            <span class="linea_bajo_nom"></span>
            </li>
          </ul>
          </div>
      <div class="cont_text_inputs">

          <input type="text" class="input_form_sign d_block active_inp" placeholder="FIRST NAME" name="firstname" />
          <input type="text" class="input_form_sign d_block active_inp" placeholder="LAST NAME" name="lastname" />
          <input type="text" class="input_form_sign d_block active_inp" placeholder="PHONE NUMBER" name="phonenumber" />
        <input type="text" class="input_form_sign d_block active_inp" placeholder="EMAIL" name="email" />

        <input type="password" class="input_form_sign d_block  active_inp" placeholder="PASSWORD" name="password" />
        <input type="password" class="input_form_sign d_block  active_inp" placeholder="CONFIRM PASSWORD" name="confirmpassword" />

          </div>
    <div class="cont_btn">
         <button class="btn_sign">SIGN UP</button>

          </div>
        </form>
        </div>

      </div>


    </div>



        </div>
      </div>
    </div>



<?php include_once 'footer.php'; ?>
