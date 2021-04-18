<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
   include ('./_connect.php');
  // Step 2: (8 points) Retrieve the 'supers' row from your database
  // Ensure you use the condition to get only the one specific row
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
    $sql = "SELECT * FROM supers WHERE id =:id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id',$_GET['id']);
    $stmt->execute();
    $row = $stmt->fetch();

?>

<!-- Step 3: (2 points) Include your header here -->
<?php   require_once('./_header.php'); ?>
<!-- Step 4: (1 points) Create a link back to home.php -->
<!-- CREATE YOUR LINK BELOW THIS LINE -->
<?php include_once("_nav.php") ?>

<!-- Step 5: (15 points) Create a form that has a field for the following columns -->
<!-- first_name, last_name, date_of_birth,  alias, active -->
<!-- Ensure you don't forget the name attribute for each field -->

<!-- Step 6: (4 points) Add the action and method attributes -->
<!-- Ensure you use the correct HTTP method and point the action at the correct processing page -->

<!-- Step 7: (10 points) Prepopulate the form with the values from the retrieved row -->
<!-- CREATE YOUR FORM BELOW THIS LINE -->







<div class="jumbotron my-5">
    <div class="container">
        <h1 class="display-4">Edit the Exists Super </h1>
        <p class="lead">edit the following form</p>
    </div>
</div>


<form action="./update.php" method="post" novalidate>
    <input type="hidden" name="id" value="<?= $row["id"] ?>">
    <div class="row">
        <div  class="col">
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input class="form-control"  type="text" name="first_name" value="<?=$row['first_name'] ?>">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input class="form-control"  type="text" name="last_name" value="<?=$row['last_name'] ?>">
            </div>
        </div>
    </div>

    <div class="row">
        <div  class="col">
            <div class="form-group">
                <label for="date_of_birth">Birthday:</label>
                <input class="form-control"  type="date" name="date_of_birth" value="<?= $row["date_of_birth"] ?>">
            </div>
        </div>
        <div  class="col">
            <div class="form-group">
                <label for="alias">Alias:</label>
                <input class="form-control"  type="text" name="alias" value="<?=$row['alias'] ?>" >
            </div>
        </div>

    </div>
    <div class="row">
        <div  class="col">
            <p>Select Whether Active</p>
            <div class="form-check">
                <input class="form-check-input"  type="radio" name="active" value="Y"  checked>
                <label class="form-check-label" for="active">Yes:</label>

            </div>
            <div class="form-check">
                <input class="form-check-input"  type="radio" name="active" value="N"  >
                <label class="form-check-label" for="inactive">No:</label>

            </div>
        </div>
        <div  class="col">
            <p>Select Whether Hero</p>
            <div class="form-check">
                <input class="form-check-input"  type="radio" name="hero" value='Y' checked>
                <label class="form-check-label" for="hero">Yes:</label>

            </div>
            <div class="form-check">
                <input class="form-check-input"  type="radio" name="hero" value='N' >
                <label class="form-check-label" for="hero">No:</label>

            </div>
        </div>

    </div>

    <button class="btn btn-primary" type="submit">Submit</button>
</form>






<!-- Step 8: (2 points) Include your footer here -->

<?php include_once ('./_footer.php'); ?>

<!-- TOTAL POINTS POSSIBLE: 44 -->