<?php
      
namespace amqphp\protocol\v0_9_1\basic;
	
/** Ampq binding code, generated from doc version 0.9.1 */

class AckMultipleField extends \amqphp\protocol\v0_9_1\BitDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'multiple'; }
    function getSpecFieldDomain() { return 'bit'; }

}