
     
<div>


<?php

  $dir = YiiBase::getPathOfAlias('webroot').'/protected/controllers';
                        require_once $dir.'/class.Diff.php';
$filename_one = explode("/", $pathname_one);
$filename_two = explode("/", $pathname_two);

array_pop($filename_one);
$filename_one = array_pop($filename_one);
array_pop($filename_two);
$filename_two = array_pop($filename_two);

                        $result=Diff::toTable(Diff::compareFiles($pathname_one.$filename_one.'.txt', $pathname_two.$filename_two.'.txt'));
                
echo $result;
?>
</div><!-- form -->