<?php

session_start();
require_once 'vendor/autoload.php';

use Phpml\Regression\LeastSquares;
use Phpml\Dataset\CsvDataset;

$samples = [];
$targets = [];

$dataset = new CsvDataset('sales.csv',2,false);

$samples = $dataset->getSamples();
$targets = $dataset->getTargets();

$regression = new LeastSquares();
$regression->train($samples, $targets);

?>

<strong>Peramalan Penjualan Produk Sampo</strong></p>
<form id="form1" name="form1" method="post" action="">
    Tahun : <input name="th" type="text" id="th" />
    Bulan : <input type="text" name="bl" id="bl" />
    <input type="submit" name="button" id="button" value="Prediksi" />
</form>

<?php

if(isset ($_POST["th"])) { $tahun = $_POST["th"]; } else { $tahun = 2019; }
if(isset ($_POST["bl"])) { $bulan = $_POST["bl"]; } else { $bulan = 8; }

$hasil = $regression->predict([$tahun, $bulan]);
echo 'Hasil Penjualan Produk Pada Tahun '.$tahun." bulan "
    .$bulan."adalah sebanyak : <b>".round($hasil,2)."<b>";

?>