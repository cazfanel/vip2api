<?php
/**
 * ExtensionsRequestSettings
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * v0
 *
 * OpenAPI spec version: 2016-05-13T11:31:53Z
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * ExtensionsRequestSettings Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ExtensionsRequestSettings implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ExtensionsRequest_settings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'name' => 'string',
        'dnd' => 'bool'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'name' => 'name',
        'dnd' => 'dnd'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'name' => 'setName',
        'dnd' => 'setDnd'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'name' => 'getName',
        'dnd' => 'getDnd'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['dnd'] = isset($data['dnd']) ? $data['dnd'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if (strlen($this->container['name']) > 64) {
            $invalid_properties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
        }
        if (strlen($this->container['name']) < 2) {
            $invalid_properties[] = "invalid value for 'name', the character length must be bigger than or equal to 2.";
        }
        if (!preg_match("^[a-zA-Z0-9 ]$", $this->container['name'])) {
            $invalid_properties[] = "invalid value for 'name', must be conform to the pattern ^[a-zA-Z0-9 ]$.";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if (strlen($this->container['name']) > 64) {
            return false;
        }
        if (strlen($this->container['name']) < 2) {
            return false;
        }
        if (!preg_match("^[a-zA-Z0-9 ]$", $this->container['name'])) {
            return false;
        }
        return true;
    }


    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        if (strlen($name) > 64) {
            throw new \InvalidArgumentException('invalid length for $name when calling ExtensionsRequestSettings., must be smaller than or equal to 64.');
        }
        if (strlen($name) < 2) {
            throw new \InvalidArgumentException('invalid length for $name when calling ExtensionsRequestSettings., must be bigger than or equal to 2.');
        }
        if (!preg_match("^[a-zA-Z0-9 ]$", $name)) {
            throw new \InvalidArgumentException('invalid value for $name when calling ExtensionsRequestSettings., must be conform to the pattern ^[a-zA-Z0-9 ]$.');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets dnd
     * @return bool
     */
    public function getDnd()
    {
        return $this->container['dnd'];
    }

    /**
     * Sets dnd
     * @param bool $dnd
     * @return $this
     */
    public function setDnd($dnd)
    {
        $this->container['dnd'] = $dnd;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}
