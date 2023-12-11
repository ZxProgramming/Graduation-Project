

<?php
include('../../config/conf.php');
            // This Page About All Functions I use it In any Page Globaly

/**
 *  Title Function V1.0
 * Title Functions That Echo The Page Title In Case The Page 
 * Has Thr Variable $pageTitle And Echo Defulte Title Oter Pages
 * 
 * 
 */

function getTitle(){    // This Function Cause Do Title Daynamic
global $pageTitle;
if(isset($pageTitle))
{echo $pageTitle ;}
else
{echo 'Defulte';}};








                    /*
                     -  Function Select Feild From DataBase Wher Any Feild Where Feild = Value == 
                     - $Feild Selector any Feild For Example userName
                     - $From = This Any Database Selected 
                     - $value = Compain The Feild With The Value For Example Post Data Request
                     Version = 1.0 
                    */

                            function checkedData($select,$from,$value){
                               global $con ;
                                $statement =$con->prepare("SELECT $select FROM $from WHERE $select =?");
                                $statement->execute(array($value));
                                $count=$statement->rowCount();
                                return $count;

                            }

      
        






?>