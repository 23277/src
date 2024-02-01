<?php include 'header.php'; ?>
<div class="container mt-4">
    <h1>Exercise 4:Control flow and loops </h1>

   <h1> 2 Write a PHP script to get inputs
     (age and name) from the user and based on 
     their age, decide if he/she is 
     eligible for voting. (18 or more
      than 18 years is eligible for
       voting, use form to get user 
       input).</h1>

    <form method="POST" class="mt-4">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" id="age" name="age" required>
        </div>
        <button type="submit" class="btn btn-primary">Check Eligibility</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $age = $_POST['age'];

            if ($age >= 18) {
                echo "<p>$name, you are eligible for voting.</p>";
            } else {
                echo "<p>$name, you are not eligible for voting.</p>";
            }
        }
    ?>

<h1> 3 Write a PHP script that gets the current
     month and prints one of the following 
     responses, depending on whether 
     it's August or not:</h1>
     <?php
        $currentMonth = date("F");
        switch ($currentMonth) {
            case "August":
                echo "<p>It's August, so it's still holiday.</p>";
                break;
            default:
                echo "<p>Not August, this is $currentMonth so I don't have any holidays.</p>";
                break;
        }
    ?>
   <h1>  4 Write a PHP script that will print the multiplication table of a number (n, use form to get user input).</h1>
    <form method="POST" class="mt-4">
        <div class="mb-3">
            <label for="numberForTable" class="form-label">Enter a number for multiplication table</label>
            <input type="number" class="form-control" id="numberForTable" name="numberForTable" required>
        </div>
        <button type="submit" class="btn btn-primary">Generate Table</button>
    </form>


    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numberForTable =$_POST['numberForTable'];
            echo "<p>Multiplication Table for $numberForTable:</p>";
            for ($i = 1; $i <= 10; $i++) {
                $result = $numberForTable * $i;
                echo "<p>$numberForTable x $i = $result</p>";
            }
        }
    ?>
    <h1> 5 Write a PHP script that will print all the numbers from 1 to n. (use form to get user input)</h1>

<form method="POST" class="mt-4">
        <div class="mb-3">
            <label for="numberForList" class="form-label">Enter a number for the list</label>
            <input type="number" class="form-control" id="numberForList" name="numberForList" required>
        </div>
        <button type="submit" class="btn btn-primary">Generate List</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numberForList = $_POST['numberForList'];
            echo "<p>Numbers from 1 to $numberForList:</p>";
            $count = 1;
            while ($count <= $numberForList) {
                echo "<p>$count</p>";
                $count++;
            }
        }
    ?>
   <h1> Write a PHP script that will print all the elements of an array.</h1>
    <?php
        $myarray = array("HTML", "CSS", "PHP", "JavaScript");
        echo "<p>Elements of the array:</p>";
        echo "<ul>";
        foreach ($myarray as $element) {
            echo "<li>$element</li>";
        }
        echo "</ul>";
    ?>
</div>
























<?php include 'footer.php'; ?>