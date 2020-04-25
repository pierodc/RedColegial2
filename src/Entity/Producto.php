<?php

namespace App\Entity;

use App\Entity\Connection_db;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductoRepository")
 */
class Producto
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nombre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Descripcion;

    /**
     * @ORM\Column(type="integer")
     */
    private $Existencia;


	public function __construct(){//
			$this->con = new Connection();
		}

	public function view_all(){
		$sql = "SELECT * FROM Produnto";
		$datos = $this->con->consultaRetorno_row($sql);
		return $datos;
		}
		
	
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->Nombre;
    }

    public function setNombre(string $Nombre): self
    {
        $this->Nombre = $Nombre;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->Descripcion;
    }

    public function setDescripcion(?string $Descripcion): self
    {
        $this->Descripcion = $Descripcion;

        return $this;
    }

    public function getExistencia(): ?int
    {
        return $this->Existencia;
    }

    public function setExistencia(int $Existencia): self
    {
        $this->Existencia = $Existencia;

        return $this;
    }
}
