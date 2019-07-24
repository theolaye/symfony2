<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190724112530 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE partenaire (id INT AUTO_INCREMENT NOT NULL, idsuperadmin_id INT NOT NULL, nom VARCHAR(255) NOT NULL, rs VARCHAR(255) NOT NULL, ninea INT NOT NULL, adresse VARCHAR(255) NOT NULL, telephone INT NOT NULL, INDEX IDX_32FFA373DB899C1A (idsuperadmin_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE partenaire ADD CONSTRAINT FK_32FFA373DB899C1A FOREIGN KEY (idsuperadmin_id) REFERENCES superadmin (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE partenaire');
    }
}
