<?php
$data = json_decode(file_get_contents('task.txt'),true);
print("<pre>".print_r($data,true)."</pre>");
