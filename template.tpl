<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap.min.css" rel="stylesheet">

    <title>Hello World application</title>
</head>
<body>

<article class="letter">
    Hello, {USERNAME} !
    I&#39;m a simple PHP script. The first one in a sequence of {NUMBER} of tasks you&#39;ll have to write in order to successfully
    complete the task.
    I&#39;ve been run at {TODAY}, at the first day of Godel PHP Mastery program. In {MONTHNUM} months, about {ENDDATE}  the you&#39;ll
    finish the mastery and even if you not find this task very easy, by that moment you probably will look at your very first script
    with a smile and a bit nostalgically. I wish you a good luck.
</article>

<br/>
<article class="col-md-6">
    <form method="post" action="index.php" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                <div class="input-contact">
                    <input type="text" name="username" id="username" required>
                    <span>USERNAME</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-contact">
                    <input type="number" name="number" min="1" id="number" required>
                    <span>NUMBER</span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="input-contact">
                    <input type="number" min="1" name="monthnum" id="monthnum" required>
                    <span>MONTHNUM</span>
                </div>
            </div>
            <div class="col-md-12">
                <button class="btn btn-box" type="submit" name="sub" value="sub">Submit</button>
            </div>
        </div>
    </form>
</article>



</body>
</html>

