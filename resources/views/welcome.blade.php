<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hello Laravel</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            min-height: 100vh;

            display: flex;
            justify-content: center;
            align-items: center;

            padding: 30px;

            font-family: 'Poppins', sans-serif;

            background: #0f0f0f;
            color: #f5f5f5;
        }

        .container {
            width: 100%;
            max-width: 700px;

            background: #181818;

            padding: 55px 60px;

            border-radius: 18px;

            text-align: center;

            border: 1px solid #292929;

            border-top: 5px solid #b91c1c;

            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.4);
        }

        .tag {
            display: inline-block;

            color: #ef4444;

            font-size: 13px;
            font-weight: 600;

            letter-spacing: 1.5px;
            text-transform: uppercase;

            margin-bottom: 15px;
        }

        h1 {
            color: #ffffff;

            font-size: 48px;

            margin-bottom: 12px;
        }

        .welcome {
            color: #b8b8b8;

            font-size: 18px;

            margin-bottom: 35px;
        }

        .student-info {
            text-align: left;

            background: #202020;

            border: 1px solid #303030;

            border-radius: 12px;

            padding: 10px 25px;

            margin-bottom: 30px;
        }

        .student-info p {
            display: flex;
            justify-content: space-between;

            gap: 20px;

            padding: 15px 0;

            border-bottom: 1px solid #303030;

            font-size: 14px;
        }

        .student-info p:last-child {
            border-bottom: none;
        }

        .student-info strong {
            color: #ef4444;
        }

        .student-info span {
            color: #d4d4d4;

            text-align: right;
        }

        .footer {
            color: #737373;

            font-size: 13px;
        }

        @media (max-width: 600px) {

            .container {
                padding: 40px 25px;
            }

            h1 {
                font-size: 38px;
            }

            .student-info p {
                flex-direction: column;

                gap: 5px;
            }

            .student-info span {
                text-align: left;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="tag">
            Client-Server Technologies
        </div>

        <h1>Hello Laravel!</h1>

        <p class="welcome">
            Welcome to Client-Server Technologies.
        </p>

        <div class="student-info">

            <p>
                <strong>Student Name:</strong>
                <span>Lou Angeli L. Garcia</span>
            </p>

            <p>
                <strong>Student Number:</strong>
                <span>0124-1380</span>
            </p>

            <p>
                <strong>Course:</strong>
                <span>BS Information Technology</span>
            </p>

            <p>
                <strong>Section:</strong>
                <span>BSIT 3A</span>
            </p>

            <p>
                <strong>Subject:</strong>
                <span>Client-Server Computing</span>
            </p>

        </div>

        <p class="footer">
            Developed by Lou Angeli L. Garcia
        </p>

    </div>

</body>
</html>