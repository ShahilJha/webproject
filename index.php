<?php 
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'project') or die(mysqli_error($con));
?>
<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="control_ribbon_style.css">
</head>
<body onload="display();">

    <?php include("header.php"); ?>

    <!-- start of slider -->
    <?php  
    $query1 = "SELECT * FROM index_slider";
    $result1 = mysqli_query($con,$query1) or die(mysqli_error($con));
    ?>
    <div class="slider-container">
      <?php  
      while ($arr = mysqli_fetch_array($result1,MYSQLI_ASSOC)) {
      ?>
        <div class="slider">
          <img src="image/<?php echo $arr['slider_image_name'] ?>">
          <div class="text-container">
            <p><?php echo $arr['slider_title']; ?></p>
            <span><?php echo $arr['slider_description']; ?></span>
          </div>

          <div class="pre" onclick="pre();"></div>
          <div class="next" onclick="next();"></div>
        </div>
      <?php
      }
      ?>
            
          </div>
    <!-- end of slider -->


    <!-- start of post part -->
    <div class="post-row">
      <div class="post-col">
        <h2>Bungee Jumping</h2><hr>
        <img src="image/bungee.jpg">
        <p>Bungee jumping (also spelled bungy jumping, which is the usual spelling in New Zealand and several other countries) is an activity that involves jumping from a tall structure while connected to a large elastic cord.The tall structure is usually a fixed object, such as a building, bridge or crane; but it is also possible to jump from a movable object, such as a air-balloon or helicopter, that has the ability to hover above the ground..........</p>
        <button class="read-b"><a href="bungee.php">read more&gt;&gt;</a></button>
      </div>
      <div class="post-col">
        <h2>Hiking</h2><hr>
        <img src="image/hike.jpg">
        <p>Hiking is the preferred term, in Canada and the United States, for a long, vigorous walk, usually on trails (footpaths), in the countryside, while the word walking is used for shorter, particularly urban walks.On the other hand, in the United Kingdom, and the Republic of Ireland, the word "walking" is acceptable to describe all forms of walking, whether it is a walk in the park or backpacking in the Alps.........</p>
        <button class="read-b"><a href="hike.php">read more&gt;&gt;</a></button>
      </div>
      <div class="post-col">
        <h2>News Post</h2><hr>
        <div class="news-col">
          <h3 class="comma"><span>Vacancy Announcement</span></h3>
          <p>We are hiring competent, qualified and experienced front-end developers.</p>
          <button class="read-b"><a href="news1.php">read more&gt;&gt;</a></button>
        </div>

        <div class="news-col">
          <h3 class="comma"><span>Maintainance Announcement</span></h3>
          <p>The website will be closed for the next few days.</p>
          <button class="read-b"><a href="news2.php">read more&gt;&gt;</a></button>
        </div>
      </div>
    </div><hr align="center" class="gap-filler">
    <!-- end of post part -->

    <!-- start of widget section -->
    <div class="widget-section">
      
      <div class="widget">
        <h2>contact details</h2>
        <p>
          company name<br>
          street name & number<br>
          town<br>
          postcode/zip<br>
          tel: xxxxxxxxxx<br>
          fax: xxxxxxxxxx<br>
          email: <a href="">contact@domainname.com</a>
        </p>
      </div>

      <div class="widget">
        <h2>quick links to posts</h2>
        <a href="bungee.php">Bungee Jumping</a><hr>
        <a href="hike.php">Hiking</a><hr>
        <a href="camping.php">Camping</a><hr>
        <a href="paragliding.php">Paragliding</a><hr>
        <a href="scuba.php">Scuba Diving</a>
      </div>

      <div class="widget">
        <h2>from the blog</h2>
        <p>form the blog</p>
        <p>
          this place shows the about the blog page.<br>
          <button class="read-b"><a href="blog.php">read more &gt;&gt;</a></button>
        </p>
      </div>

      <div class="widget">
        <h2>grab our newsnewsletter</h2>
        <input type="text" name="responder" placeholder="Name" id="h-name"><br>
        <input type="email" name="responder-mail" placeholder="Email" id="h-mail"><br>
        <input type="submit" name="submit" onclick="h_validate();">
      </div>

    </div>
    <!-- End of widget section -->

    <?php include 'footer.php'; ?>

  </div>
  <script type="text/javascript" src="script.js"></script>
</body>
</html>