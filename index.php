<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <!-- LAB 06 Question 1 -->
  <?php
  $members = [
    'Tham Mun Fatt',
    'Tan Chin Tiong',
    'Apple Tiong',
    'Tiong Na Na',
    'Sam Sung'
  ];
   ?>
  <ul>
    <?php foreach ($members as $i): ?>
  <li><?= $i ?></li>
    <?php endforeach; ?>
  </ul>

  <!-- LAB 06 Question 2 -->
  <?php
  $properties = [
    [
      'unitNo' => 'C-8-1',
      'owner' => 'Foo Yoke Wai',
    ],
    [
      'unitNo' => 'C-3A-3A',
      'owner' => 'Chia Kim Hooi',
    ],
    [
      'unitNo' => 'B-18-8',
      'owner' => 'Heng Tee See',
    ],
    [
      'unitNo' => 'A-10-10',
      'owner' => 'Tang So Ny',
    ],
    [
      'unitNo' => 'B-19-10',
      'owner' => 'Tang Xiao Mi',
    ],
  ];
  ?>

  <ol>
    <?php foreach ($properties as $i): ?>
    <li>
      <?php foreach ($i as $j => $j_value): ?>
        <?php if ($j == 'unitNo'): ?>
          <?= $j_value; ?>:
        <?php else: ?>
          <?= $j_value; ?>
        <?php endif; ?>
      <?php endforeach; ?>
    </li>
    <?php endforeach; ?>
  </ol>
</body>
</html>
