<!-- Step 1: (2 points) Include your header here -->
 <?php   require_once('./_header.php');

 ?>
<!-- Step 2: (1 points) Create a link back to home.php -->
<!-- CREATE YOUR LINK BELOW THIS LINE -->
<?php include_once("_nav.php") ?>
<!-- Step 3: (15 points) Create a form that has a field for the following columns -->
<!-- first_name, last_name, date_of_birth,  alias, active -->
<!-- Ensure you don't forget the name attribute for each field -->

<!-- Step 4: (4 points) Add the action and method attributes -->
<!-- Ensure you use the correct HTTP method and point the action at the correct processing page -->
<!-- CREATE YOUR FORM BELOW THIS LINE -->

<div class="jumbotron my-5">
    <div class="container">
        <h1 class="display-4">New Super</h1>
        <p class="lead">input the following form</p>
    </div>
</div>


<form action="./insert.php" method="post" novalidate>
    <div class="row">
        <div  class="col">
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input class="form-control"  type="text" name="first_name" required >
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input class="form-control"  type="text" name="last_name" required>
            </div>
        </div>
    </div>

    <div class="row">
        <div  class="col">
            <div class="form-group">
                <label for="date_of_birth">Birthday:</label>
                <input class="form-control"  type="date" name="date_of_birth" required >
            </div>
        </div>
        <div  class="col">
            <div class="form-group">
                <label for="alias">Alias:</label>
                <input class="form-control"  type="text" name="alias" required >
            </div>
        </div>

    </div>
    <div class="row">
        <div  class="col">
            <p>Select Whether Active</p>
            <div class="form-check">
                <input class="form-check-input"  type="radio" name="active" value="Y" required >
                <label class="form-check-label" for="active">Yes:</label>

            </div>
            <div class="form-check">
                <input class="form-check-input"  type="radio" name="active" value="N" required >
                <label class="form-check-label" for="inactive">No:</label>

            </div>
        </div>
        <div  class="col">
            <p>Select Whether Hero</p>
            <div class="form-check">
                <input class="form-check-input"  type="radio" name="hero" value='Y' required >
                <label class="form-check-label" for="hero">Yes:</label>

            </div>
            <div class="form-check">
                <input class="form-check-input"  type="radio" name="hero" value='N' required >
                <label class="form-check-label" for="hero">No:</label>

            </div>
        </div>

    </div>

    <button class="btn btn-primary" type="submit">Submit</button>
</form>




<!-- Step 5: (2 points) Include your footer here -->
<?php   require_once('./_footer.php');

?>


<!-- TOTAL POINTS POSSIBLE: 24 -->