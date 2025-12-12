<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Example</title>
    <script src="formscript.js"></script>
</head>
<body>
    <div class="form-div">
        <h1>Application Form</h1>

        <form>
            <div>
                <label>Select State</label>
                <select onchange="fetchcities(this.value)">
                    <option value="">Select State</option>
                    <option value="Bagmati">Bagmati</option>
                    <option value="Koshi">Koshi</option>
                    <option value="Madesh">Madesh</option>
                </select>
            </div>

            <div>
                <label>Select City</label>
                <select id="cities">
                    <option value="">First Select state</option>
                </select>
            </div>
        </form>
    </div>
</body>
</html>
