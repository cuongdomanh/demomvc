
<h2> list post </h2>
<a href="http://localhost/demomvc/?controller=post&method=add">create new post </a>
<br/><br/>
<table border="1">
    <thead>
    <tr>
        <th>no.</th>
        <th>id</th>
        <th>content</th>
    </tr>
    </thead>
    <tbody>
    <?php if( isset($listPost)):?>
        <?php foreach ($listPost as $key=>$item):?>
      <tr>
          <td>
              <?php echo $key +1?>
          </td>
          <td>
              <?php echo $item['id'];?>
          </td>
          <td>
              <?php echo $item['content'];?>
          </td>
      </tr>
            <?php endforeach;?>
    <?php endif;?>
    </tbody>

</table>