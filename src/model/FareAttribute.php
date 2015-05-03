<?php
namespace cookieguru\phpgtfs\model;

class FareAttribute {
	/**
	 * Required
	 * The fare_id field contains an ID that uniquely identifies a fare class. The fare_id is dataset unique.
	 */
	public $fare_id;

	/**
	 * Required
	 * The price field contains the fare price, in the unit specified by currency_type.
	 */
	public $price;

	/**
	 * Required
	 * The currency_type field defines the currency used to pay the fare. Please use the ISO 4217 alphabetical currency codes which can be found at the following URL: http://en.wikipedia.org/wiki/ISO_4217.
	 */
	public $currency_type;

	/**
	 * Required
	 * The payment_method field indicates when the fare must be paid. Valid values for this field are:
	 *     0 - Fare is paid on board.
	 *     1 - Fare must be paid before boarding.
	 */
	public $payment_method;

	/**
	 * Required
	 * The transfers field specifies the number of transfers permitted on this fare. Valid values for this field are:
	 *     0 - No transfers permitted on this fare.
	 *     1 - Passenger may transfer once.
	 *     2 - Passenger may transfer twice.
	 *     (empty) - If this field is empty, unlimited transfers are permitted.
	 */
	public $transfers;

	/**
	 * Optional
	 * The transfer_duration field specifies the length of time in seconds before a transfer expires.
	 * When used with a transfers value of 0, the transfer_duration field indicates how long a ticket is valid for a fare where no transfers are allowed. Unless you intend to use this field to indicate ticket validity, transfer_duration should be omitted or empty when transfers is set to 0.
	 */
	public $transfer_duration;

	public function __toArray() {
		return [
			'fare_id' => $this->fare_id,
			'price' => $this->price,
			'currency_type' => $this->currency_type,
			'payment_method' => $this->payment_method,
			'transfers' => $this->transfers,
			'transfer_duration' => $this->transfer_duration,
		];
	}
}