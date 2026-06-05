<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'materias')]
class Materia
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 15)]
    private ?string $sigla = null;

    #[ORM\Column(length: 100)]
    private ?string $nombre = null;

    #[ORM\Column(nullable: true)]
    private ?int $nota = null;
}