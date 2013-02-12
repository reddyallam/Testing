<?php
try {
  $dbh = new PDO('odbc:sample_optim_web1', '', '');
  echo "Connected\n";
} catch (Exception $e) {
  echo "Failed: " . $e->getMessage();
}
/*$dsn='OPTIM_SAMPLE1';

$connection= odbc_connect($dsn,'','',1);
if(!$connection)
{
    echo "not connected";
    echo odbc_errormsg();

}else{
    
    //echo $new;
    echo " connected";

    echo '<br>';

   
    $result=get_datasources_details($dsn,$connection);
    $table_details= get_table_list($connection);
   echo '<pre>';  
print_r($result);
print_r($table_details);
   echo '</pre>'; 
}

function get_datasources($connection){
        $datasources=  array();
        $datasource=@odbc_data_source( $connection, SQL_FETCH_FIRST );
        while($datasource)
        {  
            if($datasource!='')
                $datasources[] = $datasource;
            $datasource=@odbc_data_source( $connection, SQL_FETCH_NEXT );
            
        }
        return $datasources;
}
function get_datasources_details($dsnname,$connection)
{
    $source_details=array();
    $source_details['status']=0;
    $result=get_datasources($connection);
    foreach($result as $dsn_count=>$dsn_details)
    {
        if(preg_match("/$dsnname/is",$dsn_details['server']))
        {
           
            $source_details['dsn_name']=$dsn_details['server'];
            $source_details['driver']=$dsn_details['description'];
            $source_details['dbtype']= identify_datasource($dsn_details['description']);
            $source_details['status']=1;
        }
    }
    if( $source_details['status']==0){
            $source_details['error_msg']='DB Type not supported';
    }
    return $source_details;
}
function identify_datasource($dsn_description){
   //  echo $dsn_description;echo '<br>';
     $datasource_types=array('optim'=>'optim connect','sql'=>'sql server','access'=>'microsoft access','excel'=>'microsoft excel','accessdbase'=>'microsoft access dbase');
     preg_match("/".implode($datasource_types,'|') ."/i",strtolower($dsn_description),$matches);
     $db_type_deatils=$matches[0];
     $db_type= array_keys($datasource_types,$db_type_deatils);
     return $db_type[0];
}
function get_table_list($connection){
   $table_list = odbc_tables($connection);
   $available_colums =odbc_num_fields($table_list);
   $table_list_array= array();
   $row_count=0;
   while(odbc_fetch_array($table_list))
   {
      
        for($i=1;$i<=$available_colums;$i++)
        {
                $coloum_name=odbc_field_name($table_list,$i);
                $result[$row_count][$coloum_name]=odbc_result($table_list,$coloum_name);
        }
        $table_name=$result[$row_count]['TABLE_NAME'];
       $coloum_details= get_column_list($connection,$result[$row_count]['TABLE_QUALIFIER'],$result[$row_count]['TABLE_OWNER'],$result[$row_count]['TABLE_NAME']);
     
      $table_details[$table_name]= $coloum_details;
      $row_count++;
   }
   return $table_details;
}
function get_column_list($connection,$table_qualifier,$table_owner="%",$table_name)
{
     $table_columns= array();
     $result= odbc_columns($connection,$table_qualifier,$table_owner,$table_name,"%");
     $pages = array();
     while (odbc_fetch_into($result, $column_details)) {
       
         $table_columns[$column_details[3]]=array('type'=> $column_details[5],'size'=>$column_details[4]); 
     }
    
     return $table_columns;
}*/


?>
