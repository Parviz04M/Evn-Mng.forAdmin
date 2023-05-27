<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manage Events</title>
  <link rel="stylesheet" href="manageEvent.css">
</head>

<body>
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
      <a href="manageNews.php">
        <li class="list">Manage News</li>
      </a>
      <a href="manageBooking.php">
        <li class="list">Manage Booking</li>
      </a>
      <a href="manageUsers.php">
        <li class="list">Manage Users</li>
      </a>
    </ul>
  </header>
  <main>
    <div class="first">
      <p>Displaying a list of events:</p>
      <ul>
        <li class="list1">Event 1 <button class="button">Edit</button> <button class="button">Delete</button></li>
        <li class="list1">Event 2 <button class="button">Edit</button> <button class="button">Delete</button></li>
        <li class="list1">Event 3 <button class="button">Edit</button> <button class="button">Delete</button></li>

      </ul>
    </div>
    <div class="second">
      <p>Adding a new event:</p>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <input type="text" name="event_title" placeholder="Event Title" class="input">
        <button type="submit" name="submit" class="button">Add Event</button></br></br>
        <textarea id="message" name="message" placeholder="Event description here..." required></textarea>
      </form>
    </div>



  </main>
</body>

</html>