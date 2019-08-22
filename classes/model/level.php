<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

namespace mod_philosophers\model;

defined('MOODLE_INTERNAL') || die();

/**
 * Class level
 *
 * @package    mod_philosophers\model
 * @copyright  2019 Benedikt Kulmann <b@kulmann.biz>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class level extends abstract_model {

    const STATE_PRIVATE = 'private';
    const STATE_ACTIVE = 'active';
    const STATE_DELETED = 'deleted';

    /**
     * @var int The id of the philosophers instance this level belongs to.
     */
    protected $game;
    /**
     * @var string The state of the level, out of [active, deleted].
     */
    protected $state;
    /**
     * @var string The name of the level.
     */
    protected $name;
    /**
     * @var int Position for ordering levels.
     */
    protected $position;
    /**
     * @var string The url of the image of the level.
     */
    protected $image;
    /**
     * @var string The hex code of the bg color of the level.
     */
    protected $color;

    /**
     * level constructor.
     */
    function __construct() {
        parent::__construct('philosophers_levels', 0);
        $this->game = 0;
        $this->state = self::STATE_ACTIVE;
        $this->name = '';
        $this->position = -1;
        $this->image = '';
        $this->color = '#ccc';
    }

    /**
     * Apply data to this object from an associative array or an object.
     *
     * @param mixed $data
     *
     * @return void
     */
    public function apply($data) {
        if (\is_object($data)) {
            $data = get_object_vars($data);
        }
        $this->id = isset($data['id']) ? $data['id'] : 0;
        $this->game = $data['game'];
        $this->state = isset($data['state']) ? $data['state'] : self::STATE_ACTIVE;
        $this->name =  isset($data['name']) ? $data['name'] : '';
        $this->position = isset($data['position']) ? $data['position'] : 0;
        $this->image = isset($data['image']) ? $data['image'] : '';
        $this->color = isset($data['color']) ? $data['color'] : '#ccc';
    }

    /**
     * Fetches all categories from the DB which belong to this level.
     *
     * @return category[]
     * @throws \dml_exception
     */
    public function get_categories(): array {
        global $DB;
        $sql_params = ['level' => $this->get_id()];
        $records = $DB->get_records('philosophers_categories', $sql_params);
        return \array_map(function($record) {
            $category = new category();
            $category->apply($record);
            return $category;
        }, $records);
    }

    /**
     * Returns one random question out of the categories that are assigned to this level.
     *
     * @return \question_definition
     * @throws \dml_exception
     * @throws \coding_exception
     */
    public function get_random_question(): \question_definition {
        $category = $this->get_random_category();
        return $category->get_random_question();
    }

    /**
     * Returns one random of those categories that are assigned to this level. Throws an exception
     * if this level has no categories.
     *
     * @return category
     * @throws \dml_exception
     */
    private function get_random_category(): category {
        global $DB;
        $sql = "
            SELECT *
              FROM {philosophers_categories}
             WHERE level = :level 
        ";
        $available = $DB->get_records_sql($sql, ['level' => $this->get_id()]);
        if ($available) {
            // Shuffle here because SQL RAND() can't be used.
            shuffle($available);
            $category = new category();
            // Take the first one in the array.
            $category->apply($available[0]);
            return $category;
        } else {
            throw new \dml_exception('not found');
        }
    }

    /**
     * @return int
     */
    public function get_game(): int {
        return $this->game;
    }

    /**
     * @param int $game
     */
    public function set_game(int $game) {
        $this->game = $game;
    }

    /**
     * @return string
     */
    public function get_state(): string {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function set_state(string $state) {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function get_name(): string {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function set_name(string $name) {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function get_position(): int {
        return $this->position;
    }

    /**
     * @param int $position
     */
    public function set_position(int $position) {
        $this->position = $position;
    }

    /**
     * @return string
     */
    public function get_image(): string {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function set_image(string $image): void {
        $this->image = $image;
    }

    /**
     * @return string
     */
    public function get_color(): string {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function set_color(string $color): void {
        $this->color = $color;
    }
}
