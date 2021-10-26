<table style="border: 1px solid gray">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>last name</td>
        <td>region</td>
        <td>age</td>
    </tr>
  <?php
  $arrLen = count($data); // 5
  for ($i=0; $i < $arrLen; $i++) : ?>
      <tr>
          <?php
          $rowItem = $data[$i];
          $arrLen2 = count($rowItem);
          for ($j=0; $j < $arrLen2; $j++) {
              $colItem = $rowItem[$j]
          ?>
              <td><?=$colItem?></td>
              <?php
          }
          ?>
      </tr>
    <?php
  endfor;
  ?>

</table>
