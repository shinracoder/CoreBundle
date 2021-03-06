<?php

namespace App\Oni\CoreBundle\Doctrine\Spec\Common;

use Doctrine\ORM\Query;
use Doctrine\ORM\QueryBuilder;
use App\Oni\CoreBundle\Doctrine\Spec\Specification;

class IdEquals implements Specification
{

    /**
     * @var string
     */
    private $id;

    /**
     * NameContains constructor.
     * @param $id
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @param \Doctrine\ORM\QueryBuilder $qb
     * @param string $dqlAlias
     *
     * @return \Doctrine\ORM\Query\Expr
     */
    public function match(QueryBuilder $qb, $dqlAlias)
    {
        $qb->setParameter('id',  $this->id);

        return $qb->expr()->eq($dqlAlias . '.id  ', ':id');
    }

    /**
     * @param \Doctrine\ORM\Query $query
     ***/
    public function modifyQuery(Query $query)
    {
    }

}