<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/Public/Assets/css/bootstrap.min.css" />
</head>
<body>

<form class="form-horizontal">
    <fieldset>
        <div id="legend" class="">
            <!--<legend class="">请填写</legend>-->
        </div>
        <div class="control-group">

            <!-- Select Basic -->
            <label class="control-label">重审原因</label>
            <div class="controls">
                <select class="input-xlarge">
                    <option>Enter</option>
                    <option>Your</option>
                    <option>Options</option>
                    <option>Here!</option></select>
            </div>
        </div>

        <div class="control-group">

            <!-- Textarea -->
            <label class="control-label">附加信息</label>
            <div class="controls">
                <div class="textarea">
                    <textarea type="" class=""> </textarea>
                </div>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label"></label>

            <!-- Button -->
            <div class="controls">
                <button class="btn btn-info">提交</button>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label"></label>

            <!-- Button -->
            <div class="controls">
                <button class="btn btn-default">取消</button>
            </div>
        </div>

    </fieldset>
</form>

</body>
</html>