<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="/img/logo.png">
</head>
<style>
    body {
        font-family: 'Lato', sans-serif;
        margin: 0;
        padding: 0;
    }

    .sidebar {
        height: 100vh;
        width: 250px;
        background-color: #ff9933;
        padding-top: 20px;
        position: fixed;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .sidebar img {
        display: block;
        margin: 0 auto;
        width: 150px;
    }

    .sidebar a {
        text-decoration: none;
        color: white;
        padding: 10px 15px;
        display: flex;
        align-items: center;
        margin: 5px 0;
        border-radius: 5px;
    }

    .sidebar a:hover {
        background-color: rgba(255, 255, 255, 0.2);
    }

    .sidebar a.active {
        background-color: white;
        color: #ff9933;
    }

    .sidebar a i {
        margin-right: 10px;
    }

    .logout {
        text-align: center;
        margin-bottom: 20px;
    }

    .logout a {
        color: white;
    }

    .judulhalaman {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .btn-tambah-produk {
        padding: 8px 12px;
        border-radius: 4px;
        background-color: #ff9933;
        color: white;
        text-decoration: none;
        display: inline-block;
    }

    td {
        border-radius:
            9px, 9px, 0px, 0px;
        max-width: 200px;
    }



    .btn-tambah-produk:hover {
        background-color: darkorange;
    }

    .pencil {
        text-align: center;
        margin-bottom: 16px;
    }

    .pencil .edit-button {
        padding: 4px;
        border-radius: 4px;
        color: white;
        background-color: green;
        text-decoration: none;
        display: inline-block;
        border: none;
        cursor: pointer;
    }

    .pencil .edit-button:hover {
        background-color: darkred;
        color: white;
    }

    .trash {
        text-align: center;
        margin-bottom: 16px;
    }

    .trash .delete-button {
        padding: 4px;
        border-radius: 4px;
        color: white;
        background-color: red;
        text-decoration: none;
        display: inline-block;
        border: none;
        cursor: pointer;
    }

    .trash .delete-button:hover {
        background-color: darkred;
        color: white;
    }

    .trash a {
        padding: 4px;
        border-radius: 4px;
        color: white;
        background-color: red;
    }

    .tombol {
        display: flex;
        text-align: center;
        align-items: center;
        gap: 6px;
    }
</style>

<body>
    <div class="sidebar">
        <div>
            <img src="{{ asset('img/logo.png') }}" alt="Giwigewi Logo">
            <a href="/admin"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            <a href="/userorder"><i class="fas fa-chart-line"></i> User Order</a>
            <a href="/tambahartikel"><i class="fas fa-plus"></i> Tambah Artikel</a>
            <a href="/messages" class="active"><i class="fas fa-inbox"></i>Pesan</a>
        </div>
        <div class="logout">
            <a href="/logout"><i class="fas fa-sign-out-alt"></i> Log Out</a>
        </div>
    </div>

    <div class="content">
        <div class="judulhalaman">
            <h2>Pesan</h2>
        </div>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Isi Pesan</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($messages as $message)
                <tr>
                    <td>{{ $message->id }}</td>
                    <td style="max-width: 100px;">{{ $message->name }}</td>
                    <td>{{ $message->email }}</td>
                    <td style="text-align: justify;">{{ $message->message }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>