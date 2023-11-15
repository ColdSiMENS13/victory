<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231114185024 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE wheels (id INT AUTO_INCREMENT NOT NULL, name_id INT NOT NULL, wheels_diameter VARCHAR(255) NOT NULL, wheels_height INT NOT NULL, wheels_width INT NOT NULL, INDEX IDX_4C07AA8171179CD6 (name_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE wheels_brand (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE wheels ADD CONSTRAINT FK_4C07AA8171179CD6 FOREIGN KEY (name_id) REFERENCES wheels_brand (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE wheels DROP FOREIGN KEY FK_4C07AA8171179CD6');
        $this->addSql('DROP TABLE wheels');
        $this->addSql('DROP TABLE wheels_brand');
    }
}
