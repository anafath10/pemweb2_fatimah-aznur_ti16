<?php
require_once './class_account.php';

class AccountBank extends Account
{
    public function doTransfer($destination, $uangTranfer)
    {
        Account::withdraw($uangTranfer, false);
        $destination->deposit($uangTranfer, false);

        echo "Transfer sejumlah " .  number_format($uangTranfer, 2, ',', '.') . " dari $this->nama - $this->nomor ke $destination->nama - $destination->nomor sukses! </br>";
    }
}


$fatimah = new AccountBank('0112', 'fatimah', 500000);
$aznur = new AccountBank('2810', 'aznur', 0);
$rani = new AccountBank('1909', 'rani', 0);

$fatimah->deposit(1000000);
$fatimah->cetak();

$fatimah->doTransfer($aznur, 1000000);
$fatimah->cetak();

$fatimah->doTransfer($rani, 500000);
$fatimah->cetak();