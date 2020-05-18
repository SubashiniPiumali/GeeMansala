<div class="container">
<h3 class="title is-4">Frequently Asked Questions</h3>

<div class="box">
<?php foreach ($questions as $question) : ?>
    <h3 class="title is-5"><?php echo  $question['question']; ?><br></h3>
   <p><?php echo  $question['answer']; ?></p> 
   <hr>
<?php endforeach; ?>

</div>

</div>