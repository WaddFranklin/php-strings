<?php

$nome = 'cam" /> <script>alert("teste");</script>';
?>

<input type="text" name="<?= htmlentities($nome); ?>">