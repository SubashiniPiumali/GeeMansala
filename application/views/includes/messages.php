<div class="container">
  
<div class="columns is-mobile is-centered">
  <div class="column is-half">
    <p class="bd-notification is-primary">
     
  
  <?php if(validation_errors()): ?>
    <?php echo '<div class="notification is-warning is-light"><button class="delete"></button>'. validation_errors().'</div>'; ?>
  <?php endif; ?>




  <?php if($this->session->flashdata('success')): ?>
    <?php echo '<p class="notification is-success is-light"><button class="delete"></button>'.$this->session->flashdata('success').'</p>'; ?>
  <?php endif; ?>
  <?php if($this->session->flashdata('danger')): ?>
    <?php echo '<p class="notification is-danger is-light"><button class="delete"></button>'.$this->session->flashdata('danger').'</p>'; ?>
  <?php endif; ?>
  <?php if($this->session->flashdata('warning')): ?>
    <?php echo '<p class="notification is-warning is-light"><button class="delete"></button>'.$this->session->flashdata('warning').'</p>'; ?>
  <?php endif; ?>
  

    </p>
  </div>
</div>
  </div>

<script>
document.addEventListener('DOMContentLoaded', () => {
  (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
    $notification = $delete.parentNode;

    $delete.addEventListener('click', () => {
      $notification.parentNode.removeChild($notification);
    });
  });
});
</script>
