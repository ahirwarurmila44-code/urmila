<?php
require_once('../../config.php');

global $PAGE, $OUTPUT;

$courseid = required_param('id', PARAM_INT);

// 1. Set context (mandatory)
$context = context_course::instance($courseid);
$PAGE->set_context($context);

// 2. Set page URL
$PAGE->set_url('/local/myplugin/index.php', ['id' => $courseid]);

// 3. Page title
$PAGE->set_title("My Page");
$PAGE->set_heading("My Heading");

// 4. Output starts
echo $OUTPUT->header();

// 5. Your content here
echo html_writer::div("Hello World");

// 6. Output ends
echo $OUTPUT->footer();
