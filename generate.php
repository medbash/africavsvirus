
<?php
function unique_code($limit)
{
  return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
}
echo "cep#01_", unique_code(3);
?>
