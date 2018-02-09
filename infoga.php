<?php
// gausah ganti copyright kalo mau di hargai
// 99syndicate - Anon Cyber Team
@system("apt-get install curl ; clear");
$blue="\033[0;34";
$cyan="\033[0;36m";
$green="\033[0;34m";
$okegreen="\033[92m";
$lightgreen="\033[1;32m";
$white="\033[1;37m";
$red="\033[1;31m";
$yellow="\033[1;33m";
print "$red [ =========================================================================== ]\n";
print "$red  --> INFORMATION GATHERING v1.2<--\n";
print "$red  -==Coded by Mr. Cakil 99syndicate ==-\n";
print "$white  -= blog : http://99-syndicate.blogspot.com =-\n";
print "$white --> usage: php namafile.php <--\n";
print "$white [ ===========================================================================]\n\n
  [$red 1 $white] Whois Lookup
  [$red 2 $white] Traceroute
  [$red 3 $white] DNS Lookup
  [$red 4 $white] Reverse DNS Lookup
  [$red 5 $white] GeoIP Lookup
  [$red 6 $white] Port Scan
  [$red 7 $white] Reverse IP Lookup
  [$red 99 $white] exit\n";
echo "pilihan => "; $cakil=trim(fgets(STDIN));
if($cakil=="1"){
	echo "masukan ip or domain : "; $whois=trim(fgets(STDIN));
	@system("curl http://api.hackertarget.com/whois/?q=$whois");
	echo "done";
}
elseif($cakil=="2"){
		echo "masukan ip or domain : "; $traceroute=trim(fgets(STDIN));
			@system("curl https://api.hackertarget.com/mtr/?q=$traceroute");
			echo "done!";
}
elseif($cakil=="3"){
		echo "masukan ip or domain : "; $dns=trim(fgets(STDIN));
         @system("curl http://api.hackertarget.com/dnslookup/?q=$dns");
		 echo "done!";
}
elseif($cakil=="4"){
		echo "masukan ip or domain : "; $rev=trim(fgets(STDIN));
      @system("curl https://api.hackertarget.com/reversedns/?q=$rev");
	   echo "done!";
}
elseif($cakil=="5"){
		echo "masukan ip or domain : "; $geo=trim(fgets(STDIN));
		@system("curl http://api.hackertarget.com/geoip/?q=$geo");
		echo "done";
}
elseif($cakil=="6"){
	echo "masukan ip or domain : "; $port=trim(fgets(STDIN));
	@system("curl http://api.hackertarget.com/nmap/?q=$port");
	echo "done";
}
elseif($cakil=="7"){
	echo "masukan ip or domain : "; $revip=trim(fgets(STDIN));
	@system("wget http://api.hackertarget.com/reverseiplookup/?q=$revip ; clear ; curl http://api.hackertarget.com/reverseiplookup/?q=");
	echo "file saved gan ";
	@system("pwd");
	echo "File : index.html?q=$revip";
}
elseif($cakil=="99"){
echo "terima kasih mastah udah makai tools saya :) ";
@system("sleep 4 ; clear");
}
?>
