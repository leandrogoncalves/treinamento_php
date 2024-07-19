<?php

namespace App\Entities\Contracts;

interface CarInterface {

    public function setBrand($brand): void;

    public function setColor($color): void;

    public function show(): string;

    public function isCar(): bool;

    public function drive(): string;

}