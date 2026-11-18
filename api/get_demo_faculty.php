<?php
// ─── CORS & Response Headers ───────────────────────────────────────────────
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
header("Access-Control-Allow-Methods: GET, OPTIONS");
header("Content-Type: application/json; charset=UTF-8");

// Handle pre-flight OPTIONS request
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// ─── Hardcoded Demo Faculty Data ──────────────────────────────────────────
// These are fictional academic profiles for public demo purposes only.
// No real faculty data is used here.

$demoFaculty = [
    [
        "emp_id"        => "demo_001",
        "name"          => "Dr. Sarah Chen",
        "designation"   => "Associate Professor",
        "department"    => "Computer Science",
        "email"         => "s.chen@university.edu",
        "cabin"         => "Block A - 204",
        "status"        => "Available",
        "availableFrom" => "10:00 AM",
        "availableTo"   => "12:00 PM",
    ],
    [
        "emp_id"        => "demo_002",
        "name"          => "Prof. Marcus Vance",
        "designation"   => "Professor",
        "department"    => "Information Technology",
        "email"         => "m.vance@university.edu",
        "cabin"         => "Block B - 101",
        "status"        => "In Lecture",
        "availableFrom" => "02:00 PM",
        "availableTo"   => "04:00 PM",
    ],
    [
        "emp_id"        => "demo_003",
        "name"          => "Dr. Ananya Sharma",
        "designation"   => "Assistant Professor",
        "department"    => "Electronics",
        "email"         => "a.sharma@university.edu",
        "cabin"         => "Block C - 312",
        "status"        => "In Meeting",
        "availableFrom" => "",
        "availableTo"   => "",
    ],
    [
        "emp_id"        => "demo_004",
        "name"          => "Prof. James Whitfield",
        "designation"   => "Professor",
        "department"    => "Mathematics",
        "email"         => "j.whitfield@university.edu",
        "cabin"         => "Block A - 110",
        "status"        => "Available",
        "availableFrom" => "11:00 AM",
        "availableTo"   => "01:00 PM",
    ],
    [
        "emp_id"        => "demo_005",
        "name"          => "Dr. Priya Nair",
        "designation"   => "Associate Professor",
        "department"    => "Information Technology",
        "email"         => "p.nair@university.edu",
        "cabin"         => "Block B - 205",
        "status"        => "On Leave",
        "availableFrom" => "",
        "availableTo"   => "",
    ],
    [
        "emp_id"        => "demo_006",
        "name"          => "Prof. David Okafor",
        "designation"   => "Senior Professor",
        "department"    => "Computer Science",
        "email"         => "d.okafor@university.edu",
        "cabin"         => "Block D - 401",
        "status"        => "Available",
        "availableFrom" => "09:00 AM",
        "availableTo"   => "11:00 AM",
    ],
    [
        "emp_id"        => "demo_007",
        "name"          => "Dr. Lena Müller",
        "designation"   => "Assistant Professor",
        "department"    => "Physics",
        "email"         => "l.muller@university.edu",
        "cabin"         => "Block C - 108",
        "status"        => "In Lecture",
        "availableFrom" => "03:00 PM",
        "availableTo"   => "05:00 PM",
    ],
    [
        "emp_id"        => "demo_008",
        "name"          => "Prof. Rajan Krishnamurthy",
        "designation"   => "Professor",
        "department"    => "Information Technology",
        "email"         => "r.krishnamurthy@university.edu",
        "cabin"         => "Block A - 302",
        "status"        => "In Meeting",
        "availableFrom" => "",
        "availableTo"   => "",
    ],
];

echo json_encode([
    "success" => true,
    "faculty" => $demoFaculty,
]);
