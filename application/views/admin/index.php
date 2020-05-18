<div class="container">

    <div class="columns">


        <div class="column">
            <div class="box">

                <h3 class="title is-3">Current Users</h3>

                <?php foreach ($users as $user) : ?>

                    <h4 class="title is-6">
                        <a href="<?php echo base_url(); ?>admin/index/<?php echo $user['user_id']; ?>">
                            <?php echo $user['name']; ?>
                        </a>
                    </h4>

                    <div class="level-right">
                        <a href="<?php echo base_url(); ?>remove_user/<?php echo $user['user_id']; ?>">

                            <button class="button is-danger" onclick="return ConfirmDialog()">
                                <span class="icon is-small">
                                    <i class="far fa-trash-alt"></i>
                                </span>
                                <span>Remove User</span>
                            </button> </a>
                    </div>

                    </a>
                    <hr>



                <?php endforeach; ?>



            </div>
        </div>


        <div class="column">

            <div class="box">




                <h3 class="title is-3">Create New User</h3>
                <div class="box">

                    <?php echo form_open('admin/createuser'); ?>
                    <div class="field">
                        <label for="" class="label">Name</label>

                        <div class="control has-icons-left">

                            <input type="text" placeholder="Enter User's Name" name="name" class="input" autocomplete="off" required>
                            <span class="icon is-small is-left">
                                <i class="fa fa-user"></i>
                            </span>
                        </div>

                    </div>

                    <div class="field">
                        <label for="" class="label">Email</label>
                        <div class="control has-icons-left">

                            <input type="text" placeholder="Email" name="email" class="input" autocomplete="off" required>
                            <span class="icon is-small is-left">
                                <i class="fa fa-envelope"></i>
                            </span>
                        </div>
                    </div>
                    <div class="field">
                        <label for="" class="label">Phone No</label>
                        <div class="control has-icons-left">

                            <input type="text" placeholder="Phone Number" name="phone" class="input" required>
                            <span class="icon is-small is-left">
                                <i class="fa fa-phone"></i>
                            </span>

                        </div>

                    </div>

                    <div class="field">
                        <label for="" class="label">Password</label>
                        <div class="control has-icons-left">

                            <input type="password" placeholder="Password" name="password" autocomplete="off" class="input" required>
                            <span class="icon is-small is-left">
                                <i class="fa fa-lock"></i>
                            </span>
                        </div>
                    </div>



                    <div class="field">
                        <button class="button is-success">
                            Create User
                        </button>
                    </div>
                    <?php echo form_close(); ?>

                    <br>
                </div>
            </div>
        </div>

    </div>


</div>

<script type="text/javascript">
    function ConfirmDialog() {
        var x = confirm("Are you sure to delete this user?");

        if (x) {


            return true;
        } else {

            return false;

        }

    }
</script>