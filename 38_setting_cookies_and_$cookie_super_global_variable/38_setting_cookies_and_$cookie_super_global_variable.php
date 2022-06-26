<?php
// cookies: whenever we work with less sensitive data we use cokies
// session: whenever we work with vary sensitive data we use session

// time() count time from 01/01/1970
// echo time();
// syntex to set a cokies
setcookie("catagories", "t-shirt", time() + 86400, '/');

echo "The cokie is set";
?>