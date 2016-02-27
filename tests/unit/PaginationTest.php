<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 27.02.2016
 * Time: 16:16
 */

class PaginationTest extends \PHPUnit_Framework_TestCase
{
    function paginationProvider(){
        return [
            [
                $post = 100, $page = 1, $countPage = 5, $leftRight = 2,
                [
                    1 => 1,
                    2 => 2,
                    3 => 3,
                    20 => 20,
                ],
            ],
            [
                $post = 100, $page = 2, $countPage = 5, $leftRight = 2,
                [
                    1 => 1,
                    2 => 2,
                    3 => 3,
                    20 => 20,
                ],
            ],
            [
                $post = 100, $page = 3, $countPage = 5, $leftRight = 2,
                [
                    1 => 1,
                    2 => 2,
                    3 => 3,
                    20 => 20,
                ],
            ],
            [
                $post = 100, $page = 18, $countPage = 5, $leftRight = 2,
                [
                    1 => 1,
                    18 => 18,
                    19 => 19,
                    20 => 20,
                ],
                $post = 100, $page = 19, $countPage = 5, $leftRight = 2,
                [
                    1 => 1,
                    18 => 18,
                    19 => 19,
                    20 => 20,
                ],
                $post = 100, $page = 20, $countPage = 5, $leftRight = 2,
                [
                    1 => 1,
                    18 => 18,
                    19 => 19,
                    20 => 20,
                ],
                $post = 100, $page = 11, $countPage = 5, $leftRight = 2,
                [
                    1 => 1,
                    9 => 9,
                    10 => 10,
                    11 => 11,
                    12 => 12,
                    13 => 14,
                    20 => 20,
                ],
                $post = 100, $page = 12, $countPage = 5, $leftRight = 2,
                [
                    1 => 1,
                    10 => 10,
                    11 => 11,
                    12 => 12,
                    13 => 14,
                    14 => 14,
                    20 => 20,
                ],
            ],
        ];
    }

    /**
     * @dataProvider paginationProvider
     */
    public function testPagenation($post, $page, $countPage, $leftRight, $expect)
    {
        $this->assertEquals($expect, pagination($page, $countPage, $leftRight, $post));
    }
}