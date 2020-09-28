<?php 
$bilangan1=$_GET['bilangan1'];
$bilangan2=$_GET['bilangan2'];
$operasi=$_GET['operasi'];

		switch ($operasi) {
			case 'tambah':
				$hasil = $bilangan1+$bilangan2;
			break;
			case 'kurang':
				$hasil = $bilangan1-$bilangan2;
			break;
			case 'kali':
				$hasil = $$bilangan1*$bilangan2;
			break;
			case 'bagi':
				$hasil = $bilangan1/$bilangan2;
			break;			
        
      		default:
			echo "tidak ditemukan";
		break;
}
echo "bilangan 1 adalah $bilangan1 <br>";
echo "bilangan 2 adalah $bilangan2 <br>";
echo "hasil dari $bilangan1 $operasi $bilangan2 adalah $hasil";
?>
