<?php
$db = mysqli_connect('localhost', 'root', '', 'registration');

    $tableName="users";
    $columns= ['id', 'email','username'];
    $fetchData = fetch_data($db, $tableName, $columns);

    function fetch_data($db, $tableName, $columns){
         if(empty($db)){
          $msg= "Database connection error";
         }elseif (empty($columns) || !is_array($columns)) {
          $msg="columns Name must be defined in an indexed array";
         }elseif(empty($tableName)){
           $msg= "Table Name is empty";
        }else{

    $columnName = implode(", ", $columns);
    $query = "SELECT ".$columnName." FROM $tableName"." ORDER BY id DESC";
    $result = $db->query($query);

    if($result== true){
    if ($result->num_rows > 0) {
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
    $msg= $row;
    } else {
    $msg= "No Data Found";
    }
    }else{
    $msg= mysqli_error($db);
    }
    }
    return $msg;
    }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="dist/css/style.css">
        <title>Gjuhet</title>
    </head>
    <body>
        <header>
            <a href="#" class="logo">
                <img src="dist/img/Print-Logo.svg" alt="Gjuhet Logo">
            </a>

            <div class="menubar">
                <a href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>

            <div class="header-inner">
                <ul>
                    <li class="active">
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="#">Kurset</a>
                    </li>
                    <li>
                        <a href="teacher.php">Mesuesit</a>
                    </li>
                    <li>
                        <a href="contact.html">Kontakti</a>
                    </li>
                    <li>
                        <a href="index.php?logout='1'">Logout</a>
                    </li>

                </ul>
            </div>
        </header>


        <div class="teacher-wrapper">
            <div class="container">
                <h1>English Tutors & Teachers</h1>
                <?php foreach($fetchData as $value): ?>
                <div class="teacher-item">
                    <a href="#">
                        <div class="row">
                            <div class="col-3">
                                <img src="dist/img/prof.png" alt="Teacher">
                            </div>
                            <div class="col-9">
                                <h3>#<?=$value['id']?> - <?=$value['username']?>  </h3>
                                 <h5><?=$value['email']?></h5>
                                <h5><span>Speaks:</span>English</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque numquam est error a ducimus? Temporibus amet quis fugit dignissimos eos similique debitis nostrum molestias exercitationem, rem rerum, eligendi, accusamus corporis?fugit dignissimos eos similique debitis nostrum molestias exercitationem, rem rerum, eligendi, accusamus corporis...</p>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h3>About <span>Gjuhet.com</span></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe ipsa modi suscipit sapiente, perferendis.</p>
                    </div>
                    <div class="offset-md-3 col-md-3">
                        <h3>Pages</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="index.php">Home</a>
                            </div>
                            <div class="col-md-6">
                                <a href="teacher.php">Mesuesit</a>
                            </div>
                            <div class="col-md-6">
                                <a href="#">Kurset</a>
                            </div>
                            <div class="col-md-6">
                                <a href="contact.html">Kontakti</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h3>Social Media</h3>
                        <ul class="social-media">
                            <li>
                                <a href="#" class="icon-twitter"></a>
                            </li>
                            <li>
                                <a href="#" class="icon-facebook"></a>
                            </li>
                            <li>
                                <a href="#" class="icon-youtube"></a>
                            </li>
                            <li>
                                <a href="#" class="icon-instagram"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="src/js/jquery.js"></script>
    <script src="src/js/main.js"></script>
</html>