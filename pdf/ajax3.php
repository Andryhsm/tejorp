<?php
$save = str_replace('data:image/png;base64,', '', $_POST['image'] );
file_put_contents( '../img/image3.png', base64_decode( $save ) );
?>