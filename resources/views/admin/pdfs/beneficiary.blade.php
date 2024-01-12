<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>beneficiary- {{$beneficiary[0]->firstname}}</h1>

    Full name: <p>{{$beneficiary[0]->firstname}}  {{$beneficiary[0]->lastname}}</p><br>
    Phone number: <p>{{$beneficiary[0]->contact}}</p><br>
    Gender: <p>{{$beneficiary[0]->gender}}</p><br>
    <details>
        <summary>Medical history</summary>
        <p>{{$beneficiary[0]->history}}</p>
    </details>
</body>
</html>