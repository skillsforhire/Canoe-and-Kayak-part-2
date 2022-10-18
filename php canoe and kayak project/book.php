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

     echo " <h2> Book A Trip </h2> ";
     echo "<br>" . "<br>";?>

     
<hr>

<?php echo "<br>" . "<br>"; ?> 

   <?php echo "Just Some Quick Details"; 
    echo "<br>" . "<br>";

 ?>          


<form action="thank-you.php" method="get">

    

    <?php echo "Email"; ?> 
   <input type="email" name="emailAddress"> 
     <?php echo "<br>" . "<br>";?> 

     <?php echo "Location"; ?> 
    

    <select  name="Location">
        
        <option value=""> select </option>
        <option value="halifax">Halifax</option>
        <option value="moncton">Moncton</option>
    </select>

<?php echo "<br>" . "<br>"; ?> 

    <?php echo "Trip Date"; ?> 
    <input type="date" name="date">

    <?php echo "<br>" . "<br>"; ?> 

    <input type="submit" value="Submit">

</form>


    
<?php

    include 'footer.php';
?>


    


