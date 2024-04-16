<?php 
include('include/auth.php');
$title = 'save logo';
include('include/header.php'); ?>

<h2>Add a New Show</h2>
<form method="post" action="save-logo.php" enctype="multipart/form-data">
<fieldset>
        <label for="photo">Photo:</label>
        <input type="file" id="photo" name="photo" accept="image/*" />
    </fieldset>
    <button class="offset-button">Submit</button>
</form>
</main>
</body>
</html>