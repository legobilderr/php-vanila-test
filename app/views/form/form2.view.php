<form id='Form2' method="POST" action="/share" enctype="multipart/form-data">
    <h3>Social Links</h3>
    <input type="text" placeholder="Company" id="Company" name="Company">

    <input type="text" placeholder="Position" id="Position" name="Position">

    <!-- <input type="text" placeholder="About me" id="About" name="About"> -->

    <textarea id="About" name="About" class="testInput"> </textarea>

    <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg">

    <div class="btn-box">
        <button type="button" id="Back1">
            Back
        </button>
        <button type="submit" id="Next2">
            Submit
        </button>
    </div>
</form>