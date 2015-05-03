<?php
namespace cookieguru\phpgtfs\gtfs;

class Shapes extends \cookieguru\phpgtfs\GTFSCollection {
	const FILENAME = 'shapes.txt';

	/**
	 * Determines whether or not a Shape object exists in the collection by searching for its ID
	 * @param string $id The shape ID
	 * @return bool Returns true if the shape ID has one or more points; false otherwise
	 */
	public function existsByID($id) {
		foreach($this->items as $item) {
			if($item->shape_id == $id) {
				return true;
			}
		}
		return false;
	}
}