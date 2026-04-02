<html>
    <head>
    </head>
    <body>
        <h3>Добро пожаловать</h3>
        <form action="registering.php" method="post">
            <div>
             <label>Имя</label>
             <input type="text" name="username" required>
            </div>
            <div>
             <label>Телефон</label>
             <input type="text" name="phonenumber" required>
            </div>
            <div>
             <label>Почта</label>
             <input type="text" name="email" required>
            </div>
            <div>
             <label>Пароль</label>
             <input type="password" name="password" required>
            </div>
            <div>
                <label>Повторный пароль</label>
             <input type="password" name="password2" required>
            </div>
            <div>
             <button type="submit">Зарегистрироваться</button>
            </div>
        </form>
    </body>



</html>