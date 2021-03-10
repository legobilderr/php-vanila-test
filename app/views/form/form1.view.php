<form id='Form1' method="POST" action="/user">
    <h3>To participate in the conference,please fill out the form</h3>

    <input type="text" onkeyup="checkParams()" placeholder="First Name" id="FirstName" name='FirstName' required>

    <input type="text" onkeyup="checkParams()" placeholder="Last NAme" id="LastNAme" name='LastNAme' required>

    <input type="datetime-local" value="1918-06-07T00:00" min="1918-06-07T00:00" max="2021-06-14T00:00 " id="birthday" name="birthday">

    <input type="text" onkeyup="checkParams()" placeholder="Report Subject" id="ReportSubject" name='ReportSubject' required>

    <?php require_once(__DIR__ . '/../partials/countryList.php'); ?>

    <input type="tel" onkeyup="checkParams()" name="phone_num" pattern="[\+]\d{1}[\(]\d{3}[\)]\d{3}[\-]\d{4}" placeholder=" enter phone +1 (555) 555-5555 " id="phone_num" name='phone_num' />

    <input type="text" onkeyup="checkParams()" placeholder="Email" id="Email" name='Email' required>

    <div class="btn-box">
        <button type="submit" id="Next1" disabled>
            Next
        </button>
    </div>
</form>