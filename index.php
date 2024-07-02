<?php 
$users = [
    [
        'username' => 'user1',
        'password' => 'password1'
    ],
    [
        'username' => 'user2',
        'password' => 'password2'
    ],
    [
        'username' => 'user3',
        'password' => 'password3'
    ]
];
foreach ($users as $user){
    var_dump($user['password']);
}
// session_start();
// if (isset ($_POST["username"]) && isset($_POST["password"])){
//     foreach ($users as $user) {
//         if ($user["username"] === $_POST["username"]){
//             if($users["password"] === $_POST["password"]){
//                 $_SESSION["username"] = $_POST["username"];
//                 $_SESSION["password"] = $_POST["password"];
//                 Header("Location: ./login.php");
//                 break;
//             }
//         }
//     }
    
        
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <form action="./index.php" method="post">
        <div class="name">
            <label for="username"></label>
            <input type="text" name="username" id="username">
        </div>
        <div class="email">
            <label for="password">password:</label>
            <input type="text" name="password" id="password">
        </div>
        <button type="submit">Login</button>
    </form>
</body>
</html>