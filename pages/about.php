<?php
require_once(__DIR__ . '/../config.php');
global $PAGE, $OUTPUT;

$PAGE->set_context(context_system::instance());
$PAGE->set_url(new moodle_url('/theme/ktt_boost_child_kassai/pages/about.php'));
$PAGE->set_title(get_string('about_title', 'theme_ktt_boost_child_kassai'));
$PAGE->set_heading(get_string('about_heading', 'theme_ktt_boost_child_kassai'));

echo $OUTPUT->header();
echo $OUTPUT->render_from_template('theme_ktt_boost_child_kassai/pages/about', []);
echo $OUTPUT->footer();