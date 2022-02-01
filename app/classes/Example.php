<?php
namespace App\classes;
class Example
{
    public $student = [];

    public function index()
    {
        $this->student = [
            0 => [
                'name'      => 'Jahid',
                'email'     => 'jahid@gmail.com',
                'mobile'    => [
                    'mobile1' => '0113589665',
                    'mobile2' => '0123589665',

                                ],
                ],
            1 => [
                'name'      => 'Nabil',
                'email'     => 'jahid@gmail.com',
                'mobile'    => [
                    'mobile1' => '0113589665',
                    'mobile2' => '0123589665',
                    ],

                ],

                2 => 'BITM',
                3 => [
                    'name'      => 'Roy',
                    'email'     => 'jahid@gmail.com',
                    'mobile'    => [
                        'mobile1' => '0113589665',
                        'mobile2' => '0123589665',
                        ],
                    ],

        ];

        echo '<pre>';
//        print_r($this->student);
//        var_dump($this->student);









//        foreach ($this->student as $key => $item)
//        {
//            if (is_array($item))
//            {
//                foreach ($item as $value)
//                {
//                    if (is_array($value))
//                    {
//                        foreach ($value as $v_value)
//                        {
//                        echo $v_value.' ' ;
//                        }
//                    }
//                    else
//                    {
//                        echo $value.' ';
//                    }
//                }
//                echo '<br/>';
//            }
//            else
//                {
//                    echo $item;
//                    echo '<br/>';
//                }
//
//
//        }






//        foreach ($this->student as $key => $item)
//        {
//            if($key >0){
//                echo $item['name'].' '.$item['email'].' '.$item['mobile'].'<br/>';
//                break;
//            }
//        }



//        echo $this->student[2]['mobile'];








//        $this->student = [
//                'name'      => 'Jahid',
//                'email'     => 'jahid@gmail.com',
//                'mobile'    => '0123589665',
//        ];
//        echo $this->student['name'].' ';
//        echo $this->student['mobile'].' ';
//        echo $this->student['email'].' ';





//        $this->student = [10, 20, 'BITM', 10.20, false, true];
////        echo $this->student[2];
///
///
//        foreach ($this->student as $key => $item){
//            echo 'index no - '. $key. ' value - ' . $item.'<br/>';
//        }
    }
}