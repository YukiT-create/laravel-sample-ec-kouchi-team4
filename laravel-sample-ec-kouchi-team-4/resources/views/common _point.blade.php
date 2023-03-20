<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>プロトタイプ</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

<style>
    body {
    margin: 0;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}

header {
    outline: 1px solid gray;
    background-color: lightcyan;
    height: 100px;
    margin: 10px;
}

.flex {
    display: flex;
}

.logo {
    width: 1500px;
    padding-top: 10px;
    padding-left: 20px;
    padding-bottom: 20px;
    border: solid 1px;
    margin: 10px 500px 50px 10px;
}

form {
    margin-top: 10px;
    margin-right: 30px;
}
.search {
    width: 500px;
    padding: 20px;
    margin-top: 20px;
    margin-left: 20px;
    margin-bottom: 20px;
}

.button {
    margin-left: 180px;
    margin-bottom: 20px;
}

.cart {
    width: 400px;
    padding: 10px;
    border: solid 1px gray;
    margin-top: 30px;
    margin-left: 20px;
    margin-bottom: 30px;
}

.login {
    width: 400px;
    padding: 10px;
    border: solid 1px gray;
    margin-top: 30px;
    margin-left: 20px;
    margin-right: 20px;
    margin-bottom: 30px;
}

div {
    display: flex;
    flex: 1;
}
main {
   margin: 10px;
   outline: 1px solid gray;
   flex: 1;
}

footer {
    outline: 1px solid gray;
    background-color: lightcyan;
    height: 100px;
    margin: 10px;
}
</style>
</head>

<body>
    <header>
        <div class="flex">
            <img class="logo" src="" alt="会社ロゴ">
            <form>
            <label>アイスクリーム検索: <input type="text" name="product_name"></label>
            <input class="button" type="submit" value="検索">
            </form>
            <a class="cart" href="">カート</a>
            <a class="login" href="">ログイン</a>
        </div>
    </header>
    <div>
        <main>センター</main>
    </div>
    <footer>フッター</footer>
</body>

</html>
