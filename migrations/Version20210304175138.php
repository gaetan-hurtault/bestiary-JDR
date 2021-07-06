<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210304175138 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE part_region (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, icon VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE region ADD part_region_id INT DEFAULT NULL, DROP part');
        $this->addSql('ALTER TABLE region ADD CONSTRAINT FK_F62F176580B3F7D FOREIGN KEY (part_region_id) REFERENCES part_region (id)');
        $this->addSql('CREATE INDEX IDX_F62F176580B3F7D ON region (part_region_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE region DROP FOREIGN KEY FK_F62F176580B3F7D');
        $this->addSql('DROP TABLE part_region');
        $this->addSql('DROP INDEX IDX_F62F176580B3F7D ON region');
        $this->addSql('ALTER TABLE region ADD part VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, DROP part_region_id');
    }
}
