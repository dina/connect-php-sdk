<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * V1Merchant Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://squareup.com/developers
 */
class V1Merchant implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'name' => 'string',
        'email' => 'string',
        'account_type' => 'string',
        'account_capabilities' => 'string[]',
        'country_code' => 'string',
        'language_code' => 'string',
        'currency_code' => 'string',
        'business_name' => 'string',
        'business_address' => '\SquareConnect\Model\Address',
        'business_phone' => '\SquareConnect\Model\V1PhoneNumber',
        'business_type' => 'string',
        'shipping_address_' => '\SquareConnect\Model\Address',
        'location_details' => '\SquareConnect\Model\V1MerchantLocationDetails',
        'market_url' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'name' => 'name',
        'email' => 'email',
        'account_type' => 'account_type',
        'account_capabilities' => 'account_capabilities',
        'country_code' => 'country_code',
        'language_code' => 'language_code',
        'currency_code' => 'currency_code',
        'business_name' => 'business_name',
        'business_address' => 'business_address',
        'business_phone' => 'business_phone',
        'business_type' => 'business_type',
        'shipping_address_' => 'shipping_address ',
        'location_details' => 'location_details',
        'market_url' => 'market_url'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'name' => 'setName',
        'email' => 'setEmail',
        'account_type' => 'setAccountType',
        'account_capabilities' => 'setAccountCapabilities',
        'country_code' => 'setCountryCode',
        'language_code' => 'setLanguageCode',
        'currency_code' => 'setCurrencyCode',
        'business_name' => 'setBusinessName',
        'business_address' => 'setBusinessAddress',
        'business_phone' => 'setBusinessPhone',
        'business_type' => 'setBusinessType',
        'shipping_address_' => 'setShippingAddress_',
        'location_details' => 'setLocationDetails',
        'market_url' => 'setMarketUrl'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'name' => 'getName',
        'email' => 'getEmail',
        'account_type' => 'getAccountType',
        'account_capabilities' => 'getAccountCapabilities',
        'country_code' => 'getCountryCode',
        'language_code' => 'getLanguageCode',
        'currency_code' => 'getCurrencyCode',
        'business_name' => 'getBusinessName',
        'business_address' => 'getBusinessAddress',
        'business_phone' => 'getBusinessPhone',
        'business_type' => 'getBusinessType',
        'shipping_address_' => 'getShippingAddress_',
        'location_details' => 'getLocationDetails',
        'market_url' => 'getMarketUrl'
    );
  
    /**
      * $id The merchant account's unique identifier.
      * @var string
      */
    protected $id;
    /**
      * $name The name associated with the merchant account.
      * @var string
      */
    protected $name;
    /**
      * $email The email address associated with the merchant account.
      * @var string
      */
    protected $email;
    /**
      * $account_type Indicates whether the merchant account corresponds to a single-location account (LOCATION) or a business account (BUSINESS). This value is almost always LOCATION.
      * @var string
      */
    protected $account_type;
    /**
      * $account_capabilities Capabilities that are enabled for the merchant's Square account. Capabilities that are not listed in this array are not enabled for the account.
      * @var string[]
      */
    protected $account_capabilities;
    /**
      * $country_code The country associated with the merchant account, in ISO 3166-1-alpha-2 format.
      * @var string
      */
    protected $country_code;
    /**
      * $language_code The language associated with the merchant account, in BCP 47 format.
      * @var string
      */
    protected $language_code;
    /**
      * $currency_code The currency associated with the merchant account, in ISO 4217 format. For example, the currency code for US dollars is USD.
      * @var string
      */
    protected $currency_code;
    /**
      * $business_name The name of the merchant's business.
      * @var string
      */
    protected $business_name;
    /**
      * $business_address The address of the merchant's business.
      * @var \SquareConnect\Model\Address
      */
    protected $business_address;
    /**
      * $business_phone The phone number of the merchant's business.
      * @var \SquareConnect\Model\V1PhoneNumber
      */
    protected $business_phone;
    /**
      * $business_type The type of business operated by the merchant.
      * @var string
      */
    protected $business_type;
    /**
      * $shipping_address_ The merchant's shipping address.
      * @var \SquareConnect\Model\Address
      */
    protected $shipping_address_;
    /**
      * $location_details 
      * @var \SquareConnect\Model\V1MerchantLocationDetails
      */
    protected $location_details;
    /**
      * $market_url The URL of the merchant's online store.
      * @var string
      */
    protected $market_url;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->id = $data["id"];
            $this->name = $data["name"];
            $this->email = $data["email"];
            $this->account_type = $data["account_type"];
            $this->account_capabilities = $data["account_capabilities"];
            $this->country_code = $data["country_code"];
            $this->language_code = $data["language_code"];
            $this->currency_code = $data["currency_code"];
            $this->business_name = $data["business_name"];
            $this->business_address = $data["business_address"];
            $this->business_phone = $data["business_phone"];
            $this->business_type = $data["business_type"];
            $this->shipping_address_ = $data["shipping_address_"];
            $this->location_details = $data["location_details"];
            $this->market_url = $data["market_url"];
        }
    }
    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Sets id
     * @param string $id The merchant account's unique identifier.
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
  
    /**
     * Sets name
     * @param string $name The name associated with the merchant account.
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
  
    /**
     * Sets email
     * @param string $email The email address associated with the merchant account.
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
    /**
     * Gets account_type
     * @return string
     */
    public function getAccountType()
    {
        return $this->account_type;
    }
  
    /**
     * Sets account_type
     * @param string $account_type Indicates whether the merchant account corresponds to a single-location account (LOCATION) or a business account (BUSINESS). This value is almost always LOCATION.
     * @return $this
     */
    public function setAccountType($account_type)
    {
        $this->account_type = $account_type;
        return $this;
    }
    /**
     * Gets account_capabilities
     * @return string[]
     */
    public function getAccountCapabilities()
    {
        return $this->account_capabilities;
    }
  
    /**
     * Sets account_capabilities
     * @param string[] $account_capabilities Capabilities that are enabled for the merchant's Square account. Capabilities that are not listed in this array are not enabled for the account.
     * @return $this
     */
    public function setAccountCapabilities($account_capabilities)
    {
        $this->account_capabilities = $account_capabilities;
        return $this;
    }
    /**
     * Gets country_code
     * @return string
     */
    public function getCountryCode()
    {
        return $this->country_code;
    }
  
    /**
     * Sets country_code
     * @param string $country_code The country associated with the merchant account, in ISO 3166-1-alpha-2 format.
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->country_code = $country_code;
        return $this;
    }
    /**
     * Gets language_code
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }
  
    /**
     * Sets language_code
     * @param string $language_code The language associated with the merchant account, in BCP 47 format.
     * @return $this
     */
    public function setLanguageCode($language_code)
    {
        $this->language_code = $language_code;
        return $this;
    }
    /**
     * Gets currency_code
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currency_code;
    }
  
    /**
     * Sets currency_code
     * @param string $currency_code The currency associated with the merchant account, in ISO 4217 format. For example, the currency code for US dollars is USD.
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->currency_code = $currency_code;
        return $this;
    }
    /**
     * Gets business_name
     * @return string
     */
    public function getBusinessName()
    {
        return $this->business_name;
    }
  
    /**
     * Sets business_name
     * @param string $business_name The name of the merchant's business.
     * @return $this
     */
    public function setBusinessName($business_name)
    {
        $this->business_name = $business_name;
        return $this;
    }
    /**
     * Gets business_address
     * @return \SquareConnect\Model\Address
     */
    public function getBusinessAddress()
    {
        return $this->business_address;
    }
  
    /**
     * Sets business_address
     * @param \SquareConnect\Model\Address $business_address The address of the merchant's business.
     * @return $this
     */
    public function setBusinessAddress($business_address)
    {
        $this->business_address = $business_address;
        return $this;
    }
    /**
     * Gets business_phone
     * @return \SquareConnect\Model\V1PhoneNumber
     */
    public function getBusinessPhone()
    {
        return $this->business_phone;
    }
  
    /**
     * Sets business_phone
     * @param \SquareConnect\Model\V1PhoneNumber $business_phone The phone number of the merchant's business.
     * @return $this
     */
    public function setBusinessPhone($business_phone)
    {
        $this->business_phone = $business_phone;
        return $this;
    }
    /**
     * Gets business_type
     * @return string
     */
    public function getBusinessType()
    {
        return $this->business_type;
    }
  
    /**
     * Sets business_type
     * @param string $business_type The type of business operated by the merchant.
     * @return $this
     */
    public function setBusinessType($business_type)
    {
        $this->business_type = $business_type;
        return $this;
    }
    /**
     * Gets shipping_address_
     * @return \SquareConnect\Model\Address
     */
    public function getShippingAddress_()
    {
        return $this->shipping_address_;
    }
  
    /**
     * Sets shipping_address_
     * @param \SquareConnect\Model\Address $shipping_address_ The merchant's shipping address.
     * @return $this
     */
    public function setShippingAddress_($shipping_address_)
    {
        $this->shipping_address_ = $shipping_address_;
        return $this;
    }
    /**
     * Gets location_details
     * @return \SquareConnect\Model\V1MerchantLocationDetails
     */
    public function getLocationDetails()
    {
        return $this->location_details;
    }
  
    /**
     * Sets location_details
     * @param \SquareConnect\Model\V1MerchantLocationDetails $location_details 
     * @return $this
     */
    public function setLocationDetails($location_details)
    {
        $this->location_details = $location_details;
        return $this;
    }
    /**
     * Gets market_url
     * @return string
     */
    public function getMarketUrl()
    {
        return $this->market_url;
    }
  
    /**
     * Sets market_url
     * @param string $market_url The URL of the merchant's online store.
     * @return $this
     */
    public function setMarketUrl($market_url)
    {
        $this->market_url = $market_url;
        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
