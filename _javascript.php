<?php

setcookie("name", "saman", time()+3600);
setcookie("name", "Gamini", time()+3600);

setcookie("name", "Gamini", time()-3600);

?>


<!DOCTYPE html>
<html>
<body>
<FORM>
<INPUT TYPE="text" VALUE= "20" onChange= "alert('Please dont change this value')">
</FORM>
</body>
</html>