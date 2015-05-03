<?php
namespace cookieguru\phpgtfs\model;

class Stop {
	/**
	 * Required
	 * The stop_id field contains an ID that uniquely identifies a stop or station. Multiple routes may use the same stop. The stop_id is dataset unique.
	 */
	public $stop_id = null;

	/**
	 * Optional
	 * The stop_code field contains short text or a number that uniquely identifies the stop for passengers. Stop codes are often used in phone-based transit information systems or printed on stop signage to make it easier for riders to get a stop schedule or real-time arrival information for a particular stop.
	 * The stop_code field should only be used for stop codes that are displayed to passengers. For internal codes, use stop_id. This field should be left blank for stops without a code.
	 */
	public $stop_code = null;

	/**
	 * Required
	 * The stop_name field contains the name of a stop or station. Please use a name that people will understand in the local and tourist vernacular.
	 */
	public $stop_name = null;

	/**
	 * Optional
	 * The stop_desc field contains a description of a stop. Please provide useful, quality information. Do not simply duplicate the name of the stop.
	 */
	public $stop_desc = null;

	/**
	 * Required
	 * The stop_lat field contains the latitude of a stop or station. The field value must be a valid WGS 84 latitude.
	 */
	public $stop_lat = null;

	/**
	 * Required
	 * The stop_lon field contains the longitude of a stop or station. The field value must be a valid WGS 84 longitude value from -180 to 180.
	 */
	public $stop_lon = null;

	/**
	 * Optional
	 * The zone_id field defines the fare zone for a stop ID. Zone IDs are required if you want to provide fare information using fare_rules.txt. If this stop ID represents a station, the zone ID is ignored.
	 */
	public $zone_id = null;

	/**
	 * Optional
	 * The stop_url field contains the URL of a web page about a particular stop. This should be different from the agency_url and the route_url fields.
	 * The value must be a fully qualified URL that includes http:// or https://, and any special characters in the URL must be correctly escaped. See http://www.w3.org/Addressing/URL/4_URI_Recommentations.html for a description of how to create fully qualified URL values.
	 */
	public $stop_url = null;

	/**
	 * Optional
	 * The location_type field identifies whether this stop ID represents a stop or station. If no location type is specified, or the location_type is blank, stop IDs are treated as stops. Stations may have different properties from stops when they are represented on a map or used in trip planning.
	 * The location type field can have the following values:
	 *    0 or blank - Stop. A location where passengers board or disembark from a transit vehicle.
	 *    1 - Station. A physical structure or area that contains one or more stop.
	 */
	public $location_type = null;

	/**
	 * Optional
	 * For stops that are physically located inside stations, the parent_station field identifies the station associated with the stop. To use this field, stops.txt must also contain a row where this stop ID is assigned location type=1.
	 * For full docs see https://developers.google.com/transit/gtfs/reference#stops_fields
	 */
	public $parent_station = null;

	/**
	 * Optional
	 * The stop_timezone field contains the timezone in which this stop or station is located. Please refer to Wikipedia List of Timezones for a list of valid values. If omitted, the stop should be assumed to be located in the timezone specified by agency_timezone in agency.txt.
	 * When a stop has a parent station, the stop is considered to be in the timezone specified by the parent station's stop_timezone value. If the parent has no stop_timezone value, the stops that belong to that station are assumed to be in the timezone specified by agency_timezone, even if the stops have their own stop_timezone values. In other words, if a given stop has a parent_station value, any stop_timezone value specified for that stop must be ignored.
	 * Even if stop_timezone values are provided in stops.txt, the times in stop_times.txt should continue to be specified as time since midnight in the timezone specified by agency_timezone in agency.txt. This ensures that the time values in a trip always increase over the course of a trip, regardless of which timezones the trip crosses.
	 */
	public $stop_timezone = null;

	/**
	 * Optional
	 * The wheelchair_boarding field identifies whether wheelchair boardings are possible from the specified stop or station. The field can have the following values:
	 *     0 (or empty) - indicates that there is no accessibility information for the stop
	 *     1 - indicates that at least some vehicles at this stop can be boarded by a rider in a wheelchair
	 *     2 - wheelchair boarding is not possible at this stop
	 * When a stop is part of a larger station complex, as indicated by a stop with a parent_station value, the stop's wheelchair_boarding field has the following additional semantics:
	 *     0 (or empty) - the stop will inherit its wheelchair_boarding value from the parent station, if specified in the parent
	 *     1 - there exists some accessible path from outside the station to the specific stop / platform
	 *     2 - there exists no accessible path from outside the station to the specific stop / platform
	 */
	public $wheelchair_boarding = null;

	public function __toArray() {
		return [
			'stop_id' => $this->stop_id,
			'stop_code' => $this->stop_code,
			'stop_name' => $this->stop_name,
			'stop_desc' => $this->stop_desc,
			'stop_lat' => $this->stop_lat,
			'stop_lon' => $this->stop_lon,
			'zone_id' => $this->zone_id,
			'stop_url' => $this->stop_url,
			'location_type' => $this->location_type,
			'parent_station' => $this->parent_station,
			'stop_timezone' => $this->stop_timezone,
			'wheelchair_boarding' => $this->wheelchair_boarding,
		];
	}
}