<?php
namespace cookieguru\phpgtfs;

class Collection implements \Countable, \IteratorAggregate {
	protected $items = [];

	/**
	 * Add an item to the collection
	 * @param mixed $item An item to add to the collection
	 */
	public function add($item) {
		$this->items[] = $item;
	}

	/**
	 * Returns the number of items in the collection
	 * @return integer The number of items in the collection
	 */
	public function count() {
		return count($this->items);
	}

	/**
	 * Returns the first valuein the collection. Note this will also rewind the internal pointer to the first element 
	 * @return mixed
	 * @throws OutOfRangeException on an empty collection
	 */
	public function getFirst() {
		if(empty($this->items))
			throw new OutOfRangeException();

		return reset($this->items);
	}

	public function getIterator() {
		return new \ArrayIterator($this->items);
	}
}