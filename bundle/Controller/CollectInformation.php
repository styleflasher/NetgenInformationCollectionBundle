<?php

declare(strict_types=1);

namespace Netgen\Bundle\InformationCollectionBundle\Controller;

use Ibexa\Core\MVC\Symfony\View\ContentValueView;
use Netgen\InformationCollection\API\InformationCollectionTrait;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CollectInformation extends AbstractController
{
    use InformationCollectionTrait;

    /**
     * Displays and handles information collection.
     */
    public function __invoke(ContentValueView $view): ContentValueView
    {
        return $this->collectInformation($view, []);
    }
}
