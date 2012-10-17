<?php echo $this->load->helper('form'); ?>
<div id="container">
<?php echo form_open_multipart('photo/add');?>
<input type="file" name="userfile" size="20">
<br><br>
<button type="submit" class="btn">Upload it now!</button>
</form>
</div>
