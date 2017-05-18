<div class="modal fade" id="modalError" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <p class=".bg-danger"><?php echo  get_cookie('errorLogin')?></p>
      </div>
    </div>
  </div>
</div>
<!-- <?php if(get_cookie('errorLogin')){ ?>
<script type="text/javascript"> 
  $('#modalError').show(); 
</script>
<?php } ?>
 -->