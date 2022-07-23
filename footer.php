<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package atconv2-theme
 */

?>

<script>
	const sidebtn = document.querySelector(".main-nav-toggle");
	const nav = document.querySelector("nav");
	sidebtn.addEventListener("click", () => {
		nav.classList.toggle("is--active");
		sidebtn.classList.toggle("is--active");
	});
</script>

<?php wp_footer(); ?>

</body>

</html>