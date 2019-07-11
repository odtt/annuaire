<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190705175206 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649D60322AC');
        $this->addSql('ALTER TABLE plateforme DROP FOREIGN KEY FK_3C020C11A76ED395');
        $this->addSql('CREATE TABLE plateformes (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, nom VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, url_logo VARCHAR(255) DEFAULT NULL, url VARCHAR(255) NOT NULL, visible VARCHAR(255) NOT NULL, INDEX IDX_7182EDF5A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contacts (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, sujet VARCHAR(255) DEFAULT NULL, message VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE equipes (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, background VARCHAR(255) DEFAULT NULL, url_photo VARCHAR(255) DEFAULT NULL, twitter VARCHAR(255) DEFAULT NULL, facebook VARCHAR(255) DEFAULT NULL, instagram VARCHAR(255) DEFAULT NULL, visible TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE faqs (id INT AUTO_INCREMENT NOT NULL, questions VARCHAR(255) NOT NULL, reponses VARCHAR(255) NOT NULL, visible TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE newsletters (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE partenaires (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, url_logo VARCHAR(255) DEFAULT NULL, visible TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE roles (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE temoignages (id INT AUTO_INCREMENT NOT NULL, nom_dutilisateur VARCHAR(255) NOT NULL, url_photo VARCHAR(255) DEFAULT NULL, profession VARCHAR(255) DEFAULT NULL, message VARCHAR(255) NOT NULL, visible TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateurs (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(40) NOT NULL, email VARCHAR(180) NOT NULL, password VARCHAR(255) NOT NULL, roles JSON NOT NULL, UNIQUE INDEX UNIQ_497B315EF85E0677 (username), UNIQUE INDEX UNIQ_497B315EE7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE plateformes ADD CONSTRAINT FK_7182EDF5A76ED395 FOREIGN KEY (user_id) REFERENCES utilisateurs (id)');
        $this->addSql('DROP TABLE contact');
        $this->addSql('DROP TABLE equipe');
        $this->addSql('DROP TABLE faq');
        $this->addSql('DROP TABLE newsletter');
        $this->addSql('DROP TABLE partenaire');
        $this->addSql('DROP TABLE plateforme');
        $this->addSql('DROP TABLE role');
        $this->addSql('DROP TABLE temoignage');
        $this->addSql('DROP TABLE user');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE plateformes DROP FOREIGN KEY FK_7182EDF5A76ED395');
        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, email VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, sujet VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, message VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE equipe (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, prenom VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, background VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, url_photo VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, twitter VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, facebook VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, instagram VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, visible TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE faq (id INT AUTO_INCREMENT NOT NULL, questions VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, reponses VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, visible TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE newsletter (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE partenaire (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, url_logo VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, visible TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE plateforme (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, nom VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, description VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, url_logo VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, url VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, visible VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, INDEX IDX_3C020C11A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE role (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, description VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE temoignage (id INT AUTO_INCREMENT NOT NULL, nom_dutilisateur VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, url_photo VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, profession VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, message VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, visible TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, role_id INT DEFAULT NULL, username VARCHAR(40) NOT NULL COLLATE utf8mb4_unicode_ci, email VARCHAR(180) NOT NULL COLLATE utf8mb4_unicode_ci, password VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), INDEX IDX_8D93D649D60322AC (role_id), UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE plateforme ADD CONSTRAINT FK_3C020C11A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649D60322AC FOREIGN KEY (role_id) REFERENCES role (id)');
        $this->addSql('DROP TABLE plateformes');
        $this->addSql('DROP TABLE contacts');
        $this->addSql('DROP TABLE equipes');
        $this->addSql('DROP TABLE faqs');
        $this->addSql('DROP TABLE newsletters');
        $this->addSql('DROP TABLE partenaires');
        $this->addSql('DROP TABLE roles');
        $this->addSql('DROP TABLE temoignages');
        $this->addSql('DROP TABLE utilisateurs');
    }
}
