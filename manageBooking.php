<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Booking</title>
    <link rel="stylesheet" href="manageBooking.css">
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
            <li class="list">Manage Booking</li>
            <a href="manageUsers.php">
                <li class="list">Manage Users</li>
            </a>
        </ul>
    </header>
    <main>
        <div class="first">
            <p>Displaying a list of bookings:</p>
            <ul>
                <li class="list1">Booking 1 - Event: Event 1, User: User 1 <button class="button">Edit</button> <button class="button">Delete</button></li>
                <li class="list1">Booking 2 - Event: Event 2, User: User 2 <button class="button">Edit</button> <button class="button">Delete</button></li>
                <!-- Add more list items dynamically -->
            </ul>
        </div>
    </main>
</body>

</html>