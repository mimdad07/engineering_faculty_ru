<?php
	
	set_include_path(get_include_path() . PATH_SEPARATOR . 'ExcelRes/');
	include 'PHPExcel/IOFactory.php';
	
	$inputFileType = 'Excel5'; 
	$inputFileName = 'h11.xls';  

class chunkReadFilter implements PHPExcel_Reader_IReadFilter
{
	private $_startRow = 0;
	private $_endRow = 0;
 
	public function setRows($startRow, $chunkSize) {
		$this->_startRow	= $startRow;
		$this->_endRow		= $startRow + $chunkSize;
	}

	public function readCell($column, $row, $worksheetName = '') { 
		if ( ($row >= $this->_startRow && $row < $this->_endRow)) {
			return true;
		}
		return false;
	}
}
 
$objReader = PHPExcel_IOFactory::createReader($inputFileType);
$chunkSize = 2000; 
$chunkFilter = new chunkReadFilter();
 
$objReader->setReadFilter($chunkFilter);
 
for ($startRow = 1; $startRow <= 2000; $startRow += $chunkSize) { 
	$chunkFilter->setRows($startRow,$chunkSize); 
	$objPHPExcel = $objReader->load($inputFileName);
	$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
	
}
require("connection.php");
for( $i=1; $i<2000; $i++ )
{
	
   $sql="insert into tbl_admission ". 
   
  
   "values( '" .
    ""	.    $sheetData[$i][ 'A']  ."', '".$sheetData[$i][ 'B']  . "', '".$sheetData[$i][ 'C'] . "', '" . $sheetData[$i][ 'D'] . 
	"', '"	.$sheetData[$i][ 'E']  ."', '".$sheetData[$i][ 'F']  . "', '".$sheetData[$i][ 'G'] . "', '"  .$sheetData[$i][ 'H'] . 
	"', '"	.$sheetData[$i][ 'I']  ."', '".$sheetData[$i][ 'J']  . "', '".$sheetData[$i][ 'K'] . "', '"  .$sheetData[$i][ 'L'] . 
	"', '"	.$sheetData[$i][ 'M']  ."', '".$sheetData[$i][ 'N']  . "', '".$sheetData[$i][ 'O'] . "', '"  .$sheetData[$i][ 'P'] . 
	"', '"	.$sheetData[$i][ 'Q']  ."', '".$sheetData[$i][ 'R']  . "', '".$sheetData[$i][ 'S'] . "', '"  .$sheetData[$i][ 'T'] . 
	"', '"	.$sheetData[$i][ 'U']  ."', '".$sheetData[$i][ 'V']  . "', '".$sheetData[$i][ 'W'] . "', '"  .$sheetData[$i][ 'X'] . 
	"', '"	.$sheetData[$i][ 'Y']  ."', '".$sheetData[$i][ 'Z']  . "', '".$sheetData[$i][ 'AA'] . "', '" . $sheetData[$i][ 'AB'] . 
	"', '"	.$sheetData[$i][ 'AC']  ."', '".$sheetData[$i][ 'AD']  . "', '".$sheetData[$i][ 'AE'] . "', '" . $sheetData[$i][ 'AF'] . 
	"', '"	.$sheetData[$i][ 'AG']  ."', '".$sheetData[$i][ 'AH']  . "', '".$sheetData[$i][ 'AI'] . "', '"  .$sheetData[$i][ 'AJ'] . 
	"', '"	.$sheetData[$i][ 'AK']  ."', '".$sheetData[$i][ 'AL']  . "', '".$sheetData[$i][ 'AM'] . "', '" . $sheetData[$i][ 'AN'] .
	"', '"	.$sheetData[$i][ 'AO']  .    
   
   
   "' )";
   mysql_query($sql);
    
//   echo $sheetData[$i][ 'K'];
}
?>