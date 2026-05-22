<?php

// =========================
// URL BASE
// =========================
function base_url($url = '')
{
    return "http://localhost/Blog_Pribadi_PBO/" . $url;
}

// =========================
// REDIRECT
// =========================
function redirect($url)
{
    header("Location: " . base_url($url));
    exit;
}

// =========================
// ESCAPE HTML
// =========================
function e($string)
{
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

// =========================
// LIMIT TEXT
// =========================
function limit_text($text, $limit = 100)
{
    $text = strip_tags($text);

    if(strlen($text) > $limit){

        return substr($text, 0, $limit) . '...';
    }

    return $text;
}

// =========================
// CREATE SLUG
// =========================
function create_slug($string)
{
    $slug = strtolower($string);

    $slug = preg_replace('/[^a-z0-9-]/', '-', $slug);

    $slug = preg_replace('/-+/', '-', $slug);

    return trim($slug, '-');
}

// =========================
// ACTIVE MENU
// =========================
function active_menu($page, $currentPage)
{
    return $page == $currentPage
        ? 'active'
        : '';
}

// =========================
// FORMAT DATE
// =========================
function format_date($date)
{
    return date('d M Y', strtotime($date));
}

// =========================
// ALERT SUCCESS
// =========================
function success($message)
{
    return "
        <div style='
            background:#dcfce7;
            color:#166534;
            padding:15px;
            border-radius:10px;
            margin-bottom:20px;
        '>
            $message
        </div>
    ";
}

// =========================
// ALERT ERROR
// =========================
function error($message)
{
    return "
        <div style='
            background:#fee2e2;
            color:#991b1b;
            padding:15px;
            border-radius:10px;
            margin-bottom:20px;
        '>
            $message
        </div>
    ";
}

// =========================
// CHECK REQUEST METHOD
// =========================
function is_post()
{
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}

// =========================
// OLD INPUT
// =========================
function old($name)
{
    return isset($_POST[$name])
        ? $_POST[$name]
        : '';
}

// =========================
// DEBUG
// =========================
function dd($data)
{
    echo '<pre>';

    print_r($data);

    echo '</pre>';

    die();
}