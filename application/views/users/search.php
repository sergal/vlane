<p align="center"><?php $this->load->helper('form');
echo form_open("search/process");
echo form_input("txt","");
echo " ";
echo form_submit(array("value" => "Найти", "class" => "btn-primary"));
echo form_close();
?></p>