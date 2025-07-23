<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Signup</title>
  <link rel="stylesheet" href="style.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    }

    body {
    background-image: url('/plantStoreImages/WebsitePics/homebg.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    }

    .container {
    display: flex;
    justify-content: space-between;
    width: 90%;
    max-width: 1000px;
    gap: 40px;
    padding: 40px;
    }

    .left {
    flex: 1;
    color: white;
    margin-top: 200px;
    }

    .left h1 {
    font-size: 30px;
    letter-spacing: 3px;
    }

    .left h2 {
    font-size: 45px;
    margin-top: 20px;
    line-height: 1.2;
    }

    .left p {
    margin-top: 20px;
    font-size: 16px;
    max-width: 300px;
    }

    .left .small {
    font-size: 13px;
    color: #ccc;
    }

    .right {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 100px;
    }

    .signup-box {
    background: rgba(255, 255, 255, 0.1);
    padding: 30px;
    border-radius: 20px;
    backdrop-filter: blur(15px);
    width: 100%;
    max-width: 400px;
    color: white;
    }

    .signup-box h2 {
    text-align: center;
    margin-bottom: 15px;
    }

    .signup-box label {
    display: block;
    margin: 10px 0 5px;
    font-weight: 500;
    }

    .signup-box input {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 10px;
    outline: none;
    margin-bottom: 15px;
    }

    button {
    width: 100%;
    padding: 10px;
    background: #007bff;
    color: white;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    font-weight: 500;
    margin-bottom: 15px;
    }

    .google-btn {
    background: white;
    color: black;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    }

    .divider {
    text-align: center;
    margin: 10px 0;
    position: relative;
    }

    .divider span {
    background-color: rgba(255, 255, 255, 0.1);
    padding: 0 10px;
    position: relative;
    z-index: 1;
    color: #ccc;
    }

    .divider::before {
    content: "";
    position: absolute;
    top: 50%;
    width: 100%;
    height: 1px;
    background: #ccc;
    left: 0;
    z-index: 0;
    }

    .new {
    text-align: center;
    font-size: 14px;
    }

    .new a {
    color: white;
    text-decoration: underline;
    }


  </style>
</head>
<body>
  <div class="container">
    <div class="left">
      <h1>Rain Foreset</h1>
      <h2>Sing Up</h2>
      <p>There is a moment in the life of any aspiring gardener that it is time to buy their first plant.</p>
      <p class="small">Embark on a journey where every corner of the world is within your reach.</p>
    </div>

    <div class="right">
      <form class="signup-box">
        <h2>Create Account</h2>

        <label>Username</label>
        <input type="text" placeholder="Enter your username" required>

        <label>Email</label>
        <input type="email" placeholder="Enter your email" required>

        <label>Phone Number</label>
        <input type="tel" placeholder="Enter your phone number" required>

        <label>Address</label>
        <input type="text" placeholder="Enter your address" required>

        <label>Password</label>
        <input type="password" placeholder="Create a password" required>

        <button type="submit">SIGN UP</button>

        <div class="divider"><span>or</span></div>

        <button type="button" class="google-btn">
          <img src="https://img.icons8.com/color/16/000000/google-logo.png"/>
          Sign up with Google
        </button>

        <p class="new">Already have an account? <a href="#">Sign In</a></p>
      </form>
    </div>
  </div>
</body>
</html>
