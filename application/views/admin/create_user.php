<div class="container">

    <h3 class="title is-3">Create New User</h3>
    <div class="box">

        <?php echo form_open('admin/createuser'); ?>
        <div class="field">
            <label for="" class="label">Name</label>
            <div class="control has-icons-left">
                <input type="text" placeholder="Post title" name="name" class="input" required>
                <span class="icon is-small is-left">
                    <i class="fa fa-i-cursor"></i>
                </span>
            </div>
		</div>
		
		<div class="field">
            <label for="" class="label">Email</label>
            <div class="control has-icons-left">
                <input type="text" placeholder="Post title" name="email" class="input" required>
                <span class="icon is-small is-left">
                    <i class="fa fa-i-cursor"></i>
                </span>
            </div>
		</div>
		
		<div class="field">
            <label for="" class="label">Password</label>
            <div class="control has-icons-left">
                <input type="text" placeholder="Post title" name="password" class="input" required>
                <span class="icon is-small is-left">
                    <i class="fa fa-i-cursor"></i>
                </span>
            </div>
		</div>
		
		<div class="field">
            <label for="" class="label">Phone No</label>
            <div class="control has-icons-left">
                <input type="text" placeholder="Post title" name="phone" class="input" required>
                <span class="icon is-small is-left">
                    <i class="fa fa-i-cursor"></i>
                </span>
            </div>
        </div>
		
		<div class="field">
            <button class="button is-success">
                Create User
            </button>
        </div>
        <?php echo form_close(); ?>

    </div>

</div>
