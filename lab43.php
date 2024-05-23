<!-- working with csv file -->
<?php
$filename='example.csv';
$file=fopen($filename,'r');
//read and parse csv data
while(($row=fgetcsv($file))!==false){
  //$row is an array containing the csv fieldsfor the current row
  print_r($row);
}
fclose($file);
?>
<!-- writing data to csv files in php -->
<?php
$filename='output.csv';
$file=fopen($filename,'w');
//data to write to the csv file
$data=[
    ['sanskriti','shrestha','www.google.com'],
    ['daisy','lee','daisy@mail.com']
];
//write data to the csv file
foreach($data as $row){
    fputcsv($file,$row);
}
fclose($file);
echo "Data written to name sucessfully";
?>