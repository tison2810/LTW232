<?php
    $carName = "VF7";
    // Prepare and bind
    $conn = mysqli_connect("localhost","root","","vinfast");
    $stmt = $conn->prepare("SELECT * FROM oto WHERE Ten = ?");
    $stmt->bind_param("s", $carName);

    // Execute the statement
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Fetch the data
    if ($result->num_rows > 0) {
        // Fetch the row
        $row = $result->fetch_assoc();
    } else {
        echo "0 results";
    }
?>
<div class="item-color active">
    <img style="width: 70%;"
            src="<?php echo $row['Anh1']; ?>"
        alt="VF7 Black">
</div>
<div class="item-color">
    <img style="width: 70%;"
        src="<?php echo $row['Anh2']; ?>"
        alt="VF7 White">
</div>
<div class="item-color">
    <img style="width: 70%;"
        src="<?php echo $row['Anh3']; ?>"
        alt="VF7 Red">
</div>
<div class="item-color">
    <img style="width: 70%;"
        src="<?php echo $row['Anh4']; ?>"
        alt="VF7 Blue">
</div>
<div class="info">
    <div class="info-detail">
        <p>Công suất tối đa</p>
        <p>134 hp/100 kW</p>
    </div>
    <div class="info-detail">
        <p>Quãng đường di chuyển 1 lần sạc đầy lên tới</p>
        <p>326,4 km (NEDC)</p>
    </div>
    <div class="info-detail">
        <p>Chiều dài cơ sở</p>
        <p>2.514 mm</p>
    </div>
</div>