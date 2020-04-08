<article class="form">
    <h1>Kontakt</h1>

    <form method="post" action="result.php">
        <fieldset>
            <legend>Kontakta mig!</legend>
            <label for="name">Namn:</label>
            <input type="text" name="namn" id="namn" placeholder="För- och efternamn">
            <label for="email">E-post:</label>
            <input type="email" name="email" id="email" placeholder="xx@yy.zz">
            <label for="reason">Ärende:</label>
            <select name="reason" id="reason">
                <option value="intro">Introduktion</option>
                <option value="feedback">Feedback</option>
                <option value="betyg">Betygsättning</option>
            </select>
            <label for="message">Ditt meddelande:</label>
            <textarea name="message" id="message"></textarea>
            <button type="submit">Skicka</button>
        </fieldset>
    </form>
</article>
