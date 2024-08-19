<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap">
    <style>
        @media only screen and (min-width: 720px) {
            .container {
                width: 40%;
            }
        }

        * {
            font-family: "Lato", sans-serif;
        }
    </style>
</head>

<body style="background-image: linear-gradient(90deg, #b743ae, #ed429e);">
    <div class="container my-5">
        <div class="py-5 px-md-5 px-1 rounded-1 mx-md-5" style="background-color: #fffffff2;">
            <h2 class="fw-bold fs-1 mb-3 pb-2 text-center">Contact Us</h2>
            <form action="{{ route('contact.send') }}" method="post">
                @csrf
                <div class="form-group mb-3 row">
                    <label for="name" class="form-label col-md-2 fw-bold text-md-end">Name:</label>
                    <div class="col-md-10">
                        <input type="text" id="name" name="name" placeholder="e.g. John Doe" class="form-control py-2" required />
                    </div>
                </div>
                <div class="form-group mb-3 row">
                    <label for="email" class="form-label col-md-2 fw-bold text-md-end">Email:</label>
                    <div class="col-md-10">
                        <input type="email" id="email" name="email" placeholder="e.g. example@example.com" class="form-control py-2" required />
                    </div>
                </div>
                <div class="form-group mb-3 row">
                    <label for="subject" class="form-label col-md-2 fw-bold text-md-end">Subject:</label>
                    <div class="col-md-10">
                        <input type="text" id="subject" name="subject" placeholder="Enter subject" class="form-control py-2" required />
                    </div>
                </div>
                <hr>
                <div class="form-group mb-3 row">
                    <label for="message" class="form-label col-12 fw-bold">Message:</label>
                    <div class="col-12">
                        <textarea id="message" name="message" class="form-control" rows="8" style="padding: 0.7rem;" required></textarea>
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn mt-4 text-white fs-5 fw-bold border-0 py-2 px-md-5 w-100"
                        style="background-image: linear-gradient(90deg, #b743ae, #ed429e);">
                        Send
                    </button>
                </div>
                <div class="text-center">
                    <q>I have not failed. I've just found 10,000 ways that won't work.</q>
                    <p style="color: #b743ae">— Thomas Edison</p>
                </div>
            </form>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</html>
