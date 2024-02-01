<?php
$title = "Exercise 3: Variable, Strings & Operators";
include 'header.php';
?>
<h1>2 Create a simple HTML form to
     collect the user
     Firstname and Lastname. Use 
     the echo statement to print
      “Hello [Firstname] [Lastname],
       You are welcome to my site.” 
       inside an </h1>
       <form class="mt-4">
        <div class="mb-3">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstName" name="firstName" required>
        </div>
        <div class="mb-3">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastName" name="lastName" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    
    <?php
        if(isset($_GET['firstName']) && isset($_GET['lastName'])) {
            $firstName = $_GET['firstName'];
            $lastName = $_GET['lastName'];
            echo "<h3>Hello $firstName $lastName, You are welcome to my site.</h3>";
        }
    ?>
    <h1>Prepare a simple HTML table and apply Bootstrap styles to it. Note, you have already done a table in Exercise 1. If you wish, you can use the same table.</h1>
    <?php
         $g1 = 5;
         $g2 = 4;
         $g3 = 5;
         

         ?>
         <table>
            <tr><th>S.n.</th> <th>Name</th> <th>Grade</th></tr>
            <tr><td>1</td> <td>John</td> <td><?php echo $g1 ?></td></tr>
            <tr><td>2</td> <td>Alice</td> <td><?php echo $g2 ?></td></tr>
            <tr><td>3</td> <td>Bob</td> <td><?php echo $g3 ?></td></tr>
         </table>
      
      

       <h1>5 String Variables: Write a 
        PHP script with two string 
        variables ($str1 = "Hello"; 
        $str2 = "World";). Join 
        them together and print the 
        length of the string.</h1>
       <?php
        $str1 = "Hello";
        $str2 = "World";
        $combinedString = $str1 . ' ' . $str2;
        echo "<p>$str1 $str2</p>";
        echo "<p>Length of the String: " . strlen($combinedString) . "</p>";
    ?>
<h1>6Number Addition: Write a script to
     add up the numbers: 298, 234, 46.
      Use variables to store these 
      numbers and an echo statement 
      to output your answer.</h2>
<?php
        $num1 = 298;
        $num2 = 234;
        $num3 = 46;
        $sum = $num1 + $num2 + $num3;
        echo "<p>Sum of Numbers: $sum</p>";
    ?>

    <h1>
  7  Write a PHP script to detect 
    the browser being used to view your pages.
    </h1>
    <?php
        $browser = $_SERVER['HTTP_USER_AGENT'];
        echo "<p>Your browser is: $browser</p>";
    ?>










<?php include 'footer.php';?>