<?php
namespace Strapieno\Utils\Listener;

use Matryoshka\Model\Object\ActiveRecord\ActiveRecordInterface;
use Strapieno\ModelUtils\Entity\IdentityExistAwareInterface;
use Zend\EventManager\EventManagerInterface;
use Zend\EventManager\ListenerAggregateInterface;
use Zend\EventManager\ListenerAggregateTrait;
use Zend\EventManager\Event;
use Zend\Http\Request;
use Zend\Mvc\MvcEvent;
use Zend\Uri\UriFactory;
use ZF\Hal\Entity;

/**
 * Class UserListener
 * TODO make a module for a config of cors
 * SEE https://github.com/zf-fr/zfr-cors
 */
class CorsListener implements ListenerAggregateInterface
{
    use ListenerAggregateTrait;

    protected $allowedOrigins = ['*'];

    protected $allowedMethods = ['GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'OPTIONS'];

    protected $allowedHeaders = ['Content-Type', 'Accept',  'Authorization'];

    /**
     *  {@inheritdoc}
     */
    public function attach(EventManagerInterface $events)
    {
        $this->listeners[] = $events->attach(MvcEvent::EVENT_ROUTE, [$this, 'cors']);
    }

    /**
     * @param Event $e
     */
    public function cors(MvcEvent $e)
    {
        $request = $e->getRequest();
        if ($request instanceof Request && $this->isCorsRequest($request)) {
            $headers = $request->getHeaders();
                $response = $e->getResponse();
                $headers = $response->getHeaders();
                $headers->addHeaderLine('Access-Control-Allow-Origin', '*');
                $headers->addHeaderLine('Access-Control-Allow-Methods', implode(', ', $this->allowedMethods));
                $headers->addHeaderLine('Access-Control-Allow-Headers', implode(', ', $this->allowedHeaders));

        }
    }

    /**
     * @param Request $request
     * @return bool
     */
    public function isCorsRequest(Request $request)
    {
        $headers = $request->getHeaders();
        if (!$headers->has('Origin')) {
            return false;
        }
        try {
            $originUri  = UriFactory::factory($headers->get('Origin')->getFieldValue());
        } catch (\Exception $e) {
            return false;
        }
        $requestUri = $request->getUri();
        // According to the spec (http://tools.ietf.org/html/rfc6454#section-4), we should check host, port and scheme
        return (!($originUri->getHost() === $requestUri->getHost())
            || !($originUri->getPort() === $requestUri->getPort())
            || !($originUri->getScheme() === $requestUri->getScheme())
        );
    }
}