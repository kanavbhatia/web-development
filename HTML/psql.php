<?php
 $host = "host=127.0.0.1";
 $port = "port=5432";
 $dbname = "dbname=mydb";
 $credentials = "user=postgres password=pass123";
 $db = pg_connect( "$host $port $dbname $credentials" );
 if(!$db){
 echo "Error : Unable to open database\n";
 } else {
 echo "Opened database successfully\n";
 }
 function disp_question($ch,$ch1)
 {   $i = 1
 	 $sql =<<<EOF
 	SELECT * from question;
	EOF;
	 $ret = pg_query($db, $sql);
	 if(!$ret){
	 echo pg_last_error($db);
	 exit;
	 }
	 while($row = pg_fetch_row($ret))
	 { if(ch1==0)
		{
		 echo "Question no.= ". $row[2] . "\n";
		 echo "Question = ". $row[0] ."\n";
		 if($row[1] == 'false')
		 {
		  echo "unanswered question";
		 }
		 else
		  {
		    while(isset($row[3][$i]))
		    {
		 	echo "Solution".$i++." = ".$row[3] ."\n\n";
		 	}
		 	add_sol($sol);
		  }
		}
		if(ch==1)
		{
		 {
		 echo "Question no.= ". $row[2] . "\n";
		 echo "Question = ". $row[0] ."\n";
		 if($row[1] == 'false')
		 {
		  echo "unanswered question";
		 }
		 else
		  { 
		   SELECT * from solution;
			EOF;
			 $ret1 = pg_query($db, $sql);
			 if(!$ret1){
			 echo pg_last_error($db);
			 exit;
			 }
			  while($row1 = pg_fetch_row($ret1))
			  {  $j=0;
			  	
			  	 while(isset($row1[1][$j]))
		    { echo "Solution no.= ". $row1[0] . "\t";
		   	  echo "Solution".$j++." = ".$row1[1][$j] ."\n\n";
		 	}
		 	\\add textbox
			  add_sol($sol,$row[2]);
			  }
		  }
		}
		}

	 if()
	 echo "Operation done successfully\n";
 }
 function add_ques($question)
 {echo""hh;
  $sql =<<<EOF
 INSERT INTO question (question,q_st,q_no,solution) values('$question',false',default,NULL);
 }
function add_sol($sol,$ques_no)
{
	SELECT * from solution;
	EOF;
	 $ret = pg_query($db, $sql);
	 if(!$ret){
	 echo pg_last_error($db);
	 exit;
	 }
	 $i = 0;
	 while($row = pg_fetch_row($ret))
	 {
	     SELECT * from question;
	     EOF;
		 $ret1 = pg_query($db, $sql);
		 if(!$ret1){
		 echo pg_last_error($db);
		 exit;}
		 $array = $row[1];
		 array_push($array,$sol);
		 while($row1 = pg_fetch_row($ret1))
		 {
		  if(row1[2]==row[0])
			  {
			   INSERT INTO  solution(s_no,solution) values(default,'$array');
			   if(row1[2][1]== NULL)
			   {
				   \\add that solution as solution in question table and chamge status to true
				   update table question set q_st = 'true' && solution = '$sol' where q_no = row[0];
		      }
			 }		
		 }
	 }
 }
 pg_close($db);
 ?>