<?php
// ● “w” – Opens a file for write-only mode. If a file does not exist then a new file is created and if the file already exists then the contents of the file are erased.
// ● “r” – The file is opened for read-only mode.
// ● “a” – File is opened for write-only mode. The file pointer points to the end of the file. Existing data in the file is preserved.
// ● “w+” – Opens the file for read and write mode. If a file does not exist then a new file is created and if the file already exists then the contents of the file are erased.
// ● “r+” – The file is opened for read/write mode.
// ● “a+” – The file is opened for write/read mode. The file pointer points to the end of the file. Existing data in the file is preserved. If the file is not there then a new file is created.
// ● “x” – New file is created for write-only mode. 

$my_file = fopen( "ds.txt",  'r');
//..other code
fclose(stream: $my_file);

//fread

//set the name of file to be opened
$my_filename = "ds.txt";

//open the file for reading
$my_file = fopen($my_filename, 'r');

//get the size of the file
$my_size = filesize($my_filename);

//read the contents of the file into a variable
$my_filedata = fread( $my_file,  $my_size);

//feof
//Open the file'excample.txt; for reading  using the fopen function
$file = fopen('example.txt' ,'r');

//use a whileloop to read each  line of the file using fgets  and print it to the screen with echo
while(!feof(stream: $file)){
    echo fgets(stream: ($file), length: "<br>");

//close the file using fclose
fcloese(stream: $file);
}


//fwrite

$my_file1 = fopen(filename: 'ds.txt', mode: 'w');

//set the text to be written to the file
$my_text = "digital School";


fwite($ny_file1, $my_text);
//file_put_contents
//create a new file and a new twxt
file_put_contents('test.txt','Add some text in here');
echo file_get_contents('test.txt');




?>