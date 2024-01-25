<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $subject }}</title>
</head>
<body>
    <p>Hello, I am {{(string) $name}}. My Email is {{(string) $email}}. My phone number is {{(string) $phone}}. 
        
        <br><br>
        My Message is : {{ (string) $emailMessage }}</p>

</body>
</html>
