<?php
//single array

//
//*******Multiple array**********/

//$studentRoll=[10,20,40,50,60];
//foreach ($studentRoll as $roll){
//    echo $roll.'</br>';

//}
//echo $studentRoll[4];

//$students=[
//    1 =>[
//        'name'            =>'sajib bhuyan',
//        'department'      =>'cse',
//        'roll'            =>'08',
//
//    ],
//    2 =>[
//        'name'            =>'rakib molla',
//        'department'      =>'bba',
//        'roll'            =>'34',
//    ],
//    3 =>[
//        'name'            =>'sabbir hosain',
//        'department'      =>'eee',
//        'roll'            =>'67',
//    ],
//    4 =>[
//        'name'            =>'asib antor',
//        'department'      =>'civil',
//        'roll'            =>'67',
//    ],
//
//];
//*** sob  golo data array theke ber korar niom *****
/*
foreach ($students as $student){
  echo 'Name:'.$student['name'].
     ' '.'Department:'.$student['department'].
      ' '.'Roll:'.$student['roll'].
      ' '.'</br>';
}
*/

//**** multiple array theke single array ar man ber kore nia asar niom*****
//echo $students[1]['name'].$students[1]['roll'];
//=========================================================
$student_list=[
    1=>[
     'name'=>'sajib bhuyan',
      'mobile'=>[
          'personal'  =>'01987311830',
          'parent'    =>[
              'one'=>'01955988096',
              'two'=>'109559880'
          ],
      ] ,
        'email'=>'sajibbhuyan@gmail.com',
    ],
    2=>[
        'name'=>'mehedi hasan bhuyan',
        'mobile'=>[
            'personal'  =>'01987311833',
            'parent'    =>[
                'one'=>'0183000000',
                'two'=>'01934567777'
            ],
        ] ,
        'email'=>'mehedihasnbhuyan1@gmail.com',
    ],

];
//echo $student_list[2]['mobile']['parent']['two'];
//=================================================
//multiple array theke man ber korar way
/*
foreach ($student_list as $student){
    foreach ($student['mobile'] as $key=> $mobile){
        if($key=='parent'){
            foreach ($mobile as $parent){
                echo $parent.'</br>';
            }

        }
    }
}
*/
//================================================
//array golo index and value soho print korar niom
/*

$data=[10,20,30,40.100];
foreach ($data as $key => $value){
      echo 'key'.$key.'value:'.$value.'</br>';
}

*/

//================================================
/*
$country_list=[
    'country1'=>'Bangladesh',
    'country2'=>'India',
    'country3'=>'Pakistan',
    'country4'=>'Butan',
    'country5'=>'Nepal',
    'country6'=>'Shri-lonka'
];
echo '<pre>';
print_r($country_list);
echo '<pre>';
*/
echo '<pre>';
print_r($_POST);
echo '<pre>';
?>
<form action="" method="post">
    <table>
        <tr>
            <th>Name</th>
            <td><input type="text" name="fisrstNmae"> </td>
        </tr>
        <tr>
            <th>Last Name</th>
            <td><input type="text" name="lastName"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="submit_btn" value="submit"></td>
        </tr>
    </table>
</form>

