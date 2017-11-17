  <!-- Modal -->
<div class="modal hide fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

  <div class="cont_centrar">
  <div class="cont_login">
    <form action="">
    <div class="cont_tabs_login">
      <ul class='ul_tabs'>
        <li id="title"class="active">LOGIN
        <span class="linea_bajo_nom"></span>
        </li>
      </ul>
      </div>
  <div class="cont_text_inputs">

    <input type="text" class="input_form_sign d_block active_inp" placeholder="EMAIL" name="email" />

    <input type="password" class="input_form_sign d_block  active_inp" placeholder="PASSWORD" name="password" />
      </div>
<div class="cont_btn">
     <button class="btn_sign">SIGN IN</button>

      </div>
      <div class="clear">

      </div>

      <div class="signup">

        <a href="#" data-toggle="modal" data-target="#modalRegister" data-dismiss="modal" class="sign_up ">Don't have an account? Signup here</a>
          </div>

          <div class="clear">

          </div>

      <div class="signup">

            <a href="#" data-toggle="modal" data-target="#modalForgot" data-dismiss="modal" class="link_forgot_pass d_block" >Forgot Password ?</a>
          </div>



    </form>
    </div>

  </div>


</div>
  </div>
</div>

<!-- Modal register -->
<div class="modal hide fade" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">

<div class="cont_centrar">
<div class="cont_login">
  <form action="">
  <div class="cont_tabs_login">
    <ul class='ul_tabs'>
      <li id="title" class="active">REGISTER
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
   <button class="btn_sign">REGISTER</button>

    </div>
    <div class="clear">

    </div>

    <div class="signup">

      <a href="#" data-toggle="modal" data-target="#exampleModal" data-dismiss="modal" class="sign_up ">Already have an account? Sign-In here</a>
        </div>

        <div class="clear">

        </div>

    <div class="signup">

          <a href="#" data-toggle="modal" id="regForgot" data-target="#modalForgot" data-dismiss="modal" class="link_forgot_pass d_block" >Forgot Password ?</a>
        </div>



  </form>
  </div>

</div>


</div>
</div>
</div>

<!-- Modal FORGOT-->
<div class="modal hide fade" id="modalForgot" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">

<div class="cont_centrar">
<div class="cont_login">
  <form action="">
  <div class="cont_tabs_login">
    <ul class='ul_tabs'>
      <li id="title" class="active">RESET PASSWORD
      <span class="linea_bajo_nom"></span>
      </li>
    </ul>
    </div>
<div class="cont_text_inputs">

  <input type="text" class="input_form_sign d_block active_inp" placeholder="EMAIL" name="email" />
    </div>
<div class="cont_btn">
   <button id="submit" class="btn_sign">SUBMIT</button>

    </div>
    <div class="clear">

    </div>

    <div class="signup">

      <a href="#" data-toggle="modal" data-target="#modalRegister" data-dismiss="modal" class="sign_up ">Don't have an account? Signup here</a>
        </div>

        <div class="clear">

        </div>

    <div class="signup">

          <a href="#" data-toggle="modal" id="signForgot" data-target="#exampleModal" data-dismiss="modal" class="link_forgot_pass d_block" >Sign-In</a>
        </div>



  </form>
  </div>

</div>


</div>
</div>
</div>
