<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190711194038 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE plateformes CHANGE description description LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE temoignages CHANGE message message LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE contacts CHANGE message message LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE equipes CHANGE background background LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE apropos CHANGE description description LONGTEXT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE apropos CHANGE description description VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE contacts CHANGE message message VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE equipes CHANGE background background VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE plateformes CHANGE description description VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE temoignages CHANGE message message VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci');
    }
}
