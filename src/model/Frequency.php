<?php
namespace cookieguru\phpgtfs\model;

class Frequency {
	/**
	 * Required
	 * The trip_id contains an ID that identifies a trip on which the specified frequency of service applies. Trip IDs are referenced from the trips.txt file.
	 */
	public $trip_id;

	/**
	 * Required
	 * The start_time field specifies the time at which service begins with the specified frequency. The time is measured from "noon minus 12h" (effectively midnight, except for days on which daylight savings time changes occur) at the beginning of the service date. For times occurring after midnight, enter the time as a value greater than 24:00:00 in HH:MM:SS local time for the day on which the trip schedule begins. E.g. 25:35:00.
	 */
	public $start_time;

	/**
	 * Required
	 * The end_time field indicates the time at which service changes to a different frequency (or ceases) at the first stop in the trip. The time is measured from "noon minus 12h" (effectively midnight, except for days on which daylight savings time changes occur) at the beginning of the service date. For times occurring after midnight, enter the time as a value greater than 24:00:00 in HH:MM:SS local time for the day on which the trip schedule begins. E.g. 25:35:00.
	 */
	public $end_time;

	/**
	 * Required
	 * The headway_secs field indicates the time between departures from the same stop (headway) for this trip type, during the time interval specified by start_time and end_time. The headway value must be entered in seconds.
	 * Periods in which headways are defined (the rows in frequencies.txt) shouldn't overlap for the same trip, since it's hard to determine what should be inferred from two overlapping headways. However, a headway period may begin at the exact same time that another one ends
	 */
	public $headway_secs;

	/**
	 * Optional
	 * The exact_times field determines if frequency-based trips should be exactly scheduled based on the specified headway information. Valid values for this field are:
	 *     0 or (empty) - Frequency-based trips are not exactly scheduled. This is the default behavior.
	 *     1 - Frequency-based trips are exactly scheduled. For a frequencies.txt row, trips are scheduled starting with trip_start_time = start_time + x * headway_secs for all x in (0, 1, 2, ...) where trip_start_time < end_time.
	 * The value of exact_times must be the same for all frequencies.txt rows with the same trip_id. If exact_times is 1 and a frequencies.txt row has a start_time equal to end_time, no trip must be scheduled. When exact_times is 1, care must be taken to choose an end_time value that is greater than the last desired trip start time but less than the last desired trip start time + headway_secs.
	 */
	public $exact_times;

	public function __toArray() {
		return [
			'trip_id' => $this->trip_id,
			'start_time' => $this->start_time,
			'end_time' => $this->end_time,
			'headway_secs' => $this->headway_secs,
			'exact_times' => $this->exact_times,
		];
	}
}