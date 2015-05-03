<?php
namespace cookieguru\phpgtfs\model;

class StopTime {
	/**
	 * Required
	 * The trip_id field contains an ID that identifies a trip. This value is referenced from the trips.txt file.
	 */
	public $trip_id;
	
	/**
	 * Required
	 * The arrival_time specifies the arrival time at a specific stop for a specific trip on a route. The time is measured from "noon minus 12h" (effectively midnight, except for days on which daylight savings time changes occur) at the beginning of the service date. For times occurring after midnight on the service date, enter the time as a value greater than 24:00:00 in HH:MM:SS local time for the day on which the trip schedule begins. If you don't have separate times for arrival and departure at a stop, enter the same value for arrival_time and departure_time.
	 * If this stop isn't a time point, use an empty string value for the arrival_time and departure_time fields. Stops without arrival times will be scheduled based on the nearest preceding timed stop. To ensure accurate routing, please provide arrival and departure times for all stops that are time points. Do not interpolate stops.
	 * You must specify arrival and departure times for the first and last stops in a trip.
	 * Times must be eight digits in HH:MM:SS format (H:MM:SS is also accepted, if the hour begins with 0). Do not pad times with spaces. The following columns list stop times for a trip and the proper way to express those times in the arrival_time field:
	 * Note: Trips that span multiple dates will have stop times greater than 24:00:00. For example, if a trip begins at 10:30:00 p.m. and ends at 2:15:00 a.m. on the following day, the stop times would be 22:30:00 and 26:15:00. Entering those stop times as 22:30:00 and 02:15:00 would not produce the desired results.
	 */
	public $arrival_time;
	
	/**
	 * Required
	 * The departure_time specifies the departure time from a specific stop for a specific trip on a route. The time is measured from "noon minus 12h" (effectively midnight, except for days on which daylight savings time changes occur) at the beginning of the service date. For times occurring after midnight on the service date, enter the time as a value greater than 24:00:00 in HH:MM:SS local time for the day on which the trip schedule begins. If you don't have separate times for arrival and departure at a stop, enter the same value for arrival_time and departure_time.
	 * If this stop isn't a time point, use an empty string value for the arrival_time and departure_time fields. Stops without arrival times will be scheduled based on the nearest preceding timed stop. To ensure accurate routing, please provide arrival and departure times for all stops that are time points. Do not interpolate stops.
	 * You must specify arrival and departure times for the first and last stops in a trip.
	 * Times must be eight digits in HH:MM:SS format (H:MM:SS is also accepted, if the hour begins with 0). Do not pad times with spaces. The following columns list stop times for a trip and the proper way to express those times in the departure_time field:
	 * Note: Trips that span multiple dates will have stop times greater than 24:00:00. For example, if a trip begins at 10:30:00 p.m. and ends at 2:15:00 a.m. on the following day, the stop times would be 22:30:00 and 26:15:00. Entering those stop times as 22:30:00 and 02:15:00 would not produce the desired results.
	 */
	public $departure_time;
	
	/**
	 * Required
	 * The stop_id field contains an ID that uniquely identifies a stop. Multiple routes may use the same stop. The stop_id is referenced from the stops.txt file. If location_type is used in stops.txt, all stops referenced in stop_times.txt must have location_type of 0.
	 * Where possible, stop_id values should remain consistent between feed updates. In other words, stop A with stop_id 1 should have stop_id 1 in all subsequent data updates. If a stop is not a time point, enter blank values for arrival_time and departure_time.
	 */
	public $stop_id;
	
	/**
	 * Required
	 * The stop_sequence field identifies the order of the stops for a particular trip. The values for stop_sequence must be non-negative integers, and they must increase along the trip.
	 * For example, the first stop on the trip could have a stop_sequence of 1, the second stop on the trip could have a stop_sequence of 23, the third stop could have a stop_sequence of 40, and so on.
	 */
	public $stop_sequence;
	
	/**
	 * Optional
	 * The stop_headsign field contains the text that appears on a sign that identifies the trip's destination to passengers. Use this field to override the default trip_headsign when the headsign changes between stops. If this headsign is associated with an entire trip, use trip_headsign instead.
	 */
	public $stop_headsign;
	
	/**
	 * Optional
	 * The pickup_type field indicates whether passengers are picked up at a stop as part of the normal schedule or whether a pickup at the stop is not available. This field also allows the transit agency to indicate that passengers must call the agency or notify the driver to arrange a pickup at a particular stop. Valid values for this field are:
	 *     0 - Regularly scheduled pickup
	 *     1 - No pickup available
	 *     2 - Must phone agency to arrange pickup
	 *     3 - Must coordinate with driver to arrange pickup
	 * The default value for this field is 0.
	 */
	public $pickup_type;
	
	/**
	 * Optional
	 * The drop_off_type field indicates whether passengers are dropped off at a stop as part of the normal schedule or whether a drop off at the stop is not available. This field also allows the transit agency to indicate that passengers must call the agency or notify the driver to arrange a drop off at a particular stop. Valid values for this field are:
	 *     0 - Regularly scheduled drop off
	 *     1 - No drop off available
	 *     2 - Must phone agency to arrange drop off
	 *     3 - Must coordinate with driver to arrange drop off
	 * The default value for this field is 0.
	 */
	public $drop_off_type;
	
	/**
	 * Optional
	 * When used in the stop_times.txt file, the shape_dist_traveled field positions a stop as a distance from the first shape point. The shape_dist_traveled field represents a real distance traveled along the route in units such as feet or kilometers. For example, if a bus travels a distance of 5.25 kilometers from the start of the shape to the stop, the shape_dist_traveled for the stop ID would be entered as "5.25". This information allows the trip planner to determine how much of the shape to draw when showing part of a trip on the map. The values used for shape_dist_traveled must increase along with stop_sequence: they cannot be used to show reverse travel along a route.
	 * The units used for shape_dist_traveled in the stop_times.txt file must match the units that are used for this field in the shapes.txt file.
	 */
	public $shape_dist_traveled;
	
	/**
	 * Optional
	 * The timepoint field can be used to indicate if the specified arrival and departure times for a stop are strictly adhered to by the transit vehicle or if they are instead approximate and/or interpolated times. The field allows a GTFS producer to provide interpolated stop times that potentially incorporate local knowledge, but still indicate if the times are approximate. For stop-time entries with specified arrival and departure times, valid values for this field are:
	 *     empty - Times are considered exact.
	 *     0 - Times are considered approximate.
	 *     1 - Times are considered exact.
	 * For stop-time entries without specified arrival and departure times, feed consumers must interpolate arrival and departure times. Feed producers may optionally indicate that such an entry is not a timepoint (value=0) but it is an error to mark a entry as a timepoint (value=1) without specifying arrival and departure times.
	 */
	public $timepoint;

	public function __toArray() {
		return [
			'trip_id' => $this->trip_id,
			'arrival_time' => $this->arrival_time,
			'departure_time' => $this->departure_time,
			'stop_id' => $this->stop_id,
			'stop_sequence' => $this->stop_sequence,
			'stop_headsign' => $this->stop_headsign,
			'pickup_type' => $this->pickup_type,
			'drop_off_type' => $this->drop_off_type,
			'shape_dist_traveled' => $this->shape_dist_traveled,
			'timepoint' => $this->timepoint,
		];
	}
}