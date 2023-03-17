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
/**
 * virtual keyboard addons for tinyMCE editor
 *
 * @package   tinymce_virtualkeyboard
 * @author DualCube <admin@dualcube.com>
 * @copyright  2022 DualCube (https://dualcube.com)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die();
class tinymce_virtualkeyboard extends editor_tinymce_plugin {
    /** @var array list of buttons defined by this plugin */
    protected $buttons = array('keyboard');
    /**
     * This load require js files and update the init parameters.
     *
     * @param array $params
     * @param context $context
     * @param array $options display options: null
     * @return void
     */
    protected function update_init_params(array &$params, context $context,
            array $options = null) {
        global $PAGE, $CFG;
        // This plugin overrides standard 'image' button, no need to insert new button.
        $PAGE->requires->js(new moodle_url(
        $CFG->httpswwwroot.'/lib/editor/tinymce/plugins/virtualkeyboard/tinymce/js/keyboard.js'));
        // Add JS file, which uses default name.
        $this->add_js_plugin($params);
    }
    /**
     * Get sort order.
     *
     * @return 110
     */
    protected function get_sort_order() {
        return 110;
    }
}
