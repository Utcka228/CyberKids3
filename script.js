document.getElementById("contact-form").addEventListener("submit", function(e)
{
    e.preventDefault(); // предотвращаем стандартную отправку формы

    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const message = document.getElementById("message").value;

    // Формируем текст сообщения
    const whatsappMessage = `Заявка от: ${name}%0AEmail: ${email}%0AСообщение: ${message}`;
    // Подставляем свой номер (без плюса) в ссылку
    const whatsappLink = 'https://wa.me/79206852628?text=${whatsappMessage}'; {
    e.preventDefault(); // предотвращаем стандарт

    // Открываем WhatsApp
    window.open(whatsappLink, "_blank");
});