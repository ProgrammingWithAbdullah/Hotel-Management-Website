<?php
function GetStringComponent(&$str,&$Separator,&$ComponentNumber=0) :String
{
$Components="";
$Components = explode($Separator, $str);
$counter=count($Components);
if($counter>$ComponentNumber)
{
return $Components[$ComponentNumber];
}
else{
    return "";
}
}
 function ParseDateyyyyMMddhhmmss(&$DateString):string
 {
 $NewDate="";
 try
 {

     $NewDate=substr($DateString,0, 4)."/".
     substr($DateString,4,2)."/".
     substr($DateString, 6,2)." ".
     substr($DateString,8, 2).":".
     substr($DateString,10, 2).":".
     substr($DateString,12,2);
     return $NewDate;
 }
 catch(Exception $ex)
 {
  echo " ModASTM Function: ParseDateyyyyMMddhhmmss"  .$ex->getMessage();
  return $NewDate;
 }
 
 }
class MSH
{
    public $temp0;
    public $temp1;
    public $temp2;
    public $temp3;
    public $temp4;
    public $temp5;
    public $datetimeofmsg;
    public $temp6;
   
    public $temp8;
    public $temp9;
    public $temp10;
    public $temp11;
    public $temp12;
    public $temp13;
    public $temp14;
    public $temp15;
    public $temp16;
    public $temp17;
    public static function ParseMessage(&$Message): MSH
    {
        $PM = new  MSH();
        $ComponentIndex = 0;
        $Components = "";
        try {
            $Components = explode("|", $Message);
            $counter = count($Components);
            if ($counter > 0) {
                foreach ($PM as $key => &$value) {
                    $value = $Components[$ComponentIndex];
                    $ComponentIndex++;
                    if ($ComponentIndex > $counter - 1) {
                        break;
                    }
                }
                return $PM;
            } else {
                return NULL;
            }
        } catch (Exception $ex) {
            echo " Class: ASTMComment Function: ParseComment"  . $ex->getMessage();
            return NULL;
        }
}

public function display()
{
  
    foreach ($this as $key => $value) 
    {
       echo $key . " " . $value;
		echo "  ";
    }
	echo'<br>';
}
}
class PID
{
    public $temp0;
    public $temp1;
    public $temp2;
    public $chart;
    public $temp4;
    public $patname;
    public $temp6;
    public $dob;
    public $sex;
    public $temp9;
    public $temp10;
    public $pataddr;
    public $temp12;
    public $temp13;
    public $temp14;
    public $temp15;
    public $temp16;
    public $temp17;
    public $temp18;
    public $temp19;
    public $temp20;
    public $temp21;
    public $temp22;
    public $temp23;
    public $temp24;
    public $temp25;
    public $temp26;
    public $temp27;
    public static function ParseMessage(&$Message): PID
    {
        $PM = new  PID();
        $ComponentIndex = 0;
        $Components = "";
        try {
            $Components = explode("|", $Message);
            $counter = count($Components);
            if ($counter > 0) {
                foreach ($PM as $key => &$value) {
                    $value = $Components[$ComponentIndex];
                    $ComponentIndex++;
                    if ($ComponentIndex > $counter - 1) {
                        break;
                    }
                }
                return $PM;
            } else {
                return NULL;
            }
        } catch (Exception $ex) {
            echo " Class: ASTMComment Function: ParseComment"  . $ex->getMessage();
            return NULL;
        }
}

public function display()
{
  
    foreach ($this as $key => $value) 
    {
       echo $key . " " . $value;
		echo "  ";
    }
	echo'<br>';
}

}
class PV1{
    public $temp0;
    public $temp1;
    public $temp2;
    public $patdetail;
    public $temp4;
    public $patname;
    public $temp6;
    public $dob;
    public $sex;
    public $temp9;
    public $temp10;
    public $temp11;
    public $temp12;
    public $temp13;
    public $temp14;
    public $temp15;
    public $temp16;
    public $temp17;
    public $temp18;
    public $temp19;
    public $temp20;
    public $temp21;
    public $temp22;
    public $temp23;
    public $temp24;
    public $temp25;
    public $temp26;
    public $temp27;
    public $temp28;
    public $temp29;
    public $temp30;
    public $temp31;
    public $temp32;
    public $temp33;
    public $temp34;
    public $temp35;
    public $temp36;
    public $temp37;
    public $temp38;
    public $temp39;
    public $temp40;
    public $temp41;
    public $temp42;
    public $temp43;
    public $temp44;
    public $temp45 ;
    public $temp46;
    public $temp47;








    
    public $temp48;
    public $temp49;
    public $temp50;
    public static function ParseMessage(&$Message): PV1
    {
        $PM = new  PV1();
        $ComponentIndex = 0;
        $Components = "";
        try {
           



        
            $Components = explode("|", $Message);
            $counter = count($Components);
            if ($counter > 0) {
                foreach ($PM as $key => &$value) {
                    $value = $Components[$ComponentIndex];
                    $ComponentIndex++;
                    if ($ComponentIndex > $counter - 1) {
                        break;
                    }
                }
                return $PM;
            } else {
                return NULL;
            }
        } catch (Exception $ex) {
            echo " Class: ASTMComment Function: ParseComment"  . $ex->getMessage();
            return NULL;
        }
}

public function display()
{
  
    foreach ($this as $key => $value) 
    {
       echo $key . " " . $value;
		echo "  ";
    }
	echo'<br>';
}

}
class ORC
{
    public $temp0;
    public $temp1;
    public $temp2;
    public $chart;
    public $temp4;
    public $patname;
    public $temp6;
    public $dob;
    public $sex;
    public $temp9;
    public $temp10;
    public $temp11;
    public $temp12;
    public $temp13;
    public static function ParseMessage(&$Message): ORC
    {

    
        $PM = new  ORC();
        $ComponentIndex = 0;
        $Components = "";
        try {
            $Components = explode("|", $Message);
            $counter = count($Components);
            if ($counter > 0) {
                foreach ($PM as $key => &$value) {
                    $value = $Components[$ComponentIndex];
                    $ComponentIndex++;
                    if ($ComponentIndex > $counter - 1) {
                        break;
                    }
                }
                return $PM;
            } else {
                return NULL;
            }
        } catch (Exception $ex) {
            echo " Class: ASTMComment Function: ParseComment"  . $ex->getMessage();
            return NULL;
        }
    }
        public function display()
{
  
    foreach ($this as $key => $value) 
    {
       echo $key . " " . $value;
		echo "  ";
    }
	echo'<br>';
}
}




class OBR
{
    public $temp0;
    public $temp1;
    public $sampleid;
    public $chart;
    public $temp4;
    public $patname;
    public $temp6;
    public $dob;
    public $sex;
    public $temp9;
    public $temp10;
    public $temp11;
    public $temp12;
    public $temp13;
    public $temp14;
    public $temp15;
    public $temp16;
    public $temp17;
    public $temp18;
    public $temp19;
    public $temp20;
    public $temp21;
    public $temp22;
    public $temp23;
    public $temp24;
    public $temp25;
    public $temp26;
    public $temp27;
    public $temp28;
    public $temp29;
    public $temp30;
    public $temp31;
    public $temp32;
    public $temp33;
    public $temp34;

    public static function ParseMessage(&$Message): OBR
    {
        $PM = new  OBR();
        $ComponentIndex = 0;
        $Components = "";
        try {
            $Components = explode("|", $Message);
            $counter = count($Components);
            if ($counter > 0) {
                foreach ($PM as $key => &$value) {
                    $value = $Components[$ComponentIndex];
                    $ComponentIndex++;
                    if ($ComponentIndex > $counter - 1) {
                        break;
                    }
                }
                return $PM;
            } else {
                return NULL;
            }
        } catch (Exception $ex) {
            echo " Class: ASTMComment Function: ParseComment"  . $ex->getMessage();
            return NULL;
        }
}

public function display()
{
  
    foreach ($this as $key => $value) 
    {
       echo $key . " " . $value;
		echo "  ";
    }
	echo'<br>';
}
}
class OBX
{
    public $temp0;
    public $temp1;
    public $temp2;
    public $testcode;
    public $temp4;
    public $res;
    public $units;
    public $refranges;
    public $sex;
    public $temp9;
    public $temp10;
    public $temp11;
    public $temp12;
    public $temp13;
    public $temp14;
    public $observationtime;
    public $temp16;
    public $temp17;
    public $temp18;
    public $obtime;
    public $observationsite;
    public static function ParseMessage(&$Message):OBX
    {
        $PM = new  OBX();
        $ComponentIndex = 0;
        $Components = "";
        try {
            $Components = explode("|", $Message);
            $counter = count($Components);
            if ($counter > 0) {
                foreach ($PM as $key => &$value) {
                    $value = $Components[$ComponentIndex];
                    $ComponentIndex++;
                    if ($ComponentIndex > $counter - 1) {
                        break;
                    }
                }
                return $PM;
            } else {
                return NULL;
            }
        } catch (Exception $ex) {
            echo " Class: ASTMComment Function: ParseComment"  . $ex->getMessage();
            return NULL;
        }
}

public function display()
{
  
    foreach ($this as $key => $value) 
    {
       echo $key . " " . $value;
		echo "  ";
    }
	echo'<br>';
}

} class NTE {
    public $temp0;
    public $temp1;
    public $temp2;
    public $Comment;

    public static function ParseMessage(&$Message):NTE
    {
        $PM = new  NTE();
        $ComponentIndex = 0;
        $Components = "";
        try {
            $Components = explode("|", $Message);
            $counter = count($Components);
            if ($counter > 0) {
                foreach ($PM as $key => &$value) {
                    $value = $Components[$ComponentIndex];
                    $ComponentIndex++;
                    if ($ComponentIndex > $counter - 1) {
                        break;
                    }
                }
                return $PM;
            } else {
                return NULL;
            }
        } catch (Exception $ex) {
            echo " Class: ASTMComment Function: ParseComment"  . $ex->getMessage();
            return NULL;
        }
}

public function display()
{
  
    foreach ($this as $key => $value) 
    {
       echo $key . " " . $value;
		echo "  ";
    }
	echo'<br>';
}
  

}

 function ExplodeMessage($message,$del)
{
$message=explode($message,$del);
return $message;
}

  


function getAge($dob,$condate){ 
    $birthdate = new DateTime(date("Y-m-d",  strtotime(implode('-', array_reverse(explode('/', $dob))))));
    $today= new DateTime(date("Y-m-d",  strtotime(implode('-', array_reverse(explode('/', $condate))))));           
    $age = $birthdate->diff($today)->y;

    return $age;
}
function configresult($data)
{

$r = preg_split('/\R/', $data);

print_r($r);
$comment='';
for($i=0;$i<count($r);$i++)
{
    if($r[$i]!="")
    {
         $msg=explode('|',$r[$i]);
    
  
    if($msg!="")
    {
        $class=new $msg[0];
        $class=$class->ParseMessage($r[$i]);
        if($msg[0]=='MSH')
        {
			$class->display();
            $datetimeofmessage=$class->datetimeofmsg;
            $datetimeofmessage=ParseDateyyyyMMddhhmmss($datetimeofmessage);
        }
        if($msg[0]=='PID')
        {
		// 	$class->display();;
        //     $name=$class->patname;
        //     $name=explode('^',$name);
        //     $surname=$name[1];
        //     $forename=$name[0];
        //     $name=$forename." ".$surname;
        //     $sex=$class->sex;
        //     $chart=$class->chart;
        //     $chart=str_replace('^','',$chart);
        //     $dob=$class->dob;
        //     $dob=ParseDateyyyyMMddhhmmss($dob);
        //     $addr=$class->pataddr;
        //     $addr=explode('^',$addr);
        //     $addr0=$addr[0];
        //     $addr1=$addr[2];
        //     $addr3=$addr[3];
        //     $addr4=$addr[4];
        //     $dob=str_replace(':','',$dob);
        //     $today = date('Y-m-d');
        //    $age=getAge($dob,$today);
            
            
        }
        if($msg[0]=='PV1')
        {
         $patdetail=$class->patdetail;
         $patdetail=explode('^',$patdetail);
         $ward=$patdetail[0];        



        }
        if($msg[0]=='OBX')
        {
			$class->display();;
            $obx=new $msg[0];
            $obx=$obx->ParseMessage($r[$i]);
            echo $testcode=$obx->testcode;
            $testcode=explode('^',$testcode);
            $testcode=$testcode[0];
            $units=$obx->units;
            $res=$obx->res;
            $obvtime=$obx->observationtime;
            $obvtime=ParseDateyyyyMMddhhmmss($obvtime);
            $obvdate=explode(' ',$obvtime);
            $obvdate=$obvdate[0];
            $obvsite=$obx->observationsite;

			 // echo $sql="select *from biotestdefinitions where code='$testcode' ";
            // $results3 = sqlsrv_query( $conn_hq, $sql); 
			//$rows3= sqlsrv_fetch_array($results3)
			//$sampletype=$rows3['SampleType];
			//$units=$rows3['units'];
            // echo $sql="insert into bioresults (sampleid,Code,Units,result,RunDate,RunTime,SampleType) values('$sampleid','$testcode','$units','$res','  $obvdate','$obvtime','$sampletype') ";
            // $results3 = sqlsrv_query( $conn_hq, $sql); 

           
            

        }
        if($msg[0]=='ORC'){
	
        }
        if($msg[0] == 'OBR'){

			$obr=new $msg[0];
            $obr=$obr->ParseMessage($r[$i]);
			$obr->display();
			$sampleid=$obr->sampleid;
        }
		if($msg[0]=='NTE'){
			$nte=new $msg[0];
            $nte=$nte->ParseMessage($r[$i]);
			$comment=$comment.' '.$nte->Comment;
		


        }
    }
        

    }
    
}
$date=date('Y-m-d H:i:s');
 // echo $sql="insert into observations (sampleid,Discipline,Comment,datetime) values('$sampleid','BioChemistry','$comment','$date')";
     // $results3 = sqlsrv_query( $conn_hq, $sql); 

}


$files = glob('C:/nvrl/*.*', GLOB_BRACE | GLOB_NOSORT);

usort($files, function($a, $b) {
    return filemtime($b) - filemtime($a);
});

 $latest_file = $files[0];
 $data = file_get_contents($latest_file);
configresult($data);
// $new_file_name = 'new_name.txt';

// rename($latest_file, 'C:/nvrl/' . $new_file_name);

?>