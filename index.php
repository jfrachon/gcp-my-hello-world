
<!DOCTYPE html>
<html>
    <body>
        <h1>Personal pictures loader</h1>

        <!--
        <?php
        echo "Hi, please enter your name!";
        ?>
        <form action="name.php" method="post">
            Name: <input type="text" name="name"><br>
            <input type="submit">
        </form>
        -->

        <form action="upload.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload"> <br>
            <input type="submit" value="Upload Image" name="submit">
        </form>

    </body>
</html>