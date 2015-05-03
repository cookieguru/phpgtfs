<?php
namespace cookieguru\phpgtfs\model;

class FareRule {
	/**
	 * Required
	 * The fare_id field contains an ID that uniquely identifies a fare class. This value is referenced from the fare_attributes.txt file.
	 */
	public $fare_id;

	/**
	 * Optional
	 * The route_id field associates the fare ID with a route. Route IDs are referenced from the routes.txt file. If you have several routes with the same fare attributes, create a row in fare_rules.txt for each route.
	 */
	public $route_id;

	/**
	 * Optional
	 * The origin_id field associates the fare ID with an origin zone ID. Zone IDs are referenced from the stops.txt file. If you have several origin IDs with the same fare attributes, create a row in fare_rules.txt for each origin ID.
	 */
	public $origin_id;

	/**
	 * Optional
	 * The destination_id field associates the fare ID with a destination zone ID. Zone IDs are referenced from the stops.txt file. If you have several destination IDs with the same fare attributes, create a row in fare_rules.txt for each destination ID.
	 */
	public $destination_id;

	/**
	 * Optional
	 * The contains_id field associates the fare ID with a zone ID, referenced from the stops.txt file. The fare ID is then associated with itineraries that pass through every contains_id zone.
	 */
	public $contains_id;

	public function __toArray() {
		return [
			'fare_id' => $this->fare_id,
			'route_id' => $this->route_id,
			'origin_id' => $this->origin_id,
			'destination_id' => $this->destination_id,
			'contains_id' => $this->contains_id,
		];
	}
}