<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'KLogger.php';
$log = new KLogger ( "log.txt" , KLogger::DEBUG );
class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
        $this->load->helper('date');
		$this->load->model('User_model');		
	}
//demo for xml
public function demo(){
	$access_token='eyJhbGciOiJIUzUxMiJ9.eyJzdWIiOiJzdXBlcmFkbWluIiwiYXV0aCI6IkFERF9DTElFTlQsQUREX01FRElBQk9YLEFERF9QQUNLQUdFLEFERF9QUk9WSVNJT05ERVZJQ0UsQUREX1JPTEUsQUREX1VTRVIsQUREX1ZFSElDTEUsREVMRVRFX0NMSUVOVCxERUxFVEVfTUVESUFERVZJQ0UsREVMRVRFX1BST1ZJU0lPTkRFVklDRSxERUxFVEVfUk9MRSxERUxFVEVfVVNFUixERUxFVEVfVkVISUNMRSxET1dOTE9BRF9DT05URU5UX1JFUE9SVFMsRE9XTkxPQURfTUVESUFCT1hfUkVQT1JUUyxFRElUX0FTU0VULEVESVRfQ0xJRU5ULEVESVRfTUVESUFERVZJQ0VfREVUQUlMUyxFRElUX1BST1ZJU0lPTkRFVklDRV9ERVRBSUxTLEVESVRfUk9MRSxFRElUX1VTRVIsRURJVF9WRUhJQ0xFX0RFVEFJTFMsT1dORVJfT0ZfVEhFX1BST1ZJU0lPTklOR19ERVZJQ0UsVklFV19BTExfQVNTRVQsVklFV19BTExfQ0xJRU5ULFZJRVdfQUxMX01FRElBREVWSUNFLFZJRVdfQUxMX01FRElBREVWSUNFX1VTRVJTLFZJRVdfQUxMX1BST1ZJU0lPTkRFVklDRSxWSUVXX0FMTF9ST0xFLFZJRVdfQUxMX1VTRVIsVklFV19BTExfVkVISUNMRSxWSUVXX0NPTlRFTlRfUkVQT1JUUyxWSUVXX01FRElBQk9YX1JFUE9SVFMsVklFV19NRURJQURFVklDRV9MSVNULFZJRVdfUEFDS0FHRV9MSVNUIiwiZXhwIjoxNTg0NDMwNTcxfQ.kD8wFnYPppagIJOb7i2_VSK96jy9nu25BE6eJQ6It4beej2tfyAp7pRVbgUx0Meq4BWRSG_V5V8lyB9Dsh_Pgw';
	$options = ["http" => [
		"method" => "GET",
		"header" => ["Authorization: Bearer ".$access_token,
			"Content-Type: application/json"]
		]];
	$context = stream_context_create($options);
	$url='http://15.206.65.9:8081/oescms/api/v1/asset-package/media-box/5e6f0ddd3ee2c31186504e2e/XML';
	//$url = preg_replace("/ /", "%20", $url);
	$url = str_replace(" ", "%20", $url);

	$result = file_get_contents($url,false,$context);
    print_r(simplexml_load_string($result));die;
}	
//for fleet Report
public function fleetReport(){
	
	$xml=simplexml_load_file("/var/www/html/media/application/database/gps.xml") or die("Error: Cannot create object"); 
	if(!empty($xml)){
		$vehicleRegNo=$xml->regNo;
		$vehicleRegNo=json_decode(json_encode($vehicleRegNo), true);
		// $clientID=$xml->clientId;
		$deviceID=$xml->deviceId;
		$depatureTime=$xml->journeyDetails->startTime;
		$format = "%Y-%m-%d %h:%i %A";
		$arrivalTime = new DateTime(mdate($format));
		$depatureTime = new DateTime($depatureTime);
		$interval = $arrivalTime->diff($depatureTime);
		if($interval->format('%h')==0){
			$timeDuration= $interval->format('%i')." Minutes";
		}
		else{
	     	$timeDuration= $interval->format('%h')." Hours ".$interval->format('%i')." Minutes";
		}
	    $depatureTime=$depatureTime->format('Y-m-d H:i:s');
	   
		$arrivalTime=$arrivalTime->format('Y-m-d H:i:s');
		$db2=$this->load->database('pb',true);
		$db2->select('Lat as latitude');
		$db2->select('Long as longitude');
		$db2->select('timestamp as gpsLocationTime');
		$db2->from('gps2020_02_19_16_18_24_589148');
		$route =$db2->get()->result_array();
		$location=array();
		foreach($route as $endlocationDetails){
			$location[]['location']=array('latitude'=>$endlocationDetails['latitude'],'longitude'=>$endlocationDetails['longitude']);
            $location[]['gpsLocationTime']=	$endlocationDetails['gpsLocationTime'];
		}
		
		$data = array(
			'vehicleNumber' =>$vehicleRegNo[0],
			'journeyStartedAt'=>$depatureTime,
			'journeyEndedAt' =>$arrivalTime,
			'route'=>$route

		);
		$access_token='eyJhbGciOiJIUzUxMiJ9.eyJzdWIiOiJzdXBlcmFkbWluIiwiYXV0aCI6IkFERF9DTElFTlQsQUREX01FRElBQk9YLEFERF9QQUNLQUdFLEFERF9QUk9WSVNJT05ERVZJQ0UsQUREX1JPTEUsQUREX1VTRVIsQUREX1ZFSElDTEUsREVMRVRFX0NMSUVOVCxERUxFVEVfTUVESUFERVZJQ0UsREVMRVRFX1BST1ZJU0lPTkRFVklDRSxERUxFVEVfUk9MRSxERUxFVEVfVVNFUixERUxFVEVfVkVISUNMRSxET1dOTE9BRF9DT05URU5UX1JFUE9SVFMsRE9XTkxPQURfTUVESUFCT1hfUkVQT1JUUyxFRElUX0FTU0VULEVESVRfQ0xJRU5ULEVESVRfTUVESUFERVZJQ0VfREVUQUlMUyxFRElUX1BST1ZJU0lPTkRFVklDRV9ERVRBSUxTLEVESVRfUk9MRSxFRElUX1VTRVIsRURJVF9WRUhJQ0xFX0RFVEFJTFMsT1dORVJfT0ZfVEhFX1BST1ZJU0lPTklOR19ERVZJQ0UsVklFV19BTExfQVNTRVQsVklFV19BTExfQ0xJRU5ULFZJRVdfQUxMX01FRElBREVWSUNFLFZJRVdfQUxMX01FRElBREVWSUNFX1VTRVJTLFZJRVdfQUxMX1BST1ZJU0lPTkRFVklDRSxWSUVXX0FMTF9ST0xFLFZJRVdfQUxMX1VTRVIsVklFV19BTExfVkVISUNMRSxWSUVXX0NPTlRFTlRfUkVQT1JUUyxWSUVXX01FRElBQk9YX1JFUE9SVFMsVklFV19NRURJQURFVklDRV9MSVNULFZJRVdfUEFDS0FHRV9MSVNUIiwiZXhwIjoxNTg0NDMwNTcxfQ.kD8wFnYPppagIJOb7i2_VSK96jy9nu25BE6eJQ6It4beej2tfyAp7pRVbgUx0Meq4BWRSG_V5V8lyB9Dsh_Pgw';
		$options = ["http" => [
			"method" => "POST",
			"header" => ["Authorization: Bearer ".$access_token,
				"Content-Type: application/json"],
			"content" => json_encode($data)
			]];
		$context = stream_context_create($options);
		$url='http://15.206.65.9:8081/oescms/api/v1/vehicle_gps_detector';
		//$url = preg_replace("/ /", "%20", $url);
		$url = str_replace(" ", "%20", $url);
	
		$result = file_get_contents($url,false,$context);
		print_r($result);die;
		return $result;

	}


}   	
//For calculating upcoming stops
public function upccomingStops(){
	if ( @fopen("http://www.google.com", "r") ) 
	   {
	$db1=$this->load->database('pb',true);
	$result=$db1->query('SELECT * FROM gps2020_02_19_16_18_24_589148 where id=(SELECT MAX(id) from gps2020_02_19_16_18_24_589148)')->result_array();   
	$lat=$result[0]['Lat'];
	$long=$result[0]['Long'];
	$xml=simplexml_load_file("/var/www/html/media/application/database/gps.xml") or die("Error: Cannot create object");    
	if(isset($xml)){   
	$count=$xml->journeyDetails->stopDetails->count();
	$stops=-1;
	$stopDetails=array();
	$stopName=array();
	$startTime=date('Y-m-d H:i:s',strtotime($xml->journeyDetails->startTime));
   
			   foreach($xml->journeyDetails->stopDetails as $stopNamesDetail){ 
				   $durationCalculation=file_get_contents('https://maps.googleapis.com/maps/api/distancematrix/xml?origins='.$lat.','.$long.'&destinations='.$stopNamesDetail->latitude.','.$stopNamesDetail->longitude.'&mode=driving&language=eng&key=AIzaSyDmqVJ6FlVWBZj8a32o3Cr5UzrvO4m8Mic');
				   $durationCalculation=simplexml_load_string($durationCalculation);
				   $timeTaken=$durationCalculation->row->element->duration->text;
				   $timeTaken=explode(' ',$timeTaken);
				   
				   if(empty($timeTaken[0]))
				   {   
					   $timeTaken[0]=null;
				   }
				   if(empty($timeTaken[1]))
				   {   
					   $timeTaken[1]=null;
				   }
				   if(empty($timeTaken[2]))
				   {   
					   $timeTaken[2]=null;
				   }
				   if(empty($timeTaken[3]))
				   {  
					   $timeTaken[3]=null;
				   }
				   //
				   $data=array();
				   $data[]= $timeTaken[1];
				   if (in_array("mins",$data)) {
					   $nextTimeDuration= date('Y-m-d H:i:s',strtotime('+'.$timeTaken[0].' '.$timeTaken[1],strtotime($startTime)));
				   }
				   else if (in_array("min",$data)) {
					   $nextTimeDuration= date('Y-m-d H:i:s',strtotime('+'.$timeTaken[0].' '.$timeTaken[1],strtotime($startTime)));
				   }
				   else{
					   $nextTimeDuration= date('Y-m-d H:i:s',strtotime('+'.$timeTaken[0].' '.$timeTaken[1].' '.'+'.$timeTaken[2].' '.$timeTaken[3],strtotime($startTime)));
					 }
				   $stopDetails[]=$nextTimeDuration;
				   $stopName[]=$stopNamesDetail;   
				   $stops++;
			   }
			   $data=$stopDetails;
			   function compareByTimeStamp($time1, $time2) 
			   { 
				   if (strtotime($time1) < strtotime($time2)) 
					   return 1; 
				   else if (strtotime($time1) > strtotime($time2))  
					   return -1; 
				   else
					   return 0; 
			   } 
					   
			  
			   // sort array with given user-defined function 
			   usort($data, "compareByTimeStamp"); 
			   $upcoming['time']=date('h:i A', strtotime($data[$stops]));
			   $key = array_search($data[$stops], $stopDetails);
			   $stopName=$stopName[$key];
			   $stopDetails=$stopDetails[$key];
			   $address=file_get_contents("https://maps.googleapis.com/maps/api/geocode/xml?latlng=$stopName->latitude,$stopName->longitude&key=AIzaSyDmqVJ6FlVWBZj8a32o3Cr5UzrvO4m8Mic");
			   $address=simplexml_load_string($address);
			   $address=$address->result->formatted_address;
			   $address=explode(',', $address);
			   $upcoming['stopName']=$address[3];

			   //chake for fleet Report
			   $endlocationDetail=$xml->journeyDetails->stopDetails;
			   
			   $fleet=file_get_contents('https://maps.googleapis.com/maps/api/distancematrix/xml?origins='.$lat.','.$long.'&destinations='.$endlocationDetail->latitude.','.$endlocationDetail->longitude.'&mode=driving&language=eng&key=AIzaSyDmqVJ6FlVWBZj8a32o3Cr5UzrvO4m8Mic');
			   $fleet=simplexml_load_string($fleet);
			   $distance=explode(' ',$fleet->row->element->distance->text);
			   
			   if((int)$distance[0]<1){
				$this->fleetReport();
			   }
			   return $upcoming;
     }
	}

}
public function gpsData(){
	if ( @fopen("http://www.google.com", "r") ) 
		{
   $xml1=simplexml_load_file("file:///home/pi/MB/XML.xml") or die("Error: Cannot create object");
   $details=$this->User_model->user_details();  
	   $media=$xml1->NavBar;
	   $data[]=array();
	   
	  $stopNames['navbar']=$media->Items->Item;
	 
	 
   $xml=simplexml_load_file("/var/www/html/media/application/database/gps.xml") or die("Error: Cannot create object");
   
	   
   if(isset($xml)){
				
			   $stopNames['stopNames']=$xml->journeyDetails->stopNames;
			   $startLocation=$xml->journeyDetails->startLocation;
			   $endLocation=$xml->journeyDetails->endLocation;
			   $start_result=file_get_contents("https://maps.googleapis.com/maps/api/geocode/xml?latlng=$startLocation->latitude,$startLocation->longitude&key=AIzaSyDmqVJ6FlVWBZj8a32o3Cr5UzrvO4m8Mic");
			   $end_result=file_get_contents("https://maps.googleapis.com/maps/api/geocode/xml?latlng=$endLocation->latitude,$endLocation->longitude&key=AIzaSyDmqVJ6FlVWBZj8a32o3Cr5UzrvO4m8Mic");
			   $start_result=simplexml_load_string($start_result);
			   $end_result=simplexml_load_string($end_result);
			   $start_result=$start_result->result->formatted_address;
			   $end_result=$end_result->result->formatted_address;
			   $stopNames['startLocation']=$start_result;
			   $stopNames['endLocation']=$end_result;
			   $startTime=$xml->journeyDetails->startTime;
			   $stopNames['startTime']=date('h:i A', strtotime($startTime));
			   //add time for duration
			   $stopDetails=array();
			   $nextTime=array();
			   //add end location
			   $stops=0;
			   $count=$xml->journeyDetails->stopDetails->count();
			   foreach($xml->journeyDetails->stopDetails as $stopNamesDetail){                 
				   $stopDetails[]=$stopNamesDetail;    
				   $stops++;
			   }
			   $stopDetails[$stops]=$endLocation;
			   
			   $startTimeCal=date('Y-m-d H:i:s',strtotime($startTime));
			   for($i=0;$i<=$count;$i++){
				   $stopFirstDetail=$startLocation;
				   $stopSecondDetail=$stopDetails[$i];
				   $startLocation=$stopDetails[$i];
				   $startTime = $startTimeCal;
	   
				   $durationCalculation=file_get_contents('https://maps.googleapis.com/maps/api/distancematrix/xml?origins='.$stopFirstDetail->latitude.','.$stopFirstDetail->longitude.'&destinations='.$stopSecondDetail->latitude.','.$stopSecondDetail->longitude.'&mode=driving&language=eng&key=AIzaSyDmqVJ6FlVWBZj8a32o3Cr5UzrvO4m8Mic');
				   $durationCalculation=simplexml_load_string($durationCalculation);
				   $timeTaken=$durationCalculation->row->element->duration->text;
				   $timeTaken=explode(' ',$timeTaken);
				   
				   if(empty($timeTaken[0]))
				   {   
					   $timeTaken[0]=null;
				   }
				   if(empty($timeTaken[1]))
				   {   
					   $timeTaken[1]=null;
				   }
				   if(empty($timeTaken[2]))
				   {   
					   $timeTaken[2]=null;
				   }
				   if(empty($timeTaken[3]))
				   {  
					   $timeTaken[3]=null;
				   }
				   //
				   $data=array();
				   $data[]= $timeTaken[1];
				   if (in_array("mins",$data)) {
					   $nextTimeDuration= date('Y-m-d H:i:s',strtotime('+'.$timeTaken[0].' '.$timeTaken[1],strtotime($startTime)));
				   }
				   else if (in_array("min",$data)) {
					   $nextTimeDuration= date('Y-m-d H:i:s',strtotime('+'.$timeTaken[0].' '.$timeTaken[1],strtotime($startTime)));
				   }
				   else{
					   $nextTimeDuration= date('Y-m-d H:i:s',strtotime('+'.$timeTaken[0].' '.$timeTaken[1].' '.'+'.$timeTaken[2].' '.$timeTaken[3],strtotime($startTime)));
					 }
				   // print_r($nextTimeDuration);die;
				   //print_r('+'.$timeTaken[0].' '.$timeTaken[1].' '.'+'.$timeTaken[2].' '.$timeTaken[3]);
						 
				   //print_r($nextTimeDuration);die;
				   $startTimeCal=$nextTimeDuration;   
				   $nextTime[]=date('h:i A',strtotime($nextTimeDuration)); 
				   
			   }
			  
			   $stopNames['arrivalTime']=$nextTime[$stops];
			   $stopNames['nextTime']=$nextTime;
			   $stopNames['user_details']=$details;
			   
		   
   }
   $this->load->view('upcoming-stops',$stopNames);
}
}	

// for end user report  data
public function storeing($time){
	
	$data = array(
		'mobile' =>$this->session->userdata('mob'),
		'emailId' =>$this->session->userdata('mob'),
		'username'=>$this->session->userdata('user_name'),
		'ipAddress'=>$this->session->userdata('ip'),
		'mediaBox' =>'media',
		'hoursOfConsumption'=>$time,	
	);
	
	$access_token='eyJhbGciOiJIUzUxMiJ9.eyJzdWIiOiJzdXBlcmFkbWluIiwiYXV0aCI6IkFERF9DTElFTlQsQUREX01FRElBQk9YLEFERF9QQUNLQUdFLEFERF9QUk9WSVNJT05ERVZJQ0UsQUREX1JPTEUsQUREX1VTRVIsQUREX1ZFSElDTEUsREVMRVRFX0NMSUVOVCxERUxFVEVfTUVESUFERVZJQ0UsREVMRVRFX1BST1ZJU0lPTkRFVklDRSxERUxFVEVfUk9MRSxERUxFVEVfVVNFUixERUxFVEVfVkVISUNMRSxET1dOTE9BRF9DT05URU5UX1JFUE9SVFMsRE9XTkxPQURfTUVESUFCT1hfUkVQT1JUUyxFRElUX0FTU0VULEVESVRfQ0xJRU5ULEVESVRfTUVESUFERVZJQ0VfREVUQUlMUyxFRElUX1BST1ZJU0lPTkRFVklDRV9ERVRBSUxTLEVESVRfUk9MRSxFRElUX1VTRVIsRURJVF9WRUhJQ0xFX0RFVEFJTFMsT1dORVJfT0ZfVEhFX1BST1ZJU0lPTklOR19ERVZJQ0UsVklFV19BTExfQVNTRVQsVklFV19BTExfQ0xJRU5ULFZJRVdfQUxMX01FRElBREVWSUNFLFZJRVdfQUxMX01FRElBREVWSUNFX1VTRVJTLFZJRVdfQUxMX1BST1ZJU0lPTkRFVklDRSxWSUVXX0FMTF9ST0xFLFZJRVdfQUxMX1VTRVIsVklFV19BTExfVkVISUNMRSxWSUVXX0NPTlRFTlRfUkVQT1JUUyxWSUVXX01FRElBQk9YX1JFUE9SVFMsVklFV19NRURJQURFVklDRV9MSVNULFZJRVdfUEFDS0FHRV9MSVNUIiwiZXhwIjoxNTg0NjEyMDg2fQ.R0Qc-Nl6BS4pSK5ImapnaZV4l4EvqQo6xdFUncYAHVPl7bnFwUuiegKhlq99Qt_0O6_unDJP3RKQUND_xbGIbA';
	$options = ["http" => [
		"method" => "POST",
		"header" => ["Authorization: Bearer ".$access_token,
			"Content-Type: application/json"],
		"content" => json_encode($data)
		]];
	$context = stream_context_create($options);
    $url='http://52.66.153.105:8081/oescms/api/v1/end-user-reports';
	//$url = preg_replace("/ /", "%20", $url);
    //$url = str_replace(" ", "%20", $url);

    $result = file_get_contents($url,false,$context);
    return $result;
}	
//For Home
	public function index()
	{   
 
		if(isset($_SESSION['email'])){
			$details=$this->User_model->user_details();       
			$xml=simplexml_load_file("file:///home/pi/MB/XML.xml") or die("Error: Cannot create object");
			if(!empty($xml)){

				$media=$xml->NavBar;
				$navbar=array();
				$countCategories=0;
				foreach($media->Items->Item as $medias){
					$navbar[]=$medias->Name;
					$count=0;
						foreach($medias->Categories as $home){
						
							$homeData[]=$home->Category;
							$countCategories++;
							++$count;
							if ($count==2) break;
							
					
						}	  
					
			   }
			  
			
			 //  print_r($homeData[1]->Contents->Content);die;
			   $data['countCategories']=$countCategories;
			   $data['homeData']=$homeData;
			   $data['user_details']=$details;
			   
			   $data['navbar_name']=$navbar;
		       $data['navbar_count']=0;
			   $data['img']=0; 
			   $data['count']=0;
			   $data['next']=0;
			   $data['prev']=0;
			   $data['slider']=0;
			   $data['navbar']=$media->Items->Item;
			   $recently=$this->User_model->continue_watching();
			   $data['recently']=$recently;
			   $data['pdf']=-1;
			   $data['upcoming']=$this->upccomingStops();
			   if(!empty($data['homeData'])){

				
			  // print_r($data['navbar']);die;
			   $this->load->view('home',$data);
			   }
			   else{
				$this->load->view('error');
			   }
			}
			else{
				 $this->load->view('error');
			}
		}
	    else{
		redirect('user/signup');
	   }
}
public function browse($genre)
{  
	if(isset($_SESSION['email'])){
		$genre=str_replace('%20',' ',$genre);     
		
		$xml=simplexml_load_file("file:///home/pi/MB/XML.xml") or die("Error: Cannot create object");
		if(isset($xml)){

			$media=$xml->NavBar;
			$data[]=array();
			foreach($media->Items->Item as $medias){
				
				if($medias->Name==$genre){
					$item_details=$medias;
					$item_type=$item_details->Categories->Category->Type;
				break;
				}
			
		   }
		   
          if(strtolower($genre)=='home'){
			  redirect('User');
		  }
		  else if(strtolower($item_type)=='video'){
			
            redirect('User/movies/'.$genre);
		  }
		 else if(strtolower($item_type)=='audio'){
            redirect('User/musics/'.$genre);
		  }
		 else if(strtolower($item_type)=='text'){
            redirect('User/ebooks/'.$genre);
		  }
		  else if(strtolower($item_type)=='image'){
            redirect('User/Images/'.$genre);
		  }
		  else{
			  $this->load->view('error');
		  }
		  
		}
		else{
			 $this->load->view('error');
		}
	}
  else{
	redirect('user/signup');
  }
}
// For Musics


public function musics($genre)
	{  
		if(isset($_SESSION['email'])){
			$details=$this->User_model->user_details();       
			$xml=simplexml_load_file("file:///home/pi/MB/XML.xml") or die("Error: Cannot create object");
			if(isset($xml)){
	
				$media=$xml->NavBar;
				$data[]=array();
				foreach($media->Items->Item as $medias){
					
					if($medias->Name==$genre){
					  
					
						$data['media']=$medias;
						
						$data['user_details']=$details;
						$data['navbar_name']=$medias->Name;
					}
				
			   }
			   $data['img']=0; 
			   $data['count']=0;
			   $data['next']=0;
			   $data['prev']=0;
			   $data['slider']=0;
			   $data['navbar']=$media->Items->Item;
			   $recently=$this->User_model->continue_watching();
			   $data['recently']=$recently;
			   $data['pdf']=-1;
			   $this->load->view('musics',$data);
			}
			else{
				 $this->load->view('error');
			}
		}
		else{
				redirect('user/signup');
		}
		
		
	}


//movies 	
	public function movies($genre)
	{   
		if(isset($_SESSION['email'])){
			$details=$this->User_model->user_details();       
			$xml=simplexml_load_file("file:///home/pi/MB/XML.xml") or die("Error: Cannot create object");
			if(isset($xml)){
	
				$media=$xml->NavBar;
				$data[]=array();
				foreach($media->Items->Item as $medias){
					
					if($medias->Name==$genre){
					  
					
						$data['media']=$medias;
						
						$data['user_details']=$details;
						$data['navbar_name']=$medias->Name;
					}
				
			   }
			   $data['img']=0; 
			   $data['count']=0;
			   $data['next']=0;
			   $data['prev']=0;
			   $data['slider']=0;
			   $data['navbar']=$media->Items->Item;
			   $recently=$this->User_model->continue_watching();
			   $data['recently']=$recently;
	           $data['pdf']=-1;
	           $data['genre_data']=$data['media']->Genres;
			   $this->load->view('movies',$data);
			}
			else{
				 $this->load->view('error');
			}
		}
		else{
				redirect('user/signup');
		}
		
}
//For Images
public function Images($genre)
		{ 
			// if(isset($_SESSION['email'])){
            $genre=str_replace('%20',' ',$genre);
			$details=$this->User_model->user_details();       
			$xml=simplexml_load_file("file:///home/pi/MB/XML.xml") or die("Error: Cannot create object");
			if(isset($xml)){

				$media=$xml->NavBar;
				$data[]=array();
				foreach($media->Items->Item as $medias){
					
					if($medias->Name==$genre){
					
					
						$data['media']=$medias;
						
						$data['user_details']=$details;
						$data['navbar_name']=$medias->Name;
					}
				
			}
			
			$data['img']=0; 
			$data['count']=0;
			$data['next']=0;
			$data['prev']=0;
			$data['slider']=0;
			$data['navbar']=$media->Items->Item;
			$recently=$this->User_model->continue_watching();
			$data['recently']=$recently;
			$data['pdf']=-1;
			$this->load->view('Images',$data);
			}
			else{
				$this->load->view('error');
			}
	

}
//for ebooks for text or pdf or html

public function ebooks($genre)
{   
	if(isset($_SESSION['email'])){
		$genre=str_replace('%20',' ',$genre); 
		$details=$this->User_model->user_details();       
		$xml=simplexml_load_file("file:///home/pi/MB/XML.xml") or die("Error: Cannot create object");
		if(isset($xml)){

			$media=$xml->NavBar;
			$data[]=array();
			foreach($media->Items->Item as $medias){
				
				if($medias->Name==$genre){
				  
				
					$data['media']=$medias;
					
					$data['user_details']=$details;
					$data['navbar_name']=$medias->Name;
				}
			
		   }
		   $data['img']=0; 
		   $data['count']=0;
		   $data['next']=0;
		   $data['prev']=0;
		   $data['slider']=0;
		   $data['navbar']=$media->Items->Item;
		   $recently=$this->User_model->continue_watching();
		   $data['recently']=$recently;
		   $data['pdf']=-1;
          
		   $this->load->view('ebooks',$data);
		}
		else{
			 $this->load->view('error');
		}
	}
    else{
			redirect('user/signup');
	}
	
}
//filter media
public function filter_media($genre,$navbar){
	$genre=str_replace('%20',' ',$genre);
	$navbar=str_replace('%20',' ',$navbar);
	
	if(isset($_SESSION['email'])){
		$details=$this->User_model->user_details();       	
		$xml=simplexml_load_file("file:///home/pi/MB/XML.xml") or die("Error: Cannot create object");
		 
		

		if(isset($xml)){

			$media=$xml->NavBar;
			$movies[]=array();
			foreach($media->Items->Item as $medias){
				
				if($medias->Name==$navbar){
					
					$data=$medias;
				}
			}
			// print_r($data);die;
			foreach ($data->Categories->Category as $item){
				  if($item->Name==$genre){
					  $movies['type']=$item->Type;
					  $movies['filter']=$item;
					  $movies['genre_title']=$item->Name;
				  }
			}
			
		   $movies['navbar']=$media->Items->Item;
		  // print_r($data['navbar']);die;
		}
		else{
			 $this->load->view('error');
		}
		$movies['navbar_name']=$navbar;
		$movies['genre_name']=$genre;
		$movies['user_details']=$details;
		$movies['img']=0;
		$movies['pdf']=-1;	 
		$this->load->view('filter_media',$movies);	
		
	}
    else{
	redirect('user/signup');
   }
   
}
//filter media for Home page	
public function filter_movies($navbar,$genre_movie){

		if(isset($_SESSION['email'])){
			$details=$this->User_model->user_details();       	
			$xml=simplexml_load_file("file:///home/pi/MB/XML.xml") or die("Error: Cannot create object");
			if(isset($xml)){
	
				$media=$xml->NavBar;
				foreach($media->Items->Item as $medias){
					
					if($medias->Name==$navbar){
						
						$data=$medias;
					}
				}
				
				foreach ($data->Categories->Category as $item){
					   foreach($item->Contents->Content as $details){
						   foreach($details->genres as $genre){
							
						   if(strtolower($genre->genre)==strtolower($genre_movie)){
						
							$movies['filter'][]=$details;
						   }
						 }  
					   }
					  
				}
				//print_r($movies);die;
			   $movies['navbar']=$media->Items->Item;
			  // print_r($data['navbar']);die;
			}
			else{
				 $this->load->view('error');
			}
			$movies['navbar_name']=$navbar;
			$movies['genre_name']=$genre;
			$movies['user_details']=$details;
					 
		   $this->load->view('filter_movie_genre',$movies);	
			
		}
		else{
		redirect('user/signup');
	   }

}

public function filter_musics($navbar,$genre_music){
	if(isset($_SESSION['email'])){
		$details=$this->User_model->user_details();       	
		$xml=simplexml_load_file("file:///home/pi/MB/XML.xml") or die("Error: Cannot create object");
		if(isset($xml)){

			$media=$xml->NavBar;
			foreach($media->Items->Item as $medias){
				
				if($medias->Name==$navbar){
					
					$data=$medias;
				}
			}
			
			foreach ($data->Categories->Category as $item){
				   foreach($item->Contents->Content as $details){
					  foreach($details->genres as $genre){
							print_r($genre);
					  if(strtolower($details->genre)==strtolower($genre_music)){
					 	$movies['filter'][]=$details;
					  }
				}
				   }
				  
			}
			die;
		   $movies['navbar']=$media->Items->Item;
		  // print_r($data['navbar']);die;
		}
		else{
			 $this->load->view('error');
		}
		$movies['navbar_name']=$navbar;
		$movies['genre_name']=$genre;
		$movies['user_details']=$details;
				 
	   $this->load->view('filter_music_genre',$movies);	
		
	}
	else{
	redirect('user/signup');
   }
   
}


public function filter_images($navbar,$genre){
	if(isset($_SESSION['email'])){
		$details=$this->User_model->user_details();       	
		$xml=simplexml_load_file("file:///home/pi/MB/XML.xml") or die("Error: Cannot create object");
		if(isset($xml)){

			$media=$xml->NavBar;
			foreach($media->Items->Item as $medias){
				
				if($medias->Name==$navbar){
					
					$data=$medias;
				}
			}
			// print_r($data);die;
			foreach ($data->Categories->Category as $item){
				   foreach($item->Contents->Content as $details){
					  
					if(strtolower($details->genre)==strtolower($genre)){
						$movies['filter'][]=$details;
					}
				   }
				  
			}
			
		   $movies['navbar']=$media->Items->Item;
		  // print_r($data['navbar']);die;
		}
		else{
			 $this->load->view('error');
		}
		$movies['navbar_name']=$navbar;
		$movies['genre_name']=$genre;
		$movies['user_details']=$details;
		$movies['img']=0;
					 
	   $this->load->view('filter_images',$movies);	
		
	}
	else{
	redirect('user/signup');
   }

}
//Search all movies or musics or ebooks and images
public function allMovies()
{  
	if(isset($_SESSION['email'])){
		$details=$this->User_model->user_details();       
		$xml=simplexml_load_file("file:///home/pi/MB/XML.xml") or die("Error: Cannot create object");
		if(isset($xml)){

			$media=$xml->NavBar;
			$value=array();
			$i=0;
			$media=$media->Items;
			
			foreach($media->Item as $data){
			        foreach($data->Categories->Category as $category){
						foreach($category->Contents as $content){
							if($category->Type=='VIDEO'){
							foreach($content as $title){
								$value[$i]=$title->title;	
								++$i;
							}
						  }
						}
					}
				}
		   foreach($value as $data){
			$all_movies_series[]=(string)$data[0];

		   }
		   $myJSON = json_encode($all_movies_series);

					echo $myJSON;
		
	
     return $myJSON;
		  
		}
		else{
			 $this->load->view('error');
		}
    }   
 else{
	$this->load->view('user/signup');	
  }				
}
public function search_movieData(){
	
	if(isset($_SESSION['email'])){
		$titleData=$this->input->post('title');
		
		$details=$this->User_model->user_details();       
		$xml=simplexml_load_file("file:///home/pi/MB/XML.xml") or die("Error: Cannot create object");
		if(isset($xml)){

			$media=$xml->NavBar;
			$navbar=$media->Items->Item;
			$value=array();
			$i=0;
			$media=$media->Items;
			
			foreach($media->Item as $data){
			        foreach($data->Categories->Category as $category){
					   if($category->Type=='VIDEO'){
						foreach($category->Contents as $content){
							foreach($content as $title){
								if($title->title==$titleData){
									$value['filter'][]=$title;
									$value['asset'][]=$data->Name;
									$value['category'][]=$category->Name;
								}
								
							}
						  }
					   }
					}
				}
                $value['count']=0;
			    $value['type']='VIDEO';
				$value['navbar']=$navbar;
				$value['user_details']=$details;
				
				$this->load->view('searchAlldata',$value);
		}
		else{
			 $this->load->view('error');
		}
    }   
 else{
	$this->load->view('user/signup');	
  }	
}

public function filter_ebooks($navbar,$genre){
	if(isset($_SESSION['email'])){
		$details=$this->User_model->user_details();       	
		$xml=simplexml_load_file("file:///home/pi/MB/XML.xml") or die("Error: Cannot create object");
		if(isset($xml)){

			$media=$xml->NavBar;
			foreach($media->Items->Item as $medias){
				
				if($medias->Name==$navbar){
					
					$data=$medias;
				}
			}
			// print_r($data);die;
			foreach ($data->Categories->Category as $item){
				   foreach($item->Contents->Content as $details){
					  
					if(strtolower($details->genre)==strtolower($genre)){
						$movies['filter'][]=$details;
					}
				   }
				  
			}
			
		   $movies['navbar']=$media->Items->Item;
		  // print_r($data['navbar']);die;
		}
		else{
			 $this->load->view('error');
		}
		$movies['navbar_name']=$navbar;
		$movies['genre_name']=$genre;
		$movies['user_details']=$details;
		$movies['img']=0;
					 
	   $this->load->view('filter_ebook_genre',$movies);	
		
	}
	else{
	redirect('user/signup');
   }

}



public function videos($assetType,$category,$id){
    
      if(isset($_SESSION['email'])){
		$xml=simplexml_load_file("file:///home/pi/MB/XML.xml") or die("Error: Cannot create object");
		if(isset($xml)){
			$details=$this->User_model->user_details();       	
			$category=str_replace('%20',' ',$category);
			$assetType=str_replace('%20',' ',$assetType);
		
			$media=$xml->NavBar;
			$data[]=array();
			foreach($media->Items->Item as $medias){
				
				if($medias->Name==$assetType){
					$item_details=$medias;
				break;
				}			
		   }
		  
		   $play_video['navbar']=$media->Items->Item;
		   
		   foreach ($item_details->Categories->Category as $item){
			   if($item->Name==$category)
			     { 
				   $item_details=$item;
				 break;
				 }
		   }
		  
		   foreach($item_details->Contents->Content as $item){
			 if($item->id==$id){
				$play_video['data_filter']=$item;
			 }else{
				$play_video['suggestion'][]=$item;
			 }
		   }
		
		   $play_video['user_details']=$details;
		   $play_video['category']=$category;
		   $play_video['assetType']=$assetType;
		   $this->load->view('video_details',$play_video);
		  
		}
	  }		
   else{
	redirect('user/signup');
    }  
  
}


public function genre_videos($nav,$id){
	if(isset($_SESSION['email'])){
	  $xml=simplexml_load_file("file:///home/pi/MB/XML.xml") or die("Error: Cannot create object");
	  if(isset($xml)){
		  $details=$this->User_model->user_details();       	
		  $nav=str_replace('%20',' ',$nav);
		  $media=$xml->NavBar;
		  $data[]=array();
		  foreach($media->Items->Item as $medias){
			  
			  if($medias->Name==$nav){
				  $item_details=$medias;
			  break;
			  }			
		 }
		 $play_video['navbar']=$media->Items->Item;
		 foreach ($item_details->Categories->Category as $item){
			foreach($item->Contents->Content as $details){
				if($details->id==$id){
				   $play_video['data_filter']=$details;
				   break;
				}
			  }
		 }
		 
		   $play_video['user_details']=$details;
		   $play_video['nav_category']=$nav;
		   $this->load->view('player',$play_video);
		
	  }
	}		
 else{
  redirect('user/signup');
  }  

}
public function genre_musics($category,$id){
	if(isset($_SESSION['email'])){
	  $xml=simplexml_load_file("file:///home/pi/MB/XML.xml") or die("Error: Cannot create object");
	  if(isset($xml)){
		  $details=$this->User_model->user_details();       	
		  $category=str_replace('%20',' ',$category);
		  $media=$xml->NavBar;
		  $data[]=array();
		  foreach($media->Items->Item as $medias){
			  
			  if($medias->Name==$category){
				  $item_details=$medias;
			  break;
			  }			
		 }
		 $play_video['navbar']=$media->Items->Item;
		 foreach ($item_details->Categories->Category as $item){
			foreach($item->Contents->Content as $details){
				if($details->id==$id){
				   $play_video['data_filter']=$details;
				   break;
				}
			  }
		 }
		   
		   $play_video['user_details']=$details;
		   $play_video['category']=$category;
		   $play_video['count']=-1;
		   $play_video['i']=0;
		   $this->load->view('music_play',$play_video);
		
	  }
	}		
 else{
  redirect('user/signup');
  }  

}


public function play($category,$assetType,$id){
	if(isset($_SESSION['email'])){
		$xml=simplexml_load_file("file:///home/pi/MB/XML.xml") or die("Error: Cannot create object");
		if(isset($xml)){
			$details=$this->User_model->user_details();       	
			$category=str_replace('%20',' ',$category);
			$assetType=str_replace('%20',' ',$assetType);
			$media=$xml->NavBar;
			$data[]=array();
			foreach($media->Items->Item as $medias){
				
				if($medias->Name==$assetType){
					$item_details=$medias;
				break;
				}			
		   }
		   $play_video['navbar']=$media->Items->Item;
		   foreach ($item_details->Categories->Category as $item){
			   if($item->Name==$category)
			     { 
				   $item_details=$item;
				 break;
				 }
		   }
		   foreach($item_details->Contents->Content as $item){
			 if($item->id==$id){
				$play_video['data_filter']=$item;
			 break;
			 }
		   }
		   $play_video['user_details']=$details;
		   $play_video['assetType']=$assetType;
		   $play_video['category']=$category;
		   $this->load->view('player',$play_video);
		  
		}
	  }		
   else{
	redirect('user/signup');
    } 
	
}

public function filter_music($navbar){
	$genre=$this->input->post('genre');
	if(isset($_SESSION['email'])){
		$details=$this->User_model->user_details();       	
		$xml=simplexml_load_file("file:///home/pi/MB/XML.xml") or die("Error: Cannot create object");
		 
		

		if(isset($xml)){

			$media=$xml->NavBar;
			foreach($media->Items->Item as $medias){
				
				if($medias->Name==$navbar){
					
					$data=$medias;
				}
			}
			// print_r($data);die;
			foreach ($data->Categories->Category as $item){
				   foreach($item->Contents->Content as $details){
					  
					if(strtolower($details->genre)==strtolower($genre)){
						$movies['filter'][]=$details;
					}
				   }
				  
			}
			
		   $movies['navbar']=$media->Items->Item;
		  // print_r($data['navbar']);die;
		}
		else{
			 $this->load->view('error');
		}
		$movies['navbar_name']=$navbar;
		$movies['genre_name']=$genre;
		$movies['user_details']=$details;
				 
		$this->load->view('filter_music_genre',$movies);	
		
	}
	else{
	redirect('user/signup');
   }
   
}
//view movie
public function view_movie(){
    
	$data=array('movieID'=>$this->input->post('movie_id'),'assetType'=>$this->input->post('assetType'),'category'=>$this->input->post('category'),
	'mediaName'=>$this->input->post('mediaName'));
	$this->User_model->view_movie($data);
}
//recently played 
public function recently_movie(){
	     
	$data=array('title'=>$this->input->post('title'),'src'=>$this->input->post('src'),'current_time'=>$this->input->post('current_time')
	,'thumbnail'=>$this->input->post('thumbnail'),'category'=>$this->input->post('category'),
	'user_email'=>$this->session->userdata('email'),'movie_id'=>$this->input->post('movie_id'),
   'rate'=>$this->input->post('rate'),'navbar'=>$this->input->post('navbar'));
	$count=$this->User_model->check_recently_movie($data);
	
	
	if($count>0){
		$this->User_model->recently_movie_update($data); 
	}
	else{
	$this->User_model->recently_movie($data);
	}
    
}
public function recently_movie_play($time,$rate,$id){

	if(isset($_SESSION['email'])){

		$details=$this->User_model->user_details();       
		$xml=simplexml_load_file("file:///home/pi/MB/XML.xml") or die("Error: Cannot create object");
		if(isset($xml)){

			$media=$xml->NavBar;
			
		   $data['navbar']=$media->Items->Item;

		   $result=$this->User_model->getting_movie($id); 
		   $details=$this->User_model->user_details();   
		
		   $data['details_movie']=array('time'=>$result[0]->current_time,'title'=>$result[0]->title,'src'=>$result[0]->src,'category'=>$result[0]->category,'rate'=>$result[0]->rate,'assetType'=>$result[0]->navbar,'movie_id'=>$result[0]->movie_id,'thumbnail'=>$result[0]->thumbnail);
		   $data['user_details']=$details;
		   
		   $this->load->view('recently_movie',$data);
		}
		else{
			 $this->load->view('error');
		}
	}
	else{
			redirect('user/signup');
	}
	
    
}
public function play_music($genre,$category,$id){
	if(isset($_SESSION['email'])){
		$xml=simplexml_load_file("file:///home/pi/MB/XML.xml") or die("Error: Cannot create object");
		if(isset($xml)){
			$details=$this->User_model->user_details();       	
			$category=str_replace('%20',' ',$category);
			$genre=str_replace('%20',' ',$genre);
			$media=$xml->NavBar;
			$data[]=array();
			foreach($media->Items->Item as $medias){
				
				if($medias->Name==$genre){
					$item_details=$medias;
				break;
				}			
		   }
		   $play_video['navbar']=$media->Items->Item;
		   foreach ($item_details->Categories->Category as $item){
			   if($item->Name==$category)
			     { 
				   $item_details=$item;
				   break;
				 }
		   }
		   foreach($item_details->Contents->Content as $item){
			 if($item->id==$id){
				$play_video['data_filter']=$item;
			 }else{
				$play_video['suggestion'][]=$item;
			 }
		   }
	
		   $play_video['user_details']=$details;
		   $play_video['genre']=$genre;
		   $play_video['count']=-1;
		   $play_video['i']=0;
		   $play_video['category']=$category;
		   $this->load->view('music_play',$play_video);
		  
		}
	  }		
   else{
	redirect('user/signup');
    }  
  
		
}
//for user Profile
public function user_profile(){
	$details=$this->User_model->user_details();
       
	$user_details['user_details']=$this->User_model->user_details();
	
	$this->load->view('user_profile',$user_details);
}


//end User Profile

	public function dashboard(){
		$details['details']=$this->User_model->user_details();
        
		$this->load->view('play',$details);
	}

//For signin Purpose

     public function signin(){ 
		 
         $this->load->view('signin');
	
	}

	public function login(){ 
		  
		$email 	= $this->input->post('username');
		$password   = $this->input->post('password');
		
	
	
		$hashPassword = base64_encode($password);							
		$data = array(								
							'email'=>$email,
							
							'password'=>$hashPassword);
							
		$checkUser = $this->User_model->checkUser($data);
		$data=array('email'=>$checkUser[0]['email'],'mob'=>$checkUser[0]['mob'],'user_name'=>$checkUser[0]['user_name']);
		
		if(!empty($checkUser))
		{   
			$this->session->set_userdata($data);
			redirect('user');
		}
		else{
			redirect('user/signup');
		}

    } 
  public function logout(){
	
	$format = "%Y-%m-%d %h:%i %A";
	$datetime1 = new DateTime(mdate($format));
    $datetime2 = new DateTime($this->session->userdata('time'));
	$interval = $datetime1->diff($datetime2);
	if($interval->format('%h')==0){
		$time= $interval->format('%i')." Minutes";
	}
	else{
	$time= $interval->format('%h')." Hours ".$interval->format('%i')." Minutes";
	}
	$result=$this->storeing($time);
	if(!empty($result)){
        $this->session->sess_destroy();
      redirect('user/signup');
	}
	else{
		redirect('user');
	}
   
 	
}
//upcoming stops
public function upcoming_stops(){
	
	if(isset($_SESSION['email'])){    
		$xml=simplexml_load_file("/var/www/html/media/application/database/gps.xml") or die("Error: Cannot create object");
		
		if(isset($xml)){
			foreach($xml->journeyDetails->stopNames as $stopNames){
			   $data['stopNames']=$stopNames;
			}
		
			
        	$data['user_details']=$this->User_model->user_details();
	       $this->load->view('upcoming-stops.php',$data);	
		}
		else{
			 $this->load->view('error');
		}
	}
	else{
		redirect('user/signup');
	}
}
//End user Gps report
public function gpsreport(){
	
		$data = array(
			'mobile' =>$this->session->userdata('mob'),
			'emailId' =>$this->session->userdata('mob'),
			'username'=>$this->session->userdata('user_name'),
			'ipAddress'=>$this->session->userdata('ip'),
			'mediaBox' =>'media',
			'hoursOfConsumption'=>$time,	
		);
		
		$access_token='eyJhbGciOiJIUzUxMiJ9.eyJzdWIiOiJhZG1pbiIsImF1dGgiOiI1ZTNhNjAwZmYyODRmMzJkMDA5NWY5YzMsNWUzYTYwMGZmMjg0ZjMyZDAwOTVmOWM0LDVlM2E2MDBmZjI4NGYzMmQwMDk1ZjljNSw1ZTNhNjAwZmYyODRmMzJkMDA5NWY5YzYsNWUzYTYwMGZmMjg0ZjMyZDAwOTVmOWM3LDVlM2E2MDBmZjI4NGYzMmQwMDk1ZjljOCw1ZTNhNjAwZmYyODRmMzJkMDA5NWY5YzksNWUzYTYwMGZmMjg0ZjMyZDAwOTVmOWNhLDVlM2E2MDBmZjI4NGYzMmQwMDk1ZjljYiw1ZTNhNjAwZmYyODRmMzJkMDA5NWY5Y2MsNWUzYTYwMGZmMjg0ZjMyZDAwOTVmOWNkLDVlM2E2MDBmZjI4NGYzMmQwMDk1ZjljZSw1ZTNhNjAwZmYyODRmMzJkMDA5NWY5Y2YsNWUzYTYwMGZmMjg0ZjMyZDAwOTVmOWQwLDVlM2E2MDBmZjI4NGYzMmQwMDk1ZjlkMSw1ZTNhNjAwZmYyODRmMzJkMDA5NWY5ZDIsNWUzYTYwMGZmMjg0ZjMyZDAwOTVmOWQzLDVlM2E2MDBmZjI4NGYzMmQwMDk1ZjlkNCw1ZTNhNjAwZmYyODRmMzJkMDA5NWY5ZDUsNWUzYTYwMGZmMjg0ZjMyZDAwOTVmOWQ2LDVlM2E2MDBmZjI4NGYzMmQwMDk1ZjlkNyw1ZTNhNjAwZmYyODRmMzJkMDA5NWY5ZDgsNWUzYTYwMGZmMjg0ZjMyZDAwOTVmOWQ5LDVlM2E2MDBmZjI4NGYzMmQwMDk1ZjlkYSw1ZTNhNjAwZmYyODRmMzJkMDA5NWY5ZGIsNWUzYTYwMGZmMjg0ZjMyZDAwOTVmOWRjLEFERF9BU1NFVCxBRERfUk9MRSxBRERfVVNFUixERUxFVEVfQVNTRVQsREVMRVRFX1JPTEUsREVMRVRFX1VTRVIsRURJVF9ST0xFLEVESVRfVVNFUixPV05FUl9PRl9USEVfUFJPVklTSU9OSU5HX0RFVklDRSxWSUVXX0FMTF9ST0xFLFZJRVdfQUxMX1VTRVIiLCJleHAiOjE1ODMyMzAwNTR9.OXz9Z5BtzplqMPZvcvl0t6E93oGQ7GyxJCZfZssV-q4_2Uc9WQzm1Gwit5GLk_xZ3I4CabK567RiFoJXnE6qWg';
		$options = ["http" => [
			"method" => "POST",
			"header" => ["Authorization: Bearer ".$access_token,
				"Content-Type: application/json"],
			"content" => json_encode($data)
			]];
		$context = stream_context_create($options);
		$url='http://15.206.65.9:8081/oescms/api/v1/end-user-reports';
		//$url = preg_replace("/ /", "%20", $url);
		//$url = str_replace(" ", "%20", $url);
	
	$result = file_get_contents($url,false,$context);
	return $result;	
 	
}
//Editing user profile
public function edit_profile(){
	       	
	$config = array(
		'upload_path' => './uploads',
		'allowed_types' => 'jpg|jpeg|png|bmp',
		'max_width' => '1024',
		'max_height'=>'786',
		'filename' => url_title($this->input->post('userfile'))
		// 'encrypt_name' => true
	);
	
	$this->load->library('upload', $config);
	
	if ($this->upload->do_upload('avatar-2')) {
		$file_info = $this->upload->data();
	   $picture = $file_info['file_name'];
	
	}
	else{

	   $picture=null;
	   
	}    
	$hashPassword = base64_encode($this->input->post('password'));
            $userData = array(
                'user_name' => $this->input->post('username'),
				'mob' => $this->input->post('mob'),
				'picture' => $picture,
				'password'=>$hashPassword
            );
            
            //Pass user data to model
            $insertUserData = $this->User_model->edit_profile($userData);
            

}
//for register User	
	public function signup(){
		$this->load->view('signup');
	}
	
	public function register($email,$mobile,$username)
	{       
		    $format = "%Y-%m-%d %h:%i %A";
            $ip = $this->input->ip_address();
			$insertData = array('user_name'=>$username,								
								'email'=>$email,
								'mob'=>$mobile
                                
							   );
		    $sessionData = array('user_name'=>$username,								
							   'email'=>$email,
							   'mob'=>$mobile,
							   'time'=>mdate($format),
							   'ip' =>$ip
							   );				   
			$this->session->set_userdata($sessionData);
			
			$checkDuplicate = $this->User_model->checkDuplicate($insertData);
			
			if((int)$checkDuplicate==0)
			{  
				$insertUser = $this->User_model->insertUser($insertData);
				
				if($insertUser)
				{
					// $this->session->set_userdata($insertData);
                 redirect('user');
                  
				}
				else
				{
					redirect('user/signup');	
					
				}
			}
			else
			{    
				
				$updateUser = $this->User_model->updateUser($insertData);
				
				if($updateUser)
				{
				
                 redirect('user');
                  
				}
				else
				{
					redirect('user/signup');
					
				}
			}
	}
	
	
	
	
}
