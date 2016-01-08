<?php

namespace Strapieno\Utils\Model\Listener;

use DateTime;
use Matryoshka\Model\ModelEvent;
use Strapieno\Utils\Model\Entity\DateHistoryAwareInterface;
use Zend\EventManager\EventManagerInterface;
use Zend\EventManager\ListenerAggregateInterface;
use Zend\EventManager\ListenerAggregateTrait;

/**
 * Class DateAwareListener
 */
class DateAwareListener implements ListenerAggregateInterface
{
    use ListenerAggregateTrait;

    /**
     * {@inheritdoc}
     */
    public function attach(EventManagerInterface $events)
    {
        $this->listeners[] = $events->attach(ModelEvent::EVENT_SAVE_PRE, function (ModelEvent $event) {
            $object = $event->getData();

            if ($object instanceof DateHistoryAwareInterface) {
                $now = new DateTime;
                $object->setDateModified($now);
                if (!$object->getDateCreated()) {
                    $object->setDateCreated($now);
                }
            }
        });
    }
}