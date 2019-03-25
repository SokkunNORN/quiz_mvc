
<?php

$data = array();

flexible_function($data);

function flexible_function(&$data) { 
    $function = "login";
    if(isset($_GET['action'])) {
        $action = $_GET['action'];
        $function = $action; 
    }
    $function($data);  
}

function login(&$data) {
    $data['page'] = "login";
}

// =========== check login ============
function checkLogin(&$data) {
    $data = m_checkLogin();
    if($data > 0){
        $_SESSION['uname'] = $uname;
        header('Location: index.php?action=view');
    }else{
        header('Location: index.php?action=login');
    }
}

function register(&$data) {
    $data['page'] = "register";
}

function register_user(&$data) {
    $data = m_register_user();
    if ($data) {
        $action = "login";
    } else {
        $action = "register";
    }
    header("location:index.php?action = $action");
}

// ========= view =========
function view(&$data) {
    $data['users'] = m_getUser();
    $data['page'] = "view";
}

function create_user(&$data) {
    $data['page'] = "create";
}


function edit(&$date) {
    $data['user'] = m_edit();
}