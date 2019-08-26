<div class="links">
    <a href="{{'/'}}">Main</a>
    <a href="{{'add'}}">Add Books</a>
    <a href="{{'list'}}">List of Books</a>
</div>

<style>
    body {font-family: Arial, Helvetica, sans-serif;}
    * {box-sizing: border-box;}

    input[type=text], select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
    }

    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
</style>

<div><h1>Create new Books</h1></div>

<div class="container">
    <form method="post" action="/add">

        {{csrf_field()}}

        <label for="author">Author</label>
        <input type="text" name="author">

        <label for="title">Title</label>
        <input type="text" name="title">

        <label for="pages">Pages</label>
        <input type="text" name="pages">

        <label for="description">Short description</label>
        <input type="text" name="description">

        <label for="images">Images</label>
        <input type="text" name="images">

        <input type="submit" value="Add New Book">
    </form>
</div>