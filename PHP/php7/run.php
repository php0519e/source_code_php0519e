<?php
    include("word_count.php");
    //KHởi tạo đối tượng có kiểu 'Hanghoa'
    $wc = new world_counter("word.txt");
    //truy xuất vào phương thức 
    $wc->count(world_counter::DESC);
?>

