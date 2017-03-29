<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * V1Tender Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://squareup.com/developers
 */
class V1Tender implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'type' => 'string',
        'name' => 'string',
        'employee_id' => 'string',
        'receipt_url' => 'string',
        'card_brand' => 'string',
        'pan_suffix' => 'string',
        'entry_method' => 'string',
        'payment_note' => 'string',
        'total_money' => '\SquareConnect\Model\V1Money',
        'tendered_money' => '\SquareConnect\Model\V1Money',
        'change_back_money' => '\SquareConnect\Model\V1Money',
        'refunded_money' => '\SquareConnect\Model\V1Money'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'type' => 'type',
        'name' => 'name',
        'employee_id' => 'employee_id',
        'receipt_url' => 'receipt_url',
        'card_brand' => 'card_brand',
        'pan_suffix' => 'pan_suffix',
        'entry_method' => 'entry_method',
        'payment_note' => 'payment_note',
        'total_money' => 'total_money',
        'tendered_money' => 'tendered_money',
        'change_back_money' => 'change_back_money',
        'refunded_money' => 'refunded_money'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'type' => 'setType',
        'name' => 'setName',
        'employee_id' => 'setEmployeeId',
        'receipt_url' => 'setReceiptUrl',
        'card_brand' => 'setCardBrand',
        'pan_suffix' => 'setPanSuffix',
        'entry_method' => 'setEntryMethod',
        'payment_note' => 'setPaymentNote',
        'total_money' => 'setTotalMoney',
        'tendered_money' => 'setTenderedMoney',
        'change_back_money' => 'setChangeBackMoney',
        'refunded_money' => 'setRefundedMoney'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'type' => 'getType',
        'name' => 'getName',
        'employee_id' => 'getEmployeeId',
        'receipt_url' => 'getReceiptUrl',
        'card_brand' => 'getCardBrand',
        'pan_suffix' => 'getPanSuffix',
        'entry_method' => 'getEntryMethod',
        'payment_note' => 'getPaymentNote',
        'total_money' => 'getTotalMoney',
        'tendered_money' => 'getTenderedMoney',
        'change_back_money' => 'getChangeBackMoney',
        'refunded_money' => 'getRefundedMoney'
    );
  
    /**
      * $id The tender's unique ID.
      * @var string
      */
    protected $id;
    /**
      * $type The type of tender.
      * @var string
      */
    protected $type;
    /**
      * $name A human-readable description of the tender.
      * @var string
      */
    protected $name;
    /**
      * $employee_id The ID of the employee that processed the tender.
      * @var string
      */
    protected $employee_id;
    /**
      * $receipt_url The URL of the receipt for the tender.
      * @var string
      */
    protected $receipt_url;
    /**
      * $card_brand The brand of credit card provided.
      * @var string
      */
    protected $card_brand;
    /**
      * $pan_suffix The last four digits of the provided credit card's account number.
      * @var string
      */
    protected $pan_suffix;
    /**
      * $entry_method The tender's unique ID.
      * @var string
      */
    protected $entry_method;
    /**
      * $payment_note Notes entered by the merchant about the tender at the time of payment, if any. Typically only present for tender with the type: OTHER.
      * @var string
      */
    protected $payment_note;
    /**
      * $total_money The total amount of money provided in this form of tender.
      * @var \SquareConnect\Model\V1Money
      */
    protected $total_money;
    /**
      * $tendered_money The amount of total_money applied to the payment.
      * @var \SquareConnect\Model\V1Money
      */
    protected $tendered_money;
    /**
      * $change_back_money The amount of total_money returned to the buyer as change.
      * @var \SquareConnect\Model\V1Money
      */
    protected $change_back_money;
    /**
      * $refunded_money The total of all refunds applied to this tender. This amount is always negative or zero.
      * @var \SquareConnect\Model\V1Money
      */
    protected $refunded_money;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->id = $data["id"];
            $this->type = $data["type"];
            $this->name = $data["name"];
            $this->employee_id = $data["employee_id"];
            $this->receipt_url = $data["receipt_url"];
            $this->card_brand = $data["card_brand"];
            $this->pan_suffix = $data["pan_suffix"];
            $this->entry_method = $data["entry_method"];
            $this->payment_note = $data["payment_note"];
            $this->total_money = $data["total_money"];
            $this->tendered_money = $data["tendered_money"];
            $this->change_back_money = $data["change_back_money"];
            $this->refunded_money = $data["refunded_money"];
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
     * @param string $id The tender's unique ID.
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
  
    /**
     * Sets type
     * @param string $type The type of tender.
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
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
     * @param string $name A human-readable description of the tender.
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Gets employee_id
     * @return string
     */
    public function getEmployeeId()
    {
        return $this->employee_id;
    }
  
    /**
     * Sets employee_id
     * @param string $employee_id The ID of the employee that processed the tender.
     * @return $this
     */
    public function setEmployeeId($employee_id)
    {
        $this->employee_id = $employee_id;
        return $this;
    }
    /**
     * Gets receipt_url
     * @return string
     */
    public function getReceiptUrl()
    {
        return $this->receipt_url;
    }
  
    /**
     * Sets receipt_url
     * @param string $receipt_url The URL of the receipt for the tender.
     * @return $this
     */
    public function setReceiptUrl($receipt_url)
    {
        $this->receipt_url = $receipt_url;
        return $this;
    }
    /**
     * Gets card_brand
     * @return string
     */
    public function getCardBrand()
    {
        return $this->card_brand;
    }
  
    /**
     * Sets card_brand
     * @param string $card_brand The brand of credit card provided.
     * @return $this
     */
    public function setCardBrand($card_brand)
    {
        $this->card_brand = $card_brand;
        return $this;
    }
    /**
     * Gets pan_suffix
     * @return string
     */
    public function getPanSuffix()
    {
        return $this->pan_suffix;
    }
  
    /**
     * Sets pan_suffix
     * @param string $pan_suffix The last four digits of the provided credit card's account number.
     * @return $this
     */
    public function setPanSuffix($pan_suffix)
    {
        $this->pan_suffix = $pan_suffix;
        return $this;
    }
    /**
     * Gets entry_method
     * @return string
     */
    public function getEntryMethod()
    {
        return $this->entry_method;
    }
  
    /**
     * Sets entry_method
     * @param string $entry_method The tender's unique ID.
     * @return $this
     */
    public function setEntryMethod($entry_method)
    {
        $this->entry_method = $entry_method;
        return $this;
    }
    /**
     * Gets payment_note
     * @return string
     */
    public function getPaymentNote()
    {
        return $this->payment_note;
    }
  
    /**
     * Sets payment_note
     * @param string $payment_note Notes entered by the merchant about the tender at the time of payment, if any. Typically only present for tender with the type: OTHER.
     * @return $this
     */
    public function setPaymentNote($payment_note)
    {
        $this->payment_note = $payment_note;
        return $this;
    }
    /**
     * Gets total_money
     * @return \SquareConnect\Model\V1Money
     */
    public function getTotalMoney()
    {
        return $this->total_money;
    }
  
    /**
     * Sets total_money
     * @param \SquareConnect\Model\V1Money $total_money The total amount of money provided in this form of tender.
     * @return $this
     */
    public function setTotalMoney($total_money)
    {
        $this->total_money = $total_money;
        return $this;
    }
    /**
     * Gets tendered_money
     * @return \SquareConnect\Model\V1Money
     */
    public function getTenderedMoney()
    {
        return $this->tendered_money;
    }
  
    /**
     * Sets tendered_money
     * @param \SquareConnect\Model\V1Money $tendered_money The amount of total_money applied to the payment.
     * @return $this
     */
    public function setTenderedMoney($tendered_money)
    {
        $this->tendered_money = $tendered_money;
        return $this;
    }
    /**
     * Gets change_back_money
     * @return \SquareConnect\Model\V1Money
     */
    public function getChangeBackMoney()
    {
        return $this->change_back_money;
    }
  
    /**
     * Sets change_back_money
     * @param \SquareConnect\Model\V1Money $change_back_money The amount of total_money returned to the buyer as change.
     * @return $this
     */
    public function setChangeBackMoney($change_back_money)
    {
        $this->change_back_money = $change_back_money;
        return $this;
    }
    /**
     * Gets refunded_money
     * @return \SquareConnect\Model\V1Money
     */
    public function getRefundedMoney()
    {
        return $this->refunded_money;
    }
  
    /**
     * Sets refunded_money
     * @param \SquareConnect\Model\V1Money $refunded_money The total of all refunds applied to this tender. This amount is always negative or zero.
     * @return $this
     */
    public function setRefundedMoney($refunded_money)
    {
        $this->refunded_money = $refunded_money;
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
