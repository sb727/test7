<html>
<head>
    <title>  Hotel Detail Description </title>

</head>
<body>
   <?php
   echo '<img src="'.$root_url.'assets/images/gallery' . $hotel['idx'] . '.png" style="width:200px;height:200px"  class="gallery-thumb"></img><br>';
   echo $hotel['title'].'<br>';
   echo $hotel['location'].'<br>';
   echo $hotel['description'].'<br>';

   ?>
</body>
</html>
