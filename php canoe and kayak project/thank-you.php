
<?php

    include 'header.php';
?>

<?php

    include 'navigation.php';
?>

<header>
        
        <h2>Halifax canoe and kayak</h2>
          
    </header>

    

    <ul class="nav">
        
        <li><a href="#">Home</a></li>
        
        <li><a href="#">Book Trip</a></li>
        
        <li><a href="#">Admin Login</a></li>

    </ul>
    
    <button class="menu-btn">
            
        <img src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/hamburger.png" />
            
   </button>

    
      <div class="logo">
        <img src="images/paddle-white.png">
      </div>

 



 <div class="contents"> 
    <br>
    <br>
    <br>
  



<?php

    
    echo "<br>" . "<br>" . "<br>";

    echo " <h2> Thank You </h2>";
    echo "<br>";
?>

<hr>

   <?php echo "<br>" . "<br>" . "<br>";



    echo "Thank you:";

    $newEmail= $_GET["emailAddress"];

    echo $newEmail;

     echo "<br>" . "<br>" . "<br>";

     echo "We will contact you about the:"; 

     echo "<br>";

     $Location= $_GET["Location"];
     echo $Location; 

    
     echo "   trip on the  ";

     $date = date("m-d-y", strtotime($_GET['date']));
     echo $date;
    
?>




    
<?php 

    include 'footer.php';

?> 


    

    


