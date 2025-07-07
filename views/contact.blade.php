@extends('layouts.app')

@section('content')
<h2>Contact Me</h2>

<form id="contactForm">
    <style>
        input, textarea {
            border-radius: 8px;
            border: 1px solid #ccc;
            padding: 8px;
            width: 100%;
        }

        input:hover, textarea:hover {
            border-color: #007bff;
            background-color: #f0f8ff;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .success-message {
            color: green;
            margin-top: 10px;
        }

        .error-message {
            color: red;
            margin-top: 10px;
        }
    </style>

    <div class="form-group">
        <input type="text" id="name" placeholder="Your Name">
    </div>
    <div class="form-group">
        <input type="email" id="email" placeholder="Your Email">
    </div>
    <div class="form-group">
        <textarea id="message" placeholder="Your Message"></textarea>
    </div>
    <input type="submit" value="Send" class="btn btn-primary">
</form>

<div id="formMessage"></div>

<script>
    document.getElementById('contactForm').addEventListener('submit', function (e) 
    {
        e.preventDefault(); 
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const message = document.getElementById('message').value.trim();
        const formMessage = document.getElementById('formMessage');

        formMessage.innerHTML = ''; 

        if (name === '' || email === '' || message === '') 
        {
            formMessage.innerHTML = '<p class="error-message">Please fill in all fields.</p>';
        }
         else
        {
            formMessage.innerHTML = '<p class="success-message">Thank you for contacting me!</p>';
            document.getElementById("contactForm").submit();
        }
    });
</script>
@endsection