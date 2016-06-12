# jsKeylogger

jsKeylogger is a small script coded in javascript, which once inserted on his web page it is going to record the keys typed on the keyboard.
The typed keys are send to the script coded in php (can be hosted on an external server) which will encrypt the typed keys in binary code and insert all into an image file (jpg)
Next, a cron job*** is created is created to decrypt the datas insert into an image and then having the possibility to read the datas. 

* * index.php (Demo)
* ** get-log.php 
* *** cron-log.php
