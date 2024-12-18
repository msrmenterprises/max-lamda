<?php
// Check if a referrer exists
if (isset($_SERVER['HTTP_REFERER'])) {
    $previous = $_SERVER['HTTP_REFERER'];
} else {
    // Fallback to a default page
    $previous = 'default.php'; // Replace with your fallback URL
}
?>
<div>
<a href="contact.html" >Back to Division</a>
</div>
<button onclick="window.location.href='<?php echo $previous; ?>'" class="btnback">Go Back</button>
