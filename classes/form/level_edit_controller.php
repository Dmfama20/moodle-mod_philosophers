<?php

namespace mod_philosophers\form;

use mod_philosophers\model\level;
use mod_philosophers\util;

defined('MOODLE_INTERNAL') || die();

class level_edit_controller extends form_controller {

    /**
     * @var int|null
     */
    private $levelid;

    /**
     * @var level|null
     */
    private $level = null;

    protected function build_customdata() {
        $this->levelid = (isset($this->moreargs->levelid)) ? intval($this->moreargs->levelid) : null;
        $this->customdata = [
            'game' => $this->game,
            'levelid' => $this->levelid,
        ];

        if ($this->levelid) {
            $this->level = util::get_level($this->levelid);
        } else {
            $this->level = new level();
            $this->level->set_game($this->game->get_id());
        }
    }

    protected function handle_submit(\stdClass $data): bool {
        if ($this->levelid && $data->levelid != $this->levelid) {
            return false;
        }

        $this->level->set_name($data->name);
        $this->level->set_score(\intval($data->score));
        $this->level->set_safe_spot(\intval($data->safe_spot));
        if ($this->levelid === null) {
            $this->level->set_position($this->game->count_active_levels());
        }

        $this->level->save();
        return true;
    }

    protected function handle_display() {
        if ($this->levelid) {
            $this->mform->set_data($this->level->to_array());
        }
    }

    protected function check_capability() {
        util::require_user_has_capability('mod/philosophers:manage', $this->context);
    }
}
