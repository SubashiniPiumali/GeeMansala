<div class="content has-text-centered has-text-black">
          <h1>Log in</h1>
</div>
<div class="herobody" >
          <div class="container" >
            <div class="columns is-centered">
              <div class="column is-5-tablet is-4-desktop is-5-widescreen">
                <div class="box">
              <?php echo form_open('users/login'); ?>
                <br>
                  <div class="field">
                    <label for="" class="label">Email</label>
                    <div class="control has-icons-left">
                      <input type="email" placeholder="e.g. bobsmith@gmail.com" name="email" class="input" required>
                      <span class="icon is-small is-left">
                        <i class="fa fa-envelope"></i>
                      </span>
                    </div>
                  </div>
                  <div class="field">
                    <label for="" class="label">Password</label>
                    <div class="control has-icons-left">
                      <input type="password" placeholder="*******" name="password" class="input" required>
                      <span class="icon is-small is-left">
                        <i class="fa fa-lock"></i>
                      </span>
                    </div>
                  </div>
                  <div class="field">
                    <label for="" class="checkbox">
                      <input type="checkbox">
                     Remember me
                    </label>
                  </div>
                  <div class="field">
                    <button class="button is-success">
                      Login
                    </button>
                  </div>
                  <br>
               
<?php echo form_close(); ?>
              </div></div>
            </div>
          </div>
        </div>