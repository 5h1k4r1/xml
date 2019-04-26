<?php
require 'vendor/autoload.php';

use App\City;
use App\entities\Home;
use App\entities\Street;



$citiesXml = simplexml_load_file ( '2gis.xml' );

$cities  = [];


foreach ($citiesXml as $city => $entity) {
    $transports = [];

    $name = (string)$entity->attributes()->name;

    $streets = new Street((int)$entity->street);
    $homes = new Home((int)$entity->home);

    foreach ($entity->transport as $transportCount) {

        foreach ($transportCount as $className => $count) {
            $class = 'App\entities\\' . ucfirst($className);
            $transports[] = new $class((int)$count[0]);
        }
    }

    $cities[] = new City($name, $streets, $homes, $transports);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>2gis xml parser</title>
</head>
<body>
<?php
/**
 * @var City[] $cities
 */
?>
<?php foreach ($cities as $city):?>
    <table>
        <caption><strong></stronh><?=$city->getName();?></strong></caption>
        <tr>
            <th>Объект</th>
            <th>Кол-во</th>
            <th>Транспорт</th>
        </tr>
        <tr>
            <?php $entities = $city->getEntities();?>
            <?php foreach ($entities as $entity):?>
                <td><?=$entity->getLabel();?></td>
                <td><?=$entity->getCount();?></td>
            <?php endforeach;?>

            <?php $transports = $city->getTransports();?>

            <?php foreach ($transports as $transport):?>
                <p><?=$transport->getLabel();?> - <?=$transport->getCount();?></p>
            <?php endforeach;?>
        </tr>

    </table>
<?php endforeach;?>
</body>
</html>