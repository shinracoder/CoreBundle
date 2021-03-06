<?php
/**
 * Created by PhpStorm.
 * User: peteratkins
 * Date: 23/12/2015
 * Time: 01:21
 */

namespace App\Oni\CoreBundle\Factory;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use App\Oni\CoreBundle\Controller\CoreController;
use Doctrine\ORM\EntityRepository;

class ControllerFactory extends CoreAbstractFactory
{

    /**
     *
     * Return Controller Class
     *
     * @param CoreController $controller
     * @return CoreController
     *
     */
    public function getService(ContainerInterface $serviceContainer){

        $returnController = $this->injectControllerDependencies($controller);

        return $returnController;

    }

}