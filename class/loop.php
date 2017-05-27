<?php
$cats = array(
    array(
        "name" => "Mitzi",
        "type" => "Sime",
        "gender" => "Female"
    ),
    array(
        "name" => "Tigra",
        "type" => "Egyptian",
        "gender" => "Female"
    ),
    array(
        "name" => "Kuza",
        "type" => "Street",
        "gender" => "Male"
    )
);





$output = '';
foreach ($cats as $key => $cat){
    $output.= cat_table($cat);
}
function cat_table($cat){
    return "<tr>
                <td>{$cat['name']}</td>
                <td>{$cat['type']}</td>
                <td>{$cat['gender']}</td>
            </tr>";
}



















$output = '<table>
                <thead>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Gender</th>
                </thead>'
                . $output
    .'</table>';
echo $output;






