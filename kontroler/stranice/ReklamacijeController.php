<?php

require_once __DIR__ . '/../../tehnoloskeKlase/BaznaKonekcija.php';
require_once __DIR__ . "/../../repozitorijumi/ReklamacijaRepozitorijum.php";
require_once __DIR__ . "/../../repozitorijumi/DrustvenaIgraRepozitorijum.php";

class ReklamacijeController
{
    private $KonekcijaObject;
    private $konekcija;
    private $baza;
    private $ReklamacijaRepozitorijum;
    private $DrustvenaIgraRepozitorijum;

    public function __construct()
    {
        $this->KonekcijaObject = new Konekcija(__DIR__ . '/../../tehnoloskeKlase/BaznaParametriKonekcije.xml');
        $this->KonekcijaObject->connect();

        $this->konekcija = $this->KonekcijaObject->konekcijaDB;
        $this->baza = $this->KonekcijaObject->KompletanNazivBazePodataka;

        $this->ReklamacijaRepozitorijum = new ReklamacijaRepozitorijum($this->konekcija, $this->baza);
        $this->DrustvenaIgraRepozitorijum = new DrustvenaIgraRepozitorijum($this->konekcija, $this->baza);
    }

    public function DajSveReklamacije()
    {
        return $this->ReklamacijaRepozitorijum->DajSveReklamacije();
    }

    public function DajReklamacijePoFilteru($brojReklamacije, $datumReklamacije, $dobavljac)
    {
        return $this->ReklamacijaRepozitorijum->DajReklamacijePoFilteru($brojReklamacije, $datumReklamacije, $dobavljac);
    }

    public function DajReklamacijuPoID($IDReklamacije)
    {
        return $this->ReklamacijaRepozitorijum->DajReklamacijuPoID($IDReklamacije);
    }

    public function DajReklamacijuPoBrojuReklamacije($brojReklamacije)
    {
        return $this->ReklamacijaRepozitorijum->DajReklamacijuPoBrojuReklamacije($brojReklamacije);
    }

    public function DajStavkeReklamacije($IDReklamacije)
    {
        return $this->ReklamacijaRepozitorijum->DajStavkeReklamacije($IDReklamacije);
    }

    public function DajDrustveneIgreZaReklamaciju()
    {
        return $this->DrustvenaIgraRepozitorijum->DajSveDrustveneIgreZaReklamaciju();
    }

    public function DajReklamacijeSaStavkama($rezultatReklamacije)
    {
        return $this->ReklamacijaRepozitorijum->DajReklamacijeSaStavkama($rezultatReklamacije);
    }

    public function DajReklamacijaRepozitorijum()
    {
        return $this->ReklamacijaRepozitorijum;
    }

    public function IgraPostojiUKatalogu($sifraIgre)
    {
        return $this->ReklamacijaRepozitorijum->IgraPostojiUKatalogu($sifraIgre);
    }

    public function PostojiBrojReklamacije($brojReklamacije)
    {
        return $this->ReklamacijaRepozitorijum->PostojiBrojReklamacije($this->KonekcijaObject, $brojReklamacije);
    }

    public function PostojiBrojReklamacijeOsim($brojReklamacije, $IDReklamacije)
    {
        return $this->ReklamacijaRepozitorijum->PostojiBrojReklamacijeOsim($this->KonekcijaObject, $brojReklamacije, $IDReklamacije);
    }

    public function SnimiNovuReklamaciju($reklamacijaEntitet)
    {
        return $this->ReklamacijaRepozitorijum->SnimiNovuReklamaciju($this->KonekcijaObject, $reklamacijaEntitet);
    }

    public function IzmeniReklamaciju($IDReklamacije, $brojReklamacije, $datumReklamacije, $dobavljac, $napomena, $stavkeZaSnimanje)
    {
        return $this->ReklamacijaRepozitorijum->IzmeniReklamaciju(
            $this->KonekcijaObject,
            $IDReklamacije,
            $brojReklamacije,
            $datumReklamacije,
            $dobavljac,
            $napomena,
            $stavkeZaSnimanje
        );
    }

    public function ObrisiReklamaciju($IDReklamacije)
    {
        return $this->ReklamacijaRepozitorijum->ObrisiReklamaciju($this->KonekcijaObject, $IDReklamacije);
    }

    public function StavkaPripadaReklamaciji($IDStavkeReklamacije, $IDReklamacije)
    {
        return $this->ReklamacijaRepozitorijum->StavkaPripadaReklamaciji($IDStavkeReklamacije, $IDReklamacije);
    }

    public function DajKonekcijaObject()
    {
        return $this->KonekcijaObject;
    }

    public function ZatvoriKonekciju()
    {
        $this->KonekcijaObject->disconnect();
    }
}

?>
