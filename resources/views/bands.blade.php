<?php

$bands = [

'The 501’s',
'A Night Like This',
'Apathy Avenue',
'Alive in Salem ',
'Amère',
'Charlie Says ',
'Diggs',
'The Dweller',
'Disrupt The Continuum',
'Epic Fail',
'Exit To Main Menu',
'Ferinus ',
'Garuda ',
'Good Morning Vietnam ',
'Hunger Strike',
'James Jones',
'Lake Sycamore',
'Ortario',
'Peaks',
'Pineharbour',
'The Sandinistas',
'Sentry',
'Valhalla Awaits ',
'Welterweight ',
'And many more..'

];


?>

<ul>
<?php foreach($bands as $key => $value) : ?>

    <li><?=$value;?></li>

<?php endforeach; ?>
</ul>
