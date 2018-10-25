<?php
require_once("mainInclude.php");


WriteHeaders();

MenuFile();

if(isset($_POST['edit_file']))
    {
        $file_name=$_POST['file_name'];
        $write_text=$_POST['edit_text'];
        $folder="files/";
        $ext=".txt";
        $file_name=$folder."".$file_name."".$ext;
        $edit_file = fopen($file_name, 'w');
	
        fwrite($edit_file, $write_text);
        fclose($edit_file);
    }

WrtieFooters();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>