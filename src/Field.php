<?php


namespace Lighthouse\Contract\Form;


interface Field extends Element
{

    public static function make(string $name);

    public function getName(): string;

    public function setName(string $name): Field;

    public function getType(): string;

    public function setLocation(string $location): Field;

    public function getLocation(): string;

    public function getAttributes(): array;

}
