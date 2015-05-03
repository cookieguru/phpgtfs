<?php
namespace cookieguru\phpgtfs\model;

class Agency {
	/**
	 * Optional
	 * The agency_id field is an ID that uniquely identifies a transit agency. A transit feed may represent data from more than one agency. The agency_id is dataset unique. This field is optional for transit feeds that only contain data for a single agency.
	 */
	public $agency_id = null;
	
	/**
	 * Required
	 * The agency_name field contains the full name of the transit agency. Google Maps will display this name.
	 */
	public $agency_name = null;

	/**
	 * Required
	 * The agency_url field contains the URL of the transit agency. The value must be a fully qualified URL that includes http:// or https://, and any special characters in the URL must be correctly escaped. See http://www.w3.org/Addressing/URL/4_URI_Recommentations.html for a description of how to create fully qualified URL values.
	 */
	public $agency_url = null;

	/**
	 * Required
	 * The agency_timezone field contains the timezone where the transit agency is located. Timezone names never contain the space character but may contain an underscore. Please refer to http://en.wikipedia.org/wiki/List_of_tz_zones for a list of valid values. If multiple agencies are specified in the feed, each must have the same agency_timezone.
	 */
	public $agency_timezone = null;

	/**
	 * Optional
	 * The agency_lang field contains a two-letter ISO 639-1 code for the primary language used by this transit agency. The language code is case-insensitive (both en and EN are accepted). This setting defines capitalization rules and other language-specific settings for all text contained in this transit agency's feed. Please refer to http://www.loc.gov/standards/iso639-2/php/code_list.php for a list of valid values.
	 */
	public $agency_lang = null;

	/**
	 * Optional
	 * The agency_phone field contains a single voice telephone number for the specified agency. This field is a string value that presents the telephone number as typical for the agency's service area. It can and should contain punctuation marks to group the digits of the number. Dialable text (for example, TriMet's "503-238-RIDE") is permitted, but the field must not contain any other descriptive text.
	 */
	public $agency_phone = null;

	/**
	 * Optional
	 * The agency_fare_url specifies the URL of a web page that allows a rider to purchase tickets or other fare ins
	 */
	public $agency_fare_url = null;

	public function __toArray() {
		return [
			'agency_id' => $this->agency_id,
			'agency_name' => $this->agency_name,
			'agency_url' => $this->agency_url,
			'agency_timezone' => $this->agency_timezone,
			'agency_lang' => $this->agency_lang,
			'agency_phone' => $this->agency_phone,
			'agency_fare_url' => $this->agency_fare_url,
		];
	}
}