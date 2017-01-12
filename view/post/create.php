<a href="http://localhost/demomvc/?controller=post">back to list </a>
<br/><br/>
<form action="http://localhost/demomvc/?controller=post&method=add" method="post">
    content:
    <input type="text" name="content"/><br/>
    <?php echo $message;?>
    <input type="submit" name="btnSubmit" value="save">
</form>