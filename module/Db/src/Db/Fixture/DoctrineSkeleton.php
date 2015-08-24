<?php

namespace Db\Fixture;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Db\Entity;
use ZF\OAuth2\Doctrine\Entity as OAuthEntity;
use Zend\Crypt\Password\Bcrypt;

class Role implements FixtureInterface
{
    public function load(ObjectManager $objectManager)
    {
        $admin = new Entity\User();
        $admin->setDisplayName('Administrator');
        $admin->setUsername('administrator');
        $admin->setEmail('administrator@doctrine-skeleton');
        $bcrypt = new Bcrypt();
        $bcrypt->setCost(14);
        $admin->setPassword($bcrypt->create('password'));
        $objectManager->persist($admin);

        $user = new Entity\User();
        $user->setDisplayName('User');
        $user->setUsername('user');
        $user->setEmail('user@doctrine-skeleton');
        $bcrypt = new Bcrypt();
        $bcrypt->setCost(14);
        $user->setPassword($bcrypt->create('password'));
        $objectManager->persist($user);

        $client = new OAuthEntity\Client();
        $client->setUser($admin);
        $client->setClientId('doctrine-skeleton');
        $client->setSecret($bcrypt->create('password'));
        $client->setGrantType(array(
            'authorization_code',
            'client_credentials',
            'refresh_token',
            'implicit',
            'urn:ietf:params:oauth:grant-type:jwt-bearer',
        ));
        $objectManager->persist($client);

        $artist1 = new Entity\Artist();
        $artist1->setName('Grateful Dead');
        $objectManager->persist($artist1);

        $artist2 = new Entity\Artist();
        $artist2->setName('Phish');
        $objectManager->persist($artist2);

        $album1 = new Entity\Album();
        $album1->setArtist($artist1);
        $album1->setName('American Beauty');
        $objectManager->persist($album1);

        $album2 = new Entity\Album();
        $album2->setArtist($artist2);
        $album2->setName('Farmhouse');
        $objectManager->persist($album2);

        $objectManager->flush();
    }
}
