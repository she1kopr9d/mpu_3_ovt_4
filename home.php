<?php
$pageTitle = 'Ответ на обращение — Кофейня «Аромат»';
include 'header.php';
$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';
$category = isset($_POST['category']) ? $_POST['category'] : 'propose';
$source = isset($_POST['source']) ? $_POST['source'] : '';
$attachment = '';
if (isset($_FILES['attachment']) && $_FILES['attachment']['error'] === UPLOAD_ERR_OK
    && $_FILES['attachment']['name'] !== '') {
    $attachment = $_FILES['attachment']['name'];
}
$refillUrl = 'index.php?name=' . urlencode($name)
     . '&email=' . urlencode($email) 
     . '&source=' . urlencode($source);
?>
            <h1 class="page-title">Ответ на обращение</h1>
            <div class="response">
                <p>Здравствуйте, <strong><?php echo htmlspecialchars($name); ?></strong>!</p>
                <?php if ($category === 'propose'): ?>
                    <p>Спасибо за ваше предложение:</p>
                <?php else: ?>
                    <p>Мы рассмотрим вашу жалобу:</p>
                <?php endif; ?>
                <div class="response__message"><?php echo nl2br(htmlspecialchars($message)); ?></div>
                <?php if ($attachment !== ''): ?>
                    <p>Вы приложили следующий файл:
                        <strong><?php echo htmlspecialchars($attachment); ?></strong></p>
                <?php endif; ?>
                <a class="btn" href="<?php echo $refillUrl; ?>">Заполнить снова</a>
            </div>
        </main>
    </body>
</html>