<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Template</title>
</head>
<body>
    <h2>Informasi Pengguna:</h2>
    <table>
        <tr>
            <td><strong>Nama Depan:</strong></td>
            <td>{{ $first }}</td>
        </tr>
        <tr>
            <td><strong>Nama Belakang:</strong></td>
            <td>{{ $last }}</td>
        </tr>
        <tr>
            <td><strong>Email:</strong></td>
            <td>{{ $email }}</td>
        </tr>
        <tr>
            <td><strong>Departemen:</strong></td>
            <td>{{ $department }}</td>
        </tr>
        <tr>
            <td><strong>Pesan:</strong></td>
            <td>{{ $message }}</td>
        </tr>
    </table>
</body>
</html>
