<?php $thisPage="test"; ?>
<?php include 'page_header.php'; ?>

<b>Sub-Page Title</b><p>

Here is the specific content of this page....<br>

<?php if ($thisPage == "test")
	echo "<p> hi </p>";
?>>

<?php include 'page_footer.php'; ?>