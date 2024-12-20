<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241118090948 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE album (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, artist_id INTEGER NOT NULL, title VARCHAR(255) NOT NULL, date DATE NOT NULL, CONSTRAINT FK_39986E43B7970CF8 FOREIGN KEY (artist_id) REFERENCES artiste (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_39986E43B7970CF8 ON album (artist_id)');
        $this->addSql('CREATE TABLE artiste (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, style VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE chanson (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, album_id INTEGER DEFAULT NULL, title VARCHAR(255) NOT NULL, length INTEGER NOT NULL, CONSTRAINT FK_A2E637C21137ABCF FOREIGN KEY (album_id) REFERENCES album (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_A2E637C21137ABCF ON chanson (album_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE album');
        $this->addSql('DROP TABLE artiste');
        $this->addSql('DROP TABLE chanson');
    }
}
