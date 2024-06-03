<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport"content="user-scalable=yes, initial-scale=1, maximum-scale=2, minimum-scale=1, width=device-width" />
    <title>NIAA</title>
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <link href="assets/css/default.css" rel="stylesheet" />
    <link href="assets/css/outline.css" rel="stylesheet" />
    <link href="assets/css/page.css" rel="stylesheet" />
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <!-- <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/common.js"></script>  -->
    <script>
        $(document).ready(function(){
            let type = navigator.appName;
            let lang = null;
            if (type =="Netscape"){
                lang = navigator.language;
            } else{
                lang = navigator.userLanguage;
            }
            lang = lang.substr(0,2)
            console.log(lang);
            if (lang == 'ko'){
                window.location.replace("{{ url('in/test') }}");
                // location.href = "http://175.106.98.247:8006/weblama_rev/kr/index.html";
            } else {
                window.location.replace("{{ url('in/test') }}");
                // return view('in.test');
                // location.href = "http://175.106.98.247:8006/weblama_rev/in/index.html";
            }
        });
    </script>
</head>

<body>
    
    <div></div>
</body>
    
</html>