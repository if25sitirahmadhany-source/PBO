<?php

namespace PBO\Marketplace;

require_once('./PropertyConstan.php');
use PBO\Marketplace\produk;

class Jasa{
    use produk;
    public function payment($tipe) {
        return match ($tipe) {
            "virtual" => "Payment via virtual account",
            "qris" => "QRIS",
            default => "hanya bisa va dan qris"
        };

    }
}
