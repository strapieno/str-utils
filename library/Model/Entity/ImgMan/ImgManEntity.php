<?php
namespace Strapieno\Utils\Model\Entity\ImgMan;

use ImgMan\Apigility\Entity\ImageEntityInterface;
use ImgMan\Image\ImageTrait;
use Matryoshka\Model\Object\IdentityAwareTrait;

/**
 * TODO remove and add in ripaclub/zf-apigility-imgman
 *
 * Class ImgManEntity
 */
class ImgManEntity implements ImageEntityInterface
{
    use IdentityAwareTrait;
    use ImageTrait;
}