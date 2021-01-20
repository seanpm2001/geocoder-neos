<?php

namespace Ujamii\Geocoder;

use Neos\Flow\Core\Bootstrap;
use Neos\Flow\Package\Package as BasePackage;
use Neos\ContentRepository\Domain\Model\Node;
use Ujamii\Geocoder\Service\GeocodingService;

class Package extends BasePackage
{
    /**
     * @param Bootstrap $bootstrap The current bootstrap
     * @return void
     */
    public function boot(Bootstrap $bootstrap)
    {
        $dispatcher = $bootstrap->getSignalSlotDispatcher();
        $dispatcher->connect(Node::class, 'nodeUpdated', GeocodingService::class, 'nodeUpdated');
    }
}
