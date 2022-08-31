<html>
    <body>

        <table>
            <form action="file_upload.php" method="post" enctype="multipart/form-data">
            <tr>
                <td>FILE UPLOAD</td>
            </tr>
            <tr> <td> <input type="file" name='fileToUpload' require autofocus> </td> </tr>
            <tr> <td> <input type="submit" name="submit" value="upload" /> </td> </tr>
    </form></table>
    </body>
</html>

<?php
    if(isset($_POST['submit']))
    {
        echo "<pre>";
        print_r($_FILES["fileToUpload"]);
        echo "</pre>";

        if( getimagesize($_FILES['fileToUpload']['tmp_name']) ) // if its image or not
        {
            $size = $_FILES['fileToUpload']['size']/1024;
            if($size < 500.00) // size must be < 500kb
            {
                echo "<br> Size: ". number_format($size,2) ." k.b";
                if( file_exists("img/".$_FILES['fileToUpload']['name']) ) // if i,age with same name exists already
                {
                    echo "<script>
                                var res = confirm(' File already exists  Want to replace it ? ');
                                if(res)
                                {";
                                    move_uploaded_file( $_FILES['fileToUpload']['tmp_name'], "img/".$_FILES['fileToUpload']['name']);
                                    echo"
                                }
                                else{ 
                                    alert(' File is not uploaded ! ');
                                }
                        </script>";
                }
                else{
                    move_uploaded_file( $_FILES['fileToUpload']['tmp_name'] , "img/".$_FILES['fileToUpload']['name']);
                    echo "<br> <h2 style='color:limegreen;'> FILE uploaded </h2>";
                }
            }
            else
                echo "<br> <h2 style='color:red;'> Size limit is 500 k.b. </h2>";
        }
        else
            echo "<br> <h2 style='color:red;'> File must be an image </h2>";
    }

?>