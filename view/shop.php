<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>demo</title>
    <!-- <script src="script.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/../style.css">
    <link id="import_link_font_icon" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Mulish:300,400,600,700&amp;display=swap&amp;subset=vietnamese">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
</head>
<?php
include_once ('navbar.php');
?>
<body>
    <br></br>
    <br></br>
    <main class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="row">
                <?php
                // Connect to MySQL database
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "vinfast";

                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Query to fetch data from MySQL database
                $sql = "SELECT * FROM oto";
                $result = $conn->query($sql);

                // Display fetched data in cards
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <div class="col-lg-3">
                            <div class="card h-100">
                                <img class="card-img-top" src="<?php echo $row["Anh1"] ?>" alt="<?php echo $row["Ten"] ?>">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $row["Ten"] ?></h5>
                                        <p class="card-price"><?php echo $row["GiaGomPin"] ?> VNĐ</p>
                                        <!-- <p class="card-text"><?php echo $row["MoTa"] ?></p> -->
                                        <a href="/car_detail/<?php echo $row["ID"] ?>" class="btn btn-primary">Mua ngay</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    echo "No data found.";
                }

                // Close MySQL connection
                $conn->close();
                ?>
            </div>
    </main>
</body>