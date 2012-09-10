<html>
<head>
<title>Загрузить фотографию</title>
<meta charset="UTF-8">
</head>
<body>

<?php echo $this->load->helper('form'); ?>
<?php echo form_open_multipart('photo/add');?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="Загрузить" />

</form>

</body>
</html>