<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231106180723 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE wheel_size (id INT AUTO_INCREMENT NOT NULL, slug VARCHAR(255) NOT NULL, wheel_size VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE wheels_brand_wheel_size (wheels_brand_id INT NOT NULL, wheel_size_id INT NOT NULL, INDEX IDX_A3D862599DAB8EB9 (wheels_brand_id), INDEX IDX_A3D8625912503765 (wheel_size_id), PRIMARY KEY(wheels_brand_id, wheel_size_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE wheels_brand_wheel_size ADD CONSTRAINT FK_A3D862599DAB8EB9 FOREIGN KEY (wheels_brand_id) REFERENCES wheels_brand (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE wheels_brand_wheel_size ADD CONSTRAINT FK_A3D8625912503765 FOREIGN KEY (wheel_size_id) REFERENCES wheel_size (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE wheels_brand_wheel_size DROP FOREIGN KEY FK_A3D862599DAB8EB9');
        $this->addSql('ALTER TABLE wheels_brand_wheel_size DROP FOREIGN KEY FK_A3D8625912503765');
        $this->addSql('DROP TABLE wheel_size');
        $this->addSql('DROP TABLE wheels_brand_wheel_size');
    }
}
