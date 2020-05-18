<div class="container">

  <h3 class="title is-3">Edit Profile</h3>


  <div class="box">
    <p class="has-text-right">
      <a href="<?php echo base_url(); ?>writer/index"><button class="button ">
          <span class="icon is-small">
            <i class="fas fa-times"></i>
          </span>
          <span>Cancel</span>
        </button></a>
    </p>



    
      <!-----------edit pro content------------------->
      <?php echo form_open_multipart('updateprofile'); ?>
        <div class="field">
            <input type="hidden" name="user_id" value="<?php echo $userdata['user_id']; ?>">
            <label for="" class="label">Name</label>
            <div class="control has-icons-left">
                <input type="text" name="name" class="input" value="<?php echo $userdata['name']; ?>">
                <span class="icon is-small is-left">
                    <i class="far fa-user"></i>
                </span>
            </div>
        </div>
        <div class="field">
            <label for="" class="label">Email</label>
            <div class="control has-icons-left">
                <input type="text" name="email" class="input" value="<?php echo $userdata['email']; ?>">
                <span class="icon is-small is-left">
                    <i class="far fa-envelope"></i>
                </span>
            </div>
        </div>
        <div class="field">
            <label for="" class="label">Phone Number</label>
            <div class="control has-icons-left">
                <input type="text" name="phone" class="input" value="<?php echo $userdata['phone']; ?>">
                <span class="icon is-small is-left">
                    <i class="fas fa-phone-alt"></i>
                </span>
            </div>
        </div>

        <div class="field">
            <button class="button is-success">
                Update Profile
            </button>
        </div>
</form>
      <!-----------edit pro content end------------------->


  </div>

  <h3 class="title is-3">Change Password</h3>
  <div class="box">
        <?php echo form_open_multipart('changepassword'); ?>
        <input type="hidden" name="user_id" value="<?php echo $userdata['user_id']; ?>">
        <input type="hidden" name="oldpassword" value="<?php echo $userdata['password']; ?>">

        <div class="field">
            <label for="" class="label">Current Password</label>
            <div class="control has-icons-left">
                <input type="password" name="currentpassword" placeholder="*********" class="input" required>
                <span class="icon is-small is-left">
                    <i class="fas fa-lock"></i>
                </span>
            </div>
        </div>

        <div class="field">
            <label for="" class="label">New Password</label>
            <div class="control has-icons-left">
                <input type="password" name="newpassword" placeholder="*********" class="input" required>
                <span class="icon is-small is-left">
                    <i class="fas fa-lock"></i>
                </span>
            </div>
        </div>
        <div class="field">
            <button class="button is-success">
                Change Password
            </button>
        </div>
        </form>
  </div>


</div>