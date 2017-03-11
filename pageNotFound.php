

<div>
    <h1></h1>
    <article id="page_error">
        <h1>Упсссссссс ...</h1>
        <p>Станала е грешка.</p>
        <p>Страницата, която се опитвате да отворите, не може да бъде намерена.</p>
        <ul>
            <li> Върнете се на <a onclick="goBack()" href="#">предишната страница</a>.</li>
            <li>Последвайте някой от следните линкове: <a href="./?page=home">Начало</a> | <a href="./?page=login"> Моят профил</a></li>
        </ul>  
    </article>
</div>

<script>
function goBack() {
    window.history.back();
}
</script>

<script>
    document.title = "404 Page Not Found";
</script>
