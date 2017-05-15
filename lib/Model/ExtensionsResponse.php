<?php
/**
 * ExtensionsResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
<<<<<<< HEAD
 * @author   Swaagger Codegen team
=======
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
>>>>>>> c2576243bd211077fbb5e257621d2949c63caa05
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * v0
 *
<<<<<<< HEAD
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2017-03-27T11:07:47Z
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
=======
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
>>>>>>> c2576243bd211077fbb5e257621d2949c63caa05
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * ExtensionsResponse Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
<<<<<<< HEAD
 * @author      Swagger Codegen team
=======
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
>>>>>>> c2576243bd211077fbb5e257621d2949c63caa05
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ExtensionsResponse implements ArrayAccess
{
<<<<<<< HEAD
    const DISCRIMINATOR = null;

=======
>>>>>>> c2576243bd211077fbb5e257621d2949c63caa05
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ExtensionsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
<<<<<<< HEAD
    protected static $swaggerTypes = [
        'extensions' => '\Swagger\Client\Model\ExtensionsResponseExtensions[]'
    ];
=======
    protected static $swaggerTypes = array(
        'extensions' => '\Swagger\Client\Model\ExtensionsResponseExtensions[]'
    );
>>>>>>> c2576243bd211077fbb5e257621d2949c63caa05

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
<<<<<<< HEAD
    protected static $attributeMap = [
        'extensions' => 'extensions'
    ];

=======
    protected static $attributeMap = array(
        'extensions' => 'extensions'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }
>>>>>>> c2576243bd211077fbb5e257621d2949c63caa05

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
<<<<<<< HEAD
    protected static $setters = [
        'extensions' => 'setExtensions'
    ];

=======
    protected static $setters = array(
        'extensions' => 'setExtensions'
    );

    public static function setters()
    {
        return self::$setters;
    }
>>>>>>> c2576243bd211077fbb5e257621d2949c63caa05

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
<<<<<<< HEAD
    protected static $getters = [
        'extensions' => 'getExtensions'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }
=======
    protected static $getters = array(
        'extensions' => 'getExtensions'
    );
>>>>>>> c2576243bd211077fbb5e257621d2949c63caa05

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
<<<<<<< HEAD
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
=======
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
>>>>>>> c2576243bd211077fbb5e257621d2949c63caa05
     */
    public function __construct(array $data = null)
    {
        $this->container['extensions'] = isset($data['extensions']) ? $data['extensions'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
<<<<<<< HEAD
        $invalid_properties = [];

=======
        $invalid_properties = array();
>>>>>>> c2576243bd211077fbb5e257621d2949c63caa05
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
<<<<<<< HEAD
     * @return bool True if all properties are valid
     */
    public function valid()
    {

=======
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
>>>>>>> c2576243bd211077fbb5e257621d2949c63caa05
        return true;
    }


    /**
     * Gets extensions
     * @return \Swagger\Client\Model\ExtensionsResponseExtensions[]
     */
    public function getExtensions()
    {
        return $this->container['extensions'];
    }

    /**
     * Sets extensions
     * @param \Swagger\Client\Model\ExtensionsResponseExtensions[] $extensions
     * @return $this
     */
    public function setExtensions($extensions)
    {
        $this->container['extensions'] = $extensions;

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
<<<<<<< HEAD


=======
>>>>>>> c2576243bd211077fbb5e257621d2949c63caa05
