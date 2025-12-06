<?php

// =============================
// 1️⃣ Flat arrays (your data)
// =============================
$courseStructure = [
    ['id' => 1, 'name' => 'Web Development'],
    ['id' => 2, 'name' => 'Data Science']
];

$subcategory = [
    ['id' => 11, 'name' => 'Frontend Development', 'category_id' => 1],
    ['id' => 12, 'name' => 'Backend Development', 'category_id' => 1],
    ['id' => 21, 'name' => 'Machine Learning', 'category_id' => 2]
];

$course = [
    ['id' => 111, 'name' => 'React.js Masterclass', 'subcategory_id' => 11],
    ['id' => 112, 'name' => 'Vue.js Complete Guide', 'subcategory_id' => 11],
    ['id' => 121, 'name' => 'Laravel Masterclass', 'subcategory_id' => 12],
    ['id' => 211, 'name' => 'Python for ML', 'subcategory_id' => 21]
];

$module = [
    ['id' => 1111, 'name' => 'React Basics', 'course_id' => 111],
    ['id' => 1112, 'name' => 'Advanced React', 'course_id' => 111],
    ['id' => 1121, 'name' => 'Vue Fundamentals', 'course_id' => 112],
    ['id' => 1211, 'name' => 'Laravel Basics', 'course_id' => 121],
    ['id' => 2111, 'name' => 'Data Preprocessing', 'course_id' => 211]
];

$moduleDetails = [
    ['id' => 11111, 'title' => 'Introduction to React', 'duration' => '10 mins', 'module_id' => 1111],
    ['id' => 11112, 'title' => 'JSX and Components', 'duration' => '15 mins', 'module_id' => 1111],
    ['id' => 11121, 'title' => 'Hooks Deep Dive', 'duration' => '20 mins', 'module_id' => 1112],
    ['id' => 11122, 'title' => 'Context API', 'duration' => '18 mins', 'module_id' => 1112],
    ['id' => 11211, 'title' => 'Vue Instance', 'duration' => '12 mins', 'module_id' => 1121],
    ['id' => 11212, 'title' => 'Directives', 'duration' => '14 mins', 'module_id' => 1121],
    ['id' => 12111, 'title' => 'Routing', 'duration' => '20 mins', 'module_id' => 1211],
    ['id' => 12112, 'title' => 'Controllers', 'duration' => '25 mins', 'module_id' => 1211],
    ['id' => 21111, 'title' => 'Data Cleaning', 'duration' => '25 mins', 'module_id' => 2111],
    ['id' => 21112, 'title' => 'Feature Scaling', 'duration' => '20 mins', 'module_id' => 2111]
];

// =============================
// 2️⃣ Build the nested hierarchy
// =============================

// Step 1: Attach module details to modules
foreach ($module as &$m) {
    $m['module_details'] = array_values(array_filter($moduleDetails, fn($d) => $d['module_id'] == $m['id']));
}
unset($m);

// Step 2: Attach modules to courses
foreach ($course as &$c) {
    $c['modules'] = array_values(array_filter($module, fn($m) => $m['course_id'] == $c['id']));
}
unset($c);

// Step 3: Attach courses to subcategories
foreach ($subcategory as &$s) {
    $s['courses'] = array_values(array_filter($course, fn($c) => $c['subcategory_id'] == $s['id']));
}
unset($s);

// Step 4: Attach subcategories to categories
foreach ($courseStructure as &$cat) {
    $cat['subcategories'] = array_values(array_filter($subcategory, fn($s) => $s['category_id'] == $cat['id']));
}
unset($cat);

// =============================
// 3️⃣ Output using nested foreach
// =============================
foreach ($courseStructure as $category) {
    echo "📚 Category: " . $category['name'] . PHP_EOL;

    if (!empty($category['subcategories'])) {
        foreach ($category['subcategories'] as $subcategory) {
            echo "   📘 Subcategory: " . $subcategory['name'] . PHP_EOL;

            if (!empty($subcategory['courses'])) {
                foreach ($subcategory['courses'] as $course) {
                    echo "      🎓 Course: " . $course['name'] . PHP_EOL;

                    if (!empty($course['modules'])) {
                        foreach ($course['modules'] as $module) {
                            echo "         🧩 Module: " . $module['name'] . PHP_EOL;

                            if (!empty($module['module_details'])) {
                                foreach ($module['module_details'] as $detail) {
                                    echo "            ➜ Detail: " . $detail['title'] . " (" . $detail['duration'] . ")" . PHP_EOL;
                                }
                            }
                        }
                    }
                }
            }
        }
    }

    echo PHP_EOL;
}

?>
