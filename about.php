<?php
require('./config.php');
$page_name = 'about';
require('./header.php');
?>
<div class="container py-4">
    <div class="h3 mb-3">Company Profile</div>
    <div class="lead mb-4 border-bottom border-1 d-inline-block">This is a very good website and I am sure it can bring your happy.</div>
    <div class="h3 mb-3">Contact Us</div>
    <div class="mb-3 lead border-bottom border-1 d-inline-block">
        We are some people love learing and share.
    </div>
    <ul>
        <li>Email: aaabbccc@gmail.com</li>
        <li>Address: Beijing</li>
        <li>Phone Num: 12345678</li>
    </ul>
    <img src="./img/logo.jpg" alt="Logo" style="width: 200px;">
</div>
<?php
require('./footer.php');
