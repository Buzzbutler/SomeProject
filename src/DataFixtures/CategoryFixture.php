<?php


namespace App\DataFixtures;


use App\Entity\Category;
use Doctrine\Common\Persistence\ObjectManager;

class CategoryFixture extends BaseFixture
{

    private static $productCategory = [
        'Electronics',
        'Fashion',
        'Home and Garden',
        'Toys and Hobbies',
        'Other Categories',
    ];

    protected function loadData(ObjectManager $manager)
    {
        $this->createUser(5, 'main_categorys', function($i) use ($manager) {

            $category = new Category();
            $category->setName(self::$productCategory[$i]);

            return $category;
        });

        $manager->flush();

    }
}