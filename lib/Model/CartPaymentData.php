<?php
/**
 * CartPaymentData
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
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
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * CartPaymentData Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CartPaymentData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    protected static $withAdditionalProperties = false;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'cartPaymentData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'code' => 'string',
        'title' => '\OpenAPI\Client\Model\CartLocalizedText',
        'payload' => 'string',
        'fee' => '\OpenAPI\Client\Model\CartMoney',
        'amount' => '\OpenAPI\Client\Model\CartMoney',
        'label' => '\OpenAPI\Client\Model\CartLocalizedText',
        'description' => '\OpenAPI\Client\Model\CartLocalizedText',
        'vat_amount' => '\OpenAPI\Client\Model\CartMoney',
        'vat_percentage' => 'float',
        'vat_inaccurate' => 'bool',
        'vat_calculated' => 'bool',
        'is_upfront' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'code' => null,
        'title' => null,
        'payload' => null,
        'fee' => null,
        'amount' => null,
        'label' => null,
        'description' => null,
        'vat_amount' => null,
        'vat_percentage' => 'float',
        'vat_inaccurate' => null,
        'vat_calculated' => null,
        'is_upfront' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'code' => false,
        'title' => false,
        'payload' => false,
        'fee' => false,
        'amount' => false,
        'label' => false,
        'description' => false,
        'vat_amount' => false,
        'vat_percentage' => false,
        'vat_inaccurate' => false,
        'vat_calculated' => false,
        'is_upfront' => false
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
        'code' => 'code',
        'title' => 'title',
        'payload' => 'payload',
        'fee' => 'fee',
        'amount' => 'amount',
        'label' => 'label',
        'description' => 'description',
        'vat_amount' => 'vatAmount',
        'vat_percentage' => 'vatPercentage',
        'vat_inaccurate' => 'vatInaccurate',
        'vat_calculated' => 'vatCalculated',
        'is_upfront' => 'isUpfront'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'title' => 'setTitle',
        'payload' => 'setPayload',
        'fee' => 'setFee',
        'amount' => 'setAmount',
        'label' => 'setLabel',
        'description' => 'setDescription',
        'vat_amount' => 'setVatAmount',
        'vat_percentage' => 'setVatPercentage',
        'vat_inaccurate' => 'setVatInaccurate',
        'vat_calculated' => 'setVatCalculated',
        'is_upfront' => 'setIsUpfront'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'title' => 'getTitle',
        'payload' => 'getPayload',
        'fee' => 'getFee',
        'amount' => 'getAmount',
        'label' => 'getLabel',
        'description' => 'getDescription',
        'vat_amount' => 'getVatAmount',
        'vat_percentage' => 'getVatPercentage',
        'vat_inaccurate' => 'getVatInaccurate',
        'vat_calculated' => 'getVatCalculated',
        'is_upfront' => 'getIsUpfront'
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
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('payload', $data ?? [], null);
        $this->setIfExists('fee', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('label', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('vat_amount', $data ?? [], null);
        $this->setIfExists('vat_percentage', $data ?? [], null);
        $this->setIfExists('vat_inaccurate', $data ?? [], null);
        $this->setIfExists('vat_calculated', $data ?? [], null);
        $this->setIfExists('is_upfront', $data ?? [], null);
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
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code code
     *
     * @return self
     */
    public function setCode($code)
    {
        if (is_null($code)) {
            throw new \InvalidArgumentException('non-nullable code cannot be null');
        }
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets title
     *
     * @return \OpenAPI\Client\Model\CartLocalizedText|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param \OpenAPI\Client\Model\CartLocalizedText|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets payload
     *
     * @return string|null
     */
    public function getPayload()
    {
        return $this->container['payload'];
    }

    /**
     * Sets payload
     *
     * @param string|null $payload payload
     *
     * @return self
     */
    public function setPayload($payload)
    {
        if (is_null($payload)) {
            throw new \InvalidArgumentException('non-nullable payload cannot be null');
        }
        $this->container['payload'] = $payload;

        return $this;
    }

    /**
     * Gets fee
     *
     * @return \OpenAPI\Client\Model\CartMoney|null
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param \OpenAPI\Client\Model\CartMoney|null $fee fee
     *
     * @return self
     */
    public function setFee($fee)
    {
        if (is_null($fee)) {
            throw new \InvalidArgumentException('non-nullable fee cannot be null');
        }
        $this->container['fee'] = $fee;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return \OpenAPI\Client\Model\CartMoney|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param \OpenAPI\Client\Model\CartMoney|null $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets label
     *
     * @return \OpenAPI\Client\Model\CartLocalizedText|null
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param \OpenAPI\Client\Model\CartLocalizedText|null $label label
     *
     * @return self
     */
    public function setLabel($label)
    {
        if (is_null($label)) {
            throw new \InvalidArgumentException('non-nullable label cannot be null');
        }
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets description
     *
     * @return \OpenAPI\Client\Model\CartLocalizedText|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param \OpenAPI\Client\Model\CartLocalizedText|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets vat_amount
     *
     * @return \OpenAPI\Client\Model\CartMoney|null
     */
    public function getVatAmount()
    {
        return $this->container['vat_amount'];
    }

    /**
     * Sets vat_amount
     *
     * @param \OpenAPI\Client\Model\CartMoney|null $vat_amount vat_amount
     *
     * @return self
     */
    public function setVatAmount($vat_amount)
    {
        if (is_null($vat_amount)) {
            throw new \InvalidArgumentException('non-nullable vat_amount cannot be null');
        }
        $this->container['vat_amount'] = $vat_amount;

        return $this;
    }

    /**
     * Gets vat_percentage
     *
     * @return float|null
     */
    public function getVatPercentage()
    {
        return $this->container['vat_percentage'];
    }

    /**
     * Sets vat_percentage
     *
     * @param float|null $vat_percentage vat_percentage
     *
     * @return self
     */
    public function setVatPercentage($vat_percentage)
    {
        if (is_null($vat_percentage)) {
            throw new \InvalidArgumentException('non-nullable vat_percentage cannot be null');
        }
        $this->container['vat_percentage'] = $vat_percentage;

        return $this;
    }

    /**
     * Gets vat_inaccurate
     *
     * @return bool|null
     */
    public function getVatInaccurate()
    {
        return $this->container['vat_inaccurate'];
    }

    /**
     * Sets vat_inaccurate
     *
     * @param bool|null $vat_inaccurate vat_inaccurate
     *
     * @return self
     */
    public function setVatInaccurate($vat_inaccurate)
    {
        if (is_null($vat_inaccurate)) {
            throw new \InvalidArgumentException('non-nullable vat_inaccurate cannot be null');
        }
        $this->container['vat_inaccurate'] = $vat_inaccurate;

        return $this;
    }

    /**
     * Gets vat_calculated
     *
     * @return bool|null
     */
    public function getVatCalculated()
    {
        return $this->container['vat_calculated'];
    }

    /**
     * Sets vat_calculated
     *
     * @param bool|null $vat_calculated vat_calculated
     *
     * @return self
     */
    public function setVatCalculated($vat_calculated)
    {
        if (is_null($vat_calculated)) {
            throw new \InvalidArgumentException('non-nullable vat_calculated cannot be null');
        }
        $this->container['vat_calculated'] = $vat_calculated;

        return $this;
    }

    /**
     * Gets is_upfront
     *
     * @return bool|null
     */
    public function getIsUpfront()
    {
        return $this->container['is_upfront'];
    }

    /**
     * Sets is_upfront
     *
     * @param bool|null $is_upfront is_upfront
     *
     * @return self
     */
    public function setIsUpfront($is_upfront)
    {
        if (is_null($is_upfront)) {
            throw new \InvalidArgumentException('non-nullable is_upfront cannot be null');
        }
        $this->container['is_upfront'] = $is_upfront;

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


