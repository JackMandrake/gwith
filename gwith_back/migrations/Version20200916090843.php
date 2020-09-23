<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200916090843 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE scene ADD story_id INT NOT NULL');
        $this->addSql('ALTER TABLE scene ADD CONSTRAINT FK_D979EFDAAA5D4036 FOREIGN KEY (story_id) REFERENCES story (id)');
        $this->addSql('CREATE INDEX IDX_D979EFDAAA5D4036 ON scene (story_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE scene DROP FOREIGN KEY FK_D979EFDAAA5D4036');
        $this->addSql('DROP INDEX IDX_D979EFDAAA5D4036 ON scene');
        $this->addSql('ALTER TABLE scene DROP story_id');
    }
}