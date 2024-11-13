<?php
//defined('MOODLE_INTERNAL') || die;

namespace local_oauth2\external;

require_once($CFG->libdir . '/externallib.php');
use external_function_parameters;
use external_multiple_structure;
use external_single_structure;
use external_value;

class get_userdata extends \external_api {

    /**
     * Returns description of method parameters
     * @return external_function_parameters
     */
    public static function execute_parameters() {
        return new external_function_parameters([
        ]);
    }
public static function execute_returns() {
    return new external_single_structure([
            'id'=>new external_value(PARAM_TEXT, 'id of user'),
            'firstname' => new external_value(PARAM_TEXT, 'name of user'),
            'lastname'=> new external_value(PARAM_TEXT,'surname of user'),
            'department'=>new external_value(PARAM_TEXT,'department of user'),
        ]);
}
public static function execute()
{
    global $CFG,$USER;
    $array=["id"=>$USER->id,"firstname"=>$USER->firstname,"lastname"=>$USER->lastname,"department"=>$USER->department];
    return $array;
}
}