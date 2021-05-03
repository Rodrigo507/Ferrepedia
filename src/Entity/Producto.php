<?php

namespace App\Entity;

use App\Repository\ProductoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductoRepository::class)
 */
class Producto
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombre_prod;

    /**
     * @ORM\Column(type="integer")
     */
    private $cantidad_prod;

    /**
     * @ORM\Column(type="text")
     */
    private $descripcion_prod;

    /**
     * @ORM\Column(type="float")
     */
    private $precio;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $foto_prod;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreProd(): ?string
    {
        return $this->nombre_prod;
    }

    public function setNombreProd(string $nombre_prod): self
    {
        $this->nombre_prod = $nombre_prod;

        return $this;
    }

    public function getCantidadProd(): ?int
    {
        return $this->cantidad_prod;
    }

    public function setCantidadProd(int $cantidad_prod): self
    {
        $this->cantidad_prod = $cantidad_prod;

        return $this;
    }

    public function getDescripcionProd(): ?string
    {
        return $this->descripcion_prod;
    }

    public function setDescripcionProd(string $descripcion_prod): self
    {
        $this->descripcion_prod = $descripcion_prod;

        return $this;
    }

    public function getPrecio(): ?float
    {
        return $this->precio;
    }

    public function setPrecio(float $precio): self
    {
        $this->precio = $precio;

        return $this;
    }

    public function getFotoProd(): ?string
    {
        return $this->foto_prod;
    }

    public function setFotoProd(?string $foto_prod): self
    {
        $this->foto_prod = $foto_prod;

        return $this;
    }
}
