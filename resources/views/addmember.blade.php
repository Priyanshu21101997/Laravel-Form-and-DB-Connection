<head>
    <link rel="stylesheet" href="/Users/collegedunia/Desktop/workspace/firstproject/resources/css/style.css">
</head>
<h1>Welcome To Travel Form</h1>
<form action="add" method="POST">
    @csrf
    <input type="text" name="name" id="name" placeholder="enter your name ">
    <br>
    <input type="text" name="age" id="age" placeholder="enter your age">
    <br>
    <input type="text" name="gender" id="gender" placeholder="enter your gender">
    <br>
    <input type="email" name="email" id="email" placeholder="enter your email">
    <br>
    <input type="phone" name="phone" id="phone" placeholder="enter your phone no">
    <br>
    <textarea name="desc" id="desc" cols="30" rows="10"placeholder="enter any other information"></textarea>
    <br>
    <button class="btn">submit</button>
    <br>
    <!-- <button class="btn">Reset</button> -->
</form>