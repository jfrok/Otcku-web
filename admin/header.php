<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../css/dash.css" />
    <link rel="stylesheet" type="text/css" href="../css/hidden.css" />


    <title>Admin Panel</title>
</head>
<style>
/* popup box for message start */

.overlay {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.7);
    transition: none;
}

.popup {
    margin: 90px auto;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    width: 30%;
    position: relative;
    transition: none;
}

.popup .close {
    position: absolute;
    top: 5px;
    right: 20px;
    transition: all 200ms;
    font-size: 30px;
    font-weight: bold;
    text-decoration: none;
    color: #333;
}

.popup .close:hover {
    color: #ffd335;
}

a.return-login {
    text-decoration: underline;
}

a.return-login:hover {
    color: #ffd335;
}

/* popup box for message end */

/* item start */

.single-content.item table.item-table {
    width: 100%;
}

.single-content.item table.item-table {
    text-align: center;
    width: 100%;
    border: 1px solid #423d3d;
    border-collapse: collapse;
    box-shadow: 0px 2px 16px 0px rgba(0, 0, 0, 0.2);
}

.single-content.item table.item-table th,
.single-content.item table.item-table td {
    padding: 10px;
}

.item-action-wrap {
    text-align: left;
    padding-left: 5px;
}

form.addnewitem-section {
    text-align: right;
}

button.btn-submit.item-page {
    width: 45%;
}

button.btn-submit.item-page .fas {
    font-size: 20px;
}

th.item-action {
    width: 90px;
}

.popup.item {
    width: 50%;
    padding-left: 40px;
}

.popup.item input {
    height: 30px;
    width: 90%;
    border-radius: 10px;
    border: 1px solid #bbbbbb;
    padding: 0px 5px;
}

.popup.item textarea {
    border-radius: 10px;
    border: 1px solid #bbbbbb;
}

.popup.item form select {
    border-radius: 10px;
    border: 1px solid #bbbbbb;
    width: 93.5%;
    height: 32px;
}

.popup.item .grid-left {
    display: inline-block;
    width: 50%;
    float: left;
}

.popup.item .grid-right {
    display: inline-block;
    width: 50%;
    float: right;
}

.grid-full {
    display: inline-block;
    width: 100%;
}

.popup.item input.upload-file-pic {
    border: none;
    padding: 0px;
    border-radius: 0px;
    width: 35%;
}

p.upload-pic-title {
    margin: 0px;
    display: inline;
    font-weight: 600;
}

button.btn-submit {
    height: 39px;
    background: black;
    border: none;
    padding: 10px;
    font-weight: 600;
    color: white;
    border-radius: 5px;
    width: 20%;
}

button.btn-submit:hover {
    color: black;
    background: #ffd335;
}

.center {
    display: flex;
    justify-content: center;
    flex-direction: column;
}

.upload-form {
    padding: 50px;
    box-shadow: 10px 10px 20px;
    border: 3px solid blanchedalmond;
}

.upload-form-out {
    padding: 50px;
}

.anime-form-input {
    width: 100%;
    height: 30px;
    padding: 0 22px;
    font-size: 16px;
}

.side-menu {
    position: fixed;
    background: #361212;
    width: 20vw;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}

/* item end */
</style>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>No Mercy</h1>
        </div>
        <ul>
            <a href="index.php">
                <li>
                    <img src="https://i.postimg.cc/0Q37050T/dashboard.png" alt="" />&nbsp; <span>Dashboard</span>
                </li>
            </a>
            <a href="mangeusers.php">
                <li>
                    <img src="https://i.postimg.cc/t4RXq3hg/reading-book-2.png" alt="" />&nbsp;<span>Mange Users</span>
                </li>
            </a>
            <a href="disneyupload.php">
                <li>
                    <img src="https://i.postimg.cc/t4RXq3hg/reading-book-2.png" alt="" />&nbsp;<span>Disney</span>
                </li>
            </a>
            <a href="mangeseries.php">
                <li><img src="https://i.postimg.cc/DwymmkqL/teacher2.png" alt="" />&nbsp;<span>Series</span></li>
            </a>
            <a href="mangeanime.php">
                <li><img src="https://i.postimg.cc/GtwHp4Qm/school.png" alt="" />&nbsp;<span>Anime</span></li>
            </a>
            <a href="seriespupload.php">
                <li><img src="https://i.postimg.cc/DwymmkqL/teacher2.png" alt="" />&nbsp;<span>EP Series</span></li>
            </a>
            <a href="animeepupload.php">
                <li><img src="https://i.postimg.cc/GtwHp4Qm/school.png" alt="" />&nbsp;<span>EP Anime</span></li>
            </a>
            <li><img src="https://i.postimg.cc/3NDTq95L/payment.png" alt="" />&nbsp;<span>Income</span></li>
            <li>
                <img src="https://i.postimg.cc/rFBmq0f0/help-web-button.png" alt="" />&nbsp; <span>Help</span>
            </li>
            <li><img src="https://i.postimg.cc/RVTNMVnv/settings.png" alt="" />&nbsp;<span>Settings</span></li>
        </ul>
    </div>

    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <!-- <input type="text" name="search" placeholder=" Search on ...." autocomplete="OFF" />
                    <input type="submit" name="searchBtn" value="Search"> -->
                    <form method="GET" action="">
                        <div class="search">
                            <input type="text" name="search" placeholder="Search.." />
                            <button name="searchBtn" type="submit" value="Search"><img
                                    src="https://i.postimg.cc/7Zsh2sVc/search.png" alt="" /></button>
                        </div>
                    </form>
                </div>

                <div class="user">
                    <form method="POST">
                        <button type="submit" name="add-new" class="btn">Add New</button>
                        <a href="../user/logout.php" class="btn">logout</a>
                    </form>

                    <img src="https://i.postimg.cc/tJR6t1KC/notifications.png" alt="" />
                    <div class="img-case">
                        <img src="https://i.postimg.cc/TPKwqVNP/user.png" alt="" />