<?php
namespace cookieguru\phpgtfs\gtfs;

class Stops extends \cookieguru\phpgtfs\Collection {
	const FILENAME = 'stops.txt';

	/**
	 * Add an item to the collection
	 * @param mixed $item An item to add to the collection
	 * @throws Exception when trying to add a duplicate stop ID AND the properties of both objects are not indential
	 */
	public function add($item) {
		if(isset($this->items[$item->stop_id])) {
			if(serialize($this->items[$item->stop_id]) != serialize($item)) {
				throw new \Exception("Stop ID {$item->stop_id} already exists and the new stop has different properties");
			}
		}
		$this->items[$item->stop_id] = $item;
		ksort($this->items);
	}

	/**
	 * Find a Stop object in the collection by its name
	 * @param string $name The stop name
	 * @return Stop|null Returns a Stop if it is in the collection; null otherwise
	 */
	public function findByName($name) {
		foreach($this->items as $item) {
			if($item->stop_name == $name) {
				return $item;
			}
		}
		return null;
	}
}