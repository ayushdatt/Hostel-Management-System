<?php
        $i=0;
        $complete_user=phpCAS::getuser();
        while($complete_user[$i]!='@')
                $i++;
        $user_name=substr($complete_user,0,$i);
?>
<html>
<style type="text/css">

.menucontainer
{
        position : absolute; 
	position:fixed;
        width : 100%;
        background-color :#0060a7;
        top : 0px;
        left: 0px;
	padding-top:5px;
	padding-bottom:5px;
}
.menu
{
        list-style : none;
        margin-top: 4px;
}
.menu li a
{
        display : inline;
        padding-left : 10px;
        padding-right : 10px;
        font-family : helvetica;
        font-size : 10pt;
        color : #FFFFFF;
        text-decoration : none;
}

/*table.menutable
{

display:block;
margin-right:auto;
margin-left:auto;
}*/
table.menutable td
{
        font-family : helvetica;
        font-size : 10pt;
        color : #FFFFFF;
        text-decoration : none;
	text-align:center;
}
.text-label {
	color: #cdcdcd;
}
.menutd a
{
	display:block;
padding:2px;
border:1px solid #0060a7;
}

.menutd a:hover
{
border:1px solid #e5e5e5;
-moz-border-radius:4px;
-webkit-border-radius:5px; 
	-khtml-border-radius: 5px; 
	border-radius:5px;
-moz-box-shadow:0px 0px 6px #e5e5e5;
-webkit-box-shadow:0px 0px 6px #e5e5e5;
-khtml-box-shadow:0px 0px 6px #e5e5e5;
box-shadow:0px 0px 6px #e5e5e5;
}
table.menutable td a
{
        font-family : helvetica;
        font-size : 10pt;
        color : #FFFFFF;
        text-decoration : none;
}
</style>
<div class = "menucontainer">
<table width='95%' cellpadding='2px;' class="menutable">
<tr width='100%'>
<td width='2%'></td>
<td  class='menutd'>
<a href = "index.php">Home</a>
</td>
<td class='menutd'>
<a href = "#">Complaints</a>
</td>
<td  class='menutd'>
<a href = "#">Campus/Hostel News</a>
</td>
<td width='45%'></td>
<td style='text-align:right;'>
<a href="personal_form/index.php">
<?php 
echo $user_name ;
?>
</a>
</td>
<td style='text-align:right;'>
<form action="/EdgeNet/search.php" style="display:inline"><input type="text" name="search" size="14" title="Search .." /></form>
</td>
<td class='menutd' >
<a href ="logout.php">Logout</a>
</td>
<td class='menutd' >
<a href = "#">Help(S)</a>
</td>
</tr>
</table>
</div>
</html>
