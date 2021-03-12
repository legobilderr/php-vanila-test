<form id='Form1' method="POST" action="/user">
    <h3>To participate in the conference,please fill out the form</h3>

    <input type="text" placeholder="First Name" id="FirstName" name='FirstName' required>

    <input type="text" placeholder="Last NAme" id="LastNAme" name='LastNAme' required>

    <input type="datetime-local" value="1918-06-07T00:00" min="1918-06-07T00:00" max="2021-06-14T00:00 " id="birthday" name="birthday">

    <input type="text" placeholder="Report Subject" id="ReportSubject" name='ReportSubject' required>

    <?php require_once(__DIR__ . '/../partials/countryList.php'); ?>

    <input type="tel" placeholder=" enter phone +1 (555) 555-5555 " id="phone_num" name='phone_num' pattern="([\+](1\s|\B)?\(?[0-9]{3}[-\s)]\s?[0-9]{3}[-\s][0-9]{4}|[0-9]{10})" required>

    <input type="text" onkeyup="checkParams()" placeholder="Email" id="Email" name='Email' required>

    <div class="btn-box">

        <button type="submit" id="Next1">
            Next
        </button>
    </div>
</form>