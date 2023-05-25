<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>API CALLS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
    <style>
        div{
            font-family: 'Montserrat', sans-serif;
            padding: 20px 50px;
        }

        li{
            list-style: none;
            font-size: 18px;
        }

        a{
            text-decoration: none;
            color: #000;
        }

        a:hover{
            color: blue;
            text-decoration: underline;
        }

        ul{
            padding: 0;
        }

        .blue{
            color: blue;
            width: 125px;
            display: inline-block;
        }

        .red{
            color: red;
            width: 125px;
            display: inline-block;
        }

        .green{
            color: green;
            width: 125px;
            display: inline-block;
        }

        .orange{
            color: orange;
            width: 125px;
            display: inline-block;
        }
    </style>

    <div>
        <h2>API CALLS</h2>
        <ul>
            <li><b>Authentication</b></li>
            <li>★ <span class="green">POST</span><i>Login a user → <a href="#">/api/login</a></i> </li>
            <li>★ <span class="green">POST</span><i>Logout a user → <a href="#">/api/logout</a></i> </li>
        </ul>
        <ul>
            <li><b>Users</b></li>
            <li>★ <span class="blue">GET</span><i>Fetch all users → <a href="/api/users" target="_blank">/api/users</a></i> </li>
            <li>★ <span class="blue">GET</span><i>Fetch single user → <a href="/api/user/id" target="_blank">/api/user/{id}</a></i> </li>
            <li>★ <span class="green">POST</span><i>Create a user → <a href="#">/api/user</a></i> </li>
            <li>★ <span class="orange">UPDATE</span><i>Update a user → <a href="#">/api/user/{id}</a></i> </li>
            <li>★ <span class="red">DELETE</span><i>Delete a user → <a href="#">/api/user/{id}</a></i> </li>
        </ul>
        <ul>
            <li><b>Posts</b></li>
            <li>★ <span class="blue">GET</span><i>Fetch all posts with likes and comments → <a href="/api/posts" target="_blank">/api/posts</a></i> </li>
            <li>★ <span class="blue">GET</span><i>Fetch single post with likes and comments → <a href="/api/post/id" target="_blank">/api/post/{id}</a></i> </li>
            <li>★ <span class="green">POST</span><i>Create a post → <a href="#">/api/posts</a></i> </li>
            <li>★ <span class="orange">UPDATE</span><i>Update a post → <a href="#">/api/post/{id}</a></i> </li>
            <li>★ <span class="red">DELETE</span><i>Delete a post → <a href="#">/api/post/{id}</a></i> </li>
        </ul>
        <ul>
            <li><b>Categories</b></li>
            <li>★ <span class="blue">GET</span><i>Fetch all categories → <a href="/api/categories" target="_blank">/api/categories</a></i> </li>
            <li>★ <span class="green">POST</span><i>Create a category → <a href="#">/api/category</a></i> </li>
            <li>★ <span class="orange">UPDATE</span><i>Update a category → <a href="#">/api/category/{id}</a></i> </li>
            <li>★ <span class="red">DELETE</span><i>Delete a category → <a href="#">/api/category/{id}</a></i> </li>
        </ul>
        <ul>
            <li><b>Comments</b></li>
            <li>★ <span class="green">POST</span><i>Create a comment → <a href="#">/api/comment</a></i> </li>
            <li>★ <span class="orange">UPDATE</span><i>Update a comment → <a href="#">/api/comment/{id}</a></i> </li>
            <li>★ <span class="red">DELETE</span><i>Delete a comment → <a href="#">/api/comment/{id}</a></i> </li>
        </ul>
        <ul>
            <li><b>Likes</b></li>
            <li>★ <span class="green">POST</span><i>Like a post → <a href="#">/api/like</a></i> </li>
            <li>★ <span class="red">DELETE</span><i>Unlike a post → <a href="#">/api/unlike/{id}</a></i> </li>
        </ul>
    </div>
</body>
</html>