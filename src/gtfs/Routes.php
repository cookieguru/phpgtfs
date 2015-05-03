<?php
namespace cookieguru\phpgtfs\gtfs;

class Routes extends \cookieguru\phpgtfs\GTFSCollection {
	const FILENAME = 'routes.txt';

	/**
	 * Add a route to the collection
	 * @param \cookieguru\phpgtfs\model\Route $item A Route to add to the collection
	 * @throws Exception when trying to add a duplicate route ID AND the properties of both objects are not indential
	 */
	public function add($item) {
		if(isset($this->items[$item->route_id])) {
			if(serialize($this->items[$item->route_id]) != serialize($item)) {
				throw new \Exception("Route ID {$item->route_id} already exists and the new route has different properties");
			}
		}
		$this->items[$item->route_id] = $item;
		ksort($this->items);
	}
}