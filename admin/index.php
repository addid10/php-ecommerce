<?php session_start() ?>
<?php if (isset($_SESSION['__username'])): ?>
<?php header('location: home');?>
<?php else: ?>
<?php header('location: users/login/login.php'); ?>
<?php endif; ?>