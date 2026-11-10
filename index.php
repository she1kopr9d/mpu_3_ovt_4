<?php
$pageTitle = 'Форма обратной связи — Кофейня «Аромат»';
$name = '';
$email = '';
$source = '';
if (isset($_GET['name'])) {
    $name = $_GET['name'];
    $email = isset($_GET['email']) ? $_GET['email'] : '';
    $source = isset($_GET['source']) ? $_GET['source'] : '';
}
include 'header.php';
?>
            <h1 class="page-title">Обратная связь</h1>
            <form class="feedback-form" action="home.php" method="POST" enctype="multipart/form-data">
                <div class="form-row">
                    <label class="form-row__label" for="name">ФИО</label>
                    <input class="form-row__input" type="text" id="name" name="name"
                        value="<?php echo htmlspecialchars($name); ?>" required>
                </div>
                <div class="form-row">
                    <label class="form-row__label" for="email">E-mail</label>
                    <input class="form-row__input" type="email" id="email" name="email"
                        placeholder="you@example.com"
                        value="<?php echo htmlspecialchars($email); ?>" required>
                </div>
                <div class="form-row">
                    <label class="form-row__label" for="category">Тема обращения</label>
                    <select class="form-row__input" id="category" name="category" required>
                        <option value="propose">Предложение</option>
                        <option value="complaint">Жалоба</option>
                    </select>
                </div>
                <div class="form-row">
                    <span class="form-row__label">Откуда узнали</span>
                    <div class="form-row__value">
                        <label><input type="radio" name="source" value="advertising"
                            <?php if ($source === 'advertising') echo 'checked'; ?>> Реклама из интернета</label>
                        <label><input type="radio" name="source" value="friends"
                            <?php if ($source === 'friends') echo 'checked'; ?>> Рассказали друзья</label>
                    </div>
                </div>
                <div class="form-row">
                    <label class="form-row__label" for="message">Сообщение</label>
                    <textarea class="form-row__input" id="message" name="message" rows="5" required></textarea>
                </div>
                <div class="form-row">
                    <label class="form-row__label" for="attachment">Прикрепить файл</label>
                    <input class="form-row__input" type="file" id="attachment" name="attachment">
                </div>
                <div class="form-row--check">
                    <label><input type="checkbox" name="consent" value="yes" required>
                        Даю согласие на обработку данных</label>
                </div>
                <div class="form-row--submit">
                    <button type="submit" class="btn">Отправить</button>
                </div>
            </form>
        </main>
    </body>
</html>