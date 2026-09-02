<?php
require_once __DIR__ . '/../../tehnoloskeKlase/BaznaKonekcija.php';
require_once __DIR__ . '/../../tehnoloskeKlase/BaznaTabela.php';
require_once __DIR__ . '/../../repozitorijumi/DBKategorijaIgre.php';
require_once __DIR__ . '/../../repozitorijumi/DBDrustvenaIgra.php';
require_once __DIR__ . '/../../repozitorijumi/DBDrustvenaIgraV.php';
require_once __DIR__ . '/../../repozitorijumi/DrustvenaIgraRepozitorijum.php';

class DrustveneIgreController
{
    private $KonekcijaObject;
    private $konekcija;
    private $baza;
    private $DrustvenaIgraRepozitorijum;

    public function __construct()
    {
        $this->KonekcijaObject = new Konekcija(__DIR__ . '/../../tehnoloskeKlase/BaznaParametriKonekcije.xml');
        $this->KonekcijaObject->connect();
        $this->konekcija = $this->KonekcijaObject->konekcijaDB;
        $this->baza = $this->KonekcijaObject->KompletanNazivBazePodataka;
        $this->DrustvenaIgraRepozitorijum = new DrustvenaIgraRepozitorijum($this->konekcija, $this->baza);
    }

    public function DajKategorijeIgre()
    {
        $kategorijaObject = new DBKategorijaIgre($this->KonekcijaObject, 'kategorija_igre');
        $kategorijaObject->UcitajKolekcijuSvihKategorijaIgre();
        return $kategorijaObject;
    }

    public function DajSveKategorijeIgre()
    {
        return $this->DajKategorijeIgre();
    }

    public function DajSveDrustveneIgre($filter = null)
    {
        $viewObject = new DBDrustvenaIgraV($this->KonekcijaObject, 'svipodacioidrutvenimigramasaslikom');
        $viewObject->DajSvePodatkeODrustvenimIgrama($filter, 'svipodacioidrutvenimigramasaslikom');
        return $viewObject;
    }

    public function DajDrustvenuIgruPoSifri($sifraIgre)
    {
        $igraObject = new DBDrustvenaIgra($this->KonekcijaObject, 'drustvena_igra');
        $igraObject->UcitajDrustvenuIgruPoSifri($sifraIgre);
        return $igraObject;
    }

    public function DajDrustvenuIgruZaIzmenu($sifraIgre)
    {
        return $this->DajDrustvenuIgruPoSifri($sifraIgre);
    }

    public function SnimiNovuDrustvenuIgru($sifraIgre, $naziv, $proizvodjac, $oznakaKategorije, $nazivFajlaSlike)
    {
        return $this->DrustvenaIgraRepozitorijum->SnimiNovuDrustvenuIgru(
            $this->KonekcijaObject,
            $sifraIgre,
            $naziv,
            $proizvodjac,
            $oznakaKategorije,
            $nazivFajlaSlike
        );
    }

    public function SnimiNovuDrustvenuIgruSP($sifraIgre, $naziv, $proizvodjac, $oznakaKategorije, $nazivFajlaSlike)
    {
        return $this->DrustvenaIgraRepozitorijum->SnimiNovuDrustvenuIgruSP(
            $this->KonekcijaObject,
            $sifraIgre,
            $naziv,
            $proizvodjac,
            $oznakaKategorije,
            $nazivFajlaSlike
        );
    }

    public function IzmeniDrustvenuIgru($staraSifra, $sifraIgre, $naziv, $proizvodjac, $oznakaKategorije, $nazivFajlaSlike)
    {
        return $this->DrustvenaIgraRepozitorijum->IzmeniDrustvenuIgru(
            $this->KonekcijaObject,
            $staraSifra,
            $sifraIgre,
            $naziv,
            $proizvodjac,
            $oznakaKategorije,
            $nazivFajlaSlike
        );
    }

    public function ObrisiDrustvenuIgru($sifraIgre)
    {
        return $this->DrustvenaIgraRepozitorijum->ObrisiDrustvenuIgru($this->KonekcijaObject, $sifraIgre);
    }

    public function PostojiSifraIgre($sifraIgre)
    {
        return $this->DrustvenaIgraRepozitorijum->PostojiSifraIgre($sifraIgre);
    }

    public function ZatvoriKonekciju()
    {
        $this->KonekcijaObject->disconnect();
    }
}
?>
