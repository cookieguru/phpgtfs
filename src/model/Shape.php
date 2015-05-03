<?php
namespace cookieguru\phpgtfs\model;

class Shape {
	/**
	 * Required
	 * The shape_id field contains an ID that uniquely identifies a shape. 
	 */
	public $shape_id = null;

	/**
	 * Required
	 * The shape_pt_lat field associates a shape point's latitude with a shape ID. The field value must be a valid WGS 84 latitude. Each row in shapes.txt represents a shape point in your shape definition.
	 */
	public $shape_pt_lat = null;

	/**
	 * Required
	 * The shape_pt_lon field associates a shape point's longitude with a shape ID. The field value must be a valid WGS 84 longitude value from -180 to 180. Each row in shapes.txt represents a shape point in your shape definition.
	 */
	public $shape_pt_lon = null;

	/**
	 * Required
	 * The shape_pt_sequence field associates the latitude and longitude of a shape point with its sequence order along the shape. The values for shape_pt_sequence must be non-negative integers, and they must increase along the trip.
	 */
	public $shape_pt_sequence = null;

	/**
	 * Optional
	 * When used in the shapes.txt file, the shape_dist_traveled field positions a shape point as a distance traveled along a shape from the first shape point. The shape_dist_traveled field represents a real distance traveled along the route in units such as feet or kilometers. This information allows the trip planner to determine how much of the shape to draw when showing part of a trip on the map. The values used for shape_dist_traveled must increase along with shape_pt_sequence: they cannot be used to show reverse travel along a route.
	 * The units used for shape_dist_traveled in the shapes.txt file must match the units that are used for this field in the stop_times.txt file.
	 */
	public $shape_dist_traveled = null;

	public function __toArray() {
		return [
			'shape_id' => $this->shape_id,
			'shape_pt_lat' => $this->shape_pt_lat,
			'shape_pt_lon' => $this->shape_pt_lon,
			'shape_pt_sequence' => $this->shape_pt_sequence,
			'shape_dist_traveled' => $this->shape_dist_traveled,
		];
	}
}