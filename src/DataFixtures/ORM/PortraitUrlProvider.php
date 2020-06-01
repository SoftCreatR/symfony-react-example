<?php
 
namespace App\DataFixtures\ORM;
 
use Faker\Provider\Base as BaseProvider;
use Faker\Generator;
 
class PortraitUrlProvider extends BaseProvider
{
    private const URL = 'https://randomuser.me/api/portraits/%s/%d.jpg';

    public function __construct(Generator $generator)
    {
        parent::__construct($generator);
    }
 
    public function randomPortraitUrl($gender = null)
    {
        $genders = ['men', 'women'];

        if (null === $gender) {
            $gender = $genders[array_rand($genders)];
        }

        return sprintf(self::URL, $gender, random_int(0, 99));
    }
}
