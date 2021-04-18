<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  include ('./_connect.php');
  // Step 2: (5 points) Retrieve all the 'supers' rows from your database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
   $sql="SELECT * FROM supers";
   $rows= $conn->query($sql)->fetchAll();
?>

<!-- Step 3: (2 points) Include your header here -->
 <?php   require_once('./_header.php');

 ?>
<!-- Step 4: (2 points) Create a navigation bar for home.php and new.php -->
<!-- CREATE YOUR NAVIGATION HTML BELOW THIS LINE -->
 <?php include_once("_nav.php") ?>
<!-- Step 5: (15 points) Create a table that display each row from the database -->
<!-- You only need to display the first_name, last_name, date_of_birth, -->
<!-- alias, active, and hero columns -->

<!-- Step 6: (6 points) Create action links pointing to 'edit.php' and 'delete.php' -->
<!-- Ensure there was one edit and delete link for each row -->


<!-- CREATE YOUR TABLE BELOW THIS LINE -->

<div class="jumbotron my-5">
    <div class="container">
        <h1 class="display-4">Our Supers table </h1>
        <p class="lead">check the table data</p>
    </div>
</div>

<table class="table table-striped my-5">
    <thead>
    <tr>
        <td>First Name</td>
        <td>Last name</td>
        <td>Birthday</td>
        <td>Alias</td>
        <td>Active</td>
        <td>Hero</td>
        <td>Action</td>
    </tr>
    </thead>

    <tbody>
    <!--foreach 里面，注意那个冒号-->
    <?php foreach($rows as $row): ?>
        <tr>
            <td><?= $row["first_name"] ?></td>
            <td><?= $row["last_name"] ?></td>
            <td><?= $row["date_of_birth"] ?></td>
            <td><?= $row["alias"] ?></td>
            <td>
                <?php
                if($row["active"]=='Y')
                    echo "Yes";
                else
                    echo "No";
                ?>

            </td>
            <td>
                <?php
                if($row["hero"]=='Y')
                    echo "Yes";
                else
                    echo "No";
                ?>
            </td>
            <td>
                <!--指向了edit这个页面 -->
                <a href="edit.php?id=<?= $row["id"] ?>" onclick="return confirm('Are you sure?')">edit</a>
                |
                <!--注意 onclick是JavaScript 停止我们做什么操作-->
                <a href="delete.php?id=<?= $row["id"] ?>" onclick="return confirm('Are you sure?')">delete</a>
            </td>
        </tr>
        <!--end表示关闭-->
    <?php endforeach ?>
    </tbody>
</table>





<!-- Step 7: (2 points) Include your footer here -->
<?php include_once ('./_footer.php'); ?>


<!-- TOTAL POINTS POSSIBLE: 34 -->



