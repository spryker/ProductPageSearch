<?php

namespace SprykerFeature\Zed\AvailabilityCartConnector\Communication;

use SprykerEngine\Zed\Kernel\Communication\AbstractDependencyContainer;
use SprykerFeature\Zed\AvailabilityCartConnector\Dependency\Facade\AvailabilityToCartConnectorFacadeInterface as AvailabilityFacade;

class AvailabilityCartConnectorDependencyContainer extends AbstractDependencyContainer
{
    /**
     * @return AvailabilityFacade
     */
    public function getAvailabilityFacade()
    {
        return $this->getLocator()->availability()->facade();
    }

}
