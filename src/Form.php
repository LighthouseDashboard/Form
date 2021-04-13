<?php


namespace Lighthouse\Contract\Form;


interface Form extends Element
{

    public function build();

    public function setData($data): Form;

    public function add(Element $field): Form;

    public function getFields(): array;

    public function getData();

}
