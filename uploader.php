 
<form action="upload.php" method="post" enctype="multipart/form-data">
<label>Upload File

<input id="filefield" type="file" name="filefield" />

</label>

<label>

<input id="Upload" type="submit" name="Upload" value="Upload" />

<!-- This hidden input will force the  PHP max upload size. it may work on all servers. -->

<input type="hidden" name="MAX_FILE_SIZE" value="100000" />

</label></form>