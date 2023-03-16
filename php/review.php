
<?php

    require("config.php");

    if(isset($_POST['submit']))
    {
            $fullname = $_POST['Fullname'];
            $review = $_POST['Review'];
            $rating = $_POST['Rating'];

            $query = " INSERT INTO review (Fullname,Review,Rating) values('$fullname','$review','$rating')";

            if($conn->query($query))
            {
              echo"success";
            }
            else
            {
                echo 'Please Check Your Query ';
            }
        
    }

    if ( isset ( $_POST['submit'])){

echo "Full name :". $_POST['Fullname']."<br>";

echo "Review :". $_POST['Review']."<br>";

echo "Rating :". $_POST['Rating']. "<br>";
}
    $conn ->close();
  
?>






































