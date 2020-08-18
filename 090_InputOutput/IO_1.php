<?php
//取得文件在本機的路徑及檔名
echo "Path and FileName:" . __FILE__ . "<br />";
echo "Path: " . dirname ( __FILE__ ) . "<br />" ;
echo "Filename: " . basename ( __FILE__ ) . "<br />";
echo "Filesize: " . filesize ( __FILE__ )?>
