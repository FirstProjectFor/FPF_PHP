<?php
interface Writer{
	public function Write(string $data);
}

class MySqlDb implements Writer {
	public function Write(string $data){
		echo "data: ". $data. "\n";
	}
}


function writeData(Writer $w, string $data){
	$w->Write($data);
}

$mySql = new MySqlDb();

writeData($mySql, "ZhangSan");

?>
