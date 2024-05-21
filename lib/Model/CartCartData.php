<?php
/**
 * CartCartData
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
 * CartCartData Class Doc Comment
 *
 * @category Class
 * @package  GeminiCommerce\Cart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CartCartData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    protected static $withAdditionalProperties = false;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'cartCartData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'grn' => 'string',
        'channel' => 'string',
        'market' => 'string',
        'locale' => 'string',
        'items' => '\GeminiCommerce\Cart\Model\CartCartItem[]',
        'payments' => '\GeminiCommerce\Cart\Model\CartPaymentData[]',
        'shipments' => '\GeminiCommerce\Cart\Model\CartShipmentData[]',
        'promotions' => '\GeminiCommerce\Cart\Model\CartPromotionData[]',
        'currency' => '\GeminiCommerce\Cart\Model\CartCurrency',
        'subtotals' => '\GeminiCommerce\Cart\Model\CartCartSubtotal[]',
        'total' => '\GeminiCommerce\Cart\Model\CartMoney',
        'total_due' => '\GeminiCommerce\Cart\Model\CartMoney',
        'vat_included' => 'bool',
        'billing_address' => '\GeminiCommerce\Cart\Model\CartPostalAddress',
        'shipping_address' => '\GeminiCommerce\Cart\Model\CartPostalAddress',
        'status' => '\GeminiCommerce\Cart\Model\CartCartStatus',
        'customer' => '\GeminiCommerce\Cart\Model\CartCustomerData',
        'notes' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'grn' => null,
        'channel' => null,
        'market' => null,
        'locale' => null,
        'items' => null,
        'payments' => null,
        'shipments' => null,
        'promotions' => null,
        'currency' => null,
        'subtotals' => null,
        'total' => null,
        'total_due' => null,
        'vat_included' => null,
        'billing_address' => null,
        'shipping_address' => null,
        'status' => null,
        'customer' => null,
        'notes' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'grn' => false,
        'channel' => false,
        'market' => false,
        'locale' => false,
        'items' => false,
        'payments' => false,
        'shipments' => false,
        'promotions' => false,
        'currency' => false,
        'subtotals' => false,
        'total' => false,
        'total_due' => false,
        'vat_included' => false,
        'billing_address' => false,
        'shipping_address' => false,
        'status' => false,
        'customer' => false,
        'notes' => false,
        'created_at' => false,
        'updated_at' => false
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
        'id' => 'id',
        'grn' => 'grn',
        'channel' => 'channel',
        'market' => 'market',
        'locale' => 'locale',
        'items' => 'items',
        'payments' => 'payments',
        'shipments' => 'shipments',
        'promotions' => 'promotions',
        'currency' => 'currency',
        'subtotals' => 'subtotals',
        'total' => 'total',
        'total_due' => 'totalDue',
        'vat_included' => 'vatIncluded',
        'billing_address' => 'billingAddress',
        'shipping_address' => 'shippingAddress',
        'status' => 'status',
        'customer' => 'customer',
        'notes' => 'notes',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'grn' => 'setGrn',
        'channel' => 'setChannel',
        'market' => 'setMarket',
        'locale' => 'setLocale',
        'items' => 'setItems',
        'payments' => 'setPayments',
        'shipments' => 'setShipments',
        'promotions' => 'setPromotions',
        'currency' => 'setCurrency',
        'subtotals' => 'setSubtotals',
        'total' => 'setTotal',
        'total_due' => 'setTotalDue',
        'vat_included' => 'setVatIncluded',
        'billing_address' => 'setBillingAddress',
        'shipping_address' => 'setShippingAddress',
        'status' => 'setStatus',
        'customer' => 'setCustomer',
        'notes' => 'setNotes',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'grn' => 'getGrn',
        'channel' => 'getChannel',
        'market' => 'getMarket',
        'locale' => 'getLocale',
        'items' => 'getItems',
        'payments' => 'getPayments',
        'shipments' => 'getShipments',
        'promotions' => 'getPromotions',
        'currency' => 'getCurrency',
        'subtotals' => 'getSubtotals',
        'total' => 'getTotal',
        'total_due' => 'getTotalDue',
        'vat_included' => 'getVatIncluded',
        'billing_address' => 'getBillingAddress',
        'shipping_address' => 'getShippingAddress',
        'status' => 'getStatus',
        'customer' => 'getCustomer',
        'notes' => 'getNotes',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('grn', $data ?? [], null);
        $this->setIfExists('channel', $data ?? [], null);
        $this->setIfExists('market', $data ?? [], null);
        $this->setIfExists('locale', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
        $this->setIfExists('payments', $data ?? [], null);
        $this->setIfExists('shipments', $data ?? [], null);
        $this->setIfExists('promotions', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('subtotals', $data ?? [], null);
        $this->setIfExists('total', $data ?? [], null);
        $this->setIfExists('total_due', $data ?? [], null);
        $this->setIfExists('vat_included', $data ?? [], null);
        $this->setIfExists('billing_address', $data ?? [], null);
        $this->setIfExists('shipping_address', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('customer', $data ?? [], null);
        $this->setIfExists('notes', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets grn
     *
     * @return string|null
     */
    public function getGrn()
    {
        return $this->container['grn'];
    }

    /**
     * Sets grn
     *
     * @param string|null $grn grn
     *
     * @return self
     */
    public function setGrn($grn)
    {
        if (is_null($grn)) {
            throw new \InvalidArgumentException('non-nullable grn cannot be null');
        }
        $this->container['grn'] = $grn;

        return $this;
    }

    /**
     * Gets channel
     *
     * @return string|null
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     *
     * @param string|null $channel channel
     *
     * @return self
     */
    public function setChannel($channel)
    {
        if (is_null($channel)) {
            throw new \InvalidArgumentException('non-nullable channel cannot be null');
        }
        $this->container['channel'] = $channel;

        return $this;
    }

    /**
     * Gets market
     *
     * @return string|null
     */
    public function getMarket()
    {
        return $this->container['market'];
    }

    /**
     * Sets market
     *
     * @param string|null $market market
     *
     * @return self
     */
    public function setMarket($market)
    {
        if (is_null($market)) {
            throw new \InvalidArgumentException('non-nullable market cannot be null');
        }
        $this->container['market'] = $market;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string|null
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string|null $locale locale
     *
     * @return self
     */
    public function setLocale($locale)
    {
        if (is_null($locale)) {
            throw new \InvalidArgumentException('non-nullable locale cannot be null');
        }
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \GeminiCommerce\Cart\Model\CartCartItem[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \GeminiCommerce\Cart\Model\CartCartItem[]|null $items items
     *
     * @return self
     */
    public function setItems($items)
    {
        if (is_null($items)) {
            throw new \InvalidArgumentException('non-nullable items cannot be null');
        }
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets payments
     *
     * @return \GeminiCommerce\Cart\Model\CartPaymentData[]|null
     */
    public function getPayments()
    {
        return $this->container['payments'];
    }

    /**
     * Sets payments
     *
     * @param \GeminiCommerce\Cart\Model\CartPaymentData[]|null $payments payments
     *
     * @return self
     */
    public function setPayments($payments)
    {
        if (is_null($payments)) {
            throw new \InvalidArgumentException('non-nullable payments cannot be null');
        }
        $this->container['payments'] = $payments;

        return $this;
    }

    /**
     * Gets shipments
     *
     * @return \GeminiCommerce\Cart\Model\CartShipmentData[]|null
     */
    public function getShipments()
    {
        return $this->container['shipments'];
    }

    /**
     * Sets shipments
     *
     * @param \GeminiCommerce\Cart\Model\CartShipmentData[]|null $shipments shipments
     *
     * @return self
     */
    public function setShipments($shipments)
    {
        if (is_null($shipments)) {
            throw new \InvalidArgumentException('non-nullable shipments cannot be null');
        }
        $this->container['shipments'] = $shipments;

        return $this;
    }

    /**
     * Gets promotions
     *
     * @return \GeminiCommerce\Cart\Model\CartPromotionData[]|null
     */
    public function getPromotions()
    {
        return $this->container['promotions'];
    }

    /**
     * Sets promotions
     *
     * @param \GeminiCommerce\Cart\Model\CartPromotionData[]|null $promotions promotions
     *
     * @return self
     */
    public function setPromotions($promotions)
    {
        if (is_null($promotions)) {
            throw new \InvalidArgumentException('non-nullable promotions cannot be null');
        }
        $this->container['promotions'] = $promotions;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \GeminiCommerce\Cart\Model\CartCurrency|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \GeminiCommerce\Cart\Model\CartCurrency|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets subtotals
     *
     * @return \GeminiCommerce\Cart\Model\CartCartSubtotal[]|null
     */
    public function getSubtotals()
    {
        return $this->container['subtotals'];
    }

    /**
     * Sets subtotals
     *
     * @param \GeminiCommerce\Cart\Model\CartCartSubtotal[]|null $subtotals subtotals
     *
     * @return self
     */
    public function setSubtotals($subtotals)
    {
        if (is_null($subtotals)) {
            throw new \InvalidArgumentException('non-nullable subtotals cannot be null');
        }
        $this->container['subtotals'] = $subtotals;

        return $this;
    }

    /**
     * Gets total
     *
     * @return \GeminiCommerce\Cart\Model\CartMoney|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param \GeminiCommerce\Cart\Model\CartMoney|null $total total
     *
     * @return self
     */
    public function setTotal($total)
    {
        if (is_null($total)) {
            throw new \InvalidArgumentException('non-nullable total cannot be null');
        }
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets total_due
     *
     * @return \GeminiCommerce\Cart\Model\CartMoney|null
     */
    public function getTotalDue()
    {
        return $this->container['total_due'];
    }

    /**
     * Sets total_due
     *
     * @param \GeminiCommerce\Cart\Model\CartMoney|null $total_due total_due
     *
     * @return self
     */
    public function setTotalDue($total_due)
    {
        if (is_null($total_due)) {
            throw new \InvalidArgumentException('non-nullable total_due cannot be null');
        }
        $this->container['total_due'] = $total_due;

        return $this;
    }

    /**
     * Gets vat_included
     *
     * @return bool|null
     */
    public function getVatIncluded()
    {
        return $this->container['vat_included'];
    }

    /**
     * Sets vat_included
     *
     * @param bool|null $vat_included vat_included
     *
     * @return self
     */
    public function setVatIncluded($vat_included)
    {
        if (is_null($vat_included)) {
            throw new \InvalidArgumentException('non-nullable vat_included cannot be null');
        }
        $this->container['vat_included'] = $vat_included;

        return $this;
    }

    /**
     * Gets billing_address
     *
     * @return \GeminiCommerce\Cart\Model\CartPostalAddress|null
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param \GeminiCommerce\Cart\Model\CartPostalAddress|null $billing_address billing_address
     *
     * @return self
     */
    public function setBillingAddress($billing_address)
    {
        if (is_null($billing_address)) {
            throw new \InvalidArgumentException('non-nullable billing_address cannot be null');
        }
        $this->container['billing_address'] = $billing_address;

        return $this;
    }

    /**
     * Gets shipping_address
     *
     * @return \GeminiCommerce\Cart\Model\CartPostalAddress|null
     */
    public function getShippingAddress()
    {
        return $this->container['shipping_address'];
    }

    /**
     * Sets shipping_address
     *
     * @param \GeminiCommerce\Cart\Model\CartPostalAddress|null $shipping_address shipping_address
     *
     * @return self
     */
    public function setShippingAddress($shipping_address)
    {
        if (is_null($shipping_address)) {
            throw new \InvalidArgumentException('non-nullable shipping_address cannot be null');
        }
        $this->container['shipping_address'] = $shipping_address;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \GeminiCommerce\Cart\Model\CartCartStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \GeminiCommerce\Cart\Model\CartCartStatus|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \GeminiCommerce\Cart\Model\CartCustomerData|null
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \GeminiCommerce\Cart\Model\CartCustomerData|null $customer customer
     *
     * @return self
     */
    public function setCustomer($customer)
    {
        if (is_null($customer)) {
            throw new \InvalidArgumentException('non-nullable customer cannot be null');
        }
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string|null
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string|null $notes notes
     *
     * @return self
     */
    public function setNotes($notes)
    {
        if (is_null($notes)) {
            throw new \InvalidArgumentException('non-nullable notes cannot be null');
        }
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at updated_at
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

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

