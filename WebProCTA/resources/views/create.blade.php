<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product Upload</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>

        .form-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f2f2f2;
            border-radius: 5px;
        }

        .form-title {
            font-size: 36px;
            margin: 0;
            text-align: center;
        }

        .form-input-container {
            display: flex;
            flex-wrap: wrap;
            margin: 20px 0;
        }

        .form-input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        .form-input:focus {
            outline: none;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
        }

        .form-textarea {
            height: 150px;
            resize: none;
        }

        .form-button {
            background-color: rgba(155, 9, 9);
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
        }

        .form-button:hover {
            background-color:rgba(155, 9, 9, 0.7);
        }
    </style>


</head>
<body>

@include('navBar')

@include('createProductForm')

@include('image-form')
</body>

</html>
