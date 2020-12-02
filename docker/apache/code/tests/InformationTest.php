<?php

require_once 'vendor/autoload.php';
require('class.information.php');
use PHPUnit\Framework\TestCase;
class PersonneTest extends TestCase {
    public function testCanBeUsedAsString(): void
    {
        $unePersonne = new Personne('Georges','Catherine','36');
        echo "\r\nTest Réussi\r\nPersonne : \r\nNom :".$unePersonne->Nom()."\r\nPrenom:".$unePersonne->Prenom()."\r\nAge:".$unePersonne->Age().".\r\n";
        $this->assertEquals(
            ctype_alpha('Michel'),
            ctype_alpha(''.$unePersonne->Nom().'')
        );
        $this->assertEquals(
            ctype_alpha('Corentin'),
            ctype_alpha(''.$unePersonne->Prenom().'')
        );
        $this->assertEquals(
            ctype_digit('26'),
            ctype_digit(''.$unePersonne->Age().'')
        );
    }
    public function testCanNotBeUsedAsString(): void
    {
        $unePersonne = new Personne('45','69','Harry');
        echo "\r\nTest échoué\r\nPersonne : \r\nNom :".$unePersonne->Nom()."\r\nPrenom:".$unePersonne->Prenom()."\r\nAge:".$unePersonne->Age().".\r\n";
        $this->assertEquals(
            ctype_alpha('Michel'),
            ctype_alpha(''.$unePersonne->Nom().'')
        );
        $this->assertEquals(
            ctype_alpha('Corentin'),
            ctype_alpha(''.$unePersonne->Prenom().'')
        );
        $this->assertEquals(
            ctype_digit('26'),
            ctype_digit(''.$unePersonne->Age().'')
        );
    }
}
?>