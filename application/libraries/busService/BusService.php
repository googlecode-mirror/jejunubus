<?
class BusService{
	
	var $goUpBus = array(800, 812, 824, 836, 848, 900, 912, 924, 936, 948,
					1000, 1012, 1024, 1036, 1048, 1100, 1112, 1124, 1136, 1148, 
					1212, 1236, 1300, 1324, 1348, 1400, 1412, 1424, 1436, 1448, 
					1500, 1512, 1524, 1536, 1548, 1600, 1612, 1624, 1636, 1648, 
					1715, 1730, 1800, 1810, 1820, 1830, 1840, 1850);
			
	var $goDownBus = array(812, 824, 836, 848, 900, 912, 924, 936, 948, 1000, 
					1012, 1024, 1036, 1048, 1100, 1112, 1124, 1136, 1148, 1200, 
					1224, 1248, 1312, 1336,	1400, 1412, 1424, 1436, 1448, 1500, 
					1512, 1524, 1536, 1548, 1600, 1612, 1624, 1636, 1648, 1700, 
					1745, 1800, 1810, 1820, 1830, 1840, 1850, 1900);
	
	var $stopByDormi = array(836, 848, 900, 912, 1648, 1700, 1745, 1800);
	
	var $libBus = array(2405);
	
	function __construct(){
		$ci=&get_instance();
		$ci->load->model('Bus');
	}
	
	function getGoUpBusSchedule(){
		return $this->getBusByVariable("등산", $this->goUpBus);
	}
	
	function getGoDownBusSchedule(){
		return $this->getBusByVariable("하산", $this->goDownBus, $this->stopByDormi);
	}
	function getLibBusSchedule(){
		return $this->getBusByVariable("도서관", $this->libBus);
	}
	
	private function getBusByVariable($name, $busArray, $excpBusArray=array('')){
		$goBus;
		$goBus['name'] = $name;
		
		$busArrayLength = sizeof($busArray);
		$busExcpLength = sizeof($excpBusArray);
				
		for($i=0, $j=0; $i<$busArrayLength; $i++){
			$bus = new Bus();
			$stopByDorymitory = FALSE;
			
			$j = ($j < $busExcpLength)? $j : $busExcpLength-1;
			
			if($busArray[$i] == $excpBusArray[$j]){
				$j++;
				$stopByDorymitory = TRUE;
			}
			
			$bus->setTime($busArray[$i], $stopByDorymitory);
			$goBus[$i] = $bus;
		}
		return $goBus;
	}
}
