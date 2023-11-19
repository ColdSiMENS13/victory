<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231114194802 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE wheels (id INT AUTO_INCREMENT NOT NULL, wheels_diameter VARCHAR(255) NOT NULL, wheels_height INT NOT NULL, wheels_width INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE wheels_brand (id INT AUTO_INCREMENT NOT NULL, wheels_id INT NOT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_9D4619934C3A750B (wheels_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE wheels_brand ADD CONSTRAINT FK_9D4619934C3A750B FOREIGN KEY (wheels_id) REFERENCES wheels (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE wheels_brand DROP FOREIGN KEY FK_9D4619934C3A750B');
        $this->addSql('DROP TABLE wheels');
        $this->addSql('DROP TABLE wheels_brand');
    }
}
