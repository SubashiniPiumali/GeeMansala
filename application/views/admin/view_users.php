<div class="container" >

<div class="columns">

	<div class="column">

		<div class="box">
		

		<div class="field is-horizontal">
  <div class="field-label is-normal">
    <label class="label">Name</label>
  </div>
  <div class="field-body">
    <div class="field">
      <p class="control is-expanded has-icons-left">
        <input class="input" type="text" value = "<?php echo $userdata['name']; ?>" placeholder="Name" readonly>
        <span class="icon is-small is-left">
          <i class="fas fa-user"></i>
        </span>
      </p>
    </div>

  </div>

</div>

<div class="field is-horizontal">
  <div class="field-label is-normal">
    <label class="label">Email</label>
  </div>
  <div class="field-body">
    <div class="field">
      <p class="control is-expanded has-icons-left">
        <input class="input" type="text" value = "<?php echo $userdata['email']; ?>" placeholder="Email" readonly>
        <span class="icon is-small is-left">
          <i class="fas fa-envelope"></i>
        </span>
      </p>
    </div>

  </div>
</div>


<div class="field is-horizontal">
  <div class="field-label is-normal">
    <label class="label">Phone</label>
  </div>
  <div class="field-body">
    <div class="field">
      <p class="control is-expanded has-icons-left">
        <input class="input" type="text" value = "<?php echo $userdata['phone']; ?>" placeholder="Phone" readonly>
        <span class="icon is-small is-left">
          <i class="fas fa-phone"></i>
        </span>
      </p>
    </div>

  </div>
</div>

<div class="field is-horizontal">
  <div class="field-label is-normal">
    <label class="label">Registered Date</label>
  </div>
  <div class="field-body">
    <div class="field">
      <p class="control is-expanded has-icons-left">
        <input class="input" type="text" value = "<?php echo $userdata['register_date']; ?>"placeholder="Email" readonly>
        <span class="icon is-small is-left">
          <i class="fas fa-user"></i>
        </span>
      </p>
    </div>

  </div>
</div>


<div class="field is-horizontal">
  <div class="field-label">
    <!-- Left empty for spacing -->
  </div>
  <div class="field-body">
    <div class="field">
      <div class="control">

	  
	  <a href="<?php echo base_url(); ?>remove_user/<?php echo $userdata['user_id']; ?>">
        <button class="button is-primary">
          Remove User
		</button>
		
	</a>
      </div>
    </div>
  </div>
</div>
		


		</div>
	</div>


	
	<div class="column">
	<div class="box">
		
	<?php foreach ($posts as $post) : ?>
      <!-----------post content------------------->

      <h4 class="title is-6">
        <a href="<?php echo base_url(); ?>pages/<?php echo $post['post_id']; ?>">
          <?php echo $post['title']; ?>
        </a>
      </h4>
      <p class="subtitle is-6">
        <i class="fas fa-book"></i>
        <small> <?php echo $post['category']; ?> </small>
        <i class="fas fa-clock"></i> <?php 
                  $d=strtotime($post['created_at']);
                  echo date("F d,Y , H:m", $d); 
                ?><br>
        <?php //echo $post['body']; ?>
        <?php echo word_limiter($post['body'],10); ?>
	  </p>

<br>
	  
	  <a href="<?php echo base_url(); ?>remove_post/<?php echo $post['post_id']; ?>">
	  <button class="button is-danger">
        <span class="icon is-small">
          <i class="far fa-trash-alt"></i>
        </span>
        <span>Remove Post</span>
	  </button>
	</a>
      <hr>
      <!-----------post content end------------------->

    <?php endforeach;  ?>

	</div>
	</div>

</div>

</div>



