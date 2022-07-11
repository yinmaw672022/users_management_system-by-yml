<?php

namespace Helpers;
class HTTP
{
static $base = "http://localhost/Users_Management_System";

static function redirect($path, $query = "")
{
$url = static::$base . $path;
if($query) $url .= "?$query";
header("location: $url");
exit();
}
}
