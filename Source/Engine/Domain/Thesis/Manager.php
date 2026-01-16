<?php

namespace Liloi\Paper\Domain\Thesis;

class Manager
{
    static public function getThesis(): Entity
    {
        $entity = Entity::create([
            'title' => 'Test123'
        ]);

        return $entity;
    }
}