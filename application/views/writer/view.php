<div class="container">

  <h3 class="title is-3">Read Post</h3>


  <div class="box">
    <p class="has-text-right">
      <a href="<?php echo base_url(); ?>writer/editpost/<?php echo $post['post_id']; ?>"><button class="button ">
          <span class="icon is-small">
            <i class="fas fa-edit"></i>
          </span>
          <span>Edit Post</span>
        </button></a>
    </p>


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
                ?><br><br>
      <?php echo $post['body']; ?>
    </p>
<hr>
<p class="subtitle is-6">
  <strong>Audio File</strong>
</p>
    <audio controls>
      <source src="<?php echo base_url(); ?>assets/files/audio/<?php echo $post['mp3']; ?>.mp3" type="audio/mpeg">
      
      Your browser does not support the audio tag.
    </audio>

<hr>

    <h6 class="title is-6">Reviews</h6>
<p>
<?php

foreach ($review as $re) : ?>

<div class="box">
  <article class="media">
    <div class="media-left">
      <figure class="image is-64x64">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ2KpqrN3VW_CfAd-BYFNH-hfkwNBfGZuAQzyUYPsxHsmZTdDh7" alt="Image">
      </figure>
    </div>
    <div class="media-content">
      <div class="content">
        <p>
          <strong><?php echo $re['name']; ?></strong> <small>@<?php echo $re['email']; ?></small> 
          <small>
             | <?php 
                  $d=strtotime($re['created_at']);
                  echo date("F d,Y", $d); 
                ?>
          </small>
          <br>
          <?php echo $re['review']; ?>
        </p>
      </div>

      <!--===============================================update review area====================-->
        <div class="content" id="<?php echo $re['review_id']; ?>" style="display: none;">
      <div id='check'>
          <?php echo form_open_multipart('writer/editreview'); ?>
          <div class="field">
              <input type="hidden" name="post_id" value="<?php echo $post['post_id']; ?>">
              <input type="hidden" name="user_id" value="<?php echo $re['user_id']; ?>">
              <input type="hidden" name="review_id" value="<?php echo $re['review_id']; ?>">
            <div class="control">
              <textarea class="textarea is-small" placeholder="Edit Review" name="review" required></textarea>
            </div>
          </div>
          <div class="has-text-right">
          <div class="field">
                      <button class="button is-success">
                          Update Review
                      </button>
                  </div>
          </div>
          <?php echo form_close(); ?>
      </div>
    </div>  
<!--===============================================update review end ***====================-->
    <script type="text/javascript">

    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
    

</script>


      <nav class="level is-mobile">
        <div class="level-left">
          <a class="level-item" aria-label="reply">
            <span class="icon is-small">
              <i class="fas fa-reply" aria-hidden="true"></i>
            </span>
          </a>
          <a class="level-item" aria-label="retweet">
            <span class="icon is-small">
              <i class="fas fa-retweet" aria-hidden="true"></i>
            </span>
          </a>
          <a class="level-item" aria-label="like">
            <span class="icon is-small">
              <i class="fas fa-heart" aria-hidden="true"></i>
            </span>
          </a>
        </div>
      </nav>
    </div>




    <p id='<?php echo 'editres'.$re['review_id']; ?>'> <span class="fas fa-edit" onclick="toggle_visibility('<?php echo $re['review_id']; ?>');"></span></p>&nbsp;&nbsp;
    <a href="<?php echo base_url(); ?>delete/review/<?php echo $re['review_id'] ?>" ><span class="fas fa-trash-alt"></span></a>
    
    <?php if($this->session->userdata('user_id') != $re['user_id']){?>
     <script>
       edit_visibility('<?php echo 'editres'.$re['review_id']; ?>');
     </script>
      <?php } ?>
  </article>
</div>
</p>
<?php endforeach;  ?>

<!--====================================Add new review=========================================-->
<?php echo form_open_multipart('writer/addreview'); ?>
<div class="field">
     <input type="hidden" name="post_id" value="<?php echo $post['post_id']; ?>">
  <div class="control">
    <textarea class="textarea" placeholder="Your Review" name="review" required></textarea>
  </div>
</div>
<div class="has-text-right">
<div class="field">
            <button class="button is-success">
                Add Review
            </button>
        </div>
</div>
<?php echo form_close(); ?>

<!--====================================Add new review end=========================================-->

    <a href="<?php echo base_url(); ?>writer/delete/<?php echo $post['post_id']; ?>" OnClick="return confirm('Post will be removed');">
    <button class="button is-danger">
        <span class="icon is-small">
          <i class="fas fa-trash-alt"></i>
        </span>
        <span>Remove Post</span>
      </button>
    </a>
    

    <hr>
    <!-----------post content end------------------->



  </div>
</div>


<script>
       function edit_visibility(id) {
    var e = document.getElementById(id);
    e.style.color = 'red';}
     </script>
