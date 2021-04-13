<?php


namespace Lighthouse\Contract\Form;


interface Renderer
{

    public function process(Form $form);

    public function processField(Field $field);

    public function append(array $data): Renderer;

}
