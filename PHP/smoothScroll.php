<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B-Motors</title>
</head>
<body>
    <script type="text/javascript" src="../JS/jquery.js"></script>
    <script type="text/javascript" src="../JS/bootstrap.min.js"></script>
    <script type="text/javascript" src="../Icons/js/all.min.js"></script>
    <script src="https://unpkg.com/swup@latest/dist/swup.min.js"></script>
    <script type="text/javascript">
        // active
        $('body').scrollspy({ target: '#main-nav' });
        // scroll
        $('#main-nav a').on('click', function (e) {
            if (this.hash !== '') {
                e.preventDefault();
                const hash = this.hash;

                $('html,body').animate({
                    scrollTop: $(hash).offset().top
                }, 1000, function () {
                    window.location.hash = hash
                })
            }
        })
    </script>
</body>
</html>