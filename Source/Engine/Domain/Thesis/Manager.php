<?php

namespace Liloi\Paper\Domain\Thesis;

use Liloi\Paper\Domain\Manager as DomainManager;

class Manager extends DomainManager
{
    static public function getThesis(): Entity
    {
        $url = rtrim($_SERVER['REQUEST_URI'], '/');

        $root = self::getConfig()->get('root');
        $filThesis = $root . $url . '/.thesis';

        if(file_exists($filThesis))
        {
            $data = (array)json_decode(file_get_contents($filThesis));
        }
        else
        {
            $data = [
                'title' => 'Enter title'
            ];
        }

        $entity = Entity::create($data);

        return $entity;
    }
}