<?php
namespace cookieguru\phpgtfs;

class Writer {
	/**
	 * Converts all objects in a collection to CSV and saves them to the FILENAME constant of the collection
	 * @param string $path the base path to write to; e.g. 'gtfs/'
	 * @param mixed $collection A collection of GTFS objects
	 * @return void
	 */
	public static function write($path, $collection) {
		if($collection->count()) {
			$file = new \SplFileObject($path . $collection::FILENAME, 'w+');
			$file->fputcsv(array_keys($collection->getFirst()->__toArray()));
			foreach($collection as $object) {
				$file->fputcsv($object->__toArray());
			}
		}
	}
}