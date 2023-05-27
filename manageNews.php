<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manage News</title>
  <link rel="stylesheet" href="manageNews.css">
</head>

<body>

  <?php error_reporting(E_ERROR | E_PARSE); ?>
  <header>
    <ul>
      <a href="home.php">
        <li class="list">Home</li>
      </a>
      <a href="manageEvent.php">
        <li class="list">Manage Events</li>
      </a>
      <a href="manageCategories.php">
        <li class="list">Manage Categories</li>
      </a>
      <li class="list">Manage News</li>
      <a href="manageBooking.php">
        <li class="list">Manage Booking</li>
      </a>
      <a href="manageUsers.php">
        <li class="list">Manage Users</li>
      </a>
    </ul>
  </header>
  <main>

    <?php
    $conn = mysqli_connect("localhost", "root", "", "eventmanagement");
    $query = 'SELECT * FROM news ORDER BY n_date DESC';
    $result = mysqli_query($conn, $query);

    if (!$result) {
      echo "Error executing the query: " . mysqli_error($conn);
      exit();
    }
    ?>

    <div class="first">
      <p>Displaying a list of news articles:</p>
      <ul>

      <?php
    // Check if there are any news articles
    if (mysqli_num_rows($result) > 0) {
      // Loop through each news article
      while ($row = mysqli_fetch_assoc($result)) {
        // Extract the article information
        $title = $row['n_title'];
    ?>
      <li class="list1"><h3><?php echo $title; ?></h3><button class="button">Edit</button> <button class="button">Delete</button></li>
        
    <?php
      }
    } else {
      echo 'No news articles found.';
    }
    ?>
      </ul>
    </div>

    <div class="second">
      <p>Adding a new news article:</p>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <input type="text" name="title" placeholder="Article Title" class="input" required>
        <button type="submit" name="submit" class="button">Add News Article</button></br></br>
        <textarea id="message" name="message"  required></textarea> Content
      </form>
    </div>
  </main>

  <?php
  $conn = mysqli_connect("localhost", "root", "", "eventmanagement");
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n_title = $_POST['title'];
    $n_content = $_POST['message'];
    $n_title = stripcslashes($n_title);
    $n_content = stripcslashes($n_content);


    $sql = "INSERT INTO news (n_title, n_content) VALUES ('$n_title', '$n_content')";
    if (mysqli_query($conn, $sql)) {
      echo "<script>alert('Sent successfully!');</script>";
    } else {
      echo "<script>alert('Couldn't sent. Try Again!');</script>";
    }
  }

  mysqli_close($conn);


  ?>

</body>

</html>