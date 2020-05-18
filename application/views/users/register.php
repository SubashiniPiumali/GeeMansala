<div class="content has-text-centered has-text-black">
          <h1>Sign up</h1>
</div>

<div class="herobody">
          <div class="container">
                  
            <div class="columns is-centered">
              <div class="column is-5-tablet is-4-desktop is-6-widescreen">
              <div class="box">
                <?php echo form_open('users/register'); ?>


                <div class="field">
                    <label for="" class="label">Name</label>
                    <div class="control has-icons-left">
                      <input type="text" placeholder="Your name" class="input" name="name" required>
                      <span class="icon is-small is-left">
                        <i class="fa fa-user"></i>
                      </span>
                    </div>
                  </div>

                  <div class="field">
                    <label for="" class="label">Phone No</label>
                    <div class="control has-icons-left">
                      <input type="text" placeholder="Phone Number" class="input" name="phoneNo" required>
                      <span class="icon is-small is-left">
                        <i class="fa fa-phone"></i>
                      </span>
                    </div>
                  </div>


                  <div class="field">
                    <label for="" class="label">Email</label>
                    <div class="control has-icons-left">
                      <input type="email" placeholder="e.g. bobsmith@gmail.com" class="input" name="email" required>
                      <span class="icon is-small is-left">
                        <i class="fa fa-envelope"></i>
                      </span>
                    </div>
                  </div>

                  <div class="field">
                    <label for="" class="label">Password</label>
                    <div class="control has-icons-left">
                      <input type="password" placeholder="*******" class="input" name="password" required>
                      <span class="icon is-small is-left">
                        <i class="fa fa-lock"></i>
                      </span>
                    </div>
                  </div>

                  <div class="field">
                    <label for="" class="checkbox">
                      <input type="checkbox" required>
                     I accept the privacy policy
                    </label>
                  </div>

                  <div class="field">
                    <button class="button is-success">
                    Sign Up
                    </button>
                  </div>

                  <?php echo form_close(); ?>
              </div></div>
            </div>
          </div>
        </div>