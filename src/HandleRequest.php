<?php


namespace Lighthouse\Contract\Form;


use Illuminate\Database\Eloquent\Model;

interface HandleRequest
{

    /**
     * @param Request $request
     * @param $data
     * @return array|\ArrayAccess|Model
     */
    public function handle(Request $request, $data);

}
