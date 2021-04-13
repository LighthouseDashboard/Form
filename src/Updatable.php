<?php


namespace Lighthouse\Contract\Form;


use Illuminate\Database\Eloquent\Model;

interface Updatable
{

    public function update(Request $request, $data): self;

    public function getDefaultData($data): Model;

}
