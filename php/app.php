<?php
class Makanan
{
    public $bakwan;
    public $risol;
    public $jml_bakwan;
    public $jml_risol;
    public $harga_bakwan;
    public $harga_risol;
    public $total_harga;
    public $catatan;

    function __construct()
    {
        $this->bakwan = 2000;
        $this->risol = 1000;
    }
}

class Pesanan extends Makanan
{
    public function Order($bakwan = null, $risol = null, $catatan = null)
    {
        $this->jml_bakwan = $bakwan;
        $this->jml_risol = $risol;
        $this->catatan = $catatan;
    }

    public function TotalHarga()
        {
            $this->harga_bakwan = $this->jml_bakwan * $this->bakwan;
            $this->harga_risol = $this->jml_risol * $this->risol;
            $this->total_harga = $this->harga_bakwan + $this->harga_risol;
        }

    public function CetakStruk()
    {
        echo "
        <p class='bg-dark text-light ps-2'>
                ***** Kantin Wikrama *****
                <br>
                Bakwan $this->jml_bakwan x @$this->bakwan = Rp. $this->harga_bakwan
                <br>
                Risol $this->jml_risol x @$this->risol = Rp. $this->harga_risol
                <br>
                Catanan : $this->catatan
                <br><br>
                Total Bayar : Rp. $this->total_harga
                <br>
                ***** Terima Kasih *****
            </p>
        ";
    }
}

?>