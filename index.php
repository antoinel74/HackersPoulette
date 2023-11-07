<?php

require 'components/head.php';
echo '    <section class="container">
<div class="heading">
<h1>Contact us</h1>
<p>If you have any questions, need assistance, or simply want to chat about your latest project, dont hesitate to get in touch. Our team of experts is ready to help you make the most of your Raspberry Pi experience.</p>
</div>
<div class="form-container">';
require 'contact.php';
echo '</div>';
echo '</section>';

?>

<script src="assets/js/formValidation.js"></script>