<?php

namespace Liloi\Paper\API\Thesis\Show;

use Liloi\Paper\API\Method as SuperMethod;

class Method extends SuperMethod
{
    public function execute(): array
    {
        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [

            ])
        ];
    }
}