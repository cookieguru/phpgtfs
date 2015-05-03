<?php
namespace cookieguru\phpgtfs\model;

class FeedInfo {
	/**
	 * Required
	 * The feed_publisher_name field contains the full name of the organization that publishes the feed. (This may be the same as one of the agency_name values in agency.txt.) GTFS-consuming applications can display this name when giving attribution for a particular feed's data.
	 */
	public $feed_publisher_name;

	/**
	 * Required
	 * The feed_publisher_url field contains the URL of the feed publishing organization's website. (This may be the same as one of the agency_url values in agency.txt.) The value must be a fully qualified URL that includes http:// or https://, and any special characters in the URL must be correctly escaped. See http://www.w3.org/Addressing/URL/4_URI_Recommentations.html for a description of how to create fully qualified URL values.
	 */
	public $feed_publisher_url;

	/**
	 * Required
	 * The feed_lang field contains a IETF BCP 47 language code specifying the default language used for the text in this feed. This setting helps GTFS consumers choose capitalization rules and other language-specific settings for the feed. For an introduction to IETF BCP 47, please refer to http://www.rfc-editor.org/rfc/bcp/bcp47.txt and http://www.w3.org/International/articles/language-tags/.
	 */
	public $feed_lang;

	/**
	 * Optional
	 * The feed provides complete and reliable schedule information for service in the period from the beginning of the feed_start_date day to the end of the feed_end_date day. Both days are given as dates in YYYYMMDD format as for calendar.txt, or left empty if unavailable. The feed_end_date date must not precede the feed_start_date date if both are given. Feed providers are encouraged to give schedule data outside this period to advise of likely future service, but feed consumers should treat it mindful of its non-authoritative status. If feed_start_date or feed_end_date extend beyond the active calendar dates defined in calendar.txt and calendar_dates.txt, the feed is making an explicit assertion that there is no service for dates within the feed_start_date or feed_end_date range but not included in the active calendar dates.
	 */
	public $feed_start_date;

	/**
	 * Optional
	 * @see feed_start_date
	 */
	public $feed_end_date;

	/**
	 * Optional
	 * The feed publisher can specify a string here that indicates the current version of their GTFS feed. GTFS-consuming applications can display this value to help feed publishers determine whether the latest version of their feed has been incorporated.
	 */
	public $feed_version;

	public function __toArray() {
		return [
			'feed_publisher_name' => $this->feed_publisher_name,
			'feed_publisher_url' => $this->feed_publisher_url,
			'feed_lang' => $this->feed_lang,
			'feed_start_date' => $this->feed_start_date,
			'feed_end_date' => $this->feed_end_date,
			'feed_version' => $this->feed_version,
		];
	}
}