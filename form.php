<?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		var_dump($_POST);
	}
?>
<!DOCTYPE html>
<html>
<head>
    <title>form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="js-html-inspector" data-remove-target="[&quot;p:not([class])&quot;,&quot;br&quot;]">

    <div class="container">
        <form class="form-horizontal" method="POST">
            <p><strong>form.form-horizontal</strong></p>
            <!--input text-->
            <div class="form-group form-group-lg">
                <div class="col-sm-9">
                    <input class="form-control" type="text" name="input_text"
                           placeholder=".form-group-lg input.form-control">
                </div>
            </div>

            <!--textarea-->
            <div class="form-group form-group-lg">
                <div class="col-sm-9">
                    <label>how to you feel
                        <textarea class="form-control" name="textarea"></textarea>
                    </label>
                </div>
            </div>

            <!-- Inline checkboxes -->
            <div class="form-group">
                <div class="col-sm-9">
                    <label class="checkbox-inline">
                        <input type="checkbox" name="checkbox[]" value="checkbox 1">
                        checkbox #1
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="checkbox[]" value="checkbox 2">
                        checkbox #2
                    </label>
                    <label class="checkbox-inline disabled">
                        <input type="checkbox" name="checkbox[]" value="checkbox 3">
                        checkbox #3
                    </label>
                </div>
            </div>

            <!-- Inline radios -->
            <div class="form-group">
                <div class="col-sm-9">
                    <label class="radio-inline">
                        <input name="radio" type="radio" value="option1" checked="">
                        label.radio-inline Radio #1
                    </label>
                    <label class="radio-inline">
                        <input name="radio" type="radio" value="option2">
                        Radio #2
                    </label>
                    <label class="radio-inline disabled">
                        <input name="radio" type="radio" value="option3">
                        Disabled radio #3
                    </label>
                </div>
            </div>

            <!-- Select -->
            <div class="form-group">
                <div class="col-sm-4">
                    <label>select something
                        <select class="form-control" name="select">
                            <option value="select 1">select #1</option>
                            <option value="select 2">select #2</option>
                            <option value="select 3">select #3</option>
                        </select>
                    </label>
                </div>
            </div>

            <!-- Select -->
            <div class="form-group">
                <div class="col-sm-4">
                    <label>select something
                        <select class="form-control">
                            <option value="select 1">select #1</option>
                            <option value="select 2">select #2</option>
                            <option value="select 3">select #3</option>
                        </select>
                    </label>
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <div class="col-sm-9">
                    <button class="btn btn-default btn-block" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>