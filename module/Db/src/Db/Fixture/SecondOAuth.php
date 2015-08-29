<?php

namespace Db\Fixture;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Db\Entity;
use SecondOAuth\Entity as OAuthEntity;
use Zend\Crypt\Password\Bcrypt;

class SecondOAuth implements FixtureInterface
{
    public function load(ObjectManager $objectManager)
    {
        $admin = new Entity\SecondUser();
        $admin->setDisplayName('Administrator');
        $admin->setUsername('administrator');
        $admin->setEmail('administrator@doctrine-skeleton-second');
        $bcrypt = new Bcrypt();
        $bcrypt->setCost(14);
        $admin->setPassword($bcrypt->create('password'));
        $objectManager->persist($admin);

        $user = new Entity\SecondUser();
        $user->setDisplayName('User');
        $user->setUsername('user');
        $user->setEmail('user@doctrine-skeleton-second');
        $bcrypt = new Bcrypt();
        $bcrypt->setCost(14);
        $user->setPassword($bcrypt->create('password'));
        $objectManager->persist($user);

        $client = new OAuthEntity\Client();
        $client->setUser($admin);
        $client->setClientId('doctrine-skeleton-second');
        $client->setSecret($bcrypt->create('password'));
        $client->setGrantType(array(
            'authorization_code',
            'client_credentials',
            'refresh_token',
            'implicit',
            'urn:ietf:params:oauth:grant-type:jwt-bearer',
        ));
        $objectManager->persist($client);

        $artist1 = new Entity\SecondArtist();
        $artist1->setName('String Cheese Incident');
        $objectManager->persist($artist1);

        $artist2 = new Entity\SecondArtist();
        $artist2->setName('Keller Williams');
        $objectManager->persist($artist2);

        $album1 = new Entity\SecondAlbum();
        $album1->setSecondArtist($artist1);
        $album1->setName('Born on the Wrong Planet');
        $objectManager->persist($album1);

        $album2 = new Entity\SecondAlbum();
        $album2->setSecondArtist($artist2);
        $album2->setName('Laugh');
        $objectManager->persist($album2);

        $objectManager->flush();
    }
}
