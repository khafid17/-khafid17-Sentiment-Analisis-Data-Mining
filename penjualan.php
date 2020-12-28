<?php
session_start();
require_once 'vendor/autoload.php';

use Phpml\regression\LeastSquares;
use Phpml\Dataset\CsvDataset;

$samples = [];
$targets = [];

$dataset = new CsvDataset('sales.csv',2,false);

$samples = $dataset->getSamples();
$targets = $dataset->getTargets();

$regression = new LeastSquares;
$regression->train($samples, $targets);

?>
<strong>Peramalan Penjualan Produk Sales<strong></p>
<form id="form1" name="Form1" menthod="post" action="">
    Tahun : <input name="th" type="text" id="th"/>
    Tahun : <input name="text" type="bl" id="bl"/>
    <input type="submit" name="button" id="button" value="prediksi"/>
</form>

<?php
if(isset ($_POST["th"])) {$tahun = $_POST["th"]; } else { $tahun = 2019;}
if(isset ($_POST["bl"])) {$bulan = $_POST["bl"]; } else {$bulan = 8;}

$hasil = $regression->predict([$tahun, $bulan]);
echo 'Hasil Penjualan Produk pada tahun '.$tahun."bulan".$bulan."
adalah banyak : <br>".round($hasil,2)."<b>"
?>

