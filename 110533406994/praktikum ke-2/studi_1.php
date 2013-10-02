<?php

function selamat ($waktu, $greet="")
{
	if ($waktu>=0 && $waktu<=10)
	{$greet = "selamat pagi";}
	elseif ($waktu>=11 && $waktu<=15)
	{$greet = "selamat Siang";}
	elseif ($waktu>=16 && $waktu<=18)
	{$greet = "selamat Sore";}
	elseif ($waktu>=19 && $waktu<=24)
	{$greet = "selamat Malem";}
	else
	{$greet = "waktu salah";}
	return($greet);	
}
echo selamat(0);
?>