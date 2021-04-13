<?php


namespace Lighthouse\Contract\Form;


interface Element
{

    public function getName(): string;

    public function setName(string $name):self;

    public function getPath(): array;

    public function setPath(array $path): self;

    public function getGroup(): string;

    public function setGroup(string $group): self;

    public function getLocation(): string;

    public function setLocation(string $location): self;

}
