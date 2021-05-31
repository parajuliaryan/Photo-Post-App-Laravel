<style>
 .heading{
   display: flex;
   padding-left: 5px;
   width: 30%;
   margin: 10px auto;
 }

 .add-form{
   width: 30%;
   display: flex;
   flex-direction: column;
   margin: 0 auto;
 }

 .add-form input[type=text]{
    margin: 10px 0;
    width: 60%;
    height: 50px;
 }

 .add-form input[type=file]{
    margin: 10px 0;
 }

 .add-form button{
   background-color: rgba(106, 248, 248, 0.739);
   cursor: pointer;
   border-radius: 5px;
   color: white;
   width: 20%;
   margin: 20px 0;
   height: 40px;
 }
</style>
<title>Add a Post</title>
<div class="heading">
  <h2>Add a post</h2>
</div>
<form class="add-form" action="/dashboard" method="POST" enctype="multipart/form-data">
  @csrf
<input type="text" name="caption" placeholder="Enter your caption...">
<input type="text" name="description" placeholder="Add a description">
<input type="file" name="image" >
<button type="submit">Done</button>
</form>