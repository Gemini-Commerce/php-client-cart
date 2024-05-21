<?php
/**
 * CartCustomerData
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  GeminiCommerce\Cart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Cart Service
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: info@gemini-commerce.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace GeminiCommerce\Cart\Model;

use \ArrayAccess;
use \GeminiCommerce\Cart\ObjectSerializer;

/**
 * CartCustomerData Class Doc Comment
 *
 * @category Class
 * @package  GeminiCommerce\Cart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CartCustomerData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    protected static $withAdditionalProperties = false;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'cartCustomerData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'customer_grn' => 'string',
        'firstname' => 'string',
        'lastname' => 'string',
        'email' => 'string',
        'phone_number' => 'string',
        'groups' => 'string[]',
        'tax_code' => 'string',
        'certified_email' => 'string',
        'sdi_code' => 'string',
        'fiscal_code' => 'string',
        'company_name' => 'string',
        'agent_grn' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'customer_grn' => null,
        'firstname' => null,
        'lastname' => null,
        'email' => null,
        'phone_number' => null,
        'groups' => null,
        'tax_code' => null,
        'certified_email' => null,
        'sdi_code' => null,
        'fiscal_code' => null,
        'company_name' => null,
        'agent_grn' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'customer_grn' => false,
        'firstname' => false,
        'lastname' => false,
        'email' => false,
        'phone_number' => false,
        'groups' => false,
        'tax_code' => false,
        'certified_email' => false,
        'sdi_code' => false,
        'fiscal_code' => false,
        'company_name' => false,
        'agent_grn' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'customer_grn' => 'customerGrn',
        'firstname' => 'firstname',
        'lastname' => 'lastname',
        'email' => 'email',
        'phone_number' => 'phoneNumber',
        'groups' => 'groups',
        'tax_code' => 'taxCode',
        'certified_email' => 'certifiedEmail',
        'sdi_code' => 'sdiCode',
        'fiscal_code' => 'fiscalCode',
        'company_name' => 'companyName',
        'agent_grn' => 'agentGrn'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customer_grn' => 'setCustomerGrn',
        'firstname' => 'setFirstname',
        'lastname' => 'setLastname',
        'email' => 'setEmail',
        'phone_number' => 'setPhoneNumber',
        'groups' => 'setGroups',
        'tax_code' => 'setTaxCode',
        'certified_email' => 'setCertifiedEmail',
        'sdi_code' => 'setSdiCode',
        'fiscal_code' => 'setFiscalCode',
        'company_name' => 'setCompanyName',
        'agent_grn' => 'setAgentGrn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customer_grn' => 'getCustomerGrn',
        'firstname' => 'getFirstname',
        'lastname' => 'getLastname',
        'email' => 'getEmail',
        'phone_number' => 'getPhoneNumber',
        'groups' => 'getGroups',
        'tax_code' => 'getTaxCode',
        'certified_email' => 'getCertifiedEmail',
        'sdi_code' => 'getSdiCode',
        'fiscal_code' => 'getFiscalCode',
        'company_name' => 'getCompanyName',
        'agent_grn' => 'getAgentGrn'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Associative array for storing additional properties
     *
     * @var mixed[]
     */
    protected $additionalProperties = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('customer_grn', $data ?? [], null);
        $this->setIfExists('firstname', $data ?? [], null);
        $this->setIfExists('lastname', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('phone_number', $data ?? [], null);
        $this->setIfExists('groups', $data ?? [], null);
        $this->setIfExists('tax_code', $data ?? [], null);
        $this->setIfExists('certified_email', $data ?? [], null);
        $this->setIfExists('sdi_code', $data ?? [], null);
        $this->setIfExists('fiscal_code', $data ?? [], null);
        $this->setIfExists('company_name', $data ?? [], null);
        $this->setIfExists('agent_grn', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets customer_grn
     *
     * @return string|null
     */
    public function getCustomerGrn()
    {
        return $this->container['customer_grn'];
    }

    /**
     * Sets customer_grn
     *
     * @param string|null $customer_grn customer_grn
     *
     * @return self
     */
    public function setCustomerGrn($customer_grn)
    {
        if (is_null($customer_grn)) {
            throw new \InvalidArgumentException('non-nullable customer_grn cannot be null');
        }
        $this->container['customer_grn'] = $customer_grn;

        return $this;
    }

    /**
     * Gets firstname
     *
     * @return string|null
     */
    public function getFirstname()
    {
        return $this->container['firstname'];
    }

    /**
     * Sets firstname
     *
     * @param string|null $firstname firstname
     *
     * @return self
     */
    public function setFirstname($firstname)
    {
        if (is_null($firstname)) {
            throw new \InvalidArgumentException('non-nullable firstname cannot be null');
        }
        $this->container['firstname'] = $firstname;

        return $this;
    }

    /**
     * Gets lastname
     *
     * @return string|null
     */
    public function getLastname()
    {
        return $this->container['lastname'];
    }

    /**
     * Sets lastname
     *
     * @param string|null $lastname lastname
     *
     * @return self
     */
    public function setLastname($lastname)
    {
        if (is_null($lastname)) {
            throw new \InvalidArgumentException('non-nullable lastname cannot be null');
        }
        $this->container['lastname'] = $lastname;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string|null $phone_number phone_number
     *
     * @return self
     */
    public function setPhoneNumber($phone_number)
    {
        if (is_null($phone_number)) {
            throw new \InvalidArgumentException('non-nullable phone_number cannot be null');
        }
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets groups
     *
     * @return string[]|null
     */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
     * Sets groups
     *
     * @param string[]|null $groups groups
     *
     * @return self
     */
    public function setGroups($groups)
    {
        if (is_null($groups)) {
            throw new \InvalidArgumentException('non-nullable groups cannot be null');
        }
        $this->container['groups'] = $groups;

        return $this;
    }

    /**
     * Gets tax_code
     *
     * @return string|null
     */
    public function getTaxCode()
    {
        return $this->container['tax_code'];
    }

    /**
     * Sets tax_code
     *
     * @param string|null $tax_code tax_code
     *
     * @return self
     */
    public function setTaxCode($tax_code)
    {
        if (is_null($tax_code)) {
            throw new \InvalidArgumentException('non-nullable tax_code cannot be null');
        }
        $this->container['tax_code'] = $tax_code;

        return $this;
    }

    /**
     * Gets certified_email
     *
     * @return string|null
     */
    public function getCertifiedEmail()
    {
        return $this->container['certified_email'];
    }

    /**
     * Sets certified_email
     *
     * @param string|null $certified_email certified_email
     *
     * @return self
     */
    public function setCertifiedEmail($certified_email)
    {
        if (is_null($certified_email)) {
            throw new \InvalidArgumentException('non-nullable certified_email cannot be null');
        }
        $this->container['certified_email'] = $certified_email;

        return $this;
    }

    /**
     * Gets sdi_code
     *
     * @return string|null
     */
    public function getSdiCode()
    {
        return $this->container['sdi_code'];
    }

    /**
     * Sets sdi_code
     *
     * @param string|null $sdi_code sdi_code
     *
     * @return self
     */
    public function setSdiCode($sdi_code)
    {
        if (is_null($sdi_code)) {
            throw new \InvalidArgumentException('non-nullable sdi_code cannot be null');
        }
        $this->container['sdi_code'] = $sdi_code;

        return $this;
    }

    /**
     * Gets fiscal_code
     *
     * @return string|null
     */
    public function getFiscalCode()
    {
        return $this->container['fiscal_code'];
    }

    /**
     * Sets fiscal_code
     *
     * @param string|null $fiscal_code fiscal_code
     *
     * @return self
     */
    public function setFiscalCode($fiscal_code)
    {
        if (is_null($fiscal_code)) {
            throw new \InvalidArgumentException('non-nullable fiscal_code cannot be null');
        }
        $this->container['fiscal_code'] = $fiscal_code;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string|null $company_name company_name
     *
     * @return self
     */
    public function setCompanyName($company_name)
    {
        if (is_null($company_name)) {
            throw new \InvalidArgumentException('non-nullable company_name cannot be null');
        }
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets agent_grn
     *
     * @return string|null
     */
    public function getAgentGrn()
    {
        return $this->container['agent_grn'];
    }

    /**
     * Sets agent_grn
     *
     * @param string|null $agent_grn agent_grn
     *
     * @return self
     */
    public function setAgentGrn($agent_grn)
    {
        if (is_null($agent_grn)) {
            throw new \InvalidArgumentException('non-nullable agent_grn cannot be null');
        }
        $this->container['agent_grn'] = $agent_grn;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }

    public static function withAdditionalProperties(): bool
    {
        return self::$withAdditionalProperties;
    }


    public function setAdditionalProperty($name, $value)
    {
        throw new \InvalidArgumentException(
            sprintf(
                "This model cannot have additional properties"
            )
        );
    }

    public function getAdditionalProperty($name)
    {
        return $this->additionalProperties[$name];
    }

    public function hasAdditionalProperty($name): bool
    {
        return array_key_exists($name, $this->additionalProperties);
    }

    public function getAdditionalProperties()
    {
        return $this->additionalProperties;
    }
}


