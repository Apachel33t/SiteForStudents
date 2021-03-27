<?php
// LOL KEK
// Час писал этот класс, уже думал разбить аппаратуру и из жизни выпилиться
// Не мог понять какого у меня вечный pending но потом увидел
// НЕ smtp.google.com, а smtp.gmail.com, GMAIL КАРЛ, А НЕ GOOGLE
include '../phpmailer/PHPMailer.php'; // Сам API PHPMailer
include '../phpmailer/SMTP.php'; // Либа которая работает с SMTP сокетами
include '../phpmailer/Exception.php'; // Либа для исключений


// Models
include '../Models/Contact.php';
include '../Models/Customer.php';

use \PHPMailer\PHPMailer\PHPMailer as PHPMailer;

class Mail extends PHPMailer
{
    // Получаем из php потока json с данными пользователя
    // Инициализируем класс
    function __construct($object, $exceptions = null)
    {
        parent::__construct($exceptions);

        try {
            $this->check($object->name, $object->phone);
        } catch (Exception $e) {
            http_response_code(400); // Выбиваем Bad Request для клиента если по условию проходит
            throw new Exception("Исключение:" . $e->getMessage());
        }
    }

    // Проверяем не утку ли нам пустую через POSTMan подсунули
    function check($name, $phone)
    {
        if (strlen($name) < 2 or strlen($phone) < 10) {
            http_response_code(400); // Выбиваем Bad Request для клиента если по условию проходит
            throw new Exception('Введите корректные данные.');
        } else {
            $this->sendMail('volosovczov@gmail.com', 'qwerty', 'apachel33t@yandex.ru', 'Письмо с сайта.', $this->returnMessage($name, $phone));
            $this->savingContact($name, $phone);
        }
    }

    // Сохраняем данные и контакты пользователя
    function savingContact($name, $contact, $type_id = 1)
    {
        $customer_id = (new Customer())->createCustomer($name);
        (new Contact())->createContact($customer_id, $type_id, $contact);
    }

    // Инициализируем на PHPMailer, передаём туда наше мыло, пароль от мыла
    // мыло получателя, и тему письма
    function sendMail($email, $password, $to_email, $subject, $message)
    {
        $this->isSMTP(); // Определяем протокол, SMTP это прикладного уровня (Simple Mail Transfer Protocol),
        // или если проще это протокол для почты, шо такэ протокол см.Google (Модель OSI, Сеть и тд)
        $this->CharSet = "UTF-8"; // Определяем кодировку для нашей программы, весь здоровый мир работает в UTF-8
        $this->SMTPAuth = true; // Разрешаем аутентификацию SMTP, мы же не быдло
        $this->SMTPSecure = 'tls'; // Шифрование tls ибо всё же мы быдло и не будем использовать SSL 3.0, как это принято у дедов плюсаков
        $this->Port = 587; // Определяем порт для подключения, TLS SMTP у нас на 587 порту
        $this->Host = 'smtp.gmail.com'; // Это у нас адрес google почты, во всяком случае не сервера, а узла
        // В итоге получаем такой вот сокет - smtp.gmail.com:587
        $this->Username = $email; // Наша почта или username, лучше своё мыло сюда отдавать
        $this->Password = $password; // Пароль от почты
        $this->setFrom($email, $email); // Указываем отправителя (Почта, Имя)
        $this->addAddress($to_email); // Указываем получателя
        $this->isHTML(true); // Если нужно будет HTML письмо
        $this->Subject = $subject; // Тему меняем, меня устраивает и такая
        $this->Body = $message; // Сформированное сообщение
        $this->send();
    }

    // Формируем сообщение
    function returnMessage(string $name, string $phone): string
    {
        return "От пользователя $name пришла заявка, контакты клиента $phone";
    }
}
