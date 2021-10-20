<?php

namespace App\Entity;

use App\Repository\UserInfoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserInfoRepository::class)
 */
class UserInfo
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $user_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $hobby_id;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $birthday;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0, nullable=true)
     */
    private $taille;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $Hair_color;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $eyes;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $poids;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $lf_sexe;

    /**
     * @ORM\Column(type="integer")
     */
    private $lf_min_age;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $lf_max_age;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getHobbyId(): ?int
    {
        return $this->hobby_id;
    }

    public function setHobbyId(int $hobby_id): self
    {
        $this->hobby_id = $hobby_id;

        return $this;
    }


    public function getBirthday(): ?string
    {
        return $this->birthday;
    }

    public function setBirthday(?string $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }

    public function getTaille(): ?string
    {
        return $this->taille;
    }

    public function setTaille(?string $taille): self
    {
        $this->taille = $taille;

        return $this;
    }

    public function getHairColor(): ?string
    {
        return $this->Hair_color;
    }

    public function setHairColor(?string $Hair_color): self
    {
        $this->Hair_color = $Hair_color;

        return $this;
    }

    public function getEyes(): ?string
    {
        return $this->eyes;
    }

    public function setEyes(?string $eyes): self
    {
        $this->eyes = $eyes;

        return $this;
    }

    public function getPoids(): ?int
    {
        return $this->poids;
    }

    public function setPoids(?int $poids): self
    {
        $this->poids = $poids;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getLfSexe(): ?bool
    {
        return $this->lf_sexe;
    }

    public function setLfSexe(?bool $lf_sexe): self
    {
        $this->lf_sexe = $lf_sexe;

        return $this;
    }

    public function getLfMinAge(): ?int
    {
        return $this->lf_min_age;
    }

    public function setLfMinAge(int $lf_min_age): self
    {
        $this->lf_min_age = $lf_min_age;

        return $this;
    }

    public function getLfMaxAge(): ?int
    {
        return $this->lf_max_age;
    }

    public function setLfMaxAge(?int $lf_max_age): self
    {
        $this->lf_max_age = $lf_max_age;

        return $this;
    }
}
