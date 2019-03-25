
<?php

// ============ login ===========
function m_checkLogin() {

    include_once 'db.php';
    
    $uname = mysqli_real_escape_string($conn,$_POST['uname']);
    $pass = mysqli_real_escape_string($conn,$_POST['pwd']);

    if ($uname != "" && $pass != ""){

        $sql_query = "select count(*) as cntUser from user where username='".$uname."' and password='".$pass."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        return $count;

    }
}


// ========= register ===========
function m_register_user() {
    $name = $_POST['name'];
    $uname = $_POST['uname'];
    $pass = $_POST['pwd'];
    $pwd = md5($pass);
    include_once 'db.php';
    $query = "insert into user(username, name, password)
              values('$uname', '$name', '$pwd')";
    $addUser = mysqli_query($conn, $query);
    return $addUser;
}


// ============= get user =============
function m_getUser() {
    $query = "select * from user";
    include_once 'db.php';
    $select = mysqli_query($conn, $query);
    return $select;
}

function m_edit() {
    
}
