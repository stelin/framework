<?php

namespace Swoft\Bean\Parser;

use Swoft\Bean\Annotation\CachePut;
use Swoft\Bean\Collector;

/**
 * the parser of cacheput
 *
 * @uses      CachePutParser
 * @version   2017年12月27日
 * @author    stelin <phpcrazy@126.com>
 * @copyright Copyright 2010-2016 swoft software
 * @license   PHP Version 7.x {@link http://www.php.net/license/3_0.txt}
 */
class CachePutParser extends AbstractParserInterface
{
    /**
     * RequestMapping注解解析
     *
     * @param string $className
     * @param CachePut $objectAnnotation
     * @param string $propertyName
     * @param string $methodName
     * @param null $propertyValue
     * @return mixed
     */
    public function parser(string $className, $objectAnnotation = null, string $propertyName = "", string $methodName = "", $propertyValue = null)
    {
        Collector::$methodAnnotations[$className][$methodName][] = get_class($objectAnnotation);
        return null;
    }
}
