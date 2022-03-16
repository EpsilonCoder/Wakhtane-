<div class="usernav">
    
    
</div>

<script>
function validateField(){
    var query = document.getElementById("query");
    var button = document.getElementById("querybutton");
    if(query.value == "") {
        query.placeholder = 'Type something!';
        return false;
    }
    return true;
}
</script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">


  <!-- Navbar brand -->
  <a class="navbar-brand" href="/home.php"><h1 style="color:blue;">WAKHTANE</h1></a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <?php
        $sql2 = "SELECT COUNT(*) AS count FROM friendship 
                 WHERE friendship.user2_id = {$_SESSION['user_id']} AND friendship.friendship_status = 0";
        $query2 = mysqli_query($conn, $sql2);
        $row = mysqli_fetch_assoc($query2);
    ?>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="requests.php">Demande d'amie(<?php echo $row['count'] ?>)</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="profile.php">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="friends.php">Amis</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Deconnection</a>
      </li>
    </ul>
    <!-- Links -->

    <form class="form-inline">
      <div class="globalsearch">
        <form method="get" action="search.php" onsubmit="return validateField()"> <!-- Ensure there are no enter escape characters.-->
            <select name="location">
                <option value="emails">Email</option>
                <option value="names">Nom</option>
                <option value="hometowns">Adresse</option>
                <option value="posts">Poste</option>
            </select><input type="text" placeholder="Search" name="query" id="query"><input type="submit" value="Search" id="querybutton">
        </form>
    </div>
    </form>
  </div>
  <!-- Collapsible content -->

</nav>

<script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>