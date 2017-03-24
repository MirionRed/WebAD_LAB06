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

<!-- LAB 06 Question 3 -->
  <?php
  $parking = [
    [
      'vehicleNo' => 'WYR9941',
      'driver' => 'Tham Mun Fatt',
      'block' => 'E',
      'floor' => '2',
      'bay' => 11,
    ],
    [
      'vehicleNo' => 'PKC7453',
      'driver' => 'Chia Kim Hooi',
      'block' => 'C',
      'floor' => '3A',
      'bay' => 15,
    ],
    [
      'vehicleNo' => 'WC852E',
      'driver' => 'Ho Jo Ee',
      'block' => 'E',
      'floor' => 'G',
      'bay' => 34,
    ],
    [
      'vehicleNo' => 'AGP8681',
      'driver' => 'Foo Yoke Wai',
      'block' => 'C',
      'floor' => '3A',
      'bay' => 19,
    ],
    [
      'vehicleNo' => 'WA1368Y',
      'driver' => 'Wong Pei Lin',
      'block' => 'A',
      'floor' => '1',
      'bay' => 1,
    ],
  ];
   ?>

   <table>
     <thead>
       <tr>
         <td>Vehicle No.</td>
         <td>Driver</td>
         <td>Block</td>
         <td>Floor</td>
         <td>Bay No.</td>
       </tr>
     </thead>
     <tbody>
       <?php foreach ($parking as $i => $i_value): ?>
       <tr>
         <?php foreach ($i_value as $j => $j_value): ?>
         <td>
           <?= $j_value ?>
         </td>
       <?php endforeach; ?>
       </tr>
     <?php endforeach; ?>
     </tbody>
   </table>

<!-- LAB 06 Question 4 -->
  <?php
  $contacts = [
    [
      'name' => 'Chia Kim Hooi',
      'phone' => '+60124044404',
      'email' => 'chiakh@duck.com',
      'facebook' => 'xyz.chiakh',
    ],
    [
      'name' => 'Chan Xiao Hui',
      'phone' => '+60125785678',
      'email' => 'chanxh@pingguo.com',
      'facebook' => 'pqr.chanxh',
    ],
    [
      'name' => 'Tan Chin Tiong',
      'phone' => '+60193163616',
      'email' => 'tanct@burungtiong.com',
      'facebook' => 'abc.tanct',
    ],
    [
      'name' => 'Foo Yoke Wai',
      'phone' => '+60125575552',
      'email' => 'fooyw@chicken.com',
      'facebook' => 'ijk.fooyw',
    ],
    [
      'name' => 'Ho Xin Yi',
      'phone' => '+60195889776',
      'email' => 'hoxy@myna.com',
      'facebook' => 'mno.hoxy',
    ]
  ];
   ?>
</body>
</html>
