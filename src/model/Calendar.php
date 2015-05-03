<?php
namespace cookieguru\phpgtfs\model;

class Calendar {
	/**
	 * Required
	 * The service_id contains an ID that uniquely identifies a set of dates when service is available for one or more routes. Each service_id value can appear at most once in a calendar.txt file. This value is dataset unique. It is referenced by the trips.txt file.
	 */
	public $service_id;

	/**
	 * Required
	 * The monday field contains a binary value that indicates whether the service is valid for all Mondays.
	 *     A value of 1 indicates that service is available for all Mondays in the date range. (The date range is specified using the start_date and end_date fields.)
	 *     A value of 0 indicates that service is not available on Mondays in the date range.
	 * Note: You may list exceptions for particular dates, such as holidays, in the calendar_dates.txt file.
	 */
	public $monday;

	/**
	 * Required
	 * The tuesday field contains a binary value that indicates whether the service is valid for all Tuesdays.
	 *     A value of 1 indicates that service is available for all Tuesdays in the date range. (The date range is specified using the start_date and end_date fields.)
	 *     A value of 0 indicates that service is not available on Tuesdays in the date range.
	 * Note: You may list exceptions for particular dates, such as holidays, in the calendar_dates.txt file.
	 */
	public $tuesday;

	/**
	 * Required
	 * The wednesday field contains a binary value that indicates whether the service is valid for all Wednesdays.
	 *     A value of 1 indicates that service is available for all Wednesdays in the date range. (The date range is specified using the start_date and end_date fields.)
	 *     A value of 0 indicates that service is not available on Wednesdays in the date range.
	 * Note: You may list exceptions for particular dates, such as holidays, in the calendar_dates.txt file.
	 */
	public $wednesday;

	/**
	 * Required
	 * The thursday field contains a binary value that indicates whether the service is valid for all Thursdays.
	 *     A value of 1 indicates that service is available for all Thursdays in the date range. (The date range is specified using the start_date and end_date fields.)
	 *     A value of 0 indicates that service is not available on Thursdays in the date range.
	 * Note: You may list exceptions for particular dates, such as holidays, in the calendar_dates.txt file.
	 */
	public $thursday;

	/**
	 * Required
	 * The friday field contains a binary value that indicates whether the service is valid for all Fridays.
	 *     A value of 1 indicates that service is available for all Fridays in the date range. (The date range is specified using the start_date and end_date fields.)
	 *     A value of 0 indicates that service is not available on Fridays in the date range.
	 * Note: You may list exceptions for particular dates, such as holidays, in the calendar_dates.txt file
	 */
	public $friday;

	/**
	 * Required
	 * The saturday field contains a binary value that indicates whether the service is valid for all Saturdays.
	 *     A value of 1 indicates that service is available for all Saturdays in the date range. (The date range is specified using the start_date and end_date fields.)
	 *     A value of 0 indicates that service is not available on Saturdays in the date range.
	 * Note: You may list exceptions for particular dates, such as holidays, in the calendar_dates.txt file.
	 */
	public $saturday;

	/**
	 * Required
	 * The sunday field contains a binary value that indicates whether the service is valid for all Sundays.
	 *     A value of 1 indicates that service is available for all Sundays in the date range. (The date range is specified using the start_date and end_date fields.)
	 *     A value of 0 indicates that service is not available on Sundays in the date range.
	 * Note: You may list exceptions for particular dates, such as holidays, in the calendar_dates.txt file.
	 */
	public $sunday;

	/**
	 * Required
	 * The start_date field contains the start date for the service.
	 * The start_date field's value should be in YYYYMMDD format.
	 */
	public $start_date;

	/**
	 * Required
	 * The end_date field contains the end date for the service. This date is included in the service interval.
	 * The end_date field's value should be in YYYYMMDD format.
	 */
	public $end_date;

	public function __toArray() {
		return [
			'service_id' => $this->service_id,
			'monday' => $this->monday,
			'tuesday' => $this->tuesday,
			'wednesday' => $this->wednesday,
			'thursday' => $this->thursday,
			'friday' => $this->friday,
			'saturday' => $this->saturday,
			'sunday' => $this->sunday,
			'start_date' => $this->start_date,
			'end_date' => $this->end_date,
		];
	}
}