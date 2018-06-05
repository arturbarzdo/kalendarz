<?php


class DbData{
	
	public $res;
	private $dstart;
	private $dstop;
	
	public function show_mount(){
		
        $year  = null;
         
        $month = null;
         
        if(null==$year&&isset($_GET['year'])){
 
            $year = $_GET['year'];
         
        }else if(null==$year){
 
            $year = date("Y",time());  
         
        }          
         
        if(null==$month&&isset($_GET['month'])){
 
            $month = $_GET['month'];
         
        }else if(null==$month){
 
            $month = date("m",time());
         
        } 
            
		$this->dstart=$year."-".$month."-01";
		$this->dstop=$year."-".$month."-31";
		require_once "con/connect.php";
		
		try {
            $result = $pdo->query("Select data,godzina_r,godzina_z,fname,lname from kal_wpisy
			inner join users ON kal_wpisy.user_id = users.uid								 
			 WHERE `data` BETWEEN '{$this->dstart}' AND '{$this->dstop}'
			
			");
			$result->execute();
            $this->res = $result->fetchAll(PDO::FETCH_ASSOC);
            
			
        } catch (PDOException $e) {
            echo "Error: " . $e;
        }
		
		return $this->res;
	}
}





	
	
	