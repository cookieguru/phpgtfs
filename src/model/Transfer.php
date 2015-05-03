<?php
namespace cookieguru\phpgtfs\model;

class Transfer {
	/**
	 * Required
	 * The from_stop_id field contains a stop ID that identifies a stop or station where a connection between routes begins. Stop IDs are referenced from the stops.txt file. If the stop ID refers to a station that contains multiple stops, this transfer rule applies to all stops in that station.
	 */
	public $from_stop_id;

	/**
	 * Required
	 * The to_stop_id field contains a stop ID that identifies a stop or station where a connection between routes ends. Stop IDs are referenced from the stops.txt file. If the stop ID refers to a station that contains multiple stops, this transfer rule applies to all stops in that station.
	 */
	public $to_stop_id;

	/**
	 * Required
	 * The transfer_type field specifies the type of connection for the specified (from_stop_id, to_stop_id) pair. Valid values for this field are:
	 *     0 or (empty) - This is a recommended transfer point between two routes.
	 *     1 - This is a timed transfer point between two routes. The departing vehicle is expected to wait for the arriving one, with sufficient time for a passenger to transfer between routes.
	 *     2 - This transfer requires a minimum amount of time between arrival and departure to ensure a connection. The time required to transfer is specified by min_transfer_time.
	 *     3 - Transfers are not possible between routes at this location.
	 */
	public $transfer_type;

	/**
	 * Optional
	 * When a connection between routes requires an amount of time between arrival and departure (transfer_type=2), the min_transfer_time field defines the amount of time that must be available in an itinerary to permit a transfer between routes at these stops. The min_transfer_time must be sufficient to permit a typical rider to move between the two stops, including buffer time to allow for schedule variance on each route.
	 * The min_transfer_time value must be entered in seconds, and must be a non-negative integer.
	 */
	public $min_transfer_time;

	public function __toArray() {
		return [
			'from_stop_id' => $this->from_stop_id,
			'to_stop_id' => $this->to_stop_id,
			'transfer_type' => $this->transfer_type,
			'min_transfer_time' => $this->min_transfer_time,
		];
	}
}