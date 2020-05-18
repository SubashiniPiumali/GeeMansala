<div class="container">
<a href="<?php echo base_url(); ?>writer/editprofile">Edit Profile</a>

  <h3 class="title is-3">Your recent posts</h3>


  <div class="box">
    <p class="has-text-right">
      <a href="<?php echo base_url(); ?>writer/createpost"><button class="button ">
          <span class="icon is-small">
            <i class="fas fa-plus"></i>
          </span>
          <span>Add new</span>
        </button></a>
    </p>

  <?php if($posts==null){ ?>
    <span class="tag is-warning is-light is-medium">You havent create any post yet</span> 
    <a href="<?php echo base_url(); ?>writer/createpost">Create New</a>
  <?php } ?>

    <?php foreach ($posts as $post) : ?>
      <!-----------post content------------------->

      <h4 class="title is-4">
        <a href="<?php echo base_url(); ?>writer/index/<?php echo $post['post_id']; ?>">
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
        <?php echo word_limiter($post['body'],25); ?>
      </p>
      <hr>
      <!-----------post content end------------------->

    <?php endforeach;  ?>

  </div>
</div>