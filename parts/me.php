<?php
$sql = "SELECT * FROM me";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    ?>

    <div class="team-member">
        <?php while ($row = $result->fetch_assoc()) { ?>

            <img src="access/<?php echo $row['pro_pic']; ?>" alt="Image not found!" onerror="this.onerror=null; this.src='<?php echo $row['pro_pic']; ?>';"/>
            <h4 style="color: black;font-family: 'Anton', serif;"><?php echo $row['name']; ?></h4>
            <p class="text-muted"><?php echo $row['position']; ?></p>
            <ul class="list-inline social-buttons">
                <li class="list-inline-item"  title="twitter">
                    <a href="<?php echo $row['twitter_link']; ?>" target="_blank">
                        <i class="fa fa-twitter" target="_blank"></i>
                    </a>
                </li>
                <li class="list-inline-item"  title="facebook">
                    <a href="<?php echo $row['facebook_link']; ?>" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li class="list-inline-item"  title="linkedin">
                    <a href="<?php echo $row['linkedin_link']; ?>" target="_blank">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </li>
            </ul>
        </div>
    <?php } ?>

    <?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>